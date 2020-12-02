 <?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
include('session.php');
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
        <title>SIT</title>
    </head>
    <body>
        <?php
        include "navbar.php";
        ?> 
    <main class="container">          
        <div>
<div class="settings">
  <h1>CCA Record</h1>
      </div>
        <table class='table'>
        <thead>
        <tr>
            <th scope='col'>Username</th>
            <th scope='col'>Email</th>
            <th scope='col'>CCA</th>
        </tr>
        </thead>
        
        
 <?php
    $servername = "localhost";
    $username = "sqldev";
    $password = "password";
    $dbname = "project";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $query=$conn->prepare("select * from users, basketball where users.uid = basketball.uid;");
    $query->execute();
    $query->bind_result($uid,$username,$password,$email,$name,$profile_pic,$google_auth_code,$bid,$bname,$uid  );
    while($query->fetch())
    {
            if ($uid == $session_uid)
            {
            echo "<tbody>";
            echo "<td scope='col'>".$username."</td>";
            echo "<td scope='col'>".$email."</td>";
            echo "<td scope='col'>".$bname."</td>";
            echo "</tr>";	
            echo "</tbody>";
            }
    }
    $query->close();
    
?>
        </table><br><br><br><br><br><br><br><br>
    </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="footer">
                <?php
                include "footer.php";
                ?>
            </div>
        </div>
    </body>
</html>


