<?php 
    get_header();
?>


<?php require_once('partials/nav.php')?>
	<div class="container-fluid">
		<div class="container text-center"><h1 class="display-3"><?php the_title()?></h1></div>
		<div class="container">

			<!--Boudoir-->
			<div class="row py-2">
            <?php 
            $showPost = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'shot',
                'paged' => false,
            ));
            while($showPost->have_posts()){
                $showPost->the_post(); ?>
                
                <div class="col-md-3">
                    <a href="<?php the_permalink()?>"><img class="img-fluid imgthumbs"  src="<?php the_post_thumbnail_url('pagethumbnails')?>"></a>
                    </div>
            <?php }
          
        ?>
			</div>
	</div>


<!--
<div class="container"><div id="Indicators29" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#Indicators29" data-slide-to="0"><img src="assets/boudoir_thumbs/1"></li><li data-target="#Indicators29" data-slide-to="1"><img src="assets/boudoir_thumbs/2"></li><li data-target="#Indicators29" data-slide-to="2"><img src="assets/boudoir_thumbs/3"></li><li data-target="#Indicators29" data-slide-to="3"><img src="assets/boudoir_thumbs/4"></li><li data-target="#Indicators29" data-slide-to="4"><img src="assets/boudoir_thumbs/5"></li><li data-target="#Indicators29" data-slide-to="5"><img src="assets/boudoir_thumbs/6"></li><li data-target="#Indicators29" data-slide-to="6"><img src="assets/boudoir_thumbs/7"></li><li data-target="#Indicators29" data-slide-to="7"><img src="assets/boudoir_thumbs/8"></li><li data-target="#Indicators29" data-slide-to="8"><img src="assets/boudoir_thumbs/9"></li><li data-target="#Indicators29" data-slide-to="9"><img src="assets/boudoir_thumbs/11"></li><li data-target="#Indicators29" data-slide-to="10"><img src="assets/boudoir_thumbs/12"></li><li data-target="#Indicators29" data-slide-to="11"><img src="assets/boudoir_thumbs/13"></li><li data-target="#Indicators29" data-slide-to="12"><img src="assets/boudoir_thumbs/14"></li><li data-target="#Indicators29" data-slide-to="13"><img src="assets/boudoir_thumbs/15"></li><li data-target="#Indicators29" data-slide-to="14"><img src="assets/boudoir_thumbs/16"></li><li data-target="#Indicators29" data-slide-to="15"><img src="assets/boudoir_thumbs/17"></li><li data-target="#Indicators29" data-slide-to="16"><img src="assets/boudoir_thumbs/18"></li><li data-target="#Indicators29" data-slide-to="17"><img src="assets/boudoir_thumbs/19"></li><li data-target="#Indicators29" data-slide-to="18"><img src="assets/boudoir_thumbs/20"></li><li data-target="#Indicators29" data-slide-to="19"><img src="assets/boudoir_thumbs/21"></li><li data-target="#Indicators29" data-slide-to="20"><img src="assets/boudoir_thumbs/22"></li><li data-target="#Indicators29" data-slide-to="21"><img src="assets/boudoir_thumbs/23"></li><li data-target="#Indicators29" data-slide-to="22"><img src="assets/boudoir_thumbs/24"></li><li data-target="#Indicators29" data-slide-to="23"><img src="assets/boudoir_thumbs/25"></li><li data-target="#Indicators29" data-slide-to="24"><img src="assets/boudoir_thumbs/26"></li><li data-target="#Indicators29" data-slide-to="25"><img src="assets/boudoir_thumbs/27"></li><li data-target="#Indicators29" data-slide-to="26"><img src="assets/boudoir_thumbs/28"></li><li data-target="#Indicators29" data-slide-to="27"><img src="assets/boudoir_thumbs/29"></li><li data-target="#Indicators29" data-slide-to="28"><img src="assets/boudoir_thumbs/30"></li><li data-target="#Indicators29" data-slide-to="29"><img src="assets/boudoir_thumbs/31" class="active"></li></ol><div class="carousel-inner"><div class="carousel-item"><img src="assets/Boudoir/1.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/2.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item "><img src="assets/Boudoir/3.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/4.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/5.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/6.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item "><img src="assets/Boudoir/7.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item "><img src="assets/Boudoir/8.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/9.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/10.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/11.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/12.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item "><img src="assets/Boudoir/13.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/14.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/15.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/16.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item "><img src="assets/Boudoir/17.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item "><img src="assets/Boudoir/18.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/19.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/20.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/21.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/22.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/23.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/24.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/25.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/26.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/27.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/28.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item"><img src="assets/Boudoir/29.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div><div class="carousel-item  active"><img src="assets/Boudoir/30.jpg" class="d-block w-auto m-auto img-fluid" alt="..."></div></div><a class="carousel-control-prev" href="#Indicators29" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#Indicators29" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div></div>
-->



<?php 
    require_once('partials/modal.php');
    get_footer();
?>