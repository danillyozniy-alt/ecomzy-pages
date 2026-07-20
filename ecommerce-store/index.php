<?php get_header(); ?>

<!-- ========================= PAGE CONTENT ========================= -->


<!-- HERO -->
<section class="hero">
  <div class="hero-grid-pattern"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-orb hero-orb-3"></div>
  <div class="hero-bleed-glow hero-bleed-top"></div>
  <div class="hero-bleed-glow hero-bleed-bottom"></div>
  <div class="container">
    <div class="hero-inner">

      <div class="hero-content">
        <div class="hero-badge"><span class="dot"></span> Ecommerce Store</div>
        <h1>Your ecommerce launchpad for <em>solopreneur success</em></h1>
        <p class="hero-sub">Get a free, ready-to-sell online store in minutes &ndash; no inventory or tech skills needed. Start your solopreneur journey today!</p>
        <div class="hero-actions">
          <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary liquid-btn">Start Your Free Store <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 9h10M10 5l4 4-4 4"/></svg></a>
        </div>
        <p class="hero-note"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#14B8A6" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Free 14-day trial &middot; No inventory &middot; No experience needed</p>
      </div>

      <div class="hero-visual reveal reveal-delay-2">
        <!-- VFX background -->
        <div class="hv-vfx">
          <div class="hv-nebula"></div>
          <div class="hv-ring hv-ring-1"></div>
          <div class="hv-ring hv-ring-2"></div>
          <div class="hv-spark" style="width:4px;height:4px;background:#14b8a6;top:15%;left:8%;--dur:5s;--del:0s"></div>
          <div class="hv-spark" style="width:3px;height:3px;background:#8b5cf6;top:60%;right:6%;--dur:7s;--del:1.5s"></div>
          <div class="hv-spark" style="width:5px;height:5px;background:#14b8a6;bottom:20%;left:20%;--dur:6s;--del:3s"></div>
          <div class="hv-spark" style="width:3px;height:3px;background:#f5b43c;top:25%;right:18%;--dur:8s;--del:2s"></div>
        </div>

        <!-- Photo with glass overlay -->
        <div class="hv-composition">
          <div class="hv-photo-col">
            <div class="hv-photo-frame">
              <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/hero-person.webp" alt="Solopreneur managing her ecommerce store" class="hv-photo">
              <div class="hv-photo-glow"></div>
            </div>
          </div>
          <div class="hv-dash-col">
            <div class="hv-dash">
              <div class="hv-dash-shimmer"></div>
              <div class="hv-dash-header">
                <span class="hv-dash-logo">ecomzy<span>.</span></span>
                <span class="hv-dash-status"><span class="hv-status-dot"></span> Live</span>
              </div>
              <div class="hv-dash-stats">
                <div class="hv-stat">
                  <div class="hv-stat-label">Revenue</div>
                  <div class="hv-stat-value">$12,450</div>
                  <div class="hv-stat-change">+34%</div>
                </div>
                <div class="hv-stat">
                  <div class="hv-stat-label">Orders</div>
                  <div class="hv-stat-value">187</div>
                  <div class="hv-stat-change">+18%</div>
                </div>
              </div>
              <div class="hv-dash-chart">
                <svg viewBox="0 0 200 50" preserveAspectRatio="none" class="hv-chart-svg">
                  <defs><linearGradient id="hvc" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="rgba(20,184,166,.2)"/><stop offset="100%" stop-color="rgba(20,184,166,0)"/></linearGradient></defs>
                  <path d="M0,40 Q25,38 50,30 T100,20 T150,15 T200,8 V50 H0Z" fill="url(#hvc)"/>
                  <path d="M0,40 Q25,38 50,30 T100,20 T150,15 T200,8" fill="none" stroke="#14B8A6" stroke-width="2"/>
                  <circle cx="200" cy="8" r="3" fill="#14B8A6"/>
                </svg>
              </div>
              <div class="hv-dash-orders">
                <div class="hv-order">
                  <span class="hv-order-dot paid"></span>
                  <span class="hv-order-name">AI Resume Toolkit</span>
                  <span class="hv-order-amount">+$38</span>
                </div>
                <div class="hv-order">
                  <span class="hv-order-dot paid"></span>
                  <span class="hv-order-name">AI Finance Toolkit</span>
                  <span class="hv-order-amount">+$27</span>
                </div>
                <div class="hv-order">
                  <span class="hv-order-dot paid"></span>
                  <span class="hv-order-name">AI Legal Toolkit</span>
                  <span class="hv-order-amount">+$325</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Floating cards -->
        <div class="hv-float hv-float-1">
          <div class="hv-float-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <div><div class="hv-float-title">SSL Secured</div><div class="hv-float-sub">256-bit encryption</div></div>
        </div>
        <div class="hv-float hv-float-2">
          <div class="hv-float-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <div><div class="hv-float-title">Payout sent</div><div class="hv-float-sub" style="color:#4ade80">$1,247 → Your bank</div></div>
        </div>
        <div class="hv-float hv-float-3">
          <div class="hv-float-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <div><div class="hv-float-title">New customer</div><div class="hv-float-sub">Sarah K. just signed up</div></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="benefits-section">
  <div class="container">
    <div class="benefits-grid">

      <div class="benefit-card reveal">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        </div>
        <h3>Instant business launch</h3>
        <p>Skip months of setup. Your store is ready upon signup, letting you focus on sales and growth from day one.</p>
      </div>

      <div class="benefit-card reveal rd2">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h3>Zero financial risk</h3>
        <p>Start completely free, with no upfront costs. Build revenue first and reinvest your profits to scale smartly.</p>
      </div>

      <div class="benefit-card reveal rd4">
        <div class="benefit-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
        </div>
        <h3>Full autonomy &amp; support</h3>
        <p>Run your venture independently with complete control, backed by expert guidance for every step of your journey.</p>
      </div>

    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features-section">
  <div class="container">
    <div class="features-header reveal">
      <div class="section-label">What&rsquo;s included</div>
      <h2 class="section-title">What does this solopreneur-friendly<br><em>solution include<span class="em-punct">?</span></em></h2>
      <p class="section-sub">Your high-class online store features everything you need to sell online and succeed. All with zero upfront cost and zero effort from your side.</p>
    </div>
    <div class="features-slider">
    <div class="features-track">

      <div class="feature-card reveal">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-1.webp" alt="Turnkey ecommerce website" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>A turnkey ecommerce website</h3>
          <p>Get a store built by professionals from start to finish, designed to generate sales from your very first day.</p>
        </div>
      </div>

      <div class="feature-card reveal rd1">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-2.webp" alt="Professional design" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Professional design</h3>
          <p>Enjoy a sleek, mobile-friendly store theme that delivers a perfect shopping experience on any device.</p>
        </div>
      </div>

      <div class="feature-card reveal rd2">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-3.webp" alt="Curated product catalog" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Curated product catalog</h3>
          <p>Sell digital products for pure profit. Instant sales, no shipping, no waiting &ndash; products are pre-loaded.</p>
        </div>
      </div>

      <div class="feature-card reveal">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-4.webp" alt="Built-in marketing tools" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Built-in marketing tools</h3>
          <p>Manage promotions and track performance from your dashboard with integrated, sales-driving solutions.</p>
        </div>
      </div>

      <div class="feature-card reveal rd1">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-5.webp" alt="Hassle-free order fulfillment" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Hassle-free order fulfillment</h3>
          <p>Our system auto-processes and delivers orders directly to your customers, saving you time and effort.</p>
        </div>
      </div>

      <div class="feature-card reveal rd2">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-6.webp" alt="Secure payment processing" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Secure payment processing</h3>
          <p>Accept all major credit cards and digital payments securely from day one &ndash; payment gateways are pre-integrated.</p>
        </div>
      </div>

      <div class="feature-card reveal">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-7.webp" alt="Performance analytics" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Performance analytics</h3>
          <p>Monitor traffic, sales, and customer behavior with clear reports to optimize your strategy effectively.</p>
        </div>
      </div>

      <div class="feature-card reveal rd1">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-8.webp" alt="Dedicated support access" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Dedicated support access</h3>
          <p>Get help when you need it from a real support team and a personal manager dedicated to your success.</p>
        </div>
      </div>

      <div class="feature-card reveal rd2">
        <div class="feature-img">
          <img src="<?php em_theme_url(); ?>/pages/ecommerce-store/images/icon-9.webp" alt="Community and learning" loading="lazy">
        </div>
        <div class="feature-content">
          <h3>Community &amp; learning</h3>
          <p>Access tutorials, success stories, and connect with fellow solopreneurs for advice, inspiration, and shared learning.</p>
        </div>
      </div>

    </div>
    <div class="features-controls">
      <div class="slider-dots"></div>
    </div>
    </div><!-- /features-slider -->
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="pillar p-how" id="how">
  <div class="container">
    <div class="pillar-inner">
      <div class="pillar-text reveal">
        <div class="section-label">How It Works</div>
        <h2 class="section-title" style="margin-bottom:14px">Three steps to<br>your <em>first sale.</em></h2>
        <p class="section-sub" style="margin-bottom:24px">No technical skills. No prior experience. No upfront investment. Your business is live before your coffee gets cold.</p>
        <ul class="pillar-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Store live in 60 seconds</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Everything set up automatically</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Sales from Day One</li>
        </ul>
        <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary">Start Now &mdash; It's Free <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 9h10M10 5l4 4-4 4"/></svg></a>
      </div>
      <div class="pillar-visual reveal rd2">
        <div class="glass-panel">
          <div class="how-steps-row">
            <div class="how-step-row">
              <div class="how-step-num">1</div>
              <div class="how-step-body">
                <div class="how-step-title">Sign Up Free</div>
                <div class="how-step-desc">Create your account &mdash; no upfront cost, no commitment. Your store is built instantly with your own URL.</div>
                <div class="how-step-pill"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg> 60 seconds</div>
              </div>
            </div>
            <div class="how-step-row">
              <div class="how-step-num">2</div>
              <div class="how-step-body">
                <div class="how-step-title">Your Store Goes Live</div>
                <div class="how-step-desc">100+ products pre-loaded. Custom domain, checkout, payments &mdash; all set up for you, automatically.</div>
                <div class="how-step-pill"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg> Done for you</div>
              </div>
            </div>
            <div class="how-step-row">
              <div class="how-step-num">3</div>
              <div class="how-step-body">
                <div class="how-step-title">Start Earning</div>
                <div class="how-step-desc">Sales come in. We handle fulfillment. Profits land in your bank account on full autopilot.</div>
                <div class="how-step-pill"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> Instant sales</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SOCIAL PROOF -->
