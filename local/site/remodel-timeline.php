<?php
ob_start(); session_start();
include_once("includes/config.php");
$post_title   = 'Kitchen Remodel Timeline: What 12 Weeks Actually Looks Like';
$post_meta    = 'A realistic week-by-week kitchen remodel timeline on Chicago\'s North Shore — design, ordering, demo, and installation — from Paradise Home Design.';
$post_slug    = 'remodel-timeline';
$post_date    = '2026-05-31';
$post_date_h  = 'May 31, 2026';
$post_read    = '5 min read';
$post_hero    = BASEURL . 'flash/big/7.webp';
$post_body = <<<HTML
<p>Most full <a href="/kitchens.html">kitchen remodels</a> take <strong>6 to 12 weeks of on-site work</strong>, preceded by 3 to 6 weeks of design and ordering. The single biggest variable is cabinetry lead time. Here's what a typical North Shore project actually looks like, stage by stage.</p>

<h2>Before demolition (3–6 weeks)</h2>
<ul>
  <li><strong>Design &amp; selections.</strong> Layout, cabinetry, countertops, tile, fixtures, lighting — locked before anything is ordered.</li>
  <li><strong>Ordering.</strong> Cabinets are the long pole: semi-custom runs ~4–8 weeks, fully custom longer. We order early so material is on hand before demo.</li>
  <li><strong>Permits.</strong> Your village reviews the plans (see our <a href="/permit-guide.html">permit guide</a>). We handle the application and scheduling.</li>
</ul>

<h2>On-site construction (6–12 weeks)</h2>
<ul>
  <li><strong>Week 1 — Demolition &amp; protection.</strong> Dust barriers up, old kitchen out, surprises (wiring, plumbing, framing) assessed.</li>
  <li><strong>Weeks 2–3 — Rough-in.</strong> Plumbing, electrical, and any framing/structural work; first inspection.</li>
  <li><strong>Weeks 3–4 — Walls &amp; floors.</strong> Drywall, paint prep, flooring underlayment.</li>
  <li><strong>Weeks 5–6 — Cabinets.</strong> Installation and leveling — the moment it starts to look like a kitchen.</li>
  <li><strong>Week 7 — Countertops.</strong> Templated after cabinets are set, then fabricated (~1–2 weeks) and installed.</li>
  <li><strong>Weeks 8–10 — Backsplash, fixtures, appliances, lighting.</strong> Tile, plumbing trim, hardware, final electrical.</li>
  <li><strong>Weeks 11–12 — Punch list &amp; final inspection.</strong> The details, then the reveal.</li>
</ul>

<h2>What stretches a timeline</h2>
<p>Custom cabinet lead times, moving plumbing or walls, structural surprises in older homes, condo-association or historic-district review, and long-lead specialty materials. We build realistic buffers into your schedule so the date we give you is the date you can plan around.</p>

<blockquote>A remodel that's rushed is a remodel that gets redone. We sequence the trades so each stage is right before the next begins.</blockquote>

<p>Bathrooms are faster — usually <a href="/bathrooms.html">3 to 6 weeks</a> on site. Want a schedule for your project? <a href="/contact.html">Book a free consultation</a> or call (847) 681-9000.</p>
HTML;
$post_faqs = [
  ['q' => 'How long does a kitchen remodel take?', 'a' => 'A typical full kitchen remodel takes 6 to 12 weeks of on-site work, after 3 to 6 weeks of design and cabinet/countertop ordering. Custom cabinetry and layout changes extend it; Paradise Home Design gives you a realistic schedule before demolition.'],
  ['q' => 'How long does a bathroom remodel take?', 'a' => 'Most bathroom remodels take 3 to 6 weeks of on-site work after design and material selection. Larger primary baths or jobs that relocate plumbing take longer.'],
  ['q' => 'Why do countertops come after cabinets?', 'a' => 'Countertops are templated to the installed cabinets for an exact fit, then fabricated (about 1–2 weeks) and installed. That sequencing prevents costly gaps and overhang errors.'],
  ['q' => 'Can I live in my home during the remodel?', 'a' => 'Yes. Most homeowners stay home during a kitchen or bath remodel. We set up dust protection and a temporary plan, and sequence work to keep the rest of the house clean and usable.'],
];
include "includes/components/blog_post.php";
?>
