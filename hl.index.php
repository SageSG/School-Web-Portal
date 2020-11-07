<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <?php
        include "hl.head.php";
        ?>
        <title>Main Page</title>
    </head>
    <body>
        <?php
        include "hl.navbar.php";
        ?>
        <main>
            <section class="part1">
                <!--Carousell-->
                <div class="col-md-12">
                    <div class="caroulogo"> CseL </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" ></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="..." alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="..." alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="..." alt="Third slide">
                            </div>
                        </div>
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

            <section class="part2">
                <div class="bottom-left">Bottom Left</div>
                <div class="top-left">Top Left</div>
                <div class="top-right">Top Right</div>
                <div class="bottom-right">Bottom Right</div>
                <div class="centered">Center</div>
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
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>                           
                        </div>
                    </div>
                </div>
            </section>

            <!--This is a form!-->
            <section class="part5">
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
                        <label for="wordLeft" class="col-form-label">Word:</label>
                        <div class="col-sm-2">
                            <input type="text" readonly class="form-control-plaintext" id="wordLeft" value="1000">
                        </div>
                        <label for="wordCount" class="col-form-label">Count:</label>
                        <div class="col-sm-2">
                            <input type="text" readonly class="form-control-plaintext" id="wordCount" value="   0">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-outline-dark">Sign Up</button>
                        </div>
                    </div>

                </form>
            </section>

            <section class="part4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CgqxNss_ffs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>

        </main>
        <?php
        include "hl.footer.php";
        ?>
    </body>
</html>
