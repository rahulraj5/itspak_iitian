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
                padding-top: 20px;
                /*line-height: 20px;*/
                letter-spacing: .5px;
                padding-bottom: 20px;
                font-family: sans-serif;
            }
        </style>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="main_sec1">
                            
                            <h2><?php echo $blog_data["title"]?></h2>
                            <div class="img-se">
                                <img src="<?php echo base_url().'uploads/blogimage/'.$blog_data['image']?>" class="img-responsive">
                            </div>
                            <div class="auter-date">
                                <div class="auter_one">
                                    <img src="<?php echo base_url(); ?>frontassets/img/demo1.jpg" style="height: 40px;">
                                    By <a href=""><?php echo $blog_data["auther_name"]?></a>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <div class="blog-date"><?php echo $blog_data["create_date"]?></div>
                                </div>
                            </div>
                            <p class="paragraph1"> <?php echo $blog_data["description"]?> </p>
                            
                        </div>
                    </div>
                    <div class="col-sm-3" style="border:1px solid #ccc;">
                        <h4 style="padding-bottom: 15px; font-weight: bold;">All Blog</h4>
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
                                <p><?php echo shortdescription($categoryarray["description"])?></p>
                            </div>
                            <?php
                            }
                            }
                            ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- <blog-detail pages end> -->