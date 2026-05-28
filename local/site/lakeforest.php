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
  ['img' => BASEURL.'lakeforest/big/1_1.png', 'title' => 'Navy island + open staircase', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/2_1.png', 'title' => 'White shaker + brass pulls',    'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/3_1.png', 'title' => 'Double-vanity primary bath',    'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/5_1.png', 'title' => 'Marble sink + brass faucet',    'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/7_1.png', 'title' => 'Spa bath, vessel sinks',        'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest/big/8_1.png', 'title' => 'Open white kitchen + island',   'location' => 'Lake Forest, IL'],
];
include "includes/components/city_page.php";
?>
