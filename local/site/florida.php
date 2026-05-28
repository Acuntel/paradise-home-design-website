<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Florida Projects · Paradise Home Design';
$cp_meta_desc = 'Select Paradise Home Design kitchen and bath projects in Florida. Lake Forest, IL based — we travel for trusted clients.';
$cp_canonical = 'florida';
$cp_city_name = 'Florida';
$cp_hero_image = BASEURL . 'assets/img/hero/hero-5.jpg';
$cp_zip_codes = [];
$cp_neighborhoods = [];
$cp_projects = [
  ['img' => BASEURL.'assets/img/hero/hero-5.jpg', 'title' => 'Coastal modern kitchen', 'location' => 'Florida'],
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Open beach-house remodel', 'location' => 'Florida'],
  ['img' => BASEURL.'assets/img/hero/hero-3.jpg', 'title' => 'Spa-style primary suite', 'location' => 'Florida'],
];
include "includes/components/city_page.php";
?>
