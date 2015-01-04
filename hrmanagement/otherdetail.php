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


$usal = $_COOKIE['cid'];
$show_sal= "select emp_salary,emp_id from tbl_emp where emp_id= '$usal'"; 
$res = mysql_query ($show_sal);
$row1 = mysql_fetch_array($res);


// salary table details
$uid = $_COOKIE['cid'];
$show_payslip = "select * from tbl_payroll_master where emp_id= '$uid' ORDER BY payroll_id DESC limit 0,1"; 
$res_payslip = mysql_query ($show_payslip);
$row_payslip = mysql_fetch_array($res_payslip);
//echo"<pre>";
//print_r($row_payslip);

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
<style type="text/css">
<!--
.style1 {font-size: 12%}
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
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img3.png" alt="" /></a></div>
						<p class="color1"><strong class="color1"><a href="otherdetail.php" class="color1" style="text-decoration:none">Other Details</a> </strong></p>
						<p class="color1">&nbsp;</p>
						<p>You can Check your Other Details like Overtime, DA,HRA,Tax related details here. </p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						
						<?php
						
						
						?>
						
						<table width="100%" border="0" cellspacing="1" cellpadding="1">
						 <tr>
                            <td width="34%" align="right" class="color1">Basic Salary</td>
                            <td width="10%" align="center" class="color1">:</td>
                            <td width="56%" align="left"><label>
                              <input name="textfield" type="text" class="tb7" readonly="readonly" value="<?php echo $row1['emp_salary'];?>" />
                            </label></td>
                          </tr>
                          <tr>
                            <td align="right" class="color1">DA</td>
                            <td align="center" class="color1">:</td>
                            <td align="left"><label>
                              <input name="textfield2" type="text" class="tb7" readonly="readonly" value="<?php echo $row_payslip['emp_da'];?>" />
                            </label></td>
                          </tr>
                          <tr>
                            <td align="right" class="color1">HRA</td>
                            <td align="center" class="color1">:</td>
                            <td align="left"><label>
                              <input name="textfield3" type="text" class="tb7" readonly="readonly" value="<?php echo $row_payslip['emp_hra'];?>" />
                            </label></td>
                          </tr>
                          <tr>
                            <td align="right" class="color1">Professional Tax</td>
                            <td align="center" class="color1">:</td>
                            <td align="left"><label>
                              <input name="textfield4" type="text" class="tb7" readonly="readonly" value="<?php echo $row_payslip['emp_pt'];?>" />
                            </label></td>
                          </tr>
						  <tr>
                            <td align="right" class="color1">Income Tax</td>
                            <td align="center" class="color1">:</td>
                            <td align="left"><label>
                              <input name="textfield5" type="text" class="tb7" readonly="readonly" value="<?php echo $row_payslip['emp_it'];?>" />
                            </label></td>
                          </tr>
						  <tr>
                            <td align="right" class="color1">Provident Fund</td>
                            <td align="center" class="color1">:</td>
                            <td align="left"><label>
                              <input name="textfield6" type="text" class="tb7" readonly="readonly" value="<?php echo $row_payslip['emp_pf'];?>" />
                            </label></td>
                          </tr>
						   <tr>
                            <td width="34%" align="right" class="color1">Gross Salary</td>
                            <td width="10%" align="center" class="color1">:</td>
                            <td width="56%" align="left"><label>
                              <input name="textfield7" type="text" class="tb7" readonly="readonly" value="<?php echo $row_payslip['emp_gs'];?>" />
                            </label></td>
                          </tr>
                          <tr>
                            <td align="right" class="color1">&nbsp;</td>
                            <td align="center" class="color1"><span class="style1"></span></td>
                            <td align="left">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right" class="color1">&nbsp;</td>
                            <td align="center" class="color1"><span class="style1"></span></td>
                            <td align="left"><label>
                             <span><a  href="myaccount.php"> <input name="btnok" type="submit" class="submit2" id="btnok" value="OK" /></a></span>
                             <span><input name="Submit" type="submit" class="submit2" value="Get Payslip" onclick="window.open('payslip.php?id=<?php echo $row1['emp_id'];?>','width=500,height=400')"/></span>
                            </label></td>
                          </tr>
                        </table>
						
						<p>&nbsp;</p>
				  </div>
				</div>
				
				
	</div>
</div>