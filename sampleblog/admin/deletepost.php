<?php
    Include('authentication.php');
    include('message.php');

    if(isset($_POST['post_delete']))
    // if (isset($_POST['user_delete'])) 
{
	$post_id = $_POST['post_delete'];

	$query = "DELETE FROM posts WHERE id='$post_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message'] = "User deleted successfully";
		header('Location: post-view.php');
		exit(0);
	}
	else
	{
		$_SESSION['message'] = "Something went wrong, pleae try again";
		header('Location: post-view.php');
		exit(0);
	}


}
    // {
    //     $post_id = $_POST['post_delete'];

        
    //     // $check_img_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
    //     // $check_img_res = mysqli_query($con, $check_img_query);
    //     // $res_data = mysqli_fetch_array($check_img_res);
    //     // $image = $res_data['image'];

    //     $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1";
    //     $query_run = mysqli_query($con, $query);

    //     if($query_run)
    //     {
    //         $_SESSION['message'] = "Post deleted successfully";
    //         header('Location: post-delete.php');
    //         exit(0); 
    //     }
    //     else
    //     {
    //         $_SESSION['message'] = "Something went wrong, pleae try again";
    //         header('Location: post-delete.php');
    //         exit(0);
    //     }
        


    //         // if(file_exists('../uploads/posts/'.$image)):
    //         //     unlink("../uploads/posts/".$image);
    //         // endif;
        
    // }
?>