<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Homecrest Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Homecrest semi-custom cabinetry — quality American-made boxes through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'homecrest';
$bp_brand_name = 'Homecrest';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'assets/img/hero/hero-3.jpg';
$bp_story = [
  'Homecrest has been making cabinets in Goshen, Indiana since 1962. They invented the laminated cabinet box and remain one of the most consistent, well-built semi-custom lines available.',
  'We use Homecrest for clients who want American craftsmanship without the wait of true custom. Lead times are reliable, finishes are excellent, and the warranty is among the strongest in the industry.',
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
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Bayport painted kitchen', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'indexpage/big/1_3.png', 'title' => 'Tahoma slab remodel',     'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'assets/img/hero/hero-4.jpg', 'title' => 'Coronado traditional', 'location' => 'Glencoe, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
