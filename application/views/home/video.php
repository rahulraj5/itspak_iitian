<section class="main_blog" style="background-image: url(<?php echo base_url()?>frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <!-- <div class="text-center" style="margin: -25px; "><h1 class="blog-title blogpage">Videos</h1> </div> -->
  <div class="text-center res_mar"><h1 style="color: white; margin-top: 25px; font-size: 28px;" class="blog-title blogpage">Videos</h1> </div>
</section>   
    <section id="feature" class="bg-color facility" style="background-color: #E7E4D3; margin-top: 5px; padding-top: 0;">
        <div class="container-fluid containers1 text-center" style="padding: 26px 32px;">
            <!--<h2 class="heding_m">Videos</h2>-->
            <div class="row" >
                <?php 
                $categorydata = $this->CommonModel->getWhereData('video',array(1=>1));
                if(isset($categorydata) && !empty($categorydata))
                {
                foreach ($categorydata as $categoryarray)
                    {                               
                ?>
                <div class="col-sm-3" style="padding-bottom: 26px;">
                    <iframe width="100%" height="300" src="<?php echo $categoryarray["link"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php    
                }

                }
                ?>
                
                
                <!-- <div class="col-sm-12 text-center">
                    <div class="view_more1">
                        <a href="video">
                            <button type="button" class="view">View More</button>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>