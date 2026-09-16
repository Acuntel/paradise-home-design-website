<?php
/**
 * Breadcrumbs — visible trail + matching BreadcrumbList JSON-LD from one array.
 * Set $crumbs = [['name'=>'Home','url'=>BASEURL], ..., ['name'=>'Current','url'=>...]];
 * then include this file. Last item is the current page (not linked).
 */
if (!empty($crumbs) && is_array($crumbs)):
?>
<nav class="pd-breadcrumbs" aria-label="Breadcrumb">
  <div class="container">
    <?php foreach ($crumbs as $i => $c): ?>
      <?php if ($i > 0): ?><span class="sep" aria-hidden="true">›</span><?php endif; ?>
      <?php if ($i < count($crumbs) - 1): ?><a href="<?php echo $c['url']; ?>"><?php echo htmlspecialchars($c['name']); ?></a><?php else: ?><span aria-current="page"><?php echo htmlspecialchars($c['name']); ?></span><?php endif; ?>
    <?php endforeach; ?>
  </div>
</nav>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[<?php
  $parts = [];
  foreach ($crumbs as $i => $c) {
    $parts[] = '{"@type":"ListItem","position":' . ($i + 1) . ',"name":' . json_encode($c['name']) . ',"item":' . json_encode($c['url']) . '}';
  }
  echo implode(',', $parts);
?>]}
</script>
<?php endif; $crumbs = null; ?>
