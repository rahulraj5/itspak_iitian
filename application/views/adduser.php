<style type="text/css">
	.uploadBtn{
		top: 0;
		left: 0;
	}
	.uploadBtnInput{
		position: absolute;
		width: 175px;
		display: inline-table !important;
		opacity: 0;
	}
	.uploadBtnWrapper{
		position: relative;
		text-align: center;
		margin-top: 15px;
	}
	.profilePic{
		width:200px;
		height:200px; 
		background-size: cover;
		background-repeat: no-repeat;
	}
	.closeBtn:hover{
		background-color: #333; 
	}
	.closeBtn{
		position: absolute;
	    top: 1em;
	    right: 3.2em;
	    background: #d30;
	    padding: 5px;
	    border-radius: 50%;
	    cursor: pointer;
	    height: 25px;
	    width: 25px;
	    color: #fff;
	    transition: all .3s;
	}
	.with-errors{
		color: red;
	}
</style>
<form data-toggle="validator" novalidate="true" method="post" enctype="multipart/form-data" autocomplete="on">
	<div class="col-md-3 col-lg-3 " align="center"> 
		<div class="img-circle img-responsive profilePic" style="background-image: url(<?php echo (!empty($user_data) && !empty($user_data['image']) ? $user_data['image'] : "http://otechco.com/portals/oteckco/skins/oteckco/images/about%20us/man-team.jpg")?>);"></div> 
		<!-- <i class="fa fa-times closeBtn"></i> -->
		<div class="uploadBtnWrapper text-center">
			<input type="file" class="btn btn-primary uploadBtnInput" name="image">
			<div class="btn btn-primary uploadBtn">Change Profile Picture</div>
		</div>
	</div>
	
	<div class="col-md-9">
	    <div class="panel panel-card margin-b-30">
	        <!-- Start .panel -->
	        <div class="panel-heading">
	           Profile Edit Form
	            
	        </div>
	        <div class="panel-body">
	             
					<div class="form-group">
						<label>Name</label><input type="text" name="name" placeholder="Enter name" class="form-control" value="<?php echo (!empty($user_data) && !empty($user_data['name']) ? $user_data['name'] : "" )?>" data-error="Name is required field" required="">
						<div class="help-block with-errors">
						</div>
					</div>
					<div class="form-group">
						<label>Email</label><input type="email"  name="email" value="<?php echo (!empty($user_data) && !empty($user_data['email']) ? $user_data['email'] : "" )?>" placeholder="Enter email" class="form-control" data-error="Email address is invalid" required="">
						<div class="help-block with-errors">
						<?php echo (!empty($email_error)?$email_error:"");?>
						</div>
					</div>
					<div class="form-group">
						<label>Mobile</label><input type="text"  name="mobile_no" value="<?php echo (!empty($user_data) && !empty($user_data['mobile_no']) ? $user_data['mobile_no'] : "" )?>" placeholder="Enter mobile number" class="form-control" data-error="Mobile number is required field" required="">
						<div class="help-block with-errors">
							<?php echo (!empty($mobile_error)?$mobile_error:"");?>
						</div>
					</div>
					
					<!-- <div class="form-group">
						<label>Date of birth (YYYY-mm-dd)</label>

						<div class="input-group date">
	                        <input type="text" name="dob" value="<?php echo (!empty($user_data) && !empty($user_data['dob']) ? $user_data['dob'] : "" )?>" placeholder="YYYY-MM-DD" data-format="YYYY-MM-DD" id="input-date-added" class="form-control hasDatepicker" autocomplete="off">
	                        <span class="input-group-btn">
	                            <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
	                        </span>
	                    </div>
						<div class="help-block with-errors">
						</div>
					</div> -->

				 <?php if(!isset($user_data['id']) && empty($user_data['id']))

	             {
	               ?>

	               <!-- End .control-group  -->
		                <div class="form-group">
		                    <label>Password</label>
		                    <div >
		                        <input class="form-control" name="password" type="password" id="password" required="">
		                    </div>
		                </div>
		                <!-- End .control-group  -->
		                <div class="form-group">
		                    <label>Re-type password</label>
		                    <div >
		                        <input class="form-control" name="cpassword" type="password" id="confirmpassword" onblur="confirmthepasswords()" required="">
		                        <span id="checkpassword"></span>
		                        <span><?php echo (!empty($pass_error)?$pass_error:"");?></span>
		                    </div>
		                </div>
		            <?php 
		            }
		            ?>
		                <!-- End .control-group  -->
	                
	                
	                  
					<div>
						<?php if(isset($user_data['id']) && !empty($user_data['id']))

	                        {

	                      ?>

	                          <input type="hidden" name="id" value="<?php echo (!empty($user_data) && !empty($user_data['id']) ? $user_data['id'] : "" )?>">
	                          <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="update"><strong>Update</strong></button>
	                      <?php
	                      	}
	                      	else
	                      	{
	                      ?>
	                      		<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit"><strong>Submit</strong></button>
	                      	<?php 
	                      	}
	                      	?>
						
					</div>
				
	        </div>
	    </div>
	</div>
</form>
<?php include('datepicker.php');?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlk9jl3b8NvuKXQm6rft78c5T_PLe7gRg&libraries=places&callback=initMap" async defer></script>
 <script type="text/javascript">
	function confirmthepasswords() {

  	//alert('demo');
    	var password = document.getElementById("password").value;
    	//alert(password);
    	var confirmPassword = document.getElementById("confirmpassword").value;
    	//alert(confirmPassword);
    	if (password != confirmPassword) {
        	$("#checkpassword").html('password do not match').css({ "color": "red" });
       	// alert('password do not match');
	$('#submitform').attr("disabled", true);
        	return false;
    	}else
    	{
      	$("#checkpassword").html('password  matched').css({ "color": "green" });
	      	//document.getElementById("checkpassword").style.color = green;
	      	return true;
    	}

	}

	
</script>

