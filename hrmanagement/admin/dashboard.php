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
<title>Dashboard</title>
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
.style1 {color: #000000}
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
      <h1 align="justify" class="dashboard style1"> Dashboard </h1>
    </div>
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
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Last Registered users </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
		  	 <thead>
              <tr>
				<th width="90" scope="col">Id</th>
                <th width="150" scope="col">Name</th>
                <th width="102" scope="col">Department</th>
                <th width="109" scope="col">Date</th>
                <th width="129" scope="col">Location</th>
                <th width="171" scope="col">E-mail</th>
                <th width="123" scope="col">Phone</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              
			  <?php
			  $chkcnt = 1;
			  while($empres = mysql_fetch_array($rowallemp))
			  {
			  	
			   ?>
			  <tr>
				<td><?php echo $empres['emp_id'];?></td>
                <td><?php echo $empres['emp_name'];?></td>
                <td><?php echo $empres['emp_dept'];?></td>
                <td><?php echo date('d.m.Y', strtotime($empres['emp_jdate']));?></td>
                <td><?php echo $empres['emp_addr'];?></td>
                <td><?php echo $empres['emp_email'];?></td>
                <td><?php echo $empres['emp_phone'];?></td>
                <td width="90">  <a href="admeditemp.php?id='<?php echo $empres['emp_id'];?>'" class="edit_icon" title="Edit"></a> <a href="del.php" class="delete_icon" title="Delete"></a></td>
              </tr>
             <?php $chkcnt++; } ?> 
              
              
              <tr class="footer">
                <td colspan="4">                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <!--<div class="pagination">
                    <span class="previous-off">&laquo; Previous</span>
                    <span class="active">1</span>
                    <a href="../query_41878854">2</a>
                    <a href="../query_8A8058C2">3</a>
                    <a href="../query_2823E521">4</a>
                    <a href="../query_B322F5B7">5</a>
                    <a href="../query_3A2A444D">6</a>
                    <a href="../query_912D14DB">7</a>
                    <a href="../query_41878854" class="next">Next &raquo;</a>
                    </div>-->  
                <!--  PAGINATION END  -->       
                </td>
              </tr>
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
