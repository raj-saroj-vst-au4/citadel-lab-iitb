<?php
/**
 * Loaded first by every page. Reads the content files and defines the small
 * helper functions the pages use. Nothing here prints anything.
 */

define('SITE_ROOT', dirname(__DIR__));

$site     = require SITE_ROOT . '/content/site.php';
$people   = require SITE_ROOT . '/content/people.php';
$research = require SITE_ROOT . '/content/research.php';
$programs = require SITE_ROOT . '/content/programs.php';
$events   = require SITE_ROOT . '/content/events.php';

// An upcoming event drops off the site by itself once its last day is over.
$today = date('Y-m-d');
$events['upcoming'] = array_values(array_filter($events['upcoming'], function ($event) use ($today) {
    $last = !empty($event['end_date']) ? $event['end_date'] : $event['date'];
    return $last >= $today;
}));

// Everyone by key, so a project can name its investigators.
$person_index = [];
foreach (['staff', 'researchers', 'faculty', 'leads'] as $group) {
    foreach ($people[$group] as $key => $person) {
        $person_index[$key] = $person;
    }
}

/** Escape text for HTML. Everything from content/ goes through this. */
function e($text)
{
    return htmlspecialchars((string) $text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Link to a page: url('people'), url('programs', 'phd'), url('home'). */
function url($page = 'home', $anchor = '')
{
    return ($page === 'home' ? './' : $page) . ($anchor !== '' ? '#' . $anchor : '');
}

/** Path to a file, with its modification time so browsers refetch it when it changes. */
function asset($path)
{
    $file = SITE_ROOT . '/' . $path;
    return e($path . (is_file($file) ? '?v=' . filemtime($file) : ''));
}

function initials($name)
{
    $name  = preg_replace('/^(Prof|Dr|Mr|Ms|Mrs|Mohd)\.?\s+/', '', $name);
    $name  = preg_replace('/,.*$/', '', $name);
    $words = preg_split('/[\s.]+/', trim($name), -1, PREG_SPLIT_NO_EMPTY);
    if (!$words) {
        return '';
    }
    $last = count($words) > 1 ? substr($words[count($words) - 1], 0, 1) : '';
    return strtoupper(substr($words[0], 0, 1) . $last);
}

/** A person's photo, or their initials when there is no photo file. */
function avatar($person, $class, $pixels, $alt = '')
{
    $photo = isset($person['photo']) ? $person['photo'] : null;
    $file  = 'assets/img/people/' . $photo . '.webp';
    if ($photo && is_file(SITE_ROOT . '/' . $file)) {
        return '<img class="' . e($class) . '" src="' . asset($file) . '" alt="' . e($alt) . '" width="' . (int) $pixels
            . '" height="' . (int) $pixels . '" loading="lazy" decoding="async">';
    }
    return '<span class="' . e($class) . ' avatar--initials" aria-hidden="true">' . e(initials($person['name'])) . '</span>';
}

/** "2026-04-07" becomes "April 7, 2026". */
function long_date($ymd)
{
    $date = DateTime::createFromFormat('!Y-m-d', $ymd);
    return $date ? $date->format('F j, Y') : $ymd;
}

/** "March 4–6, 2027", "March 30 – April 2, 2027", or one date when there is no end. */
function date_range($start, $end = '')
{
    $a = DateTime::createFromFormat('!Y-m-d', $start);
    $b = $end ? DateTime::createFromFormat('!Y-m-d', $end) : null;
    if (!$a) {
        return $start;
    }
    if (!$b || $b == $a) {
        return $a->format('F j, Y');
    }
    if ($a->format('Y-m') === $b->format('Y-m')) {
        return $a->format('F j') . '–' . $b->format('j, Y');
    }
    if ($a->format('Y') === $b->format('Y')) {
        return $a->format('F j') . ' – ' . $b->format('F j, Y');
    }
    return $a->format('F j, Y') . ' – ' . $b->format('F j, Y');
}

/** "2027-03-04" becomes "Thursday, March 4". */
function day_label($ymd)
{
    $date = DateTime::createFromFormat('!Y-m-d', $ymd);
    return $date ? $date->format('l, F j') : $ymd;
}

/** Label for an outside link, guessed from its address. */
function link_label($url)
{
    if (strpos($url, 'linkedin.com') !== false) {
        return 'LinkedIn';
    }
    if (strpos($url, 'github.com') !== false) {
        return 'GitHub';
    }
    return 'Homepage';
}

/** A small line icon. Shapes are from the Feather set (MIT licence). */
function icon($name)
{
    $shapes = [
        'chart'    => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
        'building' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        'book'     => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
        'spark'    => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'award'    => '<circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>',
        'monitor'  => '<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>',
        'calendar' => '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
        'pin'      => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'mail'     => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
        'phone'    => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'check'    => '<polyline points="20 6 9 17 4 12"/>',
        'menu'     => '<line x1="3" y1="7" x2="21" y2="7"/><line x1="3" y1="17" x2="21" y2="17"/>',
        'close'    => '<line x1="5" y1="5" x2="19" y2="19"/><line x1="19" y1="5" x2="5" y2="19"/>',
        'clock'    => '<circle cx="12" cy="12" r="9"/><polyline points="12 7 12 12 15.5 14"/>',
        'left'     => '<polyline points="15 18 9 12 15 6"/>',
        'right'    => '<polyline points="9 18 15 12 9 6"/>',
        'pause'    => '<line x1="9" y1="5" x2="9" y2="19"/><line x1="15" y1="5" x2="15" y2="19"/>',
        'play'     => '<polygon points="8 5 19 12 8 19 8 5"/>',
    ];
    if (!isset($shapes[$name])) {
        return '';
    }
    return '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'
        . $shapes[$name] . '</svg>';
}
