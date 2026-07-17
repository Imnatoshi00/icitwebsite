document.addEventListener("DOMContentLoaded", function () {

  /* ================= NAV DROPDOWN ================= */
  const hamburger = document.querySelector(".hamburger");
  const dropdown = document.querySelector(".menu-dropdown");

  if (hamburger && dropdown) {
    hamburger.addEventListener("click", function () {
      dropdown.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
      if (!hamburger.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.remove("active");
      }
    });
  }

  /* ================= SIDEBAR TOGGLE ================= */
  const toggleBtn  = document.getElementById("sidebarToggle");
  const sidebar    = document.getElementById("heroSidebar");
  const backdrop   = document.getElementById("sidebarBackdrop");
  const closeBtn   = document.getElementById("sidebarClose");

  const isMobile = () => window.innerWidth <= 768;

  function openMobileSidebar() {
    sidebar.classList.add("mobile-open");
    backdrop.classList.add("active");
    toggleBtn.innerHTML = "&#9664;";
  }

  function closeMobileSidebar() {
    sidebar.classList.remove("mobile-open");
    backdrop.classList.remove("active");
    toggleBtn.innerHTML = "&#9654;";
  }

  if (toggleBtn && sidebar) {
    toggleBtn.addEventListener("click", function () {

      if (isMobile()) {
        // Mobile: slide in/out as overlay
        if (sidebar.classList.contains("mobile-open")) {
          closeMobileSidebar();
        } else {
          openMobileSidebar();
        }

      } else {
        // Desktop: collapse/expand inline
        const isCollapsed = sidebar.classList.toggle("collapsed");
        toggleBtn.classList.toggle("collapsed", isCollapsed);
        toggleBtn.innerHTML = isCollapsed ? "&#9654;" : "&#9664;";
      }
    });
  }

  // Close when clicking the backdrop
  if (backdrop) {
    backdrop.addEventListener("click", function () {
      closeMobileSidebar();
    });
  }

  // Close button inside sidebar
  if (closeBtn) {
    closeBtn.addEventListener("click", function () {
      closeMobileSidebar();
    });
  }

  // Handle resize — reset states if switching between mobile/desktop
  window.addEventListener("resize", function () {
    if (!isMobile()) {
      sidebar.classList.remove("mobile-open");
      backdrop.classList.remove("active");
    }
  });

  /* ================= LAZY IMAGE LOAD ================= */
  const lazyImages = document.querySelectorAll(".lazy-img");

  lazyImages.forEach(function (img) {
    if (img.complete) {
      img.classList.add("loaded");
    } else {
      img.addEventListener("load", function () {
        img.classList.add("loaded");
      });
    }
  });

});
/* ================= SIDEBAR LINK SCROLL ANIMATION ================= */
const sidebarLinks = document.querySelectorAll('.hero-left ul li a');

sidebarLinks.forEach((link, index) => {
  link.style.opacity = '0';
  link.style.transform = 'translateX(-20px)';
  link.style.transition = `opacity 0.3s ease ${index * 0.08}s, transform 0.3s ease ${index * 0.08}s`;
});

const sidebarObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const links = entry.target.querySelectorAll('ul li a');
      links.forEach((link, index) => {
        setTimeout(() => {
          link.style.opacity = '1';
          link.style.transform = 'translateX(0)';
        }, index * 80);
      });
    }
  });
}, { threshold: 0.1 });

const sidebar = document.getElementById('heroSidebar');
if (sidebar) {
  sidebarObserver.observe(sidebar);
}
document.querySelectorAll('.dropdown-toggle').forEach(btn => {
  btn.addEventListener('click', function (e) {
    e.stopPropagation();
    this.parentElement.classList.toggle('active');
  });
});

document.addEventListener('click', () => {
  document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
});
