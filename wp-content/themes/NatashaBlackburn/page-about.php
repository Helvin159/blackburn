<?php 
    get_header();
    require_once('partials/nav.php');
?>
	<div class="container-fluid">
		<div class="container px-3">
			<h1 class="display-4"><?php the_title()?></h1>
		</div>
		<div class="container py-3 px-5">
			<?php the_content()?>
		</div>
	</div>

<?php 
	get_footer();
?>