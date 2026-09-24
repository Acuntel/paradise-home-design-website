<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Kitchen Remodeling in Winnetka, IL | Paradise Home Design';
$ts_meta = 'Design-build kitchen remodeling in Winnetka, IL. Lake Forest based North Shore experts since 1986. Free estimate — call (847) 681-9000.';
$ts_slug = 'kitchen-remodeling-winnetka';
$ts_service = 'Kitchen Remodeling';
$ts_town = 'Winnetka';
$ts_hero = BASEURL . 'flash/big/2.webp';
$ts_intro = [
  'Kitchen remodeling in Winnetka usually means working inside a home with real history. Paradise Home Design is a Lake Forest based design-build firm, and Winnetka kitchens sit about 20 minutes from our showroom, so we are out here regularly. Many homes in Hubbard Woods and East Winnetka were built in the early 1900s, which means original kitchens that were never meant to be the center of the house: closed off from the dining room, tucked at the back of the lot, with dropped soffits hiding old ductwork. Most of our Winnetka work is opening those layouts up.',
  'We design and build under one roof, so the same team that draws your island plan is the team removing the wall and setting the cabinets. That continuity matters in older Winnetka housing stock, where you rarely know exactly what is inside a wall until it is open. We work in custom lines like Adelphi and Quality Custom Cabinetry for inset and furniture-style kitchens, and semi-custom lines such as Fabuwood when the budget calls for it, paired with Cambria, Caesarstone, or natural stone countertops.',
  'Because removing the wall between a Winnetka kitchen and an adjacent room often means taking out a load-bearing wall, we handle the structural engineering, the beam, and the permitting as part of the project rather than handing you a list of subcontractors to chase.',
];
$ts_reasons = [
  ['title' => 'We know Winnetka\'s older housing stock.', 'body' => 'Hubbard Woods and East Winnetka are full of early-1900s homes with small, closed-off kitchens, dropped soffits, and walls that turn out to be load-bearing. We have opened enough of them to know where the surprises tend to hide, so your Winnetka kitchen plan is realistic from day one.'],
  ['title' => 'We pull permits with the Village of Winnetka.', 'body' => 'Kitchen remodels here go through the Village of Winnetka Community Development Department, and homes in or near a historic district may face design-review guidelines. We prepare the permit drawings, provide structural details for wall removals, and coordinate inspections so your project stays compliant and on schedule.'],
  ['title' => 'We are close, and we are here often.', 'body' => 'Our Lake Forest showroom is about 20 minutes from Winnetka, so site visits, selections, and punch-list fixes do not turn into all-day affairs. Owner-led, design-build, one accountable team from first sketch to final installation.'],
];
$ts_cost = 'Most full kitchen remodels in Winnetka fall in the $50,000 to $125,000+ range, driven by kitchen size, cabinetry line, countertop material, and whether load-bearing walls are removed.';
$ts_extra_html = '<h3>Winnetka kitchens in older North Shore homes</h3><p>Much of Winnetka\'s character comes from its early-1900s homes, especially in Hubbard Woods and East Winnetka, and that character shows up in the kitchens. Original layouts were built for a different era: a separate cook\'s kitchen tucked at the back of the house, a butler\'s pantry between it and the dining room, low ceilings broken up by dropped soffits, and small windows facing the side yard rather than the rear garden. Today\'s Winnetka families want the opposite — one open room where the island faces the back of the lot and the daylight. Getting there usually means removing a load-bearing wall and rerouting old plumbing and wiring, which is exactly the kind of work our design-build crews do regularly. We preserve the original woodwork and proportions where it makes sense, and rebuild the rest to live the way you actually use the room.</p>';
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Winnetka, IL?', 'a' => 'Most full kitchen remodels in Winnetka run from about $50,000 to $125,000 or more. The figure depends on the size of the kitchen, whether you choose custom or semi-custom cabinetry, your countertop material, and whether walls are moved. Because many Winnetka homes need a load-bearing wall removed to open the kitchen, that work can push the cost higher. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull the permits for a Winnetka kitchen remodel?', 'a' => 'Yes. We pull all required permits with the Village of Winnetka Community Development Department and coordinate inspections as part of the project. If your home is in or near a historic district, we account for the applicable design-review guidelines, and we provide the structural details needed when a load-bearing wall is removed.'],
  ['q' => 'How long does a kitchen remodel take in Winnetka?', 'a' => 'A full Winnetka kitchen remodel typically takes several weeks of on-site work once cabinetry and materials arrive, plus design and permitting time before we start. Older Hubbard Woods and East Winnetka homes can add time when we open walls and find original framing or wiring that needs attention. You receive a realistic schedule with your written estimate.'],
  ['q' => 'Do you handle both the design and the construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept, cabinetry, and countertop selection through demolition, structural work, and final installation. You do not need to hire a separate kitchen designer or general contractor for your Winnetka remodel.'],
  ['q' => 'How do I get started on a Winnetka kitchen remodel?', 'a' => 'Call (847) 681-9000 or request a consultation through our website. We respond within one business day, talk through your goals and budget, and provide a written estimate before any work begins. Our Lake Forest showroom is about 20 minutes away if you would like to see cabinetry and countertop samples in person.'],
];
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$ts_projects = [
  ['img' => BASEURL.'winnetka/big/6.webp', 'title' => 'Open white island kitchen', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/8.webp', 'title' => 'White kitchen, gray island', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'winnetka/big/12.webp', 'title' => 'Marble island, polished nickel faucet', 'location' => 'Winnetka, IL'],
];
include "includes/components/ts_page.php";
?>
