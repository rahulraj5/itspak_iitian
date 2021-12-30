  <script type="text/javascript" src="/frontassets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/frontassets/ckfinder/ckfinder.js"></script>
  <div class="panel panel-headline">
    <section class="content">
      <div class="row">
        <div class="panel-heading">
          <?php if(isset($blog_data['id']) && !empty($blog_data['id'])){ ?>
            <h3 class="panel-title"> Edit Blog </h3>
          <?php } ?>
          <?php if(!isset($blog_data['id'])){ ?>
            <h3 class="panel-title"> Add Blog </h3>
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
           <?php //print_r($blog_data);?>
            <form role="form" action="new_post.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-12"> <label">Title<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="hidden" name="id" value="<?php echo (isset($blog_data['id']) && !empty($blog_data['id']) ? $blog_data['id'] : '' )?>">
                  <input type="text" class="form-control" value="<?php echo (isset(
                  $blog_data['title']) ?  $blog_data['title'] : '');?>" name="title"  required autofocus/>
                </div>

                <div class="form-group col-md-12"> <label">Auther Name<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="title" value="<?php echo (isset(
                  $blog_data['auther_name']) ?  $blog_data['auther_name'] : '');?>" name="auther_name"  required autofocus/>
                </div>
                <div class="form-group col-md-12"> <label">Description<span style="color:#FF0000;">*</span>
                  </label>
                  <textarea rows="10" cols="100" name="editor1" value="" ><?php echo (isset(
                  $blog_data['editor1']) ?  $blog_data['editor1'] : '');?></textarea>
                </div>
               <?php if(isset($blog_data['image']) && !empty($blog_data['image'])){ ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url().'uploads/blogimage/'.$blog_data['image']?>" class="img-responsive" required autofocus/>
                      </div>
                <?php } ?>
                <div class="form-group col-md-12"> <label">Image<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="file" class="form-control" name="blog_image" multiple/>
                </div>
                
                
                <div class="form-group col-md-12"> <label">For Meta Tag <span style="color:#FF0000;">*</span>
                  </label>
                 
                </div>
                <!-- <div class="form-group col-md-2"> <label">End Date<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="date" class="form-control" id="end_date" value="<?php echo getWebOptionValue('end_date');?>" name="end_date"  required autofocus/> -->
                <div class="form-group col-md-12">
                 <label">Title<span style="color:#FF0000;">*</span>
                  </label>
                  <input type="text" class="form-control" id="title" value="<?php echo (isset(
                  $blog_data['meta_title']) ?  $blog_data['meta_title'] : '');?>" name="meta_title"  required autofocus/>
                </div>

                <div class="form-group col-md-12"> <label">Description<span style="color:#FF0000;">*</span>
                  </label>
                  <!-- <input type="text" class="form-control" id="title" value="<?php echo (isset(
                  $blog_data['meta_description']) ?  $blog_data['meta_description'] : '');?>" name="meta_description"  required autofocus/> -->
                  <textarea rows="5" cols="110" name="meta_description" value="" ><?php echo (isset(
                  $blog_data['meta_description']) ?  $blog_data['meta_description'] : '');?></textarea>
                </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary" name="submit_post"> Add</button>
                </div>
              </div>
            </form>
             <script>
                     CKEDITOR.replace( 'editor1' );
            </script>

            <!-- <script>
              CKEDITOR.replace('editor1', {
                // Define the toolbar groups as it is a more accessible solution.
                toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                  },
                  {
                    "name": "links",
                    "groups": ["links"]
                  },
                  {
                    "name": "paragraph",
                    "groups": ["list", "blocks"]
                  },
                  {
                    "name": "document",
                    "groups": ["mode"]
                  },
                  {
                    "name": "insert",
                    "groups": ["insert"]
                  },
                  {
                    "name": "styles",
                    "groups": ["styles"]
                  },
                  {
                    "name": "about",
                    "groups": ["about"]
                  }
                ],
                // Remove the redundant buttons from toolbar groups defined above.
                removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
              });
            </script> -->
          </div>
          
          


          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
  </div>
 
