<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = '';
$baseurl = BASEURL;
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
$address = $contact['Address'] ?? '225 E Deerpath Rd, Unit #80, Lake Forest, IL 60045';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Showroom · Lake Forest, IL · Paradise Home Design</title>
<meta name="description" content="Visit the Paradise Home Design showroom at 225 E Deerpath Rd in Lake Forest, IL. Cabinet samples, stone samples, hardwood, and tile on display.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/showroom.html" />
<meta property="og:title" content="Paradise Home Design Showroom" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com<?php echo $baseurl; ?>showroom1/big/storefront1.webp" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/3.webp';
  $hero_eyebrow = 'Visit the showroom';
  $hero_title = 'Compare finishes, textures, and materials in person.';
  $hero_description = 'Cabinetry, countertops, hardwood, and tile—all thoughtfully displayed in our Lake Forest showroom.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<!-- What's on display -->
<section>
  <div class="container" style="max-width:820px;text-align:center" data-reveal>
    <span class="eyebrow">On display</span>
    <h2>Everything under one roof.</h2>
    <p class="lead">Our Lake Forest showroom brings together cabinet door samples, stone samples, hardwood planks, tile, and decorative hardware from the brands we carry&mdash;so you can see and compare real materials side by side before you decide. Bring your paint swatches and inspiration, and a list of what you don&rsquo;t want.</p>
    <!-- Showroom storefront photo (client "Showroom Picture 1", 2026-09-02) -->
    <button type="button" class="pd-feature-image mt-5" data-lightbox="<?php echo $baseurl; ?>showroom1/big/storefront1.webp" data-reveal aria-label="Enlarge showroom photo">
      <img src="<?php echo $baseurl; ?>showroom1/big/storefront1.webp" alt="Paradise Home Design showroom storefront, 225 E Deerpath Rd, Lake Forest" loading="lazy">
    </button>
  </div>
</section>

<!-- Visit details -->
<section class="section-alt">
  <div class="container">
    <div class="pd-split" style="align-items:flex-start;gap:4rem">
      <div data-reveal>
        <span class="eyebrow">Find us</span>
        <h2>225 East Deerpath Road.</h2>
        <p class="mt-3"><strong>Address</strong><br><?php echo htmlspecialchars($address); ?></p>
        <p class="mt-3"><strong>Phone</strong><br><a href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" style="color:var(--paradise-brass-500);font-family:var(--font-display);font-size:1.5rem"><?php echo htmlspecialchars($phone_raw); ?></a></p>
        <p class="mt-3"><strong>Hours</strong><br>Monday to Friday: 10am to 5pm<br>Saturday: by appointment<br>Sunday: closed</p>
        <p class="mt-3"><strong>Parking</strong><br>Street parking out front. Unit #80 is on the east side of the building.</p>
        <div class="mt-4">
          <a class="btn btn-primary" href="<?php echo $baseurl; ?>design_consultation.html">Book a consultation</a>
        </div>
      </div>
      <div data-reveal>
        <iframe src="https://www.google.com/maps?q=225+E+Deerpath+Rd,+Lake+Forest,+IL+60045&output=embed" width="100%" height="420" style="border:1px solid var(--paradise-stone-300);border-radius:4px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<?php
  $cta_heading = 'Stop by this week?';
  $cta_subhead = 'No appointment needed Monday to Friday. Call ahead for Saturday.';
  $cta_button_text = 'Get directions';
  $cta_button_href = 'https://www.google.com/maps?q=225+E+Deerpath+Rd,+Lake+Forest,+IL+60045';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
