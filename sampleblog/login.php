<?php
	

	if (isset($_SESSION['auth'])) {

		if (isset($_SESSION['message'])) {
			// code...
			$_SESSION['message'] = "You are already logged in";
		}
		header("Location: index.php");
		exit(0);
	}
	Include('includes/header.php');
	Include('includes/navbar.php');
?>

<div class ="py-5">
	<div class="containter">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						<h4>Login</h4>
					</div>
					<div class="card-body">
						<form action="logincode.php" method="POST">

							<div class="form-group mb-3">
								<label>Email id</label>
								<input type="Email" name="email" placeholder="Enter email address" class="form-control">
							</div>
							<div class="form-group mb-3">
								<label>Password</label>
								<input type="password" name="password" placeholder="Enter password" class="form-control">
							</div>
							<div class="form-group mb-3">
								<button type="submit" name="login_btn" class="btn btn-primary">Login</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
		
	</div>
</div>
<?php
	Include('includes/footer.php');
?>
