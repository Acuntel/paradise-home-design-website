<?php
/**
 * Service card — image + heading + 1-line desc + ghost link.
 * Args: $svc_image, $svc_heading, $svc_text, $svc_href, $svc_link_text
 */
$svc_link_text = $svc_link_text ?? 'See our work';
?>
<a class="card" href="<?php echo $svc_href; ?>" data-reveal>
  <div class="card-media">
    <img src="<?php echo $svc_image; ?>" alt="<?php echo htmlspecialchars($svc_heading); ?>" loading="lazy" width="600" height="450">
  </div>
  <div class="card-body">
    <h3><?php echo htmlspecialchars($svc_heading); ?></h3>
    <p><?php echo htmlspecialchars($svc_text); ?></p>
    <span class="btn-ghost"><?php echo htmlspecialchars($svc_link_text); ?></span>
  </div>
</a>
<?php $svc_image = $svc_heading = $svc_text = $svc_href = $svc_link_text = null; ?>
