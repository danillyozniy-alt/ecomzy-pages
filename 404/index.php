<?php get_header(); ?>

<!-- ========================= PAGE CONTENT ========================= -->
<section class="error-section">
  <div class="error-orb error-orb-1"></div>
  <div class="error-orb error-orb-2"></div>
  <div class="container">
    <div class="error-content">
      <div class="error-code">404</div>
      <h1>Page not <em>found</em></h1>
      <p class="error-desc">The page you're looking for doesn't exist or has been moved.</p>
      <div class="error-actions">
        <a href="<?php echo home_url(); ?>" class="btn-primary">Back to Homepage</a>
        <a href="<?php echo home_url('contact/'); ?>" class="btn-ghost">Contact Support</a>
      </div>
    </div>
  </div>
</section>
<!-- ========================= /PAGE CONTENT ======================== -->

<?php get_footer(); ?>
