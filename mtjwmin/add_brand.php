<?php
include("include/connect.php");

if(!isset($_SESSION['vhvadmin_id']))
{
	header('location:index.php');
}

?>
<html xmlns="">

    <?php include("include/header.php"); ?>
	
    <body>

    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
    
      <?php
	include("include/top-header.php");
	?>
	
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

                    <h3>Add Brand</h3>                    

                </div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                   
                                    <form class="form-horizontal" data-parsley-validate enctype="multipart/form-data" id="form-validate" role="form" >

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control bname" id="required " name="bname" data-parsley-required-message="Brand Name Required!" data-parsley-trigger="change"  required>												
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Category</label>
                                            <div class="col-lg-10">
                                                <select name="bcat" id="" class="nostyle form-control" >
												<option disabled selected>Select Any</option>	
											   <?php
													//query execute
													$query = mysqli_query($link,"select * from categories where parentid='0'");
													while($row = mysqli_fetch_array($query)){
												?>
                                                       <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                                                <?php
													}
												?>												
												</select>
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
                            </div><!-- End .panel -->
                        </div><!-- End .span12 -->
                    </div><!-- End .row -->  

                   
    			<!-- Page end here -->
                
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->

	 <?php include("include/footer.php"); ?>

	 <script type="text/javascript" >

	   $("#form-validate").submit(function(e) {
		   		   
		 e.preventDefault();
            $(this).parsley().validate();
            if ($(this).parsley().isValid()){
				
                var fd = new FormData(document.getElementById("form-validate"));
				
					$.ajax({
						url: "include/allfunction.php?action=add_brand",
						type: "post",
						data: fd,
						processData: false,  
						contentType: false,  
						success: function (response) {
							//console.log(response);
							
							if(response==1){
								toastr.success('Brand Added Successfully!', 'Mital Jewels!');
								setTimeout(function() {
									location.reload();
								}, 1000);
								$('#form-validate')[0].reset();
								
								$(this).parsley().destroy();
								
							}else{
								toastr.error("Opps! Couldn't Add Brand, Please Refresh page", 'Mital Jewels!');
								$('#form-validate')[0].reset();
								$(this).parsley().destroy();
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
						   console.log(textStatus, errorThrown);
						}
					});
            }
		
	});


	</script>
  
    </body>
</html>
