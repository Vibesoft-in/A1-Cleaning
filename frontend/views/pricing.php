<?php
/**
 * A1 Cleaning Signature Pricing Studio & Interactive Cost Console
 * Unique, Bespoke Architecture & Custom Commercial Photography
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "Configure Your Cleaning Estimate Live | A1 Cleaning Studio";
$pageDescription = "Interactive doorstep cleaning cost estimator for Kashipur, Jaspur & Ramnagar. Select your mechanized service, package tier, and custom add-ons with transparent instant pricing.";
$canonicalUrl = SeoHelper::getCanonicalUrl('pricing');
$currentRoute = 'pricing';

require __DIR__ . '/../components/header.php';
?>

<!-- =========================================================================
     1. STUDIO HERO & SERVICE SELECTOR RIBBON
     ========================================================================= -->
<section class="a1-pricing-hero">
  <div class="container">
    
    <!-- Top Trust Row -->
    <div class="a1-studio-trust-strip">
      <div class="a1-trust-pill">
        <span class="material-symbols-outlined">verified</span>
        <span>Zero Advance Payment</span>
      </div>
      <div class="a1-trust-pill">
        <span class="material-symbols-outlined">sentiment_very_satisfied</span>
        <span>Pay After 100% Satisfaction</span>
      </div>
      <div class="a1-trust-pill">
        <span class="material-symbols-outlined">eco</span>
        <span>100% Eco-Safe Non-Toxic Formulas</span>
      </div>
      <div class="a1-trust-pill">
        <span class="material-symbols-outlined">precision_manufacturing</span>
        <span>German High-Pressure Equipment</span>
      </div>
    </div>

    <!-- Main Title & Guarantee Card Row -->
    <div class="a1-hero-header-row">
      <div class="a1-hero-title-wrap">
        <span class="a1-studio-kicker">
          <span class="material-symbols-outlined icon-xs">tune</span>
          A1 Interactive Cost Studio
        </span>
        <h1 class="a1-hero-title">
          Configure Your Cleaning Estimate <span class="highlight-text">Live</span>
        </h1>
        <p class="a1-hero-sub">
          Select your core mechanized cleaning service, choose an intensity package tier, and fine-tune with precision add-ons for an upfront transparent quote.
        </p>
      </div>

      <div class="a1-hero-guarantee-card">
        <div class="a1-guarantee-icon">
          <span class="material-symbols-outlined">receipt_long</span>
        </div>
        <div>
          <h4 class="a1-guarantee-title">Written Quote Guarantee</h4>
          <p class="a1-guarantee-sub">Zero Hidden Surcharges</p>
        </div>
      </div>
    </div>

    <!-- 11 Service Category Ribbon (Elevated Slider) -->
    <div class="a1-services-slider-wrap">
      <div class="a1-services-slider" id="servicesSlider">
        
        <!-- Slide 1: 3x2 Grid (First 6 Services - Default View) -->
        <div class="a1-services-slide" id="servicesSlide1">

        <!-- 1. Bathroom Cleaning (Default Selected) -->
        <div class="a1-svc-card active" onclick="selectServiceCategory('bathroom-cleaning', this)" data-service="bathroom-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/bathroom-cleaning.jpg" alt="Bathroom Deep Clean" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">bathtub</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Bathroom Deep Clean</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹600</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Home Deep Cleaning -->
        <div class="a1-svc-card" onclick="selectServiceCategory('home-cleaning', this)" data-service="home-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/home-cleaning.jpg" alt="Home Deep Clean" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">home</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Home Deep Clean</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹1,999</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 3. Kitchen Deep Cleaning -->
        <div class="a1-svc-card" onclick="selectServiceCategory('kitchen-cleaning', this)" data-service="kitchen-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/kitchen-cleaning.jpg" alt="Kitchen Degreasing" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">countertops</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Kitchen Degreasing</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹1,299</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. Sofa & Upholstery Cleaning -->
        <div class="a1-svc-card" onclick="selectServiceCategory('sofa-cleaning', this)" data-service="sofa-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/sofa-cleaning.jpg" alt="Sofa Shampooing" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">chair</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Sofa Shampooing</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹249</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 5. 6-Stage Water Tank Clean -->
        <div class="a1-svc-card" onclick="selectServiceCategory('water-tank-cleaning', this)" data-service="water-tank-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/water-tank-cleaning.jpg" alt="Water Tank Clean" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">water_drop</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Water Tank Clean</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹799</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 6. Carpet & Rug Washing -->
        <div class="a1-svc-card" onclick="selectServiceCategory('carpet-cleaning', this)" data-service="carpet-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/carpet-cleaning.jpg" alt="Carpet &amp; Rug Wash" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">layers</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Carpet &amp; Rug Wash</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹499</span>
              </div>
            </div>
          </div>
        </div>

        </div><!-- End Slide 1 -->

        <!-- Slide 2: 3x2 Grid (Remaining 5 Services - Swipeable) -->
        <div class="a1-services-slide" id="servicesSlide2">

        <!-- 7. Balcony & Floor Scrubbing -->
        <div class="a1-svc-card" onclick="selectServiceCategory('balcony-cleaning', this)" data-service="balcony-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/balcony-cleaning.jpg" alt="Balcony &amp; Floor Scrub" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">balcony</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Balcony &amp; Floor Scrub</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹499</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 8. Curtain & Blinds Cleaning -->
        <div class="a1-svc-card" onclick="selectServiceCategory('curtain-cleaning', this)" data-service="curtain-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/curtain-cleaning.jpg" alt="Curtain Steam Clean" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">curtains</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Curtain Steam Clean</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹60</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 9. Move-In / Move-Out Clean -->
        <div class="a1-svc-card" onclick="selectServiceCategory('move-in-move-out', this)" data-service="move-in-move-out">
          <img src="<?= SITE_URL ?>/assets/images/pricing/move-in-cleaning.jpg" alt="Move-In / Move-Out" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">local_shipping</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Move-In / Move-Out</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹1,799</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 10. Post Construction Cleaning -->
        <div class="a1-svc-card" onclick="selectServiceCategory('post-construction', this)" data-service="post-construction">
          <img src="<?= SITE_URL ?>/assets/images/pricing/post-construction.jpg" alt="Post Construction" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">construction</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Post Construction</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹10</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 11. Office & Commercial -->
        <div class="a1-svc-card" onclick="selectServiceCategory('commercial-cleaning', this)" data-service="commercial-cleaning">
          <img src="<?= SITE_URL ?>/assets/images/pricing/commercial-cleaning.jpg" alt="Office &amp; Commercial" class="a1-svc-card-bg" loading="lazy">
          <div class="a1-svc-card-overlay"></div>
          <div class="a1-svc-card-content">
            <div class="a1-svc-icon-box">
              <span class="material-symbols-outlined a1-svc-google-icon">corporate_fare</span>
            </div>
            <div class="a1-svc-top-badge">
              <span class="a1-svc-active-tag"><span class="material-symbols-outlined" style="font-size: 13px;">check_circle</span> Active Plan</span>
            </div>
            <div class="a1-svc-bottom-info">
              <h3 class="a1-svc-name">Office &amp; Commercial</h3>
              <div class="a1-svc-rate-wrap">
                <span class="a1-svc-rate-label">Starting From</span>
                <span class="a1-svc-rate-val">₹5,000</span>
              </div>
            </div>
          </div>
        </div>

        </div><!-- End Slide 2 -->

      </div><!-- End servicesSlider -->

      <!-- Mobile Swipe Pagination Dots -->
      <div class="a1-services-dots" id="servicesDots">
        <span class="a1-services-dot active" onclick="goToServicesSlide(0)" role="button" tabindex="0" aria-label="Services Page 1"></span>
        <span class="a1-services-dot" onclick="goToServicesSlide(1)" role="button" tabindex="0" aria-label="Services Page 2"></span>
      </div>

    </div><!-- End a1-services-slider-wrap -->

  </div>
</section>

<!-- =========================================================================
     2. DYNAMIC PACKAGE ARCHITECTURE (3 TIERS)
     ========================================================================= -->
<section class="a1-packages-section" id="packagesSection">
  <div class="container">
    
    <div class="a1-section-header">
      <div>
        <h2 class="a1-section-title" id="packagesHeading">Bathroom Cleaning Packages</h2>
      </div>
      <div class="genie-badge-note">
        <span class="material-symbols-outlined icon-xs text-fresh-green">verified_user</span>
        <span>Inspection-based exact quotes</span>
      </div>
    </div>

    <!-- Package Cards Grid (Rendered by JS) -->
    <div class="a1-pkgs-grid" id="packagesGrid">
      <!-- Injected dynamically via renderPackages() -->
    </div>

  </div>
</section>

<!-- =========================================================================
     3. A1 TARGETED CLEANING ADD-ONS SUITE (16 DEDICATED CLEANING UPGRADES)
     ========================================================================= -->
<section class="a1-addons-section" id="addonsSection">
  <div class="container">
    
    <div class="a1-addons-header">
      <h2 class="a1-addons-title">Enhance Your Cleaning with Add-ons</h2>
      <p class="a1-addons-sub">Customize your service with extra targeted cleaning options for high-touch areas.</p>
    </div>

    <div class="a1-addons-slider-wrap">
      <div class="a1-addons-slider a1-addons-grid" id="addonsSlider">
        
        <!-- Slide 1: 3x2 Grid (First 6 Add-ons - Default View) -->
        <div class="a1-addons-slide" id="addonsSlide1">
      
      <!-- 1 -->
      <div class="a1-addon-card" data-addon-key="balcony-scrub" onclick="toggleAddon('balcony-scrub', 'Balcony Floor Pressure Scrubbing', 300, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">deck</span>
          </div>
          <span class="a1-addon-name">Balcony Floor Pressure Scrubbing</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹300</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 2 -->
      <div class="a1-addon-card" data-addon-key="window-track" onclick="toggleAddon('window-track', 'Window Track & Glass Glaze', 150, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">window</span>
          </div>
          <span class="a1-addon-name">Window Track &amp; Glass Glaze</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹150</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 3 -->
      <div class="a1-addon-card" data-addon-key="tile-grout" onclick="toggleAddon('tile-grout', 'Tile Grout Deep Descaling', 250, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">grid_view</span>
          </div>
          <span class="a1-addon-name">Tile Grout Deep Descaling</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹250</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 4 -->
      <div class="a1-addon-card" data-addon-key="cobweb-vacuum" onclick="toggleAddon('cobweb-vacuum', 'High-Ceiling Cobweb Vacuuming', 100, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">vertical_align_top</span>
          </div>
          <span class="a1-addon-name">High-Ceiling Cobweb Vacuum</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹100</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 5 -->
      <div class="a1-addon-card" data-addon-key="fridge-empty" onclick="toggleAddon('fridge-empty', 'Inside empty refrigerator / freezer', 200, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">kitchen</span>
          </div>
          <span class="a1-addon-name">Inside empty refrigerator / freezer</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹200</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 6 -->
      <div class="a1-addon-card" data-addon-key="fridge-occupied" onclick="toggleAddon('fridge-occupied', 'Inside occupied refrigerator / freezer', 250, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">door_sliding</span>
          </div>
          <span class="a1-addon-name">Inside occupied refrigerator / freezer</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹250</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>
      </div><!-- End addonsSlide1 -->

      <!-- Slide 2: 3x2 Grid (Next 6 Add-ons - Swipeable) -->
      <div class="a1-addons-slide" id="addonsSlide2">

      <!-- 7 -->
      <div class="a1-addon-card" data-addon-key="chimney-cooktop" onclick="toggleAddon('chimney-cooktop', 'Chimney and cooktop cleaning', 500, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">soup_kitchen</span>
          </div>
          <span class="a1-addon-name">Chimney and cooktop cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹500</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 8 -->
      <div class="a1-addon-card" data-addon-key="oven-cleaning" onclick="toggleAddon('oven-cleaning', 'Oven & Microwave Cleaning', 100, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">microwave</span>
          </div>
          <span class="a1-addon-name">Oven Cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹100</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 9 -->
      <div class="a1-addon-card" data-addon-key="inside-single-oven" onclick="toggleAddon('inside-single-oven', 'Inside single oven deep scrub', 150, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">styler</span>
          </div>
          <span class="a1-addon-name">Inside single oven</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹150</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 10 -->
      <div class="a1-addon-card" data-addon-key="fan-cleaning" onclick="toggleAddon('fan-cleaning', 'Ceiling Fan Deep Scrub', 70, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">mode_fan</span>
          </div>
          <span class="a1-addon-name">Fan Cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹70</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 11 -->
      <div class="a1-addon-card" data-addon-key="wash-basin" onclick="toggleAddon('wash-basin', 'Washbasin Descaling & Polishing', 80, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">wash</span>
          </div>
          <span class="a1-addon-name">Wash basin</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹80</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 12 -->
      <div class="a1-addon-card" data-addon-key="mattress-single" onclick="toggleAddon('mattress-single', 'Single Bed Mattress Sanitization', 500, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">bed</span>
          </div>
          <span class="a1-addon-name">Single Bed Mattress Cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹500</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>
      </div><!-- End addonsSlide2 -->

      <!-- Slide 3: 3x2 Grid (Remaining 4 Add-ons - Swipeable) -->
      <div class="a1-addons-slide" id="addonsSlide3">

      <!-- 13 -->
      <div class="a1-addon-card" data-addon-key="mattress-double" onclick="toggleAddon('mattress-double', 'Double Bed Mattress Sanitization', 800, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">king_bed</span>
          </div>
          <span class="a1-addon-name">Double Bed Mattress Cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹800</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 14 -->
      <div class="a1-addon-card" data-addon-key="small-appliances" onclick="toggleAddon('small-appliances', 'Small Kitchen Appliances Wipe', 70, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">blender</span>
          </div>
          <span class="a1-addon-name">Small Appliances</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹70</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 15 -->
      <div class="a1-addon-card" data-addon-key="exhaust-fan" onclick="toggleAddon('exhaust-fan', 'Exhaust Fan Heavy Degreasing', 150, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">cyclone</span>
          </div>
          <span class="a1-addon-name">Exhaust Fan Cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹150</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>

      <!-- 16 -->
      <div class="a1-addon-card" data-addon-key="chimney-cleaning" onclick="toggleAddon('chimney-cleaning', 'Chimney Baffle Filter Chemical Bath', 300, this)">
        <div class="a1-addon-left">
          <div class="a1-addon-icon-circle">
            <span class="material-symbols-outlined icon-xs">sanitizer</span>
          </div>
          <span class="a1-addon-name">Chimney Cleaning</span>
        </div>
        <div class="a1-addon-right">
          <span class="a1-addon-price-pill">+₹300</span>
          <span class="a1-addon-check-indicator">Select</span>
        </div>
      </div>
      </div><!-- End addonsSlide3 -->

      </div><!-- End addonsSlider -->

      <!-- Mobile Swipe Pagination Dots -->
      <div class="a1-addons-dots" id="addonsDots">
        <span class="a1-addons-dot active" onclick="goToAddonsSlide(0)" role="button" tabindex="0" aria-label="Add-ons Page 1"></span>
        <span class="a1-addons-dot" onclick="goToAddonsSlide(1)" role="button" tabindex="0" aria-label="Add-ons Page 2"></span>
        <span class="a1-addons-dot" onclick="goToAddonsSlide(2)" role="button" tabindex="0" aria-label="Add-ons Page 3"></span>
      </div>

    </div><!-- End a1-addons-slider-wrap -->

  </div>
</section>

<!-- =========================================================================
     4. LIVE ESTIMATION WORKSTATION & DIGITAL RECEIPT CONSOLE
     ========================================================================= -->
<section class="a1-summary-section" id="summarySection">
  <div class="container">
    
    <div class="a1-workstation-layout">
      
      <!-- Left Column: Selected Blueprint & Verification Guarantees -->
      <div class="a1-summary-left">
        <h2 class="a1-summary-title"><span class="a1-title-line-1">Selected Services</span> <span class="a1-title-line-2">&amp;&nbsp;Add-ons</span></h2>
        <p class="a1-summary-sub">Review your selected services and add-ons before scheduling.</p>

        <!-- Selected Blueprint Highlight -->
        <div class="a1-selected-blueprint-card">
          <div class="a1-blueprint-info">
            <span class="a1-blueprint-dot"></span>
            <div>
              <h4 class="a1-blueprint-title" id="summaryMainTitle">Bathroom Deep Clean</h4>
              <p class="a1-blueprint-sub" id="summaryMainSub">Please choose a package from above to configure your quote</p>
            </div>
          </div>
          <div class="a1-blueprint-price" id="summaryMainPrice">₹0</div>
        </div>

        <!-- Add-on Items Tray -->
        <div class="a1-addons-summary-wrap">
          <h3 class="a1-addons-summary-title">Configured Add-ons</h3>
          <p class="a1-addons-summary-sub">Fine-tuned precision add-ons active for this booking.</p>

          <div class="a1-addons-chips-tray" id="addonsChipsList">
            <div class="a1-addons-empty-card" id="addonsEmptyState">
              No add-ons selected yet. Choose add-ons from above to customize your cleaning.
            </div>
          </div>
        </div>

        <!-- 4 Verified Quality Guarantees -->
        <div class="a1-trust-grid-4">
          <div class="a1-trust-box">
            <span class="material-symbols-outlined">event_available</span>
            <div>
              <h5 class="a1-trust-box-title">Flexible Scheduling</h5>
              <p class="a1-trust-box-sub">Choose your preferred morning or afternoon slot</p>
            </div>
          </div>

          <div class="a1-trust-box">
            <span class="material-symbols-outlined">badge</span>
            <div>
              <h5 class="a1-trust-box-title">Verified Staff</h5>
              <p class="a1-trust-box-sub">Trained, uniformed and police-background verified</p>
            </div>
          </div>

          <div class="a1-trust-box">
            <span class="material-symbols-outlined">eco</span>
            <div>
              <h5 class="a1-trust-box-title">Eco-Safe Formulas</h5>
              <p class="a1-trust-box-sub">Non-acidic solutions safe for kids, pets &amp; tiles</p>
            </div>
          </div>

          <div class="a1-trust-box">
            <span class="material-symbols-outlined">thumb_up</span>
            <div>
              <h5 class="a1-trust-box-title">100% Satisfaction</h5>
              <p class="a1-trust-box-sub">Pay only after final joint inspection &amp; approval</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column: Digital Price Receipt Console -->
      <div class="a1-summary-right">
        <div class="a1-receipt-console">
          
          <div class="a1-receipt-top">
            <span class="a1-receipt-kicker">Live Estimated Total</span>
            <span class="a1-receipt-live-pill">
              <span class="a1-live-dot"></span>
              Live Counter
            </span>
          </div>

          <div class="a1-receipt-total" id="calcTotalDisplay">₹600</div>

          <!-- Invoice-style line items -->
          <table class="a1-receipt-table">
            <tbody id="calcTableBody">
              <tr>
                <td class="line-name" id="calcPackageName">Bathroom Cleaning (General Cleaning)</td>
                <td class="line-val" id="calcPackagePrice">₹600</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="receipt-grand-total">
                <td>Total Amount</td>
                <td class="line-val" id="calcTableTotal">₹600</td>
              </tr>
            </tfoot>
          </table>

          <!-- 1-Click WhatsApp Booking CTA -->
          <a href="#" id="btnBookWhatsApp" target="_blank" rel="noopener" class="btn-a1-whatsapp">
            <span class="material-symbols-outlined">chat</span>
            <span>Book on WhatsApp</span>
          </a>

          <!-- Schedule Online Slot Link -->
          <a href="<?= SITE_URL ?>/book-now/" id="btnBookOnline" class="btn-a1-online">
            <span class="material-symbols-outlined icon-xs">calendar_today</span>
            <span>Schedule Online Slot</span>
          </a>

          <p class="a1-receipt-notes">
            All taxes included • No hidden fee • Pay after 100% satisfaction
          </p>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- =========================================================================
     5. POPULAR CLEANING PACKAGES SHORTCUTS
     ========================================================================= -->
<section class="a1-popular-section">
  <div class="container">
    
    <div class="a1-section-header">
      <div>
        <h2 class="a1-section-title">Popular Services</h2>
        <p class="a1-section-sub">Quick access to our most in-demand mechanized cleaning packages.</p>
      </div>
    </div>

    <div class="a1-popular-grid">
      
      <!-- Pop 1: Home Deep Cleaning -->
      <div class="a1-pop-card" style="cursor: pointer;" onclick="selectServiceCategory('home-cleaning'); scrollToSection('packagesSection');">
        <div class="a1-pop-left">
          <div class="a1-pop-icon-box">
            <span class="material-symbols-outlined">home</span>
          </div>
          <div>
            <h4 class="a1-pop-title">Home Deep Cleaning</h4>
            <p class="a1-pop-rate">₹1,999 Starting from</p>
          </div>
        </div>
        <span class="material-symbols-outlined a1-pop-arrow">arrow_forward</span>
      </div>

      <!-- Pop 2: Bathroom Deep Clean -->
      <div class="a1-pop-card" style="cursor: pointer;" onclick="selectServiceCategory('bathroom-cleaning'); scrollToSection('packagesSection');">
        <div class="a1-pop-left">
          <div class="a1-pop-icon-box">
            <span class="material-symbols-outlined">bathtub</span>
          </div>
          <div>
            <h4 class="a1-pop-title">Bathroom Deep Clean</h4>
            <p class="a1-pop-rate">₹600 Starting from</p>
          </div>
        </div>
        <span class="material-symbols-outlined a1-pop-arrow">arrow_forward</span>
      </div>

      <!-- Pop 3: Kitchen Cleaning -->
      <div class="a1-pop-card" style="cursor: pointer;" onclick="selectServiceCategory('kitchen-cleaning'); scrollToSection('packagesSection');">
        <div class="a1-pop-left">
          <div class="a1-pop-icon-box">
            <span class="material-symbols-outlined">countertops</span>
          </div>
          <div>
            <h4 class="a1-pop-title">Kitchen Deep Cleaning</h4>
            <p class="a1-pop-rate">₹1,299 Starting from</p>
          </div>
        </div>
        <span class="material-symbols-outlined a1-pop-arrow">arrow_forward</span>
      </div>

      <!-- Pop 4: Sofa Cleaning -->
      <div class="a1-pop-card" style="cursor: pointer;" onclick="selectServiceCategory('sofa-cleaning'); scrollToSection('packagesSection');">
        <div class="a1-pop-left">
          <div class="a1-pop-icon-box">
            <span class="material-symbols-outlined">chair</span>
          </div>
          <div>
            <h4 class="a1-pop-title">Sofa &amp; Fabric Wash</h4>
            <p class="a1-pop-rate">₹249 Starting from</p>
          </div>
        </div>
        <span class="material-symbols-outlined a1-pop-arrow">arrow_forward</span>
      </div>

      <!-- Pop 5: Water Tank Cleaning -->
      <div class="a1-pop-card" style="cursor: pointer;" onclick="selectServiceCategory('water-tank-cleaning'); scrollToSection('packagesSection');">
        <div class="a1-pop-left">
          <div class="a1-pop-icon-box">
            <span class="material-symbols-outlined">water_damage</span>
          </div>
          <div>
            <h4 class="a1-pop-title">6-Stage Water Tank Clean</h4>
            <p class="a1-pop-rate">₹799 Starting from</p>
          </div>
        </div>
        <span class="material-symbols-outlined a1-pop-arrow">arrow_forward</span>
      </div>

      <!-- Pop 6: Carpet Cleaning -->
      <div class="a1-pop-card" style="cursor: pointer;" onclick="selectServiceCategory('carpet-cleaning'); scrollToSection('packagesSection');">
        <div class="a1-pop-left">
          <div class="a1-pop-icon-box">
            <span class="material-symbols-outlined">dry_cleaning</span>
          </div>
          <div>
            <h4 class="a1-pop-title">Carpet &amp; Rug Wash</h4>
            <p class="a1-pop-rate">₹499 Starting from</p>
          </div>
        </div>
        <span class="material-symbols-outlined a1-pop-arrow">arrow_forward</span>
      </div>

    </div>

    <!-- 6. Still Confused? Expert Consultation Banner -->
    <div class="a1-expert-banner">
      <div class="a1-expert-content">
        <h3 class="a1-expert-title">Still Confused? Talk to Our Cleaning Expert</h3>
        <p class="a1-expert-sub">
          Get a free doorstep assessment and personalized written quotation tailored for your home or commercial space across Kashipur, Jaspur &amp; Ramnagar.
        </p>
      </div>

      <div class="a1-expert-actions">
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn-a1-expert-call">
          <span class="material-symbols-outlined icon-sm">call</span>
          <span>Call Now <?= BUSINESS_PHONE ?></span>
        </a>
        <a href="https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=Hi%20A1%20Cleaning,%20I%20need%20a%20free%20quote%20consultation." target="_blank" rel="noopener" class="btn-a1-expert-wa">
          <span class="material-symbols-outlined icon-sm">chat</span>
          <span>Book on WhatsApp</span>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- =========================================================================
     6. A1 SIGNATURE 70% HEIGHT BOTTOM SHEET POPUP (Smooth Slide-Up)
     ========================================================================= -->
<style>
/* Seamless Full-Width App Experience: Remove Side Scrollbar & Extra Gutter */
html,
body {
  overflow-x: hidden !important;
  width: 100% !important;
  max-width: 100vw !important;
  margin: 0 !important;
  padding-right: 0 !important;
  scrollbar-width: none !important;
  scrollbar-gutter: auto !important;
  -ms-overflow-style: none !important;
}

html::-webkit-scrollbar,
body::-webkit-scrollbar,
*::-webkit-scrollbar {
  display: none !important;
  width: 0 !important;
  height: 0 !important;
  background: transparent !important;
}

.ownwash-main-header {
  width: 100% !important;
  max-width: 100% !important;
  box-sizing: border-box !important;
}

.a1-popup-items-container,
.a1-popup-detail-scrollable,
.a1-pkg-sheet-body {
  scrollbar-width: none !important;
  -ms-overflow-style: none !important;
}

.a1-popup-items-container::-webkit-scrollbar,
.a1-popup-detail-scrollable::-webkit-scrollbar,
.a1-pkg-sheet-body::-webkit-scrollbar {
  display: none !important;
  width: 0 !important;
  height: 0 !important;
}

