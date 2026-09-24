<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Bathroom Remodeling in Lake Forest, IL | Paradise Home Design';
$ts_meta = 'Bathroom remodeling in Lake Forest, IL by a design-build firm based right here since 1986. Spa primary suites, powder rooms, tile and stone. (847) 681-9000.';
$ts_slug = 'bathroom-remodeling-lake-forest';
$ts_service = 'Bathroom Remodeling';
$ts_town = 'Lake Forest';
$ts_hero = BASEURL . 'flash/big/4.webp';
$ts_intro = [
  'A Lake Forest bathroom remodel almost always means working inside an older, well-built home, which is exactly where the hard parts live. We are a design-build firm headquartered right here in Lake Forest, and since 1986 we have opened up the walls of plenty of these houses, so we know what is behind the plaster in an East Lake Forest estate before we cut into it: cast-iron waste stacks, knob-and-tube remnants, framing that does not sit on a 16-inch grid. Getting the plumbing, waterproofing, ventilation, tile geometry, and lighting right the first time is the whole job, and in a wet room there is no hiding a mistake.',
  'Because we are based in town rather than driving in, you can walk into our showroom on Deerpath to feel a slab of marble or a frameless glass sample before you commit, then have a designer at your house the same week. We handle the full scope under one roof: primary suite layouts, curbless walk-in showers, freestanding soaking tubs, heated floors, double vanities in Fabuwood cabinetry, and powder rooms that punch above their square footage. One accountable team carries the project from concept and selections through demolition, rough-in, tile, and final fixtures.',
  'Whether your home is a historic-district original, a Conway Farms build, or a recent teardown-rebuild, we design the bathroom to read as part of the house. We pull the permits, coordinate licensed plumbers and electricians, and manage every inspection so the project stays compliant and on schedule.',
];
$ts_reasons = [
  ['title' => 'We know what is behind Lake Forest walls.', 'body' => 'Remodeling Lake Forest homes since 1986 means we expect the surprises older bathrooms hide, from cast-iron stacks in historic-district houses to the framing quirks in East Lake Forest estates. We plan around them instead of finding them mid-tear-out.'],
  ['title' => 'We pull permits with the city, in person.', 'body' => 'We file bathroom permits with the City of Lake Forest Community Development Department regularly and walk our own inspections. When the office knows your contractor, plumbing and electrical sign-offs move without the back-and-forth that stalls a wet-room schedule.'],
  ['title' => 'Our showroom is in Lake Forest, not a drive away.', 'body' => 'We are based right here, so you can come feel tile, stone, and vanity samples on Deerpath whenever you want, and a designer can be at your home the same week. No regional contractor commuting in for selections.'],
];
$ts_cost = 'Most full bathroom remodels in Lake Forest fall within a larger project budget that typically runs from about $50,000 to $130,000+, with primary suites featuring curbless showers, stone, and relocated plumbing at the higher end and powder rooms well below it.';
$ts_extra_html = '<h3>Lake Forest homes and what they ask of a bathroom</h3><p>Lake Forest housing stock skews older and substantial, which shapes every bathroom we touch here. Historic-district homes often have original second-floor baths with undersized supply lines, settled subfloors, and ventilation that was never really there, so a remodel is as much about correcting the bones as choosing finishes. East Lake Forest estates tend to want full spa primary suites, with room for a freestanding soaking tub, a curbless steam shower, double vanities, and heated stone floors. Conway Farms and teardown-rebuild homes are newer and more forgiving, but owners there expect the bathroom detailing to match the rest of a high-spec house. We design to the home you actually have, sequence the wet-room work in the right order, and finish it so it looks original to the architecture.</p>';
$faqs = [
  ['q' => 'How much does a bathroom remodel cost in Lake Forest, IL?', 'a' => 'Bathroom work in Lake Forest usually sits inside a project budget of roughly $50,000 to $130,000+. Spa primary suites with curbless showers, marble or quartzite, and relocated plumbing land at the top of that range, while powder rooms come in well below it. We provide a detailed written estimate after a free consultation. Call (847) 681-9000.'],
  ['q' => 'Do you pull bathroom permits with the City of Lake Forest?', 'a' => 'Yes. As a design-build remodeler, we pull all required permits with the City of Lake Forest Community Development Department and coordinate the plumbing, electrical, and final inspections, so your Lake Forest bathroom stays compliant and on schedule.'],
  ['q' => 'How long does a bathroom remodel take in Lake Forest?', 'a' => 'Expect about 3 to 6 weeks of on-site work after design and material selection. Primary suites, and any job that relocates plumbing or opens up an older Lake Forest wall, run longer. You get a written schedule before demolition begins.'],
  ['q' => 'Do you handle both the design and the construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team and our showroom in Lake Forest, so one accountable team takes you from layout and tile, stone, and fixture selection through rough-in, waterproofing, and final installation. You do not need a separate designer.'],
  ['q' => 'How do I get started on a Lake Forest bathroom remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. Because we are based in Lake Forest, a designer can usually visit your home within the same week, and we provide a written estimate before any work begins.'],
];
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$ts_projects_heading = 'Bathrooms we\'ve designed.';
$ts_projects = [
  ['img' => BASEURL.'flash/big/4.webp', 'title' => 'Spa bath, floating vanity', 'location' => ''],
  ['img' => BASEURL.'lakeforest2/big/bath1.webp', 'title' => 'Double vanity, walk-in shower', 'location' => 'Lake Forest, IL'],
  ['img' => BASEURL.'vernonhills1/big/bath-main.webp', 'title' => 'Warm wood double vanity, brass fixtures', 'location' => 'Vernon Hills, IL'],
];
include "includes/components/ts_page.php";
?>
