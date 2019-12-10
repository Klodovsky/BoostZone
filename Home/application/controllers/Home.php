<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','home');
	}

	public function index()
	{
		$data['channel'] = $this->home->get_channels();
		$data['title'] = 'Home';
		$this->load->view('includes/header',$data);
		$this->load->view('home');
		$this->load->view('includes/footer');
	}
	public function send_mail(){

		$data['name'] = $name = !empty($_POST['name'])?$_POST['name']:'-';
		$data['from'] = $from = !empty($_POST['email'])?$_POST['email']:'-';
		$data['to'] = $to = 'contact@BoostZone.com';
		//$data['to'] = $to = 'eboominathan@gmail.com';
		$data['phone'] = $phone = !empty($_POST['phone'])?$_POST['phone']:'-';
		$data['subject'] = $subject = !empty($_POST['subject'])?$_POST['subject']:'-';
		$data['message'] = $message = !empty($_POST['message'])?$_POST['message']:'-';
		$data['created'] = date('Y-m-d H:i:s');
		$this->db->insert('mail_details',$data);

		$member_headers  = "From: ".$name.$from."\r\n";
	    $member_headers .= "Reply-To: ".$from."\r\n";   
	    $member_headers .= "MIME-Version: 1.0\r\n";
	    $member_headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
	    $member_headers .= "X-Priority: 1\r\n";
		 mail($to, $subject, $message, $member_headers);
		$this->session->set_flashdata('message','Mail sent successfully!');
		redirect('contact');

	}
	public function add_subscribtion(){

			
		$from = $_POST['email'];
		$to = 'contact@BoostZone.com';
		$this->db->insert('subscribtion_details',array('email'=>$to));
		$member_headers  = "From: ".$from."\r\n";
	    $member_headers .= "Reply-To: ".$from."\r\n";   
	    $member_headers .= "MIME-Version: 1.0\r\n";
	    $member_headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
	    $member_headers .= "X-Priority: 1\r\n";
		 mail($to, 'New Subcription','Test Mail for Subscriber', $member_headers);
		$this->session->set_flashdata('message','Mail sent successfully!');
		redirect('about-us');
	}
	public function get_media(){
		$result = array();
		$data = $this->home->get_channels_by_id($_POST['media_id']);
		$result['media'] = $data;
		$result['videos'] = $this->db->limit(3)
		->order_by('video_id','desc')
		->get_where('video_details',array('user_id'=>$data[0]['user_id']))
		->result_array();

		if(!empty($this->session->userdata('user_id'))){
			$result['liked'] = $this->db
			->get_where('like_details',array('creator_id'=>$data[0]['user_id'],'donator_id'=>$this->session->userdata('user_id'),'status' => 1))
			->num_rows();
		}else{
			$result['liked'] = 0;
		}

		echo json_encode($result);
	}
	public function about_us()
	{
		$data['title'] = 'About us';
		$this->load->view('includes/header',$data);
		$this->load->view('about_us');
	}
	public function contact()
	{
		$data['title'] = 'Contact';
		$this->load->view('includes/header',$data);
		$this->load->view('contact');
	}
	public function error(){
		$data['title'] = 'Page Not Found';
		$this->load->view('error',$data);	
	}
	Public function get_creator(){

		$json = array();
		 $keyword = $_POST['keyword'];
		 $sql = "SELECT m.name,u.first_name,u.last_name,m.user_id
		FROM `media_details` `m`
		LEFT JOIN `users` `u` ON `u`.`id` = `m`.`user_id`
		WHERE ( u.first_name LIKE '%$keyword%'  OR u.last_name LIKE '%$keyword%'  OR m.name LIKE '%$keyword%') AND `m`.`status` = 1 AND `u`.`status` = 1
		ORDER BY `m`.`media_id` DESC";

		$data =  $this->db->query($sql)->result_array();
	
		if(!empty($data)){
			foreach($data as $d){
				$res['first_name'] = $d['first_name']; 
				$res['last_name'] = $d['last_name'];
				$res['name'] = !empty($d['name'])?$d['name']:'-'; 
				$res['url'] = base_url().'view_all_creators/videos/zxcvb/bvxz/'.base64_encode($d['user_id']); 
				$json[]=$res;
			}
		}
		echo json_encode($json);
	
	}
	

}

