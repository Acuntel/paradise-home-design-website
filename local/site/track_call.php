<?php
/**
 * Call tracker — now captures the visitor's NAME + PHONE + ADDRESS from the
 * pre-call form (so we can actually call them back) and still handles a bare
 * tap (direct-dial fallback / JS off). Emails Brady + Paradise via FormSubmit
 * and logs every lead to leads/leads.csv. No SMS.
 */
require_once __DIR__ . '/includes/lead_notify.php';
header('Content-Type: text/plain; charset=UTF-8');

// Honeypot — bots fill the hidden _gotcha field; drop them silently.
if (!empty($_REQUEST['_gotcha'])) { echo 'ok'; exit; }

// ---- Rate limiting ----
// Flood cap: a real attack (>120 hits/hr site-wide) is dropped entirely.
if (pd_lead_flood()) { echo 'ok'; exit; }
// Per-IP throttle on the EMAIL only — the CSV/dashboard still records every tap.
$skip_email = pd_lead_email_throttled();

$clean = function ($v, $max = 200) {
  return trim(preg_replace('/[\r\n]+/', ' ', substr((string) $v, 0, $max)));
};

$page   = $clean($_REQUEST['page'] ?? ($_SERVER['HTTP_REFERER'] ?? 'unknown'));
$ip     = $clean($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown', 100);
$ua     = $_SERVER['HTTP_USER_AGENT'] ?? '';
$device = preg_match('/Android|iPhone|iPad|Mobile/i', $ua) ? 'mobile' : 'desktop';

$name    = $clean($_REQUEST['name'] ?? '', 120);
$phone   = $clean($_REQUEST['phone'] ?? '', 40);
$address = $clean($_REQUEST['address'] ?? '', 200);
$project = $clean($_REQUEST['project'] ?? '', 120);

if ($name !== '' || $phone !== '') {
  // Pre-call form submission — we have a real, callable lead.
  $msg = 'Call request' . ($address !== '' ? ' • Address: ' . $address : '') . ' (' . $device . ')';
  pd_log_lead([
    'time' => date('Y-m-d H:i:s T'), 'type' => 'Call request',
    'name' => $name, 'email' => '', 'phone' => $phone,
    'project' => $project, 'timeline' => '', 'message' => $msg,
    'page' => $page, 'ip' => $ip,
  ]);
  if (!$skip_email) {
    pd_send_lead_email(
      'Call request from ' . ($name !== '' ? $name : 'website visitor') . ($phone !== '' ? ' - ' . $phone : ''),
      [
        'Lead type'         => 'Call request (pre-call form)',
        'Name'              => $name,
        'Phone'             => $phone,
        'Project address'   => $address,
        'Project'           => $project,
        'Call them back at' => $phone !== '' ? $phone : '(no number given)',
        'From page'         => $page,
        'Device'            => $device,
        'IP'                => $ip,
        'Time'              => date('M j, Y g:i a T'),
      ]
    );
  }
} else {
  // Bare tap: no name and no phone. This is now rare for real visitors — every
  // phone link routes through the capture modal first — so an empty hit is almost
  // always a crawler/scanner probing this endpoint directly (Bingbot et al. were
  // generating nameless "unknown" alerts). Such probes arrive with NO `page` param
  // and NO same-site referer; drop them outright — no CSV row, no email.
  $ref       = $_SERVER['HTTP_REFERER'] ?? '';
  $real_page = isset($_REQUEST['page']) && trim((string) $_REQUEST['page']) !== '';
  $same_site = $ref !== '' && stripos($ref, 'paradisehomedesigninc.com') !== false;
  if (!$real_page && !$same_site) { echo 'ok'; exit; } // bot probe — ignore silently

  // A genuine visitor tapped Call but didn't leave a name/number. Record it for the
  // dashboard, but DON'T email — a nameless tap has nothing to follow up on, and
  // those alerts only added noise to the inbox.
  pd_log_lead([
    'time' => date('Y-m-d H:i:s T'), 'type' => 'Call button',
    'name' => '', 'email' => '', 'phone' => '',
    'project' => '', 'timeline' => '', 'message' => 'Tapped Call, no details given (' . $device . ')',
    'page' => $page, 'ip' => $ip,
  ]);
}

echo 'ok';
