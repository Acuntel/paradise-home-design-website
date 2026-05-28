<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Countertops · Quartz, Marble, Quartzite · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Custom countertop fabrication and install on Chicago\'s North Shore. Quartz, marble, quartzite, soapstone. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'counter_tops';
$sp_hero_image   = BASEURL . 'assets/img/hero/hero-4.jpg';
$sp_hero_eyebrow = 'Countertops';
$sp_hero_title   = 'The surface that defines the room.';
$sp_hero_desc    = 'Quartz, quartzite, marble, soapstone, butcher block. Sourced direct from Mercier, Mirage, and Casabella.';
$sp_intro_heading = 'Countertops are 80% of what people notice. Choose well.';
$sp_intro_text   = 'We bring slab samples to your kitchen so you see them under your light, against your cabinets, before you commit. Pricing is per-slab, no hidden markups.';
$sp_materials_eyebrow = 'Materials we carry';
$sp_materials_heading = 'Eight surfaces. One choice that fits.';
$sp_materials = [
  ['name' => 'Quartz (engineered)','desc' => 'Caesarstone, Cambria, Silestone. Non-porous. Most durable choice.'],
  ['name' => 'Quartzite',          'desc' => 'Natural stone that looks like marble but won\'t etch. Hardest natural option.'],
  ['name' => 'Marble',             'desc' => 'Carrara, Calacatta, Statuary. Iconic. Requires sealing.'],
  ['name' => 'Soapstone',          'desc' => 'Warm gray-green. Develops a patina. Heat-proof.'],
  ['name' => 'Granite',            'desc' => 'Classic. Wide color range. Dense and durable.'],
  ['name' => 'Butcher block',      'desc' => 'Walnut, maple, cherry. Warm. Resurface as needed.'],
  ['name' => 'Concrete',           'desc' => 'Modern industrial. Custom-poured. Sealed.'],
  ['name' => 'Porcelain slab',     'desc' => 'Newer category. Thin, light, extreme durability.'],
];
$sp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Calacatta quartz island',     'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.png', 'title' => 'Soapstone perimeter + walnut island', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'indexpage/big/1_3.png', 'title' => 'Quartzite waterfall edge',    'location' => 'Winnetka, IL'],
];
$sp_current_page = 'countertops';
include "includes/components/service_page.php";
?>
