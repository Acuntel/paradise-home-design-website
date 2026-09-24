<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = 'gallery';
$baseurl = BASEURL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Portfolio · Paradise Home Design · Lake Forest, IL</title>
<meta name="description" content="Kitchen, bathroom, and full-home remodels by Paradise Home Design across Chicago's North Shore. Over 37 years of finished projects.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/gallery.html" />
<meta property="og:title" content="Portfolio · Paradise Home Design" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com/indexpage/big/1_1.webp" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
<style>


  /* ===== Cabinetry collections (click-to-expand — content preserved from the original site) ===== */
  .pd-collections-grid { display: grid; grid-template-columns: 1fr; gap: clamp(.85rem, 1.8vw, 1.5rem); margin-top: 2.5rem; }
  @media (min-width: 768px) { .pd-collections-grid { grid-template-columns: repeat(2, 1fr); } }
  .pd-collection-card { position: relative; display: block; width: 100%; padding: 0; border: 0; background: none; border-radius: 4px; overflow: hidden; cursor: pointer; text-align: left; aspect-ratio: 3/2; box-shadow: 0 10px 30px -12px rgba(14,26,17,.28); }
  .pd-collection-card img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; transition: transform .7s var(--ease-out); }
  .pd-collection-card:hover img, .pd-collection-card:focus-visible img { transform: scale(1.06); }
  .pd-collection-card::after { content: ""; position: absolute; inset: 0; background: linear-gradient(to top, rgba(14,26,17,.88) 0%, rgba(14,26,17,.32) 44%, rgba(14,26,17,0) 74%); transition: background .4s var(--ease-out); }
  .pd-collection-card:hover::after, .pd-collection-card:focus-visible::after { background: linear-gradient(to top, rgba(14,26,17,.94) 0%, rgba(14,26,17,.48) 52%, rgba(14,26,17,.06) 82%); }
  .pd-collection-card-body { position: absolute; left: 0; right: 0; bottom: 0; z-index: 1; padding: clamp(1rem, 2vw, 1.4rem); }
  .pd-collection-card-name { display: block; font-family: var(--font-display); color: var(--paradise-cream); font-size: clamp(1.15rem, 2vw, 1.5rem); line-height: 1.15; }
  .pd-collection-card-cta { display: inline-block; margin-top: .4rem; font-family: var(--font-sans); font-size: .72rem; letter-spacing: .14em; text-transform: uppercase; color: var(--paradise-brass-400); transform: translateY(4px); opacity: 0; transition: transform .4s var(--ease-out), opacity .4s var(--ease-out); }
  .pd-collection-card:hover .pd-collection-card-cta, .pd-collection-card:focus-visible .pd-collection-card-cta { transform: translateY(0); opacity: 1; }
  .pd-collection-card:focus-visible { outline: 2px solid var(--paradise-brass-500); outline-offset: 3px; }
  @media (hover: none) { .pd-collection-card-cta { opacity: 1; transform: none; } }

  /* Modal (z-index 5000). The per-photo lightbox (reveal.js) MUST sit above this, and
     the body scroll-lock uses a class so reveal.js clearing the inline style can't unlock us. */
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
  .pd-collection-desc ul { margin: .25rem 0 1.25rem; padding-left: 1.15rem; }
  .pd-collection-desc li { font-family: var(--font-sans); color: var(--paradise-ink-700); line-height: 1.7; margin-bottom: .35rem; }
  .pd-collection-gallery { display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(.5rem, 1.4vw, 1rem); margin: 2rem 0 2.25rem; }
  @media (max-width: 680px) { .pd-collection-gallery { grid-template-columns: repeat(2, 1fr); } }
  .pd-collection-gallery .pd-gallery-item { aspect-ratio: 4/3; }
  .pd-collection-cta-row { display: flex; flex-wrap: wrap; align-items: center; gap: 1rem 1.5rem; padding-top: 1.75rem; border-top: 1px solid var(--paradise-stone-300); }
  .pd-collection-cta-row p { margin: 0; font-family: var(--font-display); font-size: 1.15rem; color: var(--paradise-ink-900); }
  .pd-collection-close { position: fixed; top: clamp(1rem, 2.5vw, 1.75rem); right: clamp(1rem, 2.5vw, 2rem); width: 48px; height: 48px; border-radius: 50%; border: 0; background: rgba(251,248,241,.16); color: var(--paradise-cream); font-size: 1.9rem; line-height: 1; cursor: pointer; z-index: 5001; transition: background .3s var(--ease-out); }
  .pd-collection-close:hover { background: rgba(251,248,241,.30); }
  @media (prefers-reduced-motion: reduce) {
    .pd-collection-modal, .pd-collection-panel, .pd-collection-card img, .pd-collection-card::after, .pd-collection-card-cta { transition: none; }
    .pd-collection-panel { transform: none; }
    .pd-collection-card-cta { transform: none; opacity: 1; }
    .pd-collection-card:hover img, .pd-collection-card:focus-visible img { transform: none; }
  }
