<?php
/**
 * Paradise lead notifier — FREE, no paid service, no API key.
 *
 * Every lead (contact form OR call-button tap) is:
 *   1. Appended to a CSV on the server (permanent backup + spreadsheet),
 *      at leads/leads.csv (folder is protected from public download).
 *   2. Emailed to BOTH bradyschwartz25@gmail.com and paradisehd400@gmail.com
 *      via FormSubmit.co, whose authenticated servers actually reach Gmail
 *      (GoDaddy's built-in mail() gets dropped).
 *
 * FormSubmit alias 02e88bc6db3dda1ad60ea8b7bc98ee9e -> bradyschwartz25@gmail.com
 * (already activated). The alias keeps the raw address out of any source.
 */

if (!defined('PD_FS_ALIAS')) {
  define('PD_FS_ALIAS', '02e88bc6db3dda1ad60ea8b7bc98ee9e'); // -> bradyschwartz25@gmail.com
  define('PD_LEAD_CC', 'paradisehd400@gmail.com');           // Paradise owner inbox (cc)
}

/**
 * Append a lead to leads/leads.csv (creates folder + header if missing).
 */
function pd_log_lead(array $row) {
  $dir = __DIR__ . '/../leads';
  if (!is_dir($dir)) { @mkdir($dir, 0755, true); }
  // Block public download of the data folder.
  $ht = $dir . '/.htaccess';
  if (!file_exists($ht)) { @file_put_contents($ht, "Require all denied\nDeny from all\n"); }
  $file = $dir . '/leads.csv';
  $cols = ['time', 'type', 'name', 'email', 'phone', 'project', 'timeline', 'message', 'page', 'ip'];
  $new = !file_exists($file);
  $fp = @fopen($file, 'a');
  if (!$fp) { return false; }
  if ($new) { fputcsv($fp, $cols); }
  $line = [];
  foreach ($cols as $c) { $line[] = $row[$c] ?? ''; }
  fputcsv($fp, $line);
  fclose($fp);
  return true;
}

/**
 * Customer-uploaded photos/plans go to /uploads (web root) so the link works
 * from an email, but the folder has directory-listing OFF and script execution
 * DENIED, every file gets an UNGUESSABLE name, and ONLY content that actually
 * looks like an image/PDF (verified by magic bytes, not the client's say-so) is
 * ever written — so the folder can't be browsed/guessed and can't host a script.
 *
 * NOTE: this site sits behind the Sucuri WAF, which CORRUPTS multipart/form-data
 * file uploads (it rewrites the parts to `Content-Disposition: attachment`, which
 * scrambles PHP's $_POST). So the live consultation form sends the photo as a
 * base64 string inside a normal url-encoded POST — pd_save_lead_upload_b64().
 * pd_save_lead_upload() (classic $_FILES) is kept for completeness/fallback.
 */

/** Create + harden the /uploads dir. Returns its path, or null on failure. */
function pd__uploads_dir() {
  $dir = __DIR__ . '/../uploads';
  if (!is_dir($dir) && !@mkdir($dir, 0755, true) && !is_dir($dir)) { return null; }
  $ht = $dir . '/.htaccess';
  if (!file_exists($ht)) {
    @file_put_contents($ht,
      "Options -Indexes\n" .
      "<FilesMatch \"\\.(php|php3|php4|php5|php7|phps|phtml|pht|cgi|pl|py|sh|asp|aspx|jsp|htaccess)$\">\n" .
      "  Require all denied\n" .
      "  Deny from all\n" .
      "</FilesMatch>\n");
  }
  return $dir;
}

/** Identify an allowlisted image/PDF from its leading bytes; null if not media. */
function pd__media_ext($bytes) {
  $sig = substr($bytes, 0, 16);
  if (strncmp($sig, "\xFF\xD8\xFF", 3) === 0) { return 'jpg'; }
  if (strncmp($sig, "\x89PNG\r\n\x1a\n", 8) === 0) { return 'png'; }
  if (strncmp($sig, "GIF87a", 6) === 0 || strncmp($sig, "GIF89a", 6) === 0) { return 'gif'; }
  if (strncmp($sig, "%PDF", 4) === 0) { return 'pdf'; }
  if (strncmp($sig, "BM", 2) === 0) { return 'bmp'; }
  if (strncmp(substr($bytes, 0, 4), "RIFF", 4) === 0 && strncmp(substr($bytes, 8, 4), "WEBP", 4) === 0) { return 'webp'; }
  if (strncmp($sig, "II*\x00", 4) === 0 || strncmp($sig, "MM\x00*", 4) === 0) { return 'tif'; }
  if (substr($bytes, 4, 4) === 'ftyp') { // HEIC/HEIF (iPhone)
    if (in_array(substr($bytes, 8, 4), ['heic', 'heix', 'hevc', 'heim', 'heis', 'mif1', 'msf1', 'heif'], true)) { return 'heic'; }
  }
  return null;
}

