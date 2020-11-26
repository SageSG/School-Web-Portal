 <?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
include('session.php');
?>
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
	
<div class="settings">
  <h1>CCA Record</h1>
      </div>
        <div>
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
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Username</td>";
        echo "<th scope='col'>Email</td>";
        echo "<th scope='col'>CCA</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
    while($query->fetch())
    {
            if ($uid == $session_uid)
            {
            echo "<td scope='col'>".$username."</td>";
            echo "<td scope='col'>".$email."</td>";
            echo "<td scope='col'>".$bname."</td>";
            echo "</tr>";	
            echo "</tbody>";
            echo "</table><br><br>";
            }
    }
    $query->close();
    
?>
        </div>
    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>


