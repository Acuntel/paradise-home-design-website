<?php
/**
 * Reusable FAQ component — Paradise Home Design Inc.
 *
 * Define BEFORE including:
 *   $faqs = [ ['q' => '...', 'a' => '...'], ... ];
 *   $faq_heading = 'Frequently asked questions';  // optional
 *
 * Renders the visible FAQ block AND a matching FAQPage JSON-LD from the SAME
 * array, so structured data always equals on-page text (no cloaking).
 * To skip on a page, just don't define $faqs.
 */
if (!empty($faqs) && is_array($faqs)):
  $faq_heading = $faq_heading ?? 'Frequently asked questions';
?>
<section class="section-alt pd-faq" aria-labelledby="pd-faq-heading">
  <div class="container" style="max-width:820px">
    <div data-reveal>
      <span class="eyebrow">Good to know</span>
      <h2 id="pd-faq-heading" style="margin-bottom:2rem"><?php echo htmlspecialchars($faq_heading); ?></h2>
    </div>
    <div class="pd-faq-list">
      <?php foreach ($faqs as $f): ?>
        <details class="pd-faq-item" data-reveal>
          <summary class="pd-faq-q"><?php echo htmlspecialchars($f['q']); ?></summary>
          <div class="pd-faq-a"><?php echo nl2br(htmlspecialchars($f['a'])); ?></div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php
  // Matching FAQPage JSON-LD built from the same array (always valid, always in sync)
  $faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
      return [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
      ];
    }, array_values($faqs)),
  ];
  echo "\n<script type=\"application/ld+json\">\n";
  echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  echo "\n</script>\n";
endif;
$faqs = null; $faq_heading = null;
?>
