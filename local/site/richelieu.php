<?php
ob_start(); session_start();
include_once("includes/config.php");

$bp_title      = 'Richelieu Decorative Hardware · Paradise Home Design';
$bp_meta_desc  = 'Richelieu decorative cabinet and bath hardware, knobs, pulls, hinges, organization, through Paradise Home Design in Lake Forest, IL.';
$bp_canonical  = 'richelieu';
$bp_brand_name = 'Richelieu';
$bp_eyebrow    = 'Decorative hardware partner';
$bp_hero_image = BASEURL . 'flash/big/2.webp';
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
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Black cabinets, brass pulls', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'Matte black hardware kitchen', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Period-correct cup pulls',     'location' => 'Winnetka, IL'],
];
$bp_gallery_eyebrow = 'Gallery';
$bp_gallery_heading = 'Richelieu hardware we carry.';
$bp_gallery_desc    = 'A selection of knobs and pulls. Tap a photo to enlarge it.';
$bp_gallery_alt     = 'Richelieu decorative cabinet hardware';
$bp_gallery_product = true;
$bp_gallery = ['assets/img/gallery/richelieu/1.webp', 'assets/img/gallery/richelieu/2.webp', 'assets/img/gallery/richelieu/3.webp', 'assets/img/gallery/richelieu/4.webp', 'assets/img/gallery/richelieu/5.webp'];
$bp_current_page = 'kitchens';
include "includes/components/brand_page.php";
?>
