<?php
$con = @mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hr_mgt", $con);

$edittable=$_POST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM tbl_emp where emp_id='$edittable[$i]'");
}
header("location: del.php");
mysql_close($con);
?>