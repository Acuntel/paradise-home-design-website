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
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$cp_projects_eyebrow = 'Recent work';
$cp_projects_heading = 'Kitchens and baths we\'ve designed.';
$cp_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White kitchen, oversized island', 'location' => ''],
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'White galley kitchen, hardwood', 'location' => ''],
  ['img' => BASEURL.'flash/big/4.webp', 'title' => 'Spa bath, floating vanity', 'location' => ''],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'White kitchen, powder-blue island', 'location' => ''],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Black cabinets, marble, brass', 'location' => ''],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => ''],
];
include "includes/components/city_page.php";
?>
