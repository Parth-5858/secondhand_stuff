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
						<div class="col-sm-3 col-xs-12 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/01_No1A/1.jpg" alt="">
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/4_in_1/01_No1A/2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/01_No1A/3.jpg" alt="">
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/01_No1A/4.jpg" alt="">
						</div>
					</div>

					<div class="row blog-slidshow" >
						<div class="col-sm-6 col-xs-12 slidshow-item" >
							<div class="bl-slider owl-carousel" >
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Big_Diamond/5.jpg" alt="">
								</div>
<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Big_Diamond/5-1.jpg" alt="">
								</div>
<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Big_Diamond/5-2.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Big_Diamond/6.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>Here is something for big diamond lovers, here is the deadly combination of an all-time favorite Rolex band with sophisticated and everlasting diamonds, each bun is studded with a big diamond surrounded by minute diamonds kind of a circular arrangement. </br></br>Every big diamond is studded in such a way that there remains hardly a negligible chance of diamonds falling off but overall its a lustrous piece of art and yes, of course, we should have a glance on it.</p>
						</div>
					</div>

					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>As mentioned above as there are variations in Rolex creativity and their different products, and we don’t let ourselves restricted from just one design line, here is a very good example of the same.</br></br> Look at this piece of art its appealing, charming, dazzling and what not, running out of words is so common in these cases, studding diamonds all over making an almost a diamond body watch. Best match of design and ergonomics.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Jubliee_Two_Tone/7.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Jubliee_Two_Tone/8.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Jubliee_Two_Tone/9.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Jubliee_Two_Tone/10.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1/11.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1/11-1.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1/12.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1/12-1.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>There you go, you are looking at the one of the finest art on the planet. We have utilized the diamond studding to seamlessly connect to the belt and its lock. The diamond arrangement also known as diamond setting looks pretty same as above but there are minor changes with adds an extra layer if firmness in the product.</br></br> Instead of using universal size we have taken a step forward and gone some extra mile by offering this pretty diamontized band in different combination of sizes of diamonds to enhance the overall quality of product.</p>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>This gorgeous looking oyster band consisting of lock-buckle made with tiny buns is a piece of art itself. Now to complement the Rolex’s luxurious band we have furnished this band the most precious stone called diamonds, here each piece of diamond is stud between a couple of 2 diamonds on the whole-body portion covering almost cent percent of the body which seems as it’s a piece of diamond work not just a metallic band. This adorable bit is only exclusive to MTJ World.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1A/13.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1A/14.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1A/15.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1A_Two_Tone/16.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1A_Two_Tone/17.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No1A_Two_Tone/18.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p style="padding-bottom:10%;padding-top:2%;">Being a tier 1 brand Rolex is one of those who always try to bring variation in terms of their designs and their choices to choose from. One of its best example is two tone bands, which has an addition of an extra layer of a different colour tone, which adds into its beauty without compromising its quality. We MTJ world could not back step with single design in terms of studding diamonds on the same, even we added an extra layer of richness and studded diamonds in various combinations, the same can be seen here. This right here shows one design for diamonds, while you look below will be the second one.</p>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>This gorgeous looking oyster band consisting of lock-buckle made with tiny buns is a piece of art itself. Now to complement the Rolex’s luxurious band we have furnished this band the most precious stone called diamonds, here each piece of diamond is stud between a couple of 2 diamonds on the whole-body portion covering almost cent percent of the body which seems as it’s a piece of diamond work not just a metallic band. This adorable bit is only exclusive to MTJ World.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No2/19.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No2/20.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No2_Two_tone/21.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/No2_Two_tone/22.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>As mentioned above as there are variations in Rolex creativity and their different products, and we don’t let ourselves restricted from just one design line, here is a very good example of the same. Look at this piece of art its appealing, charming, dazzling and what not, running out of words is so common in these cases, studding diamonds all over making an almost a diamond body watch. Best match of design and ergonomics.</p>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>We have already covered two of the rolex bands i.e. Jubilee  as well as Oyester band, now comes the leader, the President band, this was first introduced in 1956 along with Rolex Day-Date and till date it’s evenly popular, how can we leave this band behind, eve new have crafted designed and perfected this band and let everyone in shock, we made every possibility to make it best amoung all and came out with Grid type diamond studding to make it more attractive without looking its original look, this blending is obviously one of the best what we offer.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/President/23.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/President/24.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/President/25.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/President/26.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Qwatch/46.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Band/Qwatch/47.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>We have already perfected everything in terms of different type of band designs for diamond studding, adding to this we have made some minor changes to make it look a little more attractive and more flawless we have added one other kind of diamond shape called Baguette, this seems to be little different but actually isn’t different from other when it comes to perfection and precision of diamond studding.
</p>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-3 col-xs-12 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/02_No1/27.jpg" alt="">
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/4_in_1/02_No1/28.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/02_No1/29.jpg" alt="">
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/02_No1/30.jpg" alt="">
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Bezel/2_Line/31.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Bezel/2_Line/32.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>One of the factor of any watches which makes it worth Luxurious/Precious is looks of the watch, and bezel plays a mighty role in doing the same, the Rolex bezels has got everything which fulfills these! Again no point of back stepping what we decided is not to just stud it with beautiful Diamonds but have multiple design of the same (studding) so we introduced 2 Line diamond designs for the Bezel design, here you can find there are 2 line consisting diamonds all around the diameter of the Bezel complementing its charm. The other design is right below have a look at it.</p>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>Above was a design consisting 2 line design, here we introduce to you 3 line Bezel design. Here there are 3 lines of diamonds covering the whole round circumference of the Bezel, bezels are minute part of any watch so it’s very tough to even think of studding diamonds here but we took it as a challenge and here’s the result, no glitches, no mishap, just an outstanding example of up to what extend we can go when it’s the question of perfection. You’ll find this nowhere but only at one station and that’s MTJ World.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Bezel/3_Line/33.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Bezel/3_Line/34.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-3 col-xs-12 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/03_No2/35.jpg" alt="">
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/4_in_1/03_No2/36.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/03_No2/37.jpg" alt="">
						</div>
						<div class="col-sm-3 col-xs-6 slidshow-item">
							<img src="http://mtj.world/watch_images/4_in_1/03_No2/38.jpg" alt="">
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1/39.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1/40.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1/41.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-text">
							<p>If we are thinking of innovating a watch by fully studding diamonds all around then there is no question of leaving its case behind, we used staking design for diamond studding everywhere around case, it plays vital role in creating an perspective for the whole product every minute area of the case is been taken care of, whether it’s in terms of using smaller diamonds for filling the miniature gap or making it look the finest piece of artifact. Imagine this case assembled on any of the Rolex watch, making it perfect combination of Luxury and workmanship.
</p>
						</div>
					</div>
					
					<div class="row blog-slidshow">
						<div class="col-sm-6 about-text">
							<p>Here is one more of a kind for the case, evenly diamonds spreaded in a different manner but in equally better formation, just look at it, isn’t it just one level above perfection! We have completely put on all our experiences in this field and came into these result, this design of diamonds seems a little similar to the above one but indeed is a little complex design which more firmly constructed.</p>
						</div>
						<div class="col-sm-6 col-xs-12 slidshow-item">
							<div class="bl-slider owl-carousel">
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1A/42.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1A/43.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1A/44.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1A/45.jpg" alt="">
								</div>
								<div class="item">
									<img src="http://mtj.world/watch_images/Slider/Case/No1A/45-1.jpg" alt="">
								</div>
							</div>
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