/* High-Priority Instant Styles for Popup Modal Matching User Screenshot */
.a1-pkg-bottom-sheet-backdrop {
  position: fixed !important;
  inset: 0 !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
  width: 100% !important;
  height: 100% !important;
  min-height: 100vh !important;
  min-height: 100dvh !important;
  background: rgba(11, 41, 34, 0.72) !important;
  backdrop-filter: blur(8px) !important;
  -webkit-backdrop-filter: blur(8px) !important;
  z-index: 2147483647 !important; /* Above everything on the page */
  display: flex !important;
  align-items: flex-end !important; /* Anchored 100% to bottom */
  justify-content: center !important;
  padding: 0 2.5% 0 2.5% !important; /* 2.5% gap from both sides (95% card width), strictly 0 on bottom */
  margin: 0 !important;
  box-sizing: border-box !important;
  opacity: 0 !important;
  visibility: hidden !important;
  pointer-events: none !important;
  transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.3s ease !important;
}

.a1-pkg-bottom-sheet-backdrop.open {
  opacity: 1 !important;
  visibility: visible !important;
  pointer-events: auto !important;
}

/* Modal Wrapper: 75% height (leaving top 25% empty), 2.5% side gap, 100% bottom cover */
.a1-popup-modal-wrap {
  position: relative !important;
  width: 100% !important;
  max-width: 580px !important;
  height: 75vh !important;
  height: 75dvh !important;
  max-height: 75vh !important;
  max-height: 75dvh !important;
  margin: 0 auto !important;
  display: flex !important;
  flex-direction: column !important;
  transform: translateY(100%) !important;
  transition: transform 0.38s cubic-bezier(0.16, 1, 0.3, 1) !important;
  will-change: transform !important;
  bottom: 0 !important;
}

.a1-pkg-bottom-sheet-backdrop.open .a1-popup-modal-wrap {
  transform: translateY(0) !important;
}

/* Modal Card: Sticks 100% to bottom, rounded top corners */
.a1-pkg-bottom-sheet {
  width: 100% !important;
  height: 75vh !important;
  height: 75dvh !important;
  max-height: 75vh !important;
  max-height: 75dvh !important;
  background: #FFFFFF !important;
  border-top-left-radius: 24px !important;
  border-top-right-radius: 24px !important;
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
  border-bottom: none !important;
  box-shadow: 0 -10px 40px rgba(11, 41, 34, 0.45) !important;
  display: flex !important;
  flex-direction: column !important;
  overflow: hidden !important;
  position: relative !important;
  margin: 0 !important;
  padding-bottom: 0 !important;
  bottom: 0 !important;
  transform: none !important;
}

.a1-pkg-sheet-body {
  flex: 1 !important;
  display: flex !important;
  flex-direction: column !important;
  overflow: hidden !important;
  padding: 0 !important;
  background: #FFFFFF !important;
  position: relative !important;
}

/* Hero Media (Video Banner Ready) at Top */
.a1-popup-hero-media-wrap,
.a1-popup-hero-img-wrap {
  position: relative !important;
  width: 100% !important;
  height: 195px !important;
  flex-shrink: 0 !important;
  overflow: hidden !important;
  background: #0B2922 !important;
  border-top-left-radius: 24px !important;
  border-top-right-radius: 24px !important;
}

.a1-popup-hero-video {
  width: 100% !important;
  height: 100% !important;
  object-fit: cover !important;
  display: block !important;
  background: #0B2922 !important;
  border-top-left-radius: 24px !important;
  border-top-right-radius: 24px !important;
}

.a1-popup-hero-img {
  width: 100% !important;
  height: 100% !important;
  object-fit: cover !important;
  display: block !important;
}

/* Scrollable Packages Container */
.a1-popup-items-container {
  flex: 1 !important;
  overflow-y: auto !important;
  -webkit-overflow-scrolling: touch !important;
  padding: 0 0 3.5rem 0 !important; /* Bottom padding so last package never touches edge */
}

/* Individual Package Item */
.a1-popup-item {
  padding: 1.15rem 1.25rem 1.25rem !important;
  border-bottom: 1.5px solid #EDF4F0 !important;
  display: flex !important;
  flex-direction: column !important;
  gap: 0.45rem !important;
  transition: background 0.2s ease !important;
}

.a1-popup-item:last-child {
  border-bottom: none !important;
}

.a1-popup-item.is-focused {
  background: #F9FCFA !important;
}

/* Header: Title on Left, Price on Right */
.a1-popup-item-header {
  display: flex !important;
  align-items: flex-start !important;
  justify-content: space-between !important;
  gap: 0.75rem !important;
}

.a1-popup-item-title {
  font-size: 1.05rem !important;
  font-weight: 800 !important;
  color: #0B2922 !important;
  line-height: 1.3 !important;
  margin: 0 !important;
  flex: 1 !important;
}

.a1-popup-item-price {
  font-size: 1.15rem !important;
  font-weight: 900 !important;
  color: #0B2922 !important;
  white-space: nowrap !important;
  line-height: 1.2 !important;
}

/* Rating & Duration Row */
.a1-popup-meta-row {
  display: flex !important;
  align-items: center !important;
  gap: 0.85rem !important;
  font-size: 0.82rem !important;
  font-weight: 700 !important;
  margin-top: 0.1rem !important;
}

.a1-popup-rating {
  display: inline-flex !important;
  align-items: center !important;
  gap: 3px !important;
  color: #111827 !important;
}

.a1-popup-rating .star-icon {
  font-size: 16px !important;
  color: #F59E0B !important;
}

.a1-popup-duration {
  display: inline-flex !important;
  align-items: center !important;
  gap: 4px !important;
  color: #4B5563 !important;
  font-weight: 600 !important;
}

.a1-popup-duration .clock-icon {
  font-size: 15px !important;
  color: #10B981 !important;
}

/* Description & See more */
.a1-popup-desc {
  font-size: 0.82rem !important;
  color: #64748B !important;
  line-height: 1.45 !important;
  margin: 0.15rem 0 0 !important;
}

.a1-popup-see-more {
  background: none !important;
  border: none !important;
  color: #2563EB !important;
  font-size: 0.82rem !important;
  font-weight: 700 !important;
  cursor: pointer !important;
  padding: 0 !important;
  margin-left: 4px !important;
  text-decoration: none !important;
  display: inline !important;
}

.a1-popup-see-more:hover {
  text-decoration: underline !important;
}

/* Expandable Features Checklist */
.a1-popup-features-expand {
  list-style: none !important;
  padding: 0.5rem 0 0.25rem !important;
  margin: 0 !important;
  display: none !important;
  flex-direction: column !important;
  gap: 0.45rem !important;
}

.a1-popup-features-expand.is-open {
  display: flex !important;
}

.a1-popup-feature-bullet {
  display: flex !important;
  align-items: flex-start !important;
  gap: 0.45rem !important;
  font-size: 0.8rem !important;
  color: #374151 !important;
  line-height: 1.35 !important;
}

.a1-popup-feature-bullet .check-dot {
  color: #22A06B !important;
  font-size: 15px !important;
  flex-shrink: 0 !important;
  margin-top: 1px !important;
}

/* Action Button ("View details" / "Plan Selected") */
.a1-popup-action-wrap {
  margin-top: 0.45rem !important;
}

.a1-popup-action-btn {
  width: 100% !important;
  padding: 0.65rem 1rem !important;
  border-radius: 12px !important;
  border: 1.5px solid #22A06B !important;
  background: #FFFFFF !important;
  color: #22A06B !important;
  font-size: 0.88rem !important;
  font-weight: 800 !important;
  cursor: pointer !important;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 0.4rem !important;
}

.a1-popup-action-btn:hover {
  background: #22A06B !important;
  color: #FFFFFF !important;
  box-shadow: 0 4px 14px rgba(34, 160, 107, 0.25) !important;
}

.a1-popup-action-btn.is-selected {
  background: #22A06B !important;
  border-color: #22A06B !important;
  color: #FFFFFF !important;
  box-shadow: 0 4px 14px rgba(34, 160, 107, 0.28) !important;
}

/* ==========================================================================
   PACKAGE FULL DETAIL VIEW (Matching User Screenshots)
   ========================================================================== */
.a1-popup-back-btn {
  position: absolute !important;
  top: 14px !important;
  left: 14px !important;
  z-index: 100 !important;
  background: rgba(255, 255, 255, 0.95) !important;
  backdrop-filter: blur(6px) !important;
  border: 1px solid rgba(11, 41, 34, 0.12) !important;
  border-radius: 999px !important;
  padding: 6px 14px !important;
  display: inline-flex !important;
  align-items: center !important;
  gap: 5px !important;
  font-size: 0.8rem !important;
  font-weight: 700 !important;
  color: #0B2922 !important;
  cursor: pointer !important;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.16) !important;
  transition: transform 0.18s ease, background 0.18s ease !important;
}

.a1-popup-back-btn:hover {
  transform: translateX(-2px) !important;
  background: #FFFFFF !important;
}

.a1-popup-detail-scrollable {
  flex: 1 !important;
  overflow-y: auto !important;
  -webkit-overflow-scrolling: touch !important;
  padding: 0 !important;
  display: flex !important;
  flex-direction: column !important;
}

.a1-popup-detail-content-wrap {
  padding: 1.25rem 1.35rem 5rem !important;
  display: flex !important;
  flex-direction: column !important;
  gap: 1rem !important;
}
/* Floating Footer with 2 Action Buttons (Slides up on scroll) */
.a1-popup-detail-footer {
  position: absolute !important;
  bottom: 0 !important;
  left: 0 !important;
  right: 0 !important;
  width: 100% !important;
  background: rgba(255, 255, 255, 0.98) !important;
  backdrop-filter: blur(10px) !important;
  -webkit-backdrop-filter: blur(10px) !important;
  border-top: 1px solid #E2EBE5 !important;
  box-shadow: 0 -6px 20px rgba(11, 41, 34, 0.12) !important;
  padding: 0.5rem 0.85rem calc(0.5rem + env(safe-area-inset-bottom, 0px)) !important;
  display: flex !important;
  align-items: center !important;
  gap: 0.55rem !important;
  z-index: 100 !important;
  box-sizing: border-box !important;
  transform: translateY(100%) !important;
  opacity: 0 !important;
  pointer-events: none !important;
  transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.22s ease !important;
}

.a1-popup-detail-footer.is-visible {
  transform: translateY(0) !important;
  opacity: 1 !important;
  pointer-events: auto !important;
}

.a1-popup-detail-add-cart-btn {
  flex: 1 !important;
  height: 38px !important;
  padding: 0 0.65rem !important;
  border-radius: 10px !important;
  border: 1.5px solid #22A06B !important;
  background: #FFFFFF !important;
  color: #22A06B !important;
  font-size: 0.82rem !important;
  font-weight: 700 !important;
  cursor: pointer !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 5px !important;
  white-space: nowrap !important;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
  box-sizing: border-box !important;
}

.a1-popup-detail-add-cart-btn:hover {
  background: #EAF3EE !important;
  color: #0B2922 !important;
}

.a1-popup-detail-add-cart-btn.is-selected {
  background: #EAF3EE !important;
  border-color: #22A06B !important;
  color: #0B2922 !important;
}

.a1-popup-detail-book-now-btn {
  flex: 1.15 !important;
  height: 38px !important;
  padding: 0 0.85rem !important;
  border-radius: 10px !important;
  border: none !important;
  background: #22A06B !important;
  color: #FFFFFF !important;
  font-size: 0.82rem !important;
  font-weight: 700 !important;
  cursor: pointer !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 5px !important;
  white-space: nowrap !important;
  box-shadow: 0 3px 12px rgba(34, 160, 107, 0.28) !important;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
  box-sizing: border-box !important;
}

.a1-popup-detail-book-now-btn:hover {
  background: #1B8356 !important;
  transform: translateY(-1px) !important;
  box-shadow: 0 5px 14px rgba(34, 160, 107, 0.36) !important;
}


.a1-popup-detail-header-row {
  display: flex !important;
  align-items: flex-start !important;
  justify-content: space-between !important;
  gap: 0.75rem !important;
}

.a1-popup-detail-title {
  font-size: 1.18rem !important;
  font-weight: 800 !important;
  color: #0B2922 !important;
  line-height: 1.3 !important;
  margin: 0 !important;
  flex: 1 !important;
}

.a1-popup-detail-price {
  font-size: 1.25rem !important;
  font-weight: 900 !important;
  color: #0B2922 !important;
  white-space: nowrap !important;
  line-height: 1.2 !important;
}

.a1-popup-detail-meta-action-row {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  gap: 0.75rem !important;
  margin-top: -0.25rem !important;
}

.a1-popup-detail-meta-group {
  display: flex !important;
  align-items: center !important;
  gap: 0.75rem !important;
  flex-wrap: wrap !important;
}

.a1-popup-detail-rating {
  display: inline-flex !important;
  align-items: center !important;
  gap: 3px !important;
  font-size: 0.85rem !important;
  font-weight: 700 !important;
  color: #111827 !important;
}

.a1-popup-detail-rating .star-icon {
  font-size: 17px !important;
  color: #F59E0B !important;
}

.a1-popup-detail-duration {
  display: inline-flex !important;
  align-items: center !important;
  gap: 4px !important;
  font-size: 0.82rem !important;
  font-weight: 600 !important;
  color: #4B5563 !important;
}

.a1-popup-detail-duration .clock-icon {
  font-size: 16px !important;
  color: #10B981 !important;
}

