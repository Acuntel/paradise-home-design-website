<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Lake Bluff, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Lake Bluff, IL. Design-build firm five minutes away in Lake Forest, on the North Shore since 1986. Call (847) 681-9000.';
$cp_canonical = 'lake_bluff';
$cp_city_name = 'Lake Bluff';
$cp_hero_image = BASEURL . 'flash/big/2.webp';
$cp_zip_codes = [
  '60044',
];
$cp_neighborhoods = [];
$cp_intro = [
  'Paradise Home Design remodels kitchens and bathrooms throughout Lake Bluff, IL, from a base that is essentially next door — about a five-minute drive from our Lake Forest showroom. That proximity matters in a small lakeside village: we can swing by with a cabinet door sample, walk a tricky measurement, or meet a Village inspector the same morning instead of blocking out half a day for travel. We have worked the North Shore since 1986, and Lake Bluff has always been part of our backyard.',
  'Lake Bluff is a mix that demands range. Down toward East Lake Bluff near the lake you find early-1900s cottages and bungalows with narrow footprints, plaster walls, and the kind of out-of-square framing that punishes a contractor guessing at dimensions. West and north you find newer builds with open plans and tall ceilings. As a design-build firm with an in-house design team, we handle both ends of that spectrum — reconfiguring a cramped cottage galley or fitting a custom island into a new-construction great room — with one accountable crew from drawings through final installation.',
  'Every Lake Bluff kitchen and bath project we run is permitted through the Village of Lake Bluff Community Development Department, with inspections coordinated by us rather than handed back to you. You get cabinetry options ranging from custom lines like Adelphi and Quality Custom (QCCI) down to semi-custom Fabuwood, plus Cambria, Caesarstone, and Silestone quartz or natural stone — and a written estimate before anyone lifts a hammer. Call (847) 681-9000 to start.',
];
$cp_extra_html = '<h3>Remodeling Lake Bluff homes, cottage to new build</h3><p>Lake Bluff\'s housing stock runs two directions, and a remodel has to respect both. The historic cottages and bungalows near East Lake Bluff and the lake were built before open-concept living, so their kitchens and baths are often boxed in by plaster walls and original framing — the payoff is real character once we open them up correctly and reinforce what needs reinforcing. The newer builds on the village\'s edges bring height and volume but ask for cabinetry and islands scaled to large rooms so the space feels designed, not empty. Because we are a design-build firm, the same team that draws your Lake Bluff kitchen also orders the Adelphi or Fabuwood cabinetry, fabricates the Cambria or quartzite countertop, and installs it — one point of accountability from the first sketch to the last piece of trim.</p>';
$cp_reasons = [
  ['title' => 'We know Lake Bluff\'s split housing stock.', 'body' => 'From the historic East Lake Bluff cottages near the lake — plaster, tight footprints, out-of-square framing — to the open-plan newer builds west and north, we have remodeled both since 1986. We read the load-bearing tells before demolition, so a Lake Bluff project does not stall on a mid-job surprise.'],
  ['title' => 'We pull permits with the Village of Lake Bluff.', 'body' => 'Every project goes through the Village of Lake Bluff Community Development Department, and we coordinate the inspections ourselves. Working the same small village office for years keeps approvals moving and your remodel compliant and on schedule.'],
  ['title' => 'Five minutes away in Lake Forest.', 'body' => 'Our showroom and shop sit about five minutes south in Lake Forest, so Lake Bluff is effectively our home turf. You can see cabinet doors and stone slabs in person whenever you want, and we are on site fast when a decision needs to happen.'],
];
$faqs = [
  ['q' => 'How much does a kitchen or bath remodel cost in Lake Bluff, IL?', 'a' => 'Most full kitchen and bathroom remodels in Lake Bluff range from about $50,000 to $120,000+, depending on the size of the space, your cabinetry line, countertop material, and whether walls are moved. Lake Bluff\'s older East Lake Bluff cottages can add cost when framing or plaster needs work. We give you a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Lake Bluff Community Development Department?', 'a' => 'Yes. As a design-build remodeler, we pull all required permits with the Village of Lake Bluff Community Development Department and coordinate every inspection ourselves, so your Lake Bluff kitchen or bath remodel stays compliant and on schedule.'],
  ['q' => 'How long does a Lake Bluff kitchen or bathroom remodel take?', 'a' => 'A typical full kitchen remodel runs roughly 8 to 12 weeks of on-site work once cabinetry and materials arrive, and a full bathroom usually 4 to 7 weeks; design and product selection happen before that. Older East Lake Bluff cottages that need plaster or framing repairs can run longer. We give you a realistic schedule with your written estimate.'],
  ['q' => 'Are you a true design-build firm, or just installers?', 'a' => 'We are a full design-build firm with an in-house design team. One accountable team takes your Lake Bluff project from concept, cabinetry, and countertop selection through permitting, construction, and final installation — you do not need to hire a separate designer or general contractor.'],
  ['q' => 'How do I get started on a Lake Bluff remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We are about five minutes away in Lake Forest, respond within one business day, talk through your goals and budget, and provide a written estimate before any work begins.'],
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
