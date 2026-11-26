<?php
/**
 * Terms & Conditions Page: /terms/
 * Service scope, booking terms, cancellation policy, pay-after-inspection, and consent rules.
 */
$pageTitle = "Terms & Conditions | A1 Cleaning Doorstep Services";
$pageDescription = "Read A1 Cleaning's Terms & Conditions covering doorstep booking rules, free rescheduling, satisfaction inspection, pricing transparency, and client communication.";
$canonicalUrl = SeoHelper::getCanonicalUrl('terms');

require __DIR__ . '/../components/header.php';
?>

<section class="a1-legal-hero">
  <div class="container text-center">
    <span class="a1-legal-pill">Service Agreement</span>
    <h1>Terms &amp; Conditions</h1>
    <p>Clear service terms covering doorstep bookings, cancellation flexibility, Pay After Inspection guarantee, and communication rules.</p>
    <div class="a1-legal-meta">Effective: November 2026 &bull; A1 Cleaning Operations (Uttarakhand)</div>
  </div>
</section>

<section class="a1-legal-body">
  <div class="container">
    <div class="a1-legal-card">
      <h2>1. Doorstep Booking &amp; Zero Advance Payment</h2>
      <p>Submitting a booking or inquiry form confirms your preferred service slot request. No upfront advance payment is required for standard residential bookings across Kashipur, Jaspur, Ramnagar, and nearby areas. Payment is collected only after completion and your joint quality inspection.</p>

      <h2>2. Rescheduling &amp; Zero-Fee Cancellation</h2>
      <ul>
        <li>Clients may reschedule or cancel free of charge by informing our dispatch desk via phone or WhatsApp (<a href="tel:<?= BUSINESS_PHONE_RAW ?>"><?= BUSINESS_PHONE ?></a>) at least <strong>2 hours before</strong> the scheduled arrival slot.</li>
        <li>Our team requests access to running tap water, a standard 15A power socket, and secure storage of personal valuables before cleaning begins.</li>
      </ul>

      <h2>3. Scope of Service (Inclusions &amp; Exclusions)</h2>
      <ul>
        <li>Every package explicitly lists its <strong>Included</strong> tasks (green check) and <strong>Excluded</strong> items (red cross) on the service page.</li>
        <li>Permanent structural damage, tile crack sealing, civil masonry, electrical/motor repairs, and unsafe areas beyond safe ladder reach are outside cleaning scope unless quoted separately.</li>
      </ul>

      <h2>4. 100% Satisfaction &amp; Joint Walkthrough</h2>
      <p>Once cleaning concludes, our supervisor conducts a joint inspection with you. Any missed stain or corner within the package scope is re-cleaned on the spot at zero extra charge before invoice settlement.</p>

      <h2>5. Use of Client Information &amp; Future Communication</h2>
      <p>Details entered in our booking, contact, or review forms are governed by our <a href="<?= SITE_URL ?>/privacy/">Privacy Policy</a>. Booking details are used to dispatch staff, confirm slots, send GST invoices, and honor service warranties. Future promotional offers or periodic cleaning reminders are sent only when authorized via the form checkbox and can be opted out of anytime.</p>

      <div class="a1-legal-actions">
        <a href="<?= SITE_URL ?>/book-now/" class="a1-legal-btn-primary">Back to Booking Form</a>
        <a href="<?= SITE_URL ?>/privacy/" class="a1-legal-btn-outline">Read Privacy Policy</a>
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
