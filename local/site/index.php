<?php
ob_start();
session_start();
include_once("includes/config.php");
$current_page = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Kitchen Remodeling &amp; Bathroom Design · Lake Forest, IL · Paradise Home Design</title>
<meta name="keywords" content="Kitchen Remodeling Lake Forest IL, Bathroom Renovation Lake Forest IL, North Shore kitchen designer">
<meta name="description" content="Paradise Home Design Inc., design-build kitchens, bathrooms, and full-home remodels on Chicago's North Shore since 1986. Lake Forest, IL · (847) 681-9000.">

<link rel="canonical" href="https://www.paradisehomedesigninc.com/" />
<meta name="robots" content="index, follow"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com/assets/img/logo.png" />
<meta property="og:site_name" content="Paradise Home Design Inc" />
<meta property="og:url" content="https://www.paradisehomedesigninc.com/" />
<meta property="og:title" content="Kitchen Remodeling &amp; Bathroom Design · Lake Forest, IL · Paradise Home Design" />
<meta property="og:description" content="Design-build kitchen and bathroom remodels on Chicago's North Shore since 1986. (847) 681-9000." />
<!-- business:contact_data, LocalBusiness schema, and GA4 are now emitted
     site-wide in includes/headtags.php (included below) -->

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Kitchen Remodeling &amp; Bathroom Design · Lake Forest, IL" />
<meta name="twitter:description" content="Design-build kitchen and bathroom remodels on Chicago's North Shore since 1986." />
<meta name="twitter:image" content="https://www.paradisehomedesigninc.com/assets/img/logo.png" />

<link rel="shortcut icon" href="<?php echo BASEURL;?>assets/img/favicon.png">

<!-- Preload hero image so LCP is fast -->
<link rel="preload" as="image" href="<?php echo BASEURL;?>flash/big/home-hero.webp">

<?php include_once("includes/headtags.php"); ?>
</head>

<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'fullscreen';
  $hero_image   = BASEURL . 'flash/big/home-hero.webp';
  $hero_eyebrow = 'Lake Forest · North Shore Chicago';
  $hero_title   = "Transforming Homes with Timeless Design and Quality Craftsmanship.";
  $hero_description = 'Over 37 years of experience creating beautiful, functional spaces through a seamless design-build process.';
  $hero_cta_text  = 'Schedule a consultation';
  $hero_cta_href  = BASEURL . 'contact.html';
  $hero_cta2_text = 'See our work';
  $hero_cta2_href = BASEURL . 'gallery.html';
  include "includes/components/hero.php";
?>

<?php include_once("includes/components/trust_strip.php"); ?>

<!-- Featured gallery ============================================ -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = '';
      $sh_heading = 'Exceptional homes begin with exceptional design.';
      $sh_description = 'Thoughtful planning, quality craftsmanship, and personalized service come together to create spaces you\'ll love for years to come.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-gallery" data-reveal>
      <?php
        // 3 final homepage gallery photos supplied by client (Shiva), 2026-06-04.
        $gallery = [
          BASEURL.'flash/big/home-g1.webp',
          BASEURL.'flash/big/home-g2.webp',
          BASEURL.'flash/big/home-g3.webp',
        ];
        foreach ($gallery as $g) {
          $g = htmlspecialchars($g);
          echo '<button type="button" class="pd-gallery-item" data-lightbox="'.$g.'" aria-label="Enlarge photo">'
             . '<img src="'.$g.'" alt="Paradise Home Design project" loading="lazy">'
             . '</button>';
        }
      ?>
    </div>
    <div class="text-center mt-5">
      <a class="btn btn-outline-dark" href="<?php echo BASEURL; ?>gallery.html">See full gallery</a>
    </div>
  </div>
</section>

<!-- Feature ============================================ -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = '';
      $sh_heading = 'Beautiful spaces. Built to inspire.';
      $sh_description = 'From kitchens and bathrooms to whole-home renovations, every project is designed with purpose and crafted to the highest standards.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <!-- Black kitchen — client-supplied final photo (2026-06-04), replaces the former blue kitchen. -->
    <button type="button" class="pd-feature-image" data-lightbox="<?php echo BASEURL; ?>flash/big/home-black-kitchen.webp" data-reveal aria-label="Enlarge photo">
      <img src="<?php echo BASEURL; ?>flash/big/home-black-kitchen.webp" alt="Custom black kitchen with brass hardware by Paradise Home Design" loading="lazy">
    </button>
  </div>
</section>

<!-- Process ============================================ -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = 'Our process';
      $sh_heading = 'Four steps. Zero surprises.';
      $sh_description = 'Mapped at the start. You know what\'s happening, what it costs, when it ends.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-process">
      <div class="pd-process-step" data-reveal>
        <div class="pd-process-num">01</div>
        <h3>Consultation</h3>
        <p>Meet with us at your home or our showroom to discuss your project, budget, and goals. No charge.</p>
      </div>
      <div class="pd-process-step" data-reveal>
        <div class="pd-process-num">02</div>
        <h3>Design</h3>
        <p>Custom drawings and 3D renderings. Revise until it's right.</p>
      </div>
      <div class="pd-process-step" data-reveal>
        <div class="pd-process-num">03</div>
        <h3>Build</h3>
        <p>One project manager, insured crews, premium materials. Weekly check-ins.</p>
      </div>
      <div class="pd-process-step" data-reveal>
        <div class="pd-process-num">04</div>
        <h3>Reveal</h3>
        <p>Final walkthrough, then it's time to enjoy your newly transformed space.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials ============================================ -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'What clients say';
      $sh_heading = 'Five stars, every project.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php
        $testimonials = [
          ['q' => 'Had a fantastic kitchen remodel. The team was professional, the design was beautiful, and the quality exceeded my expectations.',           'n' => 'David L.',  'p' => 'Kitchen remodel · Lake Forest'],
          ['q' => 'They handled a full renovation of our home from start to finish. Every room flows together beautifully, the craftsmanship is impeccable, and they guided us through every decision.', 'n' => 'Sarah M.',  'p' => 'Whole-home renovation · Highland Park'],
          ['q' => 'Outstanding job on my countertop. The attention to detail is incredible and it has completely elevated my space.',                          'n' => 'Maria R.',  'p' => 'Countertops · Winnetka'],
          ['q' => 'They handled our entire home renovation from start to finish. Every room turned out cohesive and beautiful, and they kept us informed at every step.', 'n' => 'Jenna P.',  'p' => 'Whole-home renovation · Glencoe'],
          ['q' => 'High-end cabinetry and gorgeous countertops that exceeded my expectations. Professional, friendly, always on time, incredibly responsive.', 'n' => 'Michael K.', 'p' => 'Full remodel · Buffalo Grove'],
          ['q' => 'Truly amazing design work. The space feels twice the size it actually is. Hire them.',                                                       'n' => 'Daniel W.', 'p' => 'Kitchen + bath · Deerfield'],
        ];
        foreach ($testimonials as $t) {
          $t_quote = $t['q']; $t_name = $t['n']; $t_project = $t['p'];
          include "includes/components/testimonial_card.php";
        }
      ?>
    </div>
  </div>
</section>

<?php
  $cta_heading     = "Let's bring your vision to life.";
  $cta_subhead     = 'Free consultation. We respond within one business day.';
  $cta_button_text = 'Schedule a consultation';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
