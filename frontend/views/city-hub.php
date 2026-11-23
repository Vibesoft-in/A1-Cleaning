<?php
/**
 * City Hub View: /{city}/ (e.g. /kashipur/, /jaspur/, /ramnagar/)
 * Serves as the localized authority anchor for all 9 services in that city
 */

if (empty($currentCityData)) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$cityName = $currentCityData['name'];
$citySlug = $currentCityData['slug'];

$pageTitle = "Cleaning Services in {$cityName} | A1 Cleaning";
$pageDescription = "All cleaning services in {$cityName}: home, kitchen, sofa, carpet, water tank & commercial. Book online or call " . BUSINESS_PHONE . " today.";
$canonicalUrl = SeoHelper::getCanonicalUrl($citySlug);

// Schema for City Hub
$cityHubSchema = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "Service",
            "name" => "Cleaning Services in {$cityName}",
            "provider" => [
                "@id" => CANONICAL_DOMAIN . "/#business"
            ],
            "areaServed" => [
                "@type" => "City",
                "name" => $cityName,
                "containedInPlace" => [
                    "@type" => "State",
                    "name" => "Uttarakhand"
                ],
                "geo" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => $currentCityData['lat'],
                    "longitude" => $currentCityData['lng']
                ]
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
                    "name" => "{$cityName} Cleaning Services",
                    "item" => $canonicalUrl
                ]
            ]
        ]
    ]
];
$pageSchemaJson = json_encode($cityHubSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

require __DIR__ . '/../components/header.php';
?>



<section class="hero-section">
  <div class="container">
    <div style="max-width: 760px;">
      <h1>Professional Cleaning Services in <?= htmlspecialchars($cityName) ?></h1>
      <p class="hero-lead">
        <?= htmlspecialchars($currentCityData['hero_subtitle']) ?> Doorstep mechanized cleaning with transparent pricing and verified personnel.
      </p>

      <div class="d-flex align-center gap-2 flex-wrap" style="margin-top: 1.5rem;">
        <a href="<?= SITE_URL ?>/book-now/?city=<?= $citySlug ?>" class="btn btn-primary">Book Service in <?= htmlspecialchars($cityName) ?></a>
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-dark"><span class="material-symbols-outlined icon-sm">call</span> Call <?= BUSINESS_PHONE ?></a>
        <a href="https://wa.me/917906366271?text=<?= rawurlencode("Hi A1 Cleaning, I need a cleaning quote in {$cityName}.") ?>" target="_blank" rel="noopener" class="btn btn-whatsapp"><span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Direct Answer Box -->
<section style="padding: 1.5rem 0; background: #fff;">
  <div class="container">
    <div class="direct-answer-box">
      <h2>Top Cleaning Company in <?= htmlspecialchars($cityName) ?></h2>
      <p>
        <strong>A1 Cleaning</strong> is <?= htmlspecialchars($cityName) ?>'s leading professional cleaning service provider. We offer comprehensive solutions for home deep cleaning, sofa shampooing, water tank disinfection, bathroom descaling, and commercial office cleaning. Call <strong><a href="tel:<?= BUSINESS_PHONE_RAW ?>"><?= BUSINESS_PHONE ?></a></strong> for rapid booking and verified team dispatch.
      </p>
    </div>
  </div>
</section>

<!-- 9 Services in this City -->
<section class="section section-bg-light">
  <div class="container">
    <div class="section-title">
      <h2>All Services Available in <?= htmlspecialchars($cityName) ?></h2>
      <p>Click any service below to explore specific checklists, pricing, and procedures for <?= htmlspecialchars($cityName) ?>.</p>
    </div>

    <div class="services-grid">
      <?php foreach ($servicesList as $sSlug => $sData): ?>
        <article class="service-card">
          <div class="service-card-icon"><span class="material-symbols-outlined icon-md">cleaning_services</span></div>
          <h3><?= htmlspecialchars($sData['name']) ?> in <?= htmlspecialchars($cityName) ?></h3>
          <p><?= htmlspecialchars($sData['short_desc']) ?></p>
          <div class="service-card-footer">
            <span class="service-price">From <?= htmlspecialchars($sData['starting_price']) ?></span>
            <a href="<?= SITE_URL ?>/<?= $citySlug ?>/<?= $sSlug ?>/" class="btn btn-primary" style="min-height: 38px; padding: 0.4rem 0.9rem; font-size: 0.85rem;">
              Book <?= htmlspecialchars($sData['name']) ?> <span class="material-symbols-outlined icon-sm">arrow_forward</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Local Areas Covered -->
<section class="section">
  <div class="container">
    <div class="section-title">
      <h2>Local Areas &amp; Sectors We Cover in <?= htmlspecialchars($cityName) ?></h2>
      <p>Our rapid-response mobile cleaning van delivers on-demand doorstep service to all major neighborhoods.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; max-width: 900px; margin: 0 auto;">
      <?php foreach ($currentCityData['key_areas'] as $area): ?>
        <div style="background: var(--color-light-bg); padding: 1rem; border-radius: var(--radius-sm); border: 1px solid var(--color-border); font-weight: 600; color: var(--color-primary); text-align: center; display: flex; align-items: center; justify-content: center; gap: 0.35rem;">
          <span class="material-symbols-outlined icon-sm" style="color: var(--color-fresh-green);">location_on</span> <?= htmlspecialchars($area) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

