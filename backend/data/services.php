<?php
/**
 * Master Data: 11 Core Cleaning Services & Detailed Packages
 * Powering Services Hubs, City Pages, and Desktop View Pages
 */

if (!defined('SITE_URL')) {
    require_once __DIR__ . '/../config/config.php';
}

return array (
  'bathroom-cleaning' => 
  array (
    'slug' => 'bathroom-cleaning',
    'name' => 'Bathroom Cleaning',
    'full_title' => 'Bathroom & Toilet Deep Sanitization',
    'schema_type' => 'Bathroom and toilet cleaning',
    'icon' => 'bathtub',
    'short_desc' => 'Tough hard-water mark removal, tile grout restoration, toilet bowl & sanitary descaling.',
    'starting_price' => '₹600',
    'time_estimate' => '1.5 - 2.5 hours per washroom',
    'suitable_for' => 'Homes, flats, commercial washrooms, hotels and guest houses.',
    'video' => SITE_URL . '/assets/cleaning%20videos/bathroom_deep_cleaning_9d6155cb_1080p.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/bathroom-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Essential Care',
        'title' => 'General Cleaning',
        'price' => 600,
        'thumb' => SITE_URL . '/assets/images/pricing/packages/bathroom-general.jpg',
        'sub' => 'Includes basic scrubbing, toilet, mirror & sink detailing',
        'rating' => 4.42,
        'reviewCount' => 24,
        'duration' => '40 - 50 min',
        'description' => 'Refresh your bathroom with our standard hygienic care covering basic scrubbing, toilet, mirror, washbasin, and tap detailing for clean everyday freshness.',
        'includes' => 
        array (
          0 => 'WC Pot Cleaning & interior bowl disinfectant descaling',
          1 => 'Sink & Washbasin Cleaning with surface stain wiping',
          2 => 'Wall Tile Dusting & high-touch wet wipe',
          3 => 'Mirror Cleaning & chrome tap streak-free polish',
          4 => 'Complete Tile Scrubbing & manual antibacterial mopping',
        ),
        'excludes' => 
        array (
          0 => 'Single-disc rotary machine scrubbing',
          1 => '140°C high-pressure steam sanitization',
          2 => 'Severe hard water calcium crust eradication',
          3 => 'Exhaust fan motor dismantling and internal degreasing',
          4 => 'Tile grout re-filling or silicone repair',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 1,
          2 => 1,
          3 => 2,
          4 => 3,
          5 => 17,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Nisha Laungani',
            'date' => 'November 1, 2026',
            'stars' => 3,
            'comment' => 'Quick, clean, and polite doorstep service. Everything was left spotless.',
          ),
          1 => 
          array (
            'name' => 'Rahul Chavan',
            'date' => 'October 30, 2026',
            'stars' => 5,
            'comment' => 'Very happy with the thorough service and punctual staff.',
          ),
          2 => 
          array (
            'name' => 'Akshata',
            'date' => 'October 24, 2026',
            'stars' => 5,
            'comment' => 'Bathroom smells fresh and tiles look spotless!',
          ),
          3 => 
          array (
            'name' => 'Priya Pant',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'Removed stubborn yellow stains around our commode and sink corners cleanly. Zero harsh acid smell.',
          ),
          4 => 
          array (
            'name' => 'Gaurav Bisht',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Booked for two washrooms in Awas Vikas, Kashipur. Punctual staff and very neat finish.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Signature Deep Clean',
        'featured' => true,
        'title' => 'Deep Cleaning',
        'price' => 800,
        'thumb' => SITE_URL . '/assets/images/pricing/packages/bathroom-deep.jpg',
        'sub' => 'Heavy single-disc machine scrubbing & hard water mark removal',
        'rating' => 4.85,
        'reviewCount' => 42,
        'duration' => '60 - 75 min',
        'description' => 'Intensive mechanized deep cleaning with single-disc scrubbing and heavy descalers to eradicate persistent hard water stains, grout grime, and tile scum.',
        'includes' => 
        array (
          0 => 'Single-disc rotary machine scrubbing for floor tiles',
          1 => 'Deep acid-free chemical descaling for glass partitions & mirrors',
          2 => 'Heavy hard water limescale removal from taps & showers',
          3 => 'Complete tile wall scrubbing & grout grime extraction',
          4 => 'Exhaust fan blades degreasing & exterior wipe',
        ),
        'excludes' => 
        array (
          0 => '140°C pressurized steam blast sanitization',
          1 => 'Repair of cracked tiles or chipped sanitaryware',
          2 => 'Exterior glass cleaning beyond safe window reach',
          3 => 'Wall plastering or ceiling seepage restoration',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 5,
          5 => 35,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Sameer Joshi',
            'date' => 'November 10, 2026',
            'stars' => 5,
            'comment' => 'Removed 2 years of hard water marks completely! Highly recommend.',
          ),
          1 => 
          array (
            'name' => 'Pooja Nair',
            'date' => 'November 4, 2026',
            'stars' => 5,
            'comment' => 'Very professional staff, machine scrubbing was super thorough.',
          ),
          2 => 
          array (
            'name' => 'Vikas Sharma',
            'date' => 'October 28, 2026',
            'stars' => 4,
            'comment' => 'Great job overall, timely arrival.',
          ),
          3 => 
          array (
            'name' => 'Shalini Tiwari',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Single-disc floor scrubbing brought back the original shine on our matte bathroom tiles.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Medical-Grade Steam',
        'title' => 'Intense Steam Cleaning',
        'price' => 1000,
        'thumb' => SITE_URL . '/assets/images/pricing/packages/bathroom-steam.jpg',
        'sub' => '140°C pressurized steam sanitization eradicating 99.9% germs',
        'rating' => 4.95,
        'reviewCount' => 58,
        'duration' => '75 - 90 min',
        'description' => 'Hospital-grade sanitization using 140°C pressurized steam and specialized enzymes, eliminating 99.9% of bacteria, mold spores, and hidden pathogens.',
        'includes' => 
        array (
          0 => '140°C high-pressure steam blast sanitizing toilet seat & grout',
          1 => '99.9% bacteria & allergen eradication without harmful chemical fumes',
          2 => 'Deep grout descaling removing stubborn mold and mildew',
          3 => 'Complete mechanised floor scrubbing with enzyme formula',
          4 => 'Full mirror, chrome fixtures and partition nano-shield buffing',
        ),
        'excludes' => 
        array (
          0 => 'Structural plumbing repair or replacement of fixtures',
          1 => 'Cement and paint spot removal from unfinished walls',
          2 => 'Exterior building glass cleaning without balcony',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 3,
          5 => 54,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Dr. Ananya Roy',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Medical-grade steam gave true hospital grade cleanliness. Excellent!',
          ),
          1 => 
          array (
            'name' => 'Karthik Menon',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Zero chemical smell and pure steam disinfection. Perfect.',
          ),
          2 => 
          array (
            'name' => 'Ritu Deshmukh',
            'date' => 'October 29, 2026',
            'stars' => 5,
            'comment' => 'Very impressive machine and meticulous detailing.',
          ),
          3 => 
          array (
            'name' => 'Harish Chandra',
            'date' => 'November 17, 2026',
            'stars' => 5,
            'comment' => 'Booked the steam package for my elderly parents washroom—completely germ-free and sparkling taps.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'tiles',
        'title' => 'Floor & Wall Tiles',
        'desc' => 'Hard water salt crust & dark grout lines eradicated',
        'icon' => 'grid_view',
        'before' => './assets/images/pricing/before-after/tiles-before.jpg',
        'after' => './assets/images/pricing/before-after/tiles-after.jpg',
      ),
      1 => 
      array (
        'id' => 'taps',
        'title' => 'Chrome Taps & Fixtures',
        'desc' => 'Heavy calcium scale removed to restore mirror chrome shine',
        'icon' => 'faucet',
        'before' => './assets/images/pricing/before-after/taps-before.jpg',
        'after' => './assets/images/pricing/before-after/taps-after.jpg',
      ),
      2 => 
      array (
        'id' => 'glass',
        'title' => 'Glass Shower Partition',
        'desc' => 'Soap scum & mineral etching cleared for 100% optical clarity',
        'icon' => 'window',
        'before' => './assets/images/pricing/before-after/glass-before.jpg',
        'after' => './assets/images/pricing/before-after/glass-after.jpg',
      ),
      3 => 
      array (
        'id' => 'washroom-commercial',
        'title' => 'Washroom Vanity & Sink',
        'desc' => 'Complete urinal, vanity basin and wall tile sanitization',
        'icon' => 'cleaning_services',
        'before' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Commercial%20Office%20Bathroom%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Spotless%20Commercial%20Office%20Bathroom.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'tap-polish',
        'name' => 'Tap Scaling & Rust Polish',
        'price' => 150,
        'icon' => 'faucet',
      ),
      1 => 
      array (
        'key' => 'tile-grout',
        'name' => 'Tile Grout Deep Scrubbing',
        'price' => 250,
        'icon' => 'grid_view',
      ),
      2 => 
      array (
        'key' => 'exhaust-fan',
        'name' => 'Exhaust Fan Degreasing',
        'price' => 199,
        'icon' => 'mode_fan',
      ),
      3 => 
      array (
        'key' => 'glass-glaze',
        'name' => 'Mirror & Glass Anti-Fog',
        'price' => 149,
        'icon' => 'window',
      ),
      4 => 
      array (
        'key' => 'drain-unclog',
        'name' => 'Drain Trap & Gully Flush',
        'price' => 199,
        'icon' => 'plumbing',
      ),
      5 => 
      array (
        'key' => 'shower-steam',
        'name' => 'Showerhead Descaling Wash',
        'price' => 149,
        'icon' => 'shower',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Hard water stain treatment on wall & floor tiles',
      1 => 'Toilet pot and urinal internal and external disinfection',
      2 => 'Wash basin, vanity counter and mirror spot-free polishing',
      3 => 'Shower area, glass partition and bathtub descaling',
      4 => 'Tap, showerhead and metallic chrome fitting polishing',
      5 => 'Floor drain unclogging and odour elimination treatment',
    ),
    'process' => 
    array (
      0 => 'Hard-water & Scale Assessment',
      1 => 'Descaling Chemical Pre-soak',
      2 => 'High-friction Grout & Tile Scrubbing',
      3 => 'Sanitary Fixture Steam Disinfection',
      4 => 'Chrome Buffing & Mirror Detailing',
      5 => 'Odour Neutralizer Spray & Handover',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Bathroom ke peele aur safed hard water daag hat jayenge?',
        'a' => 'Haan, hum specialized descaling acidic compounds use karte hain jo bina tiles ko nuksan pahunchaye ziddi namak aur hard water stains hata dete hain.',
      ),
      1 => 
      array (
        'q' => 'Kya bathroom cleaning ke baad washroom safe to use hota hai?',
        'a' => 'Haan, poori cleaning ke baad fresh water wash aur anti-bacterial disinfectant kiya jata hai, aap turant use kar sakte hain.',
      ),
    ),
  ),
  'kitchen-cleaning' => 
  array (
    'slug' => 'kitchen-cleaning',
    'name' => 'Kitchen Cleaning',
    'full_title' => 'Kitchen Degreasing & Deep Cleaning',
    'schema_type' => 'Kitchen deep cleaning',
    'icon' => 'soup_kitchen',
    'short_desc' => 'Heavy grease removal, chimney & exhaust cleaning, tile descaling and cabinet sanitization.',
    'starting_price' => '₹1,299',
    'time_estimate' => '2 - 4 hours',
    'suitable_for' => 'Residential kitchens, modular kitchens and commercial pantries.',
    'video' => SITE_URL . '/assets/cleaning%20videos/Person_cleaning_kitchen_82bbe15d.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/kitchen-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Surface Degrease',
        'title' => 'Standard Kitchen Degrease',
        'price' => 1299,
        'thumb' => SITE_URL . '/assets/images/pricing/kitchen-cleaning.jpg',
        'sub' => 'Platform, sink, exterior cabinets, backsplash tiles & floor',
        'rating' => 4.4,
        'reviewCount' => 28,
        'duration' => '60 - 75 min',
        'description' => 'Targeted degreasing for high-frequency cooking areas including cooktop, backsplash tiles, kitchen counter, sink, and floor.',
        'includes' => 
        array (
          0 => 'Gas stove burners & cooktop heavy grease removal',
          1 => 'Tile backsplash degreasing & sauce stain wiping',
          2 => 'Stainless steel sink descaling & drain antibacterial rinse',
          3 => 'Modular cabinet exterior surface wiping',
          4 => 'Manual floor scrubbing with food-grade degreaser',
        ),
        'excludes' => 
        array (
          0 => 'Chimney internal motor and duct cleaning',
          1 => 'Cleaning inside modular drawers with spices/utensils',
          2 => 'Refrigerator interior defrosting & shelf detailing',
          3 => 'Microwave interior carbonized grease removal',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 5,
          5 => 20,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Geeta Patel',
            'date' => 'November 7, 2026',
            'stars' => 5,
            'comment' => 'Removed hard oil stains behind the stove easily.',
          ),
          1 => 
          array (
            'name' => 'Anjali Mehra',
            'date' => 'November 18, 2026',
            'stars' => 5,
            'comment' => 'All sticky cooking oil around the gas hob and wall backsplash vanished in one visit.',
          ),
          2 => 
          array (
            'name' => 'Ramesh Pant',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Very neat kitchen degrease in Jaspur. Team covered our RO and spice jars before scrubbing.',
          ),
          3 => 
          array (
            'name' => 'Kiran Joshi',
            'date' => 'November 9, 2026',
            'stars' => 4,
            'comment' => 'Good value standard clean; our steel sink and faucets look brand new again.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Signature Chimney Deep',
        'featured' => true,
        'title' => 'Chimney & Modular Deep Clean',
        'price' => 1799,
        'thumb' => SITE_URL . '/assets/images/services/kitchen-cleaning.jpg',
        'sub' => 'Filter degreasing, internal baffles & full kitchen wash',
        'rating' => 4.86,
        'reviewCount' => 52,
        'duration' => '90 - 120 min',
        'description' => 'Specialized oil & spice restoration including chemical bath for chimney baffle filters, exhaust fan degreasing, and inside-out modular care.',
        'includes' => 
        array (
          0 => 'Chimney baffle & mesh filter caustic-free chemical soak & wash',
          1 => 'Exhaust fan motor housing & blades deep degreasing',
          2 => 'Inside & outside modular drawer vacuuming & sanitizing',
          3 => 'Persistent tile grout oil buildup scrubbing',
          4 => 'Single-disc floor scrubbing for sticky kitchen tiles',
        ),
        'excludes' => 
        array (
          0 => 'Chimney motor winding or electrical circuitry repairs',
          1 => 'Replacement of bent or rusted baffle filters',
          2 => 'Dishwasher internal filter maintenance',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 6,
          5 => 44,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Sneha Rao',
            'date' => 'November 9, 2026',
            'stars' => 5,
            'comment' => 'Chimney suction improved immediately after filter wash!',
          ),
          1 => 
          array (
            'name' => 'Neha Rawat',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Chimney baffle filters were soaking in thick grease—now airflow is strong and cabinets are spotless.',
          ),
          2 => 
          array (
            'name' => 'Suresh Agarwal',
            'date' => 'November 16, 2026',
            'stars' => 5,
            'comment' => 'Thorough modular drawer and chimney hood cleaning across Ramnagar Road. Worth every rupee.',
          ),
          3 => 
          array (
            'name' => 'Divya Chauhan',
            'date' => 'November 5, 2026',
            'stars' => 5,
            'comment' => 'Zero oil stickiness left on cabinet handles or granite slab. Highly recommended team.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Ultra Steam Hygiene',
        'title' => 'Ultra Steam & Sanitization Spa',
        'price' => 2499,
        'thumb' => SITE_URL . '/assets/images/pricing/kitchen-cleaning.jpg',
        'sub' => 'Hospital-grade steam sanitation for all surfaces & appliances',
        'rating' => 4.94,
        'reviewCount' => 41,
        'duration' => '2 - 2.5 hours',
        'description' => '140°C high-temperature thermal sterilization for food preparation zones, eradicating grease, salmonella, and stubborn residue.',
        'includes' => 
        array (
          0 => '140°C steam sanitation of countertop, prep board & sink',
          1 => 'Complete chimney filter cleaning & exterior hood buffing',
          2 => 'Inside-out empty modular cabinet microbial wipe',
          3 => 'Microwave & refrigerator exterior detailing & sanitization',
          4 => 'Food-safe floor buffing eliminating oil tackiness completely',
        ),
        'excludes' => 
        array (
          0 => 'Repair of cracked granite slabs or loose cabinet hinges',
          1 => 'Repainting peeling laminate or moisture-swollen MDF',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 0,
          4 => 3,
          5 => 38,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Dr. Deepak Bhatia',
            'date' => 'November 11, 2026',
            'stars' => 5,
            'comment' => 'Truly high-grade steam hygiene. Cleanest our kitchen has ever been.',
          ),
          1 => 
          array (
            'name' => 'Ritu Malhotra',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => '140°C steam sanitization inside fridge and microwave left zero chemical odor. Top-class work!',
          ),
          2 => 
          array (
            'name' => 'Mohit Verma',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Best deep kitchen spa in Kashipur. Even cleaned behind the stove and exhaust grill carefully.',
          ),
          3 => 
          array (
            'name' => 'Sunita Bisht',
            'date' => 'November 3, 2026',
            'stars' => 5,
            'comment' => 'Very polite two-member crew. Left the kitchen hygienic and dry before leaving.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'chimney-stove',
        'title' => 'Chimney & Gas Stove',
        'desc' => 'Burnt oil grease & sticky yellow carbon deposits dissolved',
        'icon' => 'cooking',
        'before' => './assets/images/before-after/kitchen%20%20cleaning/Greasy%20Gas%20Stove%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/kitchen%20%20cleaning/Spotless%20Three-Burner%20Gas%20Stove.png',
      ),
      1 => 
      array (
        'id' => 'modular-kitchen',
        'title' => 'Modular Kitchen & Slabs',
        'desc' => 'Oily cooking splatters and yellow film eradicated',
        'icon' => 'countertops',
        'before' => './assets/images/before-after/kitchen%20%20cleaning/Greasy%20Kitchen%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/kitchen%20%20cleaning/Spotless%20L-Shaped%20Kitchen%20After%20Cleaning.png',
      ),
      2 => 
      array (
        'id' => 'sink-steel',
        'title' => 'Stainless Sink & Faucets',
        'desc' => 'Stained stainless steel polished to spotless mirror shine',
        'icon' => 'faucet',
        'before' => './assets/images/before-after/kitchen%20%20cleaning/Dirty%20Kitchen%20Sink%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/kitchen%20%20cleaning/Spotless%20Sink%20After%20Cleaning.png',
      ),
      3 => 
      array (
        'id' => 'kitchen-cabinets',
        'title' => 'Kitchen Cabinets & Drawers',
        'desc' => 'Sticky oil residue wiped clean from laminates, hinges and shelves',
        'icon' => 'kitchen',
        'before' => './assets/images/before-after/kitchen%20%20cleaning/Cluttered%20Kitchen%20Cabinet%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/kitchen%20%20cleaning/Spotless%20Kitchen%20Cabinet%20After%20Cleaning.png',
      ),
      4 => 
      array (
        'id' => 'kitchen-fridge',
        'title' => 'Refrigerator Deep Sanitize',
        'desc' => 'Food spills, frost odor and sticky glass racks hygienically restored',
        'icon' => 'ac_unit',
        'before' => './assets/images/before-after/kitchen%20%20cleaning/Before%20Cleaning_%20Grimy%20Refrigerator%20Interior.png',
        'after' => './assets/images/before-after/kitchen%20%20cleaning/Spotless%20Organized%20Refrigerator%20Interior.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'chimney-baffle',
        'name' => 'Chimney Baffle Filter Soak',
        'price' => 250,
        'icon' => 'filter_alt',
      ),
      1 => 
      array (
        'key' => 'microwave-deep',
        'name' => 'Microwave / Oven Interior',
        'price' => 200,
        'icon' => 'microwave',
      ),
      2 => 
      array (
        'key' => 'fridge-sanitize',
        'name' => 'Refrigerator Sanitization',
        'price' => 250,
        'icon' => 'kitchen',
      ),
      3 => 
      array (
        'key' => 'cabinet-degrease',
        'name' => 'Modular Cabinet Degrease',
        'price' => 300,
        'icon' => 'shelves',
      ),
      4 => 
      array (
        'key' => 'gas-burners',
        'name' => 'Brass Burner Carbon Descale',
        'price' => 150,
        'icon' => 'local_fire_department',
      ),
      5 => 
      array (
        'key' => 'ro-exterior',
        'name' => 'RO Purifier & Trap Flush',
        'price' => 149,
        'icon' => 'water_drop',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Electric chimney exterior and filter degreasing',
      1 => 'Gas stove burner, knob and countertop deep cleaning',
      2 => 'Wall tiles, grout stain removal and backsplash descaling',
      3 => 'Modular cabinets & drawers cleaning (exterior & interior upon request)',
      4 => 'Sink, drainage point and tap scaling removal',
      5 => 'Exterior cleaning of refrigerator, microwave & ovens',
    ),
    'process' => 
    array (
      0 => 'Grease & Condition Inspection',
      1 => 'Chimney Filter & Burner Disassembly',
      2 => 'Industrial Food-Safe Degreaser Application',
      3 => 'Tile & Grout Steam Scrubbing',
      4 => 'Cabinets & Sink Sanitization',
      5 => 'Wipe-Down & Reassembly Quality Check',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Kitchen deep cleaning mein kitna time lagta hai?',
        'a' => '2 se 4 ghante lagte hain kitchen ke size aur grease ki condition ke hisaab se. Chimney, stove aur tiles ek hi visit mein clean hote hain.',
      ),
      1 => 
      array (
        'q' => 'Chimney cleaning kitni baar karwani chahiye?',
        'a' => 'Aam taur par har 3 se 6 mahine mein chimney filter aur duct degreasing karwani chahiye agar roz tel-masale wala khana banta hai.',
      ),
      2 => 
      array (
        'q' => 'Kya cleaning ke chemicals utensils ya food surfaces par safe hain?',
        'a' => 'Haan, hum non-toxic food-safe professional degreasers use karte hain jo utensils aur counters ko safely rinse kar dete hain.',
      ),
    ),
  ),
  'sofa-cleaning' => 
  array (
    'slug' => 'sofa-cleaning',
    'name' => 'Sofa & Upholstery',
    'full_title' => 'Sofa & Upholstery Deep Cleaning',
    'schema_type' => 'Sofa and upholstery cleaning',
    'icon' => 'weekend',
    'short_desc' => 'Fabric shampooing, injection-extraction wash, leather conditioning and allergen removal.',
    'starting_price' => '₹1,499',
    'time_estimate' => '1.5 - 3 hours (drying: 3-4 hours)',
    'suitable_for' => 'Fabric sofas, leather couches, recliners, dining chairs and mattresses.',
    'video' => SITE_URL . '/assets/cleaning%20videos/sofa_shampoo_cleaning_6c6a0420.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Express Care',
        'title' => 'Single Living Room Express (Only For Flat)',
        'price' => 1499,
        'thumb' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg',
        'sub' => 'Living room cleaning, sofa vacuuming & floor detailing',
        'rating' => 4.42,
        'reviewCount' => 24,
        'duration' => '40 - 50 min',
        'description' => 'Refresh your Living Room with our professional basic cleaning service, including window cleaning, wall & ceiling dry dusting, manual floor scrubbing, appliance cleaning, and exterior furniture dusting for a neat and well-maintained space.',
        'includes' => 
        array (
          0 => 'Window cleaning & glass surface wiping',
          1 => 'Wall & ceiling dry dusting',
          2 => 'Exterior cleaning of electrical appliances, fans, AC units & switches',
          3 => 'Sofa Dry vacuum/ dry dusting (upto 5 seater)',
          4 => 'Manual floor scrubbing & mopping',
          5 => 'Dry dusting of TV unit and exterior cleaning of furniture surfaces only',
        ),
        'excludes' => 
        array (
          0 => 'Cleaning of kitchen & bathroom windows is not included',
          1 => 'Exterior glass beyond safe reach (upper floors without balcony) is not included',
          2 => 'Grills or structures requiring leaning out are not included',
          3 => 'External sunshades or awnings are not included',
          4 => 'Tinted or privacy films (risk of peeling) are not included',
          5 => 'Glue, paint stains & sticker removal',
          6 => 'Collapsible mosquito nets and Curtains wet cleaning are not included',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 1,
          2 => 1,
          3 => 2,
          4 => 3,
          5 => 17,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Nisha Laungani',
            'date' => 'November 1, 2026',
            'stars' => 3,
            'comment' => 'Quick, clean, and polite doorstep service. Everything was left spotless.',
          ),
          1 => 
          array (
            'name' => 'Rahul Chavan',
            'date' => 'October 30, 2026',
            'stars' => 5,
            'comment' => 'Very happy with the thorough service and punctual staff.',
          ),
          2 => 
          array (
            'name' => 'Akshata',
            'date' => 'October 24, 2026',
            'stars' => 5,
            'comment' => 'Team arrived right on time and cleaned thoroughly.',
          ),
          3 => 
          array (
            'name' => 'Rohan Kashyap',
            'date' => 'November 16, 2026',
            'stars' => 5,
            'comment' => 'Coffee and kid food spots lifted right out of our beige fabric sofa in less than an hour.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Signature Exclusive',
        'featured' => true,
        'title' => 'Single Living Room Exclusive (Only For Flat)',
        'price' => 1999,
        'thumb' => SITE_URL . '/assets/images/services/sofa-cleaning.jpg',
        'sub' => 'Full mechanized scrubbing & sofa injection shampooing',
        'rating' => 4.82,
        'reviewCount' => 47,
        'duration' => '1 hour',
        'description' => 'Refresh your Living Room with our professional advance cleaning service, including mechanized single-disc floor scrubbing, wet sofa shampooing, window polishing, and anti-bacterial air treatment.',
        'includes' => 
        array (
          0 => 'Full living room mechanized single-disc floor scrubbing',
          1 => 'Complete 5-seater sofa wet injection-extraction shampooing',
          2 => 'Window glass double-sided polish & aluminum track vacuuming',
          3 => 'Wall cobweb eradication & ceiling fan detailed wiping',
          4 => 'TV console, coffee table & furniture polish with microfiber',
          5 => 'Antibacterial deodorizer spray treatment',
        ),
        'excludes' => 
        array (
          0 => 'Fabric color bleeding on pre-damaged antique velvet',
          1 => 'Permanent ink, acid or pet urine bleaching marks',
          2 => 'Balcony ceiling washing if prone to neighbor leakage',
          3 => 'Curtains dry cleaning',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 6,
          5 => 39,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Aditya Kulkarni',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Wet sofa wash removed all old stains. Looks like new!',
          ),
          1 => 
          array (
            'name' => 'Meera Sen',
            'date' => 'November 6, 2026',
            'stars' => 5,
            'comment' => 'Extremely courteous staff and fast drying process.',
          ),
          2 => 
          array (
            'name' => 'Kavita Negi',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Injection-extraction pulled out years of dust from our 5-seater fabric set.',
          ),
          3 => 
          array (
            'name' => 'Manish Pandey',
            'date' => 'November 11, 2026',
            'stars' => 4,
            'comment' => 'Great deep shampooing in Ramnagar. Sofa dried completely by evening under the fan.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Recliner Master',
        'title' => '7-Seater L-Shape Recliner Master',
        'price' => 2499,
        'thumb' => SITE_URL . '/assets/images/pricing/sofa-cleaning.jpg',
        'sub' => '3-stage extraction for sectional sofas & electric recliners',
        'rating' => 4.9,
        'reviewCount' => 63,
        'duration' => '90 - 120 min',
        'description' => 'Ultimate luxury fabric spa for sectional L-shaped sofas and electric recliners with deep crevice suction and fabric conditioning.',
        'includes' => 
        array (
          0 => 'Sectional & recliner mechanical seam suction and extraction',
          1 => 'Heavy-duty enzyme foam shampooing for all 7 seating segments',
          2 => 'Crevice extraction for hidden crumbs, hair & dust allergens',
          3 => 'Rapid moisture vacuum recovery for fast 3-4 hour drying',
          4 => 'Protective stain-resistant finishing coat application',
        ),
        'excludes' => 
        array (
          0 => 'Electric recliner motor or wiring maintenance',
          1 => 'Repair of peeled bonded leather or cracked vinyl',
          2 => 'Color restoration on sun-faded fabric',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 2,
          4 => 5,
          5 => 56,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Vikram Singhania',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Handled our expensive leatherette recliner with great care.',
          ),
          1 => 
          array (
            'name' => 'Sneha Bansal',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Our L-shape corner sofa and cushions look showroom-fresh! No damp smell at all.',
          ),
          2 => 
          array (
            'name' => 'Tarun Saxena',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Handled our electric recliner carefully without wetting any switches or wiring.',
          ),
          3 => 
          array (
            'name' => 'Bhavna Joshi',
            'date' => 'November 7, 2026',
            'stars' => 5,
            'comment' => 'Removed pet hair and dark armrest marks effortlessly. Very impressed!',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'sofa-sectional',
        'title' => 'Fabric Sectional Sofa',
        'desc' => 'Stubborn tea, coffee spills and dark sweat rings extracted',
        'icon' => 'chair',
        'before' => './assets/images/before-after/sofa%20cleaning/Stained%20Sectional%20Sofa%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/sofa%20cleaning/Freshly%20Cleaned%20Beige%20Sectional%20Sofa.png',
      ),
      1 => 
      array (
        'id' => 'sofa-loveseat',
        'title' => 'Living Room Loveseat',
        'desc' => 'Deep foam sanitization & dust mite eradication',
        'icon' => 'weekend',
        'before' => './assets/images/before-after/sofa%20cleaning/Stained%20Taupe%20Loveseat%20in%20Sunlit%20Living%20Room.png',
        'after' => './assets/images/before-after/sofa%20cleaning/Freshly%20Cleaned%20Brown%20Loveseat.png',
      ),
      2 => 
      array (
        'id' => 'sofa-armchair',
        'title' => 'Accent Armchair Upholstery',
        'desc' => 'Restored original upholstery brightness and velvety softness',
        'icon' => 'chair',
        'before' => './assets/images/before-after/sofa%20cleaning/Worn%20Teal%20Armchair%20by%20the%20Window.png',
        'after' => './assets/images/before-after/sofa%20cleaning/Spotless%20Teal%20Armchair%20in%20a%20Bright%20Room.png',
      ),
      3 => 
      array (
        'id' => 'sofa-seven-seater',
        'title' => '7-Seater Family Sofa',
        'desc' => 'Full injection-extraction shampooing lifts embedded food & body oils',
        'icon' => 'living',
        'before' => './assets/images/before-after/sofa%20cleaning/Seven-Seater%20Sofa%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/sofa%20cleaning/Spotless%207-Seater%20Sofa%20After%20Cleaning.png',
      ),
      4 => 
      array (
        'id' => 'sofa-armchair-cushion',
        'title' => 'Armchair & Throw Cushions',
        'desc' => 'Targeted stain spotting and anti-allergen steam sanitization',
        'icon' => 'chair_alt',
        'before' => './assets/images/before-after/sofa%20cleaning/Stained%20Armchair%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/sofa%20cleaning/Freshly%20Cleaned%20Armchair%20and%20Cushion.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'cushion-wash',
        'name' => 'Extra Cushion Deep Wash',
        'price' => 100,
        'icon' => 'chair',
      ),
      1 => 
      array (
        'key' => 'sofa-perfume',
        'name' => 'Enzyme Odor Neutralizer',
        'price' => 149,
        'icon' => 'air',
      ),
      2 => 
      array (
        'key' => 'stain-guard',
        'name' => 'Scotchgard Stain Shield',
        'price' => 250,
        'icon' => 'shield',
      ),
      3 => 
      array (
        'key' => 'leather-polish',
        'name' => 'Leather Conditioner Buff',
        'price' => 299,
        'icon' => 'auto_awesome',
      ),
      4 => 
      array (
        'key' => 'ottoman-clean',
        'name' => 'Ottoman / Pouffe Deep Wash',
        'price' => 199,
        'icon' => 'weekend',
      ),
      5 => 
      array (
        'key' => 'armrest-steam',
        'name' => '140°C Steam Mite Sanitize',
        'price' => 199,
        'icon' => 'sanitizer',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Dry vacuuming for dust, pet hair and deep dirt extraction',
      1 => 'Fabric-safe shampoo application and gentle agitation',
      2 => 'Spot treatment for coffee, tea, food and oil stains',
      3 => 'Wet extraction to suck out 90% water and accumulated grime',
      4 => 'Leather cleaner & moisture conditioning cream (for leather)',
      5 => 'Fabric freshener and anti-dustmite mist spray',
    ),
    'process' => 
    array (
      0 => 'Fabric Type Inspection (Velvet, Cotton, Suede, Leather)',
      1 => 'Industrial High-Suction Dry Vacuuming',
      2 => 'Eco Shampooing & Spot Treatment',
      3 => 'Injection-Extraction Suction Machine Cleaning',
      4 => 'Leather Wax Polish (if leather)',
      5 => 'Moisture & Odour Inspection',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Sofa cleaning ke baad sukhne mein kitna time lagta hai?',
        'a' => 'Humari extraction machine lagbhag saara paani nikaal leti hai. Fan ke neeche sofa 3 se 4 ghante mein bilkul sukh jaata hai.',
      ),
      1 => 
      array (
        'q' => 'Kya purane daag (chai, coffee, grease) nikal jaate hain?',
        'a' => 'Lagbhag 90-95% stains nikal jaate hain. Agar fabric ka color damage na hua ho toh hum maximum daag safely remove karte hain.',
      ),
      2 => 
      array (
        'q' => 'Sofa kitne samay mein clean karwana chahiye?',
        'a' => 'Ghar mein bachche ya pets hon toh har 4-6 mahine mein, warna saal mein kam se kam ek baar deep wash zaroor karwayein.',
      ),
    ),
  ),
  'water-tank-cleaning' => 
  array (
    'slug' => 'water-tank-cleaning',
    'name' => 'Water Tank Cleaning',
    'full_title' => 'Water Tank Cleaning & Disinfection',
    'schema_type' => 'Water tank cleaning',
    'icon' => 'water_drop',
    'short_desc' => '6-step mechanized sludge extraction, pressure wash, UV/chemical sterilization.',
    'starting_price' => '₹899',
    'time_estimate' => '1 - 2.5 hours',
    'suitable_for' => 'Rooftop Sintex/plastic tanks, underground RCC concrete tanks, apartments and societies.',
    'video' => SITE_URL . '/assets/cleaning%20videos/Person_cleaning_water_tank_bc0ad2f8.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/water-tank-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Overhead Care',
        'title' => 'Overhead Tank (Up to 1,000L)',
        'price' => 899,
        'thumb' => SITE_URL . '/assets/images/pricing/water-tank-cleaning.jpg',
        'sub' => 'De-sludging, high-pressure jet wash & UV disinfection',
        'rating' => 4.5,
        'reviewCount' => 19,
        'duration' => '45 - 60 min',
        'description' => 'Mechanized 6-stage overhead sintex/concrete tank sanitization removing brown sediment, algae, and bacterial slime for safe drinking water.',
        'includes' => 
        array (
          0 => 'Complete drainage of water and sludge pumping',
          1 => 'High-pressure water jet scouring of interior walls',
          2 => 'Manual scrubbing of corners and outlet pipe area',
          3 => 'UV antibacterial lamp radiation sterilization',
          4 => 'Chlorine-free anti-algae biological treatment',
        ),
        'excludes' => 
        array (
          0 => 'Tank structure crack sealing or civil plastering',
          1 => 'Float valve or copper plumbing pipe replacement',
          2 => 'Water pump servicing',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 3,
          5 => 14,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Kishore Patil',
            'date' => 'November 3, 2026',
            'stars' => 5,
            'comment' => 'Water is crystal clear now. UV lamp process was impressive.',
          ),
          1 => 
          array (
            'name' => 'Praveen Bisht',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => '6-step pressure wash and UV treatment cleared thick green algae from our 1,000L Sintex tank.',
          ),
          2 => 
          array (
            'name' => 'Meenakshi Pant',
            'date' => 'November 17, 2026',
            'stars' => 5,
            'comment' => 'No chlorine aftertaste at all. Staff even washed the tank lid and float valve neatly.',
          ),
          3 => 
          array (
            'name' => 'Rajeev Kumar',
            'date' => 'November 10, 2026',
            'stars' => 5,
            'comment' => 'Punctual doorstep service in Bazpur Road, Kashipur. Slurry pumped out cleanly with zero mess.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Underground Sump',
        'featured' => true,
        'title' => 'Underground Sump (Up to 2,500L)',
        'price' => 1499,
        'thumb' => SITE_URL . '/assets/images/services/water-tank-cleaning.jpg',
        'sub' => 'Heavy vacuum de-sludging & rotary jet wall scouring',
        'rating' => 4.88,
        'reviewCount' => 35,
        'duration' => '60 - 90 min',
        'description' => 'Heavy submersible vacuum de-sludging and rotary jet scouring for large capacity underground RCC water sumps.',
        'includes' => 
        array (
          0 => 'Heavy submersible sludge pump evacuation',
          1 => 'Industrial high-pressure jet cleaning up to 150 bar',
          2 => 'Anti-microbial chemical scrub on RCC walls & floor',
          3 => 'UV germicidal radiation treatment',
          4 => 'Sediment extraction around pump suction line',
        ),
        'excludes' => 
        array (
          0 => 'Civil masonry or waterproofing coating',
          1 => 'Sump lid fabrication or rust removal from iron manhole',
          2 => 'Main municipal supply line descaling',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 5,
          5 => 29,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Harish Mehta',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Cleaned years of silt from the sump floor in under an hour.',
          ),
          1 => 
          array (
            'name' => 'Alok Verma',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Submersible sludge pump cleared heavy silt from our 2,500L underground sump tank in 75 mins.',
          ),
          2 => 
          array (
            'name' => 'Sandeep Rawat',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => '150-bar pressure jet removed moss from RCC sump walls without any harsh smell.',
          ),
          3 => 
          array (
            'name' => 'Nandini Gupta',
            'date' => 'November 6, 2026',
            'stars' => 4,
            'comment' => 'Very organized crew with proper ladders, pumps, and UV lamp equipment.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Society Master',
        'title' => 'Society / Multi-Tank Combo',
        'price' => 2999,
        'thumb' => SITE_URL . '/assets/images/pricing/water-tank-cleaning.jpg',
        'sub' => 'Overhead + Sump complete community water purity combo',
        'rating' => 4.95,
        'reviewCount' => 51,
        'duration' => '2 - 3 hours',
        'description' => 'Commercial-grade sanitization combo for apartment complexes covering both overhead tanks and underground sumps.',
        'includes' => 
        array (
          0 => 'Simultaneous multi-tank dewatering with industrial pumps',
          1 => 'Full wall, ceiling & floor high-pressure scouring',
          2 => 'Comprehensive UV germicidal sterilization across all tanks',
          3 => 'Water clarity and TDS post-cleaning inspection test',
          4 => 'Society hygiene certification report issued',
        ),
        'excludes' => 
        array (
          0 => 'Main pipeline pressure testing',
          1 => 'Pump electrical panel repairs',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 3,
          5 => 47,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Rajesh Gokhale (Secretary)',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Full society was happy with the speed and certification.',
          ),
          1 => 
          array (
            'name' => 'Col. R. S. Negi',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'Booked the society combo for our apartment block in Kashipur—all 4 overhead tanks certified clean!',
          ),
          2 => 
          array (
            'name' => 'Arvind Chauhan',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Provided TDS inspection reading before and after cleaning. Residents are very happy.',
          ),
          3 => 
          array (
            'name' => 'Dinesh Joshi',
            'date' => 'November 2, 2026',
            'stars' => 5,
            'comment' => 'Reliable annual tank sanitization partner for our guest house near Ramnagar.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'tank-blue',
        'title' => 'Water Tank Deep Interior',
        'desc' => 'Heavy muddy silt deposits pumped out and walls scrubbed',
        'icon' => 'water_drop',
        'before' => './assets/images/before-after/tank%20cleaning/Grimy%20Blue%20Water%20Tank%20Interior.png',
        'after' => './assets/images/before-after/tank%20cleaning/Clean%20Blue%20Water%20Tank%20Interior.png',
      ),
      1 => 
      array (
        'id' => 'tank-valve',
        'title' => 'Chamber & Float Valve',
        'desc' => '120-bar high-pressure scrub eliminates all green algae slime',
        'icon' => 'sanitizer',
        'before' => './assets/images/before-after/tank%20cleaning/Grimy%20Water%20Tank%20Interior%20with%20Float%20Valve.png',
        'after' => './assets/images/before-after/tank%20cleaning/Clean%20Water%20Tank%20Interior.png',
      ),
      2 => 
      array (
        'id' => 'tank-rooftop',
        'title' => 'Rooftop Water Tank Unit',
        'desc' => '100% bacteria-free potable drinking water storage ready',
        'icon' => 'roofing',
        'before' => './assets/images/before-after/tank%20cleaning/Weathered%20Rooftop%20Water%20Tank.png',
        'after' => './assets/images/before-after/tank%20cleaning/Clean%20Water%20Tank%20on%20a%20Wet%20Rooftop.png',
      ),
      3 => 
      array (
        'id' => 'tank-algae-twin',
        'title' => 'Algae-Stained Overhead Tanks',
        'desc' => 'Exterior & interior bio-film washed clean with food-safe sterilizer',
        'icon' => 'water_ec',
        'before' => './assets/images/before-after/tank%20cleaning/Before%20Cleaning_%20Algae-Stained%20Rooftop%20Tanks.png',
        'after' => './assets/images/before-after/tank%20cleaning/Clean%20Rooftop%20Tanks%20After%20Service.png',
      ),
      4 => 
      array (
        'id' => 'tank-sump-unit',
        'title' => 'Underground Sump Chamber',
        'desc' => 'Submersible sludge dewatering and UV disinfection of RCC sumps',
        'icon' => 'waves',
        'before' => './assets/images/before-after/tank%20cleaning/Before%20Underground%20Sump%20Cleaning.png',
        'after' => './assets/images/before-after/tank%20cleaning/Clean%20Underground%20Sump%20After%20Cleaning.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'pipe-flush',
        'name' => 'Distribution Pipeline Flush',
        'price' => 300,
        'icon' => 'plumbing',
      ),
      1 => 
      array (
        'key' => 'uv-disinfect',
        'name' => 'UV Chamber Sterilization',
        'price' => 250,
        'icon' => 'wb_sunny',
      ),
      2 => 
      array (
        'key' => 'overflow-filter',
        'name' => 'Overflow Mesh Netting',
        'price' => 150,
        'icon' => 'filter_alt',
      ),
      3 => 
      array (
        'key' => 'algae-shield',
        'name' => 'Anti-Algae Food-Grade Coat',
        'price' => 400,
        'icon' => 'shield',
      ),
      4 => 
      array (
        'key' => 'lid-seal',
        'name' => 'Tank Lid & Gasket Seal Wash',
        'price' => 120,
        'icon' => 'verified_user',
      ),
      5 => 
      array (
        'key' => 'tds-check',
        'name' => 'Post-Wash TDS & pH Test',
        'price' => 99,
        'icon' => 'science',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Complete water dewatering via high-flow submersible pump',
      1 => 'Sludge, algae and mud suction removal',
      2 => 'Internal wall high-pressure jet washing',
      3 => 'Manual wire brush / mechanical scrubbing of floor & corners',
      4 => 'Potassium permanganate / chlorine antibacterial disinfection',
      5 => 'UV sterilization radiation / final rinse and drying',
    ),
    'process' => 
    array (
      0 => 'Tank Emptying with Submersible Sludge Pump',
      1 => 'Manual Sludge & Dirt Removal',
      2 => 'High-Pressure Jet Washer Spray (120+ Bar)',
      3 => 'Disinfectant & Descaling Chemical Treatment',
      4 => 'Dirty Water Vacuum Suction',
      5 => 'Final Clean Water Rinse & Tank Lid Seal',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Water tank cleaning kitni baar karwani chahiye?',
        'a' => 'Har 6 mahine mein water tank zaroor saaf karwayein taaki algae, sludge aur skin infections ka khatra na rahe.',
      ),
      1 => 
      array (
        'q' => 'Kya paani mein safai ke baad badbu aayegi?',
        'a' => 'Nahi, hum thorough final rinse karte hain jisse disinfectant smell bilkul nikal jaati hai aur fresh peene yogya paani milta hai.',
      ),
    ),
  ),
  'home-cleaning' => 
  array (
    'slug' => 'home-cleaning',
    'name' => 'Home Cleaning',
    'full_title' => 'Home & Residential Deep Cleaning',
    'schema_type' => 'Home and residential cleaning',
    'icon' => 'home',
    'short_desc' => 'Complete residential deep cleaning for flats, villas, and independent houses.',
    'starting_price' => '₹1,999',
    'time_estimate' => '4 - 7 hours (based on BHK size)',
    'suitable_for' => 'Homeowners, tenants, 1/2/3/4 BHK flats, kothis and independent villas.',
    'video' => SITE_URL . '/assets/cleaning%20videos/deep_home_cleaning_6ce7a0e5.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/home-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Essential Compact',
        'title' => '1 BHK Complete Deep Clean',
        'price' => 1999,
        'thumb' => SITE_URL . '/assets/images/pricing/packages/home-1bhk.jpg',
        'sub' => 'Living room, 1 bedroom, 1 kitchen, 1 washroom & balcony',
        'rating' => 4.45,
        'reviewCount' => 31,
        'duration' => '3 - 4 hours',
        'description' => 'Comprehensive deep cleaning for your 1 BHK flat covering mechanized floor scrubbing, kitchen degreasing, bathroom descaling, and dust extraction.',
        'includes' => 
        array (
          0 => 'Single-disc rotary floor machine scrubbing for hall & bedroom',
          1 => 'Kitchen chimney exterior, platform & cabinet exterior degreasing',
          2 => '1 complete bathroom intensive descaling & sanitization',
          3 => 'Ceiling fans, switchboards, doors & window tracks vacuuming',
          4 => 'Balcony floor scrubbing & dry vacuuming of living space',
        ),
        'excludes' => 
        array (
          0 => 'Upholstery / sofa wet shampoo extraction (available as add-on)',
          1 => 'Internal cleaning of occupied wardrobes & kitchen drawers',
          2 => 'Wall washing or repainting permanent dampness spots',
          3 => 'Dismantling heavy crystal chandeliers',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 6,
          5 => 22,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Rohit Verma',
            'date' => 'November 5, 2026',
            'stars' => 5,
            'comment' => 'Transformed my 1 BHK flat before housewarming. 10/10!',
          ),
          1 => 
          array (
            'name' => 'Priya Sundaram',
            'date' => 'October 31, 2026',
            'stars' => 4,
            'comment' => 'Very satisfied with the bathroom and kitchen work.',
          ),
          2 => 
          array (
            'name' => 'Pankaj Saxena',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'Our 1 BHK flat in Awas Vikas looks brand new—ceiling fans, window tracks, and floors all gleamed.',
          ),
          3 => 
          array (
            'name' => 'Aarti Sharma',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Super polite crew, brought their own heavy vacuum and rotary buffer. Zero hassle.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Signature Family Clean',
        'featured' => true,
        'title' => '2 BHK Complete Deep Clean',
        'price' => 2999,
        'thumb' => SITE_URL . '/assets/images/pricing/packages/home-2bhk.jpg',
        'sub' => 'Living room, 2 bedrooms, kitchen, 2 washrooms & balconies',
        'rating' => 4.88,
        'reviewCount' => 64,
        'duration' => '4 - 5 hours',
        'description' => 'Full flat mechanized hygiene makeover for 2 BHK family apartments, restoring shine to tiles, modular kitchens, 2 bathrooms, and balconies.',
        'includes' => 
        array (
          0 => 'Full flat mechanized single-disc scrubbing & edge buffing',
          1 => 'Modular kitchen deep degreasing including tiles, hob & exhaust',
          2 => '2 full bathrooms complete acid-free descaling & polish',
          3 => 'Dry vacuuming of mattresses, curtains & living room furniture',
          4 => 'High-reach cobweb extraction, door polishing & balcony jet wash',
        ),
        'excludes' => 
        array (
          0 => 'Wet sofa & carpet injection wash (separate add-on)',
          1 => 'Cleaning inside cupboards containing personal clothes',
          2 => 'Exterior high-rise window panes without balcony access',
          3 => 'Removal of permanent paint overspray on untreated wood',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 9,
          5 => 52,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Alok Gupta',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Super fast, punctual team. Every corner was scrubbed.',
          ),
          1 => 
          array (
            'name' => 'Shweta K.',
            'date' => 'November 2, 2026',
            'stars' => 5,
            'comment' => 'The kitchen and both bathrooms look brand new.',
          ),
          2 => 
          array (
            'name' => 'Rohit & Sonia',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => 'Booked 2 BHK deep clean before Diwali guests arrived. Kitchen, bathrooms, and balcony spotless!',
          ),
          3 => 
          array (
            'name' => 'Vivek Kandpal',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Transparent pricing with zero last-minute extras. Best home cleaning crew in Kashipur.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Luxury Villa Master',
        'title' => '3 BHK / Duplex Villa Master',
        'price' => 3999,
        'thumb' => SITE_URL . '/assets/images/pricing/home-cleaning.jpg',
        'sub' => 'Comprehensive deep hygiene for large families & villas',
        'rating' => 4.92,
        'reviewCount' => 89,
        'duration' => '5 - 7 hours',
        'description' => 'End-to-end luxury cleaning masterclass for large 3 BHK homes, penthouses, and villas with a supervisor-led expert team.',
        'includes' => 
        array (
          0 => 'Multi-disc industrial scrubbing for 3 bedrooms, living & dining',
          1 => '3 complete bathrooms intensive rotary and steam cleaning',
          2 => 'Heavy kitchen degreasing for cabinets, chimney, tiles & slab',
          3 => 'Terrace, utility area & all balconies high-pressure jet wash',
          4 => 'Final white-glove joint inspection with satisfaction sign-off',
        ),
        'excludes' => 
        array (
          0 => 'Wet shampooing of large wall-to-wall carpets (add-on)',
          1 => 'Garden lawn trimming or rooftop water proofing',
          2 => 'Moving ultra-heavy antique furniture over 60 kg',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 2,
          4 => 7,
          5 => 80,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Manish Malhotra',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Worth every rupee. Villa shines like a 5-star hotel.',
          ),
          1 => 
          array (
            'name' => 'Dr. Seema Bhat',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'A 4-person uniformed team finished our entire 3 BHK duplex including terrace in one day.',
          ),
          2 => 
          array (
            'name' => 'Nitin Agarwal',
            'date' => 'November 11, 2026',
            'stars' => 5,
            'comment' => 'Rotary floor polishing revived the marble shine in our hall. Truly worth the package.',
          ),
          3 => 
          array (
            'name' => 'Geeta Rawat',
            'date' => 'November 4, 2026',
            'stars' => 5,
            'comment' => 'Even cleaned cobwebs, wardrobe tops, and balcony glass panels thoroughly.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'home-living',
        'title' => 'Modern Living Room',
        'desc' => 'Dusty living space transformed into spotless gleaming retreat',
        'icon' => 'living',
        'before' => './assets/images/before-after/full%20home%20deep%20cleaning/Dusty%20Living%20Room%20Before%20Deep%20Cleaning.png',
        'after' => './assets/images/before-after/full%20home%20deep%20cleaning/Freshly%20Cleaned%20Modern%20Living%20Room.png',
      ),
      1 => 
      array (
        'id' => 'home-balcony',
        'title' => 'Balcony & Glass Enclosure',
        'desc' => 'Weather crust, dust and grime scrubbed crystal clean',
        'icon' => 'deck',
        'before' => './assets/images/before-after/full%20home%20deep%20cleaning/Dirty%20Balcony%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/full%20home%20deep%20cleaning/Bright%20Balcony%20Afterglow.png',
      ),
      2 => 
      array (
        'id' => 'home-entrance',
        'title' => 'Foyer & Main Entrance',
        'desc' => 'Spotless modern entrance with sanitized thresholds and floors',
        'icon' => 'door_front',
        'before' => './assets/images/before-after/full%20home%20deep%20cleaning/Dirty%20Entrance%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/full%20home%20deep%20cleaning/Spotless%20Modern%20Entrance%20After%20Cleaning.png',
      ),
      3 => 
      array (
        'id' => 'home-trio',
        'title' => 'Bedroom, Kitchen & Bath Trio',
        'desc' => 'Room-by-room mechanized scrubbing and allergen-free sanitization',
        'icon' => 'home',
        'before' => './assets/images/before-after/full%20home%20deep%20cleaning/Before%20Cleaning_%20Bedroom%2C%20Kitchen%2C%20Bathroom.png',
        'after' => './assets/images/before-after/full%20home%20deep%20cleaning/Freshly%20Cleaned%20Home%20Trio.png',
      ),
      4 => 
      array (
        'id' => 'home-terrace',
        'title' => 'Rooftop Terrace Deck',
        'desc' => 'High-pressure jet wash clears weather grime and moss buildup',
        'icon' => 'roofing',
        'before' => './assets/images/before-after/full%20home%20deep%20cleaning/Rooftop%20Terrace%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/full%20home%20deep%20cleaning/Freshly%20Cleaned%20Rooftop%20Terrace.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'fridge-interior',
        'name' => 'Fridge Interior Sanitization',
        'price' => 250,
        'icon' => 'kitchen',
      ),
      1 => 
      array (
        'key' => 'mattress-steam',
        'name' => 'Master Mattress Steam Vac',
        'price' => 350,
        'icon' => 'bed',
      ),
      2 => 
      array (
        'key' => 'fan-motor',
        'name' => 'Exhaust & Fan Motor Degrease',
        'price' => 200,
        'icon' => 'mode_fan',
      ),
      3 => 
      array (
        'key' => 'balcony-jet',
        'name' => 'Pressure Wash Balcony Floor',
        'price' => 250,
        'icon' => 'deck',
      ),
      4 => 
      array (
        'key' => 'chandelier-dust',
        'name' => 'Chandelier & Light Fixtures',
        'price' => 249,
        'icon' => 'light',
      ),
      5 => 
      array (
        'key' => 'wardrobe-inner',
        'name' => 'Wardrobe Interior Vac & Wipe',
        'price' => 299,
        'icon' => 'door_sliding',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Living room & bedroom thorough dusting and vacuuming',
      1 => 'Floor scrubbing & mechanised buffing for all tile/marble floors',
      2 => 'Ceiling fan, exhaust fan, light fixtures and cobweb removal',
      3 => 'Balcony floor washing and railing sanitization',
      4 => 'Door, window frame and glass panel cleaning',
      5 => 'Baseboard, switchboard and wall spot cleaning',
    ),
    'process' => 
    array (
      0 => 'Enquiry & BHK Assessment',
      1 => 'Transparent Scope & Quotation',
      2 => 'Slot Confirmation & Prep Guidance',
      3 => 'Team Arrival with Heavy Duty Machines & Eco-friendly Chemicals',
      4 => 'Deep Scrubbing, Vacuuming & Sanitization',
      5 => 'Final Joint Inspection & Customer Review',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Home deep cleaning mein kya kya shamil hota hai?',
        'a' => 'Floor scrubbing, ceiling and fan dusting, wall and door cleaning, balcony washing, bedroom & living room detail sanitization shamil hai.',
      ),
      1 => 
      array (
        'q' => '1 BHK ya 2 BHK deep cleaning mein kitna time lagta hai?',
        'a' => 'Aam taur par 2 BHK ghar mein 4 se 6 ghante lagte hain, depend karta hai ghar ki halat aur furniture par.',
      ),
      2 => 
      array (
        'q' => 'Kya humein cleaning material ya machines provide karni padengi?',
        'a' => 'Nahi, A1 Cleaning ki trained team apne professional equipment, floor scrubbers, vacuum cleaners aur eco-friendly solutions saath lati hai.',
      ),
    ),
  ),
  'carpet-cleaning' => 
  array (
    'slug' => 'carpet-cleaning',
    'name' => 'Carpet Cleaning',
    'full_title' => 'Carpet & Rug Shampooing Service',
    'schema_type' => 'Carpet and rug cleaning',
    'icon' => 'layers',
    'short_desc' => 'Industrial carpet extraction, rug sanitization, bad odour removal and fluff rejuvenation.',
    'starting_price' => '₹999',
    'time_estimate' => '1 - 2 hours per room',
    'suitable_for' => 'Wall-to-wall carpets, Kashmiri rugs, office carpets and bedside runners.',
    'video' => SITE_URL . '/assets/cleaning%20videos/carpet_and_rug_deep_wash_ed47a45e.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/carpet-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Dry Extraction',
        'title' => 'Dry Vacuum & Surface Sanitize',
        'price' => 999,
        'thumb' => SITE_URL . '/assets/images/pricing/carpet-cleaning.jpg',
        'sub' => 'High-filtration HEPA dust, mite & dry allergen removal',
        'rating' => 4.4,
        'reviewCount' => 15,
        'duration' => '30 - 45 min',
        'description' => 'High-filtration dry extraction removing fine grit, dead skin, and dust mites trapped within carpet fibers.',
        'includes' => 
        array (
          0 => 'Hospital-grade HEPA dry vacuuming of top pile and backing',
          1 => 'Pile rejuvenation brushing to restore carpet texture',
          2 => 'Dry odor-neutralizing deodorizer powder treatment',
          3 => 'Surface pet hair & fluff removal with rubber blade',
        ),
        'excludes' => 
        array (
          0 => 'Wet extraction washing or heavy spot shampooing',
          1 => 'Old tea, coffee or urine deep stain removal',
          2 => 'Carpet edge binding or re-weaving',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 3,
          5 => 10,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Ankita Sen',
            'date' => 'November 2, 2026',
            'stars' => 5,
            'comment' => 'Extracted shocking amount of dust from our area rug.',
          ),
          1 => 
          array (
            'name' => 'Deepak Mehrotra',
            'date' => 'November 18, 2026',
            'stars' => 5,
            'comment' => 'Quick dry vacuum and foam freshening revived our drawing room runner before our party.',
          ),
          2 => 
          array (
            'name' => 'Shweta Verma',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Zero dampness left behind and dust allergy symptoms dropped noticeably!',
          ),
          3 => 
          array (
            'name' => 'Karanpal Singh',
            'date' => 'November 5, 2026',
            'stars' => 4,
            'comment' => 'Neat doorstep service in Jaspur. No need to roll up heavy rugs for laundry.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Deep Shampoo',
        'featured' => true,
        'title' => 'Injection-Extraction Deep Wash',
        'price' => 1499,
        'thumb' => SITE_URL . '/assets/images/services/carpet-cleaning.jpg',
        'sub' => 'Warm shampoo injection with 90% instant moisture extraction',
        'rating' => 4.85,
        'reviewCount' => 39,
        'duration' => '60 - 75 min',
        'description' => 'Industrial injection-extraction wash that pushes warm enzyme shampoo deep into carpet roots and extracts dirty water instantly.',
        'includes' => 
        array (
          0 => 'Rotary machine agitation for fiber deep cleaning',
          1 => 'Pressurized injection of anti-static cleaning shampoo',
          2 => 'High-power suction extracting 90% water & dissolved dirt',
          3 => 'Anti-bacterial allergen neutralizer application',
          4 => 'Rapid drying air circulation guidance',
        ),
        'excludes' => 
        array (
          0 => 'Fading caused by permanent direct sun exposure',
          1 => 'Burnt fiber spots or cigarette holes',
          2 => 'Carpet underlay rotting replacement',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 5,
          5 => 32,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Varun Dhawan',
            'date' => 'November 10, 2026',
            'stars' => 5,
            'comment' => 'Stains from Diwali party vanished completely!',
          ),
          1 => 
          array (
            'name' => 'Sonia Sharma',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Hot-water injection extraction pulled dark muddy footprints right out of our shaggy rug.',
          ),
          2 => 
          array (
            'name' => 'Amitabh Joshi',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Our kids spilled juice twice—zero trace left after A1 Cleaning washed it on-site.',
          ),
          3 => 
          array (
            'name' => 'Preeti Chauhan',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Used turbo air dryer so the thick living room carpet dried fast without any odor.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Luxury Persian',
        'title' => 'Handmade / Wool Persian Rug Spa',
        'price' => 2299,
        'thumb' => SITE_URL . '/assets/images/pricing/carpet-cleaning.jpg',
        'sub' => 'Zero-damage pH-neutral botanical care for precious carpets',
        'rating' => 4.96,
        'reviewCount' => 27,
        'duration' => '90 - 120 min',
        'description' => 'Delicate museum-grade care for oriental, silk, and wool rugs with pH-neutral organic cleansers that protect natural vegetable dyes.',
        'includes' => 
        array (
          0 => 'Color-fastness patch testing before wash',
          1 => 'pH-neutral botanical shampoo manual sponging',
          2 => 'Fringe detailing and manual untangling',
          3 => 'Fiber conditioner application for plush softness',
          4 => 'Controlled indoor shade dry protocol',
        ),
        'excludes' => 
        array (
          0 => 'Knot re-weaving or frayed fringe re-stitching',
          1 => 'Repairing existing dye bleeds from previous wash attempts',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 0,
          4 => 2,
          5 => 25,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Begum Fatima',
            'date' => 'November 5, 2026',
            'stars' => 5,
            'comment' => 'Safely washed my ancestral Kashmiri silk carpet. Perfection.',
          ),
          1 => 
          array (
            'name' => 'Farhan Siddiqui',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'Gentle pH-neutral botanical wash kept our hand-knotted Kashmiri carpet colors vibrant and soft.',
          ),
          2 => 
          array (
            'name' => 'Renu Pant',
            'date' => 'November 10, 2026',
            'stars' => 5,
            'comment' => 'They even hand-combed the fringes carefully! Wouldn’t trust anyone else with expensive rugs.',
          ),
          3 => 
          array (
            'name' => 'Harshvardhan',
            'date' => 'November 3, 2026',
            'stars' => 5,
            'comment' => 'Meticulous fabric-safe process from inspection to final drying check.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'carpet-geometric',
        'title' => 'Geometric Living Room Rug',
        'desc' => 'Ground-in mud, food spills and pet stains completely extracted',
        'icon' => 'layers',
        'before' => './assets/images/before-after/carpet%20and%20rug%20wash/Heavily%20Soiled%20Geometric%20Living%20Room%20Rug.png',
        'after' => './assets/images/before-after/carpet%20and%20rug%20wash/Pristine%20Geometric%20Rug%20in%20Bright%20Living%20Room.png',
      ),
      1 => 
      array (
        'id' => 'carpet-shaggy',
        'title' => 'Plush Shaggy Area Rug',
        'desc' => 'High-traffic foot lane dirt extracted and deep fibers fluffed',
        'icon' => 'texture',
        'before' => './assets/images/before-after/carpet%20and%20rug%20wash/Heavily%20Soiled%20Shag%20Rug%20on%20Tile.png',
        'after' => './assets/images/before-after/carpet%20and%20rug%20wash/Freshly%20Cleaned%20Shaggy%20Rug.png',
      ),
      2 => 
      array (
        'id' => 'carpet-quatrefoil',
        'title' => 'Quatrefoil Designer Rug',
        'desc' => 'pH-balanced gentle injection wash safe for premium rugs',
        'icon' => 'gradient',
        'before' => './assets/images/before-after/carpet%20and%20rug%20wash/Worn%20Geometric%20Rug%20in%20a%20Sunlit%20Living%20Room.png',
        'after' => './assets/images/before-after/carpet%20and%20rug%20wash/Freshly%20Cleaned%20Quatrefoil%20Rug.png',
      ),
      3 => 
      array (
        'id' => 'carpet-kashmiri',
        'title' => 'Hand-Knotted Kashmiri Carpet',
        'desc' => 'Color-safe botanical shampoo revives intricate silk & wool dyes',
        'icon' => 'auto_awesome',
        'before' => './assets/images/before-after/carpet%20and%20rug%20wash/Kashmiri%20Carpet%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/carpet%20and%20rug%20wash/Vivid%20Kashmiri%20Carpet%20After%20Cleaning.png',
      ),
      4 => 
      array (
        'id' => 'carpet-kids-rug',
        'title' => 'Kids Room Cartoon Rug',
        'desc' => 'Non-toxic food stain removal and hot-water germ extraction',
        'icon' => 'child_care',
        'before' => './assets/images/before-after/carpet%20and%20rug%20wash/Before%20Cleaning_%20Cartoon%20Rug%20Grime.png',
        'after' => './assets/images/before-after/carpet%20and%20rug%20wash/Freshly%20Cleaned%20Cartoon%20Rug.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'carpet-deodor',
        'name' => 'Pet Odor Bio-Enzyme Flush',
        'price' => 200,
        'icon' => 'air',
      ),
      1 => 
      array (
        'key' => 'carpet-scotch',
        'name' => 'Hydrophobic Stain Shield',
        'price' => 300,
        'icon' => 'shield',
      ),
      2 => 
      array (
        'key' => 'carpet-fringe',
        'name' => 'Hand-Combed Fringe Detailing',
        'price' => 150,
        'icon' => 'brush',
      ),
      3 => 
      array (
        'key' => 'carpet-under',
        'name' => 'Anti-Skid Underpad Sanitize',
        'price' => 150,
        'icon' => 'layers',
      ),
      4 => 
      array (
        'key' => 'carpet-steam',
        'name' => 'Hot Steam Germ Sanitize Pass',
        'price' => 249,
        'icon' => 'sanitizer',
      ),
      5 => 
      array (
        'key' => 'carpet-drying',
        'name' => 'Turbo Air-Dryer Moisture Pull',
        'price' => 199,
        'icon' => 'air',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Deep rotary dry vacuuming to lift trapped dust particles',
      1 => 'Biodegradable high-foam carpet shampooing',
      2 => 'Heavy traffic lane stain treatment',
      3 => 'Hot water injection extraction cleaning',
      4 => 'Pet stain and odour neutralizer application',
      5 => 'Pile grooming and rapid dry preparation',
    ),
    'process' => 
    array (
      0 => 'Carpet Fiber Identification',
      1 => 'High-power Dry Suction Vacuuming',
      2 => 'Specialized Spot & Grout Stain Pre-treatment',
      3 => 'Rotary Carpet Scrubber Shampoo Agitation',
      4 => 'Dual-motor Moisture Vacuum Extraction',
      5 => 'Grooming & Final Inspection',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Office ya ghar ke carpet ko clean karne ke liye kahan le jana hoga?',
        'a' => 'Kahin nahi le jana! A1 Cleaning ki team aapke ghar ya office aakar on-site professional machines se carpet wash karti hai.',
      ),
      1 => 
      array (
        'q' => 'Carpet shampooing se carpet ke colour fade toh nahi honge?',
        'a' => 'Nahi, hum pH-neutral premium carpet detergents use karte hain jo fibers aur colors ko bilkul surakshit rakhte hain.',
      ),
    ),
  ),
  'balcony-cleaning' => 
  array (
    'slug' => 'balcony-cleaning',
    'name' => 'Balcony & Floor Scrub',
    'full_title' => 'Professional Balcony & Floor Scrub Services',
    'schema_type' => 'CleaningService',
    'icon' => 'cleaning_services',
    'short_desc' => 'Complete mechanized Balcony & Floor Scrub for homes and commercial spaces with verified technicians.',
    'starting_price' => '₹599',
    'time_estimate' => '45 - 90 mins',
    'suitable_for' => 'Residential flats, villas, kothis and commercial properties.',
    'video' => SITE_URL . '/assets/cleaning%20videos/balcony_and_floor_deep_scrub_9643e5bc_1080p.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/balcony-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Pressure Jet',
        'title' => 'Single Balcony High-Pressure Wash',
        'price' => 599,
        'thumb' => SITE_URL . '/assets/images/pricing/balcony-cleaning.jpg',
        'sub' => 'High-pressure wash for floor, railing & drain outlet',
        'rating' => 4.45,
        'reviewCount' => 18,
        'duration' => '30 - 40 min',
        'description' => 'High-pressure jet wash removing outdoor smog, mud stains, pigeon droppings, and algae from your balcony tiles and railings.',
        'includes' => 
        array (
          0 => 'Floor high-pressure water jet washing',
          1 => 'Grill & railing detailed microfiber wiping',
          2 => 'Drain outlet clearing and sediment wash',
          3 => 'Pigeon drop stain eradication with safe disinfectant',
          4 => 'Squeegee drying of floor tiles',
        ),
        'excludes' => 
        array (
          0 => 'Exterior glass cleaning beyond safe leaning distance',
          1 => 'Wall repainting or fixing peeling exterior paint',
          2 => 'AC outdoor compressor servicing',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 4,
          5 => 12,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Deepak Sawant',
            'date' => 'November 4, 2026',
            'stars' => 5,
            'comment' => 'Pigeon stains gone, balcony is sparkling clean.',
          ),
          1 => 
          array (
            'name' => 'Ritu Joshi',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Years of pigeon droppings and rainwater moss scrubbed clean from our anti-skid tiles.',
          ),
          2 => 
          array (
            'name' => 'Aman Negi',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Cleared the choked balcony drain pipe and washed the iron grill thoroughly.',
          ),
          3 => 
          array (
            'name' => 'Suman Rawat',
            'date' => 'November 7, 2026',
            'stars' => 5,
            'comment' => 'Super quick, hygienic, and left zero dirty water dripping onto downstairs neighbors.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Double Balcony',
        'featured' => true,
        'title' => 'Double Balcony & Terrace Detailing',
        'price' => 999,
        'thumb' => SITE_URL . '/assets/images/services/balcony-cleaning.jpg',
        'sub' => '2 balconies / open terrace complete moss & grout scrub',
        'rating' => 4.82,
        'reviewCount' => 34,
        'duration' => '60 - 80 min',
        'description' => 'Comprehensive wash for 2 balconies or open terrace areas including floor scrubbing, drain descaling, and sliding door track cleaning.',
        'includes' => 
        array (
          0 => 'High-pressure jet cleaning for 2 full balconies / terrace',
          1 => 'Heavy tile grout scrubbing removing algae and mineral crust',
          2 => 'Sliding glass door tracks vacuuming & wiping',
          3 => 'Balcony ceiling fan & light fixture exterior dusting',
          4 => 'Anti-fungal wash preventing green moss regrowth',
        ),
        'excludes' => 
        array (
          0 => 'Terrace waterproofing or roof leakage repairs',
          1 => 'Bird netting installation or repair',
          2 => 'Iron grill rust grinding and repainting',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 4,
          5 => 28,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Nikhil Ranade',
            'date' => 'November 7, 2026',
            'stars' => 5,
            'comment' => 'High-pressure wash left terrace completely spotless.',
          ),
          1 => 
          array (
            'name' => 'Ankur Malhotra',
            'date' => 'November 18, 2026',
            'stars' => 5,
            'comment' => 'Both balconies and glass railings look crystal clear—mountain view looks brand new!',
          ),
          2 => 
          array (
            'name' => 'Pooja Bisht',
            'date' => 'November 11, 2026',
            'stars' => 5,
            'comment' => 'Removed circular rust rings under all our heavy flower pots without scratching tiles.',
          ),
          3 => 
          array (
            'name' => 'Kunal Sharma',
            'date' => 'November 4, 2026',
            'stars' => 4,
            'comment' => 'Very good pressure wash around window tracks and utility corner.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Machine Polish',
        'title' => 'Full House Floor Buffing & Polishing',
        'price' => 1899,
        'thumb' => SITE_URL . '/assets/images/pricing/balcony-cleaning.jpg',
        'sub' => 'Industrial rotary floor machine buffing for mirror shine',
        'rating' => 4.91,
        'reviewCount' => 44,
        'duration' => '90 - 120 min',
        'description' => 'Mechanized floor rotary buffing restoring gloss, removing stubborn scuff marks, and sealing tile surfaces across the flat.',
        'includes' => 
        array (
          0 => 'Single-disc rotary floor machine buffing with soft pad',
          1 => 'Removal of surface haze, sticky residues & grime lines',
          2 => 'Skirting board line-by-line detailed cleaning',
          3 => 'High-gloss neutral buffing polish application',
          4 => 'Non-slip protective finish for marble, vitrified & granite',
        ),
        'excludes' => 
        array (
          0 => 'Diamond pad stone cutting / leveling deep scratches',
          1 => 'Cracked marble epoxy resin filling',
          2 => 'Tile replacement',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 4,
          5 => 39,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Sanjay Kapoor',
            'date' => 'November 11, 2026',
            'stars' => 5,
            'comment' => 'Vitrified tiles look brand new with mirror finish.',
          ),
          1 => 
          array (
            'name' => 'Vikramaditya Pal',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Full terrace & balcony rotary buffing completely restored our stone flooring shine.',
          ),
          2 => 
          array (
            'name' => 'Meera Tiwari',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Great crew with long hose and rotary scrubber—handled our large 3rd-floor terrace smoothly.',
          ),
          3 => 
          array (
            'name' => 'Yogesh Pant',
            'date' => 'November 1, 2026',
            'stars' => 5,
            'comment' => 'Booked in Ramnagar; zero moss slipperiness left anywhere on the terrace.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'balcony-floor',
        'title' => 'Weather-Stained Balcony',
        'desc' => 'Rain mineral crust, mud and algae rotary scrubbed clean',
        'icon' => 'deck',
        'before' => './assets/images/before-after/full%20home%20deep%20cleaning/Dirty%20Balcony%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/full%20home%20deep%20cleaning/Bright%20Balcony%20Afterglow.png',
      ),
      1 => 
      array (
        'id' => 'balcony-glass',
        'title' => 'Exterior Glass Railing',
        'desc' => 'Streaky dust and water spots cleared for transparent mountain view',
        'icon' => 'window',
        'before' => './assets/images/pricing/before-after/balcony-glass-before.jpg',
        'after' => './assets/images/pricing/before-after/balcony-glass-after.jpg',
      ),
      2 => 
      array (
        'id' => 'balcony-drain',
        'title' => 'Balcony Water Drain Gully',
        'desc' => 'Unclogged silt and disinfected wastewater outflow channel',
        'icon' => 'water',
        'before' => './assets/images/pricing/before-after/balcony-drain-before.jpg',
        'after' => './assets/images/pricing/before-after/balcony-drain-after.jpg',
      ),
      3 => 
      array (
        'id' => 'balcony-tiles',
        'title' => 'Balcony Anti-Skid Tiles',
        'desc' => 'Rotary disc scrubbing clears stubborn mud and bird stains',
        'icon' => 'grid_view',
        'before' => './assets/images/pricing/before-after/balcony-tiles-before.jpg',
        'after' => './assets/images/pricing/before-after/balcony-tiles-after.jpg',
      ),
      4 => 
      array (
        'id' => 'balcony-renovation',
        'title' => 'Cement & Dust Terrace Balcony',
        'desc' => 'Post-paint dust extraction and high-pressure floor rinse',
        'icon' => 'balcony',
        'before' => './assets/images/before-after/post%20construction%20before%20%20after/Dusty%20Balcony%20After%20Construction.png',
        'after' => './assets/images/before-after/post%20construction%20before%20%20after/Spotless%20Post-Construction%20Balcony.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'bird-netting',
        'name' => 'Pigeon Dropping Bio-Enzyme',
        'price' => 250,
        'icon' => 'pest_control',
      ),
      1 => 
      array (
        'key' => 'plant-pot',
        'name' => 'Planter Ring Rust Descaling',
        'price' => 150,
        'icon' => 'potted_plant',
      ),
      2 => 
      array (
        'key' => 'grill-wipe',
        'name' => 'Safety Iron Grill Wipe-Down',
        'price' => 200,
        'icon' => 'grid_on',
      ),
      3 => 
      array (
        'key' => 'exterior-wall',
        'name' => 'Balcony Ledge Pressure Blast',
        'price' => 200,
        'icon' => 'format_paint',
      ),
      4 => 
      array (
        'key' => 'ac-outdoor-clean',
        'name' => 'AC Outdoor Unit Wash & Wipe',
        'price' => 199,
        'icon' => 'ac_unit',
      ),
      5 => 
      array (
        'key' => 'sliding-track',
        'name' => 'Door Track Mud Extraction',
        'price' => 150,
        'icon' => 'window',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Mechanized deep scrubbing with industrial rotary equipment',
      1 => 'Eco-safe non-acidic descaling and grime removal',
      2 => 'High-pressure steam sterilization and touchpoint sanitization',
      3 => 'Final joint inspection with customer checklist signoff',
    ),
    'process' => 
    array (
      0 => 'Doorstep Assessment & Scope Confirmation',
      1 => 'Prep & Protective Covering',
      2 => 'Mechanized Deep Cleaning & Extraction',
      3 => 'Sanitization & Odor Neutralization',
      4 => 'Final Joint Audit & Approval',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Balcony & Floor Scrub mein kya kya shamil hota hai?',
        'a' => 'Hamare package mein mechanized scrubbing, chemical descaling, deep wipe, vacuuming aur final sanitization shamil hai.',
      ),
      1 => 
      array (
        'q' => 'Kitna samay lagta hai cleaning complete hone mein?',
        'a' => 'Aam taur par 1 se 3 ghante lagte hain, service category aur space size ke hisaab se.',
      ),
    ),
  ),
  'curtain-cleaning' => 
  array (
    'slug' => 'curtain-cleaning',
    'name' => 'Curtain & Blinds Cleaning',
    'full_title' => 'Curtains, Blinds & Glass Window Cleaning',
    'schema_type' => 'Curtain, blind and window cleaning',
    'icon' => 'window',
    'short_desc' => 'On-site curtain steam dusting, window glass squeegee polishing and sliding track de-gunking.',
    'starting_price' => '₹799',
    'time_estimate' => '2 - 3 hours',
    'suitable_for' => 'Glass partitions, high windows, roller blinds, heavy blackout curtains.',
    'video' => SITE_URL . '/assets/cleaning%20videos/curtain_steam_clean_6bd86d98.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/curtain-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'On-Site Express',
        'title' => 'On-Site Vacuum & Steam (4 Panels)',
        'price' => 799,
        'thumb' => SITE_URL . '/assets/images/pricing/curtain-cleaning.jpg',
        'sub' => 'Hassle-free on-rod HEPA extraction & vertical steam blast',
        'rating' => 4.48,
        'reviewCount' => 16,
        'duration' => '30 - 45 min',
        'description' => 'Hassle-free on-hanger curtain sanitization using HEPA extraction and 140°C steam without removing curtains from their rods.',
        'includes' => 
        array (
          0 => 'HEPA dust extraction on both front & back folds',
          1 => '140°C pressurized vertical steam blasting',
          2 => 'Wrinkle easing and fabric rejuvenation',
          3 => 'Elimination of trapped odors, cooking smells & dust mites',
          4 => 'Fabric deodorizing mist application',
        ),
        'excludes' => 
        array (
          0 => 'Off-site laundry washing or dry cleaning',
          1 => 'Deep ink or grease stain extraction',
          2 => 'Curtain track replacement or cord repair',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 3,
          5 => 11,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Kavita Iyer',
            'date' => 'November 2, 2026',
            'stars' => 5,
            'comment' => 'No need to dismantle curtains! Done in 30 minutes.',
          ),
          1 => 
          array (
            'name' => 'Sunita Agarwal',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Loved that they steamed all 4 heavy hall panels right on the rod without unhanging anything!',
          ),
          2 => 
          array (
            'name' => 'Prashant Verma',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Cleared trapped highway dust and odors completely; room smells super fresh.',
          ),
          3 => 
          array (
            'name' => 'Nidhi Joshi',
            'date' => 'November 6, 2026',
            'stars' => 5,
            'comment' => 'Delicate sheer curtains were handled gently with zero shrinkage or creases.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Living Room Set',
        'featured' => true,
        'title' => 'Full Living Room Set (8 Panels)',
        'price' => 1499,
        'thumb' => SITE_URL . '/assets/images/services/curtain-cleaning.jpg',
        'sub' => 'Complete drape & sheer sanitization with pleat setting',
        'rating' => 4.84,
        'reviewCount' => 32,
        'duration' => '60 - 75 min',
        'description' => 'Complete living room drapery steam care covering sheer and heavy blackout curtains with crease relaxation.',
        'includes' => 
        array (
          0 => 'Deep dry vacuuming of 8 curtain panels on-site',
          1 => 'High-temperature steam sanitization eradicating allergens',
          2 => 'Pelmet, curtain rods & tie-back tassels detailing',
          3 => 'Pleat alignment and smooth drape setting',
          4 => 'Anti-dust static repellent finish',
        ),
        'excludes' => 
        array (
          0 => 'Mending torn hems or damaged eyelet rings',
          1 => 'Restoring sun-bleached or weakened sheer fabric',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 4,
          5 => 26,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Sonal Mittal',
            'date' => 'November 9, 2026',
            'stars' => 5,
            'comment' => 'Wrinkles fell right out, pleasant gentle lavender scent.',
          ),
          1 => 
          array (
            'name' => 'Rekha Kandpal',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'All 8 drawing room and bedroom curtains look brighter and completely dust-free.',
          ),
          2 => 
          array (
            'name' => 'Saurabh Gupta',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Even wiped the brass curtain rods and sliding window tracks cleanly!',
          ),
          3 => 
          array (
            'name' => 'Ankita Chauhan',
            'date' => 'November 5, 2026',
            'stars' => 4,
            'comment' => 'Fast 2-hour job in Kashipur with minimal noise and zero mess.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Whole House Drapes',
        'title' => 'Whole House Luxury Drapery (16 Panels)',
        'price' => 2699,
        'thumb' => SITE_URL . '/assets/images/pricing/curtain-cleaning.jpg',
        'sub' => 'Full luxury home curtain steam sanitization package',
        'rating' => 4.93,
        'reviewCount' => 48,
        'duration' => '2 - 2.5 hours',
        'description' => 'Whole-home curtain hygiene package for up to 16 drapery panels across living room and all bedrooms.',
        'includes' => 
        array (
          0 => 'Dual-side extraction and 140°C vertical steam across 16 panels',
          1 => 'Valance & pelmet dust extraction',
          2 => 'Bacterial odor removal for pet and smoke scents',
          3 => 'Fabric softening steam touch-up for crisp hanging',
          4 => 'Supervisor inspection of all window dressings',
        ),
        'excludes' => 
        array (
          0 => 'Alteration of curtain length',
          1 => 'Velvet pile distortion repairs from past water damage',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 4,
          5 => 43,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Bhavna Chawla',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Cleaned all 4 bedrooms and hall drapes without any mess.',
          ),
          1 => 
          array (
            'name' => 'Brig. K. S. Bisht',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => '16 luxury blackout panels steamed and sanitized across our villa—true white-glove team.',
          ),
          2 => 
          array (
            'name' => 'Shikha Mehra',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'No water drips on wooden flooring and every pleat stayed crisp and straight.',
          ),
          3 => 
          array (
            'name' => 'Vikas Tiwari',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Best on-site curtain steam service we have tried near Corbett.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'curtain-beige',
        'title' => 'Beige Window Drapes',
        'desc' => '140°C pressurized dry steam lifts years of trapped road dust',
        'icon' => 'curtains',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Stained%20Beige%20Curtains%20on%20Tiled%20Wall.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Freshly%20Cleaned%20Beige%20Curtains.png',
      ),
      1 => 
      array (
        'id' => 'curtain-cream',
        'title' => 'Spotless Cream Curtains',
        'desc' => 'Dingy pollution film removed and bright fabric freshness restored',
        'icon' => 'curtains_closed',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Grimy%20Curtains%20with%20Trailing%20Houseplant.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Spotless%20Cream%20Curtains%20on%20Brass%20Rod.png',
      ),
      2 => 
      array (
        'id' => 'curtain-slate',
        'title' => 'Slate-Blue Living Curtains',
        'desc' => 'Microfiber extraction wipe of trapped dust without dismantling',
        'icon' => 'roller_shades',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Soiled%20Slate%20Blue%20Curtain%20in%20Living%20Room.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Spotless%20Slate-Blue%20Curtains.png',
      ),
      3 => 
      array (
        'id' => 'curtain-floral',
        'title' => 'Embroidered Floral Drapes',
        'desc' => 'Gentle dry-steam sanitizing protects delicate printed weaves',
        'icon' => 'local_florist',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Before%20Cleaning_%20Floral%20Curtain.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Freshly%20Cleaned%20Flower%20Curtain.png',
      ),
      4 => 
      array (
        'id' => 'curtain-textured',
        'title' => 'Heavy Textured Blackouts',
        'desc' => 'Deep vacuuming removes embedded PM2.5 smog and allergens',
        'icon' => 'blinds',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Before%20Cleaning_%20Textured%20Curtains.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Freshly%20Cleaned%20Textured%20Curtains.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'steam-disinfect',
        'name' => 'Hospital-Grade Fabric Sanitize',
        'price' => 150,
        'icon' => 'sanitizer',
      ),
      1 => 
      array (
        'key' => 'tieback-wash',
        'name' => 'Curtain Pelmet & Tieback Wash',
        'price' => 100,
        'icon' => 'dry_cleaning',
      ),
      2 => 
      array (
        'key' => 'anti-allergen',
        'name' => 'Pollen & Mite Barrier Coat',
        'price' => 200,
        'icon' => 'shield',
      ),
      3 => 
      array (
        'key' => 'perfume-mist',
        'name' => 'French Lavender Fresh Mist',
        'price' => 99,
        'icon' => 'air',
      ),
      4 => 
      array (
        'key' => 'window-mesh',
        'name' => 'Mosquito Mesh & Track Scrub',
        'price' => 199,
        'icon' => 'grid_on',
      ),
      5 => 
      array (
        'key' => 'rod-bracket',
        'name' => 'Curtain Rod & Finials Polish',
        'price' => 120,
        'icon' => 'cleaning_services',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Curtains on-site steam suction and dust removal without taking down',
      1 => 'Window glass spotless squeegee cleaning inside and outside',
      2 => 'Sliding window channel and track dirt extraction',
      3 => 'Mosquito mesh / wire net washing and refitting',
      4 => 'Venetian, wooden and vertical blinds sanitization',
      5 => 'Large mirrors and glass shower partition polishing',
    ),
    'process' => 
    array (
      0 => 'Inspection of Fabric & Glass Height',
      1 => 'Sliding Track Dust Vacuuming',
      2 => 'Mesh Filter Wash',
      3 => 'Streak-free Glass Cleaner Squeegee Wipe',
      4 => 'Curtain Steam Dusting & Odour Spray',
      5 => 'Final Transparency Check',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Kya curtain utaar ke wash kiye jayenge?',
        'a' => 'Nahi, hum high-suction vacuum aur steam dusting use karte hain jo rod par lage curtains se hi dust aur allergens nikal deta hai.',
      ),
      1 => 
      array (
        'q' => 'Sliding window ke tracks mein jami mitti saaf ho jayegi?',
        'a' => 'Haan, hum narrow crevice tools aur industrial vacuum se tracks ki poori mitti aur kachra saaf karte hain.',
      ),
    ),
  ),
  'curtain-window-cleaning' => 
  array (
    'slug' => 'curtain-cleaning',
    'name' => 'Curtain & Blinds Cleaning',
    'full_title' => 'Curtains, Blinds & Glass Window Cleaning',
    'schema_type' => 'Curtain, blind and window cleaning',
    'icon' => 'window',
    'short_desc' => 'On-site curtain steam dusting, window glass squeegee polishing and sliding track de-gunking.',
    'starting_price' => '₹799',
    'time_estimate' => '2 - 3 hours',
    'suitable_for' => 'Glass partitions, high windows, roller blinds, heavy blackout curtains.',
    'video' => SITE_URL . '/assets/cleaning%20videos/curtain_steam_clean_6bd86d98.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/curtain-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'On-Site Express',
        'title' => 'On-Site Vacuum & Steam (4 Panels)',
        'price' => 799,
        'thumb' => SITE_URL . '/assets/images/pricing/curtain-cleaning.jpg',
        'sub' => 'Hassle-free on-rod HEPA extraction & vertical steam blast',
        'rating' => 4.48,
        'reviewCount' => 16,
        'duration' => '30 - 45 min',
        'description' => 'Hassle-free on-hanger curtain sanitization using HEPA extraction and 140°C steam without removing curtains from their rods.',
        'includes' => 
        array (
          0 => 'HEPA dust extraction on both front & back folds',
          1 => '140°C pressurized vertical steam blasting',
          2 => 'Wrinkle easing and fabric rejuvenation',
          3 => 'Elimination of trapped odors, cooking smells & dust mites',
          4 => 'Fabric deodorizing mist application',
        ),
        'excludes' => 
        array (
          0 => 'Off-site laundry washing or dry cleaning',
          1 => 'Deep ink or grease stain extraction',
          2 => 'Curtain track replacement or cord repair',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 3,
          5 => 11,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Kavita Iyer',
            'date' => 'November 2, 2026',
            'stars' => 5,
            'comment' => 'No need to dismantle curtains! Done in 30 minutes.',
          ),
          1 => 
          array (
            'name' => 'Sunita Agarwal',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Loved that they steamed all 4 heavy hall panels right on the rod without unhanging anything!',
          ),
          2 => 
          array (
            'name' => 'Prashant Verma',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Cleared trapped highway dust and odors completely; room smells super fresh.',
          ),
          3 => 
          array (
            'name' => 'Nidhi Joshi',
            'date' => 'November 6, 2026',
            'stars' => 5,
            'comment' => 'Delicate sheer curtains were handled gently with zero shrinkage or creases.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Living Room Set',
        'featured' => true,
        'title' => 'Full Living Room Set (8 Panels)',
        'price' => 1499,
        'thumb' => SITE_URL . '/assets/images/services/curtain-cleaning.jpg',
        'sub' => 'Complete drape & sheer sanitization with pleat setting',
        'rating' => 4.84,
        'reviewCount' => 32,
        'duration' => '60 - 75 min',
        'description' => 'Complete living room drapery steam care covering sheer and heavy blackout curtains with crease relaxation.',
        'includes' => 
        array (
          0 => 'Deep dry vacuuming of 8 curtain panels on-site',
          1 => 'High-temperature steam sanitization eradicating allergens',
          2 => 'Pelmet, curtain rods & tie-back tassels detailing',
          3 => 'Pleat alignment and smooth drape setting',
          4 => 'Anti-dust static repellent finish',
        ),
        'excludes' => 
        array (
          0 => 'Mending torn hems or damaged eyelet rings',
          1 => 'Restoring sun-bleached or weakened sheer fabric',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 4,
          5 => 26,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Sonal Mittal',
            'date' => 'November 9, 2026',
            'stars' => 5,
            'comment' => 'Wrinkles fell right out, pleasant gentle lavender scent.',
          ),
          1 => 
          array (
            'name' => 'Rekha Kandpal',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'All 8 drawing room and bedroom curtains look brighter and completely dust-free.',
          ),
          2 => 
          array (
            'name' => 'Saurabh Gupta',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Even wiped the brass curtain rods and sliding window tracks cleanly!',
          ),
          3 => 
          array (
            'name' => 'Ankita Chauhan',
            'date' => 'November 5, 2026',
            'stars' => 4,
            'comment' => 'Fast 2-hour job in Kashipur with minimal noise and zero mess.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Whole House Drapes',
        'title' => 'Whole House Luxury Drapery (16 Panels)',
        'price' => 2699,
        'thumb' => SITE_URL . '/assets/images/pricing/curtain-cleaning.jpg',
        'sub' => 'Full luxury home curtain steam sanitization package',
        'rating' => 4.93,
        'reviewCount' => 48,
        'duration' => '2 - 2.5 hours',
        'description' => 'Whole-home curtain hygiene package for up to 16 drapery panels across living room and all bedrooms.',
        'includes' => 
        array (
          0 => 'Dual-side extraction and 140°C vertical steam across 16 panels',
          1 => 'Valance & pelmet dust extraction',
          2 => 'Bacterial odor removal for pet and smoke scents',
          3 => 'Fabric softening steam touch-up for crisp hanging',
          4 => 'Supervisor inspection of all window dressings',
        ),
        'excludes' => 
        array (
          0 => 'Alteration of curtain length',
          1 => 'Velvet pile distortion repairs from past water damage',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 4,
          5 => 43,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Bhavna Chawla',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Cleaned all 4 bedrooms and hall drapes without any mess.',
          ),
          1 => 
          array (
            'name' => 'Brig. K. S. Bisht',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => '16 luxury blackout panels steamed and sanitized across our villa—true white-glove team.',
          ),
          2 => 
          array (
            'name' => 'Shikha Mehra',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'No water drips on wooden flooring and every pleat stayed crisp and straight.',
          ),
          3 => 
          array (
            'name' => 'Vikas Tiwari',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Best on-site curtain steam service we have tried near Corbett.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'curtain-beige',
        'title' => 'Beige Window Drapes',
        'desc' => '140°C pressurized dry steam lifts years of trapped road dust',
        'icon' => 'curtains',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Stained%20Beige%20Curtains%20on%20Tiled%20Wall.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Freshly%20Cleaned%20Beige%20Curtains.png',
      ),
      1 => 
      array (
        'id' => 'curtain-cream',
        'title' => 'Spotless Cream Curtains',
        'desc' => 'Dingy pollution film removed and bright fabric freshness restored',
        'icon' => 'curtains_closed',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Grimy%20Curtains%20with%20Trailing%20Houseplant.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Spotless%20Cream%20Curtains%20on%20Brass%20Rod.png',
      ),
      2 => 
      array (
        'id' => 'curtain-slate',
        'title' => 'Slate-Blue Living Curtains',
        'desc' => 'Microfiber extraction wipe of trapped dust without dismantling',
        'icon' => 'roller_shades',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Soiled%20Slate%20Blue%20Curtain%20in%20Living%20Room.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Spotless%20Slate-Blue%20Curtains.png',
      ),
      3 => 
      array (
        'id' => 'curtain-floral',
        'title' => 'Embroidered Floral Drapes',
        'desc' => 'Gentle dry-steam sanitizing protects delicate printed weaves',
        'icon' => 'local_florist',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Before%20Cleaning_%20Floral%20Curtain.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Freshly%20Cleaned%20Flower%20Curtain.png',
      ),
      4 => 
      array (
        'id' => 'curtain-textured',
        'title' => 'Heavy Textured Blackouts',
        'desc' => 'Deep vacuuming removes embedded PM2.5 smog and allergens',
        'icon' => 'blinds',
        'before' => './assets/images/before-after/curtain%20before%20%20after/Before%20Cleaning_%20Textured%20Curtains.png',
        'after' => './assets/images/before-after/curtain%20before%20%20after/Freshly%20Cleaned%20Textured%20Curtains.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'steam-disinfect',
        'name' => 'Hospital-Grade Fabric Sanitize',
        'price' => 150,
        'icon' => 'sanitizer',
      ),
      1 => 
      array (
        'key' => 'tieback-wash',
        'name' => 'Curtain Pelmet & Tieback Wash',
        'price' => 100,
        'icon' => 'dry_cleaning',
      ),
      2 => 
      array (
        'key' => 'anti-allergen',
        'name' => 'Pollen & Mite Barrier Coat',
        'price' => 200,
        'icon' => 'shield',
      ),
      3 => 
      array (
        'key' => 'perfume-mist',
        'name' => 'French Lavender Fresh Mist',
        'price' => 99,
        'icon' => 'air',
      ),
      4 => 
      array (
        'key' => 'window-mesh',
        'name' => 'Mosquito Mesh & Track Scrub',
        'price' => 199,
        'icon' => 'grid_on',
      ),
      5 => 
      array (
        'key' => 'rod-bracket',
        'name' => 'Curtain Rod & Finials Polish',
        'price' => 120,
        'icon' => 'cleaning_services',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Curtains on-site steam suction and dust removal without taking down',
      1 => 'Window glass spotless squeegee cleaning inside and outside',
      2 => 'Sliding window channel and track dirt extraction',
      3 => 'Mosquito mesh / wire net washing and refitting',
      4 => 'Venetian, wooden and vertical blinds sanitization',
      5 => 'Large mirrors and glass shower partition polishing',
    ),
    'process' => 
    array (
      0 => 'Inspection of Fabric & Glass Height',
      1 => 'Sliding Track Dust Vacuuming',
      2 => 'Mesh Filter Wash',
      3 => 'Streak-free Glass Cleaner Squeegee Wipe',
      4 => 'Curtain Steam Dusting & Odour Spray',
      5 => 'Final Transparency Check',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Kya curtain utaar ke wash kiye jayenge?',
        'a' => 'Nahi, hum high-suction vacuum aur steam dusting use karte hain jo rod par lage curtains se hi dust aur allergens nikal deta hai.',
      ),
      1 => 
      array (
        'q' => 'Sliding window ke tracks mein jami mitti saaf ho jayegi?',
        'a' => 'Haan, hum narrow crevice tools aur industrial vacuum se tracks ki poori mitti aur kachra saaf karte hain.',
      ),
    ),
  ),
  'move-in-move-out' => 
  array (
    'slug' => 'move-in-move-out',
    'name' => 'Move-In / Move-Out',
    'full_title' => 'Move-In & Move-Out Deep Cleaning',
    'schema_type' => 'Move-in and move-out cleaning',
    'icon' => 'local_shipping',
    'short_desc' => 'Intensive empty house overhaul, post-tenancy restoration and post-renovation dust scrubbing.',
    'starting_price' => '₹1,799',
    'time_estimate' => '5 - 8 hours',
    'suitable_for' => 'Tenants shifting house, landlords getting property ready, new home buyers.',
    'video' => SITE_URL . '/assets/cleaning%20videos/Moving_and_cleaning_service_64e5dea4.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/move-in-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => '1 BHK Turnover',
        'title' => '1 BHK Move-In Clean',
        'price' => 1799,
        'thumb' => SITE_URL . '/assets/images/pricing/move-in-cleaning.jpg',
        'sub' => 'Full empty house sanitization before moving and shifting',
        'rating' => 4.52,
        'reviewCount' => 22,
        'duration' => '3 - 4 hours',
        'description' => 'Move into a sparkling clean home! Full deep cleaning of vacant 1 BHK flat ensuring every corner, cupboard, and bathroom is sanitized.',
        'includes' => 
        array (
          0 => 'Empty flat vacuuming and floor machine scrubbing',
          1 => 'Inside and outside cleaning of all empty wardrobes & shelves',
          2 => 'Kitchen modular cabinets inside-out degreasing & wash',
          3 => 'Bathroom descaling, acid-free fixture polish & disinfection',
          4 => 'Window tracks vacuuming & balcony floor scrubbing',
        ),
        'excludes' => 
        array (
          0 => 'Disposal of heavy furniture or items left by previous tenant',
          1 => 'Repainting peeling wall patches',
          2 => 'Exterior window cleaning without balcony',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 4,
          5 => 16,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Kunal Deshpande',
            'date' => 'November 1, 2026',
            'stars' => 5,
            'comment' => 'Moved in without worrying about tenant germs. Great work.',
          ),
          1 => 
          array (
            'name' => 'Rishabh Jain',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Moved into our new 1 BHK flat in Kashipur—every wardrobe shelf and tile was sanitized before shifting.',
          ),
          2 => 
          array (
            'name' => 'Pallavi Rawat',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Scraped paint drops and cleaned kitchen drawers inside-out so unpacking felt peaceful.',
          ),
          3 => 
          array (
            'name' => 'Deepak Negi',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Very reliable turnover clean; ready to move in the same evening.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => '2 BHK Family Handover',
        'featured' => true,
        'title' => '2 BHK Move-In Clean',
        'price' => 2799,
        'thumb' => SITE_URL . '/assets/images/services/move-in-move-out-cleaning.jpg',
        'sub' => 'Deep hygienic prep for 2 BHK family flats & floors',
        'rating' => 4.87,
        'reviewCount' => 53,
        'duration' => '4 - 5 hours',
        'description' => 'Complete move-in ready handover for 2 BHK flats, eliminating dust from past tenancy and ensuring hospital-grade hygiene.',
        'includes' => 
        array (
          0 => 'Single-disc rotary floor buffing for entire flat',
          1 => '2 complete bathrooms intensive descaling and steam disinfection',
          2 => 'Kitchen chimney, countertops & all empty cabinets sanitized',
          3 => 'Door surfaces, frames, switchboards & handles sanitized',
          4 => 'Balconies high-pressure wash & window glass polish',
        ),
        'excludes' => 
        array (
          0 => 'Pest control chemical treatment (separate service)',
          1 => 'Civil masonry or electrical repairs',
          2 => 'Hauling bulk renovation debris',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 6,
          5 => 44,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Tanmay Bhatt',
            'date' => 'November 6, 2026',
            'stars' => 5,
            'comment' => 'Saved us 2 days of exhausting cleaning work before shifting.',
          ),
          1 => 
          array (
            'name' => 'Sumit & Priya',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Booked the 2 BHK move-out clean and got our full security deposit back without any deduction!',
          ),
          2 => 
          array (
            'name' => 'Harpreet Kaur',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Cleaned inside all loft storage, bathroom exhausts, and balcony grilles neatly.',
          ),
          3 => 
          array (
            'name' => 'Mayank Pant',
            'date' => 'November 6, 2026',
            'stars' => 4,
            'comment' => 'On-time team in Rudrapur Road; great value for empty flat deep scrubbing.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Villa / 3 BHK Luxury',
        'title' => '3 BHK / Villa Move-In Master',
        'price' => 3999,
        'thumb' => SITE_URL . '/assets/images/pricing/move-in-cleaning.jpg',
        'sub' => 'Full luxury house sanitization for hassle-free living',
        'rating' => 4.95,
        'reviewCount' => 76,
        'duration' => '5 - 7 hours',
        'description' => 'Comprehensive move-in handover for 3 BHK homes and villas, delivering a pristine, certified hygienic home for your family.',
        'includes' => 
        array (
          0 => 'Industrial rotary scrubbing for all bedroom & living floors',
          1 => '3 full bathrooms deep chemical wash & mirror restoration',
          2 => 'All empty wardrobes, lofts & kitchen modular cabinets detailed',
          3 => 'Terrace, utility area & all balconies pressure washed',
          4 => 'Move-in certified hygiene guarantee with supervisor audit',
        ),
        'excludes' => 
        array (
          0 => 'Carpet/sofa shampooing if old furniture remains',
          1 => 'Rappelling external building facade glass',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 5,
          5 => 70,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Siddharth Roy',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Pristine handover. Smells wonderfully clean and safe.',
          ),
          1 => 
          array (
            'name' => 'Karan Malhotra',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => 'Handover master package transformed a dusty 3 BHK villa into a gleaming home in 5 hours.',
          ),
          2 => 
          array (
            'name' => 'Vandana Joshi',
            'date' => 'November 16, 2026',
            'stars' => 5,
            'comment' => 'Sanitized every door lock, switchboard, sink, and cupboard interior before our Griha Pravesh.',
          ),
          3 => 
          array (
            'name' => 'Ashish Bisht',
            'date' => 'November 9, 2026',
            'stars' => 5,
            'comment' => 'Super organized 4-member crew with industrial wet-dry vacuums.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'move-scene',
        'title' => 'Turnover Move-In Cleaning',
        'desc' => 'Complete handover sanitization for hassle-free move-in',
        'icon' => 'flight_takeoff',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Before%20Move-In%20Cleaning%20Scene.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Spotless%20Move-In%20Cleaning%20After.png',
      ),
      1 => 
      array (
        'id' => 'move-bedroom',
        'title' => 'Sunlit Bedroom Readying',
        'desc' => 'Deep turnover sanitization, clean wardrobes and pest-spray ready',
        'icon' => 'bed',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Sunlit%20Bedroom%20Before%20Moving%20In.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Warm%20Modern%20Bedroom%20Retreat.png',
      ),
      2 => 
      array (
        'id' => 'move-living',
        'title' => 'Living Room Turnover Mess',
        'desc' => 'Deep debris vacuuming and sparkling streak-free floor polish',
        'icon' => 'chair',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Sunlit%20Living%20Room%20in%20Move-Out%20Mess.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Sunlit%20Beige%20Living%20Room%20Retreat.png',
      ),
      3 => 
      array (
        'id' => 'move-bedroom-ready',
        'title' => 'Move-In Ready Suite',
        'desc' => 'Wardrobes, ceiling fans and flooring sanitized before unpacking',
        'icon' => 'king_bed',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Bedroom%20Move-In%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Freshly%20Cleaned%20Bedroom%20%E2%80%93%20Move%20In%20Ready.png',
      ),
      4 => 
      array (
        'id' => 'move-2bhk-out',
        'title' => '2 BHK Deposit-Back Scrub',
        'desc' => 'Complete vacate deep clean for smooth landlord handover',
        'icon' => 'apartment',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/2%20BHK%20Move-Out_%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Spotless%202%20BHK%20Move-Out%20Home.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'appliance-wipe',
        'name' => 'Major Appliances Deep Wipe',
        'price' => 250,
        'icon' => 'kitchen',
      ),
      1 => 
      array (
        'key' => 'key-sanitize',
        'name' => 'Total Lock & Key Sterilize',
        'price' => 99,
        'icon' => 'key',
      ),
      2 => 
      array (
        'key' => 'balcony-add',
        'name' => 'Additional Utility Balcony',
        'price' => 200,
        'icon' => 'deck',
      ),
      3 => 
      array (
        'key' => 'loft-clear',
        'name' => 'High Overhead Storage Vac',
        'price' => 150,
        'icon' => 'vertical_align_top',
      ),
      4 => 
      array (
        'key' => 'pest-gel',
        'name' => 'Kitchen & Drain Pest Gel Shield',
        'price' => 350,
        'icon' => 'pest_control',
      ),
      5 => 
      array (
        'key' => 'switch-deep',
        'name' => 'All Switchboards & Handles',
        'price' => 150,
        'icon' => 'toggle_on',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Complete top-to-bottom dusting of empty house',
      1 => 'Inside-outside cleaning of all wardrobes, kitchen cabinets & drawers',
      2 => 'Tile paint spot, cement splatter and plaster mark removal',
      3 => 'Intensive sanitization of all bathrooms and kitchen',
      4 => 'Glass windows, grills, balcony and utility area power washing',
      5 => 'Floor scrubbing, disinfectant mopping and aroma mist',
    ),
    'process' => 
    array (
      0 => 'Pre-Handover Property Inspection',
      1 => 'Debris & Construction Waste Clearing',
      2 => 'Top-to-Bottom Dry & Wet Dusting',
      3 => 'Intensive Kitchen & Washroom Scrubbing',
      4 => 'Mechanised Floor Buffing',
      5 => 'Move-in Ready Sign-off Inspection',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Move-in cleaning kab karwani chahiye?',
        'a' => 'Furniture shift karne se theek 1 ya 2 din pehle sabse best rehta hai taaki har kona, cupboard aur floor easily saaf ho sake.',
      ),
      1 => 
      array (
        'q' => 'Kya construction ya renovation ke baad ka safed dust saaf ho jayega?',
        'a' => 'Haan, humari post-construction cleaning team paint splashes, plaster dust aur adhesive marks ko specialised scrapers se saaf karti hai.',
      ),
    ),
  ),
  'move-in-move-out-cleaning' => 
  array (
    'slug' => 'move-in-move-out',
    'name' => 'Move-In / Move-Out',
    'full_title' => 'Move-In & Move-Out Deep Cleaning',
    'schema_type' => 'Move-in and move-out cleaning',
    'icon' => 'local_shipping',
    'short_desc' => 'Intensive empty house overhaul, post-tenancy restoration and post-renovation dust scrubbing.',
    'starting_price' => '₹1,799',
    'time_estimate' => '5 - 8 hours',
    'suitable_for' => 'Tenants shifting house, landlords getting property ready, new home buyers.',
    'video' => SITE_URL . '/assets/cleaning%20videos/Moving_and_cleaning_service_64e5dea4.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/move-in-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => '1 BHK Turnover',
        'title' => '1 BHK Move-In Clean',
        'price' => 1799,
        'thumb' => SITE_URL . '/assets/images/pricing/move-in-cleaning.jpg',
        'sub' => 'Full empty house sanitization before moving and shifting',
        'rating' => 4.52,
        'reviewCount' => 22,
        'duration' => '3 - 4 hours',
        'description' => 'Move into a sparkling clean home! Full deep cleaning of vacant 1 BHK flat ensuring every corner, cupboard, and bathroom is sanitized.',
        'includes' => 
        array (
          0 => 'Empty flat vacuuming and floor machine scrubbing',
          1 => 'Inside and outside cleaning of all empty wardrobes & shelves',
          2 => 'Kitchen modular cabinets inside-out degreasing & wash',
          3 => 'Bathroom descaling, acid-free fixture polish & disinfection',
          4 => 'Window tracks vacuuming & balcony floor scrubbing',
        ),
        'excludes' => 
        array (
          0 => 'Disposal of heavy furniture or items left by previous tenant',
          1 => 'Repainting peeling wall patches',
          2 => 'Exterior window cleaning without balcony',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 4,
          5 => 16,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Kunal Deshpande',
            'date' => 'November 1, 2026',
            'stars' => 5,
            'comment' => 'Moved in without worrying about tenant germs. Great work.',
          ),
          1 => 
          array (
            'name' => 'Rishabh Jain',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Moved into our new 1 BHK flat in Kashipur—every wardrobe shelf and tile was sanitized before shifting.',
          ),
          2 => 
          array (
            'name' => 'Pallavi Rawat',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Scraped paint drops and cleaned kitchen drawers inside-out so unpacking felt peaceful.',
          ),
          3 => 
          array (
            'name' => 'Deepak Negi',
            'date' => 'November 8, 2026',
            'stars' => 5,
            'comment' => 'Very reliable turnover clean; ready to move in the same evening.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => '2 BHK Family Handover',
        'featured' => true,
        'title' => '2 BHK Move-In Clean',
        'price' => 2799,
        'thumb' => SITE_URL . '/assets/images/services/move-in-move-out-cleaning.jpg',
        'sub' => 'Deep hygienic prep for 2 BHK family flats & floors',
        'rating' => 4.87,
        'reviewCount' => 53,
        'duration' => '4 - 5 hours',
        'description' => 'Complete move-in ready handover for 2 BHK flats, eliminating dust from past tenancy and ensuring hospital-grade hygiene.',
        'includes' => 
        array (
          0 => 'Single-disc rotary floor buffing for entire flat',
          1 => '2 complete bathrooms intensive descaling and steam disinfection',
          2 => 'Kitchen chimney, countertops & all empty cabinets sanitized',
          3 => 'Door surfaces, frames, switchboards & handles sanitized',
          4 => 'Balconies high-pressure wash & window glass polish',
        ),
        'excludes' => 
        array (
          0 => 'Pest control chemical treatment (separate service)',
          1 => 'Civil masonry or electrical repairs',
          2 => 'Hauling bulk renovation debris',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 6,
          5 => 44,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Tanmay Bhatt',
            'date' => 'November 6, 2026',
            'stars' => 5,
            'comment' => 'Saved us 2 days of exhausting cleaning work before shifting.',
          ),
          1 => 
          array (
            'name' => 'Sumit & Priya',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Booked the 2 BHK move-out clean and got our full security deposit back without any deduction!',
          ),
          2 => 
          array (
            'name' => 'Harpreet Kaur',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Cleaned inside all loft storage, bathroom exhausts, and balcony grilles neatly.',
          ),
          3 => 
          array (
            'name' => 'Mayank Pant',
            'date' => 'November 6, 2026',
            'stars' => 4,
            'comment' => 'On-time team in Rudrapur Road; great value for empty flat deep scrubbing.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Villa / 3 BHK Luxury',
        'title' => '3 BHK / Villa Move-In Master',
        'price' => 3999,
        'thumb' => SITE_URL . '/assets/images/pricing/move-in-cleaning.jpg',
        'sub' => 'Full luxury house sanitization for hassle-free living',
        'rating' => 4.95,
        'reviewCount' => 76,
        'duration' => '5 - 7 hours',
        'description' => 'Comprehensive move-in handover for 3 BHK homes and villas, delivering a pristine, certified hygienic home for your family.',
        'includes' => 
        array (
          0 => 'Industrial rotary scrubbing for all bedroom & living floors',
          1 => '3 full bathrooms deep chemical wash & mirror restoration',
          2 => 'All empty wardrobes, lofts & kitchen modular cabinets detailed',
          3 => 'Terrace, utility area & all balconies pressure washed',
          4 => 'Move-in certified hygiene guarantee with supervisor audit',
        ),
        'excludes' => 
        array (
          0 => 'Carpet/sofa shampooing if old furniture remains',
          1 => 'Rappelling external building facade glass',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 5,
          5 => 70,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Siddharth Roy',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'Pristine handover. Smells wonderfully clean and safe.',
          ),
          1 => 
          array (
            'name' => 'Karan Malhotra',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => 'Handover master package transformed a dusty 3 BHK villa into a gleaming home in 5 hours.',
          ),
          2 => 
          array (
            'name' => 'Vandana Joshi',
            'date' => 'November 16, 2026',
            'stars' => 5,
            'comment' => 'Sanitized every door lock, switchboard, sink, and cupboard interior before our Griha Pravesh.',
          ),
          3 => 
          array (
            'name' => 'Ashish Bisht',
            'date' => 'November 9, 2026',
            'stars' => 5,
            'comment' => 'Super organized 4-member crew with industrial wet-dry vacuums.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'move-scene',
        'title' => 'Turnover Move-In Cleaning',
        'desc' => 'Complete handover sanitization for hassle-free move-in',
        'icon' => 'flight_takeoff',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Before%20Move-In%20Cleaning%20Scene.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Spotless%20Move-In%20Cleaning%20After.png',
      ),
      1 => 
      array (
        'id' => 'move-bedroom',
        'title' => 'Sunlit Bedroom Readying',
        'desc' => 'Deep turnover sanitization, clean wardrobes and pest-spray ready',
        'icon' => 'bed',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Sunlit%20Bedroom%20Before%20Moving%20In.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Warm%20Modern%20Bedroom%20Retreat.png',
      ),
      2 => 
      array (
        'id' => 'move-living',
        'title' => 'Living Room Turnover Mess',
        'desc' => 'Deep debris vacuuming and sparkling streak-free floor polish',
        'icon' => 'chair',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Sunlit%20Living%20Room%20in%20Move-Out%20Mess.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Sunlit%20Beige%20Living%20Room%20Retreat.png',
      ),
      3 => 
      array (
        'id' => 'move-bedroom-ready',
        'title' => 'Move-In Ready Suite',
        'desc' => 'Wardrobes, ceiling fans and flooring sanitized before unpacking',
        'icon' => 'king_bed',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Bedroom%20Move-In%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Freshly%20Cleaned%20Bedroom%20%E2%80%93%20Move%20In%20Ready.png',
      ),
      4 => 
      array (
        'id' => 'move-2bhk-out',
        'title' => '2 BHK Deposit-Back Scrub',
        'desc' => 'Complete vacate deep clean for smooth landlord handover',
        'icon' => 'apartment',
        'before' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/2%20BHK%20Move-Out_%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/move%20in%20and%20out%20%20before%20%20after/Spotless%202%20BHK%20Move-Out%20Home.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'appliance-wipe',
        'name' => 'Major Appliances Deep Wipe',
        'price' => 250,
        'icon' => 'kitchen',
      ),
      1 => 
      array (
        'key' => 'key-sanitize',
        'name' => 'Total Lock & Key Sterilize',
        'price' => 99,
        'icon' => 'key',
      ),
      2 => 
      array (
        'key' => 'balcony-add',
        'name' => 'Additional Utility Balcony',
        'price' => 200,
        'icon' => 'deck',
      ),
      3 => 
      array (
        'key' => 'loft-clear',
        'name' => 'High Overhead Storage Vac',
        'price' => 150,
        'icon' => 'vertical_align_top',
      ),
      4 => 
      array (
        'key' => 'pest-gel',
        'name' => 'Kitchen & Drain Pest Gel Shield',
        'price' => 350,
        'icon' => 'pest_control',
      ),
      5 => 
      array (
        'key' => 'switch-deep',
        'name' => 'All Switchboards & Handles',
        'price' => 150,
        'icon' => 'toggle_on',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Complete top-to-bottom dusting of empty house',
      1 => 'Inside-outside cleaning of all wardrobes, kitchen cabinets & drawers',
      2 => 'Tile paint spot, cement splatter and plaster mark removal',
      3 => 'Intensive sanitization of all bathrooms and kitchen',
      4 => 'Glass windows, grills, balcony and utility area power washing',
      5 => 'Floor scrubbing, disinfectant mopping and aroma mist',
    ),
    'process' => 
    array (
      0 => 'Pre-Handover Property Inspection',
      1 => 'Debris & Construction Waste Clearing',
      2 => 'Top-to-Bottom Dry & Wet Dusting',
      3 => 'Intensive Kitchen & Washroom Scrubbing',
      4 => 'Mechanised Floor Buffing',
      5 => 'Move-in Ready Sign-off Inspection',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Move-in cleaning kab karwani chahiye?',
        'a' => 'Furniture shift karne se theek 1 ya 2 din pehle sabse best rehta hai taaki har kona, cupboard aur floor easily saaf ho sake.',
      ),
      1 => 
      array (
        'q' => 'Kya construction ya renovation ke baad ka safed dust saaf ho jayega?',
        'a' => 'Haan, humari post-construction cleaning team paint splashes, plaster dust aur adhesive marks ko specialised scrapers se saaf karti hai.',
      ),
    ),
  ),
  'post-construction' => 
  array (
    'slug' => 'post-construction',
    'name' => 'Post Construction',
    'full_title' => 'Professional Post Construction Services',
    'schema_type' => 'CleaningService',
    'icon' => 'cleaning_services',
    'short_desc' => 'Complete mechanized Post Construction for homes and commercial spaces with verified technicians.',
    'starting_price' => '₹1,499',
    'time_estimate' => '45 - 90 mins',
    'suitable_for' => 'Residential flats, villas, kothis and commercial properties.',
    'video' => SITE_URL . '/assets/cleaning%20videos/Post_construction_cleaning_service_866a34c4.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/post-construction.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'De-Dusting Initial',
        'title' => 'Basic Paint & Plaster Wipe',
        'price' => 1499,
        'thumb' => SITE_URL . '/assets/images/pricing/post-construction.jpg',
        'sub' => 'Removal of loose cement, paint spots & construction dust',
        'rating' => 4.41,
        'reviewCount' => 20,
        'duration' => '2 - 3 hours',
        'description' => 'First-stage post-renovation cleanup removing loose cement, drywall dust, paint flecks, and track debris.',
        'includes' => 
        array (
          0 => 'Fine cement and plaster dust vacuum extraction',
          1 => 'Manual scraping of paint spots on glass & tiles with brass blades',
          2 => 'Window sliding track debris suction',
          3 => 'Balcony and utility area washing',
          4 => 'Neutral pH floor mopping to cut plaster residue',
        ),
        'excludes' => 
        array (
          0 => 'Heavy diamond floor crystallization',
          1 => 'Acid cleaning on natural marble or sensitive stone',
          2 => 'Chipping dried concrete mounds over 1 inch',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 4,
          5 => 13,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Arvind Swamy',
            'date' => 'November 4, 2026',
            'stars' => 5,
            'comment' => 'Removed powdery dust completely from all tracks and corners.',
          ),
          1 => 
          array (
            'name' => 'Nikhil Sharma',
            'date' => 'November 19, 2026',
            'stars' => 5,
            'comment' => 'Removed white POP dust, putty splatters, and tape glue from all vitrified tiles safely.',
          ),
          2 => 
          array (
            'name' => 'Lata Pandey',
            'date' => 'November 12, 2026',
            'stars' => 5,
            'comment' => 'They used plastic scrapers on glass windows so there was not a single scratch!',
          ),
          3 => 
          array (
            'name' => 'Rajat Chauhan',
            'date' => 'November 4, 2026',
            'stars' => 5,
            'comment' => 'Worth booking right after carpentry and painting work finishes.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Heavy Machine Buff',
        'featured' => true,
        'title' => 'Comprehensive Post-Build Deep Clean',
        'price' => 2999,
        'thumb' => SITE_URL . '/assets/images/pricing/post-construction.jpg',
        'sub' => 'Heavy industrial mechanised scrubbing for ready-to-move finish',
        'rating' => 4.88,
        'reviewCount' => 49,
        'duration' => '4 - 5 hours',
        'description' => 'Intensive single-disc machine scrubbing to clear construction film, tile adhesive residue, and fine cement dust.',
        'includes' => 
        array (
          0 => 'Single-disc rotary machine scrubbing removing adhesive film',
          1 => 'Switchboard, electrical plate & door frame detailing',
          2 => 'Acid-free cement slurry removal from all tile surfaces',
          3 => 'Glass glazing residue and silicone smear cleanup',
          4 => 'Cabinets inside and outside industrial vacuuming',
        ),
        'excludes' => 
        array (
          0 => 'Polishing scratched glass surfaces caused during construction',
          1 => 'Disposal of heavy construction debris bags',
          2 => 'Civil grout repair',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 6,
          5 => 41,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Manish Godbole',
            'date' => 'November 10, 2026',
            'stars' => 5,
            'comment' => 'Contractor left the place a mess, A-1 made it look like a showroom.',
          ),
          1 => 
          array (
            'name' => 'Er. Manish Bisht',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Cleared stubborn cement haze off our granite staircase and brushed sawdust out of every drawer.',
          ),
          2 => 
          array (
            'name' => 'Seema Agarwal',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Single-disc scrubber made newly laid Italian marble shine like glass.',
          ),
          3 => 
          array (
            'name' => 'Piyush Tiwari',
            'date' => 'November 7, 2026',
            'stars' => 4,
            'comment' => 'Heavy industrial vacuums pulled fine plaster dust from ceiling coves and AC vents.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Turnkey Handover',
        'title' => 'Move-Ready Handover Master',
        'price' => 4999,
        'thumb' => SITE_URL . '/assets/images/pricing/post-construction.jpg',
        'sub' => 'Complete villa / commercial site handover detailing',
        'rating' => 4.96,
        'reviewCount' => 68,
        'duration' => '6 - 8 hours',
        'description' => 'Turnkey white-glove site handover transforming raw post-construction spaces into immaculate, move-in-ready living areas.',
        'includes' => 
        array (
          0 => 'Double rotary scrubbing & high-gloss floor buffing',
          1 => 'High-reach cobweb, ceiling fan & AC vent dust extraction',
          2 => 'Kitchen and bathroom heavy adhesive & grout clearing',
          3 => 'Nano-coating buff on all glass windows & balcony railings',
          4 => 'Final supervisor-led white-glove inspection',
        ),
        'excludes' => 
        array (
          0 => 'Fixing plumbing leaks or electrical wiring',
          1 => 'Touching up unpainted plaster patches',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 1,
          4 => 4,
          5 => 63,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Prem Chandani',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Architect and client were stunned by the finish. Top notch.',
          ),
          1 => 
          array (
            'name' => 'Gaurav Goel',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => 'Booked the Move-Ready Handover Master for our newly built home in Kashipur—immaculate finish!',
          ),
          2 => 
          array (
            'name' => 'Anupama Negi',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Removed protective stickers from all aluminium windows and buffed every bathroom fitting.',
          ),
          3 => 
          array (
            'name' => 'Devendra Rawat',
            'date' => 'November 6, 2026',
            'stars' => 5,
            'comment' => 'Saved us a week of post-renovation effort. Completely move-in ready!',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'postcon-interior',
        'title' => 'Renovation Interior & Cement',
        'desc' => 'Safe non-acidic manual scraping removes all contractor splatters',
        'icon' => 'construction',
        'before' => './assets/images/before-after/post%20construction%20before%20%20after/Dusty%20Apartment%20Renovation%20Interior.png',
        'after' => './assets/images/before-after/post%20construction%20before%20%20after/Newly%20Renovated%20Reflective%20Living%20Room.png',
      ),
      1 => 
      array (
        'id' => 'postcon-stairwell',
        'title' => 'Granite Stairwell with Debris',
        'desc' => 'Single-disc rotary scrubbing clears chalky white haze & grit',
        'icon' => 'stairs',
        'before' => './assets/images/before-after/post%20construction%20before%20%20after/Dusty%20Renovation%20Stairwell%20with%20Debris.png',
        'after' => './assets/images/before-after/post%20construction%20before%20%20after/Pristine%20Polished%20Granite%20Staircase.png',
      ),
      2 => 
      array (
        'id' => 'postcon-terrace',
        'title' => 'Rooftop Renovation Terrace',
        'desc' => 'Industrial debris extraction and high-pressure jet wash',
        'icon' => 'deck',
        'before' => './assets/images/before-after/post%20construction%20before%20%20after/Dusty%20Rooftop%20Renovation%20Terrace.png',
        'after' => './assets/images/before-after/post%20construction%20before%20%20after/Spotless%20Rooftop%20Terrace%20with%20City%20Views.png',
      ),
      3 => 
      array (
        'id' => 'postcon-balcony',
        'title' => 'Post-Build Balcony Glass & Tiles',
        'desc' => 'Mortar powder, putty marks and glass paint specks cleared safely',
        'icon' => 'balcony',
        'before' => './assets/images/before-after/post%20construction%20before%20%20after/Dusty%20Balcony%20After%20Construction.png',
        'after' => './assets/images/before-after/post%20construction%20before%20%20after/Spotless%20Post-Construction%20Balcony.png',
      ),
      4 => 
      array (
        'id' => 'postcon-terrace-scrub',
        'title' => 'Terrace Mortar & Haze Removal',
        'desc' => 'Heavy-duty wet vacuuming leaves newly built terraces ready to use',
        'icon' => 'cleaning_services',
        'before' => './assets/images/before-after/post%20construction%20before%20%20after/Post-Construction%20Terrace%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/post%20construction%20before%20%20after/Post-Construction%20Terrace%20After%20Cleaning.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'switchboard-paint',
        'name' => 'Switchboard Paint Scraping',
        'price' => 150,
        'icon' => 'toggle_on',
      ),
      1 => 
      array (
        'key' => 'cabinet-sawdust',
        'name' => 'Cabinet Sawdust Deep Vac',
        'price' => 250,
        'icon' => 'shelves',
      ),
      2 => 
      array (
        'key' => 'door-frame-glue',
        'name' => 'Door Frame Adhesive Clean',
        'price' => 200,
        'icon' => 'door_front',
      ),
      3 => 
      array (
        'key' => 'debris-bagging',
        'name' => 'Post-Clean Debris Bagging',
        'price' => 250,
        'icon' => 'delete',
      ),
      4 => 
      array (
        'key' => 'glass-sticker',
        'name' => 'Glass Sticker & Paint Scrape',
        'price' => 299,
        'icon' => 'window',
      ),
      5 => 
      array (
        'key' => 'tile-acid-free',
        'name' => 'Floor Haze Neutralizer Buff',
        'price' => 350,
        'icon' => 'auto_awesome',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Mechanized deep scrubbing with industrial rotary equipment',
      1 => 'Eco-safe non-acidic descaling and grime removal',
      2 => 'High-pressure steam sterilization and touchpoint sanitization',
      3 => 'Final joint inspection with customer checklist signoff',
    ),
    'process' => 
    array (
      0 => 'Doorstep Assessment & Scope Confirmation',
      1 => 'Prep & Protective Covering',
      2 => 'Mechanized Deep Cleaning & Extraction',
      3 => 'Sanitization & Odor Neutralization',
      4 => 'Final Joint Audit & Approval',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Post Construction mein kya kya shamil hota hai?',
        'a' => 'Hamare package mein mechanized scrubbing, chemical descaling, deep wipe, vacuuming aur final sanitization shamil hai.',
      ),
      1 => 
      array (
        'q' => 'Kitna samay lagta hai cleaning complete hone mein?',
        'a' => 'Aam taur par 1 se 3 ghante lagte hain, service category aur space size ke hisaab se.',
      ),
    ),
  ),
  'commercial-cleaning' => 
  array (
    'slug' => 'commercial-cleaning',
    'name' => 'Office & Commercial',
    'full_title' => 'Commercial, Office & Facility Cleaning',
    'schema_type' => 'Commercial and office cleaning',
    'icon' => 'apartment',
    'short_desc' => 'Office deep sanitization, retail showroom, clinic, restaurant and school cleaning plans.',
    'starting_price' => '₹4,999',
    'time_estimate' => 'Flexible / After office hours / Weekends',
    'suitable_for' => 'Offices, showrooms, banks, hotels, resorts, gyms, coaching institutes and clinics.',
    'video' => SITE_URL . '/assets/cleaning%20videos/office_and_commercial_cleaning_6ca03922.mp4',
    'thumb' => SITE_URL . '/assets/images/pricing/commercial-cleaning.jpg',
    'packages' => 
    array (
      0 => 
      array (
        'tier' => 'Startup Hub',
        'title' => 'Startup Office (Up to 1,000 sq.ft)',
        'price' => 4999,
        'thumb' => SITE_URL . '/assets/images/pricing/commercial-cleaning.jpg',
        'sub' => 'Workstations, conference room, pantry & restrooms',
        'rating' => 4.55,
        'reviewCount' => 26,
        'duration' => '3 - 4 hours',
        'description' => 'Keep your startup workspace productive and fresh with thorough workstation sanitization, restroom descaling, and floor scrubbing.',
        'includes' => 
        array (
          0 => 'Workstation desk surface & chair frame antimicrobial wipe',
          1 => 'Floor single-disc mechanized scrubbing',
          2 => 'Commercial washroom deep descaling and sanitization',
          3 => 'Pantry sink, microwave exterior & counter degreasing',
          4 => 'Conference room glass partition streak-free polish',
        ),
        'excludes' => 
        array (
          0 => 'Internal server rack electronic dust removal',
          1 => 'Wet upholstery extraction for all office chairs (add-on)',
          2 => 'Building facade high-altitude exterior window cleaning',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 2,
          4 => 5,
          5 => 18,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Dhruv Sehgal',
            'date' => 'November 5, 2026',
            'stars' => 5,
            'comment' => 'Did a weekend deep clean for our coworking space. Outstanding.',
          ),
          1 => 
          array (
            'name' => 'Matthew Rawat',
            'date' => 'November 20, 2026',
            'stars' => 5,
            'comment' => 'Cleaned our Corbett Greens office cabins after hours without disturbing daytime work.',
          ),
          2 => 
          array (
            'name' => 'CA Vivek Bansal',
            'date' => 'November 14, 2026',
            'stars' => 5,
            'comment' => 'Workstations, cable trays, and glass cabin partitions left crystal clear for client visits.',
          ),
          3 => 
          array (
            'name' => 'Shreya Joshi',
            'date' => 'November 7, 2026',
            'stars' => 5,
            'comment' => 'Prompt team in Kashipur; sanitized all chairs, keyboards, and pantry counters.',
          ),
        ),
      ),
      1 => 
      array (
        'tier' => 'Corporate Floor',
        'featured' => true,
        'title' => 'Corporate Floor (Up to 2,500 sq.ft)',
        'price' => 8999,
        'thumb' => SITE_URL . '/assets/images/services/commercial-cleaning.jpg',
        'sub' => 'Intensive mechanized scrub for busy corporate spaces',
        'rating' => 4.89,
        'reviewCount' => 57,
        'duration' => '5 - 6 hours',
        'description' => 'High-traffic commercial floor restoration with carpet extraction or tile buffing, pantry degreasing, and cabin detailing.',
        'includes' => 
        array (
          0 => 'Carpet deep extraction or tile mechanized rotary buffing',
          1 => 'HVAC vent exterior & air intake grill vacuuming',
          2 => 'Cafeteria deep degreasing, microwave & sink wash',
          3 => 'Executive cabins, boardrooms & glass detailing',
          4 => 'Flexible after-hours or weekend zero-downtime execution',
        ),
        'excludes' => 
        array (
          0 => 'Warehouse inventory moving',
          1 => 'Electrical main distribution panel cleaning',
          2 => 'Exterior facade abseiling',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 1,
          3 => 1,
          4 => 5,
          5 => 50,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Chetan Parekh (Admin Head)',
            'date' => 'November 11, 2026',
            'stars' => 5,
            'comment' => 'Very reliable, arrived Saturday night and finished by Sunday morning.',
          ),
          1 => 
          array (
            'name' => 'Rakesh Khanna',
            'date' => 'November 21, 2026',
            'stars' => 5,
            'comment' => 'Single-disc rotary buffing restored mirror gloss across our 2,500 sq.ft corporate floor.',
          ),
          2 => 
          array (
            'name' => 'Dr. Pooja Mehta',
            'date' => 'November 16, 2026',
            'stars' => 5,
            'comment' => 'Our clinic waiting lounge and washrooms feel spotless and medical-grade hygienic.',
          ),
          3 => 
          array (
            'name' => 'Harish Tiwari',
            'date' => 'November 9, 2026',
            'stars' => 5,
            'comment' => 'Sunday shift crew finished on schedule with full supervisor checklist signoff.',
          ),
        ),
      ),
      2 => 
      array (
        'tier' => 'Retail Showroom',
        'title' => 'Showroom & Retail Plaza',
        'price' => 12999,
        'thumb' => SITE_URL . '/assets/images/pricing/commercial-cleaning.jpg',
        'sub' => 'High-gloss retail floor shine & facade glass clean',
        'rating' => 4.95,
        'reviewCount' => 43,
        'duration' => '6 - 8 hours',
        'description' => 'High-gloss showcase polish for retail stores and showrooms with display glass detailing and antimicrobial protection.',
        'includes' => 
        array (
          0 => 'Ultra high-gloss rotary floor machine polish',
          1 => 'Showcase glass, mirrors & retail display streak-free buff',
          2 => 'Storage area & back-office thorough dust removal',
          3 => 'Antimicrobial surface shield for high-touch counter zones',
          4 => 'Official GST tax invoice and corporate AMC documentation',
        ),
        'excludes' => 
        array (
          0 => 'Exterior building rooftop billboard maintenance',
          1 => 'Repairing damaged retail fixture lighting',
        ),
        'disclaimer' => 'Please ensure that all valuables are removed or securely stored. The company will not be responsible for any items left unsecured in the absence of the customer.',
        'needFromYou' => 'Customers are requested to provide a bucket with water, a power point connection, and a ladder or stool for smooth and effective service completion.',
        'breakdown' => 
        array (
          1 => 0,
          2 => 0,
          3 => 0,
          4 => 3,
          5 => 40,
        ),
        'reviews' => 
        array (
          0 => 
          array (
            'name' => 'Suresh Lulla',
            'date' => 'November 15, 2026',
            'stars' => 5,
            'comment' => 'Floor looks like glass. Best commercial cleaning service in city.',
          ),
          1 => 
          array (
            'name' => 'Anshul Arora',
            'date' => 'November 22, 2026',
            'stars' => 5,
            'comment' => 'Booked for our Ramnagar Road showroom—facade glass and display granite gleam!',
          ),
          2 => 
          array (
            'name' => 'Komal Bisht',
            'date' => 'November 13, 2026',
            'stars' => 5,
            'comment' => 'Commercial restrooms and pantry smelled fresh and stayed clean all week. Now on monthly plan.',
          ),
          3 => 
          array (
            'name' => 'Tarun Gupta',
            'date' => 'November 3, 2026',
            'stars' => 5,
            'comment' => 'Uniformed, verified staff with zero supervision needed. Best commercial cleaners locally.',
          ),
        ),
      ),
    ),
    'before_after' => 
    array (
      0 => 
      array (
        'id' => 'office-exec',
        'title' => 'Messy Executive Cabin',
        'desc' => 'Commercial buffer and dust extraction for executive clarity',
        'icon' => 'corporate_fare',
        'before' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Messy%20Executive%20Office%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Polished%20Executive%20Office%20with%20City%20Views.png',
      ),
      1 => 
      array (
        'id' => 'office-corridor',
        'title' => 'High-Traffic Office Corridor',
        'desc' => 'Industrial rotary scrub leaves mirror shine on granite tiles',
        'icon' => 'meeting_room',
        'before' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Littered%20Modern%20Office%20Corridor.png',
        'after' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Polished%20Modern%20Office%20Hallway.png',
      ),
      2 => 
      array (
        'id' => 'office-openplan',
        'title' => 'Open-Plan Workstation Hub',
        'desc' => 'Deep sanitization of desk partitions, floors and touchpoints',
        'icon' => 'domain',
        'before' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Messy%20Modern%20Office%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Spotless%20Modern%20Open-Plan%20Office.png',
      ),
      3 => 
      array (
        'id' => 'office-bathroom',
        'title' => 'Commercial Restroom Sanitize',
        'desc' => 'Hospital-grade disinfection of cubicles, urinals and vanity counters',
        'icon' => 'sanitizer',
        'before' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Commercial%20Office%20Bathroom%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Spotless%20Commercial%20Office%20Bathroom.png',
      ),
      4 => 
      array (
        'id' => 'office-workspace',
        'title' => 'Full Office Floor Revival',
        'desc' => 'After-hours vacuum extraction and glossy stone floor buffing',
        'icon' => 'business_center',
        'before' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Messy%20Office%20Before%20Cleaning.png',
        'after' => './assets/images/before-after/office%20and%20%20%20commercial%20%20%20before%20%20after/Spotless%20Modern%20Office%20After%20Cleaning.png',
      ),
    ),
    'addons' => 
    array (
      0 => 
      array (
        'key' => 'chair-shampoo',
        'name' => 'Executive Mesh Chair Wash',
        'price' => 150,
        'icon' => 'chair',
      ),
      1 => 
      array (
        'key' => 'server-dusting',
        'name' => 'Anti-Static Server Room Vac',
        'price' => 400,
        'icon' => 'dns',
      ),
      2 => 
      array (
        'key' => 'pantry-deep',
        'name' => 'Office Pantry & Fridge Scrub',
        'price' => 350,
        'icon' => 'coffee',
      ),
      3 => 
      array (
        'key' => 'restroom-odor',
        'name' => 'Commercial Restroom Sanitize',
        'price' => 450,
        'icon' => 'wc',
      ),
      4 => 
      array (
        'key' => 'glass-facade',
        'name' => 'Reception Glass Partition Shine',
        'price' => 350,
        'icon' => 'window',
      ),
      5 => 
      array (
        'key' => 'ac-vent-clean',
        'name' => 'AC Diffuser & Vent Vacuum',
        'price' => 299,
        'icon' => 'air',
      ),
    ),
    'checklist' => 
    array (
      0 => 'Workstations, desks, monitor dusting and cable bay cleaning',
      1 => 'Commercial carpet shampooing and tile floor scrubbing',
      2 => 'Restroom sanitization and high-touch surface disinfection',
      3 => 'Pantry and cafeteria deep degreasing and fridge wash',
      4 => 'Glass facade, cabin glass and entrance door squeegee polishing',
      5 => 'Reception, lobby and waiting lounge deep detailing',
    ),
    'process' => 
    array (
      0 => 'Site Survey & Area Measurement (Sq. Ft.)',
      1 => 'Custom Scope of Work & Quotation Proposal',
      2 => 'Schedule Alignment (Night or Weekend Shifts)',
      3 => 'Deployment of Commercial Scrubbers & Uniformed Staff',
      4 => 'Section-by-Section Quality Audit',
      5 => 'Supervisor Sign-off & Monthly Contract Option',
    ),
    'faqs' => 
    array (
      0 => 
      array (
        'q' => 'Kya office cleaning working hours ke baad ya weekend par ho sakti hai?',
        'a' => 'Haan, hum working hours mein interruption se bachne ke liye raat mein ya Sunday/holiday ko cleaning teams deploy karte hain.',
      ),
      1 => 
      array (
        'q' => 'Kya regular monthly housekeeping contract mil sakta hai?',
        'a' => 'Haan, A1 Cleaning one-time deep cleaning ke alawa weekly aur monthly recurring commercial packages bhi provide karti hai.',
      ),
    ),
  ),
);
