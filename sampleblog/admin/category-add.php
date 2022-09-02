<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4"> Category</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Add Category</li>
    </ol>
    <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Category
<<<<<<< HEAD:sampleblog/admin/category-add.php
                    <a href="index.php" class="btn btn-success float-end m-2">Dashboard</a>	
                        <a href="category-view.php" class="btn btn-primary float-end m-2">View Categories</a>
=======
                        <a href="category-view.php" class="btn btn-primary float-end m-2">View Category</a>
                        <a href="index.php" class="btn btn-success float-end m-2">Back Home</a>
>>>>>>> 7902ae74e33beb4c8106d8e5eda0685fcf99a15c:sampleblog/admin/cateory-add.php
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

                </div>
            </div>
        </div>

    </div>
</div>

<?php
    Include('includes/footer.php');
    Include('includes/scripts.php');
?>