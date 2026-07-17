<?php
// gallery.php reads $gallery_data keyed by filename (basename).
// Items without a matching file on disk show a placeholder image.

$gallery_metadata = [

  /* ── EVENTS ─────────────────────────────────────────────── */
  'pledge.jpeg' => [
    'category' => 'events',
    'title'    => 'National Voters Day 2026',
    'date'     => 'January 2026',
    'tag'      => 'Events',
    'desc'     => 'Students participating in essay writing as part of National Voters\' Day 2026.',
    'badge'    => 'Featured',
    'featured' => true,
  ],
  'pledge.jpeg' => [
    'category' => 'events',
    'title'    => 'Literary Day 2026',
    'date'     => 'April 2026',
    'tag'      => 'Events',
    'desc'     => 'Celebrating the rich tradition of literature and storytelling.',
    'badge'    => '',
    'featured' => false,
  ],

  /* ── ACADEMICS ───────────────────────────────────────────── */
  'Student Executives.jpg' => [
    'category' => 'academics',
    'title'    => 'Student Executive Members',
    'date'     => 'oct 2025',
    'tag'      => 'Academics',
    'desc'     => 'Welcome to the Class of 2025.',
  ],
  'faculty.JPG' => [
    'category' => 'academics',
    'title'    => 'Faculty staff',
    'date'     => 'March 2025',
    'tag'      => 'Academics',
    'desc'     => 'The Backbone of our Institute.',
  ],
  'industrial-training.jpeg' => [
    'category' => 'academics',
    'title'    => 'Industrial Training',
    'date'     => '2024',
    'tag'      => 'Academics',
    'desc'     => 'CSE Department Final Year Industrial Training at NIELIT, Dimapur.',
  ],
  'neqip-visit.jpeg' => [
    'category' => 'academics',
    'title'    => 'NEQIP Visit',
    'date'     => '2024',
    'tag'      => 'Academics',
    'desc'     => 'Visit of NEQIP Audit Team to ICIT Mokokchung.',
  ],
  'physics-lab.jpeg' => [
    'category' => 'academics',
    'title'    => 'Physics Lab',
    'date'     => 'February 2024',
    'tag'      => 'Academics',
    'desc'     => 'State-of-the-art Physics Laboratory.',
  ],
  'library.jpeg' => [
    'category' => 'academics',
    'title'    => 'Library',
    'date'     => '2023',
    'tag'      => 'Academics',
    'desc'     => 'Our well-stocked central library.',
  ],
  'chemistry-lab.jpeg' => [
    'category' => 'academics',
    'title'    => 'Chemistry Lab',
    'date'     => '2024',
    'tag'      => 'Academics',
    'desc'     => 'Fully equipped Chemistry Lab for students.',
  ],
  'language-lab.jpeg' => [
    'category' => 'academics',
    'title'    => 'Language Lab',
    'date'     => '2024',
    'tag'      => 'Academics',
    'desc'     => 'Modern Language Lab facility.',
  ],

  /* ── SPORTS ──────────────────────────────────────────────── */
  '2025 Sports Champions.jpg' => [
    'category' => 'sports',
    'title'    => 'Sports Meet 2025',
    'date'     => 'March 2025',
    'tag'      => 'Sports',
    'desc'     => '1st Inter Polytechnic Meet 2026 at Government Polytechnic Kohima Campus.',
  ],
  'basketball.jpeg' => [
    'category' => 'sports',
    'title'    => 'Basketball Championship',
    'date'     => 'December 2023',
    'tag'      => 'Sports',
    'desc'     => 'Inter-college Basketball Championship.',
  ],

  /* ── CAMPUS ──────────────────────────────────────────────── */
  'tutorial-room.jpeg' => [
    'category' => 'campus',
    'title'    => 'Tutorial Room',
    'date'     => '2023',
    'tag'      => 'Campus',
    'desc'     => 'Spacious tutorial rooms for interactive learning.',
  ],
  'guest-house.jpeg' => [
    'category' => 'campus',
    'title'    => 'Guest House',
    'date'     => '2023',
    'tag'      => 'Campus',
    'desc'     => 'On-campus guest house facility.',
  ],
  'main-building.jpeg' => [
    'category' => 'campus',
    'title'    => 'Main Campus Building',
    'date'     => '2023',
    'tag'      => 'Campus',
    'desc'     => 'The iconic main building of ICIT.',
  ],
  'cafeteria.jpeg' => [
    'category' => 'campus',
    'title'    => 'Cafeteria',
    'date'     => '2023',
    'tag'      => 'Campus',
    'desc'     => 'Student cafeteria and dining area.',
  ],

];