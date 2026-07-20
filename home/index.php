<?php get_header(); ?>

<!-- ========================= PAGE CONTENT ========================= -->

<div class="dark-top">
  <div class="hero-bg">
    <canvas class="hero-mesh-canvas" id="meshCanvas"></canvas>
  </div>
  <section class="hero">
    <div class="hero-center">
      <div class="hero-badge">
        <span class="hero-badge-dot"></span>
        Free to Start &middot; Launch in 60 seconds
      </div>
      <h1 class="hero-title">Ecommerce Platform for <em>Solopreneurs</em></h1>
      <p class="hero-sub">Get a free online store filled with products people actually buy. We handle the marketing &mdash; you keep your margin on each sale.</p>
      <div class="hero-actions">
        <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary liquid-btn liquid-btn-warm">Start Your Free Store <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 9h10M10 5l4 4-4 4"/></svg></a>
      </div>
      <p class="hero-note"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Free 14-day trial &middot; No inventory &middot; No experience needed</p>
      <div class="awards-bar">
        <div class="awards-label">Award-Winning Platform &middot; Recognized By</div>
        <div class="awards-logos">
          <span><strong>Forbes</strong></span>
          <span class="awards-sep"></span>
          <span><strong>Inc.</strong> 5000</span>
          <span class="awards-sep"></span>
          <span><strong>Entrepreneur</strong></span>
          <span class="awards-sep"></span>
          <span>TITAN <strong>Awards</strong></span>
          <span class="awards-sep"></span>
          <span>Hermes <strong>Creative</strong></span>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- logos-bar removed -->

<section class="stats-counter">
  <div class="container">
    <div class="stats-grid">
      <div class="reveal reveal-delay-1"><div class="stat-item-value">12<span>,</span>400<span>+</span></div><div class="stat-item-label">Stores created</div></div>
      <div class="reveal reveal-delay-2"><div class="stat-item-value">680<span>K+</span></div><div class="stat-item-label">Products sold</div></div>
      <div class="reveal reveal-delay-3"><div class="stat-item-value">38</div><div class="stat-item-label">Countries served</div></div>
      <div class="reveal reveal-delay-4"><div class="stat-item-value">4.8<span>/5</span></div><div class="stat-item-label">Average store rating</div></div>
    </div>
  </div>
</section>

<section class="video-section">
  <div class="video-wrap">
    <div class="video-placeholder" id="video-placeholder">
      <img src="<?php em_theme_url(); ?>/pages/home/images/img_008.webp" alt="Woman working from home on her Ecomzy store">
      <div class="video-overlay"></div>
      <div class="video-content">
      <div class="video-eyebrow reveal" style="display:none">See it in action</div>
      <div class="video-play" role="button" style="display:none" aria-label="Play video">
        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
      </div>
      <h2 class="video-title reveal">Real people. Real stores.<br>Real sales.</h2>
      <p class="video-sub reveal">Watch how Sarah went from zero business experience to $2,300/month in sales from her kitchen table — in under 60 days.</p>
      <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary liquid-btn liquid-btn-warm reveal">Start Your Free Store <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 9h10M10 5l4 4-4 4"/></svg></a>
      <div class="video-trust reveal">
        <span style="display:none"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> 2 min watch</span>
        <span>12,400+ store owners</span>
        <span>No experience needed</span>
      </div>
    </div>
  </div>
</section>

<section class="how-it-works" id="how-it-works">
  <div class="container" style="position:relative;z-index:1">
    <div class="reveal" style="text-align:center">
      <div class="section-label">How It Works</div>
      <h2 class="section-title">Three steps. That's it.</h2>
      <p class="section-sub" style="margin:0 auto">No tech skills required. No inventory. No complicated setup. We handle the hard parts so you don't have to.</p>
    </div>
    <div class="steps-grid">
      <div class="step-card step-1 reveal reveal-delay-1"><div class="step-number">1</div><h3>We Create Your Store</h3><p>Sign up for free and get a fully built online store — designed, optimized, and ready to go. Works on any phone or computer.</p></div>
      <div class="step-card step-2 reveal reveal-delay-2"><div class="step-number">2</div><h3>We Fill It With Products</h3><p>Your store comes loaded with digital products people actually need — from career tools to money-saving kits. Prices from $7 to $999+.</p></div>
      <div class="step-card step-3 reveal reveal-delay-3"><div class="step-number">3</div><h3>We Bring Customers</h3><p>Our marketing team runs ads that put your store in front of real buyers. You keep your share of each sale — we handle the rest.</p></div>
    </div>
  </div>
</section>

<section class="what-you-get" style="padding:100px 0 0;background:var(--midnight)">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <div class="section-label" style="color:var(--teal-bright)">What You Get</div>
      <h2 class="section-title" style="color:#fff">A complete business. Not just a tool.</h2>
      <p class="section-sub" style="margin:0 auto;color:rgba(255,255,255,.5)">Other platforms give you one piece of the puzzle. Ecomzy gives you the whole picture — store, products, and customers.</p>
    </div>
  </div>
</section>

