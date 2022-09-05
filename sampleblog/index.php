<?php
	include('admin/config/dbcon.php');
	Include('includes\header.php');
	Include('includes\navbar.php');
?>

<div class ="py-5 bg-dark">
	<div class="containter">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-white">Category</h3>
				<div class="underline"></div>
			</div>

			<?php
				$homeCategory = "SELECT * FROM categories WhERE navbar_status='0' AND status='0' LIMIT 12";
				$homeCategory_run = mysqli_query($con, $homeCategory);   
				
				if(mysqli_num_rows($homeCategory_run)>0)
				{
					foreach($homeCategory_run as $homeCateItem)
					{
					?>
																
					<div class="col-md-3 mb-4">
						<a class="text-decoration-none m-2" href="category.php?title=<?=$homeCateItem['slug']?>">
							<div class="card card-body">
								<?= $homeCateItem['name'];?>
							</div>
						</a>
					</div>
					
					<?php
					}
				}
			?>
		</div>
		
	</div>
</div>


<div class ="py-5 bg-light">
	<div class="containter">
		<div class="row">
			<div class="col-md-9">
				<h3 class="text-dark">Sample Blog</h3>
				<div class="underline"></div>
				<p>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem provident amet eaque et perspiciatis aliquam. Molestiae nesciunt amet eos unde. Labore alias enim fugiat saepe sint, minus nam rem aperiam.
				</p>
			</div>
		</div>
		
	</div>
</div>

<div class ="py-5 bg-light">
	<div class="containter">
		<div class="row">
			<div class="col-md-9">
				<h3 class="text-dark">Latest Posts </h3>
				<div class="underline"></div>
				<?php
					$homePosts = "SELECT * FROM posts WhERE status='0' ORDER BY id DESC LIMIT 12";
					$homePosts_run = mysqli_query($con, $homePosts);   
					
					if(mysqli_num_rows($homePosts_run)>0)
					{
						foreach($homePosts_run as $homePostsItems)
						{
						?>
																	
						<div class="mb-4">
							<a class="text-decoration-none m-2" href="post.php?title=<?=$homePostsItems['slug']?>">
								<div class="card card-body bg-light shadow-sm">
									<?= $homePostsItems['name'];?>
								</div>
							</a>
						</div>
						
						<?php
						}
					}
				?>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						<h4>Reach Us</h4>
					</div>
					<div class="card body">
						info@example.com
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
</div>

<?php
	Include('includes\footer.php');
?>
