<?php
if(empty($session_uid) && empty($session_googleCode))
{
	$url=BASE_URL.'index.php';
	header("Location: $url");
}
?>