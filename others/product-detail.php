<!DOCTYPE html>
<?php 
	include('include/connect.php');
?>
<?php include('include/header.php');?>

<body class="singletemplate" data-offset="200" data-spy="scroll" data-target=".ownavigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div><!-- Loader /- -->

	<!-- Header Section -->
	<header class="container-fluid no-left-padding no-right-padding header_s header-fix header_s1">
	
		<!-- SidePanel -->
		<div id="slidepanel-1" class="slidepanel">
			<!-- Top Header -->
			<div class="container-fluid no-right-padding no-left-padding top-header">
				<!-- Container -->
				<div class="container">	
					<div class="row">
						<div class="col-lg-4 col-6">
							<ul class="top-social">
								<li><a href="#" title="Facebook"><i class="ion-social-facebook-outline"></i></a></li>
								<li><a href="#" title="Twitter"><i class="ion-social-twitter-outline"></i></a></li>
								<li><a href="#" title="Instagram"><i class="ion-social-instagram-outline"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-4 logo-block">
							<a href="index.php" title="Logo">minimag</a>
						</div>
						<div class="col-lg-4 col-6">
							<ul class="top-right user-info">
								<li><a href="#search-box" data-toggle="collapse" class="search collapsed" title="Search"><i class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i></a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#"><i class="pe-7s-user"></i></a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#" title="Sign In">Sign In</a></li>
										<li><a class="dropdown-item" href="#" title="Subscribe">Subscribe </a></li>
										<li><a class="dropdown-item" href="#" title="Log In">Log In</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->				
		</div><!-- SidePanel /- -->
		
		<!-- Menu Block -->
		<div class="container-fluid no-left-padding no-right-padding menu-block">
			<!-- Container -->
			<div class="container">				
				<nav class="navbar ownavigation navbar-expand-lg">
					<a class="navbar-brand" href="index.html">minimag</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbar1">
						<ul class="navbar-nav">							
							<li class="dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" title="Home" href="index.html">Home</a>
								<ul class="dropdown-menu">
									<li class="dropdown">
										<i class="ddl-switch fa fa-angle-down"></i>
										<a class="dropdown-item dropdown-toggle" href="index-2.html" title="Home 2">Home 2 - 11</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="index-2.html" title="Home 2">Home 2</a></li>
											<li><a class="dropdown-item" href="index-3.html" title="Home 3">Home 3</a></li>
											<li><a class="dropdown-item" href="index-4.html" title="Home 4">Home 4</a></li>
											<li><a class="dropdown-item" href="index-5.html" title="Home 5">Home 5</a></li>
											<li><a class="dropdown-item" href="index-6.html" title="Home 6">Home 6</a></li>
											<li><a class="dropdown-item" href="index-7.html" title="Home 7">Home 7</a></li>
											<li><a class="dropdown-item" href="index-8.html" title="Home 8">Home 8</a></li>
											<li><a class="dropdown-item" href="index-9.html" title="Home 9">Home 9</a></li>
											<li><a class="dropdown-item" href="index-10.html" title="Home 10">Home 10</a></li>
											<li><a class="dropdown-item" href="index-11.html" title="Home 11">Home 11</a></li>
										</ul>
									</li>
									<li><a class="dropdown-item" href="index-12.html" title="Home Food">Home Food</a></li>
									<li><a class="dropdown-item" href="index-13.html" title="Home Technology">Home Technology</a></li>
									<li><a class="dropdown-item" href="index-14.html" title="Home Beauty">Home Beauty</a></li>
									<li><a class="dropdown-item" href="index-15.html" title="Home Fashion">Home Fashion</a></li>
									<li><a class="dropdown-item" href="index-16.html" title="Home Travel">Home Travel</a></li>
									<li><a class="dropdown-item" href="index-17.html" title="Home Industrial">Home Industrial</a></li>
									<li><a class="dropdown-item" href="index-18.html" title="Home Business">Home Business</a></li>
									<li><a class="dropdown-item" href="index-19.html" title="Home Fitness">Home Fitness</a></li>
									<li><a class="dropdown-item" href="index-20.html" title="Home Architecture">Home Architecture</a></li>
								</ul>
							</li>
							<li class="active dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" title="Posts" href="#">Posts</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="blog-single.html" title="Blog Post">Blog Post</a></li>
									<li><a class="dropdown-item" href="blog-single-cover-containr-full.html" title="Blog Post 2">Blog Post 2</a></li>
									<li><a class="dropdown-item" href="blog-single-cover-full.html" title="Blog Post 3">Blog Post 3</a></li>
									<li><a class="dropdown-item" href="blog-single-no-sidebar.html" title="Post No Sidebar">Post No Sidebar</a></li>
									<li><a class="dropdown-item" href="blog-single-no-sidebar-2.html" title="Post No Sidebar 2">Post No Sidebar 2</a></li>
									<li><a class="dropdown-item" href="blog-single-no-sidebar-3.html" title="Post No Sidebar 3">Post No Sidebar 3</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" title="Pages" href="#">Pages</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="header-page.html" title="Header">Header</a></li>
									<li><a class="dropdown-item" href="footer-page.html" title="Footer">Footer</a></li>
									<li><a class="dropdown-item" href="404.html" title="404">404</a></li>
								</ul>
							</li>
							<li><a class="nav-link" title="Features" href="#">Features</a></li>
							<li><a class="nav-link" title="Archives" href="#">Archives</a></li>
							<li class="dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" title="About Us" href="aboutus.html">About Us</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="aboutus_fullwidth.html" title="About Us No sidebar">About Us No sidebar</a></li>
									<li><a class="dropdown-item" href="aboutme.html" title="About Me">About Me</a></li>
									<li><a class="dropdown-item" href="aboutme_fullwidth.html" title="About Me No sidebar">About Me No sidebar</a></li>
								</ul>
							</li>
							<li><a class="nav-link" title="Contact" href="contact-us.html">Contact</a></li>
						</ul>
					</div>
					<div id="loginpanel-1" class="desktop-hide">
						<div class="right toggle" id="toggle-1">
							<a id="slideit-1" class="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
							<a id="closeit-1" class="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
						</div>
					</div>
				</nav>
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
		<!-- Search Box -->
		<div class="search-box collapse" id="search-box">
			<div class="container">
			<form>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." required>
					<span class="input-group-btn">
						<button class="btn btn-secondary" type="submit"><i class="pe-7s-search"></i></button>
					</span>
				</div>
			</form>
			</div>
		</div><!-- Search Box /- -->
	</header><!-- Header Section /- -->

	<div class="main-container">
	
		<main class="site-main">

			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content blog-single">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Content Area -->
						<div class="col-xl-12 col-lg-12 col-md-8 col-12 content-area">
							<article class="type-post">
								<div class="entry-cover">
									<img src="http://atixscripts.info/demo/html/minimag/assets/images/blog-single-1.jpg" alt="Post" />
								</div>
								<div class="entry-content">
									<div class="entry-header">	
										<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
										<h3 class="entry-title">Trendy Summer Fashion</h3>
										<div class="post-meta">
											<span class="byline">by <a href="#" title="Indesign">inDesign</a></span>
											<span class="post-date">MARCH 17, 2017</span>
										</div>
									</div>								
									<figure>
										<img src="http://atixscripts.info/demo/html/minimag/assets/images/post-image-1.jpg" alt="Post Image" />
									</figure>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<figure>
												<img src="http://atixscripts.info/demo/html/minimag/assets/images/post-image-1.jpg" alt="Post Image"/>
											</figure>
										</div>
										<div class="col-md-6 about-content">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
												<ul>
													<li>Which is the same as saying through shrinking from toil and pain.</li>
													<li>But in certain circumstances and owing to the claims of duty or the obligations of business it will.</li>
													<li>The wise man therefore always holds in these matters to this principle of selection.</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 about-content">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
												<ul>
													<li>Which is the same as saying through shrinking from toil and pain.</li>
													<li>But in certain circumstances and owing to the claims of duty or the obligations of business it will.</li>
													<li>The wise man therefore always holds in these matters to this principle of selection.</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<figure>
												<img src="http://atixscripts.info/demo/html/minimag/assets/images/post-image-1.jpg" alt="Post Image"/>
											</figure>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<figure>
												<img src="http://atixscripts.info/demo/html/minimag/assets/images/post-image-1.jpg" alt="Post Image"/>
											</figure>
										</div>
										<div class="col-md-6 about-content">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
												<ul>
													<li>Which is the same as saying through shrinking from toil and pain.</li>
													<li>But in certain circumstances and owing to the claims of duty or the obligations of business it will.</li>
													<li>The wise man therefore always holds in these matters to this principle of selection.</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 about-content">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
												<ul>
													<li>Which is the same as saying through shrinking from toil and pain.</li>
													<li>But in certain circumstances and owing to the claims of duty or the obligations of business it will.</li>
													<li>The wise man therefore always holds in these matters to this principle of selection.</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<figure>
												<img src="http://atixscripts.info/demo/html/minimag/assets/images/post-image-1.jpg" alt="Post Image"/>
											</figure>
										</div>
									</div>
								</div>
							</article>
						</div>
							<!-- Related Post -->
							<div class="related-post">
								<h3>You May Also Like</h3>
								<div class="related-post-block">
									<div class="related-post-box">
										<a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/related-post-1.jpg" alt="Post" /></a>
										<span><a href="#" title="Travel">Travel</a></span>
										<h3><a href="#" title="Traffic Jams Solved">Traffic Jams Solved</a></h3>
									</div>
									<div class="related-post-box">
										<a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/related-post-2.jpg" alt="Post" /></a>
										<span><a href="#" title="Science">Science</a></span>
										<h3><a href="#" title="How Astronauts Live">How Astronauts Live</a></h3>
									</div>
									<div class="related-post-box">
										<a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/related-post-3.jpg" alt="Post" /></a>
										<span><a href="#" title="Nature">Nature</a></span>
										<h3><a href="#" title="White Sand">White Sand</a></h3>
									</div>
									<div class="related-post-box">
										<a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/related-post-4.jpg" alt="Post" /></a>
										<span><a href="#" title="Lifestyle">Lifestyle</a></span>
										<h3><a href="#" title="Sunset at Beach">Sunset at Beach</a></h3>
									</div>
								</div>
							</div><!-- Related Post /- -->
							<!-- Comment Area -->
							<div class="comments-area">
								<h2 class="comments-title">3 Comments</h2>
								<ol class="comment-list">
									<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="http://atixscripts.info/demo/html/minimag/assets/images/comment-1.png" class="avatar avatar-72 photo"/>
													<b class="fn">Alice Chaptman</b>
												</div>
												<div class="comment-metadata">
													<a href="#">10 hours ago</a>											
												</div>
											</footer>
											<div class="comment-content">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
											</div>
										</div>
										<ol class="children">
											<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
												<div class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="img" src="http://atixscripts.info/demo/html/minimag/assets/images/comment-2.png" class="avatar avatar-72 photo"/>
															<b class="fn">Droid Vader</b>
														</div>
														<div class="comment-metadata">
															<a href="#">8 hours ago</a>											
														</div>
													</footer>
													<div class="comment-content">
														<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves.</p>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
													</div>
												</div>
											</li>
										</ol>
									</li>
									<li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="http://atixscripts.info/demo/html/minimag/assets/images/comment-3.png" class="avatar avatar-72 photo"/>
													<b class="fn">Giana Blankard</b>
												</div>
												<div class="comment-metadata">
													<a href="#">16 hours ago</a>											
												</div>
											</footer>
											<div class="comment-content">
												<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
											</div>
										</div>
									</li>
								</ol><!-- comment-list /- -->
								<!-- Comment Form -->
								<div class="comment-respond">
									<h2 class="comment-reply-title">Leave a Reply</h2>
									<form method="post" class="comment-form">
										<p class="comment-form-author">
											<input id="author" name="author" placeholder="Name" size="30" maxlength="245" required="required" type="text"/>
										</p>
										<p class="comment-form-email">
											<input id="email" name="email" placeholder="Email" required="required" type="email"/>
										</p>
										<p class="comment-form-url">
											<input id="url" name="url" placeholder="Website" required="required" type="url"/>
										</p>
										<p class="comment-form-comment">
											<textarea id="comment" name="comment" placeholder="Enter your comment here..." rows="8" required="required"></textarea>
										</p>
										<p class="form-submit">
											<input name="submit" class="submit" value="Post Comment" type="submit"/>
										</p>
									</form>
								</div><!-- Comment Form /- -->
							</div><!-- Comment Area /- -->
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>
	
	<!-- Footer Main -->
	<footer class="container-fluid no-left-padding no-right-padding footer-main">
		<!-- Instagram -->
		<div class="container-fluid no-left-padding no-right-padding instagram-block">
			<ul class="instagram-carousel">
				<li><a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/ftr-insta-1.jpg" alt="Instagram" /></a></li>
				<li><a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/ftr-insta-2.jpg" alt="Instagram" /></a></li>
				<li><a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/ftr-insta-3.jpg" alt="Instagram" /></a></li>
				<li><a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/ftr-insta-4.jpg" alt="Instagram" /></a></li>
				<li><a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/ftr-insta-5.jpg" alt="Instagram" /></a></li>
				<li><a href="#"><img src="http://atixscripts.info/demo/html/minimag/assets/images/ftr-insta-6.jpg" alt="Instagram" /></a></li>
			</ul>
		</div><!-- Instagram /- -->
		<!-- Container -->
		<div class="container">
			<ul class="ftr-social">
				<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
				<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i>twitter</a></li>
				<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i>Instagram</a></li>
				<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i>Google plus</a></li>
				<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i>pinterest</a></li>
				<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i>youtube</a></li>
			</ul>
			<div class="copyright">
				<p>Copyright @ 2017 MINIMAG</p>
			</div>
		</div><!-- Container /- -->
	</footer><!-- Footer Main /- -->
	
<?php include('include/footer.php');?>


</body>
</html>