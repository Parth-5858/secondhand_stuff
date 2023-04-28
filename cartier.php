<!DOCTYPE html>
<?php
include("include/connect.php");
?>

<html lang="en">

<?php include('include/header.php');?>
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">

<style>
/* Don't delete this, it is custom css for -> below left right slider -> updated 30 may,post */
.about-text p{
font-size:23px;
line-height:25px;
padding-top:5%;
padding-bottom:10%;
padding-left:5%;
padding-right:5%;
font-weight:100;
font-family:Old Standard TT;
color:#787789;

}
</style>
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


<section class="blog-details-area full_pad nav-space">
	<div class="blog-details-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 single-blog">
					<div class="blog_details_content">
						<div class="sec-title blog-title">
							<h2>MTJ Exclusive Fully Diamond Studded Watches.</h2>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>The trunk of any watch or else say Band of any watch is the most important part of a watch which occupies most of the part of it's outer part, if this part isn't made beautiful than there is no meaning of diamond studding on any other part of the watch so we have also tried our best to compliment it, cartier makes beautiful watches and we add to its beauty to make it more royal, the fully diamond studded band os here, the more space to occupy the more tougher to stud diamonds around, still we haven't allowed any glitches and difficulties to make it a quality product.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Cartier_Front/Cartier_Front.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Cartier_Front/Cartier_Front_Lock_Zoom.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Cartier_Front/Cartier_Front_Side_Zoom.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/Cartier/Cartier_Front.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/Cartier/Cartier_Side_01.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/Cartier/Cartier_Side_01_Zoom.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/Cartier/Cartier_Side_02.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>This is Cartier Santos De case with its classic look and design what makes it more beautiful, is the transformation we MTJ world create on it, thats none other than studding diamonds around it, there are minor parts which are even taken care of and also diamonds are been studded all around creating a mash type of structure but even quality and looks are been taken care of or else we would not have came out with this awful product.</p>
						</div>
					</div>
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

<?php include('include/footer.php');?>

</body>

</html>