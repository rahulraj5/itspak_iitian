<style type="text/css">
	.user_image{
		width: 50px;
	}
</style>
<div class="container-fluid">
	<div class="panel panel-headline">
		<div class="panel-heading">
			<h3 class="panel-title">Candidate List</h3>
			<!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
		</div>
		<div class="panel-body table-responsive">
			<table class="table table-hover" id="user_list_tab">
				<thead>
					<tr>
						<th>S.no.</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email-id</th>
						<th>Contact No.</th>
						<th>Experience</th>
						<th>Current CTC</th>
						<th>Current City</th>
						<th>Post Applied</th>
						<th>Reference</th>
						<th>Resume</th>
						<th>Comment</th>
						<th>Date</th>
						<th>Action</th>
						<!-- <th>Actions</th> -->
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($postjoblist)){ ?>
					<?php $sn = 1; foreach($postjoblist as $ul){ ?>
					<tr>
						<td><?php echo $sn; ?></td>
						<td><?php echo $ul["first_name"]; ?></td>
						<td><?php echo $ul["last_name"]; ?></td>
						<td><?php echo $ul["email"]; ?></td>
						<td><?php echo $ul["number"]; ?></td>
						<td><?php echo $ul["experience"]; ?></td>
						<td><?php echo $ul["ctc"]; ?></td>
						<td><?php echo $ul["city"]; ?></td>
						<td><?php echo $ul["applyfor"]; ?></td>
						<td><?php echo $ul["reference"]; ?></td>
						<td><a href="<?php echo (!empty($ul['resume'])?  base_url().'uploads/resume/'.$ul['resume']:DEFULT_USER_IMG); ?>" target = "_blank"><?php echo $ul["resume"]; ?></a></td>
						<td><?php echo $ul["coment"]; ?></td>
						<td><?php echo setDateFormat($ul["create_date"]); ?></td>
						<td>
						    <a href="<?php echo base_url() ?>admin/candidate_detail/<?php echo base64_encode($ul['id']); ?>" title="View User"><i class="fa fa-eye" aria-hidden="true"></i></a>
							&nbsp;
                            <a href="javascript:void(0)" class="btn_delete" href-id="<?php 
                            echo $ul['id']?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
						<!-- <td>
							1
						</td> -->
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
<script type="text/javascript">

    $('.btn_delete').click(function(){
    	var val = confirm("Sure you want to Delete ?");
        var id = $(this).attr("href-id");
        //alert(id);
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>admin/deleteRecord",
            data:{id:id,table:'applyforjob',colwhr:'id'},
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
