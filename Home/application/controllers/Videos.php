<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Videos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			if(!is_logged_in()){
			redirect('login');
		}elseif (is_logged_in() && !get_role()) {
			redirect('get_role');
		}
		$this->user_id = $this->session->userdata('user_id');
		$this->load->model('dashboard_model','dashboard');
	}

	public function index()
	{
		if(is_creator()){
			$this->check_category();
			$data['category'] = $this->dashboard->get_user_category();
			$data['videos'] = $this->dashboard->get_videos();
			//echo '<pre>'; print_r($data);exit;
		}else{
			redirect('dashboard');
		}	
		$data['title'] = 'My Videos';
		render_page('videos',$data);		
	}

	public function check_category(){

		$result = $this->db->get_where('user_category',array('user_id'=>$this->user_id))->num_rows();
		if($result == 0){
			redirect('category');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */