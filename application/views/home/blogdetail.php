<!--     <section class="main_blog" style="background-image: url(frontassets/img/bg-twitter1.jpg); background-position: 77% 36%; background-size: cover;">
         <div class="text-center res_mar"><h1 style="color: white; font-size: 30px;" class="blog-title head_blog blogpage">Blog </h1> </div>
    </section> -->
    <!-- <blog-detail pages start> -->
        <style type="text/css">
            .main_sec1 h2{
                padding-bottom: 30px;
                font-weight: 600;
            }
            .auter_one{
                font-size: 16px;
            }
            .auter-date{
                /*padding-top: 20px;*/
                padding: 20px 20px 0px 20px;
            }
            .auter_one a{
                color: #4bc2c3;
                font-size: 14px;    
                font-weight: 600;
                padding-right: 15px;
            }
            .blog-date{
                display: inline-block;
                color: #666;
                padding-left: 5px;
                font-size: 14px;
            }
            .main_sec1 p{
                padding: 0px 20px;
                line-height: 26px;
                letter-spacing: 1px;
                font-family: sans-serif;
                text-align: justify;
            }
            .main_sec1 .paragraph1{
                padding-top: 20px;
            }
            .img-se{
                background-color: #4bc2c31f;
                padding: 10px;
            }
            .img-se img{
                border-radius: 10px;
            }
            .blog-sec1 img{
                height: 40px;
                float: left;
                padding-right: 10px;
            }
            .blog-sec1{
                margin-top: 25px;
                border-bottom: 1px solid #cac6c6;
            }
            .blog-sec1 a{
                font-size: 12.5px;
                font-weight: bold;
                line-height: 15px;
            }
            .blog-sec1 span{
                padding-top: 10px;
            }
            .blog-sec1 p{
                display: block;
                padding-top: 0px;
                /*line-height: 20px;*/
                letter-spacing: .5px;
                padding-bottom: 20px;
                font-family: sans-serif;
            }
        </style>
        
        <section class="main_blog" style="background-image: url(<?php echo base_url()?>frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <div class="text-center res_mar"><h1 style="color: white;" class="blog-title blogpage">Blogs </h1> </div>
</section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 padd-media">
                        <div class="main_sec1" style="background-color: #fff;">
                            
                            <h2><?php echo $blog_data["title"]?></h2>
                            <div class="img-se">
                                <img src="<?php echo base_url().'uploads/blogimage/'.$blog_data['image']?>" class="img-responsive" style="width: 100%">
                            </div>
                            <div class="auter-date">
                                <div class="auter_one">
                                    <img src="<?php echo base_url(); ?>frontassets/img/demo1.jpg" style="height: 40px; ">
                                    By <span><?php echo $blog_data["auther_name"]?></span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <div class="blog-date"><?php echo $blog_data["create_date"]?></div>
                                </div>
                            </div>
                            <p class="paragraph1"> <?php echo $blog_data["editor1"]?> </p>
                            <script async src="https://widget.websitevoice.com/OVKeRQY99_iXwo1kXosstA"></script>
                            <script>
                              window.wvData=window.wvData||{};function wvtag(a,b){wvData[a]=b;}
                              wvtag('id', 'OVKeRQY99_iXwo1kXosstA');
                            </script>
                        </div>
                    </div>
                    <div class="col-md-3 md3paa pr-0">
                              <div class="blog-right">
                                <div class="blog_search">
                                  <h4>Search</h4>
                                  
                                  <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                      <input type="text" class="form-control serch_input" name="name" placeholder="Search..." id="name">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                  </form>

                                </div>

                                <h4 class="asdd" style="padding-bottom: 0px; padding-top: 15px; font-weight: bold;">Recent Blog</h4>
                                <?php 
                                $categorydata = $this->CommonModel->getWhereData('addblog',array(1=>1));
                                krsort($categorydata);
                                if(isset($categorydata) && !empty($categorydata))
                                {
                                foreach ($categorydata as $categoryarray)
                                    {                               
                                ?>

                                <div class="all-post all_posts" style="padding: 0;">
                                  <div class="col-md-12" style="padding-left: 0;">
                                    <div class="seprate-sec">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                          <!-- <div class="img_blogs"> -->
                                            <img src="<?php echo base_url().'uploads/blogimage/'.$categoryarray['image']; ?>" class="img-responsive">
                                          <!-- </div> -->
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7 csd pl-0">
                                          <!-- <div > -->
                                            <a href="<?php echo base_url().'blogdetail/'.$categoryarray["title_slug"]?>"><?php echo $categoryarray["title"]?></a>
                                            <br>
                                            <a href="<?php echo base_url().'blogdetail/'.$categoryarray["title_slug"]?>">read more...
                                            </a>
                                            </span>
                                        <!-- </div> -->
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                                <?php
                                }
                                }
                                ?>
                              </div>

                            </div>
                  <!--   <div class="col-sm-3" style="border-left:25px solid #rgb(231, 228, 211); background-color: #fff";>
                        <h4 style="padding-bottom: 0px; padding-top: 15px; font-weight: bold;">All Blog</h4>
                        <div class="all-post" style="height: 670px; overflow-y: scroll;">
                            <?php 
                            $categorydata = $this->CommonModel->getWhereData('addblog',array(1=>1));
                            if(isset($categorydata) && !empty($categorydata))
                            {
                            foreach ($categorydata as $categoryarray)
                                {                               
                            ?>
                            <div class="blog-sec1">
                                <img src="<?php echo base_url().'uploads/blogimage/'.$categoryarray['image']; ?>" >
                                <span><a href="<?php echo base_url().'blogdetail/'.$categoryarray["id"]?>"><?php echo $categoryarray["title"]?></a></span>
                                <p><?php echo shortdescription($categoryarray["description"],100)?>...</p>
                            </div>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

    <!-- <blog-detail pages end> -->