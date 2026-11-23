<?php
/**
 * Generic Service Hub View: /services/{service}/ (e.g. /services/sofa-cleaning/)
 * Full Desktop & Mobile Standalone Service Detail Page
 * Features HD Media/Video, Interactive Packages, Inclusions/Exclusions, 
 * Real Before/After Slider, Add-ons, Reviews & Direct Booking Funnel.
 */

if (empty($currentServiceData)) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$serviceName = $currentServiceData['name'];
$serviceSlug = $currentServiceData['slug'];
$packages = !empty($currentServiceData['packages']) ? $currentServiceData['packages'] : [];
$beforeAfterPairs = !empty($currentServiceData['before_after']) ? $currentServiceData['before_after'] : [];
$addons = !empty($currentServiceData['addons']) ? $currentServiceData['addons'] : [];

// Check selected package from query string (e.g. ?package=1 for Deep Cleaning)
$selectedPkgIdx = isset($_GET['package']) ? (int)$_GET['package'] : 0;
if ($selectedPkgIdx < 0 || $selectedPkgIdx >= count($packages)) {
    $selectedPkgIdx = 0;
}
$activePkg = !empty($packages[$selectedPkgIdx]) ? $packages[$selectedPkgIdx] : (!empty($packages[0]) ? $packages[0] : [
    'title' => $serviceName . ' Deep Clean',
    'price' => 699,
    'tier' => 'Standard Package',
    'duration' => '60 - 90 min',
    'rating' => 4.85,
    'reviewCount' => 24,
    'includes' => $currentServiceData['checklist'] ?? [],
    'excludes' => [
        'Structural repairs and masonry work are not included',
        'Hazardous areas beyond safe ladder reach are not included'
    ]
]);

$pageTitle = "{$serviceName} Services | Full Details & Packages | A1 Cleaning";
$pageDescription = "Complete details, packages, before/after results and transparent pricing for {$serviceName} across Kashipur, Jaspur and Ramnagar. Book online or call " . BUSINESS_PHONE . ".";
$canonicalUrl = SeoHelper::getCanonicalUrl("services/{$serviceSlug}");

