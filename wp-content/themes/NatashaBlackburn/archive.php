<?php 
    get_header();
?>


<?php require_once('partials/nav.php')?>
	<div class="container-fluid">
		<div class="container text-center"><h1 class="display-3"><?php the_archive_title();?></h1></div>
		<div class="container">

			<!--Boudoir-->
			<div class="row py-2">
                <?php 
                while(have_posts()){
                    the_post(); ?>
                    <div class="col-md-3 my-2">
					    <a href="<?php the_permalink()?>">
                            <img class="img-fluid imgthumbs" src="<?php the_post_thumbnail_url('pagethumbnails')?>">
                        </a>
				    </div>
                <?php }
                ?>
			</div>
	</div>
<?php 
    require_once('partials/modal.php');
    get_footer();
?>