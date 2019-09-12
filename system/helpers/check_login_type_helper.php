<?php  if(!defined("BASEPATH")) exit("No direct script access allowed");

    if(!function_exists("check_login_type")){
				
		function check_login_type($login_id, $check_data){
			
			$CI =& get_instance();
			
		    $CI->load->database();
						
			$CI->db->where("check_data", $check_data);
			$CI->db->where("Man_id", $login_id);
			$query = $CI->db->get("manger");
			
			if(empty($query->num_rows())){
				
				$CI->load->library("session");
				
				$newdata = Array("Error_type" => "非法登入或使用，請重新登入");
				$CI->session->set_userdata($newdata);
				
				redirect("admin_login","refresh");
				
			}
			
		}		
		
	}

?>