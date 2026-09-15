<?php
/**
 * Paradise Home Design — shared <head> tags.
 * Include INSIDE the <head> of every page that uses the new design system.
 *
 * Usage: <head> ... <?php include_once("includes/headtags.php"); ?> ... </head>
 *
 * Emits site-wide (so EVERY page gets them, not just the homepage):
 *   - Google Analytics 4 (visitor + event tracking)
 *   - business:contact_data Open Graph meta (NAP for crawlers/social)
 *   - Canonical LocalBusiness JSON-LD schema  — UNLESS the page already
 *     defines its own richer schema (set $has_page_schema = true; before
 *     including this file, as index.php and city_page.php do).
 */
$pd_base = defined('BASEURL') ? BASEURL : '/';
?>
<!-- Preconnect to font hosts for faster paint -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Playfair Display (headings) + Outfit (body) -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Paradise design system (loads after any legacy CSS so it overrides) -->
<!-- ?v= cache-buster: bump this whenever CSS changes so browsers fetch fresh -->
<link rel="stylesheet" href="<?php echo $pd_base; ?>assets/css/design-system.css?v=20260915a">

<!-- Defer reveal/scroll/nav helpers -->
<script defer src="<?php echo $pd_base; ?>assets/js/reveal.js?v=20260915a"></script>

<!-- Business contact data (Open Graph) — site-wide NAP for crawlers/social -->
<meta property="business:contact_data:street_address" content="225 E Deerpath Rd Unit #80" />
<meta property="business:contact_data:locality" content="Lake Forest" />
<meta property="business:contact_data:region" content="IL" />
<meta property="business:contact_data:postal_code" content="60045" />
<meta property="business:contact_data:country_name" content="USA" />
<meta property="business:contact_data:email" content="paradisehd400@gmail.com" />
<meta property="business:contact_data:phone_number" content="+1-847-681-9000" />

<!-- Connected entity @graph: Organization + WebSite on every page; LocalBusiness +
     Service nodes on pages without their own richer schema. Stable @ids tie them
     together for entity recognition (SEO knowledge graph + AEO/AI citation). -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.paradisehomedesigninc.com/#org",
      "name": "Paradise Home Design Inc",
      "alternateName": "Paradise Home Design",
      "url": "https://www.paradisehomedesigninc.com/",
      "logo": { "@type": "ImageObject", "url": "https://www.paradisehomedesigninc.com/assets/img/logo.png" },
      "foundingDate": "1986",
      "knowsAbout": ["kitchen remodeling", "bathroom remodeling", "custom cabinetry", "quartz countertops", "granite countertops", "design-build remodeling", "North Shore Illinois home renovation"],
      "sameAs": [
        "https://www.facebook.com/paradisehomedesiginc/",
        "https://www.instagram.com/paradisehomedesigninc/",
        "https://www.yelp.com/biz/paradise-home-design-lake-forest",
        "https://www.bbb.org/us/il/lake-forest/profile/home-design/paradise-home-design-inc-0654-1000119698",
        "https://www.google.com/maps/search/?api=1&query=Paradise+Home+Design+Inc+Lake+Forest+IL"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://www.paradisehomedesigninc.com/#website",
      "url": "https://www.paradisehomedesigninc.com/",
      "name": "Paradise Home Design Inc",
      "publisher": { "@id": "https://www.paradisehomedesigninc.com/#org" }
    }<?php if (empty($has_page_schema)): ?>,
    {
      "@type": ["LocalBusiness", "GeneralContractor", "HomeAndConstructionBusiness"],
      "@id": "https://www.paradisehomedesigninc.com/#business",
      "name": "Paradise Home Design Inc",
      "parentOrganization": { "@id": "https://www.paradisehomedesigninc.com/#org" },
      "url": "https://www.paradisehomedesigninc.com/",
      "telephone": "+1-847-681-9000",
      "email": "paradisehd400@gmail.com",
      "image": "https://www.paradisehomedesigninc.com/assets/img/logo.png",
      "priceRange": "$$$",
      "foundingDate": "1986",
      "slogan": "Design-build kitchen, bathroom, and full-home remodeling on Chicago's North Shore since 1986.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "225 E Deerpath Rd Unit #80",
        "addressLocality": "Lake Forest",
        "addressRegion": "IL",
        "postalCode": "60045",
        "addressCountry": "US"
      },
      "geo": { "@type": "GeoCoordinates", "latitude": 42.2586, "longitude": -87.8407 },
      "areaServed": ["Lake Forest", "Lake Bluff", "Highland Park", "Highwood", "Winnetka", "Glencoe", "Northbrook", "Deerfield", "Buffalo Grove", "Vernon Hills", "Chicago"],
      "openingHoursSpecification": [
        { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "10:00", "closes": "17:00" },
        { "@type": "OpeningHoursSpecification", "dayOfWeek": "Saturday", "description": "By appointment" }
      ]
    },
    { "@type": "Service", "@id": "https://www.paradisehomedesigninc.com/#svc-kitchen", "serviceType": "Kitchen Remodeling", "provider": { "@id": "https://www.paradisehomedesigninc.com/#business" }, "areaServed": "Chicago North Shore, Illinois" },
    { "@type": "Service", "@id": "https://www.paradisehomedesigninc.com/#svc-bath", "serviceType": "Bathroom Remodeling", "provider": { "@id": "https://www.paradisehomedesigninc.com/#business" }, "areaServed": "Chicago North Shore, Illinois" },
    { "@type": "Service", "@id": "https://www.paradisehomedesigninc.com/#svc-counter", "serviceType": "Countertop Fabrication and Installation", "provider": { "@id": "https://www.paradisehomedesigninc.com/#business" }, "areaServed": "Chicago North Shore, Illinois" },
    { "@type": "Service", "@id": "https://www.paradisehomedesigninc.com/#svc-cabinetry", "serviceType": "Custom Cabinetry", "provider": { "@id": "https://www.paradisehomedesigninc.com/#business" }, "areaServed": "Chicago North Shore, Illinois" }
<?php endif; ?>
  ]
}
</script>

<!-- Google tag (gtag.js) — site-wide -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JT93KM5WJV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-JT93KM5WJV');
</script>
