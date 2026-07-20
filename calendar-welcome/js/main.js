(function(){
// Reveal on scroll
var obs = new IntersectionObserver(function(e) {
  e.forEach(function(x) { if (x.isIntersecting) x.target.classList.add('visible'); });
}, { threshold: .1, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });
})();