<section class="social-proof">
  <div class="container" style="position:relative;z-index:1">
    <div class="reveal" style="text-align:center"><div class="section-label">Store Owners</div><h2 class="section-title">People like you, building real stores</h2></div>
    <div class="sp-slider" id="spSlider">
      <div class="sp-slide sp-active">
        <div class="sp-photo" style="--glow:rgba(20,184,166,.25)">
          <img class="sp-slide-img" src="/free-online-store/images/img_046.webp" alt="Maria D." loading="lazy">
        </div>
        <div class="sp-glass-wrap"><div class="sp-earn-badge"><span class="sp-earn-dot"></span> $2,300/mo</div>
          <div class="sp-glass-ring"></div>
          <div class="sp-glass" style="--accent:var(--teal-bright)">
          <div class="sp-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p class="sp-quote">"My husband lost his job and I was terrified. Two kids, mortgage, and I hadn't worked in 6 years. <em>Two months later I made my first $1,800.</em> Ecomzy didn't just give me a store. It gave me back my sleep."</p>
          <div class="sp-author">
            <div><div class="sp-author-name">Maria D.</div><div class="sp-author-role">Stay-at-home mom, Texas</div><p class="sp-disclaimer">Individual results may vary.</p></div>
          </div>
        </div></div>
      </div>
      <div class="sp-slide">
        <div class="sp-photo" style="--glow:rgba(59,130,246,.2)">
          <img class="sp-slide-img" src="/free-online-store/images/img_047.webp" alt="James T." loading="lazy">
        </div>
        <div class="sp-glass-wrap"><div class="sp-earn-badge"><span class="sp-earn-dot"></span> $3,100/mo</div>
          <div class="sp-glass-ring"></div>
          <div class="sp-glass" style="--accent:rgba(59,130,246,1)">
          <div class="sp-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p class="sp-quote">"They let me go after 11 years. I applied to 200 jobs. Nothing. I found Ecomzy on a Sunday night at 2am. <em>Within 60 days I was earning more than unemployment.</em> My daughter told her teacher: 'My dad has his own business now.'"</p>
          <div class="sp-author">
            <div><div class="sp-author-name">James T.</div><div class="sp-author-role">Former warehouse worker, Ohio</div><p class="sp-disclaimer">Individual results may vary.</p></div>
          </div>
        </div></div>
      </div>
      <div class="sp-slide">
        <div class="sp-photo" style="--glow:rgba(245,180,50,.2)">
          <img class="sp-slide-img" src="/free-online-store/images/img_048.webp" alt="Robert M." loading="lazy">
        </div>
        <div class="sp-glass-wrap"><div class="sp-earn-badge"><span class="sp-earn-dot"></span> $4,200/mo</div>
          <div class="sp-glass-ring"></div>
          <div class="sp-glass" style="--accent:rgba(245,158,11,1)">
          <div class="sp-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p class="sp-quote">"After 28 years in manufacturing, my plant closed. Nobody wanted to hire a 55-year-old. <em>By month three I cleared more than unemployment.</em> Last month &mdash; $4,200. I got my dignity back."</p>
          <div class="sp-author">
            <div><div class="sp-author-name">Robert M.</div><div class="sp-author-role">Former plant manager, Michigan</div><p class="sp-disclaimer">Individual results may vary.</p></div>
          </div>
        </div></div>
      </div>
    </div>
    <div class="sp-nav">
      <div class="sp-dots" id="spDots">
        <button class="sp-dot sp-dot-active" data-idx="0"></button>
        <button class="sp-dot" data-idx="1"></button>
        <button class="sp-dot" data-idx="2"></button>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="lp-cta">
  <div class="container">
    <div class="lp-cta-box reveal">
      <div class="lp-cta-shimmer"></div>
      <div class="lp-cta-frost"></div>
      <h2 class="section-title">Launch your solopreneur venture<br><em>with Ecomzy!</em></h2>
      <p class="section-sub">Join thousands who started with a free store. Your business journey begins with one click.</p>
      <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary liquid-btn">Start Your Free Store <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 9h10M10 5l4 4-4 4"/></svg></a>
      <p class="lp-cta-note">Free 14-day trial &middot; No inventory &middot; No experience needed</p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-section">
  <div class="container">
    <div class="faq-header reveal">
      <div class="section-label" style="justify-content:center;margin-bottom:16px">Got Questions?</div>
      <h2 class="section-title" style="margin-bottom:12px">Frequently asked <em>questions</em></h2>
      <p class="section-sub" style="margin:0 auto">Everything you need to know before you start.</p>
    </div>
    <div class="faq-wrap">
      <div class="faq-group reveal">
        <div class="faq-item"><div class="faq-q">Is Ecomzy really free?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">Yes. Your store, your products, and your personal manager support are all free. You only pay $39/month to keep your business operating &mdash; no upfront costs required to start.</div></div>
        <div class="faq-item"><div class="faq-q">Do I need any technical skills?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">None at all. If you can fill out a form and click a button, you can run this business. We handle everything technical: the website, hosting, checkout, and product delivery.</div></div>
        <div class="faq-item"><div class="faq-q">What kind of products will I sell?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">You sell AI-powered digital tools &mdash; resume builders, legal kits, health guides, family planners. Downloadable products customers use themselves. No physical goods, no inventory, no shipping.</div></div>
        <div class="faq-item"><div class="faq-q">How much money can I make?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">You keep 60&ndash;70% of every sale. Many store owners earn $3,000&ndash;$5,000+ per month once their store gains momentum. Results depend on your effort and audience.</div></div>
      </div>
      <div class="faq-group reveal rd1">
        <div class="faq-item"><div class="faq-q">How long does it take to set up?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">Your store is live in under 60 seconds. You create an account, and your storefront &mdash; complete with products, checkout, and domain &mdash; is ready immediately.</div></div>
        <div class="faq-item"><div class="faq-q">What countries is this available in?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">Ecomzy is available worldwide. Payouts are supported in 40+ countries via bank transfer, PayPal, and Stripe. Products are delivered digitally, so there are no shipping restrictions.</div></div>
        <div class="faq-item"><div class="faq-q">How are products delivered to customers?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">Instantly and automatically. The moment a customer purchases, they receive access via email. You never have to touch anything &mdash; the entire fulfillment process is hands-free.</div></div>
        <div class="faq-item"><div class="faq-q">What does a personal manager actually do?<span class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></span></div><div class="faq-a">Your personal manager is a real human who helps you get started, answers questions, reviews your store performance, and gives tailored growth advice via live chat and scheduled calls.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust-strip">
  <div class="container">
    <div class="trust-grid">
      <div class="trust-item reveal">
        <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><div class="trust-label">100% Hands-Free</div><div class="trust-desc">No packing, no shipping, no customer service</div></div>
      </div>
      <div class="trust-item reveal rd1">
        <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div>
        <div><div class="trust-label">Zero Experience Needed</div><div class="trust-desc">If you can click a button, you can run this</div></div>
      </div>
      <div class="trust-item reveal rd2">
        <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div><div class="trust-label">Real Income</div><div class="trust-desc">Earn from every sale, paid out to your bank</div></div>
      </div>
    </div>
  </div>
