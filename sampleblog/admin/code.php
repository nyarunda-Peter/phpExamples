<?php

Include('authentication.php');


if (isset($_POST['add_user'])) {

	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
	$role_as = $_POST['role_as'];
	$status = $_POST['status'] == true ? '1' : '0';


	if($password == $confirm_password)
	{
		//check email if registered
		$check_email = "SELECT email FROM users WHERE email='$email'";
		$check_email_run = mysqli_query($con, $check_email);

		if(mysqli_num_rows($check_email_run) > 0)
		{
			//Email already exists
			$_SESSION['message'] = "User already exists";
			header('Location: view-registered.php');
			exit(0);
		}
		else
		{
			$query = "INSERT INTO users(fname, lname, email, password, role_as, status) VALUES ('$fname', '$lname', '$email', '$confirm_password', '$role_as', '$status')";
			$query_run = mysqli_query($con, $query);

			if ($query_run) 
			{
				$_SESSION['message'] = "User added successfully";
				header('Location: view-registered.php');
				exit(0);
			}
			else
			{
				$_SESSION['message'] = "Something went wrong";
				header('Location: view-registered.php');
				exit(0);
			}
		}
	}
	else
	{
		$_SESSION['message'] = "Password entered do not match, please try again";
		header("Location: register-add.php");
		exit(0);
	}

}

if (isset($_POST['update_user'])) 
{
	$user_id = $_POST['user_id'];
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
	$role_as = $_POST['role_as'];
	$status = $_POST['status'] == true ? '1' : '0';


	if (!empty($confirm_password) ) {

		if($password == $confirm_password)
		{

			Include('update-existing.php');

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
		Include('update-existing.php');
	}
}


?>