<script type="text/javascript">

function Validate()
{

	var name_str=document.editdetails.txtname;
	var name= document.editdetails.txtname.value;
	
	if(name.length=="")
	{
		alert("Please Enter Your Name");
		return (false);
	}
	
	var addr_str=document.editdetails.txtaddr;
	var addr= document.editdetails.txtaddr.value;
	
	if(addr.length=="")
	{
		alert("Please Enter Your Address");
		return (false);
	}
	
	
	var z = document.editdetails.txtphone.value;
	if(z==null || z=="")
	{
		alert("Phone No Can not be Empty");
		return (false);
	}
	if(isNaN(z) || z.indexOf(" ")!=-1)
	{
		alert("Enter Numeric value");
		return (false);
	}
	if(z.length <10 || z.length >10)
	{
		alert("Enetr Valid No");
		return (false);
	}
	
	
	return (true);	
}


</script><?php session_start();
if(!isset($_COOKIE['cusername']))
{
header("location:login.php");
}

include ('db/conn.php');


$usname = $_COOKIE['cusername'];
$show_name= "select * from tbl_emp where emp_email = '$usname'"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);



// login to system

if(isset($_POST['btnsubmit']))
{

		$txtname = $_POST['txtname'];
		$txtaddr = $_POST['txtaddr'];
		$txtphone = $_POST['txtphone'];
		$txtaltemail = $_POST['txtemail'];
		
		 $sql = "update tbl_emp set
		emp_name = '$txtname', emp_addr = '$txtaddr',emp_phone = '$txtphone' where emp_email = '$usname'";
		$res = mysql_query($sql);
		
		if($res>0)
		{
		?>
			<script type='text/javascript'>
			alert('Your Profile Edited Succesfully.');
			window.location.href = 'editprofile.php';
			</script>		
			<?php
		
			/*echo "<script language='javascript'>"; 
			echo "alert('Your Profile Edited Succesfully.')";
			//echo "window.location='myaccount.php'";
			echo "</script>";
			redirect('myaccount.php');
			//header('location:myaccount.php');*/
		}
		else
		{
		?>
			<script type='text/javascript'>
			alert('Your Profile Can not be Edited.');
			window.location.href = 'myaccount.php';
			</script>		
			<?php
			/*echo "<script language='javascript'>"; 
			echo "alert('YOur Profile can not be changed.')";
			//echo "window.location='myaccount.php'";
			echo "</script>";
			//echo "window.location='myaccount.php'";
			//header('location:myaccount.php');*/
		} 
		
		
}


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
				<h2> <?php echo  ucfirst("Hello ".$row[1])?></h2>
				<div class="col1">
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img1.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Edit Your Personal Details</strong></p>
						<p>you can edit your details here</p>
					</div>
					<div class="wrapper pad_bot1">
					<form name="editdetails" id="editdetails" action="#" method="post">
					
					  <table width="100%" border="0" cellspacing="1" cellpadding="1">
                        <tr>
                          <td width="19%" align="right" class="color1">Name</td>
                          <td width="2%" align="center" class="color1">:</td>
                          <td width="76%" align="left">
                                <input name="txtname" type="text" class="tb7" id="txtname" value="<?php echo $row['emp_name']; ?>" />
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right" valign="top" class="color1">Address</td>
                          <td width="5%" align="center" valign="top" class="color1">:</td>
                          <td>
                              <textarea name="txtaddr" cols="30"  rows="5" id="txtaddr" class="text_area2"><?php echo $row['emp_addr']; ?></textarea>
                              
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">Phone</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtphone" type="text" class="tb7" id="txtphone" value="<?php echo $row['emp_phone']; ?>" />
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">Email</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtemail" type="text" class="tb7" id="txtemail" readonly="readonly" value="<?php echo $row['emp_email']; ?>"/>
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">Department</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                              <input name="txtdept" type="text" class="tb7" id="txtdept" readonly="readonly" value="<?php echo $row['emp_dept']; ?>"/>
                              
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">Designation</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtdesg" type="text" class="tb7" id="txtdesg" readonly="readonly" value="<?php echo $row['emp_desg']; ?>"/>
                             
                          </td>
                        </tr>
						 <tr>
                          <td align="right" class="color1">Salary</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtdesg" type="text" class="tb7" id="txtdesg" readonly="readonly" value="<?php echo $row['emp_salary']; ?>"/>
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">Birthdate</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtbdate" type="text" class="tb7" id="txtbdate" readonly="readonly" value="<?php echo $row['emp_bdate']; ?>" />
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">Joindate</td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtjdate" type="text" class="tb7" id="txtjdate" readonly="readonly" value="<?php echo $row['emp_jdate']; ?>" />
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right" class="color1">A/C no </td>
                          <td width="5%" align="center" class="color1">:</td>
                          <td>
                                <input name="txtacno" type="text"  class="tb7" id="txtacno" readonly="readonly" value="<?php echo $row['emp_acno']; ?>"/>
                             
                          </td>
                        </tr>
                        <tr>
                          <td align="right">&nbsp;</td>
                          <td width="5%" align="center" class="color1"></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="right">&nbsp;</td>
                          <td width="5%" align="center"></td>
                          <td align="left">
                                <input name="btnsubmit" type="submit" class="submit2" id="btnsubmit" value="Edit"  onclick="return Validate()" />                          &nbsp; <span><a href="myaccount.php"><input name="btnback" type="button" class="submit2" id="btnback"  value="Back" /></a>
                                </span></td>
                        </tr>
                      </table>
					  </form>
					  <p class="pad_bot1">&nbsp;</p>
				  </div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"></a></div>
						<p class="pad_bot1">&nbsp;</p>
				  </div>
				</div>
				
	</div>
</div>

</div>
</body>
</html>