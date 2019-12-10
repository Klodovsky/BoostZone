<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function check_category(){

		$result = $this->db->get_where('user_category',array('user_id'=>$this->user_id))->num_rows();
		if($result == 0){
			redirect('category');
		}
	}

	public function index()
	{

		if(is_creator()){
			$this->check_category();
			$data['category'] = $this->dashboard->get_user_category($this->user_id);
			$data['videos'] = $this->dashboard->get_videos(null,$this->user_id);
			$data['youtube'] = $this->dashboard->get_videos('youtube',$this->user_id);
			$data['twitter'] = $this->dashboard->get_videos('twitter',$this->user_id);
			$data['instagram'] = $this->dashboard->get_videos('instagram',$this->user_id);
			$data['tiktok'] = $this->dashboard->get_videos('tiktok',$this->user_id);
			$data['expo'] = $this->dashboard->get_videos('expo',$this->user_id);
			$data['soundcloud'] = $this->dashboard->get_videos('soundcloud',$this->user_id);
			$data['donated'] = $this->dashboard->get_recent_donated($this->user_id);
		//	echo '<pre>'; print_r($data);exit;
		}	
		if(is_admin()){
			$data['new_users'] = $this->dashboard->get_new_user_count(1);
			$data['influencers'] = $this->dashboard->get_new_user_count(2);
			$data['creators'] = $this->dashboard->get_new_user_count(3);
			$data['get_medias'] = $this->dashboard->get_medias(5);
			$data['donated'] = $this->dashboard->get_total_amount();
		}	
		if(is_donator()){
			$data['donated'] = $this->dashboard->get_total_paid();
			$data['likes'] = $this->dashboard->get_total_likes($this->user_id);
		}
		//echo '<pre>'; print_r($data);exit;
		$data['title'] = 'Dashboard';
		render_page('dashboard',$data);		
	}
	public function update_profile(){		
		$where = array('user_id' => $this->user_id);
		/* Bank Details */
		if(!empty($_POST['bank_name'])){
			$data = check_exist_data('bank_details',$where);
			$bank_data = array(
				'user_id' => $this->user_id,
				'bank_name' => !empty($_POST['bank_name'])?$_POST['bank_name']:'',
				'account_no' => !empty($_POST['account_no'])?$_POST['account_no']:'',
				'ifsc_code' => !empty($_POST['ifsc_code'])?$_POST['ifsc_code']:''
			);
			if(empty($data)){			
				$this->db->insert('bank_details',$bank_data);
			}else{
				$this->db->update('bank_details',$bank_data,$where);
			}
		}
		/* Media Details */

		$data = check_exist_data('media_details',$where);
		$media_data = array(
			'user_id' => $this->user_id,
			'name' => !empty($_POST['channel_name'])?$_POST['channel_name']:'',
			'type' => !empty($_POST['type'])?$_POST['type']:'',
			'year' => !empty($_POST['year'])?$_POST['year']:'0000-00-00',
			'description' => !empty($_POST['description'])?$_POST['description']:''
		);
		if(empty($data)){			
			$this->db->insert('media_details',$media_data);
		}else{
			$this->db->update('media_details',$media_data,$where);
		}

		if(!empty($_POST['password'])){
			$this->db->update('users',array('password'=>$_POST['password']),array('id'=>$this->user_id));
		}
		$userdata = array(
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'mobile_no'=>$_POST['mobile_no']
	);
			$this->db->update('users',$userdata,array('id'=>$this->user_id));			
			$this->session->set_userdata( $userdata );		
		$this->session->set_flashdata('message', 'Profile Details updated successfully!');
		redirect('dashboard');
	}

	Public function delete_video($video_id){
		$this->db->delete('video_details',array('video_id'=>$video_id));
		$this->session->set_flashdata('message', 'Video deleted successfully!');
		redirect('dashboard');
	}
		
		Public function add_video(){



			if(!empty($_POST['videos'])){
				//$this->db->delete('video_details',array('type'=>$_POST['type'],'user_id'=>$this->user_id));
				for ($i=0; $i <count($_POST['videos']) ; $i++) { 
					if(!empty($_POST['videos'][$i])){
					$data = array(
						'video_url' => $_POST['videos'][$i],
						'category_id' => !empty($_POST['category_id'][$i])?$_POST['category_id'][$i]:9,
						'type' => $_POST['type'],
						'user_id' => $this->user_id,
						'created' => date('Y-m-d H:i:s')
					);

					if(empty($_POST['hidden_id'])){
					$this->db->insert('video_details',$data);		
					}else{
					$this->db->update('video_details',$data,array('video_id' => $_POST['hidden_id']));	
					}					
				}
				
			}
			$this->session->set_flashdata('message', 'Videos added successfully!');
				redirect('dashboard');
				
			}else{
				$this->session->set_flashdata('message1', 'Enter atleast one video url to add!');
				redirect('dashboard');
			}
		}
		public function delete_user(){
			$this->db->delete('users',array('id'=>$_POST['id']));
			echo json_encode(array('status'=>true));
		}
		public function set_status(){
			$this->db->update('users',array('status'=>$_POST['status']),array('id'=>$_POST['id']));
			echo json_encode(array('status'=>true));
		}
}

/* End of file  */
/* Location: ./application/controllers/ */