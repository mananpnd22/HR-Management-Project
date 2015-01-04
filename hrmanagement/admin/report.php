<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}


include ('db/adminconn.php');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="dd.css" />
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

    <style type="text/css">
<!--
.style1 {font-size: 22px}
-->
    </style>
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">
<!-- HEADER STARTS -->	
<?php
include('include/subheader.php');
?>
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
  <h2 align="left"><img src="images/icon_reports.png" width="48" height="48" /><span class="style1">Generate Employees Report</span> </h2>
</div>
<p><br />
    </p>
<p><br />
  </p>
<p><br />
    
  
<div>
  
  
</p>

<form name="frm" action="reportemp.php" method="post">
<span><a href="reportemp.php"><input name='report' type='submit' class="button" value='REPORT' /></a></span>
<span><a href="dashboard.php"><input name='Cancel' type="button" class="button" value='CANCEL'/> </a></span>
</form>

   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
</div>

</body>
</html>