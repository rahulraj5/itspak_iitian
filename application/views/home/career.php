        <!-- Main -->
<section class="main_blog" style="background-image: url(frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <div class="text-center res_mar"><h1 style="color: white; font-size: 30px;" class="blog-title head_blog blogpage">Career </h1> </div>
</section>
<section class="container-fluid career1" style="background-color: #E7E4D3;">
    <div class="container career2" >
        <div class="row">
            <div class="col-md-7" style="padding-left: 0;" style="background-color: #E7E4D3;">
                <?php 
                    $categorydata = $this->CommonModel->getWhereData('careervacancy',array(1=>1));
                    if(isset($categorydata) && !empty($categorydata))
                    {
                    foreach ($categorydata as $categoryarray)
                        {                               
                ?>
                <div class="box1">
                    <h3 class="heading"><?php echo $categoryarray["designation"]?></h3>
                    <p class="text-right"><span class="fa fa-calendar"></span><?php echo $categoryarray["end_date"]?></p>
                    <span style="font-size: 12px;">
                    <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php echo $categoryarray["location"]?></span><br>
                    <div class="col-md-4 exp" style="padding-left: 0;">
                    <span class="heading2">Experience - </span><?php echo $categoryarray["experience"]?> Years
                    </div>
                    <div class="col-md-8 exp"><span class="heading2" style="text-align: center;">Salary - </span> 
                    <i class="fas fa-rupee-sign" aria-hidden="true"></i><?php echo $categoryarray["salary"]?> (per month)
                    </div>

                    <div class="col-md-12" style="padding: 0;">
                    <p class="lorem1"><?php echo $categoryarray["description"]?></p>
                    
                    <a href="<?php echo base_url();?>form/<?php echo $categoryarray['id']?>">
                    <button class="button">Apply Now</button></a>
                    </div>
                </div>
                <?php
                }
                }
                ?>
                
                
            </div>
            <div class="col-md-5">
                <div class="img">
                    <img src="frontassets/img/sideimg.png" class="img-responsive sideimg">
                </div>
            </div>
        </div>
    </div>
</section>