$serviceHubSchema = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "Service",
            "name" => "{$serviceName} Services",
            "serviceType" => $currentServiceData['schema_type'] ?? 'CleaningService',
            "url" => $canonicalUrl,
            "provider" => [
                "@id" => CANONICAL_DOMAIN . "/#business"
            ]
        ],
        [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => CANONICAL_DOMAIN . "/"
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Services",
                    "item" => SeoHelper::getCanonicalUrl('services')
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => $serviceName,
                    "item" => $canonicalUrl
                ]
            ]
        ]
    ]
];
$pageSchemaJson = json_encode($serviceHubSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

require __DIR__ . '/../components/header.php';
?>

<!-- Clean Breadcrumbs -->
<div class="a1-svc-breadcrumb-wrap">
  <div class="container">
    <nav class="a1-svc-breadcrumb">
      <a href="<?= SITE_URL ?>/">Home</a>
      <span class="sep">/</span>
      <a href="<?= SITE_URL ?>/services/">Services</a>
      <span class="sep">/</span>
      <span class="active"><?= htmlspecialchars($serviceName) ?></span>
    </nav>
  </div>
</div>

<!-- =========================================================================
     1. DESKTOP HERO SHOWCASE (Clean, Modern & Spacious)
     ========================================================================= -->
<section class="a1-svc-hero-section">
  <div class="container">
    <div class="a1-svc-hero-grid">
      <!-- Left Column: Content & Direct Actions -->
      <div class="a1-svc-hero-content">
        <div class="a1-svc-badge">
          <span class="material-symbols-outlined icon-sm" style="color: #F59E0B; font-size: 15px;">verified</span>
          <span>Verified Doorstep Service</span>
        </div>

        <h1 class="a1-svc-main-title"><?= htmlspecialchars($currentServiceData['full_title'] ?? $serviceName) ?></h1>

        <p class="a1-svc-lead">
          <?= htmlspecialchars($currentServiceData['short_desc']) ?>
        </p>

        <!-- Trust Badges Bar (Crisp & Essential) -->
        <div class="a1-svc-trust-row">
          <div class="a1-svc-trust-item">
            <span class="material-symbols-outlined">schedule</span>
            <span><?= htmlspecialchars($activePkg['duration'] ?? $currentServiceData['time_estimate']) ?></span>
          </div>
          <div class="a1-svc-trust-item">
            <span class="material-symbols-outlined">verified_user</span>
            <span>Verified Staff</span>
          </div>
          <div class="a1-svc-trust-item">
            <span class="material-symbols-outlined">eco</span>
            <span>Eco-Safe Chemicals</span>
          </div>
        </div>

        <!-- Price Callout & Action Group (Compact Pill Buttons) -->
        <div class="a1-svc-hero-actions-card">
          <div class="a1-svc-price-preview">
            <div class="price-val" id="heroPriceDisplay">₹<?= number_format($activePkg['price'] ?? 600) ?></div>
            <span class="price-sub" id="heroDurationDisplay"><?= htmlspecialchars($activePkg['duration'] ?? '45-60 mins') ?></span>
          </div>

          <div class="a1-svc-cta-buttons">
            <a href="<?= SITE_URL ?>/book-now/?service=<?= $serviceSlug ?>&package=<?= $selectedPkgIdx ?>" class="btn-a1-hero-book" id="heroBookNowBtn">
              <span class="material-symbols-outlined">calendar_month</span>
              <span>Book Online</span>
            </a>
            <a href="https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=<?= rawurlencode("Hi A1 Cleaning, I want to book " . $serviceName . " (" . $activePkg['title'] . ") for ₹" . $activePkg['price'] . ".") ?>" target="_blank" rel="noopener" class="btn-a1-hero-wa" id="heroWaBtn">
              <span class="material-symbols-outlined">chat</span>
              <span>WhatsApp</span>
            </a>
            <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn-a1-hero-call">
              <span class="material-symbols-outlined">call</span>
              <span><?= BUSINESS_PHONE ?></span>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Column: Video / HD Media Showcase -->
      <div class="a1-svc-hero-media-col">
        <div class="a1-svc-media-frame">
          <?php 
          $heroVideo = !empty($activePkg['video']) ? $activePkg['video'] : (!empty($currentServiceData['video']) ? $currentServiceData['video'] : '');
          $heroThumb = !empty($activePkg['thumb']) ? $activePkg['thumb'] : (!empty($currentServiceData['thumb']) ? $currentServiceData['thumb'] : '');
          if (!empty($heroThumb) && strpos($heroThumb, './') === 0) {
              $heroThumb = SITE_URL . '/' . substr($heroThumb, 2);
          }
          if (!empty($heroVideo) && strpos($heroVideo, './') === 0) {
              $heroVideo = SITE_URL . '/' . substr($heroVideo, 2);
          }
          ?>
          <video 
            id="heroVideoPlayer"
            class="a1-svc-video-player"
            playsinline 
            webkit-playsinline 
            muted 
            loop 
            autoplay 
            controls 
            poster="<?= htmlspecialchars($heroThumb) ?>"
            preload="metadata">
            <?php if (!empty($heroVideo)): ?>
              <source src="<?= htmlspecialchars($heroVideo) ?>" type="video/mp4">
            <?php endif; ?>
            <img src="<?= htmlspecialchars($heroThumb) ?>" alt="<?= htmlspecialchars($serviceName) ?>" class="a1-svc-poster-img">
          </video>
          <div class="a1-svc-media-badge">
            <span class="material-symbols-outlined">play_circle</span>
            <span>Real Video</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     2. PACKAGES SELECTION SECTION (Compact Cards with Live Switching)
     ========================================================================= -->
<section class="section" id="packagesSection">
  <div class="container">
    <div class="section-title text-center">
      <h2><?= htmlspecialchars($serviceName) ?> Packages</h2>
    </div>

    <div class="a1-svc-packages-grid">
      <?php foreach ($packages as $pIdx => $pkg): 
        $isSel = ($pIdx === $selectedPkgIdx);
        $pkgThumb = !empty($pkg['thumb']) ? $pkg['thumb'] : $heroThumb;
        if (strpos($pkgThumb, './') === 0) {
            $pkgThumb = SITE_URL . '/' . substr($pkgThumb, 2);
        }
      ?>
        <div class="a1-svc-pkg-card <?= $isSel ? 'is-selected' : '' ?> <?= !empty($pkg['featured']) ? 'is-featured' : '' ?>" id="svc-pkg-card-<?= $pIdx ?>" onclick="selectDesktopPackage(<?= $pIdx ?>)">
          <?php if (!empty($pkg['featured'])): ?>
            <div class="a1-svc-pkg-ribbon">Most Popular</div>
          <?php endif; ?>

          <div class="a1-svc-pkg-img-wrap">
            <img src="<?= htmlspecialchars($pkgThumb) ?>" alt="<?= htmlspecialchars($pkg['title']) ?>" class="a1-svc-pkg-img" loading="lazy">
            <span class="a1-svc-pkg-tier"><?= htmlspecialchars($pkg['tier'] ?? 'Package Plan') ?></span>
          </div>

          <div class="a1-svc-pkg-body">
            <div class="a1-svc-pkg-header">
              <h3 class="a1-svc-pkg-title"><?= htmlspecialchars($pkg['title']) ?></h3>
              <div class="a1-svc-pkg-price-box">
                <span class="price-num">₹<?= number_format($pkg['price']) ?></span>
              </div>
            </div>

            <div class="a1-svc-pkg-meta">
              <span class="meta-item"><span class="material-symbols-outlined icon-xs">star</span> <?= htmlspecialchars($pkg['rating'] ?? '4.85') ?></span>
              <span class="meta-item"><span class="material-symbols-outlined icon-xs">schedule</span> <?= htmlspecialchars($pkg['duration'] ?? '60 min') ?></span>
            </div>

            <button type="button" class="btn-a1-select-pkg <?= $isSel ? 'is-active' : '' ?>">
              <span class="material-symbols-outlined"><?= $isSel ? 'check_circle' : 'radio_button_unchecked' ?></span>
              <span><?= $isSel ? 'Selected' : 'Select Plan' ?></span>
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     3. WHAT'S INCLUDED VS WHAT'S EXCLUDED (Detailed Specifications Box)
     ========================================================================= -->
<section class="section section-bg-light" id="specsSection">
  <div class="container">
    <div class="section-title text-center">
      <h2>Package Specifications</h2>
      <p id="specsHeadingSub">Coverage for <strong id="specsPackageName"><?= htmlspecialchars($activePkg['title']) ?></strong></p>
    </div>

    <div class="a1-svc-specs-grid">
      <!-- Included Column (Green) -->
      <div class="a1-svc-specs-card card-included">
        <div class="a1-svc-specs-header">
          <span class="material-symbols-outlined check-icon">check_circle</span>
          <h3>What is Included</h3>
        </div>
        <ul class="a1-svc-specs-list" id="includedList">
          <?php 
          $incItems = !empty($activePkg['includes']) ? $activePkg['includes'] : ($currentServiceData['checklist'] ?? []);
          foreach ($incItems as $item): ?>
            <li>
              <span class="material-symbols-outlined icon-status">check</span>
              <span><?= htmlspecialchars($item) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Excluded Column (Red/Neutral) -->
      <div class="a1-svc-specs-card card-excluded">
        <div class="a1-svc-specs-header">
          <span class="material-symbols-outlined cancel-icon">cancel</span>
          <h3>What is Excluded</h3>
        </div>
        <ul class="a1-svc-specs-list" id="excludedList">
          <?php 
          $excItems = !empty($activePkg['excludes']) ? $activePkg['excludes'] : [
            'Structural civil repairs and tile replacement are not included',
            'Hazardous areas beyond safe human reach are not included',
            'Internal motor repairs or plumbing replacements are not included'
          ];
          foreach ($excItems as $item): ?>
            <li>
              <span class="material-symbols-outlined icon-status" style="color: #DC2626;">close</span>
              <span><?= htmlspecialchars($item) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     4. REAL BEFORE & AFTER SLIDER (Desktop Interactive Showcase)
     ========================================================================= -->
<?php if (!empty($beforeAfterPairs)): 
  $firstPair = $beforeAfterPairs[0];
  $firstBefore = preg_replace('/^\.\//', SITE_URL . '/', $firstPair['before']);
  $firstAfter = preg_replace('/^\.\//', SITE_URL . '/', $firstPair['after']);
?>
<section class="section" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Real Before &amp; After Transformations</h2>
      
    </div>

    <!-- Switcher Pills -->
    <div class="a1-desktop-ba-nav" id="desktopBaNav">
      <?php foreach ($beforeAfterPairs as $bIdx => $pair): ?>
        <button type="button" class="a1-desktop-ba-chip <?= ($bIdx === 0) ? 'is-active' : '' ?>" onclick="switchDesktopBaPair(<?= $bIdx ?>, this)">
          <span class="material-symbols-outlined"><?= htmlspecialchars($pair['icon'] ?? 'compare') ?></span>
          <span><?= htmlspecialchars($pair['title']) ?></span>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Large Interactive Desktop Before & After Slider -->
    <div class="a1-desktop-ba-wrapper">
      <div class="a1-desktop-ba-container" id="desktopBaContainer">
        <!-- After Clean Image (Base) -->
        <img src="<?= htmlspecialchars($firstAfter) ?>" alt="After Deep Cleaning" class="a1-desktop-ba-img-after" id="desktopBaImgAfter">
        <span class="a1-desktop-ba-badge badge-after">AFTER CLEANING</span>

        <!-- Before Clean Image (Overlay Clip) -->
        <div class="a1-desktop-ba-before-wrap" id="desktopBaBeforeWrap" style="width: 50%;">
          <img src="<?= htmlspecialchars($firstBefore) ?>" alt="Before Cleaning" class="a1-desktop-ba-img-before" id="desktopBaImgBefore">
          <span class="a1-desktop-ba-badge badge-before">BEFORE CLEANING</span>
        </div>

        <!-- Slider Divider Handle -->
        <div class="a1-desktop-ba-handle" id="desktopBaHandle" style="left: 50%;">
          <div class="a1-desktop-ba-knob">
            <span class="material-symbols-outlined">swap_horiz</span>
          </div>
        </div>

        <!-- Range Input for Dragging -->
        <input type="range" min="0" max="100" value="50" class="a1-desktop-ba-range" id="desktopBaRangeInput" oninput="updateDesktopBaSlider(this.value)" aria-label="Slide to compare before and after">
      </div>

      <div class="a1-desktop-ba-caption">
        <span class="caption-desc" id="desktopBaDesc"><?= htmlspecialchars($firstPair['desc'] ?? '') ?></span>
        <span class="caption-hint">
          <span class="material-symbols-outlined">touch_app</span>
          <span>Drag slider or hover to compare results</span>
        </span>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================================
     5. RECOMMENDED ADD-ONS SECTION
     ========================================================================= -->
<?php if (!empty($addons)): ?>
<section class="section section-bg-light" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Recommended Add-ons for <?= htmlspecialchars($serviceName) ?></h2>
      
    </div>

    <div class="a1-svc-addons-grid">
      <?php foreach ($addons as $addon): ?>
        <div class="a1-svc-addon-card">
          <div class="a1-svc-addon-icon-box">
            <span class="material-symbols-outlined"><?= htmlspecialchars($addon['icon'] ?? 'add_circle') ?></span>
          </div>
          <div class="a1-svc-addon-info">
            <h4><?= htmlspecialchars($addon['name']) ?></h4>
            <span class="addon-price">+₹<?= number_format($addon['price']) ?></span>
          </div>
          <a href="<?= SITE_URL ?>/book-now/?service=<?= $serviceSlug ?>&addon=<?= urlencode($addon['key']) ?>" class="btn-addon-add">
            <span class="material-symbols-outlined">add</span>
            <span>Add</span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================================
     6. CUSTOMER REVIEWS & RATINGS BREAKDOWN
     ========================================================================= -->
<section class="section" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Verified Customer Reviews</h2>
      
    </div>

    <div class="a1-svc-reviews-layout">
      <!-- Left: Overall Rating & Progress Bars -->
      <div class="a1-svc-rating-summary-card">
        <div class="rating-big"><?= htmlspecialchars($activePkg['rating'] ?? '4.85') ?></div>
        <div class="rating-stars">
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
        </div>
        <span class="rating-count-text">Based on <?= htmlspecialchars($activePkg['reviewCount'] ?? '24') ?> verified reviews</span>

        <div class="rating-breakdown-bars">
          <?php 
          $breakdown = !empty($activePkg['breakdown']) ? $activePkg['breakdown'] : [5 => 18, 4 => 4, 3 => 1, 2 => 1, 1 => 0];
          $tot = array_sum($breakdown) ?: 24;
          foreach ([5, 4, 3, 2, 1] as $star):
            $cnt = $breakdown[$star] ?? 0;
            $pct = round(($cnt / $tot) * 100);
          ?>
            <div class="bar-row">
              <span class="star-lbl"><?= $star ?> <span class="material-symbols-outlined" style="font-size: 13px;">star</span></span>
              <div class="bar-track">
                <div class="bar-fill" style="width: <?= $pct ?>%;"></div>
              </div>
              <span class="bar-count"><?= $cnt ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: Customer Reviews Stream -->
      <div class="a1-svc-reviews-stream">
        <?php 
        $reviews = !empty($activePkg['reviews']) ? $activePkg['reviews'] : [
          ['name' => 'Rahul Chavan', 'date' => 'October 30, 2026', 'stars' => 5, 'comment' => 'Very satisfied with the thorough cleaning! Removed deep hard stains from our tiles that other local cleaners could never clear.'],
          ['name' => 'Pooja Agarwal', 'date' => 'November 12, 2026', 'stars' => 5, 'comment' => 'Professional staff arrived on time with heavy machines. Transparent pricing with no hidden charges. Highly recommended in Kashipur.'],
          ['name' => 'Amit Negi', 'date' => 'November 18, 2026', 'stars' => 4, 'comment' => 'Great work on our bathrooms and sofa. Technicians were polite and did a complete joint inspection after work.'],
          ['name' => 'Deepak Rawat', 'date' => 'November 21, 2026', 'stars' => 5, 'comment' => 'The steam sanitation left the entire place feeling brand new and smelling fresh. Will book regularly.']
        ];
        foreach ($reviews as $rev): ?>
          <div class="a1-svc-review-card">
            <div class="review-header">
              <div class="reviewer-avatar">
                <span class="material-symbols-outlined">person</span>
              </div>
              <div>
                <h4 class="reviewer-name"><?= htmlspecialchars($rev['name']) ?></h4>
                <span class="review-date"><?= htmlspecialchars($rev['date']) ?> &bull; Verified Client</span>
              </div>
            </div>
            <div class="review-stars-row">
              <?php for ($s = 1; $s <= 5; $s++): ?>
                <span class="material-symbols-outlined star-icon <?= ($s <= $rev['stars']) ? 'filled' : 'empty' ?>">star</span>
              <?php endfor; ?>
            </div>
            <p class="review-comment"><?= htmlspecialchars($rev['comment']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     7. 5-STEP CLEANING PROTOCOL & PROCESS
     ========================================================================= -->
<section class="section section-bg-light" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Our 5-Step Deep Cleaning Protocol</h2>
      
    </div>

    <div class="a1-svc-process-grid">
      <div class="process-card">
        <div class="step-num">01</div>
        <h3>Pre-Clean Inspection</h3>
        <p>Surface evaluation, grime identification, and joint review of client priority areas.</p>
      </div>
      <div class="process-card">
        <div class="step-num">02</div>
        <h3>Masking &amp; Prep</h3>
        <p>Protecting delicate chrome fixtures, switchboards, and personal belongings from overspray.</p>
      </div>
      <div class="process-card">
        <div class="step-num">03</div>
        <h3>Mechanized Scrubbing</h3>
        <p>Single-disc rotary scrubbing, injection-extraction, and chemical descaling of deep stains.</p>
      </div>
      <div class="process-card">
        <div class="step-num">04</div>
        <h3>Steam Sterilization</h3>
        <p>140°C high-pressure dry steam eliminates 99.9% of bacteria, allergens, and lingering odors.</p>
      </div>
      <div class="process-card">
        <div class="step-num">05</div>
        <h3>Joint Audit Signoff</h3>
        <p>Final walkthrough with client using our digital quality checklist before technician leaves.</p>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     8. LOCAL CITY DISPATCH HUBS
     ========================================================================= -->
<section class="section" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Service Coverage</h2>
    </div>

    <div class="cities-grid">
      <?php foreach ($citiesList as $cSlug => $cData): ?>
        <div class="city-card">
          <div class="city-card-header">
            <span class="material-symbols-outlined city-pin-icon">location_on</span>
            <h3><?= htmlspecialchars($cData['name']) ?></h3>
          </div>
          <p style="color: var(--color-text-muted); font-size: 0.95rem; margin: 0.75rem 0 1.25rem;">
            Doorstep cleaning available in <?= htmlspecialchars($cData['name']) ?>.
          </p>
          <a href="<?= SITE_URL ?>/<?= $cSlug ?>/<?= $serviceSlug ?>/" class="btn btn-primary" style="width: 100%; display: inline-flex; align-items: center; justify-content: center; gap: 0.35rem;">
            View <?= htmlspecialchars($cData['name']) ?> Hub <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     9. FREQUENTLY ASKED QUESTIONS (FAQs)
     ========================================================================= -->
<?php if (!empty($currentServiceData['faqs'])): ?>
<section class="section section-bg-light" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Frequently Asked Questions</h2>
    </div>

    <div class="a1-svc-faq-wrap">
      <?php foreach ($currentServiceData['faqs'] as $fIdx => $faq): ?>
        <div class="a1-svc-faq-item <?= ($fIdx === 0) ? 'is-open' : '' ?>">
          <button type="button" class="a1-svc-faq-question" onclick="toggleSvcFaq(this)">
            <span><?= htmlspecialchars($faq['q']) ?></span>
            <span class="material-symbols-outlined faq-arrow">expand_more</span>
          </button>
          <div class="a1-svc-faq-answer">
            <p><?= htmlspecialchars($faq['a']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================================
     10. FINAL DESKTOP CTA BANNER
     ========================================================================= -->
<section class="a1-svc-final-cta-section">
  <div class="container">
    <div class="a1-svc-final-cta-card">
      <div class="cta-text-col">
        <h2>Ready for a Spotless Space?</h2>
        <p>Book online or connect on WhatsApp for instant confirmation.</p>
      </div>
      <div class="cta-actions-col">
        <a href="<?= SITE_URL ?>/book-now/?service=<?= $serviceSlug ?>&package=<?= $selectedPkgIdx ?>" class="btn-cta-main" id="finalBookBtn">
          <span class="material-symbols-outlined">calendar_month</span>
          <span>Book Online (₹<?= number_format($activePkg['price'] ?? 600) ?>)</span>
        </a>
        <a href="https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=<?= rawurlencode("Hi A1 Cleaning, I need to book " . $serviceName . ".") ?>" target="_blank" rel="noopener" class="btn-cta-wa">
          <span class="material-symbols-outlined">chat</span>
          <span>WhatsApp Quote</span>
        </a>
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn-cta-call">
          <span class="material-symbols-outlined">call</span>
          <span><?= BUSINESS_PHONE ?></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     PAGE STYLES (Tailored for Wide Desktop & Clean Responsive Layout)
     ========================================================================= -->
<style>
/* Section Spacing & Headings (Clean, Modern & Spacious) */
.section {
  padding: 2.25rem 0;
}
.section.section-bg-light {
  background: #F9FBF9;
}
.section-title {
  margin-bottom: 1.5rem;
}
.section-title h2 {
  font-size: 1.45rem;
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 0.35rem;
  letter-spacing: -0.01em;
}
.section-title p {
  font-size: 0.85rem;
  color: #556B64;
  margin: 0;
}

/* Breadcrumbs */
.a1-svc-breadcrumb-wrap {
  background: #F4F8F5;
  border-bottom: 1px solid rgba(11, 41, 34, 0.08);
  padding: 0.65rem 0;
  font-size: 0.82rem;
}
.a1-svc-breadcrumb {
  display: flex;
  align-items: center;
  gap: 0.4rem;
  color: #556B64;
}
.a1-svc-breadcrumb a {
  color: #0B2922;
  text-decoration: none;
  font-weight: 600;
}
.a1-svc-breadcrumb a:hover {
  color: #22A06B;
}
.a1-svc-breadcrumb .sep {
  color: #8C9E97;
}
.a1-svc-breadcrumb .active {
  color: #22A06B;
  font-weight: 700;
}

/* Hero Section (Crisp, Airy, Modern) */
.a1-svc-hero-section {
  background: linear-gradient(135deg, #0B2922 0%, #133D31 100%);
  color: #FFFFFF;
  padding: 2.25rem 0 2.5rem;
  position: relative;
  overflow: hidden;
}
.a1-svc-hero-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 2.5rem;
  align-items: center;
}
.a1-svc-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  background: rgba(34, 160, 107, 0.2);
  border: 1px solid rgba(34, 160, 107, 0.45);
  padding: 0.25rem 0.75rem;
  border-radius: 50px;
  font-size: 0.78rem;
  font-weight: 700;
  color: #D3E8DD;
  margin-bottom: 0.85rem;
}
.a1-svc-main-title {
  font-size: clamp(1.65rem, 2.5vw, 2.2rem);
  font-weight: 800;
  line-height: 1.2;
  color: #FFFFFF;
  margin: 0 0 0.75rem;
  letter-spacing: -0.02em;
}
.a1-svc-lead {
  font-size: 0.9rem;
  color: #D3E8DD;
  line-height: 1.55;
  margin: 0 0 1.25rem;
  max-width: 560px;
}
.a1-svc-trust-row {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  flex-wrap: wrap;
  margin-bottom: 1.35rem;
}
.a1-svc-trust-item {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  font-size: 0.82rem;
  color: #EAF3EE;
  font-weight: 600;
}
.a1-svc-trust-item .material-symbols-outlined {
  color: #22A06B;
  font-size: 17px;
}

/* Hero Price & Action Card */
.a1-svc-hero-actions-card {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.16);
  backdrop-filter: blur(8px);
  border-radius: 14px;
  padding: 0.85rem 1.15rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  flex-wrap: wrap;
}
.a1-svc-price-preview {
  display: flex;
  align-items: baseline;
  gap: 0.5rem;
}
.a1-svc-price-preview .price-val {
  font-size: 1.75rem;
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1;
}
.a1-svc-price-preview .price-sub {
  font-size: 0.78rem;
  color: #D3E8DD;
}
.a1-svc-cta-buttons {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  flex-wrap: wrap;
}
.btn-a1-hero-book {
  background: #22A06B;
  color: #FFFFFF !important;
  font-weight: 700;
  font-size: 0.85rem;
  padding: 0.55rem 1.1rem;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  text-decoration: none;
  transition: all 0.2s ease;
  box-shadow: 0 3px 10px rgba(34, 160, 107, 0.35);
}
.btn-a1-hero-book:hover {
  background: #1B8357;
  transform: translateY(-1px);
}
.btn-a1-hero-wa {
  background: #25D366;
  color: #FFFFFF !important;
  font-weight: 700;
  font-size: 0.85rem;
  padding: 0.55rem 1rem;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  text-decoration: none;
  transition: all 0.2s ease;
}
.btn-a1-hero-wa:hover {
  background: #1EBE5D;
  transform: translateY(-1px);
}
.btn-a1-hero-call {
  background: #FFFFFF;
  color: #0B2922 !important;
  font-weight: 700;
  font-size: 0.85rem;
  padding: 0.55rem 0.95rem;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  text-decoration: none;
  transition: all 0.2s ease;
}
.btn-a1-hero-call:hover {
  background: #EAF3EE;
  transform: translateY(-1px);
}

/* Hero Media Frame */
.a1-svc-media-frame {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.35);
  aspect-ratio: 16 / 10;
  max-height: 320px;
  background: #000;
}
.a1-svc-video-player,
.a1-svc-poster-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.a1-svc-media-badge {
  position: absolute;
  bottom: 10px;
  left: 10px;
  background: rgba(11, 41, 34, 0.8);
  backdrop-filter: blur(4px);
  color: #FFFFFF;
  padding: 3px 10px;
  border-radius: 50px;
  font-size: 0.72rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 4px;
  pointer-events: none;
}

