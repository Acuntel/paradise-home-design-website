<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Mercier Wood Flooring · Paradise Home Design';
$bp_meta_desc  = 'Mercier hardwood flooring — Canadian-made engineered and solid wood floors through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'mercier';
$bp_brand_name = 'Mercier Wood';
$bp_eyebrow    = 'Flooring partner';
$bp_hero_image = BASEURL . 'flash/big/1.png';
$bp_story = [
  'Mercier has been making hardwood floors in Quebec since 1980. They run one of the most advanced wood-finishing operations in North America — UV-cured Generations finish is harder than what comes off most factory floors.',
  'We specify Mercier when we want a real-wood floor that handles a kitchen — moisture from cooking, scratches from chairs, foot traffic from a real family.',
];
$bp_products = [
  ['name' => 'Generations finish','desc' => 'UV-cured aluminum-oxide. 35-year residential warranty.'],
  ['name' => 'Red oak',          'desc' => 'Classic. Stains beautifully. Most popular species.'],
  ['name' => 'White oak',        'desc' => 'Cleaner grain. Trends modern.'],
  ['name' => 'Maple',            'desc' => 'Smooth, light, contemporary.'],
  ['name' => 'Walnut',           'desc' => 'Rich dark tones. Designer favorite.'],
  ['name' => 'Hickory',          'desc' => 'Wild grain. Rustic.'],
  ['name' => 'Wide-plank',       'desc' => 'Up to 7.5" widths. Engineered for stability.'],
  ['name' => 'Custom stains',    'desc' => '200+ available. Match anything.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/1.png', 'title' => 'Wide-plank white oak kitchen', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'indexpage/big/1_1.png',      'title' => 'Stained walnut floor',          'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/5.png', 'title' => 'Red oak refinish',              'location' => 'Highland Park, IL'],
];
$bp_current_page = 'countertops';
include "includes/components/brand_page.php";
?>
