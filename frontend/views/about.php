<?php
/**
 * Dedicated About Us View: /about/ and /about-us/
 * Designed to match Reference Layout:
 * 1. Clear Hero Section
 * 2. Brand Story (Our Journey / Why We Started - Above Founders)
 * 3. Meet the Founders & Leadership (Below Brand Story)
 * 4. Vision & Core Values (3 Pillars)
 * 5. USP & What We Do (6 Services Grid + Solid USP Highlight Card)
 * 6. Social Proof & Numbers
 * 7. Closing CTA Banner
 * 
 * Strict Brand Colors: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "About A1 Cleaning | Our Story, Leadership, Vision & Mechanized Standards";
$pageDescription = "Learn about A1 Cleaning: our journey in Kashipur, commercial machinery, eco-safe solutions, leadership team, and mechanized doorstep services across Uttarakhand.";
$canonicalUrl = SeoHelper::getCanonicalUrl('about');
$currentRoute = 'about';

require __DIR__ . '/../components/header.php';
?>

<style>
  /* Material Symbols Font Rendering Guard */
  .material-symbols-outlined {
    font-family: 'Material Symbols Outlined' !important;
    font-weight: normal;
    font-style: normal;
    display: inline-block;
    line-height: 1;
    text-transform: none;
    letter-spacing: normal;
    word-wrap: normal;
    white-space: nowrap;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    font-feature-settings: 'liga';
  }
  .icon-xs { font-size: 16px !important; }
  .icon-sm { font-size: 20px !important; }
  .icon-md { font-size: 26px !important; }
  .icon-lg { font-size: 32px !important; }

  /* --------------------------------------------------------------------------
     ABOUT US - DEDICATED REFERENCE STYLES (MATCHING BYTE CRAFT REFERENCE 1:1)
     -------------------------------------------------------------------------- */
  .about-page-wrapper {
    background: #FFFFFF;
    color: #1E293B;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    overflow-x: hidden;
  }

  .about-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  /* Section Tags / Badges */
  .about-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    background: rgba(34, 160, 107, 0.1);
    border: 1px solid rgba(34, 160, 107, 0.35);
    color: #1B8355;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 0.35rem 0.85rem;
    border-radius: 9999px;
    margin-bottom: 0.85rem;
  }

  .about-badge.badge-white {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.3);
    color: #EAF3EE;
  }

  /* Typography */
  .about-h1 {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(2.2rem, 4.5vw, 3.4rem);
    font-weight: 900;
    color: #0B2922;
    line-height: 1.15;
    letter-spacing: -0.025em;
    margin-bottom: 1.25rem;
  }

  .about-h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(1.85rem, 3.2vw, 2.45rem);
    font-weight: 800;
    color: #0B2922;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin-bottom: 0.85rem;
  }

  .about-subtext {
    font-size: 1.02rem;
    color: #475569;
    line-height: 1.65;
    margin-bottom: 1.85rem;
  }

  /* Buttons */
  .btn-about-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #22A06B;
    color: #FFFFFF;
    font-weight: 700;
    font-size: 0.95rem;
    padding: 0.85rem 1.75rem;
    border-radius: 9999px;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(34, 160, 107, 0.35);
    transition: all 0.25s ease;
  }
  .btn-about-primary:hover {
    background: #1B8355;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(34, 160, 107, 0.45);
    color: #FFFFFF;
  }

  .btn-about-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #FFFFFF;
    color: #0B2922;
    font-weight: 700;
    font-size: 0.95rem;
    padding: 0.85rem 1.65rem;
    border-radius: 9999px;
    text-decoration: none;
    border: 1.5px solid #CBD5E1;
    transition: all 0.25s ease;
  }
  .btn-about-secondary:hover {
    border-color: #22A06B;
    color: #22A06B;
    background: #F4F9F6;
    transform: translateY(-2px);
  }

  /* --------------------------------------------------------------------------
     1. HERO SECTION (MATCHING REFERENCE 1:1 PIXEL BY PIXEL)
     -------------------------------------------------------------------------- */
  .about-hero-section {
    padding: 4.5rem 0 0;
    background: #F8FAF9;
    position: relative;
    overflow: hidden;
  }
  .about-hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 2;
  }
  .about-hero-tag {
    color: #22A06B;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-bottom: 0.85rem;
    display: inline-block;
  }
  .about-hero-title {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(2.3rem, 4.2vw, 3.3rem);
    font-weight: 900;
    color: #0F172A;
    line-height: 1.15;
    letter-spacing: -0.025em;
    margin-bottom: 1.35rem;
  }
  .about-hero-desc {
    font-size: 1rem;
    color: #475569;
    line-height: 1.65;
    max-width: 520px;
    margin-bottom: 2rem;
  }
  .about-hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.55rem;
    background: #22A06B;
    color: #FFFFFF;
    font-weight: 700;
    font-size: 0.95rem;
    padding: 0.85rem 1.85rem;
    border-radius: 9999px;
    text-decoration: none;
    box-shadow: 0 6px 18px rgba(34, 160, 107, 0.35);
    transition: all 0.25s ease;
  }
  .about-hero-btn:hover {
    background: #1B8355;
    transform: translateY(-2px);
    box-shadow: 0 10px 24px rgba(34, 160, 107, 0.45);
    color: #FFFFFF;
  }

  /* Right Image Card & Top-Right Floating Card */
  .about-hero-visual-wrap {
    position: relative;
  }
  .about-hero-image-box {
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    background: #FFFFFF;
    border: 1px solid rgba(0, 0, 0, 0.06);
    aspect-ratio: 4 / 3;
  }
  .about-hero-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  /* Floating Card at Top-Right (Matches reference "Ideas Design Code Impact") */
  .about-hero-corner-card {
    position: absolute;
    top: -14px;
    right: -14px;
    background: #FFFFFF;
    border-radius: 14px;
    padding: 0.85rem 1.15rem;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    border: 1px solid rgba(0, 0, 0, 0.06);
    z-index: 5;
    display: flex;
    flex-direction: column;
    gap: 0.45rem;
  }
  .corner-card-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.82rem;
    font-weight: 800;
    letter-spacing: 0.02em;
  }
  .corner-card-item.item-blue { color: #0284C7; }
  .corner-card-item.item-purple { color: #7C3AED; }
  .corner-card-item.item-green { color: #22A06B; }
  .corner-card-item.item-dark { color: #0B2922; }

  .corner-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
  }
  .dot-blue { background: #0284C7; }
  .dot-purple { background: #7C3AED; }
  .dot-green { background: #22A06B; }
  .dot-dark { background: #0B2922; }

  /* Bottom Smooth Wave Transition */
  .about-hero-wave-wrap {
    position: relative;
    width: 100%;
    line-height: 0;
    margin-top: 3.5rem;
  }
  .about-hero-wave-wrap svg {
    display: block;
    width: 100%;
    height: 60px;
  }

  /* --------------------------------------------------------------------------
     2. BRAND STORY SECTION (PLACED ABOVE FOUNDERS!)
     -------------------------------------------------------------------------- */
  .about-story-section {
    padding: 5rem 0;
    background: #FFFFFF;
  }
  .about-story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
  }
  .about-story-media {
    position: relative;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 16px 36px rgba(11, 41, 34, 0.1);
    border: 1px solid #E2E8F0;
  }
  .about-story-media img {
    width: 100%;
    height: 100%;
    max-height: 420px;
    object-fit: cover;
    display: block;
  }
  .about-story-play-pill {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 68px;
    height: 68px;
    border-radius: 50%;
    background: rgba(11, 41, 34, 0.88);
    backdrop-filter: blur(8px);
    border: 2px solid #34D399;
    color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 0 25px rgba(52, 211, 153, 0.4);
    transition: transform 0.25s ease;
  }
  .about-story-play-pill:hover {
    transform: translate(-50%, -50%) scale(1.1);
  }
  .about-story-bottom-tag {
    position: absolute;
    bottom: 16px;
    left: 16px;
    background: rgba(7, 25, 20, 0.85);
    border: 1px solid rgba(52, 211, 153, 0.4);
    color: #34D399;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 9999px;
    letter-spacing: 0.04em;
    text-transform: uppercase;
  }

  /* --------------------------------------------------------------------------
     3. MEET THE FOUNDERS SECTION (PLACED BELOW BRAND STORY!)
     -------------------------------------------------------------------------- */
  .about-founders-section {
    padding: 5rem 0;
    background: #F8FAF9;
    border-top: 1px solid #E2E8F0;
    border-bottom: 1px solid #E2E8F0;
  }
  .about-founders-grid {
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 3.5rem;
    align-items: center;
  }
  .about-founders-cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
  }
  .founder-card {
    background: #FFFFFF;
    border: 1.5px solid #E2E8F0;
    border-radius: 20px;
    padding: 1.25rem;
    box-shadow: 0 8px 24px rgba(11, 41, 34, 0.05);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
  }
  .founder-card:hover {
    transform: translateY(-4px);
    border-color: #22A06B;
    box-shadow: 0 14px 30px rgba(34, 160, 107, 0.15);
  }
  .founder-img-box {
    width: 100%;
    aspect-ratio: 1 / 1;
    border-radius: 14px;
    overflow: hidden;
    margin-bottom: 1rem;
    background: #EAF3EE;
    position: relative;
  }
  .founder-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .founder-name {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.15rem;
    font-weight: 800;
    color: #0B2922;
    margin-bottom: 0.2rem;
  }
  .founder-role {
    font-size: 0.82rem;
    font-weight: 700;
    color: #22A06B;
    margin-bottom: 0.65rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }
  .founder-bio {
    font-size: 0.82rem;
    color: #64748B;
    line-height: 1.5;
    margin-bottom: 0.85rem;
  }
  .founder-footer {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 0.75rem;
    border-top: 1px solid #F1F5F9;
  }
  .founder-badge-pill {
    font-size: 0.68rem;
    font-weight: 700;
    background: #EAF3EE;
    color: #0B2922;
    padding: 2px 8px;
    border-radius: 9999px;
  }
  .founder-social-link {
    color: #0A66C2;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 1.1rem;
  }

  /* --------------------------------------------------------------------------
     4. VISION & CORE VALUES (3 PILLARS)
     -------------------------------------------------------------------------- */
  .about-vision-section {
    padding: 5rem 0;
    background: #FFFFFF;
    text-align: center;
  }
  .about-vision-header {
    max-width: 680px;
    margin: 0 auto 3.5rem;
  }
  .about-vision-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.75rem;
    text-align: left;
  }
  .vision-card {
    background: #FFFFFF;
    border: 1.5px solid #E2E8F0;
    border-radius: 18px;
    padding: 2rem 1.75rem;
    box-shadow: 0 6px 18px rgba(11, 41, 34, 0.04);
    transition: all 0.25s ease;
  }
  .vision-card:hover {
    border-color: #22A06B;
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(34, 160, 107, 0.12);
  }
  .vision-icon-wrap {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #EAF3EE;
    color: #22A06B;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
  }
  .vision-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.2rem;
    font-weight: 800;
    color: #0B2922;
    margin-bottom: 0.5rem;
  }
  .vision-desc {
    font-size: 0.88rem;
    color: #64748B;
    line-height: 1.55;
    margin: 0;
  }

  /* --------------------------------------------------------------------------
     5. WHAT WE DO & USP SECTION
     -------------------------------------------------------------------------- */
  .about-usp-section {
    padding: 5rem 0;
    background: #F8FAF9;
    border-top: 1px solid #E2E8F0;
    border-bottom: 1px solid #E2E8F0;
  }
  .about-usp-layout {
    display: grid;
    grid-template-columns: 1.35fr 0.85fr;
    gap: 2.5rem;
    align-items: stretch;
  }
  .about-services-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem;
  }
  .about-service-item {
    background: #FFFFFF;
    border: 1.5px solid #E2E8F0;
    border-radius: 16px;
    padding: 1.35rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    transition: all 0.25s ease;
  }
  .about-service-item:hover {
    border-color: #22A06B;
    box-shadow: 0 8px 20px rgba(34, 160, 107, 0.1);
  }
  .about-service-header {
    display: flex;
    align-items: center;
    gap: 0.65rem;
  }
  .about-service-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: #EAF3EE;
    color: #22A06B;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .about-service-name {
    font-size: 0.98rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0;
  }
  .about-service-text {
    font-size: 0.82rem;
    color: #64748B;
    line-height: 1.5;
    margin: 0;
  }

  /* USP Solid Highlight Box */
  .about-usp-card {
    background: #0B2922;
    color: #FFFFFF;
    border-radius: 20px;
    padding: 2.25rem 2rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 16px 36px rgba(11, 41, 34, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.12);
  }
  .about-usp-tag {
    color: #34D399;
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    display: block;
    margin-bottom: 0.4rem;
  }
  .about-usp-heading {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.55rem;
    font-weight: 800;
    color: #FFFFFF;
    margin-bottom: 1.5rem;
  }
  .about-usp-list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.75rem;
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
  }
  .about-usp-list li {
    display: flex;
    align-items: flex-start;
    gap: 0.65rem;
    font-size: 0.88rem;
    color: #E2E8F0;
    line-height: 1.45;
  }
  .about-usp-list li .material-symbols-outlined {
    color: #34D399;
    font-size: 1.15rem;
    flex-shrink: 0;
    margin-top: 1px;
  }

  /* --------------------------------------------------------------------------
     6. SOCIAL PROOF & STATS
     -------------------------------------------------------------------------- */
  .about-proof-section {
    padding: 4.5rem 0;
    background: #FFFFFF;
    text-align: center;
  }
  .about-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    margin-bottom: 2.5rem;
  }
  .about-stat-box {
    background: #FFFFFF;
    border: 1.5px solid #E2E8F0;
    border-radius: 16px;
    padding: 1.5rem 1rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.03);
  }
  .about-stat-num {
    font-family: 'Montserrat', sans-serif;
    font-size: 2.2rem;
    font-weight: 900;
    color: #0B2922;
    line-height: 1;
    margin-bottom: 0.35rem;
  }
  .about-stat-label {
    font-size: 0.82rem;
    font-weight: 600;
    color: #64748B;
  }

  .about-cities-strip {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
    padding-top: 1.5rem;
    border-top: 1px solid #E2E8F0;
  }
  .about-city-chip {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    background: #F1F5F9;
    color: #334155;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 0.45rem 1.1rem;
    border-radius: 9999px;
    border: 1px solid #CBD5E1;
  }

  /* --------------------------------------------------------------------------
     7. CLOSING CTA BANNER
     -------------------------------------------------------------------------- */
  .about-cta-banner {
    background: linear-gradient(135deg, #0B2922 0%, #134B3E 100%);
    color: #FFFFFF;
    padding: 4.5rem 0;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .about-cta-content {
    position: relative;
    z-index: 2;
    max-width: 680px;
    margin: 0 auto;
  }
  .about-cta-title {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(1.85rem, 3.5vw, 2.45rem);
    font-weight: 900;
    color: #FFFFFF;
    margin-bottom: 0.75rem;
  }
  .about-cta-desc {
    font-size: 1rem;
    color: #D6E8DC;
    line-height: 1.6;
    margin-bottom: 1.85rem;
  }
  .about-cta-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
    flex-wrap: wrap;
  }

  /* Responsive Adjustments */
  @media (max-width: 900px) {
    .about-hero-grid,
    .about-story-grid,
    .about-founders-grid,
    .about-usp-layout {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
    .about-vision-grid {
      grid-template-columns: 1fr;
    }
    .about-stats-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 600px) {
    .about-services-grid,
    .about-founders-cards {
      grid-template-columns: 1fr;
    }
    .about-stats-grid {
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }
    .about-hero-corner-card {
      top: -10px;
      right: 8px;
      padding: 0.65rem 0.85rem;
      gap: 0.35rem;
    }
    .corner-card-item {
      font-size: 0.72rem;
    }
  }
</style>

<div class="about-page-wrapper">

  <!-- =======================================================================
       1. CLEAR HERO SECTION (Matches ByteCraft Reference Top Element 1:1)
       ======================================================================= -->
  <section class="about-hero-section">
    <div class="about-container">
      <div class="about-hero-grid">
        
        <!-- Left Content -->
        <div class="about-hero-content">
          <div class="about-hero-tag">ABOUT US</div>
          <h1 class="about-hero-title">
            We deliver cleaning<br>
            solutions that drive<br>
            real hygiene
          </h1>
          <p class="about-hero-desc">
            A1 Cleaning is a specialized mechanized cleaning brand that partners with ambitious homes, resorts, and businesses across Uttarakhand to create spotless, healthy spaces through industrial machinery, certified standards, and police-verified care.
          </p>
          <div>
            <a href="<?= SITE_URL ?>/services/" class="about-hero-btn">
              Let's Clean Together <span class="material-symbols-outlined icon-xs">arrow_forward</span>
            </a>
          </div>
        </div>

        <!-- Right Hero Visual -->
        <div class="about-hero-visual-wrap">
          <div class="about-hero-image-box">
            <img src="<?= SITE_URL ?>/assets/images/about%20page/Professional%20Green%20Team%20Cleaning%20a%20Modern%20Living%20Room.png" alt="A1 Cleaning Professional Team in Action" />
          </div>
          
          <!-- Floating Top-Right Badge Card (Matches Ideas Design Code Impact) -->
          <div class="about-hero-corner-card">
            <div class="corner-card-item item-blue">
              <span class="corner-dot dot-blue"></span>
              <span>Precision</span>
            </div>
            <div class="corner-card-item item-purple">
              <span class="corner-dot dot-purple"></span>
              <span>Machines</span>
            </div>
            <div class="corner-card-item item-green">
              <span class="corner-dot dot-green"></span>
              <span>Hygiene</span>
            </div>
            <div class="corner-card-item item-dark">
              <span class="corner-dot dot-dark"></span>
              <span>Trust</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Bottom Curved Wave Transition to Brand Story -->
    <div class="about-hero-wave-wrap">
      <svg viewBox="0 0 1440 60" fill="none" preserveAspectRatio="none">
        <path d="M0,0 C360,50 720,60 1080,25 C1240,10 1360,30 1440,45 L1440,60 L0,60 Z" fill="#FFFFFF"></path>
      </svg>
    </div>
  </section>

  <!-- =======================================================================
       2. BRAND STORY SECTION (PLACED ABOVE FOUNDERS AS REQUESTED!)
       ======================================================================= -->
  <section class="about-story-section">
    <div class="about-container">
      <div class="about-story-grid">
        
        <!-- Story Narrative Text (Taken directly from Reference Documents) -->
        <div>
          <div class="about-badge">
            <span class="material-symbols-outlined icon-xs">history_edu</span> Our Journey
          </div>
          <h2 class="about-h2">
            Why We Started A1 Cleaning in Kashipur
          </h2>
          <p style="font-size: 0.98rem; color: #334155; line-height: 1.65; margin-bottom: 1rem;">
            Living in the foothill belt of Kashipur, Jaspur, and Ramnagar brings unique environmental hygiene challenges: persistent industrial airborne soot, red mud tracked in during monsoons, and severe hard-water mineral crusting on bathroom tiles and overhead water tanks.
          </p>
          <p style="font-size: 0.95rem; color: #475569; line-height: 1.65; margin-bottom: 1rem;">
            Traditional daily dusting and maid mopping with cotton rags simply smears fine grime around and cannot extract millions of dust mites embedded deep inside fabric sofas or eliminate harmful microbial biofilm inside water storage tanks.
          </p>
          <p style="font-size: 0.95rem; color: #475569; line-height: 1.65; margin-bottom: 1.75rem;">
            We formed <strong>A1 Cleaning</strong> to introduce commercial single-disc rotary floor scrubbers, 1200W injection-extraction fabric extractors, and UV germicidal tank sterilization directly to local homes, resorts, and businesses at honest, transparent rates with <strong>Zero Advance Payment</strong>.
          </p>
          <div>
            <a href="<?= SITE_URL ?>/book-now/" class="btn-about-primary">
              Book a Doorstep Cleaning <span class="material-symbols-outlined icon-xs">arrow_forward</span>
            </a>
          </div>
        </div>

        <!-- Story Visual Card -->
        <div class="about-story-media">
          <img src="<?= SITE_URL ?>/assets/images/about%20page/A1%20Cleaning%20Team%20in%20Action.png" alt="A1 Cleaning Commercial Extraction Equipment" />
          <div class="about-story-bottom-tag">
            <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Serving 50+ Localities Across Uttarakhand
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =======================================================================
       3. MEET THE FOUNDERS SECTION (PLACED BELOW BRAND STORY AS REQUESTED!)
       ======================================================================= -->
  <section class="about-founders-section">
    <div class="about-container">
      <div class="about-founders-grid">
        
        <!-- Left Founder Intro -->
        <div>
          <div class="about-badge">
            <span class="material-symbols-outlined icon-xs">badge</span> The Leadership Team
          </div>
          <h2 class="about-h2">
            Meet the Founders
          </h2>
          <p class="about-subtext" style="margin-bottom: 1.5rem;">
            We are a hands-on leadership team combining operational machine rigor, certified hygiene protocols, and an uncompromising commitment to customer safety and satisfaction across Uttarakhand.
          </p>
          <a href="<?= SITE_URL ?>/contact/" class="btn-about-secondary" style="border-color: #22A06B; color: #22A06B;">
            Connect With Our Team <span class="material-symbols-outlined icon-xs">arrow_forward</span>
          </a>
        </div>

        <!-- Right Founder Profile Cards -->
        <div class="about-founders-cards">
          
          <!-- Founder 1: Praveen Bisht -->
          <div class="founder-card">
            <div class="founder-img-box">
              <img src="<?= SITE_URL ?>/assets/images/about%20page/founder_praveen.jpg" alt="Praveen Bisht - Co-Founder & CEO" />
            </div>
            <div class="founder-name">Praveen Bisht</div>
            <div class="founder-role">Co-Founder &amp; CEO</div>
            <p class="founder-bio">
              Oversees operational machinery, technical fleet dispatch, and enterprise resort partnerships across Kumaun.
            </p>
            <div class="founder-footer">
              <span class="founder-badge-pill">Operations &amp; Rigor</span>
              <a href="https://linkedin.com" target="_blank" rel="noopener" class="founder-social-link" title="LinkedIn Profile" aria-label="Praveen Bisht LinkedIn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76c.92 0 1.67-.75 1.67-1.67a1.67 1.67 0 0 0-1.67-1.67c-.92 0-1.67.75-1.67 1.67 0 .92.75 1.67 1.67 1.67m1.39 9.74v-8.37H5.07v8.37h2.78z"/></svg>
              </a>
            </div>
          </div>

          <!-- Founder 2: Kavita Bisht -->
          <div class="founder-card">
            <div class="founder-img-box">
              <img src="<?= SITE_URL ?>/assets/images/about%20page/founder_kavita.jpg" alt="Kavita Bisht - Co-Founder & COO" />
            </div>
            <div class="founder-name">Kavita Bisht</div>
            <div class="founder-role">Co-Founder &amp; COO</div>
            <p class="founder-bio">
              Directs customer quality assurance, eco-friendly chemical compliance, and technician background verification standards.
            </p>
            <div class="founder-footer">
              <span class="founder-badge-pill">Quality &amp; Standards</span>
              <a href="https://linkedin.com" target="_blank" rel="noopener" class="founder-social-link" title="LinkedIn Profile" aria-label="Kavita Bisht LinkedIn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76c.92 0 1.67-.75 1.67-1.67a1.67 1.67 0 0 0-1.67-1.67c-.92 0-1.67.75-1.67 1.67 0 .92.75 1.67 1.67 1.67m1.39 9.74v-8.37H5.07v8.37h2.78z"/></svg>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- =======================================================================
       4. VISION & CORE VALUES (3 PILLARS - Matches Reference Vision Section)
       ======================================================================= -->
  <section class="about-vision-section">
    <div class="about-container">
      
      <div class="about-vision-header">
        <div class="about-badge">
          <span class="material-symbols-outlined icon-xs">visibility</span> Our Vision
        </div>
        <h2 class="about-h2">
          Building Cleaner, Healthier Living Spaces
        </h2>
        <p class="about-subtext" style="margin-bottom: 0;">
          We envision a Uttarakhand where every family, resort, and commercial facility has easy access to certified, reliable, and mechanized hygiene.
        </p>
      </div>

      <div class="about-vision-grid">
        
        <!-- Pillar 1 -->
        <div class="vision-card">
          <div class="vision-icon-wrap">
            <span class="material-symbols-outlined icon-md">verified_user</span>
          </div>
          <div class="vision-title">People First</div>
          <p class="vision-desc">
            Zero advance payment policy. We build long-term trust with police-verified technicians, transparent fixed quotations, and complete respect for customer privacy and property.
          </p>
        </div>

        <!-- Pillar 2 -->
        <div class="vision-card">
          <div class="vision-icon-wrap">
            <span class="material-symbols-outlined icon-md">precision_manufacturing</span>
          </div>
          <div class="vision-title">Mechanized Rigor</div>
          <p class="vision-desc">
            We measure outcomes by clinical cleanliness. Industrial German single-disc scrubbers, 1200W fabric extractors, and UV radiation lamps outperform manual cleaning by over 10x.
          </p>
        </div>

        <!-- Pillar 3 -->
        <div class="vision-card">
          <div class="vision-icon-wrap">
            <span class="material-symbols-outlined icon-md">eco</span>
          </div>
          <div class="vision-title">Future Ready &amp; Eco-Safe</div>
          <p class="vision-desc">
            Non-acidic formulations that are toddler-safe, pet-friendly, and surface-safe. Zero toxic fumes, ensuring pure indoor air quality and surface longevity.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =======================================================================
       5. WHAT WE DO & USP SECTION (Matches Reference Layout 1:1)
       ======================================================================= -->
  <section class="about-usp-section">
    <div class="about-container">
      
      <div style="margin-bottom: 2.5rem;">
        <div class="about-badge">
          <span class="material-symbols-outlined icon-xs">home_repair_service</span> What We Do
        </div>
        <h2 class="about-h2">
          Solutions That Fuel Everyday Hygiene
        </h2>
        <p class="about-subtext" style="margin-bottom: 0;">
          Commercial-grade mechanized solutions organized into targeted care categories for residential and commercial properties.
        </p>
      </div>

      <div class="about-usp-layout">
        
        <!-- Left: 6 Service Cards Grid -->
        <div class="about-services-grid">
          
          <div class="about-service-item">
            <div class="about-service-header">
              <div class="about-service-icon">
                <span class="material-symbols-outlined icon-sm">cleaning_services</span>
              </div>
              <h3 class="about-service-name">Home &amp; Villa Deep Clean</h3>
            </div>
            <p class="about-service-text">
              Full home mechanized floor scrubbing, cobweb removal, doors, windows, balconies &amp; fans.
            </p>
          </div>

          <div class="about-service-item">
            <div class="about-service-header">
              <div class="about-service-icon">
                <span class="material-symbols-outlined icon-sm">countertops</span>
              </div>
              <h3 class="about-service-name">Kitchen Degreasing</h3>
            </div>
            <p class="about-service-text">
              Targeted grease extraction for chimneys, stoves, cabinets, tile grout, sinks &amp; appliances.
            </p>
          </div>

          <div class="about-service-item">
            <div class="about-service-header">
              <div class="about-service-icon">
                <span class="material-symbols-outlined icon-sm">bathtub</span>
              </div>
              <h3 class="about-service-name">Bathroom &amp; Tile Descaling</h3>
            </div>
            <p class="about-service-text">
              Severe hard-water crust removal, tile buffing, tap polishing, and full toilet sanitization.
            </p>
          </div>

          <div class="about-service-item">
            <div class="about-service-header">
              <div class="about-service-icon">
                <span class="material-symbols-outlined icon-sm">weekend</span>
              </div>
              <h3 class="about-service-name">Sofa &amp; Fabric Extraction</h3>
            </div>
            <p class="about-service-text">
              Pressurized shampoo injection and 1200W vacuum extraction for sofas, mattresses &amp; chairs.
            </p>
          </div>

          <div class="about-service-item">
            <div class="about-service-header">
              <div class="about-service-icon">
                <span class="material-symbols-outlined icon-sm">dry_cleaning</span>
              </div>
              <h3 class="about-service-name">Carpet &amp; Rug Deep Wash</h3>
            </div>
            <p class="about-service-text">
              Deep-fiber rotary agitation, tough stain elimination, and accelerated moisture extraction.
            </p>
          </div>

          <div class="about-service-item">
            <div class="about-service-header">
              <div class="about-service-icon">
                <span class="material-symbols-outlined icon-sm">water_drop</span>
              </div>
              <h3 class="about-service-name">UV Tank Sanitization</h3>
            </div>
            <p class="about-service-text">
              Sediment sludge vacuuming, high-pressure rotary scrub, and antibacterial UV irradiation.
            </p>
          </div>

        </div>

        <!-- Right: Solid Deep Green USP Card -->
        <div class="about-usp-card">
          <div>
            <span class="about-usp-tag">OUR USP</span>
            <h3 class="about-usp-heading">Why Clients Choose A1 Cleaning</h3>
            <ul class="about-usp-list">
              <li>
                <span class="material-symbols-outlined">check_circle</span>
                <span><strong>Zero Advance Payment:</strong> Pay only after personal inspection and complete post-service satisfaction.</span>
              </li>
              <li>
                <span class="material-symbols-outlined">check_circle</span>
                <span><strong>Mechanized Superiority:</strong> Heavy-duty German scrubbers and high-lift extractors.</span>
              </li>
              <li>
                <span class="material-symbols-outlined">check_circle</span>
                <span><strong>100% Police-Verified Crew:</strong> Uniformed, background-vetted, respectful professionals.</span>
              </li>
              <li>
                <span class="material-symbols-outlined">check_circle</span>
                <span><strong>Eco-Safe &amp; Non-Acidic:</strong> Formulations that safeguard your family, pets, and fittings.</span>
              </li>
              <li>
                <span class="material-symbols-outlined">check_circle</span>
                <span><strong>Transparent Fixed Pricing:</strong> Clear upfront scope with zero hidden travel or chemical fees.</span>
              </li>
            </ul>
          </div>

          <a href="<?= SITE_URL ?>/book-now/" class="btn-about-primary" style="background: #34D399; color: #0B2922; justify-content: center;">
            Book Your Service Now <span class="material-symbols-outlined icon-xs">arrow_forward</span>
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- =======================================================================
       6. SOCIAL PROOF & STATS (Matches Reference Numbers Section)
       ======================================================================= -->
  <section class="about-proof-section">
    <div class="about-container">
      
      <div style="margin-bottom: 2.5rem;">
        <div class="about-badge">
          <span class="material-symbols-outlined icon-xs">verified</span> Trusted Across Uttarakhand
        </div>
        <h2 class="about-h2">
          Numbers That Speak For Our Dedication
        </h2>
      </div>

      <div class="about-stats-grid">
        
        <div class="about-stat-box">
          <div class="about-stat-num">5,000+</div>
          <div class="about-stat-label">Happy Cleaned Spaces</div>
        </div>

        <div class="about-stat-box">
          <div class="about-stat-num">50+</div>
          <div class="about-stat-label">Localities &amp; Colonies Covered</div>
        </div>

        <div class="about-stat-box">
          <div class="about-stat-num" style="color: #22A06B;">4.9 ★</div>
          <div class="about-stat-label">Average Google Customer Rating</div>
        </div>

        <div class="about-stat-box">
          <div class="about-stat-num">98%</div>
          <div class="about-stat-label">Client Retention &amp; Referral Rate</div>
        </div>

      </div>

      <!-- Service Regions -->
      <div class="about-cities-strip">
        <span style="font-size: 0.85rem; font-weight: 700; color: #64748B;">Our Primary Service Hubs:</span>
        <span class="about-city-chip"><span class="material-symbols-outlined icon-xs" style="color: #22A06B;">location_on</span> Kashipur (HQ)</span>
        <span class="about-city-chip"><span class="material-symbols-outlined icon-xs" style="color: #22A06B;">location_on</span> Jaspur</span>
        <span class="about-city-chip"><span class="material-symbols-outlined icon-xs" style="color: #22A06B;">location_on</span> Ramnagar</span>
        <span class="about-city-chip"><span class="material-symbols-outlined icon-xs" style="color: #22A06B;">location_on</span> Jim Corbett Resorts</span>
      </div>

    </div>
  </section>

  <!-- =======================================================================
       7. CLOSING CTA BANNER (Matches Reference Bottom CTA)
       ======================================================================= -->
  <section class="about-cta-banner">
    <div class="about-container">
      <div class="about-cta-content">
        <div class="about-badge badge-white">
          <span class="material-symbols-outlined icon-xs">bolt</span> Instant Doorstep Service
        </div>
        <h2 class="about-cta-title">
          Ready to Experience Real Mechanized Hygiene?
        </h2>
        <p class="about-cta-desc">
          We are always excited to partner with ambitious families, resorts, and businesses across Uttarakhand. Book your professional cleaning in under 2 minutes.
        </p>
        <div class="about-cta-actions">
          <a href="<?= SITE_URL ?>/book-now/" class="btn-about-primary" style="background: #34D399; color: #0B2922; font-size: 1rem; padding: 0.95rem 2rem;">
            Book Online Now <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
          <a href="tel:+917906366271" class="btn-about-secondary" style="background: transparent; color: #FFFFFF; border-color: rgba(255,255,255,0.4); font-size: 1rem; padding: 0.95rem 2rem;">
            <span class="material-symbols-outlined icon-sm">call</span> Call +91 79063 66271
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<?php require __DIR__ . '/../components/footer.php'; ?>
