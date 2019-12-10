<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_channels(){
		$ids = array();
		$data  = $this->db->get_where('admin_favour',array('status'=>1))->result_array();

		if(!empty($data)){
			foreach ($data as $d) {

				$ids[]=$d['user_id'];
				}
		}
		
		$where = array('m.status'=>1,'u.status'=>1);
				if(!empty($ids)){
					$this->db->where_in('u.id',$ids);				
					}
				$this->db->limit(6);
				$this->db->order_by('m.media_id','desc');
				$this->db->join('users u','u.id = m.user_id','left');
		return 	$this->db->get_where('media_details m',$where)->result_array();
	}
	public function get_channels_by_id($media_id){

		$where = array('m.status'=>1,'m.media_id'=>$media_id);
		return $this->db
						->limit(6)
						->order_by('m.media_id','desc')
						->join('users u','u.id = m.user_id','left')
						->get_where('media_details m',$where)
						->result_array();
	}
	public function get_creator_by_type(){

		 $user_id = $this->uri->segment(5);
		 if(!empty($user_id)){
			 $user_id = base64_decode($user_id);
			 $where = array('m.status' => 1,'u.id'=>$user_id);
			 return $this->db->select('m.*,u.*')		 				
						->order_by('m.media_id','desc')
						->join('users u','u.id = m.user_id','left')						
						->get_where('media_details m',$where)
						->result_array();
		 }else{
				$category = $this->uri->segment(3);
				$type = $this->uri->segment(4);
				$where = array('m.status' => 1,'v.type'=>$type,'c.category_id'=>$category );
				return $this->db->select('m.*,u.*')		 				
						->order_by('m.media_id','desc')
						->join('users u','u.id = m.user_id','left')
						->join('video_details v','v.user_id = u.id','left')
						->join('category_details c','c.category_id = v.category_id','left')
						->get_where('media_details m',$where)
						->result_array();
		 }		 
		 
	

	}

}

/* End of file  */
/* Location: ./application/models/ */