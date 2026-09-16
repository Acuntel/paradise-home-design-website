<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Florida Projects · Paradise Home Design';
$cp_meta_desc = 'Select Paradise Home Design kitchen and bath projects in Florida. Lake Forest, IL based, we travel for trusted clients.';
$cp_canonical = 'florida';
$cp_noindex = true; // off-brand for North Shore local SEO — keep out of the index
$cp_city_name = 'Florida';
$cp_hero_image = BASEURL . 'flash/big/5.webp';
$cp_zip_codes = [];
$cp_neighborhoods = [];
$cp_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'Coastal modern kitchen', 'location' => 'Florida'],
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'Open beach-house remodel', 'location' => 'Florida'],
  ['img' => BASEURL.'flash/big/4.webp', 'title' => 'Spa-style primary suite', 'location' => 'Florida'],
  ['img' => BASEURL.'flash/big/6.webp', 'title' => 'Coastal white kitchen', 'location' => 'Florida'],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Modern black kitchen', 'location' => 'Florida'],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => 'Florida'],
];
include "includes/components/city_page.php";
?>
