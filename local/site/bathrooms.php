<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Bathroom Remodeling · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Bathroom design and renovation on Chicago\'s North Shore, primary suites, powder rooms, full tile and stone. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'bathrooms';
$sp_hero_image   = BASEURL . 'flash/big/4.png';
$sp_hero_eyebrow = 'Bathroom remodeling';
$sp_hero_title   = 'Bathrooms that feel like the rest of the house.';
$sp_hero_desc    = 'From spa-style primary suites to compact powder rooms. Tile, stone, fixtures, lighting, handled.';
$sp_intro_heading = 'A bathroom is the smallest hardest room to remodel.';
$sp_intro_text   = 'Plumbing, waterproofing, ventilation, lighting, tile geometry. Get one of them wrong and you live with it for ten years. We get them right.';
$sp_materials_eyebrow = 'Surfaces, fixtures, finishes';
$sp_materials_heading = 'Built to last in a wet room.';
$sp_materials = [
  ['name' => 'Wall + floor tile',   'desc' => 'Imported porcelain, marble mosaic, large-format slab.'],
  ['name' => 'Vanity countertops', 'desc' => 'Quartz, quartzite, marble. Undermount or vessel sinks.'],
  ['name' => 'Custom vanities',    'desc' => 'Candlelight and Fabuwood. Soft-close everything.'],
  ['name' => 'Showers',            'desc' => 'Curbless, frameless glass, body sprays, steam options.'],
  ['name' => 'Tubs',               'desc' => 'Freestanding soaking, drop-in, walk-in. Cast iron or acrylic.'],
  ['name' => 'Fixtures',           'desc' => 'Brizo, Kohler, Hansgrohe. Polished, brushed, matte finishes.'],
  ['name' => 'Heated floors',      'desc' => 'Schluter Ditra-Heat or NuHeat. Worth every dollar.'],
  ['name' => 'Lighting',           'desc' => 'Wet-rated, dimmable, color-correct for makeup.'],
];
$sp_projects = [
  ['img' => BASEURL.'flash/big/7.png', 'title' => 'Marble primary bath',     'location' => 'Deerfield, IL'],
  ['img' => BASEURL.'flash/big/4.png', 'title' => 'Walk-in shower remodel',  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/1.png', 'title' => 'Powder room refresh',     'location' => 'Winnetka, IL'],
];
$sp_current_page = 'bathrooms';
include "includes/components/service_page.php";
?>
