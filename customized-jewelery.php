<!DOCTYPE html>
<?php
include("include/connect.php");
?>

<html lang="en">

<?php include('include/header.php');?>
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">

<body>
    <!-- your content -->

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


	<header class="main_menu_area full_pad" id="stricky">
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
					<li class="dropdown submenu active"><a href="#" class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
						<ul class="dropdown-menu">
							<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">Watches</a></li>
							<li><a href="<?php echo $web; ?>customized-jewelery.php">Customized Jewelery</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Bezels</a></li>
						</ul>
					</li>
					<li><a href="<?php echo $web; ?>contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="search_dropdown"><a href="#"><i class="fa fa-call"></i></a></li>
				</ul>
			</div>
		</nav>
	</header>

	<section class="about-area"  id="aboutus">
	
		<div class="full-about-sec full_pad">
			<div class="about-slider-left">
				<div class="row">
					<div class="col-md-12 about-content">
						<div class="about-title">
							<h2>Customized Jewelery</h2>
						</div>
					</div>
				</div>
				<div class="about-slider owl-carousel">
					<div class="item">
							<img src="<?php echo $web; ?>cat-slider/03_Customized_Jewellery_jpg_1015514975.jpg" alt="customized jewelery">
						</div>
				</div>
			</div>
			<div class="about-slider-right">
				<div class="text-slider about-text owl-carousel">
					<div class="item" style=" text-align: justify;">
						At MTJ World, we understand exactly what you want. One of our designers will personally work with you to collaborate and discuss all the possibilities: Reviewing photos, sketches and actual pieces of work from you. Through this process, we will develop a basic computerized vision of your Jewellery and will create an art piece for you.
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
<?php include('include/footer.php');?>

</body>

</html>