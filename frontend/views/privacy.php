<?php
/**
 * Privacy Policy Page: /privacy/
 * Explains how A1 Cleaning collects, protects, and uses customer information
 * for doorstep dispatch, billing, warranty follow-ups, and future updates.
 */
$pageTitle = "Privacy Policy & Data Usage | A1 Cleaning Kashipur";
$pageDescription = "Read A1 Cleaning's Privacy Policy to understand how we collect, protect, and use customer contact details for doorstep cleaning bookings, invoices, and future reminders.";
$canonicalUrl = SeoHelper::getCanonicalUrl('privacy');

require __DIR__ . '/../components/header.php';
?>

<section class="a1-legal-hero">
  <div class="container text-center">
    <span class="a1-legal-pill">Customer Data &amp; Privacy</span>
    <h1>Privacy Policy &amp; Future Information Usage</h1>
    <p>Transparent explanation of what client details we collect, why we collect them, and how we use them safely now and in the future.</p>
    <div class="a1-legal-meta">Last Updated: November 2026 &bull; Applies across Kashipur, Jaspur, Ramnagar &amp; nearby hubs</div>
  </div>
</section>

<section class="a1-legal-body">
  <div class="container">
    <div class="a1-legal-card">
      <h2>1. Information We Collect When You Submit a Form</h2>
      <p>When you book a service, request a callback, or submit a review on A1 Cleaning, we only collect information needed to serve your doorstep cleaning request:</p>
      <ul>
        <li><strong>Contact Details:</strong> Your full name, 10-digit mobile number (for call/WhatsApp dispatch updates), and optional email address (for invoices and confirmation summaries).</li>
        <li><strong>Service &amp; Address Details:</strong> House/flat number, colony/landmark, city, pincode, selected cleaning package, add-ons, preferred date, and arrival slot.</li>
        <li><strong>Service Notes &amp; Consent Choices:</strong> Special cleaning instructions (e.g., fragile surfaces, pet hair) and your explicit consent preferences recorded on our forms.</li>
      </ul>

      <h2>2. How We Use Client Information (Present &amp; Future)</h2>
      <p>By reviewing our forms and ticking the consent checkboxes, your information is used strictly for the following purposes:</p>
      <ul>
        <li><strong>Active Booking &amp; Technician Dispatch:</strong> Assigning a police-verified crew, sharing technician arrival status, and coordinating gate/property access on your booking date.</li>
        <li><strong>Billing, Receipts &amp; Quality Audit:</strong> Issuing service summaries or GST invoices, tracking CleanCoins™ loyalty rewards, and handling post-service 100% satisfaction re-clean requests.</li>
        <li><strong>Future Service Reminders (Only with Your Permission):</strong> If you tick the optional future updates checkbox, we may contact you via WhatsApp, SMS, call, or email for periodic hygiene reminders (such as 6-month overhead water tank cleaning or seasonal deep cleans) and exclusive member discounts.</li>
        <li><strong>Customer Support History:</strong> Referencing past service packages and surface notes when you re-book so you don’t have to explain your property preferences again.</li>
      </ul>

      <h2>3. Strict Data Protection &amp; No-Spam Commitment</h2>
      <ul>
        <li><strong>Zero Third-Party Data Selling:</strong> A1 Cleaning never sells, rents, or trades client phone numbers, addresses, or personal data to external marketers or third-party brokers.</li>
        <li><strong>Restricted Crew Access:</strong> Field technicians only receive your doorstep address and first contact number on the day of service solely to reach your location.</li>
        <li><strong>Easy Opt-Out Anytime:</strong> Even after giving future-update consent on a form, you can reply <strong>STOP</strong> on WhatsApp, call <?= BUSINESS_PHONE ?>, or email <a href="mailto:<?= BUSINESS_EMAIL ?>"><?= BUSINESS_EMAIL ?></a> anytime to stop promotional reminders or request deletion of your stored contact record.</li>
      </ul>

      <h2>4. Contact Our Privacy &amp; Operations Desk</h2>
      <p>
        For questions about your personal data, consent preferences, or record removal:<br>
        <strong>A1 Cleaning</strong> &bull; <?= BUSINESS_STREET ?>, <?= BUSINESS_CITY ?> – <?= BUSINESS_POSTCODE ?><br>
        Phone / WhatsApp: <a href="tel:<?= BUSINESS_PHONE_RAW ?>"><?= BUSINESS_PHONE ?></a> &bull; Email: <a href="mailto:<?= BUSINESS_EMAIL ?>"><?= BUSINESS_EMAIL ?></a>
      </p>

      <div class="a1-legal-actions">
        <a href="<?= SITE_URL ?>/book-now/" class="a1-legal-btn-primary">Back to Booking Form</a>
        <a href="<?= SITE_URL ?>/terms/" class="a1-legal-btn-outline">Read Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</section>

