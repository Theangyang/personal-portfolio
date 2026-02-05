<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Personal Portfolio Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="name">ALTHEA ANGEL</div>

<nav>
  <a href="#about">About</a>
  <a href="#projects">Project details</a>
  <a href="#skills">Skills</a>
  <a href="#recommendations">Recommendations</a>

  <img src="image/home.png" id="homeIcon" alt="Home Icon">
</nav>

<section id="about">
  <h2>About Me</h2>

  <img src="image/althea-profile.png" class="profile" alt="Profile Photo">

  <h3 class="about-name">Althea Angel Capecenio</h3>

  <p class="about-text">
    I am an Information Technology student passionate about web development.
    I enjoy designing and building websites, learning new technologies, and
    continuously improving my technical and problem-solving skills.
  </p>
</section>

<section id="skills">
  <h2>Skills</h2>

  <div class="skills-container">
    <div class="skill-card">
      <img src="image/HTML.png" alt="HTML Logo">
      <p>HTML</p>
      <span>4 years of experience</span>
    </div>

    <div class="skill-card">
      <img src="image/CSS.png" alt="CSS Logo">
      <p>CSS</p>
      <span>3 years of experience</span>
    </div>

    <div class="skill-card">
      <img src="image/JS.png" alt="JavaScript Logo">
      <p>JavaScript</p>
      <span>2 years of experience</span>
    </div>

    <div class="skill-card">
      <img src="image/Java.png" alt="Java Logo">
      <p>Java</p>
      <span>1 year of experience</span>
    </div>

    <div class="skill-card">
      <img src="image/php.png" alt="PHP Logo">
      <p>PHP</p>
      <span>1 year of experience</span>
    </div>
  </div>
</section>

<section id="projects">
  <h2>Projects</h2>

  <div class="projects-container">
    <div class="project-card">
      <h3>Student Attendance Management System</h3>
      <p>A web-based system for tracking student attendance.</p>
    </div>

    <div class="project-card">
      <h3>Library Management System</h3>
      <p>A system for managing books and reservations.</p>
    </div>

    <div class="project-card">
      <h3>Personal Portfolio Website</h3>
      <p>A responsive website showcasing my skills and projects.</p>
    </div>
  </div>
</section>

<section id="recommendations">
  <h2>Recommendations</h2>

  <div class="recommendations-container"></div>

  <input type="text" id="recInput" placeholder="Write a recommendation">
  <br><br>
  <button onclick="addRecommendation()">Submit</button>
</section>

<script src="script.js"></script>
</body>
</html>
