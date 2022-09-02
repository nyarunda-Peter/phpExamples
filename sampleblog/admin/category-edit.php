<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4"> Category</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Edit Category</li>
    </ol>
    <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
<<<<<<< HEAD
                    <a href="index.php" class="btn btn-success float-end m-2">Dashboard</a>	
                        <a href="category-view.php" class="btn btn-primary float-end m-2">View Categories</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                        $category_id = $_GET['id'];
                        $category_edit = "SELECT * FROM categories WHERE id='$category_id' LIMIT 1";
                        $category_run = mysqli_query($con, $category_edit);
                        if(mysqli_num_rows($category_run))
                        {
                            $row = mysqli_fetch_array($category_run);
                            ?>                            
                            <form action="code.php" method="POST">

                                <input type="hidden" name="category_id" value="<?= $row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" value="<?= $row['name'];?>" class="form-control" required name="name">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Slug (URL) </label>
                                        <input type="text" value="<?= $row['slug'];?>" class="form-control" required name="slug">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Description </label>
                                        <textarea required name="description" class="form-control" rows="4"><?= $row['description'];?></textarea>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta-Title</label>
                                        <input type="text" class="form-control" value="<?= $row['meta_title'];?>" required name="meta_title" max="100">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Meta-description</label>
                                        <textarea required name="meta_description" class="form-control" rows="4"><?= $row['meta_description'];?></textarea>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Meta-Keyword</label>
                                        <textarea required name="meta_keyword" class="form-control" rows="4"><?= $row['meta_keyword'];?></textarea>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Navbar Status</label>
                                        <input type="checkbox" name="navbar_status" <?= $row['navbar_status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox"  name="status" <?= $row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="category_update" class="btn btn-primary">Save Category 
                                        </button>
                                    </div>
                                </div>

                            </form> 
                            <?php
                        }
                        else
                        {
                            ?>
                                <h4>No Record Found</h4>
                            <?php
                        }
                    ?>
=======
                        <a href="category-view.php" class="btn btn-primary float-end m-2">View Category</a>
                        <a href="index.php" class="btn btn-success float-end m-2">Back Home</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" required name="name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL) </label>
                                <input type="text" class="form-control" required name="slug">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description </label>
                                <textarea required name="description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta-Title</label>
                                <input type="text" class="form-control" required name="meta_title" max="100">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta-description</label>
                                <textarea required name="meta_description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Meta-Keyword</label>
                                <textarea required name="meta_keyword" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Navbar Status</label>
                                <input type="checkbox" name="navbar_status" width="100px" height="100px"/>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" width="100px" height="100px"/>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_category" class="btn btn-primary">Save Category 
                                </button>
                            </div>
                        </div>

                    </form> 

>>>>>>> 7902ae74e33beb4c8106d8e5eda0685fcf99a15c
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    Include('includes/footer.php');
    Include('includes/scripts.php');
?>