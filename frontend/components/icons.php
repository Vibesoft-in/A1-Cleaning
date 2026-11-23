<?php
/**
 * Vector SVG Icons Helper
 * Matches exact outline vector icons from theme design mockup
 * Using Primary Deep Green (#0B2922) and Sage Green (#527A55)
 */

function getThemeIcon($name, $size = 22, $color = '#0B2922') {
    $common = 'width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"';
    
    switch ($name) {
        // 1. Home & Residential
        case 'home':
            return '<svg ' . $common . '><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>';
        
        // 2. Kitchen Deep Cleaning (Chimney/Hood)
        case 'kitchen':
            return '<svg ' . $common . '><path d="M4 19h16"></path><path d="M7 19l2-8h6l2 8"></path><path d="M9 11V4h6v7"></path><path d="M9 15h6"></path></svg>';
        
        // 3. Bathroom & Toilet (Bathtub/Washbasin)
        case 'bathroom':
            return '<svg ' . $common . '><path d="M3 13h18a2 2 0 0 1 2 2v2a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3v-2a2 2 0 0 1 2-2z"></path><path d="M5 13V6a2 2 0 0 1 2-2h2"></path><line x1="5" y1="20" x2="5" y2="22"></line><line x1="19" y1="20" x2="19" y2="22"></line></svg>';
        
        // 4. Sofa & Upholstery
        case 'sofa':
            return '<svg ' . $common . '><path d="M4 11V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4"></path><path d="M2 11h20v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-6z"></path><path d="M5 19v2"></path><path d="M19 19v2"></path></svg>';
        
        // 5. Carpet & Rug
        case 'carpet':
            return '<svg ' . $common . '><rect x="3" y="6" width="18" height="12" rx="2"></rect><line x1="3" y1="9" x2="3" y2="15"></line><line x1="21" y1="9" x2="21" y2="15"></line><line x1="7" y1="6" x2="7" y2="18"></line><line x1="17" y1="6" x2="17" y2="18"></line></svg>';
        
        // 6. Water Tank
        case 'water-tank':
            return '<svg ' . $common . '><ellipse cx="12" cy="5" rx="7" ry="2.5"></ellipse><path d="M5 5v14c0 1.4 3.1 2.5 7 2.5s7-1.1 7-2.5V5"></path><path d="M5 12c0 1.4 3.1 2.5 7 2.5s7-1.1 7-2.5"></path></svg>';
        
        // 7. Curtain & Window
        case 'curtain':
            return '<svg ' . $common . '><rect x="3" y="3" width="18" height="18" rx="2"></rect><line x1="12" y1="3" x2="12" y2="21"></line><path d="M3 3c3 5 3 13 0 18"></path><path d="M21 3c-3 5-3 13 0 18"></path></svg>';
        
        // 8. Move-In / Move-Out (Package Box)
        case 'move-in':
            return '<svg ' . $common . '><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>';
        
        // 9. Commercial & Office (Office Building)
        case 'commercial':
            return '<svg ' . $common . '><rect x="4" y="2" width="16" height="20" rx="2"></rect><line x1="9" y1="6" x2="9" y2="6.01"></line><line x1="15" y1="6" x2="15" y2="6.01"></line><line x1="9" y1="10" x2="9" y2="10.01"></line><line x1="15" y1="10" x2="15" y2="10.01"></line><line x1="9" y1="14" x2="9" y2="14.01"></line><line x1="15" y1="14" x2="15" y2="14.01"></line><path d="M10 22v-4h4v4"></path></svg>';
        
        // More Solution 1: Sparkles
        case 'sparkles':
            return '<svg ' . $common . '><path d="M12 2l2.4 5.6L20 10l-5.6 2.4L12 18l-2.4-5.6L4 10l5.6-2.4L12 2z"></path><path d="M19 16l1.2 2.8L23 20l-2.8 1.2L19 24l-1.2-2.8L15 20l2.8-1.2L19 16z"></path></svg>';
        
        // More Solution 2: Layers / Stack
        case 'layers':
            return '<svg ' . $common . '><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>';
        
        // More Solution 3: Property / Workplace
        case 'workplace':
            return '<svg ' . $common . '><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><line x1="9" y1="9" x2="9" y2="9.01"></line><line x1="9" y1="13" x2="9" y2="13.01"></line><line x1="9" y1="17" x2="9" y2="17.01"></line></svg>';
        
        // Why Choose: Trained Team (Shield Check)
        case 'shield-check':
            return '<svg ' . $common . ' stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>';
        
        // Why Choose: Suitable Products (Eco Leaf)
        case 'leaf':
            return '<svg ' . $common . ' stroke-width="2.2"><path d="M11 20A7 7 0 0 1 4 13C4 8 8 3 19 3c0 11-5 15-8 17z"></path><path d="M11 20c0-6 4-10 8-10"></path></svg>';
        
        // Why Choose: On-Time Service (Clock)
        case 'clock':
            return '<svg ' . $common . ' stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>';

        // Phone
        case 'phone':
            return '<svg ' . $common . '><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>';

        // Location Pin
        case 'pin':
            return '<svg ' . $common . '><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>';

        default:
            return '';
    }
}
