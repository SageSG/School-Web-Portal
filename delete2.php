<?php
$connect=mysqli_connect("localhost","sqldev","password","project");
if(isset($_GET['operation'])){
	if($_GET['operation']=="delete")
	{
		$query=$connect->prepare("delete from project.users where uid=".$_GET['uid']);
		if($query->execute())
		{
			echo "<center>Record Deleted!</center><br>";
		}
	}
}
header("Location: viewall.php");
?>

