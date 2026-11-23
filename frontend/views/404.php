<?php
/**
 * Custom 404 Error View
 * CRITICAL RULE: Returns actual 404 HTTP status code (Never 200 Soft-404)
 */

http_response_code(404);

$pageTitle = "Page Not Found (404) | A1 Cleaning";
$pageDescription = "The requested cleaning page could not be found. Explore our services in Kashipur, Jaspur, and Ramnagar.";
$canonicalUrl = CANONICAL_DOMAIN . '/404.html';
$isNoIndex = true;

require __DIR__ . '/../components/header.php';
?>

<section class="section" style="padding: 5rem 0;">
  <div class="container text-center">
    <div style="max-width: 600px; margin: 0 auto;">
      <h1 style="font-size: 5rem; color: var(--color-accent); margin-bottom: 0.5rem; line-height: 1;">404</h1>
      <h2 style="margin-bottom: 1rem;">Oops! Page Not Found</h2>
      <p style="color: var(--color-text-muted); font-size: 1.1rem; margin-bottom: 2rem;">
        Lagta hai aap galat link par aa gaye hain. Niche diye gaye links se aap sahi service ya city page par ja sakte hain:
      </p>

      <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem;">
        <a href="<?= SITE_URL ?>/" class="btn btn-primary">Return to Homepage</a>
        <a href="<?= SITE_URL ?>/services/" class="btn btn-outline">Explore All Services</a>
        <a href="<?= SITE_URL ?>/book-now/" class="btn btn-dark">Book Cleaning</a>
      </div>

      <div style="background: var(--color-light-bg); border-radius: var(--radius-sm); padding: 1.5rem; text-align: left;">
        <h4>Direct Location Hubs:</h4>
        <ul style="margin: 0.5rem 0 0; padding-left: 1.25rem;">
          <li><a href="<?= SITE_URL ?>/kashipur/">Cleaning Services in Kashipur</a></li>
          <li><a href="<?= SITE_URL ?>/jaspur/">Cleaning Services in Jaspur</a></li>
          <li><a href="<?= SITE_URL ?>/ramnagar/">Cleaning Services in Ramnagar</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>

