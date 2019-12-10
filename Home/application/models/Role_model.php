<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}
	Public function get_all_roles(){
		$where = array('role_id !='=>1);
		return $this->db->get_where('user_roles',$where)->result_array();
	}
	Public function update_role($role){
		$userdata =array();
		if($role == 2){
			$userdata +=array('role_name'=>'influencer');
		}
		elseif($role == 3){
			$userdata +=array('role_name'=>'creator');			
		}
		$userdata +=array('role'=>$role);
		$this->session->set_userdata($userdata);
		$user_id = $this->session->userdata('user_id');
		$data = array('role_id' =>$role);
		$where = array('id' =>$user_id);
		return $this->db->update('users',$data,$where);
	}

}

/* End of file  */
/* Location: ./application/models/ */