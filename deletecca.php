<?php
$connect=mysqli_connect("localhost","sqldev","password","project");
if(isset($_GET['operation'])){
	if($_GET['operation']=="delete")
	{
		$query=$connect->prepare("delete from project.basketball where bid=".$_GET['bid']);
		if($query->execute())
		{
			echo "<center>Record Deleted!</center><br>";
		}
	}
}
header("Location: viewcca.php");
?>

