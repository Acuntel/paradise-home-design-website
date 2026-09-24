<?php
/**
 * Blog post template. A post stub sets these then includes this file:
 *   $post_title, $post_meta, $post_slug, $post_date (e.g. '2026-05-15'),
 *   $post_date_h (human, 'May 15, 2026'), $post_hero, $post_excerpt,
 *   $post_body (HTML), $post_read (e.g. '5 min read'), $post_faqs (optional array)
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
$current_page = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($post_title); ?> | Paradise Home Design</title>
<meta name="description" content="<?php echo htmlspecialchars($post_meta); ?>">
<link rel="canonical" href="https://www.paradisehomedesigninc.com/<?php echo $post_slug; ?>.html" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo htmlspecialchars($post_title); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($post_meta); ?>" />
<meta property="og:image" content="<?php $pd_og = $post_hero; echo preg_match('#^https?://#', $pd_og) ? $pd_og : 'https://www.paradisehomedesigninc.com/' . ltrim($pd_og, '/'); ?>" />
<meta name="robots" content="index, follow"/>
<link rel="shortcut icon" href="<?php echo $baseurl; ?>assets/img/favicon.png">
<link rel="preload" as="image" href="<?php echo $post_hero; ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "<?php echo htmlspecialchars($post_title); ?>",
  "description": "<?php echo htmlspecialchars($post_meta); ?>",
  "image": "https://www.paradisehomedesigninc.com<?php echo $post_hero; ?>",
  "datePublished": "<?php echo $post_date; ?>",
  "dateModified": "<?php echo $post_date; ?>",
  "author": { "@type": "Organization", "name": "Paradise Home Design Inc" },
  "publisher": {
    "@type": "Organization",
    "name": "Paradise Home Design Inc",
    "logo": { "@type": "ImageObject", "url": "https://www.paradisehomedesigninc.com/assets/img/logo.png" }
  },
  "mainEntityOfPage": "https://www.paradisehomedesigninc.com/<?php echo $post_slug; ?>.html"
}
</script>
<?php include_once("includes/headtags.php"); ?>
<style>
  .pd-article { max-width: 760px; margin: 0 auto; }
  .pd-article p { margin: 0 0 1.15rem; line-height: 1.75; }
  .pd-article h2 { font-family: var(--font-display); font-size: 1.7rem; margin: 2.5rem 0 1rem; }
  .pd-article h3 { font-size: 1.2rem; margin: 1.75rem 0 .6rem; }
  .pd-article ul { margin: 0 0 1.15rem 1.1rem; line-height: 1.7; }
  .pd-article li { margin-bottom: .4rem; }
  .pd-article a { color: var(--paradise-brass-500); border-bottom: 1px solid transparent; }
  .pd-article a:hover { border-color: var(--paradise-brass-500); }
  .pd-article-meta { color: var(--paradise-stone-500); font-size: .9rem; letter-spacing: .04em; margin-bottom: 2rem; }
  .pd-article blockquote { border-left: 3px solid var(--paradise-brass-500); margin: 1.75rem 0; padding: .25rem 0 .25rem 1.25rem; font-family: var(--font-display); font-size: 1.25rem; font-style: italic; color: var(--paradise-ink-900); }
</style>
</head>
<body class="pd">

<?php include_once("includes/components/nav.php"); ?>

<?php
  $hero_variant = 'compact';
  $hero_image   = $post_hero;
  $hero_eyebrow = 'Paradise Journal';
  $hero_title   = $post_title;
  $hero_description = '';
  $hero_preloader = false;
  $hero_show_scroll = false;
  include "includes/components/hero.php";
?>

<?php $crumbs=[['name'=>'Home','url'=>$baseurl],['name'=>'Blog','url'=>$baseurl.'blog.html'],['name'=>$post_title,'url'=>$baseurl.$post_slug.'.html']]; include "includes/components/breadcrumbs.php"; ?>


<section>
  <div class="container">
    <article class="pd-article" data-reveal>
      <div class="pd-article-meta"><?php echo htmlspecialchars($post_date_h); ?><?php echo !empty($post_read) ? ' · ' . htmlspecialchars($post_read) : ''; ?> · Paradise Home Design</div>
      <?php echo $post_body; ?>
    </article>
  </div>
</section>

<?php
  if (!empty($post_faqs)) { $faqs = $post_faqs; include "includes/components/faq.php"; }
  $cta_heading = 'Planning a project on the North Shore?';
  $cta_subhead = 'Book a free design consultation at our Lake Forest showroom. We respond within one business day.';
  $cta_button_text = 'Schedule a consultation';
  $cta_button_href = $baseurl . 'contact.html';
  include "includes/components/cta_banner.php";
?>

<?php include_once("includes/components/site_footer.php"); ?>
</body>
</html>
