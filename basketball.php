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
        <title>Basketball</title>
        <link rel="stylesheet" href="css/basketball.css">
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <main>

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <img src="images/download.png" width="25px"></button>
            
            <section class="bb-part1">
                <section class="bb-header">
                    <div class="bb-content">
                        <h4 style="font-size:1.8vw;">Miracle's CCA</h4>
                    <hr class="bb">
                    <h1 style="font-size:5vw;">Basketball</h1>
                    <hr class="bb">
                    </div>
                </section>  
            </section>

            <section class="bb-part2">
                <div class="bb-part2-text">
                    <h1 class="bb-centered2">About Basketball<hr class="ba"></h1>

                    <p style="font-size:2vw;"> 
                        Basketball is a sport played by two teams of five players on a rectangular court. The objective is to shoot a ball through a hoop 18 inches (46 cm) in diameter and 10 feet (3.048 m) high mounted to a backboard at each end.
                    </p>
                </div>
            </section>

            <!--This is the achievement section!-->
            <section class="bb-part3">
                <img src="images/trophies2.jpg" alt="Trophies" usemap="#workmap" width="100%;" height="auto;">
                <map name="workmap" id="map_ID">
                    <area shape="poly" coords="838,64,876,34,906,64,845,191,784,256,894,554,617,554,733,258,607,78,644,34,682,67" alt="2020 Champions - Jr. bryant" data-toggle="modal" data-target="#Trophy1">
                    <div class="modal fade" id="Trophy1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">2020 Champion Trophy</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="trophy-logos" src="images/kobe.png" alt="Jr Bryants logo">
                                    <hr>
                                    Won by Jr. Bryant
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Continue</button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <area shape="poly" coords="1049,70,1080,73,1091,101,1274,101,1291,59,1333,81,1299,167,1240,229,1222,250,1218,306,1199,318,1230,453,1243,497,1265,509,1265,536,1156,545,1097,528,1097,500,1120,491,1140,440,1160,320,1141,302,1141,255,1079,176,1030,102" alt="Most popular team - team titans" data-toggle="modal" data-target="#Trophy2">
                    <div class="modal fade" id="Trophy2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Highest popularity Trophy</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="trophy-logos" src="images/titans.png" alt="titans logo">
                                    <hr>
                                    Won by Team Titans
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Continue</button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <area shape="poly" coords="451,62,484,79,467,154,429,217,374,285,372,346,361,367,407,456,417,534,280,533,286,469,334,368,325,340,329,283,270,211,218,107,223,77,254,67,257,89,350,86,433,92" alt="Game of the year - Game Throwers" data-toggle="modal" data-target="#Trophy3">
                    <div class="modal fade" id="Trophy3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Game of the Year</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="trophy-logos" src="images/gamet.png" alt="Game throwers logo">
                                    <hr>
                                    Won by Game Throwers
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Continue</button>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </map>
            </section>

            <script>
                var ImageMap = function (map) {
                    var n,
                            areas = map.getElementsByTagName('area'),
                            len = areas.length,
                            coords = [],
                            previousWidth = 1519;
                    for (n = 0; n < len; n++) {
                        coords[n] = areas[n].coords.split(',');
                    }
                    this.resize = function () {
                        var n, m, clen,
                                x = document.body.clientWidth / previousWidth;
                        for (n = 0; n < len; n++) {
                            clen = coords[n].length;
                            for (m = 0; m < clen; m++) {
                                coords[n][m] *= x;
                            }
                            areas[n].coords = coords[n].join(',');
                        }
                        previousWidth = document.body.clientWidth;
                        return true;
                    };
                    window.onresize = this.resize;
                },
                        imageMap = new ImageMap(document.getElementById('map_ID'));
                imageMap.resize();
            </script>

            <!--This is a form!-->
            <section class="bb-part4">
                <div class="form-padding">
                    <div class="form-header">
                        Sign Up Here
                    </div>
                    <form class="container form-content" action="ccaform.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="fname" class="d-none d-lg-block">First Name:</label>
                                <input class="form-control" type="text" id="fname" name="fname"
                                       maxlength="45" placeholder="Kobe" onkeyup="lettersOnly(this)">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="lname" class="d-none d-lg-block">Last Name:</label>
                                <input class="form-control" type="text" id="lname" required name="lname"
                                       maxlength="45" placeholder="Bryant" onkeyup="lettersOnly(this)">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="anumber" class="d-none d-lg-block">Admin Number:</label>
                                <input class="form-control" type="text" id="anumber" required name="anumber"
                                       maxlength="45" placeholder="2000XXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="d-none d-lg-block">Faculty</label>
                            <select class="form-control" id="slct1" name="slct1" onchange="populate('slct1', 'slct2')" required>
                                <option value="Which school are you from?" hidden>---- Select your faculty ----</option>
                                <option value="School of Business Management">School of Business Management</option>
                                <option value="School of Chemical and Life Sciences">School of Chemical and Life Sciences</option>
                                <option value="School of Design">School of Design</option>
                                <option value="School of Engineering">School of Engineering</option>
                                <option value="School of Health Sciences">School of Health Sciences</option>
                                <option value="School of Information Technology">School of Information Technology</option>
                                <option value="School of Interactive and Digital Media">School of Interactive and Digital Media</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="d-none d-lg-block">Course Title</label>
                            <select class="form-control" id="slct2" name="slct2" required>
                                <option class="form-control" value="Select your school first before selecting course" hidden>--- Select Faculty First ---</option>

                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8" class="d-none d-lg-block">
                                <label for="exampleFormControlInput1" class="d-none d-lg-block">Email address</label>
                                <input type="email" class="form-control" id="email" required name="email" placeholder="name@example.com">
                            </div>
                            <div class="form-group col-lg-4" class="d-none d-lg-block">
                                <label for="cnumber" class="d-none d-lg-block">Contact Number:</label>
                                <input class="form-control" type="text" id="cnumber" required name="cnumber"
                                       maxlength="45" placeholder="Optional" pattern="\d{8}" onkeyup="numbersOnly(this)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="d-none d-lg-block">Introduction</label>
                            <textarea class="form-control" id="intro" name="intro" rows="3" placeholder="Tell us more about yourself..." onkeyup="wordcount(this.value), textCounter(this, 'counter', 1000);"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-outline-light d-inline">Sign Up</button>
                            </div>
                            <label for="wordLeft" class="col-form-label d-none d-lg-block">Word:</label>
                            <div class="col-lg-2 d-none d-lg-block">
                                <!--<label for="wordLeft" class="col-form-label  d-none d-lg-block" id="counter">1000</label>-->
                                <input disabled  maxlength="3" size="3" value="1000" id="counter">
                            </div>
                            <label for="wordCount" class="col-form-label  d-none d-lg-block">Count:</label>
                            <div class="col-lg-1 d-none d-lg-block">
                                <input disabled  maxlength="3" size="3" value="0" id="w_count">
                            </div>                        
                        </div>
                    </form>
                </div>
            </section>

        </main>
        <?php
        include "footer.php";
        ?>
    </body>
</html>


