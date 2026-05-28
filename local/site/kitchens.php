<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Kitchen Remodeling · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Custom kitchen design and remodeling on Chicago\'s North Shore. Cabinets, countertops, appliances, lighting. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'kitchens';
$sp_hero_image   = BASEURL . 'flash/big/5.png';
$sp_hero_eyebrow = 'Kitchen remodeling';
$sp_hero_title   = 'Kitchens built around how you actually cook.';
$sp_hero_desc    = 'From the first sketch to the final reveal. Custom cabinetry, premium appliances, lighting that works.';
$sp_intro_heading = 'A kitchen is a thousand small decisions. We make them with you.';
$sp_intro_text   = 'Counter heights, drawer pulls, outlet placement, lighting temperature, the exact spot for the trash pull-out. Every Paradise kitchen is mapped out before construction starts.';
$sp_materials_eyebrow = 'What we work with';
$sp_materials_heading = 'Premium brands, no big-box shortcuts.';
$sp_materials = [
  ['name' => 'Custom cabinetry',  'desc' => 'Candlelight, Fabuwood, Homecrest. Inset and overlay. Painted and stained.'],
  ['name' => 'Quartz countertops','desc' => 'Caesarstone, Cambria, Silestone. Durable, low-maintenance, modern.'],
  ['name' => 'Natural stone',     'desc' => 'Marble, quartzite, soapstone. Sourced from Casabella and Mercier.'],
  ['name' => 'Hardwood flooring', 'desc' => 'Mercier and Kährs engineered. Wide-plank oak, walnut, maple.'],
  ['name' => 'Tile + backsplash', 'desc' => 'Imported porcelain, ceramic, glass mosaic. Florida Tile partner.'],
  ['name' => 'Appliances',        'desc' => 'Sub-Zero, Wolf, Thermador, Miele, GE Monogram. Integrated installs.'],
  ['name' => 'Lighting',          'desc' => 'Layered: ambient, task, accent. LED warm-white standard.'],
  ['name' => 'Decorative hardware','desc' => 'Richelieu and Schaub. Brushed brass, matte black, satin nickel.'],
];
$sp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Modern white kitchen with brass accents', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.png', 'title' => 'Two-tone island kitchen',                  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/6.png', 'title' => 'Classic shaker remodel',                   'location' => 'Winnetka, IL'],
];
$sp_current_page = 'kitchens';
include "includes/components/service_page.php";
?>
