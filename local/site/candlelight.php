<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Candlelight Cabinetry · Paradise Home Design';
$bp_meta_desc  = 'Candlelight Cabinetry — premium American-made cabinets, available through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'candlelight';
$bp_brand_name = 'Candlelight Cabinetry';
$bp_eyebrow    = 'Cabinetry partner';
$bp_hero_image = BASEURL . 'assets/img/hero/hero-5.jpg';
$bp_story = [
  'Candlelight is built in Buffalo, New York, by a family-owned cabinet shop that has been operating since 1989. Every box, drawer, and door is made in the United States from solid wood and plywood — no MDF, no particleboard.',
  'They\'re one of the few cabinet makers offering true inset doors at an attainable price point, which is why we specify them on most traditional and transitional kitchens on the North Shore.',
];
$bp_products = [
  ['name' => 'Carmel inset',      'desc' => 'Five-piece inset door. Painted or stained.'],
  ['name' => 'Brentwood overlay', 'desc' => 'Full-overlay shaker. Most popular line.'],
  ['name' => 'Norfolk slab',      'desc' => 'Flat-panel modern. Quartersawn oak available.'],
  ['name' => 'Sterling',          'desc' => 'Beaded inset detail. Period-traditional.'],
  ['name' => 'Westport raised panel','desc' => 'Classic raised panel. Cherry standard.'],
  ['name' => 'Custom paint',      'desc' => 'Match any Benjamin Moore or Sherwin-Williams.'],
  ['name' => 'Soft-close everything','desc' => 'Blum hinges and undermount slides standard.'],
  ['name' => 'Lifetime warranty', 'desc' => 'Boxes and finishes. Transferable.'],
];
$bp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Inset Candlelight kitchen',  'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.png', 'title' => 'Two-tone Brentwood island',   'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'indexpage/big/1_3.png', 'title' => 'Painted shaker remodel',      'location' => 'Winnetka, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
