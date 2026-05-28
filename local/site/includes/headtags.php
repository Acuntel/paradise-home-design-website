<?php
/**
 * Paradise Home Design — shared <head> tags.
 * Include INSIDE the <head> of every page that uses the new design system.
 *
 * Usage: <head> ... <?php include_once("includes/headtags.php"); ?> ... </head>
 */
?>
<!-- Preconnect to font hosts for faster paint -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Playfair Display (headings) + Outfit (body) -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Paradise design system (loads after any legacy CSS so it overrides) -->
<link rel="stylesheet" href="<?php echo defined('BASEURL') ? BASEURL : '/'; ?>assets/css/design-system.css">

<!-- Defer reveal/scroll/nav helpers -->
<script defer src="<?php echo defined('BASEURL') ? BASEURL : '/'; ?>assets/js/reveal.js"></script>
