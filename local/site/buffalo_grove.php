<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Buffalo Grove, IL · Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Buffalo Grove, IL. 38 years across the North Shore and northwest suburbs. (847) 681-9000.';
$cp_canonical = 'buffalo_grove';
$cp_city_name = 'Buffalo Grove';
$cp_hero_image = BASEURL . 'flash/big/1.png';
$cp_zip_codes = ['60089'];
$cp_neighborhoods = ['Aptakisic-Tripp', 'Old Buffalo Grove', 'Cherbourg'];
$cp_projects = [
  ['img' => BASEURL.'buffalogrove1/big/1_1.png', 'title' => 'White kitchen, chandelier',      'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/5_1.png', 'title' => 'White cabinets, hardwood',       'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/9_1.png', 'title' => 'White kitchen, stainless range', 'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/3_1.png', 'title' => 'Open-concept remodel',           'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/7_1.png', 'title' => 'Family kitchen + island',        'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'buffalogrove1/big/10_1.png','title' => 'Buffalo Grove kitchen remodel',  'location' => 'Buffalo Grove, IL'],
];
include "includes/components/city_page.php";
?>
