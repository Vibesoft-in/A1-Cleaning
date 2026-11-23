<?php
/**
 * Dynamic Master Template for All 27 City x Service Landing Pages
 * Powers: /{city}/{service}/
 * Example: /kashipur/sofa-cleaning/, /ramnagar/water-tank-cleaning/
 */

if (empty($currentCityData) || empty($currentServiceData)) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

$cityName = $currentCityData['name'];
$citySlug = $currentCityData['slug'];
$serviceName = $currentServiceData['name'];
$serviceSlug = $currentServiceData['slug'];

// Formulaic Title, Meta & H1 from SEO Blueprint (Section 3 & 13)
$pageTitle = "{$serviceName} in {$cityName} | A1 Cleaning – Book Today";
$pageDescription = "Professional {$serviceName} in {$cityName}. Trained staff, mechanised equipment, safe chemicals & best rates. Call " . BUSINESS_PHONE . " for a free quote.";
$canonicalUrl = SeoHelper::getCanonicalUrl("{$citySlug}/{$serviceSlug}");

// City-specific FAQs (Combined service general + city localized)
$localizedFaqs = $currentServiceData['faqs'];
$localizedFaqs[] = [
    'q' => "A1 Cleaning {$cityName} ke kin areas mein {$serviceName} provide karti hai?",
    'a' => "Hum poore {$cityName} aur aas-paas ke sabhi pramukh ilaqon (jaise " . implode(', ', array_slice($currentCityData['key_areas'], 0, 5)) . ") mein doorstep {$serviceName} provide karte hain."
];

$pageSchemaJson = SeoHelper::getCityServiceSchema($currentCityData, $currentServiceData, $localizedFaqs);

// Page-wise dynamic WhatsApp text
$waUrl = "https://wa.me/917906366271?text=" . rawurlencode("Hi A1 Cleaning, I need a quote for {$serviceName} in {$cityName}.");

require __DIR__ . '/../components/header.php';
?>



<!-- City-Service Hero -->
<section class="hero-section" style="padding: 2.75rem 0 3.25rem;">
  <div class="container">
    <div style="max-width: 800px;">
      <span style="display: inline-flex; align-items: center; gap: 0.35rem; background: rgba(34, 160, 107, 0.3); border: 1px solid var(--color-accent); color: #fff; padding: 0.3rem 0.8rem; border-radius: var(--radius-full); font-size: 0.85rem; font-weight: 600; margin-bottom: 1rem;">
        <span class="material-symbols-outlined icon-sm star-icon-filled">star</span> #1 Rated Cleaning Service in <?= htmlspecialchars($cityName) ?>
      </span>
      <h1>Professional <?= htmlspecialchars($serviceName) ?> in <?= htmlspecialchars($cityName) ?></h1>
      <p class="hero-lead">
        <?= htmlspecialchars($currentServiceData['short_desc']) ?> Reliable, timely, and affordable cleaning by trained local specialists in <?= htmlspecialchars($cityName) ?>.
      </p>

      <div class="d-flex align-center gap-2 flex-wrap" style="margin-top: 1.5rem;">
        <a href="<?= SITE_URL ?>/book-now/?city=<?= $citySlug ?>&service=<?= $serviceSlug ?>" class="btn btn-primary">Book Now in <?= htmlspecialchars($cityName) ?></a>
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-dark"><span class="material-symbols-outlined icon-sm">call</span> Call <?= BUSINESS_PHONE ?></a>
        <a href="<?= $waUrl ?>" target="_blank" rel="noopener" class="btn btn-whatsapp"><span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- Direct Answer / AEO Quick Answers Box -->
<section style="padding: 1.5rem 0; background: #fff;">
  <div class="container">
    <div class="direct-answer-box">
      <h2><?= htmlspecialchars($serviceName) ?> in <?= htmlspecialchars($cityName) ?>: Quick Answers</h2>
      <p>
        <strong>A1 Cleaning</strong> <?= htmlspecialchars($cityName) ?> mein specialized <?= strtolower($serviceName) ?> provide karti hai. Humari rates <strong><?= htmlspecialchars($currentServiceData['starting_price']) ?></strong> se shuru hoti hain. Industrial vacuum cleaners, mechanised scrubbers aur eco-friendly solutions ke saath hamari team aapke ghar ya workplace par aati hai. Booking aur instant assessment ke liye call karein: <strong><a href="tel:<?= BUSINESS_PHONE_RAW ?>"><?= BUSINESS_PHONE ?></a></strong>.
      </p>
    </div>
  </div>
