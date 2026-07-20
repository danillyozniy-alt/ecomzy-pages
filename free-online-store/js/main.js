function _fc(n){return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g,',')}

// ===== FAQ ACCORDION =====
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => {
    q.closest('.faq-item').classList.toggle('open');
  });
});

// Reveal on scroll
var obs=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting)x.target.classList.add('visible')})},{threshold:.1,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a=>{a.addEventListener('click',e=>{const t=document.querySelector(a.getAttribute('href'));if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'})}})});

// ===== LIVE DASHBOARD =====
(function(){
  const products = [
    { name:'Medical Bill Error Finder', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>', price:49, earn:32, bg:'rgba(0,0,0,.03)' },
    { name:'Career Reboot System', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>', price:59, earn:38, bg:'rgba(0,0,0,.03)' },
    { name:'Legal Protection Suite', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', price:499, earn:325, bg:'rgba(0,0,0,.03)' },
    { name:'New Puppy 90-Day Plan', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="14" r="4"/><circle cx="7" cy="8" r="2"/><circle cx="17" cy="8" r="2"/><circle cx="5" cy="13" r="1.5"/><circle cx="19" cy="13" r="1.5"/></svg>', price:9, earn:6, bg:'rgba(0,0,0,.03)' },
    { name:'Sleep Improvement System', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>', price:29, earn:19, bg:'rgba(0,0,0,.03)' },
    { name:'Salary Negotiation Playbook', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>', price:39, earn:25, bg:'rgba(0,0,0,.03)' },
    { name:'Home Declutter System', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>', price:19, earn:12, bg:'rgba(0,0,0,.03)' },
    { name:'Debt Payoff Strategy', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="14" width="4" height="8" fill="#5eead4" stroke="none"/><rect x="10" y="8" width="4" height="14" fill="#5eead4" stroke="none"/><rect x="16" y="4" width="4" height="18" fill="#5eead4" stroke="none"/></svg>', price:29, earn:19, bg:'rgba(0,0,0,.03)' },
    { name:'Picky Eater Meal Planner', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/></svg>', price:12, earn:8, bg:'rgba(0,0,0,.03)' },
    { name:'Resume & Cover Letter Kit', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4z"/></svg>', price:39, earn:25, bg:'rgba(0,0,0,.03)' },
    { name:'Insurance Appeal Kit', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>', price:49, earn:32, bg:'rgba(0,0,0,.03)' },
    { name:'Small Business Launch Bundle', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12l4-8 4 8"/><line x1="12" y1="16" x2="12" y2="12"/></svg>', price:299, earn:195, bg:'rgba(0,0,0,.03)' },
    { name:'Credit Card Rate Cutter', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>', price:19, earn:12, bg:'rgba(0,0,0,.03)' },
    { name:'Walking-to-Running Plan', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>', price:14, earn:9, bg:'rgba(0,0,0,.03)' },
    { name:'Dog Training Program', emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>', price:29, earn:19, bg:'rgba(0,0,0,.03)' },
  ];

  let revenue = 127, orders = 5, earnings = 83;
  let lastProductIdx = -1;

  const ORDER_MIN = 5, ORDER_MAX = 20;

  const elRev = document.getElementById('stat-revenue');
  const elOrd = document.getElementById('stat-orders');
  const elEarn = document.getElementById('stat-earnings');
  const elLiveVal = document.getElementById('chart-live-value');
  const elOrders = document.getElementById('dash-orders');
  if(!elRev && !elOrders) return;

  // Smooth number animation
  function animNum(el, from, to, prefix) {
    if (prefix === undefined) prefix = '$';
    const dur = 1000;
    const t0 = performance.now();
    (function tick(now) {
      const p = Math.min((now - t0) / dur, 1);
      const ease = p < 0.5 ? 4*p*p*p : 1-Math.pow(-2*p+2,3)/2;
      el.textContent = prefix + _fc(Math.round(from + (to - from) * ease));
      if (p < 1) requestAnimationFrame(tick);
    })(t0);
  }

  // Pick random product (avoid repeating last)
  function pickProduct() {
    let idx;
    do { idx = Math.floor(Math.random() * products.length); } while (idx === lastProductIdx);
    lastProductIdx = idx;
    return products[idx];
  }

  // Update order times
  function updateTimes() {
    const items = elOrders.querySelectorAll('.dash-order');
    const labels = ['Just now','30s ago','1 min ago','3 min ago','8 min ago','15 min ago'];
    items.forEach((item, i) => {
      const t = item.querySelector('.dash-order-time');
      if (t && labels[i]) t.textContent = labels[i];
    });
  }

  // ===== PROGRESSIVE CHART =====
  // Generate chart data points — each order adds a point, line grows left→right
  const chartLine = document.querySelector('.dash-chart-line');
  const chartArea = document.querySelector('.dash-chart-area');
  const chartGlow = document.querySelector('.dash-chart-glow');
  const chartDot = document.querySelector('.dash-chart-dot');
  const chartRing = document.querySelector('.dash-chart-dot-ring');

  // Pre-generate Y values for a nice upward-trending curve with variation
  const yValues = [];
  (function(){
    let y = 68;
    for (let i = 0; i <= ORDER_MAX; i++) {
      yValues.push(Math.round(y));
      // Trend down (= up on chart) with some random bumps
      const drop = 2 + Math.random() * 3;
      const bump = Math.random() < 0.3 ? (Math.random() * 4) : 0;
      y = Math.max(3, y - drop + bump);
    }
  })();

  function buildChartPath(count) {
    // count = how many points to show (orders - ORDER_MIN + 1, capped)
    const totalPoints = Math.min(count - ORDER_MIN + 2, yValues.length);
    if (totalPoints < 2) return null;

    // Spread points across viewBox width (520)
    const maxX = 520;
    const step = maxX / (ORDER_MAX - ORDER_MIN + 1);
    let points = [];
    for (let i = 0; i < totalPoints; i++) {
      const x = Math.round(i * step);
      points.push({ x: x, y: yValues[i] });
    }

    const last = points[points.length - 1];
    const line = 'M' + points.map(p => p.x + ',' + p.y).join(' L');
    const area = line + ' L' + last.x + ',80 L0,80Z';
    return { line, area, dx: last.x, dy: last.y };
  }

  function updateChart() {
    const cp = buildChartPath(orders);
    if (!cp) return;
    const tr = 'all 1.8s cubic-bezier(.22,1,.36,1)';
    if (chartLine) { chartLine.style.transition = tr; chartLine.setAttribute('d', cp.line); chartLine.style.strokeDasharray = 'none'; }
    if (chartGlow) { chartGlow.style.transition = tr; chartGlow.setAttribute('d', cp.line); chartGlow.style.strokeDasharray = 'none'; }
    if (chartArea) { chartArea.style.transition = tr; chartArea.setAttribute('d', cp.area); chartArea.style.opacity = '1'; }
    if (chartDot) { chartDot.style.transition = tr; chartDot.setAttribute('cx', cp.dx); chartDot.setAttribute('cy', cp.dy); chartDot.style.opacity = '1'; }
    if (chartRing) { chartRing.style.transition = tr; chartRing.setAttribute('cx', cp.dx); chartRing.setAttribute('cy', cp.dy); chartRing.style.opacity = '1'; }
  }

  // Reset everything to starting state
  function resetDashboard() {
    revenue = 127;
    orders = ORDER_MIN;
    earnings = 83;
    lastProductIdx = -1;
    elRev.textContent = '$127';
    elOrd.textContent = '5';
    elEarn.textContent = '$83';
    elLiveVal.textContent = '$127';

    // Reset chart to starting position (just 2 points, near left)
    const cp = buildChartPath(ORDER_MIN);
    if (cp) {
      // Instant reset (no transition)
      [chartLine, chartGlow].forEach(el => { if(el){el.style.transition='none';el.setAttribute('d',cp.line);el.style.strokeDasharray='none';}});
      if(chartArea){chartArea.style.transition='none';chartArea.setAttribute('d',cp.area);}
      [chartDot,chartRing].forEach(el=>{if(el){el.style.transition='none';el.setAttribute('cx',cp.dx);el.setAttribute('cy',cp.dy);}});
    }

    // Reset orders feed
    elOrders.innerHTML = '';
    // Add 3 starter orders
    const starters = [
      pickProduct(), pickProduct(), pickProduct()
    ];
    const starterTimes = ['1 min ago','5 min ago','12 min ago'];
    starters.forEach((p, i) => {
      const row = document.createElement('div');
      row.className = 'dash-order';
      row.innerHTML =
        '<div class="dash-order-icon" style="background:'+p.bg+'">'+p.emoji+'</div>' +
        '<div class="dash-order-info"><div class="dash-order-name">'+p.name+'</div>' +
        '<div class="dash-order-time">'+starterTimes[i]+'</div></div>' +
        '<div class="dash-order-amount">+$'+p.earn+'</div>' +
        '<div class="dash-order-status">Paid</div>';
      elOrders.appendChild(row);
    });
  }

  // Add new order
  function newOrder() {
    // Check if we need to reset
    if (orders >= ORDER_MAX) {
      resetDashboard();
      return;
    }

    const p = pickProduct();

    // Animate stats
    const oR = revenue, oO = orders, oE = earnings;
    revenue += p.price;
    orders += 1;
    earnings += p.earn;
    animNum(elRev, oR, revenue, '$');
    animNum(elOrd, oO, orders, '');
    animNum(elEarn, oE, earnings, '$');
    elLiveVal.textContent = '$' + _fc(revenue);

    // Build order row
    const row = document.createElement('div');
    row.className = 'dash-order';
    row.style.opacity = '0';
    row.style.transform = 'translateY(6px) scale(.98)';
    row.style.transition = 'opacity 1.2s cubic-bezier(.23,1,.32,1), transform 1.2s cubic-bezier(.23,1,.32,1)';
    row.innerHTML =
      '<div class="dash-order-icon" style="background:'+p.bg+'">'+p.emoji+'</div>' +
      '<div class="dash-order-info"><div class="dash-order-name">'+p.name+'</div>' +
      '<div class="dash-order-time">Just now</div></div>' +
      '<div class="dash-order-amount">+$'+p.earn+'</div>' +
      '<div class="dash-order-status">Paid</div>';

    elOrders.insertBefore(row, elOrders.firstChild);

    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        row.style.opacity = '1';
        row.style.transform = 'translateY(0) scale(1)';
      });
    });

    while (elOrders.children.length > 3) {
      elOrders.removeChild(elOrders.lastChild);
    }

    updateTimes();
    updateChart();
  }

  // ===== LIVE REVIEWS =====
  const reviewImgBase = (typeof emTheme !== 'undefined' ? emTheme.url : '') + '/pages/home/';
  const reviewData = [
    { name:'Emily', flag:'🇺🇸', text:'The Puppy Plan saved me hundreds on a trainer. Worth every penny!', img:'images/img_060.webp' },
    { name:'Marcus', flag:'🇺🇸', text:'Found $800 in errors on my hospital bill. This tool is incredible.', img:'images/img_061.webp' },
    { name:'DeShawn', flag:'🇺🇸', text:'Got 3 interview callbacks in a week using the Career Reboot Kit.', img:'images/img_062.webp' },
    { name:'Isabella', flag:'🇨🇦', text:'The Meal Planner finally got my picky eater trying new foods!', img:'images/img_063.webp' },
    { name:'Michael', flag:'🇺🇸', text:'Negotiated my cable bill down $47/month. Paid for itself instantly.', img:'images/img_064.webp' },
    { name:'Aaliyah', flag:'🇺🇸', text:'The Sleep System actually works. Best $7 I\'ve ever spent.', img:'images/img_065.webp' },
    { name:'Jessica', flag:'🇬🇧', text:'Used the Resume Kit and landed a job paying $12K more. Unreal.', img:'images/img_066.webp' },
    { name:'David', flag:'🇺🇸', text:'The Legal Protection Suite saved me a $3,000 lawyer consultation.', img:'images/img_067.webp' },
    { name:'Emily', flag:'🇦🇺', text:'My dog\'s behavior changed completely with the Training Program.', img:'images/img_068.webp' },
    { name:'Marcus', flag:'🇺🇸', text:'Debt Payoff Strategy helped me clear $4,200 in 6 months.', img:'images/img_069.webp' },
    { name:'DeShawn', flag:'🇨🇭', text:'The Budget Builder showed me where $600/month was disappearing.', img:'images/img_070.webp' },
    { name:'Isabella', flag:'🇺🇸', text:'Insurance Appeal Kit got my denied claim approved. $2,100 saved!', img:'images/img_071.webp' },
    { name:'Michael', flag:'🇩🇪', text:'The Declutter System transformed our home in just 2 weekends.', img:'images/img_072.webp' },
    { name:'Aaliyah', flag:'🇺🇸', text:'Walking-to-Running Plan got me to my first 5K at age 44!', img:'images/img_073.webp' },
    { name:'Jessica', flag:'🇫🇷', text:'The Subscription Audit found $89/month I was wasting. Wow.', img:'images/img_074.webp' },
    { name:'Laura', flag:'🇮🇹', text:'Used the Home Maintenance Calendar — caught a leak early, saved thousands.', img:'images/img_075.webp' },
  ];
  let reviewIdx = 0;
  const reviewAvatar = document.getElementById('review-avatar');
  const reviewText = document.getElementById('review-text');
  const reviewName = document.getElementById('review-name');
  const reviewFloat = document.getElementById('review-float');
  function showReview() {
    if(!reviewFloat) return;
    const r = reviewData[reviewIdx];
    reviewFloat.style.transition = 'opacity .6s ease, transform .6s ease';
    reviewFloat.style.opacity = '0';
    reviewFloat.style.transform = 'translateY(6px)';
    setTimeout(() => {
      reviewAvatar.src = reviewImgBase + r.img; reviewAvatar.alt = r.name;
      reviewText.textContent = r.text;
      reviewName.textContent = r.flag + ' ' + r.name;
      reviewFloat.style.opacity = '1';
      reviewFloat.style.transform = 'translateY(0)';
      reviewIdx = (reviewIdx + 1) % reviewData.length;
    }, 600);
  }
  showReview();

  // Independent review rotation: 10–15s
  function scheduleReview() {
    const delay = 10000 + Math.random() * 5000;
    setTimeout(() => {
      showReview();
      scheduleReview();
    }, delay);
  }
  scheduleReview();

  // ===== MOBILE STAT SLIDER =====
  const isMobile = window.matchMedia('(max-width:768px)');
  let mobileStatIdx = 0;
  let mobileStatTimer = null;
  const statCards = document.querySelectorAll('.dash-stat');

  const statDots = document.querySelectorAll('#stat-dots span');

  function rotateMobileStat() {
    statCards.forEach(c => c.classList.remove('mobile-active'));
    statDots.forEach(d => d.classList.remove('active'));
    statCards[mobileStatIdx].classList.add('mobile-active');
    if (statDots[mobileStatIdx]) statDots[mobileStatIdx].classList.add('active');
    mobileStatIdx = (mobileStatIdx + 1) % statCards.length;
  }

  function startMobileStats() {
    // All 3 stats visible on mobile now — no carousel needed
    return;
  }

  function stopMobileStats() {
    if (mobileStatTimer) { clearInterval(mobileStatTimer); mobileStatTimer = null; }
    statCards.forEach(c => c.classList.remove('mobile-active'));
  }

  isMobile.addEventListener('change', e => {
    if (e.matches) startMobileStats(); else stopMobileStats();
  });
  if (isMobile.matches) startMobileStats();

  // Schedule live feed: 3–10s randomly
  function scheduleNext() {
    const delay = 3000 + Math.random() * 7000;
    setTimeout(() => {
      newOrder();
      scheduleNext();
    }, delay);
  }

  // Initialize chart at starting position
  setTimeout(() => {
    updateChart();
    setTimeout(() => {
      newOrder();
      scheduleNext();
    }, 2000);
  }, 3000);

  // ===== PILLAR 3: iPhone Order Notifications =====
  (function(){
    const area = document.getElementById('mnNotifArea');
    if (!area) return;

    const names = ['Emma','James','Sofia','Liam','Olivia','Noah','Ava','Ethan','Mia','Lucas','Isabella','Mason','Charlotte','Logan','Amelia','Jackson','Harper','Aiden','Evelyn','Carter','Sarah','David','Rachel','Mike','Danielle','Robert','Jessica','Carlos','Maria','Kevin'];
    const states = ['TX','CA','NY','FL','OH','GA','WA','AZ','IL','NC','PA','MI','VA','CO','TN','OR','MN','WI','MA','NJ'];
    const products = [
      {name:'New Puppy Plan',price:[7,9,12]},
      {name:'Medical Bill Finder',price:[39,49]},
      {name:'Career Reboot',price:[49,59]},
      {name:'Legal Protection',price:[299,499]},
      {name:'Sleep System',price:[19,29]},
      {name:'Picky Eater Planner',price:[9,12]},
      {name:'Resume Builder Pro',price:[29,39]},
      {name:'Anxiety Toolkit',price:[19,24]},
      {name:'Side Hustle Guide',price:[14,19]},
      {name:'First Home Buyer Kit',price:[49,79]},
    ];

    const pick = arr => arr[Math.floor(Math.random()*arr.length)];
    const CARD_H = 84;
    const GAP = 6;
    const STEP = CARD_H + GAP;
    const MAX = 4;
    let stack = []; // [0]=newest(bottom), [1]=above, ...

    function getTimeStr(){
      const d = new Date();
      return d.getHours().toString().padStart(2,'0') + ':' + d.getMinutes().toString().padStart(2,'0');
    }

    const timeEl = document.getElementById('mnTime');
    const dateEl = document.getElementById('mnDate');
    const statusTimeEl = document.getElementById('mnStatusTime');
    function updateClock(){
      const d = new Date();
      const h = d.getHours(); const m = d.getMinutes();
      const ts = h + ':' + m.toString().padStart(2,'0');
      if(timeEl) timeEl.textContent = ts;
      if(statusTimeEl) statusTimeEl.textContent = ts;
      if(dateEl){
        const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        const mos = ['January','February','March','April','May','June','July','August','September','October','November','December'];
        dateEl.textContent = days[d.getDay()] + ', ' + mos[d.getMonth()] + ' ' + d.getDate();
      }
    }
    updateClock();
    setInterval(updateClock, 30000);

    function layout(){
      stack.forEach((el, i) => {
        // i=0 newest(top), i=1 below, etc. translateY positive = down
        const y = i * STEP;
        el.style.transform = 'translateY(' + y + 'px)';
        if(i === MAX - 1) el.style.opacity = '0.3';
        else if(i < MAX) el.style.opacity = '1';
      });
    }

    function addNotif(){
      const prod = pick(products);
      const pr = pick(prod.price);
      const nm = pick(names);
      const st = pick(states);
      const qty = Math.random() > 0.75 ? Math.floor(Math.random()*2)+2 : 1;
      const tot = qty > 1 ? pr * qty : pr;

      const el = document.createElement('div');
      el.className = 'mn-notif';
      el.innerHTML =
        '<div class="mn-notif-header">' +
          '<div class="mn-notif-icon">E</div>' +
          '<div class="mn-notif-app">Ecomzy</div>' +
          '<div class="mn-notif-time">' + getTimeStr() + '</div>' +
        '</div>' +
        '<div class="mn-notif-body"><span class="mn-notif-dot"></span>New order! <strong>' + nm + '</strong> from ' + st + ' bought ' + (qty > 1 ? qty + ' items' : prod.name) + ' — <span class="mn-notif-amount">$' + tot + '</span></div>';

      // Start above visible area
      el.style.transform = 'translateY(-20px)';
      el.style.opacity = '0';
      area.appendChild(el);

      stack.unshift(el);

      // Remove overflow — exits below
      while(stack.length > MAX + 1){
        const gone = stack.pop();
        gone.style.opacity = '0';
        gone.style.transform = 'translateY(' + ((MAX + 1) * STEP) + 'px)';
        setTimeout(() => gone.remove(), 1500);
      }

      requestAnimationFrame(() => {
        requestAnimationFrame(() => layout());
      });
    }

    // Staggered initial fill
    setTimeout(addNotif, 500);
    setTimeout(addNotif, 1800);
    setTimeout(addNotif, 3100);
    setTimeout(addNotif, 4400);

    // Ongoing
    function tick(){
      setTimeout(() => { addNotif(); tick(); }, 3000 + Math.random() * 2000);
    }
    setTimeout(tick, 6500);

    // === Dynamic stat counters — fast updates with flash effects ===
    const allStatNums = document.querySelectorAll('.mn-stat-num[data-base]');
    const counters = [];
    allStatNums.forEach(el => {
      const base = parseInt(el.dataset.base);
      const step = parseInt(el.dataset.step) || 0;
      const bounce = el.dataset.bounce === '1';
      const prefix = el.dataset.prefix || '';
      const suffix = el.dataset.suffix || '';
      const div = parseInt(el.dataset.div) || 1;
      counters.push({ el, val: base, step, bounce, prefix, suffix, div });
    });

    function fmtNum(v, div, prefix, suffix){
      if(div === 1000) return prefix + (v/1000).toFixed(1) + (suffix || 'K');
      if(div === 10) return prefix + (v/10).toFixed(1) + (suffix || '');
      return prefix + _fc(v) + suffix;
    }

    // Fast individual counter ticks at different rates
    counters.forEach(c => {
      function tick(){
        if(c.bounce){
          c.val += Math.round((Math.random() - 0.42) * 6);
        } else if(c.step > 0){
          c.val += Math.ceil(Math.random() * c.step * 2);
        }
        c.el.textContent = fmtNum(c.val, c.div, c.prefix, c.suffix);
        // Tick scale pop
        c.el.classList.add('mn-tick');
        setTimeout(() => c.el.classList.remove('mn-tick'), 200);
        // Flash on parent card
        const card = c.el.closest('.mn-stat-card');
        if(card && Math.random() > 0.4){
          card.classList.remove('mn-flash');
          void card.offsetWidth;
          card.classList.add('mn-flash');
        }
        // Stagger next tick: 800ms-2000ms
        setTimeout(tick, 800 + Math.random() * 1200);
      }
      // Start each counter at a random offset
      setTimeout(tick, 500 + Math.random() * 2000);
    });

    // === Flying purchase dots — converge to phone center ===
    const flyContainer = document.getElementById('mnFlyDots');
    if(flyContainer){
      const colors = ['#4ade80','#14b8a6','#f59e0b','#8b5cf6','#ec4899','#3b82f6','#22c55e'];
      function spawnDot(){
        const dot = document.createElement('div');
        dot.className = 'mn-flydot';
        const color = colors[Math.floor(Math.random()*colors.length)];
        dot.style.background = color;
        // Start from random edge
        const side = Math.floor(Math.random()*4);
        const rect = flyContainer.getBoundingClientRect();
        let sx, sy;
        if(side===0){ sx=Math.random()*100; sy=-5; } // top
        else if(side===1){ sx=105; sy=Math.random()*100; } // right
        else if(side===2){ sx=Math.random()*100; sy=105; } // bottom
        else { sx=-5; sy=Math.random()*100; } // left
        const ex = 45 + Math.random()*10; // center area
        const ey = 45 + Math.random()*10;
        const dur = 1800 + Math.random()*1200;
        dot.style.left = sx + '%';
        dot.style.top = sy + '%';
        dot.style.transition = `transform ${dur}ms cubic-bezier(.23,1,.32,1), opacity ${dur}ms ease`;
        flyContainer.appendChild(dot);
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            dot.style.opacity = '1';
            dot.style.transform = `translate(${(ex-sx)*rect.width/100}px, ${(ey-sy)*rect.height/100}px) scale(.3)`;
          });
        });
        setTimeout(() => {
          dot.style.opacity = '0';
          setTimeout(() => dot.remove(), 500);
        }, dur - 300);
      }
      // Spawn dots periodically
      function dotLoop(){
        spawnDot();
        setTimeout(dotLoop, 400 + Math.random()*600);
      }
      setTimeout(dotLoop, 1000);
    }
  })();

  // ===== MATH CALCULATOR + WIREFRAME GLOBE =====
  (function(){
    var slider = document.getElementById('mathSlider');
    var valEl = document.getElementById('mathSliderVal');
    var revDay = document.getElementById('mathRevDay');
    var earnDay = document.getElementById('mathEarnDay');
    var earnMonth = document.getElementById('mathEarnMonth');
    var noteEl = document.getElementById('mathOrdersNote');
    var globeSvg = document.getElementById('globeSvg');
    var orbitCtr = document.getElementById('orbitDotsContainer');
    var tagsEl = document.getElementById('mathTags');
    var storeMarkerEl = document.getElementById('storeMarker');
    var counterEl = document.getElementById('mathOrderCount');
    if(!slider) return;

    var AVG_PRICE = 40, SHARE = 0.65;
    var autoTimer = null, dotTimer = null;
    var orderCount = 0;

    // Globe params
    var CX = 200, CY = 200, R = 185;
    var parallels = [-60, -40, -20, 0, 20, 40, 60];
    var meridianCount = 12;
    var rotOffset = 0;
    var flashDots = [];
    var arcs = [];

    // "Your store" position — stays fixed on equator, front-center
    var STORE_LAT = 20, STORE_BASE_LON = 0;

    // Cities for purchase tags
    // 80% US cities, 20% international — with flags
    var usCities = [
      'New York','Los Angeles','Chicago','Houston','Phoenix','Austin','Dallas','Denver',
      'Miami','Atlanta','Seattle','Portland','San Francisco','San Diego','Nashville',
      'Charlotte','Boston','Detroit','Minneapolis','Tampa','Orlando','Las Vegas',
      'Raleigh','Salt Lake City','Columbus','Indianapolis','Sacramento','Kansas City'
    ];
    var intlCities = [
      {name:'London',flag:'\u{1F1EC}\u{1F1E7}'},{name:'Toronto',flag:'\u{1F1E8}\u{1F1E6}'},
      {name:'Sydney',flag:'\u{1F1E6}\u{1F1FA}'},{name:'Berlin',flag:'\u{1F1E9}\u{1F1EA}'},
      {name:'Tokyo',flag:'\u{1F1EF}\u{1F1F5}'},{name:'Paris',flag:'\u{1F1EB}\u{1F1F7}'},
      {name:'Dubai',flag:'\u{1F1E6}\u{1F1EA}'},{name:'Singapore',flag:'\u{1F1F8}\u{1F1EC}'},
      {name:'Seoul',flag:'\u{1F1F0}\u{1F1F7}'},{name:'Mumbai',flag:'\u{1F1EE}\u{1F1F3}'}
    ];
    var usFlag = '\u{1F1FA}\u{1F1F8}';
    var prices = [9,12,14,19,24,29,39,49,59,79];

    function pickCity(){
      if(Math.random() < 0.8){
        var c = usCities[Math.floor(Math.random() * usCities.length)];
        return {name: c, flag: usFlag};
      } else {
        return intlCities[Math.floor(Math.random() * intlCities.length)];
      }
    }

    function fmt(n){ return '$' + _fc(Math.round(n)); }

    // --- Calculator ---
    function updateCalc(){
      var orders = parseInt(slider.value);
      var pct = ((orders - 1) / 49 * 100);
      slider.style.setProperty('--pct', pct + '%');
      valEl.textContent = orders;
      if(noteEl) noteEl.textContent = orders;
      revDay.textContent = fmt(orders * AVG_PRICE);
      earnDay.textContent = fmt(orders * AVG_PRICE * SHARE);
      earnMonth.textContent = fmt(orders * AVG_PRICE * SHARE * 30);
      setDotRate(orders);
    }

    // --- Projection ---
    function project(lat, lon){
      var lr = lat * Math.PI / 180, lr2 = lon * Math.PI / 180;
      return { x: CX + R * Math.cos(lr) * Math.sin(lr2), y: CY - R * Math.sin(lr), cosLon: Math.cos(lr2) };
    }
    function normLon(l){ return ((l % 360) + 540) % 360 - 180; }

    // SVG globe center in % of scene (globe is 76% wide, offset 12%)
    function svgToScene(sx, sy){
      return { px: 12 + (sx / 400) * 76, py: 12 + (sy / 400) * 76 };
    }

    // --- Draw wireframe globe ---
    function drawGlobe(now){
      if(!globeSvg) return;
      var s = '';
      s += '<defs>';
      s += '<filter id="dg"><feGaussianBlur stdDeviation="2.5" result="g"/><feMerge><feMergeNode in="g"/><feMergeNode in="SourceGraphic"/></feMerge></filter>';
      s += '<filter id="lg"><feGaussianBlur stdDeviation="1" result="g"/><feMerge><feMergeNode in="g"/><feMergeNode in="SourceGraphic"/></feMerge></filter>';
      s += '<filter id="ag"><feGaussianBlur stdDeviation="1.5" result="g"/><feMerge><feMergeNode in="g"/><feMergeNode in="SourceGraphic"/></feMerge></filter>';
      s += '<clipPath id="gc"><circle cx="'+CX+'" cy="'+CY+'" r="'+R+'"/></clipPath>';
      s += '</defs>';
      s += '<g clip-path="url(#gc)">';

      // Parallels
      for(var i = 0; i < parallels.length; i++){
        var lat = parallels[i], lr = lat * Math.PI / 180;
        var y = CY - R * Math.sin(lr), hw = R * Math.cos(lr);
        var eq = lat === 0;
        s += '<line x1="'+(CX-hw)+'" y1="'+y.toFixed(1)+'" x2="'+(CX+hw)+'" y2="'+y.toFixed(1)+'" stroke="rgba(20,184,166,'+(eq?.18:.07)+')" stroke-width="'+(eq?.8:.4)+'"/>';
      }

      // Meridians + intersection dots
      for(var mi = 0; mi < meridianCount; mi++){
        var lon = normLon(mi * 30 + rotOffset);
        var cosL = Math.cos(lon * Math.PI / 180);
        if(cosL < -0.05) continue;
        var op = Math.max(0.03, cosL * 0.14), sw = cosL > 0.5 ? 0.5 : 0.3;
        var pts = [];
        for(var la = -85; la <= 85; la += 4){
          var p = project(la, lon);
          pts.push(p.x.toFixed(1)+','+p.y.toFixed(1));
        }
        s += '<polyline points="'+pts.join(' ')+'" fill="none" stroke="rgba(20,184,166,'+op.toFixed(3)+')" stroke-width="'+sw+'"/>';
        for(var di = 0; di < parallels.length; di++){
          var p = project(parallels[di], lon);
          var dop = cosL * 0.45;
          if(dop < 0.04) continue;
          var dr = cosL > 0.7 ? 2.2 : (cosL > 0.4 ? 1.6 : 1);
          s += '<circle cx="'+p.x.toFixed(1)+'" cy="'+p.y.toFixed(1)+'" r="'+dr+'" fill="rgba(20,184,166,'+dop.toFixed(2)+')" filter="url(#lg)"/>';
        }
      }

      // Store marker on globe
      var storeLon = normLon(STORE_BASE_LON + rotOffset);
      var storeCosL = Math.cos(storeLon * Math.PI / 180);
      var storeP = project(STORE_LAT, storeLon);
      if(storeCosL > 0.1){
        var sop = storeCosL * 0.9;
        s += '<circle cx="'+storeP.x.toFixed(1)+'" cy="'+storeP.y.toFixed(1)+'" r="5" fill="rgba(20,184,166,'+sop.toFixed(2)+')" filter="url(#dg)"/>';
        s += '<circle cx="'+storeP.x.toFixed(1)+'" cy="'+storeP.y.toFixed(1)+'" r="3" fill="rgba(255,255,255,'+(sop*.8).toFixed(2)+')" />';
        // Update HTML marker position
        if(storeMarkerEl){
          var sc = svgToScene(storeP.x, storeP.y);
          storeMarkerEl.style.left = sc.px + '%';
          storeMarkerEl.style.top = sc.py + '%';
          storeMarkerEl.style.opacity = sop;
        }
      } else if(storeMarkerEl){
        storeMarkerEl.style.opacity = '0';
      }

      // Arcs — from order grid point (rotates with globe) toward center
      var aliveArcs = [];
      for(var ai = 0; ai < arcs.length; ai++){
        var arc = arcs[ai];
        var age = (now - arc.born) / arc.dur;
        if(age > 1) continue;
        aliveArcs.push(arc);

        // Project start point — rotates with globe
        var arcLon = normLon(arc.baseLon + rotOffset);
        var arcCosL = Math.cos(arcLon * Math.PI / 180);

        // Skip if fully behind
        if(arcCosL < -0.15) continue;

        var ap = project(arc.lat, arcLon);

        // Push start point slightly outside globe rim for tag-like position
        var dx0 = ap.x - CX, dy0 = ap.y - CY;
        var dist0 = Math.sqrt(dx0*dx0 + dy0*dy0);
        var pushFactor = dist0 < 10 ? 1 : R * 1.05 / dist0;
        var sx = CX + dx0 * pushFactor;
        var sy = CY + dy0 * pushFactor;

        // End point: globe center
        var ex = CX, ey = CY;

        // Curved control point
        var midX = (sx + ex) / 2, midY = (sy + ey) / 2;
        var perpX = -(sy - ey) * 0.3, perpY = (sx - ex) * 0.3;
        var cpx = midX + perpX * arc.curveDir;
        var cpy = midY + perpY * arc.curveDir;

        // Visibility: fade when near edge
        var visFactor = arcCosL < 0 ? 0.06 : Math.min(1, arcCosL * 1.5);
        var progress = Math.min(age * 2.2, 1);
        var fade = age > 0.55 ? 1 - (age - 0.55) / 0.45 : 1;
        var arcOp = (0.4 * fade * visFactor).toFixed(3);

        var pathD = 'M'+sx.toFixed(1)+','+sy.toFixed(1)+' Q'+cpx.toFixed(1)+','+cpy.toFixed(1)+' '+ex.toFixed(1)+','+ey.toFixed(1);
        var totalLen = R * 1.2;
        var drawn = progress * totalLen;
        s += '<path d="'+pathD+'" fill="none" stroke="rgba(74,222,128,'+arcOp+')" stroke-width="1" stroke-dasharray="'+drawn.toFixed(0)+' '+(totalLen+50)+'" stroke-linecap="round" filter="url(#ag)"/>';

        // Traveling dot along arc
        if(age < 0.45){
          var t = age / 0.45;
          var bx = (1-t)*(1-t)*sx + 2*(1-t)*t*cpx + t*t*ex;
          var by = (1-t)*(1-t)*sy + 2*(1-t)*t*cpy + t*t*ey;
          var dOp = (0.7 * visFactor * (1 - t * 0.4)).toFixed(2);
          s += '<circle cx="'+bx.toFixed(1)+'" cy="'+by.toFixed(1)+'" r="2" fill="#4ade80" opacity="'+dOp+'" filter="url(#dg)"/>';
        }

        // Arrival flash
        if(age > 0.4 && age < 0.6){
          var fp2 = (age - 0.4) / 0.2;
          var fR = 3 + fp2 * 6;
          var fOp = (0.25 * visFactor * (1 - fp2)).toFixed(2);
          s += '<circle cx="'+CX+'" cy="'+CY+'" r="'+fR.toFixed(1)+'" fill="none" stroke="rgba(74,222,128,'+fOp+')" stroke-width=".7"/>';
        }
      }
      arcs = aliveArcs;

      // Flash dots — rotate with globe
      var alive = [];
      for(var fi = 0; fi < flashDots.length; fi++){
        var fd = flashDots[fi];
        var fAge = (now - fd.born) / 2500;
        if(fAge > 1) continue;
        alive.push(fd);
        var flon = normLon(fd.baseLon + rotOffset);
        var fcosL = Math.cos(flon * Math.PI / 180);
        if(fcosL < 0) continue;
        var fp2 = project(fd.lat, flon);
        var fr, fop;
        if(fAge < 0.15){ fr = fAge / 0.15 * 4; fop = fAge / 0.15; }
        else if(fAge < 0.4){ fr = 4; fop = 0.9; }
        else { fr = 4 - (fAge - 0.4) / 0.6 * 3; fop = 1 - (fAge - 0.4) / 0.6; }
        fop *= fcosL;
        s += '<circle cx="'+fp2.x.toFixed(1)+'" cy="'+fp2.y.toFixed(1)+'" r="'+fr.toFixed(1)+'" fill="#4ade80" opacity="'+fop.toFixed(2)+'" filter="url(#dg)"/>';
      }
      flashDots = alive;

      s += '</g>';
      s += '<circle cx="'+CX+'" cy="'+CY+'" r="'+R+'" fill="none" stroke="rgba(20,184,166,.08)" stroke-width=".5"/>';
      globeSvg.innerHTML = s;
    }

    // --- Spawn order ---
    function spawnOrder(){
      var mi = Math.floor(Math.random() * meridianCount);
      var baseLon = mi * 30;
      var di = Math.floor(Math.random() * parallels.length);
      var lat = parallels[di];
      var now = performance.now();

      // Flash dot
      flashDots.push({ baseLon: baseLon, lat: lat, born: now });

      // Arc — from order grid position, rotates with globe
      arcs.push({ baseLon: baseLon, lat: lat, curveDir: Math.random() > 0.5 ? 1 : -1, born: now, dur: 3500 + Math.random() * 1500 });

      // Floating tag — always show
      if(tagsEl){
        var city = pickCity();
        var price = prices[Math.floor(Math.random() * prices.length)];

        var tag = document.createElement('div');
        tag.className = 'math-tag';
        tag.innerHTML = '<span class="math-tag-dot"></span><span class="math-tag-amount">+$' + price + '</span><span class="math-tag-city">' + city.name + ' ' + city.flag + '</span>';

        var approxLon = normLon(baseLon + rotOffset);
        var cosL = Math.cos(approxLon * Math.PI / 180);
        if(cosL > 0){
          var p = project(lat, approxLon);
          var sc = svgToScene(p.x, p.y);
          var tagX = sc.px + (sc.px > 50 ? 10 : -30);
          var tagY = sc.py - 6;
          tag.style.left = tagX + '%';
          tag.style.top = tagY + '%';
        } else {
          tag.style.left = (Math.random() > 0.5 ? -8 : 84) + '%';
          tag.style.top = (20 + Math.random() * 50) + '%';
        }

        tagsEl.appendChild(tag);
        setTimeout(function(){ tag.remove(); }, 3500);
      }

      // Counter
      orderCount++;
      if(counterEl) counterEl.textContent = orderCount;
    }

    function setDotRate(orders){
      if(dotTimer) clearInterval(dotTimer);
      // At 5 orders: ~4s between spawns. At 50: ~1.2s
      var interval = Math.max(1200, 6000 / Math.sqrt(orders));
      dotTimer = setInterval(spawnOrder, interval);
    }

    // --- Animation loop ---
    var lastFrame = 0;
    function animate(now){
      var dt = now - lastFrame;
      if(dt > 45){
        rotOffset += dt * 0.008;
        drawGlobe(now);
        lastFrame = now;
      }
      requestAnimationFrame(animate);
    }

    // --- Auto-increment ---
    function autoInc(){
      if(parseInt(slider.value) < 50){ slider.value = parseInt(slider.value) + 1; updateCalc(); }
      else { clearInterval(autoTimer); autoTimer = null; }
    }
    function startAuto(){
      if(autoTimer) clearInterval(autoTimer);
      autoTimer = setInterval(autoInc, 2000 + Math.random() * 2000);
    }
    var resumeT = null;
    slider.addEventListener('input', function(){
      if(autoTimer){ clearInterval(autoTimer); autoTimer = null; }
      if(resumeT) clearTimeout(resumeT);
      updateCalc();
    });
    slider.addEventListener('change', function(){
      resumeT = setTimeout(function(){ if(parseInt(slider.value) < 50) startAuto(); }, 5000);
    });

    // --- Orbit dots ---
    function createOrbitDots(){
      if(!orbitCtr) return;
      [{rx:59,ry:22,rot:-15,n:8},{rx:64,ry:27,rot:25,n:6},{rx:56,ry:19,rot:-40,n:5}].forEach(function(o){
        for(var i=0;i<o.n;i++){
          var d=document.createElement('div');
          d.style.cssText='position:absolute;width:3px;height:3px;border-radius:50%;background:rgba(20,184,166,.5);box-shadow:0 0 6px rgba(20,184,166,.35);pointer-events:none;transition:opacity .3s;';
          orbitCtr.appendChild(d);
          (function(dot,orb,deg){
            var rr=orb.rot*Math.PI/180;
            function t(){
              deg+=0.3;if(deg>360)deg-=360;
              var rad=deg*Math.PI/180,x=orb.rx*Math.cos(rad),y=orb.ry*Math.sin(rad);
              var rx=x*Math.cos(rr)-y*Math.sin(rr),ry=x*Math.sin(rr)+y*Math.cos(rr);
              var bh=Math.sqrt(rx*rx+ry*ry)<38&&Math.cos(rad)>0.1;
              dot.style.left=(50+rx)+'%';dot.style.top=(50+ry)+'%';
              dot.style.opacity=bh?'0.06':'0.55';
              requestAnimationFrame(t);
            }
            t();
          })(d,o,i*(360/o.n));
        }
      });
    }

    // Init
    slider.value = 5;
    updateCalc();
    createOrbitDots();
    requestAnimationFrame(animate);
    setTimeout(startAuto, 3000);
  })();

  // ===== PRODUCT SLIDER + US MAP =====
  (function(){
    const slider = document.getElementById('psSlider');
    const cards = slider ? slider.querySelectorAll('.ps-card') : [];
    const icons = document.querySelectorAll('.ps-cat-icon');
    const mapSvg = document.getElementById('usMapSvg');
    if (!cards.length) return;

    let current = 0;
    const total = cards.length;

    // Store original earn values on init
    cards.forEach(c => {
      const earnEl = c.querySelector('.ps-earn-val');
      if (earnEl) {
        const raw = earnEl.textContent.replace(/[^0-9.]/g, '');
        const val = parseFloat(raw) || 0;
        earnEl.dataset.target = val;
        earnEl.dataset.hasDecimal = raw.includes('.') ? '1' : '0';
      }
    });

    function animateEarn(el, target) {
      const start = performance.now();
      const hasDecimal = el.dataset.hasDecimal === '1';
      const dur = Math.min(400 + target * 80, 1200);
      function tick(now) {
        const p = Math.min((now - start) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        const v = 0.5 + (target - 0.5) * ease;
        el.textContent = '$' + (hasDecimal ? v.toFixed(2) : Math.round(v));
        if (p < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    }

    function showCard(idx) {
      const prevIdx = (idx - 1 + total) % total;
      const nextIdx = (idx + 1) % total;
      cards.forEach((c, i) => {
        c.classList.remove('ps-active');
        if (i === idx) {
          c.classList.remove('ps-prev','ps-next');
          c.classList.add('ps-active');
          const earnEl = c.querySelector('.ps-earn-val');
          if (earnEl && earnEl.dataset.target) {
            earnEl.textContent = '$0';
            setTimeout(() => animateEarn(earnEl, parseFloat(earnEl.dataset.target)), 350);
          }
        }
        else if (i === prevIdx) { c.classList.remove('ps-next'); c.classList.add('ps-prev'); }
        else if (i === nextIdx) { c.classList.remove('ps-prev'); c.classList.add('ps-next'); }
        else { c.classList.remove('ps-prev','ps-next'); }
      });
      icons.forEach((ic, i) => ic.classList.toggle('ps-icon-active', i === idx));
    }

    // Icon click
    icons.forEach(ic => ic.addEventListener('click', () => {
      current = parseInt(ic.dataset.idx);
      showCard(current);
    }));

    // Initial setup
    showCard(0);

    // Auto-rotate — slow and smooth
    setInterval(() => {
      current = (current + 1) % total;
      showCard(current);
    }, 6000);

    // Touch + mouse drag on product slider
    if (slider) {
      let psStartX = 0, psDragging = false;
      slider.addEventListener('touchstart', e => { psStartX = e.changedTouches[0].screenX; }, {passive:true});
      slider.addEventListener('touchend', e => {
        const diff = psStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 30) { current = diff > 0 ? (current+1)%total : (current-1+total)%total; showCard(current); }
      }, {passive:true});
      slider.style.cursor = 'grab';
      slider.addEventListener('mousedown', e => { psDragging = true; psStartX = e.clientX; slider.style.cursor = 'grabbing'; e.preventDefault(); });
      document.addEventListener('mousemove', e => { if (psDragging) e.preventDefault(); });
      document.addEventListener('mouseup', e => {
        if (!psDragging) return; psDragging = false; slider.style.cursor = 'grab';
        const diff = psStartX - e.clientX;
        if (Math.abs(diff) > 30) { current = diff > 0 ? (current+1)%total : (current-1+total)%total; showCard(current); }
      });
    }

    // US dot map
    if (mapSvg) {
      // Generate dot grid in US-shaped regions
      const regions = [
        // [xMin,xMax,yMin,yMax] rough continental US zones
        [130,260,90,320],   // Pacific (CA,OR,WA)
        [200,320,100,350],  // Mountain (NV,UT,CO,AZ,NM)
        [310,460,70,290],   // Plains (MT,WY,ND,SD,NE,KS)
        [310,480,280,440],  // South Central (TX,OK,AR,LA)
        [460,600,90,280],   // Midwest (MN,WI,IA,IL,IN,OH,MI)
        [470,620,270,420],  // Southeast (TN,MS,AL,GA,SC)
        [610,760,80,200],   // Northeast (NY,PA,NJ,CT,MA,VT,NH,ME)
        [620,780,190,380],  // Mid-Atlantic + Southeast coast (VA,NC,FL)
        [700,770,320,440],  // Florida
      ];

      for (const [x1,x2,y1,y2] of regions) {
        for (let x = x1; x < x2; x += 10) {
          for (let y = y1; y < y2; y += 10) {
            if (Math.random() > 0.2) {
              const c = document.createElementNS('http://www.w3.org/2000/svg','circle');
              c.setAttribute('cx', x + (Math.random()*4-2));
              c.setAttribute('cy', y + (Math.random()*4-2));
              c.setAttribute('r', '1.5');
              c.setAttribute('class','ps-map-dot');
              mapSvg.appendChild(c);
            }
          }
        }
      }

      // City markers — permanent teal dots
      const cities = [
        {name:'New York',x:730,y:155},
        {name:'Los Angeles',x:155,y:290},
        {name:'Chicago',x:540,y:155},
        {name:'Houston',x:420,y:400},
        {name:'Phoenix',x:220,y:320},
        {name:'Dallas',x:410,y:350},
        {name:'Denver',x:310,y:230},
        {name:'Atlanta',x:620,y:320},
        {name:'Miami',x:700,y:420},
        {name:'Seattle',x:160,y:100},
        {name:'Portland',x:155,y:130},
        {name:'Austin',x:400,y:380},
        {name:'Boston',x:750,y:130},
        {name:'Detroit',x:580,y:150},
        {name:'Nashville',x:580,y:290},
        {name:'San Francisco',x:140,y:240},
        {name:'Minneapolis',x:460,y:120},
        {name:'Charlotte',x:660,y:290},
        {name:'Tampa',x:670,y:400},
        {name:'Philadelphia',x:720,y:175},
      ];

      // Draw permanent city dots
      cities.forEach(city => {
        const c = document.createElementNS('http://www.w3.org/2000/svg','circle');
        c.setAttribute('cx', city.x);
        c.setAttribute('cy', city.y);
        c.setAttribute('class','ps-map-city');
        mapSvg.appendChild(c);
      });

      // Flash sale on map — ripple + glow + label
      function flashSale() {
        const city = cities[Math.floor(Math.random()*cities.length)];

        // Flash core
        const core = document.createElementNS('http://www.w3.org/2000/svg','circle');
        core.setAttribute('cx', city.x);
        core.setAttribute('cy', city.y);
        core.setAttribute('r', '3');
        core.setAttribute('class','ps-map-flash');
        mapSvg.appendChild(core);

        // Ripple ring 1
        const r1 = document.createElementNS('http://www.w3.org/2000/svg','circle');
        r1.setAttribute('cx', city.x);
        r1.setAttribute('cy', city.y);
        r1.setAttribute('r', '4');
        r1.setAttribute('class','ps-map-ripple');
        mapSvg.appendChild(r1);

        // Ripple ring 2 — delayed
        setTimeout(() => {
          const r2 = document.createElementNS('http://www.w3.org/2000/svg','circle');
          r2.setAttribute('cx', city.x);
          r2.setAttribute('cy', city.y);
          r2.setAttribute('r', '4');
          r2.setAttribute('class','ps-map-ripple2');
          mapSvg.appendChild(r2);
          setTimeout(() => r2.remove(), 2800);
        }, 300);

        // Cleanup
        setTimeout(() => { core.remove(); r1.remove(); }, 3200);

        setTimeout(flashSale, 2000 + Math.random()*3000);
      }
      // Start with 2 quick flashes then regular interval
      setTimeout(flashSale, 1500);
      setTimeout(flashSale, 2800);
    }
  })();

  // Phone store sale notifications
  (function(){
    const ctr = document.getElementById('pvSaleContainer');
    const cartIcon = document.getElementById('pvCartIcon');
    const cartBadge = document.getElementById('pvCartBadge');
    const pvRevenueEl = document.getElementById('pv-revenue');
    const pvOrdersEl = document.getElementById('pv-orders');
    if (!ctr || !cartBadge) return;
    let cartCount = 0;
    let pvRevenue = 2340;
    let pvOrders = 187;

    const prods = [
      {name:'Morning Ritual Guide',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="6" r="3"/><path d="M12 9v5"/><path d="M7 17l5 4 5-4"/><path d="M7 17h10"/></svg>'},
      {name:'Glow Up Masterclass',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2 7h7l-5.5 4 2 7L12 16l-5.5 4 2-7L3 9h7z"/></svg>'},
      {name:'Wellness Planner',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/></svg>'},
      {name:'Mindfulness Course',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 3v18"/><path d="M3.5 9h17"/><path d="M3.5 15h17"/></svg>'},
      {name:'Sleep Better Guide',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>'},
      {name:'Self-Care Toolkit',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="6" r="3"/><path d="M12 9v3"/><path d="M5 21c1-4 3-6 7-6s6 2 7 6"/></svg>'},
      {name:'Nutrition Checklist',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 8c2 4 6 4 8 0"/></svg>'},
      {name:'Fitness Starter Pack',emoji:'<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#5eead4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4v16"/><path d="M18 4v16"/><path d="M6 12h12"/><rect x="3" y="6" width="6" height="4" rx="1"/><rect x="15" y="6" width="6" height="4" rx="1"/><rect x="3" y="14" width="6" height="4" rx="1"/><rect x="15" y="14" width="6" height="4" rx="1"/></svg>'}
    ];
    const cities = ['New York','Los Angeles','Chicago','Houston','Phoenix','Dallas','Denver','Atlanta','Miami','Seattle','Portland','Austin'];

    function animateValue(el, from, to, prefix, suffix, dur) {
      const start = performance.now();
      function tick(now) {
        const p = Math.min((now - start) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        const v = Math.round(from + (to - from) * ease);
        el.textContent = (prefix||'') + _fc(v) + (suffix||'');
        if (p < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    }

    function showSale(){
      const p = prods[Math.floor(Math.random()*prods.length)];
      const c = cities[Math.floor(Math.random()*cities.length)];
      const amount = Math.round(20+Math.random()*30);
      const a = amount.toFixed(2);
      const el = document.createElement('div');
      el.className = 'pv-store-sale';
      el.innerHTML = '<div class="pv-store-sale-icon">'+p.emoji+'</div><div class="pv-store-sale-text"><div class="pv-store-sale-title">New order from '+c+'</div><div class="pv-store-sale-detail">'+p.name+'</div></div><div class="pv-store-sale-amount">+$'+a+'</div>';
      ctr.appendChild(el);
      setTimeout(()=>el.remove(),5700);
      cartCount++;
      cartBadge.textContent = cartCount;
      if(cartCount===1){cartBadge.classList.add('visible')}else{cartBadge.classList.remove('bump');void cartBadge.offsetWidth;cartBadge.classList.add('bump')}
      if(cartIcon){cartIcon.classList.remove('cart-ring');void cartIcon.offsetWidth;cartIcon.classList.add('cart-ring');setTimeout(()=>cartIcon.classList.remove('cart-ring'),500)}

      // Update floating cards
      const newRevenue = pvRevenue + amount;
      const newOrders = pvOrders + 1;
      if(pvRevenueEl) animateValue(pvRevenueEl, pvRevenue, newRevenue, '$', '', 800);
      if(pvOrdersEl) animateValue(pvOrdersEl, pvOrders, newOrders, '', '', 600);
      pvRevenue = newRevenue;
      pvOrders = newOrders;

      setTimeout(showSale, 5000+Math.random()*5000);
    }
    setTimeout(showSale, 3000);
  })();
})();

// ===== TESTIMONIAL SLIDER =====
(function(){
  var slider = document.getElementById('spSlider');
  var slides = document.querySelectorAll('.sp-slide');
  var dots = document.querySelectorAll('.sp-dot');
  if(!slider || !slides.length) return;

  var cur = 0;
  var timer = null;
  var busy = false;

  function goTo(idx){
    if(idx === cur || busy) return;
    busy = true;
    clearTimeout(timer);

    slides[cur].classList.remove('sp-active');
    dots[cur].classList.remove('sp-dot-active');

    slides[idx].classList.add('sp-active');
    dots[idx].classList.add('sp-dot-active');
    cur = idx;

    setTimeout(function(){ busy = false; resetTimer(); }, 550);
  }

  function resetTimer(){
    clearTimeout(timer);
    timer = setTimeout(function(){
      goTo((cur + 1) % slides.length);
    }, 14000);
  }

  dots.forEach(function(d){
    d.addEventListener('click', function(){ goTo(parseInt(d.dataset.idx)); });
  });

  // Desktop drag
  var startX = 0, dragged = false;
  slider.addEventListener('mousedown', function(e){
    startX = e.pageX; dragged = false;
    slider.classList.add('sp-grabbing');
    clearTimeout(timer);
    e.preventDefault();
  });
  document.addEventListener('mousemove', function(e){
    if(!slider.classList.contains('sp-grabbing')) return;
    if(Math.abs(e.pageX - startX) > 10) dragged = true;
  });
  document.addEventListener('mouseup', function(e){
    if(!slider.classList.contains('sp-grabbing')) return;
    slider.classList.remove('sp-grabbing');
    var diff = startX - e.pageX;
    if(Math.abs(diff) > 30){
      var next = diff > 0 ? (cur + 1) % slides.length : (cur - 1 + slides.length) % slides.length;
      goTo(next);
    } else {
      resetTimer();
    }
  });
  slider.addEventListener('click', function(e){
    if(dragged) e.preventDefault();
  }, true);

  // Touch swipe
  var touchX = 0;
  slider.addEventListener('touchstart', function(e){
    touchX = e.changedTouches[0].screenX;
    clearTimeout(timer);
  }, {passive:true});
  slider.addEventListener('touchend', function(e){
    var diff = touchX - e.changedTouches[0].screenX;
    if(Math.abs(diff) > 30){
      var next = diff > 0 ? (cur + 1) % slides.length : (cur - 1 + slides.length) % slides.length;
      goTo(next);
    } else {
      resetTimer();
    }
  }, {passive:true});

  resetTimer();
})();/* Free Basic page scripts */

// ===== PRODUCT SLIDER =====
// Runs independently because common.js slider code is inside a larger IIFE
// that exits early when dashboard elements (stat-revenue, dash-orders) are absent.
(function(){
  const slider = document.getElementById('psSlider');
  if (!slider || slider.dataset.psInit) return;
  slider.dataset.psInit = '1';
  const cards = slider.querySelectorAll('.ps-card');
  const icons = document.querySelectorAll('.ps-cat-icon');
  if (!cards.length) return;

  let current = 0;
  const total = cards.length;

  // Store original earn values on init
  cards.forEach(c => {
    const earnEl = c.querySelector('.ps-earn-val');
    if (earnEl) {
      const raw = earnEl.textContent.replace(/[^0-9.]/g, '');
      const val = parseFloat(raw) || 0;
      earnEl.dataset.target = val;
      earnEl.dataset.hasDecimal = raw.includes('.') ? '1' : '0';
    }
  });

  function animateEarn(el, target) {
    const start = performance.now();
    const hasDecimal = el.dataset.hasDecimal === '1';
    const dur = Math.min(400 + target * 80, 1200);
    function tick(now) {
      const p = Math.min((now - start) / dur, 1);
      const ease = 1 - Math.pow(1 - p, 3);
      const v = 0.5 + (target - 0.5) * ease;
      el.textContent = '$' + (hasDecimal ? v.toFixed(2) : Math.round(v));
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  function showCard(idx) {
    const prevIdx = (idx - 1 + total) % total;
    const nextIdx = (idx + 1) % total;
    cards.forEach((c, i) => {
      c.classList.remove('ps-active');
      if (i === idx) {
        c.classList.remove('ps-prev','ps-next');
        c.classList.add('ps-active');
        const earnEl = c.querySelector('.ps-earn-val');
        if (earnEl && earnEl.dataset.target) {
          earnEl.textContent = '$0';
          setTimeout(() => animateEarn(earnEl, parseFloat(earnEl.dataset.target)), 350);
        }
      }
      else if (i === prevIdx) { c.classList.remove('ps-next'); c.classList.add('ps-prev'); }
      else if (i === nextIdx) { c.classList.remove('ps-prev'); c.classList.add('ps-next'); }
      else { c.classList.remove('ps-prev','ps-next'); }
    });
    icons.forEach((ic, i) => ic.classList.toggle('ps-icon-active', i === idx));
  }

  // Icon click
  icons.forEach(ic => ic.addEventListener('click', () => {
    current = parseInt(ic.dataset.idx);
    showCard(current);
  }));

  // Initial setup
  showCard(0);

  // Auto-rotate
  setInterval(() => {
    current = (current + 1) % total;
    showCard(current);
  }, 6000);
})();

// ===== DASHBOARD ENTRY ANIMATIONS =====
(function(){
  // Store target widths and reset bars to 0
  const fills = document.querySelectorAll('.dash-product-fill');
  fills.forEach(f => {
    f.dataset.targetW = f.style.width || '0%';
    f.style.width = '0%';
    f.style.transition = 'none';
  });

  // Parse stat value elements
  const statVals = document.querySelectorAll('.dash-stat-value');
  statVals.forEach(el => {
    const raw = el.textContent.trim();
    el.dataset.origText = raw;
    el.dataset.numVal = raw.replace(/[^0-9.]/g, '');
    el.dataset.prefix = raw.startsWith('$') ? '$' : '';
    el.dataset.decimals = raw.includes('.') ? (raw.split('.')[1] || '').length : '0';
    el.textContent = el.dataset.prefix + '0';
  });

  function countUp(el) {
    const target = parseFloat(el.dataset.numVal);
    const prefix = el.dataset.prefix;
    const dec = parseInt(el.dataset.decimals);
    const dur = 1200;
    const t0 = performance.now();
    (function tick(now) {
      const p = Math.min((now - t0) / dur, 1);
      const ease = 1 - Math.pow(1 - p, 3);
      const v = target * ease;
      el.textContent = prefix + (dec > 0 ? v.toFixed(dec) : _fc(Math.round(v)));
      if (p < 1) requestAnimationFrame(tick);
    })(t0);
  }

  function animateBars() {
    fills.forEach((f, i) => {
      setTimeout(() => {
        f.style.transition = 'width .9s cubic-bezier(.22,1,.36,1)';
        f.style.width = f.dataset.targetW;
      }, i * 120);
    });
  }

  function animateStats() {
    statVals.forEach((el, i) => {
      setTimeout(() => countUp(el), i * 150);
    });
  }

  const dashEl = document.querySelector('.dash');
  if (!dashEl) return;

  let fired = false;
  const dashObs = new IntersectionObserver(entries => {
    if (fired) return;
    if (entries[0].isIntersecting) {
      fired = true;
      animateStats();
      setTimeout(animateBars, 300);
      dashObs.disconnect();
    }
  }, { threshold: 0.3 });
  dashObs.observe(dashEl);
})();

// ===== DASHBOARD LIVE TICKER =====
(function(){
  const statEls = document.querySelectorAll('.dash-stat');
  if (!statEls.length) return;

  // Track current values
  const state = [
    { prefix: '$', val: 1840, dec: 0, changeBase: 28 },
    { prefix: '',  val: 43,   dec: 0, changeBase: 12 },
    { prefix: '$', val: 42.80, dec: 2, changeBase: 9 },
  ];

  function fmt(s) {
    if (s.dec > 0) return s.prefix + s.val.toFixed(s.dec);
    return s.prefix + _fc(Math.round(s.val));
  }

  function tickStat(idx) {
    const s = state[idx];
    const el = statEls[idx];
    if (!el) return;
    const valEl = el.querySelector('.dash-stat-value');
    const chEl  = el.querySelector('.dash-stat-change');
    if (!valEl) return;

    // Increment
    const delta = idx === 2
      ? (Math.random() * 2 - 0.5)           // avg order: ±0.5
      : idx === 1
        ? 1                                  // orders: +1
        : 5 + Math.floor(Math.random() * 20); // revenue: +5–24
    s.val += delta;

    // Animate value
    valEl.textContent = fmt(s);
    valEl.classList.remove('stat-tick');
    void valEl.offsetWidth;
    valEl.classList.add('stat-tick');

    // Update change indicator
    if (chEl) {
      const pct = idx === 1
        ? '+' + Math.round(s.val - 43) + ' this week'
        : '↑ ' + (s.changeBase + Math.floor(Math.random() * 3)) + '%';
      chEl.textContent = pct;
      chEl.classList.remove('change-up');
      void chEl.offsetWidth;
      chEl.classList.add('change-up');
    }
  }

  // Only start after entry animation completes (~1.5s)
  setTimeout(() => {
    let lastIdx = -1;
    function scheduleTick() {
      const delay = 2800 + Math.random() * 2400;
      setTimeout(() => {
        let idx;
        do { idx = Math.floor(Math.random() * 3); } while (idx === lastIdx);
        lastIdx = idx;
        tickStat(idx);
        scheduleTick();
      }, delay);
    }
    scheduleTick();
  }, 1500);
})();

// ===== DASHBOARD BAR PULSE — bars slowly grow =====
(function(){
  const fills = document.querySelectorAll('.dash-product-fill');
  const sales = document.querySelectorAll('.dash-product-sales');
  if (!fills.length) return;

  const baseWidths = [85, 62, 48];
  const baseSales  = [620, 458, 372];
  const current    = [...baseWidths];
  const curSales   = [...baseSales];

  function tickBar() {
    const idx = Math.floor(Math.random() * fills.length);
    const grow = 1 + Math.random() * 2;
    current[idx] = Math.min(current[idx] + grow, 98);
    curSales[idx] += Math.floor(5 + Math.random() * 15);

    fills[idx].style.width = current[idx].toFixed(1) + '%';
    if (sales[idx]) sales[idx].textContent = '$' + curSales[idx].toLocaleString();

    fills[idx].style.filter = 'brightness(1.4)';
    setTimeout(() => { fills[idx].style.filter = ''; }, 600);
  }

  setTimeout(() => {
    setInterval(tickBar, 4000 + Math.random() * 2000);
  }, 2000);
})();

// ===== DASHBOARD NEW SALE POPUP — periodic notification =====
(function(){
  const payout = document.querySelector('.hero-float-payout');
  if (!payout) return;

  const products = [
    { name: 'Home Security Kit', price: 89 },
    { name: 'Pet Wellness Bundle', price: 47 },
    { name: 'Smart Garden Starter', price: 35 },
    { name: 'Fitness Reset Plan', price: 29 },
    { name: 'Digital Art Pack', price: 19 },
  ];

  function showNewSale() {
    const p = products[Math.floor(Math.random() * products.length)];
    const nameEl = payout.querySelector('div > div:last-child > div:last-child');
    const titleEl = payout.querySelector('div > div:last-child > div:first-child');
    if (!nameEl) return;

    // Flash out
    payout.style.transition = 'transform .4s ease, opacity .4s ease';
    payout.style.transform = 'translateX(-20px) scale(0.95)';
    payout.style.opacity = '0';

    setTimeout(() => {
      nameEl.textContent = '+$' + p.price + ' · ' + p.name;
      if (titleEl) titleEl.textContent = 'New sale';
      payout.style.transform = 'translateX(20px) scale(0.95)';

      requestAnimationFrame(() => {
        payout.style.transform = '';
        payout.style.opacity = '1';
      });
    }, 500);
  }

  setTimeout(() => {
    setInterval(showNewSale, 7000 + Math.random() * 3000);
  }, 4000);
})();