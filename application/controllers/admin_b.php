<?php

class Admin_b extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		
        $this->load->database();
	
	}
	
	public function index(){
		
		$this->load->library("session");   //開啟session
		$this->load->helper("check_login_type_helper");
		check_login_type($this->session->userdata("login_id"), $this->session->userdata("ad_check_type"));
		$data = Array("title" => "後臺管理");
	    $this->load->view("admin_search_view", $data);
	}
	
	public function search(){
	    
		$this->load->library("session");   //開啟session
		$this->load->helper("check_login_type_helper");
		check_login_type($this->session->userdata("login_id"), $this->session->userdata("ad_check_type"));
		//typ 貨物狀態
		//d1 下標日(start)
		//d2 下標日(end)
	    $this->load->library("pagination");    //loading pagination class
		$type = $this->input->get("order_status", TRUE);
		$day1 = $this->input->get("buy_d1", TRUE);
		$day2 = $this->input->get("buy_d2", TRUE);
		$data = Array("title" => "後臺管理");

		
		$offset = empty($this->input->get("pn", TRUE))?0:$this->input->get("pn", TRUE);
		
		$config["per_page"] = "10";    //設定單頁幾筆資料		
		
        $this->load->model("admin_search_model");
		
		$order_set = $this->admin_search_model->search_order_nm(strtotime($day1), strtotime($day2), $type, $config["per_page"], $offset);
		
		$config["base_url"] = base_url()."admin_b/search?order_status=".$type."&buy_d1=".$day1."&buy_d2=".$day2;
		$config["total_rows"] = $order_set[0];    //資料總筆數
        $config["use_page_numbers"] = FALSE;
		$config["first_link"] = FALSE;
		$config["last_link"] = FALSE;
        $config["prev_link"] = "←";
        $config["next_link"] = "→";
		$config["full_tag_open"] = "<p>";
		$config["full_tag_close"] = "</p>";
		$config["num_tag_open"] = "&nbsp;";
		$config["num_tag_close"] = "&nbsp;";
		$config["prev_tag_close"] = "&nbsp;";
		$config["next_tag_open"] = "&nbsp;";
		$config["next_tag_close"] = "&nbsp;&nbsp;";
		$config["prev_tag_open"] = "&nbsp;&nbsp;";

		$data["data_results"] = $order_set[1];
		
		$data["order_status_no"] = "尚未處裡";
		$data["order_status_ok"] = "貨物寄出";

		$data["order_total_rows"] = $order_set[0];
		$config["page_query_string"] = TRUE;
		$config['enable_query_strings'] = TRUE;
		$config["query_string_segment"] = "pn";
		if($offset != "0"){
			
			$page_limit = "&".$config["query_string_segment"]."=".$offset;
			
		}else{
			
			$page_limit = "";
			
		}
		
		$data["data_prev_path"] = "?order_status=".$type."&buy_d1=".$day1."&buy_d2=".$day2.$page_limit;		
		$this->pagination->initialize($config);
		
		$data["page_lines"] = $this->pagination->create_links();
		
		$this->load->view("admin_search_view", $data);
	
	}
	
	public function viewer(){
		
		$this->load->library("session");   //開啟session
		$this->load->helper("check_login_type_helper");
		check_login_type($this->session->userdata("login_id"), $this->session->userdata("ad_check_type"));
		
		$data = Array("title" => "後臺管理 - 訂單查看", "order_status_no" => "尚未處裡", "order_status_ok" => "貨物寄出");
		$data["order_nm"] = $this->input->get("order_nm", TRUE);
		$this->load->model("admin_search_model");
		$data["data_results"] = $this->admin_search_model->data_view($data["order_nm"]);
		$data_prev_path = $this->input->get(Array("order_status", "buy_d1", "buy_d2"), TRUE);
		
		if(!empty($this->input->get("pn", TRUE))){
			
			$page_nm = "&pn=".$this->input->get("pn", TRUE);
			
		}else{
			
			$page_nm = "";
			
		}
		$data["data_prev_path"] = "?order_status=".$data_prev_path["order_status"]."&buy_d1=".$data_prev_path["buy_d1"]."&buy_d2=".$data_prev_path["buy_d2"].$page_nm;
		$this->load->view("admin_viewdata_view", $data);
	}
	
	public function del(){
		
		$this->load->library("session");   //開啟session
		$this->load->helper("check_login_type_helper");
		check_login_type($this->session->userdata("login_id"), $this->session->userdata("ad_check_type"));
		
        $order_nm = $this->input->get("order_nm", TRUE);
		$this->load->model("admin_search_model");
		$this->admin_search_model->data_delete($order_nm);
		$data_prev_path = $this->input->get(Array("order_status", "buy_d1", "buy_d2"), TRUE);
		
		if(!empty($this->input->get("pn", TRUE))){
			
			$page_limit = "&pn=".$this->input->get("pn", TRUE);
			
		}else{
			
			$page_limit = "";
			
		}
		
		$data_prev_path = "?order_status=".$data_prev_path["order_status"]."&buy_d1=".$data_prev_path["buy_d1"]."&buy_d2=".$data_prev_path["buy_d2"].$page_limit;
		redirect("admin_b/search".$data_prev_path, 'refresh');
		
	}
	
	public function edit(){
		
		$this->load->library("session");   //開啟session
		$this->load->helper("check_login_type_helper");
		check_login_type($this->session->userdata("login_id"), $this->session->userdata("ad_check_type"));
		
		$prev_path = $this->input->post("prev_path", TRUE);
		$order_set = $this->input->post(Array("order_nm", "order_status"), TRUE);
		$this->load->model("admin_search_model");
		$this->admin_search_model->data_edit($order_set);
		redirect("admin_b/viewer".$prev_path."&order_nm=".$order_set["order_nm"], 'refresh');
		
	}
	
	public function detail(){
		
		$this->load->library("session");   //開啟session
		$this->load->helper("check_login_type_helper");
		check_login_type($this->session->userdata("login_id"), $this->session->userdata("ad_check_type"));
		
		$data = Array("title" => "後臺管理 - 商品細目");
		$data["order_nm"] = $this->input->get("order_nm", TRUE);
		$prev_path_set = $this->input->get(Array("order_status", "buy_d1", "buy_d2", ), TRUE);
		
		$this->load->model("admin_search_model");
		
		$result = $this->admin_search_model->data_detail($data["order_nm"]);

		if($result[1] == "0"){
			
			$data["odd_type"] = "尚未處裡";
			
		}else{
			
			$data["odd_type"] = "貨物寄出";
			
		}
		
		$data["data_results"] = $result[0];
		
		if(!empty($this->input->get("pn", TRUE))){
			
			$page_limit = "&pn=".$this->input->get("pn", TRUE);
			
		}else{
			
			$page_limit = "";
			
		}
		
		$data["data_prev_path"] = "?order_status=".$prev_path_set["order_status"]."&buy_d1=".$prev_path_set["buy_d1"]."&buy_d2=".$prev_path_set["buy_d2"]."&order_nm=".$data["order_nm"].$page_limit;
		
		$this->load->view("admin_detail_view", $data);
		
	}
	
}

?>