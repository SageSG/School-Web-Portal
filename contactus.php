<?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
include('session.php');
$userDetails=$userClass->userDetails($session_uid);

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <?php
        include "head.php";
        ?>
        <title>Contact Us</title>
        <link href="css/contactus.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <main>
            <section class="container-fluid">
                <div class="contact-1 row">

                    <div class="col-md-6">
                        <div class="contact-centered">
                            <h1>About Us</h1>
                            <hr>
                            <h3>Singapore Institute of Technology (SIT) is Singapore’s University of Applied Learning. SIT’s vision is to be a leader in innovative learning by integrating learning, industry and community. Its mission is to nurture and develop individuals who build on their interests and talents to impact society in meaningful ways.</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--Carousel-->
                        <div class="col-md-12">
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
                                        <div class="carousel-images"><img src="images/schoolmain1.jpg" alt="School in the morning" class="sitbuilding-pic" width="100%"></div>
                                        <div class="carousel-caption">
                                            <h2>School @ Morning</h2>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-images"><img src="images/schoolmain2.jpg" alt="School in the afternoon" class="sitbuilding-pic" width="100%"></div>
                                        <div class="carousel-caption">
                                            <h2>School @ Afternoon</h2>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-images" ><img src="images/schoolmain.jpg" alt="School in the night" class="sitbuilding-pic" width="100%"></div>
                                        <div class="carousel-caption">
                                            <h2>School @ Night</h2>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>

            </section>





            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <img src="images/download.png" width="25px"></button>


            <section class="creators">

                <div class="thumbnail-title">
                    <h1 style="color:black;">
                        Site Creators
                    </h1>
                </div>

                <div class="row creators">
                    <article class="col-lg-4">
                        <div class="thumbnail-title">
                            <h2>Security Expert</h2>
                        </div>
                        <div class="card">
                            <img src="images/jacky.jpg" alt="Jacky" class="thumbnail-pic">
                            <div class="container">
                                <hr class="my-4">
                                <h4><b>Jacky Candy</b></h4>
                                <p>2001677@sit</p>
                            </div>
                        </div>                        
                    </article>
                    <article class="col-lg-4">
                        <div class="thumbnail-title">
                            <h2>Hacker Mode</h2>
                        </div>
                        <div class="card">
                            <img src="images/ian.jpg" alt="Ian" class="thumbnail-pic">
                            <hr class="my-4">
                            <div class="container">
                                <h4><b>Ian Beast</b></h4>
                                <p>2000941@sit</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4">
                        <div class="thumbnail-title">
                            <h2>The Undefeated</h2>
                        </div>
                        <div class="card">
                            <img src="images/ipman.jpg" alt="Hou Liang" class="thumbnail-pic">
                            <div class="container">
                                <hr class="my-4">
                                <h4><b>Hou Liang</b></h4>
                                <p>2000721@sit</p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

        </main>
        <?php
        include "footer.php";
        ?>
    </body>
</html>


