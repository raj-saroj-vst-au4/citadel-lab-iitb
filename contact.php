<?php
/** Contact: the enquiry form, the lab's address, emails, phones and a map. */
require __DIR__ . '/partials/bootstrap.php';

$page = [
    'id'          => 'contact',
    'title'       => 'Contact',
    'description' => 'Contact the IITB-Citadel Securities Quantitative Research Lab at IIT Bombay, Powai, Mumbai, for inquiries, collaborations, or more information.',
    'lede'        => 'Connect with the IITB-Citadel Securities Quantitative Research Lab for inquiries, collaborations, or more information',
];
require __DIR__ . '/partials/header.php';

$main_email = key($site['emails']);
?>

    <section class="section" aria-labelledby="form-title">
      <div class="wrap contact">
        <div class="contact__form">
          <h2 id="form-title">Get in Touch</h2>
          <form class="form" id="contact-form" action="assets/php/contact-handler.php" method="post" data-fallback-email="<?= e($main_email) ?>">
            <div class="form__row">
              <div class="field">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" autocomplete="given-name" maxlength="100" required>
              </div>
              <div class="field">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" autocomplete="family-name" maxlength="100" required>
              </div>
            </div>
            <div class="form__row">
              <div class="field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" autocomplete="email" maxlength="254" spellcheck="false" required>
              </div>
              <div class="field">
                <label for="organization">Organization <span class="optional">(optional)</span></label>
                <input type="text" id="organization" name="organization" autocomplete="organization" maxlength="200">
              </div>
            </div>
            <div class="field">
              <label for="inquiry">Inquiry Type</label>
              <select id="inquiry" name="inquiry" required>
                <option value="" selected disabled>Choose one</option>
<?php foreach ($site['inquiry_types'] as $value => $label): ?>
                <option value="<?= e($value) ?>"><?= e($label) ?></option>
<?php endforeach; ?>
              </select>
            </div>
            <div class="field">
              <label for="message">Your Message</label>
              <textarea id="message" name="message" rows="6" maxlength="5000" required></textarea>
            </div>
            <div class="hp" aria-hidden="true">
              <label for="website">Leave this field empty</label>
              <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
            </div>
            <label class="check">
              <input type="checkbox" name="terms" value="1" required>
              <span>I agree that the lab may use these details to reply to me.</span>
            </label>
            <div>
              <button class="btn btn--solid" type="submit">Submit Inquiry</button>
            </div>
            <div class="form__status" data-form-status role="status" tabindex="-1" hidden></div>
          </form>
        </div>

        <aside class="contact__details panel">
          <h2 class="h-sans"><?= e($site['name_plain']) ?></h2>
          <ul class="contact-list">
            <li>
              <span class="icon-box"><?= icon('pin') ?></span>
              <div>
                <h3>Location</h3>
                <address>
<?php foreach ($site['address'] as $line): ?>
                  <?= e($line) ?><br>
<?php endforeach; ?>
                </address>
              </div>
            </li>
            <li>
              <span class="icon-box"><?= icon('mail') ?></span>
              <div>
                <h3>Email</h3>
<?php foreach ($site['emails'] as $address => $who): ?>
                <p><a class="textlink" href="mailto:<?= e($address) ?>"><?= e($address) ?></a></p>
<?php endforeach; ?>
              </div>
            </li>
<?php foreach ($site['phones'] as $phone): ?>
            <li>
              <span class="icon-box"><?= icon('phone') ?></span>
              <div>
                <h3><?= e($phone['label']) ?></h3>
                <p><a class="textlink" href="tel:<?= e($phone['tel']) ?>"><?= e($phone['display']) ?></a></p>
              </div>
            </li>
<?php endforeach; ?>
          </ul>
        </aside>
      </div>
    </section>

    <section class="section section--tint section--flush" aria-labelledby="map-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <h2 id="map-title">Find the Lab</h2>
            <p><?= e(implode(', ', $site['address'])) ?></p>
          </div>
          <a class="btn btn--line" href="<?= e($site['map_link']) ?>" target="_blank" rel="noopener">Open in Google Maps</a>
        </div>
        <iframe class="map" src="<?= e($site['map_embed']) ?>" title="Map showing the lab at the IITB-Monash Research Academy, IIT Bombay" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
      </div>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>
