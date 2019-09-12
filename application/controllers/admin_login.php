<?php 

class Admin_login extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		
        $this->load->database();
		
	}
	
    public function index(){
		
		$data_set = Array("title" => "網拍訂單管理系統", 
		                  "title2" => "管理員登入");
		
		$this->load->view("admin_login_view", $data_set);
		
	}

	public function check_login(){
		
		$check_login_data_set["UserName"] = $this->input->post("UserName", TRUE);
		$this->load->library('onsale_config');
		$check_login_data_set["UserPWD"] = crypt($this->input->post("UserPWD", TRUE), $this->onsale_config->Ch_pw_name);
		
        $this->load->model("admin_login_model");
		//print_r($check_login_data_set);
		$check_admin_login_type = $this->admin_login_model->check_admin_data($check_login_data_set);
		
 		if($check_admin_login_type){			

			$this->load->library('onsale_config');
            $now_check_data = MD5(date("Y-m-d/H:i:s").$this->onsale_config->Ch_pw_name);

			$this->admin_login_model->save_chekdata($check_login_data_set, $now_check_data);
			$this->load->library("session");   //開啟session
			$newsessdata = array("ad_check_type" => $now_check_data, "login_id" => $check_login_data_set["UserName"] );
			$this->session->set_userdata($newsessdata);
			redirect("admin_b/search","refresh");    //管理員驗證通過
			
		}else{
			
			redirect("admin_login","refresh");    //返回登入畫面
			
		}
		
	}
	
}