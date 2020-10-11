<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0,0,0,0);">
			<a class="navbar-brand" href="<?php echo esc_url(site_url('/home'))?>">Natasha Blackburn</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-stream"></span>
			</button>
			<div class="collapse navbar-collapse float-right" id="navbarNav">
				<ul class="navbar-nav">
                    <?php 
						wp_nav_menu(array(
                            'theme_location' => 'headerNav',
                            // 'items_wrap' => false,
                            'container' => false,
                            'menu_class' => 'navbar-nav'
						));
					?>
				</ul>
			</div>
		</nav>