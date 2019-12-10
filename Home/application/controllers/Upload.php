<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
	}

	public function upload_avatar(){

  if(!empty($_POST['slim'])){

    $output = json_decode($_POST['slim'][0], TRUE);
    if(isset($output) && isset($output['output']) && isset($output['output']['image'])){

      $file = $output['output']['image'];
      $file_name = $output['input']['name'];

      if(isset($file)){
        /* Check jpeg file */
        if(stripos($file, 'data:image/jpeg;base64,') === 0)
        {
          $img = base64_decode(str_replace('data:image/jpeg;base64,', '', $file));            
        }/* Check png file */
        else if(stripos($file, 'data:image/png;base64,') === 0)
        {
          $img = base64_decode(str_replace('data:image/png;base64,', '', $file));           
        }
        else /* error */
        {
          $result =  array('error' => 'Non-image file');
        }
        $result = file_put_contents('uploads/profile/' . $file_name, $img);

        if($result == FALSE){
          $result =  array('error' => 'Failed to write to file, may not have permission');
        }else{
          $result = array('image_url' =>$file_name);
        }

        if(isset($result['image_url'])){
          $this->db->update('users',array('picture'=>base_url().'uploads/profile/'.$result['image_url']),array('id'=>$this->user_id));
        }
        echo json_encode($result);

      }
    }
  }
}

Public function delete_profile_image(){
  $result = $this->db->get_where('users',array('id'=>$this->user_id))->row_array();
  if(empty($result['picture'])){
    $data = array('status' => false);
  }else{
    $this->db->update('users',array('picture'=>''),array('id'=>$this->user_id));
    $data = array('status' => TRUE,'image_url'=>base_url() . 'assets/images/default-avatar.png');
  }
  echo json_encode($data);  

}

}

/* End of file  */
/* Location: ./application/controllers/ */