<?php
//  TO ADD PHOTOS: drop files into images/ (or a subfolder).
//  To add metadata, add an entry in gallery-data.php.
//  Images marked 'featured' => true get a gold badge in grid.
// ============================================================

require_once 'gallery-data.php';

$img_folder  = 'assets/images/';
$allowed_ext = ['jpg','jpeg','png','gif','webp','avif'];

// ── Scan images/ including one level of subfolders ──────────
function scan_images(string $base, array $exts): array {
  $found = [];
  if (!is_dir($base)) return $found;
  foreach (scandir($base) as $f) {
    if ($f[0] === '.') continue;
    $path = $base . $f;
    if (is_file($path) && in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), $exts))
      $found[] = ['file' => $f, 'subfolder' => ''];
    elseif (is_dir($path . '/'))
      foreach (scandir($path . '/') as $sf) {
        if ($sf[0] === '.') continue;
        $sp = $path . '/' . $sf;
        if (is_file($sp) && in_array(strtolower(pathinfo($sf, PATHINFO_EXTENSION)), $exts))
          $found[] = ['file' => $f . '/' . $sf, 'subfolder' => $f];
      }
  }
  return $found;
}

// ── Filename → readable title ────────────────────────────────
function filename_to_title(string $file): string {
  return ucwords(str_replace(['-','_'], ' ', pathinfo(basename($file), PATHINFO_FILENAME)));
}

// ── Build item list ──────────────────────────────────────────
$all_items  = [];
$categories = [];

foreach (scan_images($img_folder, $allowed_ext) as $entry) {
  $file     = $entry['file'];
  $sub      = $entry['subfolder'];
  $basename = basename($file);
  $meta     = $gallery_metadata[$basename] ?? $gallery_metadata[$file] ?? [];

  $item = array_merge([
    'file'     => $file,
    'category' => $sub ?: 'general',
    'title'    => filename_to_title($file),
    'date'     => date('Y', filemtime($img_folder . $file)),
    'tag'      => $sub ? ucfirst($sub) : 'General',
    'desc'     => '',
    'badge'    => '',
    'featured' => false,
  ], $meta);

  // Featured items first, then by date descending
  $item['_sort'] = (!empty($item['featured']) ? '1_' : '0_') . $item['date'];
  $all_items[] = $item;

  $cat = strtolower($item['category']);
  if ($cat !== 'general' && !in_array($cat, $categories))
    $categories[] = $cat;
}

usort($all_items, fn($a,$b) => strcmp($b['_sort'], $a['_sort']));
sort($categories);

