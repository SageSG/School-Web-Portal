 <?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);

include('session.php');
$userDetails=$userClass->userDetails($session_uid);

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
<div class ="settings">
  <h1>Administrator Settings</h1>
</div>
 <?php
$conn=mysqli_connect("localhost","sqldev","password","project");
		$query=$conn->prepare("select * from project.users");
		$query->execute();
			$query->bind_result($uid,$email,$password,$username,$name,$profile_pic,$google_auth_code );
			echo "<table class='table'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th scope='col'>UID</td>";
			echo "<th scope='col'>email</td>";
			echo "<th scope='col'>name</td>";
                        echo "<th scope='col'>delete</td>";
			echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
			while($query->fetch())
			{
				echo "<tr>";
				echo "<td scope='col'>".$uid."</td>";
				echo "<td scope='col'>".$email."</td>";
				echo "<td scope='col'>".$username."</td>";
				echo "<td scope='col'><a href='delete2.php?operation=delete&uid=".$uid."'>delete</a></td>";
				echo "</tr>";	
	
			}
                        echo "</tbody>";
echo "</table><br><br>";
?>
    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>


