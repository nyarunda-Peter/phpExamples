<?php

Include('authentication.php');

if (isset($_POST['update_user'])) 
{
	$user_id = $_POST['user_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['cpassword'];
	$role_as = $_POST['role_as'];
	$status = $_POST['status'] == true ? '1' : '0';


	if (!empty($confirm_password) ) {

		if($password == $confirm_password)
		{

			Include('update.php');

		}
		else
		{
			$_SESSION['message'] = "Password entered do not match, please try again";
			header("Location: edit-registered.php?id=$user_id");
			exit(0);
		}
	}
	else
	{
		Include('update.php');
	}
}


?>