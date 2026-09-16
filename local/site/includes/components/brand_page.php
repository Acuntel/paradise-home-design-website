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
 *   $bp_gallery        array of image paths (relative to BASEURL) -> photo gallery section
 *   $bp_gallery_eyebrow / $bp_gallery_heading / $bp_gallery_desc / $bp_gallery_alt   copy overrides
 *   $bp_gallery_product  true = catalog/product shots: square tiles, whole image shown, no crop
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

<?php $crumbs=[['name'=>'Home','url'=>$baseurl],['name'=>'Brands','url'=>$baseurl.'brands.html'],['name'=>$bp_brand_name,'url'=>$baseurl.$bp_canonical.'.html']]; include "includes/components/breadcrumbs.php"; ?>


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

<?php if (!empty($bp_gallery)): ?>
<!-- Brand gallery — real installed photos -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = $bp_gallery_eyebrow ?? 'Gallery';
      $sh_heading = $bp_gallery_heading ?? ($bp_brand_name . ' in real kitchens.');
      $sh_description = $bp_gallery_desc ?? ('A selection of finished projects featuring ' . $bp_brand_name . '.');
      $sh_centered = true;
      include "includes/components/section_header.php";
      $bp_gallery_alt = $bp_gallery_alt ?? ($bp_brand_name . ' kitchen project by Paradise Home Design');
    ?>
    <div class="pd-brand-gallery<?php echo !empty($bp_gallery_product) ? ' pd-brand-gallery--product' : ''; ?>">
      <?php foreach ($bp_gallery as $g): $gsrc = $baseurl . ltrim($g, '/'); ?>
        <button type="button" class="pd-brand-gallery-item" data-lightbox="<?php echo $gsrc; ?>" data-reveal aria-label="Enlarge <?php echo htmlspecialchars($bp_brand_name); ?> photo">
          <img src="<?php echo $gsrc; ?>" alt="<?php echo htmlspecialchars($bp_gallery_alt); ?>" loading="lazy">
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($bp_products)): ?>
<!-- Products -->
<section>
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

<?php // "In Paradise projects" section removed site-wide per client request (2026-06-15). ?>

<?php
  $cta_heading = 'Want to see ' . $bp_brand_name . ' in person?';
  $cta_subhead = 'We keep samples and full installs at our Lake Forest showroom. Book a visit.';
  $cta_button_text = 'Schedule a showroom visit';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