</style>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/5.webp';
  $hero_eyebrow = 'Portfolio';
  $hero_title = 'A showcase of spaces we\'ve transformed.';
  $hero_description = 'Over 37 years of transforming kitchens, bathrooms, and living spaces across Chicago\'s North Shore.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<?php
  /*
   * Cabinetry collections — descriptions and photos preserved from Paradise's
   * ORIGINAL (pre-redesign) website (MySQL `category` + `products` catalog,
   * images at products/details/<id>.jpg, still live on the server).
   * Only the four confirmed partner brands are shown
   * (Candlelight + Medallion were scrubbed site-wide on 2026-06-02).
   */
  $pd_details = $baseurl . 'products/details/';
  $collections = [
    [
      'name' => 'QCCI',
      'tag'  => 'Custom Cabinetry Collection',
      'meta' => 'Est. 1968 · Brownstown, PA · Family-owned · 100+ artisans',
      'paras' => [
        "Founded in 1968 by Martin H. Weaver in Brownstown, Pennsylvania, QCCI began as a small two-person custom kitchen shop rooted in the craftsmanship traditions of Lancaster County. Weaver's goal was simple: to build one quality kitchen a day with honesty and pride.",
        "Today, still family-owned and operated by his son and son-in-law, QCCI has grown into one of the nation's most respected custom cabinetry companies — serving elite designers, celebrities, chefs, and discerning homeowners across the country, with a team of over 100 skilled artisans continuing the legacy of excellence.",
      ],
      'bullets' => [],
      'ids' => [59, 60, 61, 62, 63, 64],
    ],
    [
      'name' => 'Adelphi Kitchens',
      'tag'  => 'Custom Cabinetry Collection',
      'meta' => 'Est. 1946 · Robesonia, PA · Family-owned · 70+ years',
      'paras' => [
        "Adelphi Kitchens began in 1946 as Yatron Brothers, a small family operation in a garage in Reading, Pennsylvania. Over the years, the company steadily expanded — building factories, growing its workforce, and gaining national recognition, including crafting display cases for the U.S. Capitol. Rebranded as Adelphi Kitchens, Inc., the company moved to a 160,000-square-foot facility in Robesonia in 1984.",
        "Today, Adelphi remains a family-owned and operated business with over 70 years of experience. They produce around 60 kitchens a week with a team of 120 employees and serve nearly 250 dealers nationwide — some dating back to the 1950s. While embracing new technologies and trends, Adelphi stays true to its roots by crafting each cabinet with care, one at a time, continuing to blend tradition with innovation to bring clients' visions to life.",
      ],
      'bullets' => [],
      'ids' => [65, 66, 67, 68, 69, 70],
    ],
    [
      'name' => 'Holiday Kitchen',
      'tag'  => 'Custom Cabinetry Collection',
      'meta' => 'Est. 1946 · Custom kitchens, baths & more · Made in the USA',
      'paras' => [
        "As the central hub of the home, a kitchen's functionality, safety and beauty will continue to dominate industry trends. Holiday Kitchens has already implemented policies, processes and designs that meet present needs with an eye to the future. We build more than just kitchens — custom baths, custom entertainment centers, custom bars, and more.",
        "In 1946, Mastercraft Industries, Inc. — home of Holiday Kitchens — was little more than three brothers starting a millwork business as a result of the post-war boom. Today, Holiday Kitchens is one of the largest custom cabinet manufacturers in the USA, with 150,000 square feet of manufacturing space and nearly 200 employees. Our phenomenal growth has not altered our core mission, values or vision:",
      ],
      'bullets' => [
        "Providing exceptional custom cabinet craftsmanship",
        "Offering diverse cabinetry designs that suit the way people live in their kitchens",
        "Presenting customers with quality, durability and value in their elegant custom cabinetry",
        "Keeping customer service the priority of every crafted design, process, and finish",
        "Respecting our employees and their goals, and recognizing their achievements",
        "Working to preserve our community and the environment",
      ],
      'ids' => [35, 36, 37, 38, 39, 40, 41, 42],
    ],
    [
      'name' => 'Fabuwood',
      'tag'  => 'Custom Cabinetry Collection',
      'meta' => 'Affordable luxury · Modern & traditional · Many styles & finishes',
      'paras' => [
        "We believe your kitchen cabinets should help develop a sanctuary that offers a perfect balance of functionality and ambiance. With a range of styles, materials and finishes available, Fabuwood offers a multitude of options catering to your specific taste and needs.",
        "We make building a luxury kitchen affordable — without compromising on comfort, quality and efficiency. There truly is no better blend of style, selection, and price than a Fabuwood cabinet. Their unique collections transform modern and traditional homes, large and small, adorning kitchen walls throughout the nation.",
      ],
      'bullets' => [],
      'ids' => [51, 52, 53, 54, 55, 56, 57, 58],
    ],
  ];

  /*
   * Featured projects — the per-job write-ups from the ORIGINAL site's `category2`
   * project list, paired with each job's real photos (town folders on the server,
   * verified by eye). Descriptions cleaned of retired references: the old
   * prestigioushomedesign.com domain, the former Highland Park showroom address,
   * and the scrubbed Candlelight / "Crystal" brand names. Fabuwood is a current partner.
   */
  $projects = [
    [
      'name' => 'Highland Park Project',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Highland Park, IL · White cabinetry, quartzite',
      'paras' => [
        "Dramatic quartzite gives this Highland Park kitchen its character. Full-height stone slabs wrap the backsplash and carry across the oversized island, set against crisp white cabinetry, sculptural LED pendants, and professional-grade stainless appliances.",
      ],
      'bullets' => [],
      'images' => ['highland4/big/4.webp','highland4/big/6.webp','highland4/big/1.webp','highland4/big/2.webp','highland4/big/3.webp','highland4/big/5.webp','highland4/big/7.webp'],
    ],
    [
      'name' => 'Lake Forest Kitchen Project',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Lake Forest, IL · White shaker, natural stone',
      'paras' => [
        "A bright, hardworking kitchen remodel in Lake Forest. White shaker cabinetry pairs with a full-height natural stone backsplash, open shelving, and stainless appliances.",
      ],
      'bullets' => [],
      'images' => ['lakeforest2/big/kitchen4.webp','lakeforest2/big/kitchen6.webp','lakeforest2/big/kitchen1.webp','lakeforest2/big/kitchen2.webp','lakeforest2/big/kitchen3.webp','lakeforest2/big/post4.webp'],
    ],
    [
      'name' => 'Lake Forest Bathroom Project',
      'tag'  => 'Bathroom Remodel',
      'meta' => 'Lake Forest, IL · Before & after',
      'paras' => [
        "A dated tub bathroom with teal tile, transformed into a bright, modern space with a tiled walk-in shower, a custom double-sink vanity, and new large-format floor tile. The last photo shows the space before the remodel.",
      ],
      'bullets' => [],
      'images' => ['lakeforest2/big/bath1.webp','lakeforest2/big/bath-before1.webp'],
    ],
    [
      'name' => 'Vernon Hills Bathroom Project',
      'tag'  => 'Bathroom Remodel',
      'meta' => 'Vernon Hills, IL · Before & after',
      'paras' => [
        "A dated tub bathroom transformed into a warm, modern retreat: marble-look porcelain, brushed gold fixtures, a walk-in shower with a black hexagon mosaic floor, and warm wood vanities. The last two photos show the space before the remodel.",
      ],
      'bullets' => [],
      'images' => ['vernonhills1/big/bath-main.webp','vernonhills1/big/after3.webp','vernonhills1/big/after1.webp','vernonhills1/big/after2.webp','vernonhills1/big/after4.webp','vernonhills1/big/after5.webp','vernonhills1/big/before1.webp','vernonhills1/big/before2.webp'],
    ],
    [
      'name' => 'Chicago Project',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Chicago, IL · Loft kitchen',
      'paras' => [
        "A city loft kitchen beneath the building's original timber beams. Soft gray cabinetry with brass pulls, marble-look quartz counters carried up the backsplash, black pendants over the island, and stainless appliances.",
      ],
      'bullets' => [],
      'images' => ['chicago1/big/1.webp','chicago1/big/2.webp','chicago1/big/3.webp','chicago1/big/4.webp','chicago1/big/5.webp'],
    ],
    /* REMOVED 2026-09-15 at the client's request (Irene: "the Lake Forest project
       is showing up twice"). The entry named "Lake Forest Project" used the
       lakeforest/big/ photos, which are phone snapshots of exactly the same job
       already shown above as "Lake Forest Kitchen Project" and "Lake Forest
       Bathroom Project" using the professional lakeforest2/big/ photos the client
       sent on 2026-08-20. Same kitchen, same two bathrooms, same house. The
       lakeforest/big/ files are still on the server if the old set is ever needed. */
    [
      'name' => 'Winnetka Project',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Winnetka, IL · Fabuwood cabinetry',
      'paras' => [
        "An efficient, beautifully uncluttered kitchen — built-in appliances and easy-care work surfaces, with nothing wasted. Fabuwood cabinetry pairs a Frost-finish perimeter with a nickel-finish island for a warm, family-friendly space.",
      ],
      'bullets' => [],
      'images' => ['winnetka/big/8.webp','winnetka/big/6.webp','winnetka/big/3.webp','winnetka/big/9.webp','winnetka/big/12.webp','winnetka/big/14.webp'],
    ],
    [
      'name' => 'Buffalo Grove Project',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Buffalo Grove, IL · Transitional',
      'paras' => [
        "This calm, transitional kitchen brought the homeowners' ideas to life. The goal was a more organized, functional space the whole family could enjoy — warm-toned cabinetry set against soft gray quartz counters and a matching backsplash, for an elegant, easy-living result.",
      ],
      'bullets' => [],
      'images' => ['buffalogrove1/big/1_1.webp','buffalogrove1/big/3_1.webp','buffalogrove1/big/5_1.webp','buffalogrove1/big/7_1.webp','buffalogrove1/big/9_1.webp','buffalogrove1/big/10_1.webp'],
    ],
    [
      'name' => 'Buffalo Grove Workshop',
      'tag'  => 'Design-Build Project',
      'meta' => 'Buffalo Grove, IL · Completed 2023',
      'paras' => [
        "A dedicated workshop is a dream for many homeowners — and the backyard is the perfect place for it. We designed and built this client a beautiful, fully finished standalone workshop, tailored to exactly how they like to work. Completed in 2023.",
      ],
      'bullets' => [],
      'images' => ['buffalogrove2/big/1_1.png','buffalogrove2/big/2_1.png','buffalogrove2/big/3_1.png','buffalogrove2/big/4_1.png','buffalogrove2/big/5_1.png','buffalogrove2/big/6_1.png','buffalogrove2/big/7_1.png','buffalogrove2/big/8_1.png','buffalogrove2/big/9_1.png'],
    ],
    [
      'name' => 'Exquisite Walnut Kitchen',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Highland Park, IL · Walnut cabinetry',
      'paras' => [
        "Exquisite walnut-wood cabinetry anchors this Highland Park kitchen. Rich, hand-finished wood and arched glass-front cabinets create a warm, refined space — efficient and beautifully organized, designed for the way the family really cooks and gathers.",
      ],
      'bullets' => [],
      'images' => ['highland2/big/1_1.webp','highland2/big/4_1.webp','highland2/big/5_1.png','highland2/big/6_1.png','highland2/big/2_1.png','highland2/big/7_1.png'],
    ],
    [
      'name' => 'Bisque & Navy Kitchen',
      'tag'  => 'Kitchen Remodel',
      'meta' => 'Highland Park, IL · Two-tone, navy island',
      'paras' => [
        "This stunning kitchen will make you want to take cooking lessons. The client let us run free with the design — and it has all the bells and whistles, with custom cabinetry in a soft bisque and a striking navy-blue island at its heart.",
      ],
      'bullets' => [],
      'images' => ['highland3/big/10_1.webp','highland3/big/13_1.png','highland3/big/12_1.png','highland3/big/9_1.png','highland3/big/11_1.png','highland3/big/14_1.png'],
    ],
  ];

  // Normalize brand collections (ids -> products/details paths) so brands + projects
  // share one render path and one modal.
  foreach ($collections as &$__c) {
    if (empty($__c['images'])) {
      $__c['images'] = array();
      foreach ($__c['ids'] as $__id) { $__c['images'][] = 'products/details/' . $__id . '.jpg'; }
    }
  }
  unset($__c);
  $all = $projects;
  $proj_offset = 0;
