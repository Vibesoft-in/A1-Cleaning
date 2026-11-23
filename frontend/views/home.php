<?php
/**
 * Homepage View - Exact 1:1 Ditto OwnWash UI Architecture for A1 Cleaning
 * Color Palette:
 * - Deep Green:  #0B2922
 * - Fresh Green: #22A06B
 * - Soft Mint:   #EAF3EE
 * - White:       #FFFFFF
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "A1 Cleaning – Doorstep Cleaning & Detailing Services in Uttarakhand";
$pageDescription = "India's trusted doorstep cleaning service in Kashipur, Jaspur & Ramnagar. Professional home, sofa, water tank & office deep cleaning. Call " . BUSINESS_PHONE . " for instant quote.";
$canonicalUrl = SeoHelper::getCanonicalUrl('');
$pageSchemaJson = SeoHelper::getHomeSchema($servicesList, $citiesList);
$currentRoute = 'home';

require __DIR__ . '/../components/header.php';
?>

<!-- =========================================================================
     1. HERO SECTION: MASSIVE ROUNDED GREEN BANNER CARD (OWNWASH DITTO STYLE)
     ========================================================================= -->
<section class="ownwash-hero-wrapper">
  <div class="container">
    
    <div class="ownwash-hero-banner">
      <div class="hero-banner-grid">
        
        <!-- Left Content -->
        <div class="banner-left-content">
          
          <!-- Limited Time Offer Pill -->
          <div class="offer-pill-badge">
            <span class="pill-icon"><span class="material-symbols-outlined icon-sm">water_drop</span></span>
            <span class="pill-text">Offer Limited Time</span>
          </div>

          <!-- Main Headline -->
          <h1 class="banner-main-title">
            Doorstep Car &amp; Home Wash at Just<br>
            <span class="banner-price-tag">₹699</span>
          </h1>

          <!-- Subtitle -->
          <p class="banner-subtitle">
            Professional Cleaning at Your Doorstep
          </p>

          <!-- Action Row -->
          <div class="banner-cta-row">
            <a href="<?= SITE_URL ?>/book-now/" class="btn banner-book-btn">
              Book Now <span class="material-symbols-outlined icon-sm">arrow_forward</span>
            </a>

            <!-- Strikethrough Deal Text -->
            <div class="banner-deal-text">
              <span class="deal-strike">999</span>
              <span class="deal-note">Dont miss this limited time offer.</span>
            </div>
          </div>

        </div>

        <!-- Right Content: Specialist with Foam Washer -->
        <div class="banner-right-visual">
          <img 
            src="<?= SITE_URL ?>/assets/images/theme/hero-cleaner.jpg" 
            alt="Doorstep Cleaning Specialist" 
            width="640" 
            height="460"
            class="banner-cleaner-img"
            fetchpriority="high"
          >
        </div>

      </div>
    </div>

    <!-- =====================================================================
         2. TRUST METRICS BAR (3 WHITE ROUNDED SEGMENT CARDS BELOW BANNER)
         2000+ Rating | 5000+ Happy Customers | 50+ Cities Available
         ===================================================================== -->
    <div class="ownwash-trust-bar-row">
      
      <!-- Metric 1: Rating -->
      <div class="trust-stat-card">
        <div class="stat-text-side">
          <div class="stat-big-number">2000+</div>
          <div class="stat-label">All Over Rating</div>
        </div>
        <div class="stat-graphic-side">
          <div class="stat-stars-blue">
            <span class="material-symbols-outlined star-icon-blue">star</span><span class="material-symbols-outlined star-icon-blue">star</span><span class="material-symbols-outlined star-icon-blue">star</span><span class="material-symbols-outlined star-icon-blue">star</span><span class="material-symbols-outlined star-icon-blue">star</span>
          </div>
        </div>
      </div>

      <!-- Metric 2: Happy Customers with Overlapping Avatars -->
      <div class="trust-stat-card">
        <div class="stat-text-side">
          <div class="stat-big-number">5000+</div>
          <div class="stat-label">Happy Customers</div>
        </div>
        <div class="stat-graphic-side">
          <div class="overlapping-avatars">
            <span class="avatar-circle av-1"><span class="material-symbols-outlined icon-sm">person</span></span>
            <span class="avatar-circle av-2"><span class="material-symbols-outlined icon-sm">person</span></span>
            <span class="avatar-circle av-3"><span class="material-symbols-outlined icon-sm">person</span></span>
          </div>
        </div>
      </div>

      <!-- Metric 3: Cities Available with Map Pin Illustration -->
      <div class="trust-stat-card">
        <div class="stat-text-side">
          <div class="stat-big-number">50+</div>
          <div class="stat-label">Localities &amp; Hubs</div>
        </div>
        <div class="stat-graphic-side">
          <div class="map-pins-graphic">
            <span class="pin-icon-single pin-teal"><span class="material-symbols-outlined icon-md">location_on</span></span>
            <span class="pin-icon-single pin-blue"><span class="material-symbols-outlined icon-md">location_on</span></span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- =========================================================================
     3. QUICK ON-DEMAND BOOKING CALCULATOR WIDGET (60 SECONDS)
     ========================================================================= -->
<section class="quick-booking-section">
  <div class="container">
    <div class="ownwash-booking-box">
      <div class="box-header-row">
        <div>
          <h2 class="box-title">Book Doorstep Cleaning in 60 Seconds</h2>
          <p class="box-subtitle">Select your city, choose service, and get certified specialists dispatched to your doorstep.</p>
        </div>
        <div class="box-tag-pill"><span class="material-symbols-outlined icon-sm">bolt</span> Instant Dispatch</div>
      </div>

      <form action="<?= SITE_URL ?>/book-now/" method="GET" class="validate-booking-form">
        <div class="booking-inline-grid">
          
          <!-- City -->
          <div class="booking-input-col">
            <label class="booking-label">Your Location</label>
            <select name="city" class="booking-select" required>
              <option value="kashipur" selected>Kashipur (HQ Hub)</option>
              <option value="jaspur">Jaspur (Service Area)</option>
              <option value="ramnagar">Ramnagar (Corbett Area)</option>
            </select>
          </div>

          <!-- Service -->
          <div class="booking-input-col">
            <label class="booking-label">Select Doorstep Service</label>
            <select name="service" class="booking-select" required>
              <?php foreach ($servicesList as $sSlug => $sData): ?>
                <option value="<?= $sSlug ?>">
                  <?= htmlspecialchars($sData['name']) ?> (<?= $sData['starting_price'] ?>)
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- Mobile Phone -->
          <div class="booking-input-col">
            <label class="booking-label">Mobile Number</label>
            <div class="phone-prefix-wrap">
              <span class="prefix-box">+91</span>
              <input type="tel" name="phone" class="booking-input" placeholder="10-digit mobile" maxlength="10" required>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="booking-input-col booking-btn-col">
            <button type="submit" class="btn btn-action booking-submit-cta">
              Book Doorstep Wash <span class="material-symbols-outlined icon-sm">arrow_forward</span>
            </button>
          </div>

        </div>

        <div class="booking-footer-guarantee">
          <span><span class="material-symbols-outlined icon-sm">check_circle</span> Zero Advance Payment</span>
          <span><span class="material-symbols-outlined icon-sm">check_circle</span> Pay Only After 100% Inspection</span>
          <span><span class="material-symbols-outlined icon-sm">check_circle</span> 100% Eco-Safe Chemicals</span>
          <span><span class="material-symbols-outlined icon-sm">check_circle</span> Same-Day Dispatch Available</span>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- =========================================================================
     3.5. CLEANCOINS™ ROAD TO 1 FREE SERVICE (LOYALTY TRACK BAR)
     ========================================================================= -->
<?php require __DIR__ . '/../components/loyalty-trackbar.php'; ?>

<!-- =========================================================================
     4. SERVICE CATALOG WITH CATEGORY FILTER TABS (OWNWASH DITTO STYLE)
     ========================================================================= -->
<section class="services-section" id="services">
  <div class="container">
    
    <!-- Section Title -->
    <div class="section-head-center">
      <span class="section-tagline">Specialized Cleaning Portfolio</span>
      <h2 class="section-title">Doorstep Cleaning Packages</h2>
      <p class="section-subtitle">
        Mechanized, certified, and safe cleaning solutions tailored for residential, commercial, and upholstery care.
      </p>
    </div>

    <!-- Category Filter Tabs -->
    <div class="service-tabs-nav" id="service-category-tabs">
      <button type="button" class="tab-filter-btn active" data-filter="all">All Services (9)</button>
      <button type="button" class="tab-filter-btn" data-filter="residential">Residential &amp; Deep Clean</button>
      <button type="button" class="tab-filter-btn" data-filter="upholstery">Sofa, Carpet &amp; Fabric</button>
      <button type="button" class="tab-filter-btn" data-filter="tank">Water Tank &amp; Bath</button>
      <button type="button" class="tab-filter-btn" data-filter="commercial">Commercial &amp; Office</button>
    </div>

    <!-- 3x3 Card Grid -->
    <div class="theme-services-grid" id="services-grid-container">
      
      <!-- 1. Home Cleaning -->
      <article class="ownwash-service-card" data-category="residential">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/home-cleaning.jpg" alt="Home & Residential Cleaning" loading="lazy">
          <div class="card-price-badge">From <?= $servicesList['home-cleaning']['starting_price'] ?></div>
          <span class="card-popular-tag">Best Seller</span>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.9 (420+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('home', 22, '#0B2922') ?></div>
            <h3 class="card-title">Home Deep Cleaning</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['home-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Single-disc machine floor scrubbing</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Ceiling, fans, lights &amp; cobweb removal</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Balcony, door &amp; window track detailing</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=home-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/home-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 2. Kitchen Deep Cleaning -->
      <article class="ownwash-service-card" data-category="residential">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/kitchen-cleaning.jpg" alt="Kitchen Deep Cleaning" loading="lazy">
          <div class="card-price-badge">From <?= $servicesList['kitchen-cleaning']['starting_price'] ?></div>
          <span class="card-popular-tag">Heavy Duty</span>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.9 (310+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('kitchen', 22, '#0B2922') ?></div>
            <h3 class="card-title">Kitchen Deep Cleaning</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['kitchen-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Heavy grease chimney &amp; hood degreasing</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Gas stove, burner &amp; countertop scrubbing</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Tile grout descaling &amp; cabinet wash</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=kitchen-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/kitchen-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 3. Bathroom Cleaning -->
      <article class="ownwash-service-card" data-category="tank">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/bathroom-cleaning.jpg" alt="Bathroom & Toilet Cleaning" loading="lazy">
          <div class="card-price-badge">From <?= $servicesList['bathroom-cleaning']['starting_price'] ?></div>
          <span class="card-popular-tag">Anti-Scale</span>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.8 (290+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('bathroom', 22, '#0B2922') ?></div>
            <h3 class="card-title">Bathroom &amp; Toilet Descaling</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['bathroom-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Hard-water stain &amp; yellow scale removal</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Ceramic tile scrubbing &amp; grout restoration</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Chrome tap buffing &amp; toilet disinfection</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=bathroom-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/bathroom-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 4. Sofa Cleaning -->
      <article class="ownwash-service-card" data-category="upholstery">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/sofa-cleaning.jpg" alt="Sofa & Upholstery Cleaning" loading="lazy">
          <div class="card-price-badge"><?= $servicesList['sofa-cleaning']['starting_price'] ?></div>
          <span class="card-popular-tag">Most Popular</span>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.9 (680+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('sofa', 22, '#0B2922') ?></div>
            <h3 class="card-title">Sofa &amp; Fabric Shampooing</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['sofa-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> High-power vacuum extraction</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Active foam scrubbing &amp; stain lifter</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> 90% moisture extraction for rapid drying</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=sofa-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/sofa-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 5. Carpet Cleaning -->
      <article class="ownwash-service-card" data-category="upholstery">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/carpet-cleaning.jpg" alt="Carpet & Rug Cleaning" loading="lazy">
          <div class="card-price-badge"><?= $servicesList['carpet-cleaning']['starting_price'] ?></div>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.8 (210+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('carpet', 22, '#0B2922') ?></div>
            <h3 class="card-title">Carpet &amp; Rug Washing</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['carpet-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Deep fiber dust &amp; mite extraction</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Color-safe foam cleaning &amp; odor cure</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Sanitization with pet-friendly solutions</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=carpet-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/carpet-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 6. Water Tank Cleaning -->
      <article class="ownwash-service-card" data-category="tank">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/water-tank-cleaning.jpg" alt="Water Tank Cleaning" loading="lazy">
          <div class="card-price-badge">From <?= $servicesList['water-tank-cleaning']['starting_price'] ?></div>
          <span class="card-popular-tag">6-Stage UV</span>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.9 (350+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('water-tank', 22, '#0B2922') ?></div>
            <h3 class="card-title">6-Stage Water Tank Clean</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['water-tank-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Sludge dewatering &amp; rotary scrubbing</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> High-pressure jet wash &amp; vacuuming</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Antibacterial UV radiation treatment</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=water-tank-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/water-tank-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 7. Curtain & Window Cleaning -->
      <article class="ownwash-service-card" data-category="residential">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/curtain-window-cleaning.jpg" alt="Curtain & Window Cleaning" loading="lazy">
          <div class="card-price-badge">From <?= $servicesList['curtain-window-cleaning']['starting_price'] ?></div>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.8 (180+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('curtain', 22, '#0B2922') ?></div>
            <h3 class="card-title">Window &amp; Blind Detailing</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['curtain-window-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> On-site hanging curtain steam vacuuming</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Streak-free glass wiper detailing</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Aluminum &amp; UPVC track grime removal</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=curtain-window-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/curtain-window-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 8. Move-In / Move-Out Cleaning -->
      <article class="ownwash-service-card" data-category="residential">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/move-in-move-out-cleaning.jpg" alt="Move-In / Move-Out Cleaning" loading="lazy">
          <div class="card-price-badge">From <?= $servicesList['move-in-move-out-cleaning']['starting_price'] ?></div>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.9 (140+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('move-in', 22, '#0B2922') ?></div>
            <h3 class="card-title">Move-In / Move-Out Clean</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['move-in-move-out-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Complete unoccupied home deep wash</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Wardrobes, shelves &amp; switchboard care</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Disinfection for clean handover</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=move-in-move-out-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/move-in-move-out-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

      <!-- 9. Commercial & Office Cleaning -->
      <article class="ownwash-service-card" data-category="commercial">
        <div class="card-top-media">
          <img src="<?= SITE_URL ?>/assets/images/services/commercial-cleaning.jpg" alt="Commercial & Office Cleaning" loading="lazy">
          <div class="card-price-badge"><?= $servicesList['commercial-cleaning']['starting_price'] ?></div>
          <span class="card-popular-tag">Corporate</span>
        </div>
        <div class="card-content">
          <div class="card-rating-row">
            <span class="rating-stars"><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span></span>
            <span class="rating-num">4.9 (260+ Reviews)</span>
          </div>
          <div class="card-header-row">
            <div class="card-icon-box"><?= getThemeIcon('commercial', 22, '#0B2922') ?></div>
            <h3 class="card-title">Commercial &amp; Office Clean</h3>
          </div>
          <p class="card-desc"><?= htmlspecialchars($servicesList['commercial-cleaning']['short_desc']) ?></p>
          <ul class="card-checklist">
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Workstation, server room &amp; desk detailing</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> Floor buffing with industrial machines</li>
            <li><span class="material-symbols-outlined checklist-icon">check_circle</span> After-hours or weekend dispatch options</li>
          </ul>
          <div class="card-action-bar">
            <a href="<?= SITE_URL ?>/book-now/?service=commercial-cleaning" class="btn btn-action btn-card-book">Book Now</a>
            <a href="<?= SITE_URL ?>/services/commercial-cleaning/" class="btn btn-outline btn-card-detail">Details <span class="material-symbols-outlined icon-sm">arrow_forward</span></a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- =========================================================================
     4.5. EXCLUSIVE COUPONS & PROMO CODES (HOMEPAGE VOUCHER WALLET)
     ========================================================================= -->
<section class="home-coupons-section" id="coupons">
  <div class="container">
    <div class="section-head-center">
      <span class="section-tagline">Save More on Every Wash</span>
      <h2 class="section-title">Verified Coupons &amp; Doorstep Deals</h2>
      <p class="section-subtitle">
        Click any coupon to copy the promo code instantly or claim directly on WhatsApp with 1 click.
      </p>
    </div>

    <div class="home-coupons-grid">
      <!-- Coupon 1: BUY2GET1 -->
      <div class="home-coupon-card coupon-featured">
        <div class="coupon-top-bar">
          <span class="c-badge badge-hot"><span class="material-symbols-outlined icon-xs">local_fire_department</span> MOST POPULAR</span>
          <span class="c-tagline">3 Doorstep Deals</span>
        </div>
        <div class="coupon-main">
          <div class="coupon-icon-circle">
            <span class="material-symbols-outlined icon-md">card_giftcard</span>
          </div>
          <div>
            <h3 class="coupon-title">Book 2 Services, Get 1 FREE!</h3>
            <p class="coupon-desc">Book any 2 services (e.g. Sofa + Kitchen) and get a Bathroom Deep Cleaning 100% FREE.</p>
          </div>
        </div>
        <div class="coupon-footer-bar">
          <div class="coupon-code-pill" onclick="copyCouponCode('BUY2GET1', this)" title="Click to copy code">
            <code>BUY2GET1</code>
            <span class="copy-hint"><span class="material-symbols-outlined icon-sm">content_copy</span> Copy</span>
          </div>
          <a href="<?= SITE_URL ?>/book-now/?coupon=BUY2GET1" class="btn btn-action btn-sm">
            Apply Deal <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Coupon 2: HOME25 -->
      <div class="home-coupon-card">
        <div class="coupon-top-bar">
          <span class="c-badge badge-dark"><span class="material-symbols-outlined icon-xs">bolt</span> FLAT 25% OFF</span>
          <span class="c-tagline">Full Home Clean</span>
        </div>
        <div class="coupon-main">
          <div class="coupon-icon-circle">
            <span class="material-symbols-outlined icon-md">home</span>
          </div>
          <div>
            <h3 class="coupon-title">Full Home Deep Cleaning</h3>
            <p class="coupon-desc">Mechanized single-disc floor scrubbing, cobweb &amp; balcony detailing with flat 25% off.</p>
          </div>
        </div>
        <div class="coupon-footer-bar">
          <div class="coupon-code-pill" onclick="copyCouponCode('HOME25', this)" title="Click to copy code">
            <code>HOME25</code>
            <span class="copy-hint"><span class="material-symbols-outlined icon-sm">content_copy</span> Copy</span>
          </div>
          <a href="<?= SITE_URL ?>/book-now/?service=home-cleaning&coupon=HOME25" class="btn btn-action btn-sm">
            Apply Deal <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Coupon 3: FREETANK -->
      <div class="home-coupon-card">
        <div class="coupon-top-bar">
          <span class="c-badge badge-mint"><span class="material-symbols-outlined icon-xs">water_drop</span> FREE UPGRADE</span>
          <span class="c-tagline">Water Tank</span>
        </div>
        <div class="coupon-main">
          <div class="coupon-icon-circle">
            <span class="material-symbols-outlined icon-md">auto_awesome</span>
          </div>
          <div>
            <h3 class="coupon-title">Free 6-Stage UV Tank Disinfection</h3>
            <p class="coupon-desc">Complete antibacterial UV radiation disinfection free with any villa or bungalow deep cleaning.</p>
          </div>
        </div>
        <div class="coupon-footer-bar">
          <div class="coupon-code-pill" onclick="copyCouponCode('FREETANK', this)" title="Click to copy code">
            <code>FREETANK</code>
            <span class="copy-hint"><span class="material-symbols-outlined icon-sm">content_copy</span> Copy</span>
          </div>
          <a href="<?= SITE_URL ?>/book-now/?service=water-tank-cleaning&coupon=FREETANK" class="btn btn-action btn-sm">
            Apply Deal <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Coupon 4: CLEAN50 -->
      <div class="home-coupon-card">
        <div class="coupon-top-bar">
          <span class="c-badge badge-mint"><span class="material-symbols-outlined icon-xs">savings</span> INSTANT ₹50</span>
          <span class="c-tagline">Any Service</span>
        </div>
        <div class="coupon-main">
          <div class="coupon-icon-circle">
            <span class="material-symbols-outlined icon-md">payments</span>
          </div>
          <div>
            <h3 class="coupon-title">Flat ₹50 Instant Welcome Off</h3>
            <p class="coupon-desc">Enjoy an instant flat ₹50 discount on any first-time doorstep cleaning above ₹500.</p>
          </div>
        </div>
        <div class="coupon-footer-bar">
          <div class="coupon-code-pill" onclick="copyCouponCode('CLEAN50', this)" title="Click to copy code">
            <code>CLEAN50</code>
            <span class="copy-hint"><span class="material-symbols-outlined icon-sm">content_copy</span> Copy</span>
          </div>
          <a href="<?= SITE_URL ?>/book-now/?coupon=CLEAN50" class="btn btn-action btn-sm">
            Apply Deal <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     5. "HOW IT WORKS" 4-STEP PROCESS (OWNWASH DITTO SIGNATURE)
     ========================================================================= -->
<section class="how-it-works-section" id="how-it-works">
  <div class="container">
    <div class="section-head-center">
      <span class="section-tagline">Seamless Experience</span>
      <h2 class="section-title">How Doorstep Cleaning Works</h2>
      <p class="section-subtitle">From instant online booking to a spotless home in 4 transparent steps.</p>
    </div>

    <div class="steps-grid">
      <!-- Step 1 -->
      <div class="step-card">
        <div class="step-num-badge">01</div>
        <div class="step-icon-wrap"><?= getThemeIcon('sparkles', 28, '#22A06B') ?></div>
        <h3 class="step-title">Choose &amp; Book in 60s</h3>
        <p class="step-desc">Select your service, preferred time slot, and city. No advance payment required.</p>
      </div>

      <!-- Step 2 -->
      <div class="step-card">
        <div class="step-num-badge">02</div>
        <div class="step-icon-wrap"><?= getThemeIcon('clock', 28, '#22A06B') ?></div>
        <h3 class="step-title">Doorstep Arrival</h3>
        <p class="step-desc">Certified specialists arrive on time equipped with heavy-duty machines and eco solutions.</p>
      </div>

      <!-- Step 3 -->
      <div class="step-card">
        <div class="step-num-badge">03</div>
        <div class="step-icon-wrap"><?= getThemeIcon('layers', 28, '#22A06B') ?></div>
        <h3 class="step-title">Mechanized Deep Clean</h3>
        <p class="step-desc">We scrub, extract, steam, and sanitize every corner following our rigorous checklist.</p>
      </div>

      <!-- Step 4 -->
      <div class="step-card">
        <div class="step-num-badge">04</div>
        <div class="step-icon-wrap"><?= getThemeIcon('shield-check', 28, '#22A06B') ?></div>
        <h3 class="step-title">Inspect &amp; Pay</h3>
        <p class="step-desc">Inspect your spotless space. Pay securely online or cash only after 100% satisfaction.</p>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     6. THE DOORSTEP ADVANTAGE (WHY CHOOSE A1 CLEANING)
     ========================================================================= -->
<section class="why-choose-section">
  <div class="container">
    <div class="section-head-center">
      <span class="section-tagline">Why 5,000+ Customers Trust Us</span>
      <h2 class="section-title">The Doorstep Cleaning Advantage</h2>
      <p class="section-subtitle">We combine German mechanized extraction technology with certified professional care.</p>
    </div>

    <div class="why-features-grid">
      <div class="feature-benefit-card">
        <div class="feature-icon-box"><?= getThemeIcon('shield-check', 30, '#0B2922') ?></div>
        <h3 class="feature-card-title">Verified Specialists</h3>
        <p class="feature-card-text">Every technician is background-verified, uniformed, and trained on industrial cleaning protocols.</p>
      </div>

      <div class="feature-benefit-card">
        <div class="feature-icon-box"><?= getThemeIcon('leaf', 30, '#0B2922') ?></div>
        <h3 class="feature-card-title">100% Eco-Safe &amp; Pet-Friendly</h3>
        <p class="feature-card-text">We use non-toxic, biodegradable solutions that leave zero harsh chemical fumes for your family.</p>
      </div>

      <div class="feature-benefit-card">
        <div class="feature-icon-box"><?= getThemeIcon('sparkles', 30, '#0B2922') ?></div>
        <h3 class="feature-card-title">Heavy-Duty Mechanized Gear</h3>
        <p class="feature-card-text">Single-disc floor scrubbers, 2200W vacuum extractors &amp; UV tank purifiers deliver station-grade finish.</p>
      </div>

      <div class="feature-benefit-card">
        <div class="feature-icon-box"><?= getThemeIcon('clock', 30, '#0B2922') ?></div>
        <h3 class="feature-card-title">Upfront Fair Pricing</h3>
        <p class="feature-card-text">Zero hidden charges. Transparent rate cards and pay only after you inspect and approve the job.</p>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     7. A1 CLEANING VS TRADITIONAL CLEANING (OWNWASH COMPARISON TABLE)
     ========================================================================= -->
<section class="ownwash-versus-section">
  <div class="container">
    <div class="section-head-center">
      <span class="section-tagline">The Quality Difference</span>
      <h2 class="section-title">A1 Mechanized vs. Local Maid Cleaning</h2>
      <p class="section-subtitle">Why manual broom and mop cannot match mechanized deep sanitization.</p>
    </div>

    <div class="versus-table-wrapper">
      <table class="versus-table">
        <thead>
          <tr>
            <th>Feature &amp; Metric</th>
            <th class="col-highlight">A1 Cleaning (Doorstep Mechanized)</th>
            <th>Local Maid / Regular Sweeping</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Equipment Used</strong></td>
            <td class="col-highlight">Heavy-Duty Single-Disc Scrubbers &amp; 2200W Wet/Dry Extractors</td>
            <td>Dirty cloth rags, dirty water buckets &amp; plastic broom</td>
          </tr>
          <tr>
            <td><strong>Chemical Grade</strong></td>
            <td class="col-highlight">100% Eco-Safe, Biodegradable &amp; Pet-Friendly Solutions</td>
            <td>Harsh acidic toilet cleaners that damage tile glaze</td>
          </tr>
          <tr>
            <td><strong>Germ &amp; Dust Mite Eradication</strong></td>
            <td class="col-highlight">99.9% Eradication with high-temp steam &amp; UV tank purifiers</td>
            <td>Spreads surface dust into the indoor air</td>
          </tr>
          <tr>
            <td><strong>Payment &amp; Guarantee</strong></td>
            <td class="col-highlight">Zero Advance • Pay only after 100% inspection approval</td>
            <td>Fixed monthly pay with frequent absenteeism</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- =========================================================================
     7.5. CLEANCOINS™ REWARDS CLUB & MILESTONE SYSTEM
     Rules:
     - 1000+ service par 50 coins
     - 250 coin par 1k ki free service
     - 5 service par 1 service free
     ========================================================================= -->
<section class="home-rewards-section" id="cleancoins-rewards">
  <div class="container">
    <div class="rewards-banner-card">
      
      <!-- Top Head -->
      <div class="rewards-head-row">
        <div>
          <div class="rewards-pill-tag">
            <span class="material-symbols-outlined icon-xs">military_tech</span> CleanCoins™ Loyalty Club
          </div>
          <h2 class="rewards-title">Har Service Par Coins &amp; 100% Free Cleaning!</h2>
          <p class="rewards-subtitle">
            Kashipur, Jaspur aur Ramnagar ka sabse rewarding cleaning membership program. Har cleaning par kamaayein coins aur free services!
          </p>
        </div>
        <a href="<?= SITE_URL ?>/my-account/" class="btn btn-outline rewards-account-link">
          <span class="material-symbols-outlined icon-sm">person</span> Check My Coins (50)
        </a>
      </div>

      <!-- 3 CleanCoins Core Rules Grid -->
      <div class="rewards-rules-3grid">
        
        <!-- Rule 1: 50 Coins per 1k Service -->
        <div class="rewards-rule-card">
          <div class="r-icon-box">
            <span class="material-symbols-outlined icon-lg">monetization_on</span>
          </div>
          <div class="r-num-badge">Rule 01</div>
          <h3 class="r-card-title">₹1,000+ Service = 50 Coins</h3>
          <p class="r-card-desc">
            Har ₹1,000 ya usse badi doorstep cleaning service lene par <strong>50 CleanCoins</strong> turant aapke account wallet me credit ho jaate hain.
          </p>
          <div class="r-card-metric">🪙 +50 Coins Per Booking</div>
        </div>

        <!-- Rule 2: 250 Coins = 1k Free Service -->
        <div class="rewards-rule-card rule-highlight">
          <div class="r-icon-box">
            <span class="material-symbols-outlined icon-lg">redeem</span>
          </div>
          <div class="r-num-badge">Rule 02</div>
          <h3 class="r-card-title">250 Coins = ₹1,000 Free Service!</h3>
          <p class="r-card-desc">
            Jaise hi aapke pass <strong>250 CleanCoins</strong> jama ho jaate hain, aap <strong>₹1,000 value ki koi bhi cleaning service 100% FREE</strong> redeem kar sakte hain.
          </p>
          <div class="r-card-metric">🎁 100% FREE ₹1,000 Voucher</div>
        </div>

        <!-- Rule 3: 5 Services = 1 Free Service -->
        <div class="rewards-rule-card">
          <div class="r-icon-box">
            <span class="material-symbols-outlined icon-lg">verified</span>
          </div>
          <div class="r-num-badge">Rule 03</div>
          <h3 class="r-card-title">5 Services = 1 Service FREE!</h3>
          <p class="r-card-desc">
            Koi bhi <strong>5 doorstep cleanings</strong> complete karte hi aapki 6th service company ki taraf se <strong>bilkul FREE</strong> gift ki jaati hai.
          </p>
          <div class="r-card-metric">⭐ 5 Services Milestone Pass</div>
        </div>

      </div>

      <!-- Live Gamified Track Bar Widget -->
      <div class="rewards-live-track-widget">
        <div class="widget-top-info">
          <div>
            <strong>Milestone Progress: 1 of 5 Services Completed (20%)</strong>
            <span>Sirf 4 cleanings aur baki hain aapki Free Service ke liye!</span>
          </div>
          <span class="widget-coins-tag">🪙 Current Balance: <strong>50 CleanCoins</strong></span>
        </div>

        <div class="widget-progress-line">
          <div class="widget-progress-fill" style="width: 20%;"></div>
        </div>

        <div class="widget-steps-labels">
          <span class="w-step done"><span class="material-symbols-outlined icon-xs">check</span> Service 1 (Done)</span>
          <span class="w-step">Service 2</span>
          <span class="w-step">Service 3</span>
          <span class="w-step">Service 4</span>
          <span class="w-step reward"><span class="material-symbols-outlined icon-xs">card_giftcard</span> 1 FREE Service!</span>
        </div>
      </div>

      <!-- Action Footer -->
      <div class="rewards-cta-row">
        <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action">
          Book Next Service to Earn 50 Coins <span class="material-symbols-outlined icon-sm">arrow_forward</span>
        </a>
        <a href="<?= SITE_URL ?>/my-account/" class="btn btn-outline" style="border-color: var(--color-deep-green);">
          View My Account Dashboard
        </a>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     8. REAL CUSTOMER REVIEWS (OWNWASH TESTIMONIALS STYLE)
     ========================================================================= -->
<section class="customer-reviews-section" id="reviews">
  <div class="container">
    <div class="section-head-center">
      <span class="section-tagline">Real Feedback</span>
      <h2 class="section-title">Trusted Across Uttarakhand</h2>
      <p class="section-subtitle">See what homeowners and businesses in Kashipur, Jaspur &amp; Ramnagar say about our service.</p>
    </div>

    <div class="reviews-grid">
      <!-- Review 1 -->
      <article class="review-card">
        <div class="review-stars">
          <span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span>
        </div>
        <p class="review-text">"Booked sofa and water tank cleaning in Kashipur. The team arrived on time with professional mechanized machines. The sofa looks brand new and the tank is crystal clear. Highly recommended!"</p>
        <div class="review-author-row">
          <div class="review-avatar">VK</div>
          <div>
            <h4 class="review-name">Vikas Kumar</h4>
            <span class="review-city-badge"><span class="material-symbols-outlined icon-sm">location_on</span> Kashipur, UK</span>
          </div>
        </div>
      </article>

      <!-- Review 2 -->
      <article class="review-card">
        <div class="review-stars">
          <span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span>
        </div>
        <p class="review-text">"Our Ramnagar resort needed full deep cleaning before tourist season. A1 Cleaning completed all 8 rooms, bathrooms, and dining hall in a single day. Extremely polite team and spotless work."</p>
        <div class="review-author-row">
          <div class="review-avatar">RS</div>
          <div>
            <h4 class="review-name">Rahul Sharma</h4>
            <span class="review-city-badge"><span class="material-symbols-outlined icon-sm">location_on</span> Ramnagar, Corbett</span>
          </div>
        </div>
      </article>

      <!-- Review 3 -->
      <article class="review-card">
        <div class="review-stars">
          <span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span><span class="material-symbols-outlined star-icon-filled">star</span>
        </div>
        <p class="review-text">"We had severe yellow scaling on bathroom tiles due to hard water in Jaspur. Their team removed every single stain without damaging the tile finish. Best cleaning service in the region."</p>
        <div class="review-author-row">
          <div class="review-avatar">AC</div>
          <div>
            <h4 class="review-name">Ankit Chauhan</h4>
            <span class="review-city-badge"><span class="material-symbols-outlined icon-sm">location_on</span> Jaspur, UK</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- =========================================================================
     9. PRE-FOOTER HIGH-CONVERTING CTA BANNER (OWNWASH DITTO STYLE)
     ========================================================================= -->
<section class="pre-footer-cta">
  <div class="container">
    <div class="cta-banner-container">
      <div class="cta-banner-text">
        <h2>Ready for a Spotless Space?</h2>
        <p>Book your certified doorstep cleaning in 60 seconds. Zero advance payment required.</p>
      </div>
      <div class="cta-banner-buttons">
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-outline" style="border-color: #fff; color: #fff;">
          <span class="material-symbols-outlined icon-sm">call</span> <?= BUSINESS_PHONE ?>
        </a>
        <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="btn btn-action">
          <span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Instant Quote
        </a>
        <a href="<?= SITE_URL ?>/book-now/" class="btn btn-cta-light">
          Book Online <span class="material-symbols-outlined icon-sm">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     10. CITIES COVERAGE SECTION (SEO HUBS)
     ========================================================================= -->
<section class="cities-coverage-section">
  <div class="container">
    <div class="section-head-center">
      <span class="section-tagline">Local Coverage</span>
      <h2 class="section-title">Cities We Serve at Doorstep</h2>
      <p class="section-subtitle">Dedicated local teams dispatched across Kashipur, Jaspur, Ramnagar, and 60km radius.</p>
    </div>

    <div class="cities-cards-grid">
      <?php foreach ($citiesList as $cSlug => $cData): ?>
        <article class="city-hub-card">
          <div class="city-pin-icon" style="margin-bottom: 0.5rem;"><?= getThemeIcon('pin', 28, '#22A06B') ?></div>
          <h3><?= htmlspecialchars($cData['name']) ?></h3>
          <p><?= htmlspecialchars($cData['hero_subtitle'] ?? 'Professional doorstep cleaning service.') ?></p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--color-fresh-green); margin-bottom: 1.25rem;">
            Radius: <?= htmlspecialchars($cData['radius'] ?? '15 km') ?> • Same-Day Dispatch
          </div>
          <a href="<?= SITE_URL ?>/<?= $cSlug ?>/" class="btn btn-outline" style="width: 100%; border-radius: var(--radius-pill);">
            View <?= htmlspecialchars($cData['name']) ?> Services <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     11. FLOATING WHATSAPP BUTTON (BOTTOM-RIGHT - OWNWASH DITTO STYLE)
     ========================================================================= -->
<a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="ownwash-floating-whatsapp" aria-label="Chat on WhatsApp">
  <svg width="34" height="34" viewBox="0 0 24 24" fill="#FFFFFF">
    <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2zm5.8 14.16c-.24.68-1.4 1.25-1.92 1.33-.51.08-1.17.11-1.89-.12-.44-.14-1-.33-1.74-.65-3.08-1.34-5.09-4.47-5.25-4.68-.15-.21-1.25-1.66-1.25-3.17s.78-2.25 1.06-2.56c.28-.31.61-.39.81-.39.2 0 .41.01.59.02.19.01.44-.07.69.52.25.6.86 2.11.94 2.26.08.15.13.33.03.53-.1.2-.15.33-.3.51-.15.18-.32.4-.46.54-.15.15-.31.31-.13.62.18.31.79 1.31 1.7 2.12 1.17 1.04 2.15 1.36 2.46 1.51.31.15.49.13.67-.08.18-.21.78-.91.99-1.22.21-.31.42-.26.71-.15.29.11 1.84.87 2.16 1.03.31.15.52.23.6.36.08.13.08.76-.16 1.44z"/>
  </svg>
</a>

<?php require __DIR__ . '/../components/footer.php'; ?>
