<?php 

class Onsale_model extends CI_model{
	
	public function __construct(){
		
		parent::__construct();
		
	}
	
	//function getdata(){
		
	//	$query = $this->db->get("demo1_guestbook");
		
	//	return $query;
		
	//}
	
/* 	public function ins_gbook($dataset){
		
		$this->db->insert("demo1_guestbook", $dataset);
		return true;
		
	} */
	
	public function get_book_order_no(){
				
		$sql = "SELECT * FROM order_h WHERE odd_n=(SELECT max(odd_n) FROM order_h)"; //找最大單號
		$query = $this->db->query($sql);
		
		foreach($query->result() as $row){
			
			$book_order = $row->odd_n;
			
		}
		
		return $book_order;
		
	}
	
	public function creat_book_data_head($book_order_nm, $text_data_set){
		
		$sql = "INSERT INTO order_h(odd_n, 
		                            pay_t, 
									bank_code, 
									pay_m, 
									b_5_code, 
									buy_day, 
									go_day, 
									acc_name, 
									buyers, 
									m_phone, 
									h_phone, 
									mail, 
									go_add, 
									remark
									) VALUES (
									'".$book_order_nm."', 
									'".$text_data_set["pay_t"]."', 
									'".$text_data_set["bank_code"]."', 
									'".$text_data_set["pay_m"]."', 
									'".$text_data_set["b_5_code"]."', 
									'".strtotime($text_data_set["buy_y"]."-".$text_data_set["buy_m"]."-".$text_data_set["buy_d"])."', 
									'".strtotime($text_data_set["go_y"]."-".$text_data_set["go_m"]."-".$text_data_set["go_d"])."', 
									'".$text_data_set["acc_name"]."', 
									'".$text_data_set["buyers"]."', 
									'".$text_data_set["m_phone"]."', 
									'".$text_data_set["h_phone"]."', 
									'".$text_data_set["mail"]."', 
									'".$text_data_set["go_add00"].$text_data_set["go_add01"].$text_data_set["go_add02"]."', 
									'".$text_data_set["remark"]."')";
		
		$this->db->query($sql);
		
		return true;
		
		
	}
	
	public function creat_book_data_body($book_order_nm, $data_set_m, $data_set_d){
		
		for($i=1; $i<=count($data_set_m); $i++){
		
      	    $sql = "INSERT INTO order_b(odd_n ,odd_d, odd_m) VALUES ('".$book_order_nm."', '".$data_set_d[$i]."', '".$data_set_m[$i]."')";
			$this->db->query($sql);
		}
		
		return true;
	}
	
}

?>