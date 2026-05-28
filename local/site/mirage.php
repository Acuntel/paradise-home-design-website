<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Mirage Hardwood Flooring · Paradise Home Design';
$bp_meta_desc  = 'Mirage premium hardwood flooring — North America\'s #1-rated wood floor, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'mirage';
$bp_brand_name = 'Mirage';
$bp_eyebrow    = 'Flooring partner';
$bp_hero_image = BASEURL . 'flash/big/4.png';
$bp_story = [
  'Mirage has been the #1-rated hardwood floor in North America for over a decade — independent surveys, not marketing. Made in Saint-Georges, Quebec since 1981.',
  'Their Nanolinx finish is the most durable in the industry: aluminum oxide combined with a proprietary nano-particle layer. We use Mirage when the floor needs to hold up to dogs, kids, and chairs without showing it.',
];
$bp_products = [
  ['name' => 'Nanolinx finish',  'desc' => 'Most durable factory finish available.'],
  ['name' => 'Sweet Memories',   'desc' => 'Hand-scraped texture. Lived-in look.'],
  ['name' => 'Admiration',       'desc' => 'Wire-brushed. Modern texture.'],
  ['name' => 'Imagine',          'desc' => 'Wide-plank engineered. Up to 8".'],
  ['name' => 'Classic',          'desc' => 'Smooth, traditional finish.'],
  ['name' => 'Red + white oak',  'desc' => 'Both available across all lines.'],
  ['name' => 'Maple + hickory',  'desc' => 'For lighter, more rustic palettes.'],
  ['name' => '35-year warranty', 'desc' => 'Residential finish coverage.'],
];
$bp_projects = [
  ['img' => BASEURL.'indexpage/big/1_2.png',      'title' => 'Wire-brushed white oak',     'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/4.png', 'title' => 'Hand-scraped wide-plank',     'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'flash/big/6.png',      'title' => 'Classic smooth oak',          'location' => 'Glencoe, IL'],
];
$bp_current_page = 'countertops';
include "includes/components/brand_page.php";
?>
