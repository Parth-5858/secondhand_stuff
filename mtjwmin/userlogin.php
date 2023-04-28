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

                    <h3>View User Login</h3>                    

				</div><!-- End .heading-->

                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default gradient">
                                <div class="panel-heading">                                   
                                </div>
                                <div class="panel-body noPad clearfix">
                                    <table cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                            </tr>

                                        </thead>

                                        <tbody>

										<?php 

											$query=mysqli_query($link,"select * from users");

											$count=1;
											$data='';

											if(mysqli_num_rows($query) > 0){

											while($row=mysqli_fetch_array($query)){
									
                                            $data .='<tr>
												<td>'.$count.'</td>
												<td>'.$row['name'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['phone'].'</td>
												<td>'.$row['gender'].'</td>
												<td>'.$row['country_id'].'</td>
												<td>'.$row['state_id'].'</td>
												<td>'.$row['city_id'].'</td>
												<td>'.$row['pincode'].'</td>
											</tr>';

											$count++;		
											}
											echo $data;
										 }
										else{
											echo "0";
										}
										?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Pincode</th>
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


    </body>

</html>

