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
                        <a class="navbar-brand" href="dashboard.php">MTJ World</a>
                    </div>
                </div><!-- /navbar -->

            </div><!-- End .row -->

        </div><!-- End #header -->

    </div><!-- End .container -->    

    <div class="container">

        <div class="loginContainer">
            <form class="form-horizontal" id="loginForm" role="form" >
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username">Username:</label>
                    <div class="col-lg-12">
                        <input id="username" type="text" name="username" class="form-control" value="" placeholder="Enter your username ...">
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">Password:</label>
                    <div class="col-lg-12">
                        <input id="password" type="password" name="password" value="" class="form-control">
                        <span class="icon16 icomoon-icon-lock right gray marginR10"></span>
                        
                    </div>
                </div><!-- End .form-group  -->
				
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
					toastr.success('Hie!', 'Mital Jewels!');
					window.location = "dashboard.php";
				}	
				else{
					toastr.error('Opps! I Doub\'t The Credentials !', 'Mital Jewels!');
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
