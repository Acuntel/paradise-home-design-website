<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Schaub & Company Decorative Hardware · Paradise Home Design';
$bp_meta_desc  = 'Schaub & Company designer cabinet hardware, hand-finished knobs and pulls, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'schaub';
$bp_brand_name = 'Schaub & Company';
$bp_eyebrow    = 'Decorative hardware partner';
$bp_hero_image = BASEURL . 'flash/big/7.webp';
$bp_story = [
  'Schaub & Company makes some of the most refined decorative cabinet hardware on the market. Each piece is hand-finished, designed in collaboration with respected designers, and built to outlast the cabinet it\'s attached to.',
  'We specify Schaub when the rest of the project is premium and the hardware needs to match, hand-rubbed bronze, antique brass, polished nickel, mother-of-pearl. Catalog-favorite collections include Symphony, Mountain Series, and Italian Designs.',
];
$bp_products = [
  ['name' => 'Symphony',           'desc' => 'Classic transitional. Multi-finish offerings.'],
  ['name' => 'Mountain Series',    'desc' => 'Rustic luxury, hand-cast bronze.'],
  ['name' => 'Italian Designs',    'desc' => 'European aesthetic, hand-finished.'],
  ['name' => 'Casa Collection',    'desc' => 'Spanish-Mediterranean inspired.'],
  ['name' => 'Knobs + pulls',      'desc' => 'Cabinet, bath, and appliance hardware.'],
  ['name' => 'Mother-of-pearl',    'desc' => 'Inlaid statement pieces.'],
  ['name' => 'Hand-cast bronze',   'desc' => 'Solid metal, never plated.'],
  ['name' => 'Custom finishes',    'desc' => 'Match an existing antique.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Hand-rubbed bronze pulls',       'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'Gothic-detail cabinetry',         'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Antique brass on black',           'location' => 'Winnetka, IL'],
];
$bp_gallery_eyebrow = 'Gallery';
$bp_gallery_heading = 'Schaub & Company hardware we carry.';
$bp_gallery_desc    = 'A selection of knobs and pulls. Tap a photo to enlarge it.';
$bp_gallery_alt     = 'Schaub & Company decorative cabinet hardware';
$bp_gallery_product = true;
$bp_gallery = ['assets/img/gallery/schaub/1.webp', 'assets/img/gallery/schaub/2.webp', 'assets/img/gallery/schaub/3.webp', 'assets/img/gallery/schaub/4.webp', 'assets/img/gallery/schaub/5.webp', 'assets/img/gallery/schaub/6.webp'];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
