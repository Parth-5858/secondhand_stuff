<!-- modal -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="mySmallModalLabel">Action Taken</h4>
					</div>
					<div class="modal-body">
						<form class="login-form" data-parsley-validate role="form">

						<input type="hidden" name="frompage" value="">
													
							<div class="form-group">
								<label class="control-label">Current Password</label><i class="bar"></i>
								<input  type="password" name="cpassword" id="cpassword" data-parsley-trigger="change" required=""/>
							</div>
							<div class="form-group">
								<label class="control-label">New Password</label><i class="bar"></i>
								<input type="password" name="npassword" id="npassword" data-parsley-trigger="change" required=""/>
							</div>
							<div class="form-group">
								<label class="control-label">Confirm New Password</label><i class="bar"></i>
								<input type="password" name="cnpassword" id="cnpassword" data-parsley-trigger="change" data-parsley-equalto="#npassword" data-parsley-equalto-message="Password Does Not Match"  required=""/>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-default marginR10" >Save changes</button>
								<button type="reset" class="btn">Cancel</button>
						  </div>
						</form>
					</div>
				</div>
		  	</div>
		</div>
	<!-- end modal -->
 <script type="text/javascript" src="js/jquery-ui.min.js"></script>
 <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script> 
 <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
 <script type="text/javascript" src="js/jquery.mousewheel.js"></script>   
 <script type="text/javascript" src="js/libs/jRespond.min.js"></script>  
 <!-- Charts plugins -->  
 
 <!-- Sparkline plugin -->  
 <!-- Misc plugins -->   
 <script type="text/javascript" src="plugins/misc/qtip/jquery.qtip.min.js"></script>
 <!-- Custom tooltip plugin --> 
 <script type="text/javascript" src="plugins/misc/totop/jquery.ui.totop.min.js"></script>
 <!-- Search plugin -->  
 <script type="text/javascript" src="plugins/misc/search/tipuesearch_set.js"></script> 
 <script type="text/javascript" src="plugins/misc/search/tipuesearch_data.js"></script>
 <!-- JSON for searched results -->  
 <script type="text/javascript" src="plugins/misc/search/tipuesearch.js"></script> 
 <!-- Form plugins -->    
 <script type="text/javascript" src="plugins/forms/elastic/jquery.elastic.js"></script>   
 <script type="text/javascript" src="plugins/forms/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>  
 <script type="text/javascript" src="plugins/forms/maskedinput/jquery.maskedinput-1.3.min.js"></script>  
 <script type="text/javascript" src="plugins/forms/togglebutton/jquery.toggle.buttons.js"></script>    
 <script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>   
 <script type="text/javascript" src="plugins/forms/globalize/globalize.js"></script>    
 <script type="text/javascript" src="plugins/forms/color-picker/colorpicker.js"></script> 
 <script type="text/javascript" src="plugins/forms/timeentry/jquery.timeentry.min.js"></script>  
 <script type="text/javascript" src="plugins/forms/select/select2.min.js"></script>    
 <script type="text/javascript" src="plugins/forms/dualselect/jquery.dualListBox-1.3.min.js"></script> 
 <script type="text/javascript" src="plugins/forms/tiny_mce/tinymce.min.js"></script>   
 <script type="text/javascript" src="js/supr-theme/jquery-ui-timepicker-addon.js"></script>   
 <script type="text/javascript" src="js/supr-theme/jquery-ui-sliderAccess.js"></script>
 <!--script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script-->
  
 <!-- Init plugins -->   
<script type="text/javascript" src="js/main.js"></script><!-- Core js functions --> 

<script type="text/javascript" src="js/forms.js"></script><!-- Init plugins only for page -->
 
<script type="text/javascript" src="js/toastr.js"></script>
<script type="text/javascript" src="js/parsley.js"></script>
<script src="https://cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>

<script>

$(document).ready(function(){
	$("#resetpwd").click(function(){
		$("#login-modal").modal('show');
	});
});

            $('.login-form').submit(function (e) {
                e.preventDefault();
				
                $(this).parsley().validate();
                if ($(this).parsley().isValid()) {
                    
                    $.ajax({
                        url: "resetpwd_process.php",
                        type: "POST",
                        data: $('.login-form').serialize(),
                        success: function (response) {
							console.log(response);
                            if (response == 1) {
								toastr.success('Password Reset!', 'Career First IAS Academy!');
								setTimeout(function() {
									location.reload();
								}, 1000);
                            } else{
								toastr.error('Opps Please Try Again!', 'Career First IAS Academy!');
                            }
                        },
					});

                }
            });

</script>