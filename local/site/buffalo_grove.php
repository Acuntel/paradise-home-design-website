<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Buffalo Grove, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Buffalo Grove, IL. over 37 years across the North Shore and northwest suburbs. (847) 681-9000.';
$cp_canonical = 'buffalo_grove';
$cp_city_name = 'Buffalo Grove';
$cp_hero_image = BASEURL . 'flash/big/1.webp';
$cp_zip_codes = ['60089'];
$cp_neighborhoods = ['Aptakisic-Tripp', 'Old Buffalo Grove', 'Cherbourg'];
$cp_projects = [
  ['img' => BASEURL.'buffalogrove1/big/1_1.webp', 'title' => 'White kitchen, chandelier',      'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/5_1.webp', 'title' => 'White cabinets, hardwood',       'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/9_1.webp', 'title' => 'White kitchen, stainless range', 'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/3_1.webp', 'title' => 'Open-concept remodel',           'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/7_1.webp', 'title' => 'Family kitchen + island',        'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/10_1.webp','title' => 'Buffalo Grove kitchen remodel',  'location' => 'Buffalo Grove, IL'],
];
$cp_reasons = [
  ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working Buffalo Grove homes — we know the 1980s–2000s subdivision floor plans, and the load-bearing tells. No surprises mid-project.'],
  ['title' => 'We know the permit office.', 'body' => 'We pull permits with the Village of Buffalo Grove Building & Zoning Division regularly. Approvals move faster when inspectors know your contractor.'],
  ['title' => 'Close by and on site fast.', 'body' => 'About 20–25 minutes from Lake Forest; we remodel Buffalo Grove kitchens and baths regularly across its subdivisions.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Buffalo Grove, IL?', 'a' => 'Most full kitchen remodels in Buffalo Grove range from about $40,000 to $90,000+, depending on size, cabinetry, countertops, and whether walls move. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Buffalo Grove Building & Zoning Division?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the Village of Buffalo Grove Building & Zoning Division and coordinate inspections, so your Buffalo Grove remodel stays compliant and on schedule.'],
  ['q' => 'How long has Paradise Home Design served Buffalo Grove?', 'a' => 'We have remodeled kitchens and bathrooms across Buffalo Grove and the North Shore since 1986. Our showroom is in nearby Lake Forest.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation.'],
  ['q' => 'How do I get started on a Buffalo Grove remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day and provide a written estimate before any work begins.'],
];
include "includes/components/city_page.php";
?>
