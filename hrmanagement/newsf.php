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


$sqlnews= "select * from tbl_news"; 
$nresult = mysql_query ($sqlnews);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Newsletter</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />

<style>
   table {table-layout:inherit; width:700px;}
   table td {border:solid 1px #333; width:100px; word-wrap:break-word;}
   .style1 {font-size: 16px}
.style4 {font-size: 14px; font-weight: bold; color: #0066FF; }
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
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img2.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1"><a href="changepassword.php" class="color1 style1" style="text-decoration:none">News</a> </strong></p>
						<p>You can View Here the Upcoming News. </p>
					</div>
					
					<table border="1" width="50%">
					<tr>
						<td><span class="style4">Sr no.</span></td>
						<td><span class="style4">News Title</span></td>
						<td><span class="style4">News Description</span></td>
					  </tr>
					<?php
						$i = 1;
					 while($nrow = mysql_fetch_array($nresult))
					{?>
					  <tr>
						<td><?php echo $i;?></td>
						<td><?php echo $nrow['news_title']?></td>
						<td><?php echo $nrow['news_desc']?></td>
					  </tr>
					  <?php $i++; } ?>
					</table>

					
				</div>
				
	</div>
</body>
</html>																																																													