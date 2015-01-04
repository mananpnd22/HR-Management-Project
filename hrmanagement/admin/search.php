<?php

if(!isset($_COOKIE['cadmusername']) )
{
header("location:admlogin.php");
}


include('db/adminconn.php');
// Select Employee details here

	$sqlselect_allemp = "Select * from tbl_emp";
	$rowallemp = mysql_query($sqlselect_allemp);
	
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
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

</head>

<body>

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
  <h2 align="left"><img src="images/icon_users.png" width="48" height="48" />Search Employee For Details </h2>
  </div>
    <!-- create the form -->
<form name="Form1" action="#" method="get">

  <p>
    <!-- Add the data entry bits -->
  <p>&nbsp;</p>
	<p><br />
  &nbsp;&nbsp;Search Employee: 
	  &nbsp;&nbsp;
	  <input type="text" name="q" size="30" />
	  <br />
      <!-- Add some buttons -->
      <input name="search" type="submit" class="button" value="Search" align="right"> 
      <a href="user.php">
      <input name="btnback" type="button" class="button" id="btnback"  value="Back" align="right" />
      </a>  </p>
	<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>


</body>
</html>




<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("hr_mgt") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
	
	<style>
   table {table-layout:inherit; width:930px;}
   table td {border:solid 1px #333; width:100px; word-wrap:break-word;}
   </style>
   
</head>
<body>
<?php
  if(isset($_GET['search']))
{
   $query = $_GET['q']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM tbl_emp
            WHERE (emp_id LIKE '%".$query."%') OR (emp_name LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             ?>
        <table border='1' width=90%>
            <tr>
                <td><?php echo "Id";?></td>
				
                 <td>&nbsp;<?php echo"Name";?></td>
				 
				 <td>&nbsp;<?php echo"Address";?></td>
				 
                 <td>&nbsp;<?php echo"Phone";?></td>
				 
                 <td>&nbsp;<?php echo"E-mail";?></td>
				 
                 <td>&nbsp;<?php echo"Department";?></td>
				 
                 <td>&nbsp;<?php echo"Designation";?></td>
				 <td>&nbsp;<?php echo"Salary";?></td>
				 <td>&nbsp;<?php echo"Birth Date";?></td>
                 <td>&nbsp;<?php echo"Join Date";?></td>
                 <td>&nbsp;<?php echo"Ac no";?></td>

            </tr> 
			<?php


            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            while($row = mysql_fetch_array( $raw_results )) 
			{
                
                // echo out the contents of each row into a table
				?>
            <tr>
                <td> <?php echo $row['emp_id']; ?> </td>
				
                 <td> &nbsp;<?php echo $row['emp_name'];?></td>
				 
				 <td>&nbsp;<?php echo $row['emp_addr'];?></td>
				 
                 <td>&nbsp;<?php echo $row['emp_phone'];?></td>
				 
                 <td>&nbsp;<?php echo $row['emp_email'];?></td>
				 
                 <td>&nbsp;<?php echo $row['emp_dept'];?></td>
				 
                 <td>&nbsp;<?php echo $row['emp_desg'];?></td>
				 <td>&nbsp;<?php echo $row['emp_salary'];?></td>
				 <td>&nbsp;<?php echo $row['emp_bdate'];?></td>
                 <td>&nbsp;<?php echo $row['emp_jdate'];?></td>
                 <td>&nbsp;<?php echo $row['emp_acno'];?></td>
                

            </tr> </table>
			<?php

				/*echo "<table>";
                echo "<tr>";
				echo "<td>" . $row['emp_id'] . "</td>";
				
                echo "<td>&nbsp;" . $row['emp_name'] . "</td>";
				
				 echo '<td>&nbsp;' . $row['emp_addr'] . '</td>';
				 
                echo '<td>&nbsp;' . $row['emp_phone'] . '</td>';
				
                echo '<td>&nbsp;' . $row['emp_email'] . '</td>';
				
                echo '<td>&nbsp;' . $row['emp_dept'] . '</td>';
				
                echo '<td>&nbsp;' . $row['emp_desg'] . '</td>';
				
                echo '<td>&nbsp;' . $row['emp_salary'] . '</td>';
				
                echo '<td>&nbsp;' . $row['emp_bdate'] . '</td>';
				
				 echo '<td>&nbsp;' . $row['emp_jdate'] . '</td>';
				 
                echo '<td>&nbsp;' . $row['emp_acno'] . '</td>';
				
             
               
                echo "</tr>"; 
				echo "</table>";*/
				
        } 

        // close table>
        echo "</table>";

             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
}
?>

<?php
include('include/subfooter.php');
?>
<!-- FOOTER END -->

</body>
</html>
