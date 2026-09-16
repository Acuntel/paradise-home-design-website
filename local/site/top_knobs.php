<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Top Knobs Decorative Hardware · Paradise Home Design';
$bp_meta_desc  = 'Top Knobs designer cabinet knobs, pulls, and hardware in a wide range of styles and finishes, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'top_knobs';
$bp_brand_name = 'Top Knobs';
$bp_eyebrow    = 'Decorative hardware partner';
$bp_hero_image = BASEURL . 'flash/big/2.webp';
$bp_story = [
  'Top Knobs has been making decorative cabinet hardware since 1994, with one of the deepest catalogs in the industry, thousands of knobs, pulls, and appliance handles across transitional, traditional, and contemporary styles.',
  'We specify Top Knobs when a kitchen or bath needs the perfect finishing detail. From warm brass to matte black to brushed nickel, the range of styles and finishes means the hardware always ties the room together.',
];
$bp_products = [
  ['name' => 'Grace',           'desc' => 'Refined transitional knobs and pulls.'],
  ['name' => 'Serene',          'desc' => 'Clean, contemporary cabinet hardware.'],
  ['name' => 'Devon',           'desc' => 'Classic traditional detailing.'],
  ['name' => 'Barrington',      'desc' => 'Timeless, versatile profiles.'],
  ['name' => 'Transcend',       'desc' => 'Modern bar pulls and knobs.'],
  ['name' => 'Appliance pulls', 'desc' => 'Oversized pulls for refrigerators and panels.'],
  ['name' => 'Cabinet knobs',   'desc' => 'Hundreds of shapes and sizes.'],
  ['name' => 'Many finishes',   'desc' => 'Brass, bronze, black, nickel, pewter, and more.'],
];
$bp_gallery_eyebrow = 'Gallery';
$bp_gallery_heading = 'Top Knobs hardware we carry.';
$bp_gallery_desc    = 'A selection of knobs and pulls. Tap a photo to enlarge it.';
$bp_gallery_alt     = 'Top Knobs decorative cabinet hardware';
$bp_gallery_product = true;
$bp_gallery = ['assets/img/gallery/top_knobs/1.webp', 'assets/img/gallery/top_knobs/2.webp', 'assets/img/gallery/top_knobs/3.webp', 'assets/img/gallery/top_knobs/4.webp', 'assets/img/gallery/top_knobs/5.webp', 'assets/img/gallery/top_knobs/6.webp', 'assets/img/gallery/top_knobs/7.webp'];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
