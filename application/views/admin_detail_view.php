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
						<td class="tdcontent tdfont">處理狀態</td>
						<td class="tdcontent tdfont"><p align="center" style="color:red;"><?php echo $odd_type; ?></p></td>
						</tr>
					</table></BR>
				    <table class="tablecontent">
					    <tr><td class="tdcontent tdfont"><p align="center">品名</p></td><td class="tdcontent tdfont"><p align="center">數量</p></td></tr>
					<?php
					    foreach($data_results->result() as $row){
							
							echo "<tr><td class='tdcontent tdfont'>".$row->odd_d."</td>";
							echo "<td class='tdcontent tdfont'><p align='center'>".$row->odd_m."</p></td></tr>";

						}
					?>
					</table>
					</BR>
					<div align="center">
					    <input type ="button" onclick="javascript:location.href='<?php echo base_url("/admin_b/viewer".$data_prev_path); ?>'" value="返回"></input>
					</div>
					</form>
				</div>
           </div>
       </div>
  </body>
</html>