</div>

<!-- TRUST & SECURITY -->
<section class="trust-section">
  <div class="container">
    <div class="trust-header reveal">
      <div class="section-label" style="justify-content:center">Trust &amp; Security</div>
      <h2 class="section-title">Your trust is our foundation.</h2>
      <p class="section-sub">We're a real company, with real people, registered in the United States. Everything we do is designed to earn and keep your confidence.</p>
    </div>
    <div class="trust-creds">
      <div class="trust-cred reveal rd1">
        <span class="trust-cred-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-4h6v4"/><path d="M9 10h1"/><path d="M14 10h1"/><path d="M9 14h1"/><path d="M14 14h1"/></svg></span>
        <h4>US Registered Corporation</h4>
        <p>Ecomzy Technologies Corporation is officially registered in the State of California, USA. Real entity, verifiable records.</p>
      </div>
      <div class="trust-cred reveal rd2">
        <span class="trust-cred-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/></svg></span>
        <h4>Bank-Grade Encryption</h4>
        <p>256-bit SSL encryption on every page. Your personal data and payment information are protected to the highest industry standards.</p>
      </div>
      <div class="trust-cred reveal rd3">
        <span class="trust-cred-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/><path d="M10 9H8"/></svg></span>
        <h4>Full Transparency</h4>
        <p>Clear Terms of Service, Privacy Policy, and Refund Policy &mdash; written in plain English. No fine print, no surprises.</p>
      </div>
    </div>
    <div class="trust-guarantee reveal">
      <div class="trust-guarantee-shield"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
      <div class="trust-guarantee-text">
        <h4>30-Day Money-Back Guarantee</h4>
        <p>Try any paid service risk-free. If you're not completely satisfied within 30 days, we'll refund every penny &mdash; no questions asked.</p>
      </div>
    </div>
    <div class="trust-divider reveal"><span>Secure Payments</span></div>
    <div class="trust-payments reveal">
      <div class="trust-payments-row">
        <div class="trust-pay-icon">VISA</div>
        <div class="trust-pay-icon">Mastercard</div>
        <div class="trust-pay-icon">AMEX</div>
        <div class="trust-pay-icon">PayPal</div>
        <div class="trust-pay-icon" style="display:inline-flex;align-items:center;gap:6px"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg> SSL</div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>