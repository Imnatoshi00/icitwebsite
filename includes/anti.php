<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Anti-Ragging Policy — ICIT</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Shared custom styles -->
  <link rel="stylesheet" href="gstyle.css"/>

  <!-- Page-specific styles -->
  <style>
    /* ── HERO BANNER ──────────────────────────────────────── */
    .policy-hero {
      background: var(--ink);
      padding: clamp(2.5rem, 6vw, 5rem) 0 clamp(2rem, 4vw, 3.5rem);
      position: relative;
      overflow: hidden;
    }
    .policy-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-linear-gradient(
        -45deg,
        transparent, transparent 40px,
        rgba(201,168,76,0.04) 40px,
        rgba(201,168,76,0.04) 80px
      );
      pointer-events: none;
    }
    .hero-inner { position: relative; z-index: 1; }

    .hero-eyebrow {
      font-size: 0.68rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.8rem;
      display: flex;
      align-items: center;
      gap: 0.7rem;
    }
    .hero-eyebrow::before {
      content: '';
      display: block;
      width: 24px;
      height: 1px;
      background: var(--gold);
    }
    .policy-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 5vw, 3.4rem);
      font-weight: 900;
      color: var(--cream);
      line-height: 1.08;
      margin-bottom: 1rem;
    }
    .policy-hero p.lead-text {
      font-size: 0.88rem;
      color: rgba(22, 22, 22, 0.52);
      max-width: 580px;
      line-height: 1.75;
    }
    .ref-badge {
      display: inline-block;
      margin-top: 1.4rem;
      padding: 0.42rem 1rem;
      border: 1px solid rgba(201,168,76,0.32);
      border-radius: 100px;
      font-size: 0.66rem;
      letter-spacing: 0.1em;
      color: var(--gold);
    }

    /* ── CONTENT WRAPPER ──────────────────────────────────── */
    .policy-body {
      padding: clamp(2rem, 5vw, 4rem) 0 clamp(3rem, 6vw, 5rem);
    }

    /* Sticky sidebar TOC */
    .toc-wrap {
      position: sticky;
      top: calc(var(--header-h) + 1.2rem);
    }
    .toc-card {
      background: #fff;
      border: 1px solid rgba(139,115,85,0.16);
      border-radius: var(--radius);
      padding: 1.4rem 1.5rem;
      box-shadow: 0 4px 18px var(--shadow);
    }
    .toc-card h6 {
      font-size: 0.62rem;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 1rem;
      margin-top: 0;
    }
    .toc-card ol {
      padding-left: 1.1rem;
      margin: 0;
    }
    .toc-card ol li {
      font-size: 0.79rem;
      color: var(--warm-mid);
      margin-bottom: 0.5rem;
      line-height: 1.4;
    }
    .toc-card ol li a {
      text-decoration: none;
      color: inherit;
      transition: color 0.2s;
    }
    .toc-card ol li a:hover { color: var(--ink); }

    /* Main policy card */
    .policy-card {
      background: #fff;
      border: 1px solid rgba(139,115,85,0.13);
      border-radius: var(--radius);
      padding: clamp(1.5rem, 4vw, 2.8rem);
      box-shadow: 0 4px 24px var(--shadow);
    }

    /* Section blocks */
    .policy-section {
      margin-bottom: 2.6rem;
      scroll-margin-top: calc(var(--header-h) + 5rem);
    }
    .policy-section:last-child { margin-bottom: 0; }

    .section-tag {
      font-size: 0.6rem;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.4rem;
    }
    .section-heading {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.1rem, 2vw, 1.42rem);
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 1rem;
      padding-bottom: 0.6rem;
      border-bottom: 2px solid var(--pale);
    }

    /* Prose */
    .policy-card p {
      font-size: 0.89rem;
      line-height: 1.88;
      color: #3a3028;
      margin-bottom: 0.9rem;
    }
    .policy-card p:last-child { margin-bottom: 0; }

    /* Definitions */
    .def-list {
      list-style: none;
      padding: 0;
      margin: 0 0 0.5rem;
    }
    .def-list li {
      font-size: 0.87rem;
      line-height: 1.8;
      color: #3a3028;
      padding: 0.65rem 0.9rem;
      border-left: 3px solid var(--pale);
      margin-bottom: 0.5rem;
      background: var(--cream);
      border-radius: 0 var(--radius) var(--radius) 0;
    }
    .def-list li strong { color: var(--ink); font-weight: 600; }

    /* Ragging acts (a–i) */
    .acts-list {
      list-style: none;
      padding: 0;
      margin: 0 0 0.5rem;
      counter-reset: acts;
    }
    .acts-list li {
      counter-increment: acts;
      display: flex;
      gap: 0.85rem;
      font-size: 0.87rem;
      line-height: 1.8;
      color: #3a3028;
      margin-bottom: 0.55rem;
      padding: 0.65rem 0.9rem;
      border-radius: var(--radius);
      background: #fdfaf5;
      border: 1px solid rgba(139,115,85,0.11);
    }
    .acts-list li::before {
      content: counter(acts, lower-alpha) ".";
      font-weight: 700;
      color: var(--rust);
      flex-shrink: 0;
      min-width: 1.3rem;
    }

    /* Punishment grid */
    .punishment-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.55rem;
      margin-bottom: 0.9rem;
    }
    @media (max-width: 575.98px) { .punishment-grid { grid-template-columns: 1fr; } }

    .punishment-item {
      display: flex;
      align-items: flex-start;
      gap: 0.6rem;
      background: #fdfaf5;
      border: 1px solid rgba(139,115,85,0.11);
      border-radius: var(--radius);
      padding: 0.65rem 0.85rem;
      font-size: 0.82rem;
      color: #3a3028;
      line-height: 1.5;
    }
    .p-num {
      background: var(--rust);
      color: #fff;
      font-size: 0.6rem;
      font-weight: 700;
      min-width: 20px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* Appeal list */
    .appeal-list {
      list-style: none;
      padding: 0;
      margin: 0.5rem 0 0.9rem;
    }
    .appeal-list li {
      font-size: 0.87rem;
      line-height: 1.75;
      color: #3a3028;
      padding: 0.5rem 0.9rem;
      border-left: 3px solid var(--gold);
      margin-bottom: 0.42rem;
      background: #fffef9;
      border-radius: 0 var(--radius) var(--radius) 0;
    }

    /* Alert / notice box */
    .notice-box {
      background: rgba(181,69,27,0.06);
      border: 1px solid rgba(181,69,27,0.2);
      border-left: 4px solid var(--rust);
      border-radius: var(--radius);
      padding: 0.9rem 1.1rem;
      font-size: 0.85rem;
      color: #5a2a1a;
      line-height: 1.75;
      margin-bottom: 0.9rem;
    }
    .notice-box strong { color: var(--rust); }

    /* Divider */
    hr.sec-div {
      border: none;
      border-top: 1px solid var(--pale);
      margin: 2rem 0;
    }
  </style>
</head>
<body>
<div id="page-wrapper">


<section class="policy-hero">
  <div class="container hero-inner">
    <div class="hero-eyebrow">ICIT Mokokchung</div>
    <h1>Anti-Ragging<br/>Policy</h1>
    <p class="lead-text">
      In pursuance with AICTE Notification F.No.37-3/Legal/AICTE/2009 and directions of the
      Hon'ble Supreme Court to prohibit, prevent and eliminate the scourge of ragging
      in all higher education institutions across the country.
    </p>
    <span class="ref-badge">AICTE Act, 1987 &nbsp;&middot;&nbsp; Section 23 &nbsp;&middot;&nbsp; Notified 01-07-2009</span>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════
     POLICY BODY
════════════════════════════════════════════════════════ -->
<div class="policy-body">
  <div class="container">
    <div class="row g-4 align-items-start">

      <!-- ── SIDEBAR TABLE OF CONTENTS (desktop only) ── -->
      <div class="col-lg-3 d-none d-lg-block">
        <div class="toc-wrap">
          <div class="toc-card">
            <h6>Contents</h6>
            <ol>
              <li><a href="#preamble">Preamble</a></li>
              <li><a href="#definitions">Definitions</a></li>
              <li><a href="#what-is-ragging">What Constitutes Ragging</a></li>
              <li><a href="#actions">Actions &amp; Punishments</a></li>
              <li><a href="#appeal">Appeal Process</a></li>
              <li><a href="#reporting">Reporting Obligations</a></li>
            </ol>
          </div>
        </div>
      </div>

      <!-- ── MAIN CONTENT ── -->
      <div class="col-12 col-lg-9">
        <div class="policy-card">

          <!-- § 1 — PREAMBLE -->
          <div class="policy-section" id="preamble">
            <div class="section-tag">Section 01</div>
            <h2 class="section-heading">Preamble</h2>
            <p>
              The Institute of Communication and Information Technology, Mokokchung, in pursuance
              with AICTE Notification F.No.37-3/Legal/AICTE/2009 Dated 01-07-2009 under Section 23
              read with Section 10(b), (g), (p) and (q) of AICTE Act, 1987, the All India Council
              for Technical Education (AICTE) and directions of the Hon'ble Supreme Court in
              SLP No. 24295 of 2006 dated 16-05-2007 and in Civil Appeal number 887 of 2009,
              dated 08-05-2009 brings forth these Regulations.
            </p>
            <p>
              The objective is to prohibit, prevent and eliminate the scourge of ragging —
              including any conduct by any student whether by words spoken or written or by an act
              which has the effect of teasing, treating or handling with rudeness a fresher or any
              other student, or indulging in rowdy or undisciplined activities which causes or is
              likely to cause annoyance, hardship or psychological harm, or to raise fear or
              apprehension thereof in any fresher or any other student — in all higher education
              institutions in the country, and thereby to provide for the healthy development,
              physically and psychologically, of all students.
            </p>
          </div>

          <hr class="sec-div"/>

          <!-- § 2 — DEFINITIONS -->
          <div class="policy-section" id="definitions">
            <div class="section-tag">Section 02</div>
            <h2 class="section-heading">Definitions</h2>
            <ul class="def-list">
              <li><strong>(a) "Act"</strong> — The All India Council for Technical Education Act 1987 (52 of 1987).</li>
              <li><strong>(b) "Technical Institution"</strong> — An institution of Government, Government Aided and Private (self financing) conducting courses/programmes in Engineering, Technology including MCA, Architecture, Town Planning, Management, Pharmacy, Hotel Management &amp; Catering Technology, Applied Arts &amp; Crafts and such other programmes notified by the Council from time to time.</li>
              <li><strong>(c) "University"</strong> — A University defined under clause (f) of section 2 of the University Grants Commission Act, 1956, and includes an institution deemed to be a University under section 3 of that Act.</li>
              <li><strong>(d) "Academic Year"</strong> — The period from the commencement of admission of students in any course of study in the institution up to the completion of academic requirements for that particular year.</li>
              <li><strong>(e) "Head of the Institution"</strong> — The Vice-Chancellor in case of a university or a deemed to be university, the Principal or the Director or such other designation as the executive head of the institution or the college is referred.</li>
              <li><strong>(f) "Fresher"</strong> — A student who has been admitted to an institution and who is undergoing his/her first year of study in such institution.</li>
              <li><strong>(g)</strong> Words and expressions used and not defined herein but defined in the Act or in the General Clauses Act, 1887, shall have the meanings respectively assigned to them in the Act or in the General Clauses Act, 1887, as the case may be.</li>
              <li><strong>(h)</strong> All other words and expressions used herein and not defined but defined in the All India Council for Technical Education Act, 1987 (52 of 1987), shall have the meanings respectively assigned to them in the said Act.</li>
            </ul>
          </div>

          <hr class="sec-div"/>

          <!-- § 3 — WHAT CONSTITUTES RAGGING -->
          <div class="policy-section" id="what-is-ragging">
            <div class="section-tag">Section 03</div>
            <h2 class="section-heading">What Constitutes Ragging</h2>
            <p>Ragging constitutes one or more of any of the following acts:</p>
            <ul class="acts-list">
              <li>Any conduct by any student or students whether by words spoken or written or by an act which has the effect of teasing, treating or handling with rudeness a fresher or any other student.</li>
              <li>Indulging in rowdy or undisciplined activities by any student or students which causes or is likely to cause annoyance, hardship, physical or psychological harm or to raise fear or apprehension thereof in any fresher or any other student.</li>
              <li>Asking any student to do any act which such student will not in the ordinary course do and which has the effect of causing or generating a sense of shame, or torment or embarrassment so as to adversely affect the physique or psyche of such fresher or any other student.</li>
              <li>Any act by a senior student that prevents, disrupts or disturbs the regular academic activity of any other student or a fresher.</li>
              <li>Exploiting the services of a fresher or any other student for completing the academic tasks assigned to an individual or a group of students.</li>
              <li>Any act of financial extortion or forceful expenditure burden put on a fresher or any other student by students.</li>
              <li>Any act of physical abuse including all variants of it: sexual abuse, homosexual assaults, stripping, forcing obscene and lewd acts, gestures, causing bodily harm or any other danger to health or person.</li>
              <li>Any act or abuse by spoken words, emails, posts, public insults which would also include deriving perverted pleasure, vicarious or sadistic thrill from actively or passively participating in the discomfiture to fresher or any other student.</li>
              <li>Any act that affects the mental health and self-confidence of a fresher or any other student with or without an intent to derive a sadistic pleasure or showing off power, authority or superiority by a student over any fresher or any other student.</li>
            </ul>
          </div>

          <hr class="sec-div"/>

          <!-- § 4 — ACTIONS & PUNISHMENTS -->
          <div class="policy-section" id="actions">
            <div class="section-tag">Section 04</div>
            <h2 class="section-heading">Actions &amp; Punishments</h2>

            <p>The Institute will strictly monitor any ragging and take action as per the guidelines by AICTE through the Anti-Ragging Committee of the Institute.</p>

            <div class="notice-box">
              <strong>Mandatory FIR:</strong> Every single incident of ragging — a First Information Report (FIR)
              <strong>must</strong> be filed without exception by the institutional authorities with the local police authorities.
            </div>

            <p>
              The punishment to be meted out to persons indulged in ragging has to be exemplary and
              justifiably harsh to act as a deterrent against recurrence of such incidents. The
              Anti-Ragging Committee shall take an appropriate decision depending on the facts and
              gravity of each incident. Possible punishments include any one or any combination of the following:
            </p>

            <div class="punishment-grid">
              <div class="punishment-item"><span class="p-num">i</span>Cancellation of admission.</div>
              <div class="punishment-item"><span class="p-num">ii</span>Suspension from attending classes.</div>
              <div class="punishment-item"><span class="p-num">iii</span>Withholding / withdrawing scholarship, fellowship and other benefits.</div>
              <div class="punishment-item"><span class="p-num">iv</span>Debarring from appearing in any test, examination or other evaluation process.</div>
              <div class="punishment-item"><span class="p-num">v</span>Withholding results.</div>
              <div class="punishment-item"><span class="p-num">vi</span>Debarring from representing the institution in any regional, national or international meet, tournament, youth festival, etc.</div>
              <div class="punishment-item"><span class="p-num">vii</span>Suspension / expulsion from the hostel.</div>
              <div class="punishment-item"><span class="p-num">viii</span>Rustication from the institution for a period ranging from 1 to 4 semesters.</div>
              <div class="punishment-item"><span class="p-num">ix</span>Expulsion from the institution and consequent debarring from admission to any other institution.</div>
              <div class="punishment-item"><span class="p-num">x</span><strong>Collective punishment</strong> — when persons committing or abetting ragging are not identified, collective punishment shall apply as a deterrent.</div>
            </div>
          </div>

          <hr class="sec-div"/>

          <!-- § 5 — APPEAL PROCESS -->
          <div class="policy-section" id="appeal">
            <div class="section-tag">Section 05</div>
            <h2 class="section-heading">Appeal Process</h2>
            <p>An appeal against the order of punishment by the Anti-Ragging Committee shall lie as follows:</p>
            <ul class="appeal-list">
              <li><strong>Institution affiliated to or constituent part of a University</strong> — Appeal to the Vice-Chancellor of the University.</li>
              <li><strong>Order of a University</strong> — Appeal to its Chancellor.</li>
              <li><strong>Institution of National Importance created by an Act of Parliament</strong> — Appeal to the Chairman or Chancellor of the institution, as the case may be.</li>
            </ul>
          </div>

          <hr class="sec-div"/>

          <!-- § 6 — REPORTING OBLIGATIONS -->
          <div class="policy-section" id="reporting">
            <div class="section-tag">Section 06</div>
            <h2 class="section-heading">Reporting Obligations</h2>
            <p>
              The institutional authorities shall intimate the incidents of ragging occurred in their
              premises along with actions taken to the Council from time to time.
            </p>
            <div class="notice-box">
              <strong>Zero Tolerance:</strong> ICIT Mokokchung maintains a strict zero-tolerance
              policy towards ragging in any form. Any student found guilty of ragging or abetting
              ragging shall face the full force of disciplinary measures outlined above. Students
              are encouraged to report any incident immediately to the Anti-Ragging Committee or
              the nearest institutional authority.
            </div>
          </div>

        </div><!-- /policy-card -->
      </div><!-- /col -->

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /policy-body -->


<!-- ════════════════════════════════════════════════════════
     FOOTER
════════════════════════════════════════════════════════ -->
<footer>
  <div class="container footer-inner">
    <div class="row g-4">
      <div class="col-12 col-md-6 footer-brand">
        <div class="logo">
          <span class="logo-main">ICIT</span>
          <span class="logo-sub">Institute of Communication and Information Technology</span>
        </div>
        <p>Shaping minds, building futures.</p>
      </div>
      <div class="col-12 col-md-3 footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li>Other Activities</li>
          <li><a href="anti-ragging.php" style="color:inherit;text-decoration:none;">Anti Ragging Policy</a></li>
          <li>AICTE Approval</li>
        </ul>
      </div>
      <div class="col-12 col-md-3 footer-col">
        <h4>Contact</h4>
        <ul>
          <li>Mokokchung, Nagaland</li>
          <li>info@icit.edu.in</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>&copy; 2014 ICIT. All rights reserved.</span>
    <span>Privacy Policy &middot; Terms of Use</span>
  </div>
</footer>

</div><!-- /#page-wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  /* Mobile nav */
  document.getElementById('navToggle').addEventListener('click', function () {
    document.getElementById('mainNav').classList.toggle('open');
  });

  /* TOC smooth scroll with sticky header offset */
  document.querySelectorAll('.toc-card a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        const top = target.getBoundingClientRect().top + window.scrollY - 90;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });
</script>
</body>
</html>