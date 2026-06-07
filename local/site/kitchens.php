<?php
ob_start(); session_start();
include_once("includes/config.php");

$sp_title        = 'Kitchen Remodeling · Lake Forest, IL · Paradise Home Design';
$sp_meta_desc    = 'Custom kitchen design and remodeling on Chicago\'s North Shore. Cabinets, countertops, appliances, lighting. Lake Forest, IL. (847) 681-9000.';
$sp_canonical    = 'kitchens';
$sp_hero_image   = BASEURL . 'flash/big/5.webp';
$sp_hero_eyebrow = 'Kitchen remodeling';
$sp_hero_title   = 'Kitchens designed for the way you live.';
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
$sp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'Modern white kitchen with brass accents', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.webp', 'title' => 'Two-tone island kitchen',                  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/6.webp', 'title' => 'Classic shaker remodel',                   'location' => 'Winnetka, IL'],
];
$sp_current_page = 'kitchens';
$faqs = [
  ['q' => "How much does a kitchen remodel cost on Chicago's North Shore?", 'a' => "Most full kitchen remodels on Chicago's North Shore range from about $40,000 to $100,000+, depending on size, cabinetry, countertops, appliances, and whether walls move. Paradise Home Design gives a detailed written estimate after a free consultation — call (847) 681-9000."],
  ['q' => 'How long does a kitchen remodel take?', 'a' => 'A typical full kitchen remodel takes 6 to 12 weeks of on-site work, after 3 to 6 weeks of design and cabinet/countertop ordering. We give you a project schedule up front and manage it as your single point of contact.'],
  ['q' => 'Do you handle permits and design, or do I need my own people?', 'a' => 'We handle both. As a licensed design-build remodeler with an in-house design team, we design your kitchen, pull all permits, coordinate trades, and build exactly what was designed — one accountable team from start to finish.'],
  ['q' => 'What cabinet brands do you carry?', 'a' => 'We carry Quality Custom Cabinetry, Adelphi, Holiday Kitchens, and Fabuwood cabinetry in inset, overlay, framed, and frameless styles, painted and stained. Visit our Lake Forest showroom to see samples, or call (847) 681-9000.'],
  ['q' => 'Can I stay in my home during the remodel?', 'a' => 'Yes. Most homeowners stay home during a kitchen remodel. We set up dust protection and a temporary kitchen plan, sequence the work to limit disruption, and keep the rest of your home clean and accessible.'],
];
include "includes/components/service_page.php";
?>
