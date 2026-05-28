<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Fabuwood Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Fabuwood cabinetry, quality semi-custom cabinets at attainable prices, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'fabuwood';
$bp_brand_name = 'Fabuwood';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/1.png';
$bp_story = [
  'Fabuwood is the value play. Semi-custom cabinets at a price point that lets us deliver a premium kitchen even when the budget is tight. Made in New Jersey with all-plywood box construction.',
  'We use Fabuwood when the design is great, the materials need to stretch, and the client wants a complete kitchen rather than the most expensive cabinet on the market.',
];
$bp_products = [
  ['name' => 'Galaxy line',     'desc' => 'Full-overlay shaker. Widest paint palette.'],
  ['name' => 'Allure',           'desc' => 'Stained line. Maple, cherry, oak.'],
  ['name' => 'Quest premium',   'desc' => 'Upgraded construction. Closer to custom feel.'],
  ['name' => 'Onyx contemporary','desc' => 'Modern slab and frameless options.'],
  ['name' => 'Stock colors',     'desc' => 'White, gray, navy, charcoal, espresso.'],
  ['name' => 'Soft-close',       'desc' => 'Standard on doors and drawers.'],
  ['name' => 'Plywood boxes',    'desc' => 'No particleboard. Even at this price.'],
  ['name' => '5-year warranty',  'desc' => 'On finishes and hardware.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/1.png', 'title' => 'Galaxy white shaker kitchen', 'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.png',     'title' => 'Onyx contemporary remodel',    'location' => 'Deerfield, IL'],
  ['img' => BASEURL.'flash/big/4.png', 'title' => 'Quest premium upgrade',        'location' => 'Northbrook, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
