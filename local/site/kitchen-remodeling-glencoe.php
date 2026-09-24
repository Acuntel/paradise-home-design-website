<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Kitchen Remodeling in Glencoe, IL | Paradise Home Design';
$ts_meta = 'Kitchen remodeling in Glencoe, IL from a Lake Forest design-build firm serving the North Shore since 1986. Free written estimate. Call (847) 681-9000.';
$ts_slug = 'kitchen-remodeling-glencoe';
$ts_service = 'Kitchen Remodeling';
$ts_town = 'Glencoe';
$ts_hero = BASEURL . 'flash/big/7.webp';
$ts_intro = [
  'A kitchen remodel in Glencoe typically runs $50,000 to $125,000 or more, and Paradise Home Design has been delivering them across the North Shore since 1986. We are a family-owned, design-build firm based about 20 minutes north in Lake Forest, which means one accountable team handles your design, cabinetry, countertops, permits, and installation from first sketch to final hardware. There is no designer-to-contractor handoff and no finger-pointing when something needs a decision.',
  'Glencoe\'s housing is the real variable in any kitchen project here. The village is full of older homes near the lakefront and the Skokie Country Club area — many with original 1920s and 1930s footprints, plaster walls, undersized service panels, and galley kitchens that were never meant to open onto a great room. We design around those realities: relocating load-bearing walls properly, upsizing electrical for induction cooktops and double ovens, and matching new millwork to trim profiles that a stock-cabinet shop would simply ignore.',
  'Because we work this part of the North Shore constantly, we know how to spec a kitchen that fits a vintage Glencoe house near the Chicago Botanic Garden while still feeling current. Custom lines like Adelphi and Quality Custom Cabinetry give us inset doors and exact sizing for awkward vintage walls, while semi-custom lines like Fabuwood keep budgets reasonable on larger footprints. Countertops range from Cambria, Caesarstone, and Silestone quartz to natural granite, quartzite, and marble.',
];
$ts_reasons = [
  ['title' => 'We design around Glencoe\'s vintage homes.', 'body' => 'Many Glencoe kitchens sit inside 1920s and 1930s houses near the lakefront and the Skokie Country Club area — plaster walls, original framing, and closed-off galley layouts. We know how those homes are built and how to open them up without surprises mid-project.'],
  ['title' => 'We permit through the right office.', 'body' => 'We pull permits with the Village of Glencoe Community Development Department and coordinate inspections ourselves. Knowing the local submittal and review process keeps your kitchen remodel compliant and on schedule.'],
  ['title' => 'We\'re a short, reliable drive away.', 'body' => 'Glencoe is about 20 minutes from our Lake Forest showroom, so our owner-led crews are on site dependably — not subbed out to whoever is closest. The same team that designs your kitchen builds it.'],
];
$ts_cost = 'Most full kitchen remodels in Glencoe, IL fall in the $50,000 to $125,000+ range, depending on kitchen size, cabinetry level, countertop material, and whether walls are moved.';
$ts_extra_html = '<h3>Kitchen remodeling for Glencoe\'s older homes</h3><p>Glencoe\'s housing stock skews older and architecturally distinct, with many homes dating to the 1920s and 1930s on the leafy streets near the Chicago Botanic Garden, the lakefront, and the Skokie Country Club area. These houses reward a remodeler who plans before demolition. Original plaster walls, undersized 100-amp panels, and compartmentalized kitchens are common, and they all shape how a new layout comes together. We routinely open galley kitchens into adjoining dining or family space, reinforce or relocate load-bearing walls correctly, and bring electrical up to spec for modern induction ranges and double ovens. Where a vintage home needs millwork that matches existing trim, our custom cabinet lines let us specify exact sizes and inset doors rather than forcing stock boxes into a space they were never built for.</p>';
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Glencoe, IL?', 'a' => 'Most full kitchen remodels in Glencoe range from about $50,000 to $125,000 or more, depending on size, cabinetry level, countertop material, and whether walls are moved. Vintage homes near the lakefront sometimes need electrical or structural work that affects the total. Paradise Home Design provides a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the Village of Glencoe Community Development Department?', 'a' => 'Yes. As a design-build remodeler, we pull all required permits with the Village of Glencoe Community Development Department and coordinate inspections as part of the project, so your Glencoe kitchen remodel stays compliant and on schedule.'],
  ['q' => 'How long does a Glencoe kitchen remodel take?', 'a' => 'A typical full kitchen remodel runs about 8 to 12 weeks of on-site work once design and product selections are finalized and permits are issued. Older Glencoe homes that need rewiring, structural changes, or custom millwork can run longer. We give you a realistic schedule in writing before work begins.'],
  ['q' => 'Are you a design-build firm, or just a contractor?', 'a' => 'We are a true design-build firm with an in-house design team. One accountable team takes you from concept and product selection through construction and final installation, so you don\'t need to hire a separate designer or general contractor for your Glencoe kitchen.'],
  ['q' => 'How do I get started on a kitchen remodel in Glencoe?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We talk through your goals and budget, visit the home, and provide a written estimate before any work begins. Our showroom is about 20 minutes away in Lake Forest.'],
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
