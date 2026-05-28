<?php
/**
 * Paradise contact form handler.
 *
 * Sends every lead to:
 *   - paradisehd400@gmail.com  (Paradise owner inbox)
 *   - bradyschwartz25@gmail.com (Brady, for tracking)
 *   - 8472122142@txt.att.net   (Brady's SMS via AT&T email-to-SMS gateway)
 */
ob_start();

$name        = trim($_POST['name']      ?? $_POST['fullname'] ?? '');
$email       = trim($_POST['email']     ?? '');
$phone       = trim($_POST['phone']     ?? '');
$project     = trim($_POST['project_type'] ?? $_POST['subjects'] ?? '');
$timeline    = trim($_POST['timeline']  ?? '');
$comments    = trim($_POST['comments']  ?? $_POST['message'] ?? '');

// Strip any header-injection attempts
foreach (['name', 'email', 'phone', 'project', 'timeline'] as $k) {
  $$k = preg_replace('/[\r\n]+/', ' ', $$k);
}

$paradise_inbox = 'paradisehd400@gmail.com';
$brady_inbox    = 'bradyschwartz25@gmail.com';
$brady_sms      = '8472122142@txt.att.net'; // AT&T email-to-SMS

/* ---------- 1) Full HTML email to Paradise + Brady ---------- */
$emailSubject = 'Paradise lead: ' . ($name ?: 'unknown') . ($project ? ' — ' . $project : '');

$htmlBody = '<h2 style="font-family:sans-serif;background:#1C2A1F;color:#FBF8F1;padding:1rem 1.25rem;margin:0">Paradise Home Design – new lead</h2>
<table style="font-family:sans-serif;font-size:15px;border-collapse:collapse;margin-top:1rem" cellpadding="8">
  <tr><td style="font-weight:bold;width:140px">Name</td><td>' . htmlspecialchars($name) . '</td></tr>
  <tr><td style="font-weight:bold">Email</td><td><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></td></tr>
  <tr><td style="font-weight:bold">Phone</td><td><a href="tel:' . htmlspecialchars($phone) . '">' . htmlspecialchars($phone) . '</a></td></tr>
  <tr><td style="font-weight:bold">Project type</td><td>' . htmlspecialchars($project) . '</td></tr>
  <tr><td style="font-weight:bold">Timeline</td><td>' . htmlspecialchars($timeline) . '</td></tr>
  <tr><td style="font-weight:bold;vertical-align:top">Message</td><td>' . nl2br(htmlspecialchars($comments)) . '</td></tr>
  <tr><td style="font-weight:bold">Submitted</td><td>' . date('M j, Y g:i a T') . '</td></tr>
  <tr><td style="font-weight:bold">Source</td><td>paradisehomedesigninc.com /contact</td></tr>
</table>';

$senderAddr = $email && filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'noreply@paradisehomedesigninc.com';
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Paradise Website <noreply@paradisehomedesigninc.com>\r\n";
$headers .= "Reply-To: " . $senderAddr . "\r\n";
$headers .= "Cc: " . $brady_inbox . "\r\n";

mail($paradise_inbox, $emailSubject, $htmlBody, $headers);

/* ---------- 2) Short SMS to Brady (160 char limit) ---------- */
$sms = 'Paradise lead: ' . $name . ' / ' . $phone . ($project ? ' / ' . $project : '');
if (strlen($sms) > 155) $sms = substr($sms, 0, 152) . '...';

$smsHeaders  = "MIME-Version: 1.0\r\n";
$smsHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
$smsHeaders .= "From: paradise@paradisehomedesigninc.com\r\n";
mail($brady_sms, 'Paradise lead', $sms, $smsHeaders);

header('Location: thankyou.html');
exit;
?>
