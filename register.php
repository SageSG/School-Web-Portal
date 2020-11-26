<?php
include("config.php");
if (!empty($_SESSION['uid'])) {
    header("Location: device_confirmations.php");
}

include('class/userClass.php');
$userClass = new userClass();

require_once 'googleLib/GoogleAuthenticator.php';
$ga = new GoogleAuthenticator();
$secret = $ga->createSecret();

$errorMsgReg = '';
$errorMsgLogin = '';

if (!empty($_POST['loginSubmit'])) 
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
$username_check = preg_match('~^[A-Za-z0-9_]{1,20}$~i', $username);
$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
   {
    $uid=$userClass->userLogin($usernameEmail,$password,$secret);
    if($uid)
    {
        $url=BASE_URL.'device_confirmations.php';
        header("Location: $url");
    }
    else
    {
        echo $errorMsgLogin="Please check login details.";
    }
   }
   else 
    {
        echo $errorMsgLogin="Please check login details.";
    }
}

if (!empty($_POST['signupSubmit'])) 
{
    	$secretx = '6LfP-OMZAAAAADHhxib0HhR0a4s1yICCoZvk9d9z';
	$response =$_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];

	$url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretx&response=$response&remoteip=$remoteip");
	$result = json_decode($url,TRUE);
	if ($result['success'] == 1)
	{
	$username=$_POST['usernameReg'];
	$email=$_POST['emailReg'];
	$password=$_POST['passwordReg'];
        $name=$_POST['nameReg'];
	$username_check = preg_match('~^[A-Za-z0-9_]{1,20}$~i', $username);
	$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{1,4})$~i', $email);
	$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
        
	if($username_check && $email_check && $password_check && strlen(trim($name))>0) 
	{
    
            $uid=$userClass->userRegistration($username,$password,$email,$name,$secret);
            if($uid)
            {
                $url=BASE_URL.'device_confirmations.php';
                header("Location: $url");
            }
            else
            {
              echo $errorMsgReg="Username or Email existed/taken.";
            }
	}
        else
        {
          echo $errorMsgReg="Enter valid details.";
        }
        }
        else{
            	if(isset($_POST['g-recaptcha']))
	{
		$captcha=$_POST['g-recaptcha'];
	}
	if (empty($captcha))
	{
        $url=BASE_URL.'errorcap.php';
    	header("Location: $url");
	}
        }
}
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" type="text/css" href="css\style.css" charset="utf-8" />
<html lang="en">
    <head>
<?php
include "head.php";
?>
        <title>SIT</title>
    </head>
    <body>
<?php
include "navbar.php";
?> 
        <main class="container">  

            <div class="container login-body">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Login</h3>
                        <form method="post" action="" name="login">
                            <label for="username" class="d-none d-lg-block">Username or Email</label>
                            <input type="text" id="usernameEmail" required name="usernameEmail" placeholder="name@example.com">
                            <label for="password" class="d-none d-lg-block">Password:</label>
                            <input type="password" name="password" autocomplete="off"/>
                            <input type="submit" class="button" name="loginSubmit" value="Login">
                        </form>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h3>Registration</h3>
                        <form method="post" action="" name="signup">
                            <label for="fullName" class="d-none d-lg-block">Name:</label>
                            <input type="text" id="nameReg" required name="nameReg"
                                   maxlength="45" placeholder="Name" onkeyup="lettersOnly(this)">
                            <label for="registerEmail" class="d-none d-lg-block">Email</label>
                            <input type="email" id="emailReg" required name="emailReg" placeholder="name@example.com">
                            <label for="registerUsername" class="d-none d-lg-block">Username:</label>
                            <input  type="text" id="usernameReg" required name="usernameReg"
                                   maxlength="45" placeholder="Username" onkeyup="lettersOnly(this)">

                            <label for="registerPassword" class="d-none d-lg-block">Password:</label>
                            <input type="password" id="passwordReg" pattern="[A-Za-z0-9!@#$%^&*()_]{6,20}" required name="passwordReg"
                                   title="This field is mandatory, Your password must have at least 6 length and contain at least one uppercase letter." maxlength="45" placeholder="Password">
                            <div class="g-recaptcha" data-sitekey="6LfP-OMZAAAAAOnO_K_jnRPN-rBs6FswXga0HwKq"></div>
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <br>
                            <input type="submit" class="button" name="signupSubmit" value="Signup">
                        </form>
                    </div>
                </div>
        </main>

    </body>

</html>
<?php
include "footer.php";
?>

