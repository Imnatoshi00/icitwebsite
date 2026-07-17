<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICIT Mokokchung - Admission</title>
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

  <!-- ARROW TOGGLE -->
  <button class="sidebar-toggle" id="sidebarToggle" title="Toggle Sidebar">&#9664;</button>

  <!-- RIGHT SIDE -->
  <div class="hero-right">

    <!-- IMAGE SECTION -->
    <div class="hero-image-wrapper">
      <img src="assets/gallery/building.png" alt="Admission" class="hero-img" loading="lazy" decoding="async">

      <div class="hero-overlay">
        <div class="hero-box">
          <h2>Admissions 2026</h2>
          <p>Admissions are open for the academic session 2026. Join us to build your future in technology.</p>
        </div>
        <div class="hero-box">
          <h2>Program Overview</h2>
          <p>This Diploma in CSE & ECE is designed to equip students with essential technical knowledge and practical training for future studies or employment in the IT industry</p>
        </div>

        <div class="hero-box">
          <h2>Build Your Career</h2>
          <p>Start your academic journey with us and move toward a bright future with programs designed to equip you with knowledge, skills, and confidence.</p>
        </div>
      </div>
    </div>

    <!-- PDF DOCUMENTS SECTION -->
    <div class="hero-extra-content">

      <h2>Admission Documents</h2>
      <p class="pdf-intro">Click to view or download the official admission documents.</p>

      <div class="pdf-grid">

        <!-- Fee Structure -->
        <div class="pdf-card">
          <div class="pdf-icon">📄</div>
          <div class="pdf-info">
            <h3>Fee Structure</h3>
            <p>Official fee structure for all diploma programs 2026.</p>
          </div>
          <div class="pdf-actions">
            <a href="assets/docs/feestructure2020.pdf" target="_blank" class="pdf-btn view">👁 View</a>
            <a href="assets/docs/feestructure2020.pdf" download class="pdf-btn download">⬇ Download</a>
          </div>
        </div>

        <!-- Admission Procedure -->
        <div class="pdf-card">
          <div class="pdf-icon">📄</div>
          <div class="pdf-info">
            <h3>Admission Procedure</h3>
            <p>Step-by-step guide to the admission process at ICIT.</p>
          </div>
          <div class="pdf-actions">
            <a href="assets/docs/admission-procedure.pdf" target="_blank" class="pdf-btn view">👁 View</a>
            <a href="assets/docs/admission-procedure.pdf" download class="pdf-btn download">⬇ Download</a>
          </div>
        </div>

        <!-- Intake Capacity -->
        <div class="pdf-card">
          <div class="pdf-icon">📄</div>
          <div class="pdf-info">
            <h3>Intake Capacity</h3>
            <p>Seat availability for each program and department.</p>
          </div>
          <div class="pdf-actions">
            <a href="assets/docs/intake.pdf" target="_blank" class="pdf-btn view">👁 View</a>
            <a href="assets/docs/intake.pdf" download class="pdf-btn download">⬇ Download</a>
          </div>
        </div>

        <!-- Application Form -->
        <div class="pdf-card">
          <div class="pdf-icon">📄</div>
          <div class="pdf-info">
            <h3>Application Form</h3>
            <p>Download and fill the official application form for 2026.</p>
          </div>
          <div class="pdf-actions">
            <a href="https://form.jotform.com/261071867686469" target="_blank" class="pdf-btn view">👁 View</a>
            <a href="https://form.jotform.com/261071867686469" download class="pdf-btn download">⬇ Download</a>
          </div>
        </div>

      </div>

    </div>
    <!-- END PDF SECTION -->

  </div>

</section>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>