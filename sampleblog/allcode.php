<?php
session_start();

if (isset($_POST['logout_btn'])) {
	//Session destroy
	unset($_SESSION['auth']);
	unset($_SESSION['auth_user']);
	unset($_SESSION['auth_role']);

	$_SESSION['message'] = "Logged out successfully";
	header("Location: index.php");
	exit(0);
}


?>