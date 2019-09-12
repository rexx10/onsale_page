<?php

class Condition_model extends CI_model{
	
	public function __construct(){
		
		parent::__construct();
		
	}
	
	public function get_book_data_cust($cust_data_set){
		
		//$tmp_cust_data_set[] = "";
		$sql = "SELECT * FROM order_h Where mail = '".$cust_data_set["acc_name"]."' and m_phone = '".$cust_data_set["m_phone"]."' ORDER BY order_id DESC";
		$query = $this->db->query($sql);
		
	    if ($query->num_rows() > 0){
			
            $row = $query->row(); 

            $tmp_cust_data_set["acc_name"] = $row->acc_name;
            $tmp_cust_data_set["m_phone"] = $row->m_phone;
            $tmp_cust_data_set["odd_type"] = $row->odd_type;
			
        }
		
		return $tmp_cust_data_set;
		
	}
	
}

?>