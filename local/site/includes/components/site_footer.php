<?php
/**
 * Paradise Home Design — Footer.
 * Requires $contact, $social (from includes/config.php).
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
$year = date('Y');
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
$email = $contact['Email'] ?? 'paradisehd400@gmail.com';
$address = $contact['Address'] ?? '225 E Deerpath Rd, Unit #80, Lake Forest, IL 60045';
?>

<footer class="pd-footer">
  <div class="container">
    <div class="pd-footer-grid">
      <div>
        <div class="pd-nav-logo" style="margin-bottom:1.25rem">
          <img src="<?php echo $baseurl; ?>assets/img/logo.png" alt="Paradise Home Design" style="height:48px">
        </div>
        <p style="color:rgba(251,248,241,.75);max-width:300px;font-size:.95rem;line-height:1.6">
          Design-build kitchen, bathroom, and full-home remodeling on Chicago's North Shore since 1986.
        </p>
        <div class="pd-social mt-3">
          <?php if (!empty($social['facebook'])): ?>
          <a href="<?php echo htmlspecialchars($social['facebook']); ?>" aria-label="Facebook" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (!empty($social['instagram'])): ?>
          <a href="<?php echo htmlspecialchars($social['instagram']); ?>" aria-label="Instagram" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="4"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
          </a>
          <?php endif; ?>
          <?php if (!empty($social['youtube'])): ?>
          <a href="<?php echo htmlspecialchars($social['youtube']); ?>" aria-label="YouTube" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2 31 31 0 000 12a31 31 0 00.5 5.8 3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1A31 31 0 0024 12a31 31 0 00-.5-5.8zM9.5 15.5v-7l6.3 3.5-6.3 3.5z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (!empty($social['tiktok'])): ?>
          <a href="<?php echo htmlspecialchars($social['tiktok']); ?>" aria-label="TikTok" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16 3v3a5 5 0 005 5v3a8 8 0 01-5-1.7V16a6 6 0 11-6-6h.5v3.5H10A2.5 2.5 0 1012.5 16V3H16z"/></svg>
          </a>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="<?php echo $baseurl; ?>kitchens.html">Kitchens</a></li>
          <li><a href="<?php echo $baseurl; ?>bathrooms.html">Bathrooms</a></li>
          <li><a href="<?php echo $baseurl; ?>counter_tops.html">Countertops</a></li>
          <li><a href="<?php echo $baseurl; ?>gallery.html">Gallery</a></li>
          <li><a href="<?php echo $baseurl; ?>about.html">About</a></li>
        </ul>
      </div>

      <div>
        <h4>Locations</h4>
        <ul>
          <li><a href="<?php echo $baseurl; ?>lakeforest.html">Lake Forest</a></li>
          <li><a href="<?php echo $baseurl; ?>highland.html">Highland Park</a></li>
          <li><a href="<?php echo $baseurl; ?>winnetka.html">Winnetka</a></li>
          <li><a href="<?php echo $baseurl; ?>buffalo_grove.html">Buffalo Grove</a></li>
          <li><a href="<?php echo $baseurl; ?>chicago.html">Chicago</a></li>
        </ul>
      </div>

      <div>
        <h4>Visit · Call</h4>
        <p style="color:rgba(251,248,241,.75);font-size:.95rem;line-height:1.6;margin-bottom:.75rem"><?php echo htmlspecialchars($address); ?></p>
        <p><a href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" style="font-family:var(--font-display);font-size:1.25rem;color:var(--paradise-brass-500)"><?php echo htmlspecialchars($phone_raw); ?></a></p>
        <p><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
        <p class="small mt-2" style="color:rgba(251,248,241,.55)">Mon–Fri 9am–5pm<br>Sat by appointment</p>
      </div>
    </div>

    <div class="pd-footer-bottom">
      <span>© <?php echo $year; ?> Paradise Home Design Inc. All rights reserved.</span>
      <span>Lake Forest, IL · NKBA member</span>
    </div>
  </div>
</footer>

<!-- Floating phone CTA — mobile only -->
<a class="pd-floating-phone" href="tel:+1<?php echo preg_replace('/\D/', '', $phone_raw); ?>" aria-label="Call Paradise Home Design">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>
  Call (847) 681-9000
</a>
