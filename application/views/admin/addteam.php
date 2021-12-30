  <div class="panel panel-headline">
    <section class="content">
      <div class="row">
        <div class="panel-heading">
          <?php if(isset($team_data['id']) && !empty($team_data['id'])){ ?>
            <h3 class="panel-title"> Edit Team </h3>
          <?php } ?>
          <?php if(!isset($team_data['id'])){ ?>
            <h3 class="panel-title"> Add Team </h3>
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
           <?php //print_r($team_data);?>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-12"> 
                  <label">name<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="hidden" name="id" value="<?php echo (isset($team_data['id']) && !empty($team_data['id']) ? $team_data['id'] : '' )?>">
                  <input type="text" class="form-control" value="<?php echo (isset(
                  $team_data['name']) ?  $team_data['name'] : '');?>" name="name"  required autofocus/>
                </div>

                <!-- <div class="form-group col-md-12"> <label">Auther Name<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="title" value="<?php echo (isset(
                  $team_data['auther_name']) ?  $team_data['auther_name'] : '');?>" name="auther_name"  required autofocus/>
                </div> -->
                <div class="form-group col-md-12"> 
                  <label">designation<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="hidden" name="id" value="<?php echo (isset($team_data['id']) && !empty($team_data['id']) ? $team_data['id'] : '' )?>">
                  <input type="text" class="form-control" value="<?php echo (isset(
                  $team_data['designation']) ?  $team_data['designation'] : '');?>" name="designation"  required autofocus/>
                </div>
               <?php if(isset($team_data['image']) && !empty($team_data['image'])){ 
                ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url().'uploads/teamimage/'.$team_data['image']?>" class="img-responsive">
                      </div>
                <?php } 
                ?>
                <div class="form-group col-md-12"> 
                  <label">Image<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="file" class="form-control" name="team_image" multiple/>
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
