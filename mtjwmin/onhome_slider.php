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
                            <div class="contentwrapper">
                                <!--Content wrapper-->

                                <div class="heading">

                                    <h3> On Home Slider</h3>

                                </div>
                                <!-- End .heading-->

                                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal" data-parsley-validate enctype="multipart/form-data" id="form-validate" role="form">
                                                    <input class="form-control" id="iid" name="iid" type="hidden" value=""/>

													 <div class="row">
                                                    <div class="col-lg-6">
														<div class="form-group">
															<label class="col-lg-2 control-label" for="required">Image</label>
															<div class="col-lg-10">
																<input class="col-lg-12 form-control" id="sliderimage" value="" name="sliderimage" type="file" data-parsley-required-message="Image Required!" data-parsley-trigger="change" required/>
															</div>
														</div>
                                                    </div>
                                                    <!-- End .form-group  -->
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-lg-2 control-label" for="required">Name</label>
															<div class="col-lg-10">
																<input class="form-control" id="name" name="name" value="" type="text" data-parsley-required-message="Image Required!" data-parsley-trigger="change" required/>
															</div>
														</div>
                                                    </div>
                                                    </div>
                                                    <!-- End .form-group  -->
													<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-lg-2 control-label" for="required">Url</label>
															<div class="col-lg-10">
																<input class="form-control" id="url" name="url" value="" type="text" data-parsley-required-message="Image Required!" data-parsley-trigger="change" required/>
															</div>
														</div>
													</div>
                                                    <!-- End .form-group  -->
													<div class="col-lg-6">
														<div class="form-group">
															<label class="col-lg-2 control-label" for="required">External Url</label>
															<div class="col-lg-10">
																<input class="form-control" id="exurl" name="exurl" value="" type="text" data-parsley-required-message="Image Required!" data-parsley-trigger="change" required/>
															</div>
														</div>
													</div>
													</div>
                                                    <!-- End .form-group  -->
													<div class="row">
                                                    <div class="col-lg-6">
														<div class="form-group">
															<label class="col-lg-2 control-label" for="required">Rank</label>
															<div class="col-lg-10">
																<input class="form-control" id="sliderrank" value="" name="sliderrank" type="number" min="1" data-parsley-required-message="Rank Required!" data-parsley-trigger="change" required/>
															</div>
														</div>
													</div>
													</div>
                                                    <!-- End .form-group  -->
													
														<div class="form-group">
															<div class="col-lg-offset-2">
																<button type="submit" class="btn btn-default marginR10">Save changes</button>
																<button class="btn btn-danger">Cancel</button>
															</div>
														</div>
													
													
														
                                                    <!-- End .form-group  -->
                                                </form>

												
                                                <div class="panel panel-default gradient">

                                                    <div class="panel-heading">
                                                    </div>
                                                    <div class="panel-body noPad clearfix">
                                                        <table id="mytable" cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">

                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Slider Image</th>
                                                                    <th>Slider Name</th>
                                                                    <th>Slider Order</th>
                                                                    <th>Take Action</th>
                                                                    <th>Take Action</th>
                                                                </tr>

                                                            </thead>
                                                            <tbody id="data">

                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Slider Image</th>
                                                                    <th>Slider Name</th>
                                                                    <th>Slider Order</th>
                                                                    <th>Take Action</th>
                                                                    <th>Take Action</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- End .panel -->
                                            </div>
                                        </div>
                                        <!-- End .panel -->
                                    </div>
                                    <!-- End .span12 -->
                                </div>
                                <!-- End .row -->

                                <!-- Page end here -->

                            </div>
                            <!-- End contentwrapper -->
                        </div>
                        <!-- End #content -->

                </div>
                <!-- End #wrapper -->

                <?php include("include/footer.php"); ?>

<script type="text/javascript">
$("#form-validate").submit(function(e) {

	e.preventDefault();

	$(this).parsley().validate();

	if ($(this).parsley().isValid()) {
		var fd = new FormData(document.getElementById("form-validate"));

		$.ajax({
			url: "include/allfunction.php?action=add_slider",
			type: "post",
			data: fd,
			processData: false,
			contentType: false,
			success: function(response) {
				console.log(response);

				if (response == 1) {
					toastr.success('Slider Added Successfully!', 'Mital Jewels!');
					/* setTimeout(function() {
						location.reload();
					}, 1000); */
					 $.ajax({
						url: "include/allfunction.php?action=view_slider",
						type: "get",
						success: function(response) {
							//console.log(response);
							$('#data').html(response);
							$('#mytable').DataTable();
						},
						error: function(jqXHR, textStatus, errorThrown) {
							console.log(textStatus, errorThrown);
						}
					});
					$("#iid").val('');
					$("#sliderimage").val('');
					$('#form-validate')[0].reset();

					$(this).parsley().destroy();

				} else if (response == 2) {
					toastr.warning("Image Upload failed", 'Mital Jewels!');
					setTimeout(function() {
						location.reload();
					}, 1000);
					$('#form-validate')[0].reset();
					$(this).parsley().destroy();
				} else {
					toastr.error("Opps! Couldn't Add Image, Please Refresh page", 'Mital Jewels!');
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
	url: "include/allfunction.php?action=view_slider",
	type: "get",
	success: function(response) {
		//console.log(response);
		$('#data').html(response);
		$('#mytable').DataTable();
	},
	error: function(jqXHR, textStatus, errorThrown) {
		console.log(textStatus, errorThrown);
	}
});

function deleteslider(iid) {
	var result = confirm("Are you sure you want to delete?");
	if (result) {
		$.ajax({
			url: "include/allfunction.php?action=delete_slider",
			type: "post",
			data: {
				iid: iid
			},
			success: function(response) {
				//console.log(response);

				if (response == 1) {
					toastr.success('Slider Image Successfully Deleted!', 'Mital Jewels!');
					location.reload();
				} else {
					toastr.error("Opps! Couldn't Deleted Slider Image, Please Refresh page!", 'Mital Jewels!');

				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}
}
function editslider(iid,name,ipath,url,exurl,rank) {
	/* $("#sliderimage").val(ipath); */
	$("#sliderimage").attr("required",false);
	$("#name").val(name);
	$("#name").attr("required",false);
	$("#url").val(url);
	$("#url").attr("required",false);
	$("#exurl").val(exurl);
	$("#exurl").attr("required",false);
	$("#sliderrank").val(rank);
	$("#sliderrank").attr("required",false);
	$("#iid").val(iid);
	
	$('html, body').animate({
			scrollTop: $(".form-horizontal").offset().top
		  }, 800, function(){
		  });
}
</script>

        </body>

    </html>