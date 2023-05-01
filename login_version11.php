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

    <div class="container">

        <div id="header">

            <div class="row">

                <div class="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo_version2.jpg" alt="" width="155px"></a>
                        <a class="navbar-brand" href="#">Secondhand Shop for Student</a>
                        <a class="navbar-brand" href="dashboard.php">Secondhand Shop</a>
                    </div>
                </div><!-- /navbar -->

            </div><!-- End .row -->

        </div><!-- End #header -->

    </div><!-- End .container -->    

    <div class="container">
<<<<<<< HEAD:login_version2.php
        <div class="loginContainer">
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                <h3><center>Login Form</center></h3>
                                </div>

                                

                    
            <form class="form-horizontal" id="loginForm" role="form" >
                    <label class="" for="username">Username:</label>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input id="username" type="text" name="username" class="form-control" value="" placeholder="username" required>
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                    <label class="" for="password">Password:</label>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input id="password" type="password" name="password" value="" class="form-control" placeholder="password" required>
                        <span class="icon16 icomoon-icon-lock right gray marginR10"></span>
                        
                    </div>
                </div><!-- End .form-group  -->
=======

        <div class="">
            <form class="" id="loginForm" role="form" >
               
                    <div class="">
                    <label class="" for="username">Username:</label>
                        <input id="username" type="text" name="username" class="" value="" placeholder="Enter your username ...">
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                
                    <div class="">
                    <label class="" for="password">Password:</label>
                        <input id="password" type="password" name="password" value="" class="" placeholder="Enter your password ...">
                        <span class="icon16 icomoon-icon-lock right gray marginR10"></span>
                        
                    </div>
                
>>>>>>> bca3b7654cbb0b8e31834512bfd65b916e18c760:login_version11.php
                
                <a href="forgot_password.php" class="fpwd">Forgot Password</a>
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
                        <div class="checkbox left">
                            <label><input type="checkbox" id="keepLoged" value="Value" class="styled" name="logged" /> Keep me logged in</label>
                        </div>
                        <button type="submit" class="btn btn-info right" id="loginBtn"><span class="icon16 icomoon-icon-enter white"></span> Login</button>
                    </div>
                </div><!-- End .form-group  -->
            </form>
        </div>
<<<<<<< HEAD:login_version2.php
        </div>
        </div>
        </div>
=======
>>>>>>> bca3b7654cbb0b8e31834512bfd65b916e18c760:login_version11.php

    </div><!-- End .container -->

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
<<<<<<< HEAD:login_version2.php
                    toastr.success('Hii..!', 'Secondhand Shop!');
=======
                    toastr.success('Hie!', 'Secondhand Shop!');
>>>>>>> bca3b7654cbb0b8e31834512bfd65b916e18c760:login_version11.php
                    window.location = "dashboard.php";
                }   
                else{
                    toastr.error('Opps! I Doub\'t The Credentials !', 'Secondhand Shop!');
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
<<<<<<< HEAD:login_version2.php
                        required: "Please input a password",
                        minlength: "My password is more than  6 characters."
=======
                        required: "Please provide a password",
                        minlength: "My password is more that 6 chars"
>>>>>>> bca3b7654cbb0b8e31834512bfd65b916e18c760:login_version11.php
                    }
                }   
            });
        });
    
    </script> 
    </body>
</html>
