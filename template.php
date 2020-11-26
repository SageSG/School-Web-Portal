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
        <title>Main Page</title>
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <main>
            <section class="part1">
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
                                <div class="part10" style="background-image:url('images/overseas.jpg');"></div>
                                <div class="carousel-caption">
                                    <h2>Overseas</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="part10" style="background-image:url('images/clubcrawl.jpg');"></div>
                                <div class="carousel-caption">
                                    <h2>Club crawl </h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="part10" style="background-image:url('images/timetable.png');"></div>
                                <div class="carousel-caption">
                                    <h2>CCA timetables</h2>
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
            </section>

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <img src="images/download.png" width="25px"></button>
            <!--To top button-->
            <script>
                //Get the button:
                mybutton = document.getElementById("myBtn");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                }
            </script>

            <section class="part8">
                <section class="part2">
                    <div class="bottom-left">Bottom Left</div>
                    <div class="top-left">Top Left</div>
                    <div class="top-right">Top Right</div>
                    <div class="bottom-right">Bottom Right</div>
                    <div class="centered">Center</div>
                </section>  
            </section>


            <section class="part9">
                <div class="part9-text">
                    <p> 
                        “Feel our hearts pounding, muscles burning, lungs screaming. FEEL our love and hate for our opponent, feel the insane drive to keep pushing, to get to the wall, to win. We are the swimmer, We are the champion.”
                    </p>
                </div>
                </div>
            </section>

            <section class="part7">
                <h1>Click here</h1>
                <p>Click on the computer, the phone, or the cup of coffee to read more about the topic:</p>

                <img src="images/workplace.jpg" alt="Workplace" usemap="#workmap" width="400" height="379">

                <map name="workmap">
                    <area shape="rect" coords="34,44,270,350" alt="Computer" href="#" data-toggle="modal" data-target="#Modal1">
                    <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Laptop</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Content/Information
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-dark">Save changes</button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <area shape="rect" coords="290,172,333,250" alt="Phone" href="#" data-toggle="modal" data-target="#Modal2">
                    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Phone</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Content/Information
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-dark">Save changes</button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <area shape="circle" coords="337,300,44" alt="Cup of coffee" href="#" data-toggle="modal" data-target="#Modal3">
                    <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Coffee</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Content/Information
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-dark">Save changes</button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </map>
            </section>

            <!--This is a jumbotron!-->
            <section class="part3">
                <!--Implement bootstrap jumbotron class-->
                <div class="jumbotron text-center">
                    <!--Display class to make heading more attractive-->
                    <h1 class="display-4">Welcome to Jumbotron</h1>
                    <p class="lead">This is a short intro</p>
                    <p>Take a step back and enjoy.</p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-outline-dark btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModalCenter">Learn more</a>
                    </p>
                </div>
                <!--Modal--> 
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Content/Information
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-dark">Save changes</button>
                            </div>                           
                        </div>
                    </div>
                </div>
            </section>

            <!--This is a form!-->
            <section class="part4">
                <div class="form-header container">
                    Sign Up Here
                </div>
                <!--Form types-->
                <!--                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Example multiple select</label>
                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>                       
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>-->
                <form class="container form-content">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="fname" class="d-none d-sm-block">First Name:</label>
                            <input class="form-control" type="text" id="fname" name="fname"
                                   maxlength="45" placeholder="Kobe">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="lname" class="d-none d-sm-block">Last Name:</label>
                            <input class="form-control" type="text" id="lname" required name="lname"
                                   maxlength="45" placeholder="Bryant">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="anumber" class="d-none d-sm-block">Admin Number:</label>
                            <input class="form-control" type="text" id="anumber" required name="anumber"
                                   maxlength="45" placeholder="2000XXX">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="d-none d-sm-block">Faculty</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>School of Business Management</option>
                                <option>School of Chemical & Life Sciences</option>
                                <option>School of Design</option>
                                <option>School of Engineering</option>
                                <option>School of Health Sciences</option>
                                <option>School of Information Technology</option>
                                <option>School of Interactive & Digital Media</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="d-none d-sm-block">Course Title</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Food & Beverage business</option>
                            <option>School of Chemical & Life Sciences</option>
                            <option>School of Design</option>
                            <option>School of Engineering</option>
                            <option>School of Health Sciences</option>
                            <option>School of Information Technology</option>
                            <option>School of Interactive & Digital Media</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8" class="d-none d-sm-block">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group col-md-4" class="d-none d-sm-block">
                            <label for="cnumber">Contact Number:</label>
                            <input class="form-control" type="text" id="cnumber" required name="anumber"
                                   maxlength="45" placeholder="Optional">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="d-none d-sm-block">Introduction</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell us more about yourself..."></textarea>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-outline-dark d-inline">Sign Up</button>
                        </div>
                        <label for="wordLeft" class="col-form-label d-none d-lg-block">Word:</label>
                        <div class="col-lg-1 d-none d-lg-block">
                            <input type="text" readonly class="form-control-plaintext" id="wordLeft" value="1000">
                        </div>
                        <label for="wordCount" class="col-form-label  d-none d-lg-block">Count:</label>
                        <div class="col-lg-1 d-none d-lg-block">
                            <input type="text" readonly class="form-control-plaintext" id="wordCount" value="   0">
                        </div>                        
                    </div>
                </form>
            </section>

            <section class="part5">
                <iframe src="https://www.youtube.com/embed/CgqxNss_ffs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="emb-video"></iframe>
            </section>

            <section class="part6">
                <div class="row part6">
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Title 1
                        </div>
                        <div class="card">
                            <img src="images/jacky.jpg" alt="Avatar" class="thumbnail-pic">
                            <div class="container">
                                <hr class="my-4">
                                <h4><b>Jacky Candy</b></h4>
                                <p>Security Expert</p>
                            </div>
                        </div>                        
                    </article>
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Title 2
                        </div>
                        <div class="card">
                            <img src="images/ian.jpg" alt="Avatar" class="thumbnail-pic">
                            <hr class="my-4">
                            <div class="container">
                                <h4><b>Ian Beast</b></h4>
                                <p>Hacker Mode</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Title 3
                        </div>
                        <div class="card">
                            <img src="images/rip.jpg" alt="Avatar" class="thumbnail-pic">
                            <div class="container">
                                <hr class="my-4">
                                <h4><b>Hwee Keong</b></h4>
                                <p>Silent Pro</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3">
                        <div class="thumbnail-title">
                            Title 4
                        </div>
                        <div class="card">
                            <img src="images/ipman.jpg" alt="Avatar" class="thumbnail-pic">
                            <div class="container">
                                <hr class="my-4">
                                <h4><b>Hou Liang</b></h4>
                                <p>The Undefeated</p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>


