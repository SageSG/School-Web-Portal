<body>
<div>
<?php
		if(isset($_POST["return"])) {
			if($_POST["return"]=="yes") {
				header('Location: register.php');
			}
		}			
	?>
<h2> An Error Has Occured</h2>
<h2> Please return to home via the button</h2>
<form method=POST action="" name="return">
<p><button type="submit" class="w3-btn w3-red" value="yes" name="return">Return to Home</button></p>
</form>	
</div>
</body>