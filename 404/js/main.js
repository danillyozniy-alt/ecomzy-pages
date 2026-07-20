(function(){
// Reveal on scroll
const obs = new IntersectionObserver(e => {
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
})();
