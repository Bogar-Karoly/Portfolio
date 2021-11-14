<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>

        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.6.0.min.js?v=<?php echo time(); ?>"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
        <script src="https://kit.fontawesome.com/44af24657a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="head">
            <div class="author">
                <h1>Bogár Károly</h1>
                <h2>Web Developer</h2>
            </div>
        </div>
        <div id="nav" class="header">
            <ul>
                <li><a href="#">HOME</a></il>
                <il><a href="#about">ABOUT ME</a></il>
                <il><a href="#projects">PROJECTS</a></il>
                <il><a href="#contact">CONTACT</a></il>
                <il><a href="resume.pdf" target="_blank">RESUME</a></il>
            </ul>
        </div>
        <section id="about">
            <div class="about">
                <h1>ABOUT ME</h1>
                <p class="p">
                    Hello, my name is Bogár Károly and I am a Web Developer. I like being challenged and learning new programing languages/techniques. I also enjoy solving problems and see the result of my work.
                </p>
            </div>
        </section>
        <section id="experiences">
            <h1>EXPERIENCES</h1>
            <div class="experiences">
            <?php
                require_once 'php/import.php';
                $import = new Import();
                $data = $import->getExperiences();
                if($data !== false) {
                    foreach($data as $value) { ?>
                        <div class="project-container pos">
                            <div class="title">
                                <ul>
                                    <li>
                                        <h2><?php echo $value->getCompanyName()." - ".$value->getPosition();  ?></h2>
                                    </li>
                                    <li>
                                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail">
                                <h4>Descripsion:</h4><p class="desc"><?php echo $value->getDescription(); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="noProjects">There's no work experience available</div>
                <?php } ?>
            </div>
        </section>
        <!-- PROJECTS -->
        <section id="projects">
            <h1>PROJECTS</h1>
            <div class="projects">
            <?php 
                $data = $import->getProjects();
                if($data !== false) {
                    foreach($data as $value) { ?>
                        <div class="project-container pos">
                            <div class="title">
                                <ul>
                                    <li>
                                        <h2><?php echo $value->getName(); ?></h2>
                                    </li>
                                    <li>
                                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail">
                                <h4>Descripsion:</h4><p class="desc"><?php echo $value->getText(); ?></p>
                                <hr>
                                <h4>Skills:</h4>
                                <div class="skills">
                                    <?php foreach($value->getEnvironment() as $skill) { ?>
                                        <p class="skill"><?php echo $skill; ?></p>
                                    <?php } ?>
                                </div>
                                <hr>
                                <div class="links">
                                    <a href="<?php echo $value->getGithub(); ?>"><i class="fab fa-github"></i>Github</a>
                                    <a href="<?php echo $value->getLiveVersion(); ?>">Live Demo</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="noProjects">There's no project available</div>
                <?php } ?>
            </div>
        </section>
        <!-- CONTACT -->
        <section id="contact">
            <h1>CONTACT</h1>
            <div class="contactForm">
                <div class="formGroup">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email" required>
                </div>
                <div class="formGroup">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Subject" required>
                </div>
                <div class="formGroup">
                    <label for="message">Message</label>
                    <textarea id="message" rows="10" placeholder="Your message..." required></textarea>
                </div>
                <div class="formSubmit">
                    <button id="submit-btn" class="btn" >SEND</button>
                </div>
            </div>
            <div class="contact">
                <a href="mailto:karesz0328@gmail.com" class="emailLink">karesz0328@gmail.com</a>
            </div>
        </section>
        <script src="js/animations.js"></script>
    </body>
</html>