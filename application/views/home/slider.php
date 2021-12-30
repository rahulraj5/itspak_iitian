<?php $scwidth = $this->session->userdata('screen_width'); //die; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
      <?php 
            
          $categorydata = $this->CommonModel->getWhereData('slider_image',array(1=>1));
          if(isset($categorydata) && !empty($categorydata))
          {
          foreach ($categorydata as $k=>$categoryarray)
          { 
              
        ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $k; ?>" class="<?php echo ($k == 0 ? 'active' : '')?>"></li>

        <?php    
        }
        }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner main_sliders">

      <!-- <div class="item active">
        <img src="<?php echo base_url(); ?>frontassets/img/new1.jpg" alt="Los Angeles" style="width:100%; height: 450px;">
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>frontassets/img/new2.jpg" alt="Chicago" style="width:100%; height: 450px;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url(); ?>frontassets/img/new1.jpg" alt="New york" style="width:100%; height: 450px;">
      </div> -->
        <?php 
          //$categorydata = $this->CommonModel->getWhereData('slider_image',array(1=>1));
          
          
          if(isset($categorydata) && !empty($categorydata))
          {
          foreach ($categorydata as $k2=>$categoryarray2)
          {                               
        ?>

        <div class="item <?php echo ($k2 == 0 ? 'active' : '')?>">
           <?php if($scwidth >= 600){ ?> 
                <img src="<?php echo base_url(); ?>uploads/sliderimage/<?php echo $categoryarray2['image'];?>" alt="<?php echo (isset($scwidth) ? $scwidth : '');?>" style="width:100%">
            <?php } ?>
            <?php if($scwidth < 600){ ?>
                <img src="<?php echo base_url(); ?>uploads/sliderimage/<?php echo $categoryarray2['small_image'];?>" alt="<?php echo (isset($scwidth) ? $scwidth : '');?>" style="width:100%">
            <?php } ?>
        </div>

        <?php    
        }
        }
        ?>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>