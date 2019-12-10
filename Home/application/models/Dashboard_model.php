<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		
	}

	Public function get_total_paid(){

		$where = array('p.donator_id' => $this->user_id );
		return $this->db
					->join('media_details m','p.creator_id = m.user_id','left')
					->get_where('payment_details p',$where)->result_array();
	}Public function get_recent_donated($user_id){

		$where = array('p.creator_id' => $user_id );
		return $this->db
					->join('media_details m','p.creator_id = m.user_id','left')
					->join('users u','p.donator_id = u.id','left')
					->get_where('payment_details p',$where)->result_array();
	}
	Public function get_total_amount(){

		return $this->db->select('SUM(amount) as amount')						
						->get('payment_details ')
						->row_array();
	}

	Public function get_user_category($user_id){

		$where = array('u.user_id'=>$user_id);
		return $this->db			
			->join('user_category u','u.category_id = c.category_id')
			->get_where('category_details c',$where)
			->result_array();
	}

	Public function get_total_likes($user_id){
		$where =  array( 'l.donator_id' =>$user_id );		
		return $this->db->join('media_details m','m.user_id = l.creator_id')
			->get_where('like_details l',$where)->result_array();
	}
	Public function get_videos($type,$user_id){
		$where =  array('user_id' =>$user_id);
		if(!empty($type)){
			$where +=array('type' => $type);
		}
		return $this->db->get_where('video_details',$where)->result_array();
	}
	Public function get_medias($limit){
		$where =  array('u.status' =>1,'u.role_id'=>3);
		 $this->db->join('media_details m','u.id =m.user_id','left');
		 $this->db->order_by('u.id','desc');
		 if(!empty($limit)){
		 	$this->db->limit($limit);
		 }
		return $this->db->get_where('users u',$where)->result_array();
	}
	Public function get_new_user_count($role){
		$where =  array('status'=>1);
		if($role == 1){
			$where +=array('u.role_id!='=>1); 
		}elseif($role == 2){
			$where +=array('u.role_id'=>$role); 
		}elseif($role == 3){
			$where +=array('u.role_id'=>$role); 
		}
		
		return $this->db->get_where('users u',$where)->result_array();
	}

}

/* End of file  */
/* Location: ./application/models/ */