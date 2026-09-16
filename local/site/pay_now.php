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
<title>Pay Now · Paradise Home Design · Lake Forest, IL</title>
<meta name="description" content="Pay an invoice from Paradise Home Design securely online. Credit card payment processing.">
<meta name="robots" content="noindex, nofollow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/2.webp';
  $hero_eyebrow = 'Pay your invoice';
  $hero_title = 'Secure online payment.';
  $hero_description = 'Pay an invoice or deposit by credit card. Encrypted, processed by our secure payment partner.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<section>
  <div class="container" style="max-width:720px">
    <div class="card" style="padding:2.5rem;border:1px solid var(--paradise-stone-300)" data-reveal>
      <span class="eyebrow">Payment</span>
      <h2 style="margin-bottom:1.5rem">Invoice details + card information</h2>
      <form class="pd-form" action="<?php echo $baseurl; ?>paymail.php" method="post">
        <div>
          <label for="pay-amount">Amount to pay (USD)</label>
          <input id="pay-amount" type="text" name="amount" required placeholder="$0.00">
        </div>
        <div>
          <label for="pay-invoice">Invoice number (if known)</label>
          <input id="pay-invoice" type="text" name="invoice" placeholder="Optional">
        </div>
        <hr style="border:none;border-top:1px solid var(--paradise-stone-300);margin:1rem 0">
        <div class="pd-grid pd-grid-2">
          <div>
            <label for="pay-first">First name</label>
            <input id="pay-first" type="text" name="firstname" required autocomplete="given-name">
          </div>
          <div>
            <label for="pay-last">Last name</label>
            <input id="pay-last" type="text" name="lastname" required autocomplete="family-name">
          </div>
        </div>
        <div>
          <label for="pay-email">Email (receipt sent here)</label>
          <input id="pay-email" type="email" name="email" required autocomplete="email">
        </div>
        <hr style="border:none;border-top:1px solid var(--paradise-stone-300);margin:1rem 0">
        <span class="eyebrow">Card information</span>
        <div>
          <label for="pay-cardname">Name on card</label>
          <input id="pay-cardname" type="text" name="nameoncard" required autocomplete="cc-name">
        </div>
        <div>
          <label for="pay-cardnum">Card number</label>
          <input id="pay-cardnum" type="text" name="cardnumber" required autocomplete="cc-number" inputmode="numeric" maxlength="19">
        </div>
        <div class="pd-grid pd-grid-2">
          <div>
            <label for="pay-expiry">Expiration (MM/YY)</label>
            <input id="pay-expiry" type="text" name="expirydate" required autocomplete="cc-exp" placeholder="MM/YY" maxlength="5">
          </div>
          <div>
            <label for="pay-cvc">CVC</label>
            <input id="pay-cvc" type="text" name="cardcvc" required autocomplete="cc-csc" inputmode="numeric" maxlength="4">
          </div>
        </div>
        <hr style="border:none;border-top:1px solid var(--paradise-stone-300);margin:1rem 0">
        <span class="eyebrow">Billing address</span>
        <div>
          <label for="pay-addr">Address</label>
          <input id="pay-addr" type="text" name="address" required autocomplete="street-address">
        </div>
        <div class="pd-grid pd-grid-2">
          <div>
            <label for="pay-country">Country</label>
            <input id="pay-country" type="text" name="country" value="United States" required autocomplete="country-name">
          </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit payment</button>
        <p class="small" style="color:var(--paradise-stone-500);margin-top:1rem">
          Questions about an invoice? Call us at
          <a href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" style="color:var(--paradise-brass-500)"><?php echo htmlspecialchars($phone_raw); ?></a>.
          Card data is sent over HTTPS and processed by our payment partner.
        </p>
      </form>
    </div>
  </div>
</section>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
