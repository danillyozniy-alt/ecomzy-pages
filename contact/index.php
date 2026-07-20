<?php

if (isset($_POST['submit'])) {
    global $_messages;

    $name    = sanitize_text_field($_POST['contact_name'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    $errors = [];
    if (empty($email) || !is_email($email)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if (empty($message)) {
        $errors[] = 'Please enter your message.';
    }

    if ($errors) {
        $_messages = ['error' => $errors];
    } else {
        $to      = EM_CONTACT_EMAIL;
        $subject = 'Contact form: ' . ($name ?: $email);
        $body    = "Name: {$name}\n"
                 . "Email: {$email}\n"
                 . "Phone: {$phone}\n\n"
                 . $message;

        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'Reply-To: ' . $name . ' <' . $email . '>',
        ];

        if (em_wp_mail($to, $subject, $body, $headers)) {
            $_messages = [
                'success' => ["<b>Thank you!</b><br />We will get back to you within 24 hours."]
            ];
        } else {
            $_messages = [
                'error' => ["Something went wrong. Please try again or email us directly at " . EM_CONTACT_EMAIL . "."]
            ];
        }
    }
}

?>

<?php get_header(); ?>

<!-- ========================= PAGE CONTENT ========================= -->

<section class="hero">
  <div class="hero-grid-pattern"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-orb hero-orb-3"></div>
  <div class="hero-bleed-glow hero-bleed-top"></div>
  <div class="hero-bleed-glow hero-bleed-bottom"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-badge"><span class="dot"></span> Get In Touch</div>
      <h1>Let's <em>talk</em></h1>
      <p class="hero-sub">Have a question about Ecomzy? Want to learn more? We'd love to hear from you.</p>
    </div>
  </div>
</section>

<section class="contact-section">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info reveal">
        <h2 class="section-title">Contact <em>us</em></h2>
        <p class="contact-desc">We're real people, not bots. Reach out and get a personal reply within 24 hours.</p>
        <div class="contact-channels">
          <div class="contact-channel">
            <div class="contact-channel-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 20.5H7c-3 0-5-1.5-5-5v-7c0-3.5 2-5 5-5h10c3 0 5 1.5 5 5v7c0 3.5-2 5-5 5z"/><path d="M17 9l-3.13 2.5c-1.03.82-2.72.82-3.75 0L7 9"/></svg></div>
            <div>
              <div class="contact-channel-label">Customer support team:</div>
              <div class="contact-channel-value">support@ecomzy.com</div>
            </div>
          </div>
          <div class="contact-channel">
            <div class="contact-channel-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21.97 18.33c0 .36-.08.73-.25 1.09-.17.36-.39.7-.68 1.02-.49.54-1.03.93-1.64 1.18-.6.25-1.25.38-1.95.38-1.02 0-2.11-.24-3.26-.73s-2.3-1.15-3.44-1.98a28.75 28.75 0 01-3.28-2.8 28.414 28.414 0 01-2.79-3.27c-.82-1.14-1.48-2.28-1.96-3.41C2.24 7.67 2 6.58 2 5.54c0-.68.12-1.33.36-1.93.24-.61.62-1.17 1.15-1.67C4.15 1.31 4.85 1 5.59 1c.28 0 .56.06.81.18.26.12.49.3.67.56l2.32 3.27c.18.25.31.48.4.7.09.21.14.42.14.61 0 .24-.07.48-.21.71-.13.23-.32.47-.56.71l-.76.79c-.11.11-.16.24-.16.4 0 .08.01.15.04.23.04.08.07.14.09.18.18.33.49.76.93 1.28.45.52.93 1.05 1.45 1.58.54.53 1.06 1.02 1.59 1.47.52.44.95.74 1.29.92.03.02.1.05.18.09.08.04.17.05.27.05.17 0 .3-.06.41-.17l.76-.75c.25-.25.49-.44.72-.56.23-.14.46-.21.71-.21.19 0 .4.04.61.13.22.09.45.22.7.39l3.31 2.35c.26.18.44.39.55.64.1.25.16.5.16.78z"/></svg></div>
            <div>
              <div class="contact-channel-label">Phone:</div>
              <div class="contact-channel-value">+1 307 204 7373</div>
            </div>
          </div>
          <div class="contact-channel">
            <div class="contact-channel-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 13.43a3.12 3.12 0 100-6.24 3.12 3.12 0 000 6.24z"/><path d="M3.62 8.49c1.97-8.66 14.8-8.65 16.76.01 1.15 5.08-2.01 9.38-4.78 12.04a5.193 5.193 0 01-7.21 0c-2.76-2.66-5.92-6.97-4.77-12.05z"/></svg></div>
            <div>
              <div class="contact-channel-label">Location:</div>
              <div class="contact-channel-value">2 PARK PLAZA STE 680, IRVINE, CA 92614</div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form-card reveal rd2">
        <form method="POST">
          <div class="form-group">
            <input type="text" placeholder="Your name" name="contact_name">
          </div>
          <div class="form-group">
            <input type="tel" placeholder="Phone (optional)" name="phone">
          </div>
          <div class="form-group">
            <input type="email" placeholder="Your email*" name="email" required>
          </div>
          <div class="form-group">
            <textarea placeholder="Your message*" rows="5" name="message" required></textarea>
          </div>
          <button type="submit" class="btn-primary contact-submit" name="submit">Send Message</button>
          <p class="contact-note">We typically respond within 24 hours.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ========================= /PAGE CONTENT ======================== -->

<?php get_footer(); ?>
