<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Chicago, IL · Paradise Home Design';
$cp_meta_desc = 'High-end kitchen and bathroom remodeling for Chicago and the North Shore. Design-build, owner-led. (847) 681-9000.';
$cp_canonical = 'chicago';
$cp_city_name = 'Chicago';
$cp_hero_image = BASEURL . 'assets/img/hero/hero-4.jpg';
$cp_zip_codes = ['North Side · Lincoln Park · Lakeview · Gold Coast · Bucktown · Wicker Park'];
$cp_neighborhoods = ['Lincoln Park', 'Gold Coast', 'Bucktown', 'Wicker Park', 'Lakeview', 'North Side'];
$cp_projects = [
  ['img' => BASEURL.'indexpage/big/1_1.png', 'title' => 'Contemporary city kitchen', 'location' => 'Chicago, IL'],
  ['img' => BASEURL.'assets/img/hero/hero-4.jpg', 'title' => 'High-rise bathroom suite', 'location' => 'Chicago, IL'],
  ['img' => BASEURL.'indexpage/big/1_3.png', 'title' => 'Vintage row-home remodel', 'location' => 'Chicago, IL'],
];
include "includes/components/city_page.php";
?>
