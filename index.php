<?php include "includes/header.php"; ?>

<!-- HERO SECTION -->
<section id="home" class="hero">
  <div class="container hero-content">

    <!-- LEFT TEXT -->
    <div class="hero-text">
      <p class="tag">B.TECH CSE | 3rd YEAR</p>
      <h1>Hi, I'm <span>P.V. SREE CHARAN REDDY</span></h1>
      <p class="subtitle">
        Passionate about Web Development, Cloud Computing & Problem Solving.
      </p>

      <div class="hero-buttons">
        <a href="#projects" class="btn primary-btn">View Projects</a>
        <a href="#contact" class="btn secondary-btn">Contact Me</a>
      </div>
    </div>

    <!-- RIGHT CARD WITH PHOTO -->
    <div class="hero-card">

      <div class="hero-photo">
        <img src="images/profile.jpg" alt="Profile Photo">
      </div>

      <p class="hero-role">Web Developer</p>
      <p class="hero-desc">
        I build clean, responsive and functional web applications using modern tech.
      </p>

    </div>

  </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="section">
  <div class="container">
    <h2 class="section-title">About Me</h2>
    <p class="section-subtitle">A quick introduction</p>

    <div class="about-grid">
      <div>
        <p>
          I'm a 3rd-year B.Tech CSE student with a strong interest in full-stack
          development. I enjoy turning ideas into working applications.
        </p>
        <p>
          I am currently learning cloud computing, PHP, MySQL and advanced JavaScript.
        </p>
      </div>

      <div class="about-info">
        <p><strong>College:</strong> GITAM UNIVERSITY</p>
        <p><strong>Location:</strong> Telangana</p>
        <p><strong>Languages:</strong> English, Telugu</p>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="section grey">
  <div class="container">
    <h2 class="section-title">Skills</h2>
    <p class="section-subtitle">Technologies I work with</p>

    <div class="skills-grid">
      <div class="skill-card"><h3>Frontend</h3><p>HTML5, CSS3, JS</p></div>
      <div class="skill-card"><h3>Backend</h3><p>PHP, MySQL</p></div>
      <div class="skill-card"><h3>Programming</h3><p>C, Python, DSA</p></div>
      <div class="skill-card"><h3>Tools</h3><p>Git, GitHub, XAMPP</p></div>
    </div>
  </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="section">
  <div class="container">
    <h2 class="section-title">Projects</h2>
    <p class="section-subtitle">Some of the work I have done</p>

    <div class="projects-grid">
      <article class="project-card">
        <h3>Online Bookstore</h3>
        <p>A clean bookstore website with search & cart system.</p>
        <p class="tech">Tech: PHP, MySQL, JS</p>
      </article>

      <article class="project-card">
        <h3>Student Management System</h3>
        <p>CRUD system for managing students and marks.</p>
        <p class="tech">Tech: PHP, MySQL, Bootstrap</p>
      </article>

      <article class="project-card">
        <h3>Portfolio Website</h3>
        <p>This portfolio showcasing my work.</p>
        <p class="tech">Tech: HTML, CSS, JS</p>
      </article>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="section grey">
  <div class="container">
    <h2 class="section-title">Contact</h2>
    <p class="section-subtitle">Feel free to reach out!</p>

    <div class="contact-grid">
      <form id="contactForm" class="contact-form" action="save_contact.php" method="POST">
        <div class="form-group">
          <label>Name *</label>
          <input type="text" id="name" name="name">
        </div>

        <div class="form-group">
          <label>Email *</label>
          <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
          <label>Message *</label>
          <textarea id="message" name="message" rows="4"></textarea>
        </div>

        <button type="submit" class="btn primary-btn">Send</button>
      </form>

      <div class="contact-info">
        <h3>Reach Me At</h3>
        <p><strong>Email:</strong> pvcharan8@gmail.com</p>
        <p><strong>GitHub:</strong> github.com/pvcharan-ui</p>
        <p><strong>LinkedIn:</strong> www.linkedin.com/in/pv-charan-28b972301</p>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
