<?php
if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}

include('db/adminconn.php');
// Select Employee details here
if(isset($_POST['submit']))
{
		
	
                 
				  	$title = $_POST['title'];
				 	$desc = html_entity_decode(addslashes($_POST['desc']));
			  		  
        $sqlcontent="Insert into  tbl_content (title, content_desc, content_date) values ('$title','$desc',now())";
	      $res = mysql_query($sqlcontent);
		  
		  header("location:contentview.php");

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Content</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />
<link type="text/css" href="js/wysiwyg/jquery.wysiwyg.css" rel="stylesheet" />
    <script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/wysiwyg/jquery.wysiwyg.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$('#wysiwyg').wysiwyg();
	});
    </script>    
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <!--[if IE6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
    <![endif]-->
    <!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>    
    <![endif]-->
    <style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #000000;
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
    <div class="grid_9">
     <h1 class="content_edit style1">Site Contents</h1>
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
     
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
	    <form action="#" method="post" name="frmcontent">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
		  	
              <tr>
				<td><label>Title</label></td>
              </tr>
			   <tr>
				<td><input type="text" class="smallInput wide" name="title" /></td>
              </tr>
            <tr>
				<td><label>Edit Content</label></td>
            </tr>
            <tr>
				<td><textarea id="wysiwyg" class="smallInput wide" rows="7" cols="30" name="desc"></textarea></td>
            </tr>
			  <tr>
				<td> <input name='submit' type="submit" class="button" value="Submit Content" /></td>
              </tr>
			  
        
             </tbody>
          </table>
        </form>
	</div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		
		</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->

<!-- FOOTER END -->
</body>
</html>
