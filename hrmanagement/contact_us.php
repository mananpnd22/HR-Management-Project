<?php
if(!isset($_COOKIE['cusername']))
{
header("location:login.php");
}

include ('db/conn.php');


$usname = $_COOKIE['cusername'];
$show_name= "select emp_name from tbl_emp where emp_email = '$usname'"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);


$show_cont= "select * from tbl_content where title LIKE '%contactus%'"; 
$result1 = mysql_query ($show_cont);
$row1 = mysql_fetch_array($result1);



 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-right: 20px;
}
.style6 {font-size: 24px}
.style7 {font-size: 16px}
.style11 {
	font-size: 32px;
	color: #0066CC;
}
.style12 {color: #F0F0F0}
.style13 {font-weight: bold; color: #0099FF; font-size: 30px;}
.style14 {font-size: 28px; color: #0066CC; }
-->
</style>
</head>
<body style="padding-top:150px;">

<div id="main">
<!-- header begins -->
<?php include('include/header.php');?>
<!-- header ends -->
<div class="main_index">
<div class="content">
				<h2 align="right"> <?php echo  ucfirst("Hello ".$row[0])?></h2>
				<h2 align="right"><img src="8710252_orig.png" alt="" width="720" height="257" /></h2>
				<p align="right">&nbsp;</p>
				<p align="right">&nbsp;</p>
				
				<!-- Content here-->
				<?php echo $row1['content_desc'];?>
				
				
				
  </div>
</div>