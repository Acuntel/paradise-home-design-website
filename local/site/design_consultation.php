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
<title>Free Design Consultation · Paradise Home Design · Lake Forest, IL</title>
<meta name="description" content="Schedule a free design consultation with Paradise Home Design. In-home or showroom. Lake Forest based, serving Chicago's North Shore.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/design_consultation.html" />
<meta property="og:title" content="Free Design Consultation, Paradise Home Design" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/5.webp';
  $hero_eyebrow = 'Free design consultation';
  $hero_title = 'A conversation, not a sales pitch.';
  $hero_description = 'We come to your home or you come to the showroom. Either way, no charge, no obligation.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<section>
  <div class="container">
    <div class="pd-split" style="align-items:flex-start;gap:4rem">
      <!-- Left: what to expect -->
      <div data-reveal>
        <span class="eyebrow">What happens next</span>
        <h2>Here's the flow.</h2>
        <p class="mt-3"><strong>1. Submit this form.</strong><br>Tell us a bit about the space and what you want.</p>
        <p class="mt-3"><strong>2. We respond within one business day.</strong><br>To confirm a time. Email or phone, your choice.</p>
        <p class="mt-3"><strong>3. The consultation.</strong><br>45 to 60 minutes. We see the space, hear what you want, talk budget and scope.</p>
        <p class="mt-3"><strong>4. You get a proposal.</strong><br>Within a week. Written scope, line-item budget, timeline.</p>
        <p class="mt-3"><strong>5. Decide whenever.</strong><br>No high-pressure follow-up. We're available when you're ready.</p>
        <p class="mt-4"><strong>Prefer to call?</strong><br><a href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" style="color:var(--paradise-brass-500);font-family:var(--font-display);font-size:1.5rem"><?php echo htmlspecialchars($phone_raw); ?></a></p>
      </div>

      <!-- Right: form -->
      <div data-reveal>
        <span class="eyebrow">Book a consultation</span>
        <h2>Tell us about your project.</h2>
        <form id="dc-form" class="pd-form mt-3" action="<?php echo $baseurl; ?>appointmail.php" method="post">
          <!-- Honeypot: hidden from humans; bots fill it and get rejected. -->
          <input type="text" name="_gotcha" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
          <div class="pd-grid pd-grid-2">
            <div>
              <label for="dc-first">First name</label>
              <input id="dc-first" type="text" name="firstname" required autocomplete="given-name">
            </div>
            <div>
              <label for="dc-last">Last name</label>
              <input id="dc-last" type="text" name="lastname" required autocomplete="family-name">
            </div>
          </div>
          <div class="pd-grid pd-grid-2">
            <div>
              <label for="dc-email">Email</label>
              <input id="dc-email" type="email" name="email" required autocomplete="email">
            </div>
            <div>
              <label for="dc-phone">Phone</label>
              <input id="dc-phone" type="tel" name="phone" required autocomplete="tel">
            </div>
          </div>
          <div>
            <label for="dc-time">Preferred time to be reached</label>
            <select id="dc-time" name="preferredtime">
              <option value="">Select...</option>
              <option>Morning (9am to 12pm)</option>
              <option>Afternoon (12pm to 5pm)</option>
              <option>Evening (5pm to 7pm)</option>
            </select>
          </div>
          <div>
            <label for="dc-help">What can we help you with?</label>
            <select id="dc-help" name="helpyou">
              <option value="">Select...</option>
              <option>Kitchen remodel</option>
              <option>Bathroom remodel</option>
              <option>Countertops only</option>
              <option>Full-home interior</option>
              <option>Cabinetry refresh</option>
              <option>Other</option>
            </select>
          </div>
          <div>
            <label for="dc-desc">Project description</label>
            <textarea id="dc-desc" name="description" rows="4" placeholder="Rooms, rough timeline, anything specific..."></textarea>
          </div>
          <div>
            <label for="dc-attach">Photos or plans (optional, up to 12&nbsp;MB)</label>
            <!-- No `name`: the file never posts directly. The Sucuri WAF corrupts
                 multipart uploads, so JS reads it and sends it as base64 text below. -->
            <input id="dc-attach" type="file" accept="image/*,application/pdf" style="border:none;padding:0">
            <p id="dc-attach-msg" class="small" style="color:var(--paradise-stone-500);margin-top:.35rem;display:none"></p>
          </div>
          <input type="hidden" name="captcha" value="paradise2024">
          <input type="hidden" name="attach_name" id="dc-attach-name">
          <input type="hidden" name="attach_b64" id="dc-attach-b64">
          <button class="btn btn-primary" type="submit" id="dc-submit">Request consultation</button>
          <p class="small" style="color:var(--paradise-stone-500);margin-top:.5rem">No spam. No high-pressure follow-up. We respond within one business day.</p>
        </form>
        <script>
        (function(){
          var form = document.getElementById('dc-form');
          var file = document.getElementById('dc-attach');
          var nameF = document.getElementById('dc-attach-name');
          var b64F = document.getElementById('dc-attach-b64');
          var msg = document.getElementById('dc-attach-msg');
          var btn = document.getElementById('dc-submit');
          if (!form || !file) { return; }
          var MAX = 12 * 1024 * 1024;       // 12 MB cap (base64 stays well under the 64M post limit)
          var note = function(t){ if (msg){ msg.textContent = t; msg.style.display = t ? 'block' : 'none'; } };
          file.addEventListener('change', function(){
            b64F.value = ''; nameF.value = '';
            var f = file.files && file.files[0];
            if (f && f.size > MAX) { note('That file is over 12 MB — submit your request and we’ll ask for photos by email.'); }
            else { note(f ? ('Attached: ' + f.name) : ''); }
          });
          form.addEventListener('submit', function(e){
            var f = file.files && file.files[0];
            // Nothing to attach, too big, or already encoded -> submit as normal text.
            if (!f || f.size > MAX || b64F.value) { return; }
            e.preventDefault();
            btn.disabled = true; var label = btn.textContent; btn.textContent = 'Uploading photo…';
            var done = function(){ btn.disabled = false; btn.textContent = label; form.submit(); };
            try {
              var reader = new FileReader();
              reader.onload = function(){ b64F.value = reader.result || ''; nameF.value = f.name; done(); };
              reader.onerror = function(){ b64F.value = ''; nameF.value = ''; done(); }; // photo failed -> still send the lead
              reader.readAsDataURL(f);
            } catch (err) { b64F.value = ''; nameF.value = ''; done(); }
          });
        })();
        </script>
      </div>
    </div>
  </div>
</section>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
