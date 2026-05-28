<?php
/**
 * Project tile, large kitchen photo + overlay caption.
 * Args: $proj_image, $proj_title, $proj_location, $proj_href (optional)
 */
$proj_href = $proj_href ?? '#';
?>
<a class="card" href="<?php echo $proj_href; ?>" data-reveal style="text-decoration:none">
  <div class="card-media" style="aspect-ratio:3/4">
    <img src="<?php echo $proj_image; ?>" alt="<?php echo htmlspecialchars($proj_title); ?>" loading="lazy">
  </div>
  <div class="card-body">
    <span class="eyebrow" style="font-size:.75rem"><?php echo htmlspecialchars($proj_location); ?></span>
    <h3 style="font-size:1.25rem;margin-top:.5rem"><?php echo htmlspecialchars($proj_title); ?></h3>
  </div>
</a>
<?php $proj_image = $proj_title = $proj_location = $proj_href = null; ?>
