<?php
if(!isset($_COOKIE['cusername']))
{
header("location:myaccount.php");
} 
session_start();
include('db/conn.php');

// login to system

if(isset($_POST['login']))
{

	
	 $username = $_POST['username'];
	 $pass = $_POST['password'];
	
	// select query to emp table 
	$sel_emp = "Select emp_id from tbl_emp where emp_email = '$username' and 	emp_pwd = '$pass'";
	$row = mysql_query($sel_emp);
	
	if(mysql_num_rows($row) == 0) 
	{
		//session error here if employee was not there
		$_SESSION['strmsg']= 'Employee Does not  exist plese try again..';
		
	}
	else
	{
		$result = mysql_fetch_array($row);
		// insert data into login table
		$empid = $result['emp_id'];
		$ins_sql = "Insert into  tbl_emplogin (emp_id , login ,logout)values( $empid, now(), '')";
		$insid = mysql_query($ins_sql);
		
		// set cookie here
		
		setcookie('cusername' , $username);
		setcookie('cid' , $empid);
		setcookie('cloginid',$insid);
		header("location:myaccount.php");
	
	}
	
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HR Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function ValidatePassword()
{
	
	var checkpass=document.frmlogin.password.value;
	if(checkpass.length <= 6 || checkpass.length == 0 )
	{
		alert('Enter password more than 6 characters!');
		document.frmlogin.password.focus();
		return (false);
		
	}
	else
	{
		var checkString = document.frmlogin.password.value;
		if (checkString != "") 
		{
    		if ( /[^A-Za-z\d]/.test(checkString))
			{
        		alert("Please enter only letter and numeric characters");
        		document.frmlogin.password.focus();
        		return (false);
    		}
		}
	}
	return (true);
	
   
	
}

function ValidateEmail(mail) 
{

 	var emailchk = frmlogin.username.value;
   	if(emailchk == '')
	{
			alert("Please enter email address!");
			document.frmlogin.username.focus();
			 return (false);
	}
	else
	{
		var iChars = "!`#$%^&*()+=-[]\\\';/{}|\":<>?~_";   
        var data = document.getElementById("username").value;
        for (var i = 0; i < data.length; i++)
        {      
        	if (iChars.indexOf(data.charAt(i)) != -1)
        	{    
        		alert ("Your E-mail has special characters. \nThese are not allowed.");
        		document.getElementById("username").value = "";
        		return false; 
        	} 
        }
 								
	}
   return (true);
	
}
</script>
</head>
<body style="padding-top:150px;">

<div class="main_index" >
<div class="content" >
<h2>Employee Login</h2>
				<div class="col1">
				<div class="wrapper pad_bot1">
				<p class="strmsg">
				<?php 
				if(isset($_POST['login']) && $_SESSION['strmsg'] != '' )
				{ 
		  			echo $_SESSION['strmsg'];
					 $_SESSION['strmsg'] = '';
					 }
					 ?> </p>
<div class="left_my marg_right1"></div>
			
            <form name="frmlogin" action="#" id="frmlogin" method="post" onsubmit="return ValidatePassword()">
						<table border="0" width="100%" >
                        <tr>
                        <td align="right" class="color1" width="50%" nowrap="nowrap">USER NAME</td>
                        <td>:</td>
                        <td> <input type="Text" name="username" id="username" class="tb7" maxlength="25"> </td>
                        </tr>
                        <tr>
                        <td align="right" class="color1" nowrap="nowrap">PASSWORD</td>	
                         <td>:</td>
                        <td><input type="password" name="password" id="password" class="tb7" maxlength="20"/></td>
                        </tr>
                        <tr>
                         <td align="right">&nbsp;</td>
                         <td>&nbsp;</td>
                     
                        <td align="middle"><input type="submit" name="login" value="Login" id="login"  class="submit2"
                         onclick="return ValidateEmail(document.frmlogin.username)"/></td>
                             </tr>
                        <tr>
                         <td align="right">&nbsp;</td>
                         <td>&nbsp;</td>
                        <td align="right"><a href="forgotpassword.php" class="color1" >Forgot Password??</a></td>
                        </tr>
                        </table>
                    </form>
    					</div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"></div>
						<p class="pad_bot1">&nbsp;</p>
					</div>
				</div>
</div>
</div>
</body>
</html>
