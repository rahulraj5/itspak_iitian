<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		$this->SessionModel->checklogin(array("index"));
	}


	public function index()
	{
		check_user_logged_in();

		$edata = array();
		// echo "hi";
		// die;
		// print_r($_POST);		
		//die;
		if(isset($_POST) && isset($_POST["loginadmin"]) && !empty($_POST["loginadmin"]))
		{
			// print_r($_POST);
			// die;
			$data = $this->input->post();
			$email = $data["email"];
			$password = $data["password"];

			$udata = array(
				"email" => $email,
				"password" => md5($password)
			);

			$userdata = $this->AdminModel->user_login($udata);

			if(!empty($userdata))
			{
				if($userdata["status"] == 1)
				{
					$this->session->set_userdata('cricwarm_admin', $userdata);
					$this->session->set_userdata("cricwarm_userID",$userdata["id"]);
					redirect(base_url().'admin/dashboard', 'refresh');
				}else
				{
					$edata['error'] = "You are blocked by admin!";						
				}
			}else
			{
				$edata['error'] = "Invalid usrername or password!";
			}
		}
		$this->load->view('index',$edata);
	}
	
	public function dashboard()
	{
		$edata = array();
		// echo "hi";
		// die;
		if(isset($_POST['configure_common_settings']))
		{
		   
		   $filearray = array();
			if (isset($_FILES)) {
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value) {
			        //print_r($value['size']);
			        if($value['size'] > 0) {

			            $filearraydata = $this->uploadfile($key);
			            $filearray[$key] = $filearraydata;
			            
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
				//$post_data = $_POST+$filearray;
			}
			//print_r($filearray);
			/*Upload file end*/
			//creating query
			$query = "INSERT INTO `common_settings`
			(`option_name`, `option_value`)
			VALUES ";
			$query .= "('email','".$_POST['email']."' ),
			('address','".$_POST['address']."' ),
			('country','".$_POST['country']."' ),
			('state','".$_POST['state']."' ),
			('city','".$_POST['city']."' ),
			('mobile_no','".$_POST['mobile_no']."' ),
			('pincode','".$_POST['pincode']."' ),
			('facebook_url','".$_POST['facebook_url']."' ),
			('linkedin_url','".$_POST['linkedin_url']."' ),
			('instagram_url','".$_POST['instagram_url']."' ),
			('twitter_url','".$_POST['twitter_url']."' ),
			('popup_image_status','".trim($_POST['popup_image_status'])."' ),
			('site_title','".$_POST['site_title']."' ),
			('presentation_url','".$_POST['presentation_url']."' ),";
			
			if (isset($filearray['front_logo'])) {
				$query .= "('front_logo','".$filearray['front_logo']."' ),";
			}
			if (isset($filearray['login_background_image'])) {
				$query .= "('login_background_image','".$filearray['login_background_image']."' ),";
			}
			if (isset($filearray['backlogo'])) {
				$query .= "('backlogo','".$filearray['backlogo']."' ),";
			}
			if (isset($filearray['pop_image'])) {
				$query .= "('pop_image','".$filearray['pop_image']."' ),";
			}
			
			$query .="('pan_no','".$_POST['pan_no']."' ) ON DUPLICATE KEY UPDATE option_value=VALUES(option_value)";

			// echo $query;
			// die;
			//creating query end

			$response = $this->db->query($query);
			// echo $this->db->last_query();
			if ($response) {
				//$msg = array('status'=>1, 'msg'=>'Cofugration Successfully!');
				//echo json_encode($msg);
				$edata['SUCCESS'] = 'Configuring your system, please wait...!';
				}else{
				$edata['ERROR'] = 'Ops! Something went wrong...!';
			}
		}
		$this->load->view("admin/header");
		$this->load->view("admin/common_settings",$edata);
		$this->load->view("admin/footer");
	}

	/*Nirbhay Start*/
	public function adduser($user_id = false)
	{

		$data = array();
		$data['user_data'] = "";
		$data['error'] = "";
		$data['email_error'] = "";
		$data['mobile_error'] = "";
		$data['pass_error'] = "";
		if(isset($_POST['submit']))
		{
			// print_r($_POST);
			// print_r($_FILES);
			$post_data = $_POST;
			if(isset($_POST['email']) && isset($_POST['mobile_no']) && isset($_POST['password']) && isset($_POST['cpassword']))
			{
				$email = $_POST['email'];
				$mobile_no = $_POST['mobile_no'];
				$password = md5($_POST['password']);
				$cpassword = md5($_POST['cpassword']);
				$check_email = $this->CommonModel->getWhereData('users',array('email'=>$email));
				$check_mobile = $this->CommonModel->getWhereData('users',array('mobile_no'=>$mobile_no));
				if(empty($check_email) && empty($check_mobile) && $password == $cpassword)
				{
					$insert_data = array();
					$insert_data['name'] = (!empty($_POST['name'])?$_POST['name']:'');
					$insert_data['email'] = $email;
					$insert_data['mobile_no'] = $mobile_no;
					$insert_data['password'] = $password;
					$insert_data['show_password'] = $password;
					$insert_data['language_id'] = $_POST['password'];
					$insert_data['userrole'] = 1;
					$insert_data['create_date'] = date('Y-m-d H:i:s');
					if(!empty($_FILES['image']['name']))
					{
			      		$ThumbSquareSize 		= 200; //Thumbnail will be 200x200

						$BigImageMaxSize 		= 1024; //Image Maximum height or width

						$ThumbPrefix			= "thumb_"; //Normal thumb Prefix

						$DestinationDirectory	= 'uploads/'; //Upload Directory ends with / (slash)

						$Quality 				= 60;

						//ini_set('memory_limit', '-1'); // maximum memory!

							// some information about image we need later.

							$ImageName = $_FILES['image']['name'];

							// die;

							$ImageSize 		= $_FILES['image']['size'];

							$TempSrc	 	= $_FILES['image']['tmp_name'];

							$ImageType	 	= $_FILES['image']['type'];

							$processImage			= true;	

							$RandomNumber			= time();  // We need same random name for both files.

							
							if(!isset($ImageName) || !is_uploaded_file($TempSrc))

							{
									// echo '<div class="error">Error occurred while trying to process <strong>'.$ImageName[$i].'</strong>, may be file too big!</div>'; //output error
							}

							else

							{

								//Validate file + create image from uploaded file.

								switch(strtolower($ImageType))

								{

									case 'image/png':

										$CreatedImage = imagecreatefrompng($TempSrc);

										break;

									case 'image/gif':

										$CreatedImage = imagecreatefromgif($TempSrc);

										break;

									case 'image/jpeg':

									case 'image/pjpeg':

										$CreatedImage = imagecreatefromjpeg($TempSrc);

										break;

									default:

										$processImage = false; //image format is not supported!

								}

								//get Image Size

								list($CurWidth,$CurHeight)=getimagesize($TempSrc);



								//Get file extension from Image name, this will be re-added after random name

								$ImageExt = substr($ImageName, strrpos($ImageName, '.'));

								$ImageExt = str_replace('.','',$ImageExt);

						

								//Construct a new image name (with random number added) for our new image.

								$NewImageName = $RandomNumber.'.'.$ImageExt;



								//Set the Destination Image path with Random Name

								$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumb name

								$DestRandImageName 			= $DestinationDirectory.$NewImageName; //Name for Big Image



								//Resize image to our Specified Size by calling resizeImage function.

								if($processImage && $this->resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))

								{

									$insert_data['image'] = base_url()."uploads/".$NewImageName;

								}else{

									// echo '<div class="error">Error occurred while trying to process <strong>'.$ImageName[$i].'</strong>! Please check if file is supported</div>'; //output error

								}

								

							}
					}
					$insert_data['reg_id'] = $this->createCode('users','reg_id');

					$result_id = $this->CommonModel->insertData('users',$insert_data);

			    	if(!empty($result_id))
			    	{
			    		// $user_data = $this->common_model->GetWhere('users',array('id'=>$result_id));
			    		$this->session->set_flashdata('success', 'Registration has been done successfully.');
			    		// $data['success'] = "Registration has been done successfully.";
			    		redirect(base_url()."admin/userlist");

			    	}
			    	else
			    	{
			    		$data['error'] = DATABASE_ERROR;
			    	}
				}
				elseif (!empty($check_email) && !empty($check_mobile) && $password != $cpassword) {
					$data['email_error'] = "Email already exist";
					$data['mobile_error'] = "Mobile no already exist";
					$data['pass_error'] = "Password not matched";
				}
				elseif(!empty($check_email) && !empty($check_mobile) && $password == $cpassword)
				{
					$data['email_error'] = "Email already exist";
					$data['mobile_error'] = "Mobile no already exist";
				}
				elseif(!empty($check_email) && empty($check_mobile) && $password == $cpassword)
				{
					$data['email_error'] = "Email already exist";
				}
				elseif(empty($check_email) && !empty($check_mobile) && $password == $cpassword)
				{
					$data['mobile_error'] = "Mobile no already exist";
				}
				elseif (empty($check_email) && empty($check_mobile) && $password != $cpassword) {
					$data['pass_error'] = "Password not matched";
				}
				else{

					$data['error'] = "Invalid detail please try again";
				}

				
			}
			else
			{
				$data['error'] = "Invalid detail please try again";
				
			}
			$data['user_data'] = $post_data;
			// die;
		}
		if(isset($_POST['update']))
		{
			// print_r($_POST);

			if(isset($_POST['email']) && isset($_POST['mobile_no']) && isset($_POST['id']) && !empty($_POST['email']) && !empty($_POST['mobile_no']) && !empty($_POST['id']))
			{

				$id = $_POST['id'];

				$email = $_POST['email'];
				$mobile_no = $_POST['mobile_no'];

				$check_email = $this->CommonModel->getWhereData('users',array('email'=> $email,'id !='=> $id));
				$check_mobile = $this->CommonModel->getWhereData('users',array('mobile_no'=>$mobile_no,'id !='=> $id));
				if(empty($check_email) && empty($check_mobile))
				{
					$update_data = array();
					$update_data['name'] = $_POST['name'];
					$update_data['email'] = $email;
					$update_data['mobile_no'] = $mobile_no;
					if(!empty($_FILES['image']['name']))
					{
			      		$ThumbSquareSize 		= 200; //Thumbnail will be 200x200

						$BigImageMaxSize 		= 1024; //Image Maximum height or width

						$ThumbPrefix			= "thumb_"; //Normal thumb Prefix

						$DestinationDirectory	= 'uploads/'; //Upload Directory ends with / (slash)

						$Quality 				= 60;



						//ini_set('memory_limit', '-1'); // maximum memory!



						

							// some information about image we need later.

							$ImageName = $_FILES['image']['name'];



							// die;

							$ImageSize 		= $_FILES['image']['size'];

							$TempSrc	 	= $_FILES['image']['tmp_name'];

							$ImageType	 	= $_FILES['image']['type'];

							$processImage			= true;	

							$RandomNumber			= time();  // We need same random name for both files.

							

							if(!isset($ImageName) || !is_uploaded_file($TempSrc))

							{

								// echo '<div class="error">Error occurred while trying to process <strong>'.$ImageName[$i].'</strong>, may be file too big!</div>'; //output error

							}

							else

							{

								//Validate file + create image from uploaded file.

								switch(strtolower($ImageType))

								{

									case 'image/png':

										$CreatedImage = imagecreatefrompng($TempSrc);

										break;

									case 'image/gif':

										$CreatedImage = imagecreatefromgif($TempSrc);

										break;

									case 'image/jpeg':

									case 'image/pjpeg':

										$CreatedImage = imagecreatefromjpeg($TempSrc);

										break;

									default:

										$processImage = false; //image format is not supported!

								}

								//get Image Size

								list($CurWidth,$CurHeight)=getimagesize($TempSrc);



								//Get file extension from Image name, this will be re-added after random name

								$ImageExt = substr($ImageName, strrpos($ImageName, '.'));

								$ImageExt = str_replace('.','',$ImageExt);

						

								//Construct a new image name (with random number added) for our new image.

								$NewImageName = $RandomNumber.'.'.$ImageExt;



								//Set the Destination Image path with Random Name

								$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumb name

								$DestRandImageName 			= $DestinationDirectory.$NewImageName; //Name for Big Image



								//Resize image to our Specified Size by calling resizeImage function.

								if($processImage && $this->resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))

								{

									$update_data['image'] = base_url()."uploads/".$NewImageName;

								}else{

									// echo '<div class="error">Error occurred while trying to process <strong>'.$ImageName[$i].'</strong>! Please check if file is supported</div>'; //output error

								}

								

							}
					}

					$this->CommonModel->updateData('users',$update_data,array('id'=>$id));
					$this->session->set_flashdata('tour_success', __webtxt('User has been updated successfully'));
					redirect(base_url()."admin/userlist");

				}
				elseif(!empty($check_email) && !empty($check_mobile))
				{
					$data['email_error'] = "Email already exist";
					$data['mobile_error'] = "Mobile no already exist";
				}
				elseif(!empty($check_email))
				{
					$data['email_error'] = "Email already exist";
				}
				elseif(!empty($check_mobile))
				{
					$data['mobile_error'] = "Mobile no already exist";
				}
				else
				{
					$data['error'] = "Invalid details please try again";
				}

			}
			// die;
		}

		if(!empty($user_id))
		{
			$user_data = $this->AdminModel->getUserData($user_id);

			if(!empty($user_data))
			{
				$data["user_data"] = $user_data;
			}
			else
			{
				$this->session->set_flashdata('tour_error', __webtxt('Invalid user'));
				redirect(base_url()."admin/userlist");
			}
		}
		$data['userrole_data'] = $this->CommonModel->getWhereDataByOrder("userrole",array("status" => 1,'roleid !='=>1),"roleid","ASC");
		$this->load->view("admin/header");
		$this->load->view("admin/adduser",$data);
		$this->load->view("admin/footer");
	}

	public function userlist()
	{
		$user_list = $this->CommonModel->getWhereDataByOrder("users",array("userrole" => 2,"status !=" => 3),"id","DESC");
		//p($user_list);

		$data = array();
		$data["user_list"] = $user_list;

		$this->load->view("admin/header");
		$this->load->view("admin/userlist",$data);
		$this->load->view("admin/footer");
	}

	public function viewuser($id = false)
	{
		if(!empty($id))
		{
			$user_data = $this->AdminModel->getUserData($id);

			if(!empty($user_data))
			{
				
				$data = array();

				$data["user_data"] = $user_data;

				//p($user_data);

				$this->load->view("admin/header");
				$this->load->view("admin/viewuser",$data);
				$this->load->view("admin/footer");	
			}else
			{
				$this->session->set_flashdata('tour_error', __webtxt('Invalid user'));
				redirect(base_url()."admin/userlist");
			}
		}else
		{
			$this->session->set_flashdata('tour_error', __webtxt('Invalid user'));
			redirect(base_url()."admin/userlist");
		}		
	}


	
	/* Ajax Functions Start */

	public function changestatus()
	{
		if($this->input->is_ajax_request())
		{
			$data = $this->input->post();
			$tabname = $data["tabname"];
			$status = $data["status"];
			$id = $data["id"];
			$useract = $data["useract"];
			$userrole = $data["userrole"];

			$this->CommonModel->updateData($tabname,array("status" => $status),array("id" => $id));

			$msg = "";

			if($userrole == 2)
			{
				$msg = __webtxt("User ".$useract." successfully.");
			}else if($userrole == 3)
			{
				$msg = __webtxt("Tipper ".$useract." successfully.");
			}
			else if($userrole == "tour")
			{
				$msg = "Tour ".$useract." successfully.";
			}
			else if($userrole == "destination")
			{
				$msg = "Destination ".$useract." successfully.";
			}

			$res = array("success" => 1,"msg" => $msg);

			sendResponse($res);
		}
	}

	/* Ajax Functions End */

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}


	public function uploadImages($ImageName,$ImageType,$TempSrc,$ImageSize)
	{
		$ThumbSquareSize 		= 200; //Thumbnail will be 200x200
		$BigImageMaxSize 		= 1024; //Image Maximum height or width
		$ThumbPrefix			= "thumb_"; //Normal thumb Prefix
		$DestinationDirectory	= 'uploads/'; //Upload Directory ends with / (slash)
		$Quality 				= 60;

		// some information about image we need later.
		/*$ImageName = $img['tour_image']['name'];

		$ImageSize 		= $img['tour_image']['size'];

		$TempSrc	 	= $img['tour_image']['tmp_name'];

		$ImageType	 	= $img['tour_image']['type'];*/

		$processImage			= true;	

		$RandomNumber			= time().rand();  // We need same random name for both files.

		switch(strtolower($ImageType))
		{
			case 'image/png':
				$CreatedImage = imagecreatefrompng($TempSrc);
				break;

			case 'image/gif':
				$CreatedImage = imagecreatefromgif($TempSrc);
				break;

			case 'image/jpeg':

			case 'image/pjpeg':
				$CreatedImage = imagecreatefromjpeg($TempSrc);
				break;
			default:
				$processImage = false; //image format is not supported!
		}

		//get Image Size

		list($CurWidth,$CurHeight)=getimagesize($TempSrc);

		//Get file extension from Image name, this will be re-added after random name

		$Imagearray = explode(".", $ImageName);

		$ImageExt = array_pop($Imagearray);

		//Construct a new image name (with random number added) for our new image.
		$NewImageName = implode("_", $Imagearray)."_".$RandomNumber.'.'.$ImageExt;

		//Set the Destination Image path with Random Name
		$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumb name

		$DestRandImageName 			= $DestinationDirectory.$NewImageName; //Name for Big Image

		//Resize image to our Specified Size by calling resizeImage function.

		if($processImage && $this->resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))
		{
			return $NewImageName;
		}else{
			return false;
		}
	}

	public function uploadgalleryImages($ImageName,$ImageType,$TempSrc,$ImageSize)
	{
		$ThumbSquareSize 		= 200; //Thumbnail will be 200x200
		$BigImageMaxSize 		= 1024; //Image Maximum height or width
		$ThumbPrefix			= "thumb_"; //Normal thumb Prefix
		$DestinationDirectory	= 'uploads/gallery/'; //Upload Directory ends with / (slash)
		$Quality 				= 60;

		// some information about image we need later.
		/*$ImageName = $img['tour_image']['name'];

		$ImageSize 		= $img['tour_image']['size'];

		$TempSrc	 	= $img['tour_image']['tmp_name'];

		$ImageType	 	= $img['tour_image']['type'];*/

		$processImage			= true;	

		$RandomNumber			= time().rand();  // We need same random name for both files.

		switch(strtolower($ImageType))
		{
			case 'image/png':
				$CreatedImage = imagecreatefrompng($TempSrc);
				break;

			case 'image/gif':
				$CreatedImage = imagecreatefromgif($TempSrc);
				break;

			case 'image/jpeg':

			case 'image/pjpeg':
				$CreatedImage = imagecreatefromjpeg($TempSrc);
				break;
			default:
				$processImage = false; //image format is not supported!
		}

		//get Image Size

		list($CurWidth,$CurHeight)=getimagesize($TempSrc);

		//Get file extension from Image name, this will be re-added after random name

		$Imagearray = explode(".", $ImageName);

		$ImageExt = array_pop($Imagearray);

		//Construct a new image name (with random number added) for our new image.
		$NewImageName = implode("_", $Imagearray)."_".$RandomNumber.'.'.$ImageExt;

		//Set the Destination Image path with Random Name
		$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumb name

		$DestRandImageName 			= $DestinationDirectory.$NewImageName; //Name for Big Image

		//Resize image to our Specified Size by calling resizeImage function.

		if($processImage && $this->resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))
		{
			return $NewImageName;
		}else{
			return false;
		}
	}


	public function resizeImage($CurWidth,$CurHeight,$MaxSize,$DestFolder,$SrcImage,$Quality,$ImageType)
    {
    	//Check Image size is not 0
		if($CurWidth <= 0 || $CurHeight <= 0)
		{
				return false;

		}

		//Construct a proportional size of new image

		$ImageScale      	= min($MaxSize/$CurWidth, $MaxSize/$CurHeight); 

		$NewWidth  			= ceil($ImageScale*$CurWidth);

		$NewHeight 			= ceil($ImageScale*$CurHeight);

		

		if($CurWidth < $NewWidth || $CurHeight < $NewHeight)
		{
			$NewWidth = $CurWidth;
			$NewHeight = $CurHeight;

		}

		$NewCanves 	= imagecreatetruecolor($NewWidth, $NewHeight);

		// Resize Image

		if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight))

		{

			switch(strtolower($ImageType))

			{

				case 'image/png':

					imagepng($NewCanves,$DestFolder);

					break;

				case 'image/gif':

					imagegif($NewCanves,$DestFolder);

					break;			

				case 'image/jpeg':

				case 'image/pjpeg':

					imagejpeg($NewCanves,$DestFolder,$Quality);

					break;

				default:

					return false;

			}

		if(is_resource($NewCanves)) { 

	      imagedestroy($NewCanves); 

	    } 

		return true;

		}
	}

	public function createCode($table,$column_name)
	{

        $jc = ""; 

        $jay = createRandomCode();

        $js = $this->CommonModel->getSingleData($table,array($column_name => $jay));

        if(!empty($js))

        {

          $jc = $this->createCode($table,$column_name);

        }else

        {

          $jc = $jay;

        }

        return $jc;
    }

    public function common_settings()
	{
		$edata = array();
		// echo "hi";
		// die;
		if(isset($_POST['configure_common_settings']))
		{
		   
		   $filearray = array();
			if (isset($_FILES)) {
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value) {
			        //print_r($value['size']);
			        if($value['size'] > 0) {

			            $filearraydata = $this->uploadfile($key);
			            $filearray[$key] = $filearraydata;
			            
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
				//$post_data = $_POST+$filearray;
			}

			//print_r($filearray);
			/*Upload file end*/
			
			//creating query
			$query = "INSERT INTO `common_settings`
			(`option_name`, `option_value`)
			VALUES ";
			$query .= "('email','".$_POST['email']."' ),
			('address','".$_POST['address']."' ),
			('header1','".$_POST['header1']."' ),
			('address1','".$_POST['address1']."' ),
			('header2','".$_POST['header2']."' ),
			('address2','".$_POST['address2']."' ),
			('country','".$_POST['country']."' ),
			('state','".$_POST['state']."' ),
			('city','".$_POST['city']."' ),
			('mobile_no','".$_POST['mobile_no']."' ),
			('mobile_no1','".$_POST['mobile_no1']."' ),
			('mobile_no2','".$_POST['mobile_no2']."' ),
			('pincode','".$_POST['pincode']."' ),
			('web_url','".$_POST['web_url']."' ),
			('yt_url','".$_POST['yt_url']."' ),
			('facebook_url','".$_POST['facebook_url']."' ),
			('linkedin_url','".$_POST['linkedin_url']."' ),
			('instagram_url','".$_POST['instagram_url']."' ),
			('twitter_url','".$_POST['twitter_url']."' ),
			('popup_image_status','".trim($_POST['popup_image_status'])."' ),
			('site_title','".$_POST['site_title']."' ),
			('contact_description','".$_POST['contact_description']."' ),
			('information_description','".$_POST['information_description']."' ),
			('stay_in_touch_description','".$_POST['stay_in_touch_description']."' ),
			('scrolling_text','".$_POST['scrolling_text']."' ),
			('presentation_url','".$_POST['presentation_url']."' ),";
			
			if (isset($filearray['front_logo'])) {
				$query .= "('front_logo','".$filearray['front_logo']."' ),";
			}
			if (isset($filearray['footer_logo'])) {
				$query .= "('footer_logo','".$filearray['footer_logo']."' ),";
			}
			if (isset($filearray['login_background_image'])) {
				$query .= "('login_background_image','".$filearray['login_background_image']."' ),";
			}
			if (isset($filearray['backlogo'])) {
				$query .= "('backlogo','".$filearray['backlogo']."' ),";
			}
			if (isset($filearray['pop_image'])) {
				$query .= "('pop_image','".$filearray['pop_image']."' ),";
			}
			
			$query .="('pan_no','".$_POST['pan_no']."' ) ON DUPLICATE KEY UPDATE option_value=VALUES(option_value)";

			// echo $query;
			// die;
			//creating query end

			$response = $this->db->query($query);
			// echo $this->db->last_query();
			if ($response) {
				//$msg = array('status'=>1, 'msg'=>'Cofugration Successfully!');
				//echo json_encode($msg);
				$edata['SUCCESS'] = 'Configuring your system, please wait...!';
				}else{
				$edata['ERROR'] = 'Ops! Something went wrong...!';
			}
		}
		$this->load->view('admin/header');
		$this->load->view('admin/common_settings',$edata);
		$this->load->view('admin/footer');
	}

	function uploadfile($key)
	{
		$message = array();
		$data = array();
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

	public function gallery()
	{

		if(isset($_POST) && !empty($_POST)){
			//print_r($_FILES);
			// die;

			// print_r($_POST);
			// die;
			if(isset($_FILES['product_image'])){
				$filearray = array();
				$product_galary = $_FILES['product_image'];
				if(!empty($product_galary))
				{
					$dgl = array();
					foreach($product_galary["size"] as $x => $y)
					{
						if($y > 0)
						{
							$iname = $product_galary["name"][$x];
							$itype = $product_galary["type"][$x];
							$itmp_name = $product_galary["tmp_name"][$x];
							$isize = $y;
							// uploadgalleryImages($ImageName,$ImageType,$TempSrc,$ImageSize)
							if($dge = $this->uploadgalleryImages($iname,$itype,$itmp_name,$isize))
							{
								
								$jay = array();
								$jay["category"] = $_POST['category'];
								$jay["image"] = $dge;
								// echo $jay[] = $dge;
								// $jay["create_date"] = date('Y-m-d H:i:s');
								array_push($dgl, $jay);
							}
						}
					}

					if(!empty($dgl))
					{
						// print_r($dgl);
						// die;
						// $post_data['product_images'] = json_encode($jay);
						$this->CommonModel->insertMultiple("gallery",$dgl);
					}
				}
			}
			redirect(base_url()."admin/imagelist");

			// print_r($filearray);
			// die;
		}
		// $data = array();
		// $data['images'] = $this->CommonModel->getWhereData('gallery',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/gallery');
		$this->load->view('admin/footer');
	}
	public function change_status(){
        $tablename = $_POST['tablename'];
        $status = $_POST['status'];
        $id = $_POST['id'];
        $action = $_POST['action'];
        $whrcol = $_POST['whrcol'];
        $whrstatuscol = $_POST['whrstatuscol'];
        $res = $this->CommonModel->updateData($tablename, array($whrstatuscol=>$status), array($whrcol => $id));
        // $resp = array('code'=>SUCCESS,'message'=>'Record has been '.$action.'successfully');
        // echo json_encode($resp);
        $msg = array('status'=>1, 'msg'=>'Record has been '.$action.' successfully');
		echo json_encode($msg);
		exit();
    }

    public function delete(){
    	// print_r($_POST);
    	// die;
    	$tablename = $_POST['tablename'];
        $id = $_POST['id'];
        $action = $_POST['action'];
        $whrcol = $_POST['whrcol'];
    	$this->CommonModel->deleteData($tablename,array($whrcol => $id));
    	$msg = array('status'=>1, 'msg'=>'Record has been '.$action.' successfully');
		echo json_encode($msg);
		exit();
    }

    public function candidatelist()
    {
   	// print_r($filearray);
			// die;
		$data = array();
		$data['postjoblist'] = $this->CommonModel->getWhereData('applyforjob',$data);
		// print_r($postjoblist);
		// die;
		$this->load->view('admin/header');
		$this->load->view('admin/candidatelist',$data);
		$this->load->view('admin/footer');
    }
    
    public function candidate_detail($id)
    {
        //     print_r($id);
        // 	die;
    $y = base64_decode($id);
	$data['categorydata'] = $this->CommonModel->getSingleData('applyforjob',array('id'=>$y));
	
    // print_r($data);
    // die;
	$this->load->view('admin/header');
	$this->load->view('admin/candidate_detail',$data);
	$this->load->view('admin/footer');
    }

	public function studentlist()
    {
   	// print_r($filearray);
			// die;
		$data = array();
		$data['poststulist'] = $this->CommonModel->getWhereData('admissionform',$data);
		// print_r($postjoblist);
		// die;
		$this->load->view('admin/header');
		$this->load->view('admin/studentlist',$data);
		$this->load->view('admin/footer');
    }    

    public function student_detail($id)
    {
        //     print_r($id);
        // 	die;
    $y = base64_decode($id);
	$data['categorydata'] = $this->CommonModel->getSingleData('admissionform',array('id'=>$y));
	
    // print_r($data);
    // die;
	$this->load->view('admin/header');
	$this->load->view('admin/student_detail',$data);
	$this->load->view('admin/footer');
    }

    public function vacancy()
    {
    	
	$data = array();
	$data['postvacancy'] = $this->CommonModel->getWhereData('careervacancy',array(1=>1));
	$this->load->view('admin/header');
	$this->load->view('admin/vacancy',$data);
	$this->load->view('admin/footer');
    }

    public function addvacancy()
	{ 
		if(isset($_POST) && !empty($_POST))
    	{
    	$insert_data = array();
		$insert_data['designation'] = $_POST["designation"];
		$insert_data['description'] = $_POST["description"];
		$insert_data['experience'] = $_POST["experience"];
		$insert_data['salary'] = $_POST["salary"];
		$insert_data['location'] = $_POST["location"];
		$insert_data['department'] = $_POST["department"];
		$insert_data['create_date'] = date('Y-m-d h:i:s');
		$insert_data['end_date'] = $_POST["end_date"];
		$result = $this->CommonModel->addrecord('careervacancy',$insert_data);
		redirect(base_url()."admin/vacancy");
		
    	// print_r($insert_data);
    	// die;
    	}
		// echo "hi";
		$this->load->view('admin/header');
		$this->load->view('admin/addvacancy');
		$this->load->view('admin/footer');
	}

	public function contact()
	{
		$data = array();
		$data['postname'] = $this->CommonModel->getWhereData('contactlist',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/contact',$data);
		$this->load->view('admin/footer');
	}

	public function add_category()
    {
     	if(isset($_POST) && !empty($_POST))
    	{

    	$insert_data = array();
		$insert_data['name'] = $_POST["name"];
		$result = $this->CommonModel->addrecord('category',$insert_data);
		// print_r($_POST);
  //   	die;
   //  		{
			// 		echo "successfully upload";
			// }
		redirect(base_url()."admin/categorylist");
    	}

		
		//die;
      	$this->load->view("admin/header");
		$this->load->view("admin/add_cat");
		$this->load->view("admin/footer");
    }


	public function categorylist()
	{
		
		$data = array();
		$data['postlist'] = $this->CommonModel->getWhereData('category',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/categorylist',$data);
		$this->load->view('admin/footer');
	}

	public function changeStatus_text(){
        $tablename = $_POST['tablename'];
        $status = $_POST['status'];
        $id = $_POST['id'];
        $action = $_POST['action'];
        $whrcol = $_POST['whrcol'];
        $whrstatuscol = $_POST['whrstatuscol'];

        $res = $this->Common_model->updateRecords($tablename, array($whrstatuscol=>$status), array($whrcol => $id));

        // $resp = array('code'=>SUCCESS,'message'=>'Record has been '.$action.'successfully');
        // echo json_encode($resp);
        
        $msg = array('status'=>1, 'msg'=>'Record has been '.$action.' successfully');
		echo json_encode($msg);
		exit();
    }
    public function deleteRecord()   
    {
        $id = $_POST['id'];
        $colwhr = $_POST['colwhr'];
        $table = $_POST['table'];
      	$this->CommonModel->deleteData($table,array($colwhr=>$id));
      	$msg = array('status'=>1, 'msg'=>'Deleted successfully!');
		echo json_encode($msg);
		exit();
     	// redirect(base_url().'admin/Service_list', 'refresh');
    }

	public function imagelist()
	{
		// print_r();
		// die;
		// $imagelist = $this->CommonModel->getalldata("gallery");
        $data = array();
        $data['postlist'] = $this->CommonModel->getWhereData('category',array(1=>1));
		$data['imagelist'] = $this->CommonModel->getWhereData('gallery',array(1=>1));
		// print_r($imagelist);
		// die;
		$this->load->view('admin/header');
		$this->load->view('admin/imagelist',$data);
		$this->load->view('admin/footer');
	}

	public function createSlug($slug)
	{
		$lettersNumberSpacesHypens = '/[^\-\s\pN\pL]+/u' ;
		$SpacesDuplicateHypens = '/[\-\s]+/' ;
		$slug = preg_replace($lettersNumberSpacesHypens, '', $slug);
		$slug = preg_replace($SpacesDuplicateHypens, '-', $slug);

		return $slug;
	}

	public function addblog($bid=false)
	{
		$data =  array();
		if(isset($_POST) && !empty($_POST))
		{
			$insert_data = array();
			$insert_data['title'] = $_POST["title"];
			$insert_data['title_slug'] = $this->createSlug($_POST["title"]);
			$insert_data['editor1'] = $_POST["editor1"];
			$insert_data['auther_name'] = $_POST["auther_name"];
			$insert_data['meta_title'] = $_POST["meta_title"];
			$insert_data['meta_description'] = $_POST["meta_description"];
			
			if (isset($_FILES['blog_image']['name']) && !empty($_FILES['blog_image']['name'])) 
			{
				$path = './uploads/blogimage/';
			   $filearraydata = $this->uploadfilebypath('blog_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['image'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$res = $this->CommonModel->updateData('addblog', $insert_data, array('id' => $_POST['id']));
				$data['SUCCESS'] = "Blog has been updated successfully";
				redirect(base_url()."admin/blog");

			}else{
				$insert_data['create_date'] = date('Y-m-d h:i:s');
				$result = $this->CommonModel->addrecord('addblog',$insert_data);
				$data['SUCCESS'] = "Blog has been added successfully";
				redirect(base_url()."admin/blog");
			}    
				
		}
		if($bid){
			$blog_data = $this->CommonModel->getSingleData('addblog',array('id' => $bid));
			$data['blog_data'] = $blog_data;
		}
		// $result = $this->CommonModel->addrecord('blog',$insert_data);		
		$this->load->view('admin/header');
	 	$this->load->view('admin/addblog',$data);
	 	$this->load->view('admin/footer');
	}

	public function blog()
	{
		$data = array();
        $data['postbloglist'] = $this->CommonModel->getWhereData('addblog',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/blog',$data);
		$this->load->view('admin/footer');
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

	public function courses()
	{
		// print_r($_POST);
  //   	die;
		$data = array();
        $data['postfacilitylist'] = $this->CommonModel->getWhereData('courses',array(1=>1));
		// print_r($_POST);
  //   	die;
		$this->load->view('admin/header');
		$this->load->view('admin/courses',$data);
		$this->load->view('admin/footer');
	}

	public function addcourses($bid=false)
	{
		$data =  array();
		if(isset($_POST) && !empty($_POST))
		{
			$insert_data = array();
			$insert_data['title'] = $_POST["title"];
			$insert_data['url'] = $_POST["url"];
			$insert_data['url_slug'] = $this->createSlug($_POST["url"]);
			$insert_data['description'] = $_POST["description"];
			$insert_data['editor1'] = $_POST["editor1"];
			// $insert_data['auther_name'] = $_POST["auther_name"];
			
			if (isset($_FILES['facility_image']['name']) && !empty($_FILES['facility_image']['name'])) 
			{
				$path = './uploads/facilityimage/';
			   $filearraydata = $this->uploadfilebypath('facility_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['image'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			if(isset($_POST['id']) && !empty($_POST['id']))
			{
				$res = $this->CommonModel->updateData('courses', $insert_data, array('id' => $_POST['id']));
				$data['SUCCESS'] = "Courses has been updated successfully";
				redirect(base_url()."admin/courses");
			}
			else
			{
				$insert_data['create_date'] = date('Y-m-d h:i:s');
				$result = $this->CommonModel->addrecord('courses',$insert_data);
				$data['SUCCESS'] = "Courses has been added successfully";
				redirect(base_url()."admin/courses");
			}    
				
		}
		if($bid){
			$facility_data = $this->CommonModel->getSingleData('courses',array('id' => $bid));
			$data['facility_data'] = $facility_data;
		}
		// $result = $this->CommonModel->addrecord('blog',$insert_data);		
		$this->load->view('admin/header');
	 	$this->load->view('admin/addcourses',$data);
	 	$this->load->view('admin/footer');
	}

	public function team()
	{
		$data = array();
        $data['postteamlist'] = $this->CommonModel->getWhereData('team',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/team',$data);
		$this->load->view('admin/footer');
	}

	public function addteam($bid=false)
	{
		$data =  array();
		if(isset($_POST) && !empty($_POST))
		{
			$insert_data = array();
			$insert_data['name'] = $_POST["name"];
			$insert_data['designation'] = $_POST["designation"];
			if (isset($_FILES['team_image']['name']) && !empty($_FILES['team_image']['name'])) 
			{
				$path = './uploads/teamimage/';
			   $filearraydata = $this->uploadfilebypath('team_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['image'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$res = $this->CommonModel->updateData('team', $insert_data, array('id' => $_POST['id']));
				$data['SUCCESS'] = "Team has been updated successfully";

			}else{
				$insert_data['create_date'] = date('Y-m-d h:i:s');
				$result = $this->CommonModel->addrecord('team',$insert_data);
				$data['SUCCESS'] = "Team has been added successfully";
			}    
				
			// $result = $this->CommonModel->addrecord('addblog',$insert_data);
			// $data = array();
			// $data['postbloglist'] = $this->CommonModel->getWhereData('addblog',$data);	
		}
		if($bid){
			$team_data = $this->CommonModel->getSingleData('team',array('id' => $bid));
			$data['team_data'] = $team_data;
		}
		// $result = $this->CommonModel->addrecord('blog',$insert_data);		
		$this->load->view('admin/header');
	 	$this->load->view('admin/addteam',$data);
	 	$this->load->view('admin/footer');
	}

	public function video()
	{
		$data = array();
        $data['postvideolist'] = $this->CommonModel->getWhereData('video',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/video',$data);
		$this->load->view('admin/footer');
	}

	public function addvideo($bid=false)
	{
		$data =  array();
		if(isset($_POST) && !empty($_POST))
		{
			$insert_data = array();
			$insert_data['title'] = $_POST["title"];
			$insert_data['link'] = $_POST["link"];
			if (isset($_FILES['tutorial_video']['name']) && !empty($_FILES['tutorial_video']['name'])) 
			{
				$path = './uploads/video/';
			   $filearraydata = $this->uploadfilebypath('tutorial_video',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['video'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$res = $this->CommonModel->updateData('video', $insert_data, array('id' => $_POST['id']));
				$data['SUCCESS'] = "Video Link has been updated successfully";
				redirect(base_url()."admin/video");

			}else{
				$insert_data['create_date'] = date('Y-m-d h:i:s');
				$result = $this->CommonModel->addrecord('video',$insert_data);
				$data['SUCCESS'] = "Video Link has been added successfully";
				redirect(base_url()."admin/video");
			}    
		}
		if($bid){
			$tutorial_data = $this->CommonModel->getSingleData('video',array('id' => $bid));
			$data['tutorial_data'] = $tutorial_data;
		}
		// $result = $this->CommonModel->addrecord('blog',$insert_data);		
		$this->load->view('admin/header');
	 	$this->load->view('admin/addvideo',$data);
	 	$this->load->view('admin/footer');
	}

	public function testimonial()
	{
		$data = array();
        $data['posttestimoniallist'] = $this->CommonModel->getWhereData('testimonial',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/testimonial',$data);
		$this->load->view('admin/footer');
	}

	public function addtestimonial($bid=false)
	{
		$data =  array();
		if(isset($_POST) && !empty($_POST))
		{
			$insert_data = array();
			$insert_data['title'] = $_POST["title"];
			$insert_data['description'] = $_POST["description"];
			$insert_data['auther_name'] = $_POST["auther_name"];
			
			if (isset($_FILES['testimonial_image']['name']) && !empty($_FILES['testimonial_image']['name'])) 
			{
				$path = './uploads/testimonialimage/';
			   $filearraydata = $this->uploadfilebypath('testimonial_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['image'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			
			if (isset($_FILES['small_image']['name']) && !empty($_FILES['small_image']['name'])) 
				{
					$path = './uploads/testimonialimage/';
				   $filearraydata = $this->uploadfilebypath('small_image',$path);
		            // $filearray[$key] = $filearraydata;
		            $insert_data['small_image'] = $filearraydata;
				}   // die;
				            
				else
				{
				   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
				}
			
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$res = $this->CommonModel->updateData('testimonial', $insert_data, array('id' => $_POST['id']));
				$data['SUCCESS'] = "testimonial has been updated successfully";
				redirect(base_url()."admin/testimonial");

			}else{
				$insert_data['create_date'] = date('Y-m-d h:i:s');
				$result = $this->CommonModel->addrecord('testimonial',$insert_data);
				$data['SUCCESS'] = "testimonial has been added successfully";
				redirect(base_url()."admin/testimonial");
			}    
		}
		if($bid){
			$testimonial_data = $this->CommonModel->getSingleData('testimonial',array('id' => $bid));
			$data['testimonial_data'] = $testimonial_data;
		}
		// $result = $this->CommonModel->addrecord('blog',$insert_data);		
		$this->load->view('admin/header');
	 	$this->load->view('admin/addtestimonial',$data);
	 	$this->load->view('admin/footer');
	}
	
	public function email_subscriber_list()
	{
		$data = array();
        $data['postemailsubscriber'] = $this->CommonModel->getWhereData('email_subscriber',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/email_subscriber_list',$data);
		$this->load->view('admin/footer');
	}
	
	public function slider_image()
	{
		
		$data = array();
        $data['postsliderimage'] = $this->CommonModel->getWhereData('slider_image',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/slider_image',$data);
		$this->load->view('admin/footer');
	}
	
	public function add_slider_image($bid=false)
	{
		
		$data = array();
		if(isset($_POST) && !empty($_POST))
		{
			$insert_data = array();
			
			// print_r($_POST);
   //  		die;
			if (isset($_FILES['slider_image']['name']) && !empty($_FILES['slider_image']['name'])) 
			{
				$path = './uploads/sliderimage/';
			   $filearraydata = $this->uploadfilebypath('slider_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['image'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			
			if (isset($_FILES['small_image']['name']) && !empty($_FILES['small_image']['name'])) 
			{
				$path = './uploads/sliderimage/';
			   $filearraydata = $this->uploadfilebypath('small_image',$path);
	            // $filearray[$key] = $filearraydata;
	            $insert_data['small_image'] = $filearraydata;
			}   // die;
			            
			else
			{
			   $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			}
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$res = $this->CommonModel->updateData('slider_image', $insert_data, array('id' => $_POST['id']));
				$data['SUCCESS'] = "Slider Image has been updated successfully";
				redirect(base_url()."admin/slider_image");

			}else{
				
				$result = $this->CommonModel->addrecord('slider_image',$insert_data);
				$data['SUCCESS'] = "Slider Image has been added successfully";
				redirect(base_url()."admin/slider_image");
			}    
		}
		if($bid){
			$slider_data = $this->CommonModel->getSingleData('slider_image',array('id' => $bid));
			$data['slider_data'] = $slider_data;
		}
		// print_r($slider_data);
  //   	die;
		$this->load->view('admin/header');
		$this->load->view('admin/add_slider_image',$data);
		$this->load->view('admin/footer');
	}
	
	public function registration()
	{
		$data = array();
        $data['postregistrationlist'] = $this->CommonModel->getWhereData('registration',array(1=>1));
		$this->load->view('admin/header');
		$this->load->view('admin/registration',$data);
		$this->load->view('admin/footer');
	}
}
