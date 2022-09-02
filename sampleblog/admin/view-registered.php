<?php

Include('authentication.php');
Include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">

    	<div class="col-md-12">

    		<?php include('message.php'); ?>
    		
    		<div class="card">
    			<div class="card-header">
    				<h4>Registered Users
<<<<<<< HEAD
    					<a href="index.php" class="btn btn-success float-end m-2">Dashboard</a>	
						<a href="register-add.php" class="btn btn-primary float-end m-2">Add User</a>
=======
    					<a href="register-add.php" class="btn btn-primary float-end m-2">Add User</a>
    					<a href="index.php" class="btn btn-success float-end m-2">Back Home</a>
>>>>>>> 7902ae74e33beb4c8106d8e5eda0685fcf99a15c
					</h4>
    			</div>
    			<div class="card-body">
    				<table class="table table-bordered">
    					<thead>
    						<tr>
    							<th>ID</th>
    							<th>Name</th>
    							<th>Email</th>
    							<th>Role</th>
    							<th>Edit</th>
    							<th>Delete</th>
    						</tr>
    					</thead>
    					<tbody>
    						<?php
    							$query = "SELECT * FROM users";
    							$query_run = mysqli_query ($con, $query);

    							if (mysqli_num_rows($query_run) > 0) 
    							{
    								
    								foreach($query_run as $row)
    								{
    									?>
    									<tr>
			    							<td><?= $row['id']; ?></td>
			    							<td><?= $row['fname'].' '.$row['lname']; ?></td>
			    							<td><?= $row['email']; ?></td>
			    							<td>
		    								<?php
		    									if ( $row['role_as'] == '1') {
		    										echo "Admin";
		    									}elseif ( $row['role_as'] == '0') {
		    										echo "Regular User";
		    									}
			    							?>  					
			    							</td>
			    							<td><a href="edit-registered.php?id=<?=$row['id']?>" class="btn btn-primary">Edit</a></td>

			    							<td>
			    								<form action="code.php" method="POST">
			    									<button type="submit" class="btn btn-danger" name="user_delete" value="<?=$row['id']?>">Delete</button>	
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
    									<td colspan="6">No Record Found</td>
    								</tr>

    								<?php
    							}

    						?>
    					</tbody>
    					
    				</table>
    			</div>
    			
    		</div>
    		
    	</div>

    </div>
</div>

<?php
    Include('includes/footer.php');
    Include('includes/scripts.php');
?>