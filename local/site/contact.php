<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = 'contact';
$baseurl = BASEURL;
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
$email = $contact['Email'] ?? 'paradisehd400@gmail.com';
$address = $contact['Address'] ?? '225 E Deerpath Rd, Unit #80, Lake Forest, IL 60045';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact · Paradise Home Design · Lake Forest, IL</title>
<meta name="description" content="Get in touch with Paradise Home Design. Call (847) 681-9000 or visit our Lake Forest, IL showroom. Free consultation, one-business-day response.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/contact.html" />
<meta property="og:title" content="Contact Paradise Home Design" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/4.png';
  $hero_eyebrow = 'Get in touch';
  $hero_title = "Let's talk about your project.";
  $hero_description = 'Free consultation. We respond within one business day.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<section>
  <div class="container">
    <div class="pd-split" style="align-items:flex-start;gap:4rem">
      <!-- Left: details -->
      <div data-reveal>
        <span class="eyebrow">Visit · Call · Write</span>
        <h2>Lake Forest showroom.</h2>
        <p class="mt-3"><strong>Address</strong><br><?php echo htmlspecialchars($address); ?></p>
        <p class="mt-3"><strong>Phone</strong><br><a href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" style="color:var(--paradise-brass-500);font-family:var(--font-display);font-size:1.5rem"><?php echo htmlspecialchars($phone_raw); ?></a></p>
        <p class="mt-3"><strong>Email</strong><br><a href="mailto:<?php echo htmlspecialchars($email); ?>" style="color:var(--paradise-ink-900);border-bottom:1px solid var(--paradise-brass-500)"><?php echo htmlspecialchars($email); ?></a></p>
        <p class="mt-3"><strong>Hours</strong><br>Monday–Friday · 9am to 5pm<br>Saturday by appointment</p>

        <!-- Static Google Map -->
        <div style="margin-top:2rem">
          <iframe src="https://www.google.com/maps?q=225+E+Deerpath+Rd,+Lake+Forest,+IL+60045&output=embed" width="100%" height="320" style="border:1px solid var(--paradise-stone-300);border-radius:4px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!-- Right: form -->
      <div data-reveal>
        <span class="eyebrow">Send a message</span>
        <h2>Tell us about your project.</h2>
        <p class="mt-2 mb-4">A few details now means a focused conversation when we call.</p>
        <?php include "includes/components/contact_form.php"; ?>
      </div>
    </div>
  </div>
</section>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
