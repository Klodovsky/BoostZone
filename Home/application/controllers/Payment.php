<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function save_payment()
	{
		if(!empty($_POST)){
			$data = array(
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'product_id' => $_POST['product_id'],
					'amount' => $_POST['amount'],
					'creator_id' => $_POST['creator_id'],
					'donator_id' => $_POST['donator_id'],
					'created' => date('Y-m-d H:i:s')
			);
			$this->db->insert('payment_details', $data);
			echo json_encode(array('status'=>true,'message'=>'Payment made successfully!'));
		}else{
			echo json_encode(array('status'=>false,'message'=>'you dont have access to this page!'));
		}		
	}
	public function update_like()
	{
		if(!empty($_POST)){

			if($_POST['status'] == 1){

				$data = array(					
					'creator_id' => $_POST['creator_id'],
					'donator_id' => $_POST['donator_id'],
					'created' => date('Y-m-d H:i:s')
			);
			$this->db->insert('like_details', $data);
			$result = 'made';
			}else{
				$where = array('creator_id' => $_POST['creator_id'],'donator_id' => $_POST['donator_id']);
				$this->db->delete('like_details',$where);	
				$result = 'removed';
			}
			
			echo json_encode(array('status'=>true,'message'=>'Like '.$result.' successfully!'));
		}else{
			echo json_encode(array('status'=>false,'message'=>'you dont have access to this page!'));
		}		
	}

}
/* End of file  */
/* Location: ./application/controllers/ */