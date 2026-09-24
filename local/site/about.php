<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = 'about';
$baseurl = BASEURL;
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About · Over 37 Years of Trusted Experience · Paradise Home Design</title>
<meta name="description" content="Paradise Home Design Inc. is a full-service, one-stop design and build firm in Lake Forest, IL. Over 37 years of kitchen design, custom cabinetry, bathrooms, remodeling, additions, countertops, and flooring.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/about.html" />
<meta property="og:title" content="About Paradise Home Design" />
<meta property="og:image" content="<?php echo $baseurl; ?>flash/big/5.webp" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/5.webp';
  $hero_eyebrow = 'About Paradise';
  $hero_title = 'Over 37 Years of Trusted Experience in Residential Building and Remodeling.';
  $hero_description = '';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<!-- Story: the company's own description, restored from the original website at the client's request (2026-09-02) -->
<section>
  <div class="container" style="max-width:780px">
    <div data-reveal>
      <span class="eyebrow">About Paradise Home Design</span>
      <p class="lead">Recognized as one of the nation's premier kitchen design showrooms, Paradise Home Design Inc. is your full-service, one-stop design firm. For over 37 years, we have transformed dream homes into reality with our expertise in kitchen design, custom cabinetry, architectural drawing, bathroom design, remodeling, home building, additions, countertops, and flooring.</p>
      <p>We are committed to being leaders and innovators in the luxury home market, offering fresh designs and top-tier quality to our exceptional clients. Our team comprises accomplished and creative professionals, each bringing a unique skill set ranging from technical expertise to adept project management.</p>
      <p>Our portfolio includes sleek city penthouses, grand suburban estates, high-powered corporate offices, and boutique hospitality spaces.</p>
      <p>Whether you are envisioning a custom kitchen or planning a bathroom remodel, Paradise Home Design Inc. provides access to premium products and tailored solutions. Our designers serve as the single point of contact throughout your project, managing every detail, whether we are chosen as the general contractor or solely for cabinetry installation.</p>
      <p>Leading home design professionals rely on our founders' knowledge and processes to oversee their clients' projects from the initial consultation to the final walk-through. Paradise Home Design Inc. is a sought-after building and design firm known for outstanding services and originality.</p>
      <p>For expert guidance in designing your kitchen, please call or visit us today to get started.</p>
    </div>

    <!-- Showroom photo (client "Showroom Picture 2", 2026-09-02) -->
    <button type="button" class="pd-feature-image mt-5" data-lightbox="<?php echo $baseurl; ?>showroom1/big/storefront2.webp" data-reveal aria-label="Enlarge showroom photo">
      <img src="<?php echo $baseurl; ?>showroom1/big/storefront2.webp" alt="Paradise Home Design Inc. showroom, Lake Forest" loading="lazy">
    </button>
  </div>
</section>

<!-- Service area -->
<section class="section-alt">
  <div class="container" style="max-width:880px;text-align:center" data-reveal>
    <span class="eyebrow">Where we work</span>
    <h2>Chicago's North Shore + close-in northwest suburbs.</h2>
    <p class="lead">Lake Forest · Lake Bluff · Highland Park · Highwood · Winnetka · Glencoe · Northbrook · Deerfield · Buffalo Grove · Vernon Hills · Chicago</p>
    <p>Outside this footprint? Call us. We've travelled for clients we trust.</p>
    <div class="mt-4">
      <a class="btn btn-primary" href="<?php echo $baseurl; ?>contact.html">Start a project</a>
    </div>
  </div>
</section>

<?php
  $cta_heading = 'Want to meet?';
  $cta_subhead = 'Call ' . $phone_raw . ' or stop by the Lake Forest showroom.';
  $cta_button_text = 'Schedule a visit';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
