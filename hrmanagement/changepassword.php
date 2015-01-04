<?php
if(!isset($_COOKIE['cusername']))
{
header("location:login.php");
}

include ('db/conn.php');

$submit= @$_POST['btngo'];
$usname = $_COOKIE['cusername'];
$show_name= "select emp_name from tbl_emp where emp_email = '$usname'"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);

$show_oldpass = "select emp_pwd from tbl_emp where emp_email = '$usname'";
$res = mysql_query($show_oldpass);
$row1 = mysql_fetch_array($res);

$current = @trim($_POST['oldpass']);
$new = @trim($_POST['pwd1']);
$confirm = @trim($_POST['pwd2']);
if($submit==true)
{
if ( @$_POST['pwd1'] == @$_POST['pwd2'] )
{
	$do = mysql_query("UPDATE tbl_emp SET emp_pwd = '$new' WHERE emp_pwd = '$current' LIMIT 1") or die(mysql_error());
	?>
			<script type='text/javascript'>
			alert('Your Password was Successfully Changed.');
			window.location.href = 'myaccount.php';
			</script>		
			<?php
	//echo '<script> alert("Your Password was Successfully Changed.") 
	//header('location:myaccount.php');
}
else
{
	?>
			<script type='text/javascript'>
			alert('Please Re-enter Password.');
			window.location.href = 'changepassword.php';
			</script>		
			<?php
	//echo '<script> alert("Please Re-enter Password.")
}
}

?>		

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Myaccount</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function ValidatePassword1()
{
	
	var checkpass=document.changepassword.pwd1.value;
	if(checkpass.length <= 6 || checkpass.length == 0 )
	{
		alert('Enter password more than 6 characters!');
		document.changepassword.pwd1.focus();
		return (false);
		
	}
	else
	{
		var checkString = document.changepassword.pwd1.value;
		if (checkString != "") 
		{
    		if ( /[^A-Za-z\d]/.test(checkString))
			{
        		alert("Please enter only letter and numeric characters");
        		document.changepassword.pwd1.focus();
        		return (false);
    		}
		}
	}
	return (true);
	
   
	
}

</script>
</head>
<body style="padding-top:150px;">

<div id="main">
<!-- header begins -->
<?php include('include/header.php');?>
<!-- header ends -->
<div class="top">
	
	<?php  include('include/middleheader.php');?>
    
     <!-- scrollable -->	   
			  	
</div>


<div class="main_index">
<div class="content">
				<h2> <?php echo  ucfirst("Hello ".$row[0])?></h2>
				<div class="col1">
					
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img2.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1"><a href="changepassword.php" class="color1" style="text-decoration:none">Change Your Password</a> </strong></p>
						<p>You can change your password here. </p>
					</div>
					<form name="changepassword" id="changepassword" action="#" method="post">
								<div class="wrapper pad_bot1">
						
						<table align="left" width="100%" border="0" cellspacing="1" cellpadding="1">
                          <tr>
                            <td width="19%" align="right" class="color1">Old Password</td>
                            <td width="5%" align="center" class="color1">:</td>
                            <td><input name="oldpass" type="password" class="tb7" id="oldpass" value="<?php echo  ucfirst($row1['emp_pwd'])?>"/></td>
                          </tr>
                          <tr>
                            <td width="19%" align="right" class="color1">New Password</td>
                            <td width="5%" align="center" class="color1">:</td>
                            <td><input type="password" name="pwd1" id="pwd1" method="post" action="#" class="tb7"/></td>
                          </tr>
						  <tr>
						  	<td width="19%" align="right" class="color1">Confirm Password</td>
							<td width="5%" align="center" class="color1">:</td>
							<td><input type="password" name="pwd2" id="pwd2" class="tb7" /></td>
							</tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td width="5%">&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right">&nbsp;</td>
                            <td align="center" width="5%"></td>
                            <td align="left"><input name="btngo" type="submit" class="submit2" id="btngo" value="Go" onClick="return          ValidatePassword1(document.changepassword.pwd1)"/>&nbsp; 
							<span><a href="myaccount.php"><input name="btnback" type="button" class="submit2" id="btnback"  value="Back" /></a>
                                </span></td>
                           </tr>
                        </table>
						<p class="pad_bot1">&nbsp;</p>
				  </div>
				  </form>
				</div>
				
	</div>
</body>
</html>																																																													