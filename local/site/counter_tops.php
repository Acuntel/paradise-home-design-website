<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Countertops · Quartz, Marble, Quartzite · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Custom countertop fabrication and install on Chicago\'s North Shore. Quartz, marble, quartzite, butcher block. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'counter_tops';
$sp_hero_image   = BASEURL . 'flash/big/countertops-hero.webp';   // client photo 2026-09-02 (hero bg + intro image)
$sp_hero_eyebrow = 'Countertops';
$sp_hero_title   = 'The surface that defines the room.';
$sp_hero_desc    = 'Quartz, quartzite, marble, butcher block.';
$sp_intro_heading = 'The right countertop ties the entire room together.';
$sp_intro_text   = 'Explore a curated selection of full slabs at our partner warehouse and take home samples to compare against your cabinetry, finishes, and lighting. Seeing materials in your own space ensures a selection you\'ll love for years to come.';
$sp_materials_eyebrow = 'Materials we carry';
$sp_materials_heading = 'Endless Possibilities, One Perfect Choice.';
$sp_materials = [
  ['name' => 'Quartz',        'desc' => 'Vicostone, MSI Quartz, Cambria. Low maintenance. Man-made. Available in a wide selection of colors and styles.'],
  ['name' => 'Quartzite',     'desc' => 'Natural stone. Elegant appearance. High durability.'],
  ['name' => 'Marble',        'desc' => 'Natural stone. Classic veining. Sophisticated beauty.'],
  ['name' => 'Granite',       'desc' => 'Natural stone. Classic. Wide color range. Dense and durable.'],
  ['name' => 'Butcher block', 'desc' => 'Authentic natural wood beauty. Durable. Functional.'],
];
// Recent work — the client's three photos (2026-09-02), labeled by material. Tiles open the photo in place.
$sp_projects = [
  ['img' => BASEURL.'countertops1/big/quartz1.webp',    'title' => 'Quartz Countertop',    'location' => '', 'tag' => 'Quartz',    'images' => ['countertops1/big/quartz1.webp']],
  ['img' => BASEURL.'countertops1/big/quartzite1.webp', 'title' => 'Quartzite Countertop', 'location' => '', 'tag' => 'Quartzite', 'images' => ['countertops1/big/quartzite1.webp']],
  ['img' => BASEURL.'countertops1/big/quartz2.webp',    'title' => 'Quartz Countertop',    'location' => '', 'tag' => 'Quartz',    'images' => ['countertops1/big/quartz2.webp']],
];
$sp_current_page = 'countertops';
$sp_projects_eyebrow = '';
$sp_projects_heading = 'Recent Work.';
$cta_heading = "Let's pick the surface that defines your room.";
$faqs = [
  ['q' => 'What is the best countertop material for a kitchen?', 'a' => 'Quartz is the most popular choice on the North Shore — durable, low-maintenance, and non-porous. Granite and quartzite offer natural stone looks with high heat resistance; marble is classic but needs more care. We help you pick the right material for your use and budget.'],
  ['q' => 'Do quartz countertops need to be sealed?', 'a' => 'No. Quartz is non-porous and never needs sealing — routine cleaning with soap and water is enough. Natural stones like granite, marble, and quartzite need periodic sealing, which we will explain for your chosen material.'],
  ['q' => 'What countertop brands do you carry?', 'a' => 'We work with Cambria, Vicostone, and MSI Quartz, plus a wide selection of granite, quartzite, and marble slabs. Visit our Lake Forest showroom to view samples and current selections, or call (847) 681-9000.'],
  ['q' => 'Can you replace just my countertops without a full remodel?', 'a' => 'Yes. We can replace countertops as a standalone project — we template your existing cabinets, fabricate the new tops, disconnect and reconnect the sink and fixtures, and install. A fast way to refresh a kitchen or bath.'],
];
include "includes/components/service_page.php";
?>
