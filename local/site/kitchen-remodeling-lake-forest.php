<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Kitchen Remodeling in Lake Forest, IL | Paradise Home Design';
$ts_meta = 'Kitchen remodeling in Lake Forest, IL from a design-build firm based right in town since 1986. Custom cabinetry, quartz, full permitting. Call (847) 681-9000.';
$ts_slug = 'kitchen-remodeling-lake-forest';
$ts_service = 'Kitchen Remodeling';
$ts_town = 'Lake Forest';
$ts_hero = BASEURL . 'flash/big/5.webp';
$ts_intro = [
  'A Lake Forest kitchen remodel almost always means working inside a home with character worth protecting, so the right remodeler has to respect the architecture as much as the floor plan. That might be a 1920s historic-district Colonial, a Conway Farms layout, or an East Lake Forest estate where the kitchen was tucked into the back wing for the staff of a century ago. Paradise Home Design has rebuilt exactly these kitchens since 1986, opening galley footprints into the great rooms today\'s families actually use while keeping the moldings, scale, and proportions that make a Lake Forest house feel like a Lake Forest house.',
  'Our work is true design-build, which matters more here than in newer suburbs. Plaster walls hide knob-and-tube and balloon framing, estate kitchens often sit far from the main panel, and teardown-and-rebuild lots come with their own grading and setback questions. Because our designers and our build crews share one office in Lake Forest, the cabinet plan and the structural plan are reconciled before demolition, not discovered behind the lath afterward.',
  'Expect a full Lake Forest kitchen to run roughly $50,000 to $130,000 and up, with estate-scale projects landing at the higher end. We specify the cabinetry and countertops to the home: custom Adelphi or Quality Custom for historic millwork matches, semi-custom Fabuwood where budget leads, and Cambria, Caesarstone, or honed marble on top. Every figure lands in a written estimate before a single cabinet is ordered.',
];
$ts_reasons = [
  ['title' => 'Built for Lake Forest\'s older, heavier homes', 'body' => 'From historic-district Colonials to East Lake Forest estates, our crews read plaster-and-lath walls, balloon framing, and far-from-the-panel wiring the way newer-construction contractors can\'t. We plan the structural reality of an old Lake Forest kitchen up front, so the cabinetry we design is the cabinetry that actually gets installed.'],
  ['title' => 'We file with the City of Lake Forest directly', 'body' => 'Kitchen remodels here are permitted through the City of Lake Forest Community Development Department, and historic-district properties can trigger extra design review. We prepare and submit those drawings ourselves and walk the inspections, keeping your project on its schedule instead of stalled at the counter.'],
  ['title' => 'Our shop and showroom are in Lake Forest', 'body' => 'We aren\'t driving in from another county. We\'re based in town, so a crew can swing by a Conway Farms or Knollwood site the same day a question comes up, and you can compare an Adelphi door against a Cambria slab in our showroom whenever it\'s convenient.'],
];
$ts_cost = 'A full kitchen remodel in Lake Forest typically runs from about $50,000 to $130,000 and up, with estate-scale projects landing at the higher end of that band.';
$ts_extra_html = '<h3>Lake Forest kitchens, from historic Colonials to new-build estates</h3><p>Lake Forest\'s housing stock is unusually varied for the North Shore, and the kitchen is where that shows. In the historic district and along the older east-side streets, kitchens were originally small, walled-off service rooms; the common project there is removing a load-bearing wall to fold the kitchen into a family room while keeping crown profiles and casework that read as period-correct. On teardown-and-rebuild lots and in Conway Farms, the work is the opposite, with large, open footprints that need a custom island, a furniture-grade run of cabinetry, and quartz or marble that can carry a 12-foot perimeter without looking flat. We\'ve remodeled both for over 37 years, and we specify cabinetry and stone to match the home in front of us, not a one-size template.</p>';
$faqs = [
  ['q' => 'How much does a kitchen remodel cost in Lake Forest, IL?', 'a' => 'Most full kitchen remodels in Lake Forest run from roughly $50,000 to $130,000 or more, with larger estate kitchens, and projects that move walls, relocate plumbing, or use custom Adelphi or Quality Custom cabinetry, landing at the upper end. We give you a detailed written estimate after a free in-home consultation. Call (847) 681-9000.'],
  ['q' => 'Who issues the kitchen remodel permit in Lake Forest?', 'a' => 'Permits are issued by the City of Lake Forest Community Development Department, and homes in a historic district may require additional design review. As your design-build remodeler we prepare and submit the drawings, pull the permit, and coordinate every inspection, so your Lake Forest kitchen stays compliant from demolition to final sign-off.'],
  ['q' => 'How long does a Lake Forest kitchen remodel take?', 'a' => 'Plan on about 3 to 6 weeks of design and cabinet/countertop ordering, then 6 to 12 weeks of on-site construction. Older Lake Forest homes with plaster walls or rerouted utilities can add time, and historic-district review can extend the front end. We hand you a realistic schedule before work starts and manage it as your single point of contact.'],
  ['q' => 'Do you design the kitchen as well as build it?', 'a' => 'Yes. Paradise Home Design is a true design-build firm with an in-house design team, so the same office that draws your Lake Forest kitchen also frames, wires, and installs it. That keeps the cabinet layout, the structural changes, and the final build aligned, with one accountable team rather than a designer and a contractor pointing at each other.'],
  ['q' => 'How do I get started on a Lake Forest kitchen remodel?', 'a' => 'Call (847) 681-9000 or request a consultation through our site. We respond within one business day, walk your kitchen, talk through cabinetry and countertops at our Lake Forest showroom, and provide a written estimate before any work begins.'],
];
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$ts_projects = [
  ['img' => BASEURL.'lakeforest2/big/kitchen4.webp', 'title' => 'White shaker, open shelving', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest2/big/post4.webp', 'title' => 'Quartzite counters, stainless hood', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'lakeforest2/big/kitchen3.webp', 'title' => 'Quartzite backsplash, workstation sink', 'location' => 'Lake Forest, IL'],
];
include "includes/components/ts_page.php";
?>
