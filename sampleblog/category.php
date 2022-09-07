<?php
    Include('includes\config.php');
	if(isset($_GET['title']))
	{
		$slug = mysqli_real_escape_string($con, $_GET['title']);

		$category = "SELECT slug,meta_title,meta_description,meta_keyword FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
		$category_run = mysqli_query($con, $category);

		if(mysqli_num_rows($category_run)>0)
		{
			$categoryItem = mysqli_fetch_array($category_run);

			$page_title = $categoryItem['meta_title'];
			$meta_descriptions = $categoryItem['meta_description'];
			$meta_keywords = $categoryItem['meta_keyword'];;
		}
		else
		{
			$page_title = "Category Page";
			$meta_descriptions = "Category page description blogging website";
			$meta_keywords = "php, html, css, laravel, codeigniter, react js";
		}
	}
	else
	{
		$page_title = "Category Page";
		$meta_descriptions = "Category page description blogging website";
		$meta_keywords = "php, html, css, laravel, codeigniter, react js";
	}

			
	
	Include('includes\header.php');
	Include('includes\navbar.php');
?>

<div class ="py-5">
	<div class="containter">
		<div class="row">		
			<div class="col-md-9">
				<?php
					
					if(isset($_GET['title']))
					{
						$slug = mysqli_real_escape_string($con, $_GET['title']);

						$category = "SELECT id,slug FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
						$category_run = mysqli_query($con, $category);

						if(mysqli_num_rows($category_run)>0)
						{
							$categoryItem = mysqli_fetch_array($category_run);
							$category_id = $categoryItem['id'];

							$posts ="SELECT category_id,name,slug,created_at FROM posts WHERE category_id='$category_id' AND status='0'";
							$posts_run = mysqli_query($con, $posts);

							if(mysqli_num_rows($posts_run)>0)
							{
								foreach($posts_run as $postItem)
								{
									?>
									<div class="card m-2">
										<a href="<?=base_url('post/'.$postItem['slug']);?>" class="text-decoration-none">
											<div class="card card-body shadow-sm ">
												<h5><?=$postItem['name']?></h5>
												<div>
													<label class="text-dark m-2" for="">Posted on : <?=date('d-M-Y', strtotime($postItem['created_at']))?></label>
												</div>
											</div>
										</a>
									</div>
									<?php
								}
							}
							else
							{
								?>
								<h4>No posts found</h4>
								<?php
							}
						}
						else
						{
							?>
							<h4>No such Category Found</h4>
							<?php
						}

					}
					else
					{
						?>
						<h4>No such URL Found</h4>
						<?php
					}
				
				?>
				
			</div>
			<div class="col-md-3 me">
				<div class="card m-2">
					<div class="card-header">
						<h4>Advertise area</h4>
					</div>
					<div class="card-body">
						your advertisement
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	Include('includes\footer.php');
?>

