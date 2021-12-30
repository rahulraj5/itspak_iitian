<!-- Modal Popup -->
<?php $scwidth = $this->session->userdata('screen_width'); //die; ?>
<?php
        //  if(isset($_COOKIE['sw'])) { echo "Screen width: ".$_COOKIE['sw']."<br/>";}
         //if(isset($_COOKIE['sh'])) { echo "Screen height: ".$_COOKIE['sh']."<br/>";}
         //die;
    ?>
        <div id="mymodal" class="modal fade">
            <div class="modal-dialog modal-lg modal_dia">
                <div class="modal-content">
                    <div class="modal_close" style=" z-index: 9999;    border: 2px solid #b9b7b7; position: absolute; background-color: rgba(0, 0, 0, 0.52); padding: 7px 10px; border-radius: 50%;">
                        <div class="modal-header" style="background: transparent;">
                            <button type="button" class="close " style="z-index: 9999; color: #fff; opacity: 1;text-decoration: none;" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                    </div>
                 <!--   <div class="modal-header" style="background: transparent;">-->
                    <!--    <button type="button" class="close modal_close" style="z-index: 9999; position: absolute;" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                    <!--</div>-->
                    <!-- <div class="modal-header modal_header">
                        
                    </div> -->
                    <div class="modal-body" style="padding: 0px;">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-7" style="padding: 2px;">
                                  <img src="<?php echo base_url(); ?>frontassets/img/feature/modal.jpg" class="img-responsive modalimg" alt="IIT JEE, NEET, KVPY coaching, Enquire Now">
                            </div>
          
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    
    <!-- intro -->
    <div class="container-fluid slider">
      
      
    </div>
        <!-- End intro -->
    <!-- <hr class="hidden" /> -->
    <!-- <hr class="hidden" /> -->
    <!-- About us -->
    <div class="clearfix"></div>
    <section id="aboutus" class="bg-color res_head">
        <div class="container" >
            <div class="row">
                <div class="col-md-6  para_media">

                    <h1 class="about heding_m">Welcome to<span style="color:#3ca8a9;"> Dr. IITian's</span></h1>

                    <p class="heading4" style="padding-bottom: 0;">
                        The institute’s name “Dr.IITian” itself stands for Doctors & IITians and that what we thrive to make our students. As a team, faculty members of Dr.IITian have pledged to revolutionize the education framework which has existed for years, by simplifying the process of learning.While you trust us during a most crucial and decisive years of your life, it’s our duty that we will leave no stone unturned in order to get you admitted in your dream college.
                    </p>
                    <a class="about_more"href="<?php echo base_url(); ?>about" >
                        Read more
                    </a>
                    
                </div>
                <div class="col-md-6 from-right img_res">
                    <img src="<?php echo base_url(); ?>frontassets/img/img1.jpg" class="img-responsive faculty">
                </div>
            </div>
        </div>
    </section>
    <!-- About us -->   
    <hr class="hidden" />
    <!-- Why iitiian -->
    <div class="clearfix"></div>
    <section id="whyiit" class="bg-color" style=" margin-top: 5px;">
        <div class="container" >
            <div class="row">
                <div class="col-md-6 from-left"> <h1 class="about about1  heding_m iitians_center">Why <span style="color:#3ca8a9;"> Dr. IITian's ?</span></h1>
                    <p class="heading4" style="padding-bottom: 0;"> 
                    <ul class="disc_li">
                        <li>Standardized education delivery starts from basics from and fundamentals.</li>
                        <li>Special attention to incompetent students.</li>
                        <li>We take care of entrance exams and board exams.</li>
                        <li>Subject experts are dedicated to serve students.</li>
                        <li>24*7 Doubt clearance facility.</li>
                        <li>Small batch size.</li>
                        <li>Class notes contain enriched solved examples and incorporates easy to use Tips & Tricks.</li>
                        <!--<li>A Strong Foundation is must to reach great height of Success.</li>-->
                    </ul>
                    </p>
                    <!--<b class="heading4"><span style="font-size: 19px;"> A Strong Foundation is must to reach great height of Success.</span></b>-->
                </div>
                <div class="col-md-6 from-right img_res">
                    <a href="youtube.com"><img src="<?php echo base_url(); ?>frontassets/img/facult3.jpg" class="img-responsive img-rounded faculty" id="you" alt="best coaching classes in indore"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="twitter-secta img_resps" class="bg-color">
        <img src="https://www.driitian.com/frontassets/img/hindi.jpg" class="img-responsive" alt="Twitter">
    </section>
    <!--<>-->
    <!-- Gallery -->
    <section id="video" class="bg-color facility" style="margin-top: 5px; padding-top: 10;">
        <div class="container-fluid containers1 text-center">
            <!-- <div style="padding: 0px 15px; border:1px solid red;"> -->
                <h2 class="text-center from-bottom about_heading videoss "><span style="color:#3ca8a9;"> Dr. IITian's</span> Videos</h2>
                <div class="row" style="padding: 10px 15px; border:2px solid #3ca8a9;">
                    <?php 
                    $categorydata = $this->CommonModel->getAllRecordsByLimitId('video',array(1=>1),4);
                    if(isset($categorydata) && !empty($categorydata))
                    {
                    foreach ($categorydata as $categoryarray)
                        {                               
                    ?>
                    <div class="col-sm-3">
                        <iframe width="100%" height="300" src="<?php echo $categoryarray["link"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <?php    
                    }

                    
                    ?>
                    
                    
                    
                    <?php }else{ ?>
                            <div class="col-sm-12 text-center">
                                <div class="view_more1">
                                    <h1>Comming Soon</h1>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <div class="col-sm-12 text-center">
                        <div class="view_more1">
                            <a href="<?php echo base_url(); ?>video">
                                <button type="button" class="view">View More</button>
                            </a>
                        </div>
                    </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- end gallery -->  
    <hr class="hidden" />
    <!-- twitter-sect -->
    <section id="twitter-secta img_resps" class="bg-color">
        <img src="<?php echo base_url(); ?>frontassets/img/bg-twitter.jpg"  class="img-responsive" alt="Twitter">
        <!--<div class="container text-center" style="visibility:hidden;">-->
        <!--        <div class="item clearfix">-->
        <!--            <i class="ico-twitter"></i>-->
        <!--            <p>Amazing opportunities <a href="#">@company</a>  Community Manager, HR Coord, -->
        <!--            Product, IT Manager and lots more <a href="#">@seekjobs</a> <a href="#">#tweetmyjob</a>...</p>-->
        <!--        </div> -->
        <!--    </div>-->
    </section>
    <!-- end twitter-sect --> 
    <hr class="hidden" />
    <!-- cool-things -->
	<section id="course" class="bg-color cool-things" style="padding-top: 0; padding-bottom: 0; margin-bottom: 5px;">
		<div class="container">
			<h2 class="text-center from-bottom about_heading heding_m">Our courses</h2>
			<div class="row">
				<?php 
				$categorydata = $this->CommonModel->getWhereData('courses',array(1=>1));
				if(isset($categorydata) && !empty($categorydata))
				{
					foreach ($categorydata as $categoryarray)
					{                               
				?> 
				<div class="col-sm-6 from-left">
					<div class="item left-icon ">
						<div class="icon img-circle">
							<i class="icon-newspaper"></i>
						</div>
						<div class="cont">
							<!-- <h3><?php echo $categoryarray["title"]?></h3> -->
                            <a style="text-decoration: none;" href="<?php echo base_url().'courses/'.$categoryarray["url_slug"]?>"><h3 style="color: #272727;"><?php echo $categoryarray["title"]?></h3></a>
							<a style="text-decoration: none;" href="<?php echo base_url().'courses/'.$categoryarray["url_slug"]?>"><p style="color: #34495e;"><?php echo shortdescription($categoryarray["description"])?></p></a>
						</div>
					</div> 
				</div>  
				<?php    
					}
				}
				?>
			</div>
		</div>
	</section>
    <!-- testimonial -->    
      <section id="testimonial" class="bg-texti bg-color">
        <div class="container text-center">
            <h2 class="from-bottom heding_m before about about_heading">Testimonials</h2>
            <div style="border:2px solid #3ca8a9; padding: 10px 10px 0px 10px;">
            <div class="container-carousel" >
                <div id="owl-services" class="owl-carousel owl-theme testimonial  from-bottom">
                    <!-- <1> -->
                    <?php 
                    $categorydata = $this->CommonModel->getWhereData('testimonial',array(1=>1));
                    if(isset($categorydata) && !empty($categorydata))
                    {
                    foreach ($categorydata as $categoryarray)
                        {                               
                    ?>    
                    <div class="item">
                        <a  style="text-decoration:none;">
                            <!-- <?php echo base_url();?>home/testimonial_detail -->
                        <div class="thumb" style="padding: 0px 3px;">
                            <figure>
                                <img data-type="mText" src="<?php echo base_url().'uploads/testimonialimage/'.$categoryarray['image']; ?>" class="img-responsive img-circle" >
                            </figure>
                        </div>
                        <p>
                            <?php echo shortdescription($categoryarray["description"])?>
                        </p>
                        <div class="testimonial-main">
                            <div class="smail_img">
                            <img src="<?php echo base_url().'uploads/testimonialimage/'.$categoryarray['small_image']; ?>" class="img-rounded" alt="demo">
                                    <!--src="<?php echo base_url().'uploads/testimonialimage/'.$categoryarray['small_image']; ?>"-->
                            </div> 
                            <span>
                                <b> <?php echo $categoryarray["auther_name"]?></b>
                                <span class="courc"><?php echo $categoryarray["title"]?></span>
                            </span>
                            
                        </div>
                        </a>
                    </div>
                    <?php    
                    }

                    }
                    ?>
                    
                </div>
                
            </div>
            </div>
            <!-- .container-carousel -->
        </div><!-- .container -->
      </section> 
    <!-- testimonial end --> 
    <!-- end cool-things -->  
    <hr class="hidden" />
    <!-- Newsletter -->
    <section id="newsletter" class="bg-color from-bottom">
        <div class="container text-center">
                
                
                <form action="" method="post" accept-charset="utf-8">
                <div class="row">
                  <div class="col-md-12" style="text-align: left;">
                    <span id="emsg"></span>
                  </div>
                  <div class="col-sm-4">                        
                    
                     <div class="form-group">
                        <label class="hidden">Disabled input</label>
                        <div class="left-inner-addon">
                            <i class="icon-user"></i>
                            <input name="name" id="ename" type="text" placeholder="Enter your Name here..." class="form-control input-lg" required/>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <label class="hidden">Disabled select menu</label>
                        <div class="left-inner-addon">
                            <i class="icon-mail"></i>
                            <input name="email" id="eemail" type="email" placeholder="Enter your email..." class="form-control input-lg" required/>
                            
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <button class="btn btn-warning btn-lg emailsubscriber" type="button" name="emailsubscriber" value="emailsubscriber" style="background-color: #1e7273; border-color: #1e7273;">Subscribe to Newsletter</button>
                  </div>
                </div>
                </form>
            </div>
    </section>
    <!-- end Newsletter -->
    
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

$(document).on("click", ".emailsubscriber", function() {
    //   console.log("inside";   <-- here it is
    // alert("inside");
    var ename = $("#ename").val();
    var eemail = $("#eemail").val();
    // alert(ename);
    if(ename && eemail){
   
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>home/emailsubscriber",
            data:{name:ename,email:eemail},
            dataType: 'json',

            success : function(data)
            {
              if(data.status==1){
                // notify('success',data.msg,'Success');
                $(".emailsubscriber").notify(data.msg,'success');
                //$("#emsg").html(data.msg);
                window.location.href = "<?php echo base_url()?>thankyou";    
              }
              if(data.status==0){
                 //$("#emsg").html(data.msg);
                 // notify('error',data.msg,'Success');
                 $(".emailsubscriber").notify(data.msg,'error');
              } //   console.log("inside";
                // alert(data);
                
            },
            error: function(data) 
            {
            },
        });
    }else{
        $(".emailsubscriber").notify("Email and name are required ",'error');
    }

 });
</script>    

