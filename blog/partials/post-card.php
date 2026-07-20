<?php
/**
 * Blog post card partial.
 * Args: $args['size'] = 'featured' | 'card' (default 'card')
 */
$size = $args['size'] ?? 'card';
$is_featured = ($size === 'featured');
$thumb_size = $is_featured ? 'large-post' : 'medium-post';
$categories = get_the_category();
?>

<?php if ($is_featured) : ?>
<div class="blog-featured-card reveal">
  <div class="blog-featured-img">
    <a href="<?php the_permalink(); ?>">
      <?php if ($img = em_get_image_src_and_set(get_the_ID(), $thumb_size)) : ?>
      <img <?php echo $img; ?> alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
      <?php endif; ?>
    </a>
  </div>
  <div class="blog-featured-body">
    <?php if ($categories) : ?>
    <span class="blog-cat-badge"><?php echo esc_html($categories[0]->name); ?></span>
    <?php endif; ?>
    <h2 class="blog-featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-featured-summary"><?php echo get_the_excerpt(); ?></p>
    <div class="blog-post-meta">
      <span class="blog-post-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="blog-author-link"><?php the_author(); ?></a></span>
      <span class="blog-post-date"><?php the_time('F j, Y'); ?></span>
    </div>
  </div>
</div>
<?php else : ?>
<div class="blog-card reveal">
  <div class="blog-card-img">
    <a href="<?php the_permalink(); ?>">
      <?php if ($img = em_get_image_src_and_set(get_the_ID(), $thumb_size)) : ?>
      <img <?php echo $img; ?> alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
      <?php endif; ?>
    </a>
  </div>
  <div class="blog-card-body">
    <?php if ($categories) : ?>
    <span class="blog-cat-badge"><?php echo esc_html($categories[0]->name); ?></span>
    <?php endif; ?>
    <h3 class="blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="blog-post-meta">
      <span class="blog-post-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="blog-author-link"><?php the_author(); ?></a></span>
      <span class="blog-post-date"><?php the_time('F j, Y'); ?></span>
    </div>
  </div>
</div>
<?php endif; ?>
