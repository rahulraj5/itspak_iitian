<!-- enquery btn -->
<div class="l_c_h">
        <div class="c_h">
            <div class="left_c">
                <div class="left right_c left_icons">
                       <a href="#" class="mini" style="font-size:16px;"><i class='fa fa-chevron-up'></i></a>
                </div>
                <div class="left center_icons"><!--center_icons-->
                    <i class=" fa fa-phone"></i>
                      Request Call Back
                </div><!--end center_icons-->           
            </div>
            <div class="right right_c" style="width:35px;">
                <a href="#" class="logout" title="End chat" name="" style="display:none;"><img src="chat/logout.png" alt="Chat Logout"></a>           
            </div>
            <div class="clear"></div>
        </div>
        <div class="chat_container" style="display: none;">
        <p class="no_provider">
             
            Enquire Now
                </p>
        
        <div class="chat_message" style="display: none;">
        <input type="hidden" class="my_user" value="">
                </div>
            <div class="chat_text_area" style="display:none;">
                <textarea name="messag_send" class="messag_send" id="messag_send" placeholder="Enter Your Message and press CTRL"></textarea>
            </div>
            <div class="chat_entry">
                   <form role="form" action="" method="post">
                      <div class="box-body">
                        <div class="form-group col-md-12"> <!-- <label">Category Name<span style="color:#FF0000;">*</span>
                          </label> -->
                          <input type="text" class="form-control" id="ename" value="" name="name" placeholder="Enter Name..." required/>
                        </div>
                        <div class="form-group col-md-12"> <!-- <label">Category Name<span style="color:#FF0000;">*</span>
                          </label> -->
                          <input type="email" class="form-control" id="eemail" value="" name="email" placeholder="Enter Email-id..." required/>
                        </div>
                        <div class="form-group col-md-12"> <!-- <label">Category Name<span style="color:#FF0000;">*</span>
                          </label> -->
                          <input type="tel" minlength="10" maxlength="10" class="form-control" id="enumber" value="" name="number" placeholder="Enter Mobile Number..." required/>
                        </div>
                        <div class="form-group col-md-12">
                                  <!-- <div class="custom-select">   -->
                                  <select id="estream" name="stream" style="margin: 0px;" class="form-control" >
                                        <option value="">Select Stream</option>
                                        <option value="Bio">Bio</option>
                                        <option value="Science">Science</option>
                                  </select>
                                  <!-- </div> -->
                                </div>
                                
                        </div>
                        <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="ecity" value="" name="city" placeholder="Enter Your City..." >
                        </div>  

                        <div class="form-group col-md-12"> <!-- <label">Category Name<span style="color:#FF0000;">*</span>
                          </label> -->
                          <textarea class="form-control" rows="2" id="emessage" value="" name="message" placeholder="Message..."  autofocus=""></textarea>
                        </div>
                        <div class="form-group col-md-12 text-center" style="padding-left: 22px; margin-bottom: 6px;">
                             <button type="button"  name="enquirysubmit" value="enquirysubmit" class="btn btn-primary enquirysubmit" style="padding: 10px 23px;">Enquire Now!</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
<!-- enquery btn -->
<div class="footer from-bottom">
        <section class="container generic-section">
            <div class="row-fluid"> 
                <div class="col-sm-3 item left">
                    <a href="<?php echo base_url();?>">
                    <img src="<?php echo base_url().'uploads/'.getWebOptionValue('footer_logo'); ?>" class="f_logo" style="width: 200px;"></a>
                    <h3>Information</h3>
                    <p><?php echo getWebOptionValue('information_description');?></p>
                    
                </div>      

                <div class="col-sm-3 item left">
                    <h3>Contact Us</h3>
                    <p><i class="icon-mail-alt"></i> <strong>Email:</strong> <?php echo getWebOptionValue('email');?>
                    <br />
                    <i class="icon-phone"></i> <strong>Tel:</strong> <?php echo getWebOptionValue('mobile_no');?>
                    <br />
                    <i class="icon-location"></i> <strong>Address:</strong> <?php echo getWebOptionValue('address');?></p>
                </div>      
                    
                <div class="col-sm-3 item right">
                    <h3>Super Quick Links</h3>
                    <p><a href="<?php echo base_url();?>">Home</a>
                    <br />
                    <a href="<?php echo base_url(); ?>about">About Us</a>
                    <br />
                    <a href="<?php echo base_url();?>career">Career</a>
                    <br />
                    <a href="<?php echo base_url();?>blog">Blog</a>
                    <br />
                    <a href="<?php echo base_url();?>contact">Contact Us</a>
                     <br /> 
                    <a href="<?php echo base_url(); ?>registration" >Registration</a>
                    </p>   
                </div>  
              
                <div class="col-sm-3 item right">
                    <h3>Stay in Touch!</h3>
                    <p>Follow US in our social networks!<br />
                    <!--<?php echo getWebOptionValue('stay_in_touch_description');?></p>-->
                    <ul class="social-foot">
                        
                        <li class="tooltip_hover" data-original-title="Youtube"><a href="<?php echo getWebOptionValue('yt_url');?>" title="Youtube" class="youtube">Youtube</a></li>
                        <li class="tooltip_hover" data-original-title=""><a href="<?php echo getWebOptionValue('facebook_url');?>" title="Facebook" class="facebook">Facebook</a></li>
                        <li class="tooltip_hover" data-original-title=""><a href="<?php echo getWebOptionValue('instagram_url');?>" title="Instagram" class="instagram">Instagram</a></li>
                        
                    </ul>
                </div>          
            </div>
        </section>
    </div>
    <!-- End Footer -->  
    <!--Copyright-->
    <div class="copy">
        <a href="#top" class="anchor totop">to top</a>
        <section class="container np">
            <p style="text-align: center;color:white;"> © All Rights Reserved. Designed by <a href="https://www.itsparktechnology.com/"> <img src="<?php echo base_url(); ?>frontassets/img/itswhite.png" style="height: 25px;"> </a>  </p>
        </section>
    </div>
    <!--End Copyright-->

