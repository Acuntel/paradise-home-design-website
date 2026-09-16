<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'QCCI — Quality Custom Cabinetry | Paradise Home Design, Lake Forest IL';
$bp_meta_desc  = 'Quality Custom Cabinetry (QCCI), heirloom-grade custom cabinets since 1968, available through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'qcci';
$bp_brand_name = 'Quality Custom Cabinetry';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/2.webp';
$bp_story = [
  'Quality Custom Cabinetry (QCCI) was founded in 1968 by Martin H. Weaver in Brownstown, Pennsylvania, as a two-person shop rooted in Lancaster County craftsmanship. His goal was simple: build one quality kitchen a day, with honesty and pride.',
  'Still family-owned and run by his son and son-in-law, QCCI is now one of the nation\'s most respected custom cabinetry makers — chosen by elite designers, chefs, and discerning homeowners, and built by a team of more than 100 skilled artisans. We specify QCCI for our most detail-driven, heirloom-quality kitchens.',
];
$bp_products = [
  ['name' => 'True custom',            'desc' => 'Every kitchen built to order in Brownstown, PA.'],
  ['name' => 'Family-owned since 1968','desc' => 'Founded by Martin H. Weaver; still family-run.'],
  ['name' => 'Lancaster craftsmanship','desc' => 'Rooted in Pennsylvania woodworking tradition.'],
  ['name' => 'Inset specialists',      'desc' => 'Heirloom-quality inset cabinetry.'],
  ['name' => 'Designer-grade',         'desc' => 'Specified by elite designers, chefs, and homeowners.'],
  ['name' => 'Hand-built by artisans', 'desc' => 'A team of 100+ skilled craftspeople.'],
  ['name' => 'Unlimited finishes',     'desc' => 'Custom paints, stains, and glazes.'],
  ['name' => 'One quality kitchen a day','desc' => 'The founding standard, still upheld.'],
];
$bp_gallery = [
  'products/details/59.webp',
  'products/details/60.webp',
  'products/details/61.webp',
  'products/details/62.webp',
  'products/details/63.webp',
  'products/details/64.webp',
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/2.webp',       'title' => 'Black & marble custom kitchen', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.webp', 'title' => 'Heirloom inset island',         'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/5.webp',       'title' => 'Custom white shaker',           'location' => 'Winnetka, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
