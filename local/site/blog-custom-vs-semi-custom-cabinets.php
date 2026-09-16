<?php
ob_start(); session_start();
include_once("includes/config.php");
$post_title   = 'Custom vs. Semi-Custom Cabinets: How to Choose';
$post_meta    = 'Custom, semi-custom, or stock cabinetry? A North Shore remodeler explains the real differences in price, lead time, and quality — and which is right for your kitchen.';
$post_slug    = 'blog-custom-vs-semi-custom-cabinets';
$post_date    = '2026-05-26';
$post_date_h  = 'May 26, 2026';
$post_read    = '6 min read';
$post_hero    = BASEURL . 'flash/big/7.webp';
$post_body = <<<HTML
<p>Cabinetry is the heart of a kitchen — and usually the biggest line in the budget. The choice between stock, semi-custom, and fully custom cabinets affects price, lead time, fit, and how long your kitchen will look great. Here's how we help North Shore homeowners decide.</p>

<h2>Stock cabinets</h2>
<p>Pre-made in fixed sizes. Lowest cost and fastest, but limited finishes and sizes mean filler strips and compromises in older <a href="/highland.html">Highland Park</a> or <a href="/lakeforest.html">Lake Forest</a> homes where walls are rarely square.</p>

<h2>Semi-custom cabinets</h2>
<p>The sweet spot for most remodels. You get a wide range of door styles, finishes, and modifications at a reasonable price and lead time. We specify lines like <strong>Fabuwood, Homecrest,</strong> and <strong>Woodland</strong> for clients who want quality and selection without a fully custom budget.</p>

<h2>Fully custom cabinets</h2>
<p>Built to your exact specifications, one cabinet at a time. Unlimited sizes, finishes, and details — ideal for unique layouts and heirloom-quality kitchens. Our custom lines include <a href="/adelphi.html">Adelphi Kitchens</a> and <a href="/qcci.html">Quality Custom Cabinetry (QCCI)</a>, both family-owned American makers.</p>

<h2>How to choose</h2>
<ul>
  <li><strong>Budget-driven, standard layout?</strong> Semi-custom delivers the best value.</li>
  <li><strong>Unusual space, tall ceilings, or specific storage needs?</strong> Custom pays for itself in fit and function.</li>
  <li><strong>Forever home?</strong> Invest in inset construction and solid-wood doors — you'll feel the difference daily.</li>
</ul>

<h3>Construction details that matter</h3>
<ul>
  <li><strong>Box material:</strong> plywood boxes outlast particleboard.</li>
  <li><strong>Door overlay:</strong> full-overlay and inset look more custom than standard overlay.</li>
  <li><strong>Soft-close hardware:</strong> now standard on quality lines — confirm it's included.</li>
  <li><strong>Finish warranty:</strong> the best lines offer lifetime, transferable warranties.</li>
</ul>

<blockquote>You don't have to know cabinet brands — that's our job. Tell us how you cook and live, and we'll match you to the right line and budget.</blockquote>

<p>Come see and touch samples at our Lake Forest showroom, or browse <a href="/brands.html">the brands we build with</a>. <a href="/contact.html">Book a free consultation</a> or call (847) 681-9000.</p>
HTML;
$post_faqs = [
  ['q' => 'What is the difference between custom and semi-custom cabinets?',
   'a' => 'Semi-custom cabinets come in set sizes with a wide range of finishes and some modifications, at a moderate price. Fully custom cabinets are built to any size and specification, one at a time, for the highest level of fit and finish.'],
  ['q' => 'Which cabinet brands does Paradise Home Design carry?',
   'a' => 'Paradise carries Adelphi and Quality Custom Cabinetry (fully custom), plus Fabuwood, Homecrest, Woodland, R.D. Henry, and Holiday Kitchens.'],
];
include "includes/components/blog_post.php";
?>