// ── Placeholder for missing images ──────────────────────────
function img_src(string $folder, string $file): string {
  if (!empty($file) && file_exists($folder . $file))
    return $folder . htmlspecialchars($file);
  return 'data:image/svg+xml,' . rawurlencode(
    '<svg xmlns="http://www.w3.org/2000/svg" width="400" height="400">'
    . '<rect width="100%" height="100%" fill="#e8e0d0"/>'
    . '<text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" '
    . 'font-family="sans-serif" font-size="14" fill="#8b7355">Image Coming Soon</text>'
    . '</svg>');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ICIT — Gallery</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/gstyle.css"/>
</head>
<body>
<div id="page-wrapper">

<!-- ════ HEADER ════ -->
<?php include 'includes/header.php'; ?>
<!-- ════ FILTER BAR ════ -->
<div class="filter-bar">
  <div class="filter-inner">
    <span class="filter-label">Filter by</span>
    <button class="filter-btn active" onclick="filterGallery('all',this)">All</button>
    <button class="filter-btn" onclick="filterGallery('events',this)">Events</button>
    <button class="filter-btn" onclick="filterGallery('academics',this)">Academics</button>
    <button class="filter-btn" onclick="filterGallery('sports',this)">Sports</button>
    <button class="filter-btn" onclick="filterGallery('campus',this)">Campus</button>
  </div>
</div>
<!-- ════ GALLERY ════ -->
<section class="gallery-section">
  <div class="gallery-wrap">

    <p class="gallery-count" id="galleryCount">
      <?= count($all_items) ?> photo<?= count($all_items) !== 1 ? 's' : '' ?>
    </p>

    <div class="gallery-grid" id="galleryGrid">

      <?php if (empty($all_items)): ?>
        <div class="gallery-empty">
          No images found — drop files into the <code>images/</code> folder.
        </div>
      <?php endif; ?>

      <?php foreach ($all_items as $item): ?>
      <div class="gallery-item"
           data-category="<?= htmlspecialchars(strtolower($item['category'])) ?>"
           data-title="<?= htmlspecialchars($item['title']) ?>"
           data-date="<?= htmlspecialchars($item['date']) ?>"
           data-desc="<?= htmlspecialchars($item['desc']) ?>">

        <img src="<?= img_src($img_folder, $item['file']) ?>"
             alt="<?= htmlspecialchars($item['title']) ?>"
             loading="lazy"/>

        <?php if (!empty($item['badge'])): ?>
          <span class="item-badge"><?= htmlspecialchars($item['badge']) ?></span>
        <?php endif; ?>

        <div class="gallery-overlay">
          <span class="overlay-tag"><?= htmlspecialchars($item['tag']) ?></span>
          <div class="overlay-title"><?= htmlspecialchars($item['title']) ?></div>
          <div class="overlay-date"><?= htmlspecialchars($item['date']) ?></div>
        </div>

      </div>
      <?php endforeach; ?>

    </div><!-- /gallery-grid -->
  </div>
</section>

<!-- ════ LIGHTBOX ════ -->
<div class="lightbox" id="lightbox" onclick="closeLightbox(event)">
  <div class="lightbox-inner">
    <button class="lightbox-close" onclick="closeLightbox()">✕</button>
    <img id="lightboxImg" src="" alt=""/>
    <div class="lightbox-info">
      <div class="lightbox-title" id="lightboxTitle"></div>
      <div class="lightbox-sub"   id="lightboxDate"></div>
    </div>
    <div class="zoom-hint" id="zoomHint">Scroll to zoom · Drag to pan · Double-click to reset</div>
  </div>
</div>

<!-- ════ FOOTER ════ -->
<?php include 'includes/footer.php'; ?>

</div><!-- /#page-wrapper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>

/* ── Filter bar top offset — syncs with sticky header height ── */
const filterBar = document.querySelector('.filter-bar');



/* ── Nav hamburger (shared header.php) ── */
const hamburger = document.querySelector('.hamburger');
const dropdown  = document.querySelector('.menu-dropdown');
if (hamburger && dropdown) {
  hamburger.addEventListener('click', () => dropdown.classList.toggle('active'));
  document.addEventListener('click', e => {
    if (!hamburger.contains(e.target) && !dropdown.contains(e.target))
      dropdown.classList.remove('active');
  });
}


/* ── Fade-in on scroll ───────────────────────────────────────── */
const io = new IntersectionObserver((entries) => {
  entries.forEach((e, i) => {
    if (e.isIntersecting) {
      setTimeout(() => e.target.classList.add('visible'), i * 50);
      io.unobserve(e.target);
    }
  });
}, { threshold: 0.05 });

document.querySelectorAll('.gallery-item').forEach(el => io.observe(el));


/* ── Filter ─────────────────────────────────────────────────── */
const countEl = document.getElementById('galleryCount');

function filterGallery(cat, btn) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  let visible = 0;
  document.querySelectorAll('.gallery-item').forEach(item => {
    const show = cat === 'all' || item.dataset.category === cat;
    item.style.display = show ? '' : 'none';
    if (show) visible++;
  });

  countEl.textContent = visible + ' photo' + (visible !== 1 ? 's' : '');
}


/* ── Touch overlay ───────────────────────────────────────────── */
document.querySelectorAll('.gallery-item').forEach(item => {
  item.addEventListener('touchstart', function(e) {
    if (e.touches.length !== 1) return;
    const was = this.classList.contains('touch-active');
    document.querySelectorAll('.touch-active').forEach(el => el.classList.remove('touch-active'));
    if (!was) this.classList.add('touch-active');
  }, { passive: true });
});


