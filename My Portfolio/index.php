<?php

session_start();

$alerts = $_SESSION['alerts'] ?? [];

unset($_SESSION['alerts']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
</head>
<body>

    <header>
        <div class="header-container">
            <span>Hello Customer</span>
        </div>
    </header>

    <main>
        <div class="main-container">

            <?php if(!empty($alerts)): ?>
            <div class="alert-box">
                <?php foreach($alerts as $alert): ?>
                <div class="alert <?= $alert['type']; ?>">
                    <i class="<?= $alert['type'] === 'success' ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-xmark'; ?>"></i>
                    <span><?= $alert['message']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <img src="mainImg/moon2.png" id="moon" alt="A photo of a moon">
            <img src="mainImg/stars1.png" id="stars" alt="A photo of stars">
            <div class="intro-container-box"></div>
            <div class="content">
                <h1 data-text="Basel Abd-Elhamid">Basel Abd-Elhamid</h1>
                <h3>Full Stack Web Developer</h3>
                <p>Crafting dynamic full stack websites which contains the content, login and register with modern web technologies especialy react.js</p>
                <div class="btn-container">
                    <button type="button" class="projectbtn btn" id="probtn">View Projects</button>
                    <button type="button" class="btn" id="aboutBtn"><i class="fa-regular fa-address-card"></i> <span>About</span></button>
                    <button type="button" class="btn" id="contBtn"><i class="fa-regular fa-envelope"></i> <span>Contact</span></button>
                    <a href="./My resume file/CV.pdf" download="Basel's CV" class="btn down"><i class="fa-solid fa-download"></i> <span>Download CV</span></a>
                </div>
                <div class="links">
                    <a href="https://github.com/Basel-AR" class="github"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/basel-abdo17/" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <div class="cards-container">
                    <div class="card">
                        <h2>5+</h2>
                        <p><span>Projects</span> Completed</p>
                    </div>
                    <div class="card">
                        <h2>2+</h2>
                        <p><span>Years</span> Experience</p>
                    </div>
                    <div class="card">
                        <h2>3+</h2>
                        <p><span>Tech</span> Used</p>
                    </div>
                </div>
            </div>
            <section class="hideRight" id="projects">
                <button type="button" title="Back to home" class="backBtn" id="backBtn"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="projects-container">
                    <a href="https://basel-youtube.netlify.app/" title="Click to view" class="project-card">
                        <img src="projectImg/project1.png" alt="">
                        <h2>Youtube</h2>
                        <p>A similar version of Youtube</p>
                    </a>
                    <a href="https://basel-jop-application.netlify.app/" title="Click to view" class="project-card">
                        <img src="projectImg/project2.png" alt="">
                        <h2>Jop App</h2>
                        <p>A working jop application form</p>
                    </a>
                    <a href="https://basel-tweeter.netlify.app/" title="Click to view" class="project-card">
                        <img src="projectImg/project3.png" alt="">
                        <h2>Twitter</h2>
                        <p>A similar version of Twitter</p>
                    </a>
                    <a href="https://basel-suez-canal.netlify.app/" title="Click to view" class="project-card">
                        <img src="projectImg/project4.png" alt="">
                        <h2>Animated Web</h2>
                        <p>An animated website with JS</p>
                    </a>
                </div>
            </section>
            <section class="hideTop" id="about">
                <div class="about-section-container">
                    <button type="button" class="backBtn" title="Back to home" id="backAboutBtn"><i class="fa-solid fa-chevron-left"></i></button>
                    <h1>About Me</h1>
                    <div class="profile-about-container">
                        <div class="profile-container">
                            <div class="profile-info-container">
                                <div class="profile-img">
                                    <img src="profileImg/profile_image.jpg" alt="My Photo">
                                </div>
                                <div class="profile-info">
                                    <h2 data-text="Basel Abd-Elhamid">Basel Abd-Elhamid</h2>
                                    <p>Full Stack Web Developer</p>
                                </div>
                            </div>
                            <div class="profile-cards-container">
                                <div class="profile-card">
                                    <i class="fa-solid fa-briefcase" style="color: #8235ff;"></i>
                                    <h3 style="color: #8235ff;">2+</h3>
                                    <p>Years Experience</p>
                                </div>
                                <div class="profile-card">
                                    <i class="fa-solid fa-code" style="color: #00f0ff;"></i>
                                    <h3 style="color: #00f0ff;">5+</h3>
                                    <p>Completed Projects</p>
                                </div>
                                <div class="profile-card">
                                    <i class="fa-solid fa-rocket" style="color: #2676ff;"></i>
                                    <h3 style="color: #2676ff;">3+</h3>
                                    <p>Technologies Used</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-container">
                            <div class="about-text">
                                <h2>Passionate About Innovation</h2>
                                <p>I'm a creative Full Stack Web Developer with over 2 years of experience in crafting dynamic and responsive web applications. My expertise lies in both front-end and back-end development, utilizing modern technologies such as <strong>React.js</strong>, <strong>Node.js</strong>, and <strong>MySQL</strong> to deliver seamless user experiences.</p>
                                <p>I thrive on turning ideas into reality, whether it's building a user-friendly interface or developing robust server-side logic. My passion for innovation drives me to stay updated with the latest industry trends and continuously enhance my skills.</p>
                                <p>I'm committed to delivering high-quality code that not only meets project requirements but also prioritizes performance, accessibility, and maintainability. With a strong foundation in HTML, CSS, and JavaScript, I continuously explore new frameworks and tools to expand my capabilities and provide innovative solutions.</p>
                                <p>Let's collaborate to bring your web projects to life with creativity and technical excellence!</p>
                            </div>
                            <div class="skills-container">
                                <h2>Technical Skills</h2>
                                <div class="skills">
                                    <div class="skill">
                                        <div class="img-glow ts">
                                            <img src="techImg/typescript.png" alt="">
                                        </div>
                                        <h3>TypeScript</h3>
                                    </div>
                                    <div class="skill">
                                        <div class="img-glow reactjs">
                                            <img src="techImg/programing.png" alt="">
                                        </div>
                                        <h3>React.js</h3>
                                    </div>
                                    <div class="skill">
                                        <div class="img-glow nodejs">
                                            <img src="techImg/nodejs.png" alt="">
                                        </div>
                                        <h3>Node.js</h3>
                                    </div>
                                    <div class="skill">
                                        <div class="img-glow mysql">
                                            <img src="techImg/mysql.png" alt="">
                                        </div>
                                        <h3>MySQL</h3>
                                    </div>
                                </div>
                                <button type="button" id="skillBtn">View Skills</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hideRight" id="skill">
                <div class="skills-section-container">
                    <button type="button" class="backBtn" title="Back to about" id="backSkillBtn"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="developments-sections">
                        <div class="frontend-section">
                            <h1>Frontend Development</h1>
                            <div class="skills-details-container">
                                <div class="skill-detail nextjs">
                                    <div class="img-glow">
                                        <img src="techImg/Next.js.png" alt="">
                                    </div>
                                    <h2>Next.js</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level next-level">90%</div>
                                    </div>
                                </div>
                                <div class="skill-detail js">
                                    <div class="img-glow">
                                        <img src="techImg/js.png" alt="">
                                    </div>
                                    <h2>JavaScript</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level js-level">95%</div>
                                    </div>
                                </div>
                                <div class="skill-detail ts">
                                    <div class="img-glow">
                                        <img src="techImg/typescript.png" alt="">
                                    </div>
                                    <h2>TypeScript</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level ts-level">80%</div>
                                    </div>
                                </div>
                                <div class="skill-detail reactjs">
                                    <div class="img-glow">
                                        <img src="techImg/programing.png" alt="">
                                    </div>
                                    <h2>React.js</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level reactjs-level">75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="backend-section">
                            <h1>Backend Development</h1>
                            <div class="skills-details-container">
                                <div class="skill-detail nodejs">
                                    <div class="img-glow">
                                        <img src="techImg/nodejs.png" alt="">
                                    </div>
                                    <h2>Node.js</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level nodejs-level">80%</div>
                                    </div>
                                </div>
                                <div class="skill-detail expressjs">
                                    <div class="img-glow">
                                        <img src="techImg/example.png" alt="">
                                    </div>
                                    <h2>Express.js</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level expressjs-level">75%</div>
                                    </div>
                                </div>
                                <div class="skill-detail python">
                                    <div class="img-glow">
                                        <img src="techImg/python.png" alt="">
                                    </div>
                                    <h2>Python</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level python-level">70%</div>
                                    </div>
                                </div>
                                <div class="skill-detail servers">
                                    <div class="img-glow">
                                        <i class="fa-solid fa-server"></i>
                                    </div>
                                    <h2>REST APIs</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level api-level">65%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="database-section">
                            <h1>Database</h1>
                            <div class="skills-details-container">
                                <div class="skill-detail mysql">
                                    <div class="img-glow">
                                        <img src="techImg/mysql.png" alt="">
                                    </div>
                                    <h2>MySQL</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level mysql-level">85%</div>
                                    </div>
                                </div>
                                <div class="skill-detail postgresql">
                                    <div class="img-glow">
                                        <img src="techImg/animal.png" alt="">
                                    </div>
                                    <h2>PostgreSQL</h2>
                                    <div class="skill-bar">
                                        <div class="skill-level postgresql-level">70%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hideBottom" id="contact">
                <div class="contact-section-container">
                    <button type="button" title="Back to home" class="backBtn" id="backContactBtn"><i class="fa-solid fa-chevron-left"></i></button>
                    <h1>Contact Me</h1>
                    <div class="contact-container">
                        <div class="contact-form-container">
                            <div class="texts">
                                <h2>Send me a message</h2>
                                <p>I am open to discussing new projects, creative ideas, or opportunities to be part of your visions. Feel free to reach out using the form below, and I will get back to you as soon as possible.</p>
                            </div>
                            <form action="message_process.php" method="POST">
                                <div class="name">
                                    <input type="text" id="FName" name="fname" placeholder="First name">
                                    <input type="text" id="LName" name="lname" placeholder="Last name">
                                </div>
                                <div class="info">
                                    <input type="email" name="email" id="email" autocomplete="new-password" placeholder="Email">
                                    <input type="tel" name="phone" id="phone" inputmode="numeric" autocomplete="new-password" placeholder="Phone">
                                </div>
                                <div class="message-container">
                                    <p class="character-count">1000</p>
                                    <textarea name="message" id="message" autocomplete="new-password" placeholder="Message"></textarea>
                                </div>
                                <div class="check-section">
                                    <div class="check-box"></div>
                                    <span id="cbSpan">I've read and agree with <a href="https://policies.google.com/terms?hl=en-US">Terms of Service</a> and <a href="https://policies.google.com/privacy?hl=en-US">Privacy Policy</a></span>
                                </div>
                                <div class="send-button">
                                    <button type="submit" name="send_message">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="main.js"></script>
</body>
</html>
