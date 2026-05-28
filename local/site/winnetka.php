<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Winnetka, IL · Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Winnetka, IL. Lake Forest based design-build firm, North Shore experts. (847) 681-9000.';
$cp_canonical = 'winnetka';
$cp_city_name = 'Winnetka';
$cp_hero_image = BASEURL . 'assets/img/hero/hero-2.jpg';
$cp_zip_codes = ['60093'];
$cp_neighborhoods = ['Hubbard Woods', 'East Winnetka', 'Indian Hill'];
$cp_projects = [
  ['img' => BASEURL.'indexpage/big/1_3.png', 'title' => 'Classic shaker remodel', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'assets/img/hero/hero-2.jpg', 'title' => 'Open-concept kitchen + dining', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Wide-plank floor + custom cabinets', 'location' => 'Winnetka, IL'],
];
include "includes/components/city_page.php";
?>
