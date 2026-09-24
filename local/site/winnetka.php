<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Custom Kitchen & Bath Remodeling in Winnetka, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Winnetka, IL. Lake Forest based design-build firm, North Shore experts. (847) 681-9000.';
$cp_canonical = 'winnetka';
$cp_city_name = 'Winnetka';
$cp_hero_image = BASEURL . 'flash/big/1.webp';
$cp_zip_codes = ['60093'];
$cp_neighborhoods = ['Hubbard Woods', 'East Winnetka', 'Indian Hill'];
$cp_projects = [
  ['img' => BASEURL.'winnetka/big/3.webp',  'title' => 'White shaker galley',             'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/6.webp',  'title' => 'Open white island kitchen',       'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/8.webp',  'title' => 'White kitchen, gray island', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/9.webp',  'title' => 'Gas cooktop on quartz',           'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/12.webp', 'title' => 'Marble island, polished nickel faucet', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/14.webp', 'title' => 'Custom Winnetka kitchen',         'location' => 'Winnetka, IL'],
];
$cp_reasons = [
  ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working Winnetka homes — we know the Hubbard Woods vintage homes and historic-district guidelines, and the load-bearing tells. No surprises mid-project.'],
  ['title' => 'We know the permit office.', 'body' => 'We pull permits with the Village of Winnetka Community Development Department regularly. Approvals move faster when inspectors know your contractor.'],
  ['title' => 'We work Winnetka weekly.', 'body' => 'About 20 minutes from our Lake Forest base; Hubbard Woods and East Winnetka load-bearing removals are routine for our crews.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Winnetka, IL?', 'a' => 'Most full kitchen remodels in Winnetka range from about $50,000 to $120,000+, depending on size, cabinetry, countertops, and whether walls move. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Winnetka Community Development Department?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the Village of Winnetka Community Development Department and coordinate inspections, so your Winnetka remodel stays compliant and on schedule.'],
  ['q' => 'How long has Paradise Home Design served Winnetka?', 'a' => 'We have remodeled kitchens and bathrooms across Winnetka and the North Shore since 1986. Our showroom is in nearby Lake Forest.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation.'],
  ['q' => 'How do I get started on a Winnetka remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day and provide a written estimate before any work begins.'],
];
include "includes/components/city_page.php";
?>
