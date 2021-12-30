<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url(); ?>frontassets/fevicon1.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontassets/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>frontassets/js.js"></script>
  <style type="text/css">


  	
  		@media only screen and (max-width: 768px) {
		  /* For mobile phones: */
		  /*.imgUp {
			    width: 50%;
	    		margin: 10px 24%;
			}*/
			.logosize{
				width: 50%;
			    margin: 0px 24%;
			}
			.di_address_wrapper{
				margin: 0px 5%;
			}	
		}
		@media only screen and (min-width: 768px){
			.logosize{
		      width: 250px;
		    }
		}
  	    
  </style>
</head>
<body>
	<div class="container" style="border: 5px solid #4ac3c4;background:#eaf6f4">
		<form class="form-horizontal" id="basicinfoform" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row" style="border-bottom: 2px solid">
					<div class="col-sm-4">
						<div class="di_logo_img_wrapper logosize">
							<img src="<?php echo base_url(); ?>frontassets/logo11.png" width="100%;">
						</div>
					</div>
					<div class="col-sm-3">
					</div>	
					<div class="col-sm-5">
						<div class="di_address_wrapper">
							<ul style="padding-top: 19px">
								<li><label>Geeta Bhavan</label>
									<input type="radio" name="address" id="f_address" value="Geeta Bhawan" required/> |
									<label>Gumasta Nagar</label>
									<input type="radio" name="address" id="f_address" value="Gumasta Nagar" required/>
								</li>
								<li>9009477477 , 9009760760</li>
								<li><p>info@driitian.com | www.driitian.com</p></li>
							</ul>
						</div>
					</div>



				</div>
				<div class="di_heading_wrapper">
					<h3 style="text-align: center">ADMISSION FORM</h3>
				</div>
			</div>
			<div class="container">
				<div class="row">
				    <!-- <div class="col-sm-2 imgUp">
						
    						<div class="imagePreview"></div>
    						<label class="btn btn-primary" style="width:100%">
    						Upload Photo<input type="file" class="uploadFile img" value="Upload Photo" name="slider_image" id="f_image" style="width: 0px;height: 0px;overflow: hidden;" required/>
    						</label>
    					
							

					</div> -->
                    <div class="col-sm-3 imgUp">
                        <div class="imagePreview">
                            
                            
                        </div>
                        <div>
                            <input type="file" class="uploadFile img" value="Upload Photo" name="slider_image" required/>Upload Photo    
                            </div>
                    </div>

					<!-- <div class="col-sm-2 text-center">
						<div class="kv-avatar">
							<div class="file-loading">
								<input id="avatar-1" name="avatar-1" type="file" required>
							</div>
						</div>
						<div class="kv-avatar-hint">
							<small>Select file < 1500 KB</small>
						</div>
					</div> -->

					<div class="col-sm-9">
						 <?php  //print_r($this->CommonModel->getmaxid());?>
						<!-- <label>Form No.</label>
						<input type="text" class="form-control empty1" placeholder="Enter Form No." name="form_no" value=""><br> -->
						<label>Name of Student</label>
						<input type="text" class="form-control empty1" name="name" id="f_name" placeholder="Enter Name of Student" required/><br>
						<label>Contact No.</label>
						<input type="text" class="form-control empty1" id="f_number" minlength="10" maxlength="10" placeholder="Enter Contact No." name="number" required pattern="[0-9.]{10}"><br>
					</div>
					<!-- <div class="col-sm-5">
						<label>Date</label>
						 <input type="date" class="form-control empty1" name="date" required/><br>
						
					</div> -->
					
					
					<div class="col-sm-12">
					<label>Current Address:</label>
						<textarea placeholder="Enter Address Here.." class="form-control empty1" rows="2" class="form-control" id="f_current_address" name="current_address" required/></textarea>
					<label>Permanent Address:</label>
						<textarea class="form-control empty1" placeholder="Enter Address Here.." rows="2" class="form-control" id="f_perma_address" name="perma_address" required/></textarea>
						</div>
					<div class="col-sm-4" form-group>
						<label>City</label>
						<input class="form-control empty1" type="text" placeholder="Enter City Name Here.." id="f_city" name="city" required/>
					</div>	
					<div class="col-sm-4" form-group>
						<label>District</label>
						<input class="form-control empty1" type="text" placeholder="Enter District Here.." id="f_district" name="district" required/>
					</div>
					<div class="col-sm-4" form-group>
						<label>State</label>
						<input class="form-control empty1" type="text" placeholder="Enter State Name Here.." id="f_state" name="state" required/>
					</div>		
				</div>

				
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<label>School Name</label>
						<textarea class="form-control empty1" rows="1" class="form-control" id="f_school_name" name="school_name" required/></textarea>
					</div>
					<div class="col-sm-4">
						<label>Board</label>	
						<textarea class="form-control empty1" rows="1" class="form-control" id="f_board" name="board" required/></textarea>
					</div>
					<div class="col-md-12" style="margin: 10px;padding-left:0px">
						<label>Category: &nbsp;&nbsp;&nbsp;&nbsp; </label>

						<label>Gen</label>
						<input type="radio" id="f_category" name="category" value="Gen" required/> 
						<label>SC</label>
						<input type="radio" id="f_category" name="category" value="SC" required/> 
						<label>ST</label>
						<input type="radio" id="f_category" name="category" value="ST" required/> 
						<label>OBC</label>
						<input type="radio" id="f_category" name="category" value="OBC" required/>
						<label>PH</label>
						<input type="radio" id="f_category" name="category" value="PH" required/>
					</div>
					<div class="col-md-12" style="margin: 10px;padding-left:0px">
						<label>Medium:  &nbsp;&nbsp;&nbsp;&nbsp; </label>
						<label>English</label>
						<input type="radio" id="f_medium" name="medium" value="English" required/>
						<label>Hindi</label>
						<input type="radio" id="f_medium" name="medium" value="Hindi" required/>
					</div>
					<div class="col-sm-6">
						<label>Father's Name</label>
						<!--<textarea rows="1" class="form-control"></textarea>-->
						<input class="form-control empty1" type="text" class="form-control" id="f_father_name" name="father_name" required/>
					</div>
					<div class="col-sm-6">
						<label>Father's Contact No.</label>
						<!--<textarea rows="1" class="form-control"></textarea>-->
						<input type="text" class="form-control empty1" id="f_father_number" name="father_number" minlength="10" maxlength="10" required pattern="[0-9.]{10}">
					</div>
					
				</div>
				
				<div class="courses">
				    <div class="col-sm-12" style="padding-left:0px; padding-top: 20px;">
					<label>Correspondence Courses:-</label>
				    </div>


				    <!-- <div class="col-sm-12" style="padding-left:0px; padding-bottom: 36px; padding-top: 8px;"> -->
				    	<div class="row">
				    <div class="col-sm-4">
						<label>For IIT</label>
						<input type="radio" name="course" id="f_course" value="IIT" checked="checked" required/> 
						<div id="IIT" class="desc">
							<select class="form-control empty1" id="f_opt1" name="opt1" >
		                        <option value="" disabled selected> Select Current Status </option>
		                        <option value="11th">11th</option>
		                        <option value="12th">12th</option>
		                        <option value="Other">One Year/Dropper</option>
	                      	</select>
	                    </div>

					</div>
					<div class="col-sm-4">
						<label>For NEET</label>
						<input type="radio" name="course" id="f_course" value="NEET" required/>
						<div id="NEET" class="desc" style="display: none">
							<select class="form-control empty1" id="f_opt1" name="opt1" >
		                        <option value="" disabled selected> Select Current Status </option>
		                        <option value="Other">11th</option>
		                        <option value="12th">12th</option>
		                        <option value="One Year/Dropper">One Year/Dropper</option>
		                     </select>
		                </div>
					</div>
					<div class="col-sm-4">
						<label>For FOUNDATION</label>
						<input type="radio" name="course" id="f_course" value="FOUNDATION" required/>
						<div id="FOUNDATION" class="desc" style="display: none">
							<select class="form-control empty1" id="f_opt1" name="opt1" >
		                        <option value="" disabled selected>  Select Current Status </option>
		                        <option value="8th">8th</option>
		                        <option value="9th">9th</option>
		                        <option value="10th">10th</option>10th
		                       
	                      	</select>
	                    </div>

					</div>
					</div>

				    
    				
				  
				</div>
				<div class="container">
					<div class="row">
						<div class="bottom-section">
							<p>1. Before filling this admission form student has attended free demo classes upto his/her satisfaction.</p>
							<p>2. Student must obey the rules and guidelines as amended by the institute management from time to time.</p>
							<p>3. Prescribed Refund Application Form can be obtained from our office. Refund request made verbally or through phone/email/fax shall not be entertained in any case.</p>
							<p>4. Refund application in the prescribed format will be accepted only before 60 days from the date mentioned in enquiry form. No refund will be made after 60 days from the date mentioned in enquiry form.</p>
							<p>5. Student will not miss any of his/her class due to his /her personal reason (marriage party, birthday party, tours& some like others) and for these no backup classes will be provided in any case.
							</p>
						</div>
						<div class="bottom-section-2">
							<h3>Declaration</h3>
							<p>1. After my selection in the competitive exams Dr.IITian can only use my interview and photo for the promotion / marketing purpose. I will not give any credit to any other institute besides Dr.IITian for my selection.</p>
							<p>2. I will maintain the regularity,  punctuality, sincerity as the student of classroom program of Dr.IITian.</p>
							<p>3. I will be devoted, dedicated, disciplined towards my career and will be very obedient toward my mentors.</p>
							<p>4. I declare that I have read the rules & regulations of the institute, I am satisfied with the demo classes provided to me and I register myself as bonafide student of the institute.</p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12" align="center">
					<button type="submit" id="contact" name="contact" class="btn btn-primary contact">Submit</button>
				</div>
			</div>
		</form>
	</div>

