<!DOCTYPE html>

<?php
session_start();
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
<h2 class="l-text">Secondhand Shop</h2>
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
            <li><a href="http://localhost/secondhand_shop/others/categories.php/Watches/MTY=">How it Works?</a></li>
            <li><a href="<?php echo $web; ?>contact.php">Contact Us</a></li>
            <li><a href="<?php echo $web; ?>about.php">About Us</a></li>
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
<a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo.jpg" alt="" width="155px"></a></div>

<?php include("include/menu_header.php"); ?>
</nav>
</header>


<section class="full-about-area row m0 full_pad nav-space">
<div class="full-about-bg row m0">
<div class="about-me-left">
<div class="about-content">
<div class="sec-title">
<h2>About Stuff</h2>
<p>Meet me and my little history</p>
</div>
<div class="row">
<div class="col-md-4 about-text">
<p>>At Second Hand Student Shop, we are dedicated to providing affordable, high-quality second-hand items to students. We understand that college and university can be a financially challenging time for many students, and that's why we strive to offer a wide range of items at prices that won't break the bank.</p>
<p>Our shop specializes in second-hand textbooks, but we also offer a variety of other items such as stationery, electronics, and furniture. All of our items are carefully inspected to ensure that they are in good condition and ready for use by the next student.</p>
</div>
<div class="col-md-4 about-text">
<p>We believe in sustainability and reducing waste, and that's why we offer a buyback program for textbooks. If you no longer need your textbooks, bring them to us and we will offer you a fair price for them. This helps to reduce waste and allows other students to benefit from your used textbooks.</p>
<p>ur friendly and knowledgeable staff are always happy to help and answer any questions you may have. We are committed to providing excellent customer service and making your shopping experience as enjoyable as possible.</p>
</div>
<div class="col-md-4 about-text">
<p>We are proud to be a part of the student community and to support students in their academic journey. Visit us today and see what treasures you can find!</p>

</div>
</div>
</div>
</div>
<div class="about-me-right">
<div class="img">
<img src="img/about-page/1.jpeg" alt="">
<a href="<?php echo $web;?>contact.php" class="btn load-btn">Contact Me</a>
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
</div>
</section>


<section class="masonry-slide-area">
<div class="container">
<div class="row blog-slidshow">

<div class="col-sm-6 col-xs-12 slidshow-item">
<div class="bl-slider owl-carousel">
<div class="item">
<img src="img/blog-details/book-table.jpg" alt="">
</div>
<div class="item">
<img src="img/blog-details/2.jpeg" alt="">
</div>
<div class="item">
 <img src="img/blog-details/3.jpeg" alt="">
</div>
</div>
</div>
<div class="col-sm-3 col-xs-6 slidshow-item">
<img src="img/about-page/5.jpeg" alt="">
</div>
</div>
</div>
</section>

<?php include("include/footer.php"); ?>

</body>
</html>