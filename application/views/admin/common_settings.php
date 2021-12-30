<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h4> <i class="fa fa-cogs"></i> Common Settings </h4>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Common Settings</li>
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
			 echo '<meta http-equiv="refresh" content="2;url='.base_url("admin/common_settings").'">';
			}			 
		   ?>
          <form role="form" action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group col-md-3"> <label">Email Address<span style="color:#FF0000;">*</span>
                </label>
                <input type="email" class="form-control" id="emailaddress" value="<?php echo getWebOptionValue('email');?>" name="email" placeholder="Enter Email Address" required autofocus/>
              </div>
              <div class="form-group col-md-6"> <label">Main Address<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="address" value="<?php echo getWebOptionValue('address');?>" name="address" placeholder="Address" required/>
              </div>
              <div class="form-group col-md-3">
                <label>Main Address Mobile Number<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="mobileno" value="<?php echo getWebOptionValue('mobile_no');?>" name="mobile_no" placeholder="Mobile Number" required>
              </div>
              
              <div class="form-group col-md-3"> <label">Center1 Header<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="address1" value="<?php echo getWebOptionValue('header1');?>" name="header1" placeholder="Center1 Header" required/>
              </div>
              <div class="form-group col-md-6"> <label">Center1<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="address1" value="<?php echo getWebOptionValue('address1');?>" name="address1" placeholder="Center1" required/>
              </div>
              <div class="form-group col-md-3">
                <label>Mobile Number Center1<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="mobileno1" value="<?php echo getWebOptionValue('mobile_no1');?>" name="mobile_no1" placeholder="Mobile Number" required>
              </div>
              
              <div class="form-group col-md-3"> <label">Center2 Header<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="address1" value="<?php echo getWebOptionValue('header2');?>" name="header2" placeholder="Center2 Header" required/>
              </div>
              <div class="form-group col-md-6"> <label">Center2<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="address2" value="<?php echo getWebOptionValue('address2');?>" name="address2" placeholder="Center2" required/>
              </div>
              <div class="form-group col-md-3">
                <label>Mobile Number Center2<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="mobileno2" value="<?php echo getWebOptionValue('mobile_no2');?>" name="mobile_no2" placeholder="Mobile Number" required>
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
              <div class="form-group col-md-3"> <label">Country<span style="color:#FF0000;">*</span>
                </label>
                <input type="text" class="form-control" id="country" value="<?php echo getWebOptionValue('country');?>" name="country" placeholder="Enter Country" required/>
              </div>
              <div class="form-group col-md-3">
                <label>PAN Number<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="pan_no" value="<?php echo getWebOptionValue('pan_no');?>" name="pan_no" placeholder="PAN Number" required>
              </div>
              <div class="form-group col-md-6">
                <label>Website URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="web_url" value="<?php echo getWebOptionValue('web_url');?>" name="web_url" placeholder="Website URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Youtube Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="yt_url" value="<?php echo getWebOptionValue('yt_url');?>" name="yt_url" placeholder="Youtube Page URL" required>
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
              <div class="form-group col-md-6">
                <label>Presentation  URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="pre_url" value="<?php echo getWebOptionValue('presentation_url');?>" name="presentation_url" placeholder="Presentation Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Site Title<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="site_title" value="<?php echo getWebOptionValue('site_title');?>" name="site_title" placeholder="site title" required>
              </div>
			  <!--<div class="form-group col-md-12">-->
     <!--           <label>Contact US Description<span style="color:#FF0000;">*</span></label>-->
     <!--           <textarea class="form-control" name="contact_description" value="<?php echo getWebOptionValue('contact_description');?>" rows="2" id="contact_description" placeholder="contact description." required><?php echo getWebOptionValue('contact_description');?></textarea>-->
     <!--         </div>-->
				<div class="form-group col-md-12">
                <label>Footer Information Description<span style="color:#FF0000;">*</span></label>
                <textarea class="form-control" name="information_description" value="<?php echo getWebOptionValue('information_description');?>" rows="2" id="information_description" placeholder="information description." required><?php echo getWebOptionValue('information_description');?></textarea>
              </div>
              <div class="form-group col-md-12">
                <label>Footer Stay in Touch! Description<span style="color:#FF0000;">*</span></label>
                <textarea class="form-control" name="stay_in_touch_description" value="<?php echo getWebOptionValue('stay_in_touch_description');?>" rows="2" id="stay_in_touch_description" placeholder="stay in description description." required><?php echo getWebOptionValue('stay_in_touch_description');?></textarea>
              </div>  
				<div class="form-group col-md-12">
                <label>Bottom Scrolling Text<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="scrolling_text" value="<?php echo getWebOptionValue('scrolling_text');?>" name="scrolling_text" placeholder="scrolling text" required>
              </div>  
              <div class="form-group col-md-3">
                <label>Front-End Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="frontlogo" name="front_logo" placeholder="Front-End Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('front_logo');?>"  style="height: 182px;width: 250px;"/> 
              </div>
              <div class="form-group col-md-3">
                <label>Footer Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="footerlogo" name="footer_logo" placeholder="Footer Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('footer_logo');?>" style="height: 182px;width: 250px;"/> 
              </div>
              <div class="form-group col-md-3">
                <label>Back-End Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="backlogo" name="backlogo" placeholder="Back-End Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('backlogo');?>" style="height: 182px;width: 250px;"/> 
              </div>

              

  
               
                <div class="form-group col-md-3">
                  <label>Pop Image status<span style="color:#FF0000;">*</span></label>
                  <?php $popup_image_status =  getWebOptionValue('popup_image_status'); ?>
                  <input type="radio" name="popup_image_status" value="1" <?php echo ($popup_image_status == "1" ? "checked" : ''); ?> > ON
                  <input type="radio" name="popup_image_status" value="0"  <?php echo ($popup_image_status == "0" ? "checked" : ''); ?>> OFF
                  
                </div>
                

              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary" name="configure_common_settings"><i class="fa fa-refresh"></i>&nbsp; Configure Now</button>
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