<section class="pillar pillar-store">
  <div class="pillar-stars"><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div><div class="pillar-star"></div></div>
  <div class="container">
    <div class="pillar-inner">
      <div class="pillar-text reveal">
        <div class="pillar-num">01</div>
        <div class="pillar-label">Your Store</div>
        <h2>A professional storefront.<br>Ready in 60 seconds.</h2>
        <p class="pillar-desc">Other platforms give you a blank canvas and say "figure it out." We give you a fully designed, mobile-optimized online store with your brand — live and ready to sell before your coffee gets cold.</p>
        <ul class="pillar-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Custom URL — yourname.com</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Beautiful design — zero coding required</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Works on any phone, tablet, or computer</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>SSL encrypted checkout built in</li>
        </ul>
        <div class="pillar-stat-row">
          <div class="pillar-stat"><div class="pillar-stat-val">$0</div><div class="pillar-stat-label">Monthly fee</div></div>
          <div class="pillar-stat"><div class="pillar-stat-val">60s</div><div class="pillar-stat-label">Setup time</div></div>
          <div class="pillar-stat"><div class="pillar-stat-val">100%</div><div class="pillar-stat-label">Mobile optimized</div></div>
        </div>
      </div>
      <div class="pillar-visual reveal reveal-delay-2">
        <div class="pv-phone-wrap">
          <div class="pv-aurora"></div>
          <div class="pv-rays"><div class="pv-ray"></div><div class="pv-ray"></div><div class="pv-ray"></div><div class="pv-ray"></div><div class="pv-ray"></div><div class="pv-ray"></div><div class="pv-ray"></div><div class="pv-ray"></div></div>
          <div class="pv-pulse-ring pv-pulse-ring-1"></div>
          <div class="pv-pulse-ring pv-pulse-ring-2"></div>
          <div class="pv-pulse-ring pv-pulse-ring-3"></div>
          <div class="pv-orbit pv-orbit-1"></div>
          <div class="pv-orbit pv-orbit-2"></div>
          <div class="pv-orbit pv-orbit-3"></div>
          <div class="pv-flying-dot pv-fd-1a"></div>
          <div class="pv-flying-dot pv-fd-1b"></div>
          <div class="pv-flying-dot pv-fd-2a"></div>
          <div class="pv-flying-dot pv-fd-2b"></div>
          <div class="pv-flying-dot pv-fd-2c"></div>
          <div class="pv-flying-dot pv-fd-3a"></div>
          <div class="pv-flying-dot pv-fd-3b"></div>
          <div class="pv-particles"><div class="pv-particle"></div><div class="pv-particle"></div><div class="pv-particle"></div><div class="pv-particle"></div><div class="pv-particle"></div><div class="pv-particle"></div></div>
          <div class="pv-float-card pv-fc-1">
            <div class="pv-float-card-top"><span class="pv-float-card-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></span><span class="pv-float-card-badge">↑ 18%</span></div>
            <div class="pv-float-card-val" id="pv-revenue">$2,340</div>
            <div class="pv-float-card-label">Catalog value</div>
          </div>
          <div class="pv-float-card pv-fc-2">
            <div class="pv-float-card-top"><span class="pv-float-card-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></span><span class="pv-float-card-badge">Top rated</span></div>
            <div class="pv-float-card-val">4.9</div>
            <div class="pv-float-card-label">Store rating</div>
          </div>
          <div class="pv-float-card pv-fc-3">
            <div class="pv-float-card-top"><span class="pv-float-card-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></span><span class="pv-float-card-badge">↑ 24%</span></div>
            <div class="pv-float-card-val" id="pv-orders">187</div>
            <div class="pv-float-card-label">Orders this month</div>
          </div>
          <div class="pv-phone-glow"></div>
          <div class="pv-phone-shadow"></div>
          <div class="pv-phone">
            <div class="pv-phone-screen">
              <div class="pv-store-scr">
                <img src="<?php em_theme_url(); ?>/pages/home/images/img_009.webp" alt="Ecomzy store example">
                <div class="pv-store-overlay"></div>
                <div class="pv-store-nav">
                  <div class="pv-store-nav-icon"><svg viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg></div>
                  <div class="pv-store-nav-icon" id="pvCartIcon"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg><div class="pv-cart-badge" id="pvCartBadge">0</div></div>
                </div>
                <div class="pv-store-brand">AURA</div>
                <div class="pv-store-sales" id="pvSaleContainer"></div>
                <div class="pv-store-herotext">
                  <h3>Elevate Your<br>Daily Ritual</h3>
                  <p>Begin your journey to a<br>healthier, happier life</p>
                  <div class="pv-store-herobtn">&#10022; Shop Now</div>
                </div>
              </div>
            </div>
          </div>
        </div></div>
      </div>
    </div>
  </div>
</section>

