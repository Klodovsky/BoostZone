<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','login');
		// Load google oauth library
        $this->load->library('googleplus');
	}

public	function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
	
	public function send_password()
	{
		$where = array('status' =>1,'email'=>$_POST['email']);
		$data = $this->db->get_where('users',$where)->row_array();

			if(empty($data)){
				$this->session->set_flashdata('message1', 'Email address not registered yet!');
				redirect('forgot-password','refresh');
			}else{
				$password = $data['password'];
				if($password == ''){
					$password = $this->randomPassword();
					$where = array('status' =>1,'email'=>$_POST['email']);
					$this->db->update('users',array('password'=>$password),$where);
				}
				$message = 'Hi, Your Password is '.$password;
				$this->load->library('email');			
				$this->email->from('admin@Boostzone.com', 'Admin');
				$this->email->to($data['email']);
				$this->email->subject('Recovery of your Password!');
				$this->email->message($message);			
				$this->email->send();
				$this->session->set_flashdata('message', 'Password sent to your mail id!');
				redirect('forgot-password','refresh');
			}
	}
	public function forgot_password()
	{
		$data['title'] = 'Forgot Password';
		$this->load->view('forgot_password',$data);
	}
	public function index()
	{
		if(is_logged_in()){
			redirect('dashboard');
		}
		$data['google_login_url'] = $this->googleplus->loginURL();
		$data['title'] = 'Login';
		$this->load->view('login',$data);
	}	
	Public function check_login(){
		$result = $this->login->check_login();
		if(!empty($result)){
			$user_data['user_id'] = $result['id'];
			$user_data['first_name'] = $result['first_name'];
		    $user_data['last_name'] = $result['last_name'];
		    $user_data['email'] = $result['email'];
		    $user_data['picture'] = $result['picture'];
		    $user_data['oauth_provider'] = 'web';
		    $user_data['role'] = $result['role_id'];
		    $user_data['role_name'] = $this->get_role_name($result['role_id']);
		    $user_data['is_logged_in'] = true;
		    $this->session->set_userdata( $user_data );
		    redirect('dashboard');
		}else{
			$this->session->set_flashdata('message1', 'Wrong Username or password');
			redirect('login');
		}

	}
	public function register()
	{
		if(is_logged_in()){
			redirect('dashboard');
		}
		$user_data = array();
		if(isset($_GET['code'])){
		// Authenticate user with google
		if($this->googleplus->getAuthenticate()){ 
		    // Get user info from google
		    $getInfo = $this->googleplus->getUserInfo();

		   //  		echo '<pre>';
		   //  		print_r($getInfo);
					// exit;
	
			$user_data['first_name'] = !empty($getInfo['given_name'])?$getInfo['given_name']:'given_name';
			$user_data['last_name'] = !empty($getInfo['family_name'])?$getInfo['family_name']:'family_name';
			$user_data['email'] = !empty($getInfo['email'])?$getInfo['email']:'email';
			//$user_data['picture'] = !empty($getInfo['picture'])?$getInfo['picture']:'picture';
			$user_data['picture'] = '';
			$user_data['oauth_provider'] = 'google';
			$user_data['status'] = 1;					

		    	$result = $this->check_email_exist($getInfo['email']);
		    	if($result == true){
		    		$this->login->add_user($user_data);		    		
		    		$user_data +=array('is_logged_in'=>true);
		    		$this->session->set_userdata( $user_data );
		    		redirect('dashboard');

		    	}else{
					$this->login->get_user($getInfo['email']);					
		    		redirect('dashboard');		    		
		    		// $this->session->set_flashdata('message1', 'Email ID already exist !');
		    		// redirect('register');	
		    	}
			}
		}

		$data['google_login_url'] = $this->googleplus->loginURL();
		$data['title'] = 'Register';
		$this->load->view('register',$data);
	}

	Public function register_new_user(){		
		$email = $_POST['email'];
		$result =  $this->check_email_exist($email);
		if(empty($result)){
			$this->session->set_flashdata('message1', 'Email Id Already Exist!');
			redirect('register');
			
		}else{

			//$role = $this->session->userdata('register_role');
			$datas = array(
				'email' => $_POST['email'],
				'password' => $_POST['password'],	
				'picture' => base_url().'assets/images/default-avatar.png',		
				'created' => date('Y-m-d H:i:s'),
				'status'=>1
			);
			$this->db->insert('users',$datas);
			$user_id = $this->db->insert_id();
			$user_data['user_id'] = $user_id;
			$user_data['first_name'] ='';
		    $user_data['last_name'] = '';
		    $user_data['email'] = $_POST['email'];
		    $user_data['picture'] = base_url().'assets/images/default-avatar.png';
		    $user_data['oauth_provider'] = 'web';
		    // $user_data['role'] = $role;
		    // $user_data['role_name'] = $this->get_role_name($role);
		    $user_data['is_logged_in'] = true;
		    $this->session->set_userdata( $user_data );
		    redirect('dashboard');

			// $status = base64_encode(1);
			// $data['url'] = base_url().'verify-mail/'.base64_encode($email).'/'.$status;
			// $message = $this->load->view('welcome_mail', $data,TRUE);
			// $this->load->library('email');			
			// $this->email->from('admin@Boostzone.com', 'Admin');
			// $this->email->to($email);
			// $this->email->subject('Welcome to Boostzone!');
			// $this->email->message($message);			
			// $this->email->send();			
			// echo $this->email->print_debugger();
			// $this->session->set_flashdata('message', 'Check your mail to activate your account!');
			// redirect('register');
		}
	}

	Public function verify_mail(){
		$password = $this->generate_password();
		$email = base64_decode($this->uri->segment(2));
		$result = $this->check_email_exist($email);

		if(empty($result)){
			$this->session->set_flashdata('message1', 'Email ID already activated! Login with your Password');
			redirect('register');
			
		}else{


		$data = array('email' =>$email,'password' => $password,
					'created'=>date('Y-m-d H:i:s'),'modified'=>date('Y-m-d H:i:s'),
					'status'=>1
					);
		$this->db->insert('users',$data);
		$user_id = $this->db->insert_id();
		$user_data = $this->db->get_where('users',$where)->row_array();
		$user_data +=array('is_logged_in'=>TRUE,'user_id'=>$user_id);
		$this->session->set_userdata($user_data);
		$data['password'] = $password;
		$message = $this->load->view('password_mail', $data,TRUE);
		$this->load->library('email');			
		$this->email->from('admin@Boostzone.com', 'Admin');
		$this->email->to($email);
		$this->email->subject('Welcome to Boostzone!');
		$this->email->message($message);			
		$this->email->send();
		redirect('dashboard');
	}
	}
	Public function generate_password($length = 8){

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}

	Public function check_email_exist($email=null){
		return  $this->login->check_email_exist($email);
	}
	Public function logout(){
		$session_data = array('google_user_type',
				'first_name',
				'last_name',
				'email',
				'picture',
				'oauth_provider',
				'is_logged_in',
				'role',
				'role_id',
				'role_name',
				'user_id'
			);
		$this->session->unset_userdata($session_data);
		$this->session->set_flashdata('message', 'Logged out!');
		//echo '<pre>'; print_r($this->session->all_userdata());
		redirect('login');
	}
	Public function get_role_name($role_id){
		$data = $this->db->get_where('user_roles',array('role_id'=>$role_id))->row();
		if(!empty($data)){
			return $data->name;
		}else{
			return null;
		}
	}
}
