<?php

Include('authentication.php');


if(isset($_POST['category_delete']))
{
	$category_id = $_POST['category_delete'];
	//2 = delete
	$query = "UPDATE categories SET status='2' WHERE id='$category_id' LIMIT 1";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message'] = "Category deleted successfully";
		header('Location: category-view.php');
		exit(0);
	}
	else
	{
		$_SESSION['message'] = "Something went wrong, pleae try again";
		header('Location: category-view.php');
		exit(0);
	}


}

if(isset($_POST['category_update']))
{
	$category_id = $_POST['category_id'];
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$slug = mysqli_real_escape_string($con, $_POST['slug']);
	$description = mysqli_real_escape_string($con, $_POST['description']);

	$meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);	
	$meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
	$meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);

	$navbar_status = mysqli_real_escape_string($con, $_POST['navbar_status'] == true ? '1' : '0');
	$status = mysqli_real_escape_string($con, $_POST['status'] == true ? '1' : '0');

	$query = "UPDATE categories SET name='$name', slug='$slug', description='$description', meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', navbar_status='$navbar_status', status='$status' WHERE id='$category_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message'] = "Category edited successfully";
		header('Location: category-view.php');
		exit(0);
	}
	else
	{
		$_SESSION['message'] = "Something went wrong, pleae try again";
		header('Location: category-edit.php?id='.$category_id);
		exit(0);
	}

}

if (isset($_POST['add_category'])) 
{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$slug = mysqli_real_escape_string($con, $_POST['slug']);
	$description = mysqli_real_escape_string($con, $_POST['description']);

	$meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);	
	$meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
	$meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);

	$navbar_status = mysqli_real_escape_string($con, $_POST['navbar_status'] == true ? '1' : '0');
	$status = mysqli_real_escape_string($con, $_POST['status'] == true ? '1' : '0');

	$query = "INSERT INTO categories (name, slug, description, meta_title, meta_description, meta_keyword, navbar_status, status) VALUES ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$status')";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message'] = "Category added successfully";
		header('Location: category-view.php');
		exit(0);
	}
	else
	{
		$_SESSION['message'] = "Something went wrong, pleae try again$$$";
		header('Location: category-add.php');
		exit(0);
	}

}




if (isset($_POST['user_delete'])) 
{
	$user_id = $_POST['user_delete'];

	$query = "DELETE FROM users WHERE id='$user_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message'] = "User deleted successfully";
		header('Location: view-registered.php');
		exit(0);
	}
	else
	{
		$_SESSION['message'] = "Something went wrong, pleae try again";
		header('Location: view-registered.php');
		exit(0);
	}


}


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
				$_SESSION['message'] = "Something went wrong, pleae try again";
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