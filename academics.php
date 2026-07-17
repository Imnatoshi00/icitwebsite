<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICIT Mokokchung - Academics</title>
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

    <!-- IMAGE SECTION -->
    <div class="hero-image-wrapper">
      <img src="assets/gallery/building2.png" alt="Academics" class="hero-img" loading="lazy" decoding="async">

      <div class="hero-overlay">
        <div class="hero-box">
          <h2>Academic Programs</h2>
          <p>ICIT offers diploma and certification programs in Information Technology and Communication Engineering.</p>
        </div>

        <div class="hero-box">
          <h2>Curriculum</h2>
          <p>Our curriculum focuses on practical learning, industry exposure, and technical skill development.</p>
        </div>

        <div class="hero-box">
          <h2>Examinations</h2>
          <p>Regular internal assessments and final examinations ensure academic excellence.</p>
        </div>
      </div>
    </div>

    <!-- EXTRA SCROLL CONTENT -->
    <div class="hero-extra-content">

      <h2>Diploma Programs</h2>
      <p>
        ICIT provides diploma programs in Information Technology and Electronics & Communication Engineering.
        The courses are designed to equip students with both theoretical knowledge and hands-on skills.
      </p>

      <h2>Laboratory Facilities</h2>
      <p>
        Our institute has well-equipped computer labs, electronics labs, and networking labs
        that support practical-based learning and experimentation.
      </p>

      <h2>Faculty Support</h2>
      <p>
        Experienced and dedicated faculty members guide students through academic and project-based learning.
        Regular mentoring sessions help students improve their technical and communication skills.
      </p>

      <h2>Academic Calendar</h2>
      <p>
        The academic year is divided into semesters with structured coursework,
        internal assessments, project submissions, and final examinations.
      </p>

      <h2>Industry Exposure</h2>
      <p>
        Students are encouraged to participate in workshops, technical seminars,
        and internship programs to gain real-world industry experience.
      </p>
     <div class="pdf-section">
        <h2>Download Documents</h2>
        <p class="pdf-intro">Click to view or download the official documents for admission.</p>

        <div class="pdf-grid">

          <!-- Course Offered -->
          <div class="pdf-card">
            <div class="pdf-icon">📄</div>
            <div class="pdf-info">
              <h3>Courses Offered</h3>
              <p>List of diploma courses available at ICIT Mokokchung.</p>
            </div>
            <div class="pdf-actions">
              <a href="assets/docs/COURSES.pdf" target="_blank" class="pdf-btn view">👁 View</a>
              <a href="assets/docs/COURSES.pdf" download class="pdf-btn download">⬇ Download</a>
            </div>
          </div>

        
          <!-- Curriculum -->
  <div class="pdf-card">
            <div class="pdf-icon">📄</div>
            <div class="pdf-info">
              <h3>Curriculum</h3>
              <p>The program curriculum emphasizes both classroom learning and practical application</p>
            </div>
            <div class="pdf-actions">
              <a href="assets/docs/syllabus.pdf" target="_blank" class="pdf-btn view">👁 View</a>
              <a href="assets/docs/syllabus.pdf" download class="pdf-btn download">⬇ Download</a>
            </div>
          </div>
            <div class="pdf-card">
            <div class="pdf-icon">📄</div>
            <div class="pdf-info">
              <h3>Previous year question paper</h3>
              <p>Review past papers to identify important topics and improve exam preparation</p>
            </div>
            <div class="pdf-actions">
              <a href="previous-questions.php" target="_blank" class="pdf-btn view">👁 View</a>
            </div>
          </div>

          <!-- Academic Calendar -->
          <div class="pdf-card">
            <div class="pdf-icon">📄</div>
            <div class="pdf-info">
              <h3>Academic Calendar</h3>
              <p>Schedule of academic events, exams, and holidays for 2026.</p>
            </div>
            <div class="pdf-actions">
              <a href="assets/docs/calender.pdf" target="_blank" class="pdf-btn view">👁 View</a>
              <a href="assets/docs/calender.pdf" download class="pdf-btn download">⬇ Download</a>
            </div>
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