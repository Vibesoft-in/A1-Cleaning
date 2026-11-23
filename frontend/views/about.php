<?php
/**
 * Dedicated About Us View: /about/ and /about-us/
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "About A1 Cleaning | Uttarakhand's Premier Mechanized Cleaning Brand";
$pageDescription = "Learn about A1 Cleaning: our story, commercial-grade equipment, eco-safe solutions, and the dedicated team serving Kashipur, Jaspur and Ramnagar.";
$canonicalUrl = SeoHelper::getCanonicalUrl('about');
$currentRoute = 'about';

require __DIR__ . '/../components/header.php';
?>



<!-- Hero Banner -->
<section style="background: linear-gradient(145deg, var(--color-deep-green) 0%, #154034 100%); color: #FFFFFF; padding: 3.5rem 0 4rem; text-align: center; position: relative; overflow: hidden;">
  <div class="container" style="position: relative; z-index: 2;">
    <span style="display: inline-flex; align-items: center; gap: 0.4rem; background: rgba(34, 160, 107, 0.25); border: 1px solid var(--color-fresh-green); color: #EAF3EE; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; padding: 0.35rem 0.95rem; border-radius: var(--radius-pill); margin-bottom: 1rem;">
      <span class="material-symbols-outlined icon-xs">apartment</span> Founded in Kashipur, Uttarakhand
    </span>
    <h1 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: #FFFFFF; margin-bottom: 0.85rem; letter-spacing: -0.02em;">
      Every Space. Expertly Cleaned.
    </h1>
    <p style="font-size: 1.05rem; color: #D6E8DC; max-width: 720px; margin: 0 auto 1.75rem; line-height: 1.6;">
      We are Uttarakhand’s dedicated mechanized cleaning service brand, established to replace inadequate manual cleaning with heavy-duty commercial machines and certified hygiene standards.
    </p>

    <!-- Key Metrics Counter Bar -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1.25rem; max-width: 850px; margin: 2rem auto 0; background: rgba(255, 255, 255, 0.09); border: 1.5px solid rgba(255, 255, 255, 0.2); border-radius: 18px; padding: 1.5rem; backdrop-filter: blur(8px);">
      <div>
        <div style="font-size: 2.2rem; font-weight: 900; color: #FFFFFF; line-height: 1;">5,000+</div>
        <span style="font-size: 0.78rem; color: #D6E8DC; display: block; margin-top: 0.25rem;">Cleaned Spaces</span>
      </div>
      <div>
        <div style="font-size: 2.2rem; font-weight: 900; color: #FFFFFF; line-height: 1;">50+</div>
        <span style="font-size: 0.78rem; color: #D6E8DC; display: block; margin-top: 0.25rem;">Localities Covered</span>
      </div>
      <div>
        <div style="font-size: 2.2rem; font-weight: 900; color: #FFFFFF; line-height: 1;">100%</div>
        <span style="font-size: 0.78rem; color: #D6E8DC; display: block; margin-top: 0.25rem;">Verified Staff</span>
      </div>
      <div>
        <div style="font-size: 2.2rem; font-weight: 900; color: #FFFFFF; line-height: 1;">4.9 ★</div>
        <span style="font-size: 0.78rem; color: #D6E8DC; display: block; margin-top: 0.25rem;">Google Rating</span>
      </div>
    </div>
  </div>
</section>

<!-- Brand Story & Mission Section -->
<section style="background: var(--color-white); padding: 4.5rem 0;">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 3rem; align-items: center;">
      
      <div>
        <span style="color: var(--color-fresh-green); font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.35rem;">
          Our Journey
        </span>
        <h2 style="font-size: 2.2rem; font-weight: 900; color: var(--color-deep-green); margin-bottom: 1.25rem; line-height: 1.2;">
          Why We Started A1 Cleaning in Kashipur
        </h2>
        <p style="font-size: 0.95rem; color: var(--color-text-body); line-height: 1.65; margin-bottom: 1rem;">
          Living in industrial hubs and semi-urban foothills brings unique cleaning challenges: heavy airborne soot, red mud, and severe hard-water mineral crusting on tiles and taps.
        </p>
        <p style="font-size: 0.95rem; color: var(--color-text-body); line-height: 1.65; margin-bottom: 1.5rem;">
          Traditional daily dusting and mopping simply cannot extract embedded dust mites from sofas or eliminate black algae from overhead water tanks. We formed <strong>A1 Cleaning</strong> to introduce industrial rotary scrubbers, hot-water extraction, and antibacterial UV radiation to residential and commercial doorsteps at honest, accessible rates.
        </p>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="<?= SITE_URL ?>/services/" class="btn btn-action" style="border-radius: var(--radius-pill); padding: 0.75rem 1.65rem;">
            Explore Services <span class="material-symbols-outlined icon-xs">arrow_forward</span>
          </a>
          <a href="<?= SITE_URL ?>/contact/" class="btn btn-outline" style="border-radius: var(--radius-pill); padding: 0.75rem 1.65rem;">
            Contact Our Team
          </a>
        </div>
      </div>

      <!-- Vision & Mission Dual Highlight Cards -->
      <div style="display: flex; flex-direction: column; gap: 1.5rem;">
        
        <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem; border-left: 5px solid var(--color-fresh-green);">
          <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.65rem;">
            <div style="width: 38px; height: 38px; border-radius: 10px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center;">
              <span class="material-symbols-outlined icon-sm">visibility</span>
            </div>
            <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-deep-green); margin: 0;">Our Vision</h3>
          </div>
          <p style="font-size: 0.88rem; color: var(--color-text-body); line-height: 1.55; margin: 0;">
            To be Uttarakhand’s most trusted household name for mechanized hygiene, empowering local homes, resorts, and businesses with cleaner, healthier, and allergen-free environments.
          </p>
        </div>

        <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem; border-left: 5px solid var(--color-deep-green);">
          <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.65rem;">
            <div style="width: 38px; height: 38px; border-radius: 10px; background: var(--color-soft-mint); color: var(--color-deep-green); display: flex; align-items: center; justify-content: center;">
              <span class="material-symbols-outlined icon-sm">flag</span>
            </div>
            <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-deep-green); margin: 0;">Our Mission</h3>
          </div>
          <p style="font-size: 0.88rem; color: var(--color-text-body); line-height: 1.55; margin: 0;">
            To provide dependable, quality-obsessed cleaning with professional gear, police-verified technicians, zero upfront payment, and complete post-service customer satisfaction.
          </p>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- 4 Core Brand Pillars -->
<section style="background: var(--color-bg-section); padding: 4rem 0; border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
  <div class="container">
    
    <div style="text-align: center; max-width: 650px; margin: 0 auto 3rem;">
      <span style="color: var(--color-fresh-green); font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.35rem;">
        What We Stand For
      </span>
      <h2 style="font-size: 2rem; font-weight: 900; color: var(--color-deep-green); margin-bottom: 0.5rem;">
        Our Core Values &amp; Commitments
      </h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
      
      <div style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">verified_user</span>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Absolute Trust</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.5; margin: 0;">
          Zero advance payment. Transparent fixed quotations with no hidden travel surcharges or chemical add-ons.
        </p>
      </div>

      <div style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">precision_manufacturing</span>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Mechanized Rigor</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.5; margin: 0;">
          We invest in commercial German and Italian extraction machines and high-rpm rotary scrubbers that outperform hand scrubbing by 10x.
        </p>
      </div>

      <div style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">eco</span>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Eco-Safe Hygiene</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.5; margin: 0;">
          Strict non-acidic formulations. Safe for baby crawling, elderly breathing, and household pets with zero toxic fumes.
        </p>
      </div>

      <div style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem; box-shadow: var(--shadow-sm);">
        <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
          <span class="material-symbols-outlined icon-md">handshake</span>
        </div>
        <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin-bottom: 0.45rem;">Customer Respect</h4>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.5; margin: 0;">
          On-time arrival, careful furniture shifting, shoe covers inside bedrooms, and complete post-cleaning cleanup.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Machinery & Equipment Showcase -->
<section style="background: var(--color-white); padding: 4.5rem 0;">
  <div class="container">
    
    <div style="text-align: center; max-width: 650px; margin: 0 auto 3rem;">
      <span style="color: var(--color-fresh-green); font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 0.35rem;">
        Commercial Equipment
      </span>
      <h2 style="font-size: 2rem; font-weight: 900; color: var(--color-deep-green); margin-bottom: 0.5rem;">
        The Machines Behind Our Results
      </h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.75rem;">
      
      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.85rem;">
          <span class="material-symbols-outlined text-fresh-green icon-md">cleaning_services</span>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin: 0;">Single-Disc Rotary Floor Scrubbers</h4>
        </div>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.55; margin: 0;">
          High-torque industrial disc machines with interchangeable nylon and wire brushes remove stubborn cement spots, grease stains, and hard water scale from marble, granite, and tiles.
        </p>
      </div>

      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.85rem;">
          <span class="material-symbols-outlined text-fresh-green icon-md">vacuum</span>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin: 0;">Injection-Extraction Fabric Cleaners</h4>
        </div>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.55; margin: 0;">
          Pressurised shampoo injection paired with powerful 1200W moisture extraction sucks out deep-seated sweat, food spills, dust mites, and pet hair from sofas and mattresses.
        </p>
      </div>

      <div style="background: var(--color-bg-section); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.75rem;">
        <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.85rem;">
          <span class="material-symbols-outlined text-fresh-green icon-md">water_drop</span>
          <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--color-deep-green); margin: 0;">UV Germicidal Tank Disinfectors</h4>
        </div>
        <p style="font-size: 0.85rem; color: var(--color-text-body); line-height: 1.55; margin: 0;">
          High-intensity antibacterial ultraviolet radiation lamps destroy microscopic bacteria, coliforms, and viruses inside overhead tanks without adding chlorine or harmful bleaches.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Bottom CTA Banner -->
<section style="background: linear-gradient(145deg, var(--color-deep-green) 0%, #154034 100%); color: #FFFFFF; padding: 3.5rem 0; text-align: center;">
  <div class="container">
    <h3 style="font-size: 1.85rem; font-weight: 900; color: #FFFFFF; margin-bottom: 0.65rem;">
      Ready to Experience Real Mechanized Hygiene?
    </h3>
    <p style="font-size: 0.95rem; color: #D6E8DC; max-width: 600px; margin: 0 auto 1.75rem;">
      Book a doorstep cleaning service today in Kashipur, Jaspur or Ramnagar with zero advance payment.
    </p>
    <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap;">
      <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action" style="border-radius: var(--radius-pill); padding: 0.75rem 1.75rem;">
        Book Online Now <span class="material-symbols-outlined icon-sm">arrow_forward</span>
      </a>
      <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20want%20to%20learn%20more%20about%20your%20services" target="_blank" rel="noopener" class="btn btn-whatsapp" style="border-radius: var(--radius-pill); padding: 0.75rem 1.75rem;">
        <span class="material-symbols-outlined icon-sm">chat</span> Chat on WhatsApp
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../components/footer.php'; ?>
