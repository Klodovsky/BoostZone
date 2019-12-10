<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!is_logged_in()){
			redirect('login');
		}
		$this->load->model('role_model','role');
	}

	public function index()
	{
		if(!empty($this->session->userdata('role_id'))){
			$role = $this->session->userdata('role_id');
			$this->role->update_role($role);
			redirect('dashboard');	
		}
		$data['role'] = $this->role->get_all_roles();
		$data['title'] = 'User Role';
		$this->load->view('includes/header',$data);	
		$this->load->view('get_role',$data);
			
	}
	Public function set_role(){
		$role = $_POST['role'];
		$this->role->update_role($role);
		echo success_response('Role updated!');
		
	}

}

/* End of file  */
/* Location: ./application/controllers/ */