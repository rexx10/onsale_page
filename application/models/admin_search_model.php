<?php

class Admin_search_model extends CI_model{
	
	public function __construct(){
		
		parent::__construct();
		
	}

    public function search_order_nm($d1, $d2, $d3, $num, $offset){
		
		//$d1 出貨狀態, $d2和$d3 下標起訖, $num 顯示數量, $offset 偏移量
		
		$search_data = "";
		
		$search_data = "buy_day BETWEEN '".$d1."' AND '".$d2."'";
		
		if($d3 != "all"){
			
			$search_data = $search_data." AND odd_type IN ('".$d3."')";
			
		}
		
		$sql_count = "SELECT * FROM order_h WHERE ".$search_data;    //計算總數
		$query = $this->db->query($sql_count);
		$query_d[] = $query->num_rows();
		$query->free_result();
		
		$sql = "SELECT * FROM order_h WHERE ".$search_data." ORDER BY order_id DESC LIMIT ".$offset.", ".$num;
		$query = $this->db->query($sql);
		$query_d[] = $query;
		
		
		
		return $query_d;
		
	}
	
	public function data_view($order_nm){
		
		$query = $this->db->get_where("order_h", array("odd_n" => $order_nm));
		
		return $query;
		
	}
	
	public function data_delete($order_nm){
		
	    $tables = array("order_b", "order_h");
        $this->db->where("odd_n", $order_nm);
        $this->db->delete($tables);
		
		return TRUE;
		
	}
	
	public function data_edit($order_set){
		
		$data_set = Array("odd_type" => $order_set["order_status"]);
		$this->db->where("odd_n", $order_set["order_nm"]);
		$this->db->update("order_h", $data_set);
		
		return TRUE;		
		
	}
	
	public function data_detail($order_nm){
		
        $sql = "SELECT * FROM order_h, order_b WHERE order_h.odd_n = order_b.odd_n AND order_b.odd_n = '".$order_nm."'";
		
		$query = $this->db->query($sql);
		
		$result[0] = $query;
		
		foreach($query->result() as $row){
			
		    $result[1] = $row->odd_type;
			
		}
		
		return $result;
		
	}
}

?>