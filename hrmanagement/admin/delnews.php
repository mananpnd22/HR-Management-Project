<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}



include('db/adminconn.php');
if(!empty($_REQUEST['delid']))
{
	$conid = $_REQUEST['delid'];
	$sql_news = "Delete From tbl_news where news_id = $conid";
	mysql_query($sql_news);


}

header("location:newsview.php");
?>