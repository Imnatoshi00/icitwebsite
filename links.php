<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Governmental Portals - ICIT Mokokchung</title>
  <link rel="stylesheet" href="css/style.css">
  <style>

    .links-wrapper {
      padding: 40px 50px 60px;
      background: #f7f8fa;
      min-height: 100%;
    }

    .links-title {
      font-size: 24px;
      font-weight: 700;
      color: #1a2a5e;
      border-left: 4px solid var(--gold);
      padding-left: 14px;
      margin-bottom: 8px;
    }

    .links-subtitle {
      font-size: 13px;
      color: #888;
      margin-bottom: 30px;
      padding-left: 18px;
    }

    .link-list {
      list-style: none;
      padding: 0;
      margin: 0;
      border: 1px solid #e0e4ec;
      border-radius: 10px;
      overflow: hidden;
      background: white;
    }

    .link-list li {
      border-bottom: 1px solid #e8ecf3;
      transition: background 0.2s ease;
    }

    .link-list li:last-child {
      border-bottom: none;
    }

    .link-list li:hover {
      background: #1a2a5e;
    }

    .link-list li:hover .link-number {
      color: var(--gold);
    }

    .link-list li:hover .link-name {
      color: #fff;
    }

    .link-list li:hover .link-visit {
      color: var(--gold);
      border-color: var(--gold);
    }

    .link-list a.link-row {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 16px 20px;
      text-decoration: none;
      color: inherit;
    }

    .link-number {
      font-size: 13px;
      font-weight: 700;
      color: var(--gold);
      min-width: 28px;
      text-align: center;
      background: #f0f4ff;
      border-radius: 50%;
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: color 0.2s;
    }

    .link-name {
      flex: 1;
      font-size: 15px;
      font-weight: 600;
      color: #1a2a5e;
      transition: color 0.2s;
    }

    .link-visit {
      font-size: 12px;
      font-weight: 600;
      color: #1a2a5e;
      border: 1.5px solid #1a2a5e;
      padding: 5px 14px;
      border-radius: 100px;
      white-space: nowrap;
      flex-shrink: 0;
      transition: color 0.2s, border-color 0.2s;
    }

    /* Mobile */
    @media (max-width: 768px) {
      .links-wrapper {
        padding: 24px 16px 40px;
      }

      .link-name { font-size: 13px; }

      .link-visit {
        font-size: 11px;
        padding: 4px 10px;
      }

      .link-number {
        width: 26px;
        height: 26px;
        font-size: 11px;
      }
    }

  </style>
</head>

<body class="home-page">

<?php include 'includes/header.php'; ?>

<section class="hero">

  <!-- LEFT SIDE PANEL -->
  <div class="hero-left" id="heroSidebar">

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

    <div class="links-wrapper">

      <h2 class="links-title">Governmental Portals</h2>
      <p class="links-subtitle">Official links to government and technical education portals</p>

      <ul class="link-list">

        <li>
          <a href="https://www.dtenagaland.org.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">1</span>
            <span class="link-name">Directorate Of Technical Education, Nagaland</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.aicte-india.org" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">2</span>
            <span class="link-name">All India Council For Technical Education (AICTE)</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.nitnagaland.ac.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">3</span>
            <span class="link-name">National Institute of Technology (NIT), Dimapur</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.npsc.co.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">4</span>
            <span class="link-name">Nagaland Public Service Commission (NPSC)</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.itngl.nic.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">5</span>
            <span class="link-name">Department of Information Technology, Nagaland</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.nagalanduniversity.ac.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">6</span>
            <span class="link-name">School of Engineering & Technology, Dimapur</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.nitttrkol.ac.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">7</span>
            <span class="link-name">NITTTR, Kolkata</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.nitttrbhopal.org.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">8</span>
            <span class="link-name">NITTTR, Bhopal</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.nielitkohima.nic.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">9</span>
            <span class="link-name">NIELIT, Kohima</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

        <li>
          <a href="https://www.nagaland.nic.in" class="link-row" target="_blank" rel="noopener noreferrer">
            <span class="link-number">10</span>
            <span class="link-name">Government of Nagaland</span>
            <span class="link-visit">Visit ↗</span>
          </a>
        </li>

      </ul>

    </div>

  </div>

</section>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>