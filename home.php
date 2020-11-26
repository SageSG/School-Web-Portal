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
        <title>Main Page</title>
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <main>


            <button onclick="topFunction()" id="myBtn" title="Go to top">Top<img src="images/download.png" width="25px"></button>


            <section class="index-1">
                    <h1>Singapore Institute of Technology</h1>
                    <?php
                    if($userDetails->name) {
                            echo "<h2>Welcome $userDetails->name</h2>";
                    }else{
                            echo"<h3>Student Portal</h3>";
                    }?>
                <div class="video">
                    <iframe width="100%" src="video/Going Beyond The Classroom.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="emb-video"></iframe>
                </div>
                    <h3>Build for students. By students. </h3>
            </section>

            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h4>All in one Space, All in one Place</h4>
                <hr class="my-4">
                <p class="lead">
                    <h4><a class="btn btn-outline-dark btn-lg" href="#modulexemption" role="button">Check Courses</a></h4>
                </p>
            </section>

            <section class="index-4">
                <a href="#modulexemption">
                    <div class="index-content">
                        <div class="centered">Module Exemption</div>
                    </div>  
                </a>
            </section>

            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h3>Embark on a Fun & Exciting Journey</h3>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-outline-dark btn-lg" href="/oversea.php" role="button">Trips & Exchanges</a>
                </p>
            </section>

            <section class="index-7">
                <a href="/oversea.php">
                    <div class="index-content">
                        <div class="centered4">Take Me</div>
                    </div>  
                </a>
            </section>

            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h3>Work Hard, Play Harder</h3>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-outline-dark btn-lg" href="/basketball.php" role="button">Apply CCA</a>
                </p>
            </section>


            <section class="index-5">
                <a href="/basketball.php">
                    <div class="index-content">
                        <div class="centered2">CCA Enrollment</div>
                    </div>  
                </a>
            </section>

            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h3>About Us, About Our Future</h3>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-outline-dark btn-lg" href="/contactus.php" role="button">See More</a>
                </p>
            </section>


            <section class="index-6">
                <a href="/contactus.php">
                    <div class="index-content">
                        <div class="centered3">View Details</div>
                    </div>  
                </a>
            </section>

        </div>
    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>
