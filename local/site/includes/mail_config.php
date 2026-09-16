<?php
/**
 * SMTP credentials for the lead mailer (used by includes/smtp_mailer.php).
 *
 * Use a Gmail / Google Workspace APP PASSWORD (NOT the normal password):
 *   1. Sign in to the Google account you want to send FROM
 *      (e.g. bradyschwartz25@gmail.com, or a leads@paradisehomedesigninc.com
 *       Workspace mailbox — the domain is on Google Workspace).
 *   2. myaccount.google.com → Security → 2-Step Verification (turn ON if off)
 *      → App passwords → create one named "Paradise site". You get a 16-char code.
 *   3. Put the account address + that 16-char code below (remove the spaces).
 *
 * That's the only thing email authentication requires. Once filled, every form
 * submission and call instantly emails Brady + Paradise, reliably.
 */
define('PD_SMTP_HOST', 'ssl://smtp.gmail.com');
define('PD_SMTP_PORT', 465);
define('PD_SMTP_USER', '');   // removed exposed creds — SMTP is blocked on GoDaddy; use HTTP API instead
define('PD_SMTP_PASS', '');            // REVOKE the old app password in Google account
// Gmail only lets you send AS the authenticated account, so From = that account.
define('PD_SMTP_FROM_ADDR', 'bradyschwartz25@gmail.com');
define('PD_SMTP_FROM_NAME', 'Paradise Website Leads');
