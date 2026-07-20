// Blog-categories sticky detection
(function(){
  var cats = document.querySelector('.blog-categories');
  if (!cats) return;
  var sentinel = document.createElement('div');
  sentinel.style.cssText = 'height:1px;margin-top:-1px;pointer-events:none;visibility:hidden;';
  cats.parentNode.insertBefore(sentinel, cats);
  var nav = document.getElementById('navbar');
  new IntersectionObserver(function(entries){
    var stuck = !entries[0].isIntersecting;
    cats.classList.toggle('stuck', stuck);
    if (nav) nav.classList.toggle('cats-stuck', stuck);
  }, {threshold:0}).observe(sentinel);
})();

// Reveal on scroll
var obs=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting)x.target.classList.add('visible')})},{threshold:.1,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a=>{a.addEventListener('click',e=>{const t=document.querySelector(a.getAttribute('href'));if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'})}})});

// Reading progress bar
const progressBar = document.getElementById('readingProgress');
if (progressBar) {
  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    progressBar.style.width = Math.min(progress, 100) + '%';
  });
}

// Table of Contents toggle
const tocToggle = document.getElementById('tocToggle');
const tocContainer = tocToggle ? tocToggle.closest('.article-toc') : null;
if (tocToggle && tocContainer) {
  tocToggle.addEventListener('click', () => {
    tocContainer.classList.toggle('collapsed');
  });
}

// Copy link button
document.querySelectorAll('.article-share-copy').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    const url = btn.dataset.url || window.location.href;
    navigator.clipboard.writeText(url).then(() => {
      btn.classList.add('copied');
      setTimeout(() => btn.classList.remove('copied'), 2000);
    });
  });
});