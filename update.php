<?php
session_start();

$conn = mysqli_connect("localhost","sqldev","password","project");

$storedid = $_SESSION['uid'];
if(isset($_POST["updateAcc"])) {
	if($_POST["updateAcc"]=="yes") {
		$email = $_POST["emailReg"];
		$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
		
		if($email_check) //check condition to fuifill preg_match
		{
			$query=$conn->prepare('update project.users set email=? WHERE uid=?');
			$query->bind_param('si',$email,$storedid);
			if($query->execute()){
				header('Location: account.php');
			}
		}
		else {
			echo "INVALID DETAILS";
		}
	}
}

?>