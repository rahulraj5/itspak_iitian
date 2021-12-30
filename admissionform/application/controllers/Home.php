<?php


class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();

		//$this->SessionModel->checklogin(array("index"));
	}
	
	public function index()
	{
		$data = array();
		if(isset($_POST) && !empty($_POST))
    	{
      		//   	print_r($_POST);
    		// die;
        	$insert_data = array();
        	$insert_data['address'] = $_POST["address"];
    		// $insert_data['form_no'] = $_POST["form_no"];
    		// $insert_data['date'] = $_POST["date"];
    		$insert_data['date'] = date('Y-m-d h:i:s');
    		$insert_data['name'] = $_POST["name"];
    		$insert_data['number'] = $_POST["number"];
    		$insert_data['current_address'] = $_POST["current_address"];
    		$insert_data['perma_address'] = $_POST["perma_address"];
    		$insert_data['city'] = $_POST["city"];
    		$insert_data['district'] = $_POST["district"];
    	    $insert_data['state'] = $_POST["state"];
    		$insert_data['category'] = $_POST["category"];
            $insert_data['school_name'] = $_POST["school_name"];
            $insert_data['board'] = $_POST["board"];	
            $insert_data['medium'] = $_POST["medium"];	
            $insert_data['father_name'] = $_POST["father_name"];	
            $insert_data['father_number'] = $_POST["father_number"];	
            $insert_data['course'] = $_POST["course"];	
            $insert_data['opt1'] = isset($_POST["opt1"]) ? $_POST["opt1"] : '';	
            // $insert_data['opt2'] = $_POST["opt2"];
            // $insert_data['opt3'] = $_POST["opt3"];
            if (isset($_FILES['slider_image']['name']) && !empty($_FILES['slider_image']['name'])) 
			{
				$path = './uploads/';
			   $filearraydata = $this->uploadfilebypath('slider_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['photo'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
    		$result = $this->CommonModel->addrecord('admissionform',$insert_data);
    		
    		if(isset($result))
    		{
			 //    $to = "info@driitian.com";
				// $subject = "New Entry For Addmission";
				
				$newid = formid_prefix.date("Y").$result;
				$insert_data['form_no'] = $newid;
		        // $template = $this->load->view('admission_template', $insert_data,true);
		        // $rs = sendEmail($to, $_POST["name"], $subject,'',$template);
				$updata = array();
				$updata['form_no'] = $newid;
				
           		$updateresult = $this->CommonModel->updateData('admissionform',$updata,array('id' => $result));
           		if(!empty($updateresult))
	        	{
	        		$status = 1;
		  			$msg = "Detail has been Send successfully";
	        		// echo 'success'.$newid;
					// redirect('http://localhost/myproject/driitian/thankyou?fmid='.$newid);
	        	}else{
	        		$status = 0;
	        		$msg  = "Oops something went wrong please try again";
	        	}

        	}else{
        		$data['error'] = "Oops something went wrong please try again";
        	}
	       
	        // if($result)
	        
    	}
        $this->load->view('index',$data);
       //echo "hi";
	}

	function uploadfilebypath($key,$path)
	{
		$message = array();
		$data = array();
		if($_FILES[$key]['size'] > 0)
		{
		$config = array(
		'upload_path' => $path,
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		/*'overwrite' => TRUE*/
		'max_size' => 60000,
		'max_height' => "",
		'max_width' => ""
		);
		$config['remove_spaces'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

				if($this->upload->do_upload($key))
				{
				//$data = array('upload_data' => $this->upload->data());
				$uploadData = $this->upload->data();
				//$this->resizeImage($uploadData['file_name']);
				$image_name = $uploadData['file_name'];
				return $image_name;
				}
				else
					{
					echo $this->upload->display_errors();
					}
				}
		else
			{
			return 'Your uploaded image file is blank.';
			}
	}
}	