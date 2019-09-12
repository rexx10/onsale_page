<?php 

class Onsale extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Taipei');
	}
	
	public function index(){
        $this->load->helpers("tool");
		$data = Array("title" => "網拍訂單管理系統");
		//$data["test01"] = "lll";

		$this->load->view("onsale_view", $data);
		
	}
	
	public function new_book(){
		
		$multi_text_data = $this->input->post(array("pay_t", 
		                         "bank_code", 
								 "pay_m", 
								 "b_5_code", 
								 "buy_y", 
								 "buy_m", 
								 "buy_d", 
								 "go_y", 
								 "go_m", 
								 "go_d", 
								 "acc_name", 
								 "buyers", 
								 "m_phone", 
								 "h_phone", 
								 "mail", 
								 "go_add00" , 
								 "go_add01", 
								 "go_add02", 
								 "remark"), 
								 TRUE);
		
        for($i=1; $i <= 20; $i++){
		
		    if($this->input->post("d".$i) != "" AND $this->input->post("m".$i) != 0){
				
				$data_m[$i] = $this->input->post("m".$i);
				$data_d[$i] = $this->input->post("d".$i);
				
			}
	    
		}
		
		$this->load->model("onsale_model");
		$book_order_nm = $this->onsale_model->get_book_order_no();
		$init_book_nm = date("Ymd")."0001";
		
		if($book_order_nm == $init_book_nm || $book_order_nm > $init_book_nm){
			
			$new_book_order_nm = $book_order_nm + 1;
			
		}else{
			
			$new_book_order_nm = $init_book_nm;
			
		}
		

		
		if($this->onsale_model->creat_book_data_head($new_book_order_nm, $multi_text_data)){
			
			if($this->onsale_model->creat_book_data_body($new_book_order_nm, $data_m, $data_d)){
			
				redirect("book_type",'refresh');
				
			}
			
		}		
		
	}


	
}

?>