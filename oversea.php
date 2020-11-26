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
<html lang="en">
    <head>
        <?php
        include "head.php";
        ?>
        <title>Overseas</title>
        <link rel="stylesheet" type="text/css" href="css/oversea.css">
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <main>

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <img src="images/download.png" width="25px"></button>

            <section class="overseas-1">
                <section class="overseas-2">
                    <div class="os-content">
                        <h4 style="font-size:1.8vw;">Miracle's</h4>
                    <hr class="OT">
                    <h1 style="font-size:5vw;">Overseas Trip</h1>
                    <hr class="OT">
                    </div>
                </section>  
            </section>        

            <section class="oversea-section">
                <div class="tile-1 row">  
                   
                    <div class="col-md-6">
                        <div class="tile-picture">
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="tile-text">
                            <hr>
                            <h2>Hanyang University, Korea</h2>
                            <hr>

                            <p>                                
                                Number of People: 50
                                <br>
                                Duration: 2 weeks
                                <br>
                            </p>
                            <a class="btn btn-outline-dark btn-lg" id="overseasdetail" role="button" data-toggle="modal" data-target="#exampleModalCenter">Overseas Detail</a>
                        </div>    
                    </div>
                </div> 

                <div class="tile-1 row">  
                    <div class="col-md-6">
                        <div class="tile-picture2">
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="tile-text">
                            <hr>
                            <h2>Sapienza University, Rome</h2>
                            <hr>
                            <p>                                
                                Number of People: 50
                                <br>
                                Duration: 2 weeks
                                <br>
                            </p>
                            <a class="btn btn-outline-dark btn-lg" id="overseasdetail" role="button" data-toggle="modal" data-target="#exampleModalOverseas2">Overseas Detail</a>
                        </div>    
                    </div>
                </div>


                <div class="tile-1 row">  
                    <div class="col-md-6">
                        <div class="tile-picture3">
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="tile-text">
                            <hr>
                            <h2>Tokyo University, Japan</h2>
                            <hr>

                            <p>                                
                                Number of People: 50
                                <br>
                                Duration: 2 weeks
                                <br>
                            </p>
                            <a class="btn btn-outline-dark btn-lg" id="overseasdetail" role="button" data-toggle="modal" data-target="#exampleModalOverseas3">Overseas Detail</a>
                        </div>    
                    </div>
                </div>



            </section>

            <!--Modal--> 
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Overseas trip</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p>Location: Seoul</p>
                            <p>Contact Number: 12345678</p>
                            <p>Person-in-charge: Monkey D.Dragon</p>      

                            <div class="calendar">

                                <header>				

                                    <h2>September</h2>

                                </header>

                                <table>

                                    <thead>

                                        <tr>

                                            <td>Mo</td>
                                            <td>Tu</td>
                                            <td>We</td>
                                            <td>Th</td>
                                            <td>Fr</td>
                                            <td>Sa</td>
                                            <td>Su</td>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="prev-month">26</td>
                                            <td class="prev-month">27</td>
                                            <td class="prev-month">28</td>
                                            <td class="prev-month">29</td>
                                            <td class="prev-month">30</td>
                                            <td class="prev-month">31</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td class="current-day">2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td class="event">10</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td class="next-month">1</td>
                                            <td class="next-month">2</td>
                                            <td class="next-month">3</td>
                                            <td class="next-month">4</td>
                                            <td class="next-month">5</td>
                                            <td class="next-month">6</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div> <!-- end calendar -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>                           
                    </div>
                </div>
            </div>

            <!--                overseas modal 2-->
            <div class="modal fade" id="exampleModalOverseas2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Overseas trip</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p>Location: Italy</p>
                            <p>Contact Number: 87654321</p>
                            <p>Person-in-charge: Donquixote Doflamingo</p>      

                            <div class="calendar">

                                <header>				

                                    <h2>May</h2>

                                </header>

                                <table>

                                    <thead>

                                        <tr>

                                            <td>Mo</td>
                                            <td>Tu</td>
                                            <td>We</td>
                                            <td>Th</td>
                                            <td>Fr</td>
                                            <td>Sa</td>
                                            <td>Su</td>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="prev-month">26</td>
                                            <td class="prev-month">27</td>
                                            <td class="prev-month">28</td>
                                            <td class="prev-month">29</td>
                                            <td class="prev-month">30</td>
                                            <td class="prev-month">31</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td class="current-day">6</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td class="event">12</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td class="next-month">1</td>
                                            <td class="next-month">2</td>
                                            <td class="next-month">3</td>
                                            <td class="next-month">4</td>
                                            <td class="next-month">5</td>
                                            <td class="next-month">6</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div> <!-- end calendar -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>                           
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModalOverseas3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Overseas trip</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p>Location: Japan</p>
                            <p>Contact Number: 87654321</p>
                            <p>Person-in-charge: Mr Gol D.Roger </p>      

                            <div class="calendar">

                                <header>				

                                    <h2>November</h2>

                                </header>

                                <table>

                                    <thead>

                                        <tr>

                                            <td>Mo</td>
                                            <td>Tu</td>
                                            <td>We</td>
                                            <td>Th</td>
                                            <td>Fr</td>
                                            <td>Sa</td>
                                            <td>Su</td>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="prev-month">26</td>
                                            <td class="prev-month">27</td>
                                            <td class="prev-month">28</td>
                                            <td class="prev-month">29</td>
                                            <td class="prev-month">30</td>
                                            <td class="prev-month">31</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td class="current-day">8</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td class="event">12</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td class="next-month">1</td>
                                            <td class="next-month">2</td>
                                            <td class="next-month">3</td>
                                            <td class="next-month">4</td>
                                            <td class="next-month">5</td>
                                            <td class="next-month">6</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div> <!-- end calendar -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>                           
                    </div>
                </div>
            </div>

        </main>
        <?php
        include "footer.php";
        ?>
    </body>
</html>




