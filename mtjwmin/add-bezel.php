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

				<h3>Add Bezel </h3>
				                

					</div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body" id="bezelform">
                                   
                                    <form class="form-horizontal" data-parsley-validate  enctype="multipart/form-data" id="form-validate" role="form" >
										
										<input type="hidden" name="bezelid" id="bezelid" class="form-control">
										
										<div class="form-group">
										<label class="col-sm-2 control-label" for="required">Brand Name</label>
											<div class="col-lg-3">
												<select name="brand" id="brand" class="nostyle form-control brand" >
												<option disabled selected>Select Any</option>	
											   <?php
													//query execute
													$query = mysqli_query($link,"select * from brand");
													while($row = mysqli_fetch_array($query)){
												?>
                                                       <option value="<?php echo $row['brandid']; ?>"><?php echo $row['brandname']; ?></option>
                                                <?php
													}
												?>												
												</select>
											</div>
											
											<label class="col-lg-1 control-label" for="required">Product Name</label>
                                            <div class="col-lg-5">
                                               <select name="proname[]" id="select2" class="nostyle form-control proname" multiple="multiple">
												</select>
                                            </div>
										</div><!-- End .form-group  -->
										
										<div class="form-group">
										
											 <label class="col-lg-2 control-label" for="required">Price</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="price" name="price">												
                                            </div>
											
                                            <label class="col-lg-1 control-label" >Color</label>
                                            <div class="col-lg-5">
												<input type="text" class="form-control" id="color" name="color">
											</div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Description</label>
                                            <div class="col-lg-10">
                                                <textarea id="description" name="description" class="form-control" rows="5" ></textarea>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Visibility</label>
                                            <div class="col-lg-10">
												<input type="checkbox" class="form-control isactive" id="isactive" name="isactive" value="1" checked>Visibility
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

                                                <th>Brand Name</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>color</th>
                                                <th>Description</th>
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
	<div class="modal fade" id="delbezelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<button type="button" class="btn btn-primary" id="btndelbezel">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	 <?php include("include/footer.php"); ?>
	
<script type="text/javascript" >
	
	//on change to get product
	$(".brand").on('change',function(){
		var brand=$(this).val();
		// alert(brand);
		 $.ajax({
			url: "include/allfunction.php?action=getprodname",
			type: "get",
			data: {bid:brand},
			success: function (response) {
				// console.log(response);
				$('#select2').html(response);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	})
	
	//add bezel
	$("#form-validate").submit(function(e) {
		e.preventDefault();
		
		var fd = new FormData(document.getElementById("form-validate"));
		$.ajax({
			url: "include/allfunction.php?action=add_bezel",
			type: "POST",
			data: fd,
			processData: false,  
			contentType: false,
			success: function(data) {
				// console.log(data);
				if (data == '1') {
					toastr.success('Bezel successfully added!', 'MTJ World!');
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
	});
	
	//view bezel
	$.ajax({
		url: "include/allfunction.php?action=view_bezel",
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
	
	//edit bezel
	function editbezel(bezelid,brandid,prodid,price,color,description){
		$('html, body').animate({
			scrollTop: $("#bezelform").offset().top
		  }, 800, function(){
		});
		$("#bezelid").val(bezelid);
		$("#brand").val(brandid);
		$.ajax({
			url: "include/allfunction.php?action=getprodname",
			type: "get",
			data: {bid:brandid},
			success: function (response) {
				// console.log(response);
				$('#select2').html(response);
				$(".proname").select2('val',prodid.split(",")).change();
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
		$("#price").val(price);
		$("#color").val(color);
		$("#description").val(description);
	}
	
	//delete bezel
	function deletebezel(id){
		
		$('#delbezelModal').data('id', id).modal('show');
	}
	$( "#btndelbezel" ).click(function() {
		var id = $('#delbezelModal').data('id');
	 
		$.ajax({
			type: "POST",
			url: "<?php echo $web; ?>include/allfunction.php?action=delete_bezel",
			data: {bezelid:id},
			cache: true,
			success: function(response)
			{
				// console.log(response);
				if (response==1) {
						location.reload();
                  } else {
						toastr.error('Opps Please Try Again!', 'MTJ World!');
						$('#delbezelModal').modal('hide');
                } 
			}
		});
	});
</script>
  
    </body>
</html>