<section id="products" class="pillar pillar-products pillar-reverse">
  <div class="ps-map-bg">
    <svg class="ps-map-svg" id="usMapSvg" viewBox="0 0 960 600" preserveAspectRatio="xMidYMid meet"></svg>
  </div>
  <div class="container" style="position:relative;z-index:2">
    <div class="pillar-inner">
      <div class="pillar-text reveal">
        <div class="pillar-num">02</div>
        <div class="pillar-label">Products That Sell</div>
        <h2>500,000+ products<br>people search for.</h2>
        <p class="pillar-desc">No need to invent products or test ideas. Your store comes pre-loaded with digital tools that solve real problems — from $7 starter kits to $999+ premium suites. You keep 60–70% of each sale.</p>
        <ul class="pillar-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>10 categories: Pets, Health, Career, Legal & more</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Digital delivery — no shipping, no inventory</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>New products added every month</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Average order value: $40</li>
        </ul>
        <div class="pillar-stat-row">
          <div class="pillar-stat"><div class="pillar-stat-val">100+</div><div class="pillar-stat-label">Products</div></div>
          <div class="pillar-stat"><div class="pillar-stat-val">65%</div><div class="pillar-stat-label">Your share</div></div>
          <div class="pillar-stat"><div class="pillar-stat-val">$7–999</div><div class="pillar-stat-label">Price range</div></div>
        </div>
      </div>
      <div class="pillar-visual reveal reveal-delay-2" style="overflow:visible">
        <div class="ps-showcase">
          <div class="ps-icons">
              <div class="ps-cat-icon ps-icon-active" data-idx="0"><img src="<?php em_theme_url(); ?>/pages/home/images/img_010.webp" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:inherit"></div>
              <div class="ps-cat-icon" data-idx="1"><img src="<?php em_theme_url(); ?>/pages/home/images/img_011.webp" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:inherit"></div>
              <div class="ps-cat-icon" data-idx="2"><img src="<?php em_theme_url(); ?>/pages/home/images/img_012.webp" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:inherit"></div>
              <div class="ps-cat-icon" data-idx="3"><img src="<?php em_theme_url(); ?>/pages/home/images/img_013.webp" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:inherit"></div>
              <div class="ps-cat-icon" data-idx="4"><img src="<?php em_theme_url(); ?>/pages/home/images/img_014.webp" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:inherit"></div>
              <div class="ps-cat-icon" data-idx="5"><img src="<?php em_theme_url(); ?>/pages/home/images/img_015.webp" alt="" style="width:100%;height:100%;object-fit:cover;border-radius:inherit"></div>

          </div>
          <div class="ps-slider" id="psSlider">
            <div class="ps-ambient" style="width:3px;height:3px;background:rgba(20,184,166,.4);top:15%;left:8%;--fx:30px;--fy:-40px;--dur:7s;--del:0s"></div>
            <div class="ps-ambient" style="width:2px;height:2px;background:rgba(139,92,246,.35);top:75%;right:12%;--fx:-25px;--fy:35px;--dur:9s;--del:2s"></div>
            <div class="ps-ambient" style="width:4px;height:4px;background:rgba(74,222,128,.3);top:40%;left:3%;--fx:20px;--fy:-20px;--dur:11s;--del:4s"></div>
            <div class="ps-ambient" style="width:2px;height:2px;background:rgba(255,255,255,.2);bottom:20%;right:5%;--fx:-15px;--fy:-30px;--dur:8s;--del:1s"></div>
            <div class="ps-ambient" style="width:3px;height:3px;background:rgba(20,184,166,.25);top:5%;right:25%;--fx:20px;--fy:25px;--dur:10s;--del:3s"></div>
            <div class="ps-card ps-active" data-idx="0">
              <div class="ps-card-inner">
                <div class="ps-card-img"><img src="<?php em_theme_url(); ?>/pages/home/images/img_016.webp" alt="New Puppy 90-Day Plan"><div class="ps-quote"><div class="ps-quote-text">My puppy stopped biting furniture <strong>in just 2 weeks</strong>. Lifesaver!</div><div class="ps-quote-author"><span>Emma, TX</span><span class="ps-quote-stars">★★★★★</span></div></div></div>
                <div class="ps-card-body">
                  <div class="ps-card-emoji"><img src="<?php em_theme_url(); ?>/pages/home/images/img_017.webp" alt=""></div>
                  <div class="ps-card-cat">Pets</div>
                  <div class="ps-card-name">New Puppy 90-Day Plan</div>
                  <div class="ps-card-price">$9</div><div class="ps-card-earn"><span class="ps-earn-dot"></span><span class="ps-earn-label">Your margin</span><span class="ps-earn-val">$6</span></div>

                </div>
              </div>
            </div>
            <div class="ps-card" data-idx="1">
              <div class="ps-card-inner">
                <div class="ps-card-img"><img src="<?php em_theme_url(); ?>/pages/home/images/img_018.webp" alt="Medical Bill Error Finder"><div class="ps-quote"><div class="ps-quote-text">Found <strong>$1,200 in billing errors</strong>. Paid for itself 20x over.</div><div class="ps-quote-author"><span>Robert, OH</span><span class="ps-quote-stars">★★★★★</span></div></div></div>
                <div class="ps-card-body">
                  <div class="ps-card-emoji"><img src="<?php em_theme_url(); ?>/pages/home/images/img_019.webp" alt=""></div>
                  <div class="ps-card-cat">Money Rescue</div>
                  <div class="ps-card-name">Medical Bill Error Finder</div>
                  <div class="ps-card-price">$49</div><div class="ps-card-earn"><span class="ps-earn-dot"></span><span class="ps-earn-label">Your margin</span><span class="ps-earn-val">$32</span></div>

                </div>
              </div>
            </div>
            <div class="ps-card" data-idx="2">
              <div class="ps-card-inner">
                <div class="ps-card-img"><img src="<?php em_theme_url(); ?>/pages/home/images/img_020.webp" alt="Career Reboot System"><div class="ps-quote"><div class="ps-quote-text">Got 3 interviews in week one. <strong>Landed a $15K raise</strong>.</div><div class="ps-quote-author"><span>Danielle, GA</span><span class="ps-quote-stars">★★★★★</span></div></div></div>
                <div class="ps-card-body">
                  <div class="ps-card-emoji"><img src="<?php em_theme_url(); ?>/pages/home/images/img_021.webp" alt=""></div>
                  <div class="ps-card-cat">Career</div>
                  <div class="ps-card-name">Career Reboot System</div>
                  <div class="ps-card-price">$59</div><div class="ps-card-earn"><span class="ps-earn-dot"></span><span class="ps-earn-label">Your margin</span><span class="ps-earn-val">$38</span></div>

                </div>
              </div>
            </div>
            <div class="ps-card" data-idx="3">
              <div class="ps-card-inner">
                <div class="ps-card-img"><img src="<?php em_theme_url(); ?>/pages/home/images/img_022.webp" alt="Legal Protection Suite"><div class="ps-quote"><div class="ps-quote-text"><strong>Saved me $4,000+</strong> in legal fees. Every business owner needs this.</div><div class="ps-quote-author"><span>Carlos, AZ</span><span class="ps-quote-stars">★★★★★</span></div></div></div>
                <div class="ps-card-body">
                  <div class="ps-card-emoji"><img src="<?php em_theme_url(); ?>/pages/home/images/img_023.webp" alt=""></div>
                  <div class="ps-card-cat">Your Rights</div>
                  <div class="ps-card-name">Legal Protection Suite</div>
                  <div class="ps-card-price">$499</div><div class="ps-card-earn"><span class="ps-earn-dot"></span><span class="ps-earn-label">Your margin</span><span class="ps-earn-val">$325</span></div>

                </div>
              </div>
            </div>
            <div class="ps-card" data-idx="4">
              <div class="ps-card-inner">
                <div class="ps-card-img"><img src="<?php em_theme_url(); ?>/pages/home/images/img_024.webp" alt="Sleep Improvement System"><div class="ps-quote"><div class="ps-quote-text">I actually <strong>sleep through the night</strong> now. Life-changing.</div><div class="ps-quote-author"><span>Sarah, WA</span><span class="ps-quote-stars">★★★★★</span></div></div></div>
                <div class="ps-card-body">
                  <div class="ps-card-emoji"><img src="<?php em_theme_url(); ?>/pages/home/images/img_025.webp" alt=""></div>
                  <div class="ps-card-cat">Health</div>
                  <div class="ps-card-name">Sleep Improvement System</div>
                  <div class="ps-card-price">$29</div><div class="ps-card-earn"><span class="ps-earn-dot"></span><span class="ps-earn-label">Your margin</span><span class="ps-earn-val">$19</span></div>

                </div>
              </div>
            </div>
            <div class="ps-card" data-idx="5">
              <div class="ps-card-inner">
                <div class="ps-card-img"><img src="<?php em_theme_url(); ?>/pages/home/images/img_026.webp" alt="Picky Eater Planner"><div class="ps-quote"><div class="ps-quote-text">My kids <strong>finally eat vegetables</strong>. Dinner is no longer a battle.</div><div class="ps-quote-author"><span>Jessica, FL</span><span class="ps-quote-stars">★★★★★</span></div></div></div>
                <div class="ps-card-body">
                  <div class="ps-card-emoji"><img src="<?php em_theme_url(); ?>/pages/home/images/img_027.webp" alt=""></div>
                  <div class="ps-card-cat">Family</div>
                  <div class="ps-card-name">Picky Eater Planner</div>
                  <div class="ps-card-price">$12</div><div class="ps-card-earn"><span class="ps-earn-dot"></span><span class="ps-earn-label">Your margin</span><span class="ps-earn-val">$8</span></div>

                </div>
              </div>
            </div>
          </div>
        </div></div>
      </div>
    </div>
  </div>
