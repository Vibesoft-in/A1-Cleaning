<?php
/**
 * Dedicated About Us View: /about/ and /about-us/
 * 8-Stage Brand Storytelling Architecture (Story -> Characters -> Conflict -> Resolution -> Sequel -> Dialogue -> Setting -> Credits)
 * Built strictly from A1 Cleaning Brand Catalogue, Brand Identity Board & Website SEO Blueprint
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

// SEO Metadata (Exact Blueprint Rules: Title <= 60 chars, Meta 140-160 chars, Single H1, Self-Canonical)
$pageTitle = "About A1 Cleaning | Our Team, Vision and Values";
$pageDescription = "Meet A1 Cleaning in Kashipur, Jaspur & Ramnagar: our story, vision, mission, machinery and verified cleaning team. Call +91 79063 66271 for a free quote.";
$canonicalUrl = SeoHelper::getCanonicalUrl('about');
$currentRoute = 'about';

// Page-specific About FAQs (Rendered visibly AND synced 1:1 with FAQPage JSON-LD)
$aboutFaqs = [
    [
        'q' => 'Who is A1 Cleaning and where is your main office located?',
        'a' => 'A1 Cleaning is a professional mechanized cleaning brand headquartered at Kumaun Market, Ramnagar Rd, Kashipur, Uttarakhand 244713. From our Kashipur hub, our uniformed doorstep teams serve residential, commercial, and resort clients across a 60 km radius including Kashipur, Jaspur, and Ramnagar.'
    ],
    [
        'q' => 'What makes A1 Cleaning different from regular manual cleaners?',
        'a' => 'Unlike manual dusting and acidic mopping, A1 Cleaning deploys industrial single-disc rotary scrubbers, 1200W injection-extraction fabric cleaners, high-pressure washers, and UV germicidal tank disinfectors paired with non-acidic, baby-safe and pet-friendly formulations.'
    ],
    [
        'q' => 'Are your technicians police-verified and trained?',
        'a' => 'Yes. Every A1 Cleaning technician undergoes background and police verification, government ID validation, and hands-on equipment training. Crew members arrive in branded uniforms wearing official ID badges, protective gloves, and indoor shoe covers.'
    ],
    [
        'q' => 'Do I have to pay any advance amount before booking?',
        'a' => 'No. We operate on a strict Zero Advance Payment and Pay After 100% Satisfaction policy. Once our team completes your cleaning, our supervisor conducts a joint inspection with you before collecting payment via UPI, card, or cash.'
    ]
];

// Team Characters Data (Grounded in Brand Assets & Identity Board)
$teamMembers = [
    [
        'id' => 'praveen-bisht',
        'name' => 'Praveen Bisht',
        'role' => 'Co-Founder & CEO',
        'pillar' => 'Operations & Equipment Fleet',
        'photo' => SITE_URL . '/assets/images/about%20page/founder_praveen.jpg',
        'short' => 'Leads commercial machine procurement, mobile fleet dispatch across Kumaun, and commercial & resort partnerships in Ramnagar and SIIDCUL.',
        'badge' => 'Machine Fleet & Dispatch',
        'full_bio' => 'Praveen oversees A1 Cleaning’s technical operations and rapid doorstep dispatch out of Kashipur. By standardizing commercial single-disc rotary scrubbers, high-lift moisture extractors, and 6-stage water tank sanitation kits across every vehicle, he ensures residential flats, SIIDCUL offices, and Jim Corbett resorts receive consistent, heavy-duty results without contractor delays.',
        'highlights' => ['Single-disc rotary & Kärcher extraction standards', '60 km mobile dispatch logistics', 'Commercial & Corbett resort quality planning']
    ],
    [
        'id' => 'kavita-bisht',
        'name' => 'Kavita Bisht',
        'role' => 'Co-Founder & COO',
        'pillar' => 'Quality Assurance & Safety',
        'photo' => SITE_URL . '/assets/images/about%20page/founder_kavita.jpg',
        'short' => 'Directs technician police verification, non-acidic chemical compliance, customer inspection checklists, and Zero Advance service standards.',
        'badge' => 'Verification & Quality',
        'full_bio' => 'Kavita built A1 Cleaning’s customer trust framework from day one. She manages staff background verification, eco-safe non-acidic chemical selection suitable for homes with toddlers and pets, transparent scope quotations, and the mandatory post-service walkthrough so every client inspects their space before paying a single rupee.',
        'highlights' => ['100% police-verified & ID-badged crew screening', 'Non-acidic, child & pet-safe formulation SOPs', '6-step booking & walkthrough inspection protocol']
    ],
    [
        'id' => 'rohit-field-team',
        'name' => 'Rohit Singh & Crew',
        'role' => 'Lead Cleaning Executive (ID: A10024) & Field Specialists',
        'pillar' => 'On-Site Execution & Care',
        'photo' => SITE_URL . '/assets/images/theme/hero-cleaner.jpg',
        'short' => 'Trained, uniformed, ID-badged doorstep specialists executing deep home, sofa, kitchen, bathroom descaling & UV tank sanitization.',
        'badge' => 'Verified Field Specialists',
        'full_bio' => 'Wearing the signature Deep Green A1 Cleaning uniform and official crew ID card, our trained field specialists execute every room-by-room checklist with respect for your family’s privacy and belongings. Teams arrive equipped with shoe covers, drop cloths, furniture sliders, and sterilized extraction heads.',
        'highlights' => ['Branded uniforms, ID cards & indoor shoe covers', 'Furniture protection & zero hidden add-ons', 'Post-service walkthrough verification']
    ]
];

// Build Server-Side Structured Data Graph (AboutPage + ProfessionalService + BreadcrumbList + VideoObject + FAQPage)
$aboutSchema = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "AboutPage",
            "@id" => $canonicalUrl . "#webpage",
            "url" => $canonicalUrl,
            "name" => $pageTitle,
            "description" => $pageDescription,
            "inLanguage" => "en-IN",
            "dateModified" => "2026-11-25",
            "mainEntity" => ["@id" => CANONICAL_DOMAIN . "/#business"],
            "breadcrumb" => ["@id" => $canonicalUrl . "#breadcrumb"]
        ],
        [
            "@type" => "ProfessionalService",
            "@id" => CANONICAL_DOMAIN . "/#business",
            "name" => BUSINESS_NAME,
            "alternateName" => BUSINESS_NAME . " – " . BUSINESS_TAGLINE,
            "slogan" => BUSINESS_SLOGAN,
            "url" => CANONICAL_DOMAIN . "/",
            "logo" => SITE_URL . "/assets/images/brand/logo-round-badge.png",
            "image" => SITE_URL . "/assets/images/about%20page/A1%20Cleaning%20Team%20in%20Action.png",
            "description" => "Professional residential, kitchen, bathroom, sofa, carpet, water tank, curtain, move-in/move-out and commercial deep cleaning in Kashipur, Jaspur and Ramnagar, Uttarakhand.",
            "telephone" => BUSINESS_PHONE_RAW,
            "email" => BUSINESS_EMAIL,
            "priceRange" => "₹₹",
            "founder" => [
                ["@type" => "Person", "name" => "Praveen Bisht", "jobTitle" => "Co-Founder & CEO"],
                ["@type" => "Person", "name" => "Kavita Bisht", "jobTitle" => "Co-Founder & COO"]
            ],
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => BUSINESS_STREET,
                "addressLocality" => BUSINESS_CITY,
                "addressRegion" => BUSINESS_STATE,
                "postalCode" => BUSINESS_POSTCODE,
                "addressCountry" => BUSINESS_COUNTRY
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => BUSINESS_LATITUDE,
                "longitude" => BUSINESS_LONGITUDE
            ],
            "hasMap" => LINK_GBP_CID,
            "areaServed" => [
                [
                    "@type" => "GeoCircle",
                    "geoMidpoint" => [
                        "@type" => "GeoCoordinates",
                        "latitude" => BUSINESS_LATITUDE,
                        "longitude" => BUSINESS_LONGITUDE
                    ],
                    "geoRadius" => (string)SERVICE_RADIUS_METERS
                ],
                ["@type" => "City", "name" => "Kashipur", "sameAs" => "https://en.wikipedia.org/wiki/Kashipur,_Uttarakhand"],
                ["@type" => "City", "name" => "Jaspur", "sameAs" => "https://en.wikipedia.org/wiki/Jaspur"],
                ["@type" => "City", "name" => "Ramnagar", "sameAs" => "https://en.wikipedia.org/wiki/Ramnagar,_Uttarakhand"]
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => BUSINESS_HOURS_DAYS,
                    "opens" => BUSINESS_HOURS_OPEN,
                    "closes" => BUSINESS_HOURS_CLOSE
                ]
            ],
            "contactPoint" => [
                [
                    "@type" => "ContactPoint",
                    "telephone" => BUSINESS_PHONE_RAW,
                    "email" => BUSINESS_EMAIL,
                    "contactType" => "customer service",
                    "areaServed" => "IN-UT",
                    "availableLanguage" => ["en", "hi"]
                ]
            ],
            "sameAs" => [LINK_GBP_CID, LINK_FACEBOOK, LINK_INSTAGRAM, LINK_JUSTDIAL]
        ],
        [
            "@type" => "BreadcrumbList",
            "@id" => $canonicalUrl . "#breadcrumb",
            "itemListElement" => [
                ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => CANONICAL_DOMAIN . "/"],
                ["@type" => "ListItem", "position" => 2, "name" => "About Us", "item" => $canonicalUrl]
            ]
        ],
        [
            "@type" => "VideoObject",
            "name" => "A1 Cleaning Mechanized Hygiene in Action — Uttarakhand Field Reel",
            "description" => "Watch A1 Cleaning’s uniformed team deploy single-disc floor scrubbers, sofa extraction machines, and 6-stage UV water tank disinfection across Kashipur, Jaspur, and Ramnagar.",
            "thumbnailUrl" => SITE_URL . "/assets/images/about%20page/A1%20Cleaning%20Team%20in%20Action.png",
            "contentUrl" => SITE_URL . "/assets/cleaning%20videos/deep_home_cleaning_6ce7a0e5.mp4",
            "uploadDate" => "2026-11-08",
            "publisher" => ["@id" => CANONICAL_DOMAIN . "/#business"]
        ],
        [
            "@type" => "FAQPage",
            "mainEntity" => array_map(function($item) {
                return [
                    "@type" => "Question",
                    "name" => $item['q'],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => $item['a']
                    ]
                ];
            }, $aboutFaqs)
        ]
    ]
];

$pageSchemaJson = json_encode($aboutSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

require __DIR__ . '/../components/header.php';
?>

<style>
  /* ==========================================================================
     STORYTELLING ABOUT US STYLES (8-Stage Orbit Narrative Framework)
     Strict 4-Tier Palette:
     - Main Background: White (#FFFFFF)
     - Headings & Dark Accents: Deep Green (#0B2922)
     - Card / Object Backgrounds: Fresh Green (#22A06B)
     - Icons, Badges & Pill Backgrounds: Mint Green (#EAF3EE)
     ========================================================================== */
  .about-story-page {
    background: #FFFFFF;
    color: #263238;
    font-family: var(--font-body);
  }
  .about-story-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 clamp(1rem, 3.5vw, 1.75rem);
  }

  /* Chapter Labels & Headings */
  .story-kicker {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    font-size: 0.74rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #0B2922;
    background: #EAF3EE;
    border: 1px solid #C5DFD0;
    padding: 0.36rem 0.92rem;
    border-radius: 9999px;
    margin-bottom: 0.85rem;
  }
  .story-kicker .material-symbols-outlined {
    color: #0B2922;
    background: #FFFFFF;
    border-radius: 50%;
    padding: 3px;
  }
  .story-chapter-title {
    font-family: var(--font-heading);
    font-size: clamp(1.75rem, 3vw, 2.35rem);
    font-weight: 800;
    color: #0B2922;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin-bottom: 0.9rem;
  }
  .story-chapter-lead {
    font-size: 0.98rem;
    color: #263238;
    line-height: 1.65;
    margin-bottom: 1.15rem;
  }

  /* Custom Semantic Breadcrumb Trail */
  .a1-story-trail {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    font-size: 0.72rem;
    font-weight: 600;
    color: #263238;
    margin-bottom: 0.3rem;
  }
  .a1-story-trail a {
    color: #22A06B;
    font-weight: 700;
    text-decoration: none;
  }
  .a1-story-trail a:hover {
    text-decoration: underline;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 1: THE STORY (Compact Above-the-Fold Hero + Background Photo + Translucent White Veil)
     -------------------------------------------------------------------------- */
  .chapter-story-hero {
    background: #FFFFFF;
    color: #263238;
    min-height: 83vh;
    padding: 2.25rem 0 6.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid #E2ECE5;
  }
  .about-hero-bg-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 42%;
    opacity: 0.90;
    pointer-events: none;
  }
  .about-hero-bg-veil {
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 68% 54% at 50% 24%, rgba(255, 255, 255, 0.78) 0%, rgba(255, 255, 255, 0.34) 65%, rgba(255, 255, 255, 0.14) 100%),
      linear-gradient(180deg, rgba(255, 255, 255, 0.16) 0%, rgba(255, 255, 255, 0.08) 78%, #FFFFFF 100%);
    pointer-events: none;
  }
  .hero-story-inner {
    position: relative;
    z-index: 2;
    max-width: 1080px;
    margin: 0 auto;
    text-align: center;
  }
  .chapter-story-hero .story-kicker {
    margin-bottom: 0.35rem;
    padding: 0.24rem 0.8rem;
    font-size: 0.68rem;
  }
  .hero-story-h1 {
    font-family: var(--font-heading);
    font-size: clamp(1.5rem, 2.2vw, 1.9rem);
    font-weight: 900;
    color: #0B2922;
    line-height: 1.15;
    letter-spacing: -0.025em;
    margin-bottom: 0.42rem;
    text-shadow: 0 2px 16px rgba(255, 255, 255, 0.92);
  }
  .heading-accent {
    color: #22A06B;
  }
  .hero-story-manifesto {
    font-size: 0.92rem;
    color: #263238;
    line-height: 1.5;
    max-width: 860px;
    margin: 0 auto 1.25rem;
    text-shadow: 0 1px 12px rgba(255, 255, 255, 0.95);
  }
  .hero-story-manifesto strong {
    color: #0B2922;
  }
  .hero-story-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-bottom: 0.85rem;
  }
  .hero-story-actions .btn {
    padding: 0.5rem 1.35rem;
    font-size: 0.88rem;
  }
  .btn-about-secondary {
    background: #EAF3EE;
    color: #0B2922;
    border: 1.5px solid #0B2922;
    border-radius: var(--radius-pill);
    padding: 0.58rem 1.45rem;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    transition: all 0.2s ease;
  }
  .btn-about-secondary:hover {
    background: #0B2922;
    border-color: #0B2922;
    color: #FFFFFF;
  }

  /* Floating Divider Bridge (Straddles Hero Photo & Next White Section 50/50) */
  .hero-divider-bridge {
    position: relative;
    z-index: 10;
    margin-top: -68px;
    margin-bottom: 0;
  }
  .hero-divider-bridge .hero-story-inner {
    max-width: 1140px;
  }
  .hero-divider-bridge .story-values-row {
    margin-top: 2.5rem;
  }
  .story-belief-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 2.5rem;
    text-align: left;
    margin-bottom: 0;
  }
  .story-belief-card {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 16px;
    padding: 1.05rem 1.25rem;
    box-shadow: 0 14px 32px rgba(11, 41, 34, 0.08);
    color: #263238;
  }
  .story-belief-card h2 {
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #0B2922;
    margin: 0 0 0.28rem;
    display: flex;
    align-items: center;
    gap: 0.48rem;
  }
  .story-belief-card h2 .material-symbols-outlined {
    color: #22A06B;
    background: #FFFFFF;
    border: 1px solid #CEE3D6;
    border-radius: 7px;
    padding: 3px;
    font-size: 15px;
  }
  .story-belief-card p {
    font-size: 0.8rem;
    color: #263238;
    line-height: 1.44;
    margin: 0;
  }
  .story-belief-card p strong {
    color: #0B2922;
    font-weight: 800;
  }

  /* 5 Core Brand Values Strip (Heading-Only Clean Pills) */
  .story-values-row {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 0.65rem;
    text-align: center;
  }
  .story-value-chip {
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1.5px solid #CEE3D6;
    border-radius: 12px;
    padding: 0.55rem 0.65rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.04);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .story-value-chip strong {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    font-size: 0.8rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0;
    white-space: nowrap;
  }
  .story-value-chip strong span {
    color: #22A06B;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 2: THE CHARACTERS (White Canvas + Fresh Green Cards + Mint Pills)
     -------------------------------------------------------------------------- */
  .chapter-characters {
    padding: 4rem 0 4.5rem;
    background: #FFFFFF;
  }
  .chapter-header-center {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 2.75rem;
  }
  .characters-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.75rem;
  }
  .character-card {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 20px;
    padding: 1.75rem 1.5rem 1.5rem;
    text-align: center;
    box-shadow: 0 8px 22px rgba(11, 41, 34, 0.06);
    display: flex;
    flex-direction: column;
    color: #263238;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .character-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 30px rgba(11, 41, 34, 0.1);
  }
  .character-avatar-ring {
    width: 118px;
    height: 118px;
    border-radius: 50%;
    padding: 4px;
    background: linear-gradient(135deg, #22A06B, #0B2922);
    margin: 0 auto 1.1rem;
    flex-shrink: 0;
  }
  .character-avatar-ring img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    object-position: top center;
    border: 3px solid #FFFFFF;
    display: block;
  }
  .character-name {
    font-family: var(--font-heading);
    font-size: 1.18rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0 0 0.25rem;
  }
  .character-role {
    font-size: 0.76rem;
    font-weight: 800;
    color: #22A06B;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.75rem;
  }
  .character-bio-snippet {
    font-size: 0.86rem;
    color: #263238;
    line-height: 1.55;
    margin-bottom: 1.25rem;
  }
  .character-card-footer {
    margin-top: auto;
    padding-top: 0.9rem;
    border-top: 1px solid rgba(11, 41, 34, 0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
  }
  .character-pill {
    font-size: 0.72rem;
    font-weight: 800;
    color: #0B2922;
    background: #FFFFFF;
    border: 1px solid #CEE3D6;
    padding: 0.3rem 0.75rem;
    border-radius: 9999px;
  }
  .character-bio-btn {
    background: #22A06B;
    border: none;
    color: #FFFFFF;
    font-weight: 700;
    font-size: 0.8rem;
    border-radius: 9999px;
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    cursor: pointer;
    padding: 0.35rem 0.9rem;
    min-height: 36px;
    transition: background 0.2s ease;
  }
  .character-bio-btn:hover {
    background: #0B2922;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 3: THE CONFLICT (White Canvas + Mint Visual Frame)
     -------------------------------------------------------------------------- */
  .chapter-conflict {
    padding: 4.5rem 0;
    background: #FFFFFF;
    border-top: 1px solid #E2ECE5;
    border-bottom: 1px solid #E2ECE5;
  }
  .split-story-grid {
    display: grid;
    grid-template-columns: 1fr 1.05fr;
    gap: 3.25rem;
    align-items: center;
  }
  .conflict-visual-card {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 20px;
    padding: 1rem;
    box-shadow: 0 8px 24px rgba(11, 41, 34, 0.06);
  }
  .conflict-ba-pair {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.75rem;
    margin-bottom: 0.85rem;
  }
  .conflict-ba-item {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4 / 3;
    background: #FFFFFF;
  }
  .conflict-ba-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .conflict-ba-tag {
    position: absolute;
    top: 8px;
    left: 8px;
    font-size: 0.68rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    padding: 3px 9px;
    border-radius: 9999px;
  }
  .tag-before { background: #0B2922; color: #FFFFFF; }
  .tag-after { background: #22A06B; color: #FFFFFF; }
  .conflict-visual-caption {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    font-size: 0.8rem;
    color: #263238;
    padding: 0.25rem 0.25rem 0;
  }
  .conflict-visual-caption a {
    color: #0B2922 !important;
    background: #FFFFFF;
    border: 1px solid #CEE3D6;
    padding: 0.28rem 0.7rem;
    border-radius: 9999px;
    text-decoration: none;
  }

  /* Timeline Milestones */
  .story-timeline {
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
    margin-top: 1.4rem;
    border-left: 2px solid #22A06B;
    padding-left: 1.25rem;
  }
  .timeline-step {
    position: relative;
  }
  .timeline-step::before {
    content: '';
    position: absolute;
    left: -1.68rem;
    top: 5px;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    background: #22A06B;
    border: 2px solid #EAF3EE;
  }
  .timeline-step-label {
    display: inline-block;
    font-size: 0.7rem;
    font-weight: 800;
    color: #0B2922;
    background: #EAF3EE;
    padding: 0.16rem 0.55rem;
    border-radius: 9999px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.2rem;
  }
  .timeline-step-title {
    font-size: 0.94rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0.1rem 0 0.2rem;
  }
  .timeline-step-text {
    font-size: 0.84rem;
    color: #263238;
    line-height: 1.5;
    margin: 0;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 4: THE RESOLUTION (White Canvas + Fresh Green Cards + Mint Icons)
     -------------------------------------------------------------------------- */
  .chapter-resolution {
    padding: 4.5rem 0;
    background: #FFFFFF;
  }
  .resolution-proof-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.9rem;
    margin: 1.5rem 0;
  }
  .proof-metric-box {
    background: #22A06B;
    border: 1.5px solid #1B8759;
    border-radius: 14px;
    padding: 1rem 1.15rem;
    box-shadow: 0 8px 20px rgba(34, 160, 107, 0.14);
  }
  .proof-metric-val {
    font-family: var(--font-heading);
    font-size: 1.65rem;
    font-weight: 900;
    color: #FFFFFF;
    line-height: 1.1;
  }
  .proof-metric-lbl {
    font-size: 0.78rem;
    color: #EAF3EE;
    font-weight: 600;
    margin-top: 0.25rem;
  }
  .differentiators-list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }
  .differentiators-list li {
    display: flex;
    align-items: flex-start;
    gap: 0.7rem;
    font-size: 0.9rem;
    color: #263238;
    line-height: 1.48;
  }
  .differentiators-list li strong {
    color: #0B2922;
  }
  .differentiators-list li .material-symbols-outlined {
    color: #0B2922;
    background: #EAF3EE;
    border-radius: 50%;
    padding: 4px;
    font-size: 17px;
    flex-shrink: 0;
    margin-top: 0;
  }

  /* 6-Step Workflow Stack (Mint Cards + White Number Badges) */
  .resolution-steps-stack {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }
  .res-step-card {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 14px;
    padding: 0.95rem 1.15rem;
    display: flex;
    align-items: flex-start;
    gap: 0.95rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.04);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .res-step-card:hover {
    transform: translateX(3px);
    box-shadow: 0 8px 18px rgba(11, 41, 34, 0.08);
  }
  .res-step-num {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #FFFFFF;
    border: 1px solid #CEE3D6;
    color: #22A06B;
    font-family: var(--font-heading);
    font-size: 0.86rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .res-step-title {
    font-size: 0.95rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0 0 0.15rem;
  }
  .res-step-desc {
    font-size: 0.82rem;
    color: #263238;
    line-height: 1.45;
    margin: 0;
  }

  /* 9 Service Catalogue Directory Strip (Mint Bar + Crisp White Pills) */
  .catalogue-links-bar {
    margin-top: 2.75rem;
    padding: 1.35rem 1.5rem;
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 16px;
    box-shadow: 0 6px 18px rgba(11, 41, 34, 0.05);
  }
  .catalogue-links-title {
    font-size: 0.88rem;
    font-weight: 800;
    color: #0B2922;
    margin-bottom: 0.85rem;
    display: flex;
    align-items: center;
    gap: 0.55rem;
  }
  .catalogue-links-title .material-symbols-outlined {
    background: #FFFFFF !important;
    border: 1px solid #CEE3D6;
    color: #22A06B !important;
    border-radius: 8px;
    padding: 5px;
    font-size: 18px;
  }
  .catalogue-chips-wrap {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
  }
  .catalogue-link-chip {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    background: #FFFFFF;
    border: 1px solid #CEE3D6;
    color: #0B2922;
    font-size: 0.8rem;
    font-weight: 700;
    padding: 0.42rem 0.85rem;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  .catalogue-link-chip:hover {
    background: #22A06B;
    border-color: #22A06B;
    color: #FFFFFF;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 5: THE SEQUEL (White Canvas + Mint Pillar Cards)
     -------------------------------------------------------------------------- */
  .chapter-sequel {
    position: relative;
    overflow: hidden;
    padding: 4.5rem 0;
    background: #FFFFFF;
    border-top: 1px solid #E2ECE5;
    border-bottom: 1px solid #E2ECE5;
  }
  .sequel-vision-pillars {
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
    margin-top: 1.25rem;
  }
  .sequel-pillar-item {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-left: 4px solid #22A06B;
    border-radius: 14px;
    padding: 1rem 1.2rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.04);
  }
  .sequel-pillar-item h3 {
    font-size: 0.96rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0 0 0.22rem;
  }
  .sequel-pillar-item p {
    font-size: 0.83rem;
    color: #263238;
    line-height: 1.5;
    margin: 0;
  }
  .sequel-visual-frame {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 1.5px solid #CEE3D6;
    box-shadow: 0 12px 30px rgba(11, 41, 34, 0.08);
    aspect-ratio: 16 / 10;
    background: #FFFFFF;
  }
  .sequel-visual-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .sequel-visual-badge {
    position: absolute;
    bottom: 14px;
    left: 14px;
    right: 14px;
    background: #FFFFFF;
    color: #263238;
    border: 1px solid #CEE3D6;
    border-radius: 12px;
    padding: 0.72rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    font-size: 0.8rem;
    box-shadow: 0 8px 20px rgba(11, 41, 34, 0.14);
  }

  /* --------------------------------------------------------------------------
     CHAPTER 6: THE DIALOGUE (White Canvas + Fresh Green Cards)
     -------------------------------------------------------------------------- */
  .chapter-dialogue {
    padding: 4.5rem 0;
    background: #FFFFFF;
  }
  .dialogue-video-card {
    background: #22A06B;
    border: 1.5px solid #1B8759;
    border-radius: 20px;
    padding: 1rem;
    color: #FFFFFF;
    box-shadow: 0 12px 30px rgba(34, 160, 107, 0.16);
  }
  .dialogue-video-box {
    position: relative;
    border-radius: 14px;
    overflow: hidden;
    background: #EAF3EE;
    aspect-ratio: 16 / 10;
  }
  .dialogue-video-el {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .dialogue-video-controls {
    position: absolute;
    bottom: 12px;
    right: 12px;
    display: flex;
    gap: 0.45rem;
    z-index: 4;
  }
  .dialogue-vbtn {
    background: #EAF3EE;
    color: #0B2922;
    border: 1px solid #C5DFD0;
    border-radius: 9999px;
    padding: 0.4rem 0.75rem;
    font-size: 0.75rem;
    font-weight: 700;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    min-height: 36px !important;
  }
  .dialogue-vbtn:hover {
    background: #0B2922;
    border-color: #0B2922;
    color: #FFFFFF;
  }
  .dialogue-clip-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 0.45rem;
    margin-top: 0.85rem;
  }
  .dialogue-clip-tab {
    background: #EAF3EE;
    color: #0B2922;
    border: none;
    border-radius: 9999px;
    padding: 0.35rem 0.85rem;
    font-size: 0.74rem;
    font-weight: 700;
    cursor: pointer;
    min-height: 36px !important;
    transition: all 0.2s ease;
  }
  .dialogue-clip-tab.active,
  .dialogue-clip-tab:hover {
    background: #0B2922;
    color: #FFFFFF;
  }

  /* Customer Dialogue / Social Feed Cards (Mint Cards + Crisp Text) */
  .dialogue-feed-list {
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
  }
  .dialogue-feed-card {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 14px;
    padding: 1rem 1.15rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.04);
  }
  .dialogue-feed-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
    margin-bottom: 0.4rem;
  }
  .dialogue-feed-author {
    font-size: 0.88rem;
    font-weight: 800;
    color: #0B2922;
  }
  .dialogue-feed-meta {
    font-size: 0.74rem;
    color: #4A5D57;
  }
  .dialogue-feed-stars {
    color: #D98A00;
    font-size: 0.88rem;
    letter-spacing: 1px;
  }
  .dialogue-feed-quote {
    font-size: 0.84rem;
    color: #263238;
    line-height: 1.52;
    margin: 0;
  }
  .dialogue-social-strip {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-top: 1rem;
    padding-top: 0.9rem;
    border-top: 1px solid #E2ECE5;
  }
  .dialogue-social-strip .catalogue-link-chip {
    background: #EAF3EE;
    border-color: #C5DFD0;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 7: THE SETTING (White Canvas + Mint Hub Cards)
     -------------------------------------------------------------------------- */
  .chapter-setting {
    padding: 4.5rem 0;
    background: #FFFFFF;
    border-top: 1px solid #E2ECE5;
    border-bottom: 1px solid #E2ECE5;
  }
  .setting-hubs-list {
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
    margin: 1.25rem 0 1.5rem;
  }
  .setting-hub-card {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 14px;
    padding: 1rem 1.15rem;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 1rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.04);
  }
  .setting-hub-card.is-hq {
    border-left: 4px solid #22A06B;
  }
  .setting-hub-badge {
    display: inline-block;
    font-size: 0.66rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 2px 9px;
    border-radius: 9999px;
    margin-bottom: 0.35rem;
    background: #FFFFFF;
    color: #0B2922;
  }
  .badge-hq { background: #22A06B; color: #FFFFFF; }
  .badge-zone { background: #FFFFFF; border: 1px solid #CEE3D6; color: #0B2922; }
  .setting-hub-name {
    font-size: 1rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0 0 0.2rem;
  }
  .setting-hub-detail {
    font-size: 0.81rem;
    color: #263238;
    line-height: 1.45;
    margin: 0;
  }
  .setting-hub-detail strong {
    color: #0B2922;
  }
  .setting-media-stack {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .setting-team-photo {
    border-radius: 18px;
    overflow: hidden;
    border: 1.5px solid #CEE3D6;
    box-shadow: 0 10px 26px rgba(11, 41, 34, 0.08);
    position: relative;
    aspect-ratio: 16 / 9;
    background: #FFFFFF;
  }
  .setting-team-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .setting-team-caption {
    position: absolute;
    bottom: 10px;
    left: 10px;
    background: #EAF3EE;
    color: #0B2922;
    font-size: 0.74rem;
    font-weight: 800;
    padding: 0.35rem 0.85rem;
    border-radius: 9999px;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.14);
  }
  .setting-team-caption .material-symbols-outlined {
    color: #22A06B !important;
  }
  .setting-map-box {
    border-radius: 18px;
    overflow: hidden;
    border: 1.5px solid #CEE3D6;
    box-shadow: 0 8px 22px rgba(11, 41, 34, 0.06);
    background: #FFFFFF;
  }

  /* --------------------------------------------------------------------------
     SEO QUICK ANSWERS / ABOUT FAQ (White Canvas + Mint Cards)
     -------------------------------------------------------------------------- */
  .about-faq-section {
    padding: 4rem 0;
    background: #FFFFFF;
  }
  .about-faq-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.15rem;
    margin-top: 2rem;
  }
  .about-faq-item {
    background: #EAF3EE;
    border: 1.5px solid #CEE3D6;
    border-radius: 14px;
    padding: 1.25rem 1.35rem;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.04);
  }
  .about-faq-item h3 {
    font-size: 0.98rem;
    font-weight: 800;
    color: #0B2922;
    margin: 0 0 0.45rem;
    line-height: 1.35;
  }
  .about-faq-item p {
    font-size: 0.85rem;
    color: #263238;
    line-height: 1.55;
    margin: 0;
  }
  .about-updated-stamp {
    margin-top: 2rem;
    text-align: center;
    font-size: 0.78rem;
    color: #263238;
    font-weight: 600;
  }
  .about-updated-stamp .material-symbols-outlined {
    background: #EAF3EE;
    color: #0B2922 !important;
    border-radius: 50%;
    padding: 4px;
  }

  /* --------------------------------------------------------------------------
     CHAPTER 8: THE CREDITS (White Canvas + Fresh Green Card + Mint Objects)
     -------------------------------------------------------------------------- */
  .chapter-credits {
    position: relative;
    overflow: hidden;
    background: #FFFFFF;
    border-top: 1px solid #E2ECE5;
    padding: 4.5rem 0 3.75rem;
    color: #263238;
  }
  .chapter-sequel::before,
  .chapter-credits::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url('<?= SITE_URL ?>/assets/images/bg%20removed%20%20img/Faint%20Cleaning%20Icons%20Pattern.png');
    background-repeat: repeat;
    background-position: center;
    background-size: 560px auto;
    opacity: 1;
    filter: contrast(1.18);
    -webkit-mask-image: linear-gradient(180deg, transparent 0%, #000 8%, #000 88%, transparent 100%);
    mask-image: linear-gradient(180deg, transparent 0%, #000 8%, #000 88%, transparent 100%);
    pointer-events: none;
  }
  .chapter-sequel .about-story-container,
  .chapter-credits .about-story-container {
    position: relative;
    z-index: 2;
  }
  .credits-floating-card {
    max-width: 860px;
    margin: 0 auto;
    background: #22A06B;
    color: #FFFFFF;
    border-radius: 24px;
    padding: 2.75rem 2.25rem;
    text-align: center;
    box-shadow: 0 18px 42px rgba(34, 160, 107, 0.22);
    border: 1.5px solid #1B8759;
  }
  .credits-floating-card .story-chapter-title {
    color: #FFFFFF;
  }
  .credits-floating-card .story-chapter-lead {
    color: #EAF3EE;
  }
  .credits-avatar-pair {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
  }
  .credits-avatar-pair img {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    object-fit: cover;
    object-position: top center;
    border: 3px solid #EAF3EE;
    box-shadow: 0 4px 12px rgba(11, 41, 34, 0.22);
  }
  .credits-avatar-pair img + img {
    margin-left: -14px;
  }
  .credits-nap-bar {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.7rem;
    font-size: 0.82rem;
    font-weight: 700;
    color: #0B2922;
    background: #EAF3EE;
    border: 1px solid #CEE3D6;
    border-radius: 14px;
    padding: 0.85rem 1.25rem;
    margin: 1.25rem auto 1.65rem;
  }
  .credits-nap-row {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    flex-wrap: wrap;
  }
  .credits-nap-bar .material-symbols-outlined {
    color: #0B2922 !important;
    background: #FFFFFF;
    border-radius: 6px;
    padding: 3px;
  }
  .credits-btn-light {
    background: #FFFFFF;
    color: #0B2922;
    border: 1.5px solid #FFFFFF;
    border-radius: var(--radius-pill);
    padding: 0.75rem 1.55rem;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }
  .credits-btn-light:hover {
    background: #EAF3EE;
    color: #0B2922;
  }
  .credits-nap-bar span {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
  }

  /* --------------------------------------------------------------------------
     TEAM BIO MODAL (Interactive Access to Character Bios)
     -------------------------------------------------------------------------- */
  .team-bio-modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(11, 41, 34, 0.65);
    backdrop-filter: blur(5px);
    z-index: 999995;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 1rem;
  }
  .team-bio-modal-backdrop.open {
    display: flex;
  }
  .team-bio-modal {
    background: #FFFFFF;
    border-radius: 22px;
    max-width: 520px;
    width: 100%;
    padding: 1.75rem;
    box-shadow: 0 24px 50px rgba(0, 0, 0, 0.3);
    position: relative;
    border: 1.5px solid #D6E8DC;
  }
  .team-bio-close {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 36px;
    height: 36px;
    min-height: 36px !important;
    border-radius: 50%;
    border: none;
    background: #EAF3EE;
    color: #0B2922;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .team-bio-close:hover {
    background: #22A06B;
    color: #FFFFFF;
  }

  /* --------------------------------------------------------------------------
     RESPONSIVE BREAKPOINTS (Mobile-First Hygiene >= 48px Touch Targets)
     -------------------------------------------------------------------------- */
  @media (max-width: 992px) {
    .hero-divider-bridge {
      margin-top: -48px;
      margin-bottom: 0;
    }
    .story-belief-grid,
    .split-story-grid,
    .about-faq-grid {
      grid-template-columns: 1fr;
      gap: 1.25rem;
    }
    .chapter-characters {
      padding-top: 2.75rem;
    }
    .story-values-row {
      grid-template-columns: repeat(2, 1fr);
    }
    .characters-grid-3 {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media (max-width: 640px) {
    .chapter-story-hero { min-height: 100svh; padding: 2.25rem 0 5rem; }
    .hero-divider-bridge {
      margin-top: -40px;
      margin-bottom: 0;
    }
    .chapter-characters,
    .chapter-conflict,
    .chapter-resolution,
    .chapter-sequel,
    .chapter-dialogue,
    .chapter-setting,
    .about-faq-section,
    .chapter-credits {
      padding: 3rem 0;
    }
    .chapter-characters {
      padding-top: 2.5rem;
    }
    .characters-grid-3,
    .story-values-row {
      grid-template-columns: 1fr;
    }
    .setting-hub-card {
      flex-direction: column;
      align-items: flex-start;
    }
    .credits-floating-card {
      padding: 1.85rem 1.25rem;
    }
  }
</style>

<main class="about-story-page" id="aboutMain">

  <!-- =========================================================================
       CHAPTER 1: THE STORY (What do we believe? — Values, Mission, Mini-Manifesto)
       ========================================================================= -->
  <header class="chapter-story-hero">
    <img
      src="<?= SITE_URL ?>/assets/images/theme/about-hero-bg.jpg"
      alt=""
      aria-hidden="true"
      class="about-hero-bg-img"
      fetchpriority="high"
    >
    <div class="about-hero-bg-veil" aria-hidden="true"></div>
    <div class="about-story-container" style="position: relative; z-index: 2;">
      <div class="hero-story-inner">

        <h1 class="hero-story-h1">
          About <span class="heading-accent">A1 Cleaning:</span> Mechanized Hygiene, <span class="heading-accent">Best in Uttarakhand</span>
        </h1>

        <p class="hero-story-manifesto">
          <strong>Every Space. Expertly Cleaned.</strong> A1 Cleaning exists to replace rushed manual mopping and harsh acidic shortcuts with industrial rotary scrubbing, gentle fabric extraction, and transparent doorstep care across Kashipur, Jaspur, and Ramnagar.
        </p>

      </div>
    </div>
  </header>

  <!-- Floating Section Divider: Half over Hero, Half over Chapter 2 + 5 Core Values Strip -->
  <div class="hero-divider-bridge">
    <div class="about-story-container">
      <div class="hero-story-inner">
        <div class="story-belief-grid">
          <article class="story-belief-card">
            <h2><span class="material-symbols-outlined icon-xs">verified</span> Who Is <span class="heading-accent">A1 Cleaning?</span></h2>
            <p>
              Headquartered at <strong>Kumaun Market, Ramnagar Rd, Kashipur, Uttarakhand (244713)</strong>, A1 Cleaning is a residential, commercial, and specialised cleaning company serving a <strong>60 km radius</strong> across Kashipur, Jaspur, and Ramnagar with trained crew and <strong>Zero Advance Payment</strong>.
            </p>
          </article>

          <article class="story-belief-card">
            <h2><span class="material-symbols-outlined icon-xs">flag</span> Our <span class="heading-accent">Mission</span></h2>
            <p>
              To deliver dependable, quality-focused cleaning services through appropriate mechanized methods, background-verified personnel, clear communication, and straightforward customer-oriented processes.
            </p>
          </article>
        </div>

        <!-- 5 Core Values from Official Brand & Service Catalogue (Heading-Only Strip Below Divider Cards) -->
        <div class="story-values-row" aria-label="Our 5 Core Brand Values">
          <div class="story-value-chip">
            <strong><span>01.</span> Quality</strong>
          </div>
          <div class="story-value-chip">
            <strong><span>02.</span> Trust</strong>
          </div>
          <div class="story-value-chip">
            <strong><span>03.</span> Professionalism</strong>
          </div>
          <div class="story-value-chip">
            <strong><span>04.</span> Hygiene</strong>
          </div>
          <div class="story-value-chip">
            <strong><span>05.</span> Convenience</strong>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- =========================================================================
       CHAPTER 2: THE CHARACTERS (Who is behind this brand? — Faces & Team Bios)
       ========================================================================= -->
  <section class="chapter-characters" id="leadership-team" aria-labelledby="heading-characters">
    <div class="about-story-container">
      <div class="chapter-header-center">
        <h2 class="story-chapter-title" id="heading-characters">
          The People Behind Every <span class="heading-accent">Spotless Space</span>
        </h2>
        <p class="story-chapter-lead" style="margin-bottom: 0;">
          Every cleaning crew is backed by accountable founders, strict safety screening, and uniformed field specialists who treat your home or workplace with care.
        </p>
      </div>

      <div class="characters-grid-3">
        <?php foreach ($teamMembers as $member): ?>
          <article class="character-card">
            <div class="character-avatar-ring">
              <img 
                src="<?= $member['photo'] ?>" 
                alt="<?= htmlspecialchars($member['name'] . ' – ' . $member['role'] . ' at A1 Cleaning') ?>" 
                width="118" 
                height="118"
                loading="lazy"
              >
            </div>
            <h3 class="character-name"><?= htmlspecialchars($member['name']) ?></h3>
            <div class="character-role"><?= htmlspecialchars($member['role']) ?></div>
            <p class="character-bio-snippet"><?= htmlspecialchars($member['short']) ?></p>
            <div class="character-card-footer">
              <span class="character-pill"><?= htmlspecialchars($member['badge']) ?></span>
              <button 
                type="button" 
                class="character-bio-btn" 
                onclick='openTeamBio(<?= json_encode($member, JSON_HEX_APOS | JSON_HEX_QUOT) ?>)'
              >
                <span>Read Bio</span>
                <span class="material-symbols-outlined icon-xs">arrow_forward</span>
              </button>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       CHAPTER 3: THE CONFLICT (Why did we start? — Passion & Journey Timeline)
       ========================================================================= -->
  <section class="chapter-conflict" id="our-story" aria-labelledby="heading-conflict">
    <div class="about-story-container">
      <div class="split-story-grid">

        <!-- Left Visual: Real Hard-Water Transformation Proof -->
        <div class="conflict-visual-card">
          <div class="conflict-ba-pair">
            <div class="conflict-ba-item">
              <img 
                src="<?= SITE_URL ?>/assets/images/pricing/before-after/tiles-before.jpg" 
                alt="Bathroom tile grout with hard-water yellow scale before A1 Cleaning" 
                width="360" 
                height="270"
                loading="lazy"
              >
              <span class="conflict-ba-tag tag-before">The Problem</span>
            </div>
            <div class="conflict-ba-item">
              <img 
                src="<?= SITE_URL ?>/assets/images/pricing/before-after/tiles-after.jpg" 
                alt="Spotless restored bathroom tiles after A1 Cleaning mechanized descaling" 
                width="360" 
                height="270"
                loading="lazy"
              >
              <span class="conflict-ba-tag tag-after">After A1 Care</span>
            </div>
          </div>
          <div class="conflict-visual-caption">
            <span><strong>Kashipur &amp; Jaspur Field Test:</strong> High-TDS water scale &amp; grout buildup eliminated without acid damage.</span>
            <a href="<?= SITE_URL ?>/gallery/" style="color: #22A06B; font-weight: 800; white-space: nowrap;">View Gallery →</a>
          </div>
        </div>

        <!-- Right Narrative: The Conflict & Milestones -->
        <div>
          <h2 class="story-chapter-title" id="heading-conflict">
            Why We Started <span class="heading-accent">A1 Cleaning</span> in Kashipur
          </h2>
          <p class="story-chapter-lead">
            Across the Udham Singh Nagar and Nainital foothills, homes and businesses battle four tough hygiene problems daily: <strong>fine industrial soot</strong> in Kashipur, <strong>severe hard-water mineral crusting</strong> in Jaspur borewells, monsoon mud, and <strong>Corbett forest humidity</strong> in Ramnagar.
          </p>
          <p class="story-chapter-lead" style="margin-bottom: 0.75rem;">
            We saw families paying for routine manual cleaning that merely smeared surface dirt—or worse, unverified workers using corrosive acid that etched marble floors and chrome taps while leaving dust mites inside sofas and sludge inside drinking tanks. That frustration sparked <strong>A1 Cleaning</strong>.
          </p>

          <div class="story-timeline" aria-label="Our Brand Evolution">
            <div class="timeline-step">
              <span class="timeline-step-label">Milestone 01 · The Gap</span>
              <h3 class="timeline-step-title">Spotting the Manual Cleaning Trap</h3>
              <p class="timeline-step-text">Recognized that household mops cannot extract deep upholstery mites, chimney grease, or tank biofilm.</p>
            </div>
            <div class="timeline-step">
              <span class="timeline-step-label">Milestone 02 · Equipment Investment</span>
              <h3 class="timeline-step-title">Deploying Commercial Machinery</h3>
              <p class="timeline-step-text">Equipped mobile vans with single-disc rotary scrubbers, 1200W fabric extractors, and germicidal UV tank units.</p>
            </div>
            <div class="timeline-step">
              <span class="timeline-step-label">Milestone 03 · Trust Protocol</span>
              <h3 class="timeline-step-title">Zero Advance &amp; Verified Staffing</h3>
              <p class="timeline-step-text">Established police-verified uniformed teams, non-acidic formulas, and joint customer sign-off before payment.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       CHAPTER 4: THE RESOLUTION (What problem do we solve? How? — Value Prop, Workflow & Proof)
       ========================================================================= -->
  <section class="chapter-resolution" id="how-we-solve-it" aria-labelledby="heading-resolution">
    <div class="about-story-container">
      <div class="split-story-grid" style="align-items: start;">

        <!-- Left: Value Proposition, Differentiation & Real Proof -->
        <div>
          <h2 class="story-chapter-title" id="heading-resolution">
            How We Solve It: <span class="heading-accent">Commercial Machines</span> &amp; Zero-Risk Trust
          </h2>
          <p class="story-chapter-lead">
            Instead of sending unequipped daily labor, A1 Cleaning dispatches a dedicated machine-ready unit tailored to your floor, fabric, kitchen, or tank material.
          </p>

          <ul class="differentiators-list">
            <li>
              <span class="material-symbols-outlined">check_circle</span>
              <span><strong>Commercial-Grade Mechanization:</strong> High-torque rotary scrubbers, 1200W extraction vacuums, 140°C steam &amp; UV tank sterilizers.</span>
            </li>
            <li>
              <span class="material-symbols-outlined">check_circle</span>
              <span><strong>Zero Advance Payment:</strong> Book online or via WhatsApp and pay only after a joint inspection confirms spotless cleanliness.</span>
            </li>
            <li>
              <span class="material-symbols-outlined">check_circle</span>
              <span><strong>Non-Acidic Surface Care:</strong> Safe on marble, vitrified tiles, modular laminates, plush sofas, kids, and pets.</span>
            </li>
            <li>
              <span class="material-symbols-outlined">check_circle</span>
              <span><strong>Upfront Transparent Scope:</strong> Clear written estimates with machinery, consumables, and doorstep transit included.</span>
            </li>
          </ul>

          <div class="resolution-proof-row">
            <div class="proof-metric-box">
              <div class="proof-metric-val">5,000+</div>
              <div class="proof-metric-lbl">Cleaned Homes &amp; Spaces</div>
            </div>
            <div class="proof-metric-box">
              <div class="proof-metric-val">4.9 <span style="color: #FFD54F;">★</span></div>
              <div class="proof-metric-lbl">Verified Rating (520+ Reviews)</div>
            </div>
            <div class="proof-metric-box">
              <div class="proof-metric-val">50+</div>
              <div class="proof-metric-lbl">Localities Covered in 60 km</div>
            </div>
            <div class="proof-metric-box">
              <div class="proof-metric-val">9 Core</div>
              <div class="proof-metric-lbl">Specialised Service Categories</div>
            </div>
          </div>
        </div>

        <!-- Right: 6-Step Doorstep Workflow (Exact Brand Catalogue p.7 Process) -->
        <div>
          <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: #0B2922; margin-bottom: 0.9rem;">
            Our <span class="heading-accent">6-Step</span> Quality Resolution Process
          </h3>
          <div class="resolution-steps-stack">
            <div class="res-step-card">
              <div class="res-step-num">01</div>
              <div>
                <h4 class="res-step-title">Enquiry</h4>
                <p class="res-step-desc">Reach out via website booking, phone (+91 79063 66271), or WhatsApp with your cleaning need.</p>
              </div>
            </div>
            <div class="res-step-card">
              <div class="res-step-num">02</div>
              <div>
                <h4 class="res-step-title">Requirement Assessment</h4>
                <p class="res-step-desc">We evaluate property type, BHK/room count, fabric/stone surface, and stain condition.</p>
              </div>
            </div>
            <div class="res-step-card">
              <div class="res-step-num">03</div>
              <div>
                <h4 class="res-step-title">Clear Quotation</h4>
                <p class="res-step-desc">Receive a transparent estimate covering machinery, eco-safe solutions, crew, and travel.</p>
              </div>
            </div>
            <div class="res-step-card">
              <div class="res-step-num">04</div>
              <div>
                <h4 class="res-step-title">Booking Confirmation</h4>
                <p class="res-step-desc">Confirm your convenient date and morning, afternoon, or rapid-dispatch arrival slot.</p>
              </div>
            </div>
            <div class="res-step-card">
              <div class="res-step-num">05</div>
              <div>
                <h4 class="res-step-title">Mechanized Cleaning Service</h4>
                <p class="res-step-desc">Police-verified uniformed technicians execute the room-by-room deep cleaning scope.</p>
              </div>
            </div>
            <div class="res-step-card">
              <div class="res-step-num">06</div>
              <div>
                <h4 class="res-step-title">Joint Quality Review &amp; Pay</h4>
                <p class="res-step-desc">Inspect every corner with our team supervisor first; any missed spot is re-cleaned on the spot.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- 9 Official Service Hub Internal Links (Blueprint Internal Linking Map) -->
      <div class="catalogue-links-bar">
        <div class="catalogue-links-title">
          <span class="material-symbols-outlined icon-sm text-fresh-green">category</span>
          <span>Explore Our 9 Mechanized Cleaning Divisions:</span>
        </div>
        <div class="catalogue-chips-wrap">
          <a href="<?= SITE_URL ?>/services/home-cleaning/" class="catalogue-link-chip">Home &amp; Residential</a>
          <a href="<?= SITE_URL ?>/services/kitchen-cleaning/" class="catalogue-link-chip">Kitchen Deep Cleaning</a>
          <a href="<?= SITE_URL ?>/services/bathroom-cleaning/" class="catalogue-link-chip">Bathroom Descaling</a>
          <a href="<?= SITE_URL ?>/services/sofa-cleaning/" class="catalogue-link-chip">Sofa &amp; Upholstery</a>
          <a href="<?= SITE_URL ?>/services/carpet-cleaning/" class="catalogue-link-chip">Carpet &amp; Rug Wash</a>
          <a href="<?= SITE_URL ?>/services/water-tank-cleaning/" class="catalogue-link-chip">6-Stage Water Tank UV</a>
          <a href="<?= SITE_URL ?>/services/curtain-window-cleaning/" class="catalogue-link-chip">Curtain, Blind &amp; Window</a>
          <a href="<?= SITE_URL ?>/services/move-in-move-out-cleaning/" class="catalogue-link-chip">Move-In / Move-Out</a>
          <a href="<?= SITE_URL ?>/services/commercial-cleaning/" class="catalogue-link-chip">Commercial &amp; Office</a>
          <a href="<?= SITE_URL ?>/pricing/" class="catalogue-link-chip" style="background: #0B2922; color: #FFFFFF; border-color: #0B2922;">Transparent Rate Card →</a>
        </div>
      </div>

    </div>
  </section>


  <!-- =========================================================================
       CHAPTER 5: THE SEQUEL (What is our vision for the future?)
       ========================================================================= -->
  <section class="chapter-sequel" id="our-vision" aria-labelledby="heading-sequel">
    <div class="about-story-container">
      <div class="split-story-grid">

        <!-- Left: Strong POV & Future Roadmap -->
        <div>
          <h2 class="story-chapter-title" id="heading-sequel">
            Looking Ahead: Setting <span class="heading-accent">Uttarakhand’s Clean-Home Standard</span>
          </h2>
          <p class="story-chapter-lead">
            <strong>Our Point of View:</strong> True cleanliness shouldn’t require city-level compromises or toxic acid fumes. Tier-2 towns, industrial corridors, and eco-sensitive Corbett resorts deserve the exact same hospital-grade extraction and safety standards found in metro cities.
          </p>

          <div class="sequel-vision-pillars">
            <div class="sequel-pillar-item">
              <h3>Chemical-Light, Temperature-Powered Hygiene</h3>
              <p>Scaling 140°C high-pressure steam and UV sterilization to cut chemical dependency in family homes, clinics, and schools.</p>
            </div>
            <div class="sequel-pillar-item">
              <h3>Deeper 60 km Kumaun Belt Coverage</h3>
              <p>Strengthening same-day dispatch across Kashipur, Jaspur, and Ramnagar while preparing operational readiness for nearby towns including Bazpur and Gadarpur.</p>
            </div>
            <div class="sequel-pillar-item">
              <h3>Effortless Seasonal Care &amp; Loyalty Rewards</h3>
              <p>Making 6-month tank cleaning and festive sofa/kitchen maintenance one-tap effortless with My Account booking history &amp; A1 Coins.</p>
            </div>
          </div>
        </div>

        <!-- Right Visual: Freshly Restored Living Space -->
        <div class="sequel-visual-frame">
          <img 
            src="<?= SITE_URL ?>/assets/images/before-after/full%20home%20deep%20cleaning/Freshly%20Cleaned%20Modern%20Living%20Room.png" 
            alt="Spotless modern Uttarakhand living room after A1 Cleaning deep sanitization" 
            width="600" 
            height="375"
            loading="lazy"
          >
          <div class="sequel-visual-badge">
            <span><strong style="color: #0B2922;">Our Vision:</strong> Trusted hygiene accessible to every home &amp; business in Uttarakhand.</span>
            <a href="<?= SITE_URL ?>/services/" style="background: #22A06B; color: #FFFFFF; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 800; text-decoration: none; white-space: nowrap;">See Plans</a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       CHAPTER 6: THE DIALOGUE (What do we sound like? — Video & Social Voices)
       ========================================================================= -->
  <section class="chapter-dialogue" id="dialogue" aria-labelledby="heading-dialogue">
    <div class="about-story-container">
      <div class="chapter-header-center">
        <h2 class="story-chapter-title" id="heading-dialogue">
          See &amp; Hear Our Work <span class="heading-accent">Unedited</span>
        </h2>
        <p class="story-chapter-lead" style="margin-bottom: 0;">
          We don’t hide behind stock claims. Watch real field crews operate on site and read honest feedback shared by local families and resort managers.
        </p>
      </div>

      <div class="split-story-grid" style="align-items: start;">

        <!-- Left: Interactive Brand / Field Action Video Showcase -->
        <div class="dialogue-video-card">
          <div class="dialogue-video-box">
            <video 
              id="aboutShowcaseVideo"
              class="dialogue-video-el"
              src="<?= SITE_URL ?>/assets/cleaning%20videos/deep_home_cleaning_6ce7a0e5.mp4#t=0.5"
              poster="<?= SITE_URL ?>/assets/images/services/home-cleaning.jpg"
              muted
              loop
              playsinline
              autoplay
              preload="metadata"
            ></video>
            <div class="dialogue-video-controls">
              <button type="button" class="dialogue-vbtn" id="aboutVideoPlayBtn" onclick="toggleAboutVideoPlay()">
                <span class="material-symbols-outlined icon-xs">pause</span> Pause
              </button>
              <button type="button" class="dialogue-vbtn" id="aboutVideoMuteBtn" onclick="toggleAboutVideoMute()">
                <span class="material-symbols-outlined icon-xs">volume_off</span> Unmute
              </button>
            </div>
          </div>

          <div class="dialogue-clip-tabs" role="tablist" aria-label="Select Cleaning Demonstration Video">
            <button type="button" class="dialogue-clip-tab active" onclick="switchAboutVideo('<?= SITE_URL ?>/assets/cleaning%20videos/deep_home_cleaning_6ce7a0e5.mp4', this)">Full Home Deep Clean</button>
            <button type="button" class="dialogue-clip-tab" onclick="switchAboutVideo('<?= SITE_URL ?>/assets/cleaning%20videos/sofa_shampoo_cleaning_6c6a0420.mp4', this)">Sofa Extraction</button>
            <button type="button" class="dialogue-clip-tab" onclick="switchAboutVideo('<?= SITE_URL ?>/assets/cleaning%20videos/Person_cleaning_water_tank_bc0ad2f8.mp4', this)">Water Tank UV</button>
            <button type="button" class="dialogue-clip-tab" onclick="switchAboutVideo('<?= SITE_URL ?>/assets/cleaning%20videos/office_and_commercial_cleaning_6ca03922.mp4', this)">Commercial Floor</button>
          </div>
        </div>

        <!-- Right: Authentic Social Voices & Review Wall Excerpts -->
        <div>
          <div class="dialogue-feed-list">
            <article class="dialogue-feed-card">
              <div class="dialogue-feed-top">
                <div>
                  <div class="dialogue-feed-author">Matthew Rawat <span class="dialogue-feed-meta">· Corbett Greens Luxury Resort, Ramnagar</span></div>
                </div>
                <span class="dialogue-feed-stars" aria-label="5 out of 5 stars">★★★★★</span>
              </div>
              <p class="dialogue-feed-quote">
                "Prompt and helpful responses to our resort maintenance inquiry! Superb mechanized quality, zero toxic residue. Our 6 cottages were handed over immaculately before the weekend rush."
              </p>
            </article>

            <article class="dialogue-feed-card">
              <div class="dialogue-feed-top">
                <div>
                  <div class="dialogue-feed-author">Sonia &amp; Rohit Sharma <span class="dialogue-feed-meta">· Ramnagar Road, Kashipur</span></div>
                </div>
                <span class="dialogue-feed-stars" aria-label="5 out of 5 stars">★★★★★</span>
              </div>
              <p class="dialogue-feed-quote">
                "The team arrived with heavy extraction vacuums, cleaned balcony glass panes and tile lines until everything reflected like a mirror. Spotless and fresh."
              </p>
            </article>

            <article class="dialogue-feed-card">
              <div class="dialogue-feed-top">
                <div>
                  <div class="dialogue-feed-author">@MohdTariq <span class="dialogue-feed-meta">· Tank &amp; Bathroom Descaling</span></div>
                </div>
                <span class="dialogue-feed-stars" aria-label="5 out of 5 stars">★★★★★</span>
              </div>
              <p class="dialogue-feed-quote">
                "UV water tank and bathroom descaling combo was total value for money. Removed all hard water deposits without any acid fumes."
              </p>
            </article>
          </div>

          <div class="dialogue-social-strip">
            <div style="display: flex; gap: 0.55rem; flex-wrap: wrap;">
              <a href="<?= LINK_INSTAGRAM ?>" target="_blank" rel="noopener" class="catalogue-link-chip">Instagram</a>
              <a href="<?= LINK_FACEBOOK ?>" target="_blank" rel="noopener" class="catalogue-link-chip">Facebook</a>
              <a href="<?= LINK_JUSTDIAL ?>" target="_blank" rel="noopener" class="catalogue-link-chip">JustDial</a>
            </div>
            <a href="<?= SITE_URL ?>/reviews/" style="color: #22A06B; font-weight: 800; font-size: 0.88rem;">
              Watch 8+ Video Reviews &amp; 520+ Ratings →
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       CHAPTER 7: THE SETTING (Where is this business? — HQ Address, Service Areas & Map)
       ========================================================================= -->
  <section class="chapter-setting" id="locations" aria-labelledby="heading-setting">
    <div class="about-story-container">
      <div class="split-story-grid" style="align-items: start;">

        <!-- Left: Real HQ Address & Clear Service Areas (Strict Blueprint Rule #3: No fake branch addresses) -->
        <div>
          <h2 class="story-chapter-title" id="heading-setting">
            Headquartered in Kashipur, <span class="heading-accent">Serving a 60 km Footprint</span>
          </h2>
          <p class="story-chapter-lead">
            Our central equipment depot and operations office operate out of Kashipur, dispatching dedicated mobile cleaning units across Udham Singh Nagar &amp; Nainital foothills.
          </p>

          <div class="setting-hubs-list">
            <!-- Kashipur HQ (Physical Address Displayed) -->
            <div class="setting-hub-card is-hq">
              <div>
                <span class="setting-hub-badge badge-hq">Physical Headquarters</span>
                <h3 class="setting-hub-name">Kashipur Dispatch Hub</h3>
                <p class="setting-hub-detail">
                  <strong>Address:</strong> <?= BUSINESS_ADDRESS ?><br>
                  <strong>Coverage:</strong> Ramnagar Rd, Awas Vikas, Station Rd, Kundeshwari &amp; SIIDCUL (15 km core)
                </p>
              </div>
              <a href="<?= SITE_URL ?>/kashipur/" class="catalogue-link-chip" style="flex-shrink: 0;">Explore Hub →</a>
            </div>

            <!-- Jaspur Service Area (Clearly labeled as Doorstep Service Area) -->
            <div class="setting-hub-card">
              <div>
                <span class="setting-hub-badge badge-zone">Doorstep Service Area</span>
                <h3 class="setting-hub-name">Jaspur Localities</h3>
                <p class="setting-hub-detail">
                  Mobile doorstep dispatch from Kashipur Hub covering Afzalgarh Rd, Subhash Chowk, Gandhi Nagar &amp; Nagina Rd.
                </p>
              </div>
              <a href="<?= SITE_URL ?>/jaspur/" class="catalogue-link-chip" style="flex-shrink: 0;">Explore Jaspur →</a>
            </div>

            <!-- Ramnagar & Corbett Service Area -->
            <div class="setting-hub-card">
              <div>
                <span class="setting-hub-badge badge-zone">Doorstep Service Area</span>
                <h3 class="setting-hub-name">Ramnagar &amp; Corbett Resort Belt</h3>
                <p class="setting-hub-detail">
                  Mobile doorstep dispatch covering Dhikuli resort belt, Ranikhet Rd, Kaniya, Bharatpuri &amp; Lakhanpur.
                </p>
              </div>
              <a href="<?= SITE_URL ?>/ramnagar/" class="catalogue-link-chip" style="flex-shrink: 0;">Explore Ramnagar →</a>
            </div>
          </div>
        </div>

        <!-- Right: Team & Branded Van + Lazy-Loaded Google Map -->
        <div class="setting-media-stack">
          <div class="setting-team-photo">
            <img 
              src="<?= SITE_URL ?>/assets/images/about%20page/A1%20Cleaning%20Team%20in%20Action.png" 
              alt="A1 Cleaning mobile dispatch van and uniformed cleaning specialists in Kashipur, Uttarakhand" 
              width="600" 
              height="338"
              loading="lazy"
            >
            <div class="setting-team-caption">
              <span class="material-symbols-outlined icon-xs" style="color: #72E2B0;">local_shipping</span>
              <span>A1 Cleaning Dispatch Fleet &amp; Uniformed Crew · Mon–Sat 8 AM – 7 PM</span>
            </div>
          </div>

          <div class="setting-map-box">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.156698993979!2d78.96045777552224!3d29.209837975354006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a432be71f8e7b%3A0xc7715da046aa02b9!2sA1%20Cleaning%20%7C%20Professional%20Cleaning%20Service%20%7C%20Kashipur!5e1!3m2!1sen!2sin!4v1795584604054!5m2!1sen!2sin" 
              width="100%" 
              height="245" 
              style="border: 0; display: block;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="strict-origin-when-cross-origin"
              title="A1 Cleaning | Professional Cleaning Service | Kashipur">
            </iframe>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       SEO QUICK ANSWERS (About FAQs matching Schema 1:1 + Editorial E-E-A-T Stamp)
       ========================================================================= -->
  <section class="about-faq-section" id="quick-answers" aria-labelledby="heading-faq">
    <div class="about-story-container">
      <div class="chapter-header-center" style="margin-bottom: 1.5rem;">
        <span class="story-kicker">
          <span class="material-symbols-outlined icon-xs">help</span> Quick Answers
        </span>
        <h2 class="story-chapter-title" id="heading-faq">
          Common Questions About <span class="heading-accent">A1 Cleaning</span>
        </h2>
      </div>

      <div class="about-faq-grid">
        <?php foreach ($aboutFaqs as $faq): ?>
          <article class="about-faq-item">
            <h3><?= htmlspecialchars($faq['q']) ?></h3>
            <p><?= htmlspecialchars($faq['a']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="about-updated-stamp">
        <span class="material-symbols-outlined icon-xs" style="vertical-align: middle; color: #22A06B;">verified</span>
        Last Updated: <time datetime="2026-11-25">November 25, 2026</time> · Verified by A1 Cleaning Operations Desk, Kashipur
      </div>
    </div>
  </section>


  <!-- =========================================================================
       CHAPTER 8: THE CREDITS (How can they get in touch? — Final CTA Band)
       ========================================================================= -->
  <section class="chapter-credits" id="get-in-touch" aria-labelledby="heading-credits">
    <div class="about-story-container">
      <div class="credits-floating-card">
        <div class="credits-avatar-pair">
          <img src="<?= SITE_URL ?>/assets/images/about%20page/founder_praveen.jpg" alt="Praveen Bisht" width="56" height="56" loading="lazy">
          <img src="<?= SITE_URL ?>/assets/images/about%20page/founder_kavita.jpg" alt="Kavita Bisht" width="56" height="56" loading="lazy">
        </div>

        <h2 class="story-chapter-title" id="heading-credits" style="margin-bottom: 0.65rem;">
          Ready for a Cleaner, <span style="color: #EAF3EE; text-decoration: underline; text-decoration-color: rgba(234,243,238,0.45); text-underline-offset: 6px;">Healthier Space?</span>
        </h2>

        <p class="story-chapter-lead" style="max-width: 640px; margin: 0 auto;">
          Whether you need deep home sanitization in Kashipur, water tank UV disinfection in Jaspur, or resort turnaround care in Ramnagar, book directly with zero advance payment.
        </p>

        <!-- Complete Consistent Master NAP Strip (2x2 Balanced Rows) -->
        <div class="credits-nap-bar">
          <div class="credits-nap-row">
            <span><span class="material-symbols-outlined icon-xs text-fresh-green">business</span> <?= BUSINESS_NAME ?></span>
            <span><span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span> <?= BUSINESS_ADDRESS ?></span>
          </div>
          <div class="credits-nap-row">
            <span><span class="material-symbols-outlined icon-xs text-fresh-green">call</span> <?= BUSINESS_PHONE ?></span>
            <span><span class="material-symbols-outlined icon-xs text-fresh-green">mail</span> <?= BUSINESS_EMAIL ?></span>
          </div>
        </div>

        <div style="display: flex; align-items: center; justify-content: center; gap: 0.85rem; flex-wrap: wrap;">
          <a href="<?= SITE_URL ?>/book-now/" class="btn btn-primary">
            Book Online Now <span class="material-symbols-outlined icon-sm">arrow_forward</span>
          </a>
          <a href="<?= BUSINESS_WHATSAPP_LINK ?>?text=Hi%20A1%20Cleaning%2C%20I%20read%20your%20About%20Us%20page%20and%20would%20like%20a%20cleaning%20quote." target="_blank" rel="noopener" class="btn credits-btn-light" aria-label="WhatsApp A1 Cleaning on <?= BUSINESS_PHONE ?>">
            <?= getThemeIcon('whatsapp', 20, '#22A06B') ?>
            <span><?= BUSINESS_PHONE ?></span>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- Interactive Team Bio Modal (Full Character Profiles without 404 navigation) -->
<div class="team-bio-modal-backdrop" id="teamBioModalBackdrop" role="dialog" aria-modal="true" aria-labelledby="bioModalName" onclick="closeTeamBioIfBackdrop(event)">
  <div class="team-bio-modal">
    <button type="button" class="team-bio-close" onclick="closeTeamBio()" aria-label="Close team biography">✕</button>
    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
      <img id="bioModalPhoto" src="" alt="" style="width: 72px; height: 72px; border-radius: 50%; object-fit: cover; object-position: top center; border: 2px solid #22A06B; flex-shrink: 0;">
      <div>
        <h3 id="bioModalName" style="font-size: 1.2rem; font-weight: 800; color: #0B2922; margin: 0 0 0.15rem;"></h3>
        <div id="bioModalRole" style="font-size: 0.78rem; font-weight: 700; color: #22A06B; text-transform: uppercase;"></div>
      </div>
    </div>
    <p id="bioModalText" style="font-size: 0.9rem; color: #4A5A53; line-height: 1.6; margin-bottom: 1rem;"></p>
    <div style="background: #F4F8F6; border: 1px solid #D6E8DC; border-radius: 12px; padding: 0.85rem 1rem; margin-bottom: 1.15rem;">
      <div style="font-size: 0.74rem; font-weight: 800; color: #0B2922; text-transform: uppercase; letter-spacing: 0.04em; margin-bottom: 0.45rem;">Key Responsibilities</div>
      <ul id="bioModalHighlights" style="margin: 0; padding-left: 1.15rem; font-size: 0.84rem; color: #0B2922; display: flex; flex-direction: column; gap: 0.3rem;"></ul>
    </div>
    <div style="display: flex; gap: 0.75rem; justify-content: flex-end; flex-wrap: wrap;">
      <a href="<?= SITE_URL ?>/contact/" class="btn btn-outline" style="padding: 0.55rem 1.25rem; font-size: 0.85rem;">Contact Team</a>
      <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action" style="padding: 0.55rem 1.25rem; font-size: 0.85rem;">Book With Crew →</a>
    </div>
  </div>
</div>

<script>
// Team Bio Modal Controls
function openTeamBio(member) {
  const backdrop = document.getElementById('teamBioModalBackdrop');
  if (!backdrop || !member) return;
  document.getElementById('bioModalPhoto').src = member.photo || '';
  document.getElementById('bioModalPhoto').alt = member.name || '';
  document.getElementById('bioModalName').textContent = member.name || '';
  document.getElementById('bioModalRole').textContent = (member.role || '') + (member.pillar ? ' · ' + member.pillar : '');
  document.getElementById('bioModalText').textContent = member.full_bio || '';

  const listEl = document.getElementById('bioModalHighlights');
  listEl.innerHTML = '';
  (member.highlights || []).forEach(function(item) {
    const li = document.createElement('li');
    li.textContent = item;
    listEl.appendChild(li);
  });

  backdrop.classList.add('open');
}

function closeTeamBio() {
  const backdrop = document.getElementById('teamBioModalBackdrop');
  if (backdrop) backdrop.classList.remove('open');
}

function closeTeamBioIfBackdrop(e) {
  if (e.target && e.target.id === 'teamBioModalBackdrop') closeTeamBio();
}

document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeTeamBio();
});

// Dialogue Section Interactive Video Controls
function toggleAboutVideoPlay() {
  const video = document.getElementById('aboutShowcaseVideo');
  const btn = document.getElementById('aboutVideoPlayBtn');
  if (!video || !btn) return;
  if (video.paused) {
    video.play().catch(function() {});
    btn.innerHTML = '<span class="material-symbols-outlined icon-xs">pause</span> Pause';
  } else {
    video.pause();
    btn.innerHTML = '<span class="material-symbols-outlined icon-xs">play_arrow</span> Play';
  }
}

function toggleAboutVideoMute() {
  const video = document.getElementById('aboutShowcaseVideo');
  const btn = document.getElementById('aboutVideoMuteBtn');
  if (!video || !btn) return;
  video.muted = !video.muted;
  btn.innerHTML = video.muted
    ? '<span class="material-symbols-outlined icon-xs">volume_off</span> Unmute'
    : '<span class="material-symbols-outlined icon-xs">volume_up</span> Mute';
}

function switchAboutVideo(src, tabBtn) {
  const video = document.getElementById('aboutShowcaseVideo');
  const playBtn = document.getElementById('aboutVideoPlayBtn');
  if (!video) return;
  document.querySelectorAll('.dialogue-clip-tab').forEach(function(b) {
    b.classList.remove('active');
  });
  if (tabBtn) tabBtn.classList.add('active');
  video.src = src;
  video.play().catch(function() {});
  if (playBtn) {
    playBtn.innerHTML = '<span class="material-symbols-outlined icon-xs">pause</span> Pause';
  }
}
</script>

<?php
$footerPrevIsDark = false;
$footerWaveBg = '#FFFFFF';
require __DIR__ . '/../components/footer.php';
?>