?>

<?php /* Cabinetry collections section removed from Portfolio per client (2026-06-15). */ ?>

<!-- ===== Featured projects: tap a project to read the story + see the photos ===== -->
<section>
  <div class="container">
    <div class="section-header centered" data-reveal>
      <span class="eyebrow">Selected work</span>
      <h2>Featured projects</h2>
      <p class="lead">A closer look at finished kitchens and builds across Chicago's North Shore. Tap any project to read the story.</p>
    </div>

    <div class="pd-collections-grid">
      <?php foreach ($projects as $j => $p): ?>
        <button type="button" class="pd-collection-card" data-open="<?php echo $proj_offset + $j; ?>" data-reveal aria-haspopup="dialog">
          <img src="<?php echo htmlspecialchars($baseurl . $p['images'][0]); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" loading="lazy">
          <span class="pd-collection-card-body">
            <span class="pd-collection-card-name"><?php echo htmlspecialchars($p['name']); ?></span>
            <span class="pd-collection-card-cta">View project &rarr;</span>
          </span>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Collection modal: panels are pre-rendered so reveal.js binds the per-photo lightbox -->
<div class="pd-collection-modal" id="pdCollModal" role="dialog" aria-modal="true" aria-label="Cabinetry collection or project" aria-hidden="true">
  <button type="button" class="pd-collection-close" id="pdCollClose" aria-label="Close">&times;</button>
  <div class="pd-collection-modal-inner">
    <?php foreach ($all as $i => $c): ?>
      <article class="pd-collection-panel" data-panel="<?php echo $i; ?>"<?php echo $i ? ' hidden' : ''; ?>>
        <span class="pd-collection-tag"><?php echo htmlspecialchars($c['tag']); ?></span>
        <h2 class="pd-collection-title"><?php echo htmlspecialchars($c['name']); ?></h2>
        <p class="pd-collection-meta"><?php echo htmlspecialchars($c['meta']); ?></p>
        <div class="pd-collection-desc">
          <?php foreach ($c['paras'] as $p): ?><p><?php echo htmlspecialchars($p); ?></p><?php endforeach; ?>
          <?php if (!empty($c['bullets'])): ?>
          <ul>
            <?php foreach ($c['bullets'] as $b): ?><li><?php echo htmlspecialchars($b); ?></li><?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <div class="pd-collection-gallery">
          <?php foreach ($c['images'] as $rel): $u = $baseurl . $rel; ?>
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
  var modal = document.getElementById('pdCollModal');
  if (!modal) return;
  var closeBtn = document.getElementById('pdCollClose');
  var inner = modal.querySelector('.pd-collection-modal-inner');
  var panels = modal.querySelectorAll('.pd-collection-panel');
  var lastFocus = null;

  function openCollection(i) {
    panels.forEach(function (p) { p.hidden = (String(p.getAttribute('data-panel')) !== String(i)); });
    lastFocus = document.activeElement;
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('pd-coll-lock');
    modal.scrollTop = 0;
    closeBtn.focus();
  }
  function closeCollection() {
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

  document.querySelectorAll('.pd-collection-card[data-open]').forEach(function (card) {
    card.addEventListener('click', function () { openCollection(this.getAttribute('data-open')); });
  });
  closeBtn.addEventListener('click', closeCollection);
  // Click the dark backdrop (the padding around the panel) to close
  if (inner) inner.addEventListener('click', function (e) { if (e.target === inner) closeCollection(); });
  modal.addEventListener('click', function (e) { if (e.target === modal) closeCollection(); });
  document.addEventListener('keydown', function (e) {
    if (!modal.classList.contains('open')) return;
    if (e.key === 'Escape') {
      // Defer to the photo lightbox (on top) if it's open; otherwise close the modal.
      if (!document.querySelector('.pd-lightbox.open')) closeCollection();
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

  // Preload every collection photo after load so modals + the lightbox feel instant.
  window.addEventListener('load', function () {
    var seen = {};
    modal.querySelectorAll('img').forEach(function (img) {
      var s = img.getAttribute('src');
      if (s && !seen[s]) { seen[s] = 1; var pre = new Image(); pre.src = s; }
    });
  });
})();
</script>


<?php
  $cta_heading = 'Want to see these in person?';
  $cta_subhead = 'Showroom samples and finished installs in Lake Forest.';
  $cta_button_text = 'Schedule a showroom visit';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
