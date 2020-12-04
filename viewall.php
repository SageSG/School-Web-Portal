 <?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);

include('session.php');
include('session2.php');
$userDetails=$userClass->userDetails($session_uid);

if ($_SESSION['uid']!="8888")
{
        $url=BASE_URL.'home.php';
	header("Location: $url");
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
        <link rel="stylesheet" type="text/css" href="css/style.css" />
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
			$query->bind_result($uid,$username,$password,$email,$name,$profile_pic,$google_auth_code );
			echo "<table class='table'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th scope='col'>UID</th>";
			echo "<th scope='col'>Name</th>";
			echo "<th scope='col'>Email</th>";
                        echo "<th scope='col'>Delete</th>";
			echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
			while($query->fetch())
			{
				echo "<tr>";
				echo "<td>".$uid."</td>";
				echo "<td>".$username."</td>";
                                echo "<td>".$email."</td>";
				echo "<td><a href='delete2.php?operation=delete&uid=".$uid."'>delete</a></td>";
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


