
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h3> <i class="fa fa-cogs"></i>settings</h3>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/settings"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">settings</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-warning"> <br/>
          <!-- form start -->
          <?php
			if(isset($SUCCESS) && !empty($SUCCESS))
			{
			 echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
					<h4><i class="fa fa-spinner fa-spin"></i> '.$SUCCESS.'</h4>
				  </div>';
			 echo '<meta http-equiv="refresh" content="2;url='.base_url('admin/settings').'">';
			}			 
		   ?>
          <form  action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group col-md-3"> <label">Email Address<span style="color:#FF0000;">*</span>
                </label>
                <input type="email" class="form-control" id="emailaddress" value="<?php echo getWebOptionValue('email');?>" name="email" placeholder="Enter Email Address" required autofocus/>
              </div>
              <div class="form-group col-md-6"> <label">Address<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="address" value="<?php echo getWebOptionValue('address');?>" name="address" placeholder="Address" required/>
              </div>
			  <div class="form-group col-md-3"> <label">Country<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="country" value="<?php echo getWebOptionValue('country');?>" name="country" placeholder="Enter Country" required/>
              </div>
              <div class="form-group col-md-2">
                <label>State<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="state" value="<?php echo getWebOptionValue('state');?>" name="state" placeholder="State" required>
              </div>
              <div class="form-group col-md-2">
                <label>City<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="city" value="<?php echo getWebOptionValue('city');?>" name="city" placeholder="City" required>
              </div>
              <div class="form-group col-md-2">
                <label>PIN Code<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="pincode" value="<?php echo getWebOptionValue('pincode');?>" name="pincode" placeholder="PIN Code" required>
              </div>
              <div class="form-group col-md-3">
                <label>Mobile Number<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="mobileno" value="<?php echo getWebOptionValue('mobile_no');?>" name="mobile_no" placeholder="Mobile Number" required>
              </div>
              <div class="form-group col-md-3">
                <label>PAN Number<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="pan_no" value="<?php echo getWebOptionValue('pan_no');?>" name="pan_no" placeholder="PAN Number" required>
              </div>
              <div class="form-group col-md-6">
                <label>Facebook Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="fburl" value="<?php echo getWebOptionValue('facebook_url');?>" name="facebook_url" placeholder="Facebook Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Linkedin Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="liurl" value="<?php echo getWebOptionValue('linkedin_url');?>" name="linkedin_url" placeholder="Linkedin Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Instagram Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="instaurl" value="<?php echo getWebOptionValue('instagram_url');?>" name="instagram_url" placeholder="Instagram Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Twitter Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="twurl" value="<?php echo getWebOptionValue('twitter_url');?>" name="twitter_url" placeholder="Twitter Page URL" required>
              </div>
              <div class="form-group col-md-12">
                <label>Presentation  URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="pre_url" value="<?php echo getWebOptionValue('presentation_url');?>" name="presentation_url" placeholder="Presentation Page URL" required>
              </div>
              <div class="form-group col-md-3">
                <label>Front-End Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="frontlogo" name="front_logo" placeholder="Front-End Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('front_logo');?>"/> </div>
              <div class="form-group col-md-3">
                <label>Back-End Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="backlogo" name="backlogo" placeholder="Back-End Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('backlogo');?>"/> </div>

              <div class="form-group col-md-3">
                <label>Background Image<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="backgroundimage" name="login_background_image" placeholder="Background Image">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('login_background_image');?>" class="img-responsive"/> 

              </div>
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary" name="configure_common_setting"><i class="fa fa-refresh"></i> Configure Now</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

