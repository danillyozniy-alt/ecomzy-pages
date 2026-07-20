<?php
$display_message = $display_message_type = false;

if (!empty($_GET['msg'])) {
    $msg = sanitize_text_field($_GET['msg']);
    if ($msg == 'thankyou') {
        $display_message      = "You're in! We'll notify you at launch.";
        $display_message_type = 'success';
    }
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html(wp_get_document_title()); ?></title>
<link rel="icon" href="<?php echo esc_url(home_url('/favicon.svg')); ?>" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:ital,opsz,wght@0,9..144,600;0,9..144,700;1,9..144,700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body class="ul-page">

<main class="ul-main">
  <div class="ul-container">
    <div class="ul-badge"><span class="dot"></span> Coming Soon</div>

    <h1 class="ul-title">The first ecommerce platform built for <em>solopreneurs</em></h1>

    <p class="ul-sub">Be the first to know when we go live. Enter your email for exclusive updates!</p>

    <?php if ($display_message): ?>
      <div class="ul-success"><?php echo esc_html($display_message); ?></div>
    <?php endif; ?>

    <form class="ul-form" action="https://www.aweber.com/scripts/addlead.pl" method="POST">
      <input type="hidden" name="listname" value="awlist6939254" />
      <input type="hidden" name="redirect" value="<?php echo esc_url( add_query_arg('msg', 'thankyou', get_permalink() ?: home_url('/upcoming-launch/')) ); ?>">
      <input type="hidden" name="meta_required" value="email" />
      <input type="hidden" name="meta_adtracking" value="Ecomzy_placeholder_subscription" />

      <div class="ul-input-group">
        <input type="email" name="email" placeholder="Enter your email" required />
        <button type="submit" class="ul-btn">Notify Me</button>
      </div>
    </form>
  </div>
</main>

<?php wp_footer(); ?>
</body>
</html>
