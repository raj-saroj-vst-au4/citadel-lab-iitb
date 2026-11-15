<?php
/** Bottom of every page: closes <main>, then the footer. */
$footer_email = key($site['emails']);
?>
  </main>

  <footer class="site-footer">
    <div class="wrap">
      <div class="site-footer__grid">
        <div class="site-footer__brand">
          <div class="site-footer__logos">
            <img src="assets/images/iitblogo.png" alt="IIT Bombay" width="300" height="292" loading="lazy">
            <img src="assets/images/citadellogo.png" alt="Citadel Securities" width="1024" height="80" loading="lazy">
          </div>
          <p class="site-footer__name">IITB–Citadel<br>Quantitative Research Lab</p>
          <p><?= e($site['tagline']) ?></p>
        </div>

        <nav aria-label="Footer">
          <h2>Quick Links</h2>
          <ul>
<?php foreach ($site['nav'] as $id => $label): ?>
            <li><a href="<?= e(url($id)) ?>"><?= e($label) ?></a></li>
<?php endforeach; ?>
          </ul>
        </nav>

        <div>
          <h2>Contact Info</h2>
          <ul class="site-footer__contact">
            <li>
              <?= icon('pin') ?>

              <address>
<?php foreach (array_slice($site['address'], 1) as $line): ?>
                <?= e($line) ?><br>
<?php endforeach; ?>
                India
              </address>
            </li>
            <li>
              <?= icon('mail') ?>

              <a href="mailto:<?= e($footer_email) ?>"><?= e($footer_email) ?></a>
            </li>
            <li>
              <?= icon('phone') ?>

              <a href="tel:<?= e($site['footer_phone']['tel']) ?>"><?= e($site['footer_phone']['display']) ?></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="site-footer__base">
        <p>© <?= date('Y') ?> <?= e($site['name_plain']) ?>. All rights reserved.</p>
        <p><a href="https://www.som.iitb.ac.in/" target="_blank" rel="noopener">Shailesh J. Mehta School of Management</a>, <a href="https://www.iitb.ac.in/" target="_blank" rel="noopener">IIT Bombay</a></p>
      </div>
    </div>
  </footer>
</body>
</html>
