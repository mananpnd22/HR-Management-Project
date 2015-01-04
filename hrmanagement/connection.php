<?php

$con= mysql_connect("localhost","root","");
if(!$con)
{
	die("Unable to connect");
}
else
{
	
	mysql_select_db("hr_mgt");
}
?>