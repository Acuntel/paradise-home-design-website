<?php
/**
 * Paradise Home Design, Site Navigation
 *
 * Renders the top nav. Requires $contact (from includes/config.php).
 * Optional: pass $current_page = 'home' | 'kitchens' | 'bathrooms' |
 * 'countertops' | 'gallery' | 'about' | 'contact' for active link styling.
 */
$current_page = $current_page ?? '';
$baseurl = defined('BASEURL') ? BASEURL : '/';
$nav_links = [
  ['key' => 'home',        'label' => 'Home',         'href' => $baseurl . 'index.html'],
  ['key' => 'kitchens',    'label' => 'Kitchens',     'href' => $baseurl . 'kitchens.html'],
  ['key' => 'bathrooms',   'label' => 'Bathrooms',    'href' => $baseurl . 'bathrooms.html'],
  ['key' => 'countertops', 'label' => 'Countertops',  'href' => $baseurl . 'counter_tops.html'],
  ['key' => 'brands',      'label' => 'Brands',       'href' => $baseurl . 'brands.html'],
  ['key' => 'gallery',     'label' => 'Gallery',      'href' => $baseurl . 'gallery.html'],
  ['key' => 'showroom',    'label' => 'Showroom',     'href' => $baseurl . 'showroom.html'],
  ['key' => 'about',       'label' => 'About',        'href' => $baseurl . 'about.html'],
  ['key' => 'contact',     'label' => 'Contact',      'href' => $baseurl . 'contact.html'],
];
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
$phone_href = 'tel:+1' . preg_replace('/\D/', '', $phone_raw);
?>

<nav class="pd-nav" aria-label="Primary">
  <div class="pd-nav-inner">
    <a href="<?php echo $baseurl; ?>index.html" class="pd-nav-logo" aria-label="Paradise Home Design, Home">
      <img src="<?php echo $baseurl; ?>assets/img/logo.png" alt="Paradise Home Design Inc">
    </a>

    <div class="pd-nav-links">
      <?php foreach ($nav_links as $link): ?>
        <a class="pd-nav-link<?php echo $current_page === $link['key'] ? ' is-active' : ''; ?>" href="<?php echo $link['href']; ?>"><?php echo $link['label']; ?></a>
      <?php endforeach; ?>
    </div>

    <div style="display:flex;align-items:center;gap:.5rem">
      <a class="btn btn-outline-light pd-nav-cta pd-call-trigger" href="<?php echo $phone_href; ?>" data-phone="<?php echo htmlspecialchars($phone_raw); ?>" aria-label="Call <?php echo htmlspecialchars($phone_raw); ?>">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right:.35rem"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>
        Call
      </a>
      <a class="btn btn-primary pd-nav-cta" href="<?php echo $baseurl; ?>design_consultation.html">Free Consultation</a>
      <button class="pd-nav-hamburger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<div class="pd-nav-overlay" role="dialog" aria-modal="true" aria-label="Mobile navigation">
  <?php foreach ($nav_links as $link): ?>
    <a class="pd-nav-link" href="<?php echo $link['href']; ?>"><?php echo $link['label']; ?></a>
  <?php endforeach; ?>
  <a class="btn btn-primary mt-3" href="<?php echo $baseurl; ?>design_consultation.html">Free Consultation</a>
  <a class="btn btn-outline mt-2 pd-call-trigger" href="<?php echo $phone_href; ?>" data-phone="<?php echo htmlspecialchars($phone_raw); ?>">Call <?php echo htmlspecialchars($phone_raw); ?></a>
</div>

<script>
/* Call-tracker — fires before tel: link opens. */
document.addEventListener('click', function(e){
  var trigger = e.target.closest('.pd-call-trigger');
  if (!trigger) return;
  var data = new FormData();
  data.append('page', window.location.pathname);
  // navigator.sendBeacon survives even if the page unloads to the phone app
  if (navigator.sendBeacon) {
    navigator.sendBeacon('<?php echo $baseurl; ?>track_call.php', data);
  } else {
    fetch('<?php echo $baseurl; ?>track_call.php', { method: 'POST', body: data, keepalive: true }).catch(function(){});
  }
});
</script>
