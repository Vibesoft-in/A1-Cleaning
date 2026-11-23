<?php
/**
 * Thank You / Booking Confirmation Page
 * URL: /book-now/thank-you/
 * CRITICAL SEO RULE: Strictly NOINDEX, NOFOLLOW (Prevents skewed conversion metrics)
 */

header("X-Robots-Tag: noindex, nofollow", true);

require_once __DIR__ . '/../../backend/helpers/security.php';
Security::startSession();

$isNoIndex = true;
$pageTitle = "Thank You for Booking | A1 Cleaning";
$pageDescription = "Your cleaning request has been received by A1 Cleaning.";
$canonicalUrl = SeoHelper::getCanonicalUrl('book-now/thank-you');

$bookingData = $_SESSION['last_booking'] ?? null;
unset($_SESSION['last_booking']);

$waText = "Hi A1 Cleaning, I just submitted a booking request on your website.";
if ($bookingData) {
    $waText = "Hi A1 Cleaning, my name is " . $bookingData['name'] . ". I submitted a booking for " . $bookingData['service'] . " in " . $bookingData['city'] . ". Please confirm my slot.";
}
$waLink = "https://wa.me/917906366271?text=" . rawurlencode($waText);

require __DIR__ . '/../components/header.php';
?>

<!-- GA4 / GTM Conversion Trigger Script -->
<script>
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    'event': 'generate_lead',
    'conversion_type': 'booking_form_submission',
    'city': '<?= htmlspecialchars($bookingData['city'] ?? '') ?>',
    'service': '<?= htmlspecialchars($bookingData['service'] ?? '') ?>'
  });
</script>

<section class="section" style="padding: 5rem 0;">
  <div class="container text-center">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 3rem 2rem; border-radius: var(--radius-md); border: 1px solid var(--color-border); box-shadow: var(--shadow-md);">
      <div style="font-size: 3.5rem; color: var(--color-fresh-green); margin-bottom: 1rem;">
        <span class="material-symbols-outlined icon-xl" style="font-size: 3.8rem;">check_circle</span>
      </div>
      <h1 style="font-size: 2rem; margin-bottom: 1rem;">Booking Request Received!</h1>
      <p style="color: var(--color-text-muted); font-size: 1.05rem; margin-bottom: 1.75rem;">
        Dhanyawaad! Humari team aapki request verify kar rahi hai. Hum agle <strong>15-30 minute</strong> ke andar aapko call karke slot confirm karenge.
      </p>

      <div style="background-color: var(--color-light-bg); border-radius: var(--radius-sm); padding: 1.25rem; margin-bottom: 2rem; text-align: left;">
        <h4 style="margin-bottom: 0.5rem; color: var(--color-primary);">Speed up your confirmation:</h4>
        <p style="font-size: 0.9rem; margin-bottom: 1rem; color: var(--color-text-main);">
          Agar aapko instant confirmation ya immediate slot chahiye, toh seedha WhatsApp par message karein:
        </p>
        <a href="<?= $waLink ?>" target="_blank" rel="noopener" class="btn btn-whatsapp" style="width: 100%; display: inline-flex; align-items: center; justify-content: center; gap: 0.35rem;">
          <span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Par Turant Confirm Karein
        </a>
      </div>

      <div>
        <a href="<?= SITE_URL ?>/" class="btn btn-outline" style="display: inline-flex; align-items: center; gap: 0.35rem;">
          <span class="material-symbols-outlined icon-sm">arrow_back</span> Return to Homepage
        </a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

