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
                <div class="form-group col-md-3"> <label">Category Name<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="name" value="<?php echo getWebOptionValue('name');?>" name="name" placeholder = "Enter Category Name..." required autofocus/>
                </div>
                
                
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary" name="configure_common_settings"><i class="fa fa-plus"></i>&nbsp; Add</button>
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
