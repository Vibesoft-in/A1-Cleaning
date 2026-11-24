<?php
/**
 * Booking Page View: /book-now/
 * Redesigned Vossy-Style High-Converting Checkout Experience
 * 2-Column Responsive Layout with Sticky Booking Summary, Verification Accordions & Dynamic Live Recalculations
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../../backend/helpers/security.php';

// Services & Cities data
$servicesList = require __DIR__ . '/../../backend/data/services.php';
$citiesList = require __DIR__ . '/../../backend/data/cities.php';

$rawService = strtolower(trim($_GET['service'] ?? ''));
$prefilledPackage = trim($_GET['packageName'] ?? ($_GET['package'] ?? ''));
$prefilledAmount = trim($_GET['amount'] ?? '');
$prefilledAddons = trim($_GET['addons'] ?? '');
$prefilledCity = strtolower(trim($_GET['city'] ?? ''));

// Determine if the user actually has an item in cart or came with a selected service/package
$hasCartItem = (!empty($rawService) && isset($servicesList[$rawService]))
            || !empty($prefilledPackage)
            || !empty($prefilledAmount)
            || !empty($_SESSION['cart_item'])
            || !empty($_SESSION['cart']);

if ($hasCartItem) {
    $prefilledService = (!empty($rawService) && isset($servicesList[$rawService])) ? $rawService : 'home-cleaning';
    $activeServiceData = $servicesList[$prefilledService] ?? reset($servicesList);

    // Calculate initial base price
    $defaultBasePrice = 1999;
    if ($prefilledAmount && is_numeric($prefilledAmount)) {
        $defaultBasePrice = (int)$prefilledAmount;
    } else if (!empty($activeServiceData['packages'][0]['price'])) {
        $defaultBasePrice = (int)$activeServiceData['packages'][0]['price'];
    } else if (!empty($activeServiceData['starting_price'])) {
        $num = preg_replace('/[^0-9]/', '', $activeServiceData['starting_price']);
        if ($num) $defaultBasePrice = (int)$num;
    }

    $autoMessage = '';
    if ($prefilledPackage || $prefilledAmount) {
        $autoMessage = "Service: " . ucwords(str_replace('-', ' ', $prefilledService)) . 
            ($prefilledPackage ? " | Package: " . $prefilledPackage : "") . 
            ($prefilledAddons ? " | Add-ons: " . $prefilledAddons : "") . 
            ($prefilledAmount ? " | Estimated Total: ₹" . $prefilledAmount : "");
    }

    // Prepare curated frequently added add-ons for the current service
    $serviceAddons = $activeServiceData['addons'] ?? [];
    $frequentlyAddedAddons = [];

    $addonImagesPool = [
        'tap-polish' => SITE_URL . '/assets/images/pricing/bathroom-cleaning.jpg',
        'tile-grout' => SITE_URL . '/assets/images/pricing/bathroom-cleaning.jpg',
        'exhaust-fan' => SITE_URL . '/assets/images/pricing/kitchen-cleaning.jpg',
        'glass-glaze' => SITE_URL . '/assets/images/pricing/before-after/glass-after.jpg',
        'chimney-baffle' => SITE_URL . '/assets/images/pricing/kitchen-cleaning.jpg',
        'fridge-sanitize' => SITE_URL . '/assets/images/pricing/kitchen-cleaning.jpg',
        'sofa-perfume' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg',
        'cushion-wash' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg',
        'balcony-railing' => SITE_URL . '/assets/images/pricing/balcony-cleaning.jpg',
        'window-glass' => SITE_URL . '/assets/images/pricing/before-after/glass-after.jpg',
        'sofa-extract' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg',
        'tile-descale' => SITE_URL . '/assets/images/pricing/bathroom-cleaning.jpg',
    ];

    $addonTagsPool = [
        'tap-polish' => '🌱 Chrome & Tap',
        'tile-grout' => '⭐ Frequently Added',
        'exhaust-fan' => '⚡ Quick Addon',
        'glass-glaze' => '🪟 Glass Door Wipe',
        'balcony-railing' => '🌱 Railing & Grill',
        'window-glass' => '🪟 Glass Door Wipe',
        'sofa-extract' => '⚡ Quick Addon',
        'tile-descale' => '⭐ Frequently Added',
    ];

    if (!empty($serviceAddons)) {
        foreach ($serviceAddons as $sa) {
            $key = $sa['key'] ?? 'addon-' . count($frequentlyAddedAddons);
            $frequentlyAddedAddons[] = [
                'key' => $key,
                'name' => $sa['name'],
                'price' => (int)($sa['price'] ?? 199),
                'tag' => $addonTagsPool[$key] ?? '⚡ Quick Addon',
                'time' => '~20-30m',
                'img' => $addonImagesPool[$key] ?? (!empty($activeServiceData['thumb']) ? $activeServiceData['thumb'] : SITE_URL . '/assets/images/pricing/home-cleaning.jpg')
            ];
            if (count($frequentlyAddedAddons) >= 4) break;
        }
    }

    if (count($frequentlyAddedAddons) < 4) {
        $fallbackCatalog = [
            [
                'key' => 'balcony-railing',
                'name' => 'Balcony Railing & Window Frame Deep Wipe',
                'price' => 49,
                'tag' => '🌱 Railing & Grill',
                'time' => '~20m',
                'img' => SITE_URL . '/assets/images/pricing/balcony-cleaning.jpg'
            ],
            [
                'key' => 'window-glass',
                'name' => 'Window & Mirror Glass Anti-Fog Glaze',
                'price' => 39,
                'tag' => '🪟 Glass Door Wipe',
                'time' => '~20m',
                'img' => SITE_URL . '/assets/images/pricing/before-after/glass-after.jpg'
            ],
            [
                'key' => 'sofa-extract',
                'name' => 'Sofa & Upholstery Deep Enzyme Extraction',
                'price' => 399,
                'tag' => '⚡ Quick Addon',
                'time' => '~90m',
                'img' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg'
            ],
            [
                'key' => 'tile-descale',
                'name' => 'Bathroom Tiles Hard Water Descaling',
                'price' => 249,
                'tag' => '⭐ Frequently Added',
                'time' => '~30m',
                'img' => SITE_URL . '/assets/images/pricing/bathroom-cleaning.jpg'
            ]
        ];
        foreach ($fallbackCatalog as $fc) {
            if (count($frequentlyAddedAddons) >= 4) break;
            $exists = false;
            foreach ($frequentlyAddedAddons as $existing) {
                if ($existing['key'] === $fc['key']) { $exists = true; break; }
            }
            if (!$exists) {
                $frequentlyAddedAddons[] = $fc;
            }
        }
    }

    $pageTitle = "Complete Your Booking | A1 Cleaning Doorstep Mechanized Services";
    $pageDescription = "Book your doorstep mechanized cleaning in Kashipur, Jaspur, Ramnagar or nearby towns. Zero advance payment, verified Kärcher equipment, pay after 100% satisfaction.";
} else {
    $prefilledService = '';
    $activeServiceData = null;
    $defaultBasePrice = 0;
    $autoMessage = '';

    $pageTitle = "Your Cart is Empty | A1 Cleaning Doorstep Mechanized Services";
    $pageDescription = "Your A1 Cleaning cart is empty. Explore our verified doorstep mechanized cleaning services across Kashipur, Jaspur, Ramnagar and nearby towns.";
}

$canonicalUrl = SeoHelper::getCanonicalUrl('book-now');
$tomorrowDate = date('Y-m-d', strtotime('+1 day'));
$tomorrowDisplay = date('D, M j, Y', strtotime('+1 day'));

$csrfToken = Security::generateCsrfToken();
$errorMessage = $_SESSION['form_error'] ?? null;
unset($_SESSION['form_error']);

require __DIR__ . '/../components/header.php';
?>

<?php if ($hasCartItem): ?>
<!-- Pass Data to Client Script -->
<script>
window.A1_SERVICES_MAP = <?= json_encode(array_map(function($s) {
    $price = 1999;
    if (!empty($s['packages'][0]['price'])) {
        $price = (int)$s['packages'][0]['price'];
    } else if (!empty($s['starting_price'])) {
        $num = preg_replace('/[^0-9]/', '', $s['starting_price']);
        if ($num) $price = (int)$num;
    }
    return [
        'name' => $s['name'],
        'price' => $price,
        'thumb' => $s['thumb'] ?? '',
        'time' => $s['time_estimate'] ?? '2 - 3 hours'
    ];
}, $servicesList), JSON_UNESCAPED_SLASHES) ?>;
window.A1_PREFILLED_AMOUNT = <?= json_encode($prefilledAmount ? (int)$prefilledAmount : null) ?>;
window.A1_PREFILLED_PACKAGE = <?= json_encode($prefilledPackage ?: null) ?>;
window.A1_PREFILLED_ADDONS = <?= json_encode($prefilledAddons ?: null) ?>;
</script>

<!-- =======================================================================
     TOP SECURITY GUARANTEE BANNER (Vossy Style Mint Ribbon)
     ======================================================================= -->
<div class="vossy-top-security-bar">
  <div class="container">
    <div class="vossy-security-bar-content">
      <span class="material-symbols-outlined icon-xs">lock</span>
      <span>100% Verified Safe Booking • Zero Advance Payment • Pay After 100% Satisfaction • Police-Verified Staff</span>
    </div>
  </div>
</div>

<div class="vossy-checkout-page">
  <div class="container">

    <!-- Page Headline & Intro -->
    <div class="vossy-page-header text-center">
      <h1 class="vossy-main-title">Complete Your Booking</h1>
      <p class="vossy-main-sub">
        Review your service specifications, choose your preferred doorstep arrival slot, and confirm with zero advance payment.
      </p>
    </div>

    <!-- Error Banner if any -->
    <?php if ($errorMessage): ?>
      <div class="vossy-alert-danger">
        <span class="material-symbols-outlined icon-sm">error</span>
        <span><?= htmlspecialchars($errorMessage) ?></span>
      </div>
    <?php endif; ?>

    <!-- ===================================================================
         TWO-COLUMN CHECKOUT CANVAS: FORM (LEFT) + STICKY SUMMARY (RIGHT)
         =================================================================== -->
    <div class="vossy-checkout-grid">

      <!-- LEFT COLUMN: The Step-by-Step Booking Form -->
      <div class="vossy-form-column">
        <form action="<?= SITE_URL ?>/backend/actions/submit-booking.php" method="POST" class="validate-booking-form" id="vossy-booking-form">
          <!-- Hidden Fields & CSRF -->
          <input type="hidden" name="csrf_token" value="<?= $csrfToken ?>">
          <input type="hidden" name="source_page" value="<?= htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'Direct Visit /book-now/') ?>">
          <input type="hidden" name="service_quantity" id="hidden_service_quantity" value="1">
          <input type="hidden" name="estimated_amount" id="hidden_estimated_amount" value="<?= htmlspecialchars($defaultBasePrice) ?>">
          <input type="hidden" name="selected_package" id="hidden_selected_package" value="<?= htmlspecialchars($prefilledPackage ?: 'Deep Clean Standard') ?>">
          <input type="hidden" name="selected_addons" id="hidden_selected_addons" value="<?= htmlspecialchars($prefilledAddons) ?>">

          <!-- Anti-Spam Honeypot Field -->
          <div style="display: none !important;" aria-hidden="true">
            <label for="website_url">Leave this empty</label>
            <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
          </div>

          <!-- Studio Configuration Banner (If Coming with Configured Package) -->
          <?php if ($prefilledAmount || $prefilledPackage): ?>
            <div class="vossy-studio-highlight">
              <div class="vossy-studio-head">
                <div>
                  <span class="vossy-studio-badge">Configured in Studio</span>
                  <h3 class="vossy-studio-title"><?= htmlspecialchars($prefilledPackage ?: 'Customized Doorstep Cleaning') ?></h3>
                  <div class="vossy-studio-svc"><?= htmlspecialchars(ucwords(str_replace('-', ' ', $prefilledService))) ?></div>
                </div>
                <div class="vossy-studio-price-box">
                  <span class="vossy-studio-price-lbl">Studio Estimate</span>
                  <span class="vossy-studio-price-val">₹<?= htmlspecialchars($prefilledAmount) ?></span>
                </div>
              </div>
              <?php if ($prefilledAddons): ?>
                <div class="vossy-studio-addons">
                  <strong>Configured Add-ons:</strong> <?= htmlspecialchars($prefilledAddons) ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <!-- =============================================================
               CARD A: SELECTED SERVICES (Matching User Reference)
               With Quantity Stepper (+ / -) and Clear All action
               ============================================================= -->
          <div class="cart-selected-services-card" id="cartSelectedServicesCard">
            <div class="cart-services-header">
              <h2 class="cart-services-heading">
                Selected Services (<span id="cartServiceCount">1</span>)
              </h2>
              <button type="button" class="btn-clear-cart" onclick="clearCartService()" aria-label="Clear all services">
                Clear All
              </button>
            </div>

            <div class="cart-service-row">
              <div class="cart-service-info">
                <?php 
                  $svcThumb = !empty($activeServiceData['thumb']) ? $activeServiceData['thumb'] : SITE_URL . '/assets/images/pricing/' . $prefilledService . '.jpg';
                ?>
                <img src="<?= htmlspecialchars($svcThumb) ?>" alt="<?= htmlspecialchars($activeServiceData['name'] ?? 'Service') ?>" class="cart-service-thumb" id="cartServiceThumb">
                <div class="cart-service-text-wrap">
                  <h3 class="cart-service-title" id="cartServiceTitle">
                    <?= htmlspecialchars($activeServiceData['name'] ?? 'Doorstep Cleaning Service') ?>
                  </h3>
                  <div class="cart-service-duration" id="cartServiceDuration">
                    Est. duration: <?= htmlspecialchars($activeServiceData['time_estimate'] ?? '~60-90 mins') ?>
                  </div>
                  <div class="cart-service-unit-price">
                    ₹<span id="serviceUnitPrice"><?= htmlspecialchars($defaultBasePrice) ?></span> each
                  </div>
                </div>
              </div>

              <div class="cart-service-controls">
                <div class="cart-qty-stepper">
                  <button type="button" class="cart-stepper-btn" onclick="updateServiceQty(-1)" aria-label="Decrease quantity">−</button>
                  <span class="cart-stepper-val" id="serviceQtyVal">1</span>
                  <button type="button" class="cart-stepper-btn" onclick="updateServiceQty(1)" aria-label="Increase quantity">+</button>
                </div>
                <div class="cart-service-row-total" id="serviceRowTotal">
                  ₹<?= htmlspecialchars(number_format($defaultBasePrice)) ?>
                </div>
              </div>
            </div>
          </div>

          <!-- =============================================================
               CARD B: FREQUENTLY ADDED ADD-ONS (Matching User Reference)
               2x2 Grid of Pairable Add-ons with + Add / Added Toggles
               ============================================================= -->
          <div class="cart-addons-section-card" id="cartAddonsCard">
            <div class="cart-addons-head">
              <div class="cart-addons-title-wrap">
                <span class="material-symbols-outlined" style="color: #22A06B; font-size: 1.25rem;">bolt</span>
                <h3 class="cart-addons-title">Frequently Added Add-ons</h3>
              </div>
              <span class="cart-addons-badge">Pairs with your service</span>
            </div>
            <p class="cart-addons-sub">
              Customers frequently bundle these verified doorstep services for 100% complete home care.
            </p>

            <div class="cart-addons-grid">
              <?php foreach ($frequentlyAddedAddons as $fa): ?>
                <div class="cart-addon-item" id="addon-card-<?= htmlspecialchars($fa['key']) ?>">
                  <div class="cart-addon-left">
                    <img src="<?= htmlspecialchars($fa['img']) ?>" alt="<?= htmlspecialchars($fa['name']) ?>" class="cart-addon-thumb">
                    <div class="cart-addon-details">
                      <span class="cart-addon-tag"><?= htmlspecialchars($fa['tag']) ?></span>
                      <h4 class="cart-addon-title" title="<?= htmlspecialchars($fa['name']) ?>">
                        <?= htmlspecialchars($fa['name']) ?>
                      </h4>
                      <div class="cart-addon-pricing">
                        ₹<?= htmlspecialchars($fa['price']) ?> • <?= htmlspecialchars($fa['time']) ?>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn-addon-add" id="addon-btn-<?= htmlspecialchars($fa['key']) ?>" onclick="toggleCartAddon('<?= htmlspecialchars($fa['key']) ?>', '<?= htmlspecialchars(addslashes($fa['name'])) ?>', <?= (int)$fa['price'] ?>, this)">
                    + Add
                  </button>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- =============================================================
               CARD 1: CUSTOMER DETAILS (Matching Reference "Guest Details")
               ============================================================= -->
          <div class="vossy-form-card">
            <div class="vossy-card-header">
              <h2 class="vossy-card-title">Customer Details</h2>
              <span class="vossy-step-pill">Step 1 of 4</span>
            </div>

            <!-- Row 1: Name & Phone -->
            <div class="vossy-row-2col">
              <div class="vossy-form-group">
                <label for="name" class="vossy-label">Your Full Name <span class="vossy-required">*</span></label>
                <div class="vossy-input-wrap">
                  <input type="text" id="name" name="name" class="vossy-input" placeholder="e.g. Rahul Sharma" required autocomplete="name">
                  <span class="vossy-valid-check material-symbols-outlined">check_circle</span>
                </div>
              </div>

              <div class="vossy-form-group">
                <label for="phone" class="vossy-label">Phone / WhatsApp Number (10 Digits) <span class="vossy-required">*</span></label>
                <div class="vossy-input-wrap">
                  <input type="tel" id="phone" name="phone" class="vossy-input" placeholder="e.g. 7906366271" maxlength="10" required autocomplete="tel">
                  <span class="vossy-valid-check material-symbols-outlined">check_circle</span>
                </div>
                <small class="vossy-input-subtext">We'll call or WhatsApp you to confirm slot details.</small>
              </div>
            </div>

            <!-- Row 2: Service Required & Preferred Slot -->
            <div class="vossy-row-2col">
              <div class="vossy-form-group">
                <label for="service" class="vossy-label">Service Required <span class="vossy-required">*</span></label>
                <select id="service" name="service" class="vossy-input vossy-select" required onchange="handleServiceChange(this.value)">
                  <?php foreach ($servicesList as $sSlug => $sData): ?>
                    <option value="<?= htmlspecialchars($sSlug) ?>" <?= ($prefilledService === $sSlug) ? 'selected' : '' ?>>
                      <?= htmlspecialchars($sData['name']) ?> (From <?= $sData['starting_price'] ?>)
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="vossy-form-group">
                <label for="slot_preference" class="vossy-label">Preferred Arrival Slot <span class="vossy-required">*</span></label>
                <select id="slot_preference" name="slot_preference" class="vossy-input vossy-select" required onchange="handleSlotChange(this.value)">
                  <option value="Morning Slot (9:00 AM - 1:00 PM)" selected>Morning Slot (9:00 AM - 1:00 PM)</option>
                  <option value="Afternoon Slot (1:00 PM - 5:00 PM)">Afternoon Slot (1:00 PM - 5:00 PM)</option>
                  <option value="Evening Slot (5:00 PM - 8:00 PM)">Evening Slot (5:00 PM - 8:00 PM)</option>
                  <option value="Emergency Rapid Dispatch (Within 90 Mins)">Emergency Rapid Dispatch (Within 90 Mins)</option>
                </select>
              </div>
            </div>

            <!-- Row 3: Service Date & Property Space Type -->
            <div class="vossy-row-2col">
              <div class="vossy-form-group">
                <label for="preferred_date" class="vossy-label">Preferred Service Date <span class="vossy-required">*</span></label>
                <input type="date" id="preferred_date" name="preferred_date" class="vossy-input" min="<?= date('Y-m-d') ?>" value="<?= $tomorrowDate ?>" required onchange="handleDateChange(this.value)">
              </div>

              <div class="vossy-form-group">
                <label for="property_type" class="vossy-label">Space / Property Type</label>
                <select id="property_type" name="property_type" class="vossy-input vossy-select">
                  <option value="1 BHK / 2 BHK Apartment">1 BHK / 2 BHK Apartment</option>
                  <option value="3 BHK / 4 BHK Flat" selected>3 BHK / 4 BHK Flat</option>
                  <option value="Independent Villa / Kothi / Duplex">Independent Villa / Kothi / Duplex</option>
                  <option value="Commercial Showroom / Office">Commercial Showroom / Office</option>
                  <option value="Individual Washroom / Sofa / Specific Item">Individual Washroom / Sofa / Specific Item</option>
                </select>
              </div>
            </div>

          </div><!-- /.vossy-form-card (Customer Details) -->

          <!-- =============================================================
               CARD 2: SERVICE LOCATION & ADDRESS (Matching "Billing Details")
               ============================================================= -->
          <div class="vossy-form-card">
            <div class="vossy-card-header">
              <h2 class="vossy-card-title">Service Address Details</h2>
              <span class="vossy-step-pill">Step 2 of 4</span>
            </div>

            <!-- Row 1: Flat/House No. & Locality -->
            <div class="vossy-row-2col">
              <div class="vossy-form-group">
                <label for="address" class="vossy-label">House / Flat / Street Address <span class="vossy-required">*</span></label>
                <input type="text" id="address" name="address" class="vossy-input" placeholder="e.g. Flat 302, Green Avenue, Ramnagar Rd" required autocomplete="street-address">
              </div>

              <div class="vossy-form-group">
                <label for="locality" class="vossy-label">Locality / Landmark</label>
                <input type="text" id="locality" name="locality" class="vossy-input" placeholder="e.g. Near Cheema Square, Awas Vikas">
              </div>
            </div>

            <!-- Row 2: City Dropdown & Pincode -->
            <div class="vossy-row-2col">
              <div class="vossy-form-group">
                <label for="city" class="vossy-label">Select City / Town <span class="vossy-required">*</span></label>
                <select id="city" name="city" class="vossy-input vossy-select" required onchange="handleCityChange(this.value)">
                  <option value="">-- Choose City / Hub --</option>
                  <?php foreach ($citiesList as $cSlug => $cData): ?>
                    <option value="<?= htmlspecialchars($cData['name']) ?>" <?= ($prefilledCity === $cSlug || $cSlug === 'kashipur') ? 'selected' : '' ?>>
                      <?= htmlspecialchars($cData['name']) ?> (Uttarakhand)
                    </option>
                  <?php endforeach; ?>
                  <option value="Bazpur">Bazpur (Uttarakhand)</option>
                  <option value="Kundeshwari">Kundeshwari (Uttarakhand)</option>
                  <option value="Jim Corbett Area">Jim Corbett Belt / Ramnagar</option>
                  <option value="Other">Other nearby area (Within 60km)</option>
                </select>
              </div>

              <div class="vossy-form-group">
                <label for="pincode" class="vossy-label">Pincode</label>
                <input type="text" id="pincode" name="pincode" class="vossy-input" placeholder="e.g. 244713" maxlength="6">
              </div>
            </div>

            <!-- Row 3: State & Alternate Email -->
            <div class="vossy-row-2col">
              <div class="vossy-form-group">
                <label for="state" class="vossy-label">State</label>
                <input type="text" id="state" name="state" class="vossy-input" value="Uttarakhand" readonly>
              </div>

              <div class="vossy-form-group">
                <label for="email" class="vossy-label">Email Address (Optional for GST Invoice)</label>
                <input type="email" id="email" name="email" class="vossy-input" placeholder="e.g. rahul.sharma@example.com" autocomplete="email">
              </div>
            </div>

          </div><!-- /.vossy-form-card (Service Address) -->

          <!-- =============================================================
               CARD 3: NEED TO KNOW INFORMATION (Matching Reference 1:1)
               ============================================================= -->
          <div class="vossy-form-card">
            <h2 class="vossy-card-title mb-3">Need to Know Information</h2>
            
            <div class="vossy-policy-list">
              <!-- Item 1: Cancellation Policy -->
              <div class="vossy-policy-item" id="policy-cancellation">
                <button type="button" class="vossy-policy-trigger" onclick="toggleVossyPolicy(this)" aria-expanded="false">
                  <span class="vossy-policy-icon">+</span>
                  <span class="vossy-policy-title">Cancellation &amp; Rescheduling Policy</span>
                </button>
                <div class="vossy-policy-body">
                  <p>
                    We offer 100% flexible zero-fee cancellation and rescheduling. If your schedule changes, simply notify our dispatch desk on WhatsApp or call at least 2 hours prior to your scheduled slot. We will update your appointment without any penalty.
                  </p>
                </div>
              </div>

              <!-- Item 2: Service Day Instructions -->
              <div class="vossy-policy-item" id="policy-instructions">
                <button type="button" class="vossy-policy-trigger" onclick="toggleVossyPolicy(this)" aria-expanded="false">
                  <span class="vossy-policy-icon">+</span>
                  <span class="vossy-policy-title">Service Day Instructions &amp; Machine Setup</span>
                </button>
                <div class="vossy-policy-body">
                  <p>
                    Our technicians arrive equipped with heavy industrial Kärcher machinery, single-disc rotary floor scrubbers, and safe European divergence chemicals. We only require a standard 15A electrical socket and running tap water connection on-site.
                  </p>
                </div>
              </div>

              <!-- Item 3: Satisfaction Guarantee -->
              <div class="vossy-policy-item" id="policy-warranty">
                <button type="button" class="vossy-policy-trigger" onclick="toggleVossyPolicy(this)" aria-expanded="false">
                  <span class="vossy-policy-icon">+</span>
                  <span class="vossy-policy-title">100% Satisfaction &amp; Inspection Policy</span>
                </button>
                <div class="vossy-policy-body">
                  <p>
                    We follow a strict "Pay After 100% Satisfaction" standard. Once the deep cleaning is completed, our team supervisor conducts a complete joint walkthrough inspection with you. If any spot is missed, we re-clean it immediately on the spot.
                  </p>
                </div>
              </div>
            </div>

          </div><!-- /.vossy-form-card (Need to Know) -->

          <!-- =============================================================
               CARD 4: SPECIAL REQUESTS (Matching Reference 1:1)
               ============================================================= -->
          <div class="vossy-form-card">
            <h2 class="vossy-card-title mb-2">Special Requests*</h2>
            <div class="vossy-form-group mb-1">
              <textarea id="message" name="message" class="vossy-input vossy-textarea" rows="3" placeholder="Tell us about specific stains, pet hair concerns, fragile glass items, or society gate entry instructions..."><?= htmlspecialchars($autoMessage) ?></textarea>
              <div class="vossy-hint-text">*Our supervisor notes all custom requests and briefs the cleaning crew before dispatch.</div>
            </div>
          </div><!-- /.vossy-form-card (Special Requests) -->

          <!-- =============================================================
               CARD 5: PAYMENT AND CONFIRMATION (Matching Reference 1:1)
               ============================================================= -->
          <div class="vossy-form-card vossy-payment-card">
            <div class="vossy-payment-head">
              <h2 class="vossy-card-title">Payment and Confirmation</h2>
              <div class="vossy-ssl-seal">
                <span class="material-symbols-outlined icon-xs text-fresh-green">verified_user</span>
                <span>256-Bit SSL Encrypted</span>
              </div>
            </div>

            <!-- Payment Mode Visual Options -->
            <div class="vossy-payment-modes">
              <label class="vossy-radio-box active">
                <input type="radio" name="payment_mode" value="pay_after_service" checked>
                <div class="vossy-radio-content">
                  <div class="vossy-radio-title">
                    <span class="vossy-radio-badge">Recommended</span>
                    <strong>Pay After 100% Inspection</strong>
                  </div>
                  <div class="vossy-radio-sub">Zero advance required. Pay comfortably via UPI, Cash, or Card only after job completion.</div>
                </div>
              </label>

              <label class="vossy-radio-box">
                <input type="radio" name="payment_mode" value="upi_online">
                <div class="vossy-radio-content">
                  <div class="vossy-radio-title">
                    <strong>Instant UPI / QR Code Confirmation</strong>
                  </div>
                  <div class="vossy-radio-sub">Receive instant payment link &amp; GST tax invoice on WhatsApp.</div>
                </div>
              </label>
            </div>

            <!-- Terms & Cancellation Checkbox -->
            <div class="vossy-terms-wrap">
              <label class="vossy-checkbox-label">
                <input type="checkbox" id="agree_terms" name="agree_terms" required checked>
                <span>I agree to the <a href="<?= SITE_URL ?>/terms/" target="_blank">Terms of Service</a> and understand the flexible cancellation &amp; satisfaction policy.</span>
              </label>
            </div>

            <!-- Total Amount Callout Box (Matching Reference) -->
            <div class="vossy-total-callout-box">
              <div class="vossy-total-row">
                <span class="vossy-total-lbl">Total Payable:</span>
                <span class="vossy-total-val" id="formTotalVal">₹<?= htmlspecialchars(number_format($defaultBasePrice)) ?></span>
              </div>
              <p class="vossy-total-subtext">
                Total includes industrial equipment, certified divergence chemicals, doorstep travel &amp; labor. Zero advance payment will be charged today; full payment is made after your final inspection.
              </p>
            </div>

            <!-- Main Submit CTA Button -->
            <div class="vossy-submit-wrap">
              <button type="submit" class="vossy-btn-confirm" id="vossy-submit-btn">
                <span>Confirm Doorstep Booking</span>
                <span class="material-symbols-outlined icon-sm">arrow_forward</span>
              </button>
              <div class="vossy-submit-subtext">
                You will receive an instant confirmation call and WhatsApp itinerary summary.
              </div>
            </div>

          </div><!-- /.vossy-form-card (Payment & Confirmation) -->

        </form>
      </div><!-- /.vossy-form-column -->


      <!-- =================================================================
           RIGHT COLUMN: STICKY BOOKING SUMMARY SIDEBAR (Matching Reference 1:1)
           ================================================================= -->
      <div class="vossy-sidebar-column">
        <aside class="vossy-summary-card">
          
          <!-- Top Guarantee Ribbon (Dark Strip from reference) -->
          <div class="vossy-summary-top-banner">
            <span class="material-symbols-outlined icon-xs">verified</span>
            <span>Best Rates &amp; 100% Quality Guaranteed</span>
          </div>

          <!-- Featured Service Photo Container -->
          <div class="vossy-summary-media">
            <?php 
              $thumbImg = !empty($activeServiceData['thumb']) ? $activeServiceData['thumb'] : SITE_URL . '/assets/images/pricing/home-cleaning.jpg';
            ?>
            <img src="<?= htmlspecialchars($thumbImg) ?>" alt="<?= htmlspecialchars($activeServiceData['name']) ?>" id="summaryImg" class="vossy-summary-img" loading="eager">
            <div class="vossy-summary-media-badge">
              <span class="material-symbols-outlined icon-xs text-fresh-green">bolt</span>
              <span>Mechanized Care</span>
            </div>
          </div>

          <!-- Service Title & Hub Location -->
          <div class="vossy-summary-body">
            <h3 class="vossy-summary-title" id="summaryServiceTitle"><?= htmlspecialchars($activeServiceData['name']) ?></h3>
            <div class="vossy-summary-location" id="summaryLocation">
              <span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span>
              <span>Kashipur Hub • Doorstep Mechanized Service</span>
            </div>

            <!-- Service Details Table (Matching Reference) -->
            <div class="vossy-specs-table">
              <div class="vossy-spec-row">
                <span class="vossy-spec-key">Service Date:</span>
                <span class="vossy-spec-val" id="summaryDate"><?= $tomorrowDisplay ?></span>
              </div>
              <div class="vossy-spec-row">
                <span class="vossy-spec-key">Arrival Slot:</span>
                <span class="vossy-spec-val" id="summarySlot">Morning (9 AM - 1 PM)</span>
              </div>
              <div class="vossy-spec-row">
                <span class="vossy-spec-key">Service Tier:</span>
                <span class="vossy-spec-val" id="summaryPackage"><?= htmlspecialchars($prefilledPackage ?: 'Deep Clean Standard') ?></span>
              </div>
              <div class="vossy-spec-row">
                <span class="vossy-spec-key">Staff:</span>
                <span class="vossy-spec-val">2-3 Verified Techs</span>
              </div>
              <div class="vossy-spec-row">
                <span class="vossy-spec-key">Equipment:</span>
                <span class="vossy-spec-val">Kärcher &amp; Single-Disc</span>
              </div>
              <div class="vossy-spec-row">
                <span class="vossy-spec-key">Satisfaction:</span>
                <span class="vossy-spec-val text-fresh-green font-bold">100% Guaranteed</span>
              </div>
            </div>

            <!-- Divider -->
            <div class="vossy-summary-divider"></div>

            <!-- Transparent Price Calculation -->
            <div class="vossy-price-breakdown">
              <div class="vossy-breakdown-row">
                <span class="vossy-b-lbl">Service Base Price:</span>
                <span class="vossy-b-val" id="summaryBasePrice">₹<?= htmlspecialchars(number_format($defaultBasePrice)) ?></span>
              </div>
              
              <div class="vossy-breakdown-row" id="summaryAddonsRow" style="<?= $prefilledAddons ? '' : 'display: none;' ?>">
                <span class="vossy-b-lbl">Configured Add-ons:</span>
                <span class="vossy-b-val text-fresh-green" id="summaryAddonsPrice">+ Included</span>
              </div>

              <div class="vossy-breakdown-row">
                <span class="vossy-b-lbl">Industrial Machines &amp; Chemicals:</span>
                <span class="vossy-b-val text-fresh-green">Included (₹0)</span>
              </div>

              <div class="vossy-breakdown-row">
                <span class="vossy-b-lbl">Doorstep Transit (Local Hub):</span>
                <span class="vossy-b-val text-fresh-green">FREE (₹0)</span>
              </div>
            </div>

            <!-- Divider -->
            <div class="vossy-summary-divider"></div>

            <!-- Grand Total -->
            <div class="vossy-grand-total-row">
              <div>
                <span class="vossy-gt-label">Total Amount:</span>
                <div class="vossy-gt-badge">Zero Advance • Pay After Inspection</div>
              </div>
              <div class="vossy-gt-amount" id="summaryTotal">₹<?= htmlspecialchars(number_format($defaultBasePrice)) ?></div>
            </div>

            <!-- Direct Support Help Box -->
            <div class="vossy-support-box">
              <span class="material-symbols-outlined icon-sm text-fresh-green">support_agent</span>
              <div>
                <div class="vossy-support-title">Need immediate help?</div>
                <div class="vossy-support-call">
                  Call: <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="font-bold"><?= BUSINESS_PHONE ?></a>
                </div>
              </div>
            </div>

          </div><!-- /.vossy-summary-body -->
        </aside>
      </div><!-- /.vossy-sidebar-column -->

    </div><!-- /.vossy-checkout-grid -->

  </div>
</div><!-- /.vossy-checkout-page -->

<?php else: ?>

<!-- =======================================================================
     AUTHENTIC EMPTY CART STATE (A1 Brand Theme: Fresh Green & Mint)
     Clean white container, soft mint badge (#EAF3EE), deep green title (#0B2922),
     and fresh green pill button (#22A06B) to explore services.
     ======================================================================= -->
<main class="empty-cart-page" role="main">
  <div class="container">
    <div class="empty-cart-card">
      <div class="empty-cart-icon-circle" aria-hidden="true">
        <!-- A1 Brand Fresh Green Shopping Cart Icon -->
        <svg class="empty-cart-svg" viewBox="0 0 24 24" width="38" height="38" fill="currentColor">
          <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
        </svg>
      </div>

      <h1 class="empty-cart-title">Your cart is empty</h1>

      <p class="empty-cart-subtitle">
        You haven't selected any home or commercial maintenance packages yet. Explore our verified services to get started.
      </p>

      <a href="<?= SITE_URL ?>/services/" class="btn-empty-cart-explore" id="emptyCartExploreBtn">
        <span>Explore Services Now</span>
        <span class="empty-cart-arrow" aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</main>

<?php endif; ?>

<!-- =======================================================================
     SCOPED STYLES: VOSSY LUXURY BOOKING CHECKOUT EXPERIENCE
     Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
     ======================================================================= -->
<style>
/* Page & Canvas */
.vossy-top-security-bar {
  background: #22A06B;
  color: #FFFFFF;
  padding: 0.55rem 0;
  font-size: 0.78rem;
  font-weight: 700;
  letter-spacing: 0.02em;
  border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}
