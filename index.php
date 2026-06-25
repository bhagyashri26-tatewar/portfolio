<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Portfolio | Bhagyashri</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar">
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
       <li><a href="#skills">Skills</a></li>
      <li><a href="#education">Education</a></li>
      <li><a href="#experience">Experience</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Home Section -->
<section id="home" class="home-section">
  <div class="home-content">
    <div class="home-image">
      <img src="images/bhagiii.jpg" alt="Bhagyashri's Photo">
    </div>
    <div class="home-text">
      <h1>Hi, There <br>I'm <span>Bhagyashri Tatewar</span></h1>
       <p>Web Developer | Designer | Programmer</p>
    </div>
  </div>
</section>

<!-- About Me Section -->
<section id="about" class="about-section">
  <div class="about-content">
    <div class="about-left">
      <h2>I'm Bhagyashri</h2>
      <h3>Full Stack Developer</h3>
      <p>
        I am a Full-Stack developer based in Nagpur, India. I am a Computer Science undergraduate from GNIT.<br> I am very passionate about improving my coding skills & developing applications & websites.<br> I build WebApps and Websites using PHP. Working for myself to improve my skills. Love to build Full-Stack websites.
      </p>
      <p><strong>Email:</strong> btatewar3@gmail.com</p>
      <p><strong>Place:</strong> Nagpur, India - 440013</p>
      <a href="assets/bhagyashri-tatewar.pdf" target="_blank" class="resume-btn">Resume</a>
    </div>

  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills-section">
  <div class="skills-container">
    <h2 class="skills-heading">
      <i class="fas fa-laptop-code"></i> Skills <span>& Abilities</span>
    </h2>

    <div class="skills-grid">
      <div class="skill-card"><img src="assets/icons/html5.png" alt="HTML5"><p>HTML5</p></div>
      <div class="skill-card"><img src="assets/icons/css3.png" alt="CSS3"><p>CSS3</p></div>
      <div class="skill-card"><img src="assets/icons/javascript.png" alt="JavaScript"><p>JavaScript</p></div>
      <div class="skill-card"><img src="assets/icons/php.jpeg" alt="PHP"><p>PHP</p></div>
      <div class="skill-card"><img src="assets/icons/laravel.png" alt="Laravel"><p>Laravel</p></div>
      <div class="skill-card"><img src="assets/icons/mysql.png" alt="MySQL"><p>MySQL</p></div>
    </div>
  </div>
</section>



<!-- Experience Section -->
<section id="experience" class="experience-section">
  <div class="experience-container">
    <h2 class="experience-heading">
      <i class="fas fa-briefcase"></i> Work <span>Experience</span>
    </h2>

      <!-- Experience Item 1 -->
    <div class="experience-card">
      <div class="exp-title">
        <h3>Web Developer</h3>
        <p class="exp-company">Anishree Technolgies LLP</p>
      </div>
      <p class="exp-duration">August 2025 – Present</p>
      <p class="exp-description">
       Full Stack Web Developer, proficient in handling frontend, backend and databases. Implemented projects using Laravel and Php from scratch .
      </p>
    </div>
    <!-- Experience Item 1 -->
    <div class="experience-card">
      <div class="exp-title">
        <h3>PHP Developer Intern</h3>
        <p class="exp-company">NextinCube Pvt. Ltd.</p>
      </div>
      <p class="exp-duration">December 2024 – February 2025</p>
      <p class="exp-description">
       Worked on internal tools using Laravel. Implemented form validation, CRUD operations, and integrated MySQL databases.
      </p>
    </div>

    <!-- Experience Item 2 -->
    <div class="experience-card">
      <div class="exp-title">
        <h3>Web Developer Intern</h3>
        <p class="exp-company">Internshala (Online Platform)</p>
      </div>
      <p class="exp-duration">August 2021 – September 2021</p>
      <p class="exp-description">
       Developed responsive web pages using HTML, CSS, JavaScript, and PHP. Collaborated with the backend team for API integration and built reusable components.
      </p>
    </div>

  </div>
</section>