</section>

<section class="pillar pillar-marketing">
  <div class="container" style="position:relative;z-index:1">
    <div class="pillar-inner">
      <div class="pillar-text reveal">
        <div class="pillar-num">03</div>
        <div class="pillar-label">We Bring Customers</div>
        <h2>Done-for-you marketing.<br>Managed end to end.</h2>
        <p class="pillar-desc">This is what makes Ecomzy different from everything else. We don't just give you a store — our team runs professional ad campaigns on Google and Meta that show your store to ready-to-buy customers.</p>
        <ul class="pillar-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Professional ads on Google, Facebook & Instagram</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Real-time performance dashboards</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Personal growth manager included</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>No ad skills needed — we handle everything</li>
        </ul>
        <div class="pillar-stat-row">
          <div class="pillar-stat"><div class="pillar-stat-val">3</div><div class="pillar-stat-label">Ad platforms</div></div>
          <div class="pillar-stat"><div class="pillar-stat-val">24/7</div><div class="pillar-stat-label">Campaigns running</div></div>
          <div class="pillar-stat"><div class="pillar-stat-val">1:1</div><div class="pillar-stat-label">Growth manager</div></div>
        </div>
      </div>
      <div class="pillar-visual reveal reveal-delay-2" style="overflow:visible">
        <div class="mn-phone-wrap">
          <div class="mn-lanes">
            <div class="mn-lane mn-lane-1">
              <div class="mn-lane-track mn-scroll-left">
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_028.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span><span class="mn-stat-num" data-base="24100" data-step="35" data-suffix="K" data-div="1000">24.1K</span><span class="mn-stat-lbl">Views</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_029.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_030.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 23c-4 0-7-3-7-7 0-2.5 2-5 3.5-6.5C10 8 12 4 12 4s2 4 3.5 5.5C17 11 19 13.5 19 16c0 4-3 7-7 7z"/></svg></span><span class="mn-stat-num" data-base="47" data-step="0" data-bounce="1">47</span><span class="mn-stat-lbl">Live now</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_031.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_032.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></span><span class="mn-stat-num" data-base="4810" data-step="4" data-suffix="" data-div="1">4,810</span><span class="mn-stat-lbl">Reviews</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_033.webp" alt=""></div>
                </div>
            </div>
            <div class="mn-lane mn-lane-2">
              <div class="mn-lane-track mn-scroll-right">
                <div class="mn-stat-card mn-stat-green"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></span><span class="mn-stat-num" data-base="12847" data-step="25" data-prefix="$" data-div="1">$12,847</span><span class="mn-stat-lbl">Sales</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_034.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_035.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="14" width="4" height="8" rx="1" fill="#5eead4" stroke="none"/><rect x="10" y="8" width="4" height="14" rx="1" fill="#5eead4" stroke="none"/><rect x="18" y="4" width="4" height="18" rx="1" fill="#5eead4" stroke="none"/></svg></span><span class="mn-stat-num" data-base="32" data-step="0" data-bounce="1" data-suffix="%" data-div="10">3.2%</span><span class="mn-stat-lbl">CTR</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_036.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_037.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_038.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span><span class="mn-stat-num" data-base="1247" data-step="8" data-div="1">1,247</span><span class="mn-stat-lbl">Conversions</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_039.webp" alt=""></div>
                </div>
            </div>
            <div class="mn-lane mn-lane-3">
              <div class="mn-lane-track mn-scroll-left-slow">
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_040.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></span><span class="mn-stat-num" data-base="386" data-step="6" data-div="1">386</span><span class="mn-stat-lbl">Orders</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_041.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_042.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_043.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></span><span class="mn-stat-num" data-base="892" data-step="15" data-prefix="+" data-div="1">+892</span><span class="mn-stat-lbl">This week</span></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_044.webp" alt=""></div>
                <div class="mn-avatar"><img src="<?php em_theme_url(); ?>/pages/home/images/img_045.webp" alt=""></div>
                <div class="mn-stat-card"><span class="mn-stat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 13L2 9z"/><path d="M2 9h20"/><path d="M12 22L6 9"/><path d="M12 22l6-13"/><path d="M6 3l6 6 6-6"/></svg></span><span class="mn-stat-num" data-base="156" data-step="3" data-div="1">156</span><span class="mn-stat-lbl">VIP Buyers</span></div>
                </div>
            </div>
          </div>
          <div class="mn-glow"></div>
          <div class="mn-phone-frame">
            <div class="mn-phone">
              <div class="mn-wallpaper"></div>
              <div class="mn-statusbar">
                <div class="mn-dynamic-island"></div>
                <div class="mn-status-left" id="mnStatusTime">5:03</div>
                <div class="mn-status-right">
                  <svg width="38" height="12" viewBox="0 0 38 12" fill="none"><rect x="0" y="7" width="3" height="5" rx=".8" fill="rgba(255,255,255,.6)"/><rect x="4.5" y="4.5" width="3" height="7.5" rx=".8" fill="rgba(255,255,255,.6)"/><rect x="9" y="2" width="3" height="10" rx=".8" fill="rgba(255,255,255,.6)"/><rect x="13.5" y="0" width="3" height="12" rx=".8" fill="rgba(255,255,255,.6)"/><rect x="22" y="2.5" width="11" height="7" rx="1.5" fill="none" stroke="rgba(255,255,255,.45)" stroke-width=".8"/><rect x="33.5" y="4.5" width="1.5" height="3" rx=".5" fill="rgba(255,255,255,.3)"/><rect x="23" y="3.5" width="9" height="5" rx=".8" fill="rgba(255,255,255,.45)"/></svg>
                </div>
              </div>
              <div class="mn-lockscreen">
                <div class="mn-date" id="mnDate">Wednesday, March 18</div>
                <div class="mn-time" id="mnTime">5:03</div>
              </div>
              <div class="mn-notif-area" id="mnNotifArea"></div>
            </div>
          </div>
          <div class="mn-flydots" id="mnFlyDots"></div>
          <div class="mn-shadow"></div>
          <div class="mn-particle" style="width:3px;height:3px;background:rgba(245,180,50,.35);top:10%;left:5%;--fx:25px;--fy:-35px;--dur:8s;--del:0s"></div>
          <div class="mn-particle" style="width:2px;height:2px;background:rgba(255,140,60,.3);top:70%;right:8%;--fx:-20px;--fy:30px;--dur:10s;--del:2s"></div>
          <div class="mn-particle" style="width:4px;height:4px;background:rgba(74,222,128,.25);top:35%;left:2%;--fx:15px;--fy:-20px;--dur:12s;--del:4s"></div>
          <div class="mn-particle" style="width:2px;height:2px;background:rgba(255,220,120,.3);bottom:15%;right:3%;--fx:-18px;--fy:-25px;--dur:9s;--del:1s"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="social-proof">
  <div class="container" style="position:relative;z-index:1">
    <div class="reveal" style="text-align:center"><div class="section-label">Store Owners</div><h2 class="section-title">People like you, building real stores</h2></div>
    <div class="sp-slider" id="spSlider">
      <div class="sp-slide sp-active">
        <div class="sp-photo" style="--glow:rgba(20,184,166,.25)">
          <img class="sp-slide-img" src="<?php em_theme_url(); ?>/pages/home/images/img_046.webp" alt="Maria D.">
        </div>
        <div class="sp-glass-wrap"><div class="sp-earn-badge"><span class="sp-earn-dot"></span> $2,300/mo</div>
          <div class="sp-glass-ring"></div>
          <div class="sp-glass" style="--accent:var(--teal-bright)">
          <div class="sp-stars">★★★★★</div>
          <p class="sp-quote">"My husband lost his job and I was terrified. Two kids, mortgage, and I hadn’t worked in 6 years. I cried the night I signed up — I felt so desperate. <em>Two months later I made my first $1,800.</em> I called my mom sobbing. Not from fear this time. From relief. Ecomzy didn’t just give me a store. It gave me back my sleep."</p>
          <div class="sp-author">
            <div><div class="sp-author-name">Maria D.</div><div class="sp-author-role">Stay-at-home mom, Texas 🇺🇸</div><p class="sp-disclaimer">Individual results may vary.</p></div>
          </div>
        </div></div>
      </div>
      <div class="sp-slide">
        <div class="sp-photo" style="--glow:rgba(59,130,246,.2)">
          <img class="sp-slide-img" src="<?php em_theme_url(); ?>/pages/home/images/img_047.webp" alt="James T.">
        </div>
        <div class="sp-glass-wrap"><div class="sp-earn-badge"><span class="sp-earn-dot"></span> $3,100/mo</div>
          <div class="sp-glass-ring"></div>
          <div class="sp-glass" style="--accent:rgba(59,130,246,1)">
          <div class="sp-stars">★★★★★</div>
          <p class="sp-quote">"They let me go after 11 years. Said they were ‘restructuring.’ I applied to 200 jobs. Nothing. My daughter asked why I was always sad. <em>That broke me.</em> I found Ecomzy on a Sunday night at 2am. Within 60 days I was earning more than unemployment. My daughter told her teacher: ‘My dad has his own business now.’ I’ll never forget that."</p>
          <div class="sp-author">
            <div><div class="sp-author-name">James T.</div><div class="sp-author-role">Former warehouse worker, Ohio 🇺🇸</div><p class="sp-disclaimer">Individual results may vary.</p></div>
          </div>
        </div></div>
      </div>
      <div class="sp-slide">
        <div class="sp-photo" style="--glow:rgba(245,180,50,.2)">
          <img class="sp-slide-img" src="<?php em_theme_url(); ?>/pages/home/images/img_048.webp" alt="Robert M.">
        </div>
        <div class="sp-glass-wrap"><div class="sp-earn-badge"><span class="sp-earn-dot"></span> $4,200/mo</div>
          <div class="sp-glass-ring"></div>
          <div class="sp-glass" style="--accent:rgba(245,158,11,1)">
          <div class="sp-stars">★★★★★</div>
          <p class="sp-quote">"After 28 years in manufacturing, my plant closed and nobody wanted to hire a 55-year-old. My kids offered to help with bills. <em>That killed me inside.</em> First month — $340. Not life-changing. But it was mine. By month three I cleared more than unemployment. Last month — $4,200. I sat in my truck and cried. Not because of the money. Because I got my dignity back."</p>
          <div class="sp-author">
            <div><div class="sp-author-name">Robert M.</div><div class="sp-author-role">Former plant manager, Michigan 🇺🇸</div><p class="sp-disclaimer">Individual results may vary.</p></div>
          </div>
        </div></div>
      </div>
    </div>
    <div class="sp-nav">
      <button class="sp-arrow sp-arrow-prev" id="spPrev" aria-label="Previous testimonial"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg></button>
      <div class="sp-dots" id="spDots">
        <button class="sp-dot sp-dot-active" data-idx="0"></button>
        <button class="sp-dot" data-idx="1"></button>
        <button class="sp-dot" data-idx="2"></button>
      </div>
      <button class="sp-arrow sp-arrow-next" id="spNext" aria-label="Next testimonial"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
    </div>
  </div>
