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
                    <h3>View Product</h3>                   
                </div><!-- End .heading-->

                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default gradient">
                                <div class="panel-body noPad clearfix">
                                    <table id="mytable" cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">
                                        <thead>
											<tr>
                                                <th>No</th>
                                                <th>Style No.</th>
                                                <th>Product Name</th>
                                                <th>Price Of Product</th>
                                                <th>Diamond Pieces</th>
                                                <th>Diamonds Weight</th>
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
    </div><!-- End #wrapper -->

<?php include_once('include/footer.php');?>

<script type="text/javascript" >
$(document).ready(function(){
var cid=<?php echo $_REQUEST['cid'];?>;
	$.ajax({
		url: "include/allfunction.php?action=view_product",
		type: "get",
		data: {cid:cid},
		success: function (response) {
			console.log(response);
			$('#data').html(response);
			$('#mytable').DataTable();
		},
		error: function(jqXHR, textStatus, errorThrown) {
		   console.log(textStatus, errorThrown);
		}
	});
})

	</script>

<script>
function deleteprod(pid){
	$.ajax({
			url: "include/allfunction.php?action=delete_product",
			type: "post",
			data: {pid:pid},
			success: function (response) {
				//console.log(response);
				
				if(response==1){							
					toastr.success('Product Successfully Deleted!', 'Mital Jewels!');
					location.reload();							
				}	
				
				else{
					toastr.error("Opps! Couldn't Deleted Product, Please Refresh page!", 'Mital Jewels!');
					
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
