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
<title>About · 38 Years on the North Shore · Paradise Home Design</title>
<meta name="description" content="Paradise Home Design has been designing and remodeling kitchens, bathrooms, and homes on Chicago's North Shore since 1986. Lake Forest based, owner-led.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/about.html" />
<meta property="og:title" content="About Paradise Home Design" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com<?php echo $baseurl; ?>flash/big/5.png" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/5.png';
  $hero_eyebrow = 'About Paradise';
  $hero_title = '38 years designing the North Shore\'s most thoughtful kitchens.';
  $hero_description = '';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<!-- Story -->
<section>
  <div class="container" style="max-width:780px">
    <div data-reveal>
      <span class="eyebrow">Origin</span>
      <h2>A family business that grew up with the towns it serves.</h2>
      <p class="lead">Paradise Home Design started in 1986 with a single sketch table and a shop full of cabinet samples in Lake Forest. We've never moved. Same address, same approach.</p>
      <p>For 38 years we've worked one project at a time, in one slice of one metropolitan area. We know the housing stock on the North Shore better than anyone, the 1920s Tudors in East Lake Forest, the mid-century ranches in Highland Park, the lakefront moderns in Winnetka. Every floor plan, every load path, every winter quirk.</p>
    </div>

    <div class="mt-5" data-reveal>
      <span class="eyebrow">Approach</span>
      <h2>Design and build under one roof.</h2>
      <p>We're a design-build firm, not a "design firm" that sketches and hands off, or a "contractor" that builds whatever you give them. We do both, which means the person sketching your kitchen also knows what it costs to build. No surprise overruns at the end.</p>
      <p>Every project is run by the owner from first sketch to final reveal. You don't get handed to a junior. You don't get a different project manager halfway through. One number to call.</p>
    </div>

    <div class="mt-5" data-reveal>
      <span class="eyebrow">The shop</span>
      <h2>Showroom + design studio in Lake Forest.</h2>
      <p>Stop by 225 East Deerpath Road and you'll find cabinet samples from every line we carry, slab counters propped against the wall, hardwood floor planks fanned out by species, and at least one project sketch on the table.</p>
      <p>Saturday visits by appointment. Coffee available.</p>
    </div>
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
