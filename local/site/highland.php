<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Luxury Kitchen & Bath Remodeling in Highland Park, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Highland Park, IL. North Shore design-build firm, owner-led. (847) 681-9000.';
$cp_canonical = 'highland';
$cp_city_name = 'Highland Park';
$cp_hero_image = BASEURL . 'flash/big/4.webp';
$cp_zip_codes = ['60035'];
$cp_neighborhoods = ['Ravinia', 'Highwood', 'Briergate', 'Sherwood Forest'];
$cp_projects = [
  ['img' => BASEURL.'highland2/big/1_1.webp', 'title' => 'Cherry traditional + granite',  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland3/big/1_1.webp', 'title' => 'Two-tone white + gray island',  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland4/big/4.webp',  'title' => 'White kitchen, quartzite island', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland4/big/6.webp',  'title' => 'Quartzite backsplash, pro range', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland3/big/10_1.webp','title' => 'White inset kitchen',           'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland/big/1_1.webp',  'title' => 'Custom built-ins, arched glass doors',  'location' => 'Highland Park, IL'],
];
$cp_reasons = [
  ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working Highland Park homes — we know the Ravinia vintage homes and post-1970 ranches and split-levels, and the load-bearing tells. No surprises mid-project.'],
  ['title' => 'We know the permit office.', 'body' => 'We pull permits with the City of Highland Park Building Division regularly. Approvals move faster when inspectors know your contractor.'],
  ['title' => 'Minutes away in Highland Park.', 'body' => 'About 15 minutes from our Lake Forest base — we\'re in Highland Park homes regularly, so we\'re on site fast.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Highland Park, IL?', 'a' => 'Most full kitchen remodels in Highland Park range from about $45,000 to $110,000+, depending on size, cabinetry, countertops, and whether walls move. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the City of Highland Park Building Division?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the City of Highland Park Building Division and coordinate inspections, so your Highland Park remodel stays compliant and on schedule.'],
  ['q' => 'How long has Paradise Home Design served Highland Park?', 'a' => 'We have remodeled kitchens and bathrooms across Highland Park and the North Shore since 1986. Our showroom is in nearby Lake Forest.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation.'],
  ['q' => 'How do I get started on a Highland Park remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day and provide a written estimate before any work begins.'],
];
include "includes/components/city_page.php";
?>
