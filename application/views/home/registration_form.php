   
	    <!-- Registration form -->
	 	<div class="bg1">
	    <div class="container c-01" >
	    	<div class="row">
	    		<div class="col-md-6 box">
	    		    <div class="heading01 heading02" style="padding-Bottom: 0px; padding-Top: 0px;">
	    		        
	    		       <h1 class="h-1" ><i class="icon-phone"></i> <?php echo getWebOptionValue('mobile_no');?></h1> 
	    		        
	    		        
	    		     </div>   
	    			<div class="heading01 heading02" style="padding-Bottom: 0px; padding-Top: 0px;">

	    				<h1 class="h-1">Admission Announcement</h1>
	    				
	    			</div>
	    			<div class="heading01">

	    				<h3 style="font-family: Segoe Print regular;">(For Session 2020-21)</h3>
	    				
	    			</div>
	    			<div class="heading01">

	    				<h3 style="font-family: sans-serif; font-weight: bold; font-size: 18px;">FOR JEE (Adv.) | JEE (Main) | NEET-UG | NTSE | OLYMPIADS | PNCF | CLASS 6th to 12th & 12th Pass</h3>
	    				
	    			</div>

	    			
	    			
	    		</div>
	    		
	    		<div class="col-md-6 c-02">
	    			<div class="reg">
	    				<h1 class="h-1" style="padding-top:0px;">Registration Form</h1>
	    			</div>
	    		<form action="" method="post" style="font-size:135%;" enctype="multipart/form-data">
	    			<div class="reg-form" >
	    				<div class="col-md-6" style="padding-top:10px;">
	    					<label> Student Name<span>*</span></label>
   							 <input type="text" id="estudent_name" name="student_name" class="input1" required/>
	    					
	    				</div>
	    				<div class="col-md-6" style="padding-top:10px;">
	    					 <label> Father's Name<span>*</span></label>
   							 <input type="text" id="efather_name" name="father_name" class="input1" required/>
	    					
	    				</div>
	    				<div class="col-md-6" style="padding-top:10px;">
	    					<div>
	    					 <label for="fname">Contact No.<span>*</span></label>
	    					</div>
    						<input type="text" minlength="10" maxlength="10" id="enumber" name="number" class="input1" style="width: 100%;
    							padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" required pattern="[0-9.]{10}">
    
	    					
	    				</div>
	    				
	    				<div class="col-md-6" style="padding-top:10px;">
	    					 <label>Alternate Contact No.<span></span></label>
    						<input type="text" minlength="10" maxlength="10" id="enumber2" name="number2" class="input1" style="width: 100%;
   								 padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" >
	    					
	    				</div>
	    				<div class="col-md-6" style="padding-top:10px;">
	    					 <label>Email<span>*</span></label>
    						<input type="text" id="eemail" name="email" class="input1" required/>
	    					
	    				</div>
	    				
	    				<div class="col-md-6" style="padding-top:10px;">
	    					 <label>City<span>*</span></label>
    						<input type="text" id="ecity" name="city" class="input1" required/>
	    					
	    				</div>
	    				
	    				<div class="col-md-6" style="padding-top:10px;">
	    					 <label>Select Course<span>*</span></label>
    							<select id="ecourse" name="course" required/>
   								  <option value="">Select Course</option>
   								    <?php 
                                        $categorydata = $this->CommonModel->getWhereData('facility',array(1=>1));
                                        if(isset($categorydata) && !empty($categorydata))
                                        {
                                        foreach ($categorydata as $categoryarray){                               
                                        ?>
                                        <option value="<?php echo $categoryarray["title"]?>" <?php echo (isset($vid) && !empty($vid) && $vid == $categoryarray['id'] ? "selected" : ''); ?>><?php echo $categoryarray["title"]?></option>     
                                                                                                                          <!-- post selection from career page -->
                                    <?php    
                                        }
                                
                                    }
                                    ?>
   								  
    							</select>
	    					
	    				</div>
	    				
	    				<div class="col-md-6 c-03" style="padding-top:10px;">
	    					<label>How to know<span>*</span></label>
  	                            <select id="eknow" name="know" required/>
   								  <option value="">How you came to know about Dr. iitian?</option>
    							  <option value="Newspaper">Facebook</option>
    							  <option value="Youtube Video">Instagram</option>
    							  <option value="Friend">Google</option>
    							  <option value="Family">YouTube channel</option>
    							  <option value="Other">Friend</option>
    							   <option value="Other">Family</option> 
    							    <option value="Other">Other</option>
    							  
    							</select>
	    					
	    				</div>
	    				<div class="col-md-12 c-04">
	    				<p>
	    					 
	    				</p>
	    				<button class="btn btn-warning btn-lg registration" type="submit" id="submit" name="submit" value="submit">Submit</button>
	    				</div>
	    			</form>
	    			</div>
	    			
	    		</div>
	    	</div>
	    </div></div>
	    <!-- Registration form -->
<!-- <script> 
	$(document).on("click", ".registration", function() {
    //   console.log("inside";   <-- here it is
    // alert("inside");
    var estudent_name = $("#estudent_name").val();
    var efather_name = $("#efather_name").val();
    var enumber = $("#enumber").val();
    var enumber2 = $("#enumber2").val();
    var eemail = $("#eemail").val();
    var ecity = $("#ecity").val();
    var ecourse = $("#ecourse").val();
    var eknow = $("#eknow").val();


	    // alert(ename);
	    if(ename && eemail){
	   
	        $.ajax({
	            type: 'POST',
	            url:"<?php echo base_url()?>home/registration",
	            data:{student_name:estudent_name,father_name:efather_name,number:enumber,number2:enumber2,email:eemail,city:ecity,course:ecourse,know:eknow},
	            dataType: 'json',

	            success : function(data)
	            {
	              if(data.status==1){
	                // notify('success',data.msg,'Success');
	                $(".registration").notify(data.msg,'success');
	                //$("#emsg").html(data.msg);
	                window.location.href = "<?php echo base_url()?>home/thankyou";    
	              }
	              if(data.status==0){
	                 //$("#emsg").html(data.msg);
	                 // notify('error',data.msg,'Success');
	                 $(".registration").notify(data.msg,'error');
	              } //   console.log("inside";
	                // alert(data);
	                
	            },
	            error: function(data) 
	            {
	            },
	        });
	    }else{
	        $(".registration").notify("Email and name are required ",'error');
	    }

	});
</script>  -->  