<style>
.a1-legal-hero {
  background: linear-gradient(180deg, #133D31 0%, #0B2922 80%);
  color: #FFFFFF;
  padding: 2.75rem 0 2.5rem;
}
.a1-legal-pill {
  display: inline-block;
  background: rgba(34, 160, 107, 0.22);
  border: 1px solid rgba(52, 211, 153, 0.45);
  color: #A7F3D0;
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  padding: 0.3rem 0.85rem;
  border-radius: 999px;
  margin-bottom: 0.75rem;
}
.a1-legal-hero h1 {
  color: #FFFFFF;
  font-size: clamp(1.65rem, 2.8vw, 2.3rem);
  font-weight: 800;
  margin: 0 0 0.6rem;
}
.a1-legal-hero p {
  color: #D3E8DD;
  max-width: 680px;
  margin: 0 auto 0.75rem;
  font-size: 0.95rem;
}
.a1-legal-meta {
  font-size: 0.8rem;
  color: #8FD1B3;
  font-weight: 600;
}
.a1-legal-body {
  background: #F6FAF7;
  padding: 2.5rem 0 3.5rem;
}
.a1-legal-card {
  max-width: 880px;
  margin: 0 auto;
  background: #FFFFFF;
  border: 1px solid #DCE8E1;
  border-radius: 16px;
  padding: 2rem 2.25rem;
  box-shadow: 0 8px 24px rgba(11, 41, 34, 0.05);
}
.a1-legal-card h2 {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0B2922;
  margin: 1.5rem 0 0.6rem;
}
.a1-legal-card h2:first-child {
  margin-top: 0;
}
.a1-legal-card p,
.a1-legal-card li {
  color: #374151;
  font-size: 0.92rem;
  line-height: 1.65;
}
.a1-legal-card ul {
  padding-left: 1.25rem;
  margin: 0.4rem 0 0.9rem;
}
.a1-legal-card li {
  margin-bottom: 0.45rem;
}
.a1-legal-card a {
  color: #16794F;
  font-weight: 700;
}
.a1-legal-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 0.75rem;
  margin-top: 1.75rem;
  padding-top: 1.25rem;
  border-top: 1px solid #E5EFE9;
}
.a1-legal-btn-primary {
  background: #22A06B;
  color: #FFFFFF !important;
  text-decoration: none;
  padding: 0.65rem 1.25rem;
  border-radius: 8px;
  font-size: 0.86rem;
  font-weight: 700;
}
.a1-legal-btn-outline {
  background: #F4FAF6;
  border: 1px solid #C6E3D3;
  color: #0B2922 !important;
  text-decoration: none;
  padding: 0.65rem 1.25rem;
  border-radius: 8px;
  font-size: 0.86rem;
  font-weight: 700;
}
@media (max-width: 640px) {
  .a1-legal-card {
    padding: 1.35rem 1.15rem;
  }
}
</style>

<?php
$footerWaveBg = '#F6FAF7';
require __DIR__ . '/../components/footer.php';
?>
