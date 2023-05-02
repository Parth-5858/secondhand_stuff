<!DOCTYPE html>
<?php
$pid = $_GET['pid'];
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
                        <li><a href="http://localhost/secondhand_shop/others/categories.php/Watches/MTY=">How it Works?</a></li></br>
                        <li><a href="<?php echo $web; ?>contact.php">Contact Us</a></li></br>
                        <li><a href="<?php echo $web; ?>about.php">About Us</a></li>
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
<a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo.jpg" alt="" width="155px"></a>
</div>

<?php include("include/menu_header.php"); ?>

        </nav>
</header>


<section class="blog_news_area full_pad nav-space">
<div class="blog_news_inner">
        <div class="container">
                <div class="sec-title">
                        <h2>Secondhand Stuff</h2>
                </div>
                <?php
                $catdata='';
                $csql=mysqli_query($link,"select * from products where pid =".$pid);
                while($getcdata = mysqli_fetch_array($csql)){
               
                if(mysqli_num_rows($csql)>0){
                        
                        $catdata.=' <div class="blog_view_area">
                                        <img src="img/blog-details/2.jpeg" alt="">
                                        <div class="view_box">
                                                <ul class="blog_date">
                                                        <li><a href="#">'.$getcdata['brandname'].'</a></li>
                                                        <li><a href="#">'.$getcdata['pname'].'</a></li>
                                                        <li><a href="#">'.$getcdata['price'].'</a></li>
                                                        <li><a href="#">'.$getcdata['weight'].'</a></li>
                                                        <li><a href="#">'.$getcdata['stype'].'</a></li>
                                                        <li><a href="#">'.$getcdata['description'].'</a></li>
                                                </ul>
                                        </div>
                                </div>
                                <div class="see-btn">
                        <a href="#" class="btn btn-default">Buy</a>
                        <a href="'.$web.'cart.php?studid='.$getcdata['studid'].'" class="btn btn-default">Add to Cart</a>
                </div>';
                }
        } 
        echo $catdata;

        ?>
                
                
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




<?php include("include/footer.php"); ?>


</body>
</html>