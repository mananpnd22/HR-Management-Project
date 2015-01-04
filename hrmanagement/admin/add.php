<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}


include ('db/adminconn.php');




if(isset($_POST['Add']))
{
		

                 
				  	$name = $_POST['name'];
				 	$email =$_POST['email'];
			  		$adr= $_POST['adr'];
					$phone = $_POST['phone'];
					$dept = $_POST['dept'];
					$desg = $_POST['desg'];
					$salary = $_POST['sal'];
				 	 $joindate = $_POST['joindate'];
					$birthdate = $_POST['birthdate'];
					  $acno = $_POST['acno'];
					 $pwd=$_POST['pwd'];



      $sql="Insert into  tbl_emp (emp_id,emp_name, emp_email,emp_addr,emp_phone,emp_dept,emp_desg,emp_salary,emp_jdate, emp_bdate,emp_acno ,emp_pwd) values ('','$name','$email','$adr','$phone','$dept','$desg','$salary','$joindate','$birthdate','$acno','$pwd')";

      $res= mysql_query($sql);

            
		if($res>0)
		{
		
		 
		   // if row is inserted send mail to user
		   
		   	$submit = @$_POST['Add'];
			$email = @$_POST['email'];
			//$randpassword = mt_rand();
			$pwd = @$_POST['pwd'];
			require("phpmailer/class.phpmailer.php");
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->From = "mananpnd22@gmail.com";
			$mail->FromName  =  "Manan";
			$mail->AddAddress($email);
			//$mail->AddAddress("recipient_2@domain.com");
		 
			$mail->SMTPAuth = "true";
			$mail->Username = "mananpnd22@gmail.com";
			$mail->Password =  "manan$2204";
			$mail->Port  =  "465";
		 
			$mail->Subject = "Your New Password";
			$mail->Body = 'Your new password is: '.$pwd;;
			$mail->WordWrap = 50;
			if($submit==true)
			{
			if(!$mail->Send())
			{
		
				echo 'Message was not sent.'. $mail->ErrorInfo;
			}
			else
			{
				?><script type="text/javascript"> </script><?php
				echo '<script> alert("E-mail was sent")</script>';
				}
			 }
	//$email = $_REQUEST['email'] ;
			header("location:dashboard.php");
		}
		
		else
		{
		
			header("location:user.php");
			
			//echo " Error while Changing your details ";
		}


}





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="../../New folder/ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pack.js"></script>
   
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/graphs.js"></script>

 <script Language="JavaScript">
 
 function Validate()
{

	var name_str=document.addemp.name;
	var name= document.addemp.name.value;
	
	if(name.length=="")
	{
		alert("Please Enter Name");
		return (false);
	}
	
	var addr_str=document.addemp.adr;
	var addr= document.addemp.adr.value;
	
	if(addr.length=="")
	{
		alert("Please Enter Address");
		return (false);
	}
	
	var dept_str=document.addemp.dept;
	var dept= document.addemp.dept.value;
	
	if(dept.length=="")
	{
		alert("Please Enter Department");
		return (false);
	}
	
	var desg_str=document.addemp.desg;
	var desg= document.addemp.desg.value;
	
	if(desg.length=="")
	{
		alert("Please Enter Designation");
		return (false);
	}
	
	var sal_str=document.addemp.sal;
	var sal= document.addemp.sal.value;
	
	if(sal.length=="")
	{
		alert("Please Enter Salary");
		return (false);
	}
	if(isNaN(sal) || sal.indexOf(" ")!==-1)
	{
		alert("Enter only Numeric value");
		return (false);
	}
	
	var jdate_str=document.addemp.joindate;
	var jdate= document.addemp.joindate.value;
	
	if(jdate.length=="")
	{
		alert("Please Enter Join Date");
		return (false);
	}
	
	var bdate_str=document.addemp.birthdate;
	var bdate= document.addemp.birthdate.value;
	
	if(bdate.length=="")
	{
		alert("Please Enter Birth Date");
		return (false);
	}
	
	var z = document.addemp.phone.value;
	if(z==null || z=="")
	{
		alert("Phone No Can not be Empty");
		return (false);
	}
	if(isNaN(z) || z.indexOf(" ")!=-1)
	{
		alert("Enter Numeric value");
		return (false);
	}
	if(z.length <10 || z.length >10)
	{
		alert("Enetr Valid No");
		return (false);
	}
	
	var acno_str=document.addemp.acno;
	var acno= document.addemp.acno.value;
	
	if(acno.length=="")
	{
		alert("Please Enter Account Number");
		return (false);
	}
	else
	{
	var checkString = document.addemp.acno.value;
		if (checkString != "") 
		{
    		if ( /[^A-Za-z\d]/.test(checkString))
			{
        		alert("Please enter only letter and numeric characters");
        		document.addemp.acno.focus();
        		return (false);
    		}
		}
	}
	
	var checkpass=document.addemp.pwd.value;
	if(checkpass.length <= 6 || checkpass.length == 0 )
	{
		alert('Enter password more than 6 characters!');
		document.addemp.pwd.focus();
		return (false);
		
	}
	else
	{
		var checkString = document.addemp.pwd.value;
		if (checkString != "") 
		{
    		if ( /[^A-Za-z\d]/.test(checkString))
			{
        		alert("Please enter only letter and numeric characters");
        		document.addemp.pwd.focus();
        		return (false);
    		}
		}
	}
	
	return (true);	
}

