<?php
/**
 * City landing page template.
 *
 * Args:
 *   $cp_title          <title>
 *   $cp_meta_desc      meta description
 *   $cp_canonical      slug
 *   $cp_city_name      city name (e.g. "Lake Forest")
 *   $cp_city_short     short form (e.g. "Lake Forest")
 *   $cp_hero_image     hero image URL
 *   $cp_zip_codes      array of zip codes served
 *   $cp_neighborhoods  array of neighborhoods served (optional)
 *   $cp_projects       array of project tiles
 */
$current_page = '';
$baseurl = defined('BASEURL') ? BASEURL : '/';
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
$phone_href = 'tel:+1' . preg_replace('/\D/', '', $phone_raw);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($cp_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($cp_meta_desc); ?>">
<meta name="robots" content="<?php echo !empty($cp_noindex) ? 'noindex, follow' : 'index, follow'; ?>"/>
<link rel="canonical" href="https://www.paradisehomedesigninc.com/<?php echo $cp_canonical; ?>.html" />
<meta property="og:title" content="<?php echo htmlspecialchars($cp_title); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($cp_meta_desc); ?>" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com<?php echo $cp_hero_image; ?>" />
<meta property="og:type" content="website" />
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<link rel="preload" as="image" href="<?php echo $cp_hero_image; ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["LocalBusiness", "GeneralContractor", "HomeAndConstructionBusiness"],
  "name": "Paradise Home Design Inc",
  "description": "Kitchen and bathroom remodeling serving <?php echo $cp_city_name; ?>, IL.",
  "url": "https://www.paradisehomedesigninc.com/<?php echo $cp_canonical; ?>.html",
  "telephone": "+1-847-681-9000",
  "email": "paradisehd400@gmail.com",
  "image": "https://www.paradisehomedesigninc.com<?php echo $cp_hero_image; ?>",
  "priceRange": "$$$",
  "foundingDate": "1986",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "225 E Deerpath Rd Unit #80",
    "addressLocality": "Lake Forest",
    "addressRegion": "IL",
    "postalCode": "60045",
    "addressCountry": "US"
  },
  "areaServed": { "@type": "City", "name": "<?php echo $cp_city_name; ?>", "containedInPlace": { "@type": "AdministrativeArea", "name": "Illinois" } },
  "sameAs": [
    "https://www.facebook.com/paradisehomedesiginc/",
    "https://www.instagram.com/paradisehomedesigninc/",
    "https://www.yelp.com/biz/paradise-home-design-lake-forest"
  ]
}
</script>
<?php $has_page_schema = true; include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $cp_hero_image;
  $hero_eyebrow = 'Serving ' . $cp_city_name . ', IL';
  $hero_title   = 'Kitchen + bath remodeling in ' . $cp_city_name . '.';
  $hero_description = 'Over 37 years working in ' . $cp_city_name . ' and surrounding North Shore communities. Owner-led. Lake Forest based.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<?php $crumbs=[['name'=>'Home','url'=>$baseurl],['name'=>$cp_city_name,'url'=>$baseurl.$cp_canonical.'.html']]; include "includes/components/breadcrumbs.php"; ?>


<?php if (!empty($cp_intro)): ?>
<!-- Unique local intro -->
<section>
  <div class="container" style="max-width:780px" data-reveal>
    <?php foreach ($cp_intro as $para): ?>
      <p class="lead" style="margin-bottom:1.1rem"><?php echo htmlspecialchars($para); ?></p>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- Projects in this city -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = $cp_city_name . ' projects';
      $sh_heading = 'Kitchens we\'ve designed in ' . $cp_city_name . '.';
      $sh_description = 'Real homes, real clients. Click any project to see more in the gallery.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php foreach ($cp_projects as $p):
        $proj_image = $p['img']; $proj_title = $p['title']; $proj_location = $p['location']; $proj_href = $baseurl . 'gallery.html';
        include "includes/components/project_tile.php";
      endforeach; ?>
    </div>
  </div>
</section>

