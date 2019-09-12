	  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD-xhtml1-transitional.dtd">
<html>
<script type="text/javascript" src="<?php echo base_url("/js/test_ch_phone.js"); ?>"></script>

<link rel=stylesheet type="text/css" href="<?php echo base_url("/css/topselectbutton.css"); ?>">



<head>
<meta http-equiv="content-type" content"text/html"; charset="UTF-8" />
<title>網拍訂單管理系統</title>
</head>
	  	


<div id="MENU">

<ul>
  <li><a href="<?php echo base_url(); ?>" title="填寫匯款資料">填寫匯款資料</a> </li>
  <li><a href="<?php echo base_url("/condition"); ?>" title="查詢訂單狀態">查詢訂單狀態</a></li>
  <li><a href="<?php echo base_url("/admin_login"); ?>" title="登入後台">登入後台</a></li>
  <li><a href="http://www.ruten.com.tw/" title="進入露天拍賣">進入露天拍賣</a></li>
 </ul></div>
  <BODY TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
	  
		<div align="center" class="position2">
			
						<table border="0" cellSpacing="1" width="646" id="table3">
							<tr>
								
								<p style="LINE-HEIGHT: 200%">
								買家可透過手機號碼與賣家發送之匯款帳號來查詢賣家訂單處理情況</td>
							</tr>
						</table>
					</div>
					<FORM >
  <?php if(!empty($acc_name) & !empty($m_phone) & !empty($odd_type)){   ?>
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
			<font size="3">&nbsp; <?php echo $acc_name;  ?></font></TD>
	</TR>
	<TR>
		<TD height="33" align="right" style="font-size: 10pt" bgcolor="#EEF7FF">
		<font size="3">連絡手機：&nbsp;&nbsp; </font></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" height="33">
			<font size="3">&nbsp; <?php echo $m_phone; ?></font></TD>
	</TR>
	<TR>
		<TD height="33" align="right" style="font-size: 10pt" bgcolor="#EEF7FF">
		<font size="3">你的貨品狀態為：&nbsp;&nbsp; </font></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" height="33">
						<font size="3">&nbsp; <?php echo $odd_type; ?> </font></TD>
	</TR>
		</TABLE>

</div>
<?php 
}
else
{

?>
<div align="center">
<TABLE border="2" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0" bgcolor="#FFF4E9" width="650" id="table4">
	<TR>
		<TD height="25" colspan="2" height="6" align="center" bgcolor="#79BCFF" style="font-size: 10pt">
		<font size="3" color="#FFFFFF">訂　單　查　詢</font></TD>
	</TR>

	<TR>
			
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" height="33" align="center">
			<font size="3">查無資料!!</font></TD>
	
		</TABLE>

</div>
<?php } ?>



</FORM>

</BODY>
</HTML>