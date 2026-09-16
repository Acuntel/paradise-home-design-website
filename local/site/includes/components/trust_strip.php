<?php
/**
 * Trust strip, single horizontal row of credentials, brass divider dots.
 * Default items pre-set; pass $trust_items to override.
 */
$trust_items = $trust_items ?? [
  ['number' => '38+', 'label' => 'Years on the North Shore'],
  ['number' => '500+', 'label' => 'Kitchens designed'],
  ['stars' => true, 'number' => '5.0', 'label' => 'on Google & BBB'],
  ['number' => '',    'label' => 'Lake Forest based'],
];
?>
<div class="pd-trust-strip">
  <div class="pd-trust-strip-inner">
    <?php foreach ($trust_items as $i => $item):
      if ($i > 0): ?><span class="pd-trust-divider" aria-hidden="true"></span><?php endif; ?>
      <div class="pd-trust-item">
        <?php if (!empty($item['stars'])): ?><span class="pd-trust-stars" aria-hidden="true">★★★★★</span> <?php endif; ?>
        <?php if (!empty($item['number'])): ?><strong><?php echo htmlspecialchars($item['number']); ?></strong><?php endif; ?>
        <?php echo htmlspecialchars($item['label']); ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php $trust_items = null; ?>
