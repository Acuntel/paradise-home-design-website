<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Northbrook, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Northbrook, IL. Owner-led design-build firm, about 20 minutes from our Lake Forest showroom. Call (847) 681-9000.';
$cp_canonical = 'northbrook';
$cp_city_name = 'Northbrook';
$cp_hero_image = BASEURL . 'flash/big/3.webp';
$cp_zip_codes = [
  '60062',
];
$cp_neighborhoods = [];
$cp_intro = [
  'Paradise Home Design remodels kitchens and bathrooms throughout Northbrook, IL, working from our Lake Forest base since 1986. Northbrook is roughly a 20-minute drive for our crews, so a project here gets the same owner-led attention as one a mile from our showroom. We handle kitchens and baths as a single design-build team: one estimate, one schedule, and one accountable contact from the first measurement through final installation.',
  'Northbrook\'s housing stock shapes nearly every remodel we take on here. The village is full of mid-century ranches and 1970s-through-90s subdivision builds, often on the larger lots that make Northbrook attractive in the first place. Those plans tend to hide a soffited-in, closed-off kitchen behind a load-bearing wall and a primary bath that felt generous for its era but reads tight today. Opening those layouts up is routine work for us, and the wider lots frequently leave room for a bump-out or a reworked footprint that smaller North Shore parcels don\'t allow.',
  'Hiring us means you don\'t line up a designer and a contractor separately. As a true design-build firm, our in-house team draws the layout, helps you choose cabinetry and countertops from lines we carry, then builds it. You get a written estimate before any work starts. Call (847) 681-9000 to get a Northbrook project on the calendar.',
];
$cp_extra_html = '<h3>Remodeling Northbrook\'s mid-century and subdivision homes</h3><p>The homes that define Northbrook ask specific questions of a remodel. The mid-century ranches and split-levels were built with compartmentalized kitchens and modest baths, and the 1970s-through-90s subdivisions tend to repeat a handful of builder floor plans with a closed-off galley behind a bearing wall. Our most common Northbrook project takes that wall down to connect the kitchen to a family room, then rebuilds the space with an island, deeper cabinetry, and a quartz or natural-stone countertop. Northbrook\'s larger lots are an advantage here: there\'s often room to bump a wall out a few feet or relocate plumbing without crowding the property line, which gives us layout options that tighter North Shore villages simply don\'t offer. We design around the home you have, not a generic template.</p>';
$cp_reasons = [
  ['title' => 'We know Northbrook\'s homes.', 'body' => 'Northbrook is largely mid-century ranches and 1970s-90s subdivision homes on larger lots. We know where those builders put the bearing walls, how the kitchen soffits were framed, and how to use the extra lot width for a bump-out. The plans rarely surprise us mid-project.'],
  ['title' => 'We work with the Northbrook permit office.', 'body' => 'We pull permits through the Village of Northbrook Development & Planning Services as a routine part of every project and coordinate the inspections ourselves. When the office already knows your contractor\'s drawings and crews, approvals and inspections move along without stalls.'],
  ['title' => 'A short, reliable drive from Lake Forest.', 'body' => 'Our showroom and offices are about 20 minutes from Northbrook, so we\'re on site quickly for measurements, selections, and the daily check-ins that keep a remodel moving. Close enough to be responsive, not a once-a-week visitor.'],
];
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Northbrook, IL?', 'a' => 'Most full kitchen remodels in Northbrook range from about $45,000 to $105,000+, depending on the size of the room, your cabinetry line, countertop choice, and whether load-bearing walls move. The mid-century and subdivision kitchens common here often involve opening a wall, which we price clearly up front. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Northbrook Development & Planning Services?', 'a' => 'Yes. As a design-build remodeler we pull all required permits through the Village of Northbrook Development & Planning Services and coordinate every inspection as part of the job, so your Northbrook kitchen or bath stays compliant and on schedule. You don\'t have to deal with the village yourself.'],
  ['q' => 'How long does a Northbrook kitchen or bath remodel take?', 'a' => 'Most full kitchen remodels in Northbrook run roughly 8 to 12 weeks of on-site work once construction begins, with design and product selection happening before that. Bathrooms are usually shorter. Removing a load-bearing wall or reworking a footprint on a larger lot can add time, and we give you a realistic schedule in your written estimate rather than an optimistic guess.'],
  ['q' => 'Are you a design-build remodeler, or just a contractor?', 'a' => 'We\'re a full design-build firm. Our in-house design team plans your Northbrook layout, walks you through cabinetry and countertop selections, and then our own crews build it — one accountable team from concept through final installation. You don\'t need to hire a separate designer or architect for most kitchen and bath projects.'],
  ['q' => 'How do I get started on a Northbrook remodel?', 'a' => 'Call (847) 681-9000 or request a consultation through our website. We respond within one business day, visit your Northbrook home to discuss goals and budget, and provide a written estimate before any work begins. Our showroom is about 20 minutes away in Lake Forest if you\'d like to see cabinetry and countertops in person.'],
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
