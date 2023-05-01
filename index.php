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
			<h2 class="l-text">Secondhand Shop For Student</h2>
		</div>
	</div>

	
	<div class="offcanvas_menu_click">
		<div class="off_menu_inner">
		<span class="cross-btn cross"><i class="lnr lnr-cross"></i></span>
		<div class="off_menu_relative">
			<ul>
				<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">How it Works?</a></li>
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
				<a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo_version2.jpg" alt="" width="155px"></a>
			</div>
				

		</nav>
	</header>
<section class="main_slider nav-space">
	<div class="about-inner row m0">
			<div class="container">
				<div class="col-md-12">
				<div class="row">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li class="active"><a href="<?php echo $web; ?>index.php">Home</a></li>
					<li  class="dropdown submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
						<ul class="dropdown-menu">
							<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">Mobile and Tablet</a></li>
							<li><a href="<?php echo $web; ?>customized-jewelery.php">Computer & laptop</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Electronic Appliances</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Books & Novels</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Stationery</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Music, sports & gym</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">bags-Luggage</a></li>
						</ul>
					</li>
					</li>
					<li><a href="#aus">About Us</a></li>
					<li><a href="<?php echo $web; ?>contact.php">Contact</a></li>
					<li><a href="<?php echo $web; ?>login.php">Login</a></li>
					<li class=""><input type="text" class="newsinput" placeholder="Enter e-mail adress">
                   				 <button class="newsbtn">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="search_dropdown"><a href="#"><i class="fa fa-call"></i></a></li>
				</ul>
			</div>
			</div>
				</div>
			</div>
		</div>
	
</section>
<section class="main_slider nav-space">
	<div class="slider_bg_inner">
		<div class="slider_bg owl-carousel">
		<div class="item">
			<img src="http://localhost/secondhand_shop/onhome-slider/books-12935969.jpg" alt="">
<<<<<<< HEAD
		</div>	
=======
		</div>
			<?php
				$data= 0;
				$sql=mysqli_query($link," select * from slider where type='1'");
				while($row=mysqli_fetch_array($sql)){
					//print_r($row);
					$data.='<div class="item">
								<img src="http://localhost/secondhand_shop/onhome-slider/'.$row['image'].'" alt="">
							</div>'; 
							
				} 
				echo $data;
			?>			
				
>>>>>>> bca3b7654cbb0b8e31834512bfd65b916e18c760
		</div>
	</div>
</section>
	
	<!-- Container -->
	<section class="about-area"  id="aboutus">

		<div class="about-inner row m0">
			<div class="about-title">
				<h2 id="aus">About Secondhand Shop</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 about-content">
						<div class="row">
							<div class="col-md-6 about-text">
								<p>At Second Hand Student Shop, we are dedicated to providing affordable, high-quality second-hand items to students. We understand that college and university can be a financially challenging time for many students, and that's why we strive to offer a wide range of items at prices that won't break the bank.</p>
								<p>Our shop specializes in second-hand textbooks, but we also offer a variety of other items such as stationery, electronics, and furniture. All of our items are carefully inspected to ensure that they are in good condition and ready for use by the next student.	
</p>
							</div>
							<div class="col-md-6 about-text">
								<p>We believe in sustainability and reducing waste, and that's why we offer a buyback program for textbooks. If you no longer need your textbooks, bring them to us and we will offer you a fair price for them. This helps to reduce waste and allows other students to benefit from your used textbooks.</p>
								<p>Our friendly and knowledgeable staff are always happy to help and answer any questions you may have. We are committed to providing excellent customer service and making your shopping experience as enjoyable as possible.</p><p>We are proud to be a part of the student community and to support students in their academic journey. Visit us today and see what treasures you can find!</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img">
							<img src="http://localhost/mtj.world/img/about-sec/laptop-student.jpg" width="570px" height="688px" alt="About MTJ World">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
				$csql=mysqli_query($link,"select * from slider where type='2' and status='1' order by rank");
				while($getcdata = mysqli_fetch_array($csql)){
					
					// $getcatname = mysqli_query($link,"select * from categories where cid='".$getcdata['cid']."'");
					// $getcatdata = mysqli_fetch_array($getcatname);
					
					if(mysqli_num_rows($csql)>0){
						
						$catdata.='<div class="item">
								<img src="http://localhost/mtj.world/cat-slider/'.$getcdata['image'].'" alt="">
							</div>';
						$catdetail.='<div class="item" style=" text-align: justify;">
										'.$getcdata['content'].'</br></br>
										<div class="form-btn col-md-12">
											<a href="'.$web1.'categories.php/Watches/MTY="><center><button type="submit" value="submit" class="btn submit_btn">Explore Now</button></center></a>
										</div>
									</div>';
					}
				} 
			
		?>
		<div class="full-about-sec full_pad">
			<div class="about-slider-left">
				<div class="about-slider owl-carousel">
					<?php echo $catdata;?>
				</div>
				<div class="slider_nav">
				<i class="fa fa-angle-left testi_prev" aria-hidden="true"></i>
				<i class="fa fa-angle-right testi_next" aria-hidden="true"></i>
				</div>
			</div>
			<div class="about-slider-right">
				<div class="text-slider about-text owl-carousel">
					<?php echo $catdetail;?>
					
				</div>
			</div>
		</div>
	</section>

<?php include("include/footer.php"); ?>

</body>

</html>
