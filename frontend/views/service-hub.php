<?php
/**
 * Generic Service Hub View: /services/{service}/ (e.g. /services/sofa-cleaning/)
 * Targets non-city generic search queries and routes visitors to their local city
 */

if (empty($currentServiceData)) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$serviceName = $currentServiceData['name'];
$serviceSlug = $currentServiceData['slug'];

$pageTitle = "{$serviceName} Services | A1 Cleaning";
$pageDescription = "{$serviceName} across Kashipur, Jaspur and Ramnagar. See what is included and book on " . BUSINESS_PHONE . ".";
$canonicalUrl = SeoHelper::getCanonicalUrl("services/{$serviceSlug}");

$serviceHubSchema = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "Service",
            "name" => "{$serviceName} Services",
            "serviceType" => $currentServiceData['schema_type'],
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



<section class="hero-section">
  <div class="container">
    <div style="max-width: 760px;">
      <h1>Professional <?= htmlspecialchars($serviceName) ?> Services</h1>
      <p class="hero-lead">
        <?= htmlspecialchars($currentServiceData['short_desc']) ?> Available across Kashipur, Jaspur, Ramnagar and surrounding regions.
      </p>

      <div class="d-flex align-center gap-2 flex-wrap" style="margin-top: 1.5rem;">
        <a href="<?= SITE_URL ?>/book-now/?service=<?= $serviceSlug ?>" class="btn btn-primary">Book This Service</a>
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-dark"><span class="material-symbols-outlined icon-sm">call</span> Call <?= BUSINESS_PHONE ?></a>
        <a href="https://wa.me/917906366271?text=<?= rawurlencode("Hi A1 Cleaning, I need a quote for {$serviceName}.") ?>" target="_blank" rel="noopener" class="btn btn-whatsapp"><span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Choose Your City for This Service (Topical Cluster Hub) -->
<section class="section">
  <div class="container">
    <div class="section-title">
      <h2>Choose Your City for <?= htmlspecialchars($serviceName) ?></h2>
      <p>Select your location below for local pricing, colony-level dispatch and same-day availability.</p>
    </div>

    <div class="cities-grid">
      <?php foreach ($citiesList as $cSlug => $cData): ?>
        <div class="city-card">
          <h3><?= htmlspecialchars($serviceName) ?> in <?= htmlspecialchars($cData['name']) ?></h3>
          <p style="color: var(--color-text-muted); font-size: 0.95rem; margin: 0.75rem 0 1.25rem;">
            <?= htmlspecialchars($cData['hero_subtitle']) ?>
          </p>
          <a href="<?= SITE_URL ?>/<?= $cSlug ?>/<?= $serviceSlug ?>/" class="btn btn-primary" style="width: 100%; display: inline-flex; align-items: center; justify-content: center; gap: 0.35rem;">
            View <?= htmlspecialchars($cData['name']) ?> Details <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Service Checklist -->
<section class="section section-bg-light">
  <div class="container">
    <div class="section-title">
      <h2>What is Included in Our <?= htmlspecialchars($serviceName) ?></h2>
      <p>Our deep cleaning protocol covers every hard-to-reach corner with industrial grade equipment.</p>
    </div>

    <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 2rem; max-width: 800px; margin: 0 auto;">
      <ul style="list-style: none; padding: 0; margin: 0;">
        <?php foreach ($currentServiceData['checklist'] as $item): ?>
          <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--color-border); display: flex; align-items: center; gap: 0.6rem;">
            <span class="material-symbols-outlined checklist-icon">check_circle</span>
            <span><?= htmlspecialchars($item) ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>
