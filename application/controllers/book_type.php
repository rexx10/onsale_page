<?php 

class Book_type extends CI_Controller{

	public function __construct(){
		
		parent::__construct();

	}
	
    public function index(){
		
		$view_datas = Array("title" => "網拍訂單管理系統", 
		                    "title2" => "訂單狀態", 
		                    "book_ok" => "訂單送出成功！，請將此網頁加入我的最愛以方便查詢出貨狀態，謝謝");
							
		$this->load->view("book_type_view", $view_datas);
		
	}
		
}