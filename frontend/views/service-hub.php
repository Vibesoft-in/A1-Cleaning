<?php
/**
 * Generic Service Hub View: /services/{service}/ (e.g. /services/sofa-cleaning/)
 * Full Desktop & Mobile Standalone Service Detail Page
 * Features HD Media/Video, Interactive Packages, Inclusions/Exclusions, 
 * Real Before/After Slider, Add-ons, Reviews & Direct Booking Funnel.
 */

require_once __DIR__ . '/../components/icons.php';

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
$hasExplicitPkgParam = isset($_GET['package']);
$selectedPkgIdx = $hasExplicitPkgParam ? (int)$_GET['package'] : 0;
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
              <?= getThemeIcon('whatsapp', 17, '#FFFFFF') ?>
              <span>WhatsApp</span>
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
          // Resolve data-file path placeholders
          $resolveSvcPath = function($path) {
              if (empty($path)) return '';
              if (strpos($path, '<?= SITE_URL ?>') === 0) {
                  return SITE_URL . substr($path, strlen('<?= SITE_URL ?>'));
              }
              if (strpos($path, './') === 0) {
                  return SITE_URL . '/' . substr($path, 2);
              }
              return $path;
          };
          $heroThumb = $resolveSvcPath($heroThumb);
          $heroVideo = $resolveSvcPath($heroVideo);
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
     2. PACKAGES SELECTION SECTION (Full Always-Visible Spec Cards)
     ========================================================================= -->
<section class="section" id="packagesSection">
  <div class="container">
    <div class="section-title text-center">
      <h2><?= htmlspecialchars($serviceName) ?> Packages</h2>
      <p style="font-size: 0.9rem; color: #556B64; margin: 0.35rem 0 0;">Select a package to book — full specifications shown below each plan</p>
    </div>

    <div class="a1-svc-packages-grid">
      <?php
      $defaultExcludesFallback = [
        'Structural civil repairs and tile replacement are not included',
        'Hazardous areas beyond safe human reach are not included',
        'Internal motor repairs or plumbing replacements are not included'
      ];
      foreach ($packages as $pIdx => $pkg):
        $isSelected = ($pIdx === $selectedPkgIdx);
        $pkgThumb = !empty($pkg['thumb']) ? $pkg['thumb'] : $heroThumb;
        $pkgThumb = $resolveSvcPath($pkgThumb);
        $pkgIncItems = !empty($pkg['includes']) ? $pkg['includes'] : ($currentServiceData['checklist'] ?? []);
        $pkgExcItems = !empty($pkg['excludes']) ? $pkg['excludes'] : $defaultExcludesFallback;
      ?>
        <div class="a1-svc-pkg-card <?= $isSelected ? 'is-selected' : '' ?> <?= !empty($pkg['featured']) ? 'is-featured' : '' ?>" id="svc-pkg-card-<?= $pIdx ?>" onclick="selectPackage(<?= $pIdx ?>)" role="button" tabindex="0" aria-pressed="<?= $isSelected ? 'true' : 'false' ?>">
          <?php if (!empty($pkg['featured'])): ?>
            <div class="a1-svc-pkg-ribbon">Most Popular</div>
          <?php endif; ?>

          <!-- Package Image -->
          <div class="a1-svc-pkg-img-wrap">
            <img src="<?= htmlspecialchars($pkgThumb) ?>" alt="<?= htmlspecialchars($pkg['title']) ?>" class="a1-svc-pkg-img" loading="lazy">
            <span class="a1-svc-pkg-tier"><?= htmlspecialchars($pkg['tier'] ?? 'Package Plan') ?></span>
          </div>

          <!-- Package Header & Meta -->
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

            <!-- Select Button -->
            <button
              type="button"
              class="btn-a1-select-pkg <?= $isSelected ? 'is-active' : '' ?>"
              id="pkg-trigger-<?= $pIdx ?>"
              aria-pressed="<?= $isSelected ? 'true' : 'false' ?>"
              onclick="event.stopPropagation(); selectPackage(<?= $pIdx ?>)">
              <span class="material-symbols-outlined btn-status-icon"><?= $isSelected ? 'check_circle' : 'radio_button_unchecked' ?></span>
              <span class="btn-label-text"><?= $isSelected ? 'Selected' : 'Select Plan' ?></span>
            </button>
          </div>

          <!-- Package Specifications — Always Visible (single unified card) -->
          <div class="a1-svc-pkg-specs" id="pkg-specs-<?= $pIdx ?>">
            <div class="a1-svc-pkg-dropdown-inner">
              <div class="a1-pkg-specs-head">
                <span>Package Specifications</span>
                <span class="a1-pkg-specs-badge">Included &amp; Excluded</span>
              </div>

              <!-- Single unified list: green ticks + red crosses together -->
              <div class="a1-pkg-spec-group a1-pkg-spec-unified">
                <div class="a1-pkg-spec-group-title">
                  <span class="material-symbols-outlined" aria-hidden="true">check_circle</span>
                  <span>What is Included</span>
                </div>
                <ul class="a1-pkg-spec-items">
                  <?php foreach ($pkgIncItems as $incItem): ?>
                    <li>
                      <span class="material-symbols-outlined spec-tick" aria-hidden="true">check_circle</span>
                      <span><?= htmlspecialchars($incItem) ?></span>
                    </li>
                  <?php endforeach; ?>
                  <?php foreach ($pkgExcItems as $excItem): ?>
                    <li>
                      <span class="material-symbols-outlined spec-cross" aria-hidden="true">cancel</span>
                      <span><?= htmlspecialchars($excItem) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <a href="<?= SITE_URL ?>/book-now/?service=<?= $serviceSlug ?>&package=<?= $pIdx ?>" class="btn-a1-pkg-dropdown-book" id="pkg-book-btn-<?= $pIdx ?>">
                <span>Book <?= htmlspecialchars($pkg['title']) ?> (₹<?= number_format($pkg['price']) ?>)</span>
                <span class="material-symbols-outlined icon-xs" aria-hidden="true">arrow_forward</span>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     4. REAL BEFORE & AFTER TRANSFORMATIONS (Auto-Looping & Swipeable Carousel)
     ========================================================================= -->
