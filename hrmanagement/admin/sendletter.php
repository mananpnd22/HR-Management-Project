<?php
if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}

include('db/adminconn.php');
// Select Employee details here

// get all newsetters here
 $sqlcon="Select * from tbl_newsletter";
 $rescon = mysql_query($sqlcon);
 
 
 
if(isset($_POST['submit']))
{
		
	require("phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	// select record here 
	$id = $_POST['selletter'];
	$sqlcon="Select * from tbl_newsletter where nletter_id = '$id'";
	$rescon = mysql_query($sqlcon);
	$rowcon = mysql_fetch_array($rescon);
	
	$sqlcon1="Select * from tbl_emp";
	$rescon1 = mysql_query($sqlcon1);
	while($emprow = mysql_fetch_array($rescon1)){
	 
	// put mail containt here
											$submit = @$_POST['submit'];
											$email = $emprow['emp_email'];
											
											$mail->IsSMTP();
											$mail->Host = "smtp.gmail.com";
											$mail->From = "mananpnd22@gmail.com";
											$mail->FromName  =  "Manan";
											$mail->AddAddress($email);
											
										 
											$mail->SMTPAuth = "true";
											$mail->Username = "mananpnd22@gmail.com";
											$mail->Password =  "manan$2204";
											$mail->Port  =  "465";
										 
											$mail->Subject = $rowcon['title'];
											$mail->Body = $rowcon['ndesc'];
											$mail->WordWrap = 50;
											if($submit==true)
											{
												if(!$mail->Send())
												{
													
													//echo '<script> alert("Message was not sent")</script>';
													?><br/> <br/>
													<?php echo 'Message was not sent.'. $mail->ErrorInfo;
												}
												else
												{
													?><script type="text/javascript"> </script><?php
													echo '<script> alert("E-mail was sent")</script>';
												}
										 }
						
		}
				   header("location:newsletterview.php");
	   


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
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
.style3 {	font-size: 18px;
	color: #0066FF;
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
    <div class="grid_9">
     <h1 class="content_edit"><span class="style3">Newsletter</span></h1>
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
				<td><label>Select Newsletter To be Send</label></td>
            </tr>
			   <tr>
				<td>
				
				<select class="smallInput" name="selletter">
				<option value="" >---Select here---</option>
				<?php while($rowcon = mysql_fetch_array($rescon)){?>
        	<option value="<?php echo $rowcon['nletter_id']?>" ><?php echo $rowcon['title']?></option>
          <?php }?>
        </select></td>
              </tr>
            	 <tr>
				<td> <input name='submit' type="submit" class="button" value="Send Newsletter" /></td>
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
