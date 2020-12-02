<?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails = $userClass->userDetails($_SESSION['uid']);
// Check if the user has login anot
include('session.php');
// Check for login
include('session2.php');
$userDetails = $userClass->userDetails($session_uid);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <?php
        include "head.php";
        ?>
        <title>Manage Account</title>
        <style>
            @media screen and (max-width: 800px) {
                #footer{
                position: relative;
                left:0;
                bottom:0;
                width:100%;
            }
            }
            @media screen and (min-width: 801px) {
            html{
                height:100%;
                margin:0;
                padding:0;
            }

            body{
                height:100%;
                margin:0;
                padding:0;
            }

            #wrapper{
                min-height:100%;
                position:relative;
            }

            #footer{
                position: absolute;
                left:0;
                bottom:0;
                width:100%;
            }
}         
        </style>
    </head>
    <body>
        <div id="wrapper">
        <?php
        include "navbar.php";
        ?> 
        <main class="container">  

            <div>
                <div class="settings">
                    <h1>Account Settings</h1>
                </div>
                <div class="part6">
                    <h4><b>User Details</b></h4>
                </div>
                <div>
                    <table class='table'>
                        <thead>
                            <tr>
                                <td>
                                    <label>First Name: </label>
                                </td>
                                <td>
                                    <?php echo $userDetails->username; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email: </label>
                                </td>
                                <td>
                                    <?php echo $userDetails->email; ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <!-- update modal -->
                <div id="updateAcc">
                        <div class="part6">
                            <br>
                            <h4><b>Change Email</b></h4>
                            <form method=POST action="update.php" class="container form-content" >
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <label class="d-none"><b>Email:</b></label>
                                        <input class="form-control" type="email" id="emailReg" name="emailReg" aria-label="emailupdate"
                                               maxlength="45" placeholder="name@example.com" value="<?php echo $userDetails->email; ?>">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="btn btn-secondary btn-sm" value="yes" name="updateAcc">Update Email</button>
                                    <br><br><br><br><br><br><br><br>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                </div>
                <br>
                <br>
            </div>
             
                </main>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="footer">
                <?php
                include "footer.php";
                ?>
            </div>
        </div>
                </body>
                </html>


