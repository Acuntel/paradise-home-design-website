<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Vernon Hills, IL | Paradise Home Design';
$cp_meta_desc = 'Bathroom and kitchen remodeling in Vernon Hills, IL. Lake Forest based, over 37 years on the North Shore. (847) 681-9000.';
$cp_canonical = 'vernon_hills';
$cp_city_name = 'Vernon Hills';
$cp_hero_image = BASEURL . 'flash/big/7.webp';
$cp_zip_codes = ['60061'];
$cp_neighborhoods = ['Greggs Landing', 'New Century Town', 'Centennial Crossings'];
$cp_projects = [
  ['img' => BASEURL.'lakeforest/big/7_1.webp', 'title' => 'Spa primary bath', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'flash/big/6.webp', 'title' => 'Family kitchen refresh', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'flash/big/1.webp', 'title' => 'Hardwood + tile remodel', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Black + brass kitchen', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'Built-in gray cabinetry', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White shaker kitchen', 'location' => 'Vernon Hills, IL'],
];
$cp_reasons = [
  ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working Vernon Hills homes — we know the Greggs Landing and New Century Town subdivisions, and the load-bearing tells. No surprises mid-project.'],
  ['title' => 'We know the permit office.', 'body' => 'We pull permits with the Village of Vernon Hills Community Development Department regularly. Approvals move faster when inspectors know your contractor.'],
  ['title' => 'Close by and on site fast.', 'body' => 'About 20 minutes from our Lake Forest base; Vernon Hills projects are a regular part of our schedule.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Vernon Hills, IL?', 'a' => 'Most full kitchen remodels in Vernon Hills range from about $40,000 to $90,000+, depending on size, cabinetry, countertops, and whether walls move. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Vernon Hills Community Development Department?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the Village of Vernon Hills Community Development Department and coordinate inspections, so your Vernon Hills remodel stays compliant and on schedule.'],
  ['q' => 'How long has Paradise Home Design served Vernon Hills?', 'a' => 'We have remodeled kitchens and bathrooms across Vernon Hills and the North Shore since 1986. Our showroom is in nearby Lake Forest.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation.'],
  ['q' => 'How do I get started on a Vernon Hills remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day and provide a written estimate before any work begins.'],
];
include "includes/components/city_page.php";
?>
