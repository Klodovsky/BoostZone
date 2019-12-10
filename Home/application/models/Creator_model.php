<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creator_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	Public function get_all_creators(){

		//echo '<pre>'; print_r($_POST);
		if(!empty($_POST['keyword'])){
			$keyword = $_POST['keyword'];

			$sql ="SELECT u.id, u.first_name, u.last_name, u.email, m.name, u.status, m.year, m.description, b.bank_name, b.account_no, b.ifsc_code FROM users u
			 LEFT JOIN media_details m ON m.user_id = u.id
			 LEFT JOIN bank_details b ON b.user_id = u.id
			  WHERE 
			  (
			  	 u.first_name LIKE '%$keyword%' OR
			   	u.last_name LIKE '%$keyword%' OR
			    u.email LIKE '%$keyword%' OR 
			    m.name LIKE '%$keyword%'OR
			    m.year LIKE '%$keyword%' OR
				m.description LIKE '%$keyword%' OR
				b.bank_name LIKE '%$keyword%' OR
				b.account_no LIKE '%$keyword%' OR
				b.ifsc_code  LIKE '%$keyword%' 
)
			     AND u.role_id = 3";	 	
		}else{
			$sql ="SELECT u.id, u.first_name, u.last_name, u.email, m.name, u.status, m.year, m.description, b.bank_name, b.account_no, b.ifsc_code FROM users u
			 LEFT JOIN media_details m ON m.user_id = u.id
			 LEFT JOIN bank_details b ON b.user_id = u.id

			  WHERE  u.role_id = 3";	 	
		}

		return $this->db->query($sql)->result_array();
	}
	public function get_creator_data(){
		$user_id = base64_decode($this->uri->segment(3));
		$where=array('u.status'=>1,'id'=>$user_id);
		return $this->db
		->join('media_details m','u.id = m.user_id','left')
		->join('bank_details b','u.id = b.user_id','left')
		->get_where('users u',$where)->row_array();	
	}
}

/* End of file  */
/* Location: ./application/models/ */