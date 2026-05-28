<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = '';
$baseurl = BASEURL;
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thank You · Paradise Home Design</title>
<meta name="robots" content="noindex, nofollow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<section style="padding-top:8rem">
  <div class="container" style="max-width:680px;text-align:center" data-reveal>
    <span class="eyebrow">Confirmation</span>
    <h1 style="margin-top:.5rem">Thank you. We got your message.</h1>
    <p class="lead mt-3">We respond within one business day, usually faster. Check your email for confirmation (and check spam if you don't see it).</p>
    <p class="mt-3">In a hurry? Call us directly at
      <a href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" style="color:var(--paradise-brass-500);font-family:var(--font-display);font-size:1.5rem"><?php echo htmlspecialchars($phone_raw); ?></a>.
    </p>
    <div class="mt-5" style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-primary" href="<?php echo $baseurl; ?>gallery.html">Browse the gallery</a>
      <a class="btn btn-outline-dark" href="<?php echo $baseurl; ?>">Back to home</a>
    </div>
  </div>
</section>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
