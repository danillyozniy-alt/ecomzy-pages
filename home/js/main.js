var homeImgBase = (typeof emTheme !== 'undefined' ? emTheme.url : '') + '/pages/home/';

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

// ===== HERO CANVAS — Stripe-style flowing waves =====
(function(){
  var canvas=document.getElementById('meshCanvas');
  if(!canvas) return;
  var ctx=canvas.getContext('2d');
  var w,h,dpr;
  function resize(){
    dpr=Math.min(window.devicePixelRatio||1,2);
    var rect=canvas.parentElement.getBoundingClientRect();
    w=rect.width;h=rect.height;
    canvas.width=w*dpr;canvas.height=h*dpr;
    canvas.style.width=w+'px';canvas.style.height=h+'px';
    ctx.setTransform(dpr,0,0,dpr,0,0);
  }
  resize();
  window.addEventListener('resize',resize);
  var TOTAL=50,SPACING=4;
  var pal=[[20,184,166],[34,211,238],[45,180,200],[59,130,246],[99,102,241],[139,92,246],[168,130,255],[180,160,240],[200,190,255]];
  function lerp(a,b,t){return[a[0]+(b[0]-a[0])*t,a[1]+(b[1]-a[1])*t,a[2]+(b[2]-a[2])*t]}
  function getCol(t){t=Math.max(0,Math.min(1,t));var s=pal.length-1,i=Math.floor(t*s),f=t*s-i;if(i>=s)return pal[s];return lerp(pal[i],pal[i+1],f)}
  var tm=0,aid;
  function draw(){
    tm+=0.004;
    ctx.fillStyle='#0F172A';ctx.fillRect(0,0,w,h);
    var cY=h*0.35,amp=h*0.22;
    for(var i=0;i<TOTAL;i++){
      var r=i/(TOTAL-1),off=(i-TOTAL/2)*SPACING,ph=r*Math.PI*1.2+tm*0.6,dc=Math.abs(r-0.5)*2,la=amp*(0.5+dc*0.7),sp=tm+r*0.3,ct=(r+tm*0.04)%1,co=getCol(ct),cb=1-dc*0.5,al=(0.15+cb*0.3)*(0.6+Math.sin(tm+r*5)*0.25);
      ctx.strokeStyle='rgba('+Math.round(co[0])+','+Math.round(co[1])+','+Math.round(co[2])+','+al.toFixed(3)+')';
      ctx.lineWidth=1.2+(1-dc)*0.5;
      ctx.beginPath();
      for(var s=0;s<=120;s++){
        var x=(s/120)*(w+200)-100,t=s/120,w1=Math.sin(t*Math.PI*2.5+ph)*la,w2=Math.sin(t*Math.PI*1.8+ph*0.7+1.5)*la*0.4,w3=Math.sin(t*Math.PI*4.2+sp*1.3)*la*0.08,en=Math.sin(t*Math.PI),tw=Math.sin(t*Math.PI*2+tm*0.3)*off*1.2,y=cY+(w1+w2+w3)*en+off*(0.8+en*0.6)+tw*en;
        s===0?ctx.moveTo(x,y):ctx.lineTo(x,y);
      }
      ctx.stroke();
    }
    var gx=w*0.52+Math.sin(tm*0.5)*w*0.08,gy=cY+Math.cos(tm*0.3)*h*0.05,gr=Math.max(w,h)*0.35;
    var glow=ctx.createRadialGradient(gx,gy,0,gx,gy,gr);
    glow.addColorStop(0,'rgba(20,184,166,0.03)');glow.addColorStop(0.4,'rgba(99,102,241,0.015)');glow.addColorStop(1,'rgba(0,0,0,0)');
    ctx.fillStyle=glow;ctx.fillRect(0,0,w,h);
    aid=requestAnimationFrame(draw);
  }
  var ob=new IntersectionObserver(function(e){if(e[0].isIntersecting){if(!aid)draw()}else{cancelAnimationFrame(aid);aid=null}},{threshold:0.05});
  ob.observe(canvas.parentElement);
  draw();
})();


