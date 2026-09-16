<?php
ob_start(); session_start();
include_once("includes/config.php");
$ts_title = 'Bathroom Remodeling in Highland Park, IL | Paradise Home Design';
$ts_meta = 'Bathroom remodeling in Highland Park, IL: design-build primary suites, walk-in showers, and powder rooms. North Shore firm since 1986. Call (847) 681-9000.';
$ts_slug = 'bathroom-remodeling-highland-park';
$ts_service = 'Bathroom Remodeling';
$ts_town = 'Highland Park';
$ts_hero = BASEURL . 'flash/big/4.webp';
$ts_intro = [
  'Paradise Home Design remodels bathrooms throughout Highland Park, IL, from tight hall baths in post-1970 ranches to spa-style primary suites on the wooded lots near Ravinia. As a design-build firm, one team handles your layout, tile, plumbing, lighting, and stone selection from start to finish, so you are not juggling a separate designer, plumber, and tile setter who blame each other when something goes wrong.',
  'Highland Park bathrooms carry their own quirks, and we plan for them before demolition. The split-levels and slab-on-grade ranches built after 1970 often run plumbing through concrete or short joist bays, so relocating a toilet or widening a shower takes real planning rather than a hopeful guess. Mid-century homes here frequently hide original cast-iron stacks and undersized vents behind the walls. We open things up carefully, confirm what is actually back there, and price the work honestly up front, so you are not hit with a mid-project surprise.',
  'We design your bathroom to fit your home and pull the right permits with the City of Highland Park Building Division. Whether you want a curbless walk-in shower with frameless glass, a freestanding soaking tub under a window, or a double-vanity primary bath in quartz or marble, we handle the design and the build together. Call (847) 681-9000 for a free consultation and a written estimate.',
];
$ts_reasons = [
  ['title' => 'We know Highland Park\'s bathrooms, not just its kitchens.', 'body' => 'The post-1970 ranches, split-levels, and mid-century homes around Ravinia hide slab-routed drains, cast-iron stacks, and undersized vents. We have opened enough Highland Park walls to know what is likely behind them and design around it before demolition starts.'],
  ['title' => 'We pull permits with the City of Highland Park Building Division.', 'body' => 'Bathroom work that moves plumbing or alters venting needs a permit and inspections in Highland Park. We file with the City of Highland Park Building Division regularly and coordinate the inspector visits, so your project stays compliant and on schedule.'],
  ['title' => 'Close enough to be on site fast.', 'body' => 'Our Lake Forest showroom and base sit about 15 minutes north of Highland Park. That short hop means quick site visits, fast material drop-offs, and an owner who shows up rather than a crew dispatched from across the metro.'],
];
$ts_cost = 'Most full bathroom remodels in Highland Park fall in the $45,000–$110,000+ range, with primary suites, curbless showers, and stone tile at the higher end and powder rooms lower.';
$ts_extra_html = '<h3>Highland Park homes and their bathrooms</h3><p>Highland Park\'s housing stock leans heavily on post-1970 ranches, split-levels, and mid-century homes, especially in the neighborhoods near Ravinia. These eras built bathrooms small and practical: a single hall bath, a compact primary, and an original powder room near the entry. The Highland Park requests we hear most often are combining two cramped baths into one larger primary suite, converting a tub-shower combo to a curbless walk-in shower for aging in place, and upgrading dated cast-iron and builder-grade vanities to quartz, quartzite, or marble. Because so many of these homes sit on slab or shallow crawlspaces, we plan plumbing relocations and floor build-ups carefully so the finished height, slope, and drainage all work together. We design each Highland Park bathroom to match the home\'s scale and light rather than forcing a generic template onto it.</p>';
$faqs = [
  ['q' => 'How much does a bathroom remodel cost in Highland Park, IL?', 'a' => 'Most full bathroom remodels in Highland Park run from about $45,000 to $110,000+, depending on size, fixtures, tile and stone, and whether plumbing or walls move. Primary suites and curbless showers sit at the higher end; powder rooms are lower. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the City of Highland Park Building Division?', 'a' => 'Yes. Bathroom remodels that relocate plumbing, alter venting, or change electrical require a permit in Highland Park. As a design-build remodeler we file with the City of Highland Park Building Division and coordinate inspections, so your project stays compliant and on schedule.'],
  ['q' => 'How long does a bathroom remodel take in Highland Park?', 'a' => 'Plan on about 3 to 6 weeks of on-site work after design and material selection are finalized. Primary suites, or jobs that move plumbing through a slab or relocate fixtures, take longer. You get a written schedule before any demolition begins.'],
  ['q' => 'Do you handle both design and construction?', 'a' => 'Yes — we are a design-build firm. One Paradise Home Design team handles your layout, tile, stone, plumbing, lighting, and build from the first sketch through final inspection, so nothing falls through the cracks between a separate designer and contractor.'],
  ['q' => 'How do I get started on a Highland Park bathroom remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We respond within one business day, visit your Highland Park home, and provide a written estimate before any work begins. Our showroom is about 15 minutes north in Lake Forest.'],
];
$ts_projects = [
  ['img' => BASEURL.'flash/big/4.webp', 'title' => 'Spa bath, floating vanity', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'lakeforest/big/3_1.webp', 'title' => 'Double-vanity primary bath', 'location' => 'Highland Park, IL'],
  ['img' => BASEURL.'lakeforest/big/7_1.webp', 'title' => 'Powder room, vessel sinks', 'location' => 'Highland Park, IL'],
];
include "includes/components/ts_page.php";
?>