<!-- Why locals choose Paradise -->
<section class="section-alt">
  <div class="container" style="max-width:880px">
    <?php
      $sh_eyebrow = 'Why ' . $cp_city_name . ' homeowners choose us';
      $sh_heading = 'Three reasons.';
      $sh_centered = false;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3" style="gap:2rem">
      <?php
        // Per-city reasons override the defaults. Each: ['title' => ..., 'body' => ...].
        // The old hardcoded "15-minute drive" line was removed — it was false on Lake
        // Forest (the HQ town) and Chicago. Defaults below are true for every town.
        $cp_reasons = $cp_reasons ?? [
          ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working ' . $cp_city_name . ' homes means we know the floor plans, the addition patterns, the load-bearing tells. No surprises mid-project.'],
          ['title' => 'We know the permit office.', 'body' => 'We pull permits in ' . $cp_city_name . ' regularly. Inspectors know our crews. Approvals move faster.'],
          ['title' => 'One accountable team.', 'body' => 'Design, cabinetry, permits, and installation under one roof — Lake Forest based, owner-led, on every project.'],
        ];
        foreach ($cp_reasons as $i => $r): ?>
        <div data-reveal>
          <div class="pd-process-num" style="font-size:2rem"><?php echo sprintf('%02d', $i + 1); ?></div>
          <h3 style="font-size:1.5rem"><?php echo htmlspecialchars($r['title']); ?></h3>
          <p><?php echo htmlspecialchars($r['body']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if (!empty($cp_extra_html)): ?>
<!-- Unique local long-form section -->
<section class="section-alt">
  <div class="container" style="max-width:780px" data-reveal>
    <?php echo $cp_extra_html; ?>
  </div>
</section>
<?php endif; ?>

<!-- Local context -->
<?php if (!empty($cp_zip_codes) || !empty($cp_neighborhoods)): ?>
<section>
  <div class="container" style="max-width:780px;text-align:center" data-reveal>
    <span class="eyebrow">Areas served</span>
    <h2>Working throughout <?php echo $cp_city_name; ?>.</h2>
    <?php if (!empty($cp_neighborhoods)): ?>
      <p class="lead">Neighborhoods: <?php echo htmlspecialchars(implode(' · ', $cp_neighborhoods)); ?></p>
    <?php endif; ?>
    <?php if (!empty($cp_zip_codes)): ?>
      <p>Zip codes: <?php echo htmlspecialchars(implode(' · ', $cp_zip_codes)); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- Internal links: services + nearby North Shore towns -->
<section>
  <div class="container" style="max-width:880px;text-align:center" data-reveal>
    <span class="eyebrow">Explore</span>
    <h2>Our remodeling services in <?php echo htmlspecialchars($cp_city_name); ?></h2>
    <p class="pd-inline-links">
      <a href="<?php echo $baseurl; ?>kitchens.html">Kitchen remodeling</a>
      <a href="<?php echo $baseurl; ?>bathrooms.html">Bathroom remodeling</a>
      <a href="<?php echo $baseurl; ?>counter_tops.html">Countertops</a>
      <a href="<?php echo $baseurl; ?>gallery.html">Project gallery</a>
    </p>
    <?php
      $pd_all_cities = [
        'lakeforest' => 'Lake Forest', 'highland' => 'Highland Park', 'winnetka' => 'Winnetka',
        'buffalo_grove' => 'Buffalo Grove', 'vernon_hills' => 'Vernon Hills', 'chicago' => 'Chicago',
        'glencoe' => 'Glencoe', 'northbrook' => 'Northbrook', 'deerfield' => 'Deerfield',
        'lake_bluff' => 'Lake Bluff', 'highwood' => 'Highwood',
      ];
      $pd_nearby = array_filter($pd_all_cities, function($slug) use ($cp_canonical){ return $slug !== $cp_canonical; }, ARRAY_FILTER_USE_KEY);
      if ($pd_nearby):
    ?>
    <p class="small" style="margin-top:1.75rem;color:var(--paradise-stone-500)">We also remodel kitchens and baths in nearby North Shore towns:</p>
    <p class="pd-inline-links">
      <?php foreach ($pd_nearby as $slug => $name): ?>
        <a href="<?php echo $baseurl . $slug; ?>.html"><?php echo htmlspecialchars($name); ?>, IL</a>
      <?php endforeach; ?>
    </p>
    <?php endif; ?>
  </div>
</section>

<?php
  if (empty($faqs)) {
    $faqs = [
      ['q' => 'How much does a kitchen remodel cost in ' . $cp_city_name . ', IL?',
       'a' => 'Most full kitchen remodels in ' . $cp_city_name . ' range from about $50,000 to $120,000+, depending on size, cabinetry, countertops, and whether walls are moved. Paradise Home Design provides a detailed written estimate after a free consultation — call (847) 681-9000.'],
      ['q' => 'Do you pull permits in ' . $cp_city_name . '?',
       'a' => 'Yes. As a design-build remodeler we pull all required permits with your municipality and coordinate inspections as part of the project, so your remodel stays compliant and on schedule.'],
      ['q' => 'How long has Paradise Home Design served ' . $cp_city_name . '?',
       'a' => 'Paradise Home Design has remodeled kitchens and bathrooms across ' . $cp_city_name . ' and the North Shore since 1986. Our showroom is in Lake Forest, a short drive away.'],
      ['q' => 'Do you handle both design and construction?',
       'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation — you do not need a separate designer.'],
      ['q' => 'How do I get started?',
       'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day, discuss your goals and budget, and provide a written estimate before any work begins.'],
    ];
    $faq_heading = 'Remodeling in ' . $cp_city_name . ' — FAQs';
  }
  include "includes/components/faq.php";
?>

<?php include "includes/components/lead_form_section.php"; ?>

<?php
  $cta_heading = 'Planning a remodel in ' . $cp_city_name . '?';
  $cta_subhead = 'Call ' . $phone_raw . ' or schedule a free consultation. We respond within one business day.';
  $cta_button_text = 'Schedule a consultation';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
