
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/tblbrd.css" />

<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link rel="stylesheet" type="text/css" href="dd.css" />
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
<link rel="stylesheet" type="text/css" href="dd.css" />


	<style>
   table {table-layout:inherit; width:930px;}
   table td {border:solid 1px #333; width:100px; word-wrap:break-word;}
   </style>
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
    <h1 class="dashboard">Delete</h1>
    </div>
    
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>




<form  name="form1" id="x" action="deletemultiple.php" method="post">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hr_mgt", $con);

$result = mysql_query("SELECT * FROM tbl_emp");
?>
<table id="mytable" cellspacing="0" style="border: 9px;" >

<tr>
  <td scope="col" abbr="" class="nobg">&nbsp;&nbsp;</td>
  <td scope="col" abbr="name" style="width: 159px;"><?php echo"Name";?></td>
  <td scope="col" abbr="Address" style="width: 259px;"><?php echo"Address";?></td>
  <td scope="col" abbr="phno" style="width: 259px;"> <?php echo"Phone No";?> </td>
  <td scope="col" abbr="Email" style="width: 159px;"><?php echo"Email";?></td>
  <td scope="col" abbr="dept" style="width: 259px;"> <?php echo"Dept";?> </td>
  <td scope="col" abbr="dept" style="width: 259px;"> <?php echo"Designation";?> </td>
  <td scope="col" abbr="dept" style="width: 259px;"> <?php echo"Salary";?> </td>
  <td scope="col" abbr="join date" style="width: 259px;"> <?php echo"Birth Date";?> </td>
  <td scope="col" abbr="join date" style="width: 259px;"> <?php echo"Join Date";?> </td>
  <td scope="col" abbr="acno" style="width: 259px;"> <?php echo"Ac No";?> </td>
  
</tr>
<?php

while($row = mysql_fetch_array($result))
  {
  ?>
  <tr>
  
  <td scope='row' class='spec'> <input name="selector[]" type="checkbox" value="<?php echo $row['emp_id'];?>"> </td>
   
   <td> <?php echo $row['emp_name'];?> </td> 
   
   <td style='overflow:hidden;'> <?php echo $row['emp_addr'];?> </td>
   
   <td style='overflow:hidden;'> <?php echo $row['emp_phone'];?> </td>
   
   <td> <?php echo $row['emp_email'];?> </td>
  
   <td style='overflow:hidden;'> <?php echo $row['emp_dept'];?> </td>
  
   <td style='overflow:hidden;'> <?php echo $row['emp_desg'];?> </td>
  
   <td style='overflow:hidden;'> <?php echo $row['emp_salary'];?> </td>
  
   <td style='overflow:hidden;'> <?php echo $row['emp_bdate'];?> </td>
 
   <td style='overflow:hidden;'> <?php echo $row['emp_jdate'];?> </td>

   <td style='overflow:hidden;'> <?php echo $row['emp_acno'];?> </td>

   

   
   
  </tr> 
  <?php
  
  }
?>   
</table>
<?php
  

mysql_close($con);
?>
<input name="button" type="button" class="button" onclick="var e = document.getElementById('x'); e.action='deletemultiple.php'; e.submit();" value="DELETE" />
<span><a href="dashboard.php"><input name='Cancel' type="button" class="button" value='CANCEL'>
</a></span>

</form>
<?php
include('include/subfooter.php');
?>
</div>
</div>
</body>
</html>