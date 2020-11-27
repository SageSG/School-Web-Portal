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
        <title>Overseas</title>
        <link rel="stylesheet" type="text/css" href="css/oversea.css">
    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <main>

            <button onclick="topFunction()" id="myBtn" title="Go to top">Top <img src="images/download.png" alt="to top button" width="25"></button>

            <div class="overseas-1">
                <section class="overseas-2">
                    <div class="os-content">
                        <h1 style="font-size:1.8vw;">Miracle's</h1>
                        <hr class="OT">
                        <div style="font-size:5vw;">Overseas Trip</div>
                        <hr class="OT">
                    </div>
                </section>  
            </div>        

            <section class="oversea-section">

                <?php
                $conn = mysqli_connect("localhost", "sqldev", "password", "project");
                $query = $conn->prepare("select * from project.trip");
                $query->execute();
                $query->bind_result($tid, $tname, $tpeople, $tdate, $timage);
                while ($query->fetch()) {
                    echo "<div class='tile-1 row'>";
                    echo "<div class='col-md-6'>";
                    echo "<div class='$timage'></div></div>";
                    echo "<div class='col-md-6'>";
                    echo "<div class='tile-text'><hr>";
                    echo "<h2>$tname</h2><hr><p>";
                    echo "Number of People: $tpeople<br>";
                    echo "Duration: $tdate days<br></p>";
                    if($tid==1){
                                            echo "<a class='btn btn-outline-dark btn-lg' id='overseasdetail1' role='button' data-toggle='modal' data-target='#exampleModalOverseas1'>Overseas Detail</a>";
                    }else if($tid==2){
                                            echo "<a class='btn btn-outline-dark btn-lg' id='overseasdetail2' role='button' data-toggle='modal' data-target='#exampleModalOverseas2'>Overseas Detail</a>";
                    }else if($tid==3){
                                            echo "<a class='btn btn-outline-dark btn-lg' id='overseasdetail3' role='button' data-toggle='modal' data-target='#exampleModalOverseas3'>Overseas Detail</a>";
                    }
                    echo "</div></div></div>";                  
                }
                ?>                                                                                       
                          
            </section>

            <!--Modal--> 
            <div class="modal fade" id="exampleModalOverseas1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" aria-labelledby="exampleModalOverseas1">Overseas trip</h5>
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
            <div class="modal fade" tabindex="-1" id="exampleModalOverseas2" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" aria-labelledby="exampleModalOverseas2">Overseas trip</h5>
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

            <div class="modal fade" tabindex="-1" id="exampleModalOverseas3" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" aria-labelledby="exampleModalOverseas3">Overseas trip</h5>
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




