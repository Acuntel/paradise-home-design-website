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
  ['key' => 'gallery',     'label' => 'Portfolio',    'href' => $baseurl . 'gallery.html'],
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

<!-- Pre-call capture modal: grab name + phone (+ address) BEFORE dialing,
     so a tap is never a lost lead again. -->
<div id="pdCallModal" class="pd-callmodal" role="dialog" aria-modal="true" aria-labelledby="pdCallTitle">
  <div class="pd-callmodal-backdrop" data-pd-call-close></div>
  <div class="pd-callmodal-card">
    <button type="button" class="pd-callmodal-x" aria-label="Close" data-pd-call-close>&times;</button>
    <form class="pd-form pd-callform" novalidate>
      <h2 id="pdCallTitle" class="pd-callmodal-title">Let&rsquo;s get you connected</h2>
      <p class="pd-callmodal-sub">Leave your number and a Paradise designer will be right with you &mdash; or call you straight back.</p>
      <!-- Honeypot: hidden from humans; bots fill it and get dropped. -->
      <input type="text" name="_gotcha" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
      <div>
        <label for="pdc-name">Name</label>
        <input id="pdc-name" type="text" name="name" required autocomplete="name">
      </div>
      <div>
        <label for="pdc-phone">Phone</label>
        <input id="pdc-phone" type="tel" name="phone" required autocomplete="tel" inputmode="tel" placeholder="(847) 555-0123">
      </div>
      <div>
        <label for="pdc-address">Project address <span class="pd-callform-opt">(optional)</span></label>
        <input id="pdc-address" type="text" name="address" autocomplete="street-address" placeholder="Street, City">
      </div>
      <button class="btn btn-primary pd-callform-submit" type="submit">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right:.4rem"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>
        Connect me
      </button>
      <p class="pd-callform-fine">We&rsquo;ll only use this to talk about your project. No spam.</p>
    </form>
    <a class="pd-call-direct pd-callmodal-direct" href="<?php echo $phone_href; ?>" data-phone="<?php echo htmlspecialchars($phone_raw); ?>">Prefer to dial now? <strong><?php echo htmlspecialchars($phone_raw); ?></strong></a>
    <div class="pd-callform-confirm" hidden>
      <div class="pd-callform-check" aria-hidden="true">&#10003;</div>
      <h3>You&rsquo;re all set<span data-confirm-name></span>.</h3>
      <p>A Paradise designer will call you right back at <strong data-confirm-phone></strong>.</p>
      <button type="button" class="btn btn-outline" data-pd-call-close>Done</button>
    </div>
  </div>
</div>

<script>
/* Pre-call form: capture the visitor's number before the tel: dial. */
(function () {
  var BASE  = '<?php echo $baseurl; ?>';
  var PHONE = '<?php echo $phone_href; ?>';
  var modal = document.getElementById('pdCallModal');
  var form  = modal ? modal.querySelector('.pd-callform') : null;
  var isMobile = /Android|iPhone|iPad|iPod|Mobile/i.test(navigator.userAgent);
  var lastTrigger = null;

  function track(extra) {
    if (typeof gtag === 'function') { gtag('event', 'contact', { method: 'phone' }); }
    var data = new FormData();
    data.append('page', window.location.pathname);
    if (extra) { Object.keys(extra).forEach(function (k) { if (extra[k]) data.append(k, extra[k]); }); }
    if (navigator.sendBeacon) { navigator.sendBeacon(BASE + 'track_call.php', data); }
    else { fetch(BASE + 'track_call.php', { method: 'POST', body: data, keepalive: true }).catch(function () {}); }
  }
  function field(name) { var el = form && form.querySelector('[name="' + name + '"]'); return el ? (el.value || '').trim() : ''; }

  function openModal(trigger) {
    lastTrigger = trigger || null;
    if (!modal) { track(); window.location.href = PHONE; return; } /* graceful fallback */
    modal.classList.add('open');
    document.body.classList.add('pd-modal-lock');
    var first = form && form.querySelector('[name="name"]');
    if (first) { setTimeout(function () { first.focus(); }, 60); }
  }
  function closeModal() {
    if (!modal) return;
    modal.classList.remove('open');
    document.body.classList.remove('pd-modal-lock');
    if (lastTrigger && lastTrigger.focus) { lastTrigger.focus(); }
  }

  document.addEventListener('click', function (e) {
    if (e.target.closest('.pd-call-trigger')) { e.preventDefault(); openModal(e.target.closest('.pd-call-trigger')); return; }
    if (e.target.closest('.pd-call-direct'))  { track(); return; } /* explicit "dial now" escape hatch — let tel: href proceed */
    if (e.target.closest('[data-pd-call-close]')) { e.preventDefault(); closeModal(); return; }
    /* Any OTHER phone link on the site (footer, contact page, consultation, showroom…)
       also routes through the capture modal, so a tap is never an untracked, nameless
       lead. The two branches above already handled the modal's own tel: links. */
    var tel = e.target.closest('a[href^="tel:"]');
    if (tel) { e.preventDefault(); openModal(tel); return; }
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && modal && modal.classList.contains('open')) { closeModal(); }
  });

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var hp = form.querySelector('[name="_gotcha"]');
      if (hp && hp.value) { closeModal(); return; }          /* bot */
      var name = field('name'), phone = field('phone'), addr = field('address');
      if (!name || !phone) { return; }                        /* required */
      track({ name: name, phone: phone, address: addr });
      if (isMobile) {
        window.location.href = PHONE;                         /* place the call — we now have the number */
      } else {
        var c = modal.querySelector('.pd-callform-confirm');
        var nm = c.querySelector('[data-confirm-name]');
        if (nm) { nm.textContent = ', ' + name.split(' ')[0]; }
        c.querySelector('[data-confirm-phone]').textContent = phone;
        form.hidden = true; c.hidden = false;
      }
    });
  }
})();
</script>
