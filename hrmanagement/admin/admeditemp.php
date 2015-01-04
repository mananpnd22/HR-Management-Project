
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

<script type="text/javascript">

function Validate()
{

	var name_str=document.admeditemp.name;
	var name= document.admeditemp.name.value;
	
	if(name.length=="")
	{
		alert("Please Enter Name");
		return (false);
	}
	
	var addr_str=document.admeditemp.adr;
	var addr= document.admeditemp.adr.value;
	
	if(addr.length=="")
	{
		alert("Please Enter Address");
		return (false);
	}
	
	var dept_str=document.admeditemp.dept;
	var dept= document.admeditemp.dept.value;
	
	if(dept.length=="")
	{
		alert("Please Enter Department");
		return (false);
	}
	
	var desg_str=document.admeditemp.desg;
	var desg= document.admeditemp.desg.value;
	
	if(desg.length=="")
	{
		alert("Please Enter Designation");
		return (false);
	}
	
	var sal_str=document.admeditemp.sal;
	var sal= document.admeditemp.sal.value;
	
	if(sal.length=="")
	{
		alert("Please Enter Salary");
		return (false);
	}
	if(isNaN(sal) || sal.indexOf(" ")!==-1)
	{
		alert("Enter only Numeric value");
		return (false);
	}
	
	var jdate_str=document.admeditemp.joindate;
	var jdate= document.admeditemp.joindate.value;
	
	if(jdate.length=="")
	{
		alert("Please Enter Join Date");
		return (false);
	}
	
	var bdate_str=document.admeditemp.birthdate;
	var bdate= document.admeditemp.birthdate.value;
	
	if(bdate.length=="")
	{
		alert("Please Enter Birth Date");
		return (false);
	}
	
	var z = document.admeditemp.phone.value;
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
	
	var acno_str=document.admeditemp.acno;
	var acno= document.admeditemp.acno.value;
	
	if(acno.length=="")
	{
		alert("Please Enter Account Number");
		return (false);
	}
	else
	{
	var checkString = document.admeditemp.acno.value;
		if (checkString != "") 
		{
    		if ( /[^A-Za-z\d]/.test(checkString))
			{
        		alert("Please enter only letter and numeric characters");
        		document.admeditemp.acno.focus();
        		return (false);
    		}
		}
	}
	
	return (true);	
}

function ValidateEmail() 
{

 	var mailchk = document.admeditemp.email.value;
   	if(mailchk == '')
	{
			alert("Please enter email address!");
			document.admeditemp.email.focus();
			 return (false);
	}
	else
	{	

		var iChars = "!`#$%^&*()+=-[]\\\';/{}|\":<>?~_";   
        var data = document.getElementById("email").value;
        for (var i = 0; i < data.length; i++)
        {      
        	if (iChars.indexOf(data.charAt(i)) != -1)
        	{    
        		alert ("Your E-mail has special characters. \nThese are not allowed.");
        		document.getElementById("email").value = "";
        		return false; 
        	} 
        }
	}
		
	
	return (true);
	
   
	
}

</script>
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
  <h1 class="dashboard">Edit
      <!--RIGHT TEXT/CALENDAR END-->
  </h1>
    </div>
    <div class="clear"></div>

<?php



include ('db/adminconn.php');


$r =$_GET['id'];
$show_name= "select * from tbl_emp where emp_id = $r"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);


if(isset($_POST['Edit']))
{
		

                 
               $name = $_POST['name'];
             $email =$_POST['email'];
           $adr= $_POST['adr'];
                  $phone = $_POST['phone'];
                $dept = $_POST['dept'];
                $desg = $_POST['desg'];
				$sal = $_POST['sal'];
              $joindate = $_POST['joindate'];
            $birthdate = $_POST['birthdate'];
                  $acno = $_POST['acno'];
      
               



       $sql="UPDATE tbl_emp SET emp_name='$name', emp_email='$email',emp_addr='$adr',emp_phone='$phone',emp_dept='$dept',emp_desg='$desg',emp_salary='$sal',emp_jdate='$joindate', emp_bdate='$birthdate',emp_acno='$acno' WHERE emp_id=$r"; 

       $res= mysql_query($sql);


        if($res>0)
		{
				header("location:dashboard.php?resflag=1");
		
		}
		else
		{
		
			header("location:admeditemp.php");
			
		}  
		       
	
}





?>







<html>
<head>

</head>

<body>
<form action="" method="post" name="admeditemp" id="admeditemp" onsubmit="return ValidateEmail()" >
  <div>
    <div align="justify"><strong>&nbsp; Name:
      <input type="text" name="name" value="<?php echo $row['emp_name']; ?>"/>
      <br/>
      &nbsp;
      Email
      <input type="text" name="email" id="email" value="<?php echo $row['emp_email']; ?>"/>
      <br/>
      &nbsp;
      Address:
      <input type="text" name="adr" value="<?php echo $row['emp_addr']; ?>"/>
      <br/>
      &nbsp;
      Phone:
      <input type="text" name="phone" value="<?php echo $row['emp_phone']; ?>"/>
      <br/>
      &nbsp;
      Department:
      <input type="text" name="dept" value="<?php echo $row['emp_dept']; ?>"/>
      <br/>
      &nbsp;
      Designation:
      <input type="text" name="desg" value="<?php echo $row['emp_desg']; ?>"/>
      <br/>
	  &nbsp;
      Basic Salary:
      <input type="text" name="sal" value="<?php echo $row['emp_salary']; ?>"/>
      <br/>
      &nbsp;
      Joindate:
      <input type="text" name="joindate" value="<?php echo $row['emp_jdate']; ?>"/>
      <br/>
      &nbsp;
      Birthdate:
      <input type="text" name="birthdate" value="<?php echo $row['emp_bdate']; ?>"/>
      <br/>
      &nbsp;
      Account number:
      <input type="text" name="acno" value="<?php echo $row['emp_acno']; ?>"/>
      <br/>
      </strong><br/>
      <div align="justify"><strong>       <a href="dashboard.php">       </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name='Edit' type="submit" class="button" value='EDIT' onclick="return Validate()" />
          <a href="dashboard.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input name='Cancel' type="button" class="button" value='CANCEL' />
          </a><br/>
        <?php
include('include/subfooter.php');
?>
      </strong> </div>
    </div>
  </div>
</form>
</body>
</html>
</div>
</div>
</body>
</html>

</body>
</html>