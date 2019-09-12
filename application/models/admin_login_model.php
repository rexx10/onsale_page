<?php

class Admin_login_model extends CI_model{
	
	public function __construct(){
		
		parent::__construct();
		
	}
	
	public function check_admin_data($data_set){
		
		$sql = "SELECT * FROM manger WHERE Man_id = '".$data_set["UserName"]."' AND Password = '".$data_set["UserPWD"]."'";
		$query = $this->db->query($sql);
		
		if(($query->num_rows() > 0)){
			
			return true;
			
		}else{
			
			return false;
			
		}

	}
	
	public function save_chekdata($data_set, $chdata){
			
		$data = array("check_data" => $chdata);
        $this->db->where("Man_id", $data_set["UserName"]);
        $this->db->update("manger", $data); 
		
		return TRUE;
		
	}
	
}

?>