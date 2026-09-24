<?php
/**
 * Town × Service landing page (e.g. "Kitchen Remodeling in Winnetka").
 * A stub sets: $ts_title, $ts_meta, $ts_slug, $ts_service, $ts_town,
 *   $ts_hero, $ts_intro (array of paragraphs), $ts_reasons (array of {title,body}),
 *   $ts_cost (string), $ts_extra_html (string), $ts_projects (array of tiles),
 *   $faqs (array for faq.php). Then includes this file.
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
$current_page = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($ts_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($ts_meta); ?>">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/<?php echo $ts_slug; ?>.html" />
<meta property="og:title" content="<?php echo htmlspecialchars($ts_title); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($ts_meta); ?>" />
<meta property="og:image" content="<?php $pd_og = $ts_hero; echo preg_match('#^https?://#', $pd_og) ? $pd_og : 'https://www.paradisehomedesigninc.com/' . ltrim($pd_og, '/'); ?>" />
<meta property="og:type" content="website" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<link rel="preload" as="image" href="<?php echo $ts_hero; ?>">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $ts_hero;
  $hero_eyebrow = $ts_service . ' · ' . $ts_town . ', IL';
  $hero_title   = $ts_service . ' in ' . $ts_town . '.';
  $hero_description = '';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<?php $ts_svc_url=(stripos($ts_service,'bath')!==false?'bathrooms.html':'kitchens.html'); $crumbs=[['name'=>'Home','url'=>$baseurl],['name'=>$ts_service,'url'=>$baseurl.$ts_svc_url],['name'=>$ts_service.' in '.$ts_town,'url'=>$baseurl.$ts_slug.'.html']]; include "includes/components/breadcrumbs.php"; ?>


<!-- Intro -->
<section>
  <div class="container" style="max-width:780px" data-reveal>
    <?php foreach ($ts_intro as $para): ?>
      <p class="lead" style="margin-bottom:1.1rem"><?php echo htmlspecialchars($para); ?></p>
    <?php endforeach; ?>
  </div>
</section>

<!-- Why us, in this town -->
<section class="section-alt">
  <div class="container" style="max-width:880px">
    <?php
      $sh_eyebrow = 'Why ' . $ts_town . ' homeowners choose us';
      $sh_heading = 'Three reasons.';
      $sh_centered = false;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3" style="gap:2rem">
      <?php foreach ($ts_reasons as $i => $r): ?>
        <div data-reveal>
          <div class="pd-process-num" style="font-size:2rem"><?php echo sprintf('%02d', $i + 1); ?></div>
          <h3 style="font-size:1.5rem"><?php echo htmlspecialchars($r['title']); ?></h3>
          <p><?php echo htmlspecialchars($r['body']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if (!empty($ts_cost)): ?>
<section>
  <div class="container" style="max-width:780px;text-align:center" data-reveal>
    <span class="eyebrow">What it costs</span>
    <p class="lead"><?php echo htmlspecialchars($ts_cost); ?></p>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($ts_extra_html)): ?>
<section class="section-alt">
  <div class="container" style="max-width:780px" data-reveal><?php echo $ts_extra_html; ?></div>
</section>
<?php endif; ?>

<?php if (!empty($ts_projects)): ?>
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'Recent work';
      $sh_heading = $ts_projects_heading ?? ($ts_town . ' projects.');
      $sh_centered = true; $sh_description = '';
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php foreach ($ts_projects as $p):
        $proj_image = $p['img']; $proj_title = $p['title']; $proj_location = $p['location']; $proj_href = $baseurl . 'gallery.html';
        include "includes/components/project_tile.php";
      endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php $lf_heading = $ts_service . ' in ' . $ts_town . '?'; $lf_sub = 'Free consultation, no pressure. We respond within one business day.'; include "includes/components/lead_form_section.php"; ?>

<?php
  $faq_heading = $ts_service . ' in ' . $ts_town . ' — FAQs';
  include "includes/components/faq.php";
?>

<?php
  $cta_heading = 'Planning ' . strtolower($ts_service) . ' in ' . $ts_town . '?';
  $cta_subhead = 'Call (847) 681-9000 or book a free consultation at our Lake Forest showroom.';
  $cta_button_text = 'Schedule a consultation';
  $cta_button_href = $baseurl . 'contact.html';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>
</body>
</html>
