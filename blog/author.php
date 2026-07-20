<?php
/**
 * Author archive template.
 */
$posts_per_page = 9;
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$author_id = em_is_author();

?>
<?php get_header(); ?>

<!-- Author Header -->
<section class="author-hero">
  <div class="container">
    <div class="author-header reveal">
      <?php
      $avatar = get_the_author_meta('avatar', $author_id);
      if ($avatar) {
          $img_attrs = wp_get_attachment_image_src($avatar, [150, 150]);
          $avatar_src = $img_attrs[0];
      } else {
          $avatar_src = EM_THEME_URL . '/img/no-image.webp';
      }

      // Count author posts
      $author_posts = count_user_posts($author_id, 'post');
      ?>
      <img src="<?php echo $avatar_src; ?>" alt="<?php echo esc_attr(get_the_author_meta('display_name', $author_id)); ?>" class="author-avatar" width="150" height="150" loading="lazy">
      <div class="author-info">
        <h1 class="author-name"><?php echo get_the_author_meta('display_name', $author_id); ?></h1>
        <span class="author-post-count"><?php echo $author_posts . ' ' . _n('post', 'posts', $author_posts); ?></span>
      </div>
      <?php $bio = get_the_author_meta('description', $author_id); ?>
      <?php if ($bio) : ?>
      <p class="author-bio"><?php echo esc_html($bio); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Author Posts Grid -->
<section class="blog-grid-section">
  <div class="container">
    <div class="blog-grid">
      <?php
      $query = new WP_Query([
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => $posts_per_page,
          'author'         => $author_id,
          'offset'         => $posts_per_page * ($current_page - 1),
      ]);
      $total_posts = $query->found_posts;

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
$per_page = $posts_per_page;
$url_pattern = '/blog/page/%d';
include __DIR__ . '/partials/pagination.php';
?>

<!-- Subscribe -->
<?php include __DIR__ . '/partials/subscribe.php'; ?>

<?php get_footer(); ?>
