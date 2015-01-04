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

$show_cont= "select * from tbl_content where title LIKE '%aboutus%'"; 
$result1 = mysql_query ($show_cont);
$row1 = mysql_fetch_array($result1);

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {font-size: 24px}
body {
	margin-right: 20px;
}
.style4 {
	color: #000000;
	font-size: 16px;
}
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
				<h2 align="right"><img src="5568424.png" alt="" width="894" height="301" /></h2>
				<p align="right">&nbsp;</p>
				<p align="right">&nbsp;</p>
				<div class="" align="right">
				  <!-- Content here-->
				  <?php echo html_entity_decode(stripslashes($row1['content_desc']));?>
				  
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1">
						  <div align="right"><a href="#"></a></div>
						</div>
					  <p align="right" class="color1">&nbsp;</p>
				  </div>
	</div>
	</div>
</div>