.vossy-security-bar-content {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.45rem;
  text-align: center;
  flex-wrap: wrap;
}
.vossy-checkout-page {
  background: #F8FAF9;
  min-height: 80vh;
  padding: 2.25rem 0 3.5rem;
  color: #0B2922;
}

/* Page Headline */
.vossy-page-header {
  max-width: 680px;
  margin: 0 auto 2rem;
}
.vossy-main-title {
  font-size: clamp(1.75rem, 2.5vw, 2.25rem);
  font-weight: 800;
  color: #0B2922;
  margin-bottom: 0.45rem;
  letter-spacing: -0.02em;
}
.vossy-main-sub {
  color: #556B63;
  font-size: 0.88rem;
  line-height: 1.5;
  margin: 0;
}

/* Alert */
.vossy-alert-danger {
  background: #FEE2E2;
  border: 1.5px solid #FECACA;
  color: #DC2626;
  padding: 0.85rem 1.15rem;
  border-radius: 10px;
  display: flex;
  align-items: center;
  gap: 0.6rem;
  margin-bottom: 1.5rem;
  font-size: 0.88rem;
  font-weight: 700;
}

/* 2-Column Responsive Layout */
.vossy-checkout-grid {
  display: grid;
  grid-template-columns: 1fr 370px;
  gap: 2rem;
  align-items: start;
}
@media (max-width: 992px) {
  .vossy-checkout-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
}

