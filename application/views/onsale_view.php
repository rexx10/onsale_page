<!DOCTYPE HTML>
<html lang="zh">
<head>
    <meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<script language="javascript" src="<?php echo base_url("/js/test123.js"); ?>"></script>
	<link rel=stylesheet type="text/css" href="<?php echo base_url("/css/topselectbutton.css"); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("/pic/scratches.png"); ?>" />
    <script language=javascript>
            function more(){
            var acc = document.getElementById('copy').cloneNode(true);
	        acc.style.display = 'block';
            var ins = document.getElementById('write');
            ins.parentNode.insertBefore(acc,ins);
            document.forms[0].button.disabled=true;
        }
    </script>
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
    ★ 使用步驟★<BR>
    1、請輸入您的相關資料，務必正確!!<BR>
    2、訂單確認後，請選擇付款方式!!<BR>
    3、買家填好訂單，不需再次通知我們!!<BR>
    4、買家也可透過訂單查詢，查詢訂單情況!!
    </div>
	<form name="myForm" method="POST" action="<?php echo base_url("/onsale/new_book"); ?>">
<div align="center">
	<TABLE border="0" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0" bgcolor="#FFF4E9" width="650" id="table4">
<TD height="25" colspan="2" height="6" align="center" bgcolor="#79BCFF" style="font-size: 10pt">
		<B><FONT color="#FFFFFF"  size="3">付‧款&nbsp; &nbsp;&amp;&nbsp; &nbsp;宅‧配</FONT></B></TD><p class="footer">
<tr><td class="footer"><div class="position">付款方式：</div></td><td bgcolor="#EEF7FF"><select size="1" name="pay_t" id="selectFavor"><option selectelected>付款方式</option>
		           <option value＝"貨到付款">貨到付款</option>
			   <option value="銀行轉帳">銀行轉帳</option>
			   <option value="面交">面交</option></select></td></tr><BR>

<tr><td class="footer"><div class="position">銀行代碼：</div></td><td class="footer"><select id="b_code" name="bank_code" size="1">						
						<option value="001 中央信託">001 中央信託</option>
						<option value="004 臺灣銀行">004 臺灣銀行</option>
						<option value="005 土地銀行">005 土地銀行</option>
						<option value="006 合庫銀行">006 合庫銀行</option>
						<option value="007 第一銀行">007 第一銀行</option>
						<option value="008 華南銀行">008 華南銀行</option>
						<option value="009 彰化銀行">009 彰化銀行</option>
						<option value="010 華僑銀行">010 華僑銀行</option>
						<option value="011 上海銀行">011 上海銀行</option>
						<option value="012 台北富邦">012 台北富邦</option>
						<option value="013 國泰世華">013 國泰世華</option>
						<option value="016 高雄銀行">016 高雄銀行</option>
						<option value="017 兆豐銀行">017 兆豐銀行</option>
						<option value="018 農業金庫">018 農業金庫</option>
						<option value="021 花旗銀行">021 花旗銀行</option>
						<option value="024 運通銀行">024 運通銀行</option>
						<option value="025 首都銀行">025 首都銀行</option>
						<option value="039 荷蘭銀行">039 荷蘭銀行</option>
						<option value="040 中華開發">040 中華開發</option>
						<option value="050 臺灣企銀">050 臺灣企銀</option>
						<option value="052 新竹商銀">052 新竹商銀</option>
						<option value="053 台中商銀">053 台中商銀</option>
						<option value="054 京城銀行">054 京城銀行</option>
						<option value="056 花蓮企銀">056 花蓮企銀</option>
						<option value="057 台東企銀">057 台東企銀</option>
						<option value="075 東亞銀行">075 東亞銀行</option>
						<option value="081 匯豐銀行">081 匯豐銀行</option>
						<option value="083 渣打銀行">083 渣打銀行</option>
						<option value="087 標旗銀行">087 標旗銀行</option>
						<option value="101 台北一信">101 台北一信</option>
						<option value="102 華泰銀行">102 華泰銀行</option>
						<option value="103 新光銀行">103 新光銀行</option>
						<option value="104 台北五信">104 台北五信</option>
						<option value="106 台北九信">106 台北九信</option>
						<option value="108 陽信銀行">108 陽信銀行</option>
						<option value="114 基隆一信">114 基隆一信</option>
						<option value="115 基隆二信">115 基隆二信</option>
						<option value="118 板信銀行">118 板信銀行</option>
						<option value="119 淡水一信">119 淡水一信</option>
						<option value="120 淡水合作社">120 淡水合作社</option>
						<option value="124 宜蘭信合社">124 宜蘭信合社</option>
						<option value="127 桃園信合社">127 桃園信合社</option>
						<option value="130 新竹一信">130 新竹一信</option>
						<option value="132 新竹三信">132 新竹三信</option>
						<option value="139 竹南信合社">139 竹南信合社</option>
						<option value="142 豐原信合社">142 豐原信合社</option>
						<option value="146 台中二信">146 台中二信</option>
						<option value="147 三信銀行">147 三信銀行</option>
						<option value="151 第七商銀">151 第七商銀</option>
						<option value="158 彰化一信">158 彰化一信</option>
						<option value="161 彰化五信">161 彰化五信</option>
						<option value="162 彰化六信">162 彰化六信</option>
						<option value="163 彰化十信">163 彰化十信</option>
						<option value="165 鹿港信合社">165 鹿港信合社</option>
						<option value="178 嘉義三信">178 嘉義三信</option>
						<option value="179 嘉義四信">179 嘉義四信</option>
						<option value="188 台南三信">188 台南三信</option>
						<option value="191 台南六信">191 台南六信</option>
						<option value="202 高新銀行">202 高新銀行</option>
						<option value="203 高雄二信">203 高雄二信</option>
						<option value="204 高雄三信">204 高雄三信</option>
						<option value="215 花蓮一信">215 花蓮一信</option>
						<option value="216 花蓮二信">216 花蓮二信</option>
						<option value="222 澎湖一信">222 澎湖一信</option>
						<option value="223 澎湖二信">223 澎湖二信</option>
						<option value="224 金門信合社">224 金門信合社</option>
						<option value="700 中華郵政" selected>700 中華郵政</option>
						<option value="803 聯邦銀行">803 聯邦銀行</option>
						<option value="804 中華銀行">804 中華銀行</option>
						<option value="805 遠東銀行">805 遠東銀行</option>
						<option value="806 復華銀行">806 復華銀行</option>
						<option value="807 永豐銀行">807 永豐銀行</option>
						<option value="808 玉山銀行">808 玉山銀行</option>
						<option value="809 萬泰銀行">809 萬泰銀行</option>
						<option value="810 寶華銀行">810 寶華銀行</option>
						<option value="812 台新銀行">812 台新銀行</option>
						<option value="814 大眾銀行">814 大眾銀行</option>
						<option value="815 日盛銀行">815 日盛銀行</option>
						<option value="816 安泰銀行">816 安泰銀行</option>						
						<option value="822 中國信託">822 中國信託</option>
						<option value="825 慶豐銀行">825 慶豐銀行</option></select><BR></td></tr>
