<?php
$list = trim( (string) get_option('em_aweber_blog_list') );
// Not configured yet: show admins a reminder where to set it; hide the section from visitors.
if ($list === '' && ! current_user_can('manage_options')) return;
?>
<section class="blog-subscribe-section">
  <div class="container">
    <div class="blog-subscribe reveal">
      <h2 class="blog-subscribe-title">Keep up with the latest from Ecomzy</h2>
      <p class="blog-subscribe-desc">Get the newest tips, success stories, and insights delivered straight to your inbox.</p>
<?php if ($list === '') : ?>
      <p class="blog-subscribe-desc"><b>Set up the AWeber list:</b> configure the <b>Blog newsletter list (AWeber)</b> under <b>Settings &rarr; Ecomzy</b> to enable subscriptions.</p>
<?php else : ?>
      <form class="blog-subscribe-form" method="post" action="https://www.aweber.com/scripts/addlead.pl">
        <input type="hidden" name="listname" value="<?php echo esc_attr($list); ?>">
        <input type="hidden" name="redirect" value="<?php echo em_current_url(); ?>?subscribed=1">
        <input type="hidden" name="meta_adtracking" value="Ecomzy_subscription">
        <input type="email" name="email" class="blog-subscribe-input" placeholder="Your email address" required>
        <button type="submit" class="blog-subscribe-btn">Subscribe</button>
      </form>
<?php endif; ?>
    </div>
  </div>
</section>
