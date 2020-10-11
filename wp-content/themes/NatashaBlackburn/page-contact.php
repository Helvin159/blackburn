<?php 
    get_header();
    require_once('partials/nav.php');
?>
	<div class="container-fluid">
			<div class="container text-center">
				<h1 class="display-3 mblsize">Contact Me</h1>
			</div>
			
			<div class="container contactform">
				<div class="container text-left">
					<div class="container text-left m-auto">
				<form>
					<label class="text-left fLInputs">
						First Name:<br>
						<input type="text" name="fn" placeholder="First Name">
					</label>
					<label class="text-left fLInputs">
						Last Name:<br>
						<input type="text" name="ln" placeholder="Last Name">
					</label>
					<br>
					<label class="text-left">
						Email:<br>
						<input type="email" name="eml" placeholder="Email" class="emailInput">
					</label>
					<br>
					<label class="text-left">
						Subject:<br>
						<input type="text" name="sbj" placeholder="Subject" class="sbjInput">
					</label>
					<br>
					<label class="text-left">
						Message:<br>
						<textarea name="msg" placeholder="Message" style="border: none;"></textarea>
					</label>
					<br>
					<label class="text-center">
						<input type="submit" class="btn btn-dark smtbtn"></label>
				</form>
						</div>
				</div>
				
			</div>
			<div class="row py-4">
				<div class="col-md-3">
					<img class="img-fluid imgthumbs" src="<?php echo get_theme_file_uri('assets/bikini_thumbs/1.jpg')?>">
				</div>
				<div class="col-md-3">
					<img class="img-fluid imgthumbs" src="<?php echo get_theme_file_uri('assets/bikini_thumbs/2.jpg')?>">
				</div>
				<div class="col-md-3">
					<img class="img-fluid imgthumbs" src="<?php echo get_theme_file_uri('assets/bikini_thumbs/3.jpg')?>">
				</div>
				<div class="col-md-3">
					<img class="img-fluid imgthumbs" src="<?php echo get_theme_file_uri('assets/bikini_thumbs/4.jpg')?>">
				</div>

			</div>


	</div>
    <?php 
    get_footer();
?>