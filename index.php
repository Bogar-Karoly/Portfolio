<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio</title>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/44af24657a.js" crossorigin="anonymous"></script>
        <!-- JQUERY -->
        <script>
            $(function () {
                $('form').on('submit', function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: 'post',
                        url: 'sendmail.php',
                        data: $('form').serialize(),
                        success: function () {
                            alert('Message sent!');
                        }
                    });
                });
            });
        </script>
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

    <!-- Projects -->
        <section id="projects">
        
            <h1>PROJECTS</h1>

            <div class="projects">
    
    <?php 
        require('import.php');

        $temp = new Import();

        if($temp->rimport()) {
            $dat = $temp->getData();
            foreach($dat as $value) {
                echo '<div class="project-container pos">';
                    echo '<div class="title">';
                        echo '<ul>';
                            echo '<li>';
                                echo '<h2>'.$value->getName().'</h2>';
                            echo '</li>';
                            echo '<li>';
                                echo '<i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>';
                            echo '</li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="detail">';
                        echo '<h4>Descripsion:</h4><p class="desc"> '.$value->getText().'</p>';
                        echo '<hr>';
                        echo '<h4>Skills:</h4>';
                        echo '<div class="skills">';
                            foreach($value->getEnvironment() as $skill) {
                                echo '<p class="skill">'.$skill.'</p>';
                            }
                        echo '</div>';
                        echo '<hr>';
                        echo '<div class="links">';
                            echo '<a href="'.$value->getGithub().'"><i class="fab fa-github"></i>Github</a>';
                            echo '<a href="'.$value->getLiveVersion().'">Live Demo</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
        else {
            echo '<div class="noProjects">There\'s no project avaible</div>';
        }
    
        ?>
            </div>
        </section>
        <!-- CONTACT -->
        <section id="contact">
            <h1>CONTACT</h1>
            <form class="contactForm">
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
                    <textarea id="Message" rows="10" placeholder="Your message..." required></textarea>
                </div>
                <div class="formSubmit">
                    <input type="submit" id="Message" class="btn" value="SUBMIT ">
                </div>
            </form>
            <div class="contact">
                <a href="mailto:karesz0328@gmail.com" class="emailLink">karesz0328@gmail.com</a>
            </div>
        </section>
        <script src="animations.js"></script>
    </body>
</html>