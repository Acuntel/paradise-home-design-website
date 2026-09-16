<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = '';
$baseurl = BASEURL;
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Page Not Found · Paradise Home Design</title>
<meta name="robots" content="noindex, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<section style="padding-top:8rem;padding-bottom:5rem">
  <div class="container" style="max-width:680px;text-align:center" data-reveal>
    <span class="eyebrow">404</span>
    <h1 style="margin-top:.5rem">We couldn't find that page.</h1>
    <p class="lead mt-3">The page may have moved. Here's where most people are headed:</p>
    <div class="mt-4" style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-primary" href="<?php echo $baseurl; ?>kitchens.html">Kitchens</a>
      <a class="btn btn-outline-dark" href="<?php echo $baseurl; ?>bathrooms.html">Bathrooms</a>
      <a class="btn btn-outline-dark" href="<?php echo $baseurl; ?>gallery.html">Gallery</a>
      <a class="btn btn-outline-dark" href="<?php echo $baseurl; ?>contact.html">Contact</a>
    </div>
    <p class="mt-5">Or call us at
      <a href="tel:+18476819000" style="color:var(--paradise-brass-500);font-family:var(--font-display);font-size:1.5rem">(847) 681-9000</a>.
    </p>
  </div>
</section>

<?php include_once("includes/components/site_footer.php"); ?>
</body>
</html>
