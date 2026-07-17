<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICIT Mokokchung - Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="home-page">

<?php include 'includes/header.php'; ?>

<section class="hero">

  <!-- LEFT SIDE PANEL -->
  <div class="hero-left" id="heroSidebar">

    <!-- Close button inside sidebar (mobile only) -->
    <button class="sidebar-close" id="sidebarClose">✕ Close</button>

    <div class="hero-menu-list">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="desk.php">PRINCIPAL'S DESK</a></li>
        <li><a href="vision.php">VISION & MISSION</a></li>
        <li><a href="objectives.php">OBJECTIVES</a></li>
        
        <li><a href="activities.php">OTHER ACTIVITIES</a></li>
        <li><a href="facilities.php">FACILITIES</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="links.php">GOVERNMENTAL PORTALS</a></li>
      </ul>
    </div>

    <div class="hero-events">
      <h3>Event Announcement</h3>
      <ul>
        <li><a href="#">📢 Tech Fest 2026 – March 15</a></li>
        <li><a href="#">📢 Workshop on AI – March 22</a></li>
        <li><a href="#">📢 Admission Open 2026</a></li>
      </ul>
    </div>

  </div>

  <!-- DARK OVERLAY BACKDROP (mobile only) -->
  <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

  <!-- ARROW TOGGLE — sits on the edge of the sidebar -->
  <button class="sidebar-toggle" id="sidebarToggle" title="Toggle Sidebar">&#9664;</button>

  <!-- RIGHT SIDE -->
  <div class="hero-right">

    <div class="hero-image-wrapper">
      <img src="assets/gallery/home.png" alt="ICIT Mokokchung Campus" class="hero-img" loading="lazy" decoding="async">

      <div class="hero-overlay">
        <div class="hero-box">
          <h2>Innovation</h2>
          <p>Empowering students through modern technology.</p>
        </div>

        <div class="hero-box">
          <h2>Excellence</h2>
          <p>Committed to academic and professional growth.</p>
        </div>

        <div class="hero-box">
          <h2>Leadership</h2>
          <p>Building future leaders with strong values.</p>
        </div>
      </div>
    </div>

    <div class="hero-extra-content">
      <h2>About ICIT</h2>
      <p>
        ICIT Mokokchung is dedicated to providing quality technical education.
        Our institution focuses on innovation, skill development and leadership.
      </p>
      <p>
        We offer modern labs, experienced faculty, and industry exposure.
        Students are trained to meet real-world technological challenges.
      </p>
      <p>
        Admissions for 2026 are now open. Join us to build your future.
      </p>
    </div>

  </div>

</section>

<?php include 'includes/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>