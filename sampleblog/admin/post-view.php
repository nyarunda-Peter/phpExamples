<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4"> Category</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">View  Category</li>
    </ol>
    <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>View Category
                        <a href="index.php" class="btn btn-success float-end m-2">Dashboard</a>	
                        <a href="category-add.php" class="btn btn-primary float-end m-2">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">
                
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    Include('includes/footer.php');
    Include('includes/scripts.php');
?>