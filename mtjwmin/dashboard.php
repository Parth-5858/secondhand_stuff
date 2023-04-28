<?php
include("include/connect.php");

if(!isset($_SESSION['mjwadmin_id']))
{
	header('location:index.php');
}

?>
<html xmlns="">
   
   <?php include("include/header.php"); ?>
   
   <style>
	
.status-pill {
  width: 12px;
  height: 12px;
  border-radius: 30px;
  background-color: #eee;
  display: inline-block; }
  .status-pill.yellow {
    background-color: #f8bc34; }
  .status-pill.red {
    background-color: #c21a1a; }
  .status-pill.green {
    background-color: #71c21a; }  
.status-pill.blue {
    background-color: #216daf; }
	
	.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }
  
  .sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto; }
  
  .tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Proxima Nova W01", "Rubik", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  font-size: 0.8rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip.tooltip-top, .tooltip.bs-tether-element-attached-bottom {
    padding: 5px 0;
    margin-top: -3px; }
    .tooltip.tooltip-top .tooltip-inner::before, .tooltip.bs-tether-element-attached-bottom .tooltip-inner::before {
      bottom: 0;
      left: 50%;
      margin-left: -5px;
      content: "";
      border-width: 5px 5px 0;
      border-top-color: #000; }
  .tooltip.tooltip-right, .tooltip.bs-tether-element-attached-left {
    padding: 0 5px;
    margin-left: 3px; }
    .tooltip.tooltip-right .tooltip-inner::before, .tooltip.bs-tether-element-attached-left .tooltip-inner::before {
      top: 50%;
      left: 0;
      margin-top: -5px;
      content: "";
      border-width: 5px 5px 5px 0;
      border-right-color: #000; }
  .tooltip.tooltip-bottom, .tooltip.bs-tether-element-attached-top {
    padding: 5px 0;
    margin-top: 3px; }
    .tooltip.tooltip-bottom .tooltip-inner::before, .tooltip.bs-tether-element-attached-top .tooltip-inner::before {
      top: 0;
      left: 50%;
      margin-left: -5px;
      content: "";
      border-width: 0 5px 5px;
      border-bottom-color: #000; }
  .tooltip.tooltip-left, .tooltip.bs-tether-element-attached-right {
    padding: 0 5px;
    margin-left: -3px; }
    .tooltip.tooltip-left .tooltip-inner::before, .tooltip.bs-tether-element-attached-right .tooltip-inner::before {
      top: 50%;
      right: 0;
      margin-top: -5px;
      content: "";
      border-width: 5px 0 5px 5px;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }
  .tooltip-inner::before {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid; }
  
	</style>
   
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
    <?php	include("include/top-header.php");	?>
	    <script src="https://www.enzym.in/enzymin/bower_components/bootstrap/js/dist/tooltip.js"></script>

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

         <?php include("include/sidebar.php"); ?>
		 
        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Dashboard</h3>                    

                </div><!-- End .heading-->


               
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
    
   <?php include("include/footer.php"); ?>

    </body>
</html>
