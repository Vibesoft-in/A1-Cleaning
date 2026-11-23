<?php
/**
 * Booking Page View: /book-now/
 * Dynamic Pre-fill & Conversion Funnel
 */
require_once __DIR__ . '/../../backend/helpers/security.php';

$pageTitle = "Book Cleaning Service Online | A1 Cleaning";
$pageDescription = "Book your cleaning in Kashipur, Jaspur or Ramnagar. Share your requirement and get an instant quote on " . BUSINESS_PHONE . ".";
$canonicalUrl = SeoHelper::getCanonicalUrl('book-now');

$prefilledCity = strtolower(trim($_GET['city'] ?? ''));
$prefilledService = strtolower(trim($_GET['service'] ?? ''));
$prefilledPackage = trim($_GET['packageName'] ?? ($_GET['package'] ?? ''));
$prefilledAmount = trim($_GET['amount'] ?? '');
$prefilledAddons = trim($_GET['addons'] ?? '');

$autoMessage = '';
if ($prefilledPackage || $prefilledAmount) {
  $autoMessage = "Service: " . ucwords(str_replace('-', ' ', $prefilledService)) . 
    ($prefilledPackage ? " | Package: " . $prefilledPackage : "") . 
    ($prefilledAddons ? " | Add-ons: " . $prefilledAddons : "") . 
    ($prefilledAmount ? " | Estimated Amount: ₹" . $prefilledAmount : "");
}

$csrfToken = Security::generateCsrfToken();
$errorMessage = $_SESSION['form_error'] ?? null;
unset($_SESSION['form_error']);

require __DIR__ . '/../components/header.php';
?>



