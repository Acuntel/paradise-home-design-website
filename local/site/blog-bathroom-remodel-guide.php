<?php
ob_start(); session_start();
include_once("includes/config.php");
$post_title   = 'Planning a Bathroom Remodel: A North Shore Homeowner\'s Guide';
$post_meta    = 'Costs, timelines, layout tips, and what to prioritize for a bathroom remodel on Chicago\'s North Shore. By Paradise Home Design, Lake Forest IL.';
$post_slug    = 'blog-bathroom-remodel-guide';
$post_date    = '2026-05-29';
$post_date_h  = 'May 29, 2026';
$post_read    = '5 min read';
$post_hero    = BASEURL . 'flash/big/4.webp';
$post_body = <<<HTML
<p>A bathroom remodel is one of the highest-return projects you can do — and often faster and less disruptive than a kitchen. Here's how to plan a <a href="/bathrooms.html">bathroom remodel</a> on the North Shore, from budget to the details that matter most.</p>

<h2>What a bathroom remodel costs</h2>
<ul>
  <li><strong>Powder room:</strong> \$8,000–\$18,000 — vanity, fixtures, tile, lighting.</li>
  <li><strong>Full / hall bath:</strong> \$18,000–\$35,000 — tub or shower, tile, vanity, plumbing fixtures.</li>
  <li><strong>Primary suite bath:</strong> \$35,000–\$75,000+ — curbless or spa shower, double vanity, heated floors, custom tile.</li>
</ul>

<h2>How long it takes</h2>
<p>Most bathrooms take 3 to 6 weeks of on-site work after design and material selection. Moving plumbing or building a custom shower adds time. We give you a schedule before demolition starts.</p>

<h2>Where to spend — and where to save</h2>
<h3>Worth the investment</h3>
<ul>
  <li><strong>Waterproofing and tile work</strong> — the part you can't see is what protects the part you can.</li>
  <li><strong>A quality shower</strong> — frameless glass, a built-in niche, and a comfortable bench.</li>
  <li><strong>Lighting and ventilation</strong> — layered light and a quiet, properly sized fan.</li>
</ul>
<h3>Easy to save</h3>
<ul>
  <li>Keep plumbing where it is when the layout already works.</li>
  <li>Use statement tile as an accent rather than everywhere.</li>
</ul>

<h2>Aging-in-place, done beautifully</h2>
<p>Curbless showers, grab bars, and wider doorways don't have to look clinical. We design accessible bathrooms that still feel high-end — increasingly requested across <a href="/winnetka.html">Winnetka</a> and <a href="/highland.html">Highland Park</a>.</p>

<blockquote>The bathrooms that age best are the ones designed around how you actually use the space — not just how it photographs.</blockquote>

<h2>Permits and the North Shore</h2>
<p>As a design-build remodeler, we pull permits and coordinate licensed plumbers and electricians, and handle inspections — so you have one accountable team start to finish.</p>

<p>Ready to start? <a href="/contact.html">Book a free consultation</a> at our Lake Forest showroom or call (847) 681-9000.</p>
HTML;
$post_faqs = [
  ['q' => 'How much does a bathroom remodel cost on the North Shore?',
   'a' => 'Powder rooms run about $8,000–$18,000, full baths $18,000–$35,000, and primary suite baths $35,000–$75,000+, depending on tile, fixtures, and whether plumbing is moved.'],
  ['q' => 'How long does a bathroom remodel take?',
   'a' => 'Most bathroom remodels take 3 to 6 weeks of on-site work after design and material selection; larger primary baths or jobs that relocate plumbing take longer.'],
];
include "includes/components/blog_post.php";
?>
