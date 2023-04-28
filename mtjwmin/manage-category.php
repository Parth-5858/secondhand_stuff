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

                    <h3>Add Category</h3>                    

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
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control cat_name" id="required " name="cat_name" data-parsley-required-message="Category Name Required!" data-parsley-trigger="change"  required>												
                                            </div>
                                            <label class="col-lg-1 control-label" for="required">Label</label>
                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" id="label" name="label">												
                                            </div>
                                        </div><!-- End .form-group  -->
                                                                                    
                                                             
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Image</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="required" name="cat_image" type="file" />
                                            </div>
                                        </div><!-- End .form-group  -->
										
										 <div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Parent Category</label>
                                            <div class="col-lg-10">
                                                <select name="procat" id="" class="nostyle form-control" >
												<option disabled selected>Select Any</option>	
											   <?php
													//query execute
													$query = mysqli_query($link,"select * from categories");
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
                                            <label class="col-lg-2 control-label" for="required">Rank</label>
                                            <div class="col-lg-10">
											<?php
												$rsql= mysqli_query($link,"SELECT MAX(rank) as mrank FROM categories");
												$aresult= mysqli_fetch_assoc($rsql);
												$vrank = $aresult['mrank'];
												$vrank++;
											?>
                                                <input class="form-control" value="<?php echo $vrank;?>" id="digits" name="cat_rank" type="text" min="1" data-parsley-required-message="Rank Required!" data-parsley-trigger="change"  required/>
                                            </div>
                                        </div><!-- End .form-group  -->   
										<div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button type="submit" class="btn btn-default marginR10" >Save changes</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div><!-- End .form-group  -->                                      
                                    </form>
									<table id="mytable" cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Category</th>
												<th>Image</th>
												<th>Take Action</th>
												<th>Take Action</th>
											</tr>
										</thead>
										<tbody id="data">

										</tbody>
										<tfoot>
										</tfoot>
									</table>
                                </div>
							</div><!-- End #wrapper -->
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
	
			var cat_name=$('.cat_name').val();
			
				$.ajax({
					url: "include/allfunction.php?action=add_category",
					type: "post",
					data: fd,
					processData: false,  
					contentType: false,  
					success: function (response) {
						console.log(response);
						
						if(response==1){
							toastr.success('Category '+cat_name+' Added Successfully!', 'Mital Jewels!');
							setTimeout(function() {
								location.reload();
							}, 1000);
							$('#form-validate')[0].reset();
							$(this).parsley().destroy();
							
						}	
						else if(response==2){
							toastr.warning("Category added, but failed To add It's Image, Edit category to do that", 'Mital Jewels!');
							setTimeout(function(){
							  location.reload();
							}, 1000);
							$('#form-validate')[0].reset();
							$(this).parsley().destroy();
						}	
						else{
							toastr.error("Opps! Couldn't Add "+cat_name+" as category, Please Refresh page", 'Mital Jewels!');
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
	
		$.ajax({

		url: "include/allfunction.php?action=view_category",

		type: "get",

		success: function (response) {

			//console.log(response);

			$('#data').html(response);

			$('#mytable').DataTable();

		},

		error: function(jqXHR, textStatus, errorThrown) {

		   console.log(textStatus, errorThrown);

		}

	});
</script>
  
</body>
</html>
