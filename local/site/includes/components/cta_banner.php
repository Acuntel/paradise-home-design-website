<?php
/**
 * Full-width CTA banner, forest bg, brass headline, single CTA.
 * Args: $cta_heading, $cta_subhead, $cta_button_text, $cta_button_href
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
$cta_heading      = $cta_heading      ?? "Let's design the kitchen you've been picturing.";
$cta_subhead      = $cta_subhead      ?? 'Schedule a no-pressure consultation. We respond within one business day.';
$cta_button_text  = $cta_button_text  ?? 'Schedule a consultation';
$cta_button_href  = $cta_button_href  ?? $baseurl . 'contact.html';
?>
<section class="pd-cta-banner">
  <div class="container">
    <h2 data-reveal><?php echo htmlspecialchars($cta_heading); ?></h2>
    <p data-reveal><?php echo htmlspecialchars($cta_subhead); ?></p>
    <a class="btn btn-primary" href="<?php echo $cta_button_href; ?>" data-reveal><?php echo htmlspecialchars($cta_button_text); ?></a>
  </div>
</section>
<?php $cta_heading = $cta_subhead = $cta_button_text = $cta_button_href = null; ?>
