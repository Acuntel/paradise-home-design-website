<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Richelieu Decorative Hardware · Paradise Home Design';
$bp_meta_desc  = 'Richelieu decorative cabinet and bath hardware, knobs, pulls, hinges, organization, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'richelieu';
$bp_brand_name = 'Richelieu';
$bp_eyebrow    = 'Decorative hardware partner';
$bp_hero_image = BASEURL . 'flash/big/2.png';
$bp_story = [
  'Richelieu is North America\'s largest distributor of decorative and functional cabinet hardware, supplying tens of thousands of designer-grade knobs, pulls, hinges, and organizational accessories.',
  'We specify Richelieu when a kitchen or bath needs the finishing detail that turns standard cabinetry into custom. Brass, brushed nickel, matte black, leather pulls, the catalog is endless.',
];
$bp_products = [
  ['name' => 'Knobs',          'desc' => 'Brass, nickel, bronze, ceramic, glass, leather.'],
  ['name' => 'Pulls + handles','desc' => 'Standard, oversized, appliance pulls.'],
  ['name' => 'Hinges',         'desc' => 'Concealed soft-close, decorative exposed.'],
  ['name' => 'Bath hardware',  'desc' => 'Towel bars, hooks, paper holders.'],
  ['name' => 'Drawer slides',  'desc' => 'Soft-close, push-to-open, undermount.'],
  ['name' => 'Organization',   'desc' => 'Drawer dividers, pull-outs, lazy susans.'],
  ['name' => 'Lighting',       'desc' => 'Under-cabinet LED.'],
  ['name' => 'Finishes',       'desc' => 'Match brass, chrome, black, antique.'],
];
$bp_projects = [
  ['img' => BASEURL.'flash/big/2.png', 'title' => 'Black cabinets, brass pulls', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/5.png', 'title' => 'Matte black hardware kitchen', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/7.png', 'title' => 'Period-correct cup pulls',     'location' => 'Winnetka, IL'],
];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
