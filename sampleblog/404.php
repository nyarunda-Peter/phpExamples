<?php
	Include('includes\config.php');

	$page_title = "Home Page";
	$meta_descriptions = "Home page description blogging website";
	$meta_keywords = "php, html, css, laravel, codeigniter, react js";

	Include('includes\header.php');
	Include('includes\navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-body text-center">
                    <h1>404!</h1>
                    <h4>Page not found</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	Include('includes\footer.php');
?>
