<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donators extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!is_logged_in()){
			redirect('login');
		}
		$this->user_id = $this->session->userdata('user_id');
		$this->load->model('Donator_model','donator');
	}

	public function index()
	{
		$data['donators'] = $this->donator->get_all_donators();
		$data['title'] = 'Donators';
		render_page('donators',$data);
	}
	Public function export_excel()
	{
		date_default_timezone_set('Asia/kolkata');

			$this->load->library('excel');
			$this->excel->setActiveSheetIndex(0);
	        //name the worksheet
			$this->excel->getActiveSheet()->setTitle('Donators');
	        //set cell A1 content with some text
			 $this->excel->getActiveSheet()->setCellValue('A1', 'Donators List ');

			$this->excel->getActiveSheet()->setCellValue('A2', 'RegId');
			$this->excel->getActiveSheet()->setCellValue('B2', 'Name');
			$this->excel->getActiveSheet()->setCellValue('C2', 'Email');
			$this->excel->getActiveSheet()->setCellValue('D2', 'Password');
			$this->excel->getActiveSheet()->setCellValue('E2', 'Donated');


	        //merge cell A1 until C1
			$this->excel->getActiveSheet()->mergeCells('A1:D1');
	        //set aligment to center for that merged cell (A1 to C1)
			$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	        //make the font become bold
			$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
			$this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');

			for($col = ord('A'); $col <= ord('E'); $col++){
	                //set column dimension
				$this->excel->getActiveSheet()->getColumnDimension(chr($col))->setAutoSize(true);
	         //change the font size
				$this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);

				$this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			}
	        


			$where =array('u.role_id'=>2); 
				


				$this->db->select('u.id,u.password,CONCAT( "AI0",u.id) as new_id,CONCAT(u.first_name," ",u.last_name) as full_name ,u.email');				
				 $result =  $this->db->get_where('users u',$where)->result_array();

		
			$exceldata="";
			foreach ($result as $row){

					$datas['id'] = $row['new_id'];
					$datas['full_name'] = $row['full_name'];
					$datas['email'] = $row['email'];					
					$datas['password'] = $row['password'];					
					 $where = array('donator_id' => $row['id']);
                                                        $dd =  $this->db->select('SUM(amount) as amount')
                                                        ->get_where('payment_details',$where)
                                                        ->row_array(); 
                    $datas['credit']= !empty($dd)?number_format($dd['amount'],2):'0.00';

					$exceldata[]=$datas;
			}


			
	                //Fill data 
			$this->excel->getActiveSheet()->fromArray($exceldata, null, 'A3');

			$this->excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$this->excel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			


                $filename='donator_List-'.date('d/m/y').'.xls'; //save our workbook as this file name
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