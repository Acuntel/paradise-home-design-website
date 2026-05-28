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
<meta name="description" content="Paradise Home Design Inc. — design-build kitchens, bathrooms, and full-home remodels on Chicago's North Shore since 1986. Lake Forest, IL · (847) 681-9000.">

<link rel="canonical" href="https://www.paradisehomedesigninc.com/" />
<meta name="robots" content="index, follow"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com/assets/img/logo.png" />
<meta property="og:site_name" content="Paradise Home Design Inc" />
<meta property="og:url" content="https://www.paradisehomedesigninc.com/" />
<meta property="og:title" content="Kitchen Remodeling &amp; Bathroom Design · Lake Forest, IL · Paradise Home Design" />
<meta property="og:description" content="Design-build kitchen and bathroom remodels on Chicago's North Shore since 1986. (847) 681-9000." />
<meta property="business:contact_data:street_address" content="225 E Deerpath Rd  Unit # 80" />
<meta property="business:contact_data:locality" content="Lake Forest" />
<meta property="business:contact_data:region" content="IL" />
<meta property="business:contact_data:postal_code" content="60045" />
<meta property="business:contact_data:country_name" content="USA" />
<meta property="business:contact_data:email" content="paradisehd400@gmail.com" />
<meta property="business:contact_data:phone_number" content="+1-847-681-9000" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Kitchen Remodeling &amp; Bathroom Design · Lake Forest, IL" />
<meta name="twitter:description" content="Design-build kitchen and bathroom remodels on Chicago's North Shore since 1986." />
<meta name="twitter:image" content="https://www.paradisehomedesigninc.com/assets/img/logo.png" />

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Paradise Home Design Inc",
  "alternateName": "Paradise Home Design",
  "url": "https://www.paradisehomedesigninc.com/",
  "telephone": "+1-847-681-9000",
  "image": "https://www.paradisehomedesigninc.com/assets/img/logo.png",
  "priceRange": "$$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "225 E Deerpath Rd  Unit # 80",
    "addressLocality": "Lake Forest",
    "addressRegion": "IL",
    "postalCode": "60045",
    "addressCountry": "US"
  },
  "areaServed": ["Lake Forest", "Highland Park", "Winnetka", "Glencoe", "Buffalo Grove", "Deerfield", "Northbrook", "Lake Bluff", "Chicago"],
  "founder": "Paradise Home Design Inc",
  "foundingDate": "1986"
}
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JT93KM5WJV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-JT93KM5WJV');
</script>

<link rel="shortcut icon" href="<?php echo BASEURL;?>assets/img/favicon.png">

<!-- Preload hero image so LCP is fast -->
<link rel="preload" as="image" href="<?php echo BASEURL;?>flash/big/5.png">

<?php include_once("includes/headtags.php"); ?>
</head>

<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'fullscreen';
  $hero_image   = BASEURL . 'flash/big/5.png';
  $hero_eyebrow = 'Lake Forest · North Shore Chicago';
  $hero_title   = "Kitchens designed for the way you actually live.";
  $hero_description = '38 years on Chicago\'s North Shore. Lake Forest based, owner-led, every project.';
  $hero_cta_text  = 'Schedule a consultation';
  $hero_cta_href  = BASEURL . 'contact.html';
  $hero_cta2_text = 'See our work';
  $hero_cta2_href = BASEURL . 'gallery.html';
  include "includes/components/hero.php";
?>

<?php include_once("includes/components/trust_strip.php"); ?>