<!-- Education Section -->
<section id="education" class="education-section">
  <div class="education-container">
    <h2 class="education-heading">
      <i class="fas fa-graduation-cap"></i> <span>My</span> Education
    </h2>
    <p class="edu-subtitle">Education is not the learning of facts, but the training of the mind to think.</p>

    <!-- Card 1 -->
    <div class="edu-card">
      <div class="edu-image">
        <img src="assets/icons/gnit.jpeg" alt="GNIT College">
      </div>
      <div class="edu-details">
        <h3>Bachelor of Computer Science</h3>
        <p>GuruNanak Institute of Technology, Nagpur | RTMNU</p>
        <p class="edu-status pursuing">2021 - 2025 | Completed</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="edu-card">
      <div class="edu-image">
        <img src="assets/icons/gpy.jpeg" alt="Poly College">
      </div>
      <div class="edu-details">
        <h3>Diploma | Technical</h3>
        <p>Govt. Polytechnic, Yavatmal | Maharashtra State Board of Technical Education</p>
        <p class="edu-status completed">2019 - 2022 | Completed</p>
      </div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section">
  <div class="projects-container">
    <h2 class="projects-heading">
      <i class="fas fa-code"></i> Projects <span>I've Built</span>
    </h2>

    <div class="projects-grid">
      
      <!-- Project 1 -->
      <div class="project-card">
        <h3>College Admission Portal</h3>
        <p class="project-description">
          A PHP-based system for student admission with document upload, admin approval, and student dashboard.
        </p>
        <p class="tech-stack"><strong>Tech Stack:</strong> PHP, MySQL, Bootstrap, JS</p>
        <div class="project-links">
          <a href="#" target="_blank" class="btn">Live Demo</a>
          <a href="#" target="_blank" class="btn">GitHub</a>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card">
        <h3>Find My Doctor</h3>
        <p class="project-description">
          A online appointment system of the doctor for the patients.
        </p>
        <p class="tech-stack"><strong>Tech Stack:</strong> PHP, JS , MYSQL</p>
        <div class="project-links">
          <a href="#" target="_blank" class="btn">Live Demo</a>
          <a href="#" target="_blank" class="btn">GitHub</a>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project-card">
        <h3>Student Attendance Management</h3>
        <p class="project-description">
         A java project which will manage the attendance of the students.
        </p>
        <p class="tech-stack"><strong>Tech Stack:</strong> Java</p>
        <div class="project-links">
          <a href="https://github.com/bhagyashri26-tatewar/find_my_doctor" target="_blank" class="btn">Live Demo</a>
          <a href="https://github.com/bhagyashri26-tatewar/StudentManagement" target="_blank" class="btn">GitHub</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="contact-container">
    <h2 class="contact-heading">
      <i class="fas fa-envelope"></i> Contact <span>Me</span>
    </h2>

    <div class="contact-content">
      <!-- Contact Info -->
      <div class="contact-info">
        <p><strong>Email:</strong> btatewar3@gmail.com</p>
        <p><strong>Phone:</strong> +91 8766772212</p>
        <p><strong>Location:</strong> Nagpur, Maharashtra</p>
        <div class="social-icons">
          <a href="https://github.com/bhagyashri26-tatewar" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/bhagyashri-tatewar-30900b222/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>

      <!-- Contact Form -->
  <div class="contact-form">
  <form action="https://api.web3forms.com/submit" method="POST">
    <!-- Hidden key -->
    <input type="hidden" name="access_key" value="d52ccdb6-3237-448c-b967-f70ce8d5d289">

    <!-- Visible fields -->
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</div>

    </div>
  </div>
</section>
<!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    <p>&copy; <?php echo date("Y"); ?> Bhagyashri Tatewar. All rights reserved.</p>
    <div class="footer-social">
      <a href="https://github.com/bhagyashri26-tatewar" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/in/bhagyashri-tatewar-30900b222/" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="mailto:btatewar3@gmail.com"><i class="fas fa-envelope"></i></a>
    </div>
  </div>
</footer>

</body>
</html>