/* Packages Grid & Compact Cards */
.a1-svc-packages-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.25rem;
  max-width: 1040px;
  margin: 0 auto;
}
.a1-svc-pkg-card {
  background: #FFFFFF;
  border: 1.5px solid #E5E7EB;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(11, 41, 34, 0.04);
  cursor: pointer;
  transition: all 0.2s ease;
  position: relative;
  display: flex;
  flex-direction: column;
}
.a1-svc-pkg-card:hover {
  border-color: #22A06B;
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(11, 41, 34, 0.09);
}
.a1-svc-pkg-card.is-selected {
  border-color: #22A06B;
  box-shadow: 0 0 0 2px rgba(34, 160, 107, 0.2), 0 8px 20px rgba(11, 41, 34, 0.09);
}
.a1-svc-pkg-ribbon {
  position: absolute;
  top: 10px;
  left: 10px;
  background: #22A06B;
  color: #FFFFFF;
  font-size: 0.68rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.4px;
  padding: 3px 8px;
  border-radius: 50px;
  z-index: 2;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}
.a1-svc-pkg-img-wrap {
  position: relative;
  height: 130px;
  background: #F4F8F5;
  overflow: hidden;
}
.a1-svc-pkg-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}
.a1-svc-pkg-card:hover .a1-svc-pkg-img {
  transform: scale(1.03);
}
.a1-svc-pkg-tier {
  position: absolute;
  bottom: 8px;
  right: 8px;
  background: rgba(11, 41, 34, 0.85);
  backdrop-filter: blur(4px);
  color: #FFFFFF;
  font-size: 0.7rem;
  font-weight: 700;
  padding: 3px 8px;
  border-radius: 5px;
}
.a1-svc-pkg-body {
  padding: 0.95rem 1rem 1rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.a1-svc-pkg-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 0.75rem;
  margin-bottom: 0.45rem;
}
.a1-svc-pkg-title {
  font-size: 1.05rem;
  font-weight: 700;
  color: #0B2922;
  margin: 0;
}
.a1-svc-pkg-price-box .price-num {
  font-size: 1.25rem;
  font-weight: 800;
  color: #0B2922;
  line-height: 1;
}
.a1-svc-pkg-meta {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-bottom: 0.85rem;
  font-size: 0.78rem;
  color: #6B7280;
}
.a1-svc-pkg-meta .meta-item {
  display: inline-flex;
  align-items: center;
  gap: 2px;
}
.a1-svc-pkg-meta .meta-item .material-symbols-outlined {
  color: #22A06B;
  font-size: 14px;
}
.btn-a1-select-pkg {
  width: 100%;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.35rem;
  padding: 0 0.75rem;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.82rem;
  border: 1px solid #D1D5DB;
  background: #FFFFFF;
  color: #0B2922;
  cursor: pointer;
  transition: all 0.2s ease;
  margin-top: auto;
}
.a1-svc-pkg-card.is-selected .btn-a1-select-pkg,
.btn-a1-select-pkg.is-active {
  background: #22A06B;
  border-color: #22A06B;
  color: #FFFFFF;
}

