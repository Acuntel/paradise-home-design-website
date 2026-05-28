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
  "@type": "LocalBusiness",
  "name": "Paradise Home Design Inc, <?php echo $cp_city_name; ?>",
  "url": "https://www.paradisehomedesigninc.com/<?php echo $cp_canonical; ?>.html",
  "telephone": "+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>",
  "areaServed": "<?php echo $cp_city_name; ?>, IL",
  "image": "https://www.paradisehomedesigninc.com<?php echo $cp_hero_image; ?>"
}
</script>
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $cp_hero_image;
  $hero_eyebrow = 'Serving ' . $cp_city_name . ', IL';
  $hero_title   = 'Kitchen + bath remodeling in ' . $cp_city_name . '.';
  $hero_description = '38 years working in ' . $cp_city_name . ' and surrounding North Shore communities. Owner-led. Lake Forest based.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

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
      <div data-reveal>
        <div class="pd-process-num" style="font-size:2rem">01</div>
        <h3 style="font-size:1.5rem">We know the housing stock.</h3>
        <p>38 years working <?php echo $cp_city_name; ?> homes means we know the floor plans, the addition patterns, the load-bearing tells. No surprises mid-project.</p>
      </div>
      <div data-reveal>
        <div class="pd-process-num" style="font-size:2rem">02</div>
        <h3 style="font-size:1.5rem">We know the permit office.</h3>
        <p>We pull permits in <?php echo $cp_city_name; ?> regularly. Inspectors know our crews. Approvals move faster.</p>
      </div>
      <div data-reveal>
        <div class="pd-process-num" style="font-size:2rem">03</div>
        <h3 style="font-size:1.5rem">We're a 15-minute drive.</h3>
        <p>Lake Forest based, so we're on site fast when something needs attention. No two-hour drives from a downtown contractor.</p>
      </div>
    </div>
  </div>
</section>

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

<?php
  $cta_heading = 'Planning a remodel in ' . $cp_city_name . '?';
  $cta_subhead = 'Call ' . $phone_raw . ' or schedule a free consultation. We respond within one business day.';
  $cta_button_text = 'Schedule a consultation';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
