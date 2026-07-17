<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Previous Question Papers</title>
<style>
body { font-family: 'Poppins', sans-serif; background: #f5f7fb; margin: 0; }

.page-title { text-align: center; padding: 40px 20px 20px; }
.page-title h1 { color: #1a2a5e; }
.page-title p { color: #555; margin-top: 4px; }

.department { max-width: 1100px; margin: 36px auto; padding: 0 20px; }

.department h2 {
  color: #1a2a5e;
  margin-bottom: 20px;
  border-left: 5px solid #1a2a5e;
  padding-left: 10px;
}

.semester-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

@media (max-width: 768px) {
  .semester-container { grid-template-columns: 1fr; }
}

.semester-card {
  background: white;
  padding: 18px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

.semester-card h3 {
  margin-bottom: 10px;
  color: #1a2a5e;
  border-bottom: 2px solid #eef1fa;
  padding-bottom: 6px;
}

.paper-list { list-style: none; padding: 0; }
.paper-list li { margin-bottom: 6px; }

.subject-toggle {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 6px 8px;
  border-radius: 5px;
  cursor: pointer;
  color: #333;
  font-size: 14px;
}
.subject-toggle:hover { background: #eef1fa; color: #1a2a5e; }
.toggle-arrow { font-size: 11px; color: #888; transition: transform 0.2s; }
.toggle-arrow.open { transform: rotate(180deg); }

.year-dropdown {
  display: none;
  flex-wrap: wrap;
  gap: 6px;
  padding: 6px 8px 8px;
}
.year-dropdown.open { display: flex; }

.year-btn {
  font-size: 11px;
  padding: 3px 10px;
  border: 1px solid #c5cde8;
  border-radius: 20px;
  background: white;
  color: #1a2a5e;
  text-decoration: none;
  cursor: pointer;
}
.year-btn:hover { background: #1a2a5e; color: white; }
</style>
</head>
<body>

<div class="page-title">
  <h1>Previous Question Papers</h1>
  <p>Select Department, Semester &amp; Year</p>
</div>

<?php

function renderSubject($name) {
    $years = ['2024', '2023', '2022', '2021', '2020'];
    $id = 'sub-' . preg_replace('/\W+/', '-', strtolower($name)) . '-' . uniqid();
    echo '<div>';
    echo '<div class="subject-toggle" onclick="toggleYears(\'' . $id . '\', this)">';
    echo '<span>' . htmlspecialchars($name) . '</span>';
    echo '<span class="toggle-arrow">&#9662;</span>';
    echo '</div>';
    echo '<div class="year-dropdown" id="' . $id . '">';
    foreach ($years as $yr) {
        echo '<a class="year-btn" href="#">' . $yr . '</a>';
    }
    echo '</div></div>';
}

function renderSemesterCard($semTitle, $subjects) {
    echo '<div class="semester-card">';
    echo '<h3>' . htmlspecialchars($semTitle) . '</h3>';
    echo '<ul class="paper-list">';
    foreach ($subjects as $subject) {
        echo '<li>';
        renderSubject($subject);
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
}

function renderDepartment($deptName, $semesters) {
    echo '<div class="department">';
    echo '<h2>' . htmlspecialchars($deptName) . '</h2>';
    echo '<div class="semester-container">';
    foreach ($semesters as $semTitle => $subjects) {
        renderSemesterCard($semTitle, $subjects);
    }
    echo '</div>';
    echo '</div>';
}

// ===== DATA =====

$cse = [
    'Semester 1' => [
        'Mathematics I',
        'Physics',
        'Basic Electrical Engineering',
        'Engineering Graphics',
    ],
    'Semester 2' => [
        'Mathematics II',
        'Programming in C',
        'Chemistry',
        'English Communication',
    ],
    'Semester 3' => [
        'Data Structures',
        'Digital Logic Design',
        'OOP with Java',
        'Discrete Mathematics',
    ],
    'Semester 4' => [
        'Operating Systems',
        'Database Management Systems',
        'Computer Networks',
        'Theory of Computation',
    ],
    'Semester 5' => [
        'Compiler Design',
        'Software Engineering',
        'Web Technologies',
        'Machine Learning',
    ],
    'Semester 6' => [
        'Cloud Computing',
        'Information Security',
        'Artificial Intelligence',
        'Project Work',
    ],
];

$ece = [
    'Semester 1' => [
        'Mathematics I',
        'Physics',
        'Basic Electronics',
        'Engineering Drawing',
    ],
    'Semester 2' => [
        'Mathematics II',
        'Electronic Devices & Circuits',
        'Network Theory',
        'English Communication',
    ],
    'Semester 3' => [
        'Analog Circuits',
        'Signals & Systems',
        'Digital Electronics',
        'Electromagnetic Fields',
    ],
    'Semester 4' => [
        'Communication Systems',
        'Control Systems',
        'VLSI Design',
        'Microprocessors & Microcontrollers',
    ],
    'Semester 5' => [
        'Digital Signal Processing',
        'Antenna & Wave Propagation',
        'Wireless Communication',
        'Embedded Systems',
    ],
    'Semester 6' => [
        'Optical Fiber Communication',
        'Radar & TV Engineering',
        'Internet of Things',
        'Project Work',
    ],
];

renderDepartment('Computer Science Engineering (CSE)', $cse);
renderDepartment('Electronics & Communication Engineering (ECE)', $ece);

?>

<script>
function toggleYears(id, toggleEl) {
    const dropdown = document.getElementById(id);
    const arrow = toggleEl.querySelector('.toggle-arrow');
    dropdown.classList.toggle('open');
    arrow.classList.toggle('open');
}
</script>

</body>
</html>