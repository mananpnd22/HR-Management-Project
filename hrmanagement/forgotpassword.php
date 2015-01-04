<?php session_start();
include('db/conn.php');

// function that generates random number


if(isset($_POST['submit']))
{

	
	//get posted email id
	$email = $_POST['username'];
	$sel_emp = "Select * from tbl_emp where emp_email = '$email'";
	$row = mysql_query($sel_emp);
	
	if(mysql_num_rows($row) == 0) 
	{
		//session error here if employee was not there
		$_SESSION['strerr']= 'Employee Does not  exist plese try again..';
		
	}
	else
	{
					// mail function here
			 
		 				$submit = @$_POST['submit'];
						$email = @$_POST['username'];
						$randpassword = mt_rand();
						require("phpmailer/class.phpmailer.php");
						$mail = new PHPMailer();
						$mail->IsSMTP();
						$mail->Host = "smtp.gmail.com";
						$mail->From = "mananpnd22@gmail.com";
						$mail->FromName  =  "Manan";
						$mail->AddAddress($email);
						
					 
						$mail->SMTPAuth = "true";
						$mail->Username = "mananpnd22@gmail.com";
						$mail->Password =  "manan$2204";
						$mail->Port  =  "465";
					 
						$mail->Subject = "Your New Password";
						$mail->Body = 'Your new password is: '.$randpassword;;
						$mail->WordWrap = 50;
						if($submit==true)
						{
						if(!$mail->Send())
						{
							
							//echo '<script> alert("Message was not sent")</script>';
							?><br/> <br/>
							<?php echo 'Message was not sent.'. $mail->ErrorInfo;
						}
						else
						{
							?><script type="text/javascript"> </script><?php
							echo '<script> alert("E-mail was sent")</script>';
						}
					 }
							
											
											 $sql = "update tbl_emp set emp_pwd= '$randpassword' where emp_email = '$email'";
											mysql_query($sql);
											header('location:login.php');
											
											

	
	}
	

}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Hr Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function ValidateEmail() 
{

 	var emailchk = forgotpass.username.value;
   	if(emailchk == '')
	{
			alert("Please enter email address!");
			document.forgotpass.username.focus();
			 return (false);
	}
	else
	{
		 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(forgotpass.username.value))
 								return (true);
	}
   
	alert("You have entered an invalid email address!");
	document.forgotpass.username.focus();
	
    return (false)
}
</script>
</head>
<body style="padding-top:150px;">

<div class="main_index" >
<div class="content" >
<h2>Forgot Password</h2>
				<div class="col1">
				<div class="wrapper pad_bot1">
<div class="left_my marg_right1"></div>
<p class="strmsg">
				<?php 
				if(isset($_POST['submit']) && $_SESSION['strerr'] != '' )
				{ 
		  			echo $_SESSION['strerr'];
					 $_SESSION['strerr'] = '';
					 }
					 ?> </p>
						<form name="forgotpass" action="#" id="forgotpass" method="post">
						<table border="0" width="100%" >
                        <tr>
                        <td align="right" class="color1" width="50%" nowrap="nowrap">E-mail Id</td>
                        <td>:</td>
                        <td> <input type="Text" name="username" id="username" class="tb7" > </td>
                        </tr>
                        
                        <tr>
                         <td align="right">&nbsp;</td>
                         <td>&nbsp;</td>
                        <td align="middle"> <label><span><a href="login.php"><input name="btnback" type="button" class="submit2" id="btnback"  value="Back" /></a>
                                </span>
                          <input name="submit" type="submit" class="submit2" value="Send E-Mail"  onclick="return ValidateEmail(document.forgotpass.username)"  />

                        </label> </td>
                        <tr>
                         <td align="right">&nbsp;</td>
                         <td>&nbsp;</td>
                      
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
