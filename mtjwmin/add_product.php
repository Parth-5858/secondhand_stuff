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

				<h3>Add / View Product </h3>
				                

					</div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body" id="prodform">
                                   
                                    <form class="form-horizontal" data-parsley-validate  enctype="multipart/form-data" id="form-validate" role="form" >
										
										<input type="hidden" name="pid" id="pid" class="form-control">
										
										<div class="form-group">
										<label class="col-sm-2 control-label" for="required">Brand Name</label>
											<div class="col-lg-4">
											<div class="col-lg-10">
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
											<!--div class="col-lg-2">
												<a href="#" class="addbrand">
													<button type="button" class="btn btn-success">+</button>
												</a>
											</div-->
											</div>
											
											<label class="col-lg-1 control-label" for="required">Product Name</label>
                                            <div class="col-lg-5">
                                                <input type="text" autocomplete="off" class="form-control proname" id="proname" name="proname">
                                            </div>
										</div><!-- End .form-group  -->
										
										<div class="form-group">
											<label class="col-lg-2 control-label" for="required">Price</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="price" name="price">												
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Description</label>
                                            <div class="col-lg-10">
                                                <textarea id="pdescription" name="pdescription" class="form-control" rows="5" ></textarea>
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
		
		
		 <div id="content" class="">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

				<h3>Add / View Watch Detail</h3>
				                

					</div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body" id="wform">
                                   
                                    <form class="form-horizontal" data-parsley-validate  enctype="multipart/form-data" id="wimgfrm" role="form" >
										
										<input type="hidden" name="brandid" id="brandid" class="form-control">
										
										<!--div class="form-group">
										<label class="col-sm-2 control-label" for="required">Product Name</label>
											<div class="col-lg-10">
												<select name="pro" id="proimage" class="nostyle form-control" readonly>
												<option disabled selected>Select Any</option>	
											   <?php
													//query execute
													// $query2 = mysqli_query($link,"select max(pid) as maxpro from products");
													// $row2 = mysqli_fetch_array($query2);

													// $query = mysqli_query($link,"select * from products");
													// while($row = mysqli_fetch_array($query)){
														
												?>
                                                     <option <?php ///if($row['pid']==$row2['maxpro']) { echo "selected";} ?> value="<?php //echo $row['pid']; ?>"><?php //echo $row['pname']; ?></option>
                                                <?php
													//}
												?>												
												</select>										
											</div>
										</div-->
										
										<div class="form-group">
										<label class="col-sm-2 control-label" for="required">Brand Name</label>
											<div class="col-lg-10">
												<select name="bimage" id="brandimage" class="nostyle form-control">
												<option disabled selected>Select Any</option>	
											   <?php
													//query execute
													$query2 = mysqli_query($link,"select max(brandid) as maxpro from brand");
													$row2 = mysqli_fetch_array($query2);

													$query = mysqli_query($link,"select * from brand");
													while($row = mysqli_fetch_array($query)){
														
												?>
                                                     <option <?php if($row['brandid']==$row2['maxpro']) { echo "selected";} ?> value="<?php echo $row['brandid']; ?>"><?php echo $row['brandname']; ?></option>
                                                <?php
													}
												?>												
												</select>										
											</div>
										</div>
										
										<div class="form-group" id="ss">
											<label class="col-sm-2 control-label" for="required">Position Type</label>
											 <div class="col-lg-10">
												<select name="sside" id="sside" class="nostyle form-control">
													<option disabled selected>Select Any</option>	
													<option value="1">4 in One</option>	
													<option value="2">Left Slider ( Left Photo, Right Content )</option>	
													<option value="3">Right Slider ( Right Photo, Left Content )</option>	
												</select>
											</div>
										</div><!-- End .form-group  -->
										
										<div class="form-group" id="leftimg">
											<label class="col-lg-2 control-label" for="required">Left Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" id="left" name="left">
												<div id="mimgg"></div>
											</div>
										</div><!-- End .form-group  -->
										
										<div class="form-group" id="centerimg">
											<label class="col-lg-2 control-label" for="required">Center Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" id="center" name="center" >
												<div id="mimgg"></div>												
											</div>
										</div><!-- End .form-group  -->
										
										<div class="form-group" id="rgttopimg">
											<label class="col-lg-2 control-label" for="required">Right Top Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" id="rgttop" name="rgttop" >												
												<div id="mimgg"></div>
											</div>
										</div><!-- End .form-group  -->
										
										<div class="form-group" id="rgtbottomimg">
											<label class="col-lg-2 control-label" for="required">Right Bottom Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" id="rgtbottom" name="rgtbottom">
												<div id="mimgg"></div>
											</div>
										</div><!-- End .form-group  -->
										
										<div class="form-group" id="image12">
											<label class="col-lg-2 control-label" for="required">Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" id="swimg" multiple name="swimg[]" >												
											<div id="swimgg"></div>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group" id="dd">
                                            <label class="col-lg-2 control-label" for="required">Description</label>
                                            <div class="col-lg-10">
                                                <textarea id="description" name="description" class="form-control" rows="5" ></textarea>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
											<label class="col-lg-2 control-label" for="required">Rank</label>
                                            <div class="col-lg-10">
                                                <input type="number" min="1" class="form-control" id="rank" name="rank" data-parsley-required-message="Rank Required!" data-parsley-type="number" data-parsley-type-message="Enter Only Number" data-parsley-trigger="change"  required/>												
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button type="submit" class="btn btn-default marginR10" >Save changes</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div><!-- End .form-group  -->                                      
                                    </form>
									
									<!--table id="mytable" cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">

                                        <thead>

											<tr>

                                                <th>No</th>
                                                <th>Product Name</th>
                                                <th>Description</th>
												<th>Take Action</th>
												<th>Take Action</th>
                                            </tr>

                                        </thead>

                                        <tbody id="data">

                                        </tbody>

                                    </table-->
 
                                </div>
                            </div><!-- End .panel -->
                        </div><!-- End .span12 -->
                    </div><!-- End .row -->  
				
    			<!-- Page end here -->
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
	
	   <!-- add Brand modal -->
        <div class="modal fade" id="myModaladdbrand" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Add Brand</h4></div>
                    <form action="" class="form-horizontal group-border-dashed" enctype="multipart/form-data" method="post" id='frmbrand'>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-sm-2 col-lg-4 control-label">Brand Name</label>
                                <div class="col-sm-10 col-lg-12">
                                    <input type="text" name="brandname" id="brandname" required placeholder="" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default marginR10" >Save changes</button>
                            <button class="btn btn-danger"  data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		
		<!--delete product modal-->
	<div class="modal fade" id="delprodModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<button type="button" class="btn btn-primary" id="btndelprod">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<!--delete image modal-->
	<div class="modal fade" id="delswimgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<button type="button" class="btn btn-primary" id="btnyes1">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	 <?php include("include/footer.php"); ?>
	
