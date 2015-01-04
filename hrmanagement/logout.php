<?php
		include('db/conn.php');
		$sql = 'update tbl_emplogin set logout=now() where emp_id ='. $_COOKIE['cid'].' and login_id='.$_COOKIE['cloginid'];
		mysql_query($sql);
        
		setcookie('cusername' , '');
		setcookie('cloginid','');
		setcookie('cid' , '');
		header("location:login.php");
		
		
?>