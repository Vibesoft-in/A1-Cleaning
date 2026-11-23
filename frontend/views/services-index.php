<?php
/**
 * Dedicated Services Catalog View: /services/
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "All Professional Cleaning Services in Kashipur, Jaspur & Ramnagar | A1 Cleaning";
$pageDescription = "Explore our 9 specialized mechanized cleaning services: Home deep clean, sofa shampooing, water tank UV disinfection, kitchen degreasing, bathroom descaling & commercial wash.";
$canonicalUrl = SeoHelper::getCanonicalUrl('services');
$currentRoute = 'services';

require __DIR__ . '/../components/header.php';
?>



<!-- Hero Banner -->
<section style="background: linear-gradient(145deg, var(--color-deep-green) 0%, #154034 100%); color: #FFFFFF; padding: 3.5rem 0 4rem; text-align: center; position: relative; overflow: hidden;">
  <div class="container" style="position: relative; z-index: 2;">
    <span style="display: inline-flex; align-items: center; gap: 0.4rem; background: rgba(34, 160, 107, 0.25); border: 1px solid var(--color-fresh-green); color: #EAF3EE; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; padding: 0.35rem 0.95rem; border-radius: var(--radius-pill); margin-bottom: 1rem;">
      <span class="material-symbols-outlined icon-xs">verified</span> 100% Mechanized Doorstep Solutions
    </span>
    <h1 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: #FFFFFF; margin-bottom: 0.85rem; letter-spacing: -0.02em;">
      Professional Cleaning Services
    </h1>
    <p style="font-size: 1.05rem; color: #D6E8DC; max-width: 720px; margin: 0 auto 1.75rem; line-height: 1.6;">
      Industrial-grade scrubbing, hot-water injection extraction, and hospital-grade sanitization delivered straight to your doorstep across <strong>Kashipur, Jaspur &amp; Ramnagar</strong>.
    </p>

    <!-- 3 Quick Guarantee Badges -->
    <div style="display: flex; align-items: center; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
      <span style="display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.82rem; font-weight: 700; color: #FFFFFF;">
        <span class="material-symbols-outlined text-fresh-green icon-sm">check_circle</span> Zero Advance Payment
      </span>
      <span style="display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.82rem; font-weight: 700; color: #FFFFFF;">
        <span class="material-symbols-outlined text-fresh-green icon-sm">check_circle</span> Verified &amp; Uniformed Staff
      </span>
      <span style="display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.82rem; font-weight: 700; color: #FFFFFF;">
        <span class="material-symbols-outlined text-fresh-green icon-sm">check_circle</span> Pay After 100% Satisfaction
      </span>
    </div>
  </div>
</section>

<!-- Services Grid Section -->
<section style="background: var(--color-bg-section); padding: 4rem 0;">
  <div class="container">
    
    <div style="text-align: center; max-width: 650px; margin: 0 auto 3rem;">
      <span style="color: var(--color-fresh-green); font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.35rem;">
        Complete Service Directory
      </span>
      <h2 style="font-size: 2rem; font-weight: 900; color: var(--color-deep-green); margin-bottom: 0.5rem;">
        Choose Your Cleaning Solution
      </h2>
      <p style="color: var(--color-text-body); font-size: 0.95rem; margin-bottom: 0;">
        From single sofa stain treatment to whole-bungalow deep scrubbing, explore our complete portfolio with transparent upfront pricing.
      </p>
    </div>

    <!-- 11 Services Catalog Grid (Clean, High-Res Branded Photos) -->
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 1.75rem;">
      <?php 
      $seenSlugs = [];
      $uniqueServices = [];
      foreach ($servicesList as $sSlug => $sData) {
          $canon = $sData['slug'] ?? $sSlug;
          if (!isset($seenSlugs[$canon])) {
              $seenSlugs[$canon] = true;
              $uniqueServices[$canon] = $sData;
          }
      }
      foreach ($uniqueServices as $sSlug => $sData): 
        $imgPath = SITE_URL . '/assets/images/services/' . $sSlug . '.jpg';
      ?>
        <article style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; overflow: hidden; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between; transition: all 0.25s ease;">
          
          <div>
            <!-- Service Thumbnail Media (High-Res 1:1 Clean Aspect) -->
            <div style="height: 190px; position: relative; overflow: hidden; background: #F4F8F5;">
              <img src="<?= $imgPath ?>" alt="<?= htmlspecialchars($sData['name']) ?>" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;" loading="lazy" onerror="this.onerror=null; this.src='<?= SITE_URL ?>/assets/images/pricing/<?= $sSlug ?>.jpg';">
              <div style="position: absolute; top: 12px; right: 12px; background: rgba(11, 41, 34, 0.85); backdrop-filter: blur(4px); color: #FFFFFF; font-size: 0.75rem; font-weight: 800; padding: 0.28rem 0.7rem; border-radius: var(--radius-pill); border: 1px solid rgba(255, 255, 255, 0.2);">
                From <?= htmlspecialchars($sData['starting_price']) ?>
              </div>
              <div style="position: absolute; bottom: 10px; left: 12px; background: var(--color-fresh-green); color: #FFFFFF; font-size: 0.7rem; font-weight: 800; padding: 0.22rem 0.65rem; border-radius: var(--radius-pill); display: inline-flex; align-items: center; gap: 3px; max-width: calc(100% - 24px); white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                <span class="material-symbols-outlined icon-xs">schedule</span> <?= htmlspecialchars(explode(' (', $sData['time_estimate'])[0]) ?>
              </div>
            </div>

            <!-- Card Content Body -->
            <div style="padding: 1.35rem 1.5rem 1rem;">
              <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.4rem;">
                <?= htmlspecialchars($sData['name']) ?>
              </h3>
              <p style="font-size: 0.84rem; color: var(--color-text-body); line-height: 1.45; margin-bottom: 0.85rem;">
                <?= htmlspecialchars($sData['short_desc']) ?>
              </p>

              <!-- Top Checklist Highlights -->
              <ul style="list-style: none; padding: 0; margin: 0 0 1rem; display: flex; flex-direction: column; gap: 0.35rem;">
                <?php 
                  $sampleChecklist = array_slice($sData['checklist'], 0, 3);
                  foreach ($sampleChecklist as $point): 
                ?>
                  <li style="font-size: 0.78rem; color: var(--color-deep-green); display: flex; align-items: flex-start; gap: 0.45rem; line-height: 1.35;">
                    <span class="material-symbols-outlined text-fresh-green icon-xs" style="margin-top: 1px; flex-shrink: 0;">check_circle</span>
                    <span><?= htmlspecialchars($point) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <!-- Card Bottom CTA Action Row -->
          <div style="padding: 0.85rem 1.5rem; background: #F8FBF9; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between; gap: 0.65rem;">
            <a href="<?= SITE_URL ?>/services/<?= $sSlug ?>/" style="font-size: 0.82rem; font-weight: 800; color: var(--color-deep-green); text-decoration: none; display: inline-flex; align-items: center; gap: 2px;">
              View Details <span class="material-symbols-outlined icon-xs">arrow_forward</span>
            </a>
            <a href="<?= SITE_URL ?>/book-now/?service=<?= $sSlug ?>" class="btn btn-action" style="font-size: 0.82rem; padding: 0.48rem 1rem; border-radius: var(--radius-pill);">
              Book Now
            </a>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- 4 Pillars Trust Section -->
<section style="background: var(--color-white); padding: 4rem 0; border-top: 1px solid var(--color-border);">
  <div class="container">
    <div style="text-align: center; max-width: 600px; margin: 0 auto 3rem;">
      <span style="color: var(--color-fresh-green); font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.35rem;">
        The A1 Standard
      </span>
      <h2 style="font-size: 2rem; font-weight: 900; color: var(--color-deep-green); margin-bottom: 0.5rem;">
        Why Homeowners Choose Us
      </h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
      
      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">precision_manufacturing</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Heavy-Duty Equipment</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); margin-bottom: 0; line-height: 1.45;">
          High-pressure single-disc rotary scrubbers, injection-extraction machines, and UV purifiers handle stubborn muck easily.
        </p>
      </div>

      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">eco</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Eco-Safe &amp; Non-Toxic</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); margin-bottom: 0; line-height: 1.45;">
          100% safe for babies, pregnant women, and pets. Biodegradable European-standard degreasers leave zero harsh chemical fumes.
        </p>
      </div>

      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">badge</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Background-Verified Crew</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); margin-bottom: 0; line-height: 1.45;">
          Uniformed, police-verified, and thoroughly trained technicians respect your family’s privacy and property at all times.
        </p>
      </div>

      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">currency_rupee</span>
        </div>
        <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Honest Fixed Rates</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); margin-bottom: 0; line-height: 1.45;">
          Upfront quotes with zero last-minute surprises. Pay only after you inspect and approve our cleaning quality.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Bottom CTA Banner -->
<section style="background: linear-gradient(145deg, var(--color-deep-green) 0%, #154034 100%); color: #FFFFFF; padding: 3.5rem 0; text-align: center;">
  <div class="container">
    <h3 style="font-size: 1.85rem; font-weight: 900; color: #FFFFFF; margin-bottom: 0.65rem;">
      Need a Tailored Quote for Your Space?
    </h3>
    <p style="font-size: 0.95rem; color: #D6E8DC; max-width: 600px; margin: 0 auto 1.75rem;">
      Talk directly to our operations team or share photos of your space on WhatsApp for an instant estimate.
    </p>
    <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap;">
      <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action" style="border-radius: var(--radius-pill); padding: 0.75rem 1.75rem;">
        Book Online Now <span class="material-symbols-outlined icon-sm">arrow_forward</span>
      </a>
      <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20want%20a%20quote%20for%20cleaning%20services" target="_blank" rel="noopener" class="btn btn-whatsapp" style="border-radius: var(--radius-pill); padding: 0.75rem 1.75rem;">
        <span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Estimate
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>
