<!DOCTYPE html>
<?php
session_start();
include("include/connect.php");
if(isset($_SESSION['mjwadmin_id'])){
$id = $_GET['id'];
}
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
<section class="sec-relative full_pad nav-space">
<div class="latest_work_area l-portfolio-bg">
<div class="container">
 
<div class="sec-title">
<h2>Product for sell</h2>
<div class="see-btn">

                        <?php 
 
                            if(isset($_SESSION['mjwadmin_id'])){

                                $login = '<a href="'.$web.'add_student_product.php" class="btn btn-default">Add Your Product</a>';
                            }else{
                                $login = '<a href='.$web.'login.php>Login</a>';
                            }
                            echo $login;
                        ?>
        
</div> 
</div>
<div class="row latest_work_inner">
        <?php
        $catdata='';
        $csql=mysqli_query($link,"select * from products");
        while($getcdata = mysqli_fetch_array($csql)){
               
                
                if(mysqli_num_rows($csql)>0){
                        
                        $catdata.=' <div class="col-md-6 work_item">
                                        <div class="latest_work_item">
                                        <img src="img/blog-details/2.jpeg" alt="lt-w">
                                        <div class="l_work_hover">
                                        <h6><span>'.$getcdata['brandname'].'</span></h6>
                                        <h6><span>'.$getcdata['price'].'</span></h6>
                                        <h4><a href="'.$web.'detail.php?pid='.$getcdata['pid'].'">'.$getcdata['pname'].'</h4>
                                        </div>
                                        </div>
                                </div>';
                }
        } 
        echo $catdata;

        ?>
        
       
       
</div>
<div class="see-btn">
<a href="#" class="btn load-btn">LOAD MORE</a>
</div>
</div>
</div>
<div class="offcanvus_menu">
        <div class="lang-n">
        <div class="nav-button">
        <div class="nav_inner">
        <span></span>
        <span></span>
        </div>
        </div>
        </div>
</div>
</section>


<?php include("include/footer.php"); ?>


</body>
</html>