</section>

<!-- What is Included (Checklist) -->
<section class="section section-bg-light">
  <div class="container">
    <div class="section-title">
      <h2>What's Included in <?= htmlspecialchars($serviceName) ?></h2>
      <p>Comprehensive service checklist performed by our verified technicians in <?= htmlspecialchars($cityName) ?>.</p>
    </div>

    <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 2.25rem; max-width: 850px; margin: 0 auto; box-shadow: var(--shadow-sm);">
      <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1rem; list-style: none; padding: 0; margin: 0;">
        <?php foreach ($currentServiceData['checklist'] as $item): ?>
          <li style="display: flex; align-items: flex-start; gap: 0.6rem; font-size: 0.95rem;">
            <span class="material-symbols-outlined checklist-icon">check_circle</span>
            <span><?= htmlspecialchars($item) ?></span>
          </li>
        <?php endforeach; ?>
      </ul>

      <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--color-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: gap;">
        <div>
          <span style="color: var(--color-text-muted); font-size: 0.9rem;">Starting From:</span>
          <div style="font-size: 1.5rem; font-weight: 800; color: var(--color-primary);"><?= htmlspecialchars($currentServiceData['starting_price']) ?></div>
        </div>
        <div>
          <span style="color: var(--color-text-muted); font-size: 0.9rem;">Estimated Time:</span>
          <div style="font-weight: 600; color: var(--color-text-main);"><?= htmlspecialchars($currentServiceData['time_estimate']) ?></div>
        </div>
        <a href="<?= SITE_URL ?>/book-now/?city=<?= $citySlug ?>&service=<?= $serviceSlug ?>" class="btn btn-primary">Book This Service</a>
      </div>
    </div>
  </div>
</section>

<!-- Localized Context Section (Anti-Doorway Page Content) -->
<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem; align-items: center;">
      <div>
        <h2>Why <?= htmlspecialchars($serviceName) ?> Matters in <?= htmlspecialchars($cityName) ?></h2>
        <p style="margin-bottom: 1.25rem;">
          <?= htmlspecialchars($currentCityData['local_challenge']) ?>
        </p>
        <p style="margin-bottom: 1.5rem;">
          <?= htmlspecialchars($currentCityData['local_solution']) ?>
        </p>

        <h4>Local Areas We Cover in <?= htmlspecialchars($cityName) ?>:</h4>
        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 0.75rem;">
          <?php foreach ($currentCityData['key_areas'] as $area): ?>
            <span style="background: var(--color-light-bg); color: var(--color-primary); padding: 0.35rem 0.75rem; border-radius: var(--radius-sm); font-size: 0.85rem; font-weight: 500;">
              <span class="material-symbols-outlined icon-sm" style="color: var(--color-fresh-green);">location_on</span> <?= htmlspecialchars($area) ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>

      <div style="background: var(--color-light-bg); border-radius: var(--radius-md); padding: 2rem; border-left: 4px solid var(--color-primary);">
        <h3 style="margin-bottom: 1rem;">Customer Types We Serve</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.5rem;">
          <?= htmlspecialchars($currentCityData['customer_segments']) ?>
        </p>
        
        <div style="background: #fff; padding: 1.25rem; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
          <div style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.25rem;">Local <?= htmlspecialchars($cityName) ?> Dispatch</div>
          <div style="font-size: 0.9rem; color: var(--color-text-muted);">
            <?= htmlspecialchars($currentCityData['address_line']) ?>
          </div>
          <div style="margin-top: 0.75rem;">
            <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-dark" style="width: 100%; min-height: 40px; font-size: 0.9rem;">
              Direct Dispatch: <?= BUSINESS_PHONE ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6-Step Process -->