</section>

<section class="math-section">
  <div class="container">
    <div class="math-content reveal">
      <div class="section-label" style="color:var(--teal-bright);justify-content:center">The Math</div>
      <h2 class="section-title">Simple economics. Real numbers.</h2>
      <p class="section-sub">Average product price of $40. You keep about 65% of each sale. Drag the slider to see the numbers.</p>
    </div>
    <div class="math-layout">
      <div class="math-globe-col">
        <div class="math-globe-scene reveal">
          <div class="math-sunrise"></div>
          <div class="math-orbits">
            <div class="math-orbit math-orbit-1"></div>
            <div class="math-orbit math-orbit-2"></div>
            <div class="math-orbit math-orbit-3"></div>
            <div id="orbitDotsContainer"></div>
          </div>
          <div class="math-globe">
            <svg id="globeSvg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg"></svg>
          </div>
          <div class="math-tags" id="mathTags"></div>
          <div class="math-store-marker" id="storeMarker"></div>
        </div>
        <div class="math-live-counter reveal">
          <div class="math-live-counter-dot"></div>
          <span><span class="math-live-counter-num" id="mathOrderCount">0</span> orders worldwide</span>
        </div>
      </div>
      <div class="math-calc reveal">
        <div class="math-calc-header">
          <h3>Your Margin Calculator</h3>
          <p>Move the slider to see how the math works</p>
        </div>
        <div class="math-slider-wrap">
          <div class="math-slider-label">
            <span>Orders per day</span>
            <div class="math-slider-val" id="mathSliderVal">5</div>
          </div>
          <input type="range" class="math-slider" id="mathSlider" min="1" max="50" value="5" step="1">
        </div>
        <div class="math-results">
          <div class="math-res-card">
            <div class="math-res-label">Daily Sales</div>
            <div class="math-res-value" id="mathRevDay">$200</div>
          </div>
          <div class="math-res-card">
            <div class="math-res-label">Your Daily Cut</div>
            <div class="math-res-value" id="mathEarnDay">$130</div>
          </div>
          <div class="math-res-card main">
            <div class="math-res-label">Your Monthly Margin</div>
            <div class="math-res-value" id="mathEarnMonth">$3,900</div>
            <div class="math-res-note">Based on 30 days × <span id="mathOrdersNote">5</span> orders/day</div>
          </div>
        </div>
        <p class="math-disclaimer">Based on average order value of $40 and 65% revenue share. Individual results vary.</p>
      </div>
    </div>
  </div>