<!-- <div id="loader"></div>



<script src="https://code.jquery.com/jquery.js"></script>
 
		
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
var spinner = $('#loader');
$(function() {
  $('form').submit(function(e) {
    e.preventDefault();
    spinner.show();
    $.ajax({
		url: '<?php echo base_url();?>',
      data: $(this).serialize(),
      method: 'post',
      dataType: 'html'
    }).done(function(resp) {
      // spinner.hide();
     window.location.href = 'https://www.driitian.com/thankyou'; 
     
    });
  });
});
</script> -->


<link href="<?php echo base_url(); ?>frontassets/notify/metro/notify-metro.css" rel="stylesheet" /> 

<script src="<?php echo base_url(); ?>frontassets/notify/metro/notify.js"></script>
<script src="<?php echo base_url(); ?>frontassets/notify/metro/notify-metro.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
		    $("input[name$='course']").click(function() {
		        var test = $(this).val();

		        $("div.desc").hide();
		        $("#" + test).show();
		    });
		});



		



 // 	$(document).on("click", "#contact", function(){
	// 	var form = $("#basicinfoform")[0];
	// 	// alert(form);
 //  		var data = new FormData(form);
 //  		// alert(data);
  		

	// 		$.ajax({
	// 		enctype: 'multipart/form-data',
	// 		processData: false,  // Important!
	// 		contentType: false,
	// 		cache: false,
	// 		type: "POST",
	// 		dataType: "html",
	// 		url: "<?php echo base_url()?>",
	// 		data:data,
	// 		success : function(data)
	// 		{


	// 			if(data.status==1){
	// 		        notify('success',data.msg,'Success');
	// 		        $("#f_address").val('');
	// 		        $("#f_name").val('');
	// 		        $("#f_number").val('');
	// 		        $("#f_current_address").val('');
	// 		        $("#f_perma_address").val('');
	// 		        $("#f_city").val('');
	// 		        $("#f_district").val('');
	// 		        $("#f_state").val('');
	// 		        $("#f_category").val('');
	// 		        $("#f_school_name").val('');
	// 		        $("#f_board").val('');
	// 		        $("#f_medium").val('');
	// 		        $("#f_father_name").val('');
	// 		        $("#f_father_number").val('');
	// 		        $("#f_course").val('');
	// 		        $("#f_opt1").val('');
	// 		        $("#f_image").val(''); 
		                            
	// 	        }
	// 			if(data.status==0){
	// 			 //$("#emsg").html(data.msg);
	// 			  notify('error',data.msg,'Success');
	// 			 $("#contact").notify(data.msg,'error');
	// 			 $.notify({
	// 			    icon: 'ti-gift',
	// 			    message: data.msg
	// 			    },{type: 'success',timer: 1000});
	// 			}     
	// 		},
	//         error: function(data) 
	//         {
	//         },
	// 	});
	// });
	// function notify(style,msg,title){
 //            $.notify({
 //                title: title,
 //                text: msg
 //            }, {
 //                style: 'metro',
 //                className: style,
 //                autoHide: true,
 //                clickToHide: true
 //            });
 //        } 









	// $(document).on("click", "#contact", function() {
        
 //            alert("inside"); 
 //            var f_address = $("#f_address").val();
 //            var f_name = $("#f_name").val(); 
 //            var f_number = $("#f_number").val();
 //            var f_current_address = $("#f_current_address").val();
 //            var f_perma_address = $("#f_perma_address").val();
 //            var f_city = $("#f_city").val(); 
 //            var f_district = $("#f_district").val();
 //            var f_state = $("#f_state").val();
 //            var f_category = $("#f_category").val();
 //            var f_school_name = $("#f_school_name").val(); 
 //            var f_board = $("#f_board").val();
 //            var f_medium = $("#f_medium").val();
 //            var f_father_name = $("#f_father_name").val();
 //            var f_father_number = $("#f_father_number").val(); 
 //            var f_course = $("#f_course").val();
 //            var f_opt1 = $("#f_opt1").val();
 //            var f_image = $("#f_image").val();

 //            $("#contact").attr('disabled', true);
 //            $("#contact").addClass('buttonload'); 
 //            $("#contact").html('<i class="fa fa-spinner fa-spin"></i>Loading');
           
 //            if(f_address && f_name){

 //                $.ajax({
 //                    type: 'POST',
 //                    url:"<?php echo base_url()?>",
 //                    data:{address:f_address,name:f_name,number:f_number,current_address:f_current_address,perma_address:f_perma_address,city:f_city,district:f_district,state:f_state,category:f_category,school_name:f_school_name,board:f_board,medium:f_medium,father_name:f_father_name,father_number:f_father_number,course:f_course,opt1:f_opt1,image:f_image,},
 //                    dataType: 'json',
 //                    success : function(data)
 //                    {

 //                        $("#enquirysubmit").removeAttr('disabled');
 //                        $("#enquirysubmit").removeClass('buttonload');
 //                        $("#enquirysubmit").html('Submit');
 //                        alert(data);
 //                        // window.location.href = "<?php echo base_url()?>thankyou";
 //                        if(data.status==1){
 //                            notify('success',data.msg,'Success');
 //                            $("#f_address").val('');
	//                         $("#f_name").val('');
	//                         $("#f_number").val('');
	//                         $("#f_current_address").val('');
	//                         $("#f_perma_address").val('');
	//                         $("#f_city").val('');
	//                         $("#f_district").val('');
	//                         $("#f_state").val('');
	//                         $("#f_category").val('');
	//                         $("#f_school_name").val('');
	//                         $("#f_board").val('');
	//                         $("#f_medium").val('');
	//                         $("#f_father_name").val('');
	//                         $("#f_father_number").val('');
	//                         $("#f_course").val('');
	//                         $("#f_opt1").val('');
	//                         $("#f_image").val(''); 
                            
 //                        }
 //                      if(data.status==0){
 //                         //$("#emsg").html(data.msg);
 //                          notify('error',data.msg,'Success');
 //                         $(".contact").notify(data.msg,'error');
 //                         $.notify({
 //                            icon: 'ti-gift',
 //                            message: data.msg
 //                            },{type: 'success',timer: 1000});
 //                      }     
 //                    },
 //                    error: function(data) 
 //                    {
 //                        $("#contact").removeAttr('disabled');
 //                        $("#contact").removeClass('buttonload');
 //                        $("#contact").html('Submit');
 //                    },
 //                });
 //            }else{
 //                $(".contact").notify("All Details are required ",'error');
 //                $("#contact").removeAttr('disabled');
 //                $("#contact").removeClass('buttonload');
 //                $("#contact").html('Submit');
 //            } 

 //        });
	</script>




