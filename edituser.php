<?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails = $userClass->userDetails($_SESSION['uid']);

include('session.php');
$userDetails = $userClass->userDetails($session_uid);

if ($_SESSION['uid'] != "8888") {
    $url = BASE_URL . 'home.php';
    header("Location: $url");
}

$conn = mysqli_connect("localhost", "sqldev", "password", "project");

if (isset($_POST["updateAcc"])) {
    if ($_POST["updateAcc"] == "yes") {
        $uid = $_POST["uid"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
        if ($email_check) { //check condition to fuifill preg_match
            $query = $conn->prepare('update users set email=?,username=?,password=? WHERE uid=?');
            $hash_password = hash('sha256', $password);
            $query->bind_param('sssi', $email, $username, $hash_password, $uid);
            if ($query->execute()) {
                header('Location: viewall.php');
            }
        } else {
            header('Location: errorSub.php');
            die;
        }
    }
}
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
        <title>Edit Account</title>
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

                <div class="settings">
                    <h1>Account Settings</h1>
                </div>
                <div class="part6">
                    <h4><b>Edit Details</b></h4>
                </div>
                <div>
                    <table class='table'>
                        <thead>
                            <tr>
                                <td>
                                    <label>First Name: </label>
                                </td>
                                <td>
                                    <?php echo $_GET['username'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email: </label>
                                </td>
                                <td>
                                    <?php echo $_GET['email'] ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="part6">
                    <br>
                    <h4><b>Change Account Details</b></h4>
                    <form method=POST action="edituser.php" class="container form-content">
                        <div class="form-row">
                            <input class="form-control" type="hidden" id="uid" name="uid" value="<?php echo $_GET['uid'] ?>">
                            <div class="form-group col-lg-12">
                                <label class="d-none"><b>First Name:</b></label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="First name"
                                       maxlength="45" value="<?php echo $_GET['username'] ?>" onkeyup="lettersOnly(this)">
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="d-none"><b>Email:</b></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email"
                                       maxlength="45" value="<?php echo $_GET['email'] ?>">
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="d-none"><b>Password:</b></label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password"
                                       maxlength="45" required value="">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-secondary btn-sm" value="yes" name="updateAcc">Update Account</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
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


