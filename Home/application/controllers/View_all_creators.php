<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_all_creators extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','home');
	}

	public function index()
	{
		$data['title'] = 'View all Creators';
		$this->load->view('includes/header',$data);
		$this->load->view('creators');
		$this->load->view('includes/footer');
	}

	public function videos(){
		$data['creators'] = $this->home->get_creator_by_type();
		$data['title'] = 'Videos';
		$this->load->view('includes/header',$data);
		$this->load->view('videos');
		$this->load->view('includes/footer');	
	}
	public function get_media(){
		$category = $this->uri->segment(3);
		 $type = $this->uri->segment(4);
		$result = array();
	$data = $this->home->get_channels_by_id($_POST['media_id']);
	$result['media'] = $data;
	$result['videos'] = $this->db
								->where('v.user_id',$data[0]['user_id'])
								->where('c.name',$category)
								->where('v.type',$type)
								->join('category_details c','c.category_id = v.category_id')
								->get('video_details v')
								->result_array();
	echo json_encode($result);
	}
}

/* End of file  */
/* Location: ./application/controllers/ */