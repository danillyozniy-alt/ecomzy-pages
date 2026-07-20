<?php
/**
 * Blog pagination partial.
 * Expects: $total_posts, $per_page, $current_page, $url_pattern
 */
if (empty($total_posts) || empty($per_page)) return;
$url_pattern = $url_pattern ?? '/blog/page/%d';

$paginator = new Paginator($total_posts, $per_page, $current_page, 2);
$html = $paginator->render($url_pattern);

if ($html) : ?>
<section class="blog-pagination-section">
  <div class="container">
    <div class="blog-pagination">
      <?php echo $html; ?>
    </div>
  </div>
</section>
<?php endif; ?>