<section class="section section-bg-light">
  <div class="container">
    <div class="section-title">
      <h2>How We Execute <?= htmlspecialchars($serviceName) ?></h2>
      <p>Step-by-step professional execution ensuring zero damage and deep hygiene.</p>
    </div>

    <div class="process-grid">
      <?php foreach ($currentServiceData['process'] as $idx => $stepText): ?>
        <div class="process-step">
          <div class="step-num"><?= sprintf('%02d', $idx + 1) ?></div>
          <p style="font-weight: 600; color: var(--color-primary); margin: 0;"><?= htmlspecialchars($stepText) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQs Section -->
<section class="section">
  <div class="container">
    <div class="section-title">
      <h2><?= htmlspecialchars($serviceName) ?> in <?= htmlspecialchars($cityName) ?>: FAQs</h2>
      <p>Have questions about pricing, duration, or procedure? Here are straightforward answers.</p>
    </div>

    <div class="faq-list">
      <?php foreach ($localizedFaqs as $index => $faq): ?>
        <div class="faq-item <?= $index === 0 ? 'active' : '' ?>">
          <button class="faq-question">
            <span><?= htmlspecialchars($faq['q']) ?></span>
            <span class="material-symbols-outlined icon-sm faq-toggle-icon">expand_more</span>
          </button>
          <div class="faq-answer">
            <?= htmlspecialchars($faq['a']) ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Internal Linking: Other Services in this City & Other Cities for this Service -->
<section class="section section-bg-light">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
      <!-- Other services in current city -->
      <div>
        <h3>More Cleaning Services in <?= htmlspecialchars($cityName) ?></h3>
        <ul style="list-style: none; padding: 0; margin-top: 1rem;">
          <?php foreach ($servicesList as $otherSlug => $otherData): ?>
            <?php if ($otherSlug !== $serviceSlug): ?>
              <li style="margin-bottom: 0.5rem;">
                <a href="<?= SITE_URL ?>/<?= $citySlug ?>/<?= $otherSlug ?>/" style="font-weight: 500; display: inline-flex; align-items: center; gap: 0.35rem;">
                  <span class="material-symbols-outlined icon-xs">arrow_forward</span> <?= htmlspecialchars($otherData['name']) ?> in <?= htmlspecialchars($cityName) ?>
                </a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Same service in other cities -->
      <div>
        <h3><?= htmlspecialchars($serviceName) ?> in Other Cities</h3>
        <ul style="list-style: none; padding: 0; margin-top: 1rem;">
          <?php foreach ($citiesList as $otherCitySlug => $otherCityData): ?>
            <?php if ($otherCitySlug !== $citySlug): ?>
              <li style="margin-bottom: 0.5rem;">
                <a href="<?= SITE_URL ?>/<?= $otherCitySlug ?>/<?= $serviceSlug ?>/" style="font-weight: 500; display: inline-flex; align-items: center; gap: 0.35rem;">
                  <span class="material-symbols-outlined icon-xs">arrow_forward</span> <?= htmlspecialchars($serviceName) ?> in <?= htmlspecialchars($otherCityData['name']) ?>
                </a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Final City-Service CTA -->
<section style="background-color: var(--color-primary); color: #fff; padding: 3rem 0; text-align: center;">
  <div class="container">
    <h2 style="color: #fff;">Need <?= htmlspecialchars($serviceName) ?> in <?= htmlspecialchars($cityName) ?> Today?</h2>
    <p style="color: #D3E6DC; margin-bottom: 2rem;">Get in touch for same-day inspection and the most competitive quote in Uttarakhand.</p>
    <div class="d-flex justify-center gap-2 flex-wrap">
      <a href="<?= SITE_URL ?>/book-now/?city=<?= $citySlug ?>&service=<?= $serviceSlug ?>" class="btn btn-primary">Book Online</a>
      <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-dark" style="border: 1px solid rgba(255,255,255,0.2);"><span class="material-symbols-outlined icon-sm">call</span> <?= BUSINESS_PHONE ?></a>
      <a href="<?= $waUrl ?>" target="_blank" rel="noopener" class="btn btn-whatsapp"><span class="material-symbols-outlined icon-sm">chat</span> WhatsApp <?= htmlspecialchars($cityName) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

