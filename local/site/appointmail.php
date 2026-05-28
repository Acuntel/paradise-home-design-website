<?php
/**
 * Paradise design-consultation form handler.
 *
 * Sends every consultation request to:
 *   - paradisehd400@gmail.com  (Paradise owner inbox)
 *   - bradyschwartz25@gmail.com (Brady, for tracking)
 *   - 8472122142@txt.att.net   (Brady's SMS via AT&T email-to-SMS gateway)
 */
ob_start();

$first       = trim($_POST['firstname']     ?? '');
$last        = trim($_POST['lastname']      ?? '');
$email       = trim($_POST['email']         ?? '');
$phone       = trim($_POST['phone']         ?? '');
$preferred   = trim($_POST['preferredtime'] ?? '');
$helpyou     = trim($_POST['helpyou']       ?? $_POST['services'] ?? '');
$description = trim($_POST['description']   ?? $_POST['comments'] ?? '');

foreach (['first', 'last', 'email', 'phone', 'preferred', 'helpyou'] as $k) {
  $$k = preg_replace('/[\r\n]+/', ' ', $$k);
}
$name = trim($first . ' ' . $last);

$paradise_inbox = 'paradisehd400@gmail.com';
$brady_inbox    = 'bradyschwartz25@gmail.com';
$brady_sms      = '8472122142@txt.att.net';

/* ---------- 1) Full HTML email ---------- */
$emailSubject = 'Paradise CONSULTATION request: ' . ($name ?: 'unknown') . ($helpyou ? ' — ' . $helpyou : '');

$htmlBody = '<h2 style="font-family:sans-serif;background:#B58C45;color:#0E1A11;padding:1rem 1.25rem;margin:0">Paradise – consultation request</h2>
<table style="font-family:sans-serif;font-size:15px;border-collapse:collapse;margin-top:1rem" cellpadding="8">
  <tr><td style="font-weight:bold;width:140px">Name</td><td>' . htmlspecialchars($name) . '</td></tr>
  <tr><td style="font-weight:bold">Email</td><td><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></td></tr>
  <tr><td style="font-weight:bold">Phone</td><td><a href="tel:' . htmlspecialchars($phone) . '">' . htmlspecialchars($phone) . '</a></td></tr>
  <tr><td style="font-weight:bold">Preferred time</td><td>' . htmlspecialchars($preferred) . '</td></tr>
  <tr><td style="font-weight:bold">Project</td><td>' . htmlspecialchars($helpyou) . '</td></tr>
  <tr><td style="font-weight:bold;vertical-align:top">Description</td><td>' . nl2br(htmlspecialchars($description)) . '</td></tr>
  <tr><td style="font-weight:bold">Submitted</td><td>' . date('M j, Y g:i a T') . '</td></tr>
  <tr><td style="font-weight:bold">Source</td><td>paradisehomedesigninc.com /design_consultation</td></tr>
</table>';

$senderAddr = $email && filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'noreply@paradisehomedesigninc.com';
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Paradise Website <noreply@paradisehomedesigninc.com>\r\n";
$headers .= "Reply-To: " . $senderAddr . "\r\n";
$headers .= "Cc: " . $brady_inbox . "\r\n";

mail($paradise_inbox, $emailSubject, $htmlBody, $headers);

/* ---------- 2) SMS to Brady ---------- */
$sms = 'Paradise CONSULTATION: ' . $name . ' / ' . $phone . ($helpyou ? ' / ' . $helpyou : '');
if (strlen($sms) > 155) $sms = substr($sms, 0, 152) . '...';

$smsHeaders  = "MIME-Version: 1.0\r\n";
$smsHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
$smsHeaders .= "From: paradise@paradisehomedesigninc.com\r\n";
mail($brady_sms, 'Paradise consultation', $sms, $smsHeaders);

header('Location: thankyou.html');
exit;
?>
