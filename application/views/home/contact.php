    <style type="text/css">
	    	/*Contact*/
			.icon{
				font-size: 23px!important;
				float: left;
			    padding-right: 17px;
			    color: #4bc2c3;
			}
			.contact-text{
				font-size: 14px;
			}

			.con{
				height: 150px!important;
			}
			.main1{
				font-size: 14px;
				/*border-bottom: unset; */
			}
			.button1{
				text-align: center;
			}
			.bg01{
				background-image: url(img/bgimg.png);
				height: 200px;

			}
			.b1{
				box-shadow: 0 0 5px rgba(0,0,0,.15);
		    /*padding: 12px;*/
		    min-height:400px;
		    background-color: #fff;
			}
			@media screen and (max-width: 992px){
				.b1{
					margin-bottom: 15px;
				}
			}
			.location{
				border-bottom:  1px solid #e0dada;
				/*padding-top: 15px;*/
			}
			.center1{
				background-color: #4bc2c3;
				color: white;
				text-align: center;
				padding: 10px 0px;
				margin-bottom: 0;
			}
			.cntr1{
				padding: 20px 10px 20px 10px;
			}
			.location_main{
				padding: 10px 0px;
			}
			/*.location span .main1 span{
				padding-left: 10px;
			}*/
			.contact_form
			{
			    background-color: #fff;
			    padding: 15px;
			}
	</style>
    <script>
      // alert('success');
      // document.location.href='<?php echo base_url()?>contact';
      // window.location.href = "<?php echo base_url()?>thankyou";
    </script>


    <hr class="hidden" />
    <!-- Why iitiian -->
    <!-- contact page -->
    <!-- bg-img -->
    <section class="main_blog" style="background-image: url(<?php echo base_url()?>frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <div class="text-center res_mar"><h1 style="color: white; margin-top:32px; font-size:20px;" class="blog-title blogpage">Contact Us </h1> </div>
