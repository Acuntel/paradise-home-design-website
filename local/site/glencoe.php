<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Glencoe, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bath remodeling in Glencoe, IL. Owner-led design-build firm 20 minutes from our Lake Forest showroom. Call (847) 681-9000.';
$cp_canonical = 'glencoe';
$cp_city_name = 'Glencoe';
$cp_hero_image = BASEURL . 'flash/big/1.webp';
$cp_zip_codes = [
  '60022',
];
$cp_neighborhoods = [];
$cp_intro = [
  'Paradise Home Design remodels kitchens and bathrooms throughout Glencoe, IL, as a true design-build firm: one team handles the layout, the cabinetry, the permits, and the construction from first sketch to final caulk line. We are family-owned, based in Lake Forest since 1986, and Glencoe sits about 20 minutes south of our showroom, so site visits and selection appointments are easy to schedule. Whether you want a fully custom kitchen or a primary-bath rebuild, you work directly with the owner instead of a salesperson and a subcontractor you never meet.',
  'Glencoe\'s housing stock demands a remodeler who has actually worked its homes. Much of the village is older, architecturally serious property: vintage Tudors and Colonials near Skokie Country Club, lakefront houses on the bluff, and additions layered on over decades. These homes often hide plaster walls, knob-and-tube remnants, settled framing, and load-bearing surprises that a production crew misses. We plan around those realities up front so your kitchen or bath project does not stall the moment a wall comes open.',
  'Every Glencoe remodel runs through the Village of Glencoe Community Development Department for permitting and inspections, and we manage that paperwork and scheduling for you. You choose from custom lines such as Adelphi and Quality Custom Cabinetry, semi-custom brands like Fabuwood, and Cambria, Caesarstone, or natural-stone countertops. Call (847) 681-9000 for a free consultation and a written estimate before any work starts.',
];
$cp_extra_html = '<h3>Remodeling Glencoe\'s vintage and lakefront homes</h3><p>Glencoe\'s housing stock rewards an experienced remodeler. Near Skokie Country Club and along the lakefront bluff you will find substantial vintage Tudors, Colonials, and architect-designed homes, many predating modern wiring and framing standards. Renovating a kitchen or bath in one of these houses is not a drop-in cabinet swap; it often means working around plaster walls, undersized service panels, settled floors, and additions that were grafted on over the years. We scope those conditions during design rather than discovering them mid-demo, which protects both your budget and your timeline. For homes near the Chicago Botanic Garden side of the village, we also factor in tree-line setbacks and the Village of Glencoe Community Development Department\'s review when a project touches the building footprint. The result is a kitchen or bathroom that suits the home\'s character and the way you actually live in it.</p>';
$cp_reasons = [
  ['title' => 'We have worked Glencoe\'s older, layered homes.', 'body' => 'Glencoe is heavy on vintage Tudors and Colonials near Skokie Country Club plus bluff-side lakefront houses, many carrying decades of additions. We know the plaster, the settled framing, and the load-bearing tells in these homes, so a kitchen or bath project does not stall when the wall opens up.'],
  ['title' => 'We pull permits with the Village of Glencoe.', 'body' => 'We handle permitting and inspections through the Village of Glencoe Community Development Department on your behalf. Knowing how that office reviews kitchen and bath plans keeps your remodel compliant and on schedule, without you chasing paperwork.'],
  ['title' => 'About 20 minutes from our Lake Forest showroom.', 'body' => 'Glencoe sits roughly 20 minutes south of our Lake Forest base, so site visits, measurements, and cabinet or countertop selections are simple to coordinate, and you can see Adelphi, Fabuwood, and Cambria samples in person whenever you want.'],
];
$faqs = [
  ['q' => 'How much does a kitchen or bath remodel cost in Glencoe, IL?', 'a' => 'Most full kitchen and bath remodels in Glencoe range from about $50,000 to $125,000+, depending on size, cabinetry line, countertops, and whether walls or structure move. Older homes near Skokie Country Club and the lakefront can carry more behind-the-walls work. We provide a detailed written estimate after a free consultation. Call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Glencoe Community Development Department?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the Village of Glencoe Community Development Department and coordinate inspections, so your Glencoe kitchen or bath remodel stays compliant and on schedule. You do not manage the paperwork.'],
  ['q' => 'How long does a kitchen or bath remodel take in Glencoe?', 'a' => 'Timelines vary by scope, but a full Glencoe kitchen typically runs a few months from the start of construction, and a bathroom is usually shorter. Design, cabinetry ordering, and Village of Glencoe permit review happen before demolition. We give you a realistic schedule in your written estimate before any work begins.'],
  ['q' => 'Are you a design-build firm, or do I need a separate designer?', 'a' => 'We are a full design-build firm with an in-house design team, so one accountable group takes your Glencoe project from concept and product selection through permitting, construction, and final installation. You do not need to hire a separate designer or general contractor.'],
  ['q' => 'How do I get started on a Glencoe remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. Glencoe is about 20 minutes from our Lake Forest showroom, so we can schedule a site visit easily. We respond within one business day and provide a written estimate before any work begins.'],
];
$cp_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White shaker kitchen, brass accents', 'location' => 'Glencoe, IL'],
  ['img' => BASEURL.'flash/big/1.webp', 'title' => 'Blue island, subway tile', 'location' => 'Glencoe, IL'],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => 'Glencoe, IL'],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Black cabinets, marble, brass', 'location' => 'Glencoe, IL'],
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'Modern white kitchen + island', 'location' => 'Glencoe, IL'],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'Built-in gray cabinetry', 'location' => 'Glencoe, IL'],
];
include "includes/components/city_page.php";
?>
