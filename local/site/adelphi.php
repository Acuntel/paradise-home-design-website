<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Adelphi Kitchens — Custom American Cabinetry | Paradise Home Design, Lake Forest IL';
$bp_meta_desc  = 'Adelphi Kitchens, fully custom American-made cabinetry since 1946, available through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'adelphi';
$bp_brand_name = 'Adelphi Kitchens';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/7.webp';
$bp_story = [
  'Adelphi Kitchens began in 1946 as a small family operation in a garage in Reading, Pennsylvania, and grew into a nationally recognized custom cabinetmaker — even crafting display cases for the U.S. Capitol. Since 1984 it has operated from a 160,000-square-foot facility in Robesonia and remains family-owned with more than 70 years of experience.',
  'Adelphi still builds each cabinet with care, one at a time — about 60 kitchens a week from a team of 120 craftspeople, trusted by roughly 250 dealers nationwide. We specify Adelphi when a client wants true American custom cabinetry with furniture-grade detail.',
];
$bp_products = [
  ['name' => 'Fully custom',          'desc' => 'Built to your exact sizes and specs, one cabinet at a time.'],
  ['name' => 'Made in the USA',       'desc' => 'Crafted in Robesonia, Pennsylvania since 1984.'],
  ['name' => 'Family-owned since 1946','desc' => 'Three generations of American cabinetmakers.'],
  ['name' => 'Framed construction',   'desc' => 'Traditional American framed cabinetry, built to last.'],
  ['name' => 'Inset & overlay doors', 'desc' => 'Full range of door styles and overlays.'],
  ['name' => 'Painted & stained',     'desc' => 'Custom color matching across the finish palette.'],
  ['name' => 'Furniture-grade detail','desc' => 'Display-case craftsmanship — they built cases for the U.S. Capitol.'],
  ['name' => 'North Shore source',    'desc' => 'Paradise is your local Adelphi dealer in Lake Forest.'],
];
$bp_gallery = [
  'products/details/65.webp',
  'products/details/66.webp',
  'products/details/67.webp',
  'products/details/68.webp',
  'products/details/69.webp',
  'products/details/70.webp',
];
$bp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'Custom inset kitchen',     'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/3.webp',       'title' => 'Traditional built-ins',     'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/7.webp',       'title' => 'Cherry custom kitchen',      'location' => 'Winnetka, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
