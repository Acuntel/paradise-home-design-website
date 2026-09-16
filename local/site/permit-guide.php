<?php
ob_start(); session_start();
include_once("includes/config.php");
$post_title   = 'Do You Need a Permit to Remodel? A North Shore Village-by-Village Guide';
$post_meta    = 'Which North Shore villages require permits for kitchen and bath remodels, the office that issues them, and how Paradise Home Design handles it for you.';
$post_slug    = 'permit-guide';
$post_date    = '2026-05-31';
$post_date_h  = 'May 31, 2026';
$post_read    = '6 min read';
$post_hero    = BASEURL . 'flash/big/3.webp';
$post_body = <<<HTML
<p><strong>Short answer: almost certainly yes.</strong> On Chicago's North Shore, nearly every kitchen or bathroom remodel that touches plumbing, electrical, gas, or walls requires a building permit — and many villages also require separate plumbing and electrical permits. The good news: as a design-build remodeler, <a href="/contact.html">Paradise Home Design</a> pulls the permits and handles inspections for you, so you never deal with the village counter.</p>

<h2>When a permit is required</h2>
<p>You almost always need a permit if your project includes any of the following:</p>
<ul>
  <li>Moving or adding plumbing (sinks, showers, gas lines)</li>
  <li>New or relocated electrical circuits, outlets, or lighting</li>
  <li>Removing or altering a wall (especially load-bearing)</li>
  <li>New windows, structural changes, or an addition/bump-out</li>
</ul>
<p>Like-for-like cosmetic swaps (paint, hardware, a same-spot faucet) often don't — but when in doubt, the village decides, and an unpermitted remodel can stall a future home sale. We confirm the requirement for your village before work starts.</p>

<h2>Who issues the permit, by village</h2>
<ul>
  <li><strong>Lake Forest</strong> — City of Lake Forest Community Development Department</li>
  <li><strong>Lake Bluff</strong> — Village of Lake Bluff Community Development Department</li>
  <li><strong>Highland Park</strong> — City of Highland Park Building Division</li>
  <li><strong>Highwood</strong> — City of Highwood Building Department</li>
  <li><strong>Winnetka</strong> — Village of Winnetka Community Development Department (historic-district review may apply)</li>
  <li><strong>Glencoe</strong> — Village of Glencoe Community Development Department</li>
  <li><strong>Northbrook</strong> — Village of Northbrook Development &amp; Planning Services</li>
  <li><strong>Deerfield</strong> — Village of Deerfield Building &amp; Code Enforcement</li>
  <li><strong>Vernon Hills</strong> — Village of Vernon Hills Community Development Department</li>
  <li><strong>Buffalo Grove</strong> — Village of Buffalo Grove Building &amp; Zoning Division</li>
  <li><strong>Chicago</strong> — City of Chicago Department of Buildings</li>
</ul>

<h2>How the process works on a Paradise project</h2>
<p>We design the project, prepare the drawings the village needs, submit the permit application, schedule the inspections at each stage (rough-in, then final), and close the permit out. Condo and historic-district properties can add a review step — we plan that timeline into your schedule up front so approvals don't surprise you mid-project.</p>

<blockquote>Pulling the permit isn't red tape — it's what protects your home's value and proves the work was done to code when you sell.</blockquote>

<p>Planning a remodel? <a href="/contact.html">Book a free consultation</a> and we'll tell you exactly what your village requires. Call (847) 681-9000.</p>
HTML;
$post_faqs = [
  ['q' => 'Do I need a permit to remodel a kitchen on the North Shore?', 'a' => 'In almost all cases, yes. If your kitchen remodel moves plumbing, adds electrical, or alters a wall, your village requires a building permit (and often separate plumbing/electrical permits). Paradise Home Design pulls and manages all required permits for you.'],
  ['q' => 'Do I need a permit for a bathroom remodel?', 'a' => 'Yes, for almost any bathroom remodel beyond a cosmetic refresh — new plumbing fixtures, a relocated shower, or electrical work all require permits on the North Shore. We handle the application and inspections.'],
  ['q' => 'What happens if I remodel without a permit?', 'a' => 'Unpermitted work can result in stop-work orders and fines, and it frequently derails a future home sale when an inspection or disclosure surfaces it. Permitting also ensures the work meets code. We always pull the proper permits.'],
  ['q' => 'Does Paradise Home Design handle the permits?', 'a' => 'Yes. As a design-build remodeler we prepare the drawings, submit the permit application to your village, coordinate every inspection, and close the permit out — you never deal with the village counter.'],
];
include "includes/components/blog_post.php";
?>
