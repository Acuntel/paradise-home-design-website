<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Holiday Kitchens Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Holiday Kitchens cabinetry, custom American-made cabinets since 1946, available through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'holiday_kitchen';
$bp_brand_name = 'Holiday Kitchens';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/3.webp';
$bp_story = [
  'Holiday Kitchens (Mastercraft Industries) has been building custom cabinetry in the USA since 1946, when three brothers started a millwork shop after the post-war boom. They now run a 150,000 square-foot plant with nearly 200 employees.',
  'We specify Holiday Kitchens when a project needs more than a kitchen, custom baths, entertainment centers, bars, libraries. One shop, one finish, one delivery, every cabinet in the house matches.',
];
$bp_products = [
  ['name' => 'Custom cabinets',     'desc' => 'Built to your exact dimensions. No standard sizes.'],
  ['name' => 'Full-overlay shaker', 'desc' => 'Most popular door. Painted or stained.'],
  ['name' => 'Inset construction',  'desc' => 'Period-traditional detail. Premium upgrade.'],
  ['name' => 'Beaded inset',        'desc' => 'Classic frame-and-panel.'],
  ['name' => 'Bath vanities',       'desc' => 'Matching finishes across kitchen and bath.'],
  ['name' => 'Entertainment',       'desc' => 'Built-ins for TVs, bars, libraries.'],
  ['name' => 'Wood species',        'desc' => 'Maple, cherry, oak, walnut, hickory.'],
  ['name' => 'Lifetime warranty',   'desc' => 'On the cabinet construction.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'Gothic-style built-in',    'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen','location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Library + cabinetry',       'location' => 'Winnetka, IL'],
];
$bp_current_page = 'kitchens';
$bp_gallery = [
  'assets/img/gallery/holiday/1.webp',
  'assets/img/gallery/holiday/2.webp',
  'assets/img/gallery/holiday/3.webp',
  'assets/img/gallery/holiday/4.webp',
  'assets/img/gallery/holiday/5.webp',
  'assets/img/gallery/holiday/6.webp',
  'assets/img/gallery/holiday/7.webp',
  'assets/img/gallery/holiday/8.webp',
];
include "includes/components/brand_page.php";
?>
