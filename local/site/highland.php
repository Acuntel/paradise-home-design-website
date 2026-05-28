<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Highland Park, IL · Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Highland Park, IL. North Shore design-build firm, owner-led. (847) 681-9000.';
$cp_canonical = 'highland';
$cp_city_name = 'Highland Park';
$cp_hero_image = BASEURL . 'flash/big/4.png';
$cp_zip_codes = ['60035'];
$cp_neighborhoods = ['Ravinia', 'Highwood', 'Briergate', 'Sherwood Forest'];
$cp_projects = [
  ['img' => BASEURL.'highland2/big/1_1.png', 'title' => 'Cherry traditional + granite',  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland3/big/1_1.png', 'title' => 'Two-tone white + gray island',  'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland3/big/5_1.png', 'title' => 'Modern white kitchen',          'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland3/big/7_1.png', 'title' => 'Granite vessel-sink bath',      'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland3/big/10_1.png','title' => 'White inset kitchen',           'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'highland/big/1_1.png',  'title' => 'Dark navy built-in cabinetry',  'location' => 'Highland Park, IL'],
];
include "includes/components/city_page.php";
?>
