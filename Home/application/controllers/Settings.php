<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model','login');
		$this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{
		$data['title'] = 'Settings';
		render_page('settings',$data);
	}
	public function update_profile(){


		$data = array();
		$config['upload_path']   = './uploads/profile';
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);

		if($this->upload->do_upload('picture')){	
		$file_name = $this->upload->data('full_path');
		$data +=array('picture' => $file_name);			

		}		

		 $result = $this->check_email_exist($_POST['email']);
		 $data += array(
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
				'mobile_no' => $_POST['mobile_no']
			);	

			$this->db->update('users',$data,array('id'=>$this->user_id));
			$this->session->set_flashdata('message', 'Profile updated successfully !');
			redirect('settings');
	}

	Public function check_email_exist($email){
		$id = $this->session->userdata('user_id');
		$where = array('id !='=>$id,'email'=>$email,'status'=>1);
		return $this->db->get_where('users',$where)->num_rows();
	}

}

/* End of file  */
/* Location: ./application/controllers/ */