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
  ['img' => BASEURL.'flash/big/1.png', 'title' => 'Galaxy white shaker kitchen', 'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.png', 'title' => 'Open-concept remodel', 'location' => 'Buffalo Grove, IL'],
  ['img' => BASEURL.'flash/big/4.png', 'title' => 'Hand-scraped wide-plank floor', 'location' => 'Buffalo Grove, IL'],
];
include "includes/components/city_page.php";
?>
