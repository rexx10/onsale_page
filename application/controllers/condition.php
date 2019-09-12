<?php 

class Condition extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Taipei');
	}
	
	public function index(){

		$data = Array("title" => "網拍訂單管理系統");

		$this->load->view("condition_view", $data);
		
	}
	
	public function search_book(){
		
		$cust_data_set = $this->input->post(Array("acc_name", "m_phone"), TRUE);
		$this->load->model("condition_model");
		$data_results = $this->condition_model->get_book_data_cust($cust_data_set);
		
		$data["acc_name"] = $data_results["acc_name"];
		$data["m_phone"] = $data_results["m_phone"];
		
		if(!empty($data_results)){
			
			$data["odd_type"] = "貨物寄出";
			
		}else{
			
			$data["odd_type"] = "尚未處理";
			
		}
		
		//print_r($data["data_results"]);
		$this->load->view("search_order_result_view", $data);
		
	}
	
}

?>