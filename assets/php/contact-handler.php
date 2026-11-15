<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Configuration
$config = [
    'smtp_host' => 'smtp-auth.iitb.ac.in', // Change to your SMTP server
    'smtp_port' => 587,
    'smtp_username' => '', // set in mail-config.local.php
    'smtp_password' => '', // set in mail-config.local.php, never here
    'from_email' => 'office.citadel@iitb.ac.in',
    'from_name' => 'IITB-Citadel Research Lab',
    'to_email' => 'pic.citadel@iitb.ac.in', // Recipient email
    'to_name' => 'IITB-Citadel Lab Team'
];

// The SMTP login is not in this file (which is in git). It is read from
// mail-config.local.php beside it, then from a file outside the web root if
// one exists, which overrides it. Each returns an array with any of the keys
// above, e.g.
//     <?php return ['smtp_username' => '...', 'smtp_password' => '...'];
// See "The contact form" in CLAUDE.md.
$configFiles = [
    __DIR__ . '/mail-config.local.php',                               // next to this file, not in git
    getenv('CITADEL_MAIL_CONFIG') ?: '/etc/citadel/mail-config.php',  // outside the web root; wins
];
foreach ($configFiles as $configFile) {
    if (@is_readable($configFile)) {
        $override = require $configFile;
        if (is_array($override)) {
            $config = array_merge($config, $override);
        }
    }
}

// Messages accepted from one network address in an hour.
const MAX_PER_HOUR = 20;

// value => label. Keep in step with 'inquiry_types' in content/site.php.
$inquiryTypes = [
    'research' => 'Research Collaboration',
    'program'  => 'Academic Programs',
    'industry' => 'Industry Partnership',
    'media'    => 'Media Inquiry',
    'other'    => 'Other',
];

/** Send a JSON answer and stop. */
function respond($status, $payload)
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    header('Cache-Control: no-store');
    echo json_encode($payload);
    exit;
}

/** Escape text for the HTML version of the email. */
function h($text)
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function cut($text, $max)
{
    return function_exists('mb_substr') ? mb_substr($text, 0, $max, 'UTF-8') : substr($text, 0, $max);
}

/** One line of text: control characters (including line breaks) become spaces. */
function cleanLine($value, $max)
{
    $value = is_string($value) ? preg_replace('/[\x00-\x1F\x7F]+/u', ' ', $value) : '';
    return cut(trim((string) $value), $max);
}

/** Several lines of text: line breaks are kept, other control characters go. */
function cleanText($value, $max)
{
    $value = is_string($value) ? str_replace(["\r\n", "\r"], "\n", $value) : '';
    $value = preg_replace('/[\x00-\x09\x0B-\x1F\x7F]+/u', ' ', $value);
    return cut(trim((string) $value), $max);
}

/**
 * Read the form. Values are stored as typed; they are escaped where they are
 * printed (once), not here.
 */
function readForm($post)
{
    $field = function ($name) use ($post) {
        return isset($post[$name]) ? $post[$name] : '';
    };
    return [
        'firstName'    => cleanLine($field('firstName'), 100),
        'lastName'     => cleanLine($field('lastName'), 100),
        'email'        => cleanLine($field('email'), 254),
        'organization' => cleanLine($field('organization'), 200),
        'inquiry'      => cleanLine($field('inquiry'), 20),
        'message'      => cleanText($field('message'), 5000),
        'terms'        => !empty($post['terms']),
    ];
}

function validateForm($data, $inquiryTypes)
{
    $errors = [];

    if ($data['firstName'] === '') {
        $errors[] = 'First name is required';
    }
    if ($data['lastName'] === '') {
        $errors[] = 'Last name is required';
    }
    if ($data['email'] === '' || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email address is required';
    }
    if ($data['message'] === '') {
        $errors[] = 'Message is required';
    }
    if (!$data['terms']) {
        $errors[] = 'Please tick the box to agree before submitting';
    }
    if (!isset($inquiryTypes[$data['inquiry']])) {
        $errors[] = 'Please choose an inquiry type';
    }

    return $errors;
}

/**
 * Count this message against the sender's address. Returns false once the
 * address has reached $max in the last $window seconds. If the count cannot
 * be kept (no writable temp folder), the message is let through.
 */
function withinRateLimit($address, $max, $window)
{
    $file   = rtrim(sys_get_temp_dir(), '/') . '/citadel-contact-' . md5($address) . '.json';
    $handle = @fopen($file, 'c+');
    if (!$handle) {
        return true;
    }

    $allowed = true;
    if (flock($handle, LOCK_EX)) {
        $now   = time();
        $times = json_decode((string) stream_get_contents($handle), true);
        $times = is_array($times) ? $times : [];
        $times = array_values(array_filter($times, function ($time) use ($now, $window) {
            return is_int($time) && $time > $now - $window;
        }));
        if (count($times) >= $max) {
            $allowed = false;
        } else {
            $times[] = $now;
        }
        ftruncate($handle, 0);
        rewind($handle);
        fwrite($handle, json_encode($times));
        fflush($handle);
        flock($handle, LOCK_UN);
    }
    fclose($handle);

    return $allowed;
}

