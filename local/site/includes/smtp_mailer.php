<?php
/**
 * Self-contained SMTP mailer for Paradise — NO third-party service, NO library.
 * Speaks SMTP directly over an SSL socket to an authenticated mail server
 * (Gmail / Google Workspace), which is the ONLY way mail from this site
 * reliably reaches Gmail: the GoDaddy web server isn't in the domain's SPF,
 * so unauthenticated mail() is dropped. Authenticated SMTP is SPF/DKIM-clean.
 *
 * Credentials live in includes/mail_config.php (kept out of git). Until they're
 * filled in, pd_smtp_send() returns false and the caller falls back.
 */
@include_once __DIR__ . '/mail_config.php';

/**
 * Send an HTML email to one or more recipients via authenticated SMTP.
 * @param array|string $to_list  recipients (array or comma-separated)
 * @return bool true if the server accepted the message
 */
function pd_smtp_send($to_list, $subject, $html) {
  if (!defined('PD_SMTP_USER') || !defined('PD_SMTP_PASS') || PD_SMTP_USER === '' || PD_SMTP_PASS === '') {
    return false; // not configured yet
  }
  $host = defined('PD_SMTP_HOST') ? PD_SMTP_HOST : 'ssl://smtp.gmail.com';
  $port = defined('PD_SMTP_PORT') ? PD_SMTP_PORT : 465;
  $user = PD_SMTP_USER;
  $pass = PD_SMTP_PASS;
  $from_addr  = defined('PD_SMTP_FROM_ADDR') ? PD_SMTP_FROM_ADDR : $user;
  $from_name  = defined('PD_SMTP_FROM_NAME') ? PD_SMTP_FROM_NAME : 'Paradise Website';

  $recips = is_array($to_list) ? $to_list : array_map('trim', explode(',', $to_list));
  $recips = array_filter($recips);
  if (!$recips) return false;

  $ctx = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
  $fp = @stream_socket_client($host . ':' . $port, $errno, $errstr, 15, STREAM_CLIENT_CONNECT, $ctx);
  if (!$fp) return false;
  stream_set_timeout($fp, 15);

  $read = function () use ($fp) {
    $data = '';
    while (($line = fgets($fp, 515)) !== false) {
      $data .= $line;
      if (isset($line[3]) && $line[3] === ' ') break; // last line of reply
    }
    return $data;
  };
  $say = function ($cmd) use ($fp, $read) { fwrite($fp, $cmd . "\r\n"); return $read(); };

  $ok = true;
  $read();                                   // server greeting
  $say('EHLO paradisehomedesigninc.com');
  $say('AUTH LOGIN');
  $say(base64_encode($user));
  $r = $say(base64_encode($pass));
  if (strpos($r, '235') === false) { fclose($fp); return false; } // auth failed

  $r = $say('MAIL FROM:<' . $from_addr . '>');
  if ($r[0] !== '2') { $ok = false; }
  foreach ($recips as $rcpt) { $say('RCPT TO:<' . $rcpt . '>'); }
  $r = $say('DATA');
  if (strpos($r, '354') === false) { fclose($fp); return false; }

  $date = date('r');
  $boundary = 'pdbnd' . substr(md5($subject . $date), 0, 12);
  $msg  = 'Date: ' . $date . "\r\n";
  $msg .= 'From: ' . $from_name . ' <' . $from_addr . ">\r\n";
  $msg .= 'To: ' . implode(', ', $recips) . "\r\n";
  $msg .= 'Subject: ' . $subject . "\r\n";
  $msg .= "MIME-Version: 1.0\r\n";
  $msg .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
  $msg .= "\r\n" . $html . "\r\n.";
  $r = $say($msg);
  if (strpos($r, '250') === false) { $ok = false; }
  $say('QUIT');
  fclose($fp);
  return $ok;
}