.a1-popup-detail-add-now-btn {
  background: #22A06B !important;
  color: #FFFFFF !important;
  border: none !important;
  border-radius: 999px !important;
  padding: 0.52rem 1.35rem !important;
  font-size: 0.88rem !important;
  font-weight: 800 !important;
  cursor: pointer !important;
  display: inline-flex !important;
  align-items: center !important;
  gap: 5px !important;
  box-shadow: 0 4px 14px rgba(34, 160, 107, 0.3) !important;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.a1-popup-detail-add-now-btn:hover {
  background: #1B8356 !important;
  transform: translateY(-1px) !important;
}

.a1-popup-detail-add-now-btn.is-selected {
  background: #0B2922 !important;
  box-shadow: 0 4px 14px rgba(11, 41, 34, 0.35) !important;
}

.a1-popup-detail-description {
  font-size: 0.82rem !important;
  color: #4B5563 !important;
  line-height: 1.55 !important;
  margin: 0 !important;
}


/* Swipeable Includes & Excludes Box with Full-Width Sliding Header */
.a1-popup-tabs-box {
  background: #F8FAF9 !important;
  border: 1px solid #E2EBE5 !important;
  border-radius: 14px !important;
  overflow: hidden !important;
  box-shadow: 0 2px 8px rgba(11, 41, 34, 0.04) !important;
  margin: 0.25rem 0 0.5rem !important;
}

/* Full Width Header: Entire bar says 'Includes', slides to 'Excludes' on swipe */
.a1-popup-full-header-container {
  width: 100% !important;
  overflow: hidden !important;
  background: #F8FAF9 !important;
  border-bottom: 1px solid #EDF4F0 !important;
  cursor: pointer !important;
  user-select: none !important;
}

.a1-popup-full-header-track {
  display: flex !important;
  width: 200% !important;
  will-change: transform !important;
  transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.a1-popup-full-header-panel {
  width: 50% !important; /* exactly 100% of container */
  flex-shrink: 0 !important;
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  padding: 0.75rem 1rem !important;
  box-sizing: border-box !important;
}

.a1-popup-full-header-panel.is-includes {
  background: #F4F9F6 !important;
}

.a1-popup-full-header-panel.is-excludes {
  background: #FEF4F4 !important;
}

.a1-popup-full-header-title {
  display: inline-flex !important;
  align-items: center !important;
  gap: 7px !important;
  font-size: 0.94rem !important;
  font-weight: 800 !important;
  color: #0B2922 !important;
  letter-spacing: -0.2px !important;
}

.a1-popup-full-header-hint {
  display: inline-flex !important;
  align-items: center !important;
  gap: 4px !important;
  font-size: 0.74rem !important;
  font-weight: 600 !important;
  color: #6B7280 !important;
}

.a1-popup-full-header-panel.is-includes .a1-popup-full-header-hint {
  color: #1B8356 !important;
}

.a1-popup-full-header-panel.is-excludes .a1-popup-full-header-hint {
  color: #B91C1C !important;
}

/* Interactive Fill Bar: tracks horizontal swipe position */
.a1-popup-tab-track {
  width: 100% !important;
  height: 3.5px !important;
  background: #E5E7EB !important;
  position: relative !important;
  overflow: hidden !important;
}

.a1-popup-tab-fill-bar {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  width: 50% !important;
  height: 100% !important;
  background: #22A06B !important;
  border-radius: 3px !important;
  transform: translateX(0%) !important;
  will-change: transform, background-color !important;
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.25s ease !important;
}

/* Swipeable horizontal container */
.a1-popup-swipe-slider {
  width: 100% !important;
  overflow-x: auto !important;
  overflow-y: hidden !important;
  scroll-snap-type: x mandatory !important;
  scroll-behavior: smooth !important;
  -webkit-overflow-scrolling: touch !important;
  scrollbar-width: none !important;
}

.a1-popup-swipe-slider::-webkit-scrollbar {
  display: none !important;
}

.a1-popup-swipe-track {
  display: flex !important;
  width: 200% !important;
}

.a1-popup-swipe-card {
  width: 50% !important;
  flex-shrink: 0 !important;
  scroll-snap-align: start !important;
  scroll-snap-stop: always !important;
  box-sizing: border-box !important;
  padding: 0.85rem 1rem 0.95rem !important;
  background: #FFFFFF !important;
}

.a1-popup-swipe-card.is-includes {
  border-bottom: 2px solid #EAF3EE !important;
}

.a1-popup-swipe-card.is-excludes {
  border-bottom: 2px solid #FEE2E2 !important;
}

.a1-popup-swipe-hint {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 5px !important;
  padding: 0.35rem 0.75rem 0.5rem !important;
  font-size: 0.72rem !important;
  color: #6B7280 !important;
  background: #F8FAF9 !important;
  border-top: 1px dashed #E5E7EB !important;
  user-select: none !important;
}

.a1-popup-bullet-li::before {
  display: none !important;
}

/* Feature Blocks (Includes / Excludes) */
.a1-popup-feature-block {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.45rem !important;
}

.a1-popup-feature-heading {
  display: flex !important;
  align-items: center !important;
  gap: 6px !important;
  font-size: 0.92rem !important;
  font-weight: 800 !important;
  color: #0B2922 !important;
}

.a1-popup-feature-heading.is-includes .icon-status {
  color: #22A06B !important;
  font-size: 19px !important;
}

.a1-popup-feature-heading.is-excludes .icon-status {
  color: #DC2626 !important;
  font-size: 19px !important;
}

.a1-popup-bullet-ul {
  list-style: none !important;
  padding: 0 0 0 0.5rem !important;
  margin: 0 !important;
  display: flex !important;
  flex-direction: column !important;
  gap: 0.4rem !important;
}

.a1-popup-bullet-li {
  display: flex !important;
  align-items: flex-start !important;
  gap: 0.55rem !important;
  font-size: 0.8rem !important;
  color: #374151 !important;
  line-height: 1.4 !important;
}

.a1-popup-bullet-li::before {
  content: "•" !important;
  font-size: 1.1rem !important;
  line-height: 1 !important;
  color: #6B7280 !important;
  flex-shrink: 0 !important;
  margin-top: 1px !important;
}

/* Notice Blocks (Disclaimer & Need From You) */
.a1-popup-notice-block {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.25rem !important;
}

.a1-popup-notice-title {
  font-size: 0.88rem !important;
  font-weight: 800 !important;
  color: #0B2922 !important;
  margin: 0 !important;
}

.a1-popup-notice-text {
  font-size: 0.8rem !important;
  color: #4B5563 !important;
  line-height: 1.45 !important;
  margin: 0 !important;
}

.a1-popup-detail-divider {
  height: 1px !important;
  background: #E5E7EB !important;
  margin: 0.25rem 0 !important;
}

/* Reviews Section */
.a1-popup-reviews-block {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.75rem !important;
}

.a1-popup-reviews-main-title {
  font-size: 1.05rem !important;
  font-weight: 800 !important;
  color: #0B2922 !important;
  margin: 0 !important;
}

.a1-popup-reviews-header-stat {
  display: flex !important;
  align-items: center !important;
  gap: 5px !important;
}

.a1-popup-reviews-header-stat .star-icon {
  color: #F59E0B !important;
  font-size: 19px !important;
}

.a1-popup-reviews-avg {
  font-size: 1.05rem !important;
  font-weight: 800 !important;
  color: #111827 !important;
}

.a1-popup-reviews-total-text {
  font-size: 0.82rem !important;
  color: #6B7280 !important;
  font-weight: 600 !important;
  margin-top: -0.5rem !important;
}

.a1-popup-filter-chips {
  display: flex !important;
  align-items: center !important;
  gap: 0.5rem !important;
  margin-top: 0.25rem !important;
}

.a1-popup-chip {
  background: #F3F4F6 !important;
  color: #4B5563 !important;
  border: 1px solid transparent !important;
  border-radius: 999px !important;
  padding: 0.35rem 0.95rem !important;
  font-size: 0.78rem !important;
  font-weight: 700 !important;
  cursor: pointer !important;
  transition: all 0.18s ease !important;
}

.a1-popup-chip.is-active {
  background: #EAF3EE !important;
  color: #0B2922 !important;
  border-color: #22A06B !important;
}

.a1-popup-rating-bars {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.35rem !important;
  margin: 0.25rem 0 !important;
}

.a1-popup-bar-row {
  display: flex !important;
  align-items: center !important;
  gap: 0.65rem !important;
  font-size: 0.78rem !important;
  font-weight: 700 !important;
  color: #374151 !important;
}

.a1-popup-bar-label {
  display: inline-flex !important;
  align-items: center !important;
  gap: 2px !important;
  width: 28px !important;
}

.a1-popup-bar-label .star-icon {
  font-size: 14px !important;
  color: #F59E0B !important;
}

.a1-popup-bar-track {
  flex: 1 !important;
  height: 6px !important;
  background: #E5E7EB !important;
  border-radius: 999px !important;
  overflow: hidden !important;
}

.a1-popup-bar-fill {
  height: 100% !important;
  background: #22A06B !important;
  border-radius: 999px !important;
}

.a1-popup-bar-count {
  width: 22px !important;
  text-align: right !important;
  font-size: 0.76rem !important;
  color: #6B7280 !important;
}

.a1-popup-reviews-stream {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.85rem !important;
  margin-top: 0.5rem !important;
}

.a1-popup-review-card {
  padding-bottom: 0.85rem !important;
  border-bottom: 1px solid #F3F4F6 !important;
  display: flex !important;
  flex-direction: column !important;
  gap: 0.25rem !important;
}

.a1-popup-review-card:last-child {
  border-bottom: none !important;
  padding-bottom: 0 !important;
}

.a1-popup-review-top {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  gap: 0.5rem !important;
}

.a1-popup-reviewer-name {
  font-size: 0.86rem !important;
  font-weight: 800 !important;
  color: #111827 !important;
}

.a1-popup-review-date {
  font-size: 0.75rem !important;
  color: #6B7280 !important;
}

.a1-popup-review-stars {
  display: flex !important;
  align-items: center !important;
  gap: 1px !important;
}

.a1-popup-review-stars .star-icon {
  font-size: 15px !important;
}

.a1-popup-review-stars .star-icon.filled {
  color: #F59E0B !important;
}

.a1-popup-review-stars .star-icon.empty {
  color: #D1D5DB !important;
}

.a1-popup-review-comment {
  font-size: 0.8rem !important;
  color: #374151 !important;
  line-height: 1.4 !important;
  margin: 0 !important;
}
/* Bottom Sheet Details Presentation */
.a1-sheet-plan-hero {
  padding-bottom: 0.85rem;
  border-bottom: 1.5px solid #EDF4F0;
  margin-bottom: 1.15rem;
}

.a1-sheet-plan-badge {
  display: inline-block;
  padding: 3px 10px;
  background: var(--color-soft-mint, #EAF3EE);
  color: var(--color-deep-green, #0B2922);
  border-radius: 99px;
  font-size: 0.72rem;
  font-weight: 800;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  margin-bottom: 0.35rem;
}

.a1-sheet-plan-title {
  font-size: 1.35rem;
  font-weight: 900;
  color: var(--color-deep-green, #0B2922);
  margin: 0 0 0.4rem;
  line-height: 1.25;
}

.a1-sheet-plan-price-row {
  display: flex;
  align-items: baseline;
  gap: 0.35rem;
}

.sheet-currency {
  font-size: 1.15rem;
  font-weight: 800;
  color: var(--color-fresh-green, #22A06B);
}

.sheet-amount {
  font-size: 1.65rem;
  font-weight: 900;
  color: var(--color-fresh-green, #22A06B);
  letter-spacing: -0.02em;
}

.sheet-price-sub {
  font-size: 0.78rem;
  font-weight: 600;
  color: #64748B;
  margin-left: 0.25rem;
}

.a1-sheet-features-section {
  margin-bottom: 1.5rem;
}

.a1-sheet-features-heading {
  font-size: 0.85rem;
  font-weight: 800;
  color: var(--color-deep-green, #0B2922);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  margin: 0 0 0.85rem;
}

.a1-sheet-features-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.a1-sheet-feature-item {
  display: flex;
  align-items: flex-start;
  gap: 0.65rem;
  font-size: 0.9rem;
  color: #2D3748;
  line-height: 1.45;
}

.sheet-feature-check {
  color: var(--color-fresh-green, #22A06B);
  flex-shrink: 0;
  margin-top: 1px;
}

.a1-sheet-bottom-actions {
  position: sticky;
  bottom: 0;
  background: linear-gradient(180deg, rgba(255,255,255,0.85) 0%, #FFFFFF 100%);
  padding: 0.85rem 0 0.25rem;
  margin-top: 1rem;
  border-top: 1.5px solid #EDF4F0;
}

.a1-sheet-cta-btn {
  width: 100%;
  padding: 0.85rem 1.25rem;
  border-radius: 99px;
  background: var(--color-fresh-green, #22A06B);
  color: #FFFFFF;
  border: none;
  font-size: 0.95rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.6rem;
  cursor: pointer;
  transition: all 0.22s ease;
  box-shadow: 0 4px 16px rgba(34, 160, 107, 0.3);
}

.a1-sheet-cta-btn:hover {
  background: #177A50;
  transform: translateY(-1px);
}

.a1-sheet-cta-btn.is-added {
  background: var(--color-deep-green, #0B2922);
}

/* Toast Notification for Cart Add */
.a1-cart-toast {
  position: fixed;
  bottom: 85px;
  left: 50%;
  transform: translateX(-50%) translateY(20px);
  background: #0B2922;
  color: #FFFFFF;
  padding: 10px 22px;
  border-radius: 99px;
  font-size: 0.85rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 8px;
  box-shadow: 0 10px 28px rgba(11, 41, 34, 0.38);
  z-index: 99999999;
  opacity: 0;
  pointer-events: none;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

.a1-cart-toast.show {
  opacity: 1;
  transform: translateX(-50%) translateY(0);
}

.a1-cart-toast .toast-icon {
  color: #22A06B;
  font-size: 18px;
}

.badge-bump {
  animation: badgePop 0.3s ease-out;
}

@keyframes badgePop {
  0% { transform: scale(1); }
  50% { transform: scale(1.35); }
  100% { transform: scale(1); }
}

html.a1-sheet-lock,
body.a1-sheet-lock {
  overflow: hidden !important;
  touch-action: none !important;
  padding-bottom: 0 !important;
  margin-bottom: 0 !important;
}

body.a1-sheet-lock .a1-mobile-bottom-nav,
body.a1-sheet-lock .whatsapp-circle-btn,
body.a1-sheet-lock .tab-whatsapp {
  display: none !important;
  visibility: hidden !important;
  opacity: 0 !important;
  pointer-events: none !important;
  z-index: -1 !important;
  transform: translateY(100%) !important;
}

/* Sticky Fixed Header */
.ownwash-main-header {
  position: sticky !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  width: 100% !important;
  z-index: 99990 !important;
  box-shadow: 0 4px 18px rgba(11, 41, 34, 0.16) !important;
}

/* Desktop: Slide wrappers behave as contents so desktop carousel stays intact */
@media (min-width: 769px) {
  .a1-services-slide,
  .a1-addons-slide {
    display: contents !important;
  }
  .a1-services-dots,
  .a1-addons-dots {
    display: none !important;
  }
}

/* Mobile: 3 columns x 2 rows per slide (6 services per view), swipeable horizontally */
@media (max-width: 768px) {
  .a1-services-slider {
    display: flex !important;
    flex-direction: row !important;
    align-items: stretch !important;
    gap: 16px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-snap-type: x mandatory !important;
    scroll-behavior: smooth !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
    padding: 0.25rem 0.15rem 0.35rem !important;
    margin: 0 !important;
    width: 100% !important;
  }

  .a1-services-slider::-webkit-scrollbar {
    display: none !important;
  }

  .a1-services-slide {
    display: grid !important;
    flex: 0 0 100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    scroll-snap-align: start !important;
    scroll-snap-stop: always !important;
    grid-template-columns: repeat(3, 1fr) !important;
    grid-template-rows: repeat(2, auto) !important;
    gap: 8px !important;
  }

  .a1-services-dots {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px !important;
    margin-top: 8px !important;
    margin-bottom: 6px !important;
  }

  .a1-services-dot {
    display: inline-block !important;
    width: 8px !important;
    height: 6px !important;
    min-height: 6px !important;
    max-height: 6px !important;
    min-width: 8px !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important;
    border-radius: 3px !important;
    background: #C8DFD4 !important;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    cursor: pointer !important;
    flex-shrink: 0 !important;
  }

  .a1-services-dot.active {
    width: 20px !important;
    min-width: 20px !important;
    height: 6px !important;
    min-height: 6px !important;
    max-height: 6px !important;
    border-radius: 3px !important;
    background: #22A06B !important;
  }

  /* 3x2 Grid Slider for Add-ons on Mobile (Requested by User) */
  .a1-addons-slider-wrap {
    position: relative !important;
    margin-top: 0.5rem !important;
    width: 100% !important;
  }
  .a1-addons-slider {
    display: flex !important;
    flex-direction: row !important;
    align-items: stretch !important;
    gap: 16px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-snap-type: x mandatory !important;
    scroll-behavior: smooth !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
    padding: 0.25rem 0.15rem 0.35rem !important;
    margin: 0 !important;
    width: 100% !important;
    box-sizing: border-box !important;
  }
  .a1-addons-slider::-webkit-scrollbar {
    display: none !important;
  }
  .a1-addons-slide {
    display: grid !important;
    flex: 0 0 100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    scroll-snap-align: start !important;
    scroll-snap-stop: always !important;
    grid-template-columns: repeat(3, 1fr) !important;
    grid-template-rows: repeat(2, auto) !important;
    gap: 8px !important;
  }
  .a1-addons-dots {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px !important;
    margin-top: 10px !important;
    margin-bottom: 6px !important;
  }
  .a1-addons-dot {
    display: inline-block !important;
    width: 8px !important;
    height: 6px !important;
    min-height: 6px !important;
    max-height: 6px !important;
    min-width: 8px !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important;
    border-radius: 3px !important;
    background: #C8DFD4 !important;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    cursor: pointer !important;
    flex-shrink: 0 !important;
  }
  .a1-addons-dot.active {
    width: 20px !important;
    min-width: 20px !important;
    height: 6px !important;
    min-height: 6px !important;
    max-height: 6px !important;
    border-radius: 3px !important;
    background: #22A06B !important;
  }
  .a1-addon-card {
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
    padding: 0.65rem 0.35rem 0.6rem !important;
    gap: 0.3rem !important;
    border-radius: 12px !important;
    justify-content: space-between !important;
    min-height: 122px !important;
    box-sizing: border-box !important;
    transition: all 0.2s ease !important;
  }
}

/* Guarantee Rigid Fixed Bottom Nav on Mobile during Scroll on Pricing */
@media (max-width: 991px) {
  body:not(.a1-sheet-lock) .a1-mobile-bottom-nav {
    display: block !important;
    position: fixed !important;
    bottom: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    z-index: 99998 !important;
    transform: none !important;
    -webkit-transform: none !important;
    will-change: auto !important;
    visibility: visible !important;
    opacity: 1 !important;
    pointer-events: auto !important;
  }
}

/* Compact Vertical Spacing Between Services Grid & Package Section (Highlighted Gap Reduced) */
.a1-pricing-hero {
  padding-bottom: 1.5rem !important;
}
.a1-packages-section {
  padding-top: 1.75rem !important;
}

@media (max-width: 768px) {
  .a1-pricing-hero {
    padding-top: 1.25rem !important;
    padding-bottom: 0.5rem !important;
  }
  .a1-services-slider-wrap {
    margin-top: 0.35rem !important;
    margin-bottom: 0 !important;
  }
  .a1-services-slider {
    padding: 0.25rem 0 0.25rem !important;
  }
  .a1-packages-section {
    padding-top: 0.85rem !important;
    padding-bottom: 1.75rem !important;
  }
  .a1-pkgs-grid {
    gap: 10px !important;
  }
  .a1-section-header {
    margin-bottom: 0.75rem !important;
    gap: 0.5rem !important;
  }
}

@media (max-width: 420px) {
  .a1-pricing-hero {
    padding-top: 1rem !important;
    padding-bottom: 0.45rem !important;
  }
  .a1-packages-section {
    padding-top: 0.8rem !important;
  }
  .a1-pkgs-grid {
    gap: 10px !important;
  }
  .a1-section-header {
    margin-bottom: 0.65rem !important;
  }
}

/* Package Section Heading Responsive Scaling (Fits nicely in 1-2 lines on mobile) */
#packagesHeading.a1-section-title,
.a1-packages-section .a1-section-title {
  font-size: clamp(1.35rem, 4.4vw, 2.1rem) !important;
  line-height: 1.22 !important;
  letter-spacing: -0.015em !important;
}

.a1-summary-title .a1-title-line-1 {
  display: inline;
}
.a1-summary-title .a1-title-line-2 {
  display: inline;
  white-space: nowrap;
}

@media (max-width: 768px) {
  #packagesHeading.a1-section-title,
  .a1-packages-section .a1-section-title {
    font-size: 1.45rem !important;
    line-height: 1.22 !important;
  }
  /* Selected Services & Add-ons Phone View: Strict 2 Lines */
  .a1-summary-title {
    font-size: clamp(1.4rem, 5.5vw, 1.8rem) !important;
    line-height: 1.25 !important;
    word-break: normal !important;
    hyphens: none !important;
  }
  .a1-summary-title .a1-title-line-1 {
    display: block !important;
  }
  .a1-summary-title .a1-title-line-2 {
    display: block !important;
    white-space: nowrap !important;
  }
  .a1-addons-title {
    font-size: clamp(1.4rem, 5.5vw, 1.8rem) !important;
    line-height: 1.25 !important;
  }
}

@media (max-width: 420px) {
  #packagesHeading.a1-section-title,
  .a1-packages-section .a1-section-title {
    font-size: 1.32rem !important;
    line-height: 1.25 !important;
  }
}

/* High-Visibility Floating Close (Cross) Button for Package Modal (Strict Circle, Never Oval) */
.a1-popup-close-circle {
  position: absolute !important;
  top: 14px !important;
  right: 14px !important;
  width: 36px !important;
  height: 36px !important;
  min-width: 36px !important;
  max-width: 36px !important;
  min-height: 36px !important;
  max-height: 36px !important;
  aspect-ratio: 1 / 1 !important;
  border-radius: 50% !important;
  flex: 0 0 36px !important;
  flex-shrink: 0 !important;
  background: rgba(11, 41, 34, 0.72) !important;
  backdrop-filter: blur(8px) !important;
  -webkit-backdrop-filter: blur(8px) !important;
  color: #FFFFFF !important;
  border: 1.5px solid rgba(255, 255, 255, 0.45) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  cursor: pointer !important;
  z-index: 250 !important;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.32) !important;
  transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1) !important;
  user-select: none !important;
  -webkit-tap-highlight-color: transparent !important;
  padding: 0 !important;
  margin: 0 !important;
  box-sizing: border-box !important;
  overflow: hidden !important;
}

.a1-popup-close-circle:hover,
.a1-popup-close-circle:active {
  background: #FFFFFF !important;
  color: #0B2922 !important;
  border-color: #FFFFFF !important;
  transform: scale(1.08) !important;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.42) !important;
}

.a1-popup-close-circle .material-symbols-outlined {
  font-size: 20px !important;
  font-weight: 700 !important;
  line-height: 1 !important;
}

/* =========================================================================
   2x2 Add-ons Grid (Between Includes/Excludes and Disclaimer in Modal)
   ========================================================================= */
.a1-popup-addons-section {
  margin: 1.25rem 0 1rem;
  padding: 0.95rem;
  background: #F4F8F5;
  border: 1px solid #D6E8DE;
  border-radius: 14px;
}
.a1-popup-addons-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 0.75rem;
}
.a1-popup-addons-title-wrap {
  display: flex;
  align-items: center;
  gap: 0.45rem;
}
.a1-popup-addons-title {
  font-size: 0.98rem;
  font-weight: 700;
  color: #0B2922;
  margin: 0;
}
.a1-popup-addons-badge {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  background: #EAF3EE;
  color: #22A06B;
  padding: 2px 7px;
  border-radius: 6px;
  border: 1px solid #C8DFD4;
}
.a1-popup-addons-grid {
  display: grid !important;
  grid-template-columns: repeat(2, 1fr) !important;
  gap: 8px !important;
}
.a1-popup-addon-item {
  background: #FFFFFF;
  border: 1.5px solid #E2ECE6;
  border-radius: 10px;
  padding: 8px 9px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  min-height: 84px;
  box-sizing: border-box;
}
.a1-popup-addon-item:hover {
  border-color: #22A06B;
  box-shadow: 0 3px 10px rgba(34, 160, 107, 0.12);
}
.a1-popup-addon-item.is-active {
  background: #EAF3EE !important;
  border-color: #22A06B !important;
  box-shadow: 0 0 0 1px #22A06B !important;
}
.a1-popup-addon-top {
  display: flex;
  align-items: flex-start;
  gap: 6px;
}
.a1-popup-addon-icon-box {
  width: 26px;
  height: 26px;
  min-width: 26px;
  border-radius: 6px;
  background: #EAF3EE;
  color: #22A06B;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
}
.a1-popup-addon-item.is-active .a1-popup-addon-icon-box {
  background: #22A06B;
  color: #FFFFFF;
}
.a1-popup-addon-icon-box .material-symbols-outlined {
  font-size: 16px;
}
.a1-popup-addon-name {
  font-size: 0.78rem;
  font-weight: 600;
  color: #0B2922;
  line-height: 1.25;
  margin: 0;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.a1-popup-addon-price-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 6px;
  padding-top: 5px;
  border-top: 1px dashed #E2ECE6;
}
.a1-popup-addon-price {
  font-size: 0.8rem;
  font-weight: 700;
  color: #22A06B;
}
.a1-popup-addon-btn {
  font-size: 0.72rem;
  font-weight: 700;
  color: #0B2922;
  background: #F0F4F2;
  padding: 2px 7px;
  border-radius: 4px;
  display: inline-flex;
  align-items: center;
  gap: 2px;
  transition: all 0.2s ease;
}
.a1-popup-addon-item.is-active .a1-popup-addon-btn {
  background: #22A06B;
  color: #FFFFFF;
}
.a1-popup-addon-btn .btn-icon {
  font-size: 13px;
}

/* =========================================================================
   Slideable Before & After Image Comparison Widget
   ========================================================================= */
.a1-popup-ba-section {
  margin: 1.25rem 0 1rem;
  padding: 1rem;
  background: #F9FCFA;
  border: 1px solid #DCECE2;
  border-radius: 14px;
}
.a1-popup-ba-header {
  margin-bottom: 0.75rem;
}
.a1-popup-ba-title-wrap {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.a1-popup-ba-title {
  font-size: 1.05rem;
  font-weight: 700;
  color: #0B2922;
  margin: 0;
}
.a1-popup-ba-sub {
  font-size: 0.8rem;
  color: #55756C;
  margin: 2px 0 0;
}
.a1-popup-ba-nav {
  display: flex;
  gap: 6px;
  overflow-x: auto;
  scrollbar-width: none;
  padding-bottom: 6px;
  margin-bottom: 0.75rem;
  -webkit-overflow-scrolling: touch;
}
.a1-popup-ba-nav::-webkit-scrollbar {
  display: none;
}
.a1-popup-ba-chip {
  flex-shrink: 0;
  padding: 5px 12px;
  border-radius: 20px;
  border: 1.5px solid #C8DFD4;
  background: #FFFFFF;
  color: #0B2922;
  font-size: 0.78rem;
  font-weight: 600;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  transition: all 0.2s ease;
  min-height: 30px !important;
  max-height: 30px !important;
  box-sizing: border-box;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
}
.a1-popup-ba-chip:hover {
  border-color: #22A06B;
}
.a1-popup-ba-chip.is-active {
  background: #0B2922 !important;
  color: #FFFFFF !important;
  border-color: #0B2922 !important;
  box-shadow: 0 2px 8px rgba(11, 41, 34, 0.2);
}
.a1-popup-ba-chip.is-active .material-symbols-outlined {
  color: #22A06B;
}
.a1-popup-ba-container {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 10;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(11, 41, 34, 0.12);
  user-select: none;
  touch-action: pan-y;
  background: #0B2922;
  cursor: ew-resize;
}
.a1-popup-ba-img-after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
  display: block;
}
.a1-popup-ba-before-wrap {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  z-index: 2;
  will-change: width;
}
.a1-popup-ba-img-before {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: var(--ba-container-w, 320px);
  max-width: none;
  object-fit: cover;
  pointer-events: none;
  display: block;
}
.a1-popup-ba-badge {
  position: absolute;
  top: 10px;
  padding: 4px 9px;
  font-size: 0.7rem;
  font-weight: 800;
  letter-spacing: 0.6px;
  border-radius: 4px;
  pointer-events: none;
  z-index: 4;
}
.badge-after {
  right: 10px;
  background: rgba(34, 160, 107, 0.92);
  color: #FFFFFF;
  box-shadow: 0 2px 8px rgba(0,0,0,0.25);
}
.badge-before {
  left: 10px;
  background: rgba(11, 41, 34, 0.88);
  color: #FFFFFF;
  box-shadow: 0 2px 8px rgba(0,0,0,0.25);
}
.a1-popup-ba-handle {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 2.5px;
  background: #FFFFFF;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
  pointer-events: none;
  z-index: 5;
  transform: translateX(-50%);
  will-change: left;
}
.a1-popup-ba-knob {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background: #FFFFFF;
  color: #0B2922;
  box-shadow: 0 3px 12px rgba(0,0,0,0.35);
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid #22A06B;
}
.a1-popup-ba-knob .material-symbols-outlined {
  font-size: 20px;
  color: #0B2922;
}
.a1-popup-ba-range {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: ew-resize;
  z-index: 10;
  margin: 0;
  padding: 0;
  border: none;
  -webkit-appearance: none;
  appearance: none;
}
.a1-popup-ba-caption {
  margin-top: 8px;
  font-size: 0.78rem;
  color: #55756C;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.a1-popup-ba-desc {
  font-weight: 500;
  color: #0B2922;
}
.a1-popup-ba-drag-hint {
  display: flex;
  align-items: center;
  gap: 3px;
  color: #22A06B;
  font-weight: 600;
  font-size: 0.74rem;
}

/* ==========================================================================
   Blinkit-Style Quick Customization & Add-ons Drawer (Requested by User)
   ========================================================================== */
.a1-quick-add-backdrop {
  position: fixed;
  inset: 0;
  background: rgba(11, 41, 34, 0.72);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  z-index: 99999;
  display: none;
  align-items: flex-end;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.a1-quick-add-backdrop.open {
  display: flex !important;
  opacity: 1;
}

.a1-quick-add-modal-wrap {
  width: 100%;
  max-width: 560px;
  position: relative;
  display: flex;
  justify-content: center;
}

.a1-quick-add-drawer {
  background: #FFFFFF;
  width: 100%;
  max-height: 90vh;
  border-radius: 24px 24px 0 0;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 -8px 36px rgba(11, 41, 34, 0.25);
  overflow: hidden;
  transform: translateY(100%);
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.a1-quick-add-backdrop.open .a1-quick-add-drawer {
  transform: translateY(0);
}

@media (min-width: 769px) {
  .a1-quick-add-backdrop {
    align-items: center !important;
  }
  .a1-quick-add-drawer {
    border-radius: 20px !important;
    max-height: 85vh !important;
    transform: scale(0.95) translateY(15px);
  }
  .a1-quick-add-backdrop.open .a1-quick-add-drawer {
    transform: scale(1) translateY(0);
  }
}

.a1-quick-add-close {
  position: absolute;
  top: 14px;
  right: 14px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #EFF8F3;
  border: 1px solid rgba(11, 41, 34, 0.12);
  color: #0B2922;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10;
  transition: all 0.2s ease;
}

.a1-quick-add-close:hover {
  background: #0B2922;
  color: #FFFFFF;
}

.a1-quick-add-body {
  padding: 1.5rem 1.25rem 0.75rem;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  flex: 1 1 auto;
}

/* Section 1: Top Main Price & Package Details */
.a1-quick-sec-1 {
  background: linear-gradient(135deg, #F0FDF4 0%, #FFFFFF 100%);
  border: 1.5px solid #22A06B;
  border-radius: 16px;
  padding: 1.15rem 1.25rem;
  margin-bottom: 1.15rem;
}

.a1-quick-badge-row {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 0.5rem;
}

.a1-quick-svc-tag {
  background: #0B2922;
  color: #FFFFFF;
  font-size: 0.72rem;
  font-weight: 800;
  padding: 3px 9px;
  border-radius: 999px;
  text-transform: uppercase;
  letter-spacing: 0.03em;
}

.a1-quick-tier-pill {
  background: #EAF3EE;
  color: #22A06B;
  font-size: 0.72rem;
  font-weight: 800;
  padding: 3px 9px;
  border-radius: 999px;
}

.a1-quick-title-price-box {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 12px;
}

.a1-quick-title {
  font-size: 1.28rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 4px;
  line-height: 1.2;
}

.a1-quick-sub {
  font-size: 0.82rem;
  color: #4B5563;
  margin: 0;
  line-height: 1.35;
}

.a1-quick-price-box {
  text-align: right;
  flex-shrink: 0;
}

.a1-quick-price-val {
  font-size: 1.45rem;
  font-weight: 900;
  color: #0B2922;
  line-height: 1;
}

.a1-quick-price-label {
  font-size: 0.7rem;
  color: #6B7280;
  font-weight: 700;
  margin-top: 3px;
  text-transform: uppercase;
}

.a1-quick-trust-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 0.85rem;
  padding-top: 0.75rem;
  border-top: 1px solid rgba(34, 160, 107, 0.2);
}

.a1-q-pill {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.72rem;
  font-weight: 700;
  color: #0B2922;
  background: rgba(34, 160, 107, 0.1);
  padding: 2px 8px;
  border-radius: 6px;
}

.a1-q-pill .material-symbols-outlined {
  font-size: 14px;
  color: #22A06B;
}

/* Section 2: Service-Specific Add-ons */
.a1-quick-sec-2 {
  margin-bottom: 0.75rem;
}

.a1-quick-sec-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0.45rem;
}

.a1-quick-sec-title {
  display: flex;
  align-items: center;
  gap: 5px;
  font-size: 0.85rem;
  font-weight: 800;
  color: #0B2922;
}

.a1-quick-sec-title .material-symbols-outlined {
  font-size: 16px;
  color: #22A06B;
}

.a1-quick-sec-hint {
  font-size: 0.68rem;
  font-weight: 600;
  color: #6B7280;
}

.a1-quick-addons-grid {
  display: grid !important;
  grid-template-columns: repeat(2, 1fr) !important;
  gap: 6px !important;
}

.a1-quick-addon-card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 5px 8px;
  background: #FFFFFF;
  border: 1.5px solid #E5E7EB;
  border-radius: 9px;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  min-height: 48px;
  position: relative;
  box-sizing: border-box;
}

.a1-quick-addon-card:hover {
  border-color: #22A06B;
}

.a1-quick-addon-card.is-selected {
  background: #EFF8F3;
  border-color: #22A06B;
  box-shadow: 0 2px 8px rgba(34, 160, 107, 0.12);
}

.a1-quick-addon-top-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 3px;
}

.a1-quick-addon-icon {
  width: 18px;
  height: 18px;
  border-radius: 5px;
  background: #EAF3EE;
  color: #22A06B;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all 0.2s ease;
}

.a1-quick-addon-icon .material-symbols-outlined {
  font-size: 12px;
}

.a1-quick-addon-card.is-selected .a1-quick-addon-icon {
  background: #22A06B;
  color: #FFFFFF;
}

.a1-quick-addon-action-group {
  display: flex;
  align-items: center;
  gap: 5px;
}

.a1-quick-addon-price {
  font-size: 0.70rem;
  font-weight: 800;
  color: #22A06B;
  letter-spacing: -0.01em;
  white-space: nowrap;
}

.a1-quick-addon-btn {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  width: 19px !important;
  height: 19px !important;
  min-width: 19px !important;
  max-width: 19px !important;
  min-height: 19px !important;
  max-height: 19px !important;
  aspect-ratio: 1 / 1 !important;
  border-radius: 50% !important;
  border: 1.5px solid #22A06B !important;
  background: #FFFFFF !important;
  color: #22A06B !important;
  cursor: pointer;
  padding: 0 !important;
  margin: 0 !important;
  flex-shrink: 0 !important;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  box-sizing: border-box !important;
  line-height: 1 !important;
  overflow: hidden !important;
}

.a1-quick-addon-btn .material-symbols-outlined {
  font-size: 11px !important;
  font-weight: 800 !important;
  line-height: 1 !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  width: 100% !important;
  height: 100% !important;
}

.a1-quick-addon-btn.is-added,
.a1-quick-addon-card.is-selected .a1-quick-addon-btn {
  background: #22A06B !important;
  border-color: #22A06B !important;
  color: #FFFFFF !important;
}

.a1-quick-addon-bottom-info {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.a1-quick-addon-name {
  font-size: 0.68rem;
  font-weight: 700;
  color: #0B2922;
  margin: 0;
  line-height: 1.15;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

@media (max-width: 480px) {
  .a1-addon-price-pill {
    font-size: 0.62rem !important;
    padding: 2px 5px !important;
  }
  .a1-addon-check-indicator {
    font-size: 0.54rem !important;
  }
}

/* Section 3: Horizontal Price Calculation Formula Track */
.a1-quick-sec-3 {
  background: #F8FAF9;
  border: 1.5px dashed #C8DFD4;
  border-radius: 14px;
  padding: 12px 14px;
  margin-bottom: 0.5rem;
}

.a1-quick-formula-label {
  font-size: 0.72rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #22A06B;
  display: flex;
  align-items: center;
  gap: 6px;
  margin-bottom: 8px;
}

.a1-quick-formula-label .material-symbols-outlined {
  font-size: 16px;
}

.a1-quick-formula-track {
  display: flex;
  align-items: center;
  gap: 8px;
  overflow-x: auto;
  padding-bottom: 4px;
  scrollbar-width: none;
}

.a1-quick-formula-track::-webkit-scrollbar {
  display: none;
}

.a1-formula-item {
  display: inline-flex;
  flex-direction: column;
  padding: 6px 12px;
  border-radius: 10px;
  background: #FFFFFF;
  border: 1px solid #E5E7EB;
  flex-shrink: 0;
}

.a1-formula-item.item-base {
  background: #EAF3EE;
  border-color: #22A06B;
}

.a1-formula-item.item-addon {
  background: #F0FDF4;
  border-color: #86EFAC;
}

.a1-formula-item.item-total {
  background: #0B2922;
  color: #FFFFFF;
  border-color: #0B2922;
}

.a1-formula-item.item-total .a1-formula-name {
  color: #A7D7C5;
}

.a1-formula-item.item-total .a1-formula-val {
  color: #FFFFFF;
  font-weight: 900;
}

.a1-formula-name {
  font-size: 0.68rem;
  font-weight: 700;
  color: #6B7280;
  white-space: nowrap;
}

.a1-formula-val {
  font-size: 0.95rem;
  font-weight: 800;
  color: #0B2922;
  white-space: nowrap;
}

.a1-formula-op {
  font-size: 1.15rem;
  font-weight: 900;
  color: #22A06B;
  flex-shrink: 0;
}

/* Section 4: Sticky Bottom Checkout Bar (Blinkit Style) */
.a1-quick-add-footer {
  background: #0B2922;
  color: #FFFFFF;
  padding: 12px 18px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-radius: 16px;
  margin: 0 14px 14px;
  box-shadow: 0 8px 24px rgba(11, 41, 34, 0.25);
  flex-shrink: 0;
}

.a1-checkout-left {
  display: flex;
  flex-direction: column;
}

.a1-checkout-count {
  font-size: 0.72rem;
  font-weight: 700;
  color: #A7D7C5;
  text-transform: uppercase;
  letter-spacing: 0.03em;
}

.a1-checkout-total-wrap {
  display: flex;
  align-items: baseline;
  gap: 6px;
}

.a1-checkout-total {
  font-size: 1.35rem;
  font-weight: 900;
  color: #FFFFFF;
}

.a1-checkout-tax-badge {
  font-size: 0.68rem;
  color: rgba(255, 255, 255, 0.65);
}

.a1-checkout-book-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #22A06B;
  color: #FFFFFF;
  font-size: 0.95rem;
  font-weight: 800;
  padding: 10px 20px;
  border-radius: 999px;
  border: none;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(34, 160, 107, 0.35);
  transition: all 0.2s ease;
}

.a1-checkout-book-btn:hover {
  background: #1C8658;
  transform: translateY(-1px);
}
</style>

<!-- Quick Customisation & Add-ons Modal Drawer (Blinkit Style, Requested by User) -->
<div id="a1QuickAddDrawerBackdrop" class="a1-quick-add-backdrop" onclick="closeQuickAddDrawer(event)">
  <div class="a1-quick-add-modal-wrap" onclick="event.stopPropagation()">
    <div id="a1QuickAddDrawer" class="a1-quick-add-drawer">
      <!-- Circular Close Button -->
      <button type="button" class="a1-quick-add-close" onclick="closeQuickAddDrawer(event)" aria-label="Close quick customization">
        <span class="material-symbols-outlined">close</span>
      </button>

      <!-- Scrollable Content with 3 Key Sections -->
      <div class="a1-quick-add-body" id="a1QuickAddDrawerBody">
        <!-- Injected dynamically via openQuickAddDrawer(packageIndex) -->
      </div>

      <!-- Section 4: Sticky Bottom Checkout Bar (Blinkit Style) -->
      <div class="a1-quick-add-footer" id="a1QuickAddDrawerFooter">
        <!-- Injected dynamically with live price and Book Now button -->
      </div>
    </div>
  </div>
</div>

<div id="a1PkgBottomSheetBackdrop" class="a1-pkg-bottom-sheet-backdrop" onclick="closePackageBottomSheet(event)">
  <div class="a1-popup-modal-wrap" onclick="event.stopPropagation()">
    
    <!-- White Floating Modal Card -->
    <div id="a1PkgBottomSheet" class="a1-pkg-bottom-sheet">
      <!-- High-Visibility Floating Close / Cross Button -->
      <button type="button" class="a1-popup-close-circle" onclick="closePackageBottomSheet(event)" aria-label="Close details popup">
        <span class="material-symbols-outlined">close</span>
      </button>

      <div class="a1-pkg-sheet-body" id="a1PkgBottomSheetBody">
        <!-- Dynamically injected via openPackageBottomSheet(index) -->
      </div>
    </div>
  </div>
</div>

<!-- =========================================================================
     7. CLIENTSIDE DYNAMIC CALCULATION & PACKAGES ENGINE
     ========================================================================= -->
<script>
/**
 * Master Service Packages Data Dictionary with Custom Commercial Photography
 */
const SERVICES_DATA = {
  "bathroom-cleaning": {
    "name": "Bathroom Cleaning",
    "heading": "Bathroom Cleaning Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/bathroom-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/bathroom_deep_cleaning_9d6155cb_1080p.mp4",
    "packages": [
      {
        "tier": "Essential Care",
        "title": "General Cleaning",
        "price": 600,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/packages/bathroom-general.jpg",
        "sub": "Includes basic scrubbing, toilet, mirror & sink detailing",
        "rating": 4.42,
        "reviewCount": 24,
        "duration": "40 - 50 min",
        "description": "Refresh your bathroom with our standard hygienic care covering basic scrubbing, toilet, mirror, washbasin, and tap detailing for clean everyday freshness.",
        "includes": [
          "WC Pot Cleaning & interior bowl disinfectant descaling",
          "Sink & Washbasin Cleaning with surface stain wiping",
          "Wall Tile Dusting & high-touch wet wipe",
          "Mirror Cleaning & chrome tap streak-free polish",
          "Complete Tile Scrubbing & manual antibacterial mopping"
        ],
        "excludes": [
          "Single-disc rotary machine scrubbing",
          "140°C high-pressure steam sanitization",
          "Severe hard water calcium crust eradication",
          "Exhaust fan motor dismantling and internal degreasing",
          "Tile grout re-filling or silicone repair"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 1,
          "2": 1,
          "3": 2,
          "4": 3,
          "5": 17
        },
        "reviews": [
          {
            "name": "Nisha Laungani",
            "date": "November 1, 2026",
            "stars": 3,
            "comment": "All goid, quick and clean service."
          },
          {
            "name": "Rahul Chavan",
            "date": "October 30, 2026",
            "stars": 5,
            "comment": "i am very happy with the service"
          },
          {
            "name": "Akshata",
            "date": "October 24, 2026",
            "stars": 5,
            "comment": "Bathroom smells fresh and tiles look spotless!"
          }
        ]
      },
      {
        "tier": "Signature Deep Clean",
        "featured": true,
        "title": "Deep Cleaning",
        "price": 800,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/packages/bathroom-deep.jpg",
        "sub": "Heavy single-disc machine scrubbing & hard water mark removal",
        "rating": 4.85,
        "reviewCount": 42,
        "duration": "60 - 75 min",
        "description": "Intensive mechanized deep cleaning with single-disc scrubbing and heavy descalers to eradicate persistent hard water stains, grout grime, and tile scum.",
        "includes": [
          "Single-disc rotary machine scrubbing for floor tiles",
          "Deep acid-free chemical descaling for glass partitions & mirrors",
          "Heavy hard water limescale removal from taps & showers",
          "Complete tile wall scrubbing & grout grime extraction",
          "Exhaust fan blades degreasing & exterior wipe"
        ],
        "excludes": [
          "140°C pressurized steam blast sanitization",
          "Repair of cracked tiles or chipped sanitaryware",
          "Exterior glass cleaning beyond safe window reach",
          "Wall plastering or ceiling seepage restoration"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 5,
          "5": 35
        },
        "reviews": [
          {
            "name": "Sameer Joshi",
            "date": "November 10, 2026",
            "stars": 5,
            "comment": "Removed 2 years of hard water marks completely! Highly recommend."
          },
          {
            "name": "Pooja Nair",
            "date": "November 4, 2026",
            "stars": 5,
            "comment": "Very professional staff, machine scrubbing was super thorough."
          },
          {
            "name": "Vikas Sharma",
            "date": "October 28, 2026",
            "stars": 4,
            "comment": "Great job overall, timely arrival."
          }
        ]
      },
      {
        "tier": "Medical-Grade Steam",
        "title": "Intense Steam Cleaning",
        "price": 1000,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/packages/bathroom-steam.jpg",
        "sub": "140°C pressurized steam sanitization eradicating 99.9% germs",
        "rating": 4.95,
        "reviewCount": 58,
        "duration": "75 - 90 min",
        "description": "Hospital-grade sanitization using 140°C pressurized steam and specialized enzymes, eliminating 99.9% of bacteria, mold spores, and hidden pathogens.",
        "includes": [
          "140°C high-pressure steam blast sanitizing toilet seat & grout",
          "99.9% bacteria & allergen eradication without harmful chemical fumes",
          "Deep grout descaling removing stubborn mold and mildew",
          "Complete mechanised floor scrubbing with enzyme formula",
          "Full mirror, chrome fixtures and partition nano-shield buffing"
        ],
        "excludes": [
          "Structural plumbing repair or replacement of fixtures",
          "Cement and paint spot removal from unfinished walls",
          "Exterior building glass cleaning without balcony"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 3,
          "5": 54
        },
        "reviews": [
          {
            "name": "Dr. Ananya Roy",
            "date": "November 14, 2026",
            "stars": 5,
            "comment": "Medical-grade steam gave true hospital grade cleanliness. Excellent!"
          },
          {
            "name": "Karthik Menon",
            "date": "November 8, 2026",
            "stars": 5,
            "comment": "Zero chemical smell and pure steam disinfection. Perfect."
          },
          {
            "name": "Ritu Deshmukh",
            "date": "October 29, 2026",
            "stars": 5,
            "comment": "Very impressive machine and meticulous detailing."
          }
        ]
      }
    ]
  },
  "home-cleaning": {
    "name": "Home Cleaning",
    "heading": "Full Home Deep Cleaning Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/home-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/deep_home_cleaning_6ce7a0e5.mp4",
    "packages": [
      {
        "tier": "Essential Compact",
        "title": "1 BHK Complete Deep Clean",
        "price": 1999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/packages/home-1bhk.jpg",
        "sub": "Living room, 1 bedroom, 1 kitchen, 1 washroom & balcony",
        "rating": 4.45,
        "reviewCount": 31,
        "duration": "3 - 4 hours",
        "description": "Comprehensive deep cleaning for your 1 BHK flat covering mechanized floor scrubbing, kitchen degreasing, bathroom descaling, and dust extraction.",
        "includes": [
          "Single-disc rotary floor machine scrubbing for hall & bedroom",
          "Kitchen chimney exterior, platform & cabinet exterior degreasing",
          "1 complete bathroom intensive descaling & sanitization",
          "Ceiling fans, switchboards, doors & window tracks vacuuming",
          "Balcony floor scrubbing & dry vacuuming of living space"
        ],
        "excludes": [
          "Upholstery / sofa wet shampoo extraction (available as add-on)",
          "Internal cleaning of occupied wardrobes & kitchen drawers",
          "Wall washing or repainting permanent dampness spots",
          "Dismantling heavy crystal chandeliers"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 2,
          "4": 6,
          "5": 22
        },
        "reviews": [
          {
            "name": "Rohit Verma",
            "date": "November 5, 2026",
            "stars": 5,
            "comment": "Transformed my 1 BHK flat before housewarming. 10/10!"
          },
          {
            "name": "Priya Sundaram",
            "date": "October 31, 2026",
            "stars": 4,
            "comment": "Very satisfied with the bathroom and kitchen work."
          }
        ]
      },
      {
        "tier": "Signature Family Clean",
        "featured": true,
        "title": "2 BHK Complete Deep Clean",
        "price": 2999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/packages/home-2bhk.jpg",
        "sub": "Living room, 2 bedrooms, kitchen, 2 washrooms & balconies",
        "rating": 4.88,
        "reviewCount": 64,
        "duration": "4 - 5 hours",
        "description": "Full flat mechanized hygiene makeover for 2 BHK family apartments, restoring shine to tiles, modular kitchens, 2 bathrooms, and balconies.",
        "includes": [
          "Full flat mechanized single-disc scrubbing & edge buffing",
          "Modular kitchen deep degreasing including tiles, hob & exhaust",
          "2 full bathrooms complete acid-free descaling & polish",
          "Dry vacuuming of mattresses, curtains & living room furniture",
          "High-reach cobweb extraction, door polishing & balcony jet wash"
        ],
        "excludes": [
          "Wet sofa & carpet injection wash (separate add-on)",
          "Cleaning inside cupboards containing personal clothes",
          "Exterior high-rise window panes without balcony access",
          "Removal of permanent paint overspray on untreated wood"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 2,
          "4": 9,
          "5": 52
        },
        "reviews": [
          {
            "name": "Alok Gupta",
            "date": "November 12, 2026",
            "stars": 5,
            "comment": "Super fast, punctual team. Every corner was scrubbed."
          },
          {
            "name": "Shweta K.",
            "date": "November 2, 2026",
            "stars": 5,
            "comment": "The kitchen and both bathrooms look brand new."
          }
        ]
      },
      {
        "tier": "Luxury Villa Master",
        "title": "3 BHK / Duplex Villa Master",
        "price": 3999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/home-cleaning.jpg",
        "sub": "Comprehensive deep hygiene for large families & villas",
        "rating": 4.92,
        "reviewCount": 89,
        "duration": "5 - 7 hours",
        "description": "End-to-end luxury cleaning masterclass for large 3 BHK homes, penthouses, and villas with a supervisor-led expert team.",
        "includes": [
          "Multi-disc industrial scrubbing for 3 bedrooms, living & dining",
          "3 complete bathrooms intensive rotary and steam cleaning",
          "Heavy kitchen degreasing for cabinets, chimney, tiles & slab",
          "Terrace, utility area & all balconies high-pressure jet wash",
          "Final white-glove joint inspection with satisfaction sign-off"
        ],
        "excludes": [
          "Wet shampooing of large wall-to-wall carpets (add-on)",
          "Garden lawn trimming or rooftop water proofing",
          "Moving ultra-heavy antique furniture over 60 kg"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 2,
          "4": 7,
          "5": 80
        },
        "reviews": [
          {
            "name": "Manish Malhotra",
            "date": "November 15, 2026",
            "stars": 5,
            "comment": "Worth every rupee. Villa shines like a 5-star hotel."
          }
        ]
      }
    ]
  },
  "kitchen-cleaning": {
    "name": "Kitchen Cleaning",
    "heading": "Kitchen Deep Cleaning Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/kitchen-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/Person_cleaning_kitchen_82bbe15d.mp4",
    "packages": [
      {
        "tier": "Surface Degrease",
        "title": "Standard Kitchen Degrease",
        "price": 1299,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/kitchen-cleaning.jpg",
        "sub": "Platform, sink, exterior cabinets, backsplash tiles & floor",
        "rating": 4.4,
        "reviewCount": 28,
        "duration": "60 - 75 min",
        "description": "Targeted degreasing for high-frequency cooking areas including cooktop, backsplash tiles, kitchen counter, sink, and floor.",
        "includes": [
          "Gas stove burners & cooktop heavy grease removal",
          "Tile backsplash degreasing & sauce stain wiping",
          "Stainless steel sink descaling & drain antibacterial rinse",
          "Modular cabinet exterior surface wiping",
          "Manual floor scrubbing with food-grade degreaser"
        ],
        "excludes": [
          "Chimney internal motor and duct cleaning",
          "Cleaning inside modular drawers with spices/utensils",
          "Refrigerator interior defrosting & shelf detailing",
          "Microwave interior carbonized grease removal"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 2,
          "4": 5,
          "5": 20
        },
        "reviews": [
          {
            "name": "Geeta Patel",
            "date": "November 7, 2026",
            "stars": 5,
            "comment": "Removed hard oil stains behind the stove easily."
          }
        ]
      },
      {
        "tier": "Signature Chimney Deep",
        "featured": true,
        "title": "Chimney & Modular Deep Clean",
        "price": 1799,
        "thumb": "<?= SITE_URL ?>/assets/images/services/kitchen-cleaning.jpg",
        "sub": "Filter degreasing, internal baffles & full kitchen wash",
        "rating": 4.86,
        "reviewCount": 52,
        "duration": "90 - 120 min",
        "description": "Specialized oil & spice restoration including chemical bath for chimney baffle filters, exhaust fan degreasing, and inside-out modular care.",
        "includes": [
          "Chimney baffle & mesh filter caustic-free chemical soak & wash",
          "Exhaust fan motor housing & blades deep degreasing",
          "Inside & outside modular drawer vacuuming & sanitizing",
          "Persistent tile grout oil buildup scrubbing",
          "Single-disc floor scrubbing for sticky kitchen tiles"
        ],
        "excludes": [
          "Chimney motor winding or electrical circuitry repairs",
          "Replacement of bent or rusted baffle filters",
          "Dishwasher internal filter maintenance"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 6,
          "5": 44
        },
        "reviews": [
          {
            "name": "Sneha Rao",
            "date": "November 9, 2026",
            "stars": 5,
            "comment": "Chimney suction improved immediately after filter wash!"
          }
        ]
      },
      {
        "tier": "Ultra Steam Hygiene",
        "title": "Ultra Steam & Sanitization Spa",
        "price": 2499,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/kitchen-cleaning.jpg",
        "sub": "Hospital-grade steam sanitation for all surfaces & appliances",
        "rating": 4.94,
        "reviewCount": 41,
        "duration": "2 - 2.5 hours",
        "description": "140°C high-temperature thermal sterilization for food preparation zones, eradicating grease, salmonella, and stubborn residue.",
        "includes": [
          "140°C steam sanitation of countertop, prep board & sink",
          "Complete chimney filter cleaning & exterior hood buffing",
          "Inside-out empty modular cabinet microbial wipe",
          "Microwave & refrigerator exterior detailing & sanitization",
          "Food-safe floor buffing eliminating oil tackiness completely"
        ],
        "excludes": [
          "Repair of cracked granite slabs or loose cabinet hinges",
          "Repainting peeling laminate or moisture-swollen MDF"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 0,
          "4": 3,
          "5": 38
        },
        "reviews": [
          {
            "name": "Dr. Deepak Bhatia",
            "date": "November 11, 2026",
            "stars": 5,
            "comment": "Truly high-grade steam hygiene. Cleanest our kitchen has ever been."
          }
        ]
      }
    ]
  },
  "sofa-cleaning": {
    "name": "Sofa & Upholstery",
    "heading": "Sofa & Living Room Care Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/sofa-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/sofa_shampoo_cleaning_6c6a0420.mp4",
    "packages": [
      {
        "tier": "Express Care",
        "title": "Single Living Room Express (Only For Flat)",
        "price": 1499,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/sofa-cleaning.jpg",
        "sub": "Living room cleaning, sofa vacuuming & floor detailing",
        "rating": 4.42,
        "reviewCount": 24,
        "duration": "40 - 50 min",
        "description": "Refresh your Living Room with our professional basic cleaning service, including window cleaning, wall & ceiling dry dusting, manual floor scrubbing, appliance cleaning, and exterior furniture dusting for a neat and well-maintained space.",
        "includes": [
          "Window cleaning & glass surface wiping",
          "Wall & ceiling dry dusting",
          "Exterior cleaning of electrical appliances, fans, AC units & switches",
          "Sofa Dry vacuum/ dry dusting (upto 5 seater)",
          "Manual floor scrubbing & mopping",
          "Dry dusting of TV unit and exterior cleaning of furniture surfaces only"
        ],
        "excludes": [
          "Cleaning of kitchen & bathroom windows is not included",
          "Exterior glass beyond safe reach (upper floors without balcony) is not included",
          "Grills or structures requiring leaning out are not included",
          "External sunshades or awnings are not included",
          "Tinted or privacy films (risk of peeling) are not included",
          "Glue, paint stains & sticker removal",
          "Collapsible mosquito nets and Curtains wet cleaning are not included"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 1,
          "2": 1,
          "3": 2,
          "4": 3,
          "5": 17
        },
        "reviews": [
          {
            "name": "Nisha Laungani",
            "date": "November 1, 2026",
            "stars": 3,
            "comment": "All goid"
          },
          {
            "name": "Rahul Chavan",
            "date": "October 30, 2026",
            "stars": 5,
            "comment": "i am very happy with the service"
          },
          {
            "name": "Akshata",
            "date": "October 24, 2026",
            "stars": 5,
            "comment": "Team arrived right on time and cleaned thoroughly."
          }
        ]
      },
      {
        "tier": "Signature Exclusive",
        "featured": true,
        "title": "Single Living Room Exclusive (Only For Flat)",
        "price": 1999,
        "thumb": "<?= SITE_URL ?>/assets/images/services/sofa-cleaning.jpg",
        "sub": "Full mechanized scrubbing & sofa injection shampooing",
        "rating": 4.82,
        "reviewCount": 47,
        "duration": "1 hour",
        "description": "Refresh your Living Room with our professional advance cleaning service, including mechanized single-disc floor scrubbing, wet sofa shampooing, window polishing, and anti-bacterial air treatment.",
        "includes": [
          "Full living room mechanized single-disc floor scrubbing",
          "Complete 5-seater sofa wet injection-extraction shampooing",
          "Window glass double-sided polish & aluminum track vacuuming",
          "Wall cobweb eradication & ceiling fan detailed wiping",
          "TV console, coffee table & furniture polish with microfiber",
          "Antibacterial deodorizer spray treatment"
        ],
        "excludes": [
          "Fabric color bleeding on pre-damaged antique velvet",
          "Permanent ink, acid or pet urine bleaching marks",
          "Balcony ceiling washing if prone to neighbor leakage",
          "Curtains dry cleaning"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 6,
          "5": 39
        },
        "reviews": [
          {
            "name": "Aditya Kulkarni",
            "date": "November 12, 2026",
            "stars": 5,
            "comment": "Wet sofa wash removed all old stains. Looks like new!"
          },
          {
            "name": "Meera Sen",
            "date": "November 6, 2026",
            "stars": 5,
            "comment": "Extremely courteous staff and fast drying process."
          }
        ]
      },
      {
        "tier": "Recliner Master",
        "title": "7-Seater L-Shape Recliner Master",
        "price": 2499,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/sofa-cleaning.jpg",
        "sub": "3-stage extraction for sectional sofas & electric recliners",
        "rating": 4.9,
        "reviewCount": 63,
        "duration": "90 - 120 min",
        "description": "Ultimate luxury fabric spa for sectional L-shaped sofas and electric recliners with deep crevice suction and fabric conditioning.",
        "includes": [
          "Sectional & recliner mechanical seam suction and extraction",
          "Heavy-duty enzyme foam shampooing for all 7 seating segments",
          "Crevice extraction for hidden crumbs, hair & dust allergens",
          "Rapid moisture vacuum recovery for fast 3-4 hour drying",
          "Protective stain-resistant finishing coat application"
        ],
        "excludes": [
          "Electric recliner motor or wiring maintenance",
          "Repair of peeled bonded leather or cracked vinyl",
          "Color restoration on sun-faded fabric"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 2,
          "4": 5,
          "5": 56
        },
        "reviews": [
          {
            "name": "Vikram Singhania",
            "date": "November 13, 2026",
            "stars": 5,
            "comment": "Handled our expensive leatherette recliner with great care."
          }
        ]
      }
    ]
  },
  "water-tank-cleaning": {
    "name": "Water Tank Cleaning",
    "heading": "Water Tank Sanitization Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/water-tank-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/Person_cleaning_water_tank_bc0ad2f8.mp4",
    "packages": [
      {
        "tier": "Overhead Care",
        "title": "Overhead Tank (Up to 1,000L)",
        "price": 899,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/water-tank-cleaning.jpg",
        "sub": "De-sludging, high-pressure jet wash & UV disinfection",
        "rating": 4.5,
        "reviewCount": 19,
        "duration": "45 - 60 min",
        "description": "Mechanized 6-stage overhead sintex/concrete tank sanitization removing brown sediment, algae, and bacterial slime for safe drinking water.",
        "includes": [
          "Complete drainage of water and sludge pumping",
          "High-pressure water jet scouring of interior walls",
          "Manual scrubbing of corners and outlet pipe area",
          "UV antibacterial lamp radiation sterilization",
          "Chlorine-free anti-algae biological treatment"
        ],
        "excludes": [
          "Tank structure crack sealing or civil plastering",
          "Float valve or copper plumbing pipe replacement",
          "Water pump servicing"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 3,
          "5": 14
        },
        "reviews": [
          {
            "name": "Kishore Patil",
            "date": "November 3, 2026",
            "stars": 5,
            "comment": "Water is crystal clear now. UV lamp process was impressive."
          }
        ]
      },
      {
        "tier": "Underground Sump",
        "featured": true,
        "title": "Underground Sump (Up to 2,500L)",
        "price": 1499,
        "thumb": "<?= SITE_URL ?>/assets/images/services/water-tank-cleaning.jpg",
        "sub": "Heavy vacuum de-sludging & rotary jet wall scouring",
        "rating": 4.88,
        "reviewCount": 35,
        "duration": "60 - 90 min",
        "description": "Heavy submersible vacuum de-sludging and rotary jet scouring for large capacity underground RCC water sumps.",
        "includes": [
          "Heavy submersible sludge pump evacuation",
          "Industrial high-pressure jet cleaning up to 150 bar",
          "Anti-microbial chemical scrub on RCC walls & floor",
          "UV germicidal radiation treatment",
          "Sediment extraction around pump suction line"
        ],
        "excludes": [
          "Civil masonry or waterproofing coating",
          "Sump lid fabrication or rust removal from iron manhole",
          "Main municipal supply line descaling"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 5,
          "5": 29
        },
        "reviews": [
          {
            "name": "Harish Mehta",
            "date": "November 8, 2026",
            "stars": 5,
            "comment": "Cleaned years of silt from the sump floor in under an hour."
          }
        ]
      },
      {
        "tier": "Society Master",
        "title": "Society / Multi-Tank Combo",
        "price": 2999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/water-tank-cleaning.jpg",
        "sub": "Overhead + Sump complete community water purity combo",
        "rating": 4.95,
        "reviewCount": 51,
        "duration": "2 - 3 hours",
        "description": "Commercial-grade sanitization combo for apartment complexes covering both overhead tanks and underground sumps.",
        "includes": [
          "Simultaneous multi-tank dewatering with industrial pumps",
          "Full wall, ceiling & floor high-pressure scouring",
          "Comprehensive UV germicidal sterilization across all tanks",
          "Water clarity and TDS post-cleaning inspection test",
          "Society hygiene certification report issued"
        ],
        "excludes": [
          "Main pipeline pressure testing",
          "Pump electrical panel repairs"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 3,
          "5": 47
        },
        "reviews": [
          {
            "name": "Rajesh Gokhale (Secretary)",
            "date": "November 14, 2026",
            "stars": 5,
            "comment": "Full society was happy with the speed and certification."
          }
        ]
      }
    ]
  },
  "carpet-cleaning": {
    "name": "Carpet Cleaning",
    "heading": "Carpet Deep Extraction Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/carpet-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/carpet_and_rug_deep_wash_ed47a45e.mp4",
    "packages": [
      {
        "tier": "Dry Extraction",
        "title": "Dry Vacuum & Surface Sanitize",
        "price": 999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/carpet-cleaning.jpg",
        "sub": "High-filtration HEPA dust, mite & dry allergen removal",
        "rating": 4.4,
        "reviewCount": 15,
        "duration": "30 - 45 min",
        "description": "High-filtration dry extraction removing fine grit, dead skin, and dust mites trapped within carpet fibers.",
        "includes": [
          "Hospital-grade HEPA dry vacuuming of top pile and backing",
          "Pile rejuvenation brushing to restore carpet texture",
          "Dry odor-neutralizing deodorizer powder treatment",
          "Surface pet hair & fluff removal with rubber blade"
        ],
        "excludes": [
          "Wet extraction washing or heavy spot shampooing",
          "Old tea, coffee or urine deep stain removal",
          "Carpet edge binding or re-weaving"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 3,
          "5": 10
        },
        "reviews": [
          {
            "name": "Ankita Sen",
            "date": "November 2, 2026",
            "stars": 5,
            "comment": "Extracted shocking amount of dust from our area rug."
          }
        ]
      },
      {
        "tier": "Deep Shampoo",
        "featured": true,
        "title": "Injection-Extraction Deep Wash",
        "price": 1499,
        "thumb": "<?= SITE_URL ?>/assets/images/services/carpet-cleaning.jpg",
        "sub": "Warm shampoo injection with 90% instant moisture extraction",
        "rating": 4.85,
        "reviewCount": 39,
        "duration": "60 - 75 min",
        "description": "Industrial injection-extraction wash that pushes warm enzyme shampoo deep into carpet roots and extracts dirty water instantly.",
        "includes": [
          "Rotary machine agitation for fiber deep cleaning",
          "Pressurized injection of anti-static cleaning shampoo",
          "High-power suction extracting 90% water & dissolved dirt",
          "Anti-bacterial allergen neutralizer application",
          "Rapid drying air circulation guidance"
        ],
        "excludes": [
          "Fading caused by permanent direct sun exposure",
          "Burnt fiber spots or cigarette holes",
          "Carpet underlay rotting replacement"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 5,
          "5": 32
        },
        "reviews": [
          {
            "name": "Varun Dhawan",
            "date": "November 10, 2026",
            "stars": 5,
            "comment": "Stains from Diwali party vanished completely!"
          }
        ]
      },
      {
        "tier": "Luxury Persian",
        "title": "Handmade / Wool Persian Rug Spa",
        "price": 2299,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/carpet-cleaning.jpg",
        "sub": "Zero-damage pH-neutral botanical care for precious carpets",
        "rating": 4.96,
        "reviewCount": 27,
        "duration": "90 - 120 min",
        "description": "Delicate museum-grade care for oriental, silk, and wool rugs with pH-neutral organic cleansers that protect natural vegetable dyes.",
        "includes": [
          "Color-fastness patch testing before wash",
          "pH-neutral botanical shampoo manual sponging",
          "Fringe detailing and manual untangling",
          "Fiber conditioner application for plush softness",
          "Controlled indoor shade dry protocol"
        ],
        "excludes": [
          "Knot re-weaving or frayed fringe re-stitching",
          "Repairing existing dye bleeds from previous wash attempts"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 0,
          "4": 2,
          "5": 25
        },
        "reviews": [
          {
            "name": "Begum Fatima",
            "date": "November 5, 2026",
            "stars": 5,
            "comment": "Safely washed my ancestral Kashmiri silk carpet. Perfection."
          }
        ]
      }
    ]
  },
  "balcony-cleaning": {
    "name": "Balcony & Floor Scrub",
    "heading": "Balcony & Floor Detailing Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/balcony-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/balcony_and_floor_deep_scrub_9643e5bc_1080p.mp4",
    "packages": [
      {
        "tier": "Pressure Jet",
        "title": "Single Balcony High-Pressure Wash",
        "price": 599,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/balcony-cleaning.jpg",
        "sub": "High-pressure wash for floor, railing & drain outlet",
        "rating": 4.45,
        "reviewCount": 18,
        "duration": "30 - 40 min",
        "description": "High-pressure jet wash removing outdoor smog, mud stains, pigeon droppings, and algae from your balcony tiles and railings.",
        "includes": [
          "Floor high-pressure water jet washing",
          "Grill & railing detailed microfiber wiping",
          "Drain outlet clearing and sediment wash",
          "Pigeon drop stain eradication with safe disinfectant",
          "Squeegee drying of floor tiles"
        ],
        "excludes": [
          "Exterior glass cleaning beyond safe leaning distance",
          "Wall repainting or fixing peeling exterior paint",
          "AC outdoor compressor servicing"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 4,
          "5": 12
        },
        "reviews": [
          {
            "name": "Deepak Sawant",
            "date": "November 4, 2026",
            "stars": 5,
            "comment": "Pigeon stains gone, balcony is sparkling clean."
          }
        ]
      },
      {
        "tier": "Double Balcony",
        "featured": true,
        "title": "Double Balcony & Terrace Detailing",
        "price": 999,
        "thumb": "<?= SITE_URL ?>/assets/images/services/balcony-cleaning.jpg",
        "sub": "2 balconies / open terrace complete moss & grout scrub",
        "rating": 4.82,
        "reviewCount": 34,
        "duration": "60 - 80 min",
        "description": "Comprehensive wash for 2 balconies or open terrace areas including floor scrubbing, drain descaling, and sliding door track cleaning.",
        "includes": [
          "High-pressure jet cleaning for 2 full balconies / terrace",
          "Heavy tile grout scrubbing removing algae and mineral crust",
          "Sliding glass door tracks vacuuming & wiping",
          "Balcony ceiling fan & light fixture exterior dusting",
          "Anti-fungal wash preventing green moss regrowth"
        ],
        "excludes": [
          "Terrace waterproofing or roof leakage repairs",
          "Bird netting installation or repair",
          "Iron grill rust grinding and repainting"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 4,
          "5": 28
        },
        "reviews": [
          {
            "name": "Nikhil Ranade",
            "date": "November 7, 2026",
            "stars": 5,
            "comment": "High-pressure wash left terrace completely spotless."
          }
        ]
      },
      {
        "tier": "Machine Polish",
        "title": "Full House Floor Buffing & Polishing",
        "price": 1899,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/balcony-cleaning.jpg",
        "sub": "Industrial rotary floor machine buffing for mirror shine",
        "rating": 4.91,
        "reviewCount": 44,
        "duration": "90 - 120 min",
        "description": "Mechanized floor rotary buffing restoring gloss, removing stubborn scuff marks, and sealing tile surfaces across the flat.",
        "includes": [
          "Single-disc rotary floor machine buffing with soft pad",
          "Removal of surface haze, sticky residues & grime lines",
          "Skirting board line-by-line detailed cleaning",
          "High-gloss neutral buffing polish application",
          "Non-slip protective finish for marble, vitrified & granite"
        ],
        "excludes": [
          "Diamond pad stone cutting / leveling deep scratches",
          "Cracked marble epoxy resin filling",
          "Tile replacement"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 4,
          "5": 39
        },
        "reviews": [
          {
            "name": "Sanjay Kapoor",
            "date": "November 11, 2026",
            "stars": 5,
            "comment": "Vitrified tiles look brand new with mirror finish."
          }
        ]
      }
    ]
  },
  "curtain-cleaning": {
    "name": "Curtain & Blinds Cleaning",
    "heading": "Curtain & Blinds Sanitization Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/curtain-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/curtain_steam_clean_6bd86d98.mp4",
    "packages": [
      {
        "tier": "On-Site Express",
        "title": "On-Site Vacuum & Steam (4 Panels)",
        "price": 799,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/curtain-cleaning.jpg",
        "sub": "Hassle-free on-rod HEPA extraction & vertical steam blast",
        "rating": 4.48,
        "reviewCount": 16,
        "duration": "30 - 45 min",
        "description": "Hassle-free on-hanger curtain sanitization using HEPA extraction and 140°C steam without removing curtains from their rods.",
        "includes": [
          "HEPA dust extraction on both front & back folds",
          "140°C pressurized vertical steam blasting",
          "Wrinkle easing and fabric rejuvenation",
          "Elimination of trapped odors, cooking smells & dust mites",
          "Fabric deodorizing mist application"
        ],
        "excludes": [
          "Off-site laundry washing or dry cleaning",
          "Deep ink or grease stain extraction",
          "Curtain track replacement or cord repair"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 3,
          "5": 11
        },
        "reviews": [
          {
            "name": "Kavita Iyer",
            "date": "November 2, 2026",
            "stars": 5,
            "comment": "No need to dismantle curtains! Done in 30 minutes."
          }
        ]
      },
      {
        "tier": "Living Room Set",
        "featured": true,
        "title": "Full Living Room Set (8 Panels)",
        "price": 1499,
        "thumb": "<?= SITE_URL ?>/assets/images/services/curtain-cleaning.jpg",
        "sub": "Complete drape & sheer sanitization with pleat setting",
        "rating": 4.84,
        "reviewCount": 32,
        "duration": "60 - 75 min",
        "description": "Complete living room drapery steam care covering sheer and heavy blackout curtains with crease relaxation.",
        "includes": [
          "Deep dry vacuuming of 8 curtain panels on-site",
          "High-temperature steam sanitization eradicating allergens",
          "Pelmet, curtain rods & tie-back tassels detailing",
          "Pleat alignment and smooth drape setting",
          "Anti-dust static repellent finish"
        ],
        "excludes": [
          "Mending torn hems or damaged eyelet rings",
          "Restoring sun-bleached or weakened sheer fabric"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 4,
          "5": 26
        },
        "reviews": [
          {
            "name": "Sonal Mittal",
            "date": "November 9, 2026",
            "stars": 5,
            "comment": "Wrinkles fell right out, pleasant gentle lavender scent."
          }
        ]
      },
      {
        "tier": "Whole House Drapes",
        "title": "Whole House Luxury Drapery (16 Panels)",
        "price": 2699,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/curtain-cleaning.jpg",
        "sub": "Full luxury home curtain steam sanitization package",
        "rating": 4.93,
        "reviewCount": 48,
        "duration": "2 - 2.5 hours",
        "description": "Whole-home curtain hygiene package for up to 16 drapery panels across living room and all bedrooms.",
        "includes": [
          "Dual-side extraction and 140°C vertical steam across 16 panels",
          "Valance & pelmet dust extraction",
          "Bacterial odor removal for pet and smoke scents",
          "Fabric softening steam touch-up for crisp hanging",
          "Supervisor inspection of all window dressings"
        ],
        "excludes": [
          "Alteration of curtain length",
          "Velvet pile distortion repairs from past water damage"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 4,
          "5": 43
        },
        "reviews": [
          {
            "name": "Bhavna Chawla",
            "date": "November 13, 2026",
            "stars": 5,
            "comment": "Cleaned all 4 bedrooms and hall drapes without any mess."
          }
        ]
      }
    ]
  },
  "move-in-move-out": {
    "name": "Move-In / Move-Out",
    "heading": "Move-In / Move-Out Deep Clean Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/move-in-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/Moving_and_cleaning_service_64e5dea4.mp4",
    "packages": [
      {
        "tier": "1 BHK Turnover",
        "title": "1 BHK Move-In Clean",
        "price": 1799,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/move-in-cleaning.jpg",
        "sub": "Full empty house sanitization before moving and shifting",
        "rating": 4.52,
        "reviewCount": 22,
        "duration": "3 - 4 hours",
        "description": "Move into a sparkling clean home! Full deep cleaning of vacant 1 BHK flat ensuring every corner, cupboard, and bathroom is sanitized.",
        "includes": [
          "Empty flat vacuuming and floor machine scrubbing",
          "Inside and outside cleaning of all empty wardrobes & shelves",
          "Kitchen modular cabinets inside-out degreasing & wash",
          "Bathroom descaling, acid-free fixture polish & disinfection",
          "Window tracks vacuuming & balcony floor scrubbing"
        ],
        "excludes": [
          "Disposal of heavy furniture or items left by previous tenant",
          "Repainting peeling wall patches",
          "Exterior window cleaning without balcony"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 4,
          "5": 16
        },
        "reviews": [
          {
            "name": "Kunal Deshpande",
            "date": "November 1, 2026",
            "stars": 5,
            "comment": "Moved in without worrying about tenant germs. Great work."
          }
        ]
      },
      {
        "tier": "2 BHK Family Handover",
        "featured": true,
        "title": "2 BHK Move-In Clean",
        "price": 2799,
        "thumb": "<?= SITE_URL ?>/assets/images/services/move-in-move-out-cleaning.jpg",
        "sub": "Deep hygienic prep for 2 BHK family flats & floors",
        "rating": 4.87,
        "reviewCount": 53,
        "duration": "4 - 5 hours",
        "description": "Complete move-in ready handover for 2 BHK flats, eliminating dust from past tenancy and ensuring hospital-grade hygiene.",
        "includes": [
          "Single-disc rotary floor buffing for entire flat",
          "2 complete bathrooms intensive descaling and steam disinfection",
          "Kitchen chimney, countertops & all empty cabinets sanitized",
          "Door surfaces, frames, switchboards & handles sanitized",
          "Balconies high-pressure wash & window glass polish"
        ],
        "excludes": [
          "Pest control chemical treatment (separate service)",
          "Civil masonry or electrical repairs",
          "Hauling bulk renovation debris"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 2,
          "4": 6,
          "5": 44
        },
        "reviews": [
          {
            "name": "Tanmay Bhatt",
            "date": "November 6, 2026",
            "stars": 5,
            "comment": "Saved us 2 days of exhausting cleaning work before shifting."
          }
        ]
      },
      {
        "tier": "Villa / 3 BHK Luxury",
        "title": "3 BHK / Villa Move-In Master",
        "price": 3999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/move-in-cleaning.jpg",
        "sub": "Full luxury house sanitization for hassle-free living",
        "rating": 4.95,
        "reviewCount": 76,
        "duration": "5 - 7 hours",
        "description": "Comprehensive move-in handover for 3 BHK homes and villas, delivering a pristine, certified hygienic home for your family.",
        "includes": [
          "Industrial rotary scrubbing for all bedroom & living floors",
          "3 full bathrooms deep chemical wash & mirror restoration",
          "All empty wardrobes, lofts & kitchen modular cabinets detailed",
          "Terrace, utility area & all balconies pressure washed",
          "Move-in certified hygiene guarantee with supervisor audit"
        ],
        "excludes": [
          "Carpet/sofa shampooing if old furniture remains",
          "Rappelling external building facade glass"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 5,
          "5": 70
        },
        "reviews": [
          {
            "name": "Siddharth Roy",
            "date": "November 12, 2026",
            "stars": 5,
            "comment": "Pristine handover. Smells wonderfully clean and safe."
          }
        ]
      }
    ]
  },
  "post-construction": {
    "name": "Post Construction",
    "heading": "Post Construction Cleaning Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/post-construction.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/Post_construction_cleaning_service_866a34c4.mp4",
    "packages": [
      {
        "tier": "De-Dusting Initial",
        "title": "Basic Paint & Plaster Wipe",
        "price": 1499,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/post-construction.jpg",
        "sub": "Removal of loose cement, paint spots & construction dust",
        "rating": 4.41,
        "reviewCount": 20,
        "duration": "2 - 3 hours",
        "description": "First-stage post-renovation cleanup removing loose cement, drywall dust, paint flecks, and track debris.",
        "includes": [
          "Fine cement and plaster dust vacuum extraction",
          "Manual scraping of paint spots on glass & tiles with brass blades",
          "Window sliding track debris suction",
          "Balcony and utility area washing",
          "Neutral pH floor mopping to cut plaster residue"
        ],
        "excludes": [
          "Heavy diamond floor crystallization",
          "Acid cleaning on natural marble or sensitive stone",
          "Chipping dried concrete mounds over 1 inch"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 2,
          "4": 4,
          "5": 13
        },
        "reviews": [
          {
            "name": "Arvind Swamy",
            "date": "November 4, 2026",
            "stars": 5,
            "comment": "Removed powdery dust completely from all tracks and corners."
          }
        ]
      },
      {
        "tier": "Heavy Machine Buff",
        "featured": true,
        "title": "Comprehensive Post-Build Deep Clean",
        "price": 2999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/post-construction.jpg",
        "sub": "Heavy industrial mechanised scrubbing for ready-to-move finish",
        "rating": 4.88,
        "reviewCount": 49,
        "duration": "4 - 5 hours",
        "description": "Intensive single-disc machine scrubbing to clear construction film, tile adhesive residue, and fine cement dust.",
        "includes": [
          "Single-disc rotary machine scrubbing removing adhesive film",
          "Switchboard, electrical plate & door frame detailing",
          "Acid-free cement slurry removal from all tile surfaces",
          "Glass glazing residue and silicone smear cleanup",
          "Cabinets inside and outside industrial vacuuming"
        ],
        "excludes": [
          "Polishing scratched glass surfaces caused during construction",
          "Disposal of heavy construction debris bags",
          "Civil grout repair"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 6,
          "5": 41
        },
        "reviews": [
          {
            "name": "Manish Godbole",
            "date": "November 10, 2026",
            "stars": 5,
            "comment": "Contractor left the place a mess, A-1 made it look like a showroom."
          }
        ]
      },
      {
        "tier": "Turnkey Handover",
        "title": "Move-Ready Handover Master",
        "price": 4999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/post-construction.jpg",
        "sub": "Complete villa / commercial site handover detailing",
        "rating": 4.96,
        "reviewCount": 68,
        "duration": "6 - 8 hours",
        "description": "Turnkey white-glove site handover transforming raw post-construction spaces into immaculate, move-in-ready living areas.",
        "includes": [
          "Double rotary scrubbing & high-gloss floor buffing",
          "High-reach cobweb, ceiling fan & AC vent dust extraction",
          "Kitchen and bathroom heavy adhesive & grout clearing",
          "Nano-coating buff on all glass windows & balcony railings",
          "Final supervisor-led white-glove inspection"
        ],
        "excludes": [
          "Fixing plumbing leaks or electrical wiring",
          "Touching up unpainted plaster patches"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 1,
          "4": 4,
          "5": 63
        },
        "reviews": [
          {
            "name": "Prem Chandani",
            "date": "November 14, 2026",
            "stars": 5,
            "comment": "Architect and client were stunned by the finish. Top notch."
          }
        ]
      }
    ]
  },
  "commercial-cleaning": {
    "name": "Office & Commercial",
    "heading": "Office & Commercial Cleaning Packages",
    "thumb": "<?= SITE_URL ?>/assets/images/pricing/commercial-cleaning.jpg",
    "video": "<?= SITE_URL ?>/assets/cleaning%20videos/office_and_commercial_cleaning_6ca03922.mp4",
    "packages": [
      {
        "tier": "Startup Hub",
        "title": "Startup Office (Up to 1,000 sq.ft)",
        "price": 4999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/commercial-cleaning.jpg",
        "sub": "Workstations, conference room, pantry & restrooms",
        "rating": 4.55,
        "reviewCount": 26,
        "duration": "3 - 4 hours",
        "description": "Keep your startup workspace productive and fresh with thorough workstation sanitization, restroom descaling, and floor scrubbing.",
        "includes": [
          "Workstation desk surface & chair frame antimicrobial wipe",
          "Floor single-disc mechanized scrubbing",
          "Commercial washroom deep descaling and sanitization",
          "Pantry sink, microwave exterior & counter degreasing",
          "Conference room glass partition streak-free polish"
        ],
        "excludes": [
          "Internal server rack electronic dust removal",
          "Wet upholstery extraction for all office chairs (add-on)",
          "Building facade high-altitude exterior window cleaning"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 2,
          "4": 5,
          "5": 18
        },
        "reviews": [
          {
            "name": "Dhruv Sehgal",
            "date": "November 5, 2026",
            "stars": 5,
            "comment": "Did a weekend deep clean for our coworking space. Outstanding."
          }
        ]
      },
      {
        "tier": "Corporate Floor",
        "featured": true,
        "title": "Corporate Floor (Up to 2,500 sq.ft)",
        "price": 8999,
        "thumb": "<?= SITE_URL ?>/assets/images/services/commercial-cleaning.jpg",
        "sub": "Intensive mechanized scrub for busy corporate spaces",
        "rating": 4.89,
        "reviewCount": 57,
        "duration": "5 - 6 hours",
        "description": "High-traffic commercial floor restoration with carpet extraction or tile buffing, pantry degreasing, and cabin detailing.",
        "includes": [
          "Carpet deep extraction or tile mechanized rotary buffing",
          "HVAC vent exterior & air intake grill vacuuming",
          "Cafeteria deep degreasing, microwave & sink wash",
          "Executive cabins, boardrooms & glass detailing",
          "Flexible after-hours or weekend zero-downtime execution"
        ],
        "excludes": [
          "Warehouse inventory moving",
          "Electrical main distribution panel cleaning",
          "Exterior facade abseiling"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 1,
          "3": 1,
          "4": 5,
          "5": 50
        },
        "reviews": [
          {
            "name": "Chetan Parekh (Admin Head)",
            "date": "November 11, 2026",
            "stars": 5,
            "comment": "Very reliable, arrived Saturday night and finished by Sunday morning."
          }
        ]
      },
      {
        "tier": "Retail Showroom",
        "title": "Showroom & Retail Plaza",
        "price": 12999,
        "thumb": "<?= SITE_URL ?>/assets/images/pricing/commercial-cleaning.jpg",
        "sub": "High-gloss retail floor shine & facade glass clean",
        "rating": 4.95,
        "reviewCount": 43,
        "duration": "6 - 8 hours",
        "description": "High-gloss showcase polish for retail stores and showrooms with display glass detailing and antimicrobial protection.",
        "includes": [
          "Ultra high-gloss rotary floor machine polish",
          "Showcase glass, mirrors & retail display streak-free buff",
          "Storage area & back-office thorough dust removal",
          "Antimicrobial surface shield for high-touch counter zones",
          "Official GST tax invoice and corporate AMC documentation"
        ],
        "excludes": [
          "Exterior building rooftop billboard maintenance",
          "Repairing damaged retail fixture lighting"
        ],
        "disclaimer": "Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.",
        "needFromYou": "Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.",
        "breakdown": {
          "1": 0,
          "2": 0,
          "3": 0,
          "4": 3,
          "5": 40
        },
        "reviews": [
          {
            "name": "Suresh Lulla",
            "date": "November 15, 2026",
            "stars": 5,
            "comment": "Floor looks like glass. Best commercial cleaning service in city."
          }
        ]
      }
    ]
  }
};

let currentServiceKey = 'bathroom-cleaning';
let selectedPackageIndex = null;
let activeAddons = {}; // { 'addon-key': { name: '...', price: 50 } }

/**
 * Switch Service from Carousel
 */
function selectServiceCategory(serviceKey, element) {
  if (!SERVICES_DATA[serviceKey]) return;
  currentServiceKey = serviceKey;
  selectedPackageIndex = null;

  document.querySelectorAll('.a1-svc-card').forEach(c => c.classList.remove('active'));
  if (element) {
    element.classList.add('active');
  } else {
    const matching = document.querySelector(`.a1-svc-card[data-service="${serviceKey}"]`);
    if (matching) matching.classList.add('active');
  }

  renderPackages();
  updateCalculation();
}

/**
 * Render Packages Grid dynamically with Tiered Architecture
 */
function renderPackages() {
  const data = SERVICES_DATA[currentServiceKey];
  if (!data) return;

  document.getElementById('packagesHeading').textContent = data.heading;

  const grid = document.getElementById('packagesGrid');
  grid.innerHTML = '';

  data.packages.forEach((pkg, index) => {
    const isSelected = (selectedPackageIndex !== null && index === selectedPackageIndex);
    const card = document.createElement('div');
    card.className = `a1-pkg-card ${isSelected ? 'pkg-selected' : ''} ${pkg.featured ? 'pkg-featured' : ''}`;
    card.id = `pkg-card-${index}`;
    card.onclick = () => {
      openPackageFullDetails(index);
    };

    const ribbonHtml = pkg.featured ? `<div class="a1-pkg-ribbon">Most Popular</div>` : '';

    card.innerHTML = `
      <!-- Box 1: Image Banner -->
      <div class="a1-pkg-media-box">
        ${ribbonHtml}
        <img src="${pkg.thumb || data.thumb}" alt="${pkg.title}" class="a1-pkg-media-img" loading="lazy" onerror="this.onerror=null;this.src='${data.thumb}';">
      </div>

      <!-- Box 2: Title and Price in Front of Each Other -->
      <div class="a1-pkg-meta-box">
        <div class="a1-pkg-tier-label">${pkg.tier || 'Package Plan'}</div>
        <div class="a1-pkg-title-price-row">
          <h3 class="a1-pkg-title">${pkg.title}</h3>
          <div class="a1-pkg-price-col">
            <span class="a1-pkg-price">₹${pkg.price.toLocaleString('en-IN')}</span>
            <span class="a1-pkg-price-sub">Starting from</span>
          </div>
        </div>
      </div>

      <!-- Box 3: Dual Action Buttons (1 View & 1 Add) -->
      <div class="a1-pkg-details-box" style="padding-top: 0.25rem;">
        <div class="a1-pkg-actions-group">
          <button type="button" class="a1-pkg-btn-view" id="pkg-view-btn-${index}" onclick="event.stopPropagation(); openPackageFullDetails(${index});" aria-label="View plan details">
            <span class="material-symbols-outlined" style="font-size: 16px;">visibility</span>
            <span>View</span>
          </button>
          <button type="button" class="a1-pkg-btn-add ${isSelected ? 'is-added' : ''}" id="pkg-add-btn-${index}" onclick="event.stopPropagation(); openQuickAddDrawer(${index});" aria-label="Add plan to cart">
            ${isSelected ? '<span class="material-symbols-outlined" style="font-size: 16px;">check</span><span>Added</span>' : '<span class="material-symbols-outlined" style="font-size: 16px;">add</span><span>Add</span>'}
          </button>
        </div>
      </div>
    `;

    grid.appendChild(card);
  });
}

let currentQuickDrawerPackageIndex = null;

/**
 * Open Blinkit-Style Quick Customization & Add-ons Drawer (Requested by User)
 */
function openQuickAddDrawer(index) {
  currentQuickDrawerPackageIndex = index;
  selectedPackageIndex = index;

  const data = SERVICES_DATA[currentServiceKey];
  if (!data || !data.packages || !data.packages[index]) return;
  const pkg = data.packages[index];
  const basePrice = pkg.price || 0;

  // Sync main cards on page
  const cards = document.querySelectorAll('.a1-pkg-card');
  cards.forEach((c, idx) => {
    const addBtn = c.querySelector('.a1-pkg-btn-add');
    if (idx === index) {
      c.classList.add('pkg-selected');
      if (addBtn) {
        addBtn.classList.add('is-added');
        addBtn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">check</span><span>Added</span>';
      }
    } else {
      c.classList.remove('pkg-selected');
      if (addBtn) {
        addBtn.classList.remove('is-added');
        addBtn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">add</span><span>Add</span>';
      }
    }
  });

  try {
    updateCalculation();
  } catch (err) {
    console.error('Calculation update error:', err);
  }

  // Get service-specific add-ons
  const baCfg = (typeof getServiceBaConfig === 'function') ? getServiceBaConfig(currentServiceKey) : null;
  const serviceAddons = (baCfg && baCfg.addons && baCfg.addons.length > 0) ? baCfg.addons : [
    { key: 'service-addon-1', name: 'High-Touch Sanitization', price: 199, icon: 'cleaning_services' },
    { key: 'service-addon-2', name: 'Surface Deep Polish', price: 149, icon: 'verified' }
  ];

  renderQuickAddDrawerContent(pkg, basePrice, serviceAddons);

  const backdrop = document.getElementById('a1QuickAddDrawerBackdrop');
  if (backdrop) {
    backdrop.style.display = 'flex';
    void backdrop.offsetWidth;
    backdrop.classList.add('open');
    document.documentElement.classList.add('a1-sheet-lock');
    document.body.classList.add('a1-sheet-lock');
    const bNav = document.querySelector('.a1-mobile-bottom-nav');
    if (bNav) bNav.style.setProperty('display', 'none', 'important');
  }
}

function renderQuickAddDrawerContent(pkg, basePrice, serviceAddons) {
  const body = document.getElementById('a1QuickAddDrawerBody');
  const footer = document.getElementById('a1QuickAddDrawerFooter');
  if (!body || !footer) return;

  const data = SERVICES_DATA[currentServiceKey];

  // Build Section 2: Add-on items
  let addonsHtml = '';
  serviceAddons.forEach(a => {
    const isAct = !!activeAddons[a.key];
    addonsHtml += `
      <div class="a1-quick-addon-card ${isAct ? 'is-selected' : ''}" id="quick-addon-${a.key}" onclick="toggleQuickAddon('${a.key}', '${a.name.replace(/'/g, "\\'")}', ${a.price}, this)">
        <div class="a1-quick-addon-top-row">
          <div class="a1-quick-addon-icon">
            <span class="material-symbols-outlined">${a.icon || 'cleaning_services'}</span>
          </div>
          <div class="a1-quick-addon-action-group">
            <span class="a1-quick-addon-price">+₹${a.price.toLocaleString('en-IN')}</span>
            <button type="button" class="a1-quick-addon-btn ${isAct ? 'is-added' : ''}" aria-label="Toggle addon">
              <span class="material-symbols-outlined">${isAct ? 'check' : 'add'}</span>
            </button>
          </div>
        </div>
        <div class="a1-quick-addon-bottom-info">
          <h4 class="a1-quick-addon-name" title="${a.name}">${a.name}</h4>
        </div>
      </div>
    `;
  });

  body.innerHTML = `
    <!-- Section 1: Top Main Price & Package Details -->
    <div class="a1-quick-sec-1">
      <div class="a1-quick-badge-row">
        <span class="a1-quick-svc-tag">${data.name}</span>
        <span class="a1-quick-tier-pill">${pkg.tier || 'Package Plan'}</span>
      </div>
      <div class="a1-quick-title-price-box">
        <div>
          <h2 class="a1-quick-title">${pkg.title}</h2>
          <p class="a1-quick-sub">${pkg.sub || 'Includes mechanized cleaning and sanitize detailing'}</p>
        </div>
        <div class="a1-quick-price-box">
          <div class="a1-quick-price-val">₹${basePrice.toLocaleString('en-IN')}</div>
          <div class="a1-quick-price-label">Base Price</div>
        </div>
      </div>
      <div class="a1-quick-trust-pills">
        <span class="a1-q-pill"><span class="material-symbols-outlined">schedule</span> ${pkg.duration || '45-60 mins'}</span>
        <span class="a1-q-pill"><span class="material-symbols-outlined">verified</span> Verified Staff</span>
        <span class="a1-q-pill"><span class="material-symbols-outlined">eco</span> Eco-Safe Formulas</span>
        <span class="a1-q-pill"><span class="material-symbols-outlined">thumb_up</span> Joint Inspection</span>
      </div>
    </div>

    <!-- Section 2: Add-ons Related to That Particular Service -->
    <div class="a1-quick-sec-2">
      <div class="a1-quick-sec-header">
        <div class="a1-quick-sec-title">
          <span class="material-symbols-outlined">add_circle</span>
          <span>Add-ons for ${data.name}</span>
        </div>
        <span class="a1-quick-sec-hint">Tap card to add / remove</span>
      </div>
      <div class="a1-quick-addons-grid">
        ${addonsHtml}
      </div>
    </div>

    <!-- Section 3: Horizontal Price Calculation Formula Track -->
    <div class="a1-quick-sec-3">
      <div class="a1-quick-formula-label">
        <span class="material-symbols-outlined">calculate</span>
        <span>Live Price Calculation (Formula)</span>
      </div>
      <div class="a1-quick-formula-track" id="quickFormulaTrack">
        <!-- Rendered by updateQuickDrawerFormula() -->
      </div>
    </div>
  `;

  updateQuickDrawerFormula();
}

function updateQuickDrawerFormula() {
  const track = document.getElementById('quickFormulaTrack');
  const footer = document.getElementById('a1QuickAddDrawerFooter');
  const data = SERVICES_DATA[currentServiceKey];
  if (!data || currentQuickDrawerPackageIndex === null) return;
  const pkg = data.packages[currentQuickDrawerPackageIndex];
  if (!pkg) return;

  const basePrice = pkg.price || 0;
  let addonsSum = 0;
  const addonKeys = Object.keys(activeAddons);

  let formulaHtml = `
    <div class="a1-formula-item item-base">
      <span class="a1-formula-name">${pkg.title}</span>
      <span class="a1-formula-val">₹${basePrice.toLocaleString('en-IN')}</span>
    </div>
  `;

  addonKeys.forEach(k => {
    const item = activeAddons[k];
    if (item && typeof item.price === 'number') {
      addonsSum += item.price;
      formulaHtml += `
        <div class="a1-formula-op">+</div>
        <div class="a1-formula-item item-addon">
          <span class="a1-formula-name">${item.name}</span>
          <span class="a1-formula-val">+₹${item.price.toLocaleString('en-IN')}</span>
        </div>
      `;
    }
  });

  const total = basePrice + addonsSum;

  formulaHtml += `
    <div class="a1-formula-op">=</div>
    <div class="a1-formula-item item-total">
      <span class="a1-formula-name">Total Estimate</span>
      <span class="a1-formula-val">₹${total.toLocaleString('en-IN')}</span>
    </div>
  `;

  if (track) track.innerHTML = formulaHtml;

  // Update Section 4 Footer (Blinkit Style)
  if (footer) {
    footer.innerHTML = `
      <div class="a1-checkout-left">
        <div class="a1-checkout-count">
          ${addonKeys.length > 0 ? `1 Service + ${addonKeys.length} Add-on${addonKeys.length > 1 ? 's' : ''}` : '1 Service Selected'}
        </div>
        <div class="a1-checkout-total-wrap">
          <span class="a1-checkout-total">₹${total.toLocaleString('en-IN')}</span>
          <span class="a1-checkout-tax-badge">Total Payable</span>
        </div>
      </div>
      <button type="button" class="a1-checkout-book-btn" onclick="proceedToBookingFromQuickDrawer()">
        <span>Book Now</span>
        <span class="material-symbols-outlined">arrow_forward</span>
      </button>
    `;
  }
}

function toggleQuickAddon(key, name, price, cardEl) {
  if (activeAddons[key]) {
    delete activeAddons[key];
  } else {
    activeAddons[key] = { name: name, price: price };
  }

  // Update this card inside drawer
  if (cardEl) {
    const isAct = !!activeAddons[key];
    cardEl.classList.toggle('is-selected', isAct);
    const btn = cardEl.querySelector('.a1-quick-addon-btn');
    if (btn) {
      btn.classList.toggle('is-added', isAct);
      btn.innerHTML = `<span class="material-symbols-outlined">${isAct ? 'check' : 'add'}</span>`;
    }
  }

  // Sync grid on main page
  document.querySelectorAll('.a1-addon-card').forEach(card => {
    const dataKey = card.getAttribute('data-addon-key') || '';
    if (dataKey === key) {
      card.classList.toggle('checked', !!activeAddons[key]);
      const indicator = card.querySelector('.a1-addon-check-indicator');
      if (indicator) {
        indicator.textContent = activeAddons[key] ? 'Active ✓' : 'Select';
      }
    }
  });

  updateCalculation();
  updateQuickDrawerFormula();
}

function closeQuickAddDrawer(event) {
  if (event && event.stopPropagation) event.stopPropagation();
  const backdrop = document.getElementById('a1QuickAddDrawerBackdrop');
  if (!backdrop) return;

  backdrop.classList.remove('open');
  document.documentElement.classList.remove('a1-sheet-lock');
  document.body.classList.remove('a1-sheet-lock');
  const bNav = document.querySelector('.a1-mobile-bottom-nav');
  if (bNav) bNav.style.removeProperty('display');

  setTimeout(() => {
    if (!backdrop.classList.contains('open')) {
      backdrop.style.display = 'none';
    }
  }, 350);
}

function proceedToBookingFromQuickDrawer() {
  const data = SERVICES_DATA[currentServiceKey];
  if (!data || currentQuickDrawerPackageIndex === null) return;
  const pkg = data.packages[currentQuickDrawerPackageIndex];
  if (!pkg) return;

  const basePrice = pkg.price || 0;
  let addonsSum = 0;
  const addonNames = [];
  Object.keys(activeAddons).forEach(k => {
    if (activeAddons[k]) {
      addonsSum += activeAddons[k].price;
      addonNames.push(`${activeAddons[k].name} (+₹${activeAddons[k].price})`);
    }
  });
  const total = basePrice + addonsSum;
  const addonsParam = addonNames.join(', ');

  const targetUrl = `<?= SITE_URL ?>/book-now/?service=${encodeURIComponent(currentServiceKey)}&package=${currentQuickDrawerPackageIndex}&packageName=${encodeURIComponent(pkg.title)}&amount=${total}&addons=${encodeURIComponent(addonsParam)}`;
  window.location.href = targetUrl;
}

/**
 * Add Package to Cart (Clicking 'Add' button)
 */
function addPackageToCart(index) {
  if (selectedPackageIndex === index) {
    selectedPackageIndex = null;
    showCartToast('Package removed from cart');
  } else {
    selectedPackageIndex = index;
    const data = SERVICES_DATA[currentServiceKey];
    const pkg = (data && data.packages) ? data.packages[index] : null;
    if (pkg) {
      showCartToast(`✓ "${pkg.title}" added to cart!`);
    }
  }
  
  const cards = document.querySelectorAll('.a1-pkg-card');
  cards.forEach((c, idx) => {
    const addBtn = c.querySelector('.a1-pkg-btn-add');
    if (selectedPackageIndex !== null && idx === selectedPackageIndex) {
      c.classList.add('pkg-selected');
      if (addBtn) {
        addBtn.classList.add('is-added');
        addBtn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">check</span><span>Added</span>';
      }
    } else {
      c.classList.remove('pkg-selected');
      if (addBtn) {
        addBtn.classList.remove('is-added');
        addBtn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">add</span><span>Add</span>';
      }
    }
  });

  try {
    updateCalculation();
  } catch (err) {
    console.error('Calculation update error caught safely:', err);
  }

  // Update Cart Badges in Header & Mobile Nav
  const addonCount = Object.keys(activeAddons).length;
  const totalCartCount = (selectedPackageIndex !== null ? 1 : 0) + addonCount;

  document.querySelectorAll('.tool-count-badge, #headerCartCount').forEach(badge => {
    badge.textContent = totalCartCount;
    badge.classList.remove('badge-bump');
    void badge.offsetWidth;
    badge.classList.add('badge-bump');
  });

  console.log(`[A1 Studio] Package selection updated. Selected: ${selectedPackageIndex}`);
}

/**
 * Toast Notification for Cart
 */
function showCartToast(message) {
  let toast = document.getElementById('a1CartToast');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'a1CartToast';
    toast.className = 'a1-cart-toast';
    document.body.appendChild(toast);
  }
  toast.innerHTML = `<span class="material-symbols-outlined toast-icon">shopping_bag</span><span>${message}</span>`;
  toast.classList.add('show');
  
  if (window._toastTimer) clearTimeout(window._toastTimer);
  window._toastTimer = setTimeout(() => {
    toast.classList.remove('show');
  }, 2400);
}

/**
 * Toggle Package Extra Features Accordion on Mobile (Retained for Compatibility)
 */
function togglePkgFeatures(index, btn) {
  const moreBox = document.getElementById(`pkg-more-${index}`);
  if (!moreBox) return;
  const isOpen = moreBox.classList.toggle('open');
  btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  const textSpan = btn.querySelector('.toggle-text');
  const iconSpan = btn.querySelector('.toggle-chevron');
  const remainingCount = moreBox.querySelectorAll('li').length;
  if (textSpan) {
    textSpan.textContent = isOpen ? 'Hide Details' : `+${remainingCount} More Details`;
  }
  if (iconSpan) {
    iconSpan.textContent = isOpen ? 'expand_less' : 'expand_more';
  }
}

/**
 * Choose Package (Alias for Compatibility)
 */
function choosePackage(index, shouldOpenSheet = false) {
  addPackageToCart(index);
  if (shouldOpenSheet) {
    openPackageBottomSheet(index);
  }
}

/**
 * Toggle Popup Features (See more / See less)
 */
let currentBottomSheetPackageIndex = 0;

/**
 * Toggle Popup Features (See more / See less)
 */
function togglePopupFeatures(index, btn) {
  const list = document.getElementById('popup-features-' + index);
  if (!list) return;
  const isOpen = list.classList.toggle('is-open');
  btn.textContent = isOpen ? 'See less' : 'See more';
}

/**
 * Select Package from inside the Popup List
 */
function selectPackageFromPopup(index) {
  addPackageToCart(index);
  
  const popupBtns = document.querySelectorAll('.a1-popup-action-btn');
  popupBtns.forEach((btn, idx) => {
    if (idx === index) {
      btn.classList.add('is-selected');
      btn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">check</span><span>Plan Selected</span>';
    } else {
      btn.classList.remove('is-selected');
      btn.textContent = 'View details';
    }
  });
}

/**
 * Select Package from inside the Full Detail View
 */
function selectPackageFromDetail(index) {
  addPackageToCart(index);
  const addCartBtn = document.getElementById('popup-btn-add-cart-' + index);
  if (addCartBtn) {
    const isNowSelected = (selectedPackageIndex === index);
    if (isNowSelected) {
      addCartBtn.classList.add('is-selected');
      addCartBtn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">shopping_cart_checkout</span><span>Added to Cart</span>';
    } else {
      addCartBtn.classList.remove('is-selected');
      addCartBtn.innerHTML = '<span class="material-symbols-outlined" style="font-size: 16px;">shopping_cart</span><span>Add to Cart</span>';
    }
  }
}

/**
 * Handle Scroll inside Detail View to Pop Up Floating Action Buttons
 */
function handlePopupDetailScroll(el) {
  if (!el) return;
  const footer = el.parentElement ? el.parentElement.querySelector('.a1-popup-detail-footer') : document.querySelector('.a1-popup-detail-footer');
  if (!footer) return;
  if (el.scrollTop > 25) {
    footer.classList.add('is-visible');
  } else {
    footer.classList.remove('is-visible');
  }
}

/**
 * Direct Instant Booking from Detail Popup (Book Now button)
 */
function proceedToBookingFromPopup(index) {
  addPackageToCart(index);
  window.location.href = `<?= SITE_URL ?>/book-now/?service=${currentServiceKey}&package=${index}`;
}

/**
 * Filter Reviews in Detail View (Positive / Negative)
 */
function filterDetailReviews(index, type) {
  const data = SERVICES_DATA[currentServiceKey];
  if (!data || !data.packages || !data.packages[index]) return;
  const pkg = data.packages[index];
  const stream = document.getElementById('detail-reviews-stream-' + index);
  if (!stream) return;

  const posBtn = document.getElementById('chip-pos-' + index);
  const negBtn = document.getElementById('chip-neg-' + index);
  if (type === 'pos') {
    if (posBtn) posBtn.classList.add('is-active');
    if (negBtn) negBtn.classList.remove('is-active');
  } else {
    if (posBtn) posBtn.classList.remove('is-active');
    if (negBtn) negBtn.classList.add('is-active');
  }

  const filtered = (type === 'pos') 
    ? pkg.reviews.filter(r => r.stars >= 4)
    : pkg.reviews.filter(r => r.stars < 4);

  const displayList = (filtered.length > 0) ? filtered : pkg.reviews;

  let html = '';
  displayList.forEach(rev => {
    let starSpans = '';
    for (let s = 1; s <= 5; s++) {
      starSpans += `<span class="material-symbols-outlined star-icon ${s <= rev.stars ? 'filled' : 'empty'}">star</span>`;
    }
    html += `
      <div class="a1-popup-review-card">
        <div class="a1-popup-review-top">
          <span class="a1-popup-reviewer-name">${rev.name}</span>
          <span class="a1-popup-review-date">${rev.date}</span>
        </div>
        <div class="a1-popup-review-stars">
          ${starSpans}
        </div>
        <p class="a1-popup-review-comment">${rev.comment}</p>
      </div>
    `;
  });
  stream.innerHTML = html;
}

/**
 * Open Full Package Detail Screen Matching User's 3 Uploaded Screenshots
 */

let currentPopupSlide = 0;

/**
 * Tap Header to Toggle between Includes and Excludes
 */
function togglePopupTab() {
  const nextSlide = (currentPopupSlide === 0) ? 1 : 0;
  goToPopupSlide(nextSlide);
}

/**
 * Switch to specific slide (0 = Includes, 1 = Excludes)
 */
function goToPopupSlide(slideIdx) {
  currentPopupSlide = slideIdx;
  const slider = document.getElementById('popupSwipeSlider');
  if (!slider) return;
  const w = slider.clientWidth;
  slider.scrollTo({ left: slideIdx * w, behavior: 'smooth' });
  
  const headerTrack = document.getElementById('popupFullHeaderTrack');
  if (headerTrack) {
    headerTrack.style.transform = (slideIdx === 1) ? 'translateX(-50%)' : 'translateX(0%)';
  }

  const fillBar = document.getElementById('popupTabFillBar');
  if (fillBar) {
    fillBar.style.transform = (slideIdx === 1) ? 'translateX(100%)' : 'translateX(0%)';
    fillBar.style.backgroundColor = (slideIdx === 1) ? '#DC2626' : '#22A06B';
  }

  const hintText = document.getElementById('popupSwipeHintText');
  if (hintText) {
    hintText.textContent = (slideIdx === 1) ? 'Swipe right to see Includes' : 'Swipe left to see Excludes';
  }
}

/**
 * Realtime scroll event handler for swipe tracking & full-width header + fill bar animation
 */
function onPopupSwipeScroll(slider) {
  if (!slider) return;
  const w = slider.clientWidth;
  if (w <= 0) return;
  const ratio = Math.max(0, Math.min(1, slider.scrollLeft / w));
  currentPopupSlide = (ratio > 0.5) ? 1 : 0;

  // Move the full-width header track smoothly as user drags
  const headerTrack = document.getElementById('popupFullHeaderTrack');
  if (headerTrack) {
    headerTrack.style.transform = `translateX(-${ratio * 50}%)`;
  }
  
  // Move the animated fill bar smoothly
  const fillBar = document.getElementById('popupTabFillBar');
  if (fillBar) {
    fillBar.style.transform = `translateX(${ratio * 100}%)`;
    fillBar.style.backgroundColor = (ratio > 0.45) ? '#DC2626' : '#22A06B';
  }

  const hintText = document.getElementById('popupSwipeHintText');
  if (hintText) {
    hintText.textContent = (ratio > 0.45) ? 'Swipe right to see Includes' : 'Swipe left to see Excludes';
  }
}

function initPopupSwipeTouch(slider) {
  if (!slider) return;
  let startX = 0;
  slider.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
  }, { passive: true });

  slider.addEventListener('touchend', (e) => {
    const endX = e.changedTouches[0].clientX;
    const diff = endX - startX;
    if (Math.abs(diff) > 40) {
      if (diff < 0) {
        goToPopupSlide(1);
      } else {
        goToPopupSlide(0);
      }
    }
  }, { passive: true });
}

function openPackageFullDetails(index) {
  currentBottomSheetPackageIndex = index;
  const backdrop = document.getElementById('a1PkgBottomSheetBackdrop');
  const sheet = document.getElementById('a1PkgBottomSheet');
  const body = document.getElementById('a1PkgBottomSheetBody');
  if (!backdrop || !sheet || !body) return;

  const data = SERVICES_DATA[currentServiceKey];
  if (!data || !data.packages || !data.packages[index]) return;
  const pkg = data.packages[index];
  const isSelected = (selectedPackageIndex !== null && index === selectedPackageIndex);

  // Build Includes Bullets
  const incList = (pkg.includes || pkg.features || []);
  let includesHtml = '';
  incList.forEach(inc => {
    includesHtml += `
      <li class="a1-popup-bullet-li">
        <span class="material-symbols-outlined icon-status" style="font-size: 15px; color: #22A06B; flex-shrink: 0; margin-top: 1px;">check_circle</span>
        <span>${inc}</span>
      </li>
    `;
  });

  // Build Excludes Bullets
  const excList = (pkg.excludes || [
    'External glass beyond safe reach is not included',
    'Grills requiring hazardous leaning out are not included',
    'Structural civil repairs or paint peeling touch-ups are not included'
  ]);
  let excludesHtml = '';
  excList.forEach(exc => {
    excludesHtml += `
      <li class="a1-popup-bullet-li">
        <span class="material-symbols-outlined icon-status" style="font-size: 15px; color: #DC2626; flex-shrink: 0; margin-top: 1px;">cancel</span>
        <span>${exc}</span>
      </li>
    `;
  });

  // Rating breakdown bars
  const totalRev = pkg.reviewCount || 24;
  const bd = pkg.breakdown || { 5: 17, 4: 3, 3: 2, 2: 1, 1: 1 };
  let breakdownHtml = '';
  [5, 4, 3, 2, 1].forEach(star => {
    const count = bd[star] || 0;
    const pct = Math.min(100, Math.round((count / totalRev) * 100));
    breakdownHtml += `
      <div class="a1-popup-bar-row">
        <span class="a1-popup-bar-label">
          <span class="material-symbols-outlined star-icon">star</span>
          <span>${star}</span>
        </span>
        <div class="a1-popup-bar-track">
          <div class="a1-popup-bar-fill" style="width: ${pct}%;"></div>
        </div>
        <span class="a1-popup-bar-count">${count}</span>
      </div>
    `;
  });

  // Initial Reviews list
  let reviewsHtml = '';
  (pkg.reviews || [
    { name: 'Rahul Chavan', date: 'October 30, 2026', stars: 5, comment: 'i am very happy with the service' },
    { name: 'Nisha Laungani', date: 'November 1, 2026', stars: 3, comment: 'All goid' }
  ]).forEach(rev => {
    let starSpans = '';
    for (let s = 1; s <= 5; s++) {
      starSpans += `<span class="material-symbols-outlined star-icon ${s <= rev.stars ? 'filled' : 'empty'}">star</span>`;
    }
    reviewsHtml += `
      <div class="a1-popup-review-card">
        <div class="a1-popup-review-top">
          <span class="a1-popup-reviewer-name">${rev.name}</span>
          <span class="a1-popup-review-date">${rev.date}</span>
        </div>
        <div class="a1-popup-review-stars">
          ${starSpans}
        </div>
        <p class="a1-popup-review-comment">${rev.comment}</p>
      </div>
    `;
  });

  // Fetch dynamic service-specific Before/After and 2x2 Addons config
  const serviceBaConfig = getServiceBaConfig(currentServiceKey);
  const baPairsList = serviceBaConfig.pairs || [];
  const baAddonsList = serviceBaConfig.addons || [];

  // Generate 2x2 Addons Grid dynamically based on active service
  let addonsGridHtml = '';
  baAddonsList.forEach(a => {
    const isAct = !!activeAddons[a.key];
    addonsGridHtml += `
      <div class="a1-popup-addon-item ${isAct ? 'is-active' : ''}" id="popup-addon-${a.key}" onclick="togglePopupAddon('${a.key}', '${a.name.replace(/'/g, "\\'")}', ${a.price}, this)">
        <div class="a1-popup-addon-top">
          <div class="a1-popup-addon-icon-box">
            <span class="material-symbols-outlined">${a.icon}</span>
          </div>
          <h4 class="a1-popup-addon-name">${a.name}</h4>
        </div>
        <div class="a1-popup-addon-price-row">
          <span class="a1-popup-addon-price">+₹${a.price}</span>
          <span class="a1-popup-addon-btn">
            <span class="material-symbols-outlined btn-icon">${isAct ? 'check' : 'add'}</span> 
            ${isAct ? 'Added' : 'Add'}
          </span>
        </div>
      </div>
    `;
  });

  // Generate Before/After category pills dynamically based on active service
  let baNavHtml = '';
  baPairsList.forEach((p, pIdx) => {
    baNavHtml += `
      <button type="button" class="a1-popup-ba-chip ${pIdx === 0 ? 'is-active' : ''}" onclick="switchBaPair(${pIdx}, this)">
        <span class="material-symbols-outlined" style="font-size: 14px;">${p.icon}</span>
        <span>${p.title}</span>
      </button>
    `;
  });

  const activeFirstPair = baPairsList[0] || {
    before: '<?= SITE_URL ?>/assets/images/pricing/before-after/tiles-before.jpg',
    after: '<?= SITE_URL ?>/assets/images/pricing/before-after/tiles-after.jpg',
    desc: 'Deep cleaning transformation'
  };

  body.innerHTML = `
    <!-- Scrollable Detailed Content (Hero Image now scrolls with content) -->
    <div class="a1-popup-detail-scrollable" onscroll="handlePopupDetailScroll(this)">
      <!-- Top Hero Media (Video Element with Poster Fallback) -->
      <div class="a1-popup-hero-media-wrap">
        <video 
          class="a1-popup-hero-video" 
          playsinline 
          webkit-playsinline 
          muted 
          loop 
          autoplay 
          controls 
          poster="${pkg.thumb || data.thumb}" 
          preload="metadata">
          <source src="${pkg.video || data.video || ''}" type="video/mp4">
          <img src="${pkg.thumb || data.thumb}" alt="${pkg.title}" class="a1-popup-hero-img">
        </video>
      </div>

      <div class="a1-popup-detail-content-wrap">
      <!-- Title & Price -->
      <div class="a1-popup-detail-header-row">
        <h2 class="a1-popup-detail-title">${pkg.title}</h2>
        <span class="a1-popup-detail-price">₹${pkg.price.toLocaleString('en-IN')}</span>
      </div>

      <!-- Rating & Duration -->
      <div class="a1-popup-detail-meta-action-row">
        <div class="a1-popup-detail-meta-group">
          <span class="a1-popup-detail-rating">
            <span class="material-symbols-outlined star-icon">star</span>
            <span>${pkg.rating || 4.42} stars</span>
          </span>
          <span class="a1-popup-detail-duration">
            <span class="material-symbols-outlined clock-icon">schedule</span>
            <span>${pkg.duration || '40 - 50 min'}</span>
          </span>
        </div>
      </div>

      <!-- Description -->
      <p class="a1-popup-detail-description">
        ${pkg.description || pkg.sub}
      </p>

      <!-- Interactive Swipeable Includes & Excludes Box with Fill Bar -->
      <div class="a1-popup-tabs-box">
        <!-- Full Width Header: 'Includes' covers the whole bar, slides to 'Excludes' on swipe -->
        <div class="a1-popup-full-header-container" onclick="togglePopupTab()" title="Tap or swipe to switch between Includes & Excludes">
          <div class="a1-popup-full-header-track" id="popupFullHeaderTrack">
            
            <!-- Panel 0: Includes (Takes 100% full width) -->
            <div class="a1-popup-full-header-panel is-includes">
              <div class="a1-popup-full-header-title">
                <span class="material-symbols-outlined icon-status" style="color: #22A06B; font-size: 20px;">check_circle</span>
                <span>Includes (${incList.length})</span>
              </div>
              <span class="a1-popup-full-header-hint">
                <span>Swipe for Excludes</span>
                <span class="material-symbols-outlined" style="font-size: 15px;">arrow_forward</span>
              </span>
            </div>

            <!-- Panel 1: Excludes (Takes 100% full width) -->
            <div class="a1-popup-full-header-panel is-excludes">
              <div class="a1-popup-full-header-title">
                <span class="material-symbols-outlined icon-status" style="color: #DC2626; font-size: 20px;">cancel</span>
                <span>Excludes (${excList.length})</span>
              </div>
              <span class="a1-popup-full-header-hint">
                <span class="material-symbols-outlined" style="font-size: 15px;">arrow_back</span>
                <span>Swipe for Includes</span>
              </span>
            </div>

          </div>
        </div>
        
        <!-- Animated Fill Bar (Fills left or right smoothly on swipe) -->
        <div class="a1-popup-tab-track">
          <div class="a1-popup-tab-fill-bar" id="popupTabFillBar"></div>
        </div>

        <!-- Swipeable Cards Track -->
        <div class="a1-popup-swipe-slider" id="popupSwipeSlider" onscroll="onPopupSwipeScroll(this)">
          <div class="a1-popup-swipe-track">
            
            <!-- Slide 0: Includes -->
            <div class="a1-popup-swipe-card is-includes">
              <ul class="a1-popup-bullet-ul">
                ${includesHtml}
              </ul>
            </div>

            <!-- Slide 1: Excludes -->
            <div class="a1-popup-swipe-card is-excludes">
              <ul class="a1-popup-bullet-ul">
                ${excludesHtml}
              </ul>
            </div>

          </div>
        </div>

        <!-- Swipe Hint Text -->
        <div class="a1-popup-swipe-hint">
          <span class="material-symbols-outlined" style="font-size: 14px;">swap_horiz</span>
          <span id="popupSwipeHintText">Swipe left to see Excludes</span>
        </div>
      </div>

      <!-- 2x2 Add-ons Grid (Contextual to Actual Service) -->
      <div class="a1-popup-addons-section">
        <div class="a1-popup-addons-header">
          <div class="a1-popup-addons-title-wrap">
            <span class="material-symbols-outlined" style="color: #22A06B; font-size: 20px;">add_circle</span>
            <h3 class="a1-popup-addons-title">Recommended Add-ons</h3>
          </div>
          <span class="a1-popup-addons-badge">2×2 Quick Add</span>
        </div>
        
        <div class="a1-popup-addons-grid">
          ${addonsGridHtml}
        </div>
      </div>

      <!-- Disclaimer -->
      <div class="a1-popup-notice-block">
        <h4 class="a1-popup-notice-title">Disclaimer:</h4>
        <p class="a1-popup-notice-text">
          ${pkg.disclaimer || 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.'}
        </p>
      </div>

      <!-- What We Will Need From You -->
      <div class="a1-popup-notice-block">
        <h4 class="a1-popup-notice-title">What We Will Need From You:</h4>
        <p class="a1-popup-notice-text">
          ${pkg.needFromYou || 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.'}
        </p>
      </div>

      <div class="a1-popup-detail-divider"></div>

      <!-- All Reviews -->
      <div class="a1-popup-reviews-block">
        <h3 class="a1-popup-reviews-main-title">All reviews</h3>
        <div class="a1-popup-reviews-header-stat">
          <span class="material-symbols-outlined star-icon">star</span>
          <span class="a1-popup-reviews-avg">${pkg.rating || 4.4} stars</span>
        </div>
        <span class="a1-popup-reviews-total-text">${pkg.reviewCount || 24} reviews</span>

        <!-- Filter Chips -->
        <div class="a1-popup-filter-chips">
          <button type="button" class="a1-popup-chip is-active" id="chip-pos-${index}" onclick="filterDetailReviews(${index}, 'pos')">Positive</button>
          <button type="button" class="a1-popup-chip" id="chip-neg-${index}" onclick="filterDetailReviews(${index}, 'neg')">Negative</button>
        </div>

        <!-- Rating Breakdown Bars -->
        <div class="a1-popup-rating-bars">
          ${breakdownHtml}
        </div>

        <!-- Review Stream -->
        <div class="a1-popup-reviews-stream" id="detail-reviews-stream-${index}">
          ${reviewsHtml}
        </div>
      </div>

      <div class="a1-popup-detail-divider"></div>

      <!-- Slideable Before & After Results (Dynamic for Actual Service with Auto-Slide Loop) -->
      <div class="a1-popup-ba-section">
        <div class="a1-popup-ba-header">
          <div class="a1-popup-ba-title-wrap">
            <span class="material-symbols-outlined" style="color: #22A06B; font-size: 22px;">compare</span>
            <div>
              <h3 class="a1-popup-ba-title">Before &amp; After Transformation</h3>
              <p class="a1-popup-ba-sub">Slide left &amp; right to inspect real on-site cleaning results</p>
            </div>
          </div>
        </div>

        <!-- Multiple Images Switcher Pills -->
        <div class="a1-popup-ba-nav" id="popupBaNav">
          ${baNavHtml}
        </div>

        <!-- Interactive Slideable Container with Auto-Slide Loop -->
        <div class="a1-popup-ba-container" id="popupBaContainer">
          <!-- After Clean Image (Full underneath) -->
          <img src="${activeFirstPair.after}" alt="After Deep Cleaning" class="a1-popup-ba-img-after" id="baImgAfter">
          <span class="a1-popup-ba-badge badge-after">AFTER</span>

          <!-- Before Clean Image (Clipped overlay) -->
          <div class="a1-popup-ba-before-wrap" id="baBeforeWrap" style="width: 50%;">
            <img src="${activeFirstPair.before}" alt="Before Cleaning" class="a1-popup-ba-img-before" id="baImgBefore">
            <span class="a1-popup-ba-badge badge-before">BEFORE</span>
          </div>

          <!-- Slideable Handle Divider -->
          <div class="a1-popup-ba-handle" id="baHandle" style="left: 50%;">
            <div class="a1-popup-ba-knob">
              <span class="material-symbols-outlined">swap_horiz</span>
            </div>
          </div>

          <!-- Full Range Slider Input (Drag left & right) -->
          <input type="range" min="0" max="100" value="50" class="a1-popup-ba-range" id="baRangeInput" oninput="updateBaSlider(this.value)" aria-label="Slide to compare before and after">
        </div>

        <div class="a1-popup-ba-caption">
          <span class="a1-popup-ba-desc" id="baPairDesc">${activeFirstPair.desc}</span>
          <span class="a1-popup-ba-drag-hint">
            <span class="material-symbols-outlined" style="font-size: 15px;">autorenew</span>
            <span>Auto-sliding &bull; Drag to pause</span>
          </span>
        </div>
      </div>
      </div>
    </div>

    <!-- Floating Footer with 2 Action Buttons: Add to Cart & Book Now -->
    <div class="a1-popup-detail-footer">
      <button type="button" class="a1-popup-detail-add-cart-btn ${isSelected ? 'is-selected' : ''}" id="popup-btn-add-cart-${index}" onclick="selectPackageFromDetail(${index})">
        <span class="material-symbols-outlined" style="font-size: 16px;">${isSelected ? 'shopping_cart_checkout' : 'shopping_cart'}</span>
        <span>${isSelected ? 'Added to Cart' : 'Add to Cart'}</span>
      </button>
      <button type="button" class="a1-popup-detail-book-now-btn" onclick="proceedToBookingFromPopup(${index})">
        <span class="material-symbols-outlined" style="font-size: 16px;">calendar_month</span>
        <span>Book Now</span>
      </button>
    </div>
  `;

  const scrollArea = body.querySelector('.a1-popup-detail-scrollable');
  const footerEl = body.querySelector('.a1-popup-detail-footer');
  const swipeSlider = body.querySelector('#popupSwipeSlider');
  if (swipeSlider) {
    initPopupSwipeTouch(swipeSlider);
  }
  
  // Initialize Slideable Before & After Comparison Widget
  initPopupBaSlider(body);

  if (scrollArea && footerEl) {
    scrollArea.addEventListener('scroll', function() {
      if (scrollArea.scrollTop > 25) {
        footerEl.classList.add('is-visible');
      } else {
        footerEl.classList.remove('is-visible');
      }
    }, { passive: true });
  }

  backdrop.style.display = 'flex';
  void backdrop.offsetWidth;
  backdrop.classList.add('open');
  document.documentElement.classList.add('a1-sheet-lock');
  document.body.classList.add('a1-sheet-lock');
  const bNav1 = document.querySelector('.a1-mobile-bottom-nav');
  
  if (bNav1) bNav1.style.setProperty('display', 'none', 'important');
}

/**
 * Master Service-Specific Before & After Data and Recommended Add-ons
 * Configured authentically for each service category (Requested by User)
 */
function getServiceBaConfig(serviceKey) {
  const root = '<?= SITE_URL ?>';
  const configs = {
    "bathroom-cleaning": {
      pairs: [
        {
          id: 'tiles',
          title: 'Floor & Wall Tiles',
          desc: 'Hard water salt crust & dark grout lines eradicated',
          icon: 'grid_view',
          before: `${root}/assets/images/pricing/before-after/tiles-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/tiles-after.jpg`
        },
        {
          id: 'taps',
          title: 'Chrome Taps & Fixtures',
          desc: 'Heavy calcium scale removed to restore mirror chrome shine',
          icon: 'faucet',
          before: `${root}/assets/images/pricing/before-after/taps-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/taps-after.jpg`
        },
        {
          id: 'glass',
          title: 'Glass Shower Partition',
          desc: 'Soap scum & mineral etching cleared for 100% optical clarity',
          icon: 'window',
          before: `${root}/assets/images/pricing/before-after/glass-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/glass-after.jpg`
        }
      ],
      addons: [
        { key: 'tap-polish', name: 'Tap Scaling & Rust Polish', price: 150, icon: 'faucet' },
        { key: 'tile-grout', name: 'Tile Grout Deep Scrubbing', price: 250, icon: 'grid_view' },
        { key: 'exhaust-fan', name: 'Exhaust Fan Degreasing', price: 199, icon: 'mode_fan' },
        { key: 'glass-glaze', name: 'Mirror & Glass Anti-Fog', price: 149, icon: 'window' }
      ]
    },
    "kitchen-cleaning": {
      pairs: [
        {
          id: 'chimney',
          title: 'Chimney & Gas Stove',
          desc: 'Burnt oil grease & sticky yellow carbon deposits dissolved',
          icon: 'cooking',
          before: `${root}/assets/images/pricing/before-after/kitchen-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/kitchen-after.jpg`
        },
        {
          id: 'backsplash',
          title: 'Tile Backsplash & Grout',
          desc: 'Oily cooking splatters and yellow film eradicated',
          icon: 'grid_view',
          before: `${root}/assets/images/pricing/before-after/kitchen-backsplash-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/kitchen-backsplash-after.jpg`
        },
        {
          id: 'sink-steel',
          title: 'Stainless Sink & Faucets',
          desc: 'Stained stainless steel polished to spotless mirror shine',
          icon: 'faucet',
          before: `${root}/assets/images/pricing/before-after/kitchen-sink-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/kitchen-sink-after.jpg`
        }
      ],
      addons: [
        { key: 'chimney-baffle', name: 'Chimney Baffle Filter Soak', price: 250, icon: 'filter_alt' },
        { key: 'microwave-deep', name: 'Microwave / Oven Interior', price: 200, icon: 'microwave' },
        { key: 'fridge-sanitize', name: 'Refrigerator Sanitization', price: 250, icon: 'kitchen' },
        { key: 'cabinet-degrease', name: 'Modular Cabinet Degrease', price: 300, icon: 'shelves' }
      ]
    },
    "sofa-cleaning": {
      pairs: [
        {
          id: 'sofa-fabric',
          title: 'Fabric Sectional Sofa',
          desc: 'Stubborn tea, coffee spills and dark sweat rings extracted',
          icon: 'chair',
          before: `${root}/assets/images/pricing/before-after/sofa-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/sofa-after.jpg`
        },
        {
          id: 'sofa-cushions',
          title: 'Throw Cushions & Bolsters',
          desc: 'Deep foam sanitization & dust mite eradication',
          icon: 'airline_seat_recline_extra',
          before: `${root}/assets/images/pricing/before-after/sofa-cushion-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/sofa-cushion-after.jpg`
        },
        {
          id: 'sofa-armchair',
          title: 'Accent Armchair Upholstery',
          desc: 'Restored original upholstery brightness and velvety softness',
          icon: 'chair',
          before: `${root}/assets/images/pricing/before-after/sofa-chair-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/sofa-chair-after.jpg`
        }
      ],
      addons: [
        { key: 'cushion-wash', name: 'Extra Cushion Deep Wash', price: 100, icon: 'chair' },
        { key: 'sofa-perfume', name: 'Enzyme Odor Neutralizer', price: 149, icon: 'air' },
        { key: 'stain-guard', name: 'Scotchgard Stain Shield', price: 250, icon: 'shield' },
        { key: 'leather-polish', name: 'Leather Conditioner Buff', price: 299, icon: 'sparkles' }
      ]
    },
    "water-tank-cleaning": {
      pairs: [
        {
          id: 'tank-sludge',
          title: 'Sludge & Silt Extraction',
          desc: 'Heavy muddy silt deposits pumped out and floor scrubbed',
          icon: 'water_drop',
          before: `${root}/assets/images/pricing/before-after/tank-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/tank-after.jpg`
        },
        {
          id: 'tank-sintex',
          title: 'Overhead Sintex Tank Algae',
          desc: '120-bar high-pressure scrub eliminates all green algae slime',
          icon: 'cleaning_services',
          before: `${root}/assets/images/pricing/before-after/tank-sintex-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/tank-sintex-after.jpg`
        },
        {
          id: 'tank-sump',
          title: 'Underground Sump Chamber',
          desc: '100% bacteria-free potable drinking water storage ready',
          icon: 'sanitizer',
          before: `${root}/assets/images/pricing/before-after/tank-sump-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/tank-sump-after.jpg`
        }
      ],
      addons: [
        { key: 'uv-treatment', name: 'Anti-Bacterial UV Ray Pass', price: 250, icon: 'wb_iridescent' },
        { key: 'pipe-flushing', name: 'Delivery Pipe Line Flush', price: 200, icon: 'plumbing' },
        { key: 'overhead-mini', name: 'Additional 500L Loft Tank', price: 300, icon: 'water_drop' },
        { key: 'water-test', name: 'Post-Clean TDS/PH Audit', price: 149, icon: 'science' }
      ]
    },
    "home-cleaning": {
      pairs: [
        {
          id: 'home-marble',
          title: 'Marble Floor Buffing',
          desc: 'Scratched dull floors machine-buffed to high-gloss mirror shine',
          icon: 'diamond',
          before: `${root}/assets/images/pricing/before-after/home-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/home-after.jpg`
        },
        {
          id: 'home-windows',
          title: 'Window Tracks & Glass',
          desc: 'Clogged dirt tracks vacuumed and glass polished crystal clear',
          icon: 'window',
          before: `${root}/assets/images/pricing/before-after/home-window-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/home-window-after.jpg`
        },
        {
          id: 'home-fan',
          title: 'Ceiling Fan & Chandelier',
          desc: 'Greasy dust carpet lifted from blades and motor housings',
          icon: 'mode_fan',
          before: `${root}/assets/images/pricing/before-after/home-fan-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/home-fan-after.jpg`
        }
      ],
      addons: [
        { key: 'balcony-scrub', name: 'Balcony Pressure Scrub', price: 300, icon: 'deck' },
        { key: 'window-track', name: 'Window Tracks & Glaze', price: 150, icon: 'window' },
        { key: 'cobweb-vacuum', name: 'High-Ceiling Cobweb Vac', price: 100, icon: 'vertical_align_top' },
        { key: 'kitchen-degrease', name: 'Heavy Kitchen Degrease', price: 350, icon: 'kitchen' }
      ]
    },
    "carpet-cleaning": {
      pairs: [
        {
          id: 'carpet-stains',
          title: 'Plush Carpet Stains',
          desc: 'Ground-in mud, food spills and pet stains completely extracted',
          icon: 'layers',
          before: `${root}/assets/images/pricing/before-after/carpet-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/carpet-after.jpg`
        },
        {
          id: 'carpet-runner',
          title: 'Hallway Carpet Runner',
          desc: 'High-traffic foot lane dirt extracted and wool fibers fluffed',
          icon: 'auto_awesome',
          before: `${root}/assets/images/pricing/before-after/carpet-runner-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/carpet-runner-after.jpg`
        },
        {
          id: 'carpet-rug',
          title: 'Delicate Wool Area Rug',
          desc: 'pH-balanced gentle injection wash safe for premium rugs',
          icon: 'texture',
          before: `${root}/assets/images/pricing/before-after/carpet-rug-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/carpet-rug-after.jpg`
        }
      ],
      addons: [
        { key: 'carpet-perfume', name: 'Odor Neutralizer & Sanitizer', price: 150, icon: 'air' },
        { key: 'stain-shield', name: 'Fiber Stain Guard Spray', price: 200, icon: 'shield' },
        { key: 'fringe-bleach', name: 'White Fringe Detailing', price: 150, icon: 'brush' },
        { key: 'anti-mite', name: 'Anti-Mite Thermal Steam', price: 199, icon: 'bug_report' }
      ]
    },
    "balcony-cleaning": {
      pairs: [
        {
          id: 'balcony-tiles',
          title: 'Weather-Stained Tiles',
          desc: 'Rain mineral crust, mud and algae rotary scrubbed clean',
          icon: 'balcony',
          before: `${root}/assets/images/pricing/before-after/balcony-tiles-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/balcony-tiles-after.jpg`
        },
        {
          id: 'balcony-glass',
          title: 'Exterior Glass Railing',
          desc: 'Streaky dust and water spots cleared for transparent mountain view',
          icon: 'window',
          before: `${root}/assets/images/pricing/before-after/balcony-glass-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/balcony-glass-after.jpg`
        },
        {
          id: 'balcony-drain',
          title: 'Balcony Water Drain Gully',
          desc: 'Unclogged silt and disinfected wastewater outflow channel',
          icon: 'water_drop',
          before: `${root}/assets/images/pricing/before-after/balcony-drain-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/balcony-drain-after.jpg`
        }
      ],
      addons: [
        { key: 'railing-polish', name: 'Steel Railing Chrome Polish', price: 150, icon: 'faucet' },
        { key: 'bird-net-wash', name: 'Bird Net & Sill Wash', price: 200, icon: 'fence' },
        { key: 'exterior-wall', name: 'Exterior Wall Spot Cleaning', price: 250, icon: 'format_paint' },
        { key: 'pot-deck-wash', name: 'Planter Area Power Scrub', price: 150, icon: 'yard' }
      ]
    },
    "curtain-cleaning": {
      pairs: [
        {
          id: 'curtain-steam',
          title: 'Fabric Thermal Steam',
          desc: '140°C pressurized dry steam lifts years of trapped road dust',
          icon: 'curtains',
          before: `${root}/assets/images/pricing/before-after/curtain-steam-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/curtain-steam-after.jpg`
        },
        {
          id: 'curtain-sheer',
          title: 'Sheer Net Curtains',
          desc: 'Dingy pollution film removed and bright white freshness restored',
          icon: 'air',
          before: `${root}/assets/images/pricing/before-after/curtain-sheer-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/curtain-sheer-after.jpg`
        },
        {
          id: 'curtain-track',
          title: 'Curtain Rods & Pelmet',
          desc: 'Microfiber vacuum wipe of top hidden brackets and tracks',
          icon: 'view_agenda',
          before: `${root}/assets/images/pricing/before-after/curtain-track-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/curtain-track-after.jpg`
        }
      ],
      addons: [
        { key: 'sheer-curtain', name: 'Extra Sheer Net Curtain', price: 150, icon: 'curtains' },
        { key: 'pelmet-deep', name: 'Wooden Pelmet Box Vacuum', price: 150, icon: 'shelves' },
        { key: 'anti-allergen', name: 'Anti-Allergen Fabric Spray', price: 199, icon: 'medical_services' },
        { key: 'track-grease', name: 'Roller Track Silicone Lubricate', price: 100, icon: 'build' }
      ]
    },
    "move-in-move-out": {
      pairs: [
        {
          id: 'move-wardrobe',
          title: 'Cupboards & Wardrobes',
          desc: 'Inside and outside wet wipe, fungus removal, pest spray ready',
          icon: 'shelves',
          before: `${root}/assets/images/pricing/before-after/move-wardrobe-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/move-wardrobe-after.jpg`
        },
        {
          id: 'move-kitchen',
          title: 'Modular Kitchen Cabinets',
          desc: 'Complete turnover sanitization for hassle-free handover',
          icon: 'kitchen',
          before: `${root}/assets/images/pricing/before-after/move-kitchen-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/move-kitchen-after.jpg`
        },
        {
          id: 'move-doors',
          title: 'Switches, Doors & Handles',
          desc: 'Disinfected touchpoints and streak-free glass doors',
          icon: 'door_front',
          before: `${root}/assets/images/pricing/before-after/move-doors-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/move-doors-after.jpg`
        }
      ],
      addons: [
        { key: 'appliance-wipe', name: 'Major Appliances Deep Wipe', price: 250, icon: 'kitchen' },
        { key: 'key-sanitize', name: 'Total Lock & Key Sterilize', price: 99, icon: 'key' },
        { key: 'balcony-add', name: 'Additional Utility Balcony', price: 200, icon: 'deck' },
        { key: 'loft-clear', name: 'High Overhead Storage Vac', price: 150, icon: 'vertical_align_top' }
      ]
    },
    "post-construction": {
      pairs: [
        {
          id: 'postcon-paint',
          title: 'Cement & Paint Splatters',
          desc: 'Safe non-acidic manual scraping removes all contractor splatters',
          icon: 'construction',
          before: `${root}/assets/images/pricing/before-after/postcon-paint-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/postcon-paint-after.jpg`
        },
        {
          id: 'postcon-grout',
          title: 'Floor Tile Grout Haze',
          desc: 'Single-disc rotary scrubbing clears chalky white haze',
          icon: 'grid_view',
          before: `${root}/assets/images/pricing/before-after/postcon-grout-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/postcon-grout-after.jpg`
        },
        {
          id: 'postcon-window',
          title: 'Window Glass Adhesive Film',
          desc: 'Protective plastic film peeled off and glass buffed crystal clear',
          icon: 'window',
          before: `${root}/assets/images/pricing/before-after/postcon-window-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/postcon-window-after.jpg`
        }
      ],
      addons: [
        { key: 'switchboard-paint', name: 'Switchboard Paint Scraping', price: 150, icon: 'toggle_on' },
        { key: 'cabinet-sawdust', name: 'Cabinet Sawdust Deep Vac', price: 250, icon: 'shelves' },
        { key: 'door-frame-glue', name: 'Door Frame Adhesive Clean', price: 200, icon: 'door_front' },
        { key: 'debris-bagging', name: 'Post-Clean Debris Bagging', price: 250, icon: 'delete' }
      ]
    },
    "commercial-cleaning": {
      pairs: [
        {
          id: 'office-floor',
          title: 'High-Traffic Office Floor',
          desc: 'Commercial rotary buffer brings high-gloss reflection to tiles',
          icon: 'corporate_fare',
          before: `${root}/assets/images/pricing/before-after/office-floor-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/office-floor-after.jpg`
        },
        {
          id: 'office-carpet',
          title: 'Conference Room Carpet',
          desc: 'Industrial extraction pulls out coffee spots and traffic tracks',
          icon: 'layers',
          before: `${root}/assets/images/pricing/before-after/office-carpet-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/office-carpet-after.jpg`
        },
        {
          id: 'office-glass',
          title: 'Glass Partition & Doors',
          desc: 'Fingerprint and smudge-free transparent executive cabin glass',
          icon: 'window',
          before: `${root}/assets/images/pricing/before-after/office-glass-before.jpg`,
          after: `${root}/assets/images/pricing/before-after/office-glass-after.jpg`
        }
      ],
      addons: [
        { key: 'chair-shampoo', name: 'Executive Mesh Chair Wash', price: 150, icon: 'chair' },
        { key: 'server-dusting', name: 'Anti-Static Server Room Vac', price: 400, icon: 'dns' },
        { key: 'pantry-deep', name: 'Office Pantry & Fridge Scrub', price: 350, icon: 'coffee' },
        { key: 'restroom-odor', name: 'Commercial Restroom Sanitize', price: 450, icon: 'wc' }
      ]
    }
  };
  return configs[serviceKey] || configs['bathroom-cleaning'];
}

let baLoopAnimationId = null;
let baAutoPairInterval = null;
let baIsUserInteracting = false;
let baResumeTimeout = null;
let currentBaPairIndex = 0;

function updateBaSlider(val) {
  const beforeWrap = document.getElementById('baBeforeWrap');
  const handle = document.getElementById('baHandle');
  if (beforeWrap) beforeWrap.style.width = val + '%';
  if (handle) handle.style.left = val + '%';
}

function startBaAutoSlideLoop() {
  stopBaAutoSlideLoop();

  const container = document.getElementById('popupBaContainer');
  if (!container) return;

  let currentVal = 50;
  let direction = 1;
  const minVal = 18;
  const maxVal = 82;
  const speed = 0.38;

  function step() {
    if (!baIsUserInteracting) {
      currentVal += direction * speed;
      if (currentVal >= maxVal) {
        currentVal = maxVal;
        direction = -1;
      } else if (currentVal <= minVal) {
        currentVal = minVal;
        direction = 1;
      }

      updateBaSlider(currentVal);
      const range = document.getElementById('baRangeInput');
      if (range) range.value = currentVal;
    }
    baLoopAnimationId = requestAnimationFrame(step);
  }

  baLoopAnimationId = requestAnimationFrame(step);

  // Auto-switch pairs in a loop every 5.5 seconds
  baAutoPairInterval = setInterval(() => {
    if (!baIsUserInteracting) {
      const config = getServiceBaConfig(currentServiceKey);
      const totalPairs = (config && config.pairs) ? config.pairs.length : 3;
      if (totalPairs > 1) {
        currentBaPairIndex = (currentBaPairIndex + 1) % totalPairs;
        const chips = document.querySelectorAll('.a1-popup-ba-chip');
        if (chips[currentBaPairIndex]) {
          switchBaPair(currentBaPairIndex, chips[currentBaPairIndex]);
        }
      }
    }
  }, 5500);
}

function stopBaAutoSlideLoop() {
  if (baLoopAnimationId) {
    cancelAnimationFrame(baLoopAnimationId);
    baLoopAnimationId = null;
  }
  if (baAutoPairInterval) {
    clearInterval(baAutoPairInterval);
    baAutoPairInterval = null;
  }
  if (baResumeTimeout) {
    clearTimeout(baResumeTimeout);
    baResumeTimeout = null;
  }
}

function pauseBaAutoLoopTemporarily() {
  baIsUserInteracting = true;
  if (baResumeTimeout) clearTimeout(baResumeTimeout);
  baResumeTimeout = setTimeout(() => {
    baIsUserInteracting = false;
  }, 3000);
}

function switchBaPair(index, btn) {
  currentBaPairIndex = index;
  const config = getServiceBaConfig(currentServiceKey);
  const pair = config.pairs ? config.pairs[index] : null;
  if (!pair) return;

  const imgAfter = document.getElementById('baImgAfter');
  const imgBefore = document.getElementById('baImgBefore');
  const descEl = document.getElementById('baPairDesc');
  const rangeInput = document.getElementById('baRangeInput');

  if (imgAfter) imgAfter.src = pair.after;
  if (imgBefore) imgBefore.src = pair.before;
  if (descEl) descEl.textContent = pair.desc;

  if (rangeInput) rangeInput.value = 50;
  updateBaSlider(50);

  const chips = document.querySelectorAll('.a1-popup-ba-chip');
  chips.forEach(c => c.classList.remove('is-active'));
  if (btn) btn.classList.add('is-active');
}

function initPopupBaSlider(container) {
  currentBaPairIndex = 0;
  const baContainer = container ? container.querySelector('#popupBaContainer') : document.getElementById('popupBaContainer');
  if (!baContainer) return;

  function syncWidth() {
    const w = baContainer.clientWidth;
    if (w > 0) {
      baContainer.style.setProperty('--ba-container-w', w + 'px');
    }
  }

  syncWidth();
  setTimeout(syncWidth, 100);
  setTimeout(syncWidth, 300);

  const rangeInput = baContainer.querySelector('#baRangeInput');
  if (rangeInput) {
    rangeInput.addEventListener('input', () => {
      pauseBaAutoLoopTemporarily();
      updateBaSlider(rangeInput.value);
    });
  }

  let isDragging = false;
  function handleMove(clientX) {
    pauseBaAutoLoopTemporarily();
    const rect = baContainer.getBoundingClientRect();
    if (rect.width <= 0) return;
    let x = clientX - rect.left;
    let pct = (x / rect.width) * 100;
    pct = Math.max(0, Math.min(100, pct));
    if (rangeInput) rangeInput.value = pct;
    updateBaSlider(pct);
  }

  baContainer.addEventListener('pointerdown', (e) => {
    isDragging = true;
    handleMove(e.clientX);
  });
  window.addEventListener('pointermove', (e) => {
    if (isDragging) handleMove(e.clientX);
  });
  window.addEventListener('pointerup', () => {
    isDragging = false;
  });
  window.addEventListener('resize', syncWidth);

  // Start auto-slide loop
  startBaAutoSlideLoop();
}

/**
 * Toggle Add-on from 2x2 Grid inside the Detail Popup
 */
function togglePopupAddon(key, name, price, el) {
  if (activeAddons[key]) {
    delete activeAddons[key];
    if (el) {
      el.classList.remove('is-active');
      const btn = el.querySelector('.a1-popup-addon-btn');
      if (btn) btn.innerHTML = '<span class="material-symbols-outlined btn-icon">add</span> Add';
    }
  } else {
    activeAddons[key] = { name: name, price: price };
    if (el) {
      el.classList.add('is-active');
      const btn = el.querySelector('.a1-popup-addon-btn');
      if (btn) btn.innerHTML = '<span class="material-symbols-outlined btn-icon">check</span> Added';
    }
  }

  // Synchronize main page cards if present
  document.querySelectorAll('.a1-addon-card').forEach(card => {
    const onclickAttr = card.getAttribute('onclick') || '';
    const dataKey = card.getAttribute('data-addon-key') || '';
    if (dataKey === key || onclickAttr.includes(`'${key}'`)) {
      const indicator = card.querySelector('.a1-addon-check-indicator');
      if (activeAddons[key]) {
        card.classList.add('checked');
        if (indicator) indicator.textContent = 'Active ✓';
      } else {
        card.classList.remove('checked');
        if (indicator) indicator.textContent = 'Select';
      }
    }
  });

  updateCalculation();
}

// Auto-slide loop for top services ribbon on mobile (Slide 1 <-> Slide 2)
let servicesRibbonTimer = null;
function initServicesRibbonAutoLoop() {
  if (servicesRibbonTimer) clearInterval(servicesRibbonTimer);
  const slider = document.getElementById('servicesSlider');
  if (!slider) return;

  let slide = 0;
  servicesRibbonTimer = setInterval(() => {
    if (window.innerWidth <= 768 && !slider.matches(':active')) {
      slide = (slide === 0) ? 1 : 0;
      goToServicesSlide(slide);
    }
  }, 6000);

  slider.addEventListener('touchstart', () => {
    clearInterval(servicesRibbonTimer);
  }, { passive: true });
}
document.addEventListener('DOMContentLoaded', initServicesRibbonAutoLoop);

/**
 * Open Floating Modal Card with Top Image & Package Cards (Matching User Screenshot)
 */
function openPackageBottomSheet(index) {
  currentBottomSheetPackageIndex = index;
  const backdrop = document.getElementById('a1PkgBottomSheetBackdrop');
  const sheet = document.getElementById('a1PkgBottomSheet');
  const body = document.getElementById('a1PkgBottomSheetBody');
  if (!backdrop || !sheet || !body) return;

  const data = SERVICES_DATA[currentServiceKey];
  if (!data || !data.packages) return;

  sheet.setAttribute('data-package-index', index);
  sheet.setAttribute('data-service-key', currentServiceKey);

  // Build packages list
  let packagesHtml = '';
  data.packages.forEach((pkg, idx) => {
    const isSelected = (selectedPackageIndex !== null && idx === selectedPackageIndex);
    const isTarget = (idx === index);
    const rating = pkg.rating || (idx === 0 ? '4.4' : idx === 1 ? '4.8' : '4.9');
    const duration = pkg.duration || (idx === 0 ? '40 - 50 min' : idx === 1 ? '60 - 75 min' : '90 min');
    const desc = pkg.sub || `Refresh your space with our professional mechanized ${pkg.title.toLowerCase()} service, including window and surface detailing.`;

    let featuresHtml = '';
    const feats = pkg.includes || pkg.features || [];
    if (feats.length > 0) {
      feats.forEach(f => {
        featuresHtml += `
          <li class="a1-popup-feature-bullet">
            <span class="material-symbols-outlined check-dot">check_circle</span>
            <span>${f}</span>
          </li>
        `;
      });
    }

    packagesHtml += `
      <div class="a1-popup-item ${isTarget ? 'is-focused' : ''}" id="popup-item-${idx}">
        <div class="a1-popup-item-header">
          <h3 class="a1-popup-item-title">${pkg.title}</h3>
          <span class="a1-popup-item-price">₹${pkg.price.toLocaleString('en-IN')}</span>
        </div>

        <div class="a1-popup-meta-row">
          <span class="a1-popup-rating">
            <span class="material-symbols-outlined star-icon">star</span>
            <span>${rating} stars</span>
          </span>
          <span class="a1-popup-duration">
            <span class="material-symbols-outlined clock-icon">schedule</span>
            <span>${duration}</span>
          </span>
        </div>

        <p class="a1-popup-desc">
          ${desc}
          <button type="button" class="a1-popup-see-more" onclick="togglePopupFeatures(${idx}, this)">See more</button>
        </p>

        <ul class="a1-popup-features-expand" id="popup-features-${idx}">
          ${featuresHtml}
        </ul>

        <div class="a1-popup-action-wrap">
          <button type="button" class="a1-popup-action-btn" onclick="openPackageFullDetails(${idx})">
            View details
          </button>
        </div>
      </div>
    `;
  });

  const targetPkg = data.packages[index] || data.packages[0];
  const heroImage = targetPkg.thumb || data.thumb;

  body.innerHTML = `
    <div class="a1-popup-items-container">
      <!-- Top Hero Media (Video Element with Poster Fallback) -->
      <div class="a1-popup-hero-media-wrap">
        <video 
          class="a1-popup-hero-video" 
          playsinline 
          webkit-playsinline 
          muted 
          loop 
          autoplay 
          controls 
          poster="${heroImage}" 
          preload="metadata">
          <source src="${targetPkg.video || data.video || ''}" type="video/mp4">
          <img src="${heroImage}" alt="${data.name}" class="a1-popup-hero-img">
        </video>
      </div>
      <div class="a1-popup-packages-list-wrap">
        ${packagesHtml}
      </div>
    </div>
  `;

  backdrop.style.display = 'flex';
  void backdrop.offsetWidth; // Force reflow
  backdrop.classList.add('open');
  document.documentElement.classList.add('a1-sheet-lock');
  document.body.classList.add('a1-sheet-lock');
  const bNav2 = document.querySelector('.a1-mobile-bottom-nav');
  if (bNav2) bNav2.style.setProperty('display', 'none', 'important');

  setTimeout(() => {
    const targetItem = document.getElementById('popup-item-' + index);
    if (targetItem) {
      targetItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  }, 100);
}

/**
 * Close Package Bottom Sheet Popup
 */
function closePackageBottomSheet(event) {
  if (event && event.stopPropagation) event.stopPropagation();
  stopBaAutoSlideLoop();
  const backdrop = document.getElementById('a1PkgBottomSheetBackdrop');
  if (!backdrop) return;

  backdrop.classList.remove('open');
  document.documentElement.classList.remove('a1-sheet-lock');
  document.body.classList.remove('a1-sheet-lock');
  const bNavClose = document.querySelector('.a1-mobile-bottom-nav');
  if (bNavClose) bNavClose.style.removeProperty('display');

  setTimeout(() => {
    if (!backdrop.classList.contains('open')) {
      backdrop.style.display = 'none';
    }
  }, 380);
}

// Global listener: Escape key to close bottom sheet
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closePackageBottomSheet();
  }
});

// Touch swipe-down gesture to dismiss bottom sheet smoothly
(function initBottomSheetGesture() {
  let touchStartY = 0;
  let touchCurrentY = 0;

  document.addEventListener('touchstart', function(e) {
    const header = e.target.closest('#a1PkgSheetHeader');
    if (header) {
      touchStartY = e.touches[0].clientY;
      touchCurrentY = touchStartY;
    }
  }, { passive: true });

  document.addEventListener('touchmove', function(e) {
    if (!touchStartY) return;
    touchCurrentY = e.touches[0].clientY;
    const diff = touchCurrentY - touchStartY;
    if (diff > 0) {
      const sheet = document.getElementById('a1PkgBottomSheet');
      if (sheet) sheet.style.transform = `translateY(${diff}px)`;
    }
  }, { passive: true });

  document.addEventListener('touchend', function() {
    if (!touchStartY) return;
    const diff = touchCurrentY - touchStartY;
    const sheet = document.getElementById('a1PkgBottomSheet');
    if (sheet) sheet.style.transform = '';
    if (diff > 70) {
      closePackageBottomSheet();
    }
    touchStartY = 0;
    touchCurrentY = 0;
  });
})();

/**
 * Toggle Add-on from Main Page Grid
 */
function toggleAddon(key, name, price, cardElement) {
  if (activeAddons[key]) {
    delete activeAddons[key];
  } else {
    activeAddons[key] = { name: name, price: price };
  }

  // Synchronize all grid cards for this key
  document.querySelectorAll('.a1-addon-card').forEach(card => {
    const onclickAttr = card.getAttribute('onclick') || '';
    const dataKey = card.getAttribute('data-addon-key') || '';
    if (dataKey === key || onclickAttr.includes(`'${key}'`)) {
      const indicator = card.querySelector('.a1-addon-check-indicator');
      if (activeAddons[key]) {
        card.classList.add('checked');
        if (indicator) indicator.textContent = 'Active ✓';
      } else {
        card.classList.remove('checked');
        if (indicator) indicator.textContent = 'Select';
      }
    }
  });

  // Synchronize popup item if present
  const popupItem = document.getElementById('popup-addon-' + key);
  if (popupItem) {
    const btn = popupItem.querySelector('.a1-popup-addon-btn');
    if (activeAddons[key]) {
      popupItem.classList.add('is-active');
      if (btn) btn.innerHTML = '<span class="material-symbols-outlined btn-icon">check</span> Added';
    } else {
      popupItem.classList.remove('is-active');
      if (btn) btn.innerHTML = '<span class="material-symbols-outlined btn-icon">add</span> Add';
    }
  }

  updateCalculation();
}

/**
 * Remove Add-on from Selected Services Tray or Receipt Console
 */
function removeAddon(key) {
  delete activeAddons[key];
  
  // Untick the card in the grid if present
  document.querySelectorAll('.a1-addon-card').forEach(card => {
    const onclickAttr = card.getAttribute('onclick') || '';
    const dataKey = card.getAttribute('data-addon-key') || '';
    if (dataKey === key || onclickAttr.includes(`'${key}'`)) {
      card.classList.remove('checked');
      const indicator = card.querySelector('.a1-addon-check-indicator');
      if (indicator) indicator.textContent = 'Select';
    }
  });

  // Untick inside popup if open
  const popupItem = document.getElementById('popup-addon-' + key);
  if (popupItem) {
    popupItem.classList.remove('is-active');
    const btn = popupItem.querySelector('.a1-popup-addon-btn');
    if (btn) btn.innerHTML = '<span class="material-symbols-outlined btn-icon">add</span> Add';
  }

  updateCalculation();
}

/**
 * Update Configured Add-ons Tray in Selected Services Section
 */
function updateAddonsTrayUI() {
  const chipsTray = document.getElementById('addonsChipsList');
  if (!chipsTray) return;

  const addonKeys = Object.keys(activeAddons);
  if (addonKeys.length === 0) {
    chipsTray.innerHTML = `
      <div class="a1-addons-empty-card" id="addonsEmptyState">
        No add-ons selected yet. Choose add-ons from above to customize your cleaning.
      </div>
    `;
  } else {
    let chipsHtml = '';
    addonKeys.forEach(k => {
      const item = activeAddons[k];
      if (item) {
        chipsHtml += `
          <div class="a1-addon-chip-row" id="addon-chip-${k}">
            <span class="a1-addon-chip-name">${item.name}</span>
            <div class="a1-addon-chip-meta">
              <span class="a1-addon-chip-price">+₹${item.price.toLocaleString('en-IN')}</span>
              <button type="button" class="a1-addon-chip-del" onclick="removeAddon('${k}')" title="Remove ${item.name}" aria-label="Remove ${item.name}">
                <span class="material-symbols-outlined" style="font-size: 18px;">close</span>
              </button>
            </div>
          </div>
        `;
      }
    });
    chipsTray.innerHTML = chipsHtml;
  }
}

/**
 * Real-time Calculation Engine & Sticky Console Updater
 */
function updateCalculation() {
  const data = SERVICES_DATA[currentServiceKey];
  if (!data) return;

  const pkg = (selectedPackageIndex !== null && data.packages && data.packages[selectedPackageIndex]) ? data.packages[selectedPackageIndex] : null;

  // 1. Calculate Base and Add-ons
  const basePrice = pkg ? (pkg.price || 0) : 0;
  let addonsSum = 0;
  const addonKeys = Object.keys(activeAddons);

  addonKeys.forEach(k => {
    if (activeAddons[k] && typeof activeAddons[k].price === 'number') {
      addonsSum += activeAddons[k].price;
    }
  });

  const total = basePrice + addonsSum;
  const formattedTotal = '₹' + total.toLocaleString('en-IN');

  // 2. Update Selected Blueprint Card (Service Name, Package Title, Subtitle, Price)
  const summaryTitleEl = document.getElementById('summaryMainTitle');
  if (summaryTitleEl) {
    summaryTitleEl.textContent = pkg ? `${data.name}: ${pkg.title}` : `${data.name}`;
  }

  const summarySubEl = document.getElementById('summaryMainSub');
  if (summarySubEl) {
    summarySubEl.textContent = pkg ? (pkg.sub || 'Includes mechanized cleaning and sanitize detailing') : 'Please choose a package from above to configure your quote';
  }

  const summaryPriceEl = document.getElementById('summaryMainPrice');
  if (summaryPriceEl) {
    summaryPriceEl.textContent = '₹' + basePrice.toLocaleString('en-IN');
  }

  // 3. Update Configured Add-ons Tray UI in Selected Services Section
  updateAddonsTrayUI();

  // 4. Update Header & Mobile Nav Cart Badges
  const totalCartCount = (pkg ? 1 : 0) + addonKeys.length;
  document.querySelectorAll('.tool-count-badge, #headerCartCount').forEach(badge => {
    badge.textContent = totalCartCount;
  });

  // 5. Safely Update Live Summary & Receipt Console UI
  const totalDisplay = document.getElementById('calcTotalDisplay');
  if (totalDisplay) totalDisplay.textContent = formattedTotal;

  const pkgNameEl = document.getElementById('calcPackageName');
  if (pkgNameEl) {
    pkgNameEl.textContent = pkg ? `${data.name} (${pkg.title})` : `${data.name} (No package selected)`;
  }

  const pkgPriceEl = document.getElementById('calcPackagePrice');
  if (pkgPriceEl) pkgPriceEl.textContent = '₹' + basePrice.toLocaleString('en-IN');

  const tableTotalEl = document.getElementById('calcTableTotal');
  if (tableTotalEl) tableTotalEl.textContent = formattedTotal;

  // Render add-on rows in calcTableBody if present
  const tableBody = document.getElementById('calcTableBody');
  if (tableBody) {
    let rowsHtml = '';
    if (pkg) {
      rowsHtml += `
        <tr>
          <td class="line-name" id="calcPackageName">${data.name} (${pkg.title})</td>
          <td class="line-val" id="calcPackagePrice">₹${basePrice.toLocaleString('en-IN')}</td>
        </tr>
      `;
    } else {
      rowsHtml += `
        <tr>
          <td class="line-name" id="calcPackageName" style="color: #6B7280; font-style: italic;">No package selected</td>
          <td class="line-val" id="calcPackagePrice">₹0</td>
        </tr>
      `;
    }
    addonKeys.forEach(k => {
      const item = activeAddons[k];
      if (item) {
        rowsHtml += `
          <tr class="addon-row">
            <td class="line-name">${item.name}</td>
            <td class="line-val">+₹${item.price.toLocaleString('en-IN')}</td>
          </tr>
        `;
      }
    });
    tableBody.innerHTML = rowsHtml;
  }

  // 6. Fallback for console IDs if ever present
  const consoleSvc = document.getElementById('consoleServiceName');
  if (consoleSvc) consoleSvc.textContent = data.name;
  const consolePkg = document.getElementById('consolePackageTier');
  if (consolePkg) consolePkg.textContent = pkg ? pkg.title : 'None';
  const consoleBase = document.getElementById('consoleBasePrice');
  if (consoleBase) consoleBase.textContent = '₹' + basePrice.toLocaleString('en-IN');
  const consoleTotal = document.getElementById('consoleTotalPrice');
  if (consoleTotal) consoleTotal.textContent = formattedTotal;

  // Render console add-on list tags if present
  const listEl = document.getElementById('consoleAddonsList');
  if (listEl) {
    listEl.innerHTML = '';
    if (addonKeys.length === 0) {
      listEl.innerHTML = '<li class="a1-empty-addons-hint">No optional add-ons selected</li>';
    } else {
      addonKeys.forEach(k => {
        const item = activeAddons[k];
        if (item) {
          const li = document.createElement('li');
          li.className = 'a1-receipt-addon-item';
          li.innerHTML = `
            <span>${item.name} (+₹${item.price})</span>
            <span class="a1-remove-addon" onclick="removeAddon('${k}')" title="Remove">&times;</span>
          `;
          listEl.appendChild(li);
        }
      });
    }
  }

  // 7. Update WhatsApp Direct Booking Link with Configured Context
  let waMessage = `*Hello A1 Cleaning Services!*` +
    `\nI configured a doorstep cleaning package on your online studio:` +
    `\n• Service: ${data.name}`;

  if (pkg) {
    waMessage += `\n• Package: ${pkg.title} (₹${basePrice})`;
  } else {
    waMessage += `\n• Package: (None selected - please share quote)`;
  }

  if (addonKeys.length > 0) {
    waMessage += `\n• Add-ons: ` + addonKeys.map(k => `${activeAddons[k].name} (+₹${activeAddons[k].price})`).join(', ');
  }
  waMessage += `\n• Total Estimated Amount: ${formattedTotal}`;
  waMessage += `\nPlease confirm available technician inspection/cleaning slots in Kashipur/Jaspur/Ramnagar.`;

  const waBtn = document.getElementById('btnBookWhatsApp');
  if (waBtn) {
    waBtn.href = `https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=${encodeURIComponent(waMessage)}`;
  }

  // 8. Update Online Booking Link
  const onlineBtn = document.getElementById('btnBookOnline');
  if (onlineBtn) {
    if (pkg && selectedPackageIndex !== null) {
      onlineBtn.href = `<?= SITE_URL ?>/book-now/?service=${currentServiceKey}&package=${selectedPackageIndex}`;
      onlineBtn.onclick = null;
    } else {
      onlineBtn.href = 'javascript:void(0)';
      onlineBtn.onclick = function(e) {
        e.preventDefault();
        showCartToast('Please select a cleaning package first');
        scrollToSection('packagesSection');
      };
    }
  }
}

/**
 * Smooth Scroll Utility
 */
function scrollToSection(sectionId) {
  const el = document.getElementById(sectionId);
  if (el) {
    el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

/**
 * Mobile Swipeable 3x2 Services Grid Slider with Active Dot Indicators
 */
function initServicesSliderSwipe() {
  const slider = document.getElementById('servicesSlider');
  const dots = document.querySelectorAll('.a1-services-dot');
  if (!slider || dots.length === 0) return;

  slider.addEventListener('scroll', function() {
    const slideWidth = slider.clientWidth;
    if (slideWidth <= 0) return;
    const currentIdx = Math.round(slider.scrollLeft / slideWidth);
    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentIdx);
    });
  }, { passive: true });
}

function goToServicesSlide(slideIndex) {
  const slider = document.getElementById('servicesSlider');
  if (!slider) return;
  const slideWidth = slider.clientWidth;
  slider.scrollTo({ left: slideIndex * slideWidth, behavior: 'smooth' });
}

/**
 * Mobile Swipeable 3x2 Add-ons Grid Slider with Active Dot Indicators
 */
function initAddonsSliderSwipe() {
  const slider = document.getElementById('addonsSlider');
  const dots = document.querySelectorAll('.a1-addons-dot');
  if (!slider || dots.length === 0) return;

  slider.addEventListener('scroll', function() {
    const slideWidth = slider.clientWidth;
    if (slideWidth <= 0) return;
    const currentIdx = Math.round(slider.scrollLeft / slideWidth);
    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentIdx);
    });
  }, { passive: true });
}

function goToAddonsSlide(slideIndex) {
  const slider = document.getElementById('addonsSlider');
  if (!slider) return;
  const slideWidth = slider.clientWidth;
  slider.scrollTo({ left: slideIndex * slideWidth, behavior: 'smooth' });
}

// Initialise Engine
document.addEventListener('DOMContentLoaded', function() {
  renderPackages();
  updateCalculation();
  initServicesSliderSwipe();
  initAddonsSliderSwipe();
});
</script>

<?php require __DIR__ . '/../components/footer.php'; ?>
