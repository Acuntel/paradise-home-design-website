<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Medallion Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Medallion Cabinetry, American-made semi-custom cabinets with extensive style and finish options, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'medallion';
$bp_brand_name = 'Medallion';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'flash/big/5.png';
$bp_story = [
  'Medallion has been building cabinets in the United States for generations, with manufacturing and customer care in Minnesota. Their range of styles, materials, hand-applied finishes, and storage solutions is one of the widest on the market.',
  'We use Medallion when a client wants the breadth of true custom (door styles, paint colors, organizational accessories) at a competitive semi-custom price point.',
];
$bp_products = [
  ['name' => 'Designer collection',  'desc' => 'Top-tier finish and detail options.'],
  ['name' => 'Silverline',           'desc' => 'Quality semi-custom, attainable price.'],
  ['name' => 'Painted finishes',     'desc' => 'Hand-applied. Match any palette.'],
  ['name' => 'Wood species',         'desc' => 'Maple, cherry, oak, hickory, alder.'],
  ['name' => 'Storage solutions',    'desc' => 'Pull-outs, organizers, lazy susans, dividers.'],
  ['name' => 'Style range',          'desc' => 'Modern slab to period-traditional inset.'],
  ['name' => 'Quick ship',           'desc' => '4-6 week typical lead time.'],
  ['name' => 'Lifetime warranty',    'desc' => 'On the cabinet construction.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/5.png', 'title' => 'White shaker family kitchen', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/1.png', 'title' => 'Blue island remodel',         'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/6.png', 'title' => 'Coastal white kitchen',       'location' => 'Florida'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