/** Write verified media bytes to /uploads with an unguessable name. */
function pd__store_media($bytes, $origName) {
  if (!is_string($bytes) || strlen($bytes) < 8 || strlen($bytes) > 45 * 1024 * 1024) { return null; }
  $ext = pd__media_ext($bytes);
  if ($ext === null) { return null; } // not a real image/PDF — refuse
  $dir = pd__uploads_dir();
  if ($dir === null) { return null; }
  try { $rand = bin2hex(random_bytes(10)); }
  catch (Exception $e) { $rand = md5(uniqid('', true)); }
  $stored = date('Ymd-His') . '_' . $rand . '.' . $ext;
  if (@file_put_contents($dir . '/' . $stored, $bytes) === false) { return null; }
  @chmod($dir . '/' . $stored, 0644);
  return [
    'name'   => $origName !== '' ? $origName : $stored,
    'stored' => $stored,
    'url'    => 'https://www.paradisehomedesigninc.com/uploads/' . $stored,
    'size'   => strlen($bytes),
  ];
}

/**
 * Save a photo/plans sent as a base64 string (optionally a `data:` URL) from a
 * url-encoded form post. Returns ['name','stored','url','size'] or null.
 * This is the WAF-safe path the live consultation form uses.
 */
function pd_save_lead_upload_b64($data, $origName = '') {
  $data = (string) $data;
  if ($data === '') { return null; }
  $pos = strpos($data, 'base64,');
  if ($pos !== false) { $data = substr($data, $pos + 7); }
  $data = preg_replace('/\s+/', '', $data); // url-decode can leave spaces for '+'
  $bytes = base64_decode($data, true);
  if ($bytes === false) { return null; }
  return pd__store_media($bytes, trim((string) $origName));
}

