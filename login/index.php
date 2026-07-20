<?php

if (!empty($_POST['email'])) {
    global $_messages;

    $_messages = [
        'error' => ["Sorry, email not found!"]
    ];
}

?>

<?php get_header(); ?>

<!-- ========================= PAGE CONTENT ========================= -->

<section class="auth-section">
  <div class="auth-grid">
    <div class="auth-form-col">
      <h1>Login to your<br>account</h1>
      <p class="auth-sub">Please enter your email address and we'll send you the login link.</p>
      <form method="POST">
        <div class="form-group">
          <input type="email" id="email" placeholder="Your email*" required name="email" autocomplete="email">
        </div>
        <button type="submit" class="btn-primary auth-submit">Send Link</button>
      </form>
      <div class="auth-footer">New to Ecomzy? <a href="<?php echo em_start_for_free_url(); ?>">Get started</a></div>
      <div class="auth-footer auth-footer-help">Need help signing in? <a href="<?php echo home_url('contact/'); ?>">Contact support</a></div>
    </div>
    <div class="auth-image-col">
      <img src="<?php em_theme_url(); ?>/pages/login/images/login-hero.webp" alt="Ecomzy — Built for one. Designed for freedom.">
      <div class="auth-image-overlay">
        <p>Ecomzy.<br>Built for one. Designed<br>for freedom.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================= /PAGE CONTENT ======================== -->

<?php get_footer(); ?>
