<?php
if(!isset($_COOKIE['cadmusername']))
{
header("location:admlogin.php");
}

include ('db/adminconn.php');


$usname = $_COOKIE['cadmusername'];
$show_name= "select admin_name from tbl_admin where admin_email = '$usname'"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);

 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deashboard</title>
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
.style2 {
	background: url(../images/but_login_span.gif) left top no-repeat;
	background-color:#000000
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size:18px;
	font-weight: bold;
	color: #ffffff;
	text-decoration: none;
	padding: 0px 2px 0px 2px;
	width: 79px;
	height: 16px;
	margin: 0px 0px 0px 0px;
	
}
-->
</style>
<div class="grid_8" id="logo"><?php echo  ucfirst("Hello ".$row[0])?></div>
    <div class="submit2">
<!-- USER TOOLS START -->
      <div class="style2" id="user_tools"><a href="admlogout.php">Logout</a></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="dashboard.php"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
		   <li class="item middle" id="four"><a href="user.php" class="main"><span class="outer"><span class="inner users">Users</span></span></a></li>    
		   <li class="item middle" id="seven"><a href="payroll.php" class="main"><span class="outer"><span class="inner payroll">Payroll</span></span></a></li>  
		 <li class="item middle" id="two"><a href="contentview.php" class="main"><span class="outer"><span class="inner content">Content</span></span></a></li>
		<li class="item middle" id="six"><a href="newsview.php" class="main"><span class="outer"><span class="inner event_manager">News and Events</span></span></a></li> 
		<li class="item middle" id="seven"><a href="newsletterview.php" class="main"><span class="outer"><span class="inner newsletter">Newsletter</span></span></a></li>
		<li class="item middle" id="three"><a href="report.php"><span class="outer"><span class="inner reports png">Reports</span></span></a></li>
		
		
		
		               
     <?php 	//<li class="item last" id="eight"><a href="#" class="main"><span class="outer"><span class="inner settings">Settings</span></span></a></li>   ?>      
    </ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="dashboard.php"><span>Dashboard elements</span></a></li>
                      <?php //<li><a href="payroll.php"><span>Payroll System</span> </a></li>  ?>
                      <li><a href="content.php"><span>Content View</span></a></li>
					  <li><a href="news.php"><span>News And Events</span></a></li>
					  <li><a href="newsletter.php"><span>Newsletter</span></a></li>
					  
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
</div>
<!-- HIDDEN SUBMENU END -->  
