<?php

if (isset($_SESSION['auth'])) {
	$_SESSION['message'] = "You are already logged in	";
	header("Location: index.php");
	exit(0);
}

Include('includes\header.php');
Include('includes\navbar.php');

?>

<div class ="py-5">
	<div class="containter">
		<div class="row justify-content-center">
			<div class="col-md-5">

				<?php include('message.php');?>

				<div class="card">
					<div class="card-header">
						<h4>Register</h4>
					</div>
					<div class="card-body">
						<form action="registercode.php" method="POST">

							<div class="form-group mb-3">
								<label>First Name</label>
								<input type="text" name="fname" placeholder="Enter first name" class="form-control">
							</div>
							<div class="form-group mb-3">
								<label>Last Name</label>
								<input type="text" name="lname" placeholder="Enter last name" class="form-control">
							</div>
							<div class="form-group mb-3">
								<label>Email id</label>
								<input type="Email" name="email" placeholder="Enter email address" class="form-control">
							</div>
							<div class="form-group mb-3">
								<label>Password</label>
								<input type="password" name= "password"placeholder="Enter password" class="form-control">
							</div>
							<div class="form-group mb-3">
								<label>Confirm Password</label>
								<input type="password" name= "cpassword"placeholder="Enter password again" class="form-control">
							</div>
							<div class="form-group mb-3">
								<button type="submit" class="btn btn-primary" name='register_btn'>Register</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
		
	</div>
</div>
<?php
	Include('includes\footer.php');
?>