/** Classic multipart $_FILES save (kept as a fallback; WAF usually breaks this). */
function pd_save_lead_upload($fileKey = 'attach') {
  if (empty($_FILES[$fileKey]) || !is_array($_FILES[$fileKey])) { return null; }
  $f = $_FILES[$fileKey];
  if (is_array($f['name'] ?? null)) { return null; }
  if (($f['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) { return null; }
  if (empty($f['tmp_name']) || !is_uploaded_file($f['tmp_name'])) { return null; }
  $size = (int) ($f['size'] ?? 0);
  if ($size <= 0 || $size > 45 * 1024 * 1024) { return null; }
  $bytes = @file_get_contents($f['tmp_name']);
  if ($bytes === false) { return null; }
  return pd__store_media($bytes, trim((string) ($f['name'] ?? '')));
}

/**
 * Lightweight file-based rate limiter (no DB — works on GoDaddy shared hosting).
 * Returns TRUE if $bucket is already AT/OVER $max hits within the last $window
 * seconds (caller should then throttle). A non-blocked call records the hit.
 * Fails OPEN (returns false) if the filesystem is unavailable, so a storage
 * glitch can never block a real customer.
 *
 *   pd_rate_limited('ip10:'.$ip, 3, 600)   // 3 hits per 10 min for this IP
 */
function pd_rate_limited($bucket, $max, $window) {
  $dir = __DIR__ . '/../leads/rl';
  if (!is_dir($dir)) {
    if (!@mkdir($dir, 0755, true) && !is_dir($dir)) { return false; } // fail open
    @file_put_contents($dir . '/.htaccess', "Require all denied\nDeny from all\n");
  }
  // Occasional garbage-collection of stale counter files (older than 2h).
  if (mt_rand(1, 50) === 1) {
    foreach (@glob($dir . '/*.txt') ?: array() as $old) {
      if (@filemtime($old) < time() - 7200) { @unlink($old); }
    }
  }
  $file = $dir . '/' . md5($bucket) . '.txt';
  $now  = time();
  $fp = @fopen($file, 'c+');
  if (!$fp) { return false; } // fail open
  @flock($fp, LOCK_EX);
  $hits = array();
  foreach (explode(',', trim((string) stream_get_contents($fp))) as $t) {
    $t = (int) $t;
    if ($t > $now - $window) { $hits[] = $t; }
  }
  $over = count($hits) >= $max;
  if (!$over) { $hits[] = $now; }
  @ftruncate($fp, 0);
  @rewind($fp);
  @fwrite($fp, implode(',', $hits));
  @flock($fp, LOCK_UN);
  @fclose($fp);
  return $over;
}

/**
 * Should this lead EMAIL be throttled? Protects the inbox from one source
 * hammering: max 3 emails / 10 min and 8 / hour per IP. Returns true to throttle.
 * (Callers still log every lead to the CSV/dashboard — the inbox is what we cap.)
 */
function pd_lead_email_throttled() {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
  $ip = trim(explode(',', (string) $ip)[0]);
  if ($ip === '') { $ip = 'unknown'; }
  return pd_rate_limited('ip10:' . $ip, 3, 600)
      || pd_rate_limited('ip60:' . $ip, 8, 3600);
}

/**
 * Hard flood cap: in a genuine attack (more than $max submits/hour SITE-WIDE)
 * drop the request entirely — no CSV row, no email — to protect both the inbox
 * and the leads.csv file from bloat. Real volume is a few leads/day, so this
 * only ever trips under a flood. Returns true if the request should be dropped.
 */
function pd_lead_flood($max = 120) {
  return pd_rate_limited('flood', $max, 3600);
}

/**
 * Email the lead to Brady + Paradise.
 * Primary: our own authenticated SMTP mailer (includes/smtp_mailer.php) once
 * mail_config.php has credentials. Fallback: FormSubmit (free relay).
 * Returns true if either path succeeds.
 */
function pd_send_lead_email($subject, array $fields) {
  // --- Primary: self-hosted authenticated SMTP (no third party) ---
  require_once __DIR__ . '/smtp_mailer.php';
  $rows = '';
  foreach ($fields as $k => $v) {
    if ($v === '' || $v === null) continue;
    $rows .= '<tr><td style="font-weight:bold;background:#faf8f2;padding:8px 10px;border:1px solid #e3ded3">'
      . htmlspecialchars($k) . '</td><td style="padding:8px 10px;border:1px solid #e3ded3">'
      . nl2br(htmlspecialchars($v)) . '</td></tr>';
  }
  $html = '<div style="font-family:Arial,sans-serif;max-width:560px">'
    . '<h2 style="background:#1C2A1F;color:#FBF8F1;padding:14px 18px;margin:0">' . htmlspecialchars($subject) . '</h2>'
    . '<table style="border-collapse:collapse;width:100%;font-size:15px">' . $rows . '</table></div>';
  $recipients = ['bradyschwartz25@gmail.com', PD_LEAD_CC];
  if (pd_smtp_send($recipients, $subject, $html)) {
    return true;
  }

  // --- Fallback: FormSubmit relay (used until SMTP creds are set / if SMTP fails) ---
  $payload = array_merge([
    '_subject'  => $subject,
    '_template' => 'table',
    '_captcha'  => 'false',
    '_cc'       => PD_LEAD_CC,
  ], $fields);

  $url = 'https://formsubmit.co/ajax/' . PD_FS_ALIAS;
  $headers = [
    'Content-Type: application/json',
    'Accept: application/json',
    'Origin: https://www.paradisehomedesigninc.com',
    'Referer: https://www.paradisehomedesigninc.com/contact.html',
  ];
  $body = json_encode($payload);

  // Prefer cURL; fall back to stream context if cURL is unavailable.
  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST           => true,
      CURLOPT_HTTPHEADER     => $headers,
      CURLOPT_POSTFIELDS     => $body,
      CURLOPT_TIMEOUT        => 20,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_SSL_VERIFYHOST => 0,
    ]);
    $resp = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $code >= 200 && $code < 300;
  }

  $ctx = stream_context_create(['http' => [
    'method'  => 'POST',
    'header'  => implode("\r\n", $headers),
    'content' => $body,
    'timeout' => 20,
  ], 'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
  $resp = @file_get_contents($url, false, $ctx);
  return $resp !== false;
}
