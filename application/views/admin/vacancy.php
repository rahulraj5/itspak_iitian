<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="container-fluid">
    <!-- <h4>  Vacancy </h4> -->
    <!-- <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Common Settings</li>
    </ol> -->
  </section>
  <!-- Main content -->
  
  <!-- /.content -->
  <div class="panel panel-headline">
    <div>
      
              <div>
                <div class="panel-heading">
                 <a href="<?php echo base_url();?>admin/addvacancy" class="btn btn-primary"><i class="fa fa-plus-circle fa-md"></i>&nbsp; Add Vacancy</a>
                 <!-- <a href="<?php echo base_url() ?>admin/add_category/" class="btn pull-right btn-primary">Add Category</a> -->
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-hover" id="user_list_tab">
                    <thead>
                      <tr>
                        <th>S.no.</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Department</th>
                        <th>Experience</th>
                        <th>Salary</th>
                        <th>Location</th>
                        <th>Create Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($postvacancy)){ ?>
                      <?php $sn = 1; foreach($postvacancy as $ul){ ?>
                      <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $ul["designation"]; ?></td>
                        <td><?php echo $ul["description"]; ?></td>
                        <td><?php echo $ul["department"]; ?></td>
                        <td><?php echo $ul["experience"]; ?></td>
                        <td><?php echo $ul["salary"]; ?></td>
                        <td><?php echo $ul["location"]; ?></td>
                        <td><?php echo setDateFormat($ul["create_date"]); ?></td>
                        <td><?php echo $ul["end_date"]; ?></td>
                        
                          <!-- 1 -->
                          <td>
                            <!-- <a href="<?php echo base_url() ?>admin/imagelist/<?php echo $ul['id']; ?>" title="Edit User"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
                            <a href="javascript:void(0)" href-status="3" href-role="2" href-id="<?php echo $ul['id']?>" href-act="Delete" class="delete" title="Delete User"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </td>
                        
                      </tr>
                      <?php $sn++; } }else{ ?>
                      <tr>
                        <td colspan="10">No User available.</td>
                      </tr> 
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  </div>          
</div>
<script type="text/javascript">
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete Image ?");
    var id = $(this).attr("href-id");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/delete",
        data:{tablename:'careervacancy',id:id,whrcol:'id',action:"Delete"},
        dataType:'json',
        success: function(response) {
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
