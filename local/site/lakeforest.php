<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Lake Forest, IL · Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Lake Forest, IL. Owner-led, Lake Forest based, 38 years on the North Shore. (847) 681-9000.';
$cp_canonical = 'lakeforest';
$cp_city_name = 'Lake Forest';
$cp_hero_image = BASEURL . 'flash/big/5.png';
$cp_zip_codes = ['60045'];
$cp_neighborhoods = ['East Lake Forest', 'West Lake Forest', 'Knollwood', 'Conway Farms', 'Everett'];
$cp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Modern white kitchen, brass accents', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/5.png', 'title' => 'Full-home Lake Forest remodel', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'indexpage/big/1_2.png', 'title' => 'Inset Candlelight kitchen', 'location' => 'Lake Forest, IL'],
];
include "includes/components/city_page.php";
?>
