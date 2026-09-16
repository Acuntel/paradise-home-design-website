<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Bathroom Remodeling in Winnetka, IL | Paradise Home Design';
$ts_meta = 'Bathroom remodeling in Winnetka, IL by a Lake Forest design-build firm. Primary suites, powder rooms, tile and stone on the North Shore. (847) 681-9000.';
$ts_slug = 'bathroom-remodeling-winnetka';
$ts_service = 'Bathroom Remodeling';
$ts_town = 'Winnetka';
$ts_hero = BASEURL . 'flash/big/4.webp';
$ts_intro = [
  'Paradise Home Design remodels bathrooms across Winnetka, IL, from gut-renovated primary suites in Hubbard Woods to compact East Winnetka powder rooms. We are a family-owned, design-build firm based in Lake Forest, just north of the village, and we have worked on North Shore homes since 1986. Because we handle design, cabinetry, plumbing coordination, tile, and installation under one roof, a Winnetka bathroom never gets handed off between a designer who drew it and a contractor left to guess what it meant.',
  'A bathroom is the hardest small room in a Winnetka house to get right, and the older the home, the truer that is. Many 60093 properties were built before modern waterproofing, ventilation, and supply lines were standard, so opening a wall often reveals knob-and-tube wiring, undersized drains, or a chase that does not run where the original blueprints suggested. We plan for that on the front end with selective demolition and moisture mapping, not after the tile is ordered. When a layout needs a load-bearing wall removed to combine a cramped bath with an adjacent closet, we engineer the header and carry the permit rather than working around the bottleneck.',
  'We also build for how these homes actually live: heated stone floors for long winters, curbless walk-in showers for owners who want to age in place in the village, and quiet, code-correct ventilation that protects original plaster. Call (847) 681-9000 for a written estimate before any work begins.',
];
$ts_reasons = [
  ['title' => 'We know Winnetka\'s older bathrooms.', 'body' => 'Hubbard Woods and East Winnetka homes hide a lot behind their walls: cast-iron stacks, plaster on lath, and plumbing chases that wander. After decades on North Shore baths, we read those tells before demolition, so waterproofing, venting, and drain runs are planned correctly instead of improvised.'],
  ['title' => 'We file with the right Winnetka office.', 'body' => 'We pull bathroom permits through the Village of Winnetka Community Development Department and coordinate the plumbing, electrical, and structural inspections that a wet-room remodel triggers. For homes inside historic-district guidelines, we keep changes compliant from the first drawing.'],
  ['title' => 'Owner-led, just up the road.', 'body' => 'Our showroom and crews are based in nearby Lake Forest, so a job site in Winnetka gets real owner attention, not a subcontractor you never meet. Load-bearing-wall removals to enlarge a tight bath are routine work for us, not a one-off experiment.'],
];
$ts_cost = 'Bathroom projects in Winnetka generally fall within the town\'s $50,000 to $125,000+ remodeling band, with full primary suites and curbless stone showers at the upper end and powder rooms well below it.';
$ts_extra_html = '<h3>Winnetka homes we build bathrooms for</h3><p>Winnetka\'s housing stock skews older and larger than most North Shore towns, which shapes every bathroom we touch in the 60093 area. Hubbard Woods is full of early-1900s homes where the only full bath upstairs is small by today\'s standards, so the high-value move is often borrowing space from an adjacent bedroom closet, a project that usually means removing a load-bearing wall and setting a proper header. East Winnetka\'s lakeside properties tend to want spa-style primary suites with freestanding tubs, heated floors, and large-format stone. Homes governed by historic-district guidelines need any exterior-visible change, such as a new window opening for a shower, handled carefully. We design around the house you actually own rather than a generic template, and we tell you what a wall is doing before we ever cut it.</p>';
$faqs = [
  ['q' => 'How much does a bathroom remodel cost in Winnetka, IL?', 'a' => 'Bathroom projects in Winnetka generally fall within the town\'s $50,000 to $125,000+ remodeling range, with full primary suites, curbless stone showers, and relocated plumbing at the upper end and powder rooms considerably lower. Paradise Home Design provides a detailed written estimate after a free consultation, so the number reflects your actual home rather than an average. Call (847) 681-9000.'],
  ['q' => 'Do you pull bathroom permits with the Village of Winnetka?', 'a' => 'Yes. As a design-build remodeler we file bathroom permits through the Village of Winnetka Community Development Department and coordinate the plumbing, electrical, and structural inspections a wet-room remodel requires. If your home falls under historic-district guidelines, we keep the work compliant from the first drawing.'],
  ['q' => 'How long does a Winnetka bathroom remodel take?', 'a' => 'Most Winnetka bathroom remodels run about 3 to 6 weeks of on-site work after design and material selection are finalized. Larger primary suites, jobs that relocate plumbing, or projects that remove a load-bearing wall take longer. You receive a schedule before demolition starts so there are no surprises.'],
  ['q' => 'Do you handle both the design and the construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable group takes your Winnetka bathroom from layout and material selection through tile, fixtures, and final installation. You do not need to hire a separate designer and general contractor and hope they coordinate.'],
  ['q' => 'How do I get started on a Winnetka bathroom remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day, walk your space, discuss your goals and budget, and provide a written estimate before any work begins. Our Lake Forest showroom is a short drive away if you want to see surfaces and fixtures in person.'],
];
$ts_projects = [
  ['img' => BASEURL.'flash/big/4.webp', 'title' => 'Spa bath, floating vanity', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'lakeforest/big/3_1.webp', 'title' => 'Double-vanity primary bath', 'location' => 'Winnetka, IL'],
  ['img' => BASEURL.'lakeforest/big/7_1.webp', 'title' => 'Powder room, vessel sinks', 'location' => 'Winnetka, IL'],
];
include "includes/components/ts_page.php";
?>
