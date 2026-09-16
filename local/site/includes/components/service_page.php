<?php
/**
 * Service / category page template.
 *
 * Args (set before include):
 *   $sp_title          page <title>
 *   $sp_meta_desc      meta description
 *   $sp_canonical      canonical URL slug (e.g. 'kitchens')
 *   $sp_hero_eyebrow   short uppercase eyebrow
 *   $sp_hero_title     main hero headline
 *   $sp_hero_desc      hero subtext
 *   $sp_hero_image     hero background image URL
 *   $sp_intro_heading  intro section heading
 *   $sp_intro_text     short intro paragraph (max ~50 words)
 *   $sp_materials      array of ['name' => ..., 'desc' => ...] (8-12 items)
 *   $sp_materials_eyebrow  eyebrow for materials section
 *   $sp_materials_heading  heading for materials section
 *   $sp_projects       array of project tiles ['img'=>...,'title'=>...,'location'=>...]
 *                      optional 'images'=>[relative paths] (+ 'tag','meta','paras') makes the
 *                      tile open those photos in an in-page modal instead of linking to the portfolio
 *   $sp_current_page   nav active key
 */
$current_page = $sp_current_page ?? '';
$baseurl = defined('BASEURL') ? BASEURL : '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($sp_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($sp_meta_desc); ?>">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/<?php echo $sp_canonical; ?>.html" />
<meta property="og:title" content="<?php echo htmlspecialchars($sp_title); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($sp_meta_desc); ?>" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com<?php echo $sp_hero_image; ?>" />
<meta property="og:url" content="https://www.paradisehomedesigninc.com/<?php echo $sp_canonical; ?>.html" />
<meta property="og:type" content="website" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<link rel="preload" as="image" href="<?php echo $sp_hero_image; ?>">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd pd-page-<?php echo htmlspecialchars($sp_current_page ?? ''); ?>">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $sp_hero_image;
  $hero_eyebrow = $sp_hero_eyebrow;
  $hero_title   = $sp_hero_title;
  $hero_description = $sp_hero_desc;
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<?php $crumbs=[['name'=>'Home','url'=>$baseurl],['name'=>$sp_hero_eyebrow,'url'=>$baseurl.$sp_canonical.'.html']]; include "includes/components/breadcrumbs.php"; ?>


<!-- Intro -->
<section>
  <div class="container">
    <div class="pd-split" data-reveal>
      <div>
        <span class="eyebrow">The Paradise approach</span>
        <h2><?php echo htmlspecialchars($sp_intro_heading); ?></h2>
        <p><?php echo htmlspecialchars($sp_intro_text); ?></p>
        <a class="btn btn-primary mt-3" href="<?php echo $baseurl; ?>contact.html">Schedule a consultation</a>
      </div>
      <div class="pd-split-media">
        <img src="<?php echo $sp_hero_image; ?>" alt="<?php echo htmlspecialchars($sp_hero_title); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<?php if (!empty($sp_materials)): ?>
<!-- Materials -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = $sp_materials_eyebrow ?? 'Materials we work with';
      $sh_heading = $sp_materials_heading ?? 'Premium materials, sourced direct.';
      $sh_description = '';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-4">
      <?php foreach ($sp_materials as $m): ?>
        <div class="card" data-reveal>
          <div class="card-body">
            <h4 style="font-family:var(--font-display);font-size:1.25rem;font-weight:500"><?php echo htmlspecialchars($m['name']); ?></h4>
            <p class="small"><?php echo htmlspecialchars($m['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($sp_projects)): ?>
<!-- Recent projects -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = $sp_projects_eyebrow ?? 'Recent work';
      $sh_heading = $sp_projects_heading ?? 'Recently completed.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php $pm_projects = [];
      foreach ($sp_projects as $p):
        $proj_image = $p['img']; $proj_title = $p['title']; $proj_location = $p['location']; $proj_href = $baseurl . 'gallery.html';
        if (!empty($p['images'])) {
          $proj_open = count($pm_projects);
          $pm_projects[] = ['name' => $p['title'], 'tag' => $p['tag'] ?? '', 'meta' => $p['meta'] ?? '', 'paras' => $p['paras'] ?? [], 'images' => $p['images']];
        }
        include "includes/components/project_tile.php";
      endforeach; ?>
    </div>
    <div class="text-center mt-5">
      <a class="btn btn-outline-dark" href="<?php echo $baseurl; ?>gallery.html">See full gallery</a>
    </div>
  </div>
</section>
<?php if (!empty($pm_projects)) include "includes/components/project_modal.php"; ?>
<?php endif; ?>

<!-- Areas we serve -->
<section class="section-alt">
  <div class="container" style="max-width:880px;text-align:center" data-reveal>
    <span class="eyebrow">Areas we serve</span>
    <h2>Serving Chicago&rsquo;s North Shore.</h2>
    <p>Proudly serving Chicago&rsquo;s North Shore and beyond.</p>
  </div>
</section>

<?php include "includes/components/faq.php"; ?>

<?php include "includes/components/lead_form_section.php"; ?>

<?php include "includes/components/cta_banner.php"; ?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
