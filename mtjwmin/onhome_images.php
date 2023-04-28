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
                    <h3>View On Home Categories</h3>                   
                </div><!-- End .heading-->
    			
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default gradient">
                                <div class="panel-heading"></div>
                                <div class="panel-body noPad clearfix">
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
                                             <tr>
                                                <th>No</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Take Action</th>
                                                <th>Take Action</th>
											</tr>
                                        </tfoot>
                                    </table>
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
	$.ajax({
		url: "include/allfunction.php?action=view_onhome",
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

<script>
function deleteonhomeimages(cid){
	$.ajax({
			url: "include/allfunction.php?action=delete_onhome",
			type: "post",
			data: {id:cid},
			success: function (response) {
				//console.log(response);
				
				if(response==1){							
					toastr.success('Image Successfully Deleted!', 'Mital Jewels!');
					location.reload();							
				}	
				else{
					toastr.error("Opps! Couldn't Deleted Image, Please Refresh page!", 'Mital Jewels!');
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
}
</script>

</body>
</html>

