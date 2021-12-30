<style type="text/css">
    .user_image{
        width: 50px;
    }
</style>
<div class="container-fluid">
    <div class="panel panel-headline">
        <div class="panel-heading">
            <!-- <h3 class="panel-title">Category List <a href="<?php echo base_url() ?>admin/add_category/" class="btn pull-right btn-primary">Add Category</a></h3> -->
            
            <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
        </div>
    
       
        <div class="panel-body table-responsive">
            <table class="table table-hover" id="user_list_tab">
                <thead>
                    <tr>
                        <th>S.no.</th>
                        <th>Name</th>
                        <th>Email-id</th>
                        <th>Mobile No.</th>
                        <th>Message</th>
                        <th>Stream </th>
                        <th>City</th>
                        <th>Class</th>
                        <th>MEdium</th>
                        <th>How to Know</th>
                        <th>Action</th>


                        <!-- <th>background Image</th> -->

                    </tr>
                </thead>
                <tbody>
                    <?php   if(!empty($postname)){ ?>
                    <?php $sn = 1; foreach($postname as $ul){ ?>
                    <tr>
                        <td><?php echo $sn; ?></td>                        
                        <td><?php echo $ul["name"]; ?></td>
                        <td><?php echo $ul["email"]; ?></td>
                        <td><?php echo $ul["number"]; ?></td>
                        <td><?php echo $ul["message"]; ?></td>
                        <td><?php echo $ul["stream"]; ?></td>
                        <td><?php echo $ul["city"]; ?></td>
                        <td><?php echo $ul["clas"]; ?></td>
                        <td><?php echo $ul["medium"]; ?></td>
                        <td><?php echo $ul["know"]; ?></td>

                        <td>
                            <!-- <a href="<?php echo base_url() ?>admin/imagelist/<?php echo $ul['id']; ?>" title="Edit User"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
                            <a href="javascript:void(0)" href-status="3" href-role="2" href-id="<?php echo $ul['id']?>" href-act="Delete" class="delete" title="Delete User"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php $sn++; } }else{ ?>
                    <tr>
                        <td colspan="10">No Solutions List available.</td>
                    </tr>   
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<script type="text/javascript">

    $('.delete').click(function(){
        var val = confirm("Sure you want to Delete ?");
        var id = $(this).attr("href-id");
        //alert(id);
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>admin/delete",
            data:{id:id,tablename:'contactlist',whrcol:'id',action:"Delete"},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    //formSuccess();
                    // submitMSG(true,'Success');
                    setTimeout(function(){ window.location.reload(); },1000);
                    $.notify({
                        icon: 'ti-gift',
                        message: data.msg
                    },{type: 'success',timer: 1000});
                } else {
                    $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});                    
                }
            },
            error: function(data) {
                $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});
            },

        });
    });
</script>
<script type="text/javascript">
    $('.switch_bt').click(function(){
        var ticket_id = $(this).attr("href-id");
        var href_action = $(this).attr("href-action");
        var status = $(this).attr("href-status");
        //alert(ticket_id);
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>admin/changeStatus_text",
            data:{id:ticket_id,action:href_action,status:status,tablename:'sliders',whrcol:'id',whrstatuscol:'text_status'},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    //formSuccess();
                    // submitMSG(true,'Success');
                    setTimeout(function(){ window.location.reload(); },1000);
                    $.notify({
                        icon: 'ti-gift',
                        message: data.msg
                    },{type: 'success',timer: 1000});
                } else {
                    $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});                    
                }
            },
            error: function(data) {
                $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});
            },

        });
    });
</script>
<script type="text/javascript">
    $('.switch_bt_slider').click(function(){
        var ticket_id = $(this).attr("href-id");
        var href_action = $(this).attr("href-action");
        var status = $(this).attr("href-status");
        //alert(ticket_id);
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>admin/changeStatus_text",
            data:{id:ticket_id,action:href_action,status:status,tablename:'sliders',whrcol:'id',whrstatuscol:'slider_status'},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    //formSuccess();
                    // submitMSG(true,'Success');
                    setTimeout(function(){ window.location.reload(); },1000);
                    $.notify({
                        icon: 'ti-gift',
                        message: data.msg
                    },{type: 'success',timer: 1000});
                } else {
                    $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});                    
                }
            },
            error: function(data) {
                $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});
            },

        });
    });
</script>