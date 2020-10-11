<?php 
    get_header();
?>


<?php require_once('partials/nav.php')?>
	<div class="container-fluid">
		<div class="container text-center py-5"><h1 class="display-3"><?php the_title();?></h1></div>
		<div class="container">

			<!--Boudoir-->
			<div class="container">
                <?php 
                while(have_posts()){
                    the_post(); ?>
                    <div class="container">
                        <div class="container text-center">
                            <img class="img-fluid " src="<?php the_post_thumbnail_url()?>" style="max-height:600px;max-width:600px;">
                        </div>
                        <hr>
                            <?php 
                                if(the_content()){
                                ?>
                        <div class="container">
                            <?php the_content();?>
                        </div>
                            <?php } ?>
				    </div>
                <?php }
                ?>
                <div class="container p-5">
                    <a href="    <?php echo get_post_type_archive_link(get_post_type())?>">
                    <?php 
                        if(get_post_type() == 'post'){
                            echo 'Go back to my blog';
                    } else {
                        echo 'Go back to previous page';
                    }
                    ?>
                     
                    
                    <i class="fas fa-external-link-alt"></i></a>
                </div>
			</div>
	</div>




<?php 
    require_once('partials/modal.php');
    get_footer();
?>