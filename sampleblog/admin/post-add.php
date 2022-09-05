<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Posts</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Add Post</li>
    </ol>
    <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Post
                    <a href="index.php" class="btn btn-success float-end m-2">Dashboard</a>	
                        <a href="post-view.php" class="btn btn-primary float-end m-2">View Posts</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="">Category Lists</label>
                                <?php
                                    $category = "SELECT * FROM categories WHERE status='0'";
                                    $category_run = mysqli_query($con, $category);

                                    if(mysqli_num_rows($category_run) > 0)
                                    {
                                        ?>
                                            <select name="category_id" required class="form-control" id="">
                                                                                                
                                                <option value="">--Select Category--</option>
                                                    <?php
                                                        foreach($category_run as $category_item)
                                                        {
                                                            ?>
                                                                <option value="<?= $category_item['id'] ?>"><?= $category_item['name']?></option>
                                                            <?php

                                                        }
                                                    ?>
                                                
                                            </select>

                                        <?php

                                    }
                                    else
                                    {
                                        ?>
                                            <h5>No Category Available</h5>
                                        <?php
                                    }
                                ?>
                            
                            </div>

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
                                <textarea required name="description" id="summernote" class="form-control" rows="4"></textarea>
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

                            <div class="col-md-12 mb-3">
                                <label for="">Image </label>
                                <input type="file" class="form-control" required name="image">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" width="100px" height="100px"/>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="post_add" class="btn btn-primary">Save Post                                 </button>
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