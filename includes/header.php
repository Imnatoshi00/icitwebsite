<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="main-header">
  <div class="header-wrapper">

    <!-- LEFT — LOGO -->
    <div class="logo">
      <a href="index.php">
        <img src="assets/gallery/ICIT.png" alt="ICIT Logo" class="logo-img">
        <div class="logo-text">
          <span class="logo-main">ICIT</span>
          <span class="logo-sub">Institute of Communication & Information Technology</span>
        </div>
      </a>
    </div>

    <!-- CENTER — NAV -->
    <nav class="nav-center">
      <a href="index.php" class="<?= ($currentPage=='index.php') ? 'active' : ''; ?>">Home</a>
      <a href="academics.php" class="<?= ($currentPage=='academics.php') ? 'active' : ''; ?>">Academics</a>
      <a href="admission.php" class="<?= ($currentPage=='admission.php') ? 'active' : ''; ?>">Admission</a>
      <a href="faculty.php"   class="<?= ($currentPage=='faculty.php')   ? 'active' : ''; ?>">Profile</a>
       <a href="about.php"   class="<?= ($currentPage=='about.php')   ? 'active' : ''; ?>">About</a>
      <a href="contact.php"   class="<?= ($currentPage=='contact.php')   ? 'active' : ''; ?>">Contact Us</a>
      
    </nav>


  </div>
</header>