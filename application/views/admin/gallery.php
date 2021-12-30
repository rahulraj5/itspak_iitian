<div class="dt-content">
	<div class="panel panel-headline">
		 
			<div class="dt-page__header">
			    <!-- <h3 class="dt-page__title"><i class="fa fa-plus-circle fa-md"></i>Add New Image</h3> -->
			</div>
			<!-- /page header -->

			<!-- Grid -->
			
				<div class="row">
					<div class="col-12">

					    <!-- Card -->
					    <div class="dt-card">

					        <!-- Card Header -->
					        <!-- <div class="dt-card__header"> -->
					        	<!-- Card Heading -->
					            <!-- <div class="dt-card__heading">
					                <h3 class="dt-card__title"><i class="fa fa-plus-circle"></i>Add New</h3>
					            </div> -->
					            <!-- /card heading -->

					        </div>
					        <!-- /card header -->

					        <!-- Card Body -->
					        <div class="dt-card__body">

					            <!-- Form -->
					            <form method="post" enctype="multipart/form-data" >
                                    <div class="col-md-6">
                                        <div class="col-md-12">
    					                   <div class="form-group">
                                            <label">Category<span style="color:#FF0000;">*</span></label>
                                            <select id="district" name="category" class="form-control" aria-hidden="true">
                                                    <option value="">Select Category</option>
                                                    <?php 
                                                    $categorydata = $this->CommonModel->getWhereData('category',array(1=>1));
                                                    if(isset($categorydata) && !empty($categorydata))
                                                    {
                                                    foreach ($categorydata as $categoryarray)
                                                        {                               
                                                    ?>
                                                    <option value="<?php echo $categoryarray["name"]?>"><?php echo $categoryarray["name"]?></option>
                                                    <?php    
                                                        }

                                                    }
                                                    ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
        					                <div class="form-row">
        					                        <input type="file" name="product_image[]" multiple/>
        					               </div>
                                        </div>
                                        &nbsp;
    					               <div class="col-md-12"> 
    					                   <button class="btn btn-primary pull-left" type="submit" name="gallery" value="gallery">Submit</button>
                                        </div>
                                    </div>
					                    <!-- <?php if(is_array($get_images)): ?>
									    <?php foreach($get_images as $image): ?>
							            <img src ="<?=base_url()?>includes/uploads/gallery/thumbs/<?=$image->thumbpath?>" alt="<?= $image->description?>"> <a href="deleteimage/delete/<?=$image->id?>">Delete</a>
							            <?php endforeach; ?>
							   			<?php endif; ?> -->
					            </form>

					            <!-- <img src="<?php echo base_url();?>uploads/gallery" /> -->
					            <!-- /form -->
					        </div>
					</div>
				</div>
			</div>	
		       
	</div>	
<script type="text/javascript">
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete Image ?");
    var id = $(this).attr("href-id");
    // alert(id);
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/delete",
        data:{tablename:'gallery',id:id,whrcol:'id',action:"Delete"},
        dataType:'json',
        success: function(response) {
        	// console.log(response)
          if (response.status == 1){
            // $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            // $.notify(response.msg, "error");
          }
        }
      });
    }
  });
</script>