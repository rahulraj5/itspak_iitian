<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH."libraries/PHPMailer/src/PHPMailer.php");
require(APPPATH."libraries/PHPMailer/src/SMTP.php");
require(APPPATH."libraries/PHPMailer/src/Exception.php");

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
		
		$this->load->view('home/header');
		$this->load->view('home/index');
		$this->load->view('home/footer');
	}

	public function contact()
	{
	    $data = array();
		if(isset($_POST['name']) && !empty($_POST['name']))
    	{
  		//   	print_r($_POST);
		// die;
    		$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			// $upass = trim($_POST['pass']);
			$number = trim($_POST['number']);

			if(empty($name))
			{
			$error = "enter your name !";
			$code = 1;
			}
			else if(!ctype_alpha($name))
			{
			$error = "letters only !";
			$code = 1;
			}
			else if(empty($email))
			{
			$error = "enter your email !";
			$code = 2;
			}
			else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
			{
			$error = "not valid email !";
			$code = 2;
			}
			else if(empty($number))
			{
			$error = "Enter Mobile NO !";
			$code = 3;
			}
			else if(!is_numeric($number))
			{
			$error = "Numbers only !";
			$code = 3;
			}
			else if(strlen($number)!=10)
			{
			$error = "10 characters only !";
			$code = 3;
			}
			else
			{
			    
				
				// document.location.href='index.php';
				
			}
		}
		$this->load->view('home/header');
		$this->load->view('home/contact',$data);
		$this->load->view('home/footer');
		
	}	

	public function emailsubscriber()
	{
		// print_r($_POST);
		//  die;	
    	$insert_data = array();
		$insert_data['name'] = $_POST["name"];
		$insert_data['email'] = $_POST["email"];
		$insert_data['create_date'] = date('Y-m-d h:i:s');
		$checkemail = $this->CommonModel->getWhereData('email_subscriber', array('email' => $_POST["email"]));
		if(empty($checkemail))
		{

		    $result = $this->CommonModel->addrecord('email_subscriber',$insert_data);	
		    $to = "info@driitian.com";
			$subject = "Email Subscription";
	        $headers = "From: webmaster@example.com";
	        $template = $this->load->view('home/email_subscriber_template', $insert_data,true);
			
        
        	
        	$status = 1;
        	$rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
        	$msg = "mail has been Subscribed successfully";
		}else{
			$status = 0;
        	$msg = "Email Already Exists";

		}
		echo $response = json_encode(array("status" => $status, "msg" => $msg));
		exit();
	}

	public function enquirysubmit()
	{
		if(isset($_POST['name']) && !empty($_POST['name']))
     	{
     	$insert_data = array();
		$insert_data['name'] = $_POST["name"];
		$insert_data['email'] = $_POST["email"];
		$insert_data['message'] = $_POST["message"];
		$insert_data['number'] = $_POST["number"];
		$insert_data['city'] = $_POST["city"];
		$insert_data['stream'] = $_POST["stream"];
			// $insert_data['create_date'] = date('Y-m-d h:i:s');
		$result = $this->CommonModel->addrecord('contactlist',$insert_data);
		$to = "info@driitian.com";
		$subject = "Enquiry";
        $headers = "From: webmaster@example.com";
        $template = $this->load->view('home/enquiry_template', $insert_data,true);
        	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
        $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
        echo 'success';
		}	
	}
	
	public function setscreensize(){
	    if(isset($_POST['width']) && isset($_POST['height'])){
	        //print_r($_POST);
            $this->session->set_userdata('screen_width', $_POST['width']);
            $this->session->set_userdata('screen_height', $_POST['height']);
            // echo json_encode(array('outcome'=>'success'));
            $this->load->view('home/slider');
        }
	}

	public function about()
	{

		$this->load->view('home/header');
		$this->load->view('home/about');
		$this->load->view('home/footer');
	}

	public function admissionopen()
	{
			
		if(isset($_POST['name']) && !empty($_POST['name']))
     	{
  	// 		 print_r($_POST);
			// die;
			$insert_data = array();
			$insert_data['name'] = $_POST["name"];
			$insert_data['email'] = $_POST["email"];
			$insert_data['message'] = $_POST["message"];	//query
			$insert_data['number'] = $_POST["number"];	
			$insert_data['city'] = $_POST["city"];		
			$insert_data['course'] = $_POST["course"]; //course
			// $insert_data['stream'] = (isset($_POST["stream"]) ? $_POST["stream"] : '');
			$insert_data['clas'] = $_POST["clas"];		//class
			$insert_data['medium'] = $_POST["medium"];
			$insert_data['know'] = $_POST["know"];
				// $insert_data['create_date'] = date('Y-m-d h:i:s');
			$result = $this->CommonModel->addrecord('contactlist',$insert_data);
			$to = "info@driitian.com";
			$subject = "For Admission";
	        $headers = "From: webmaster@example.com";
	        $template = $this->load->view('home/addmission_template', $insert_data,true);
	        	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	        $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	     	if($rs)
	    	{
	    		// redirect(base_url().'thankyou');
	    		 echo 'success';
	    	}
	        // echo 'success';
		}
		$this->load->view('home/admissionopen');
		
	}

	// public function admissionopen()
	// {
	// 	if(isset($_POST) && !empty($_POST))
 //     	{
	// 		if(!empty($_POST['name']) && !empty($_POST['email']) &&  !empty($_POST['message']) && !empty($_POST['number']) && isset($_POST['course'])  && !empty($_POST['course']) && isset($_POST['clas'])  && !empty($_POST['clas'])){
	// 			$insert_data = array();
	// 			$insert_data['name'] = $_POST["name"];
	// 			$insert_data['email'] = $_POST["email"];
	// 			$insert_data['message'] = $_POST["message"];	//query
	// 			$insert_data['number'] = $_POST["number"];	
	// 			$insert_data['city'] = $_POST["city"];		
	// 			$insert_data['course'] = $_POST["course"]; //course
	// 			// $insert_data['stream'] = (isset($_POST["stream"]) ? $_POST["stream"] : '');
	// 			$insert_data['clas'] = $_POST["clas"];
	// 			$insert_data['medium'] = $_POST["medium"];
	// 			$insert_data['know'] = $_POST["know"];
	// 			$result = $this->CommonModel->addrecord('contactlist',$insert_data);
	// 			$to = "info@driitian.com";
	// 			$subject = "For Admission";
	// 	        $headers = "From: webmaster@example.com";
	// 	        $template = $this->load->view('home/addmission_template', $insert_data,true);
	//         	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	//         	$rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	// 			$msg = array('status'=>1, 'msg'=>'Request has been send successfully');
	// 			echo json_encode($msg);
	// 			exit();
	// 		}elseif(empty($_POST['name']) && empty($_POST['email']) &&  empty($_POST['message']) && empty($_POST['number']) && !isset($_POST['course']) && !isset($_POST['clas'])){
	// 			$msg = array('status'=>0, 'msg'=>'All fields are required please try again !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['name'])){
	// 			$msg = array('status'=>0, 'msg'=>'Name is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['email'])){
	// 			$msg = array('status'=>0, 'msg'=>'Email is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
			
	// 		elseif(empty($_POST['number'])){
	// 			$msg = array('status'=>0, 'msg'=>'Number is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['city'])){
	// 			$msg = array('status'=>0, 'msg'=>'City is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(isset($_POST['course']) && empty($_POST['course'])){
	// 			$msg = array('status'=>0, 'msg'=>'course is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(isset($_POST['clas']) && empty($_POST['clas'])){
	// 			$msg = array('status'=>0, 'msg'=>'Class is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['message'])){
	// 			$msg = array('status'=>0, 'msg'=>'Message is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		else{
	// 			$msg = array('status'=>0, 'msg'=>'All fields are required please try again !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	
	// 		// $to = "info@driitian.com";
	// 		// $subject = "For Admission";
	// 		  //       $headers = "From: webmaster@example.com";
	// 		  //       $template = $this->load->view('home/addmission_template', $insert_data,true);
	// 		  //       	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	// 		  //       $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	// 		     	//if($rs)
	// 		    	// {
	// 		    	// 	redirect(base_url().'thankyou');
	// 		    	// }
	//         // echo 'success';
	// 	}
	// 	$this->load->view('home/admissionopen');
		
	// }

	// public function iitjee()
	// {
			
	// 	if(isset($_POST) && !empty($_POST))
 //     	{
 //  			 // print_r($_POST);
	// 		// die;
	// 			//class
	// 			// $insert_data['create_date'] = date('Y-m-d h:i:s');

	// 		if(!empty($_POST['name']) && !empty($_POST['email']) &&  !empty($_POST['message']) && !empty($_POST['number']) && isset($_POST['course'])  && !empty($_POST['course']) && isset($_POST['clas'])  && !empty($_POST['clas'])){
	// 			$insert_data = array();
	// 			$insert_data['name'] = $_POST["name"];
	// 			$insert_data['email'] = $_POST["email"];
	// 			$insert_data['message'] = $_POST["message"];	//query
	// 			$insert_data['number'] = $_POST["number"];	
	// 			$insert_data['city'] = $_POST["city"];		
	// 			$insert_data['course'] = $_POST["course"]; //course
	// 			// $insert_data['stream'] = (isset($_POST["stream"]) ? $_POST["stream"] : '');
	// 			$insert_data['clas'] = $_POST["clas"];
	// 			$insert_data['medium'] = $_POST["medium"];
	// 			$insert_data['know'] = $_POST["know"];
	// 			$result = $this->CommonModel->addrecord('contactlist',$insert_data);
	// 			$to = "info@driitian.com";
	// 			$subject = "For Admission in IIT-JEE";
	// 	        $headers = "From: webmaster@example.com";
	// 	        $template = $this->load->view('home/addmission_template', $insert_data,true);
	//         	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	//         	$rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	// 			$msg = array('status'=>1, 'msg'=>'Request has been send successfully');
	// 			echo json_encode($msg);
	// 			exit();
	// 		}elseif(empty($_POST['name']) && empty($_POST['email']) &&  empty($_POST['message']) && empty($_POST['number']) && !isset($_POST['course']) && !isset($_POST['clas'])){
	// 			$msg = array('status'=>0, 'msg'=>'All fields are required please try again !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['name'])){
	// 			$msg = array('status'=>0, 'msg'=>'Name is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['email'])){
	// 			$msg = array('status'=>0, 'msg'=>'Email is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
			
	// 		elseif(empty($_POST['number'])){
	// 			$msg = array('status'=>0, 'msg'=>'Number is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['city'])){
	// 			$msg = array('status'=>0, 'msg'=>'City is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(isset($_POST['course']) && empty($_POST['course'])){
	// 			$msg = array('status'=>0, 'msg'=>'course is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(isset($_POST['clas']) && empty($_POST['clas'])){
	// 			$msg = array('status'=>0, 'msg'=>'Class is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['message'])){
	// 			$msg = array('status'=>0, 'msg'=>'Message is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		else{
	// 			$msg = array('status'=>0, 'msg'=>'All fields are required please try again !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	
	// 		// $to = "info@driitian.com";
	// 		// $subject = "For Admission";
	// 		  //       $headers = "From: webmaster@example.com";
	// 		  //       $template = $this->load->view('home/addmission_template', $insert_data,true);
	// 		  //       	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	// 		  //       $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	// 		     	//if($rs)
	// 		    	// {
	// 		    	// 	redirect(base_url().'thankyou');
	// 		    	// }
	//         // echo 'success';
	// 	}
	// 	$this->load->view('home/iitjee');
		
	// }

	// public function neet()
	// {
			
	// 	if(isset($_POST) && !empty($_POST))
 //     	{
 //  			 // print_r($_POST);
	// 		// die;
	// 			//class
	// 			// $insert_data['create_date'] = date('Y-m-d h:i:s');

	// 		if(!empty($_POST['name']) && !empty($_POST['email']) &&  !empty($_POST['message']) && !empty($_POST['number']) && isset($_POST['course'])  && !empty($_POST['course']) && isset($_POST['clas'])  && !empty($_POST['clas'])){
	// 			$insert_data = array();
	// 			$insert_data['name'] = $_POST["name"];
	// 			$insert_data['email'] = $_POST["email"];
	// 			$insert_data['message'] = $_POST["message"];	//query
	// 			$insert_data['number'] = $_POST["number"];	
	// 			$insert_data['city'] = $_POST["city"];		
	// 			$insert_data['course'] = $_POST["course"]; //course
	// 			// $insert_data['stream'] = (isset($_POST["stream"]) ? $_POST["stream"] : '');
	// 			$insert_data['clas'] = $_POST["clas"];
	// 			$insert_data['medium'] = $_POST["medium"];
	// 			$insert_data['know'] = $_POST["know"];
	// 			$result = $this->CommonModel->addrecord('contactlist',$insert_data);
	// 			$to = "info@driitian.com";
	// 			$subject = "For Admission in NEET";
	// 	        $headers = "From: webmaster@example.com";
	// 	        $template = $this->load->view('home/addmission_template', $insert_data,true);
	//         	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	//         	$rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	// 			$msg = array('status'=>1, 'msg'=>'Request has been send successfully');
	// 			echo json_encode($msg);
	// 			exit();
	// 		}elseif(empty($_POST['name']) && empty($_POST['email']) &&  empty($_POST['message']) && empty($_POST['number']) && !isset($_POST['course']) && !isset($_POST['clas'])){
	// 			$msg = array('status'=>0, 'msg'=>'All fields are required please try again !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['name'])){
	// 			$msg = array('status'=>0, 'msg'=>'Name is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['email'])){
	// 			$msg = array('status'=>0, 'msg'=>'Email is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
			
	// 		elseif(empty($_POST['number'])){
	// 			$msg = array('status'=>0, 'msg'=>'Number is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['city'])){
	// 			$msg = array('status'=>0, 'msg'=>'City is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(isset($_POST['course']) && empty($_POST['course'])){
	// 			$msg = array('status'=>0, 'msg'=>'course is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(isset($_POST['clas']) && empty($_POST['clas'])){
	// 			$msg = array('status'=>0, 'msg'=>'Class is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		elseif(empty($_POST['message'])){
	// 			$msg = array('status'=>0, 'msg'=>'Message is required !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	// 		else{
	// 			$msg = array('status'=>0, 'msg'=>'All fields are required please try again !'); 
	// 			echo json_encode($msg);
	// 			exit();
	// 		}
	
	// 		// $to = "info@driitian.com";
	// 		// $subject = "For Admission";
	// 		  //       $headers = "From: webmaster@example.com";
	// 		  //       $template = $this->load->view('home/addmission_template', $insert_data,true);
	// 		  //       	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	// 		  //       $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	// 		     	//if($rs)
	// 		    	// {
	// 		    	// 	redirect(base_url().'thankyou');
	// 		    	// }
	//         // echo 'success';
	// 	}
	// 	$this->load->view('home/neet');
	// }

	function uploadfile($key)
	{
		$message = array();
		$data = array();
		// $data['userdata'] = $this->session->userdata('userdata');
		//print_r($data['userdata']->id);die;

		@$id = $data['userdata']->id;
		if($_FILES[$key]['size'] > 0)
		{
		$config = array(
		'upload_path' => "./uploads/",
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

	function uploadresume($key)
	{
		$message = array();
		$data = array();
		// $data['userdata'] = $this->session->userdata('userdata');
		//print_r($data['userdata']->id);die;

		@$id = $data['userdata']->id;
		if($_FILES[$key]['size'] > 0)
		{
		$config = array(
		'upload_path' => "./uploads/resume/",
		'allowed_types' => "jpg|png|jpeg|pdf|doc|docx|",
		/*'overwrite' => TRUE*/
		'max_size' => 600000,
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

	public function career()
	{
		$data = array();
		$data['postvacancy'] = $this->CommonModel->getWhereData('careervacancy',$data);
		// print_r($_POST);
		// die;
		$this->load->view('home/header');
		$this->load->view('home/career',$data);
		$this->load->view('home/footer');
	}
	
	public function gallery()
	{
		$data = array();
		$data['images'] = $this->CommonModel->getWhereData('gallery',array(1=>1));
		$this->load->view('home/header');
		$this->load->view('home/gallery',$data);
		$this->load->view('home/footer');
	}

	// public function contact()
	// {
	//     $data = array();
	// 	if(isset($_POST) && !empty($_POST))
 //    	{
 //  		//   	print_r($_POST);
	// 	// die;
 //    	$insert_data = array();
	// 	$insert_data['name'] = $_POST["name"];
	// 	$insert_data['email'] = $_POST["email"];
	// 	$insert_data['number'] = $_POST["number"];
	// 	$insert_data['message'] = $_POST["message"];
	//     $result = $this->CommonModel->addrecord('contactlist',$insert_data);
	// 	$to = "info@driitian.com";
	// 	$subject = "Contact us";
 //        $headers = "From: webmaster@example.com";
 //        $template = $this->load->view('home/contact_template', $insert_data,true);
 //        $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
 //        if($rs)
 //    	{
 //    		 echo 'success';
 //    	// redirect(base_url().'thankyou');
 //    	}
	// 	}
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/contact',$data);
	// 	$this->load->view('home/footer');
		
	// }	

	public function blog()
	{
		$this->load->view('home/header');
		$this->load->view('home/blog');
		$this->load->view('home/footer');
	}

	public function blogdetail($bid)
	{
		// $my = array();
		// $rahul = $this->CommonModel->getSingleData('addblog',array('title_slug' => $bid));
		// $result = $rahul['title_slug'];
		// print_r($result);
		// $bid = $result;

		$data = array();
		$blog_data = $this->CommonModel->getSingleData('addblog',array('title_slug' => $bid));
		$data['blog_data'] = $blog_data;
		// print_r($blog_data);
		// die;	  
		// $data = array();
  		//       $data['blog_data'] = $this->CommonModel->getWhereData('addblog',array(1=>1));
		$this->load->view('home/header');
		$this->load->view('home/blogdetail',$data);
		$this->load->view('home/footer');
	}

	public function courses($bid)
	{
		if( isset($bid) && $bid)
		{	
		// echo $uriSegments[4];
		// echo $bid;
			$my = array();
		// $rahul = $this->CommonModel->getWhereData('courses',$my);
			$rahul = $this->CommonModel->getSingleData('courses',array('url_slug' => $bid));

			if(isset($rahul) && !empty($rahul)){
			// print_r($rahul['url_slug']);
				$resultt = $rahul['url_slug'];
				// print_r($resultt);
				$bid = $resultt;
				// echo 'success';
				$data = array();
				$facility_data = $this->CommonModel->getSingleData('courses',array('url_slug' => $bid));
				// print_r($data);
				$data['facility_data'] = $facility_data;
				$this->load->view('home/header');
				$this->load->view('home/courses',$data);
				$this->load->view('home/footer');
			}else{
				redirect('404');
			}
		}
		else{
			redirect('404');
		}
		
	}

	public function form($vid = false)
	{
		$data = array();
		if(isset($_POST) && !empty($_POST))
		{
			// print_r($_POST);
			// die;
			$insert_data = array();
			$insert_data['first_name'] = $_POST["first_name"];
			$insert_data['last_name'] = $_POST["last_name"];
			$insert_data['email'] = $_POST["email"];
			$insert_data['experience'] = $_POST["experience"];
			$insert_data['ctc'] = $_POST["ctc"];
			$insert_data['city'] = $_POST["city"];
			$insert_data['reference'] = $_POST["reference"];
			$insert_data['number'] = $_POST["number"];
			$insert_data['coment'] = $_POST["coment"];
			$insert_data['applyfor'] = $_POST["applyfor"];
			$insert_data['create_date'] = date('Y-m-d h:i:s');

			// $data['create_date'] = $_POST["create_date"];
			if (isset($_FILES)) 
			{
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value) {
			        // print_r($value['size']);
			        // die;
			        if($value['size'] > 0)
			        {

			            $filearraydata = $this->uploadresume($key);
			            // $filearray[$key] = $filearraydata;
			            $insert_data['resume'] = $filearraydata;
			            // die;
			            
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
				//$post_data = $_POST+$filearray;
			}

		// print_r($_POST);
		// die;	
		

		// 	// $result_id = $this->CommonModel->addrecord('applyforjob',array("status" => 1,'id !='=>1));
		$result = $this->CommonModel->addrecord('applyforjob',$insert_data);
		$insert_data['id'] = $result;
		$to = "info@driitian.com";
		$subject = "Resume From Web";
        $headers = "From: webmaster@example.com";
        $template = $this->load->view('home/template', $insert_data,true);
        $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);

		}
		// print_r($_POST);
		// die;
		if($vid)
		{								
		$data['vid'] = $vid;
		}
		$this->load->view('home/header');
		$this->load->view('home/form',$data);
		$this->load->view('home/footer');
	}

	public function video()
	{
		$this->load->view('home/header');
		$this->load->view('home/video');
		$this->load->view('home/footer');
	}

	// public function registration()
	// {
	// 	$data = array(); 
	// 	if(isset($_POST) && !empty($_POST))
	// 	{
	// 		// print_r($_POST);
	// 		// die;
	// 		$insert_data = array();
	// 		$insert_data['student_name'] = $_POST["student_name"];
	// 		$insert_data['father_name'] = $_POST["father_name"];
	// 		$insert_data['number'] = $_POST["number"];
	// 		$insert_data['number2'] = $_POST["number2"];
	// 		$insert_data['email'] = $_POST["email"];
	// 		$insert_data['city'] = $_POST["city"];
	// 		$insert_data['course'] = $_POST["course"];
	// 		$insert_data['know'] = $_POST["know"];
	// 		$insert_data['create_date'] = date('Y-m-d h:i:s');
	// 		$checkemail = $this->CommonModel->getWhereData('registration', array('email' => $_POST["email"]));
	// 		if(empty($checkemail))
	// 		{
	// 			$result = $this->CommonModel->addrecord('registration',$insert_data);
	// 			$insert_data['id'] = $result;
	// 			$to = "info@driitian.com";
	// 			$subject = "New Registration";
	// 	        $headers = "From: webmaster@example.com";
	// 	        $template = $this->load->view('home/registration_template', $insert_data,true);
				
	// 	        $status = 1;
	//         	$rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	//         	// $msg = "Registration has been successfully";
	//         	if($rs)
	// 	    	{
	// 	    		redirect(base_url().'thankyou');
	// 	    	} 
	// 		}
	// 		else
	// 		{
	// 			// $status = 0;
	//         	// $msg = "Email Already Exists";
	// 		}
	// 		// echo $response = json_encode(array("status" => $status, "msg" => $msg));
	// 		// exit();
		
	//     }   
	// 	$this->load->view('home/header');
	// 	$this->load->view('home/registration_form',$data);
	// 	$this->load->view('home/footer');
	// }

	public function registration()
	{
		$data = array(); 
		if(isset($_POST) && !empty($_POST))
		{
			// print_r($_POST);
			// die;
			$insert_data = array();
			$insert_data['student_name'] = $_POST["student_name"];
			$insert_data['father_name'] = $_POST["father_name"];
			$insert_data['number'] = $_POST["number"];
			$insert_data['number2'] = $_POST["number2"];
			$insert_data['email'] = $_POST["email"];
			$insert_data['city'] = $_POST["city"];
			$insert_data['course'] = $_POST["course"];
			$insert_data['know'] = $_POST["know"];
			$insert_data['create_date'] = date('Y-m-d h:i:s');
			$result = $this->CommonModel->addrecord('registration',$insert_data);
			// print_r($result);
			// die;
			$to = "info@driitian.com";
			$subject = "New Registration";
	        $headers = "From: webmaster@example.com";
	        $template = $this->load->view('home/registration_template', $insert_data,true);
	    	$rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	    }   
		$this->load->view('home/header');
		$this->load->view('home/registration_form',$data);
		$this->load->view('home/footer');
	}

	public function thankyou()
	{
		$this->load->view('home/header');
		$this->load->view('home/thankyou');
		$this->load->view('home/footer');
	}

	public function admission()
	{
		$this->load->view('home/admission');
	}
	
}	