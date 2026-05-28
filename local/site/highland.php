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
  ['img' => BASEURL.'indexpage/big/1_2.png', 'title' => 'Two-tone island kitchen', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/4.png', 'title' => 'Walk-in shower remodel', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Painted shaker kitchen', 'location' => 'Highland Park, IL'],
];
include "includes/components/city_page.php";
?>
