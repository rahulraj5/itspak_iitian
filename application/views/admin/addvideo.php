  <div class="panel panel-headline">
    <section class="content">
      <div class="row">
        <div class="panel-heading">
          <?php if(isset($tutorial_data['id']) && !empty($tutorial_data['id'])){ ?>
            <h3 class="panel-title"> Edit Video Link </h3>
          <?php } ?>
          <?php if(!isset($tutorial_data['id'])){ ?>
            <h3 class="panel-title"> Add Video Link </h3>
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
           <?php //print_r($tutorial_data);?>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-12"> 
                  <label">Title<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="hidden" name="id" value="<?php echo (isset($tutorial_data['id']) && !empty($tutorial_data['id']) ? $tutorial_data['id'] : '' )?>">
                  <input type="text" class="form-control" value="<?php echo (isset(
                  $tutorial_data['title']) ?  $tutorial_data['title'] : '');?>" name="title"  required autofocus/>
                </div>

                <!-- <div class="form-group col-md-12"> <label">Auther Name<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="title" value="<?php echo (isset(
                  $tutorial_data['auther_name']) ?  $tutorial_data['auther_name'] : '');?>" name="auther_name"  required autofocus/>
                </div> -->
                <div class="form-group col-md-12"> 
                  <label">Link<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="hidden" name="id" value="<?php echo (isset($tutorial_data['id']) && !empty($tutorial_data['id']) ? $tutorial_data['id'] : '' )?>">
                  <input type="text" class="form-control" value="<?php echo (isset(
                  $tutorial_data['link']) ?  $tutorial_data['link'] : '');?>" name="link"  required autofocus/>
                </div>
               <!-- <?php if(isset($tutorial_data['video']) && !empty($tutorial_data['video']))
               { 
               ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url().'uploads/video/'.$tutorial_data['video']?>" class="img-responsive">
                      </div>
                <?php 
                } 
                ?> -->
                <!-- <div class="form-group col-md-12"> 
                  <label">Video<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="file" class="form-control" name="tutorial_video" multiple/>
                </div> -->
                
                
                <!-- <div class="form-group col-md-2"> <label">Create Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="create_date" value="<?php echo getWebOptionValue('create_date');?>" name="create_date"  required autofocus/>
                </div> -->
                <!-- <div class="form-group col-md-2"> <label">End Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="end_date" value="<?php echo getWebOptionValue('end_date');?>" name="end_date"  required autofocus/> -->
                
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary" name="configure_common_settings"> add</button>
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