/* Studio Highlight Banner */
.vossy-studio-highlight {
  background: linear-gradient(135deg, #EFF8F3 0%, #FFFFFF 100%);
  border: 1.5px solid #22A06B;
  border-radius: 14px;
  padding: 1.15rem 1.35rem;
  margin-bottom: 1.25rem;
  box-shadow: 0 4px 14px rgba(34, 160, 107, 0.08);
}
.vossy-studio-head {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 1rem;
}
.vossy-studio-badge {
  display: inline-block;
  background: #22A06B;
  color: #FFFFFF;
  font-size: 0.68rem;
  font-weight: 800;
  padding: 2px 8px;
  border-radius: 20px;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  margin-bottom: 4px;
}
.vossy-studio-title {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 2px;
}
.vossy-studio-svc {
  font-size: 0.84rem;
  color: #4B5E55;
  font-weight: 600;
}
.vossy-studio-price-box {
  text-align: right;
  flex-shrink: 0;
}
.vossy-studio-price-lbl {
  display: block;
  font-size: 0.68rem;
  color: #6C8276;
  font-weight: 700;
  text-transform: uppercase;
}
.vossy-studio-price-val {
  font-size: 1.35rem;
  font-weight: 900;
  color: #0B2922;
}
.vossy-studio-addons {
  font-size: 0.8rem;
  color: #2D3748;
  background: rgba(34, 160, 107, 0.08);
  padding: 6px 12px;
  border-radius: 8px;
  margin-top: 0.65rem;
}

/* Vossy Form Cards */
.vossy-form-card {
  background: #FFFFFF;
  border: 1.5px solid #E2ECE5;
  border-radius: 14px;
  padding: 1.5rem 1.65rem;
  margin-bottom: 1.25rem;
  box-shadow: 0 2px 10px rgba(11, 41, 34, 0.03);
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}
.vossy-form-card:hover {
  border-color: #D2E4DC;
  box-shadow: 0 4px 16px rgba(11, 41, 34, 0.05);
}
.vossy-card-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.15rem;
  padding-bottom: 0.65rem;
  border-bottom: 1px solid #EEF4F0;
}
.vossy-card-title {
  font-size: 1.18rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0;
  letter-spacing: -0.01em;
}
.vossy-step-pill {
  font-size: 0.7rem;
  font-weight: 700;
  color: #198754;
  background: #EAF3EE;
  padding: 0.2rem 0.65rem;
  border-radius: 12px;
}

