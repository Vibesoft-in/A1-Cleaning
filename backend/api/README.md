# A1 Cleaning - REST API Documentation
> **Version:** 1.0  
> **Base URL:** `http://localhost/A1-Cleaning/api/` (Local) or `https://a1cleaning.in/api/` (Production)  
> **Format:** Standard JSON (`application/json`) with automatic CORS support for Mobile Apps (Flutter, React Native, Android/iOS).

---

## 📋 API Endpoints Summary

| Endpoint | Method | Description | Website Usage | App Usage |
| :--- | :--- | :--- | :--- | :--- |
| `/api/config` | `GET` | Master Business Settings & Contact | Dynamic Contact / Social | App startup initialization |
| `/api/services` | `GET` | List all 9 services (or `?slug=...`) | Services Catalog | Home/Services tab |
| `/api/cities` | `GET` | List of target cities & areas | Location selector | City picker & radius map |
| `/api/pricing` | `GET` | Rate cards & starting prices | Pricing table | In-app pricing screen |
| `/api/reviews` | `GET` | Verified customer testimonials | Review carousel | Social proof & ratings |
| `/api/book` | `POST` | Create a new cleaning booking | AJAX Book Now form | In-app Checkout & Booking |
| `/api/contact` | `POST` | General inquiry submission | Contact Us form | "Help & Support" chat/inquiry |

---

## 1. Get Master Configuration
- **URL:** `GET /api/config`
- **Purpose:** Fetches current business phone, WhatsApp link, email, operating hours, office address and coordinates.
- **Why it matters:** The mobile app never needs to hardcode phone numbers or addresses. If business phone changes on the backend, the mobile app automatically updates!
- **Sample Response:**
```json
{
  "success": true,
  "status": "success",
  "data": {
    "brand": {
      "name": "A1 Cleaning",
      "tagline": "Professional Cleaning Service",
      "slogan": "Every Space. Expertly Cleaned.",
      "logo": {
        "horizontal": "https://a1cleaning.in/assets/images/brand/logo-horizontal.png",
        "badge": "https://a1cleaning.in/assets/images/brand/logo-round-badge.png"
      }
    },
    "contact": {
      "phone": "+91 79063 66271",
      "phone_raw": "+917906366271",
      "call_url": "tel:+917906366271",
      "whatsapp_url": "https://wa.me/917906366271",
      "email": "enquire@a1cleaning.in"
    },
    "location": {
      "full_address": "Kumaun Market, Ramnagar Rd, Kashipur, Uttarakhand 244713",
      "latitude": 29.2104,
      "longitude": 78.9619,
      "service_radius_km": 60
    },
    "operating_hours": {
      "display": "Monday – Saturday: 08:00 AM – 07:00 PM"
    }
  }
}
```

---

## 2. Get All Services (or Single Service)
- **URL:** `GET /api/services`
- **Optional Param:** `GET /api/services?slug=sofa-cleaning`
- **Sample Response:**
```json
{
  "success": true,
  "status": "success",
  "data": {
    "total": 9,
    "services": [
      {
        "slug": "sofa-cleaning",
        "name": "Sofa Cleaning",
        "short_desc": "Fabric shampooing, injection-extraction wash, leather conditioning and allergen removal.",
        "starting_price": "₹249 per seat",
        "time_estimate": "1.5 - 3 hours (drying: 3-4 hours)",
        "checklist": [
          "Dry vacuuming for dust, pet hair and deep dirt extraction",
          "Fabric-safe shampoo application and gentle agitation",
          "Spot treatment for coffee, tea, food and oil stains",
          "Wet extraction to suck out 90% water and accumulated grime"
        ]
      }
    ]
  }
}
```

---

## 3. Get Cities & Service Localities
- **URL:** `GET /api/cities`
- **Sample Response:**
```json
{
  "success": true,
  "data": {
    "total": 3,
    "service_radius_km": 60,
    "cities": [
      {
        "slug": "kashipur",
        "name": "Kashipur",
        "lat": 29.2104,
        "lng": 78.9619,
        "is_headquarters": true,
        "key_areas": ["Ramnagar Road", "Awas Vikas Colony", "SIIDCUL Industrial Area"]
      },
      {
        "slug": "jaspur",
        "name": "Jaspur",
        "lat": 29.2800,
        "lng": 78.8200,
        "is_headquarters": false,
        "key_areas": ["Afzalgarh Road", "Subhash Chowk", "Nagina Road"]
      },
      {
        "slug": "ramnagar",
        "name": "Ramnagar",
        "lat": 29.3944,
        "lng": 79.1264,
        "is_headquarters": false,
        "key_areas": ["Dhikuli (Corbett Resort Hub)", "Ranikhet Road", "Kaniya"]
      }
    ]
  }
}
```

---

## 4. Submit Cleaning Booking (Lead Capture)
- **URL:** `POST /api/book`
- **Headers:** `Content-Type: application/json` or standard `multipart/form-data`
- **Request Body:**
```json
{
  "name": "Aman Bisht",
  "phone": "7906366271",
  "city": "Kashipur",
  "service": "Sofa Cleaning",
  "preferred_date": "2026-11-20",
  "address": "Ramnagar Road, Near Cheema Square",
  "message": "5-seater fabric sofa needs stain removal",
  "source": "Mobile App (Android)"
}
```
- **Success Response (HTTP 201):**
```json
{
  "success": true,
  "status": "success",
  "message": "Booking request submitted successfully! Our team will call you within 15-30 minutes to confirm.",
  "data": {
    "booking_id": 14,
    "name": "Aman Bisht",
    "phone": "+917906366271",
    "city": "Kashipur",
    "service": "Sofa Cleaning",
    "whatsapp_direct_url": "https://wa.me/917906366271?text=Hi%20A1%20Cleaning..."
  }
}
```
- **Validation Error Response (HTTP 422):**
```json
{
  "success": false,
  "status": "error",
  "message": "Validation failed. Please correct the fields.",
  "errors": [
    "A valid 10-digit Indian phone number is required (e.g. 7906366271)."
  ]
}
```

---

## 5. Submit Contact Inquiry
- **URL:** `POST /api/contact`
- **Request Body:**
```json
{
  "name": "Rajesh Kumar",
  "phone": "9876543210",
  "email": "rajesh@example.com",
  "subject": "Monthly Office Cleaning",
  "message": "Looking for weekly sanitization contract for SIIDCUL office.",
  "source": "Mobile App"
}
```

