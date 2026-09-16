<?php
/**
 * Paradise contact form handler — EMAIL ONLY (via FormSubmit) + CSV backup.
 * Emails bradyschwartz25@gmail.com AND paradisehd400@gmail.com on every lead,
 * and logs it to leads/leads.csv. No SMS.
 */
ob_start();
require_once __DIR__ . '/includes/lead_notify.php';

$name     = trim($_POST['name']         ?? $_POST['fullname'] ?? '');
$email    = trim($_POST['email']        ?? '');
$phone    = trim($_POST['phone']        ?? '');
$project  = trim($_POST['project_type'] ?? $_POST['subjects'] ?? '');
$timeline = trim($_POST['timeline']     ?? '');
$comments = trim($_POST['comments']     ?? $_POST['message'] ?? '');

foreach (['name', 'email', 'phone', 'project', 'timeline'] as $k) {
  $$k = preg_replace('/[\r\n]+/', ' ', $$k);
}

$ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';

// ---- Bot / spam guard ----
// Honeypot: real users never fill the hidden _gotcha field; bots do.
if (!empty($_POST['_gotcha'])) { header('Location: thankyou.html'); exit; }
// Require a name AND at least one way to reach them. Empty/garbage = bot; drop it
// entirely (no email, no CSV) so the owner never gets blank "unknown" leads.
if ($name === '' || ($email === '' && $phone === '')) { header('Location: thankyou.html'); exit; }

// ---- Rate limiting ----
// Flood cap: a real attack (>120 submits/hr site-wide) is dropped entirely.
if (pd_lead_flood()) { header('Location: thankyou.html'); exit; }
// Per-IP throttle on the EMAIL only — the CSV/dashboard still records every lead.
$skip_email = pd_lead_email_throttled();

// 1) Permanent backup to CSV
pd_log_lead([
  'time' => date('Y-m-d H:i:s T'), 'type' => 'Contact form',
  'name' => $name, 'email' => $email, 'phone' => $phone,
  'project' => $project, 'timeline' => $timeline, 'message' => $comments,
  'page' => 'contact', 'ip' => $ip,
]);

// 2) Email both inboxes via FormSubmit (unless this IP is over its email rate)
if (!$skip_email) {
  pd_send_lead_email('New website lead: ' . ($name ?: 'unknown') . ($project ? ' — ' . $project : ''), [
    'Lead type' => 'Contact form submission',
    'Name'      => $name,
    'Email'     => $email,
    'Phone'     => $phone,
    'Project'   => $project,
    'Timeline'  => $timeline,
    'Message'   => $comments,
    'Submitted' => date('M j, Y g:i a T'),
    'Source'    => 'paradisehomedesigninc.com/contact',
  ]);
}

header('Location: thankyou.html');
exit;
?>