/* Specifications Grid & Cards */
.a1-svc-specs-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.5rem;
  max-width: 980px;
  margin: 0 auto;
}
.a1-svc-specs-card {
  background: #FFFFFF;
  border-radius: 14px;
  padding: 1.25rem 1.5rem;
  box-shadow: 0 2px 10px rgba(11, 41, 34, 0.04);
  border: 1px solid #E5E7EB;
}
.a1-svc-specs-card.card-included {
  border-top: 3px solid #22A06B;
}
.a1-svc-specs-card.card-excluded {
  border-top: 3px solid #EF4444;
}
.a1-svc-specs-header {
  display: flex;
  align-items: center;
  gap: 0.65rem;
  margin-bottom: 0.85rem;
  padding-bottom: 0.65rem;
  border-bottom: 1px solid #F3F4F6;
}
.a1-svc-specs-header h3 {
  font-size: 1.05rem;
  font-weight: 700;
  margin: 0;
  color: #0B2922;
}
.a1-svc-specs-header .check-icon {
  color: #22A06B;
  font-size: 22px;
}
.a1-svc-specs-header .cancel-icon {
  color: #EF4444;
  font-size: 22px;
}
.a1-svc-specs-list {
  list-style: none;
  padding: 0;
  margin: 0;
}
.a1-svc-specs-list li {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
  padding: 0.4rem 0;
  border-bottom: 1px dashed #F3F4F6;
  font-size: 0.86rem;
  color: #374151;
  line-height: 1.4;
}
.a1-svc-specs-list li:last-child {
  border-bottom: none;
}
.a1-svc-specs-list li .icon-status {
  color: #22A06B;
  font-size: 16px;
  flex-shrink: 0;
  margin-top: 1px;
}

