<?php
/**
 * Project tile, large kitchen photo + overlay caption.
 * Args: $proj_image, $proj_title, $proj_location, $proj_href (optional)
 */
$proj_href = $proj_href ?? '#';
$proj_open = $proj_open ?? null;   // index into the page's project modal (project_modal.php); null = plain link
?>
<a class="card" href="<?php echo $proj_href; ?>"<?php if ($proj_open !== null): ?> data-proj-open="<?php echo (int)$proj_open; ?>" role="button" aria-haspopup="dialog"<?php endif; ?> data-reveal style="text-decoration:none">
  <div class="card-media" style="aspect-ratio:4/3">
    <img src="<?php echo $proj_image; ?>" alt="<?php echo htmlspecialchars($proj_title); ?>" loading="lazy">
  </div>
  <div class="card-body">
    <?php if (($proj_location ?? '') !== ''): ?><span class="eyebrow" style="font-size:.75rem"><?php echo htmlspecialchars($proj_location); ?></span><?php endif; ?>
    <h3 style="font-size:1.25rem;margin-top:.5rem"><?php echo htmlspecialchars($proj_title); ?></h3>
  </div>
</a>
<?php $proj_image = $proj_title = $proj_location = $proj_href = $proj_open = null; ?>
