<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');	
	}
	public function get_category(){
		$where = array('user_id'=>$this->user_id);
		return $this->db
					->select('category_id')
					->get_where('user_category',$where)->result_array();
	}


}

/* End of file  */
/* Location: ./application/models/ */