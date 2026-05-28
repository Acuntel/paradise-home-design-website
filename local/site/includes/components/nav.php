<?php
/**
 * Paradise Home Design — Site Navigation
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
  ['key' => 'gallery',     'label' => 'Gallery',      'href' => $baseurl . 'gallery.html'],
  ['key' => 'about',       'label' => 'About',        'href' => $baseurl . 'about.html'],
  ['key' => 'contact',     'label' => 'Contact',      'href' => $baseurl . 'contact.html'],
];
$phone_raw = $contact['Phone'] ?? '(847) 681-9000';
$phone_href = 'tel:+1' . preg_replace('/\D/', '', $phone_raw);
?>

<nav class="pd-nav" aria-label="Primary">
  <div class="pd-nav-inner">
    <a href="<?php echo $baseurl; ?>index.html" class="pd-nav-logo" aria-label="Paradise Home Design — Home">
      <img src="<?php echo $baseurl; ?>assets/img/logo.png" alt="Paradise Home Design Inc">
    </a>

    <div class="pd-nav-links">
      <?php foreach ($nav_links as $link): ?>
        <a class="pd-nav-link<?php echo $current_page === $link['key'] ? ' is-active' : ''; ?>" href="<?php echo $link['href']; ?>"><?php echo $link['label']; ?></a>
      <?php endforeach; ?>
    </div>

    <div style="display:flex;align-items:center;gap:1rem">
      <a class="btn btn-primary pd-nav-cta" href="<?php echo $baseurl; ?>contact.html">Free Consultation</a>
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
  <a class="btn btn-primary mt-3" href="<?php echo $baseurl; ?>contact.html">Free Consultation</a>
  <a class="pd-nav-link mt-3" href="<?php echo $phone_href; ?>" style="font-size:1rem;letter-spacing:.15em;text-transform:uppercase"><?php echo htmlspecialchars($phone_raw); ?></a>
</div>