<?php if (!empty($beforeAfterPairs)):
  $baCount = count($beforeAfterPairs);
  $baRepeatsPerHalf = max(1, (int)ceil(6 / $baCount));
?>
<section class="section section-bg-light" id="beforeAfterSection" style="padding-top: 3.5rem; padding-bottom: 3.5rem; overflow: hidden;">
  <div class="container">
    <div class="section-title text-center">
      <h2>Real Before &amp; After Transformations</h2>
      <p class="a1-ba-section-sub">Auto-looping left to right &bull; Swipe or drag in either direction &bull; Slide any photo to compare</p>
    </div>
  </div>

  <div class="a1-ba-marquee-shell">
    <div class="a1-ba-marquee-viewport" id="baMarqueeViewport" aria-label="Before and after transformations gallery">
      <div class="a1-ba-marquee-track" id="baMarqueeTrack">
        <?php for ($half = 0; $half < 2; $half++): ?>
          <?php for ($rep = 0; $rep < $baRepeatsPerHalf; $rep++): ?>
            <?php foreach ($beforeAfterPairs as $bIdx => $pair):
              $pairBefore = preg_replace('/^\.\//', SITE_URL . '/', $pair['before']);
              $pairAfter = preg_replace('/^\.\//', SITE_URL . '/', $pair['after']);
              $pairTitle = $pair['title'] ?? 'Transformation';
              $uid = "{$half}-{$rep}-{$bIdx}";
            ?>
              <article class="a1-ba-card" id="ba-card-<?= $uid ?>" data-ba-half="<?= $half ?>">
                <div class="a1-ba-stage" style="--ba-split: 50%;">
                  <!-- After Clean Image (Base) -->
                  <img src="<?= htmlspecialchars($pairAfter) ?>" alt="After cleaning: <?= htmlspecialchars($pairTitle) ?>" class="a1-ba-img-after" loading="eager" decoding="async" draggable="false">

                  <!-- Before Clean Image (Clipped Overlay) -->
                  <div class="a1-ba-before-layer" aria-hidden="true">
                    <img src="<?= htmlspecialchars($pairBefore) ?>" alt="" class="a1-ba-img-before" loading="eager" decoding="async" draggable="false">
                  </div>

                  <!-- Unclipped Comparison Labels -->
                  <span class="a1-ba-badge badge-before" aria-hidden="true">BEFORE</span>
                  <span class="a1-ba-badge badge-after" aria-hidden="true">AFTER</span>

                  <!-- Accessible Range Input -->
                  <label class="a1-sr-only" for="ba-range-<?= $uid ?>">Compare before and after for <?= htmlspecialchars($pairTitle) ?></label>
                  <input type="range" min="0" max="100" value="50" class="a1-ba-range" id="ba-range-<?= $uid ?>" aria-valuetext="50% Before, 50% After" oninput="updateBaCardSlider(this)">

                  <!-- Slider Divider Handle (after range input so :focus-visible + .a1-ba-handle highlights knob) -->
                  <div class="a1-ba-handle" aria-hidden="true">
                    <div class="a1-ba-knob">
                      <span class="material-symbols-outlined">swap_horiz</span>
                    </div>
                  </div>
                </div>

                <div class="a1-ba-card-head">
                  <span class="a1-ba-head-icon" aria-hidden="true">
                    <span class="material-symbols-outlined"><?= htmlspecialchars($pair['icon'] ?? 'compare') ?></span>
                  </span>
                  <h3><?= htmlspecialchars($pairTitle) ?></h3>
                </div>

                <div class="a1-ba-card-desc">
                  <p><?= htmlspecialchars($pair['desc'] ?? '') ?></p>
                  <span class="a1-ba-hint">
                    <span class="material-symbols-outlined" aria-hidden="true">touch_app</span>
                    <span>Slide to compare &bull; Drag card</span>
                  </span>
                </div>
              </article>
            <?php endforeach; ?>
          <?php endfor; ?>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================================
     5. RECOMMENDED ADD-ONS SECTION
     ========================================================================= -->
