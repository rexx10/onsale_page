<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
		<title><?php echo $title."-".$title2; ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("/pic/scratches.png"); ?>" />
	</HEAD>
	<BODY background="<?php echo base_url("/pic/back.jpg"); ?>">
   <align="center" valign="middle"><img src="<?php echo base_url("/pic/login_logo.jpg"); ?>" border="0"></td>
   <form action="<?php echo base_url("/admin_login/check_login"); ?>" method="POST">                     
     
     <fieldset>
	   
      
       帳號：<input typt="text" Name="UserName" size="10">&nbsp;&nbsp;&nbsp;密碼：<input type="PASSWORD" Name="UserPWD" size="10">&nbsp;<input type="SUBMIT" value="登入">
       
     </fieldset>
    </form> 
<?php 
	    
    $this->load->library("session");
	
	if(isset($_SESSION["Error_type"])){
		
		$Error_type = $_SESSION["Error_type"];
		session_destroy();
		
	}
        
    if(!empty($Error_type)){
    	
		echo "<script type='text/javascript'>";
		echo "alert('".$Error_type."')";
		echo "</script>";
		
	}

?> 
  </BODY>
</HTML>
