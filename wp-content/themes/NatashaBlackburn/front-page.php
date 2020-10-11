<?php 
    get_header();
?>

	<div class="container-fluid hero">

		<div id="carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner ">
<?php 
$showPost = new WP_Query(array(
	'posts_per_page' => 5,
	'post_type' => 'homecarousel',
	'paged' => false
));

$count = 0;
while($showPost->have_posts()){
	$showPost->the_post(); ?>
		<div class="carousel-item <?php if($count <= 0){ echo 'active';} ?> " style="background:url(<?php the_post_thumbnail_url('home')?>);height:100vh;width:100vw;background-size:cover;background-repeat:no-repeat;background-position:center center">
			<!-- <img src=""  class="d-block w-100 img-fluid" alt="..."> -->
		</div>
		<?php $count++;?>
<?php }
?>

				
			</div>
		</div>

		<div id="mobilecarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php 
				$showPost = new WP_Query(array(
					'posts_per_page' => 5,
					'post_type' => 'homecarousel',
					'paged' => false
				));
				$count = 0;
				while($showPost->have_posts()){
					$showPost->the_post(); ?>
						<div class="carousel-item <?php if($count <= 0){ echo 'active';} ?>" style="background:url(<?php the_post_thumbnail_url('home')?>);height:100vh;width:100vw;background-size:cover;background-repeat:no-repeat;background-position:center center">
			<!-- <img src=""  class="d-block w-100 img-fluid" alt="..."> -->
		</div>
				<?php } ?>
			</div>
		</div>

		<div id="tabletcarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			<?php 
				$showPost = new WP_Query(array(
					'posts_per_page' => 5,
					'post_type' => 'homecarousel',
					'paged' => false
				));
				$count = 0;
				while($showPost->have_posts()){
					$showPost->the_post(); ?>
						<div class="carousel-item <?php if($count <= 0){ echo 'active';} ?>" style="background:url(<?php the_post_thumbnail_url('home')?>);height:100vh;width:100vw;background-size:cover;background-repeat:no-repeat;background-position:center center">
			<!-- <img src=""  class="d-block w-100 img-fluid" alt="..."> -->
		</div>
				<?php } ?>
			</div>
		</div>

		<div class="container p-2 m-auto text-left details">

			<h1 class="display-4">Natasha Blackburn</h1>

		</div>

		<div class="container">
		<a class="btn btn-md btn-light m-5" id="herobtn" href="<?php echo esc_url(site_url('/blog'))?>">View My Work</a>
		</div>
	</div>
<?php 
    get_footer();
?>