<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Deerfield, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Deerfield, IL. Owner-led North Shore design-build firm working Deerfield colonials and ranches since 1986. Call (847) 681-9000.';
$cp_canonical = 'deerfield';
$cp_city_name = 'Deerfield';
$cp_hero_image = BASEURL . 'flash/big/7.webp';
$cp_zip_codes = [
  '60015',
];
$cp_neighborhoods = [];
$cp_intro = [
  'Paradise Home Design remodels kitchens and bathrooms throughout Deerfield, IL, handling design and construction under one roof so a single accountable team carries your project from layout to final installation. We are a family-owned design-build firm based about 15 minutes north in Lake Forest, and we have worked North Shore homes since 1986. Deerfield is largely a postwar village of 1960s through 1980s colonials and ranches on established, tree-lined family blocks. Those homes were built with compartmentalized kitchens and small hall baths that no longer fit how families live today, and most of our Deerfield work is about opening them up.',
  'Whether you want to take down the wall between a closed 1970s kitchen and the family room or gut a tight hall bathroom to the studs, we plan the full scope before demolition starts. In-house designers handle the layout and product selection, and our own crews handle the build. Cabinetry runs from custom lines like Adelphi and Quality Custom Cabinetry to semi-custom workhorses like Fabuwood and Homecrest, finished with Cambria, Caesarstone, and Silestone quartz, or natural granite, quartzite, and marble.',
  'Because we are close and we know Deerfield\'s housing eras, we read the load-bearing walls and the slab-versus-crawlspace questions in these ranches before they become mid-project surprises. You get one written estimate, one schedule, and one team that answers the phone.',
];
$cp_extra_html = '<h3>Remodeling Deerfield\'s colonials and ranches</h3><p>Most Deerfield homes were built between the 1960s and 1980s, and they share a few traits that shape a remodel. The colonials tend to have a formal, walled-off kitchen separated from the dining and living rooms — great for the era, awkward for the open, family-centered living people want now. The ranches put everything on one level, which is wonderful for accessibility but often means a single original hall bathroom serving the bedrooms. We design around both realities: removing the right wall to connect a kitchen to the family room, or reworking a cramped hall bath into a fuller layout without losing the bedroom count. Because these homes are decades old, we also plan for the plumbing, wiring, and framing behind the drywall before we commit to a layout. That up-front planning is why our Deerfield estimates hold.</p>';
$cp_reasons = [
  ['title' => 'We know Deerfield\'s postwar homes.', 'body' => 'Deerfield is largely 1960s through 1980s colonials and ranches, and we have remodeled enough of them to know where the load-bearing walls sit and how the original kitchen and bath layouts were framed. That means accurate scoping and fewer surprises once demolition starts.'],
  ['title' => 'We work with Deerfield\'s permit office directly.', 'body' => 'We pull permits with the Village of Deerfield Building & Code Enforcement and coordinate every required inspection ourselves. Familiar paperwork and a contractor inspectors recognize keep your kitchen or bath remodel compliant and on schedule.'],
  ['title' => 'About 15 minutes from our Lake Forest base.', 'body' => 'Our showroom and crews are roughly 15 minutes north in Lake Forest, so we are on site in Deerfield\'s family neighborhoods quickly — for the consultation, during the build, and for the final walk-through.'],
];
$faqs = [
  ['q' => 'How much does a kitchen or bath remodel cost in Deerfield, IL?', 'a' => 'Most full kitchen and bathroom remodels in Deerfield range from about $45,000 to $100,000+, depending on the size of the room, your cabinetry and countertop choices, and whether load-bearing walls are opened up. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Deerfield Building & Code Enforcement?', 'a' => 'Yes. As a design-build remodeler, we pull all required permits with the Village of Deerfield Building & Code Enforcement and coordinate the inspections ourselves, so your Deerfield kitchen or bath remodel stays compliant and on schedule.'],
  ['q' => 'How long does a Deerfield kitchen or bathroom remodel take?', 'a' => 'A full kitchen typically runs several months from the start of construction through final installation, and a bathroom is shorter. Opening walls in Deerfield\'s older colonials and ranches, plus cabinetry lead times, drive the timeline — we give you a realistic schedule in writing before work begins.'],
  ['q' => 'Do you handle both the design and the construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through construction and final installation. You do not need to hire a separate designer or general contractor.'],
  ['q' => 'How do I get started on a Deerfield remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day, talk through your goals and budget, and provide a written estimate before any work begins. Our showroom is about 15 minutes away in Lake Forest.'],
];
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$cp_projects_eyebrow = 'Recent work';
$cp_projects_heading = 'Kitchens we\'ve designed.';
$cp_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White kitchen, oversized island', 'location' => ''],
  ['img' => BASEURL.'flash/big/1.webp', 'title' => 'Navy lower cabinets, subway tile', 'location' => ''],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => ''],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Black cabinets, marble, brass', 'location' => ''],
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'White galley kitchen, hardwood', 'location' => ''],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'White kitchen, powder-blue island', 'location' => ''],
];
include "includes/components/city_page.php";
?>