<tr><td class="footer"><div class="position">金&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp額：</div></td><td class="footer"><input type="text" size="2" name="pay_m"><BR></td></tr>
<tr><td class="footer"><div class="position">後 五 碼&nbsp：</div></td><td class="footer"><input type="text" size="2" name="b_5_code"><BR></td></tr>
<tr><td class="footer"><div class="position">下標日：</div></td><td class="footer"><select size="1" name="buy_y">
						<option value=<?php echo '"';  echo date('Y'); echo '">'; echo date('Y'); ?></option>
						<option value=<?php echo '"'; echo date('Y')+1; echo '">'; echo date('Y')+1; ?></option></select>年
						<select size="1" name="buy_m">
						<option value=<?php echo '"'; echo date('m');  echo '"selected>'; echo date('m'); ?></option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option></select>月
						<select size="1" name="buy_d">
						<option value=<?php echo '"'; echo date('d'); echo '"selected>'; echo date('d'); ?></option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option></select>日<BR></td></tr>

<tr><td class="footer"><div class="position">希望到貨日：</div></td><td  class="footer"><select size="1" name="go_y">
						<option value=<?php echo '"';  echo date('Y'); echo '">'; echo date('Y'); ?></option>
						<option value=<?php echo '"'; echo date('Y')+1; echo '">'; echo date('Y')+1; ?></option></select>年
						<select size="1" name="go_m">
						<option value=<?php echo '"'; echo date('m');  echo '"selected>'; echo date('m'); ?></option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option></select>月
						<select size="1" name="go_d">
						<option value="<?php echo date('d'); ?>"selected><?php echo date('d');?></option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option></select>日<BR></td></tr>
<BR>
<TD height="25" colspan="2" align="center" bgcolor="#79BCFF" style="font-size: 10pt">
		<B><FONT color="#FFFFFF" size="3">訂&nbsp;&nbsp; 單&nbsp;&nbsp;&nbsp; 資&nbsp;&nbsp;&nbsp; 
		料</FONT></B></TD>
