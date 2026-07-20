// Scroll to the top
(function() {
  var btn = document.getElementById('scroll-to-the-top');
  if (!btn) return;

  btn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  function setScrollState() {
    var threshold = window.innerWidth > 991 ? 900 : 400;
    btn.style.display = window.scrollY < threshold ? 'none' : 'block';
  }

  window.addEventListener('scroll', setScrollState);
  setScrollState();
})();

// Table of contents open/close (smooth)
document.querySelectorAll('.content-title').forEach(function(el) {
  var list = el.nextElementSibling;
  if (!list || !list.classList.contains('post_content_list')) return;

  // Remove inline display:none, use class instead
  list.style.display = '';
  if (el.classList.contains('closed')) {
    list.classList.add('toc-hidden');
  }

  el.addEventListener('click', function() {
    this.classList.toggle('closed');
    list.classList.toggle('toc-hidden');
  });
});

// FAQ toggle
document.querySelectorAll('.faq-line').forEach(function(el) {
  el.addEventListener('click', function() {
    var text = this.nextElementSibling;
    if (text && text.classList.contains('faq-text')) {
      text.classList.toggle('closed');
    }
    this.classList.toggle('closed');
  });
});

// Show modal banner after 10 seconds
(function() {
  var overlay = document.querySelector('.banner-modal-overlay');
  var modal = document.querySelector('.banner-modal');
  if (overlay && modal) {
    setTimeout(function() {
      overlay.style.display = 'block';
      modal.style.display = 'block';
    }, 10000);
  }

  // Close modal banner
  if (overlay) {
    overlay.addEventListener('click', function() {
      if (modal) modal.remove();
      overlay.remove();
    });
  }
  if (modal) {
    var closeBtn = modal.querySelector('.close');
    if (closeBtn) {
      closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        modal.remove();
        if (overlay) overlay.remove();
      });
    }
  }
})();

// Close bottom fixed banner
document.querySelectorAll('.banner-bottom-fixed .close').forEach(function(closeBtn) {
  closeBtn.addEventListener('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    var banner = this.closest('.banner-bottom-fixed');
    if (banner) banner.remove();
  });
});
