<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facilities - ICIT Mokokchung</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    
    
    .facility-image-row {
  display: flex;
  gap: 20px;
  margin: 20px 0;
  flex-wrap: wrap; /* makes it responsive */
}

.facility-image {
  flex: 1;
}

.facility-image img {
  width: 100%;
  height: 300px; /* keeps both images equal height */
  object-fit: cover;
  border-radius: 9px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
.facility-image img {
  transition: transform 0.4s ease, box-shadow 0.3s ease;
}
.facility-image {
  flex: 1 1 48%;
}

.facility-image img:hover {
  transform: scale(1.01);
  box-shadow: 0 6px 18px rgba(0,0,0,0.2);
}
.facility-list {
  padding-left: 18px;
}

.facility-list li {
  margin-bottom: 8px;
  line-height: 1.5;
}

@media (max-width: 768px) {
  .facility-image-row {
    flex-direction: column;
  }

  .facility-image img {
    height: 220px; /* slightly smaller for mobile */
  }
}
.hero-extra-content h2 {
  margin-top: 25px;
  margin-bottom: 10px;
}

.hero-extra-content p {
  margin-bottom: 15px;
  line-height: 1.6;
}
  </style>
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

  <!-- RIGHT CONTENT -->
  <div class="hero-right">
      <div class="hero-extra-content">
  <h1>Facilities</h1>

  <p>
    The Institute is equipped with the latest state-of-the-art
    technology and machinery to mould students into experts in
    their respective fields.
  </p>

  <!-- IMAGE PLACEHOLDER 1 -->
   <div class="facility-image-row">
  <div class="facility-image">
    <img src="assets/gallery/img1.jpg" alt="college">
  </div>

  <div class="facility-image">
    <img src="assets/gallery/campus.png" alt="Campus">
  </div>
</div>

  <h2>Key Facilities</h2>
  <ul class="facility-list">
    <li>Well-maintained hostels for boys & girls and staff quarters.</li>
    <li>Well-equipped library (soon to be e-enabled).</li>
    <li>Internet connectivity & Wi-Fi across campus.</li>
    <li>Government scholarships on merit basis.</li>
    <li>Industrial training & tours for final-year students.</li>
    <li>Minority Post Matric Central Scholarship.</li>
    <li>Games and sports facilities.</li>
    <li>Daily bus service from town to campus.</li>
    <li>Canteen facilities.</li>
  </ul>

  <!-- IMAGE PLACEHOLDER 2 -->
   
   <div class="facility-image-row">
  <div class="facility-image">
    <img src="assets/gallery/libary.png" alt="Library">
  </div>

  <div class="facility-image">
    <img src="assets/gallery/lab.png" alt="Computer Lab">
  </div>
</div>

  <h2>Learning Aids</h2>
  <p>
    We provide modern teaching aids to ensure effective and
    engaging learning experiences.
  </p>

  <ul class="facility-list">
    <li>Overhead Projectors</li>
    <li>Whiteboards</li>
    <li>Tutorial classes with sound systems</li>
    <li>Computer labs with latest configurations</li>
    <li>Advanced teaching techniques</li>
  </ul>
</div>

    </div>

  </div>

</section>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>