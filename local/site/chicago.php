<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Chicago, IL · Paradise Home Design';
$cp_meta_desc = 'High-end kitchen and bathroom remodeling for Chicago and the North Shore. Design-build, owner-led. (847) 681-9000.';
$cp_canonical = 'chicago';
$cp_city_name = 'Chicago';
$cp_hero_image = BASEURL . 'flash/big/7.png';
$cp_zip_codes = ['North Side · Lincoln Park · Lakeview · Gold Coast · Bucktown · Wicker Park'];
$cp_neighborhoods = ['Lincoln Park', 'Gold Coast', 'Bucktown', 'Wicker Park', 'Lakeview', 'North Side'];
$cp_projects = [
  ['img' => BASEURL.'chicago/big/5.png', 'title' => 'High-rise white kitchen',       'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/6.png', 'title' => 'Loft kitchen, exposed beams',   'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/8.png', 'title' => 'Marble close-up, brass faucet', 'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/9.png', 'title' => 'Open white kitchen, hardwood',  'location' => 'Chicago, IL'],
  ['img' => BASEURL.'lakeforest/big/7_1.png', 'title' => 'City bathroom suite',      'location' => 'Chicago, IL'],
  ['img' => BASEURL.'chicago/big/2.png', 'title' => 'Loft remodel + quartz',         'location' => 'Chicago, IL'],
];
include "includes/components/city_page.php";
?>
