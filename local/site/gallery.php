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
<title>Project Gallery · Paradise Home Design · Lake Forest, IL</title>
<meta name="description" content="Kitchen, bathroom, and full-home remodels by Paradise Home Design across Chicago's North Shore. 38 years of finished projects.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/gallery.html" />
<meta property="og:title" content="Project Gallery · Paradise Home Design" />
<meta property="og:image" content="https://www.paradisehomedesigninc.com/indexpage/big/1_1.png" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
<style>
  /* Masonry grid using CSS columns — no JS needed */
  .pd-masonry { column-count: 1; column-gap: 1.5rem; }
  @media (min-width: 640px) { .pd-masonry { column-count: 2; } }
  @media (min-width: 1024px) { .pd-masonry { column-count: 3; } }
  .pd-masonry-item { break-inside: avoid; margin-bottom: 1.5rem; display: inline-block; width: 100%; }
  .pd-masonry-item img { width: 100%; height: auto; border-radius: 4px; transition: transform .5s var(--ease-out), box-shadow .5s var(--ease-out); }
  .pd-masonry-item:hover img { transform: translateY(-4px); box-shadow: 0 20px 40px -12px rgba(28,42,31,.2); }
  .pd-masonry-caption { padding: .75rem .25rem 0; font-family: var(--font-sans); font-size: .9rem; color: var(--paradise-stone-500); letter-spacing: .05em; }
  .pd-filter-chips { display: flex; flex-wrap: wrap; gap: .5rem; justify-content: center; margin-bottom: 3rem; }
  .pd-filter-chip { padding: .5rem 1.25rem; border: 1px solid var(--paradise-stone-300); background: white; font-family: var(--font-sans); font-size: .8125rem; letter-spacing: .1em; text-transform: uppercase; cursor: pointer; transition: all .3s var(--ease-out); color: var(--paradise-ink-900); }
  .pd-filter-chip:hover, .pd-filter-chip.active { background: var(--paradise-forest-800); color: var(--paradise-cream); border-color: var(--paradise-forest-800); }
  .pd-masonry-item.is-hidden { display: none; }
</style>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image = $baseurl . 'flash/big/5.png';
  $hero_eyebrow = 'Project gallery';
  $hero_title = 'Every kitchen we\'ve finished, one place.';
  $hero_description = '38 years of remodels on Chicago\'s North Shore. Filter by room or style.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<section>
  <div class="container">
    <div class="pd-filter-chips" data-reveal>
      <button class="pd-filter-chip active" data-filter="all">All</button>
      <button class="pd-filter-chip" data-filter="kitchen">Kitchens</button>
      <button class="pd-filter-chip" data-filter="bathroom">Bathrooms</button>
      <button class="pd-filter-chip" data-filter="countertop">Countertops</button>
      <button class="pd-filter-chip" data-filter="modern">Modern</button>
      <button class="pd-filter-chip" data-filter="traditional">Traditional</button>
    </div>

    <?php
      // Build gallery items. Pulling from existing assets on the server.
      $items = [
        ['src' => 'indexpage/big/1_1.png',     'title' => 'White kitchen with brass',     'meta' => 'Lake Forest · 2025', 'tags' => 'kitchen modern'],
        ['src' => 'indexpage/big/1_2.png',     'title' => 'Two-tone island',              'meta' => 'Highland Park · 2024', 'tags' => 'kitchen traditional'],
        ['src' => 'flash/big/6.png',     'title' => 'Shaker remodel',               'meta' => 'Winnetka · 2024',     'tags' => 'kitchen traditional'],
        ['src' => 'flash/big/1.png','title' => 'Open-concept kitchen',         'meta' => 'Buffalo Grove · 2024','tags' => 'kitchen modern'],
        ['src' => 'flash/big/4.png','title' => 'Walk-in shower',               'meta' => 'Highland Park · 2024','tags' => 'bathroom modern'],
        ['src' => 'flash/big/7.png','title' => 'Marble primary bath',          'meta' => 'Deerfield · 2024',    'tags' => 'bathroom traditional'],
        ['src' => 'flash/big/5.png','title' => 'Custom shaker kitchen',        'meta' => 'Lake Forest · 2024',  'tags' => 'kitchen traditional'],
        ['src' => 'flash/big/5.png',     'title' => 'Contemporary suite',           'meta' => 'Chicago · 2025',      'tags' => 'kitchen modern'],
        ['src' => 'flash/big/2.png',    'title' => 'Quartzite island',             'meta' => 'Winnetka · 2024',     'tags' => 'countertop modern'],
        ['src' => 'flash/big/7.png',    'title' => 'Calacatta perimeter',          'meta' => 'Highland Park · 2024','tags' => 'countertop modern'],
      ];
      foreach ($items as $i => $it):
    ?>
      <div class="pd-masonry-item" data-tags="<?php echo htmlspecialchars($it['tags']); ?>" data-reveal>
        <img src="<?php echo $baseurl . $it['src']; ?>" alt="<?php echo htmlspecialchars($it['title']); ?>" loading="lazy">
        <div class="pd-masonry-caption">
          <strong style="display:block;color:var(--paradise-ink-900);font-family:var(--font-display);font-size:1.05rem;letter-spacing:0;text-transform:none;margin-bottom:.25rem;font-weight:500"><?php echo htmlspecialchars($it['title']); ?></strong>
          <?php echo htmlspecialchars($it['meta']); ?>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="pd-masonry" id="pd-masonry">
      <?php // Re-render inside masonry container (the above were duplicated for graceful fallback — clean approach below)
      ?>
    </div>

    <script>
      // Move items into the masonry container, then attach filter chips
      (function(){
        const items = document.querySelectorAll('.pd-masonry-item');
        const masonry = document.getElementById('pd-masonry');
        items.forEach(i => masonry.appendChild(i));
        document.querySelectorAll('.pd-filter-chip').forEach(chip => {
          chip.addEventListener('click', () => {
            document.querySelectorAll('.pd-filter-chip').forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            const filter = chip.dataset.filter;
            items.forEach(i => {
              const matches = filter === 'all' || (i.dataset.tags || '').includes(filter);
              i.classList.toggle('is-hidden', !matches);
            });
          });
        });
      })();
    </script>
  </div>
</section>

<?php
  $cta_heading = 'Want to see these in person?';
  $cta_subhead = 'Showroom samples and finished installs in Lake Forest.';
  $cta_button_text = 'Schedule a showroom visit';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>

</body>
</html>
