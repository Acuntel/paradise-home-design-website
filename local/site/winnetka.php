<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen &amp; Bath Remodeling · Winnetka, IL · Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Winnetka, IL. Lake Forest based design-build firm, North Shore experts. (847) 681-9000.';
$cp_canonical = 'winnetka';
$cp_city_name = 'Winnetka';
$cp_hero_image = BASEURL . 'flash/big/1.png';
$cp_zip_codes = ['60093'];
$cp_neighborhoods = ['Hubbard Woods', 'East Winnetka', 'Indian Hill'];
$cp_projects = [
  ['img' => BASEURL.'winnetka/big/3.png',  'title' => 'White shaker galley',             'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/6.png',  'title' => 'Open white island kitchen',       'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/8.png',  'title' => 'White kitchen + brass island',    'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/9.png',  'title' => 'Gas cooktop on quartz',           'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/12.png', 'title' => 'Marble island + brass faucet',    'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/14.png', 'title' => 'Custom Winnetka kitchen',         'location' => 'Winnetka, IL'],
];
include "includes/components/city_page.php";
?>