<script type="text/javascript" >

$(document).ready(function(){
	$("#leftimg").hide();
	$("#centerimg").hide();
	$("#rgttopimg").hide();
	$("#rgtbottomimg").hide();
	$("#image12").hide();
	$("#dd").hide();
});
	
	$.ajax({
		url: "include/allfunction.php?action=view_product",
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
	
	$("#form-validate").submit(function(e) {
	e.preventDefault();
             $(this).parsley().validate();
            if ($(this).parsley().isValid()){
				var fd = new FormData(document.getElementById("form-validate"));
				var pro_name=$('#proname').val();
				
					$.ajax({
						url: "include/allfunction.php?action=add_product",
						type: "post",
						data: fd,
						processData: false,  
						contentType: false,  
						success: function (response) {
							console.log(response);
							 if(response==1){
								toastr.success('Product '+pro_name+' Added Successfully!', 'MTJ World!');
								setTimeout(function() {
									location.reload();
								}, 1200);
								$('#form-validate')[0].reset();
								$(this).parsley().destroy();
							 }
							 else
							 {
								toastr.error("Opps! Couldn't Add "+pro_name+" as Product, Please Refresh page", 'MTJ World!');
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
	
	//edit product
	function editproduct(pid,brandname,pname,price,description){
		$('html, body').animate({
			scrollTop: $("#prodform").offset().top
		  }, 800, function(){
		});
		$("#pid").val(pid);
		$("#brand").val(brandname);
		$("#proname").val(pname);
		$("#price").val(price);
		$("#pdescription").val(description);
	}
	
	//delete product
	
	function deleteproduct(id){
		
		$('#delprodModal').data('id', id).modal('show');
	}
	$( "#btndelprod" ).click(function() {
		var id = $('#delprodModal').data('id');
	 
		$.ajax({
			type: "POST",
			url: "<?php echo $web; ?>include/allfunction.php?action=delete_product",
			data: {pid:id},
			cache: true,
			success: function(response)
			{
				// console.log(response);
				if (response==1) {
						location.reload();
                  } else {
						toastr.error('Opps Please Try Again!', 'MTJ World!');
						$('#delprodModal').modal('hide');
                } 
			}
		});
	});
	
	
	$('#ss').on('change',function(){
	var ptype=$('#sside').val();
		if(ptype=="1"){
			$("#leftimg").show();
			$("#centerimg").show();
			$("#rgttopimg").show();
			$("#rgtbottomimg").show();
			$("#dd").hide();
			$("#image12").hide();
		}else if(ptype=='2'){
			$("#image12").show();
			$("#dd").show();
			$("#leftimg").hide();
			$("#centerimg").hide();
			$("#rgttopimg").hide();
			$("#rgtbottomimg").hide();
		}else{
			$("#image12").show();
			$("#dd").show();
			$("#leftimg").hide();
			$("#centerimg").hide();
			$("#rgttopimg").hide();
			$("#rgtbottomimg").hide();
		}
	});
				
	//add proimg
	
	$("#wimgfrm").submit(function(e) {
		 e.preventDefault();
		
            $(this).parsley().validate();

            if ($(this).parsley().isValid()){
                var fd = new FormData(document.getElementById("wimgfrm"));
					$.ajax({
						url: "include/allfunction.php?action=add_wimage",
						type: "post",
						data: fd,
						processData: false,  
						contentType: false,  
						success: function (response) {
							console.log(response);
							
							if(response==1){
								toastr.success('Images Saved!', 'MTJ World!');
								setTimeout(function() {
									location.reload();
								}, 1000);
								$('#wimgfrm')[0].reset();
								
								$(this).parsley().destroy();
								
							}
							else{
								toastr.error("Opps! Couldn't Add, Please Refresh page", 'MTJ World!');
								$('#wimgfrm')[0].reset();
								$(this).parsley().destroy();
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
						   console.log(textStatus, errorThrown);
						}
					});
            }
		
	});
	
	//onload display image
	// $(document).ready(function(){
		// var bimage=$("#brandimage").val();
		// $.ajax({
			// url: "<?php echo $web; ?>include/allfunction.php?action=displayimage",
			// type: "post",
			// data:{bimage:bimage},
			// success: function (response) {
				// console.log(response);
				// $('#mimgg').html(response);
				// $('#swimgg').html(response);
			// },
			// error: function(jqXHR, textStatus, errorThrown) {
			   // console.log(textStatus, errorThrown);
			// }
		// });
	// });
	
	//onchange display image
	// $('#brandimage').on('change',function(){
		// var bimage=$("#brandimage").val();
		// $.ajax({
			// url: "<?php echo $web; ?>include/allfunction.php?action=onchangeimage",
			// type: "post",
			// data:{bimage:bimage},
			// success: function (response) {
				// console.log(response);
				// $('#swimgg').html(response);
			// },
			// error: function(jqXHR, textStatus, errorThrown) {
			   // console.log(textStatus, errorThrown);
			// }
		// });
	// });
	
	//onchange select side display image
	// $('#sside').on('change',function(){
		// var sside=$("#sside").val();
		// var bimage=$("#brandimage").val();
		// $.ajax({
			// url: "<?php echo $web; ?>include/allfunction.php?action=onchangeptypeimage",
			// type: "post",
			// data:{sside:sside,bimage:bimage},
			// success: function (response) {
				// console.log(response);
				// $('#swimgg').html(response);
			// },
			// error: function(jqXHR, textStatus, errorThrown) {
			   // console.log(textStatus, errorThrown);
			// }
		// });
	// });
	
	//delete images
	$(document).on('click','.deleteswimage', function(e) {
			e.preventDefault();
			var id = $(this).data('id');
			$('#delswimgModal').data('id', id).modal('show');
	});
	
	$('#btnyes1').click(function() {
		
		var id = $('#delswimgModal').data('id');
		var dataStr = "id=" + id;

		$.ajax({
		type: "POST",
		url: "<?php echo $web; ?>include/allfunction.php?action=delete_watch_image",
		data: dataStr,
		cache: true,
		success: function(result)
		{
			console.log(result);
			if(result == "1")
			{
				toastr.success('Delete Successfully!', 'MTJ World!');
				setTimeout(function() {
					location.reload();
				}, 1000);
			}
			else
			{
				toastr.error("Opps! Couldn't Delete, Please Refresh page", 'MTJ World!');
			}
		}
		});
	});
	
	// $('#rank').on('focusout', function() {
	 	// var rank=$('#rank').val();
	 	// var bid=$('#brandid').val();
		// $.ajax({
			// url: "<?php echo $web; ?>include/allfunction.php?action=check_brand_rank",
			// type: "post",
			// data: {rank:rank},
			// success: function (response) {
				// console.log(response);
				// if(response!=0){
					// $('#rank').focus();
					// toastr.error('This rank allocated '+response+'. Please Change Rank', 'MTJ World');
				// }
				// else{
					//toastr.error('Rank ', 'MADMIN');
				// }
			// },
			// error: function(jqXHR, textStatus, errorThrown) {
			   // console.log(textStatus, errorThrown);
			// }
		// });
	// });	

	
	
</script>
  
    </body>
</html>
