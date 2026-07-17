/* ═══════════════════════════════════════════════════════════════
   ICIT GALLERY — gallery.js
   Handles: nav toggle · filter bar offset · scroll fade-in ·
            gallery filter · lightbox (zoom / drag / pinch)
═══════════════════════════════════════════════════════════════ */

/* ── Mobile nav toggle + dynamic filter-bar sticky offset ─── */
const navToggle = document.getElementById('navToggle');
const mainNav   = document.getElementById('mainNav');
const filterBar = document.querySelector('.filter-bar');

navToggle.addEventListener('click', function () {
  mainNav.classList.toggle('open');
  requestAnimationFrame(updateFilterTop);
});

function updateFilterTop() {
  filterBar.style.top = document.querySelector('header').getBoundingClientRect().height + 'px';
}
updateFilterTop();
window.addEventListener('resize', updateFilterTop);


/* ── Fade-in on scroll ───────────────────────────────────── */
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => entry.target.classList.add('visible'), i * 70);
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.08 });

document.querySelectorAll('.gallery-item, .featured-item')
        .forEach(el => observer.observe(el));


/* ── Filter ──────────────────────────────────────────────── */
function filterGallery(cat, btn) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  // Update item count badge
  updateCount(cat);

  // Grid items
  document.querySelectorAll('.gallery-item').forEach(item => {
    item.style.display = (cat === 'all' || item.dataset.category === cat) ? 'block' : 'none';
  });

  // Featured items — toggle the Bootstrap column wrapper
  const featuredRow = document.querySelector('.featured-row');
  if (!featuredRow) return;

  featuredRow.querySelectorAll('[class*="col-"]').forEach(col => {
    const card = col.querySelector('.featured-item');
    if (!card) return;
    col.style.display = (cat === 'all' || card.dataset.category === cat) ? '' : 'none';
  });

  // Hide the whole row if nothing is visible
  const anyVisible = [...featuredRow.querySelectorAll('[class*="col-"]')]
                       .some(col => col.style.display !== 'none');
  featuredRow.style.display = anyVisible ? '' : 'none';
}

function updateCount(cat) {
  const badge = document.getElementById('gallery-count');
  if (!badge) return;
  const all = document.querySelectorAll('.gallery-item, .featured-item');
  const n   = cat === 'all'
    ? all.length
    : [...all].filter(el => el.dataset.category === cat).length;
  badge.textContent = n + ' ' + (n === 1 ? 'photo' : 'photos');
}

// Initialise count on page load
document.addEventListener('DOMContentLoaded', () => updateCount('all'));


/* ── Touch: tap to reveal overlay on mobile ──────────────── */
document.querySelectorAll('.gallery-item, .featured-item').forEach(item => {
  item.addEventListener('touchstart', function (e) {
    if (e.touches.length !== 1) return;
    const alreadyActive = this.classList.contains('touch-active');
    document.querySelectorAll('.touch-active').forEach(el => el.classList.remove('touch-active'));
    if (!alreadyActive) this.classList.add('touch-active');
  }, { passive: true });
});


/* ── Lightbox with scroll-zoom + drag + pinch ────────────── */
const lightbox    = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const zoomHint    = document.getElementById('zoomHint');

let scale = 1, originX = 50, originY = 50;
let translateX = 0, translateY = 0;
let isDragging = false, dragStartX = 0, dragStartY = 0;
let hintShown  = false;
const MIN_SCALE = 1, MAX_SCALE = 5;

function applyTransform() {
  lightboxImg.style.transformOrigin = `${originX}% ${originY}%`;
  lightboxImg.style.transform       = `scale(${scale}) translate(${translateX / scale}px, ${translateY / scale}px)`;
  lightboxImg.style.cursor          = scale > 1 ? 'grab' : 'zoom-in';
}

function resetZoom() {
  scale = 1; originX = 50; originY = 50;
  translateX = 0; translateY = 0;
  applyTransform();
}

