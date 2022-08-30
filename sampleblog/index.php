<?php
	session_start();
	Include('includes\header.php');
	Include('includes\navbar.php');
?>

<div class ="py-5">
	<div class="containter">
		<div class="row">
			<div class="col-md-12">

				<?php include('message.php'); ?>

				<h3>hello</h3>
 				
 				<button class="btn btn-primary">Login</button>

			</div>
		</div>
		
	</div>
</div>
<?php
	Include('includes\footer.php');
?>
