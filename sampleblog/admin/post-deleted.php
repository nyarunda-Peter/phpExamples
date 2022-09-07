<?php
    Include('authentication.php');

    if(isset($_POST['post_delete']))
    {
        $post_id = $_POST['post_delete'];

        // $image_res = "SELECT * FROM posts WHERE id='$post_id'";
        // $image_run = mysqli_query($con, $image_res);
        // $row = mysqli_fetch_array($image_run);
        // $image = $row['image'];

        $query = "DELETE FROM posts WHERE id='$post_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
           
            $_SESSION['message'] = "Post deleted successfully";
            header('Location: post-view.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Post delete unsuccessfull";
            header('Location: post-view.php');
            exit(0);
        }

    }
?>