// Open lightbox
document.querySelectorAll('.gallery-item, .featured-item').forEach(item => {
  item.addEventListener('click', () => {
    const img = item.querySelector('img');
    lightboxImg.src = img.src;
    document.getElementById('lightboxTitle').textContent = item.dataset.title || '';
    document.getElementById('lightboxDate').textContent  = item.dataset.date  || '';
    resetZoom();
    lightbox.classList.add('open');

    const scrollY = window.scrollY;
    document.body.style.position  = 'fixed';
    document.body.style.top       = `-${scrollY}px`;
    document.body.style.width     = '100%';
    document.body.dataset.scrollY = scrollY;

    if (!hintShown) {
      hintShown = true;
      setTimeout(() => {
        zoomHint.style.opacity = '1';
        setTimeout(() => { zoomHint.style.opacity = '0'; }, 2400);
      }, 300);
    }
  });
});

// Close lightbox
function closeLightbox(e) {
  if (!e || e.target === lightbox || (e.target && e.target.classList.contains('lightbox-close'))) {
    lightbox.classList.remove('open');
    resetZoom();
    const scrollY = parseInt(document.body.dataset.scrollY || '0', 10);
    document.body.style.position = '';
    document.body.style.top      = '';
    document.body.style.width    = '';
    window.scrollTo(0, scrollY);
  }
}

document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeLightbox({});
  if (e.key === '0')      resetZoom();
});
lightboxImg.addEventListener('dblclick', resetZoom);

// Scroll-wheel zoom
lightbox.addEventListener('wheel', e => {
  e.preventDefault();
  const rect = lightboxImg.getBoundingClientRect();
  originX = ((e.clientX - rect.left)  / rect.width)  * 100;
  originY = ((e.clientY - rect.top)   / rect.height) * 100;
  scale   = Math.min(MAX_SCALE, Math.max(MIN_SCALE, scale + (e.deltaY < 0 ? 0.15 : -0.15)));
  if (scale === MIN_SCALE) { translateX = 0; translateY = 0; }
  applyTransform();
}, { passive: false });

// Drag to pan
lightboxImg.addEventListener('mousedown', e => {
  if (scale <= 1) return;
  isDragging = true;
  dragStartX = e.clientX - translateX;
  dragStartY = e.clientY - translateY;
  lightboxImg.style.cursor = 'grabbing';
  e.preventDefault();
});
document.addEventListener('mousemove', e => {
  if (!isDragging) return;
  translateX = e.clientX - dragStartX;
  translateY = e.clientY - dragStartY;
  applyTransform();
});
document.addEventListener('mouseup', () => {
  if (!isDragging) return;
  isDragging = false;
  lightboxImg.style.cursor = scale > 1 ? 'grab' : 'zoom-in';
});

// Pinch to zoom
let lastTouchDist = null;
lightbox.addEventListener('touchstart', e => {
  if (e.touches.length === 2)
    lastTouchDist = Math.hypot(
      e.touches[0].clientX - e.touches[1].clientX,
      e.touches[0].clientY - e.touches[1].clientY
    );
}, { passive: true });

lightbox.addEventListener('touchmove', e => {
  if (e.touches.length === 2) {
    e.preventDefault();
    const dist = Math.hypot(
      e.touches[0].clientX - e.touches[1].clientX,
      e.touches[0].clientY - e.touches[1].clientY
    );
    if (lastTouchDist) {
      scale = Math.min(MAX_SCALE, Math.max(MIN_SCALE, scale * (dist / lastTouchDist)));
      if (scale === MIN_SCALE) { translateX = 0; translateY = 0; }
      applyTransform();
    }
    lastTouchDist = dist;
  }
}, { passive: false });

lightbox.addEventListener('touchend', () => { lastTouchDist = null; });
 
 
/* ── Scroll-to-top button ────────────────────────────────── */
(function () {
  const btn = document.getElementById('myBtn');
  if (!btn) return;
 
  window.addEventListener('scroll', function () {
    const past = document.body.scrollTop > 20 || document.documentElement.scrollTop > 20;
    btn.style.display = past ? 'flex' : 'none';
  }, { passive: true });
 
  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();
 