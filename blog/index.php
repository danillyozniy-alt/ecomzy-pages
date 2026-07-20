<?php
/**
 * Blog listing page template.
 * Routes to search/author sub-templates when applicable.
 */

if (isset($_GET['search'])) {
    include __DIR__ . '/search.php';
    return;
}

if (em_is_author()) {
    include __DIR__ . '/author.php';
    return;
}

$posts_per_page_top = 3;
$posts_per_page_bottom = 6;
$per_page = $posts_per_page_top + $posts_per_page_bottom + 1;
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$current_cat = em_is_category();

?>
<?php get_header(); ?>

<!-- Blog Hero -->
<section class="blog-hero">
  <div class="container">
    <h1 class="blog-hero-title reveal">Ecomzy <span style="color:var(--teal-bright)">Blog</span></h1>
  </div>
</section>

<?php include __DIR__ . '/partials/categories-nav.php'; ?>

<!-- Featured Post -->
<section class="blog-featured">
  <div class="container">
    <?php
    $query = new WP_Query([
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'category_name'  => $current_cat,
        'offset'         => ($posts_per_page_bottom * ($current_page - 1))
                          + ($posts_per_page_top * ($current_page - 1))
                          + ($current_page - 1)
    ]);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $args = ['size' => 'featured'];
            include __DIR__ . '/partials/post-card.php';
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</section>

<!-- Post Grid Batch 1 -->
<section class="blog-grid-section">
  <div class="container">
    <div class="blog-grid">
      <?php
      $query = new WP_Query([
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => $posts_per_page_top,
          'category_name'  => $current_cat,
          'offset'         => ($posts_per_page_bottom * ($current_page - 1))
                            + ($posts_per_page_top * ($current_page - 1))
                            + $current_page
      ]);
      if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
              $args = ['size' => 'card'];
              include __DIR__ . '/partials/post-card.php';
          endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<!-- CTA Banner -->
<section class="blog-cta-section">
  <div class="container">
    <div class="blog-cta reveal">
      <div class="blog-cta-shimmer"></div>
      <div class="blog-cta-frost"></div>
      <h2 class="blog-cta-title">Launch your hassle-free solopreneur business today</h2>
      <p class="blog-cta-desc">With Ecomzy, you get a free online store loaded with products, marketing tools, and personal support to start selling.</p>
      <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary">Get Started For Free <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
    </div>
  </div>
</section>

<!-- Post Grid Batch 2 -->
<section class="blog-grid-section">
  <div class="container">
    <div class="blog-grid">
      <?php
      $bottom_query_args = [
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => $posts_per_page_bottom,
          'category_name'  => $current_cat,
          'offset'         => ($posts_per_page_bottom * ($current_page - 1))
                            + ($posts_per_page_top * $current_page)
                            + $current_page
      ];
      $query = new WP_Query($bottom_query_args);

      // Count total posts for pagination
      $count_args = $bottom_query_args;
      $count_args['numberposts'] = -1;
      unset($count_args['posts_per_page'], $count_args['offset']);
      $total_posts = count(get_posts($count_args));

      if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
              $args = ['size' => 'card'];
              include __DIR__ . '/partials/post-card.php';
          endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<!-- Pagination -->
<?php
$url_pattern = $current_cat ? '/blog/category/' . $current_cat . '/page/%d' : '/blog/page/%d';
include __DIR__ . '/partials/pagination.php';
?>

<!-- Subscribe -->
<?php include __DIR__ . '/partials/subscribe.php'; ?>

<?php get_footer(); ?>
