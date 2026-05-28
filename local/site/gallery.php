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
  /* Masonry grid using CSS columns, no JS needed */
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
      // Full library: 36 real finished-project photos across kitchens, bathrooms, countertops.
      $items = [
        // Showcase flash photos
        ['src' => 'flash/big/2.png',           'title' => 'Black cabinets, marble, brass',     'meta' => 'Lake Forest', 'tags' => 'kitchen modern'],
        ['src' => 'flash/big/1.png',           'title' => 'Blue island, subway tile',          'meta' => 'Highland Park', 'tags' => 'kitchen traditional'],
        ['src' => 'flash/big/5.png',           'title' => 'Custom white shaker',               'meta' => 'Lake Forest', 'tags' => 'kitchen modern'],
        ['src' => 'flash/big/7.png',           'title' => 'Traditional cherry kitchen',        'meta' => 'Winnetka', 'tags' => 'kitchen traditional'],
        ['src' => 'flash/big/6.png',           'title' => 'Coastal white + tiffany island',    'meta' => 'Florida', 'tags' => 'kitchen modern'],
        ['src' => 'flash/big/3.png',           'title' => 'Gothic gray built-in cabinetry',    'meta' => 'Lake Forest', 'tags' => 'kitchen traditional'],
        ['src' => 'flash/big/4.png',           'title' => 'Spa bath, floating vanity',         'meta' => 'Highland Park', 'tags' => 'bathroom modern'],

        // Lake Forest projects
        ['src' => 'lakeforest/big/1_1.png',    'title' => 'Navy island + open staircase',      'meta' => 'Lake Forest', 'tags' => 'kitchen traditional'],
        ['src' => 'lakeforest/big/2_1.png',    'title' => 'White shaker + brass pulls',        'meta' => 'Lake Forest', 'tags' => 'kitchen modern'],
        ['src' => 'lakeforest/big/3_1.png',    'title' => 'Double-vanity primary bath',        'meta' => 'Lake Forest', 'tags' => 'bathroom traditional'],
        ['src' => 'lakeforest/big/4_1.png',    'title' => 'Vessel-sink powder room',           'meta' => 'Lake Forest', 'tags' => 'bathroom modern'],
        ['src' => 'lakeforest/big/5_1.png',    'title' => 'Marble sink + brass faucet',        'meta' => 'Lake Forest', 'tags' => 'bathroom modern'],
        ['src' => 'lakeforest/big/6_1.png',    'title' => 'Quartz island close-up',            'meta' => 'Lake Forest', 'tags' => 'countertop modern'],
        ['src' => 'lakeforest/big/7_1.png',    'title' => 'Spa bath, vessel sinks',            'meta' => 'Lake Forest', 'tags' => 'bathroom modern'],
        ['src' => 'lakeforest/big/8_1.png',    'title' => 'Open white kitchen + island',       'meta' => 'Lake Forest', 'tags' => 'kitchen modern'],

        // Highland Park projects
        ['src' => 'highland/big/1_1.png',      'title' => 'Dark navy built-in cabinetry',      'meta' => 'Highland Park', 'tags' => 'kitchen traditional'],
        ['src' => 'highland/big/3_1.png',      'title' => 'White shaker family kitchen',       'meta' => 'Highland Park', 'tags' => 'kitchen modern'],
        ['src' => 'highland/big/5_1.png',      'title' => 'White kitchen, marble counters',    'meta' => 'Highland Park', 'tags' => 'kitchen modern'],
        ['src' => 'highland2/big/1_1.png',     'title' => 'Cherry traditional + granite',      'meta' => 'Highland Park', 'tags' => 'kitchen traditional'],
        ['src' => 'highland2/big/4_1.png',     'title' => 'Cherry kitchen, glass cabinets',    'meta' => 'Highland Park', 'tags' => 'kitchen traditional'],
        ['src' => 'highland3/big/1_1.png',     'title' => 'Two-tone white + gray island',      'meta' => 'Highland Park', 'tags' => 'kitchen modern'],
        ['src' => 'highland3/big/2_1.png',     'title' => 'Open white kitchen + island',       'meta' => 'Highland Park', 'tags' => 'kitchen modern'],
        ['src' => 'highland3/big/5_1.png',     'title' => 'Modern white kitchen + pendants',   'meta' => 'Highland Park', 'tags' => 'kitchen modern'],
        ['src' => 'highland3/big/7_1.png',     'title' => 'Granite vessel-sink bath',          'meta' => 'Highland Park', 'tags' => 'bathroom modern'],
        ['src' => 'highland3/big/10_1.png',    'title' => 'White inset kitchen + pendants',    'meta' => 'Highland Park', 'tags' => 'kitchen traditional'],

        // Winnetka projects
        ['src' => 'winnetka/big/3.png',        'title' => 'White shaker galley',               'meta' => 'Winnetka', 'tags' => 'kitchen modern'],
        ['src' => 'winnetka/big/6.png',        'title' => 'Open white island kitchen',         'meta' => 'Winnetka', 'tags' => 'kitchen modern'],
        ['src' => 'winnetka/big/8.png',        'title' => 'White kitchen + brass island',      'meta' => 'Winnetka', 'tags' => 'kitchen modern'],
        ['src' => 'winnetka/big/9.png',        'title' => 'Gas cooktop on quartz',             'meta' => 'Winnetka', 'tags' => 'countertop modern'],
        ['src' => 'winnetka/big/12.png',       'title' => 'Marble island + brass faucet',      'meta' => 'Winnetka', 'tags' => 'countertop modern'],

        // Chicago projects
        ['src' => 'chicago/big/5.png',         'title' => 'High-rise white kitchen',           'meta' => 'Chicago', 'tags' => 'kitchen modern'],
        ['src' => 'chicago/big/6.png',         'title' => 'Loft kitchen, exposed beams',       'meta' => 'Chicago', 'tags' => 'kitchen modern'],
        ['src' => 'chicago/big/8.png',         'title' => 'Marble close-up, brass faucet',     'meta' => 'Chicago', 'tags' => 'countertop modern'],
        ['src' => 'chicago/big/9.png',         'title' => 'Open white kitchen, hardwood',      'meta' => 'Chicago', 'tags' => 'kitchen modern'],

        // Buffalo Grove projects
        ['src' => 'buffalogrove1/big/1_1.png', 'title' => 'White kitchen, chandelier',         'meta' => 'Buffalo Grove', 'tags' => 'kitchen traditional'],
        ['src' => 'buffalogrove1/big/5_1.png', 'title' => 'White cabinets, hardwood',          'meta' => 'Buffalo Grove', 'tags' => 'kitchen modern'],
        ['src' => 'buffalogrove1/big/9_1.png', 'title' => 'White kitchen, stainless range',    'meta' => 'Buffalo Grove', 'tags' => 'kitchen modern'],

        // Built-ins
        ['src' => 'ourproducts/big/2_1.png',   'title' => 'Gray built-in entertainment',       'meta' => 'Lake Forest', 'tags' => 'kitchen modern'],
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
      <?php // Re-render inside masonry container (the above were duplicated for graceful fallback, clean approach below)
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
