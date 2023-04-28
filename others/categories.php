<html>
<?php
include("include/connect.php");
?>

<?php include('include/header.php');?>
	<link rel="stylesheet" href="<?php echo $web; ?>vendors/linear-icon/style.css">
	<link href="<?php echo $web; ?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $web; ?>vendors/animate-css/animate.css">
	<link href="<?php echo $web; ?>vendors/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo $web; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo $web;?>css/responsive.css" rel="stylesheet">


<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
	

	<!-- Header Section -->

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

	<div class="searchForm">
		<span class="cross-btn form_hide"><i class="lnr lnr-cross"></i></span>
		<div class="container">
			<form action="#" class="row search_row m0">
				<div class="input-group">
					<input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
				</div>
				<p>Input your search keywords and press Enter.</p>
			</form>
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

	<header class="main_menu_area full_pad affix-top">
		<nav class="navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="<?php echo $web; ?>img/logo.png" alt="" width="155px"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li ><a href="<?php echo $web; ?>index.php">Home</a></li>
					<li class="dropdown submenu active"><a href="#" class="" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
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

<!-- Header Section /- -->



	<div class="main-container">

	

		<main class="site-main">



		<!-- Slider Section -->

		<section class="main_slider nav-space">
			<div class="container-fluid no-left-padding no-right-padding slider-section slider-section7 slider_bg_inner">				

				<div class="slider-carousel slider-carousel-7 center">
					
				<?php

					$sql=mysqli_query($link,"select * from brand where type='2'");
					while($row=mysqli_fetch_array($sql)){
						$data .='<div class="item">
										<div class="post-box">
											<img src="http://mtj.world/brand-photos/'.$row['path'].'" alt="Slider" />
											
										</div>
									</div>'; 
					} 
					echo $data; 
				?>
				
			</div><!-- Slider Section /- -->
			
			<div class="offcanvus_menu">
				
				<div class="nav-button">
					<div class="nav_inner">
						<span></span>
						<span></span>
					</div>
				</div>
				
			</div>
		</section>

			

			<!-- Page Content -->

			<div class="container-fluid no-left-padding no-right-padding blog-2-col-no-sidebar">

				<div class="container">

					<div class="row justify-content-md-center">

						<!-- Content Area -->

						<div class="col-xl-10 col-lg-12 col-md-12 content-area">

							<!-- Row -->

							<div class="row blog-masonry-list" id="bslider">
														
							</div><!-- Row /- -->

						</div><!-- Content Area /- -->

					</div>

				</div><!-- Container /- -->

			</div><!-- Page Content /- -->

			

		</main>

		

	</div>
	
	
	<?php include('include/footer.php');?>

<script>
$.ajax({
	  url: "<?php echo $web1; ?>include/allfunction.php?action=view_brand_logo",
	  type: "get",
	   success: function(response) {
			$('#bslider').html(response);
	  },			
	  error: function(jqXHR, textStatus, errorThrown) {
		  console.log(textStatus, errorThrown);			
	}
});
</script>
<script>
</script>
</body>
</html>