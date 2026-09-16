<?php
/**
 * Paradise design-consultation form handler (posts from design_consultation.php).
 *
 * Mirrors contactmail.php on purpose: EVERY lead is (1) backed up to leads/leads.csv
 * (the dashboard + spreadsheet) and (2) emailed to Brady + Paradise via the shared
 * notifier (FormSubmit/HTTP relay) — NOT raw mail(), which GoDaddy sends unauthenticated
 * and Gmail silently drops (no SPF/DKIM). That mail() path is exactly why earlier
 * consultation requests arrived blank / never arrived at all.
 */
ob_start();
require_once __DIR__ . '/includes/lead_notify.php';

$ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';

// ---- Oversized-upload guard ----
// If a POST arrived but PHP wiped $_POST/$_FILES because the body exceeded
// post_max_size (a visitor attaching a big photo/PDF), every field is blank.
// Record a flagged row so the attempt is VISIBLE in the dashboard instead of
// arriving as a silent blank "unknown" email we can never follow up on.
$is_post     = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
$content_len = (int) ($_SERVER['CONTENT_LENGTH'] ?? 0);
if ($is_post && empty($_POST) && $content_len > 0) {
  pd_log_lead([
    'time' => date('Y-m-d H:i:s T'),
    'type' => 'Design consultation (UPLOAD TOO LARGE — fields lost)',
    'name' => '', 'email' => '', 'phone' => '', 'project' => '', 'timeline' => '',
    'message' => 'Submission body (' . $content_len . ' bytes) exceeded the server upload limit, '
               . 'so PHP discarded all fields. Visitor likely attached a large photo/PDF and could '
               . 'not be captured — they should resubmit with a smaller file or email photos separately.',
    'page' => 'design_consultation', 'ip' => $ip,
  ]);
  header('Location: thankyou.html');
  exit;
}

$first       = trim($_POST['firstname']     ?? '');
$last        = trim($_POST['lastname']      ?? '');
$email       = trim($_POST['email']         ?? '');
$phone       = trim($_POST['phone']         ?? '');
$preferred   = trim($_POST['preferredtime'] ?? '');
$helpyou     = trim($_POST['helpyou']       ?? $_POST['services'] ?? '');
$description = trim($_POST['description']    ?? $_POST['comments'] ?? '');

foreach (['first', 'last', 'email', 'phone', 'preferred', 'helpyou'] as $k) {
  $$k = preg_replace('/[\r\n]+/', ' ', $$k);
}
$name = trim($first . ' ' . $last);

// ---- Bot / spam guard ----
// Honeypot: real users never fill the hidden _gotcha field; bots do.
if (!empty($_POST['_gotcha'])) { header('Location: thankyou.html'); exit; }
// The real form always carries this shared secret; empty bot POSTs to this
// endpoint don't, which is what produced the blank "unknown" emails.
if (($_POST['captcha'] ?? '') !== 'paradise2024') { header('Location: thankyou.html'); exit; }
// Require a name AND at least one way to reach them, so the owner never gets a
// blank lead they can't call or text.
if ($name === '' || ($email === '' && $phone === '')) { header('Location: thankyou.html'); exit; }

// ---- Rate limiting ----
if (pd_lead_flood()) { header('Location: thankyou.html'); exit; }
$skip_email = pd_lead_email_throttled();

// Save any uploaded photo / plans to a protected web folder and get a link.
// The form sends the photo as base64 in a url-encoded post (the Sucuri WAF
// corrupts multipart file uploads); $_FILES is a legacy fallback. Photos are
// strictly best-effort — a missing/oversized/bad photo never blocks the lead.
$upload = null;
if (!empty($_POST['attach_b64'])) {
  $upload = pd_save_lead_upload_b64($_POST['attach_b64'], $_POST['attach_name'] ?? '');
} elseif (!empty($_FILES['attach']['name'])) {
  $upload = pd_save_lead_upload('attach');
}
$attach_name = $upload['name'] ?? trim((string) ($_POST['attach_name'] ?? ($_FILES['attach']['name'] ?? '')));
$attach_url  = $upload['url']  ?? '';
if ($attach_url) {
  $attach_note = "  |  Photo/plans: " . $attach_name . " — " . $attach_url;
} elseif ($attach_name) {
  $attach_note = "  |  Attachment '" . $attach_name . "' was NOT saved (unsupported type or over the size limit)";
} else {
  $attach_note = '';
}

// 1) Permanent backup to CSV (dashboard + spreadsheet)
pd_log_lead([
  'time' => date('Y-m-d H:i:s T'), 'type' => 'Design consultation',
  'name' => $name, 'email' => $email, 'phone' => $phone,
  'project' => $helpyou, 'timeline' => $preferred,
  'message' => $description . $attach_note,
  'page' => 'design_consultation', 'ip' => $ip,
]);

// 2) Reliable email to Brady + Paradise (same delivery path as the contact form)
if (!$skip_email) {
  $fields = [
    'Lead type'      => 'Design consultation',
    'Name'           => $name,
    'Email'          => $email,
    'Phone'          => $phone,
    'Preferred time' => $preferred,
    'Project'        => $helpyou,
    'Description'    => $description,
    'Submitted'      => date('M j, Y g:i a T'),
    'Source'         => 'paradisehomedesigninc.com/design_consultation',
  ];
  if ($attach_url) {
    $fields['Photo / plans'] = $attach_name . ' — ' . $attach_url;
  } elseif ($attach_name) {
    $fields['Photo / plans'] = $attach_name . ' (not saved — unsupported type or too large)';
  }
  pd_send_lead_email(
    'Paradise consultation request: ' . ($name ?: 'unknown') . ($helpyou ? ' — ' . $helpyou : ''),
    $fields
  );
}

// 3) Best-effort SMS to Brady (AT&T email-to-SMS gateway — unreliable, never relied on).
$sms = 'Paradise CONSULT: ' . $name . ' / ' . ($phone ?: $email) . ($helpyou ? ' / ' . $helpyou : '');
if (strlen($sms) > 155) { $sms = substr($sms, 0, 152) . '...'; }
@mail('8472122142@txt.att.net', 'Paradise consultation', $sms,
  "From: paradise@paradisehomedesigninc.com\r\nContent-Type: text/plain; charset=UTF-8\r\n");

header('Location: thankyou.html');
exit;
?>
