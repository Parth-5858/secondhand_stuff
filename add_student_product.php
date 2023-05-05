<?php 
session_start();

include("include/connect.php");

?>

<!DOCTYPE html>

<html>
  <?php include("include/header.php"); ?>    
    <body class="loginPage" >

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
                <a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo.jpg" alt="" width="155px"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu">
                    <li class="active"><a href="<?php echo $web; ?>index.php">Home</a></li>
                    <li  class="dropdown submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $web1; ?>others/categories.php/Watches/MTY=">Mobile and Tablet</a></li>
                            <li><a href="<?php echo $web; ?>customized-jewelery.php">Computer & laptop</a></li>
                            <li><a href="<?php echo $web; ?>bezel-details.php">Electronic Appliances</a></li>
                            <li><a href="<?php echo $web; ?>bezel-details.php">Books & Novels</a></li>
                            <li><a href="<?php echo $web; ?>bezel-details.php">Stationery</a></li>
                            <li><a href="<?php echo $web; ?>bezel-details.php">Music, sports & gym</a></li>
                            <li><a href="<?php echo $web; ?>bezel-details.php">bags-Luggage</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="<?php echo $web; ?>contact.php">Contact</a></li>
                    <li>
                        <?php 
 
                            if(isset($_SESSION['mjwadmin_id'])){

                                $login = '<a href="#">'. $_SESSION['mjwadmin_name'].'</a>

                                    <li><a href="include/allfunction.php?action=signout"><i class="fa fa-sign-out">Logout</i></a></li>';
                            }else{
                                $login = '<a href='.$web.'login.php>Login</a>';
                            }
                            echo $login;
                        ?>
                        
                    </li>
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
            <h2>SIGN UP</h2>
        </div>
     
<div class="col-md-12">
   <form class="form-horizontal" data-parsley-validate  enctype="multipart/form-data" id="addproductForm" role="form" >              
        <input type="hidden" name="pid" id="pid" class="form-control">
        <div class="form-group col-md-12">
            <label class="" for="brand">Brand Name:</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name" required>
        </div> 
        <div class="form-group col-md-12">
            <label class="" for="stype">Type:</label>
            <select name="stype" id="stype" class="nostyle form-control brand" >
                <option disabled selected>Select Any</option>   
                <option value="electronic_appliances">Electronic Appliances</option>
                <option value="books_novels">Books & Novels</option>
                <option value="stationery">Stationery</option>
                <option value="music_sport">Music, sports & gym</option>
                <option value="bags_luggage">bags-Luggage</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <label class="" for="proname">Product Name:</label>
            <input type="text" class="form-control" id="proname" name="proname" placeholder="Enter Product Name" required>
        </div>
        <div class="form-group col-md-12">
            <label class="" for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
        </div>
        <div class="form-group col-md-12">
            <label class="" for="weight">Weight:</label>
            <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" required>
        </div>
        <div class="form-group col-md-12">
            <label class="" for="qty">Qty:</label>
            <input type="text" class="form-control" id="qty" name="qty" placeholder="Qty" required>
        </div>
        <div class="form-group col-md-12">
            <label class="" for="pdescription">Description:</label>
            <textarea id="pdescription" name="pdescription" class="form-control" rows="5" ></textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="" for="required">Image:</label>
            <input class="form-control" id="homeimage" name="homeimage" type="file" />
        </div><!-- End .form-group  -->

        <div class="form-btn col-md-12">
            <button type="submit" value="submit" class="btn submit_btn"  id="submitBtn">Submit</button>
        </div>

</form>


    </div>
    </div><!-- End .container -->
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

    <!-- Le javascript
    ================================================== -->
    
    <?php include("include/footer.php"); ?>

     <script type="text/javascript" >
       $("#addproductForm").submit(function(e){
         e.preventDefault();
        
        $.ajax({
            url: "include/allfunction.php?action=addproduct",
            type: "post",
            data: $("#addproductForm").serialize() ,
            success: function (response) {
                console.log(response);
                if(response==1){
                                toastr.success('Product Details Saved!', 'Secondhand Shop!');
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                                window.location = "index.php";
                                $('#addproductForm')[0].reset();

                                $(this).parsley().destroy();
                                
                            }
                            else if(response==2){
                                toastr.warning("Already Exist!", 'Secondhand Shop!');
                                $('#addproductForm')[0].reset();
                                $(this).parsley().destroy();
                            }else if(response==3){
                                toastr.warning("passwords doesn't match!", 'Secondhand Shop!');
                            }else{
                                toastr.error("Opps! Couldn't Add, Please Refresh page", 'Secondhand Shop!');
                                $('#addproductForm')[0].reset();
                                $(this).parsley().destroy();
                            }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }
        });
    });

        $(document).ready(function() {
          
            var supr_Options = {
                rtl:false
            }
           
            if(supr_Options.rtl) {
                localStorage.setItem('rtl', 1);
                $('#bootstrap').attr('href', 'css/bootstrap/bootstrap.rtl.min.css');
                $('#bootstrap-responsive').attr('href', 'css/bootstrap/bootstrap-responsive.rtl.min.css');
                $('body').addClass('rtl');
                $('#sidebar').attr('id', 'sidebar-right');
                $('#sidebarbg').attr('id', 'sidebarbg-right');
                $('.collapseBtn').addClass('rightbar').removeClass('leftbar');
                $('#content').attr('id', 'content-one')
            } else {localStorage.setItem('rtl', 0);}
            
            $("input, textarea, select").not('.nostyle').uniform();
            $("#signupForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 0
                    },
                    password: {
                        required: true,
                        minlength: 0
                    }  
                },
                messages: {
                    username: {
                        required: "Fill me please",
                        minlength: "My name is bigger"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "My password is more that 6 chars"
                    }
                }   
            });
        });
    
    </script> 
    </body>
</html>
