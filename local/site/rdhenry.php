<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'R.D. Henry Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'R.D. Henry custom cabinetry, founded 1981 in Wichita, Kansas. 104 door styles and 10 wood species, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'rdhenry';
$bp_brand_name = 'R.D. Henry';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/7.webp';
$bp_story = [
  'R.D. Henry & Co. has been building custom cabinetry since 1981, when Ron and Dan Henry started Custom Cupboards in Wichita, Kansas. Their first year produced 16 kitchens in oak with two door styles.',
  'Today they offer 104 door styles across 10 wood species with 16 stains, 19 paints, and 80+ premium finishes. Their Revola line introduced frameless construction. We specify R.D. Henry when clients want the broadest possible custom palette.',
];
$bp_products = [
  ['name' => '104 door styles',    'desc' => 'Largest selection in the cabinet industry.'],
  ['name' => '10 wood species',    'desc' => 'Maple, cherry, oak, walnut, alder, hickory, more.'],
  ['name' => '16 standard stains', 'desc' => 'Plus custom stain matching.'],
  ['name' => '19 standard paints', 'desc' => 'Hand-applied, sprayed or brushed.'],
  ['name' => '80+ premium finish', 'desc' => 'Glazes, distressing, hand-rubbed.'],
  ['name' => 'Revola frameless',   'desc' => 'European-style frameless box.'],
  ['name' => 'Traditional framed', 'desc' => 'Classic American construction.'],
  ['name' => 'Lifetime warranty',  'desc' => 'On the cabinet construction.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Custom cherry traditional', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Painted custom kitchen',     'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'Built-in library + bar',     'location' => 'Winnetka, IL'],
];
$bp_current_page = 'kitchens';
$bp_gallery = [
  'assets/img/gallery/henry/1.webp',
  'assets/img/gallery/henry/2.webp',
  'assets/img/gallery/henry/3.webp',
  'assets/img/gallery/henry/4.webp',
  'assets/img/gallery/henry/5.webp',
  'assets/img/gallery/henry/6.webp',
  'assets/img/gallery/henry/7.webp',
  'assets/img/gallery/henry/8.webp',
];
include "includes/components/brand_page.php";
?>
