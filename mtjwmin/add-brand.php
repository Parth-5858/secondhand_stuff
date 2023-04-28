<?php
include("include/connect.php");

if(!isset($_SESSION['mjwadmin_id']))
{
	header('location:index.php');
}
// $sql="select * from products order by addedon desc LIMIT 1";
// $sqlquery=mysqli_query($link,$sql);
// $record=mysqli_fetch_array($sqlquery);

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
        <div id="content" class="">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

				<h3>Add Brand </h3>
				                

					</div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body" id="brandfrm">
                                   
                                    <form class="form-horizontal" data-parsley-validate  enctype="multipart/form-data" id="form-validate" role="form" >
										
										<input type="hidden" name="bid" id="bid" class="form-control">
																				
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Name</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="brandname" name="brandname" type="text" data-parsley-required-message="Name Required!" data-parsley-trigger="change"  required/>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Type</label>
                                            <div class="col-lg-10">
                                                <select name="btype" id="btype" class="nostyle form-control" data-parsley-required-message="Type Required!" data-parsley-trigger="change"  required>
													<option selected disabled>Select Any</option>
													<option value="1">Logo</option>
													<option value="2">Slider</option>
												</select>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Image</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="bimage" name="bimage" type="file"/>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Description</label>
                                             <div class="col-lg-10">
                                                <textarea class="form-control" id="bdesc" rows="5" name="bdesc"></textarea>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Rank</label>
                                             <div class="col-lg-10">
                                                <input type="number" min="1" class="form-control" id="rank" name="rank" data-parsley-required-message="Rank Required!" data-parsley-trigger="change"  required>												
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
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Rank</th>
												<th>Take Action</th>
												<th>Take Action</th>
                                            </tr>

                                        </thead>

                                        <tbody id="data">

                                        </tbody>

                                    </table>
                                </div>
                            </div><!-- End .panel -->
                        </div><!-- End .span12 -->
                    </div><!-- End .row -->  
				
    			<!-- Page end here -->
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
                
     <!--Body content-->
    </div><!-- End #wrapper -->
	
		<!--delete bezel modal-->
	<div class="modal fade" id="delbrandModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="mySmallModalLabel">Action Taken</h4>
				</div>
				<div class="modal-body">
				<h4>Are you sure you want to delete this?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btndelbrand">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	 <?php include("include/footer.php"); ?>
	
<script type="text/javascript" >
	
	$("#form-validate").submit(function(e) {
		e.preventDefault();
		
		$(this).parsley().validate();
            if ($(this).parsley().isValid()){
		
				var fd = new FormData(document.getElementById("form-validate"));
				$.ajax({
					url: "include/allfunction.php?action=add_brand",
					type: "POST",
					data: fd,
					processData: false,  
					contentType: false,
					success: function(data) {
						console.log(data);
						if (data == '1') {
							toastr.success('Image successfully added!', 'MTJ World!');
							setTimeout(function() {
								location.reload();
							}, 1000);
							$('#form-validate')[0].reset();
						}else {
							toastr.error('Something went wrong!Please try again!', 'MTJ World!');
							$('#form-validate')[0].reset();
						}
					}
				});
			}
	});
	
	//view cat slider
	$.ajax({
		url: "include/allfunction.php?action=view_brand",
		type: "get",
		success: function (response) {
			// console.log(response);
			$('#data').html(response);
			$('#mytable').DataTable();
		},
		error: function(jqXHR, textStatus, errorThrown) {
		   console.log(textStatus, errorThrown);
		}
	});
	
	//edit cat slider
	function editbrand(brandid,brandname,description,rank,type){
		$('html, body').animate({
			scrollTop: $("#brandfrm").offset().top
		  }, 800, function(){
		});
		$("#bid").val(brandid);
		$("#brandname").val(brandname);
		$("#bdesc").val(description);
		$("#rank").val(rank);
		$("#btype").val(type);
	}
	
	//delete cat image
	function deletebrand(id){
		
		$('#delbrandModal').data('id', id).modal('show');
	}
	$( "#btndelbrand" ).click(function() {
		var id = $('#delbrandModal').data('id');
	 
		$.ajax({
			type: "POST",
			url: "<?php echo $web; ?>include/allfunction.php?action=delete_brand",
			data: {brandid:id},
			cache: true,
			success: function(response)
			{
				console.log(response);
				if (response==1) {
						location.reload();
                  } else {
						toastr.error('Opps Please Try Again!', 'MTJ World!');
						$('#delbrandModal').modal('hide');
                } 
			}
		});
	});
</script>
  
    </body>
</html>
