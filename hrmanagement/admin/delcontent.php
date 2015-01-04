<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}



include('db/adminconn.php');
if(!empty($_REQUEST['delid']))
{
	$conid = $_REQUEST['delid'];
	$sql_delcont = "Delete From tbl_content where content_id = $conid";
	mysql_query($sql_delcont);


}

header("location:contentview.php");
?>