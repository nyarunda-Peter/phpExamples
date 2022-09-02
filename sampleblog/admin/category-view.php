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
<<<<<<< HEAD
                        <a href="index.php" class="btn btn-success float-end m-2">Dashboard</a>	
                        <a href="category-add.php" class="btn btn-primary float-end m-2">Add Category</a>
=======
                        <a href="category-add.php" class="btn btn-primary float-end m-2">Add Category</a>
                        <a href="index.php" class="btn btn-success float-end m-2">Back Home</a>
>>>>>>> 7902ae74e33beb4c8106d8e5eda0685fcf99a15c
                    </h4>
                </div>
                <div class="card-body">

                    <div class="table table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

<<<<<<< HEAD
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category = "SELECT * FROM categories WHERE status!='2'";
                                    $category_run = mysqli_query($con, $category);

                                    if(mysqli_num_rows($category_run) > 0)
                                    {
                                        foreach($category_run as $item)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?= $item['id']?></td>
                                                    <td><?= $item['name'];?> </td>
                                                    <td>
                                                        <?php
                                                            //ternary function
                                                            /*<?= $item['status'] == '1' ? 'Hidden' : 'Visible'?>*/
                                                            if($item['status'] == '1'){echo 'Hidden';} else {echo 'Visible';}
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="category-edit.php?id=<?= $item['id']?>" class="btn btn-info">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="code.php" method="POST">
                                                            <button type="submit" name="category_delete" value="<?= $item['id']?>" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }                     
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="5">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
=======
                    <?php
                        $category = "SELECT * FROM categories";
                        $category_run = mysqli_query($con, $category);

                        if (mysqli_num_rows($category_run) > 0) 
                        {
                            foreach($category_run as $item)
                            {
                                ?>
                                <tr>
                                    <td><?= $item['id']?></td>
                                    <td><?= $item['name']?></td>
                                    <td>
                                        <?php

                                        /* ternary operator <?= $item['status'] == '1' ? 'hidden' : 'visible' ?> */

                                            if($item['status'] == '1'){ echo 'Hidden';} else { echo 'Visible';}
                                        ?>
                                    </td>
                                    <td>
                                        <a href="category-edit.php?id=<?= $item['id']?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                    
                                </tr>
                                <?php

                            }
                            
                        }
                        else
                        {
                           ?>

                            <tr>
                                <td colspan="5"></td>
                            </tr> 

                            <?php
                        }


                    ?>      
                            </tbody>
                        </table>
                        
                    </div>

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