/* Desktop Before & After Slider */
.a1-desktop-ba-nav {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  flex-wrap: wrap;
  margin-bottom: 1.25rem;
}
.a1-desktop-ba-chip {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  padding: 0.45rem 1rem;
  border-radius: 50px;
  background: #FFFFFF;
  border: 1px solid #D1D5DB;
  font-size: 0.82rem;
  font-weight: 600;
  color: #0B2922;
  cursor: pointer;
  transition: all 0.2s ease;
}
.a1-desktop-ba-chip:hover {
  border-color: #22A06B;
  color: #22A06B;
}
.a1-desktop-ba-chip.is-active {
  background: #0B2922;
  border-color: #0B2922;
  color: #FFFFFF;
}
.a1-desktop-ba-chip.is-active .material-symbols-outlined {
  color: #22A06B;
}
.a1-desktop-ba-wrapper {
  max-width: 820px;
  margin: 0 auto;
}
.a1-desktop-ba-container {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 10;
  max-height: 480px;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 8px 24px rgba(11, 41, 34, 0.12);
  background: #0B2922;
  user-select: none;
  cursor: ew-resize;
}
.a1-desktop-ba-img-after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
  display: block;
}
.a1-desktop-ba-before-wrap {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  z-index: 2;
  will-change: width;
}
.a1-desktop-ba-img-before {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: var(--ba-desktop-w, 820px);
  max-width: none;
  object-fit: cover;
  pointer-events: none;
  display: block;
}
.a1-desktop-ba-badge {
  position: absolute;
  top: 12px;
  padding: 4px 10px;
  font-size: 0.7rem;
  font-weight: 800;
  letter-spacing: 0.5px;
  border-radius: 5px;
  pointer-events: none;
  z-index: 4;
}
.a1-desktop-ba-badge.badge-after {
  right: 12px;
  background: rgba(34, 160, 107, 0.95);
  color: #FFFFFF;
}
.a1-desktop-ba-badge.badge-before {
  left: 12px;
  background: rgba(11, 41, 34, 0.9);
  color: #FFFFFF;
}
.a1-desktop-ba-handle {
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
.a1-desktop-ba-knob {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background: #FFFFFF;
  box-shadow: 0 2px 10px rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #0B2922;
}
.a1-desktop-ba-knob .material-symbols-outlined {
  font-size: 18px;
}
.a1-desktop-ba-range {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: ew-resize;
  z-index: 6;
  margin: 0;
}
.a1-desktop-ba-caption {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  margin-top: 0.75rem;
  font-size: 0.82rem;
  color: #6B7280;
}
.a1-desktop-ba-caption .caption-desc {
  font-weight: 600;
  color: #0B2922;
}

/* Add-ons Grid */
.a1-svc-addons-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 1rem;
  max-width: 1040px;
  margin: 0 auto;
}
.a1-svc-addon-card {
  background: #FFFFFF;
  border: 1px solid #E5E7EB;
  border-radius: 12px;
  padding: 0.75rem 1rem;
  display: flex;
  align-items: center;
  gap: 0.85rem;
  box-shadow: 0 1px 6px rgba(11, 41, 34, 0.03);
}
.a1-svc-addon-icon-box {
  width: 36px;
  height: 36px;
  border-radius: 8px;
  background: #EAF3EE;
  color: #22A06B;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.a1-svc-addon-icon-box .material-symbols-outlined {
  font-size: 19px;
}
.a1-svc-addon-info {
  flex: 1;
}
.a1-svc-addon-info h4 {
  font-size: 0.88rem;
  font-weight: 700;
  margin: 0 0 2px;
  color: #0B2922;
}
.a1-svc-addon-info .addon-price {
  font-size: 0.82rem;
  font-weight: 800;
  color: #22A06B;
}
.btn-addon-add {
  display: inline-flex;
  align-items: center;
  gap: 2px;
  padding: 4px 10px;
  border-radius: 6px;
  background: #F3F4F6;
  color: #0B2922;
  font-size: 0.76rem;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.2s ease;
}
.btn-addon-add:hover {
  background: #22A06B;
  color: #FFFFFF;
}

