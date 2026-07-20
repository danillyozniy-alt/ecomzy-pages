<?php
/**
 * Single blog post template.
 */

// Track post views (session-based for guests)
if (!session_id()) session_start();
if (!is_user_logged_in()) {
    $post_id = $post->ID;
    if (!isset($_SESSION['post_views'])) $_SESSION['post_views'] = [];
    if (!in_array($post_id, $_SESSION['post_views'])) {
        $_SESSION['post_views'][$post_id] = $post_id;
        em_setPostViews($post_id);
    }
}

?>
<?php get_header(); ?>
<?php the_post(); ?>

<!-- Reading Progress Bar -->
<div class="reading-progress-bar" id="readingProgress"></div>

<?php include __DIR__ . '/partials/categories-nav.php'; ?>

<!-- Article -->
<article class="article-page">
  <div class="container">
    <div class="article-header reveal">
      <h1 class="article-title"><?php the_title(); ?></h1>
      <div class="article-meta">
        <span class="article-author">by <strong><a class="article-author-link" href="<?php echo get_author_posts_url($post->post_author); ?>"><?php echo get_the_author_meta('display_name', $post->post_author); ?></a></strong></span>
        <span class="article-date"><?php the_time('F j, Y'); ?></span>
      </div>
    </div>

    <!-- Featured Image -->
    <div class="article-featured-img reveal">
      <?php if ($img = em_get_image_src_and_set(get_the_ID(), 'full')) : ?>
      <img <?php echo $img; ?> alt="<?php echo esc_attr(get_the_title()); ?>">
      <?php endif; ?>
    </div>

    <!-- Article Body -->
    <div class="article-body">
      <div class="the-content">
        <?php echo em_format_the_content(); ?>
      </div>

      <!-- Author Block -->
      <div class="article-author-block reveal">
        <?php
        $avatar = get_the_author_meta('avatar', $post->post_author);
        if ($avatar) {
            $img_attrs = wp_get_attachment_image_src($avatar, [150, 150]);
            $avatar_src = $img_attrs[0];
        } else {
            $avatar_src = EM_THEME_URL . '/img/no-image.webp';
        }
        ?>
        <img src="<?php echo $avatar_src; ?>" alt="<?php echo esc_attr(get_the_author_meta('display_name', $post->post_author)); ?>" class="article-author-avatar" width="150" height="150" loading="lazy">
        <div class="article-author-info">
          <div class="article-author-name"><a href="<?php echo get_author_posts_url($post->post_author); ?>"><?php echo get_the_author_meta('display_name', $post->post_author); ?></a></div>
          <p class="article-author-bio"><?php echo get_the_author_meta('description', $post->post_author); ?></p>
        </div>
      </div>

      <!-- Share Icons -->
      <div class="article-share reveal">
        <span class="article-share-label">Share this article</span>
        <div class="article-share-icons">
          <a href="#" class="article-share-btn" aria-label="Share on Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','_blank','width=800,height=450');return false;">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" fill="currentColor"/></svg>
          </a>
          <a href="#" class="article-share-btn" aria-label="Share on X" onclick="window.open('https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>','_blank','width=800,height=450');return false;">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="currentColor"/></svg>
          </a>
          <a href="#" class="article-share-btn" aria-label="Share on LinkedIn" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo urlencode(get_the_title()); ?>','_blank','width=800,height=450');return false;">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z" fill="currentColor"/><circle cx="4" cy="4" r="2" fill="currentColor"/></svg>
          </a>
          <a href="#" class="article-share-btn article-share-copy" aria-label="Copy link" data-url="<?php the_permalink(); ?>">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</article>

<!-- Recommended Posts -->
<?php
$post_ids = get_post_meta($post->ID, '_recommended_for_you_posts_ids', true);
$post_ids = array_filter(array_map('trim', explode(',', $post_ids ?? '')));
if ($post_ids) :
?>
<section class="blog-grid-section blog-recommended">
  <div class="container">
    <h2 class="blog-recommended-title reveal">Recommended for you</h2>
    <div class="blog-grid">
      <?php
      $rec_query = new WP_Query([
          'post_type'    => 'post',
          'post_status'  => 'publish',
          'post__in'     => $post_ids,
          'orderby'      => 'post__in',
      ]);
      if ($rec_query->have_posts()) :
          while ($rec_query->have_posts()) : $rec_query->the_post();
              $args = ['size' => 'card'];
              include __DIR__ . '/partials/post-card.php';
          endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Subscribe -->
<?php include __DIR__ . '/partials/subscribe.php'; ?>

<!-- Scroll to top -->
<div id="scroll-to-the-top"></div>

<?php get_footer(); ?>
