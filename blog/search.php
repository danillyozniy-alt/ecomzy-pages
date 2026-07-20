<?php
/**
 * Blog search results template.
 */
$posts_per_page = 9;
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$current_cat = em_is_category() ?: '';
$search = sanitize_text_field($_GET['search'] ?? '');

?>
<?php get_header(); ?>

<!-- Blog Hero -->
<section class="blog-hero">
  <div class="container">
    <h1 class="blog-hero-title reveal">Ecomzy <span style="color:var(--teal-bright)">Blog</span></h1>
  </div>
</section>

<?php include __DIR__ . '/partials/categories-nav.php'; ?>

<!-- Search Results Header -->
<section class="blog-search-results">
  <div class="container">
    <p class="blog-search-result-text reveal">Search results for <strong><?php echo esc_html($search); ?></strong></p>
  </div>
</section>

<!-- Post Grid -->
<section class="blog-grid-section">
  <div class="container">
    <div class="blog-grid">
      <?php
      $query = new WP_Query([
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => $posts_per_page,
          'category_name'  => $current_cat,
          'offset'         => $posts_per_page * ($current_page - 1),
          's'              => $search,
      ]);
      $total_posts = $query->found_posts;

      if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
              $args = ['size' => 'card'];
              include __DIR__ . '/partials/post-card.php';
          endwhile;
      else : ?>
          <p class="blog-no-results">No articles found. Try a different search term.</p>
      <?php endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<!-- Pagination -->
<?php
$per_page = $posts_per_page;
$url_pattern = '/blog/page/%d?search=' . urlencode($search);
include __DIR__ . '/partials/pagination.php';
?>

<?php get_footer(); ?>
