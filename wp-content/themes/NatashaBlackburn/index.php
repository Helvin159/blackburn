<?php 
    get_header();
?>


<?php require_once('partials/nav.php')?>
	<div class="container-fluid">
		<div class="container text-center"><h1 class="display-3">Blog</h1></div>
		<div class="container">

			<!--Boudoir-->
			<div class="row py-2">
                <?php 
                while(have_posts()){
                    the_post(); ?>
                    <div class="col-md-4 py-4">
                        <div class="container text-center">
                            <a href="<?php the_permalink()?>" class="m-auto">
                                <img class="img-fluid imgthumbs m-auto" src="<?php the_post_thumbnail_url('pagethumbnails')?>">
                            </a>
                        </div>
                    <hr>
                    <div class="container py-1 text-center">
                        <h5 class="didot"><?php the_title()?></h5>
                    </div>
				    </div>
                <?php }
                ?>
			</div>
	</div>

<?php 
    require_once('partials/modal.php');
    get_footer();
?>