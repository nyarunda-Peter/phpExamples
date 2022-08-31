<?php

	$query = "UPDATE users SET fname='$fname', lname='$lname', password='$password', role_as='$role_as', status='$status'  WHERE id='$user_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message'] = "User Details Updated Successfully";
		header("Location: view-registered.php");
		exit(0);	
	}
?>
