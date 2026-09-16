<?php
/**
 * Inline lead form section — drop onto any page so visitors can convert
 * without clicking out. Optional vars: $lf_heading, $lf_sub.
 */
$lf_heading = $lf_heading ?? 'Tell us about your project';
$lf_sub     = $lf_sub     ?? 'Free consultation, no pressure. We respond within one business day.';
?>
<section id="contact-form" class="section-alt">
  <div class="container" style="max-width:680px">
    <div style="text-align:center;margin-bottom:1.75rem" data-reveal>
      <span class="eyebrow">Get started</span>
      <h2><?php echo htmlspecialchars($lf_heading); ?></h2>
      <p class="lead"><?php echo htmlspecialchars($lf_sub); ?></p>
    </div>
    <?php include "includes/components/contact_form.php"; ?>
  </div>
</section>
<?php $lf_heading = $lf_sub = null; ?>
