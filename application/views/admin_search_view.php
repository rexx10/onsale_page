<html>
	<head>
	<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" count="text/html; charset=utf-8">

		<link rel=stylesheet type="text/css" href="<?php echo base_url("/css/admin_search.css"); ?>">
		<link rel=stylesheet type="text/css" href="<?php echo base_url("/css/jquery-ui.css"); ?>">
		<script type="text/javascript" src="<?php echo base_url("/js/jquery-3.1.1.min.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("/js/jquery-ui.min.js"); ?>"></script>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("/pic/scratches.png"); ?>" />
  <script>
      var Today=new Date();
      $(function(){
          $("#buy_d1, #buy_d2").datepicker();
          $("#buy_d1, #buy_d2").datepicker("option", "dateFormat", "yy-mm-dd");
		  $("#buy_d1").datepicker("setDate",Today.getFullYear()+"-"+(Today.getMonth()+1)+"-"+(Today.getDate()-1)); // 預設日期
		  $("#buy_d2").datepicker("setDate",Today.getFullYear()+"-"+(Today.getMonth()+1)+"-"+Today.getDate()); // 預設日期
      });
	  
  </script>
	</head>
	<body background="<?php echo base_url("/pic/back.jpg"); ?>">
        <div id="container">
		    <div id ="header"><img src="<?php echo base_url("/pic/top_h.jpg"); ?>"  align="left" width="61" height="93"></div>
			<div id="mainContent">
                <div id="sider">
				    <table class="tablesider"> 
                        <tr> 
                            <th class="thsider">功能選單</th> 
                        </tr> 
                        <tr> 
                            <th class="thsider"><a href="<?php echo base_url("/admin_b"); ?>">訂單查詢</th>
                        </tr> 
                        <tr> 
                            <th class="thsider"><a href="<?php echo base_url(); ?>">回到前台</a></th>
                        </tr>
					</table>
				</div>
				<div id="content">
				    <form name="search_form" method="GET" action="<?php echo base_url("/admin_b/search"); ?>">
					    <table class="tablecontent">
						    <tr>
							    <td class="tdcontent">查詢貨物情況：<select name="order_status">
								                                        <option value="all" selected>全部狀態</option>
												                        <option value="1">貨物寄出</option>
												                        <option value="0">尚未處理</option>
																	</select>
					            </td>
						    </tr>
							<tr>
							    <td class="tdcontent">
								    依下標日：<input type="text" id="buy_d1" name="buy_d1">&nbsp;&nbsp;至&nbsp;&nbsp;<input type="text" id="buy_d2" name="buy_d2">
									<input type="submit" value="查詢">
								</td>
							</tr>
						</table>
						<?php 
						
						    if(!empty($_GET["order_status"]) & !empty($_GET["buy_d1"]) & !empty($_GET["buy_d2"])){
						        
						        if(!empty($order_total_rows)){ 
							
						?>
						
						<table class='tablecontent thcolor'>
						    <tr>
                                <td>聯絡姓名</td>
	                            <td>手機號碼</td>
	                            <td>匯款資料</td>
	                            <td>金額</td>
	                            <td>處理情況</td>
	                            <td>詳情</td>
	                            <td>刪除</td>
						    </tr>
						
						<?php	      
							        foreach($data_results->result() as $row){
			                            echo "<tr>";
			                            echo "<td>".$row->buyers."</td>";
                                        echo "<td>".$row->m_phone."</td>";
						                echo "<td>".$row->bank_code."</td>";
						                echo "<td>".$row->pay_m."</td>";
							            echo "<td>";
								
							            if($row->odd_type == "0"){
										
								            echo $order_status_no;
										
								        }else{
										
									        echo $order_status_ok;
										
								        }
									   
								        echo "</td>";
								        echo "<td><a href='".base_url("/admin_b/viewer".$data_prev_path."&order_nm=".$row->odd_n)."'>詳情</a></td>";
										echo "<td><a href='".base_url("/admin_b/del".$data_prev_path."&order_nm=".$row->odd_n)."'>刪除</a></td>";
								        echo "</tr>";
									   
		                            }
								  
						            echo "</table>";
								  
							        echo $page_lines;
								   
							    }else{
								   
							        echo "<script type='text/javascript'>";
								    echo "alert('無資料，請重新查詢')";
								    echo "</script>";
								   
							    }							  
							   
							}
							   
						?>
					</form>
				</div>
           </div>
       </div>
  </body>
</html>