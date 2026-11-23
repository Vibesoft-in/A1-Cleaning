<?php
/**
 * Contact Us View: /contact/
 * 100% Consistent NAP Data with Google Map & Direct Call/WhatsApp Links
 */
$pageTitle = "Contact A1 Cleaning | Kashipur, Uttarakhand";
$pageDescription = "Call or WhatsApp " . BUSINESS_PHONE . ", email " . BUSINESS_EMAIL . " or visit " . BUSINESS_STREET . ", " . BUSINESS_CITY . " " . BUSINESS_POSTCODE . ".";
$canonicalUrl = SeoHelper::getCanonicalUrl('contact');

require __DIR__ . '/../components/header.php';
?>



<section class="hero-section">
  <div class="container text-center">
    <h1>Contact A1 Cleaning</h1>
    <p class="hero-lead" style="margin-left: auto; margin-right: auto;">
      We are here to help. Reach out to our local team in Kashipur for instant quotes, inquiries, and schedule planning.
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 3rem;">
      <!-- Contact Information & NAP -->
      <div>
        <h2>Get in Touch</h2>
        <p style="color: var(--color-text-muted); margin-bottom: 2rem;">
          Our dispatch office is located in Kashipur, sending professional cleaning units directly to your doorstep in Kashipur, Jaspur, Ramnagar, and nearby towns.
        </p>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">location_on</span></div>
          <div>
            <strong>Registered Office &amp; Operations:</strong><br>
            <?= BUSINESS_NAME ?><br>
            <?= BUSINESS_STREET ?>,<br>
            <?= BUSINESS_CITY ?>, <?= BUSINESS_STATE ?> - <?= BUSINESS_POSTCODE ?>, India
          </div>
        </div>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">call</span></div>
          <div>
            <strong>Phone Numbers:</strong><br>
            <a href="tel:<?= BUSINESS_PHONE_RAW ?>" style="font-weight: 600; font-size: 1.1rem;"><?= BUSINESS_PHONE ?></a>
          </div>
        </div>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">chat</span></div>
          <div>
            <strong>WhatsApp Quick Support:</strong><br>
            <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="btn btn-whatsapp" style="margin-top: 0.5rem; min-height: 40px; padding: 0.4rem 1rem;">
              Chat on WhatsApp
            </a>
          </div>
        </div>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">mail</span></div>
          <div>
            <strong>Official Email:</strong><br>
            <a href="mailto:<?= BUSINESS_EMAIL ?>"><?= BUSINESS_EMAIL ?></a>
          </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 1rem;">
          <div style="font-size: 1.5rem; color: var(--color-accent);">⏱️</div>
          <div>
            <strong>Operating Working Hours:</strong><br>
            Monday to Saturday: 08:00 AM – 07:00 PM<br>
            Sunday: By Prior Appointment
          </div>
        </div>
      </div>

      <!-- Google Map & Coverage Area -->
      <div>
        <div style="background: var(--color-light-bg); border-radius: var(--radius-md); padding: 1.5rem; border: 1px solid var(--color-border);">
          <h3 style="margin-bottom: 1rem;">Our Operating Location</h3>
          <div style="border-radius: var(--radius-sm); overflow: hidden; box-shadow: var(--shadow-sm); margin-bottom: 1.25rem;">
            <!-- Embedded Google Map -->
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55684.77673551532!2d78.920703!3d29.210419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a424a1b0b65f3%3A0x6b1e6a978f8d6728!2sKashipur%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
              width="100%" 
              height="320" 
              style="border:0; display:block;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="A1 Cleaning Service Area Map">
            </iframe>
          </div>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); margin: 0;">
            Serving Kashipur, Jaspur, Ramnagar, Bazpur, Kundeshwari, and all localities within a 60-kilometer operational radius.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

