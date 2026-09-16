<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Homecrest Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Homecrest semi-custom cabinetry, quality American-made boxes through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'homecrest';
$bp_brand_name = 'Homecrest';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/4.webp';
$bp_story = [
  'Homecrest has been making cabinets in Goshen, Indiana since 1962. They invented the laminated cabinet box and remain one of the most consistent, well-built semi-custom lines available.',
  'We use Homecrest for clients who want American craftsmanship without the wait of true custom. Lead times are reliable, finishes are excellent, and the warranty is among the strongest in the industry.',
  'Homecrest is certified in the Kitchen Cabinet Manufacturers Association (KCMA) Environmental Stewardship Program, using responsibly sourced materials and low-emission coatings — a measurable sustainability standard, not just a marketing claim.',
];
$bp_products = [
  ['name' => 'Bayport',          'desc' => 'Classic five-piece shaker. Most popular door.'],
  ['name' => 'Tahoma',           'desc' => 'Slab-front modern. Painted finishes.'],
  ['name' => 'Coronado',         'desc' => 'Raised panel traditional.'],
  ['name' => 'Jamestown',        'desc' => 'Beaded inset. Period detail.'],
  ['name' => 'Wood species',     'desc' => 'Maple, cherry, oak, hickory standard.'],
  ['name' => 'Full-extension drawers','desc' => 'Soft-close everywhere.'],
  ['name' => 'Lifetime warranty', 'desc' => 'On the cabinet box.'],
  ['name' => 'Quick ship',       'desc' => '4-6 week typical lead time.'],
];
$bp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'Bayport painted kitchen', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/6.webp', 'title' => 'Tahoma slab remodel',     'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Coronado traditional', 'location' => 'Glencoe, IL'],
];
$bp_current_page = 'kitchens';
$bp_gallery = [
  'assets/img/gallery/homecrest/1.webp',
  'assets/img/gallery/homecrest/2.webp',
  'assets/img/gallery/homecrest/3.webp',
  'assets/img/gallery/homecrest/4.webp',
  'assets/img/gallery/homecrest/5.webp',
  'assets/img/gallery/homecrest/6.webp',
  'assets/img/gallery/homecrest/7.webp',
  'assets/img/gallery/homecrest/8.webp',
];
include "includes/components/brand_page.php";
?>
