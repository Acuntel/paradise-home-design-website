<?php
ob_start(); session_start();
include_once("includes/config.php");
$current_page = '';
$baseurl = BASEURL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Remodeling Tips & Ideas — The Paradise Journal | Lake Forest, IL</title>
<meta name="description" content="Kitchen and bathroom remodeling guides, cost breakdowns, and design ideas for Chicago's North Shore — from Paradise Home Design in Lake Forest, IL.">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/blog.html" />
<meta property="og:title" content="The Paradise Journal — Remodeling Tips & Ideas" />
<meta property="og:description" content="Kitchen and bath remodeling guides for Chicago's North Shore." />
<meta property="og:image" content="https://www.paradisehomedesigninc.com/flash/big/2.webp" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<?php include_once("includes/headtags.php"); ?>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $baseurl . 'flash/big/2.webp';
  $hero_eyebrow = 'The Paradise Journal';
  $hero_title   = 'Remodeling tips, costs & ideas.';
  $hero_description = 'Guides for kitchen and bath remodeling on Chicago\'s North Shore.';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<section>
  <div class="container">
    <?php
      $posts = [
        ['slug' => 'permit-guide',     'title' => 'Do You Need a Permit to Remodel? A North Shore Village-by-Village Guide', 'date' => 'Guide', 'img' => 'flash/big/3.webp', 'excerpt' => 'Which villages require permits, who issues them, and how we handle the whole process for you.'],
        ['slug' => 'remodel-timeline',  'title' => 'Kitchen Remodel Timeline: What 12 Weeks Actually Looks Like',           'date' => 'Guide', 'img' => 'flash/big/7.webp', 'excerpt' => 'A realistic week-by-week look at design, ordering, demo, and installation.'],
        ['slug' => 'financing',         'title' => 'How to Finance a Kitchen or Bath Remodel on the North Shore',           'date' => 'Guide', 'img' => 'flash/big/2.webp', 'excerpt' => 'HELOC, home-equity, contractor financing, and cash — plus how to budget and a contingency.'],
        ['slug' => 'blog-kitchen-remodel-cost',          'title' => 'How Much Does a Kitchen Remodel Cost in Lake Forest & the North Shore?', 'date' => 'May 12, 2026', 'img' => 'flash/big/5.webp', 'excerpt' => 'A clear 2026 breakdown of what a kitchen remodel really costs here — and what drives the number.'],
        ['slug' => 'blog-kitchen-trends-2026',            'title' => '2026 Kitchen Design Trends on Chicago\'s North Shore',                  'date' => 'May 20, 2026', 'img' => 'flash/big/2.webp', 'excerpt' => 'Warm woods, statement stone, hidden appliances, and the other trends our clients are asking for.'],
        ['slug' => 'blog-custom-vs-semi-custom-cabinets', 'title' => 'Custom vs. Semi-Custom Cabinets: How to Choose',                       'date' => 'May 26, 2026', 'img' => 'flash/big/7.webp', 'excerpt' => 'The real differences in price, lead time, and quality — and which is right for your kitchen.'],
        ['slug' => 'blog-bathroom-remodel-guide',         'title' => 'Planning a Bathroom Remodel: A North Shore Homeowner\'s Guide',        'date' => 'May 29, 2026', 'img' => 'flash/big/4.webp', 'excerpt' => 'Costs, timelines, layout tips, and what to prioritize for a bathroom remodel that lasts.'],
      ];
    ?>
    <div class="pd-grid pd-grid-3 pd-grid-staggered">
      <?php foreach ($posts as $p): ?>
        <a class="card" href="<?php echo $baseurl . $p['slug']; ?>.html" data-reveal style="text-decoration:none">
          <div class="card-media" style="aspect-ratio:4/3">
            <img src="<?php echo $baseurl . $p['img']; ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" loading="lazy">
          </div>
          <div class="card-body">
            <span class="eyebrow" style="font-size:.72rem"><?php echo htmlspecialchars($p['date']); ?></span>
            <h3 style="font-size:1.2rem;margin:.5rem 0 .5rem;line-height:1.3"><?php echo htmlspecialchars($p['title']); ?></h3>
            <p class="small" style="color:var(--paradise-stone-500)"><?php echo htmlspecialchars($p['excerpt']); ?></p>
            <span class="btn-ghost" style="margin-top:.5rem;display:inline-block">Read more →</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
  $cta_heading = 'Ready to start your project?';
  $cta_subhead = 'Book a free design consultation at our Lake Forest showroom.';
  $cta_button_text = 'Schedule a consultation';
  $cta_button_href = $baseurl . 'contact.html';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>
</body>
</html>