</section>
    <!--<section style="padding-top: 0!important; background-image: url(<?php echo base_url(); ?>frontassets/img/bgimg.png); height: 100px; width: 100%; background-repeat: no-repeat; background-position: center center; background-size: cover;">-->
    <!--    <h1 style="margin-left:15px; margin_bottom:0;" > <i class="fa fa-phone"></i> Contact Us </h1>-->
        
        <!--<div class="container-fluid" style="padding: 0!important;">-->
        <!--    <div class="col-lg-12" style="padding: 0!important;">-->
        <!--        <img src="img/bgimg.png" height="250" width="100%">-->
        <!--    </div>-->
        <!--</div>-->
  <!--      <div class="col-lg-12" style="padding-top: 25px;">-->
		<!--	<h1><strong style="font-weight: 600;">Contact us</strong></h1>-->
		<!--	<h5><a href="<?php echo base_url();?>">HOME</a>- CONTACT </h5>-->
		<!--</div>-->
    <!--</section>-->
    <!-- <bg-img> -->
    <!-- <address detail sec start> -->
    <section style="padding-top: 0!important; background-color: #E7E4D3;">
        <div class="container pt-3 pb-5">
            <!--<div class="row" style="padding-bottom: 15px;font-size:16px">-->
                <!--<h1 style="text-align:center"><strong style="font-weight: 600;">Contact us</strong></h1>-->
                 <!--<p class="contact-text text-center"> <?php echo getWebOptionValue('contact_description');?></p>-->
            <!--</div>-->
            <div class="row" style="padding-top:20px;">
                <div class="col-lg-7">
                    <div class="address-left">
                        
                        <div class="row pt-3">
                            <div class="col-lg-6">
                                <!--<div class="location">-->
                                <!--    <div class="location_main">-->
                                        <!-- <div class="icon_v"> -->
                                <!--            <i class="fa fa-map-marker icon"></i>-->
                                        <!-- </div> -->
                                <!--        <h4><strong>Centre 1</strong></h4>-->
                                <!--    </div>-->
                                <!--    <p class="contact-text"><?php echo getWebOptionValue('address1');?>-->
                                <!--    </p>-->
                                <!--</div>-->
                                <div class="b1">
									<h4 class="center1"><strong><?php echo getWebOptionValue('header1');?></strong></h4>
									<!--<img src="<?php echo base_url()?>img/c1.jpg" class="img-responsive">-->
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11030.148727491642!2d75.8352350565465!3d22.69586408356002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fc363dd78435%3A0x1d53b51a5aeb125f!2sDr.%20IITian!5e0!3m2!1sen!2sin!4v1578123592261!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
									<div class="cntr1">
										<div class="location">
											<div class="location_main">
												<i class="fa fa-map-marker icon"></i>
												<span class="contact-text"><?php echo getWebOptionValue('address1');?><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>
										<div class="location_main main1 " style="border-bottom: 1px solid #e0dada;">
											<i class="fa fa-phone icon"></i>
											<span class="contact-text"> <?php echo getWebOptionValue('mobile_no1');?></span>
										</div>
										
										<div class="location" style="border-bottom: unset;">
											<div class="location_main main1">
												<i class="fa fa-envelope icon"></i>
												<span><?php echo getWebOptionValue('email');?></span>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-6">
                                <!--<div class="location">-->
                                <!--    <div class="location_main">-->
                                        <!-- <div class="icon_v"> -->
                                <!--            <i class="fa fa-map-marker icon"></i>-->
                                        <!-- </div> -->
                                <!--        <h4><strong>Centre 2</strong></h4>-->
                                <!--    </div>-->
                                <!--    <p class="contact-text"><?php echo getWebOptionValue('address2');?>-->
                                <!--    </p>-->
                                <!--</div>-->
                                <div class="b1">
									<h4 class="center1"><strong><?php echo getWebOptionValue('header2');?></strong></h4>
									<!--<img src="<?php echo base_url()?>img/c1.jpg" class="img-responsive">-->
									<!--<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d11028.63231051676!2d75.89005477792749!3d22.714691040313838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNear%20Geeta%20Bhavan%20Temple%2C%20Above%20Bhargav%20Book%20Depot%2C%20Indore-452001%20(M.P.)!5e0!3m2!1sen!2sin!4v1578123764839!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
									<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.2437806464404!2d75.88567616249173!3d22.7191786750146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe73be109a3aa47e!2sNew%20Bhargav%20Book%20%26%20stationery!5e0!3m2!1sen!2sin!4v1578124722699!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.5400157294375!2d75.8802533146063!3d22.70816133370461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fdfa1398c745%3A0x1ea2383f9b256b6a!2sDr.IITian%20IITJEE%20Coaching%20Classes%20%7C%20NTSE%20%2F%20NEET%20Classes!5e0!3m2!1sen!2sin!4v1581656616903!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
									<div class="cntr1">
										<div class="location">
											<div class="location_main">
												<i class="fa fa-map-marker icon"></i>
												<span class="contact-text"><?php echo getWebOptionValue('address2');?><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>
										<div class="location_main main1 " style="border-bottom: 1px solid #e0dada;">
											<i class="fa fa-phone icon"></i>
											<span class="contact-text"> <?php echo getWebOptionValue('mobile_no2');?></span>
										</div>
										
										<div class="location" style="border-bottom: unset;">
											<div class="location_main main1">
												<i class="fa fa-envelope icon"></i>
												<span><?php echo getWebOptionValue('email');?></span>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php //print_r($blog_data);?>
				<form action="" id="contactinfoform" method="post" enctype="multipart/form-data">
                    <div class="col-lg-5">
                        <div class="contact_form">
                            <h3 style="padding-bottom:10px;">Contact With Us</h3>
                            
                            <?php
                            if(isset($error))
                            {
                            echo '<div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
                                <h4> '.$SUCCESS.' <?php echo $error; ?></h4>
                              </div>';
                            
                            }            
                            ?>
                                <div class="row row11">
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="<?php if(isset($name)){echo $name;} ?>" <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?>  placeholder="Enter Full Name.." id="name" >
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="<?php if(isset($email)){echo $email;} ?>" <?php if(isset($code) && $code == 2){ echo "autofocus"; }  ?> placeholder="Email.." id="email" >
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="number" placeholder="Phone.." id="number"  value="<?php if(isset($number)){echo $number;} ?>" <?php if(isset($code) && $code == 3){ echo "autofocus"; }  ?>>
                                      </div>
                                  </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="comment">Comment:</label>
                                          <textarea class="form-control con" name="message" placeholder="MESSAGE." rows="4" id="message"></textarea>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" id="contactus" name="contactus" class=" btn-default" style="background-color: #3ca8a9!important; padding:11px 25px;  color: white!important; text-decoration: none;">Send Message</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>		
            </div>
        </div>
    </section>  
    <!-- <address detail sec end> -->
        <!-- <map start>-->
    <section style="padding-bottom:0!important; padding-top: 0!important; ">
        <div class="container-fluid" style="padding-left: 0!important; padding-right: 0!important;">
            <div class="col-lg-12" style="padding-left: 0!important; padding-right: 0!important;">
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d58888.97200970731!2d75.82254969260195!3d22.70738998894632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d22.7180544!2d75.8833152!4m5!1s0x3962fc363dd78435%3A0x1d53b51a5aeb125f!2sdr%20iitian%20indore!3m2!1d22.6976555!2d75.8327015!5e0!3m2!1sen!2sin!4v1576838474394!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
            </div>
        </div>
    </section>  
    <!-- <map start>-->
    
    