<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Kährs Hardwood Flooring · Paradise Home Design';
$bp_meta_desc  = 'Kährs Swedish-made hardwood flooring, the inventor of engineered wood floors, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'kahrs';
$bp_brand_name = 'Kährs';
$bp_eyebrow    = 'Flooring partner';
$bp_hero_image = BASEURL . 'flash/big/7.webp';
$bp_story = [
  'Kährs is the oldest wood floor company in the world. They invented the engineered wood floor in 1941, every other engineered floor on the market is a copy of theirs.',
  'Swedish design, Scandinavian forests, FSC-certified wood. When a client wants a floor that looks like it belongs in an architecture magazine, we specify Kährs.',
];
$bp_products = [
  ['name' => 'Linnea collection','desc' => 'Wide-plank European oak. Designer staple.'],
  ['name' => 'Original line',    'desc' => 'Traditional 7.5" plank, brushed and oiled.'],
  ['name' => 'Nouveau',          'desc' => 'Smoked and stained dark oak.'],
  ['name' => 'Da Capo',          'desc' => 'Hand-scraped antique character.'],
  ['name' => 'Sand finish',      'desc' => 'Matte, low-sheen, modern.'],
  ['name' => 'Oil finish',       'desc' => 'Hard wax oil. Repairable in place.'],
  ['name' => 'Wide widths',      'desc' => '8.5" planks standard. Up to 13" custom.'],
  ['name' => 'Sustainable',      'desc' => 'FSC certified. Solar-powered factory.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Linnea European oak install', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'indexpage/big/1_1.webp',      'title' => 'Nouveau smoked oak',           'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/6.webp',      'title' => 'Da Capo hand-scraped',         'location' => 'Lake Forest, IL'],
];
$bp_current_page = 'countertops';
include "includes/components/brand_page.php";
?>