// ===== PAGE SECTIONS =====
(function(){
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
        var isMobile = window.innerWidth < 768;
        if(cosL > 0){
          var p = project(lat, approxLon);
          var sc = svgToScene(p.x, p.y);
          var tagX = sc.px + (sc.px > 50 ? 10 : -30);
          var tagY = sc.py - 6;
          if(isMobile){ tagX = Math.max(0, Math.min(tagX, 55)); }
          tag.style.left = tagX + '%';
          tag.style.top = tagY + '%';
        } else {
          var edgeL = isMobile ? 2 : -8;
          var edgeR = isMobile ? 55 : 84;
          tag.style.left = (Math.random() > 0.5 ? edgeL : edgeR) + '%';
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
        const val = parseInt(earnEl.textContent.replace(/[^0-9]/g, ''));
        earnEl.dataset.target = val;
      }
    });

    function animateEarn(el, target) {
      const start = performance.now();
      const dur = Math.min(400 + target * 8, 1200);
      function tick(now) {
        const p = Math.min((now - start) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        const v = Math.round(1 + (target - 1) * ease);
        el.textContent = '$' + v;
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
            earnEl.textContent = '$1';
            setTimeout(() => animateEarn(earnEl, parseInt(earnEl.dataset.target)), 350);
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
  const slides = document.querySelectorAll('.sp-slide');
  const dots = document.querySelectorAll('.sp-dot');
  if(!slides.length) return;
  let cur = 0;
  let timer = null;
  let transitioning = false;

  function goTo(idx){
    if(idx === cur || transitioning) return;
    clearTimeout(timer);
    transitioning = true;
    const oldSlide = slides[cur];
    const newSlide = slides[idx];

    oldSlide.classList.remove('sp-active');
    oldSlide.classList.add('sp-fade-out');
    dots[cur].classList.remove('sp-dot-active');

    setTimeout(() => {
      oldSlide.classList.remove('sp-fade-out');
      oldSlide.style.opacity = '0';
      oldSlide.style.visibility = 'hidden';

      const oldImg = oldSlide.querySelector('.sp-slide-img');
      if(oldImg) { oldImg.style.transition='none'; oldImg.style.transform='scale(1)'; }

      const newImg = newSlide.querySelector('.sp-slide-img');
      if(newImg) { newImg.style.transition='none'; newImg.style.transform='scale(1)'; }

      newSlide.style.opacity = '';
      newSlide.style.visibility = '';
      newSlide.classList.add('sp-active','sp-fade-in');
      dots[idx].classList.add('sp-dot-active');
      cur = idx;

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          if(newImg) { newImg.style.transition='transform 8s cubic-bezier(.4,0,.2,1)'; newImg.style.transform='scale(1.06)'; }
        });
      });

      setTimeout(() => {
        newSlide.classList.remove('sp-fade-in');
        oldSlide.style.opacity = '';
        oldSlide.style.visibility = '';
        transitioning = false;
        timer = setTimeout(next, 14000);
      }, 500);
    }, 400);
  }

  function next(){
    goTo((cur + 1) % slides.length);
  }

  dots.forEach(d => {
    d.addEventListener('click', () => {
      goTo(parseInt(d.dataset.idx));
    });
  });

  var prevBtn = document.getElementById('spPrev');
  var nextBtn = document.getElementById('spNext');
  if(prevBtn) prevBtn.addEventListener('click', () => { goTo((cur - 1 + slides.length) % slides.length); });
  if(nextBtn) nextBtn.addEventListener('click', () => { next(); });

  // Touch + mouse swipe
  const slider = document.getElementById('spSlider');
  if(slider){
    let startX = 0, dragging = false;
    slider.addEventListener('touchstart', e => { startX = e.changedTouches[0].screenX; clearTimeout(timer); }, {passive:true});
    slider.addEventListener('touchend', e => {
      const diff = startX - e.changedTouches[0].screenX;
      if(Math.abs(diff) > 30) goTo(diff > 0 ? (cur+1)%slides.length : (cur-1+slides.length)%slides.length);
    }, {passive:true});
    slider.addEventListener('mousedown', e => { dragging = true; startX = e.clientX; slider.style.cursor = 'grabbing'; clearTimeout(timer); });
    slider.addEventListener('mousemove', e => { if(dragging) e.preventDefault(); });
    document.addEventListener('mouseup', e => {
      if(!dragging) return; dragging = false; slider.style.cursor = '';
      const diff = startX - e.clientX;
      if(Math.abs(diff) > 30) goTo(diff > 0 ? (cur+1)%slides.length : (cur-1+slides.length)%slides.length);
    });
  }

  timer = setTimeout(next, 14000);
})();/* Home page — page-specific scripts */