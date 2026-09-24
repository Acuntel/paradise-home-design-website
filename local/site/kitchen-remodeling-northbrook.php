<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Kitchen Remodeling in Northbrook, IL | Paradise Home Design';
$ts_meta = 'Kitchen remodeling in Northbrook, IL by Paradise Home Design, a Lake Forest design-build firm reworking mid-century and subdivision kitchens. Call (847) 681-9000.';
$ts_slug = 'kitchen-remodeling-northbrook';
$ts_service = 'Kitchen Remodeling';
$ts_town = 'Northbrook';
$ts_hero = BASEURL . 'flash/big/3.webp';
$ts_intro = [
  'Paradise Home Design remodels kitchens in Northbrook, IL as a single design-build team. We draw the plan, choose the cabinetry and stone, and run the construction, so you are not managing a designer and a contractor who blame each other when something slips. We have worked the North Shore since 1986, and Northbrook sits about 20 minutes south of our Lake Forest showroom, close enough that our crews and project lead are on your street regularly rather than once a week.',
  'Northbrook kitchens tend to fall into two camps, and we work both. The town\'s mid-century homes and its 1970s-through-1990s subdivision houses, including neighborhoods like Mission Hills and Sunset Fields and the streets off Sanders and Techny, usually came with a closed-off kitchen, a soffit hiding ductwork, and an undersized footprint that does not match how families cook today. The upside is that Northbrook\'s larger lots and generous original room sizes give us real square footage to reopen, so taking down the wall between a galley kitchen and a back family room is often the single change that transforms the house.',
  'Every Northbrook kitchen we build runs on a written, line-item estimate before any demolition starts, and we carry the permit through the Village of Northbrook for you. You pick from custom lines such as Adelphi and Quality Custom Cabinetry, or semi-custom options like Fabuwood, paired with Cambria, Caesarstone, or natural quartzite and granite, all selected in our showroom rather than from a catalog photo.',
];
$ts_reasons = [
  ['title' => 'We rework Northbrook\'s mid-century and subdivision kitchens', 'body' => 'Northbrook\'s housing skews toward mid-century homes and 1970s-90s subdivisions, and those kitchens share predictable issues: bulkhead soffits, a wall closing the kitchen off from the family room, and plumbing stacked in inconvenient spots. We have opened up enough of them to know what is behind the drywall before we cut into it, which keeps the budget honest.'],
  ['title' => 'We handle the Village of Northbrook permit', 'body' => 'Kitchen remodels that move walls, plumbing, or electrical need a permit from the Village of Northbrook Development & Planning Services on Cedar Lane, and we pull and manage it for you, scheduling rough and final inspections so the project clears the village cleanly. You sign the contract; we deal with the counter.'],
  ['title' => 'A 20-minute design-build team, not a referral chain', 'body' => 'Our Lake Forest base is about 20 minutes from Northbrook, and because design and construction live under one roof here, the person who drew your island is reachable when a decision comes up on site. That proximity is why we can show up, measure twice, and keep larger-lot Northbrook projects moving.'],
];
$ts_cost = 'Most full kitchen remodels in Northbrook land between about $45,000 and $105,000 or more, with the spread driven by kitchen size, custom versus semi-custom cabinetry, countertop material, and whether walls or plumbing move.';
$ts_extra_html = '<h3>Northbrook kitchens we see most</h3><p>Many Northbrook homes were built when a kitchen was meant to be a closed, work-only room, so the most common request we get here is opening the kitchen to an adjoining family or breakfast area. On the town\'s mid-century houses that usually means evaluating a load-bearing wall and adding a flush beam; on the 1970s-90s subdivision homes it often means removing a peninsula and a dropped soffit to gain headroom and sightlines. Northbrook\'s larger lots also leave room for an addition when the existing footprint simply will not give you the island you want, and we will tell you honestly whether reworking the current space or bumping out the wall is the smarter spend. Either way, you select cabinetry, countertops, and hardware in our Lake Forest showroom before we order a thing.</p>';
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Northbrook, IL?', 'a' => 'Most full kitchen remodels in Northbrook run from about $45,000 to $105,000 or more, depending on the kitchen\'s size, whether you choose custom or semi-custom cabinetry, the countertop material, and whether walls or plumbing move. We give you a detailed written estimate after a free consultation. Call (847) 681-9000.'],
  ['q' => 'Do you pull the permit with the Village of Northbrook?', 'a' => 'Yes. Kitchen remodels that touch walls, plumbing, or electrical require a permit from the Village of Northbrook Development & Planning Services, located at 1225 Cedar Lane. As a design-build remodeler, we pull it and coordinate every inspection so your Northbrook project stays compliant from start to finish.'],
  ['q' => 'How long does a Northbrook kitchen remodel take?', 'a' => 'A typical full kitchen remodel runs roughly 8 to 12 weeks of on-site work once cabinetry is in hand, plus design and ordering time up front. Northbrook mid-century and subdivision kitchens that involve removing a load-bearing wall or relocating plumbing sit at the longer end. We give you a schedule with your written estimate.'],
  ['q' => 'Are you a design-build firm, or just a contractor?', 'a' => 'We are design-build, which means one accountable team handles your Northbrook kitchen from the floor plan and product selection through demolition and final installation. There is no handoff between a separate designer and builder, so decisions get made faster and nothing falls through the cracks.'],
  ['q' => 'How do I get started on a Northbrook kitchen remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day, visit your Northbrook home to measure and talk through goals, and give you a written estimate before any work begins. Our showroom is about 20 minutes away in Lake Forest.'],
];
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$ts_projects_heading = 'Kitchens we\'ve designed.';
$ts_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White kitchen, oversized island', 'location' => ''],
  ['img' => BASEURL.'flash/big/1.webp', 'title' => 'Navy lower cabinets, subway tile', 'location' => ''],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => ''],
];
include "includes/components/ts_page.php";
?>
