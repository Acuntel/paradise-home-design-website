<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Kitchen Remodeling in Highland Park, IL | Paradise Home Design';
$ts_meta = 'Kitchen remodeling in Highland Park, IL — owner-led North Shore design-build firm building since 1986. Free consultation. Call (847) 681-9000.';
$ts_slug = 'kitchen-remodeling-highland-park';
$ts_service = 'Kitchen Remodeling';
$ts_town = 'Highland Park';
$ts_hero = BASEURL . 'flash/big/1.webp';
$ts_intro = [
  'Paradise Home Design remodels kitchens throughout Highland Park, IL, from the Ravinia neighborhood out to Briergate and Sherwood Forest. We are a family-owned, design-build firm based in Lake Forest, just north of town, and we have been building North Shore kitchens since 1986. That means one accountable team handles your project from the first floor-plan sketch through cabinet selection, demolition, and the final faucet — no juggling a separate designer and contractor.',
  'Highland Park\'s kitchens are not one type of room, and that shapes how we design. The post-1970 ranches and split-levels here often have a closed-off galley or a wall separating the kitchen from a sunken living area, and the most common request we hear is to open that up without compromising the structure. The town\'s mid-century homes reward a lighter touch — clean cabinetry lines, honest materials, and layouts that respect the original architecture rather than fight it. We design to the house in front of us, not to a template.',
  'Every Highland Park kitchen we build is permitted through the City of Highland Park Building Division and walked through inspection by our crew. You choose cabinetry from custom lines like Adelphi and Quality Custom Cabinetry or semi-custom lines such as Fabuwood, paired with Cambria, Caesarstone, or natural stone countertops. Call (847) 681-9000 to start with a free consultation and a written estimate.',
];
$ts_reasons = [
  ['title' => 'We design for Highland Park floor plans.', 'body' => 'The post-1970 ranches and split-levels here, along with the town\'s mid-century homes, each carry their own quirks — sunken rooms, load-bearing walls between kitchen and living space, and original framing. After decades of North Shore kitchens we read those tells before demolition, so opening a galley or moving an island doesn\'t turn into a mid-project surprise.'],
  ['title' => 'We pull permits through the right office.', 'body' => 'Your kitchen remodel is permitted through the City of Highland Park Building Division, and we coordinate every inspection ourselves. Because we file in Highland Park regularly, the paperwork and the inspection schedule stay predictable instead of stalling your timeline.'],
  ['title' => 'Lake Forest based, just north of town.', 'body' => 'Our showroom and team sit just north in Lake Forest, so Highland Park is a short, regular run for our crews. You get a designer and an owner who are genuinely close by — quick to walk the site, quick to respond, and on the job through installation.'],
];
$ts_cost = 'Most full kitchen remodels in Highland Park fall between about $45,000 and $110,000+, depending on kitchen size, cabinetry line, countertop material, and whether walls move.';
$ts_extra_html = '<h3>Kitchens in Highland Park\'s housing stock</h3><p>Highland Park kitchens tend to live in two worlds. The post-1970 ranches and split-levels often hide a compact, walled-off cook space — fine for 1975, tight for how families gather now — and the work is usually about borrowing square footage from an adjacent room or removing a non-original partition to create a single open kitchen. The town\'s mid-century homes ask for the opposite discipline: flat-panel or simple shaker cabinetry, durable quartz or honed stone, and a layout that keeps the architecture\'s clean lines intact. We have built both. Before any cabinet order, our designer walks your specific home, confirms what is load-bearing, and lays out a kitchen that fits how you actually live in it — then we permit it through the City of Highland Park Building Division and build it with our own crew.</p>';
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Highland Park, IL?', 'a' => 'Most full kitchen remodels in Highland Park run from about $45,000 to $110,000+, depending on the kitchen\'s size, the cabinetry line you choose, the countertop material, and whether walls are moved. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull the kitchen remodel permit in Highland Park?', 'a' => 'Yes. As a design-build remodeler we file all required permits with the City of Highland Park Building Division and coordinate every inspection, so your kitchen remodel stays compliant and on schedule.'],
  ['q' => 'How long does a Highland Park kitchen remodel take?', 'a' => 'Most full kitchen remodels run several weeks on site once demolition starts. Design, cabinetry ordering, and permitting through the City of Highland Park Building Division all happen before that. We give you a project schedule with your written estimate so you know what to expect at each stage.'],
  ['q' => 'Do you handle both the design and the construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes your Highland Park kitchen from layout and cabinet selection through demolition, construction, and final installation. You don\'t need to hire a separate designer.'],
  ['q' => 'How do I get started on a Highland Park kitchen remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We are based just north in Lake Forest, we respond within one business day, and we provide a written estimate before any work begins.'],
];
$ts_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White shaker kitchen, brass accents', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/1.webp', 'title' => 'Blue island, subway tile', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => 'Highland Park, IL'],
];
include "includes/components/ts_page.php";
?>