<!-- Featured projects ============================================ -->
<section class="section-alt">
  <div class="container">
    <?php
      $sh_eyebrow = 'Recent work';
      $sh_heading = 'Six kitchens that feel like the people who live in them.';
      $sh_description = 'One designer from first sketch to final reveal. No subbed-out work.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php
        $projects = [
          ['img' => BASEURL.'flash/big/2.png', 'title' => 'Black cabinets, marble + brass',         'location' => 'Lake Forest, IL'],
          ['img' => BASEURL.'flash/big/1.png', 'title' => 'Blue island + subway tile',              'location' => 'Highland Park, IL'],
          ['img' => BASEURL.'flash/big/7.png', 'title' => 'Traditional cherry + granite',           'location' => 'Winnetka, IL'],
          ['img' => BASEURL.'flash/big/4.png', 'title' => 'Spa bath with floating vanity',          'location' => 'Lake Forest, IL'],
          ['img' => BASEURL.'flash/big/3.png', 'title' => 'Gothic-style built-in cabinetry',        'location' => 'Buffalo Grove, IL'],
          ['img' => BASEURL.'flash/big/6.png', 'title' => 'Coastal white + tiffany-blue island',    'location' => 'Florida'],
        ];
        foreach ($projects as $p) {
          $proj_image = $p['img']; $proj_title = $p['title']; $proj_location = $p['location'];
          $proj_href  = BASEURL . 'gallery.html';
          include "includes/components/project_tile.php";
        }
      ?>
    </div>
    <div class="text-center mt-5">
      <a class="btn btn-outline-dark" href="<?php echo BASEURL; ?>gallery.html">See full gallery</a>
    </div>
  </div>
</section>

<!-- What we do ============================================ -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'What we do';
      $sh_heading = 'Four ways to remodel.';
      $sh_description = 'One room or the whole house. We run the project end to end.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-4">
      <?php
        $services = [
          ['img' => BASEURL.'flash/big/2.png', 'h' => 'Kitchens',     't' => 'Custom cabinetry, integrated appliances, and islands that actually fit the way you cook.',  'href' => BASEURL.'kitchens.html'],
          ['img' => BASEURL.'flash/big/4.png', 'h' => 'Bathrooms',    't' => 'From spa-style primary suites to compact powder rooms. Tile, stone, fixtures, lighting.',     'href' => BASEURL.'bathrooms.html'],
          ['img' => BASEURL.'flash/big/7.png', 'h' => 'Countertops',  't' => 'Quartz, quartzite, marble, and natural stone. Sourced direct from Mercier, Mirage, Casabella.','href' => BASEURL.'counter_tops.html'],
          ['img' => BASEURL.'flash/big/3.png', 'h' => 'Full home',    't' => 'Multi-room remodels and new-build interiors. One designer, one project manager, one contract.','href' => BASEURL.'about.html'],
        ];
        foreach ($services as $s) {
          $svc_image = $s['img']; $svc_heading = $s['h']; $svc_text = $s['t']; $svc_href = $s['href']; $svc_link_text = 'See examples';
          include "includes/components/service_card.php";
        }
      ?>
    </div>
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
        <p>We visit, hear what you want, talk budget and scope. No charge.</p>
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
        <p>Walkthrough, punch list, one-year warranty. Then you cook in it.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Paradise ============================================ -->
<section>
  <div class="container">
    <div class="pd-split mb-5" data-reveal>
      <div class="pd-split-media"><img src="<?php echo BASEURL; ?>flash/big/1.png" alt="Owner-led design — blue island kitchen, Lake Forest" loading="lazy"></div>
      <div>
        <span class="eyebrow">Owner-led</span>
        <h2>The owner is on every project. Including yours.</h2>
        <p>You meet the owner at the consultation. You see him on the job site. You call him when you have a question.</p>
      </div>
    </div>
    <div class="pd-split reverse mb-5" data-reveal>
      <div class="pd-split-media"><img src="<?php echo BASEURL; ?>flash/big/7.png" alt="Premium materials — traditional cherry kitchen with granite island" loading="lazy"></div>
      <div>
        <span class="eyebrow">Premium materials</span>
        <h2>Direct relationships with brands that don't sell to box stores.</h2>
        <p>Candlelight, Fabuwood, Homecrest, Mercier, Mirage, Kährs, Casabella. Showroom samples in Lake Forest. No hidden markups.</p>
      </div>
    </div>
    <div class="pd-split" data-reveal>
      <div class="pd-split-media"><img src="<?php echo BASEURL; ?>flash/big/5.png" alt="North Shore expertise — white shaker kitchen with island" loading="lazy"></div>
      <div>
        <span class="eyebrow">North Shore experts</span>
        <h2>38 years building for one of the most demanding markets in the country.</h2>
        <p>We know the housing stock, the permitting offices, and what holds up to a Midwest winter.</p>
      </div>
    </div>
  </div>