function generateEmailBody($data, $inquiryTypes)
{
    $organization = $data['organization'] === '' ? 'Not provided' : $data['organization'];

    return "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #002868; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f3f6fb; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #555; }
            .value { margin-left: 10px; }
            .message-box { background-color: white; padding: 15px; border-left: 4px solid #002868; margin-top: 15px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
                <p>IITB-Citadel Securities Quantitative Research Lab</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span>
                    <span class='value'>" . h($data['firstName'] . ' ' . $data['lastName']) . "</span>
                </div>
                <div class='field'>
                    <span class='label'>Email:</span>
                    <span class='value'>" . h($data['email']) . "</span>
                </div>
                <div class='field'>
                    <span class='label'>Organization:</span>
                    <span class='value'>" . h($organization) . "</span>
                </div>
                <div class='field'>
                    <span class='label'>Inquiry Type:</span>
                    <span class='value'>" . h($inquiryTypes[$data['inquiry']]) . "</span>
                </div>
                <div class='field'>
                    <span class='label'>Submission Time:</span>
                    <span class='value'>" . date('Y-m-d H:i:s') . "</span>
                </div>
                <div class='message-box'>
                    <div class='label'>Message:</div>
                    <p>" . nl2br(h($data['message'])) . "</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
}

function generatePlainTextBody($data, $inquiryTypes)
{
    $organization = $data['organization'] === '' ? 'Not provided' : $data['organization'];

    return "New Contact Form Submission - IITB-Citadel Securities Quantitative Research Lab

Name: {$data['firstName']} {$data['lastName']}
Email: {$data['email']}
Organization: {$organization}
Inquiry Type: {$inquiryTypes[$data['inquiry']]}
Submission Time: " . date('Y-m-d H:i:s') . "

Message:
{$data['message']}
";
}

/** Returns true when the mail server accepted the message. */
function sendContactEmail($data, $config, $inquiryTypes)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host     = $config['smtp_host'];
        $mail->Port     = $config['smtp_port'];
        $mail->SMTPAuth = isset($config['smtp_auth']) ? (bool) $config['smtp_auth'] : true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->Timeout  = 15;
        $mail->CharSet  = 'UTF-8';

        // STARTTLS unless the settings file says otherwise ('' turns encryption off).
        $secure = array_key_exists('smtp_secure', $config) ? $config['smtp_secure'] : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPSecure = (string) $secure;
        if ($mail->SMTPSecure === '') {
            $mail->SMTPAutoTLS = false;
        }

        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($config['to_email'], $config['to_name']);
        $mail->addReplyTo($data['email'], trim($data['firstName'] . ' ' . $data['lastName']));

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission - ' . ucfirst($data['inquiry']);
        $mail->Body    = generateEmailBody($data, $inquiryTypes);
        $mail->AltBody = generatePlainTextBody($data, $inquiryTypes);

        $mail->send();
        return true;
    } catch (Exception $e) {
        // PHPMailer's own exception: the mail server refused or could not be reached.
        error_log("PHPMailer Error: {$mail->ErrorInfo}");
        return false;
    }
}

// ------------------------------------------------------------- request ----

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, ['success' => false, 'message' => 'This address only accepts the contact form.']);
}

try {
    // Browsers label requests that come from another website; refuse those.
    $fetchSite = isset($_SERVER['HTTP_SEC_FETCH_SITE']) ? $_SERVER['HTTP_SEC_FETCH_SITE'] : '';
    if ($fetchSite === 'cross-site') {
        respond(403, ['success' => false, 'message' => 'This form can only be submitted from the lab website.']);
    }

    // The form has a field people never see. Anything that fills it in is a
    // bot: answer as if the message went through, and send nothing.
    if (!empty($_POST['website'])) {
        respond(200, ['success' => true, 'message' => 'Message sent successfully!']);
    }

    $form   = readForm($_POST);
    $errors = validateForm($form, $inquiryTypes);
    if ($errors) {
        respond(422, ['success' => false, 'message' => 'Validation failed', 'errors' => $errors]);
    }

    $address = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
    if (!withinRateLimit($address, MAX_PER_HOUR, 3600)) {
        respond(429, ['success' => false, 'message' => 'Too many messages have come from your network in the last hour. Please try again later.']);
    }

    if (sendContactEmail($form, $config, $inquiryTypes)) {
        respond(200, ['success' => true, 'message' => 'Message sent successfully!']);
    }
    respond(502, ['success' => false, 'message' => 'Failed to send message. Please try again later.']);
} catch (\Throwable $e) {
    // \Throwable, not Exception: this file imports PHPMailer's Exception class
    // under that name, which would let every ordinary PHP error slip past.
    error_log('Contact form error: ' . $e->getMessage());
    respond(500, ['success' => false, 'message' => 'An error occurred. Please try again later.']);
}
