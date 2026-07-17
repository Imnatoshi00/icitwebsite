<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICIT Mokokchung - About</title>
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
      <img src="assets/gallery/Reading Room.jpg" alt="About ICIT" class="hero-img" loading="lazy" decoding="async">

      <div class="hero-overlay">
      <div class="hero-box">
  <h2>About ICIT</h2>

  <p>
    Institute of Communication & Information Technology (ICIT), Mokokchung,
    is dedicated to providing quality technical education and developing
    skilled professionals in the field of communication and information technology.
  </p>

  <p>
    The institute promotes innovation, practical learning, and academic
    excellence through modern infrastructure, experienced faculty,
    and industry-oriented training programs.
  </p>

  <div class="hero-points">
    <span>✔ Quality Technical Education</span>
    <span>✔ Modern Computer Labs</span>
    <span>✔ Skilled Faculty Members</span>
    <span>✔ Practical Training</span>
  </div> <br>
<div>
    <h2>Designed and Developed by </h2>
    <p>Department of Computer Science and Engineering</p>
    <p>ICIT Mokokchung, Nagaland </p>
    <h2> Dev Team </h2>
    <p>Imnatoshi Jamir & Kenyuni Kath</p>
    <p>Final Year CSE 2026</p>
    <h2> Supervisors </h2>
    <p>Er. Azhove Tetseo & Er. Ngangsham N Chemdok</p>
</div>
</div>
      </div>
    </div>



  </div>


</section>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>