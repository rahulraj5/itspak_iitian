  <div class="panel panel-headline">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning"> <br/>
            <!-- form start -->
            <?php
  			if(isset($SUCCESS) && !empty($SUCCESS))
  			{
  			 echo '<div class="alert alert-success alert-dismissible">
  					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
  					<h4><i class="fa fa-spinner fa-spin"></i> '.$SUCCESS.'</h4>
  				  </div>';
  			 echo '<meta http-equiv="refresh" content="2;url='.base_url("admin/vacancy").'">';
  			}			 
  		   ?>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-3"> <label">Designation<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="designation" value="<?php echo getWebOptionValue('designation');?>" name="designation"  required autofocus/>
                </div>
                <div class="form-group col-md-9"> <label">Description<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="posted_on" value="<?php echo getWebOptionValue('description');?>" name="description"  required autofocus/>
                </div>
                <div class="form-group col-md-2"> <label">Department<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="department" value="<?php echo getWebOptionValue('department');?>" name="department"  required autofocus/>
                </div>
                <div class="form-group col-md-2"> <label">Experience<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="experience" value="<?php echo getWebOptionValue('experience');?>" name="experience"  required autofocus/>
                </div>
                <div class="form-group col-md-2"> <label">Salary<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="salary" value="<?php echo getWebOptionValue('salary');?>" name="salary"  required autofocus/>
                </div>
                <div class="form-group col-md-2"> <label">Location<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="location" value="<?php echo getWebOptionValue('location');?>" name="location"  required autofocus/>
                </div>
                <!-- <div class="form-group col-md-2"> <label">Create Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="create_date" value="<?php echo getWebOptionValue('create_date');?>" name="create_date"  required autofocus/>
                </div> -->
                <div class="form-group col-md-2"> <label">End Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="end_date" value="<?php echo getWebOptionValue('end_date');?>" name="end_date"  required autofocus/>
                </div>
                 &nbsp;
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary pull-left" name="configure_common_settings"> Add</button>
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
