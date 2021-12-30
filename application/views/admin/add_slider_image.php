  <div class="panel panel-headline"> 
    <section class="content">
      <div class="row">
        <div class="panel-heading">
          <?php if(isset($slider_data['id']) && !empty($slider_data['id'])){ ?>
            <h3 class="panel-title"> Edit Slider </h3>
          <?php } ?>
          <?php if(!isset($slider_data['id'])){ ?>
            <h3 class="panel-title"> Add Slider </h3>
          <?php } ?>
      <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
    </div>
        <!-- left column -->
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-warning"> <br/>
            <!-- form start -->
            <?php
            if(isset($SUCCESS) && !empty($SUCCESS))
            {
             echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
                    <h4> '.$SUCCESS.'</h4>
                  </div>';
             //echo '<meta http-equiv="refresh" content="2;url='.base_url("admin/addblog").'">';
            }            
           ?>
           <?php //print_r($slider_data);?>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo (isset($slider_data['id']) && !empty($slider_data['id']) ? $slider_data['id'] : '' )?>">
              <div class="box-body">
                <?php if(isset($slider_data['image']) && !empty($slider_data['image'])){ ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url().'uploads/sliderimage/'.$slider_data['image']?>" class="img-responsive">
                      </div>
                <?php } ?>
                <div class="form-group col-md-12"> <label">Image<span >*</span>
                  </label>
                  <input type="file" class="form-control" name="slider_image" multiple/>
                </div>
                
                <?php if(isset($slider_data['small_image']) && !empty($slider_data['small_image'])){ ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url().'uploads/sliderimage/'.$slider_data['small_image']?>" class="img-responsive">
                      </div>
                <?php } ?>
                <div class="form-group col-md-12"> <label">For Mobile Image<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="file" class="form-control" name="small_image" multiple/>
                </div>
                
                
                <!-- <div class="form-group col-md-2"> <label">Create Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="create_date" value="<?php echo getWebOptionValue('create_date');?>" name="create_date"  required autofocus/>
                </div> -->
                <!-- <div class="form-group col-md-2"> <label">End Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="end_date" value="<?php echo getWebOptionValue('end_date');?>" name="end_date"  required autofocus/> -->
                
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary" name="configure_common_settings"> Add</button>
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
  </div>