<section class="section">
  <div class="container">
    <div style="max-width: 650px; margin: 0 auto;">
      <div class="text-center" style="margin-bottom: 2rem;">
        <h1>Book Your Cleaning Service</h1>
        <p style="color: var(--color-text-muted);">
          Fill out the quick form below. Our team will verify slot availability and call you back with a customized quote.
        </p>
      </div>

      <?php if ($errorMessage): ?>
        <div style="background-color: #ffebee; color: #c62828; padding: 1rem 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; border: 1px solid #ffcdd2;">
          <?= htmlspecialchars($errorMessage) ?>
        </div>
      <?php endif; ?>

      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 2rem; box-shadow: var(--shadow-sm);">
        
        <?php if ($prefilledAmount || $prefilledPackage): ?>
          <div style="background: linear-gradient(135deg, #EFF8F3 0%, #FFFFFF 100%); border: 1.5px solid #22A06B; border-radius: 14px; padding: 1.15rem 1.35rem; margin-bottom: 1.5rem; box-shadow: 0 4px 14px rgba(34, 160, 107, 0.08);">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 10px; margin-bottom: 0.4rem;">
              <div>
                <span style="display: inline-block; background: #22A06B; color: #fff; font-size: 0.72rem; font-weight: 800; padding: 2px 8px; border-radius: 999px; text-transform: uppercase; margin-bottom: 4px;">Configured in Studio</span>
                <h3 style="margin: 0; font-size: 1.15rem; color: #0B2922; font-weight: 800;"><?= htmlspecialchars($prefilledPackage ?: 'Doorstep Cleaning') ?></h3>
                <span style="font-size: 0.85rem; color: #4B5563; font-weight: 600;"><?= htmlspecialchars(ucwords(str_replace('-', ' ', $prefilledService))) ?></span>
              </div>
              <div style="text-align: right;">
                <span style="display: block; font-size: 0.72rem; color: #6B7280; font-weight: 700; text-transform: uppercase;">Total Estimate</span>
                <span style="font-size: 1.4rem; font-weight: 900; color: #0B2922;">₹<?= htmlspecialchars($prefilledAmount) ?></span>
              </div>
            </div>
            <?php if ($prefilledAddons): ?>
              <div style="font-size: 0.82rem; color: #2D3748; background: rgba(34, 160, 107, 0.08); padding: 6px 12px; border-radius: 8px; margin-top: 0.6rem;">
                <strong>Includes Add-ons:</strong> <?= htmlspecialchars($prefilledAddons) ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <form action="<?= SITE_URL ?>/backend/actions/submit-booking.php" method="POST" class="validate-booking-form">
          <!-- CSRF Token -->
          <input type="hidden" name="csrf_token" value="<?= $csrfToken ?>">
          <input type="hidden" name="source_page" value="<?= htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'Direct Visit') ?>">
          <input type="hidden" name="estimated_amount" value="<?= htmlspecialchars($prefilledAmount) ?>">
          <input type="hidden" name="selected_package" value="<?= htmlspecialchars($prefilledPackage) ?>">
          <input type="hidden" name="selected_addons" value="<?= htmlspecialchars($prefilledAddons) ?>">

          <!-- Anti-Spam Honeypot Field (Invisible to human eyes) -->
          <div style="display: none !important;" aria-hidden="true">
            <label for="website_url">Leave this empty</label>
            <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
          </div>

          <!-- Full Name -->
          <div class="form-group">
            <label class="form-label" for="name">Your Full Name *</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="e.g. Rahul Sharma" required>
          </div>

          <!-- Mobile Phone -->
          <div class="form-group">
            <label class="form-label" for="phone">Phone / WhatsApp Number (10 Digits) *</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="e.g. 7906366271" maxlength="10" required>
            <small style="color: var(--color-text-muted); font-size: 0.8rem;">We will call or message you on WhatsApp to confirm.</small>
          </div>

          <!-- City Dropdown -->
          <div class="form-group">
            <label class="form-label" for="city">Select City *</label>
            <select id="city" name="city" class="form-control" required>
              <option value="">-- Choose City --</option>
              <?php foreach ($citiesList as $cSlug => $cData): ?>
                <option value="<?= htmlspecialchars($cData['name']) ?>" <?= $prefilledCity === $cSlug ? 'selected' : '' ?>>
                  <?= htmlspecialchars($cData['name']) ?> (Uttarakhand)
                </option>
              <?php endforeach; ?>
              <option value="Other">Other nearby area (Within 60km)</option>
            </select>
          </div>

          <!-- Service Dropdown -->
          <div class="form-group">
            <label class="form-label" for="service">Select Service Required *</label>
            <select id="service" name="service" class="form-control" required>
              <option value="">-- Choose Cleaning Service --</option>
              <?php foreach ($servicesList as $sSlug => $sData): ?>
                <option value="<?= htmlspecialchars($sData['name']) ?>" <?= $prefilledService === $sSlug ? 'selected' : '' ?>>
                  <?= htmlspecialchars($sData['name']) ?> (From <?= $sData['starting_price'] ?>)
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- Preferred Date -->
          <div class="form-group">
            <label class="form-label" for="preferred_date">Preferred Service Date</label>
            <input type="date" id="preferred_date" name="preferred_date" class="form-control" min="<?= date('Y-m-d') ?>">
          </div>

          <!-- Address / Locality -->
          <div class="form-group">
            <label class="form-label" for="address">Address / Colony / Landmark</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="e.g. Ramnagar Road, Near Cheema Square">
          </div>

          <!-- Additional Notes -->
          <div class="form-group">
            <label class="form-label" for="message">Specific Requirements / Message</label>
            <textarea id="message" name="message" class="form-control" rows="3" placeholder="Tell us if you need grease removal, stain treatment, or specific number of rooms..."><?= htmlspecialchars($autoMessage) ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.05rem;">
            Confirm Booking Request <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </button>
        </form>
      </div>

      <div style="margin-top: 2rem; text-align: center;">
        <p style="font-size: 0.95rem; color: var(--color-text-muted);">
          Prefer immediate response? Call our direct line:
        </p>
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-dark" style="margin-top: 0.5rem;">
          <span class="material-symbols-outlined icon-sm">call</span> Call <?= BUSINESS_PHONE ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

