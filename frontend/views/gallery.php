<?php
/**
 * Gallery View: /gallery/
 * Real Before & After Cleaning Transformations
 */
$pageTitle = "Before & After Cleaning Photos | A1 Cleaning";
$pageDescription = "Real before and after photos of our cleaning work in Kashipur, Jaspur and Ramnagar. Sofas, water tanks, tiles & kitchens.";
$canonicalUrl = SeoHelper::getCanonicalUrl('gallery');

require __DIR__ . '/../components/header.php';
?>



<section class="hero-section">
  <div class="container text-center">
    <h1>Before &amp; After Transformations</h1>
    <p class="hero-lead" style="margin-left: auto; margin-right: auto;">
      Real on-site results delivered by our cleaning teams in Kashipur, Jaspur and Ramnagar.
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
      <!-- Project 1: Sofa Cleaning -->
      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
        <div style="background: var(--color-light-bg); padding: 3rem 1rem; text-align: center;">
          <span class="material-symbols-outlined icon-xl" style="font-size: 3.5rem; color: var(--color-fresh-green);">chair</span>
        </div>
        <div style="padding: 1.5rem;">
          <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: var(--color-accent); font-weight: 700;">Kashipur • Ramnagar Rd</span>
          <h3 style="margin: 0.4rem 0 0.5rem;">5-Seater Fabric Sofa Deep Extraction</h3>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: 1rem;">
            Heavy tea and dust stains removed completely using injection-extraction shampooing. 100% restored fabric brightness.
          </p>
          <a href="<?= SITE_URL ?>/kashipur/sofa-cleaning/" class="btn btn-outline" style="width: 100%; min-height: 38px; font-size: 0.85rem; display: inline-flex; align-items: center; justify-content: center; gap: 0.35rem;">
            View Sofa Cleaning <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project 2: Water Tank Disinfection -->
      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
        <div style="background: var(--color-light-bg); padding: 3rem 1rem; text-align: center;">
          <span class="material-symbols-outlined icon-xl" style="font-size: 3.5rem; color: var(--color-fresh-green);">water_drop</span>
        </div>
        <div style="padding: 1.5rem;">
          <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: var(--color-accent); font-weight: 700;">Jaspur • Subhash Chowk</span>
          <h3 style="margin: 0.4rem 0 0.5rem;">2,000L Underground Tank Sludge Removal</h3>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: 1rem;">
            Thick silt and algae deposits cleared using 120-bar pressure washer and anti-bacterial UV treatment.
          </p>
          <a href="<?= SITE_URL ?>/jaspur/water-tank-cleaning/" class="btn btn-outline" style="width: 100%; min-height: 38px; font-size: 0.85rem; display: inline-flex; align-items: center; justify-content: center; gap: 0.35rem;">
            View Tank Cleaning <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Project 3: Resort Deep Cleaning -->
      <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
        <div style="background: var(--color-light-bg); padding: 3rem 1rem; text-align: center;">
          <span class="material-symbols-outlined icon-xl" style="font-size: 3.5rem; color: var(--color-fresh-green);">cottage</span>
        </div>
        <div style="padding: 1.5rem;">
          <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: var(--color-accent); font-weight: 700;">Ramnagar • Dhikuli Corbett</span>
          <h3 style="margin: 0.4rem 0 0.5rem;">Resort Cottage Turnover Deep Cleaning</h3>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: 1rem;">
            Turnover deep cleaning, window glass tracks, tile descaling and curtain steam dusting for tourist season reopening.
          </p>
          <a href="<?= SITE_URL ?>/ramnagar/home-cleaning/" class="btn btn-outline" style="width: 100%; min-height: 38px; font-size: 0.85rem; display: inline-flex; align-items: center; justify-content: center; gap: 0.35rem;">
            View Home Cleaning <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

