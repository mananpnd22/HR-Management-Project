<?php
	
	include("connection.php");
	$res= mysql_query("select * from tbl_emp");
	echo "<table border='1' cell padding='10' <tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>E-mail</th><th>Dept</th><th>Desig</th><th>Birthdate</th><th>Joindate</th><th>Password</th><th>acno</th><th>alter E-Mail</th></tr>";
	while($result= mysql_fetch_row($res))
	{
	echo "<tr><td>{$result[0]}</td><td>{$result[1]}</td><td>{$result[2]}</td><td>{$result[3]}</td><td>{$result[4]}</td><td>{$result[5]}</td><td>{$result[6]}</td><td>{$result[7]}   </td><td>{$result[8]}</td><td>{$result[9]}</td><td>{$result[10]}</td><td>{$result[11]}</td></tr><br><br>";
    }
	echo "</table>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
