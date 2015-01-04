<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}



include('db/adminconn.php');
// Select Employee details here

	$sqlselect_news = "Select * from tbl_news";
	$rowallnews = mysql_query($sqlselect_news);
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News & Events</title>
<link rel="stylesheet" type="text/css" href="../css/960.css" />

<link rel="stylesheet" type="text/css" href="../dd.css" />
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/text.css" />
<link rel="stylesheet" type="text/css" href="../css/blue.css" />
<link type="text/css" href="../css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="../../../New folder/ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="../js/ui.core.js"></script>
	<script type="text/javascript" src="../js/ui.sortable.js"></script>    
    <script type="text/javascript" src="../js/ui.dialog.js"></script>
    <script type="text/javascript" src="../js/ui.datepicker.js"></script>
    <script type="text/javascript" src="../js/effects.js"></script>
    <script type="text/javascript" src="../js/flot/jquery.flot.pack.js"></script>
   
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
    <script id="source" language="javascript" type="text/javascript" src="../js/graphs.js"></script>

    <style type="text/css">
<!--
.style3 {
	font-size: 18px;
	color: #000000;
	font-weight: bold;
}
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
    <div class="grid_9"><img src="icon_clock.png" width="45" height="38" /><span class="style3"> View News and Events</span></div>
      <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
      <p>
        <!-- FIRST SORTABLE COLUMN START -->
      </p>
      <p>
        <!-- FIRST SORTABLE COLUMN END -->
        <!-- SECOND SORTABLE COLUMN START -->
        <!-- <div class="column">
      <!--THIS IS A PORTLET-->
        <!--  SECOND SORTABLE COLUMN END -->
      </p>
      <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
	<?php if(isset($_REQUEST['resflag']) == '1'){?>
	 <p class="info" id="success"><span class="info_inner">User Details are Edited sucessfully.</span></p>
	 <?php } $_REQUEST['resflag'] = '';  ?>
      
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet" align="center">
		  	 <thead>
              <tr>
				<th width="90" scope="col">News No.</th>
                <th width="150" scope="col">News Title</th>
                <th width="102" scope="col">News Description</th>
                <th width="109" scope="col">News Date</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              
			  <?php
			  $chkcnt = 1;
			  while($rescontent = mysql_fetch_array($rowallnews))
			  {
			  	
			   ?>
			  <tr>
				<td><?php echo $chkcnt;?></td>
                <td><?php echo $rescontent['news_title'];?></td>
                <td><?php echo $rescontent['news_desc'];?></td>
                <td><?php echo date('d.m.Y', strtotime($rescontent['news_date']));?></td>
                <td width="90">  <a href="editnews.php?id='<?php echo $rescontent['news_id'];?>'" class="edit_icon" title="Edit"></a> <a href="delnews.php?delid='<?php echo $rescontent['news_id'];?>'" class="delete_icon" title="Delete"></a></td>
              </tr>
             <?php $chkcnt++; } ?> 
              
              
              
            </tbody>
          </table>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		
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
