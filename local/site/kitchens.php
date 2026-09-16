<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Kitchen Remodeling · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Custom kitchen design and remodeling on Chicago\'s North Shore. Cabinets, countertops, appliances, lighting. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'kitchens';
$sp_hero_image   = BASEURL . 'flash/big/5.webp';
$sp_hero_eyebrow = 'Kitchen remodeling';
$sp_hero_title   = 'Kitchens Designed for the Way you Live.';
$sp_hero_desc    = 'From the first sketch to the final reveal, we create beautiful, functional kitchens tailored to your lifestyle, taste, and daily routine.';
$sp_intro_heading = 'A kitchen is a thousand small decisions. We make them with you.';
$sp_intro_text   = 'Every decision matters. We guide you through layouts, materials, storage solutions, and finishes to create a kitchen that is both beautiful and practical.';
$sp_materials_eyebrow = 'What we work with';
$sp_materials_heading = 'Premium brands.';
$sp_materials = [
  ['name' => 'Custom cabinetry',  'desc' => 'Quality Custom Cabinetry, Adelphi, Holiday Kitchens, and Fabuwood. Inset, overlay, framed, and frameless. Painted and stained.'],
  ['name' => 'Quartz countertops','desc' => 'Cambria, Vicostone, MSI Quartz. Durable, low-maintenance, modern.'],
  ['name' => 'Natural stone',     'desc' => 'Quartzite, marble, granite. Sourced from Italy, Spain, and the United States.'],
  ['name' => 'Hardwood flooring', 'desc' => 'Mirage and Kährs engineered. Wide-plank oak, white oak, red oak, walnut, maple.'],
  ['name' => 'Tile + backsplash', 'desc' => 'Imported porcelain, ceramic, glass mosaic, and marble.'],
  ['name' => 'Appliances',        'desc' => 'Sub-Zero, Wolf, Thermador, Miele, GE Monogram. Integrated installs.'],
  ['name' => 'Lighting',          'desc' => 'Ambient, task, accent, and decorative.'],
  ['name' => 'Decorative hardware','desc' => 'Schaub, Richelieu, Top Knobs. Numerous finishes.'],
];
// Client (2026-09-02): no descriptions under the photos; tiles open the project's photos in place.
$sp_projects = [
  ['img' => BASEURL.'lakeforest2/big/kitchen4.webp', 'title' => 'Lake Forest Project', 'location' => '',
   'tag' => 'Kitchen Remodel', 'meta' => 'Lake Forest, IL',
   'paras' => ['White shaker cabinetry with a full-height natural stone backsplash, open shelving, and stainless appliances.'],
   'images' => ['lakeforest2/big/kitchen4.webp','lakeforest2/big/kitchen6.webp','lakeforest2/big/kitchen1.webp','lakeforest2/big/kitchen2.webp','lakeforest2/big/kitchen3.webp','lakeforest2/big/post4.webp']],
  ['img' => BASEURL.'highland4/big/4.webp',          'title' => 'Highland Park Project', 'location' => '',
   'tag' => 'Kitchen Remodel', 'meta' => 'Highland Park, IL',
   'paras' => ['Full-height quartzite slabs wrap the backsplash and carry across the oversized island, set against crisp white cabinetry, sculptural pendants, and professional-grade stainless appliances.'],
   'images' => ['highland4/big/4.webp','highland4/big/6.webp','highland4/big/1.webp','highland4/big/2.webp','highland4/big/3.webp','highland4/big/5.webp','highland4/big/7.webp']],
  ['img' => BASEURL.'winnetka/big/8.webp',           'title' => 'Winnetka Project', 'location' => '',
   'tag' => 'Kitchen Remodel', 'meta' => 'Winnetka, IL',
   'paras' => ['An efficient, uncluttered kitchen with built-in appliances and easy-care work surfaces. Fabuwood cabinetry pairs a Frost-finish perimeter with a nickel-finish island.'],
   'images' => ['winnetka/big/8.webp','winnetka/big/6.webp','winnetka/big/3.webp','winnetka/big/9.webp','winnetka/big/12.webp','winnetka/big/14.webp']],
];
$sp_current_page = 'kitchens';
$faqs = [
  ['q' => "How much does a kitchen remodel cost on Chicago's North Shore?", 'a' => "Most full kitchen remodels on Chicago's North Shore range from about $40,000 to $100,000+, depending on size, cabinetry, countertops, appliances, and whether walls move. Paradise Home Design gives a detailed written estimate after a free consultation — call (847) 681-9000."],
  ['q' => 'How long does a kitchen remodel take?', 'a' => 'A typical full kitchen remodel takes 6 to 12 weeks of on-site work, after 3 to 6 weeks of design and cabinet/countertop ordering. We give you a project schedule up front and manage it as your single point of contact.'],
  ['q' => 'Do you handle permits and design, or do I need my own people?', 'a' => 'We handle both. As a design-build remodeler with an in-house design team, we design your kitchen, pull all permits, coordinate trades, and build exactly what was designed — one accountable team from start to finish.'],
  ['q' => 'What cabinet brands do you carry?', 'a' => 'We carry Quality Custom Cabinetry, Adelphi, Holiday Kitchens, and Fabuwood cabinetry in inset, overlay, framed, and frameless styles, painted and stained. Visit our Lake Forest showroom to see samples, or call (847) 681-9000.'],
  ['q' => 'Can I stay in my home during the remodel?', 'a' => 'Yes. Most homeowners stay home during a kitchen remodel. We set up dust protection and a temporary kitchen plan, sequence the work to limit disruption, and keep the rest of your home clean and accessible.'],
];
include "includes/components/service_page.php";
?>
