<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Casabella Flooring · Paradise Home Design';
$bp_meta_desc  = 'Casabella hardwood flooring, Italian-influenced wide-plank engineered floors through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'casebella';
$bp_brand_name = 'Casabella';
$bp_eyebrow    = 'Flooring partner';
$bp_hero_image = BASEURL . 'flash/big/5.webp';
$bp_story = [
  'Casabella brings European-style wide-plank wood floors to the North American market. Italian design language, oak sourced from European forests, finished in North America for our climate.',
  'We use Casabella when a client wants the look of a luxury European villa floor but needs domestic lead times and warranty support.',
];
$bp_products = [
  ['name' => 'Wide-plank oak',   'desc' => '9.5" plank standard. Up to 12" available.'],
  ['name' => 'Wire-brushed',     'desc' => 'Subtle texture. Catches light.'],
  ['name' => 'Hand-scraped',     'desc' => 'Old-world character.'],
  ['name' => 'Smooth finish',    'desc' => 'Modern minimal.'],
  ['name' => 'Stains',           'desc' => 'Light natural to deep espresso.'],
  ['name' => 'Engineered core',  'desc' => 'Stable over radiant heat.'],
  ['name' => 'Long planks',      'desc' => 'Up to 86" lengths. Premium look.'],
  ['name' => '25-year warranty', 'desc' => 'Residential coverage.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/6.webp',      'title' => 'Wire-brushed European oak', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'Smooth long-plank install',  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.webp',      'title' => 'Hand-scraped statement floor','location' => 'Winnetka, IL'],
];
$bp_gallery_eyebrow = 'Gallery';
$bp_gallery_heading = 'Casabella floors we carry.';
$bp_gallery_desc    = 'A selection of Casabella flooring and tile. Tap a photo to enlarge it.';
$bp_gallery_alt     = 'Casabella flooring sample';
$bp_gallery = ['assets/img/gallery/casabella/1.webp', 'assets/img/gallery/casabella/2.webp', 'assets/img/gallery/casabella/3.webp', 'assets/img/gallery/casabella/4.webp', 'assets/img/gallery/casabella/5.webp', 'assets/img/gallery/casabella/6.webp'];
$bp_current_page = 'countertops';
include "includes/components/brand_page.php";
?>
