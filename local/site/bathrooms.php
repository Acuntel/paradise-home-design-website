<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Bathroom Remodeling · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Bathroom design and renovation on Chicago\'s North Shore, primary suites, powder rooms, full tile and stone. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'bathrooms';
$sp_hero_image   = BASEURL . 'flash/big/bathrooms-hero.webp';
$sp_hero_eyebrow = 'Bathroom remodeling';
$sp_hero_title   = 'Bathrooms Designed for Living.';
$sp_hero_desc    = 'From luxurious primary bathrooms to functional powder rooms, we handle every detail—from design and materials to construction and finishing touches.';
$sp_intro_heading = 'A bathroom is the smallest hardest room to remodel.';
$sp_intro_text   = 'From layout and lighting to tile, fixtures, and waterproofing, we design and build spaces that are beautiful, functional, and made to last.';
$sp_materials_eyebrow = 'Surfaces, fixtures, finishes';
$sp_materials_heading = 'Crafted to Last for Years to Come.';
$sp_materials = [
  ['name' => 'Wall + floor tile',   'desc' => 'Imported porcelain, marble mosaic, large-format slab.'],
  ['name' => 'Vanity countertops', 'desc' => 'Quartz, quartzite, marble. Undermount or vessel sinks.'],
  ['name' => 'Custom vanities',    'desc' => 'Soft-close, tailored storage, premium finishes, integrated power outlets, under-cabinet lighting, durable construction.'],
  ['name' => 'Showers',            'desc' => 'Curbless, frameless glass, body sprays, steam options.'],
  ['name' => 'Tubs',               'desc' => 'Freestanding soaking, drop-in, walk-in. Cast iron or acrylic.'],
  ['name' => 'Fixtures',           'desc' => 'Brizo, Kohler, Hansgrohe, Newport Brass. Numerous finishes.'],
  ['name' => 'Heated floors',      'desc' => 'Schluter Ditra-Heat or NuHeat. Worth every dollar.'],
  ['name' => 'Lighting',           'desc' => 'Wet-rated, dimmable controls, adjustable color temperature.'],
];
// All three photos are the client's finals (Mount Prospect received 2026-09-02).
// Tiles open the project's photos in an in-page modal (client: don't jump to the portfolio page).
$sp_projects = [
  ['img' => BASEURL.'lakeforest2/big/bath1.webp',      'title' => 'Lake Forest Project',   'location' => '',
   'tag' => 'Bathroom Remodel', 'meta' => 'Lake Forest, IL',
   'paras' => ['Two refreshed baths with custom vanities, double sinks, and a tiled walk-in shower.'],
   'images' => ['lakeforest2/big/bath1.webp','lakeforest2/big/bath3.webp']],
  ['img' => BASEURL.'vernonhills1/big/bath-main.webp', 'title' => 'Vernon Hills Project',   'location' => '',
   'tag' => 'Bathroom Remodel', 'meta' => 'Vernon Hills, IL · Before & after',
   'paras' => ['A dated tub bathroom transformed into a warm, modern retreat: marble-look porcelain, brushed gold fixtures, a walk-in shower with a black hexagon mosaic floor, and warm wood vanities. The last two photos show the space before the remodel.'],
   'images' => ['vernonhills1/big/bath-main.webp','vernonhills1/big/after3.webp','vernonhills1/big/after1.webp','vernonhills1/big/after2.webp','vernonhills1/big/after4.webp','vernonhills1/big/after5.webp','vernonhills1/big/before1.webp','vernonhills1/big/before2.webp']],
  ['img' => BASEURL.'mountprospect1/big/bath-main.webp', 'title' => 'Mount Prospect Project', 'location' => '',
   'tag' => 'Bathroom Remodel', 'meta' => 'Mount Prospect, IL',
   'paras' => ['A stained wood vanity with a vessel sink and granite countertop, finished with a sliding barn-door mirror.'],
   'images' => ['mountprospect1/big/bath-main.webp']],
];
$sp_current_page = 'bathrooms';
$cta_heading = "Let's design the bathroom you've been picturing.";
$faqs = [
  ['q' => 'How long does a bathroom remodel take?', 'a' => 'A typical bathroom remodel takes 3 to 6 weeks of on-site work after design and material selection. Larger primary baths or jobs that relocate plumbing take longer. You get a schedule before work begins.'],
  ['q' => 'Can you build a curbless or walk-in shower for aging in place?', 'a' => 'Yes. We build curbless walk-in showers, add grab bars and built-in seating, widen doorways, and design accessible, aging-in-place bathrooms that still look high-end — tailored to your needs without an institutional look.'],
  ['q' => 'Do you handle permits, plumbing, and electrical?', 'a' => 'Yes. As a design-build remodeler we pull permits and coordinate licensed plumbers and electricians, and we manage all inspections. One accountable team handles the entire bathroom.'],
  ['q' => 'Can you remodel a small or powder bathroom?', 'a' => 'Absolutely. We remodel bathrooms of every size, from compact powder rooms to large primary suites. Smaller baths are often a fast, high-impact project, and our designers maximize storage and light in tight footprints.'],
];
include "includes/components/service_page.php";
?>