/* Form Grid & Input Styling */
.vossy-row-2col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}
@media (max-width: 600px) {
  .vossy-row-2col {
    grid-template-columns: 1fr;
    gap: 0;
  }
}
.vossy-form-group {
  margin-bottom: 0.95rem;
}
.vossy-label {
  display: block;
  font-size: 0.78rem;
  font-weight: 700;
  color: #0B2922;
  margin-bottom: 0.35rem;
}
.vossy-required {
  color: #DC2626;
}
.vossy-input-wrap {
  position: relative;
  width: 100%;
}
.vossy-input {
  width: 100%;
  background: #FDFEFE;
  border: 1.5px solid #D2E4DC;
  border-radius: 8px;
  color: #0B2922;
  padding: 0.65rem 0.85rem;
  font-size: 0.86rem;
  font-family: inherit;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
  box-sizing: border-box;
}
.vossy-input:focus {
  border-color: #22A06B;
  background: #FFFFFF;
  box-shadow: 0 0 0 3px rgba(34, 160, 107, 0.14);
}
.vossy-input::placeholder {
  color: #8CA297;
}

/* Dynamic Input Checkmark (Reference "Barry ✓") */
.vossy-valid-check {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%) scale(0.6);
  color: #22A06B;
  font-size: 18px;
  pointer-events: none;
  opacity: 0;
  transition: opacity 0.2s ease, transform 0.2s ease;
}
.vossy-input.is-valid + .vossy-valid-check {
  opacity: 1;
  transform: translateY(-50%) scale(1);
}
.vossy-input.is-valid {
  border-color: #22A06B;
  padding-right: 2.2rem;
}

