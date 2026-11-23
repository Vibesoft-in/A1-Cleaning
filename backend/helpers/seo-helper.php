<?php
/**
 * SEO & Structured Data (JSON-LD) Helper
 * Conforms 100% with the A1 Cleaning SEO Blueprint
 */

require_once __DIR__ . '/../config/config.php';

class SeoHelper {

    /**
     * Get clean canonical URL
     */
    public static function getCanonicalUrl($path = '') {
        $cleanPath = trim($path, '/');
        return CANONICAL_DOMAIN . '/' . ($cleanPath ? $cleanPath . '/' : '');
    }

    /**
     * Generate Homepage Schema (@graph combining WebSite, ProfessionalService, OfferCatalog)
     */
    public static function getHomeSchema($services, $cities) {
        $offerCatalogItems = [];
        foreach ($services as $slug => $svc) {
            $offerCatalogItems[] = [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => $svc['name'],
                    "url" => self::getCanonicalUrl("services/{$slug}")
                ]
            ];
        }

        $areaServedList = [
            [
                "@type" => "GeoCircle",
                "geoMidpoint" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => BUSINESS_LATITUDE,
                    "longitude" => BUSINESS_LONGITUDE
                ],
                "geoRadius" => (string)SERVICE_RADIUS_METERS
            ]
        ];

        foreach ($cities as $citySlug => $c) {
            $areaServedList[] = [
                "@type" => "City",
                "name" => $c['name'],
                "sameAs" => $c['wiki_url']
            ];
        }

        $schema = [
            "@context" => "https://schema.org",
            "@graph" => [
                [
                    "@type" => "WebSite",
                    "@id" => CANONICAL_DOMAIN . "/#website",
                    "url" => CANONICAL_DOMAIN . "/",
                    "name" => BUSINESS_NAME,
                    "inLanguage" => "en-IN",
                    "publisher" => [
                        "@id" => CANONICAL_DOMAIN . "/#business"
                    ]
                ],
                [
                    "@type" => "ProfessionalService",
                    "@id" => CANONICAL_DOMAIN . "/#business",
                    "name" => BUSINESS_NAME,
                    "alternateName" => BUSINESS_NAME . " – " . BUSINESS_TAGLINE,
                    "url" => CANONICAL_DOMAIN . "/",
                    "logo" => SITE_URL . "/assets/images/brand/logo-round-badge.png",
                    "image" => SITE_URL . "/assets/images/brand/logo-horizontal.png",
                    "description" => "Professional home, kitchen, bathroom, sofa, carpet, water tank, curtain, move-in/move-out and commercial cleaning in Kashipur, Jaspur and Ramnagar, Uttarakhand.",
                    "telephone" => BUSINESS_PHONE_RAW,
                    "email" => BUSINESS_EMAIL,
                    "priceRange" => "₹₹",
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
                    "areaServed" => $areaServedList,
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
                    "hasOfferCatalog" => [
                        "@type" => "OfferCatalog",
                        "name" => "Professional Cleaning Services",
                        "itemListElement" => $offerCatalogItems
                    ],
                    "sameAs" => [
                        LINK_GBP_CID,
                        LINK_FACEBOOK,
                        LINK_INSTAGRAM,
                        LINK_JUSTDIAL
                    ]
                ]
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Generate Schema for City + Service pages (Service + BreadcrumbList + FAQPage)
     */
    public static function getCityServiceSchema($city, $service, $faqs = []) {
        $canonicalUrl = self::getCanonicalUrl("{$city['slug']}/{$service['slug']}");

        $serviceEntity = [
            "@type" => "Service",
            "@id" => "{$canonicalUrl}#service",
            "name" => "{$service['name']} in {$city['name']}",
            "serviceType" => $service['schema_type'],
            "description" => "Professional {$service['name']} in {$city['name']}. Safe, mechanised, affordable cleaning by trained experts.",
            "url" => $canonicalUrl,
            "provider" => [
                "@id" => CANONICAL_DOMAIN . "/#business"
            ],
            "areaServed" => [
                "@type" => "City",
                "name" => $city['name'],
                "containedInPlace" => [
                    "@type" => "State",
                    "name" => "Uttarakhand"
                ],
                "geo" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => $city['lat'],
                    "longitude" => $city['lng']
                ]
            ],
            "availableChannel" => [
                "@type" => "ServiceChannel",
                "serviceUrl" => self::getCanonicalUrl("book-now"),
                "servicePhone" => [
                    "@type" => "ContactPoint",
                    "telephone" => BUSINESS_PHONE_RAW
                ]
            ]
        ];

        $breadcrumbEntity = [
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
                    "name" => $city['name'],
                    "item" => self::getCanonicalUrl($city['slug'])
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => $service['name'],
                    "item" => $canonicalUrl
                ]
            ]
        ];

        $graph = [$serviceEntity, $breadcrumbEntity];

        if (!empty($faqs)) {
            $faqEntities = [];
            foreach ($faqs as $faq) {
                $faqEntities[] = [
                    "@type" => "Question",
                    "name" => $faq['q'],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => $faq['a']
                    ]
                ];
            }
            $graph[] = [
                "@type" => "FAQPage",
                "mainEntity" => $faqEntities
            ];
        }

        $schema = [
            "@context" => "https://schema.org",
            "@graph" => $graph
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

