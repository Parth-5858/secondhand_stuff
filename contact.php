<!DOCTYPE html>
<?php
include("include/connect.php");
?>
<html lang="en">

<?php include("include/header.php"); ?>

<body>
<div class="loader-container circle-pulse-multiple">
		<div class="loader">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
			<h2 class="l-text">MTJ</h2>
		</div>
	</div>

	
	<div class="offcanvas_menu_click">
		<div class="off_menu_inner">
		<span class="cross-btn cross"><i class="lnr lnr-cross"></i></span>
		<div class="off_menu_relative">
			<ul>
				<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">Watches</a></li>
				<li><a href="<?php echo $web; ?>contact.php">Contact Us</a></li>
				<li><a href="<?php echo $web; ?>#aboutus">About Us</a></li>
			</ul>
		</div>
		</div>
	</div>

	<header class="main_menu_area full_pad">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo.png" alt="" width="155px"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li ><a href="<?php echo $web; ?>index.php">Home</a></li>
					<li class="dropdown submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
						<ul class="dropdown-menu">
							<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">Watches</a></li>
							<li><a href="<?php echo $web; ?>customized-jewelery.php">Customized Jewelery</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Bezels</a></li>
						</ul>
					</li>
					<li class="active"><a href="<?php echo $web; ?>contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="search_dropdown"><a href="#"><i class="fa fa-call"></i></a></li>
				</ul>
			</div>
		</nav>
	</header>


<section class="contact-area full_pad nav-space">
	<div class="contact-area-bg">
		<div class="container">
			<div class="sec-title">
				<h2>We Look Forward To You</h2>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="contact-img">
						<div class="contact-slider owl-carousel">
							<div class="item">
								<img src="<?php echo $web; ?>images/Contact.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<form class="form_inner contact_form row m0 js-ajax-form" id="contactform">
					<input type="hidden" id="cid" name="cid" class="form-control">
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required/>
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact"   required/>
						</div>
                                                <div class="form-group col-md-12">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group col-md-12">
							<textarea class="form-control" id="message" name="message" placeholder="Message" rows="1"></textarea>
						</div>
						<div class="form-btn col-md-12">
							<button type="submit" value="submit" class="btn submit_btn">ENQUIRE NOW</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="offcanvus_menu">
		<div class="nav-button">
			<div class="nav_inner">
				<span></span>
				<span></span>
			</div>
		</div>
		
	</div>
</section>


<footer class="footer_area full_pad">
<div class="footer_bg contact-f">
<div class="container">

<div class="footer_bg">
			<div class="container">
				<div class="footer_copyright">
				<h6>Copyright © 2018 <b><a href="http://mtj.world">MTJ WORLD</a></h6>
				<h6>Website Diamontized By <b><a href="https://itficial.com">ITficial Technologies<b></a></h6>

				</div>
			</div>
		</div>
</div>
</div>
</footer>


<script src="js/jquery-2.1.4.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="vendors/scroll-bar/smooth-scroll.min.js"></script>

<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/magnifi-popup/jquery.magnific-popup.min.js"></script>

<script src="vendors/instafeed/instafeed.min.js"></script>
<script src="vendors/instafeed/script.js"></script>
<script src="js/theme.js"></script>
<script src="<?php echo $web; ?>js/toastr.js"></script>
<script src="<?php echo $web; ?>js/parsley.js"></script>
<script>
$("#contactform").submit(function(e) {
		 e.preventDefault();

		
                var fd = new FormData(document.getElementById("contactform"));
					$.ajax({
						url: "include/allfunction.php?action=add_contact",
						type: "post",
						data: fd,
						processData: false,  
						contentType: false,  
						success: function (response) {
							console.log(response);
							
							if(response==1){
								toastr.success('Contact Saved!', 'MTJ World!');
								setTimeout(function() {
									location.reload();
								}, 1000);
								$('#contactform')[0].reset();

								$(this).parsley().destroy();
								
							}
							else if(response==2){
								toastr.warning("Contact Already Exist!", 'MTJ World!');
								$('#contactform')[0].reset();
								$(this).parsley().destroy();
							}
							else{
								toastr.error("Opps! Couldn't Add, Please Refresh page", 'MTJ World!');
								$('#contactform')[0].reset();
								$(this).parsley().destroy();
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
						   console.log(textStatus, errorThrown);
						}
					});
            	
	});
</script>
</body>

</html>