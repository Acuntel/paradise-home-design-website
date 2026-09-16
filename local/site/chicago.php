<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'High-End Kitchen & Bath Remodeling in Chicago, IL | Paradise Home Design';
$cp_meta_desc = 'High-end kitchen and bathroom remodeling for Chicago and the North Shore. Design-build, owner-led. (847) 681-9000.';
$cp_canonical = 'chicago';
$cp_city_name = 'Chicago';
$cp_hero_image = BASEURL . 'flash/big/7.webp';
$cp_zip_codes = ['North Side · Lincoln Park · Lakeview · Gold Coast · Bucktown · Wicker Park'];
$cp_neighborhoods = ['Lincoln Park', 'Gold Coast', 'Bucktown', 'Wicker Park', 'Lakeview', 'North Side'];
$cp_projects = [
  ['img' => BASEURL.'chicago/big/5.webp', 'title' => 'High-rise white kitchen',       'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/6.webp', 'title' => 'Loft kitchen, exposed beams',   'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/8.webp', 'title' => 'Marble close-up, brass faucet', 'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/9.webp', 'title' => 'Open white kitchen, hardwood',  'location' => 'Chicago, IL'],
  ['img' => BASEURL.'lakeforest/big/7_1.webp', 'title' => 'City bathroom suite',      'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/2.webp', 'title' => 'Loft remodel + quartz',         'location' => 'Chicago, IL'],
];
$cp_reasons = [
  ['title' => 'We know the housing stock.', 'body' => 'Over 37 years working Chicago homes — we know the high-rise condo, loft, and vintage two-flat layouts, and the load-bearing tells. No surprises mid-project.'],
  ['title' => 'We know the permit office.', 'body' => 'We pull permits with the City of Chicago Department of Buildings regularly. Approvals move faster when inspectors know your contractor.'],
  ['title' => 'North Shore quality, in the city.', 'body' => 'We bring North Shore-grade kitchens and baths to Lincoln Park, Gold Coast, and Lakeview condos, lofts, and single-family homes.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Chicago, IL?', 'a' => 'Most full kitchen remodels in Chicago range from about $40,000 to $100,000+, depending on size, cabinetry, countertops, and whether walls move. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the City of Chicago Department of Buildings?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the City of Chicago Department of Buildings and coordinate inspections, so your Chicago remodel stays compliant and on schedule.'],
  ['q' => 'How long has Paradise Home Design served Chicago?', 'a' => 'We have remodeled kitchens and bathrooms across Chicago and the North Shore since 1986. Our showroom is in nearby Lake Forest.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation.'],
  ['q' => 'How do I get started on a Chicago remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day and provide a written estimate before any work begins.'],
];
include "includes/components/city_page.php";
?>
