<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}


include('db/adminconn.php');
// Select Employee details here

	$sqlselect_allemp = "Select * from tbl_emp";
	$rowallemp = mysql_query($sqlselect_allemp);
	
	
	

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
<!-- HEADER ENDS -->
<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
      <h2 align="left"><img src="images/icon_users.png" width="48" height="48" /><span class="style1">Users</span></h2>
    </div>
    <p>
      <!--RIGHT TEXT/CALENDAR-->
    </p>
    <p>&nbsp; </p>
    <!--RIGHT TEXT/CALENDAR END-->
<div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
      <p>
        <label></label>
      </p>
      <p>
        <!-- FIRST SORTABLE COLUMN START -->
        <!-- FIRST SORTABLE COLUMN END -->
        <!-- SECOND SORTABLE COLUMN START -->
        <!-- <div class="column">
      <!--THIS IS A PORTLET-->
        <!--  SECOND SORTABLE COLUMN END -->
        <span><a href="search.php"> 
        <input name="VIEW EMPLOYEES" type="submit" class="button" id="VIEW EMPLOYEES" value="VIEW EMPLOYEES" />
        </a></span>
        <label>
        <span><a href="add.php"><input name="ADD EMPLOYEE" type="submit" class="button" id="ADD EMPLOYEE" value="ADD  EMPLOYEES"/>
        </a></span>
        </label>
      </p>
      <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <!--  END #PORTLETS -->
</div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER STARTS -->
<?php
include('include/subfooter.php');
?>
<!-- FOOTER END -->
</body>
</html>
