<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creators extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!is_logged_in()){
			redirect('login');
		}
		$this->user_id = $this->session->userdata('user_id');
		$this->load->model('Creator_model','creator');
		$this->load->model('Dashboard_model','dashboard');
	}

	public function index()
	{	

		$data['creator'] = $this->creator->get_all_creators();
		$data['title'] = 'Creators';
		render_page('creators',$data);
	}
	Public function  export_donators_excel(){
		$creator_id =  $this->uri->segment(3);



		date_default_timezone_set('Asia/kolkata');

		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
	        //name the worksheet
		$this->excel->getActiveSheet()->setTitle('Creators');
	        //set cell A1 content with some text
		$this->excel->getActiveSheet()->setCellValue('A1', 'Payment Details ');

		$this->excel->getActiveSheet()->setCellValue('A2', 'Id');
		$this->excel->getActiveSheet()->setCellValue('B2', 'Date');
		$this->excel->getActiveSheet()->setCellValue('C2', 'Payment');
		$this->excel->getActiveSheet()->setCellValue('D2', 'Amount');
		$this->excel->getActiveSheet()->setCellValue('E2', 'Donator');			


	        //merge cell A1 until C1
		$this->excel->getActiveSheet()->mergeCells('A1:E1');
	        //set aligment to center for that merged cell (A1 to C1)
		$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	        //make the font become bold
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
		$this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');

		for($col = ord('A'); $col <= ord('J'); $col++){
	                //set column dimension
			$this->excel->getActiveSheet()->getColumnDimension(chr($col))->setAutoSize(true);
	         //change the font size
			$this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);

			$this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		}
		
				$sql = "SELECT 
				p.razorpay_payment_id,
				p.created,
				p.amount,
				p.creator_id,
				CONCAT(u.first_name,' ',u.last_name)  AS donator_name,
				CONCAT(u1.first_name,' ',u1.last_name)  AS creator_name	
				FROM `payment_details` `p` 
				LEFT JOIN `users` `u` ON `u`.`id` = `p`.`donator_id`
				LEFT JOIN `users` `u1` ON `u1`.`id` = `p`.creator_id
				WHERE `p`.`creator_id` = '$creator_id'";


		$data = $this->db->query($sql)->result_array();	
		
		$datas = array();
		$res = array();
		foreach ($data as $d) {
			 $datas['payment_id'] = $d['razorpay_payment_id'];
            $datas['date'] = date('d-m-Y H:i A',strtotime($d['created']));
            $datas['amount'] = number_format($d['amount'],2);
            $datas['link'] = base_url().'creators/export_donators_excel/'.$d['creator_id'];
            $datas['donator_name'] = $d['donator_name'];
            $datas['creator_name'] = $d['creator_name'];
            $exceldata[]=$datas;
		}
		$creator_name = 'Creator Name : '.$data[0]['creator_name']. '  RegId : AI0'.$data[0]['creator_id'];

			$this->excel->getActiveSheet()->setCellValue('A1', $creator_name);

	                //Fill data 
		$this->excel->getActiveSheet()->fromArray($exceldata, null, 'A3');

		$this->excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	


                $filename='payment_details-'.date('d/m/y').'.xls'; //save our workbook as this file name
                header('Content-Type: application/vnd.ms-excel'); //mime type
                header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
                header('Cache-Control: max-age=0'); //no cache

                //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
                //if you want to save it as .XLSX Excel 2007 format
                $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
                //force user to download the Excel file without writing it to server's HD
                $objWriter->save('php://output');


            }


	
	Public function get_donations(){
		//$id = 2;
		$id = $_POST['id'];
		$where = array('p.creator_id' => $id);

		$data = $this->db
						->join('users u','u.id = p.donator_id')
						->get_where('payment_details p',$where)
						->result_array();
		
		$datas = array();
		$res = array();
		foreach ($data as $d) {
			 $datas['payment_id'] = $d['razorpay_payment_id'];
            $datas['amount'] = number_format($d['amount'],2);
            $datas['creator_id'] = $d['creator_id'];
            $datas['link'] = base_url().'creators/export_donators_excel/'.$d['creator_id'];
            $datas['donator_id'] = $d['donator_id'];
            $datas['donator_name'] = $d['first_name'].' '.$d['last_name'];
            $datas['date'] = date('d-m-Y H:i A',strtotime($d['created']));
            $res[]=$datas;
		}
	//echo '<pre>'; print_r($res);
		echo json_encode($res);		
		}

	Public function add_favourite(){
			//echo '<pre>'; print_r($_POST); exit;
		if(!empty($_POST['user_ids'])){
			$this->db->delete('admin_favour',array('status'=>1));
			for ($i=0; $i <count($_POST['user_ids']) ; $i++) { 				

				$data = array(
					'user_id' => $_POST['user_ids'][$i],
					'created' =>date('Y-m-d H:i:s')
				);		
				$this->db->insert('admin_favour',$data);
				
			}
			
			$this->session->set_flashdata('message', 'Favourite creators updated successfully!');
			redirect('creators','refresh');
		}
		
	}
	Public function view_creator(){
		$user_id =base64_decode($this->uri->segment(3));
		$data['videos'] = $this->dashboard->get_videos(null,$user_id);
		$data['youtube'] = $this->dashboard->get_videos('youtube',$user_id);
		$data['twitter'] = $this->dashboard->get_videos('twitter',$user_id);
		$data['instagram'] = $this->dashboard->get_videos('instagram',$user_id);
		$data['tiktok'] = $this->dashboard->get_videos('tiktok',$user_id);
		$data['expo'] = $this->dashboard->get_videos('expo',$user_id);
		$data['soundcloud'] = $this->dashboard->get_videos('soundcloud',$user_id);
		$data['user'] = $this->creator->get_creator_data();
		$data['title'] = 'View Creators';		
		render_page('creator_view',$data);
	}
	Public function export_excel()
	{
		date_default_timezone_set('Asia/kolkata');

		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
	        //name the worksheet
		$this->excel->getActiveSheet()->setTitle('Creators');
	        //set cell A1 content with some text
		$this->excel->getActiveSheet()->setCellValue('A1', 'Creator List ');

		$this->excel->getActiveSheet()->setCellValue('A2', 'RegId');
		$this->excel->getActiveSheet()->setCellValue('B2', 'Name');
		$this->excel->getActiveSheet()->setCellValue('C2', 'Email');
		$this->excel->getActiveSheet()->setCellValue('D2', 'Password');
		$this->excel->getActiveSheet()->setCellValue('E2', 'Channel');
		$this->excel->getActiveSheet()->setCellValue('F2', 'Year');
		$this->excel->getActiveSheet()->setCellValue('G2', 'Description');
		$this->excel->getActiveSheet()->setCellValue('H2', 'Credit');
		$this->excel->getActiveSheet()->setCellValue('I2', 'Bank Name');
		$this->excel->getActiveSheet()->setCellValue('J2', 'Account No');
		$this->excel->getActiveSheet()->setCellValue('K2', 'IFSC CODE');


	        //merge cell A1 until C1
		$this->excel->getActiveSheet()->mergeCells('A1:E1');
	        //set aligment to center for that merged cell (A1 to C1)
		$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	        //make the font become bold
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
		$this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');

		for($col = ord('A'); $col <= ord('K'); $col++){
	                //set column dimension
			$this->excel->getActiveSheet()->getColumnDimension(chr($col))->setAutoSize(true);
	         //change the font size
			$this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);

			$this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		}
		$where =array('u.role_id'=>3); 
		$this->db->select('u.id,u.password,CONCAT( "AI0",u.id) as new_id,CONCAT(u.first_name," ",u.last_name) as full_name ,u.email,b.bank_name,b.account_no,b.ifsc_code,m.name,m.year,m.description');				
		$this->db->join('media_details m','m.user_id = u.id','left');
		$this->db->join('bank_details b','b.user_id = u.id','left');
		$result =  $this->db->get_where('users u',$where)->result_array();


		$exceldata="";
		foreach ($result as $row){

			$datas['id'] = $row['new_id'];
			$datas['full_name'] = $row['full_name'];
			$datas['email'] = $row['email'];
			$datas['password'] = !empty($row['password'])?$row['password']:'-';
			$datas['name'] = $row['name'];
			$where = array('creator_id' => $row['id']);
			$dd =  $this->db->select('SUM(amount) as amount')
			->get_where('payment_details',$where)
			->row_array(); 
			$datas['year'] = $row['year'];
			$datas['description'] = $row['description'];
			$datas['credit']= !empty($dd)?number_format($dd['amount'],2):'0.00';
			$datas['bank_name'] = $row['bank_name'];
			$datas['account_no'] = $row['account_no'];
			$datas['ifsc_code'] = $row['ifsc_code'];

			$exceldata[]=$datas;
		}



	                //Fill data 
		$this->excel->getActiveSheet()->fromArray($exceldata, null, 'A3');

		$this->excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('F3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('H3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('I3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$this->excel->getActiveSheet()->getStyle('J3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


                $filename='creator_List-'.date('d/m/y').'.xls'; //save our workbook as this file name
                header('Content-Type: application/vnd.ms-excel'); //mime type
                header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
                header('Cache-Control: max-age=0'); //no cache

                //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
                //if you want to save it as .XLSX Excel 2007 format
                $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
                //force user to download the Excel file without writing it to server's HD
                $objWriter->save('php://output');


            }

        }

        /* End of file  */
/* Location: ./application/controllers/ */