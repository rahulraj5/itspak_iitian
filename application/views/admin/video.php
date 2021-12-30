

<style type="text/css">

  .user_image{

    width: 50px;

  }

</style>

<div class="container-fluid">

  <div class="panel panel-headline">

    <div class="panel-heading">

      <h3 class="panel-title"> Video Link List <a href="<?php echo base_url() ?>admin/addvideo/" class="btn pull-right btn-primary">Add Video Link</a></h3>

      <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->

    </div>

    <div class="panel-body table-responsive">

      <table class="table table-hover" id="user_list_tab">

        <thead>

          <tr>

            <th>S.no.</th>

            <th>title</th>

           <!--  <th>video</th> -->

            <th>link</th>

            <th>Create Date</th>

            <th>Actions</th>

          </tr>

        </thead>

        <tbody>

          <?php if(!empty($postvideolist)){ ?>

          <?php $sn = 1; foreach($postvideolist as $ul){ ?>

          <tr>

            <td><?php echo $sn; ?></td>

            <td><?php echo $ul["title"]; ?></td>

            <!-- <td><a href="<?php echo (!empty($ul['video'])?  base_url().'uploads/video/'.$ul['video']:DEFULT_USER_IMG); ?>" class="video-link"><img src="<?php echo (!empty($ul['video'])? base_url().'uploads/video/'.$ul['video']:DEFULT_USER_IMG); ?>" class="user_image"></a>

            </td> -->

            <td><?php echo $ul["link"]; ?></td>

            <td><?php echo $ul["create_date"]; ?></td>

            <!-- <td> -->

              <!-- <a href="<?php echo base_url() ?>admin/imagelist/<?php echo $ul['id']; ?>" title="Edit User"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->

              <!-- <a href="javascript:void(0)" href-status="3" href-role="2" href-id="<?php echo $ul['id']?>" href-act="Delete" class="btn_delete" title="Delete User"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

            </td> -->

            <td>

              

              &nbsp;

              <a href="<?php echo base_url() ?>admin/addvideo/<?php echo $ul['id']; ?>" title="Edit Video"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>

              </a> 

              &nbsp;

              <!-- <?php 

                    if($ul['status'] == 1){ ?>

                      <a href="javascript:void(0)" href-status="0" href-role="2"  href-id="<?php echo $ul['id']?>" href-act="Disable" class="user_status" title="Disable User"><i class="fa fa-ban" aria-hidden="true"></i></a>

                      &nbsp;

                    <?php }else{ ?>

                      <a href="javascript:void(0)" href-status="1" href-role="2"  href-id="<?php echo $ul['id']?>" href-act="Enable" class="user_status"  title="Enable User"><i class="fa fa-check-square" aria-hidden="true"></i></a>

                      &nbsp;

                    <?php } ?>   -->



              <a href="javascript:void(0)" href-status="3" href-role="2" href-id="<?php echo $ul['id']?>" href-act="deleteRecord" class="btn_delete" title="Delete Video link"><i class="fa fa-trash-o" aria-hidden="true"></i>

              </a>

            </td>

          </tr>

          <?php $sn++; } }else

          { 

          ?>

          <tr>

            <td colspan="10">No User available.</td>

          </tr> 

          <?php 

          } 

          ?>

        </tbody>

      </table>

    </div>

  </div>

</div>

<script type="text/javascript">

    $('.btn_delete').click(function()

    {
        var val = confirm("Sure you want to Delete ?");
        var id = $(this).attr("href-id");

        //alert(id);

        $.ajax

        (

        {

            type: 'POST',

            url:"<?php echo base_url()?>admin/deleteRecord",

            data:{id:id,table:'video',colwhr:'id'},

            dataType: 'json',

            success : function(data)

            {

                if (data.status == 1)

                {

                    //formSuccess();

                    // submitMSG(true,'Success');

                    setTimeout(function(){ window.location.reload(); },1000);

                    $.notify

                    (

                      {

                          icon: 'ti-gift',

                          message: data.msg

                      },

                      {type: 'success',timer: 1000}

                    );

                } 

                else 

                {

                    $.notify(

                    {

                      icon: 'ti-info-alt',

                      message: data.msg

                    },{type: 'danger',timer: 1000});                    

                }

            },

            error: function(data) 

            {

                $.notify

                (

                  {

                    icon: 'ti-info-alt',

                    message: data.msg

                  },{type: 'danger',timer: 1000}

                );

            },

        });

    });

</script>