<tr><td class="footer"><div class="position">下標帳號：</div></td><td class="footer"><input type="text" name="acc_name"><BR></td></tr>
<tr><td class="footer"><div class="position">買家姓名：</div></td><td class="footer"><input type="text" name="buyers"><BR></td></tr>
<tr><td class="footer"><div class="position">行動電話：</div></td><td class="footer"><input type="text" name="m_phone"><BR></td></tr>
<tr><td class="footer"><div class="position">室內電話：</div></td><td class="footer"><input type="text" name="h_phone"><BR></td></tr>
<tr><td class="footer"><div class="position">電子信箱：</div></td><td class="footer"><input type="text" name="mail"><BR></td></tr>
<tr><td class="footer"><div class="position">地址：</div></td><td class="footer">縣市<select size=1 name="go_add00" onChange="renew(this.selectedIndex);" id="go_add00_id">
	<option selected>請選擇</option>
	<option value="台北市">台北市</option>
	<option value="新北市">新北市</option>
	<option value="基隆市">基隆市</option>
	<option value="桃園縣">桃園縣</option>
	<option value="新竹市">新竹市</option>
	<option value="新竹縣">新竹縣</option>
	<option value="苗栗縣">苗栗縣</option>
	<option value="台中市">台中市</option>
	<option value="彰化縣">彰化縣</option>
   	<option value="南投縣">南投縣</option>
        <option value="雲林縣">雲林縣</option>
        <option value="嘉義市">嘉義市</option>
        <option value="嘉義縣">嘉義縣</option>
        <option value="台南市">台南市</option>
        <option value="高雄市">高雄市</option>
        <option value="屏東縣">屏東縣</option>
        <option value="宜蘭縣">宜蘭縣</option>
        <option value="花蓮縣">花蓮縣</option>
        <option value="台東縣">台東縣</option>
        <option value="澎湖縣">澎湖縣</option>
        <option value="金門縣">金門縣</option>
        <option value="連江縣">連江縣</option>
</select>地區<select name="go_add01" size=1>
	<option value="">請先選取縣市</option>
</select><input type="text" name="go_add02"><BR></td></tr>
<tr><td class="footer"><div class="position">備註：</div></td><td class="footer"><textarea cols="47" rows="3" name="remark"></textarea><BR></td></tr></p>
</TABLE>
</div>

<BR><BR>

<div align="center">


<TABLE border="0" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0" bgcolor="#63B8FF" width="650" id="table5">
	<TR height="22" align="center" valign="bottom" bgcolor="#FF9191">
		<TD style="font-size: 10pt" bgcolor="#79BCFF" valign="middle" width="36"><b>
		<FONT color="#FFFFFF" size="3">序號</FONT></b></TD>
		<TD width="287" style="font-size: 10pt" bgcolor="#79BCFF" height="33" valign="center">
		<p align="center"><b><font size="3" color="#FFFFFF" >&nbsp;品項</font></b></TD>
		<TD width="287" style="font-size: 10pt" bgcolor="#79BCFF" height="33" valign="center">
		<p align="center">&nbsp;<b><font color="#FFFFFF" size="3">數量</font></b></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">1</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left" width="304">&nbsp
		<INPUT type="text" name="d1" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left" width="300">&nbsp
		<INPUT type="text" name="m1" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">2</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d2" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" class="footer" align="left">&nbsp
		<INPUT type="text" name="m2" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">3</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d3" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m3" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">4</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d4" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m4" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">5</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d5" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m5" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">6</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d6" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m6" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">7</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d7" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m7" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">8</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d8" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m8" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" width="36">9</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="d9" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">&nbsp
		<INPUT type="text" name="m9" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
</TABLE>

</div>

<div id="copy" style="display: none">
<div align="center">
<TABLE border="0" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0" bgcolor="#FFF4E9" width="650" id="table6">
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">10</TD>
		<TD width="304" style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d10" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD width="300" style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m10" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">11</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d11" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m11" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">12</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d12" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m12" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">13</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d13" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m13" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">14</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d14" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m14" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">15</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d15" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m15" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">16</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d16" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m16" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">17</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d17" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m17" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">18</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d18" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m18" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">19</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d19" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m19" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
	<TR height="30" align="center">
		<TD style="font-size: 10pt" bgcolor="#EEF7FF">20</TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="d20" size="20" style="width:290px; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF" onkeydown="if(event.keyCode==13)event.keyCode=9"></TD>
		<TD style="font-size: 10pt" bgcolor="#EEF7FF" align="left">
		<INPUT type="text" name="m20" size="20" style="width:41; border:1px solid #7B7B7B; font-family:Arial,Verdana,Helvetica; font-size:8pt; letter-spacing : 1px ; background-color:#FFFFFF; height:16" onkeydown="if(event.keyCode==13)event.keyCode=9" value="0"></TD>
	</TR>
</TABLE>
</div>
</div>
<span id="write"></span>
<div align="center"><input  onclick="checkkeyin();if(event) event.preventDefault()"  value="送出訂單" type="submit" name="submit"><input type="reset" name="reset" value="清除全部">
<input name="button" type="button" onclick="more()" value="增加品項欄位" style="font-size: 8 pt">
</div>
	</form>

</body>
</html>