history.scrollRestoration = 'manual';
window.scrollTo(0, 0);

// Reveal on scroll
var obs = new IntersectionObserver(e => {
  e.forEach(x => { if (x.isIntersecting) x.target.classList.add('visible'); });
}, { threshold: .1, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const t = document.querySelector(a.getAttribute('href'));
    if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
  });
});

// ===== FAQ ACCORDION =====
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => {
    q.closest('.faq-item').classList.toggle('open');
  });
});

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
})();