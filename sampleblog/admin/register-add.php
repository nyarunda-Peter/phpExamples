<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4"> Add Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Add User</li>
    </ol>
    <div class="row">

        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Users
                        <a href="view-registered.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" name="email">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Role As</label>
                                <select name="role_as" required class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1" name="admin">Admin</option>
                                    <option value="0" name="user">User</option>
                                    
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" width="100px" height="100px"/>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_user" class="btn btn-primary">
                                   Add User 
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