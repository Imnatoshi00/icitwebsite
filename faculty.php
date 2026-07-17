<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Directory</title>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/faculty.css">
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

    <div style="padding: 40px 40px 120px 40px;">

      <div class="page-title">
        <h1>Faculty & Staff Directory</h1>
      </div>

      <!-- ================= Science & Humanities ================= -->
      <section class="department">
        <h2>Science & Humanities</h2>
        <div class="faculty-container">

          <div class="faculty-card">
            <img src="assets/faculty/alipokla_11zon.jpg" alt="Mrs. Alipokla">
            <h3>Mrs. Alipokla</h3>
            <p><strong>Senior Lecturer</strong></p>
            <p>M.A (English), PGDTE</p>
            <p>Email: alipokla@gmail.com</p>
          </div>

          <div class="faculty-card">
            <img src="assets/faculty/meren_11zon.jpg" alt="Mr. L. Meren Ao">
            <h3>Mr. L. Meren Ao</h3>
            <p><strong>Senior Lecturer</strong></p>
            <p>M.Sc (Chemistry)</p>
            <p>Email: meren2010@gmail.com</p>
          </div>

          <div class="faculty-card">
            <img src="assets/faculty/ma'am achum.jpeg" alt="Mrs. Achumbeni T. Kithan">
            <h3>Mrs. Achumbeni T. Kithan</h3>
            <p><strong>Senior Lecturer</strong></p>
            <p>M.Sc (Mathematics)</p>
            <p>Email: ach_kithan@yahoo.in</p>
          </div>
          
          <div class="faculty-card">
            <img src="assets/faculty/kekuoselie_11zon.jpg" alt="Lec Kekuoselie">
            <h3>Mr Kekuoselie Dzuvichu</h3>
            <p><strong>Lecturer</strong></p>
            <p>B.E (CSE)</p>
            <p>Email: chemdokn@gmail.com</p>
          </div>

          <div class="faculty-card">
            <img src="assets/faculty/sir lisie.jpg" alt="Mr. Lisetsi">
            <h3>Mr. Lisetsi</h3>
            <p><strong>Demonstrator</strong></p>
            <p>B.A (Political Science), ITI</p>
            <p>Email: lisetsimongzar@gmail.com</p>
          </div>

        </div>
      </section>

      <!-- ================= Computer Science and Engineering ================= -->
      <section class="department">
        <h2>Computer Science & Engineering</h2>
        <div class="faculty-container">

          <div class="faculty-card">
            <img src="assets/faculty/likali_11zon.jpg" alt="Er. Licali K Yepthomi">
            <h3>Er. Licali K Yepthomi</h3>
            <p><strong>Senior Lecturer (HOD)</strong></p>
            <p>B.E (IT)</p>
            <p>Email: licali_yeptho@yahoo.com</p>
          </div>

              <div class="faculty-card">
            <img src="assets/faculty/temjen_11zon.jpg" alt="Er. Temjenmeren">
            <h3>Er. Temjenmeren Longchari</h3>
            <p><strong>Lecturer</strong></p>
            <p>B.E (CSE)</p>
            <p>Email: temjen@gmail.com</p>
          </div>

          <div class="faculty-card">
            <img src="assets/faculty/nangsham_11zon.jpg" alt="Er. Ngangsham N Chemdok">
            <h3>Er. Ngangsham N Chemdok</h3>
            <p><strong>Lecturer</strong></p>
            <p>B.E (CSE)</p>
            <p>Email: chemdokn@gmail.com</p>
          </div>

      

          <div class="faculty-card">
            <img src="assets/faculty/azhove_11zon.jpg" alt="Er. Azhove Tetseo">
            <h3>Er. Azhove Tetseo</h3>
            <p><strong>Lecturer</strong></p>
            <p>M.Tech (CSE), GATE</p>
            <p>Email: azhoveofficial@gmail.com</p>
          </div>
        
            <div class="faculty-card">
            <img src="assets/faculty/benjamin_11zon.jpg" alt="Benjamin chopy">
            <h3>Er. Benjamin chophy</h3>
            <p><strong>Instructor</strong></p>
            <p>B.Tech (CSE)</p>
            <p>Email: c</p>
          </div>
            
            <div class="faculty-card">
            <img src="assets/faculty/neisakienuo_11zon.jpg" alt="Neisakienuo Nelly Yhome">
            <h3>Er.Neisakienuo Nelly</h3>
            <p><strong>Instructor</strong></p>
            <p>B.Tech (IT) M.Tech(Information System) </p>
            <p>Email: c</p>
          </div>
        
            <div class="faculty-card">
            <img src="assets/faculty/ravinuo_11zon.jpg" alt="Ravino Tsuhah">
            <h3>Smti.Ravino Tsuhah</h3>
            <p><strong>Lecturer</strong></p>
            <p>B.sc(IT)</p>
            <p>Email: csdgsg@gmail.com</p>
          </div>

        </div>
      </section>

      <!-- ================= Electronics & Communication Engineering ================= -->
      <section class="department">
        <h2>Electronics & Communication Engineering</h2>
        <div class="faculty-container">

          <div class="faculty-card">
            <img src="assets/faculty/limameren_11zon.jpg" alt="Er. P. Limameren Chang">
            <h3>Er. P. Limameren Chang</h3>
            <p><strong>Senior Lecturer (HOD)</strong></p>
            <p>B.E (ECE), M.E (ECEE)</p>
            <p>Email: lhaungz@yahoo.com</p>
          </div>

          <div class="faculty-card">
            <img src="assets/faculty/kalitoli_11zon.jpg" alt="Er. Kalitoli Yeptho">
            <h3>Er. Kalitoli Yeptho</h3>
            <p><strong>Senior Lecturer</strong></p>
            <p>B.E (EEE)</p>
            <p>Email: ykalitoli@gmail.com</p>
          </div>
      <div class="faculty-card">
            <img src="assets/faculty/0_11zon.jpg" alt="Miss Temjenungla">
            <h3>Miss Temjenungla</h3>
            <p><strong>Lab Assistant, ECE Department</strong></p>
            <p>Diploma (IT)</p>
            <p>Email: lab@gmail.com</p>
          </div>
        </div>
      </section>
      
   <section class="department">
        <h2>Non Teaching Staff</h2>
        <div class="faculty-container">
                    <div class="faculty-card">
            <img src="assets/faculty/Easter_11zon.jpg" alt="Mrs. ">
            <h3>Ma'am Easter </h3>
            <p><strong>Librarian</strong></p>
           
            <p>Email: eg@gmail.com</p>
          </div>

              <div class="faculty-card">
            <img src="assets/faculty/bendang_11zon.jpg" alt="Mr.Bendang ">
            <h3>Mr Bendang </h3>
            <p><strong>LDA</strong></p>
           <p>email :eg@gmail.com</p>
          </div>

                 <div class="faculty-card">
            <img src="assets/faculty/chenithung_11zon.jpg" alt="Mrs. ">
            <h3>Mrs.Chenithung</h3>
            <p><strong>LDA</strong></p>
            <p>Email: eg@gmail.com</p>
          </div>

                 <div class="faculty-card">
            <img src="assets/faculty/mr.sangti.jpeg" alt="Mrs. ">
            <h3>Mrs.Sangti</h3>
            <p><strong>UDA</strong></p>
         
            <p>Email: eg@gmail.com</p>
          </div>

                 <div class="faculty-card">
            <img src="assets/faculty/mr.moa.jpeg" alt="Mrs. ">
            <h3>Mrs.Moasangba </h3>
            <p><strong>Peon</strong></p>
          
            <p>Email: eg@gmail.com</p>
          </div>


        </div>
      </section>
    </div>

  </div>

</section>


<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>