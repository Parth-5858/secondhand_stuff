<?php
include("include/connect.php");
if(!isset($_SESSION['vhvadmin_id'])){
	header('location:index.php');
}
?>
<html xmlns=""> 
   <?php include("include/header.php"); ?> 
   <body>    <!-- loading animation -->   
 <div id="qLoverlay"></div>    <div id="qLbar"></div> 
    
    <?php include("include/top-header.php"); ?>


    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>

        <!--Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="Hide sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

        <?php include("include/sidebar.php"); ?>

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Add Product</h3>                    

                </div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><span>Add Product</span></h4>
                                </div>
                                <div class="panel-body">
                                   
                                    <form class="form-horizontal" id="form-validate"  enctype="multipart/form-data" method="post" role="form">

                                         <div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Upload Excel</label>
                                            <div class="col-lg-10">
                                               
												<input type="file" class="form-control "  name="excelfile" id="excelfile"> 												
                                            </div>
                                        </div><!-- End .form-group  -->
										
										
									   <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button type="submit" class="btn btn-default marginR10" >Save changes</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div><!-- End .form-group  -->                                      
                                    </form>
                                </div>
								<div class="panel-heading" >
                                   <h4><span id="succ"></span></h4>
                                   <h4><span id="err"></span></h4>
                                   <h4><span id="err_cnt"></span></h4>
                                   <h4><span id="succ_cnt"></span></h4>
                                </div>
                            </div><!-- End .panel -->
                        </div><!-- End .span12 -->
                    </div><!-- End .row -->  

                   
    			<!-- Page end here -->
                
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->

	 <?php include("include/footer.php"); ?>
	
	

  <script type="text/javascript">
   $("#form-validate").submit(function(e) {
		   		   
		 e.preventDefault();
		var fd = new FormData(document.getElementById("form-validate"));
		
					$.ajax({
						url: "upload_excel_process.php",
						type: "post",
						dataType: "json",
						data: fd,
						processData: false,  
						contentType: false,  
						success: function (response) {
							console.log(response);
							$("#succ").html("Success:- "+response['success']);
							$("#err").html("Error:- "+response['error']);
							$("#err_cnt").html("Error Count :- "+response['failedcount']);
							$("#succ_cnt").html("Success Count:- "+response['successcount']);
						},
						
					});
           
	});
  </script>
    </body>
</html>
