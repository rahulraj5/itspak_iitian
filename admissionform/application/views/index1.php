<form class="form-horizontal" action="" id="admissionform" method="post" enctype="multipart/form-data">
      

      <div class="col-sm-12">
        <div class="form-group">
         <input type="radio" class="form-control empty" id="address iconified" name="address" value="Geeta Bhawan" required/> Geeta Bhawan
         <input type="radio" class="form-control empty" id="address iconified" name="address" value="Gumasta Nagar" required/> Gumasta Nagar
        </div>
      </div> 

      <div class="col-sm-12">
        <div class="form-group">
         <input type="text" class="form-control empty"  name="form_no" required/>
        </div>
      </div> 

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="date" class="form-control empty" name="date" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="name" required/>
          </div>
      </div>

      <div class="col-sm-6 col-xs-12">
         <div class="form-group group">
            <input type="text" minlength="10" maxlength="10" class="form-control empty" id="tel iconified" placeholder="&#xf095; Mobile No." name="number" required pattern="[0-9.]{10}">
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="current_address" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="perma_address	" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="city" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="district" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="state" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="radio" class="form-control empty" name="category" value="Gen" required/> Gen
          <input type="radio" class="form-control empty" name="category" value="OBC" required/> OBC
          <input type="radio" class="form-control empty" name="category" value="SC" required/> SC
          <input type="radio" class="form-control empty" name="category" value="ST" required/> ST
          <input type="radio" class="form-control empty" name="category" value="PH" required/> PH
          </div>
      </div>

      <div class="col-sm-6 col-xs-12"> 
        <div class="form-group group mar">
           <input type="text" class="form-control empty" name="school_name" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="board" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="radio" class="form-control empty" name="medium" value="Hindi" required/> Hindi
          <input type="radio" class="form-control empty" name="medium" value="English" required/> English
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="father_name" required/>
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          
          <input type="text" minlength="10" maxlength="10" class="form-control empty" id="tel iconified" placeholder="&#xf095; Mobile No." name="father_number" required pattern="[0-9.]{10}">
          </div>
      </div>

      <div class="col-sm-12"> 
          <div class="form-group">
          <input type="text" class="form-control empty" name="course" required/>
          </div>
      </div>

      <div class="col-sm-6 col-xs-12">
        <div class="form-group group">
            <select class="form-control empty" id="class iconified" name="opt1" required/>
              <option value="" disabled selected>&#xf02d;  Select Course</option>
              <option>IIT</option>
              <option>NEET</option>
              <option>Foundation</option>
            </select>
          </div>
      </div>

      <div class="col-sm-6 col-xs-12">
       <div class="form-group mar">
          <select class="form-control empty" id="class iconified" name="opt2" required/>
            <option value="" disabled selected>&#xf19d; Class</option>
            <option>11</option>
            <option>12</option>
            <option>Dropper</option>
          </select>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-12">
          <!-- <button type="submit" class="btn btn-default" onclick="return gtag_report_conversion(‘https://www.driitian.com/admissionopen')">Submit</button> -->
          <button type="submit" id="contact" name="contact" class="btn btn-default">Submit</button>
        </div>
      </div>
</form>