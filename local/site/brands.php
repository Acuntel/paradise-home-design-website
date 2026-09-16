<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = '';
$baseurl = BASEURL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Brands We Carry · Paradise Home Design · Lake Forest, IL</title>
<meta name="description" content="The cabinetry, flooring, countertop, and hardware brands Paradise Home Design carries. Quality Custom (QCCI), Adelphi Kitchens, Holiday Kitchens, Fabuwood, Homecrest, Mercier, Mirage, Kährs, Casabella, Schaub, Richelieu, Top Knobs.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/brands.html" />
<meta property="og:title" content="Brands · Paradise Home Design" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/7.webp';
  $hero_eyebrow = 'Brands we carry';
  $hero_title = 'The makers behind the work.';
  $hero_description = 'Direct relationships with cabinetry, flooring, countertop, and hardware brands that don\'t sell to box stores.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<!-- Cabinetry -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'Cabinetry';
      $sh_heading = 'Custom and semi-custom cabinet makers.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php
        $cabinetry = [
          ['name' => 'Quality Custom (QCCI)', 'desc' => 'Our finest cabinetry — heirloom-grade true custom from Lancaster County, PA, since 1968.', 'href' => $baseurl.'qcci.html'],
          ['name' => 'Adelphi Kitchens', 'desc' => 'Fully custom American cabinetry, family-owned since 1946, made in Pennsylvania.', 'href' => $baseurl.'adelphi.html'],
          ['name' => 'Holiday Kitchens', 'desc' => 'Custom cabinetry, baths, and built-ins, made in the USA since 1946.', 'href' => $baseurl.'holiday_kitchen.html'],
          ['name' => 'Fabuwood',         'desc' => 'Semi-custom value, plywood box construction, made in New Jersey.', 'href' => $baseurl.'fabuwood.html'],
          ['name' => 'Homecrest',        'desc' => 'American-made semi-custom from Goshen IN, in business since 1962.', 'href' => $baseurl.'homecrest.html'],
        ];
        foreach ($cabinetry as $b): ?>
          <a class="card" href="<?php echo $b['href']; ?>" data-reveal style="text-decoration:none">
            <div class="card-body" style="padding:2rem">
              <span class="eyebrow" style="font-size:.7rem">Cabinetry</span>
              <h3 style="font-family:var(--font-display);margin-top:.5rem"><?php echo htmlspecialchars($b['name']); ?></h3>
              <p class="small mt-2"><?php echo htmlspecialchars($b['desc']); ?></p>
              <span class="btn-ghost mt-3">View brand</span>
            </div>
          </a>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Flooring -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = 'Hardwood flooring';
      $sh_heading = 'Real wood, factory-finished, built to last.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-4">
      <?php
        $flooring = [
          ['name' => 'Mercier',  'desc' => 'Quebec-made hardwood since 1980. Generations UV finish.', 'href' => $baseurl.'mercier.html'],
          ['name' => 'Mirage',   'desc' => 'North America\'s #1-rated hardwood. Nanolinx finish.',     'href' => $baseurl.'mirage.html'],
          ['name' => 'Kährs',    'desc' => 'Swedish, inventor of the engineered wood floor (1941).',  'href' => $baseurl.'kahrs.html'],
          ['name' => 'Casabella','desc' => 'Italian-influenced wide-plank European oak.',             'href' => $baseurl.'casebella.html'],
        ];
        foreach ($flooring as $b): ?>
          <a class="card" href="<?php echo $b['href']; ?>" data-reveal style="text-decoration:none">
            <div class="card-body" style="padding:2rem">
              <span class="eyebrow" style="font-size:.7rem">Flooring</span>
              <h3 style="font-family:var(--font-display);margin-top:.5rem"><?php echo htmlspecialchars($b['name']); ?></h3>
              <p class="small mt-2"><?php echo htmlspecialchars($b['desc']); ?></p>
              <span class="btn-ghost mt-3">View brand</span>
            </div>
          </a>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Hardware -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'Decorative hardware';
      $sh_heading = 'Knobs, pulls, hinges that finish the look.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3">
      <?php
        $hardware = [
          ['name' => 'Schaub & Company', 'desc' => 'Hand-finished designer hardware. Symphony, Mountain Series, Italian Designs, Casa Collection.', 'href' => $baseurl.'schaub.html',    'img' => $baseurl.'assets/img/gallery/schaub/1.webp'],
          ['name' => 'Richelieu', 'desc' => 'North America\'s largest decorative hardware distributor. Designer knobs, pulls, hinges, organization.', 'href' => $baseurl.'richelieu.html', 'img' => $baseurl.'assets/img/gallery/richelieu/4.webp'],
          ['name' => 'Top Knobs', 'desc' => 'Designer cabinet knobs, pulls, and appliance hardware in a deep range of styles and finishes.', 'href' => $baseurl.'top_knobs.html', 'img' => $baseurl.'assets/img/gallery/top_knobs/4.webp'],
        ];
        foreach ($hardware as $b): ?>
          <a class="card" href="<?php echo $b['href']; ?>" data-reveal style="text-decoration:none">
            <?php if (!empty($b['img'])): ?>
            <div class="card-media" style="aspect-ratio:3/2;background:#fff">
              <img src="<?php echo $b['img']; ?>" alt="<?php echo htmlspecialchars($b['name']); ?> cabinet hardware" loading="lazy" style="object-fit:contain;padding:6%;box-sizing:border-box">
            </div>
            <?php endif; ?>
            <div class="card-body" style="padding:2rem">
              <span class="eyebrow" style="font-size:.7rem">Hardware</span>
              <h3 style="font-family:var(--font-display);margin-top:.5rem"><?php echo htmlspecialchars($b['name']); ?></h3>
              <p class="small mt-2"><?php echo htmlspecialchars($b['desc']); ?></p>
              <span class="btn-ghost mt-3">View brand</span>
            </div>
          </a>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
  $cta_heading = 'Want to see them in person?';
  $cta_subhead = 'Every brand on this page has samples in the Lake Forest showroom.';
  $cta_button_text = 'Visit the showroom';
  $cta_button_href = $baseurl . 'showroom.html';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
