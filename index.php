<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script> 
            $(window).scroll(function(){
                var nav = $('#nav').offset();

                console.log($(window).height() - $('.img').offset().top - $('.img').height());
                console.log($('.img').height());
                console.log('top: '+nav.top);
                console.log('scroll: '+$(window).scrollTop());
                
                if ($(window).scrollTop() > nav.top) {
                    $('#nav').css('position', 'fixed').css('top','0');
                }
                else {
                    if($('.img').height() > $(window).scrollTop()) {
                        $('#nav').css('position', 'static').css('top','');
                    }
                }
            });

        </script>
    </head>
    <body>
        <div class="img"></div>
    <div id="nav" class="header">
        <ul>
            <li><a href="#">HOME</a></il>
            <il><a href="#about">ABOUT ME</a></il>
            <il><a href="#users">USERS</a></il>
            <il><a href="#ads">ADVERTISEMENTS</a></il>
        </ul>
    </div>
    <div id="about">
        <h1>ABOUT ME</h1>
        </div>
    <section id="users">
        
    </section>
    <!-- Projects -->
    <section id="ads">
        
    <h1>PROJECTS</h1>

    <div class="projects">
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
        <div class="project-container pos">
            <div class="title">
                <ul>
                    <li>
                        <h4>CurrencyConverter</h4><p>Simple currency converter</p>
                    </li>
                    <li>
                        <i id="arrow" class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
            </div>
            <div class="detail">
                Languages:
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                </ul>
            </div>
        </div>
    </div>
        </section>
        <script>
            var coll = document.getElementsByClassName("title");

            for (var i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;

                    var arrow = this.children[0].children[1].children[0];
                    console.log(arrow);

                    if (content.style.maxHeight) {
                        //change arrow's direction
                        arrow.classList.remove('fa-angle-up');
                        arrow.classList.add('fa-angle-down');

                        //change box radius
                        this.style.borderRadius = "10px";

                        content.style.maxHeight = null;
                    } else {
                        //change arrow's direction
                        arrow.classList.remove('fa-angle-down');
                        arrow.classList.add('fa-angle-up');

                        //change box radius
                        this.style.borderBottomLeftRadius = "0px";
                        this.style.borderBottomRightRadius = "0px";
                        
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            }
        </script>
    </body>
</html>