<div id="loader"></div>
    
    <!-- ======================= JQuery libs =============================== -->  
        <!-- fancyBox -->
        <script type="text/javascript" src="<?php echo base_url(); ?>frontassets/js/fancy/jquery.fancybox.pack.js"></script>

        <!-- fit videos -->
        <script src="<?php echo base_url(); ?>frontassets/js/jquery.fitvids.min.js" type="text/javascript"></script>

         <script src="<?php echo base_url(); ?>frontassets/js/isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- team -->
        <script src="<?php echo base_url(); ?>frontassets/js/owl-carousel/owl.carousel.js"></script>
        <!-- <script type="text/javascript" src="<?php echo base_url();?>frontassets/js/commonjsrahul.js"></script> -->
        <!-- preload  -->
        <!-- <script src="js/pace.min.js"></script> -->

        <!-- easing -->
        <script src="<?php echo base_url(); ?>frontassets/js/easing.js" type="text/javascript"></script>

        <!-- Custom js-->
        <script src="<?php echo base_url(); ?>frontassets/js/jquery-func.js"></script>
        <!-- Isotope js -->
        <script src="https://code.jquery.com/jquery.js"></script>
        
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <!-- ======================= End JQuery libs =========================== --> 
    <script type="text/javascript">
        
        
        
        
        $(document).ready(function(){
            setwidthheight();
            $(".close-marq").click(function(){
                $(".news-line").hide();
                $(this).hide();
            });
            $("#toggle").click(function() {
            var elem = $("#toggle").text();
            if (elem == "Read More") {
              //Stuff to do when btn is in the read more state
              $("#toggle").text("Read Less");
              $("#text").slideDown();
            } else {
              //Stuff to do when btn is in the read less state
              $("#toggle").text("Read More");
              $("#text").slideUp();
            }
          });
          
            
        });
        // function setwidthheight(){
        //     $.ajax({
        //     type: 'POST',
        //     url:"<?php echo base_url()?>home/setscreensize",
        //     data:{ width: windowWidth, height: windowHeight},
        //     dataType: 'json',
        //     success : function(data){
        //             alert('hi');
        //         },
    
        //     });
        // }
        $(window).on('load',function(){
          $('#myModal').modal('show');
        });

    //by rahul
        $(document).on("click", ".enquirysubmit", function() {
        //   console.log("inside";   <-- here it is
            // alert("inside");
            var ename = $("#ename").val();
            var eemail = $("#eemail").val();
            var emessage = $("#emessage").val();
            var ecity = $("#ecity").val();
            var enumber = $("#enumber").val();
            var estream = $("#estream").val();
           
            $.ajax({
                type: 'POST',
                url:"<?php echo base_url()?>home/enquirysubmit",
                data:{name:ename,email:eemail,message:emessage,city:ecity,number:enumber,stream:estream,},
                dataType: 'html',
                success : function(data)
                {

                    // alert(data);
                    window.location.href = "<?php echo base_url()?>thankyou";
                },
                error: function(data) 
                {
                },
            });

         });
         function notify(style,msg,title){
            $.notify({
                title: title,
                text: msg
            }, {
                style: 'metro',
                className: style,
                autoHide: true,
                clickToHide: true
            });
        }

        
    </script>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="361725731335811"
      theme_color="#20cef5"
      logged_in_greeting="Welcome!! To Dr.IITian, How May I Help You ?"
      logged_out_greeting="Welcome!! To Dr.IITian, How May I Help You ?">
      </div>


 