<?php
/**
 * Brand showcase page template.
 *
 * Args:
 *   $bp_title          <title>
 *   $bp_meta_desc      meta description
 *   $bp_canonical      slug
 *   $bp_brand_name     full brand name
 *   $bp_eyebrow        e.g. "Cabinetry partner"
 *   $bp_hero_image
 *   $bp_story          array of 2-3 short paragraphs
 *   $bp_products       array of ['name' => ..., 'desc' => ...] (8 items)
 *   $bp_projects       array of project tiles
 *   $bp_current_page   nav active key (default 'kitchens')
 */
$current_page = $bp_current_page ?? '';
$baseurl = defined('BASEURL') ? BASEURL : '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($bp_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($bp_meta_desc); ?>">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/<?php echo $bp_canonical; ?>.html" />
<meta property="og:title" content="<?php echo htmlspecialchars($bp_title); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($bp_meta_desc); ?>" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com<?php echo $bp_hero_image; ?>" />
<meta property="og:url" content="https://www.paradisehomedesigninc.com/<?php echo $bp_canonical; ?>.html" />
<meta property="og:type" content="website" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<link rel="preload" as="image" href="<?php echo $bp_hero_image; ?>">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $bp_hero_image;
  $hero_eyebrow = $bp_eyebrow;
  $hero_title   = $bp_brand_name;
  $hero_description = '';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<!-- Story -->
<section>
  <div class="container" style="max-width:780px">
    <div data-reveal>
      <span class="eyebrow">Brand story</span>
      <h2>Why we work with <?php echo htmlspecialchars($bp_brand_name); ?>.</h2>
      <?php foreach ($bp_story as $para): ?>
        <p class="lead" style="margin-bottom:1rem"><?php echo htmlspecialchars($para); ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if (!empty($bp_products)): ?>
<!-- Products -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = 'Featured lines';
      $sh_heading = 'What we carry.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-4">
      <?php foreach ($bp_products as $p): ?>
        <div class="card" data-reveal>
          <div class="card-body">
            <h4 style="font-family:var(--font-display);font-size:1.25rem;font-weight:500"><?php echo htmlspecialchars($p['name']); ?></h4>
            <p class="small"><?php echo htmlspecialchars($p['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($bp_projects)): ?>
<!-- See it in our projects -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'See it installed';
      $sh_heading = 'In Paradise projects.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php foreach ($bp_projects as $p):
        $proj_image = $p['img']; $proj_title = $p['title']; $proj_location = $p['location']; $proj_href = $baseurl . 'gallery.html';
        include "includes/components/project_tile.php";
      endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
  $cta_heading = 'Want to see ' . $bp_brand_name . ' in person?';
  $cta_subhead = 'We keep samples and full installs at our Lake Forest showroom. Book a visit.';
  $cta_button_text = 'Schedule a showroom visit';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