</section>

<section class="pm-section" id="features">
  <div class="container">
    <div class="pm-header reveal">
      <div class="section-label">Your Personal Manager</div>
      <h2 class="section-title">You'll never do this alone.</h2>
      <p class="section-sub">Every Ecomzy store owner gets a dedicated Growth Manager — a real human being who genuinely cares about your success.</p>
    </div>

    <div class="pm-photo-wrap reveal">
      <img src="<?php em_theme_url(); ?>/pages/home/images/img_049.webp" alt="Your Personal Growth Manager on a video call">
      <div class="pm-photo-overlay"></div>
      <div class="pm-photo-badge"><span class="pm-photo-badge-dot"></span> Your Growth Manager is online</div>
    </div>

    <div class="pm-promise reveal">
      <h3>Someone in your corner. From day one.</h3>
      <p>Starting a business can feel overwhelming — especially when you're doing it for the first time. That's why we don't just hand you a store and disappear. Your Growth Manager learns your goals, understands your situation, and walks with you every step of the way. Think of them as a friend who also happens to know everything about growing an online business.</p>
    </div>

    <div class="pm-benefits">
      <div class="pm-benefit reveal reveal-delay-1">
        <div class="pm-benefit-icon pm-benefit-icon--crystal"><img src="<?php em_theme_url(); ?>/pages/home/images/img_050.webp" alt="" loading="lazy" decoding="async"/></div>
        <h4>Business Strategy</h4>
        <p>Your manager helps you choose the right products, set the right prices, and build a plan that matches your sales goals — whatever scale you're aiming for.</p>
      </div>
      <div class="pm-benefit reveal reveal-delay-2">
        <div class="pm-benefit-icon pm-benefit-icon--crystal"><img src="<?php em_theme_url(); ?>/pages/home/images/img_051.webp" alt="" loading="lazy" decoding="async"/></div>
        <h4>Growth Advice</h4>
        <p>Weekly tips on how to grow your sales, which products are trending, and what successful store owners in your niche are doing differently.</p>
      </div>
      <div class="pm-benefit reveal reveal-delay-3">
        <div class="pm-benefit-icon pm-benefit-icon--crystal"><img src="<?php em_theme_url(); ?>/pages/home/images/img_052.webp" alt="" loading="lazy" decoding="async"/></div>
        <h4>Problem Solving</h4>
        <p>Something not working? Ad performance dropped? Confused about a feature? Your manager is one message away. No tickets, no bots — just a real person who helps.</p>
      </div>
      <div class="pm-benefit reveal reveal-delay-1">
        <div class="pm-benefit-icon pm-benefit-icon--crystal"><img src="<?php em_theme_url(); ?>/pages/home/images/img_053.webp" alt="" loading="lazy" decoding="async"/></div>
        <h4>Performance Reviews</h4>
        <p>Regular check-ins to review your store's numbers, spot opportunities you might be missing, and adjust your strategy as your business grows.</p>
      </div>
      <div class="pm-benefit reveal reveal-delay-2">
        <div class="pm-benefit-icon pm-benefit-icon--crystal"><img src="<?php em_theme_url(); ?>/pages/home/images/img_054.webp" alt="" loading="lazy" decoding="async"/></div>
        <h4>Emotional Support</h4>
        <p>Building a business has ups and downs. Your manager celebrates your wins and talks you through the tough days. Because sometimes you just need someone who gets it.</p>
      </div>
      <div class="pm-benefit reveal reveal-delay-3">
        <div class="pm-benefit-icon pm-benefit-icon--crystal"><img src="<?php em_theme_url(); ?>/pages/home/images/img_055.webp" alt="" loading="lazy" decoding="async"/></div>
        <h4>Scaling Guidance</h4>
        <p>When you're ready to go bigger — more products, higher ad spend, new markets — your manager helps you scale without the growing pains.</p>
      </div>
    </div>

    <div class="pm-channels reveal">
      <div class="pm-channel"><div class="pm-channel-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div> Phone calls</div>
      <div class="pm-channel"><div class="pm-channel-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div> Email</div>
      <div class="pm-channel"><div class="pm-channel-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg></div> Zoom</div>
      <div class="pm-channel"><div class="pm-channel-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></div> WhatsApp</div>
    </div>

    <div class="pm-quote-wrap reveal">
      <p class="pm-quote">"I was scared to start. My manager Sarah called me the first day and said — <em>don't worry, we're going to figure this out together.</em> And she meant it. Six months later, I'm making more than I did at my old job."</p>
      <div class="pm-quote-author-wrap">
        <img class="pm-quote-avatar" src="<?php em_theme_url(); ?>/pages/home/images/img_056.webp" alt="Jennifer R.">
        <div>
          <p class="pm-quote-author"><strong>Jennifer R.</strong> · Austin, TX 🇺🇸</p>
          <p class="pm-quote-earning">Earning $3,400/mo with Ecomzy</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="trust-section">
  <div class="container">

    <div class="trust-header reveal">
      <div class="section-label" style="justify-content:center">Trust & Security</div>
      <h2 class="section-title">Your trust is our foundation.</h2>
      <p class="section-sub">We're a real company, with real people, registered in the United States. Everything we do is designed to build and keep your confidence.</p>
    </div>

    <div class="trust-creds">
      <div class="trust-cred reveal reveal-delay-1">
        <span class="trust-cred-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-4h6v4"/><path d="M9 10h1"/><path d="M14 10h1"/><path d="M9 14h1"/><path d="M14 14h1"/></svg></span>
        <h4>US Registered Corporation</h4>
        <p>Ecomzy Technologies Corporation is officially registered in the State of California, USA. Real entity, verifiable records.</p>
      </div>
      <div class="trust-cred reveal reveal-delay-2">
        <span class="trust-cred-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/></svg></span>
        <h4>Bank-Grade Encryption</h4>
        <p>256-bit SSL encryption on every page. Your personal data and payment information are protected to the highest industry standards.</p>
      </div>
      <div class="trust-cred reveal reveal-delay-3">
        <span class="trust-cred-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/><path d="M10 9H8"/></svg></span>
        <h4>Full Transparency</h4>
        <p>Clear Terms of Service, Privacy Policy, and Refund Policy — written in plain English. No fine print, no surprises, no hidden fees.</p>
      </div>
    </div>

    <div class="trust-guarantee reveal">
      <div class="trust-guarantee-shield"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
      <div class="trust-guarantee-text">
        <h4>30-Day Money-Back Guarantee</h4>
        <p>Try any paid service with no pressure. If you're not completely satisfied within 30 days, we'll refund every penny — no questions asked, no hoops to jump through. We're that confident you'll love it.</p>
      </div>
    </div>

    <div class="trust-divider reveal"><span>In the Press</span></div>

    <div class="trust-press">
      <div class="trust-press-grid">
        <a class="trust-press-card reveal reveal-delay-1" href="https://finance.yahoo.com/news/ecomzy-launch-one-ecommerce-platform-140000572.html" target="_blank" rel="noopener">
          <div class="trust-press-img" style="background:linear-gradient(135deg,rgba(106,50,220,.08),rgba(20,184,166,.06))">
            <img src="<?php em_theme_url(); ?>/pages/home/images/img_057.svg" alt="Yahoo Finance" style="height:160px;position:relative;top:6px;filter:invert(1) brightness(2) grayscale(1);opacity:1">
          </div>
          <div class="trust-press-body">
            <div class="trust-press-source">Yahoo! Finance</div>
            <div class="trust-press-title">Ecomzy Launches All-in-One Ecommerce Platform for Solopreneurs</div>
            <div class="trust-press-date">Feb 2026</div>
            <div class="trust-press-read">Read press release →</div>
          </div>
        </a>
        <a class="trust-press-card reveal reveal-delay-2" href="https://www.digitaljournal.com/pr/news/access-newswire/ecomzy-launch-ai-powered-toolkit-stores-1534818880.html" target="_blank" rel="noopener">
          <div class="trust-press-img" style="background:linear-gradient(135deg,rgba(20,184,166,.1),rgba(59,130,246,.06))">
            <img src="<?php em_theme_url(); ?>/pages/home/images/img_dj_logo.webp" alt="Digital Journal" style="height:36px;opacity:1;filter:brightness(0) invert(1)">
          </div>
          <div class="trust-press-body">
            <div class="trust-press-source">Digital Journal</div>
            <div class="trust-press-title">Ecomzy Launches AI-Powered Toolkit Stores for Pure-Profit Business</div>
            <div class="trust-press-date">Mar 2026</div>
            <div class="trust-press-read">Read press release →</div>
          </div>
        </a>
        <a class="trust-press-card reveal reveal-delay-3" href="https://apnews.com/press-release/access-newswire/ecomzy-beta-testers-average-11-500-in-first-1-5-months-ahead-of-public-launch-5d475b126b13cb77f632a0a18914e1c6" target="_blank" rel="noopener">
          <div class="trust-press-img" style="background:linear-gradient(135deg,rgba(220,50,50,.06),rgba(20,184,166,.04))">
            <img src="<?php em_theme_url(); ?>/pages/home/images/img_059.svg" alt="Associated Press" style="height:72px;filter:brightness(10) grayscale(1);opacity:1">
          </div>
          <div class="trust-press-body">
            <div class="trust-press-source">Associated Press</div>
            <div class="trust-press-title">Ecomzy Beta Testers Average $11,500 in First 1.5 Months Ahead of Public Launch</div>
            <div class="trust-press-date">Apr 2026</div>
            <div class="trust-press-read">Read press release →</div>
          </div>
        </a>
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

<section class="footer-cta">
    <div class="container">
      <div class="footer-cta-box reveal">
        <div class="footer-cta-shimmer"></div>
        <div class="footer-cta-frost"></div>
        <h2 class="section-title">Ready to start your<br>online business?</h2>
        <p class="section-sub">Your store is waiting. Products are loaded. Your personal manager is ready to help. All you need to do is sign up.</p>
        <a href="<?php echo em_start_for_free_url(); ?>" class="btn-primary">Start Your Free Store <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 9h10M10 5l4 4-4 4"/></svg></a>
        <p class="footer-cta-note">Free 14-day trial · No inventory · No experience needed</p>
      </div>
    </div>
</section>

<!-- ========================= /PAGE CONTENT ======================== -->

<?php get_footer(); ?>
