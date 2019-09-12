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
				    <form name="view_form" method="POST" action="<?php echo base_url("/admin_b/edit"); ?>">
				    <table class="tablecontent">
					<?php
					    foreach($data_results->result() as $row){
							
							echo "<tr><td class='tdcontent tdfont'>下標帳號:</td>";
							echo "<td class='tdcontent tdfont'>".$row->buyers."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>行動電話:</td>";
							echo "<td class='tdcontent tdfont'>".$row->m_phone."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>信箱:</td>";
							echo "<td class='tdcontent tdfont'>".$row->mail."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>收件地址:</td>";
							echo "<td class='tdcontent tdfont'>".$row->go_add."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>付款金額:</td>";
							echo "<td class='tdcontent tdfont'>".$row->pay_m."&nbsp;元(NTD)</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>銀行代碼及後五碼:</td>";
							echo "<td class='tdcontent tdfont'>".$row->bank_code."&nbsp;".$row->b_5_code."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>下標日:</td>";
							echo "<td class='tdcontent tdfont'>".date("Y-m-d", $row->buy_day)."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>希望到貨日:</td>";
							echo "<td class='tdcontent tdfont'>".date("Y-m-d", $row->go_day)."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>備註:</td>";
							echo "<td class='tdcontent tdfont'>".nl2br($row->remark)."</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>商品細目:</td><td class='tdcontent tdfont'><a href='";
							echo base_url("/admin_b/detail".$data_prev_path."&order_nm=".$order_nm)."'>查看</td></tr>";
							echo "<tr><td class='tdcontent tdfont'>處理狀態:</td>";
							echo "<td class='tdcontent tdfont'>";
							echo "<select name='order_status'>";
							echo "<option value='0'";
							
							if($row->odd_type == "0"){
								
								echo " selected";
								
							}
							
							echo ">".$order_status_no."</option>";
							echo "<option value='1'";
							
							if($row->odd_type == "1"){
								
								echo " selected";
								
							}
							
							echo ">".$order_status_ok."</option></select>";
							echo "</td></tr>";
						}
					?>
					</table>
					<input type="hidden" name="prev_path" value="<?php echo $data_prev_path; ?>">
					<input type="hidden" name="order_nm" value="<?php echo $order_nm; ?>">
					<div align="center">
					    <input type ="button" onclick="javascript:location.href='<?php echo base_url("/admin_b/search".$data_prev_path); ?>'" value="返回"></input>
					    <input value="儲存" type="submit" name="submit">
					</div>
					</form>
				</div>
           </div>
       </div>
  </body>
</html>