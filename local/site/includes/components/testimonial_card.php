<?php
/**
 * Testimonial card, 5-star, quote, name + project.
 * Args: $t_quote, $t_name, $t_project
 */
?>
<div class="testimonial" data-reveal>
  <div class="testimonial-stars" aria-label="5 out of 5 stars"></div>
  <p class="testimonial-quote">"<?php echo htmlspecialchars($t_quote); ?>"</p>
  <p class="testimonial-meta"><?php echo htmlspecialchars($t_name); ?> · <?php echo htmlspecialchars($t_project); ?></p>
</div>
<?php $t_quote = $t_name = $t_project = null; ?>