/* Select Dropdown styling */
.vossy-select {
  appearance: none;
  background-color: #FDFEFE;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='%2322A06B' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 0.85rem center;
  background-size: 12px;
  padding-right: 2rem;
  cursor: pointer;
}
.vossy-textarea {
  resize: vertical;
  min-height: 80px;
  line-height: 1.45;
}
.vossy-input-subtext {
  display: block;
  font-size: 0.72rem;
  color: #6C8276;
  margin-top: 3px;
}
.vossy-hint-text {
  font-size: 0.72rem;
  color: #6C8276;
  font-style: italic;
  margin-top: 4px;
}

/* Need to Know Accordions */
.vossy-policy-list {
  display: flex;
  flex-direction: column;
  gap: 0.45rem;
}
.vossy-policy-item {
  border: 1px solid #E5EFE9;
  border-radius: 10px;
  overflow: hidden;
  background: #FDFEFE;
  transition: all 0.2s ease;
}
.vossy-policy-item:hover {
  border-color: #C8E0D2;
}
.vossy-policy-item.is-open {
  border-color: #22A06B;
  background: #FFFFFF;
}
.vossy-policy-trigger {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 0.65rem;
  padding: 0.75rem 1rem;
  background: none;
  border: none;
  cursor: pointer;
  text-align: left;
  font-family: inherit;
}
.vossy-policy-icon {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #EAF3EE;
  color: #22A06B;
  font-weight: 800;
  font-size: 14px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease;
  line-height: 1;
}
.vossy-policy-item.is-open .vossy-policy-icon {
  background: #22A06B;
  color: #FFFFFF;
  transform: rotate(45deg);
}
.vossy-policy-title {
  font-size: 0.84rem;
  font-weight: 700;
  color: #0B2922;
  transition: color 0.2s;
}
.vossy-policy-item.is-open .vossy-policy-title {
  color: #22A06B;
}
.vossy-policy-body {
  display: none;
  padding: 0 1rem 0.85rem 2.65rem;
  font-size: 0.78rem;
  color: #4B5E55;
  line-height: 1.5;
}
.vossy-policy-body p {
  margin: 0;
}