/* ── Lightbox ────────────────────────────────────────────────── */
const lightbox    = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const zoomHint    = document.getElementById('zoomHint');

let scale = 1, ox = 50, oy = 50, tx = 0, ty = 0;
let dragging = false, dx = 0, dy = 0;
let hinted = false;
const MIN = 1, MAX = 5;

function applyT() {
  lightboxImg.style.transformOrigin = `${ox}% ${oy}%`;
  lightboxImg.style.transform = `scale(${scale}) translate(${tx/scale}px,${ty/scale}px)`;
  lightboxImg.style.cursor = scale > 1 ? 'grab' : 'zoom-in';
}
function resetZoom() { scale=1; ox=50; oy=50; tx=0; ty=0; applyT(); }

// Open lightbox on click
document.querySelectorAll('.gallery-item').forEach(item => {
  item.addEventListener('click', () => {
    lightboxImg.src = item.querySelector('img').src;
    document.getElementById('lightboxTitle').textContent = item.dataset.title || '';
    document.getElementById('lightboxDate').textContent  = item.dataset.date  || '';
    resetZoom();
    lightbox.classList.add('open');

    const sy = window.scrollY;
    document.body.style.cssText = `position:fixed;top:-${sy}px;width:100%`;
    document.body.dataset.sy = sy;

    if (!hinted) {
      hinted = true;
      setTimeout(() => { zoomHint.style.opacity='1'; setTimeout(()=>{zoomHint.style.opacity='0';},2400); }, 400);
    }
  });
});

function closeLightbox(e) {
  if (e && e.target !== lightbox && !e.target.classList.contains('lightbox-close')) return;
  lightbox.classList.remove('open');
  resetZoom();
  const sy = parseInt(document.body.dataset.sy || 0);
  document.body.style.cssText = '';
  window.scrollTo(0, sy);
}

document.addEventListener('keydown', e => { if (e.key==='Escape') closeLightbox({target:lightbox}); if(e.key==='0') resetZoom(); });
lightboxImg.addEventListener('dblclick', resetZoom);

// Scroll zoom
lightbox.addEventListener('wheel', e => {
  e.preventDefault();
  const r = lightboxImg.getBoundingClientRect();
  ox = ((e.clientX - r.left) / r.width)  * 100;
  oy = ((e.clientY - r.top)  / r.height) * 100;
  scale = Math.min(MAX, Math.max(MIN, scale + (e.deltaY < 0 ? 0.15 : -0.15)));
  if (scale === MIN) { tx=0; ty=0; }
  applyT();
}, { passive: false });

// Drag pan
lightboxImg.addEventListener('mousedown', e => {
  if (scale <= 1) return;
  dragging=true; dx=e.clientX-tx; dy=e.clientY-ty;
  lightboxImg.style.cursor='grabbing'; e.preventDefault();
});
document.addEventListener('mousemove', e => { if(!dragging) return; tx=e.clientX-dx; ty=e.clientY-dy; applyT(); });
document.addEventListener('mouseup',   () => { if(!dragging) return; dragging=false; lightboxImg.style.cursor=scale>1?'grab':'zoom-in'; });

// Pinch zoom
let ptd = null;
lightbox.addEventListener('touchstart', e => {
  if (e.touches.length===2) ptd = Math.hypot(e.touches[0].clientX-e.touches[1].clientX, e.touches[0].clientY-e.touches[1].clientY);
}, { passive:true });
lightbox.addEventListener('touchmove', e => {
  if (e.touches.length!==2) return;
  e.preventDefault();
  const d = Math.hypot(e.touches[0].clientX-e.touches[1].clientX, e.touches[0].clientY-e.touches[1].clientY);
  if (ptd) { scale=Math.min(MAX,Math.max(MIN,scale*(d/ptd))); if(scale===MIN){tx=0;ty=0;} applyT(); }
  ptd=d;
}, { passive:false });
lightbox.addEventListener('touchend', () => { ptd=null; });

</script>
</body>
</html>