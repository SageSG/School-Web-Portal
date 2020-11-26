<?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails = $userClass->userDetails($_SESSION['uid']);
include('session.php');
$userDetails = $userClass->userDetails($session_uid);
?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
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

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top<img src="images/download.png" alt="to top button" width="25"></button>

            <div class="index-1">
                <video class="emb-video" controls autoplay poster="/images/videoposter.JPG">
                    <source src="/video/afterschool.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <?php
            if ($_SESSION['uid']) {
                        include "extraindex.php";
            }
?>

            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h1 class="display-4">Work Hard, Play Harder</h1>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-outline-dark btn-lg" href="/signup.php" role="button">Apply CCA</a>
                </p>
            </section>


            <div class="index-5">
                <a href="/signup.php">
                    <div class="index-content">
                        <div class="centered2">CCA Enrollment</div>
                    </div>  
                </a>
            </div>
            
            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h1 class="display-4">Embark on a Fun & Exciting Journey</h1>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-outline-dark btn-lg" href="/oversea.php" role="button">Trips & Exchanges</a>
                </p>
            </section>

            <div class="index-7">
                <a href="/oversea.php">
                    <div class="index-content">
                        <div class="centered4">Take <br>Me</div>
                    </div>  
                </a>
            </div>        

            <!--This is a jumbotron!-->
            <!--Implement bootstrap jumbotron class-->
            <section class="jumbotron text-center">
                <!--Display class to make heading more attractive-->
                <h1 class="display-4">About Us, About Our Future</h1>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-outline-dark btn-lg" href="/contactus.php" role="button">See More</a>
                </p>
            </section>


            <div class="index-6">
                <a href="/contactus.php">
                    <div class="index-content">
                        <div class="centered3">View <br>Details</div>
                    </div>  
                </a>
            </div>

        </main>
        <?php
        include "footer.php";
        ?>
    </body>
</html>