/* Payment & Confirmation Card */
.vossy-payment-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.15rem;
  padding-bottom: 0.65rem;
  border-bottom: 1px solid #EEF4F0;
}
.vossy-ssl-seal {
  display: flex;
  align-items: center;
  gap: 0.35rem;
  font-size: 0.74rem;
  font-weight: 700;
  color: #198754;
  background: #EAF3EE;
  padding: 0.25rem 0.65rem;
  border-radius: 20px;
  border: 1px solid #D2E4DC;
}
.vossy-payment-modes {
  display: flex;
  flex-direction: column;
  gap: 0.65rem;
  margin-bottom: 1.15rem;
}
.vossy-radio-box {
  display: flex;
  align-items: flex-start;
  gap: 0.85rem;
  padding: 0.85rem 1rem;
  border: 1.5px solid #D2E4DC;
  border-radius: 10px;
  background: #FDFEFE;
  cursor: pointer;
  transition: all 0.2s ease;
}
.vossy-radio-box:hover {
  border-color: #22A06B;
  background: #F8FBF9;
}
.vossy-radio-box.active {
  border-color: #22A06B;
  background: #F4F9F6;
  box-shadow: 0 2px 8px rgba(34, 160, 107, 0.08);
}
.vossy-radio-box input[type="radio"] {
  accent-color: #22A06B;
  margin-top: 3px;
  width: 16px;
  height: 16px;
  cursor: pointer;
}
.vossy-radio-title {
  display: flex;
  align-items: center;
  gap: 0.45rem;
  font-size: 0.88rem;
  color: #0B2922;
  margin-bottom: 2px;
}
.vossy-radio-badge {
  background: #22A06B;
  color: #FFFFFF;
  font-size: 0.64rem;
  font-weight: 800;
  padding: 1px 6px;
  border-radius: 4px;
  text-transform: uppercase;
}
.vossy-radio-sub {
  font-size: 0.76rem;
  color: #556B63;
  line-height: 1.35;
}
.vossy-terms-wrap {
  margin: 1.15rem 0;
}
.vossy-checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 0.55rem;
  font-size: 0.78rem;
  color: #3F554B;
  cursor: pointer;
  line-height: 1.4;
}
.vossy-checkbox-label input[type="checkbox"] {
  accent-color: #22A06B;
  width: 16px;
  height: 16px;
  margin-top: 2px;
  cursor: pointer;
}
.vossy-checkbox-label a {
  color: #22A06B;
  font-weight: 700;
  text-decoration: underline;
}

/* Total Callout Box */
.vossy-total-callout-box {
  background: #F4F8F6;
  border: 1.5px solid #D6E8DC;
  border-radius: 10px;
  padding: 1rem 1.15rem;
  margin-bottom: 1.25rem;
}
.vossy-total-row {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  margin-bottom: 0.35rem;
}
.vossy-total-lbl {
  font-size: 1.05rem;
  font-weight: 800;
  color: #0B2922;
}
.vossy-total-val {
  font-size: 1.45rem;
  font-weight: 900;
  color: #198754;
  letter-spacing: -0.01em;
}
.vossy-total-subtext {
  font-size: 0.74rem;
  color: #556B63;
  line-height: 1.45;
  margin: 0;
}

/* Submit Button */
.vossy-btn-confirm {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background: #22A06B;
  color: #FFFFFF;
  border: none;
  border-radius: 8px;
  padding: 0.85rem 1.5rem;
  font-size: 0.95rem;
  font-weight: 800;
  cursor: pointer;
  box-shadow: 0 4px 16px rgba(34, 160, 107, 0.28);
  transition: all 0.22s ease;
}
.vossy-btn-confirm:hover {
  background: #198754;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(34, 160, 107, 0.38);
}
.vossy-btn-confirm:active {
  transform: scale(0.98);
}
.vossy-submit-subtext {
  text-align: center;
  font-size: 0.74rem;
  color: #6C8276;
  margin-top: 0.55rem;
}

/* ==========================================================================
   RIGHT COLUMN: STICKY BOOKING SUMMARY CARD (Matching Reference 1:1)
   ========================================================================== */
.vossy-summary-card {
  position: sticky;
  top: 90px;
  background: #FFFFFF;
  border: 1.5px solid #D6E8DC;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 6px 24px rgba(11, 41, 34, 0.06);
}
.vossy-summary-top-banner {
  background: #0B2922;
  color: #FFFFFF;
  font-size: 0.74rem;
  font-weight: 700;
  padding: 0.55rem 0.85rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.35rem;
  letter-spacing: 0.02em;
}
.vossy-summary-media {
  position: relative;
  width: 100%;
  height: 185px;
  overflow: hidden;
  background: #EAF3EE;
}
.vossy-summary-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}
.vossy-summary-card:hover .vossy-summary-img {
  transform: scale(1.03);
}
.vossy-summary-media-badge {
  position: absolute;
  bottom: 10px;
  left: 10px;
  background: rgba(11, 41, 34, 0.85);
  color: #FFFFFF;
  font-size: 0.68rem;
  font-weight: 700;
  padding: 0.2rem 0.6rem;
  border-radius: 20px;
  display: flex;
  align-items: center;
  gap: 0.25rem;
  backdrop-filter: blur(4px);
}
.vossy-summary-body {
  padding: 1.15rem 1.25rem 1.35rem;
}
.vossy-summary-title {
  font-size: 1.2rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 0.25rem;
  letter-spacing: -0.01em;
}
.vossy-summary-location {
  display: flex;
  align-items: center;
  gap: 0.3rem;
  font-size: 0.74rem;
  color: #4B5E55;
  margin-bottom: 0.95rem;
}

/* Specs Table */
.vossy-specs-table {
  display: flex;
  flex-direction: column;
  gap: 0.45rem;
  font-size: 0.78rem;
}
.vossy-spec-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 0.5rem;
}
.vossy-spec-key {
  color: #6C8276;
}
.vossy-spec-val {
  color: #0B2922;
  font-weight: 700;
  text-align: right;
}

.vossy-summary-divider {
  height: 1px;
  background: #EAF3EE;
  margin: 0.95rem 0;
}

/* Price Breakdown */
.vossy-price-breakdown {
  display: flex;
  flex-direction: column;
  gap: 0.4rem;
  font-size: 0.78rem;
}
.vossy-breakdown-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 0.5rem;
}
.vossy-b-lbl {
  color: #556B63;
}
.vossy-b-val {
  font-weight: 700;
  color: #0B2922;
}

/* Grand Total */
.vossy-grand-total-row {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 0.5rem;
  margin-top: 0.2rem;
}
.vossy-gt-label {
  font-size: 0.82rem;
  font-weight: 800;
  color: #0B2922;
  text-transform: uppercase;
  letter-spacing: 0.02em;
}
.vossy-gt-badge {
  font-size: 0.66rem;
  font-weight: 700;
  color: #198754;
  margin-top: 2px;
}
.vossy-gt-amount {
  font-size: 1.45rem;
  font-weight: 900;
  color: #0B2922;
  letter-spacing: -0.01em;
}

/* Direct Support Help Box */
.vossy-support-box {
  margin-top: 1.15rem;
  background: #F4F8F6;
  border: 1px solid #D6E8DC;
  border-radius: 10px;
  padding: 0.75rem 0.85rem;
  display: flex;
  align-items: center;
  gap: 0.65rem;
}
.vossy-support-title {
  font-size: 0.72rem;
  color: #556B63;
}
.vossy-support-call {
  font-size: 0.82rem;
  color: #0B2922;
}
.vossy-support-call a {
  color: #22A06B;
  text-decoration: none;
}
.vossy-support-call a:hover {
  text-decoration: underline;
}

/* ==========================================================================
   MOBILE RESPONSIVENESS (<= 768px)
   ========================================================================== */
@media (max-width: 768px) {
  .vossy-top-security-bar {
    font-size: 0.7rem;
    padding: 0.45rem 0.5rem;
  }
  .vossy-checkout-page {
    padding: 1.25rem 0 2.5rem;
  }
  .vossy-page-header {
    margin-bottom: 1.25rem;
  }
  .vossy-main-title {
    font-size: 1.45rem;
    margin-bottom: 0.25rem;
  }
  .vossy-main-sub {
    font-size: 0.78rem;
    line-height: 1.4;
    padding: 0 0.5rem;
  }
  .vossy-form-card {
    padding: 1.15rem 1rem;
    border-radius: 12px;
    margin-bottom: 0.85rem;
  }
  .vossy-card-header {
    margin-bottom: 0.85rem;
  }
  .vossy-card-title {
    font-size: 1.05rem;
  }
  .vossy-input {
    font-size: 16px !important; /* iOS Safari auto-zoom guard */
    padding: 0.55rem 0.75rem;
  }
  .vossy-summary-card {
    position: static;
    margin-top: 0.5rem;
  }
  .vossy-summary-media {
    height: 160px;
  }
}

/* =======================================================================
   CARD A: SELECTED SERVICES & QUANTITY STEPPER (Strict A1 Website Theme)
   ======================================================================= */
