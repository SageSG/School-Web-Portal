<?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <?php
        include "head.php";
        ?>
        <title>CCA Page</title>
        <link rel="stylesheet" type="text/css" href="css/ccahomepage.css">
    </head>
  <body>
        <?php
        include "navbar.php";
        ?>

        <button onclick="topFunction()" id="myBtn" aria-labelledby="myBtn" title="Go to top">Top<img src="images/download.png" alt="to top button" width="25"></button>
      
<section class="part1" role="banner">
                <!--Carousel-->
                <div class="col-md-12" aria-labelledby="carouselExampleIndicators">
                    <!-- Indicators -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" ></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="part10" style="background:url('images/cca.jpg') no-repeat;background-position: bottom;"></div>
                                <div class="carousel-caption">
                                    <h2>Club Crawl</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="part10" style="background:url('images/eprog.jpeg');background-position: center;"></div>
                                <div class="carousel-caption">
                                    <h2>School Exchanges</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="part10" style="background:url('images/aboutus.jpg');background-position: center;"></div>
                                <div class="carousel-caption">
                                    <h2 style="color:black">About Us</h2>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" aria-label="leftcarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" aria-label="rightcarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only" role="search">Next</span>
                        </a>
                    </div>
                </div>
            </section>

<div class="hp" role="main">
    <div class="hp-text">
        <h1>Read about our Events</h1>
        <p>Welcome to our CCA and Event Page. <br> Stay tuned to this page as we update more events!</p>
    </div>
</div>
        
<div class="part9" role="complementary">
    <div class="part9-text">
        <p> 
            “Feel our hearts pounding, muscles burning, lungs screaming. FEEL our love and hate for our opponent, feel the insane drive to keep pushing, to get to the wall, to win.”
        </p>

    </div>
</div>


<div class="hp" role="form">
    <div class="hp-text">
        <div><h1> What We Offer </h1>
            <p>Students are encouraged to adopt an active and enriched lifestyle through involvement in the various activities and programmes organised by the many student organisations in SO.</p></div>   
        <div class="row">
        <div class="col-md-4">        
            <div class="flip-card hp-text1">
                <div class="flip-card-inner">
                    <div class="flip-card-front" >
                        <img src="images/basketballbanner.png" alt="basketball">
                                            Basketball
                    </div>
                    <div class="flip-card-back">
                        <h2>Basketball</h2> <img src="images/basketball1.png" class="headerimg" alt="basketball">
                        <div class="text1" style="font-size:15px;"> Miracle's Basketball team brings together all enthusiasts of the game from the student population in SO, whether the students prefer to play competitively or for leisure.</div>
                    </div>
                </div>
            </div>
        </div>       
        <div  class="col-md-4"> 
            <div class="flip-card hp-text1">
                <div class="flip-card-inner">
                    <div class="flip-card-front" >
                        <img src="images/swimmingbanner.png" alt="swimming">
                        Swimming
                    </div>  
                    <div class="flip-card-back">
                        <h2>Swimming</h2> <img src="images/swimming.png" class="headerimg" alt="swimming">
                        <div class="text1" style="font-size:15px;">Miracle's Swim Team is made up of a group of disciplined and tightly knit swimmers who hone their skills either for recreational or competitive purposes through regular training sessions. </div>
                    </div>
                </div>
            </div>
         
        </div>
        <div  class="col-md-4" >   
           
            <div class="flip-card hp-text1">
                <div class="flip-card-inner">
                    <div class="flip-card-front" >
                        <img src="images/chinese.png" alt="chinese orchestra">
                                            Orchestra
                    </div>
                    <div class="flip-card-back">
                        <h2>Chinese</h2> <img src="images/dragon.png" class="headerimg" alt="chinese orchestra">
                        <div class="text1" style="font-size:15px;"> Miracle's Chinese Orchestra (SOCO) returns to the Billboard charts, entertaining you with its renditions of popular English pop songs from artists such as Taylor Swift, Beyoncé, Rihanna, One Republic, Walk the Moon, Sam Smith, Bruno Mars and many more.  </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>       
</div>

<div class="section2" role="application">
    <div class="section2box">
        <p> 
            "Don't run away from challenges run over them, what are you waiting for join us now."
        </p>

    </div>
</div>
<div class="hp" role="application">
    <div class="hp-text">
        <h1>"Never Hesitate Always Forward"</h1>
        <p>Hope to see you guys soon, so hurry up join us now. We will be waiting.</p>
    </div>
</div>
<?php
include "footer.php";
?>

<script>
    $(function () {
        $(".flip").flip({
            trigger: 'hover'
        });
    });
</script>

<script>
    $(function () {
        $(".flip").flip({
            trigger: 'hover'
        });
    });
</script>

</body>
</html>










