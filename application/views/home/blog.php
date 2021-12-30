  <section class="main_blog" style="background-image: url(<?php echo base_url()?>frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <div class="text-center res_mar"><h1 style="color: white;" class="blog-title blogpage">Blogs </h1> </div>
</section>
<!-- Blog Section -->
         <!-- Main -->
        <section class=" pb-20" style="padding-top: 0; background-color: #E7E4D3;">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-sm-6 col-md-6 col-lg- col-xl- blog-section-pagination mb-sm-30"> -->
                        <div class="row blog-section-pagination mb-sm-30">
                        
                         <div class="row">
                              
                            <div class="col-md-9">
                               <?php 
                                $categorydata = $this->CommonModel->getWhereData('addblog',array(1=>1));
                                krsort($categorydata);
                                if(isset($categorydata) && !empty($categorydata))
                                {
                                foreach ($categorydata as $categoryarray)
                                    {                               
                                ?> 
                              <div class="itemContainer featured-post">
                                <div class="col-md-2 col-sm-4 col-xs-4" style="margin-right: -50px ;">
                                  <div class="blog-date">
                                    <div class="left_date">
                                      <span class="mnth"><?php echo getmonthfromdate($categoryarray['create_date']);?></span>
                                      <!-- <br> -->
                                      <span class="dts"><?php echo getdatefromdate($categoryarray['create_date']);?></span>
                                    </div>
                                    
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-8 col-xs-8 pl-pr-0">
                                   <div class="hg_full_image">
                                      <img src="<?php echo base_url().'uploads/blogimage/'.$categoryarray['image']; ?>" class="img-responsive" title="" />
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="itemFeatContent">
                                        <div class="itemFeatContent-inner">
                                           <div class="itemHeader">
                                              <h3 class="itemTitle titles">
                                                 <a href="<?php echo base_url().'blogdetail/'.$categoryarray["title_slug"]?>"><?php echo $categoryarray["title"]?>
                                                    
                                                 </a>
                                              </h3>
                                              <ul class="clearfix name_blog" style="font-size: 123%;">
                                                 <li class="itemCategory" style="font-size: 123%;">
                                                 <span class="fa fa-user"></span>
                                                 <span><?php echo $categoryarray["auther_name"]?></span>
                                                  </li>
                                              </ul>

                                              <div class="post_details" style="font-size: 143%;">
                                                 <i class="fa fa-calendar" ></i>
                                                 <span class="catItemDateCreated">
                                                 <?php echo $categoryarray["create_date"]?></span>
                                                            <span class="catItemAuthor"> </span>
                                                 <span class="catItemAuthor"></span>
                                              </div>
                                           
                                           </div>
                                           <div class="clearfix">
                                           </div>
                                           <p><?php echo shortdescription($categoryarray["editor1"],350);?>....<a href="<?php echo base_url().'blogdetail/'.$categoryarray["title_slug"]?>">Read More</a></p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <?php
                               }
                              }
                              ?>
                              
                            </div>
                             
                            <div class="col-md-3 pr-0">
                              <div class="blog-right" style="border-radius:10px;">
                                <div class="blog_search">
                                  <h4>Search</h4>
                                  
                                  <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                      <input type="text" class="form-control serch_input" name="name" placeholder="Search..." id="name">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                  </form>
                                </div>
                                <h4 class="asdd" style="padding-bottom: 0px; padding-top: 15px; font-weight: bold;">Recent Post</h4>
                                
                                <div class="all-post all_posts">
                                <?php 
                                $categorydata = $this->CommonModel->getWhereData('addblog',array(1=>1));
                                krsort($categorydata);
                                if(isset($categorydata) && !empty($categorydata))
                                {
                                foreach ($categorydata as $categoryarray)
                                    {                               
                                ?>
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
                                <?php
                                }
                                }
                                ?>
                                </div>
                                

                                </div>
                              </div>

                            </div>
                          </div>
                          
                       
               <!-- <6> -->
               
                </div>
            </div>
        </section>
       
        <!-- Main -->


        <!-- Blog Section -->