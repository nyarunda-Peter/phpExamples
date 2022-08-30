<?php

session_start();

Include('admin/config/dbcon.php');

if(isset($_POST['register_btn']))
{
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);

	if($password == $confirm_password)
	{
		//check email if registered
		$check_email = "SELECT email FROM users WHERE email='$email'";
		$check_email_run = mysqli_query($con, $check_email);

		if(mysqli_num_rows($check_email_run) > 0)
		{
			//Email already exists
			$_SESSION['message'] = "User already exists";
			header("Location: register.php");
			exit(0);
		}
		else
		{
			$user_query = "INSERT INTO users(fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$confirm_password')";
			$user_query_run = mysqli_query($con, $user_query);

			if ($user_query_run) 
			{
				$_SESSION['message'] = "Registered Successfully";
				header("Location: login.php");
				exit(0);
			}
			else
			{
				$_SESSION['message'] = "Something went wrong";
				header("Location: register.php");
				exit(0);
			}
		}
	}
	else
	{
		$_SESSION['message'] = "Password entered do not match, please try again";
		header("Location: register.php");
		exit(0);
	}
}
else
{
	header("Location: register.php");
	exit(0);

}

?>