</section>

<!-- Brand strip ============================================ -->
<section class="section-dark">
  <div class="container">
    <?php
      $sh_eyebrow = 'Our partners';
      $sh_heading = 'Brands we build with.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-brands">
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>candlelight.html" title="Candlelight Cabinetry"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Candlelight</span></a>
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>fabuwood.html" title="Fabuwood Cabinetry"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Fabuwood</span></a>
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>homecrest.html" title="Homecrest Cabinetry"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Homecrest</span></a>
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>mercier.html" title="Mercier Wood Flooring"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Mercier</span></a>
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>mirage.html" title="Mirage Flooring"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Mirage</span></a>
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>kahrs.html" title="Kahrs"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Kährs</span></a>
      <a class="pd-brand-tile" href="<?php echo BASEURL; ?>casebella.html" title="Casabella"><span style="color:var(--paradise-cream);font-family:var(--font-display);font-size:1.1rem">Casabella</span></a>
    </div>
  </div>
</section>

<!-- Testimonials ============================================ -->
<section class="section-alt">
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
          ['q' => 'Paradise transformed my kitchen beyond what I thought was possible. They turned my vision into reality with ease and expertise.',          'n' => 'Sarah M.',  'p' => 'Kitchen remodel · Highland Park'],
          ['q' => 'Outstanding job on my countertop. The attention to detail is incredible and it has completely elevated my space.',                          'n' => 'Maria R.',  'p' => 'Countertops · Winnetka'],
          ['q' => 'Helped my parents remodel their kitchen and it came out spectacular. The team was helpful and clear from beginning to end.',                'n' => 'Jenna P.',  'p' => 'Kitchen remodel · Glencoe'],
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

<!-- Service area ============================================ -->
<section>
  <div class="container">
    <?php
      $sh_eyebrow = 'Where we work';
      $sh_heading = 'Built on Chicago\'s North Shore.';
      $sh_description = 'Lake County and northern Cook County. If your town is below, we work there.';
      $sh_centered = true;
      include "includes/components/section_header.php";
    ?>
    <div class="pd-grid pd-grid-4 text-center" style="max-width:880px;margin:0 auto" data-reveal>
      <?php
        $cities = [
          ['n' => 'Lake Forest',    'h' => 'lakeforest.html'],
          ['n' => 'Highland Park',  'h' => 'highland.html'],
          ['n' => 'Winnetka',       'h' => 'winnetka.html'],
          ['n' => 'Glencoe',        'h' => 'chicago.html'],
          ['n' => 'Buffalo Grove',  'h' => 'buffalo_grove.html'],
          ['n' => 'Deerfield',      'h' => 'highland.html'],
          ['n' => 'Northbrook',     'h' => 'chicago.html'],
          ['n' => 'Lake Bluff',     'h' => 'lakeforest.html'],
        ];
        foreach ($cities as $c) {
          echo '<a href="' . BASEURL . $c['h'] . '" class="pd-trust-item" style="padding:1.25rem;border:1px solid var(--paradise-stone-300);text-align:center;display:block;color:var(--paradise-ink-900);transition:all .3s var(--ease-out);background:white;text-transform:none;letter-spacing:0;font-family:var(--font-display);font-size:1.05rem">' . htmlspecialchars($c['n']) . '</a>';
        }
      ?>
    </div>
  </div>
</section>

<?php
  $cta_heading     = "Let's design the kitchen you've been picturing.";
  $cta_subhead     = 'Free consultation. We respond within one business day.';
  $cta_button_text = 'Schedule a consultation';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
