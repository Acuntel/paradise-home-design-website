<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Woodland Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Woodland Cabinetry, family-owned custom cabinets from Sisseton, South Dakota, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'woodland';
$bp_brand_name = 'Woodland';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/1.png';
$bp_story = [
  'Woodland Cabinetry has been operating in Sisseton, South Dakota for more than 20 years. Family-owned, small-town employer, not a corporate manufacturer driven by stock performance.',
  'We use Woodland when clients want affordable custom cabinetry, real wood, low-VOC finishes, and a story they can tell about who built it. Lead times are reliable and the price-to-quality is hard to match.',
];
$bp_products = [
  ['name' => 'Painted shaker',     'desc' => 'Most popular line. Wide paint palette.'],
  ['name' => 'Stained traditional','desc' => 'Maple, cherry, oak.'],
  ['name' => 'Slab modern',        'desc' => 'Flat-front contemporary.'],
  ['name' => 'Inset construction', 'desc' => 'Period-traditional upgrade.'],
  ['name' => 'Custom sizes',       'desc' => 'Built to fit, not adapted.'],
  ['name' => 'Low-VOC finishes',   'desc' => 'Healthier indoor air.'],
  ['name' => 'Soft-close standard','desc' => 'Doors and drawers.'],
  ['name' => 'Lifetime warranty',  'desc' => 'On boxes and hardware.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/1.png', 'title' => 'Painted shaker family kitchen', 'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'flash/big/5.png', 'title' => 'White shaker island',           'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/4.png', 'title' => 'Bath vanity remodel',           'location' => 'Highland Park, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
