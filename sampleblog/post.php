<?php
	include('admin/config/dbcon.php');
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

                    $posts ="SELECT * FROM posts WHERE slug='$slug'";
                    $posts_run = mysqli_query($con, $posts);

                    if(mysqli_num_rows($posts_run)>0)
                    {

                        foreach($posts_run as $postItem)
                        {
                            ?>
                            <div class="card m-2">
                                <div class="card-header">
                                    <h5><?=$postItem['name']?></h5>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <label class="text-dark m-2" for="">Posted on : <?=date('d-M-Y', strtotime($postItem['created_at']))?></label>
                                        <hr>
                                        <?php if($postItem['image'] != null):?>
                                        <img src="uploads/posts/<?=$postItem['image']?>" class="w-25" alt="<?=$postItem['name']?>">                                  
                                        <?php endif; ?>
                                        <div>
                                            <h5><?=$postItem['name']?></h5>
                                            <?=$postItem['description']?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }    
                    else
                    {
                        ?>
                        <h4>No such post found</h4>
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
            <div class="col-md-3">
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