function ValidateEmail() 
{

 	var mailchk = document.addemp.email.value;
   	if(mailchk == '')
	{
			alert("Please enter email address!");
			document.addemp.email.focus();
			 return (false);
	}
	else
	{
		 var iChars = "!`#$%^&*()+=-[]\\\';/{}|\":<>?~_";   
        var data = document.getElementById("email").value;
        for (var i = 0; i < data.length; i++)
        {      
        	if (iChars.indexOf(data.charAt(i)) != -1)
        	{    
        		alert ("Your E-mail has special characters. \nThese are not allowed.");
        		document.getElementById("email").value = "";
        		return false; 
        	} 
        }
	}
   
	return (true);
}

</script>
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">
<!-- HEADER STARTS -->	
<?php
include('include/subheader.php');
?>
<!-- HEADER ENDS -->
<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
<div class="grid_9">
  <h2 align="left"><img src="images/icon_users.png" width="48" height="48" />Add New  Employee Details </h2>
</div>
<br />
<br />
<br />
<br />
<form action="#" method="post" name="addemp" id="addemp" onSubmit="return ValidateEmail()" >
 
 <div>
 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td align="right" valign="top"><label>Name:</label></td>
         <td width="1%">&nbsp;</td>
         <td> <input type="text" name="name" class="smallInput"/></td>
       </tr>
       <tr>
         <td align="right" valign="top"><label>Email:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input name="email" id="email" type="text" class="smallInput"/></td>
       </tr>
       <tr>
         <td align="right" valign="top">Address:</td>
         <td width="1%">&nbsp;</td>
         <td><input name="adr" type="text" class="largeInput"/></td>
       </tr>
       <tr>
         <td align="right" valign="top"><label>Phone:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input type="text" name="phone" class="smallInput" maxlength="10"/></td>
       </tr>
       <tr>
         <td align="right" valign="top"><label>Department:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input type="text" name="dept" class="smallInput"/></td>
       </tr>
       <tr>
         <td align="right" valign="top"><label>Designation:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input type="text" name="desg" class="smallInput"/></td>
       </tr>
	   <tr>
         <td align="right" valign="top"><label>Basic Salary:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input type="text" name="sal" class="smallInput"/></td>
       </tr>
       <tr>
         <td align="right" valign="top"><label>JoinDate:</label></td>
         <td width="1%">&nbsp;</td>
         <td> <input type="date" name="joindate" class="smallInput" /></td>
       </tr>
	    <tr>
         <td align="right" valign="top"><label>BirthDate:</label></td>
         <td width="1%">&nbsp;</td>
         <td>  <input type="date"  name="birthdate" class="smallInput"/></td>
       </tr>
	    <tr>
         <td align="right" valign="top"><label>Account Number:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input type="text" name="acno" class="smallInput"/></td>
       </tr>
	   <tr>
         <td align="right" valign="top"><label>Password:</label></td>
         <td width="1%">&nbsp;</td>
         <td><input type="password" name="pwd" class="smallInput"/></td>
       </tr>
	   
	   <tr>
         <td colspan="2" >&nbsp;</td>
         
         <td><input name='Add' type="submit" class="button"  value='Add' onclick="return Validate()" />&nbsp;&nbsp;<a href="user.php"><input name="btnback" type="button" class="button" id="btnback"  value="Back" /></a></td>
       </tr>
	   
    </table>
     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <span> 
      &nbsp;&nbsp;&nbsp;&nbsp;</span>
   
     <?php
	
	//$message = $_REQUEST['message'] ;
?>

   </a> </p>
 </div>
</form>
</body>
</html>