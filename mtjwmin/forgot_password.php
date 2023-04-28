<html>
<?php include("include/header.php"); ?>
      
    <body class="loginPage" >

    <div class="container">

        <div id="header">

            <div class="row">

                <div class="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="dashboard.php">Mital Jewels</a>
                    </div>
                </div><!-- /navbar -->

            </div><!-- End .row -->

        </div><!-- End #header -->

    </div><!-- End .container -->    

    <div class="container">

        <div class="loginContainer">
            <form class="form-horizontal" id="loginForm" role="form" >
			<h3>Forgot Password?</h3>
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username">Email ID</label>
                    <div class="col-lg-12">
                        <input id="email" type="email" name="email" class="form-control" value="" placeholder="Enter your email ...">
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
				
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
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
		var email=$('#email').val();
		//alert(email);
		
		$.ajax({
			url: "include/allfunction.php?action=forgot_password",
			type: "post",
			data: {email:email} ,
			success: function (response) {
				console.log(response);
				if(response==1){
					toastr.success('Check Your New Password!', 'Mital Jewels!');
					//window.location = "index.php";
				}	
				else{
					toastr.error('Opps! Incorrect Credentials!', 'Mital Jewels!');
				}
			},
		});
	});
	
    </script> 
    </body>
</html>
