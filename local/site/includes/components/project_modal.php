<?php
/**
 * Project modal for service pages (kitchens / bathrooms / countertops).
 * Mirrors the Portfolio (gallery.php) project panels so a "Recently completed"
 * tile opens its photos in place instead of sending people to another page
 * (client request 2026-09-02).
 *
 * Args:
 *   $pm_projects  array of ['name','tag','meta','paras'=>[...],'images'=>[relative paths]]
 * Tiles trigger a panel with data-proj-open="<index>" (see project_tile.php).
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
if (empty($pm_projects)) return;
?>
<style>
  body.pd-coll-lock { overflow: hidden; }
  .pd-lightbox { z-index: 6000; }
  .pd-collection-modal { position: fixed; inset: 0; z-index: 5000; display: flex; background: rgba(10,17,11,.62); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); opacity: 0; visibility: hidden; overflow-y: auto; transition: opacity .4s var(--ease-out), visibility .4s var(--ease-out); }
  .pd-collection-modal.open { opacity: 1; visibility: visible; }
  .pd-collection-modal-inner { width: 100%; max-width: 1000px; margin: auto; padding: clamp(2.5rem, 6vw, 4.5rem) clamp(1.25rem, 5vw, 3rem); }
  .pd-collection-panel { background: var(--paradise-cream); border-radius: 4px; border-top: 3px solid var(--paradise-brass-500); padding: clamp(1.75rem, 4vw, 3.25rem); box-shadow: 0 30px 80px -20px rgba(14,26,17,.55), 0 2px 8px rgba(14,26,17,.2); transform: translateY(24px); transition: transform .45s var(--ease-out); }
  .pd-collection-modal.open .pd-collection-panel { transform: translateY(0); }
  .pd-collection-tag { display: inline-block; font-family: var(--font-sans); font-size: .72rem; font-weight: 600; letter-spacing: .18em; text-transform: uppercase; color: var(--paradise-brass-500); background: rgba(181,140,69,.12); padding: .4rem 1rem; border-radius: 2px; }
  .pd-collection-title { font-family: var(--font-display); font-size: clamp(1.9rem, 4vw, 2.9rem); color: var(--paradise-ink-900); line-height: 1.08; margin: 1rem 0 .6rem; }
  .pd-collection-meta { font-family: var(--font-sans); font-size: .9rem; color: var(--paradise-stone-500); letter-spacing: .02em; padding-bottom: 1.6rem; margin-bottom: 1.8rem; border-bottom: 1px solid var(--paradise-stone-300); }
  .pd-collection-desc p { font-family: var(--font-sans); color: var(--paradise-ink-700); line-height: 1.75; margin: 0 0 1rem; max-width: 68ch; }
  .pd-collection-gallery { display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(.5rem, 1.4vw, 1rem); margin: 2rem 0 2.25rem; }
  @media (max-width: 680px) { .pd-collection-gallery { grid-template-columns: repeat(2, 1fr); } }
  .pd-collection-gallery .pd-gallery-item { aspect-ratio: 4/3; }
  .pd-collection-cta-row { display: flex; flex-wrap: wrap; align-items: center; gap: 1rem 1.5rem; padding-top: 1.75rem; border-top: 1px solid var(--paradise-stone-300); }
  .pd-collection-cta-row p { margin: 0; font-family: var(--font-display); font-size: 1.15rem; color: var(--paradise-ink-900); }
  .pd-collection-close { position: fixed; top: clamp(1rem, 2.5vw, 1.75rem); right: clamp(1rem, 2.5vw, 2rem); width: 48px; height: 48px; border-radius: 50%; border: 0; background: rgba(251,248,241,.16); color: var(--paradise-cream); font-size: 1.9rem; line-height: 1; cursor: pointer; z-index: 5001; transition: background .3s var(--ease-out); }
  .pd-collection-close:hover { background: rgba(251,248,241,.30); }
  .pd .card[data-proj-open] { cursor: pointer; }
  @media (prefers-reduced-motion: reduce) {
    .pd-collection-modal, .pd-collection-panel { transition: none; }
    .pd-collection-panel { transform: none; }
  }
</style>

<!-- Project modal: panels are pre-rendered so reveal.js binds the per-photo lightbox -->
<div class="pd-collection-modal" id="pdProjModal" role="dialog" aria-modal="true" aria-label="Project photos" aria-hidden="true">
  <button type="button" class="pd-collection-close" id="pdProjClose" aria-label="Close">&times;</button>
  <div class="pd-collection-modal-inner">
    <?php foreach ($pm_projects as $i => $c): ?>
      <article class="pd-collection-panel" data-panel="<?php echo $i; ?>"<?php echo $i ? ' hidden' : ''; ?>>
        <?php if (!empty($c['tag'])): ?><span class="pd-collection-tag"><?php echo htmlspecialchars($c['tag']); ?></span><?php endif; ?>
        <h2 class="pd-collection-title"><?php echo htmlspecialchars($c['name']); ?></h2>
        <?php if (!empty($c['meta'])): ?><p class="pd-collection-meta"><?php echo htmlspecialchars($c['meta']); ?></p><?php endif; ?>
        <?php if (!empty($c['paras'])): ?>
        <div class="pd-collection-desc">
          <?php foreach ($c['paras'] as $p): ?><p><?php echo htmlspecialchars($p); ?></p><?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="pd-collection-gallery">
          <?php foreach ($c['images'] as $rel): $u = (strpos($rel, '/') === 0 || strpos($rel, 'http') === 0) ? $rel : $baseurl . $rel; ?>
            <button type="button" class="pd-gallery-item" data-lightbox="<?php echo htmlspecialchars($u); ?>" aria-label="Enlarge <?php echo htmlspecialchars($c['name']); ?> photo">
              <img src="<?php echo htmlspecialchars($u); ?>" alt="<?php echo htmlspecialchars($c['name']); ?> photo" loading="lazy">
            </button>
          <?php endforeach; ?>
        </div>
        <div class="pd-collection-cta-row">
          <p>Ready to start a project like this?</p>
          <a class="btn btn-primary" href="<?php echo $baseurl; ?>design_consultation.php">Start your project &rarr;</a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</div>

<script>
(function () {
  var modal = document.getElementById('pdProjModal');
  if (!modal) return;
  var closeBtn = document.getElementById('pdProjClose');
  var inner = modal.querySelector('.pd-collection-modal-inner');
  var panels = modal.querySelectorAll('.pd-collection-panel');
  var lastFocus = null;

  function openProject(i) {
    panels.forEach(function (p) { p.hidden = (String(p.getAttribute('data-panel')) !== String(i)); });
    lastFocus = document.activeElement;
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('pd-coll-lock');
    modal.scrollTop = 0;
    closeBtn.focus();
  }
  function closeProject() {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('pd-coll-lock');
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  function focusable() {
    var list = [closeBtn];
    var panel = modal.querySelector('.pd-collection-panel:not([hidden])');
    if (panel) {
      panel.querySelectorAll('a[href], button:not([disabled])').forEach(function (el) {
        if (el.offsetParent !== null) list.push(el);
      });
    }
    return list;
  }

  document.querySelectorAll('[data-proj-open]').forEach(function (tile) {
    tile.addEventListener('click', function (e) {
      e.preventDefault();
      openProject(this.getAttribute('data-proj-open'));
    });
    tile.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openProject(this.getAttribute('data-proj-open')); }
    });
  });
  closeBtn.addEventListener('click', closeProject);
  if (inner) inner.addEventListener('click', function (e) { if (e.target === inner) closeProject(); });
  modal.addEventListener('click', function (e) { if (e.target === modal) closeProject(); });
  document.addEventListener('keydown', function (e) {
    if (!modal.classList.contains('open')) return;
    if (e.key === 'Escape') {
      if (!document.querySelector('.pd-lightbox.open')) closeProject();
      return;
    }
    if (e.key === 'Tab') {
      var f = focusable();
      if (f.length < 2) return;
      var first = f[0], last = f[f.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });

  window.addEventListener('load', function () {
    var seen = {};
    modal.querySelectorAll('img').forEach(function (img) {
      var s = img.getAttribute('src');
      if (s && !seen[s]) { seen[s] = 1; var pre = new Image(); pre.src = s; }
    });
  });
})();
</script>
