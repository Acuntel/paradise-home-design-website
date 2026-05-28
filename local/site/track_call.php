<?php
/**
 * Call-button click tracker.
 *
 * The Call button on the site pings this endpoint via fetch() right
 * before tel: opens. We send an SMS to Brady so he knows a call is
 * coming in from the website.
 *
 * Endpoint accepts POST (preferred) or GET, with optional ?page=...
 */
header('Content-Type: text/plain; charset=UTF-8');

$page = $_REQUEST['page'] ?? ($_SERVER['HTTP_REFERER'] ?? 'unknown');
$page = preg_replace('/[\r\n]+/', ' ', substr($page, 0, 200));
$source_ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$source_ip = preg_replace('/[\r\n]+/', ' ', $source_ip);
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
$is_mobile = (bool) preg_match('/Android|iPhone|iPad|Mobile/i', $ua);
$device = $is_mobile ? 'mobile' : 'desktop';
$ts = date('M j g:i a');

$brady_sms   = '8472122142@txt.att.net';
$brady_inbox = 'bradyschwartz25@gmail.com';

$sms = 'Paradise CALL: someone tapped Call (' . $device . ') from ' . basename(parse_url($page, PHP_URL_PATH) ?: $page) . ' @ ' . $ts;
if (strlen($sms) > 155) $sms = substr($sms, 0, 152) . '...';

$smsHeaders  = "MIME-Version: 1.0\r\n";
$smsHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
$smsHeaders .= "From: paradise@paradisehomedesigninc.com\r\n";
mail($brady_sms, 'Paradise call', $sms, $smsHeaders);

// Also send full info to Brady's email for archival
$emailBody = "Paradise call button was tapped.\n\n"
  . "Page: $page\n"
  . "Device: $device\n"
  . "IP: $source_ip\n"
  . "User-Agent: $ua\n"
  . "Time: " . date('M j, Y g:i a T') . "\n";

$emailHeaders  = "MIME-Version: 1.0\r\n";
$emailHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
$emailHeaders .= "From: Paradise Website <noreply@paradisehomedesigninc.com>\r\n";
mail($brady_inbox, 'Paradise call button tap', $emailBody, $emailHeaders);

echo 'ok';
?>
