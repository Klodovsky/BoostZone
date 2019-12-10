<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donator_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}
	Public function get_all_donators(){
				$where =array('u.role_id'=>2); 
				$this->db->select('u.first_name,u.last_name,u.email,u.status,u.mobile_no,u.id');
				if(!empty($_POST['keyword'])){
					$keyword = $_POST['keyword'];
					$this->db->like('u.first_name',$keyword);			
					$this->db->or_like('u.last_name',$keyword);			
					$this->db->or_like('u.email',$keyword);			
					}
				 return $this->db->get_where('users u',$where)->result_array();
	}



}

/* End of file  */
/* Location: ./application/models/ */