.cart-selected-services-card {
  background: #FFFFFF;
  border: 1px solid #D6E8DC;
  border-radius: 18px;
  padding: 1.25rem 1.5rem;
  margin-bottom: 1.25rem;
  box-shadow: 0 6px 20px rgba(11, 41, 34, 0.04);
}
.cart-services-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-bottom: 0.85rem;
  border-bottom: 1px solid #EAF3EE;
}
.cart-services-heading {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0;
  display: flex;
  align-items: center;
  gap: 0.35rem;
}
.btn-clear-cart {
  background: none;
  border: none;
  color: #DC2626;
  font-weight: 700;
  font-size: 0.88rem;
  cursor: pointer;
  padding: 4px 8px;
  border-radius: 6px;
  transition: all 0.2s ease;
}
.btn-clear-cart:hover {
  background: #FEF2F2;
  color: #B91C1C;
}
.cart-service-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  padding-top: 1rem;
}
.cart-service-info {
  display: flex;
  align-items: center;
  gap: 1rem;
  min-width: 0;
}
.cart-service-thumb {
  width: 68px;
  height: 68px;
  border-radius: 12px;
  object-fit: cover;
  flex-shrink: 0;
  border: 1px solid #D6E8DC;
}
.cart-service-text-wrap {
  min-width: 0;
}
.cart-service-title {
  font-size: 1rem;
  font-weight: 700;
  color: #0B2922;
  margin: 0 0 0.2rem;
  line-height: 1.3;
}
.cart-service-duration {
  font-size: 0.82rem;
  color: #526E65;
  margin-bottom: 0.25rem;
}
.cart-service-unit-price {
  font-size: 0.9rem;
  font-weight: 700;
  color: #22A06B;
}
.cart-service-controls {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 0.4rem;
  flex-shrink: 0;
}
.cart-qty-stepper {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  border: 1px solid #D6E8DC;
  border-radius: 8px;
  padding: 2px 4px;
  background: #FFFFFF;
}
.cart-stepper-btn {
  width: 26px;
  height: 26px;
  border: 1px solid #D6E8DC;
  border-radius: 6px;
  background: #EAF3EE;
  color: #0B2922;
  font-size: 1.05rem;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  line-height: 1;
  transition: all 0.15s ease;
}
.cart-stepper-btn:hover {
  background: #22A06B;
  color: #FFFFFF;
  border-color: #22A06B;
}
.cart-stepper-val {
  min-width: 22px;
  text-align: center;
  font-size: 0.95rem;
  font-weight: 700;
  color: #0B2922;
}
.cart-service-row-total {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0B2922;
}

/* =======================================================================
   CARD B: FREQUENTLY ADDED ADD-ONS GRID (Strict A1 Website Theme)
   ======================================================================= */
