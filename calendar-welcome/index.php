<?php
$calendly_embed_url = get_option('em_calendly_url', 'https://calendly.com/d/ym8-m3n-73s/welcome-to-sellvia-pro');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html(wp_get_document_title()); ?></title>
<link rel="icon" href="<?php echo esc_url(home_url('/favicon.svg')); ?>" type="image/svg+xml">
<?php wp_head(); ?>
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
</head>
<body class="cw-page">

<main class="cw-main">
  <div class="cw-container">
    <header class="cw-hero">
      <h1 class="cw-title">Your online business starts here. Let us show you how it <em>all works</em>.</h1>
    </header>

    <section class="cw-calendar">
      <div class="calendly-inline-widget"
           data-url="<?php echo esc_attr($calendly_embed_url); ?>?hide_gdpr_banner=1&primary_color=14b8a6"></div>
    </section>
  </div>
</main>

<?php wp_footer(); ?>
</body>
</html>
