	    <!-- Form-->
	    <div class="container form-content">
	    	<div class="row" style="padding: 25px; background-color: #fff;">
	    		<div class="col-md-12" > <h1 class="heading01 job_opp" style="color: #1e7273;"> Job opportunity at Dr. iitian </h1>
          </div>
	    		<div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6 form2">
      <label for="fname">First Name</label>
      <input type="text" id="first_name" name="first_name" placeholder="Your name.." class="input1" required/>
  	</div>
  	<div class="col-md-6 form2">
      <label for="lname">Last Name</label>
      <input type="text" id="last_name" name="last_name" placeholder="Your last name.." class="input1" required/>
  	</div>
  	<div class="col-md-6 form2">
      <label for="fname">Email Id</label>
      <input type="email" id="email" name="email" placeholder="Email Id" class="input1" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" required/>
  	</div>
  	<div class="col-md-6 form2">
      <label for="fname">Contact No.</label>
      <input type="text" minlength="10" maxlength="10" id="number" name="number" placeholder="Contact No." class="input1" required/>
  	</div>
  	<div class="col-md-6 form2">
      <label for="fname">Total Experience</label>
      <input type="text" id="experience" name="experience" placeholder="Total Experience" class="input1" required/>
  	</div>
  	<div class="col-md-6 form2">
      <label for="fname">Current CTC</label>
      <input type="text" id="ctc" name="ctc" placeholder="Current CTC." class="input1" >
  	</div>
  	 <div class="col-md-6 form2">
      <label for="city">Current City</label>
		 <input type="text" id="city" name="city" placeholder="Current city." class="input1" >
      
    </div>
  	<div class="col-md-6 form2">
      <label for="country">Post Applied</label>
      <select id="applyfor" name="applyfor">
        <option value="Select a value"> Select Post</option>
        <?php 
        $categorydata = $this->CommonModel->getWhereData('careervacancy',array(1=>1));
        if(isset($categorydata) && !empty($categorydata))
        {
        foreach ($categorydata as $categoryarray){                               
        ?>
        <option value="<?php echo $categoryarray["designation"]?>" <?php echo (isset($vid) && !empty($vid) && $vid == $categoryarray['id'] ? "selected" : ''); ?>><?php echo $categoryarray["designation"]?></option>     
                                                                                          <!-- post selection from career page -->
        <?php    
            }

        }
        ?>
      </select>
    </div>
    <div class="col-md-12 form2">
      <label for="lname">Reference (if any)</label>
      <input type="text" id="reference" name="reference" class="input1">
  	</div>
  	<div class="col-md-12 form2">
  	 <label for="lname">Attach Your Cv </label>	
  		<input type="file" name="resume" required/><br>
  		One file only.8 MB limit.Allowed types: pdf doc docx.
  	</div>
  	<div class="col-md-12 form2">
  		<label for="Comment">Comment</label><br>
  		<textarea name="coment" rows="6" cols="100" style="width: 100%;">
      </textarea>
  	</div>
    <div class="col-md-12 submit">
      <input type="submit" value="Submit" class="input3">
    </div>
  </form>
</div>


	    </div>
	    </div>




	    <!-- Form-->