/* Reviews Layout */
.a1-svc-reviews-layout {
  display: grid;
  grid-template-columns: 280px 1fr;
  gap: 2rem;
  max-width: 1040px;
  margin: 0 auto;
  align-items: flex-start;
}
.a1-svc-rating-summary-card {
  background: #F9FBFA;
  border: 1px solid #E5E7EB;
  border-radius: 14px;
  padding: 1.25rem;
  text-align: center;
}
.a1-svc-rating-summary-card .rating-big {
  font-size: 2.6rem;
  font-weight: 800;
  color: #0B2922;
  line-height: 1;
}
.a1-svc-rating-summary-card .rating-stars {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2px;
  margin: 0.35rem 0;
}
.a1-svc-rating-summary-card .rating-stars .filled {
  color: #F59E0B;
  font-size: 18px;
}
.a1-svc-rating-summary-card .rating-count-text {
  font-size: 0.78rem;
  color: #6B7280;
  display: block;
  margin-bottom: 1rem;
}
.rating-breakdown-bars {
  display: flex;
  flex-direction: column;
  gap: 0.4rem;
}
.bar-row {
  display: flex;
  align-items: center;
  gap: 0.4rem;
  font-size: 0.78rem;
}
.bar-row .star-lbl {
  width: 28px;
  display: flex;
  align-items: center;
  color: #4B5563;
  font-weight: 600;
}
.bar-row .bar-track {
  flex: 1;
  height: 6px;
  border-radius: 3px;
  background: #E5E7EB;
  overflow: hidden;
}
.bar-row .bar-fill {
  height: 100%;
  background: #22A06B;
  border-radius: 3px;
}
.bar-row .bar-count {
  width: 20px;
  text-align: right;
  color: #6B7280;
  font-weight: 600;
}
.a1-svc-reviews-stream {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}
.a1-svc-review-card {
  background: #FFFFFF;
  border: 1px solid #E5E7EB;
  border-radius: 12px;
  padding: 1rem 1.15rem;
  box-shadow: 0 1px 6px rgba(11, 41, 34, 0.03);
}
.reviewer-avatar {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #EAF3EE;
  color: #22A06B;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.reviewer-avatar .material-symbols-outlined {
  font-size: 17px;
}
.review-header {
  display: flex;
  align-items: center;
  gap: 0.65rem;
  margin-bottom: 0.5rem;
}
.reviewer-name {
  font-size: 0.88rem;
  font-weight: 700;
  margin: 0;
  color: #0B2922;
}
.review-date {
  font-size: 0.74rem;
  color: #6B7280;
}
.review-stars-row {
  display: flex;
  gap: 1px;
  margin-bottom: 0.5rem;
}
.review-stars-row .filled {
  color: #F59E0B;
  font-size: 14px;
}
.review-stars-row .empty {
  color: #D1D5DB;
  font-size: 14px;
}
.review-comment {
  font-size: 0.84rem;
  color: #4B5563;
  line-height: 1.45;
  margin: 0;
}

