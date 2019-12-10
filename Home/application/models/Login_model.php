<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	Public function check_login(){
		$where = array(
			'email'=>$_POST['email'],
			'password' => $_POST['password'],
			'status'=>1
			);
			return $this->db->get_where('users',$where)->row_array();
	}
	Public function check_email_exist($email){
		$where = array('email'=>$email,'status'=>1);
		$result = $this->db->get_where('users',$where)->num_rows();
		if($result == 0 ){
			return true;
		}else{
			return false;
		}
	}
	Public function add_user($userdata){
		$userdata +=array(
			'created' => date('Y-m-d H:i:s'),
			'modified' => date('Y-m-d H:i:s')
		);
		$this->db->insert('users',$userdata);
		$user_id = $this->db->insert_id();
		$this->session->set_userdata(array('user_id'=>$user_id));
		return ($this->db->affected_rows())?false:true;
	}
	Public function get_user($email){
		$result = array();
		$where = array('email'=>$email,'status'=>1);
		$result = $this->db->get_where('users',$where)->row_array();
		$result +=array('is_logged_in' => true,'user_id'=>$result['id']);
		$this->session->set_userdata( $result );
		return $result;
	}

}

/* End of file  */
/* Location: ./application/models/ */