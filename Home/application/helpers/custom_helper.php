<?php 
/* Logged in checking */
if (!function_exists('is_logged_in')) {
	function is_logged_in(){
		$CI =& get_instance();
		return $CI->session->userdata('is_logged_in');
	}	
}
/* Get role id */
if (!function_exists('get_role')) {
	function get_role(){
		$CI =& get_instance();
		return $CI->session->userdata('role');
	}	
}
/* Get Userdata */
if (!function_exists('get_userdata')) {
	function get_userdata(){
		$CI =& get_instance();
		$user_id = $CI->session->userdata('user_id');
		return $CI->db
					->join('media_details m','u.id = m.user_id','left')
					->join('bank_details b','u.id = b.user_id','left')
					->get_where('users u',array('u.id'=>$user_id))
					->row_array();
	}	
}


/* Get Exist data */
if (!function_exists('check_exist_data')) {
	function check_exist_data($table,$where){
		$CI =& get_instance();
		return $CI->db->get_where($table,$where)->row_array();
	}	
}


/* Check donator or not  */
if (!function_exists('is_creator')) {
	function is_donator(){
		$CI =& get_instance();
	if($CI->session->userdata('role_name') == 'influencer'){
		return true;
		}
	}	
}

/* Check creator or not  */
if (!function_exists('is_creator')) {
	function is_creator(){
		$CI =& get_instance();
	if($CI->session->userdata('role_name') == 'creator'){
		return true;
		}
	}	
}
/* Check creator or not  */
if (!function_exists('is_admin')) {
	function is_admin(){
		$CI =& get_instance();
	if($CI->session->userdata('role_name') == 'admin'){
		return true;
		}
	}	
}

/* Common response  */
if (!function_exists('success_response')) {
	function success_response($message){
		$result =array('status'=>1,'message'=>$message);
		$response = json_encode($result);
		return $response;
	}	
}
/* Render Page  */
if (!function_exists('render_page')) {
	function render_page($page,$data){
		$CI =& get_instance();
		$folder = $CI->session->userdata('role_name');
		$CI->load->view('includes/logged_header',$data);
		$CI->load->view($folder.'/'.$page);
		$CI->load->view('includes/logged_footer');

	}	
}

?>