<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		$this->load->model('Category_model','category');
		if(!is_logged_in()){
			redirect('login');
		}elseif (is_logged_in() && !get_role()) {
			redirect('get_role');
		}
	}

	public function index()
	{

		$data['category'] = $this->category->get_category();
		$data['title'] = 'Category';
		render_page('category',$data);	
	}
	Public function update_category(){


		$this->db->delete('user_category',array('user_id'=>$this->user_id));

		if(!empty($_POST)){
			for ($i=0; $i <count($_POST['category_id']) ; $i++) { 
				$data = array(
					'category_id' =>$_POST['category_id'][$i],
					'user_id' =>$this->user_id,
					'created_on'=>date('Y-m-d h:i:s')
						 );
				$this->db->insert('user_category',$data);
			}
		}

		redirect('dashboard');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */