<?php 

include("include/connect.php");

if(isset($_SESSION['mjwadmin_id']))
{
    header('location:dashboard.php');
}
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

<section class="contact-area full_pad nav-space">
    <div class="contact-area-bg">
    <div class="container">
        <div class="sec-title">
            <h2>SIGN IN</h2>
        </div>
        <div class="col-md-3">
        <div class="contact-img">
        <div class="contact-slider owl-carousel">
        <div class="item">
        <img src="img/blog-details/7.jpeg" alt="">
        </div>
        <div class="item">
        <img src="img/blog-details/5.jpeg" alt="">
        </div>
        <div class="item">
        <img src="img/blog-details/6.jpeg" alt="">
        </div>
        </div>
        </div>
        </div>
<div class="col-md-7">
    <form class="form_inner contact_form " id="loginForm" role="form">
<div class="form-group col-md-12">
    <label class="" for="username">Student ID:</label>
<input type="text" class="form-control" id="username" pattern="^[a-zA-Z0-9]+@uwl\.com$" name="username" placeholder="12345@uwl.com" required>
</div>
<div class="form-group col-md-12">
    <label class="" for="password">Password:</label>
<input type="password" class="form-control" id="password" name="password" required placeholder="Enter your Password">
</div>
<a href="forgot_password.php" class="fpwd">Forgot Password</a>
<div class="checkbox left">
                            <label><input type="checkbox" id="keepLoged" value="Value" class="styled" name="logged" /> Keep me logged in</label>
                        </div>
<div class="form-btn col-md-12">
<button type="submit" value="submit" class="btn submit_btn"  id="loginBtn">Login</button>
</div>

<div class="see-btn">
<a href="<?php $web;?>sign_up.php" class="btn btn">SIGN UP</a>
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
       $("#loginForm").submit(function(e){
         e.preventDefault();
        
        $.ajax({
            url: "include/allfunction.php?action=signin",
            type: "post",
            data: $("#loginForm").serialize() ,
            success: function (response) {
                console.log(response);
                if(response==1){
                    toastr.success('Hie!', 'Secondhand Shop!');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                    window.location = "index.php";
                }   
                else{
                    toastr.error('Opps! I Doub\'t The Credentials ! or SIGN UP', 'Secondhand Shop!');
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
            $("#loginForm").validate({
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
