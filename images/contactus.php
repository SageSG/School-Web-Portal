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
                            <p>Singapore Institute of Technology (SIT) is Singapore’s University of Applied Learning. SIT’s vision is to be a leader in innovative learning by integrating learning, industry and community. Its mission is to nurture and develop individuals who build on their interests and talents to impact society in meaningful ways.</p>
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
                                        <div class="carousel-images"><img src="images/SIT@Dover.jpg" alt="Dover-SIT" class="sitbuilding-pic"></div>
                                        <div class="carousel-caption">
                                            <h2>SIT @ Dover</h2>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-images"><img src="images/sit@Night.jpg" alt="Dover-SIT" class="sitbuilding-pic"></div>
                                        <div class="carousel-caption">
                                            <h2>SIT @ Night</h2>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-images" ><img src="images/sit@punggol2.jpg" alt="Punggol-SIT" class="sitbuilding-pic"></div>
                                        <div class="carousel-caption">
                                            <h2>SIT @ Punggol</h2>
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
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Security Expert
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
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Hacker Mode
                        </div>
                        <div class="card">
                            <img src="images/ian.jpg" alt="Ian" class="thumbnail-pic">
                            <hr class="my-4">
                            <div class="container">
                                <h4><b>Ian Beast</b></h4>
                                <p>2000941</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Silent Pro
                        </div>
                        <div class="card">
                            <img src="images/superman.jpg" alt="Hwee Keong" class="thumbnail-pic">
                            <div class="container">
                                <hr class="my-4">
                                <h4><b>Hwee Keong</b></h4>
                                <p>2002234@sit</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            The Undefeated
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
            </section>

        </main>
        <?php
        include "hl.footer.php";
        ?>
    </body>
</html>


