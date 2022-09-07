<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total categories
                    <?php
                        $dash_category = "SELECT * FROM categories ";
                        $dash_category_query_run = mysqli_query($con, $dash_category);

                        if($category_total = mysqli_num_rows($dash_category_query_run))
                        {
                            echo'<h4 class="mb-0">'.$category_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">No Category Found </h4>';
                        }

                    ?>
                    
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Post
                    <?php
                        $dash_posts = "SELECT * FROM posts ";
                        $dash_posts_query_run = mysqli_query($con, $dash_posts);

                        if($posts_total = mysqli_num_rows($dash_posts_query_run))
                        {
                            echo'<h4 class="mb-0">'.$posts_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">No Posts Found </h4>';
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Users
                     <?php
                        $dash_users = "SELECT * FROM users ";
                        $dash_users_query_run = mysqli_query($con, $dash_users);

                        if($users_total = mysqli_num_rows($dash_users_query_run))
                        {
                            echo'<h4 class="mb-0">'.$users_total.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">No Data </h4>';
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">users
                    <h4 class="mb-;0">2</h4>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    Include('includes/footer.php');
    Include('includes/scripts.php');
?>
