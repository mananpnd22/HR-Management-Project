<?php
if(isset($_COOKIE['cusername']))
{
header("location:login.php");
}

include ('db/conn.php');


$usname = $_COOKIE['cusername'];
$show_name= "select emp_name from tbl_emp where emp_email = '$usname'"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);



 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myaccount</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {font-size: 13px}
-->
</style>
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
						<div class="left_my marg_right1"><a href=""><img src="images/page2_img1.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1"><a href="editprofile.php" class="color1 style3" style="text-decoration:none">Edit Your Personal Details</a></strong></p>
						<p>You can Edit your Personal Details here. </p>
					</div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img2.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1"><a href="changepassword.php" class="color1 style3" style="text-decoration:none">Change Your Password</a> </strong></p>
						<p>You can Change your Password here. </p>
					</div>
				    <div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img3.png" alt="" /></a></div>
					  <p class="color1"><strong class="color1"><a href="otherdetail.php" class="color1 style3" style="text-decoration:none">Other Details</a> </strong></p>
					  <p class="color1">&nbsp;</p>
					  <p>You can Check your Other Details like Overtime, DA,HRA,Tax related details here. </p>
				  </div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"></a></div>
					  <p class="color1">&nbsp;</p>
				  </div>
				</div>
				
	</div>
</div>