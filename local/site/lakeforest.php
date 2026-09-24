<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Luxury Kitchen & Bath Remodeling in Lake Forest, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Lake Forest, IL. Owner-led, Lake Forest based, over 37 years on the North Shore. (847) 681-9000.';
$cp_canonical = 'lakeforest';
$cp_city_name = 'Lake Forest';
$cp_hero_image = BASEURL . 'flash/big/5.webp';
$cp_zip_codes = ['60045'];
$cp_neighborhoods = ['East Lake Forest', 'West Lake Forest', 'Knollwood', 'Conway Farms', 'Everett'];
$cp_projects = [
  ['img' => BASEURL.'lakeforest/big/1_1.webp', 'title' => 'White shaker, open shelving', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/2_1.webp', 'title' => 'White shaker, matte black pulls', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/3_1.webp', 'title' => 'Double-vanity primary bath',    'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/5_1.webp', 'title' => 'Gray vanity, vessel sink', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest2/big/kitchen3.webp', 'title' => 'Quartzite backsplash, workstation sink',  'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/8_1.webp', 'title' => 'Open white kitchen, wood floors', 'location' => 'Lake Forest, IL'],
];
$cp_reasons = [
  ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working Lake Forest homes — we know the historic-district details, teardown/rebuilds, and Conway Farms layouts, and the load-bearing tells. No surprises mid-project.'],
  ['title' => 'We know the permit office.', 'body' => 'We pull permits with the City of Lake Forest Community Development Department regularly. Approvals move faster when inspectors know your contractor.'],
  ['title' => 'We\'re based right here in Lake Forest.', 'body' => 'Our showroom and shop are in Lake Forest, so we\'re minutes from your project and you can see samples whenever you want.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Lake Forest, IL?', 'a' => 'Most full kitchen remodels in Lake Forest range from about $50,000 to $120,000+, depending on size, cabinetry, countertops, and whether walls move. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the City of Lake Forest Community Development Department?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the City of Lake Forest Community Development Department and coordinate inspections, so your Lake Forest remodel stays compliant and on schedule.'],
  ['q' => 'How long has Paradise Home Design served Lake Forest?', 'a' => 'We have remodeled kitchens and bathrooms across Lake Forest and the North Shore since 1986. Our showroom is in nearby Lake Forest.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation.'],
  ['q' => 'How do I get started on a Lake Forest remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day and provide a written estimate before any work begins.'],
];
$cp_projects_heading = 'Kitchens and baths we\'ve designed in Lake Forest.';
include "includes/components/city_page.php";
?>
