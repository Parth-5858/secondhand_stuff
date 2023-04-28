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

				<h3>Category Slider </h3>
				                

					</div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body" id="catslider">
                                   
                                    <form class="form-horizontal" data-parsley-validate  enctype="multipart/form-data" id="form-validate" role="form" >
										
										<input type="hidden" name="sid" id="sid" class="form-control">
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Category</label>
                                            <div class="col-lg-10">
                                                <select name="ccat" id="ccat" class="nostyle form-control" >
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
                                            <label class="col-lg-2 control-label" for="required">Image</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="catimage" name="catimage" type="file" />
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Description</label>
                                             <div class="col-lg-10">
                                                <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                                            </div>
                                        </div><!-- End .form-group  -->
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="required">Rank</label>
                                             <div class="col-lg-10">
                                                <input type="number" min="1" class="form-control" id="rank" name="rank">												
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
                                                <th>Content</th>
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
	<div class="modal fade" id="delhimgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<button type="button" class="btn btn-primary" id="btndelhimg">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	 <?php include("include/footer.php"); ?>
	
<script type="text/javascript" >
	
	$("#form-validate").submit(function(e) {
		e.preventDefault();
		
		var fd = new FormData(document.getElementById("form-validate"));
		$.ajax({
			url: "include/allfunction.php?action=add_cat_slider",
			type: "POST",
			data: fd,
			processData: false,  
			contentType: false,
			success: function(data) {
				console.log(data);
				if (data == '1') {
					toastr.success('Slider Image successfully added!', 'MTJ World!');
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
	
	//view cat slider
	$.ajax({
		url: "include/allfunction.php?action=view_cat_slider",
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
	function editcatimage(sid,cid,content,rank){
		$('html, body').animate({
			scrollTop: $("#catslider").offset().top
		  }, 800, function(){
		});
		$("#sid").val(sid);
		$("#ccat").val(cid);
		$("#description").val(content);
		$("#rank").val(rank);
	}
	
	//delete cat image
	function deletecatimage(id){
		
		$('#delhimgModal').data('id', id).modal('show');
	}
	$( "#btndelhimg" ).click(function() {
		var id = $('#delhimgModal').data('id');
	 
		$.ajax({
			type: "POST",
			url: "<?php echo $web; ?>include/allfunction.php?action=delete_cat_slider",
			data: {hid:id},
			cache: true,
			success: function(response)
			{
				// console.log(response);
				if (response==1) {
						location.reload();
                  } else {
						toastr.error('Opps Please Try Again!', 'MTJ World!');
						$('#delhimgModal').modal('hide');
                } 
			}
		});
	});
</script>
  
    </body>
</html>
