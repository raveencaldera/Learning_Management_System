

<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION["message"] = "you are now logged in";
	header("location:login.php");


?>



	