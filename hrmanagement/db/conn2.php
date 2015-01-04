<?php

// for connection to Database
// first Create Connection Object

$con = mysql_connect('localhost', 'root', 'root');
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
		
	
?>