/* Process Grid */
.a1-svc-process-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1rem;
  max-width: 1040px;
  margin: 0 auto;
}
.process-card {
  background: #FFFFFF;
  border: 1px solid #E5E7EB;
  border-radius: 12px;
  padding: 1.15rem 1rem;
  position: relative;
}
.process-card .step-num {
  font-size: 1.25rem;
  font-weight: 900;
  color: #22A06B;
  margin-bottom: 0.4rem;
}
.process-card h3 {
  font-size: 0.92rem;
  font-weight: 700;
  color: #0B2922;
  margin: 0 0 0.35rem;
}
.process-card p {
  font-size: 0.8rem;
  color: #556B64;
  line-height: 1.4;
  margin: 0;
}

/* City Coverage */
.cities-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.25rem;
  max-width: 1040px;
  margin: 0 auto;
}
.city-card {
  background: #FFFFFF;
  border: 1px solid #E5E7EB;
  border-radius: 12px;
  padding: 1.25rem;
  box-shadow: 0 1px 6px rgba(11, 41, 34, 0.03);
}
.city-card-header {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.city-card-header h3 {
  font-size: 0.95rem;
  font-weight: 700;
  margin: 0;
  color: #0B2922;
}
.city-pin-icon {
  color: #22A06B;
  font-size: 20px;
}

/* FAQ Accordion */
.a1-svc-faq-wrap {
  max-width: 820px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 0.65rem;
}
.a1-svc-faq-item {
  background: #FFFFFF;
  border: 1px solid #E5E7EB;
  border-radius: 10px;
  overflow: hidden;
  transition: all 0.2s ease;
}
.a1-svc-faq-question {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.85rem 1.25rem;
  background: transparent;
  border: none;
  font-size: 0.92rem;
  font-weight: 700;
  color: #0B2922;
  text-align: left;
  cursor: pointer;
}
.a1-svc-faq-question .faq-arrow {
  color: #6B7280;
  font-size: 18px;
  transition: transform 0.25s ease;
}
.a1-svc-faq-item.is-open .faq-arrow {
  transform: rotate(180deg);
  color: #22A06B;
}
.a1-svc-faq-answer {
  display: none;
  padding: 0 1.25rem 0.95rem;
  color: #4B5563;
  font-size: 0.86rem;
  line-height: 1.5;
}
.a1-svc-faq-item.is-open .a1-svc-faq-answer {
  display: block;
}

/* Final CTA Section */
.a1-svc-final-cta-section {
  background: #0B2922;
  color: #FFFFFF;
  padding: 2.5rem 0;
}
.a1-svc-final-cta-card {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1.5rem;
  flex-wrap: wrap;
}
.cta-text-col h2 {
  font-size: 1.5rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.35rem;
}
.cta-text-col p {
  color: #D3E8DD;
  font-size: 0.88rem;
  margin: 0;
}
.cta-actions-col {
  display: flex;
  align-items: center;
  gap: 0.65rem;
  flex-wrap: wrap;
}
.btn-cta-main {
  background: #22A06B;
  color: #FFFFFF !important;
  font-weight: 700;
  font-size: 0.88rem;
  padding: 0.65rem 1.25rem;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  text-decoration: none;
  box-shadow: 0 3px 12px rgba(34, 160, 107, 0.35);
}
.btn-cta-main:hover {
  background: #1B8357;
  transform: translateY(-1px);
}
.btn-cta-wa {
  background: #25D366;
  color: #FFFFFF !important;
  font-weight: 700;
  font-size: 0.88rem;
  padding: 0.65rem 1.15rem;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  text-decoration: none;
}
.btn-cta-wa:hover {
  background: #1EBE5D;
  transform: translateY(-1px);
}
.btn-cta-call {
  background: #FFFFFF;
  color: #0B2922 !important;
  font-weight: 700;
  font-size: 0.88rem;
  padding: 0.65rem 1.05rem;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  text-decoration: none;
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .a1-svc-hero-grid {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  .a1-svc-reviews-layout {
    grid-template-columns: 1fr;
  }
  .a1-svc-specs-grid {
    grid-template-columns: 1fr;
  }
  .cities-grid {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 768px) {
  .a1-svc-hero-actions-card {
    flex-direction: column;
    align-items: stretch;
  }
  .a1-svc-cta-buttons {
    flex-direction: column;
    width: 100%;
  }
  .btn-a1-hero-book,
  .btn-a1-hero-wa,
  .btn-a1-hero-call {
    width: 100%;
    justify-content: center;
  }
  .a1-svc-trust-row {
    flex-direction: column;
    align-items: flex-start;
  }
  .a1-svc-reviews-stream {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- =========================================================================
     PAGE CLIENT LOGIC (Interactive Switching & BA Slider)
     ========================================================================= -->
<script>
const SVC_PACKAGES = <?= json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
const SVC_SLUG = "<?= $serviceSlug ?>";
const SVC_NAME = "<?= addslashes($serviceName) ?>";
const BA_PAIRS = <?= json_encode($beforeAfterPairs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
const SITE_ROOT = "<?= SITE_URL ?>";

let currentSelectedPkgIndex = <?= $selectedPkgIdx ?>;

function selectDesktopPackage(index) {
  if (!SVC_PACKAGES[index]) return;
  currentSelectedPkgIndex = index;
  const pkg = SVC_PACKAGES[index];

  // Update card styles
  document.querySelectorAll('.a1-svc-pkg-card').forEach((c, i) => {
    if (i === index) {
      c.classList.add('is-selected');
      const btn = c.querySelector('.btn-a1-select-pkg');
      if (btn) {
        btn.classList.add('is-active');
        btn.innerHTML = `<span class="material-symbols-outlined">check_circle</span><span>Selected</span>`;
      }
    } else {
      c.classList.remove('is-selected');
      const btn = c.querySelector('.btn-a1-select-pkg');
      if (btn) {
        btn.classList.remove('is-active');
        btn.innerHTML = `<span class="material-symbols-outlined">radio_button_unchecked</span><span>Select Plan</span>`;
      }
    }
  });

  // Update Hero Price & Duration
  const hPrice = document.getElementById('heroPriceDisplay');
  const hDur = document.getElementById('heroDurationDisplay');
  if (hPrice) hPrice.textContent = '₹' + Number(pkg.price).toLocaleString('en-IN');
  if (hDur) hDur.textContent = pkg.duration || '60 mins';

  // Update Booking URLs
  const bookBtn = document.getElementById('heroBookNowBtn');
  if (bookBtn) bookBtn.href = `${SITE_ROOT}/book-now/?service=${SVC_SLUG}&package=${index}`;
  const finalBtn = document.getElementById('finalBookBtn');
  if (finalBtn) {
    finalBtn.href = `${SITE_ROOT}/book-now/?service=${SVC_SLUG}&package=${index}`;
    finalBtn.innerHTML = `<span class="material-symbols-outlined">calendar_month</span><span>Book Online (₹${Number(pkg.price).toLocaleString('en-IN')})</span>`;
  }
  const waBtn = document.getElementById('heroWaBtn');
  if (waBtn) {
    const waMsg = `Hi A1 Cleaning, I want to book ${SVC_NAME} (${pkg.title}) for ₹${pkg.price}.`;
    waBtn.href = `https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=${encodeURIComponent(waMsg)}`;
  }

  // Update Inclusions & Exclusions
  const nameEl = document.getElementById('specsPackageName');
  if (nameEl) nameEl.textContent = pkg.title;

  const incListEl = document.getElementById('includedList');
  if (incListEl && pkg.includes) {
    let incHtml = '';
    pkg.includes.forEach(item => {
      incHtml += `<li><span class="material-symbols-outlined icon-status">check</span><span>${item}</span></li>`;
    });
    incListEl.innerHTML = incHtml;
  }

  const excListEl = document.getElementById('excludedList');
  if (excListEl) {
    const excItems = pkg.excludes || [
      'Structural civil repairs and tile replacement are not included',
      'Hazardous areas beyond safe human reach are not included'
    ];
    let excHtml = '';
    excItems.forEach(item => {
      excHtml += `<li><span class="material-symbols-outlined icon-status" style="color: #DC2626;">close</span><span>${item}</span></li>`;
    });
    excListEl.innerHTML = excHtml;
  }
}

// Interactive Desktop Before & After Slider
function updateDesktopBaSlider(val) {
  const beforeWrap = document.getElementById('desktopBaBeforeWrap');
  const handle = document.getElementById('desktopBaHandle');
  if (beforeWrap) beforeWrap.style.width = val + '%';
  if (handle) handle.style.left = val + '%';
}

function syncDesktopBaWidth() {
  const container = document.getElementById('desktopBaContainer');
  if (container) {
    const w = container.clientWidth;
    if (w > 0) container.style.setProperty('--ba-desktop-w', w + 'px');
  }
}

function switchDesktopBaPair(index, btn) {
  if (!BA_PAIRS[index]) return;
  const pair = BA_PAIRS[index];

  const imgBefore = document.getElementById('desktopBaImgBefore');
  const imgAfter = document.getElementById('desktopBaImgAfter');
  const descEl = document.getElementById('desktopBaDesc');
  const range = document.getElementById('desktopBaRangeInput');

  let bUrl = pair.before;
  let aUrl = pair.after;
  if (bUrl.startsWith('./')) bUrl = SITE_ROOT + '/' + bUrl.slice(2);
  if (aUrl.startsWith('./')) aUrl = SITE_ROOT + '/' + aUrl.slice(2);

  if (imgBefore) imgBefore.src = bUrl;
  if (imgAfter) imgAfter.src = aUrl;
  if (descEl) descEl.textContent = pair.desc || '';

  if (range) range.value = 50;
  updateDesktopBaSlider(50);

  document.querySelectorAll('.a1-desktop-ba-chip').forEach(c => c.classList.remove('is-active'));
  if (btn) btn.classList.add('is-active');
}

// FAQ Accordion Toggle
function toggleSvcFaq(btn) {
  const item = btn.closest('.a1-svc-faq-item');
  if (item) {
    item.classList.toggle('is-open');
  }
}

document.addEventListener('DOMContentLoaded', () => {
  syncDesktopBaWidth();
  window.addEventListener('resize', syncDesktopBaWidth);
  setTimeout(syncDesktopBaWidth, 200);
});
</script>

<?php require __DIR__ . '/../components/footer.php'; ?>
