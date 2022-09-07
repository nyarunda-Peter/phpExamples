<?php
session_start();
Include('config/dbcon.php');

if (!isset($_SESSION['auth'])) {
	// code...
	$_SESSION['message'] = "Login to access dashboard";
	header("Location: ../login.php");
	exit(0);
}
else
{
	if ($_SESSION['auth_role'] != "1" && $_SESSION['auth_role'] != "2") {
		// code...
		$_SESSION['message'] = "You are not authorized to access ADMIN";
		header("Location: ../login.php");
		exit(0); 
	}
}


?>