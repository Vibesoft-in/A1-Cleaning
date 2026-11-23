<?php
/**
 * Footer Component - Ditto OwnWash Architecture for A1 Cleaning
 * Color Palette:
 * - Deep Green:  #0B2922
 * - Fresh Green: #22A06B
 * - Soft Mint:   #EAF3EE
 * - White:       #FFFFFF
 */
require_once __DIR__ . '/../../backend/config/config.php';
require_once __DIR__ . '/icons.php';
$servicesList = require __DIR__ . '/../../backend/data/services.php';
$citiesList = require __DIR__ . '/../../backend/data/cities.php';
?>

<?php if (empty($hideFooter) && ($currentRoute ?? '') !== 'account'): ?>
<footer class="theme-footer">
  <div class="container">
    <div class="footer-grid-theme">
      <!-- Col 1: Brand & Bio -->
      <div class="footer-col-brand">
        <a href="<?= SITE_URL ?>/" class="site-logo" style="margin-bottom: 1.25rem; display: inline-block;">
          <img src="<?= SITE_URL ?>/assets/images/brand/logo-horizontal-dark.png" alt="A1 Cleaning" width="220" height="64">
        </a>
        <p class="brand-tagline-text">
          India's trusted doorstep mechanized cleaning &amp; sanitization platform. Delivering certified hygiene for homes, offices, and resorts across Uttarakhand.
        </p>
        <div class="footer-badges-row">
          <span class="footer-cert-badge"><span class="material-symbols-outlined icon-sm">verified_user</span> Certified Experts</span>
          <span class="footer-cert-badge"><span class="material-symbols-outlined icon-sm">eco</span> 100% Eco-Safe</span>
        </div>
      </div>

      <!-- Col 2: Quick Links -->
      <div class="footer-col">
        <h4 class="footer-heading">Quick Links</h4>
        <ul class="footer-nav-list">
          <li><a href="<?= SITE_URL ?>/">Home</a></li>
          <li><a href="<?= SITE_URL ?>/services/">All Services</a></li>
          <li><a href="<?= SITE_URL ?>/reviews/">Customer Reviews</a></li>
          <li><a href="<?= SITE_URL ?>/about/">About A1 Cleaning</a></li>
          <li><a href="<?= SITE_URL ?>/pricing/">Transparent Pricing</a></li>
          <li><a href="<?= SITE_URL ?>/contact/">Customer Support</a></li>
        </ul>
      </div>

      <!-- Col 3: Services Catalog -->
      <div class="footer-col">
        <h4 class="footer-heading">Our Services</h4>
        <ul class="footer-nav-list">
          <li><a href="<?= SITE_URL ?>/services/home-cleaning/">Home Deep Cleaning</a></li>
          <li><a href="<?= SITE_URL ?>/services/sofa-cleaning/">Sofa &amp; Fabric Shampooing</a></li>
          <li><a href="<?= SITE_URL ?>/services/kitchen-cleaning/">Kitchen Chimney &amp; Deep Clean</a></li>
          <li><a href="<?= SITE_URL ?>/services/bathroom-cleaning/">Bathroom Descaling</a></li>
          <li><a href="<?= SITE_URL ?>/services/water-tank-cleaning/">6-Stage Water Tank Clean</a></li>
          <li><a href="<?= SITE_URL ?>/services/carpet-cleaning/">Carpet &amp; Rug Washing</a></li>
          <li><a href="<?= SITE_URL ?>/services/commercial-cleaning/">Commercial &amp; Office Clean</a></li>
        </ul>
      </div>

      <!-- Col 4: Contact & Service Hub -->
      <div class="footer-col">
        <h4 class="footer-heading">Doorstep Helpline</h4>
        <div class="footer-contact-item">
          <span class="contact-icon"><span class="material-symbols-outlined icon-sm">call</span></span>
          <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="contact-val"><?= BUSINESS_PHONE ?></a>
        </div>
        <div class="footer-contact-item">
          <span class="contact-icon"><span class="material-symbols-outlined icon-sm">chat</span></span>
          <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="contact-val">WhatsApp Instant Support</a>
        </div>
        <div class="footer-contact-item">
          <span class="contact-icon"><span class="material-symbols-outlined icon-sm">mail</span></span>
          <a href="mailto:<?= BUSINESS_EMAIL ?>" class="contact-val"><?= BUSINESS_EMAIL ?></a>
        </div>
        <div class="footer-contact-item">
          <span class="contact-icon"><span class="material-symbols-outlined icon-sm">location_on</span></span>
          <span class="contact-val"><?= BUSINESS_ADDRESS ?></span>
        </div>
      </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="theme-footer-bottom">
      <div class="container d-flex justify-between align-center flex-wrap gap-2">
        <div>&copy; <?= date('Y') ?> A1 Cleaning. All rights reserved. Doorstep Cleaning &amp; Detailing.</div>
        <div class="footer-policy-links">
          <a href="<?= SITE_URL ?>/privacy/">Privacy Policy</a>
          <span>•</span>
          <a href="<?= SITE_URL ?>/terms/">Terms of Service</a>
          <span>•</span>
          <a href="<?= SITE_URL ?>/sitemap.xml">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php endif; ?>

<!-- Promotional Offer Modal Popup (First Load) -->
<?php require __DIR__ . '/offer-popup.php'; ?>

<!-- Mobile App-Style Bottom Navigation Bar -->
<?php require __DIR__ . '/sticky-cta.php'; ?>

<!-- Client JavaScript -->
<script src="<?= SITE_URL ?>/assets/js/main.js"></script>

</body>
</html>