<?php if (!empty($addons)): ?>
<section class="section section-bg-light" id="addonsSection" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
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
        <div class="rating-big" id="svcRatingBig"><?= htmlspecialchars($activePkg['rating'] ?? '4.85') ?></div>
        <div class="rating-stars">
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
          <span class="material-symbols-outlined filled">star</span>
        </div>
        <span class="rating-count-text" id="svcRatingCount">Based on <?= htmlspecialchars($activePkg['reviewCount'] ?? '24') ?> verified reviews</span>

        <div class="rating-breakdown-bars" id="svcRatingBars">
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
      <div class="a1-svc-reviews-col">
        <?php
        $orderedReviews = [];
        $seenRevKeys = [];
        $pkgOrder = array_unique(array_merge([$selectedPkgIdx], array_keys($packages)));
        foreach ($pkgOrder as $pi) {
          $pkgItem = $packages[$pi] ?? null;
          if (!$pkgItem || empty($pkgItem['reviews'])) continue;
          foreach ($pkgItem['reviews'] as $r) {
            $rk = strtolower(trim($r['name'] ?? '') . '|' . trim($r['comment'] ?? ''));
            if (isset($seenRevKeys[$rk])) continue;
            $seenRevKeys[$rk] = true;
            $r['plan'] = $pkgItem['title'] ?? $serviceName;
            $orderedReviews[] = $r;
          }
        }
        if (empty($orderedReviews)) {
          $orderedReviews = [
            ['name' => 'Rahul Chavan', 'date' => 'October 30, 2026', 'stars' => 5, 'plan' => $serviceName, 'comment' => 'Very satisfied with the thorough cleaning! Removed deep hard stains that other local cleaners could never clear.'],
            ['name' => 'Pooja Agarwal', 'date' => 'November 12, 2026', 'stars' => 5, 'plan' => $serviceName, 'comment' => 'Professional staff arrived on time with heavy machines. Transparent pricing with no hidden charges.'],
            ['name' => 'Amit Negi', 'date' => 'November 18, 2026', 'stars' => 4, 'plan' => $serviceName, 'comment' => 'Great work and polite technicians. Did a complete joint inspection before leaving.'],
            ['name' => 'Deepak Rawat', 'date' => 'November 21, 2026', 'stars' => 5, 'plan' => $serviceName, 'comment' => 'Left the entire space feeling brand new and smelling fresh. Will book regularly.'],
            ['name' => 'Neha Bisht', 'date' => 'November 19, 2026', 'stars' => 5, 'plan' => $serviceName, 'comment' => 'Booked in Kashipur—quick doorstep arrival, neat uniform crew, and zero mess left behind.'],
            ['name' => 'Suresh Joshi', 'date' => 'November 16, 2026', 'stars' => 5, 'plan' => $serviceName, 'comment' => 'Eco-safe chemicals with zero strong odor. Highly recommended for family homes.'],
          ];
        }
        $initialReviewLimit = 6;
        $totalReviewCards = count($orderedReviews);
        ?>
        <div class="a1-svc-reviews-stream" id="svcReviewsStream">
          <?php foreach ($orderedReviews as $rIdx => $rev):
            $isHiddenExtra = ($rIdx >= $initialReviewLimit);
          ?>
            <div class="a1-svc-review-card <?= $isHiddenExtra ? 'is-extra-review' : '' ?>" <?= $isHiddenExtra ? 'hidden' : '' ?>>
              <div class="review-header">
                <div class="reviewer-avatar">
                  <span class="material-symbols-outlined">person</span>
                </div>
                <div class="review-meta-wrap">
                  <h4 class="reviewer-name"><?= htmlspecialchars($rev['name']) ?></h4>
                  <span class="review-date"><?= htmlspecialchars($rev['date']) ?> &bull; Verified Client</span>
                </div>
              </div>
              <div class="review-stars-row">
                <?php for ($s = 1; $s <= 5; $s++): ?>
                  <span class="material-symbols-outlined star-icon <?= ($s <= $rev['stars']) ? 'filled' : 'empty' ?>">star</span>
                <?php endfor; ?>
                <?php if (!empty($rev['plan'])): ?>
                  <span class="review-plan-pill"><?= htmlspecialchars($rev['plan']) ?></span>
                <?php endif; ?>
              </div>
              <p class="review-comment"><?= htmlspecialchars($rev['comment']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <?php if ($totalReviewCards > $initialReviewLimit): ?>
          <div class="a1-svc-reviews-more-wrap">
            <button type="button" class="btn-a1-reviews-more" id="svcReviewsToggleBtn" aria-expanded="false" onclick="toggleAllSvcReviews()">
              <span class="btn-reviews-more-text">Show All <?= $totalReviewCards ?> Reviews</span>
              <span class="material-symbols-outlined" aria-hidden="true">expand_more</span>
            </button>
          </div>
        <?php endif; ?>
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
          <?= getThemeIcon('whatsapp', 17, '#FFFFFF') ?>
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
  background: linear-gradient(180deg, #133D31 0%, #0B2922 80%);
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

/* Packages Grid & Full Always-Visible Spec Cards */
.a1-svc-packages-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 1.5rem;
  align-items: stretch;
  max-width: 1120px;
  margin: 0 auto;
}
.a1-svc-pkg-card {
  background: #FFFFFF;
  border: 1.5px solid #E5E7EB;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(11, 41, 34, 0.04);
  transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
  position: relative;
  display: grid;
  grid-row: span 3;
  grid-template-rows: auto auto 1fr;
  grid-template-rows: subgrid;
  row-gap: 0;
  cursor: pointer;
}
.a1-svc-pkg-card:hover {
  border-color: #22A06B;
  transform: translateY(-3px);
  box-shadow: 0 10px 28px rgba(11, 41, 34, 0.11);
}
.a1-svc-pkg-card.is-selected {
  border-color: #22A06B;
  box-shadow: 0 0 0 3px rgba(34, 160, 107, 0.18), 0 12px 28px rgba(11, 41, 34, 0.12);
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
  height: 200px;
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
}
.a1-svc-pkg-header {
  display: flex;
  align-items: flex-start;
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
  height: 38px;
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

/* Always-Visible Package Specifications Panel */
.a1-svc-pkg-specs {
  flex: 1;
  display: flex;
  flex-direction: column;
}
.a1-svc-pkg-specs .a1-svc-pkg-dropdown-inner {
  border-top: 1px dashed #D6E8DE;
  background: #FAFDFB;
  flex: 1;
  display: flex;
  flex-direction: column;
}
.a1-svc-pkg-specs .btn-a1-pkg-dropdown-book {
  margin-top: auto;
}
.a1-svc-pkg-dropdown-inner {
  border-top: 1px dashed #D6E8DE;
  background: #FAFDFB;
  padding: 1.1rem 1.1rem 1.1rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}
.a1-pkg-specs-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  font-size: 0.78rem;
  font-weight: 800;
  color: #0B2922;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.a1-pkg-specs-badge {
  font-size: 0.66rem;
  font-weight: 700;
  text-transform: none;
  letter-spacing: 0;
  background: #EAF3EE;
  color: #0B6B44;
  border: 1px solid #C6E3D3;
  padding: 2px 8px;
  border-radius: 999px;
}
.a1-pkg-spec-group {
  border-radius: 10px;
  padding: 0.65rem 0.75rem;
}
.a1-pkg-spec-group.is-included {
  background: #F1FBF5;
  border: 1px solid #C6EAD6;
}
.a1-pkg-spec-group.is-excluded {
  background: #FEF5F5;
  border: 1px solid #F9D2D2;
}
/* Unified single card for both included & excluded */
.a1-pkg-spec-group.a1-pkg-spec-unified {
  background: #F8FAFB;
  border: 1px solid #E5E7EB;
  padding: 1rem 1rem;
  flex: 1;
}
.a1-pkg-spec-group-title {
  display: flex;
  align-items: center;
  gap: 0.4rem;
  font-size: 0.78rem;
  font-weight: 800;
  margin-bottom: 0.45rem;
}
.a1-pkg-spec-group.is-included .a1-pkg-spec-group-title {
  color: #0B6B44;
}
.a1-pkg-spec-group.is-excluded .a1-pkg-spec-group-title {
  color: #B91C1C;
}
.a1-pkg-spec-group.a1-pkg-spec-unified .a1-pkg-spec-group-title {
  color: #0B6B44;
}
.a1-pkg-spec-group-title .material-symbols-outlined {
  font-size: 16px;
}
.a1-pkg-spec-items {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 0.65rem;
}
.a1-pkg-spec-items li {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
  font-size: 0.82rem;
  line-height: 1.55;
  color: #1F2937;
  padding-bottom: 0.35rem;
  border-bottom: 1px solid rgba(0,0,0,0.04);
}
.a1-pkg-spec-items li:last-child {
  border-bottom: none;
  padding-bottom: 0;
}
.a1-pkg-spec-items li .spec-tick {
  color: #16A34A;
  font-size: 16px;
  flex-shrink: 0;
  margin-top: 1px;
}
.a1-pkg-spec-items li .spec-cross {
  color: #DC2626;
  font-size: 16px;
  flex-shrink: 0;
  margin-top: 1px;
}
.btn-a1-pkg-dropdown-book {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  background: #0B2922;
  color: #FFFFFF !important;
  font-size: 0.8rem;
  font-weight: 800;
  line-height: 1.25;
  text-align: center;
  min-height: 50px;
  padding: 0.55rem 0.9rem;
  border-radius: 8px;
  text-decoration: none;
  transition: background 0.2s ease;
}
.btn-a1-pkg-dropdown-book:hover {
  background: #22A06B;
}

/* Before & After Infinite Loop & Bidirectional Swipe Carousel */
.a1-ba-section-sub {
  margin-top: 0.45rem;
  margin-bottom: 0;
  color: #52635D;
  font-size: 0.92rem;
}
.a1-ba-marquee-shell {
  position: relative;
  width: 100%;
  margin: 0.35rem auto 0;
  padding: 0;
}
.a1-ba-marquee-viewport {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding: 0.75rem 0 1.25rem;
  cursor: grab;
  user-select: none;
  -webkit-user-select: none;
  touch-action: pan-y;
}
.a1-ba-marquee-viewport.is-dragging {
  cursor: grabbing;
}
.a1-ba-marquee-track {
  display: flex;
  align-items: stretch;
  gap: 1.35rem;
  width: max-content;
  will-change: transform;
}
.a1-ba-card {
  flex: 0 0 340px;
  background: #FFFFFF;
  border: 1px solid #E2EAE5;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 24px rgba(11, 41, 34, 0.08);
  display: flex;
  flex-direction: column;
  transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
}
.a1-ba-card:hover {
  transform: translateY(-2px);
  border-color: #B7DEC8;
  box-shadow: 0 12px 28px rgba(11, 41, 34, 0.12);
}
.a1-ba-stage {
  position: relative;
  inline-size: 100%;
  aspect-ratio: 4 / 3;
  overflow: clip;
  background: #0B2922;
  user-select: none;
  cursor: ew-resize;
  --ba-split: 50%;
}
.a1-ba-stage:has(.a1-ba-range:focus-visible) {
  outline: 3px solid #22A06B;
  outline-offset: -3px;
}
.a1-ba-img-after,
.a1-ba-img-before {
  position: absolute;
  inset: 0;
  inline-size: 100%;
  block-size: 100%;
  object-fit: cover;
  display: block;
  pointer-events: none;
}
.a1-ba-before-layer {
  position: absolute;
  inset: 0;
  clip-path: inset(0 calc(100% - var(--ba-split, 50%)) 0 0);
  pointer-events: none;
  z-index: 2;
}
.a1-ba-badge {
  position: absolute;
  inset-block-start: 10px;
  padding: 3px 9px;
  font-size: 0.65rem;
  font-weight: 800;
  letter-spacing: 0.45px;
  border-radius: 5px;
  pointer-events: none;
  z-index: 4;
}
.a1-ba-badge.badge-after {
  inset-inline-end: 10px;
  background: rgba(34, 160, 107, 0.94);
  color: #FFFFFF;
}
.a1-ba-badge.badge-before {
  inset-inline-start: 10px;
  background: rgba(11, 41, 34, 0.9);
  color: #FFFFFF;
}
.a1-ba-handle {
  position: absolute;
  inset-block: 0;
  inset-inline-start: var(--ba-split, 50%);
  inline-size: 2.5px;
  background: #FFFFFF;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  pointer-events: none;
  z-index: 5;
  transform: translateX(-50%);
}
.a1-ba-knob {
  position: absolute;
  inset-block-start: 50%;
  inset-inline-start: 50%;
  transform: translate(-50%, -50%);
  inline-size: 32px;
  block-size: 32px;
  border-radius: 50%;
  background: #FFFFFF;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #0B2922;
  transition: box-shadow 0.15s ease, background 0.15s ease;
}
.a1-ba-knob .material-symbols-outlined {
  font-size: 17px;
}
.a1-ba-range {
  position: absolute;
  inset: 0;
  inline-size: 100%;
  block-size: 100%;
  opacity: 0;
  cursor: ew-resize;
  touch-action: pan-y;
  z-index: 6;
  margin: 0;
}
.a1-ba-range:focus-visible + .a1-ba-handle .a1-ba-knob {
  background: #ECFDF5;
  box-shadow: 0 0 0 4px rgba(34, 160, 107, 0.45), 0 2px 10px rgba(0, 0, 0, 0.35);
}
.a1-sr-only {
  position: absolute;
  inline-size: 1px;
  block-size: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip-path: inset(50%);
  white-space: nowrap;
  border: 0;
}
.a1-ba-card-head {
  padding: 0.95rem 1.05rem 0.4rem;
  display: flex;
  align-items: center;
  gap: 0.55rem;
}
.a1-ba-head-icon {
  inline-size: 30px;
  block-size: 30px;
  border-radius: 8px;
  background: #EAF6EE;
  color: #16794F;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.a1-ba-head-icon .material-symbols-outlined {
  font-size: 17px;
}
.a1-ba-card-head h3 {
  margin: 0;
  font-size: 0.98rem;
  font-weight: 800;
  line-height: 1.28;
  color: #0B2922;
}
.a1-ba-card-desc {
  padding: 0 1.05rem 1rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  gap: 0.65rem;
  flex: 1;
}
.a1-ba-card-desc p {
  margin: 0;
  font-size: 0.82rem;
  line-height: 1.48;
  color: #52635D;
}
.a1-ba-hint {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  font-size: 0.74rem;
  font-weight: 700;
  color: #16794F;
}
.a1-ba-hint .material-symbols-outlined {
  font-size: 15px;
}
@media (max-width: 640px) {
  .a1-ba-card {
    flex: 0 0 288px;
  }
}

/* Add-ons Grid (Symmetric 3x2 Desktop, 2x3 Tablet, 1-Col Mobile) */
.a1-svc-addons-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 1rem;
  max-width: 1080px;
  margin: 0 auto;
}
@media (max-width: 991px) {
  .a1-svc-addons-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (max-width: 640px) {
  .a1-svc-addons-grid {
    grid-template-columns: 1fr;
  }
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
.a1-svc-reviews-col {
  display: flex;
  flex-direction: column;
  gap: 1rem;
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
  display: flex;
  flex-direction: column;
}
.a1-svc-review-card[hidden] {
  display: none;
}
.review-stars-row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 2px;
  margin-bottom: 0.5rem;
}
.review-plan-pill {
  margin-left: auto;
  font-size: 0.67rem;
  font-weight: 700;
  color: #16794F;
  background: #EAF6EE;
  border: 1px solid #C6E3D3;
  padding: 1px 7px;
  border-radius: 999px;
  max-width: 145px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.a1-svc-reviews-more-wrap {
  display: flex;
  justify-content: center;
  margin-top: 0.25rem;
}
.btn-a1-reviews-more {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  padding: 0.55rem 1.2rem;
  border-radius: 999px;
  border: 1px solid #C6E3D3;
  background: #F4FAF6;
  color: #0B2922;
  font-size: 0.82rem;
  font-weight: 700;
  cursor: pointer;
  transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
}
.btn-a1-reviews-more:hover {
  background: #22A06B;
  border-color: #22A06B;
  color: #FFFFFF;
}
.btn-a1-reviews-more .material-symbols-outlined {
  font-size: 18px;
  transition: transform 0.2s ease;
}
.btn-a1-reviews-more.is-expanded .material-symbols-outlined {
  transform: rotate(180deg);
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
  .btn-a1-hero-wa {
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
const SITE_ROOT = "<?= SITE_URL ?>";

let currentSelectedPkgIndex = <?= $selectedPkgIdx ?>;

function syncBookingLinksAndSummary() {
  const pkg = SVC_PACKAGES[currentSelectedPkgIndex];
  if (!pkg) return;

  const combinedPrice = Number(pkg.price) || 0;

  const bookBtn = document.getElementById('heroBookNowBtn');
  if (bookBtn) {
    bookBtn.href = `${SITE_ROOT}/book-now/?service=${SVC_SLUG}&package=${currentSelectedPkgIndex}`;
  }

  const finalBtn = document.getElementById('finalBookBtn');
  if (finalBtn) {
    finalBtn.href = `${SITE_ROOT}/book-now/?service=${SVC_SLUG}&package=${currentSelectedPkgIndex}`;
    finalBtn.innerHTML = `<span class="material-symbols-outlined">calendar_month</span><span>Book Online (₹${combinedPrice.toLocaleString('en-IN')})</span>`;
  }

  document.querySelectorAll('.btn-a1-pkg-dropdown-book').forEach((link, idx) => {
    link.href = `${SITE_ROOT}/book-now/?service=${SVC_SLUG}&package=${idx}`;
  });

  const waBtn = document.getElementById('heroWaBtn');
  if (waBtn) {
    const waMsg = `Hi A1 Cleaning, I want to book ${SVC_NAME} (${pkg.title}) for ₹${combinedPrice}.`;
    waBtn.href = `https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=${encodeURIComponent(waMsg)}`;
  }
}

function openPackagePanel(panel) { /* no-op: specs always visible */ }
function closePackagePanel(panel) { /* no-op: specs always visible */ }

function setButtonState(btn, isSelected) {
  if (!btn) return;
  btn.classList.toggle('is-active', isSelected);
  btn.setAttribute('aria-pressed', isSelected ? 'true' : 'false');
  const statusIcon = btn.querySelector('.btn-status-icon');
  const labelSpan = btn.querySelector('.btn-label-text');
  if (statusIcon) statusIcon.textContent = isSelected ? 'check_circle' : 'radio_button_unchecked';
  if (labelSpan) labelSpan.textContent = isSelected ? 'Selected' : 'Select Plan';
}

function selectPackage(index) {
  if (!SVC_PACKAGES[index]) return;
  currentSelectedPkgIndex = index;
  const pkg = SVC_PACKAGES[index];

  document.querySelectorAll('.a1-svc-pkg-card').forEach((card, i) => {
    const btn = document.getElementById('pkg-trigger-' + i);
    const isTarget = (i === index);
    card.classList.toggle('is-selected', isTarget);
    card.setAttribute('aria-pressed', isTarget ? 'true' : 'false');
    setButtonState(btn, isTarget);
  });

  // Update Hero Price & Duration
  const hPrice = document.getElementById('heroPriceDisplay');
  const hDur = document.getElementById('heroDurationDisplay');
  if (hPrice) hPrice.textContent = '₹' + Number(pkg.price).toLocaleString('en-IN');
  if (hDur) hDur.textContent = pkg.duration || '60 mins';

  // Sync Package into Booking & WhatsApp URLs
  syncBookingLinksAndSummary();
  syncPackageReviewsAndSummary(index);
}

let allSvcReviewsExpanded = false;

function escapeHtmlSafe(str) {
  return String(str || '').replace(/[&<>"']/g, (m) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
  }[m]));
}

function syncPackageReviewsAndSummary(pkgIdx) {
  const pkg = SVC_PACKAGES[pkgIdx];
  if (!pkg) return;

  const big = document.getElementById('svcRatingBig');
  const cntEl = document.getElementById('svcRatingCount');
  const barsEl = document.getElementById('svcRatingBars');
  if (big && pkg.rating) big.textContent = pkg.rating;
  if (cntEl && pkg.reviewCount) cntEl.textContent = `Based on ${pkg.reviewCount} verified reviews`;
  if (barsEl && pkg.breakdown) {
    const bd = pkg.breakdown;
    const tot = [5, 4, 3, 2, 1].reduce((s, st) => s + (Number(bd[st]) || 0), 0) || 24;
    barsEl.innerHTML = [5, 4, 3, 2, 1].map((star) => {
      const c = Number(bd[star]) || 0;
      const pct = Math.round((c / tot) * 100);
      return `<div class="bar-row"><span class="star-lbl">${star} <span class="material-symbols-outlined" style="font-size: 13px;">star</span></span><div class="bar-track"><div class="bar-fill" style="width: ${pct}%;"></div></div><span class="bar-count">${c}</span></div>`;
    }).join('');
  }

  const stream = document.getElementById('svcReviewsStream');
  if (!stream) return;

  const order = [pkgIdx, ...SVC_PACKAGES.map((_, i) => i).filter((i) => i !== pkgIdx)];
  const seen = new Set();
  const list = [];
  order.forEach((i) => {
    const p = SVC_PACKAGES[i];
    if (!p || !Array.isArray(p.reviews)) return;
    p.reviews.forEach((r) => {
      const k = `${(r.name || '').trim().toLowerCase()}|${(r.comment || '').trim().toLowerCase()}`;
      if (!seen.has(k) && r.comment) {
        seen.add(k);
        list.push({ ...r, plan: p.title || SVC_NAME });
      }
    });
  });
  if (!list.length) return;

  const limit = 6;
  stream.innerHTML = list.map((rev, idx) => {
    const hide = !allSvcReviewsExpanded && idx >= limit;
    const starsHtml = [1, 2, 3, 4, 5].map((s) => `<span class="material-symbols-outlined star-icon ${s <= (Number(rev.stars) || 5) ? 'filled' : 'empty'}">star</span>`).join('');
    return `<div class="a1-svc-review-card ${idx >= limit ? 'is-extra-review' : ''}" ${hide ? 'hidden' : ''}>
      <div class="review-header">
        <div class="reviewer-avatar"><span class="material-symbols-outlined">person</span></div>
        <div class="review-meta-wrap">
          <h4 class="reviewer-name">${escapeHtmlSafe(rev.name)}</h4>
          <span class="review-date">${escapeHtmlSafe(rev.date)} &bull; Verified Client</span>
        </div>
      </div>
      <div class="review-stars-row">${starsHtml}<span class="review-plan-pill">${escapeHtmlSafe(rev.plan)}</span></div>
      <p class="review-comment">${escapeHtmlSafe(rev.comment)}</p>
    </div>`;
  }).join('');

  const btn = document.getElementById('svcReviewsToggleBtn');
  if (btn) {
    const lbl = btn.querySelector('.btn-reviews-more-text');
    if (lbl) lbl.textContent = allSvcReviewsExpanded ? 'Show Fewer Reviews' : `Show All ${list.length} Reviews`;
  }
}

function toggleAllSvcReviews() {
  const btn = document.getElementById('svcReviewsToggleBtn');
  const extras = document.querySelectorAll('#svcReviewsStream .is-extra-review');
  if (!btn || !extras.length) return;

  allSvcReviewsExpanded = !allSvcReviewsExpanded;
  extras.forEach((card) => {
    if (allSvcReviewsExpanded) card.removeAttribute('hidden');
    else card.setAttribute('hidden', '');
  });

  btn.classList.toggle('is-expanded', allSvcReviewsExpanded);
  btn.setAttribute('aria-expanded', allSvcReviewsExpanded ? 'true' : 'false');
  const lbl = btn.querySelector('.btn-reviews-more-text');
  const totalCount = document.querySelectorAll('#svcReviewsStream .a1-svc-review-card').length;
  if (lbl) {
    lbl.textContent = allSvcReviewsExpanded ? 'Show Fewer Reviews' : `Show All ${totalCount} Reviews`;
  }
}

function togglePackageDropdown(index) {
  selectPackage(index);
}

function selectDesktopPackage(index) {
  selectPackage(index);
}

// Interactive Before & After Card Sliders
function updateBaCardSlider(input) {
  if (!input) return;
  const pct = Math.min(100, Math.max(0, Number(input.value) || 0));
  const stage = input.closest('.a1-ba-stage');
  if (stage) {
    stage.style.setProperty('--ba-split', pct + '%');
    const bBadge = stage.querySelector('.badge-before');
    const aBadge = stage.querySelector('.badge-after');
    if (bBadge) bBadge.style.opacity = pct < 10 ? '0' : '1';
    if (aBadge) aBadge.style.opacity = pct > 90 ? '0' : '1';
  }
  input.setAttribute('aria-valuetext', `${pct}% Before, ${100 - pct}% After`);
}

// Before & After Seamless Left-to-Right Auto-Loop + Bidirectional Swipe/Drag
(function initBaMarquee() {
  const viewport = document.getElementById('baMarqueeViewport');
  const track = document.getElementById('baMarqueeTrack');
  if (!viewport || !track || track.dataset.baInit === '1') return;
  track.dataset.baInit = '1';

  const cards = Array.from(track.querySelectorAll('.a1-ba-card'));
  const halfCount = Math.floor(cards.length / 2);
  if (!cards.length || halfCount === 0) return;

  const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const AUTO_SPEED_PX_PER_SEC = prefersReducedMotion ? 0 : 42;

  let halfWidth = 0;
  let offset = 0;
  let isDragging = false;
  let isHovering = false;
  let isRangeActive = false;
  let lastX = 0;
  let velocity = 0;
  let lastTime = performance.now();

  function measureHalfWidth() {
    const first = cards[0];
    const secondHalfStart = cards[halfCount];
    if (first && secondHalfStart) {
      const measured = secondHalfStart.offsetLeft - first.offsetLeft;
      if (measured > 0) {
        const wasZero = (halfWidth === 0);
        halfWidth = measured;
        if (wasZero) {
          offset = -halfWidth / 2;
        }
      }
    }
  }

  function wrapOffset() {
    if (halfWidth <= 0) return;
    while (offset >= 0) offset -= halfWidth;
    while (offset < -halfWidth) offset += halfWidth;
  }

  measureHalfWidth();
  window.addEventListener('resize', measureHalfWidth);
  window.addEventListener('load', measureHalfWidth);

  // Pause auto-scroll while hovering or sliding Before/After range dividers
  viewport.addEventListener('mouseenter', () => { isHovering = true; });
  viewport.addEventListener('mouseleave', () => { isHovering = false; });

  const pauseRange = (e) => {
    if (e.target.closest && e.target.closest('.a1-ba-range')) {
      isRangeActive = true;
    }
  };
  const resumeRange = () => { isRangeActive = false; };
  viewport.addEventListener('mousedown', pauseRange);
  viewport.addEventListener('touchstart', pauseRange, { passive: true });
  window.addEventListener('mouseup', resumeRange);
  window.addEventListener('touchend', resumeRange);
  window.addEventListener('touchcancel', resumeRange);

  // Mouse drag anywhere on track/cards (outside the Before/After range slider)
  viewport.addEventListener('mousedown', (e) => {
    if (e.target.closest && e.target.closest('.a1-ba-range')) return;
    isDragging = true;
    lastX = e.clientX;
    velocity = 0;
    viewport.classList.add('is-dragging');
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    const delta = e.clientX - lastX;
    lastX = e.clientX;
    offset += delta;
    velocity = delta * 45;
  });

  window.addEventListener('mouseup', () => {
    if (!isDragging) return;
    isDragging = false;
    viewport.classList.remove('is-dragging');
  });

  // Touch swipe in any horizontal direction
  viewport.addEventListener('touchstart', (e) => {
    if (e.touches.length !== 1) return;
    if (e.target.closest && e.target.closest('.a1-ba-range')) return;
    isDragging = true;
    lastX = e.touches[0].clientX;
    velocity = 0;
  }, { passive: true });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging || e.touches.length !== 1) return;
    const curX = e.touches[0].clientX;
    const delta = curX - lastX;
    lastX = curX;
    offset += delta;
    velocity = delta * 45;
  }, { passive: true });

  window.addEventListener('touchend', () => {
    isDragging = false;
  });

  // Trackpad horizontal wheel support (left & right)
  viewport.addEventListener('wheel', (e) => {
    if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
      e.preventDefault();
      offset -= e.deltaX * 0.85;
      velocity = -e.deltaX * 1.8;
    }
  }, { passive: false });

  function tick(now) {
    const dtSec = Math.min(0.05, Math.max(0.001, (now - lastTime) / 1000));
    lastTime = now;

    if (halfWidth <= 0) measureHalfWidth();

    if (!isDragging) {
      if (Math.abs(velocity) > 3) {
        offset += velocity * dtSec;
        velocity *= Math.pow(0.06, dtSec);
      } else {
        velocity = 0;
        if (!isHovering && !isRangeActive && AUTO_SPEED_PX_PER_SEC > 0) {
          offset += AUTO_SPEED_PX_PER_SEC * dtSec;
        }
      }
    }

    wrapOffset();
    track.style.transform = `translate3d(${offset.toFixed(2)}px, 0, 0)`;
    requestAnimationFrame(tick);
  }

  requestAnimationFrame(tick);
})();

// FAQ Accordion Toggle
function toggleSvcFaq(btn) {
  const item = btn.closest('.a1-svc-faq-item');
  if (item) {
    item.classList.toggle('is-open');
  }
}
</script>

<div class="a1-section-gap-white" aria-hidden="true"></div>

<?php
$footerPrevIsDark = false;
$footerWaveBg = '#FFFFFF';
require __DIR__ . '/../components/footer.php';
?>
