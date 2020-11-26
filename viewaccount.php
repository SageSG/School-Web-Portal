 <?php
include('config.php');
include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);

include('session.php');
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
	
<div class="settings">
  <h1>Administrator Settings</h1>
  </div>
        <div class="part6">
                            <br>
                            <h4><b>Search User</b></h4>
                            <form method=POST action="viewaccount.php" class="container form-content" name="user">
      <div class="form-row">
          <div class="form-group col-lg-12">
                                <input class="form-control" type="text" id="uname" name="uname"
                                       maxlength="45" placeholder="Enter Username" onkeyup="lettersOnly(this)" aria-label="Search">
          </div>
          <div class="form-group col-lg-12">
          <button type="submit" class="btn btn-secondary btn-sm" value="yes" name="user">Find User</button>
          </div>
      </div>

  </form>
        </div>
  <div>
      
  <?php
$conn=mysqli_connect("localhost","sqldev","password","project");
if(isset($_POST["user"])) {
	if($_POST["user"]=="yes") {
		$username = $_POST['uname'];
		$query=$conn->prepare("select * from project.users WHERE username=?");
		$query->bind_param('s',$username);
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
				echo "<td>".$uid."</td>";
				echo "<td>".$email."</td>";
				echo "<td>".$username."</td>";
				echo "<td><a href='delete2.php?operation=delete&uid=".$uid."'>delete</a></td>";
				echo "</tr>";	
	
			}
                        echo "</tbody>";
		}
                echo "</table>";
	}
?>
      <br>
<br>
</div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

var deleteAcc = document.getElementById('deleteAcc');

window.onclick = function(event) {
	if (event.target == deleteAcc) {
		deleteAcc.style.display ="none";
	}
}

</script>
    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>


