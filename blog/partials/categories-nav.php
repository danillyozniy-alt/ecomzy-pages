<?php
/**
 * Category nav bar + search.
 */
$current_cat = em_is_category();
// On single post — highlight the post's first category
if (!$current_cat && is_singular('post')) {
  $post_cats = get_the_category();
  if ($post_cats) {
    $current_cat = $post_cats[0]->slug;
  }
}
$categories = get_categories(['orderby' => 'count', 'order' => 'DESC', 'hide_empty' => true]);
$search_val = isset($_GET['search']) ? esc_attr($_GET['search']) : '';
?>
<section class="blog-categories">
  <div class="container">
    <div class="blog-cat-bar">
      <div class="blog-cat-nav">
        <a href="<?php echo home_url('blog/'); ?>" class="blog-cat-link<?php echo !$current_cat ? ' active' : ''; ?>">Blog</a>
        <?php foreach ($categories as $cat) : ?>
        <a href="<?php echo home_url('blog/category/' . $cat->slug . '/'); ?>" class="blog-cat-link<?php echo ($current_cat === $cat->slug) ? ' active' : ''; ?>"><?php echo esc_html($cat->name); ?></a>
        <?php endforeach; ?>
      </div>
      <div class="blog-search">
        <svg class="blog-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
        <form role="search" method="get" action="<?php echo home_url('blog/'); ?>">
          <input type="text" name="search" class="blog-search-input" placeholder="Search articles..." value="<?php echo $search_val; ?>">
        </form>
      </div>
    </div>
  </div>
</section>
