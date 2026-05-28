<?php
/**
 * Paradise Hero, three variants.
 *
 * Args:
 *   $hero_variant     'fullscreen' | 'split' | 'compact'   (default 'fullscreen')
 *   $hero_image       URL to background photo
 *   $hero_eyebrow     short uppercase tagline
 *   $hero_title       main headline
 *   $hero_description 1-2 sentence support
 *   $hero_cta_text    primary CTA text
 *   $hero_cta_href    primary CTA href
 *   $hero_cta2_text   secondary CTA text (optional)
 *   $hero_cta2_href   secondary CTA href (optional)
 *   $hero_show_scroll show scroll-indicator (default true for fullscreen)
 *   $hero_preloader   include preloader (default true on fullscreen)
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
$hero_variant     = $hero_variant     ?? 'fullscreen';
$hero_eyebrow     = $hero_eyebrow     ?? '';
$hero_image       = $hero_image       ?? '';
$hero_title       = $hero_title       ?? '';
$hero_description = $hero_description ?? '';
$hero_cta_text    = $hero_cta_text    ?? 'Schedule a consultation';
$hero_cta_href    = $hero_cta_href    ?? $baseurl . 'contact.html';
$hero_cta2_text   = $hero_cta2_text   ?? 'See our work';
$hero_cta2_href   = $hero_cta2_href   ?? $baseurl . 'gallery.html';
$hero_show_scroll = $hero_show_scroll ?? ($hero_variant === 'fullscreen');
$hero_preloader   = $hero_preloader   ?? ($hero_variant === 'fullscreen');

$hero_class = 'pd-hero';
if ($hero_variant === 'compact') $hero_class .= ' pd-hero-compact';
?>

<?php if ($hero_preloader): ?>
<div class="pd-preloader" id="pd-preloader">
  <div class="pd-preloader-text">PARADISE</div>
  <div class="pd-preloader-line"></div>
</div>
<?php endif; ?>

<section class="<?php echo $hero_class; ?>" id="hero">
  <?php if (!empty($hero_image)): ?>
    <div class="pd-hero-photo" style="background-image:url('<?php echo htmlspecialchars($hero_image); ?>')"></div>
  <?php endif; ?>

  <div class="pd-hero-content">
    <?php if (!empty($hero_eyebrow)): ?>
      <div class="pd-hero-eyebrow"><?php echo htmlspecialchars($hero_eyebrow); ?></div>
    <?php endif; ?>
    <h1 class="pd-hero-title"><?php echo htmlspecialchars($hero_title); ?></h1>
    <?php if (!empty($hero_description)): ?>
      <p class="pd-hero-description"><?php echo htmlspecialchars($hero_description); ?></p>
    <?php endif; ?>
    <div class="pd-hero-ctas">
      <a class="btn btn-primary" href="<?php echo $hero_cta_href; ?>"><?php echo htmlspecialchars($hero_cta_text); ?></a>
      <?php if (!empty($hero_cta2_text)): ?>
        <a class="btn btn-outline" href="<?php echo $hero_cta2_href; ?>"><?php echo htmlspecialchars($hero_cta2_text); ?></a>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($hero_show_scroll): ?>
    <a href="#hero-next" class="pd-scroll-indicator" aria-label="Scroll to content">
      <span>Scroll</span>
      <span class="pd-scroll-indicator-line"></span>
    </a>
  <?php endif; ?>
</section>
<span id="hero-next"></span>

<?php
$hero_variant = $hero_eyebrow = $hero_image = $hero_title = $hero_description = null;
$hero_cta_text = $hero_cta_href = $hero_cta2_text = $hero_cta2_href = null;
$hero_show_scroll = $hero_preloader = null;
?>
