<!DOCTYPE HTML>
<html lang="zh">
<head>
    <meta charset="utf-8">
	<title><?php echo $title; ?></title>
<link rel=stylesheet type="text/css" href="<?php echo base_url("/css/topselectbutton.css"); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("/pic/scratches.png"); ?>" />
	  	<SCRIPT LANGUAGE="javascript">
    	function checkkeyin()
			{
				if (document.myForm.acc_name.value.length == 0)
				{
					alert("「下標帳號」沒寫到喔！！");
					return false;
				}
								
			   if (document.myForm.m_phone.value.length == 0)
				{
					alert("「手機號碼」沒寫到喔！！");
					return false;
				}		
				myForm.submit();				
			}
  </SCRIPT>
</head>
<body>
    <div id="MENU">
        <ul>
        <li><a href="<?php echo base_url(); ?>" title="填寫匯款資料">填寫匯款資料</a> </li>
        <li><a href="<?php echo base_url("/condition"); ?>" title="查詢訂單狀態">查詢訂單狀態</a></li>
        <li><a href="<?php echo base_url("/admin_login"); ?>" title="登入後台">登入後台</a></li>
        <li><a href="http://www.ruten.com.tw/" title="進入露天拍賣">進入露天拍賣</a></li> 
        </ul>
	</div>
		<div class="position2">
			
						<table border="0" cellSpacing="1" width="646" id="table3">
							<tr>
								<td>買家可透過手機號碼與賣家發送之匯款帳號來查詢賣家訂單處理情況</td>
							</tr>
						</table>
					</div>
					<FORM name="myForm" method="POST" action="<?php echo base_url("condition/search_book") ?>">
			<input name="area" type="hidden" id="area" value="3">
<INPUT type="hidden" name="number" value="0010827">
<div align="center">
<TABLE border="2" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0" bgcolor="#FFF4E9" width="650" id="table4">
	<TR>
		<TD height="25" colspan="2" height="6" align="center" bgcolor="#79BCFF" style="font-size: 10pt">
		<font size="3" color="#FFFFFF">訂　單　查　詢</font></TD>
	</TR>
	<TR>
		<TD height="33" width="200" align="right" style="font-size: 10pt" bgcolor="#EEF7FF">
		<font size="3"><span lang="en">&nbsp;</span>下標帳號：&nbsp;&nbsp; </font></TD>
		<TD width="450" style="font-size: 10pt" bgcolor="#EEF7FF" height="33">
			<font size="3">&nbsp; <input type="text" name="acc_name" size="18">（test@yahoo.com.tw，請完整輸入）</font></TD>
	</TR>
	<TR>
		<TD height="33" align="right" style="font-size: 10pt" bgcolor="#EEF7FF">
		<font size="3">連絡手機：&nbsp;&nbsp; </font></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" height="33">
						<font size="2">
						&nbsp;&nbsp; </font>
			<font size="3"><input type="text" name="m_phone" size="20">&nbsp; 
						093324xxxx</font></TD>
	</TR>
	
		</TABLE>

</div>
		
<div align="center"><input  onclick="checkkeyin();if(event) event.preventDefault()"  value="送出" type="submit" name="submit">　<INPUT type="reset" value="全部清除" name="B2" style="font-size: 8 pt"></div>
</FORM>
</body>
</html>