.cart-addons-section-card {
  background: #FFFFFF;
  border: 1px solid #D6E8DC;
  border-radius: 18px;
  padding: 1.35rem 1.5rem;
  margin-bottom: 1.5rem;
  box-shadow: 0 6px 20px rgba(11, 41, 34, 0.04);
}
.cart-addons-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 0.35rem;
}
.cart-addons-title-wrap {
  display: flex;
  align-items: center;
  gap: 0.45rem;
}
.cart-addons-title {
  font-size: 1.1rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0;
}
.cart-addons-badge {
  background: #EAF3EE;
  color: #1B8356;
  border: 1px solid #D6E8DC;
  font-size: 0.72rem;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 9999px;
  white-space: nowrap;
}
.cart-addons-sub {
  font-size: 0.82rem;
  color: #526E65;
  margin: 0 0 1rem 0;
}
.cart-addons-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
}
.cart-addon-item {
  border: 1px solid #D6E8DC;
  border-radius: 14px;
  padding: 10px 12px;
  background: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: all 0.2s ease;
}
.cart-addon-item:hover {
  border-color: #22A06B;
  box-shadow: 0 4px 14px rgba(34, 160, 107, 0.08);
}
.cart-addon-item.is-selected {
  border-color: #22A06B;
  background: #EAF3EE;
}
.cart-addon-left {
  display: flex;
  align-items: center;
  gap: 10px;
  min-width: 0;
}
.cart-addon-thumb {
  width: 48px;
  height: 48px;
  border-radius: 8px;
  object-fit: cover;
  flex-shrink: 0;
  border: 1px solid #D6E8DC;
}
.cart-addon-details {
  min-width: 0;
}
.cart-addon-tag {
  display: inline-block;
  background: #EAF3EE;
  color: #166534;
  border: 1px solid rgba(34, 160, 107, 0.2);
  font-size: 0.68rem;
  font-weight: 700;
  padding: 2px 6px;
  border-radius: 4px;
  margin-bottom: 2px;
}
.cart-addon-title {
  font-size: 0.86rem;
  font-weight: 700;
  color: #0B2922;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 150px;
  margin-bottom: 2px;
}
.cart-addon-pricing {
  font-size: 0.78rem;
  font-weight: 700;
  color: #22A06B;
}
.btn-addon-add {
  border: none;
  border-radius: 9999px;
  background: #0B2922;
  color: #FFFFFF;
  font-size: 0.78rem;
  font-weight: 700;
  padding: 6px 14px;
  cursor: pointer;
  flex-shrink: 0;
  transition: all 0.2s ease;
  display: inline-flex;
  align-items: center;
  gap: 3px;
}
.btn-addon-add:hover {
  background: #1B8356;
  transform: translateY(-1px);
}
.btn-addon-add.is-added {
  background: #22A06B !important;
  color: #FFFFFF !important;
  box-shadow: 0 3px 10px rgba(34, 160, 107, 0.35);
}
@media (max-width: 640px) {
  .cart-addons-grid {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  .cart-service-row {
    flex-wrap: wrap;
  }
  .cart-service-controls {
    width: 100%;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding-top: 0.5rem;
    border-top: 1px dashed #E2E8F0;
  }
}

/* =======================================================================
   AUTHENTIC EMPTY CART STYLES (Strict A1 Brand Theme)
   Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
   ======================================================================= */
.empty-cart-page {
  background: #F8FBF9;
  min-height: calc(100vh - 280px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 4rem 1.25rem 5.5rem;
  box-sizing: border-box;
}
.empty-cart-card {
  background: #FFFFFF;
  border: 1px solid #D6E8DC;
  border-radius: 28px;
  box-shadow: 0 16px 40px rgba(11, 41, 34, 0.05);
  max-width: 540px;
  width: 100%;
  margin: 0 auto;
  padding: 3.75rem 2.5rem 3.5rem;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box;
}
.empty-cart-icon-circle {
  width: 82px;
  height: 82px;
  border-radius: 50%;
  background: #EAF3EE;
  border: 1.5px solid rgba(34, 160, 107, 0.22);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #22A06B;
  margin-bottom: 1.5rem;
  flex-shrink: 0;
}
.empty-cart-icon-circle svg {
  width: 38px;
  height: 38px;
  fill: #22A06B;
}
.empty-cart-title {
  font-family: inherit;
  font-size: 1.65rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 0.85rem 0;
  letter-spacing: -0.02em;
  line-height: 1.2;
}
.empty-cart-subtitle {
  font-size: 0.92rem;
  color: #526E65;
  line-height: 1.55;
  max-width: 430px;
  margin: 0 0 2rem 0;
  text-align: center;
}
.btn-empty-cart-explore {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background: linear-gradient(135deg, #22A06B 0%, #168052 100%);
  color: #FFFFFF !important;
  font-size: 0.95rem;
  font-weight: 700;
  text-decoration: none !important;
  padding: 0.92rem 2.4rem;
  border-radius: 9999px;
  box-shadow: 0 8px 24px rgba(34, 160, 107, 0.32);
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  border: none;
  cursor: pointer;
}
.btn-empty-cart-explore:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(34, 160, 107, 0.42);
  background: linear-gradient(135deg, #1A8858 0%, #0F5E3B 100%);
  color: #FFFFFF !important;
}
.btn-empty-cart-explore:active {
  transform: translateY(0);
  box-shadow: 0 6px 16px rgba(34, 160, 107, 0.28);
}
.empty-cart-arrow {
  font-size: 1.15rem;
  line-height: 1;
  transition: transform 0.2s ease;
}
.btn-empty-cart-explore:hover .empty-cart-arrow {
  transform: translateX(4px);
}
@media (max-width: 640px) {
  .empty-cart-page {
    padding: 2.25rem 1rem 4rem;
    min-height: calc(100vh - 220px);
  }
  .empty-cart-card {
    padding: 2.75rem 1.5rem 2.5rem;
    border-radius: 22px;
  }
  .empty-cart-icon-circle {
    width: 72px;
    height: 72px;
    margin-bottom: 1.25rem;
  }
  .empty-cart-icon-circle svg {
    width: 34px;
    height: 34px;
  }
  .empty-cart-title {
    font-size: 1.4rem;
  }
  .empty-cart-subtitle {
    font-size: 0.88rem;
    max-width: 320px;
    margin-bottom: 1.75rem;
  }
  .btn-empty-cart-explore {
    width: 100%;
    max-width: 320px;
    padding: 0.85rem 1.5rem;
  }
}
</style>

<?php if ($hasCartItem): ?>
<!-- =======================================================================
     DYNAMIC SYNCHRONIZATION JAVASCRIPT
     ======================================================================= -->
<script>
// =======================================================================
// CART REVIEW & ADD-ONS SYNCHRONIZATION STATE
// =======================================================================
let currentServiceQty = 1;
let currentBaseUnitPrice = <?= (int)$defaultBasePrice ?>;
let selectedCartAddons = {}; // { [key]: { name, price } }

// Check if user came with prefilled addons
<?php if (!empty($prefilledAddons)): ?>
(function() {
  const preAddons = <?= json_encode($prefilledAddons) ?>.split(',');
  preAddons.forEach(a => {
    const trimmed = a.trim();
    if (trimmed) {
      <?php foreach ($frequentlyAddedAddons as $fa): ?>
        if (trimmed.toLowerCase().includes(<?= json_encode(strtolower($fa['name'])) ?>) || trimmed.toLowerCase().includes(<?= json_encode($fa['key']) ?>)) {
          selectedCartAddons[<?= json_encode($fa['key']) ?>] = { name: <?= json_encode($fa['name']) ?>, price: <?= (int)$fa['price'] ?> };
          const btn = document.getElementById('addon-btn-' + <?= json_encode($fa['key']) ?>);
          if (btn) {
            btn.classList.add('is-added');
            btn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 14px; vertical-align: middle;">check</span> Added';
          }
          const card = document.getElementById('addon-card-' + <?= json_encode($fa['key']) ?>);
          if (card) card.classList.add('is-selected');
        }
      <?php endforeach; ?>
    }
  });
})();
<?php endif; ?>

function updateServiceQty(delta) {
  const newQty = currentServiceQty + delta;
  if (newQty < 1) {
    if (confirm('Do you want to remove this service from your cart?')) {
      clearCartService();
    }
    return;
  }
  currentServiceQty = newQty;
  const qtyEl = document.getElementById('serviceQtyVal');
  if (qtyEl) qtyEl.innerText = currentServiceQty;

  const rowTotal = currentBaseUnitPrice * currentServiceQty;
  const rowTotalEl = document.getElementById('serviceRowTotal');
  if (rowTotalEl) rowTotalEl.innerText = '₹' + rowTotal.toLocaleString('en-IN');

  recalculateCartTotals();
}

function clearCartService() {
  if (confirm('Clear all services and empty your cart?')) {
    window.location.href = '<?= SITE_URL ?>/cart/';
  }
}

function toggleCartAddon(key, name, price, btnEl) {
  const card = document.getElementById('addon-card-' + key);
  if (selectedCartAddons[key]) {
    delete selectedCartAddons[key];
    if (btnEl) {
      btnEl.classList.remove('is-added');
      btnEl.innerHTML = '+ Add';
    }
    if (card) card.classList.remove('is-selected');
  } else {
    selectedCartAddons[key] = { name: name, price: price };
    if (btnEl) {
      btnEl.classList.add('is-added');
      btnEl.innerHTML = '<span class="material-symbols-outlined" style="font-size: 14px; vertical-align: middle;">check</span> Added';
    }
    if (card) card.classList.add('is-selected');
  }
  recalculateCartTotals();
}

function recalculateCartTotals() {
  const baseTotal = currentBaseUnitPrice * currentServiceQty;
  let addonsSum = 0;
  const addonNames = [];
  for (const k in selectedCartAddons) {
    addonsSum += selectedCartAddons[k].price;
    addonNames.push(selectedCartAddons[k].name + ' (₹' + selectedCartAddons[k].price + ')');
  }
  const grandTotal = baseTotal + addonsSum;

  // Update hidden inputs
  const hiddenEst = document.getElementById('hidden_estimated_amount');
  if (hiddenEst) hiddenEst.value = grandTotal;
  const hiddenAddons = document.getElementById('hidden_selected_addons');
  if (hiddenAddons) hiddenAddons.value = addonNames.join(', ');
  const hiddenQty = document.getElementById('hidden_service_quantity');
  if (hiddenQty) hiddenQty.value = currentServiceQty;

  // Update Sticky Summary
  const summaryBasePrice = document.getElementById('summaryBasePrice');
  if (summaryBasePrice) {
    summaryBasePrice.innerText = '₹' + baseTotal.toLocaleString('en-IN') + (currentServiceQty > 1 ? ` (${currentServiceQty}x)` : '');
  }

  const summaryAddonsRow = document.getElementById('summaryAddonsRow');
  const summaryAddonsPrice = document.getElementById('summaryAddonsPrice');
  if (summaryAddonsRow && summaryAddonsPrice) {
    if (addonsSum > 0) {
      summaryAddonsRow.style.display = 'flex';
      summaryAddonsPrice.innerText = '+ ₹' + addonsSum.toLocaleString('en-IN') + ' (' + Object.keys(selectedCartAddons).length + ')';
    } else {
      summaryAddonsRow.style.display = 'none';
    }
  }

  const summaryTotal = document.getElementById('summaryTotal');
  if (summaryTotal) {
    summaryTotal.innerText = '₹' + grandTotal.toLocaleString('en-IN');
  }

  const formTotalVal = document.getElementById('formTotalVal');
  if (formTotalVal) {
    formTotalVal.innerText = '₹' + grandTotal.toLocaleString('en-IN');
  }

  // Update header cart badge count
  const badge = document.getElementById('header-cart-badge');
  if (badge) {
    badge.innerText = 1 + Object.keys(selectedCartAddons).length;
  }
}

// Dynamic Service Selector Handler
function handleServiceChange(serviceSlug) {
  const map = window.A1_SERVICES_MAP || {};
  const svc = map[serviceSlug];
  if (!svc) return;

  // Update Summary Image
  const img = document.getElementById('summaryImg');
  if (img && svc.thumb) {
    img.src = svc.thumb;
    img.alt = svc.name;
  }

  // Update Summary Title
  const title = document.getElementById('summaryServiceTitle');
  if (title) title.innerText = svc.name;

  // Sync Cart Selected Services Card
  currentBaseUnitPrice = svc.price;
  const unitPriceEl = document.getElementById('serviceUnitPrice');
  if (unitPriceEl) unitPriceEl.innerText = svc.price;

  const titleEl = document.getElementById('cartServiceTitle');
  if (titleEl) titleEl.innerText = svc.name;

  const thumbEl = document.getElementById('cartServiceThumb');
  if (thumbEl && svc.thumb) thumbEl.src = svc.thumb;

  const durationEl = document.getElementById('cartServiceDuration');
  if (durationEl && svc.time) durationEl.innerText = 'Est. duration: ' + svc.time;

  const rowTotal = currentBaseUnitPrice * currentServiceQty;
  const rowTotalEl = document.getElementById('serviceRowTotal');
  if (rowTotalEl) rowTotalEl.innerText = '₹' + rowTotal.toLocaleString('en-IN');

  recalculateCartTotals();
}

// Dynamic Date Handler
function handleDateChange(dateVal) {
  if (!dateVal) return;
  try {
    const d = new Date(dateVal);
    const options = { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' };
    const formatted = d.toLocaleDateString('en-US', options);
    const summaryDate = document.getElementById('summaryDate');
    if (summaryDate) summaryDate.innerText = formatted;
  } catch (e) {
    console.error(e);
  }
}

// Dynamic Slot Handler
function handleSlotChange(slotVal) {
  const summarySlot = document.getElementById('summarySlot');
  if (summarySlot) summarySlot.innerText = slotVal;
}

// Dynamic City Handler
function handleCityChange(cityVal) {
  const summaryLoc = document.getElementById('summaryLocation');
  if (summaryLoc) {
    summaryLoc.innerHTML = `
      <span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span>
      <span>${cityVal ? cityVal : 'Kashipur'} Hub • Doorstep Mechanized Service</span>
    `;
  }
}

// Name & Phone Input Checkmark Indicators (Matches reference "Barry ✓")
document.addEventListener('DOMContentLoaded', function() {
  const nameInput = document.getElementById('name');
  if (nameInput) {
    nameInput.addEventListener('input', function() {
      if (this.value.trim().length >= 2) {
        this.classList.add('is-valid');
      } else {
        this.classList.remove('is-valid');
      }
    });
  }

  const phoneInput = document.getElementById('phone');
  if (phoneInput) {
    phoneInput.addEventListener('input', function() {
      const val = this.value.replace(/[^0-9]/g, '');
      if (val.length === 10 && /^[6-9]\d{9}$/.test(val)) {
        this.classList.add('is-valid');
      } else {
        this.classList.remove('is-valid');
      }
    });
  }

  // Pre-validate if already filled
  if (nameInput && nameInput.value.trim().length >= 2) nameInput.classList.add('is-valid');
  if (phoneInput) {
    const val = phoneInput.value.replace(/[^0-9]/g, '');
    if (val.length === 10 && /^[6-9]\d{9}$/.test(val)) phoneInput.classList.add('is-valid');
  }
});
</script>
<?php endif; ?>

<?php require __DIR__ . '/../components/footer.php'; ?>
