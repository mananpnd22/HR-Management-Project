<?php
  
$con = mysql_connect('localhost', 'root', '');
if(!$con)
{
	die(mysql_error());
	
}
else
	{
		//Create table Query
		//select database 
		$database = 'Hr_mgt2';
		mysql_select_db($database) or die( "Unable to select database");
	
		
	}
		






$usname = $_COOKIE['cusername'];
$show_name= "select * from tbl_emp where emp_email = '$usname'"; 
$result = mysql_query ($show_name);
$row = mysql_fetch_array($result);
$r=$row['emp_id'];


  //$id=$_GET['image_id'];
  $sql="SELECT * from image where emp_id=$r";
 
  $query=mysql_query($sql) or die(mysql_error());
 
  while($result=mysql_fetch_array($query)){		
    header("Content-type:".$result['type']);
    header('Content-Disposition: inline; filename="'.$result['name'].'"');
    echo $result['image'];			
  }
?>