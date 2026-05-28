<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Vernon Hills, IL · Paradise Home Design';
$cp_meta_desc = 'Bathroom and kitchen remodeling in Vernon Hills, IL. Lake Forest based, 38 years on the North Shore. (847) 681-9000.';
$cp_canonical = 'vernon_hills';
$cp_city_name = 'Vernon Hills';
$cp_hero_image = BASEURL . 'assets/img/hero/hero-4.jpg';
$cp_zip_codes = ['60061'];
$cp_neighborhoods = ['Greggs Landing', 'New Century Town', 'Centennial Crossings'];
$cp_projects = [
  ['img' => BASEURL.'assets/img/hero/hero-4.jpg', 'title' => 'Marble primary bath', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'indexpage/big/1_3.png', 'title' => 'Family kitchen refresh', 'location' => 'Vernon Hills, IL'],
  ['img' => BASEURL.'assets/img/hero/hero-2.jpg', 'title' => 'Hardwood + tile remodel', 'location' => 'Vernon Hills, IL'],
];
include "includes/components/city_page.php";
?>
