<?php
/**
 * Section header, eyebrow + heading + optional description.
 *
 * Args (pre-set $variables before include):
 *   $sh_eyebrow      string (uppercase label)
 *   $sh_heading      string (sentence-case)
 *   $sh_description  string  (optional, 1-2 sentence intro)
 *   $sh_centered     bool    (default false; set true for centered alignment)
 */
$sh_centered = $sh_centered ?? false;
?>
<div class="section-header<?php echo $sh_centered ? ' centered' : ''; ?>" data-reveal>
  <?php if (!empty($sh_eyebrow)): ?>
    <span class="eyebrow"><?php echo htmlspecialchars($sh_eyebrow); ?></span>
  <?php endif; ?>
  <h2><?php echo htmlspecialchars($sh_heading); ?></h2>
  <?php if (!empty($sh_description)): ?>
    <p class="lead" style="<?php echo $sh_centered ? 'margin-left:auto;margin-right:auto' : ''; ?>"><?php echo htmlspecialchars($sh_description); ?></p>
  <?php endif; ?>
</div>
<?php $sh_eyebrow = $sh_heading = $sh_description = $sh_centered = null; ?>
