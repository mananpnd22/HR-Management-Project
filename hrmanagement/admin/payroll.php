<?php 
include('db/adminconn.php');

if (isset ($_POST['gp']) || isset ($_POST['ok']))
{
	$empno=$_POST['empno'];
	$da=$_POST['da'];
	$hra=$_POST['hra'];
	$pt=$_POST['proftax'];
	$it=$_POST['itax'];
	$pf=$_POST['pf'];
	$gs=$_POST['gs'];
	
		
 	$sql="Insert into  tbl_payroll_master (emp_id,emp_da, emp_hra,emp_pt,emp_it,emp_pf,emp_gs,pr_date) values ('$empno','$da','$hra','$pt','$it','$pf','$gs',now())";

     $res= mysql_query($sql);
	 if (isset ($_POST['gp']))
	 {
	 
	 	$sel_emp = "SELECT * form   tbl_payroll_master where emp_id = $empno";
	 
	 }
	  
	  header('location:dashboard.php');
	  
	  
	  


}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payroll</title>
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

    <style type="text/css">
<!--
.style3 {color: #000000}
-->
    </style>
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
  <h2 align="left"><img src="download.png" width="152" height="48" /><span class="style3"> Payroll Form </span></h2>
</div>
<p><br />
  <br />
  <br />
</p>
<p><br />
</p>
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
      <a href="dashboard.php">
      <input name="btnback" type="button" class="button" id="btnback"  value="Back" align="right" />
      </a>  </p>
	<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
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
         
        if(mysql_num_rows($raw_results) > 0)
		{ // if one or more rows are returned do following
             
        

            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            while($row = mysql_fetch_array( $raw_results )) {
                
				//HRA  DA PF Calc
				$bs= $row['emp_salary'];
				
				//DA Calc
				$da= (($bs * 10)/100);
				
				//HRA Calc
				$hra= (($bs * 5)/100);
				
				//PF Calc
				$pf= (($bs * 5)/100);
				
				//Profesional tax calc
				$pt= (($bs * 1)/100);
				
				//Tax calc
					$annual_sal= ($bs*12);
				 $raw_tax = mysql_query("SELECT * FROM tbl_tax_master
            		WHERE min_limit <= $annual_sal and max_limit >= $annual_sal limit 0,1");
					
					
          			  while($row_tax = mysql_fetch_array( $raw_tax )) {
					 	 $tax_amt = ($bs*$row_tax['tax_perc'])/100;
					  
					  }
				//exit;
				
				//gross salary calc
				$gs= ($bs+$da+$hra)-($pt+$pf+$tax_amt);
				
				?>
				<br/>
<br/>
<form method="post" action="#" onSubmit="return proceed()" name="frm_payroll">
<table width="800" border bgcolor="339900"="2">
  <tr>
    <td width="173" nowrap="nowrap">&nbsp;Employee Id </td>
    <td width="409"><input type="text" name="empno" value="<?php echo $row['emp_id']; ?>" tabindex="1" /></td></tr>
  <tr>
    <td>&nbsp;Employee Name</td>
    <td><input type="text" name="ename" value="<?php echo $row['emp_name']; ?>" tabindex="2"/></td>
  </tr>
  <tr>
    <td>&nbsp;Join Date </td>
    <td><input type="text" name="jdate" value="<?php echo $row['emp_jdate']; ?>" tabindex="3"/></td>
  </tr>
  <tr>
    <td>&nbsp;Department</td>
    <td><input type="text" name="dept" value="<?php echo $row['emp_dept']; ?>" tabindex="4"/></td>
  </tr>
  <tr>
    <td>&nbsp;Designation</td>
    <td><input type="text" name="desig" value="<?php echo $row['emp_desg']; ?>"tabindex="5"/></td>
  </tr>
  <tr>
    <td>&nbsp;Basic Pay</td>
    <td><input type="text" name="pay" value="<?php echo $row['emp_salary']; ?>" tabindex="6" /></td>
  </tr>
  <tr>
    <td>&nbsp;Dearness Allowance</td>
    <td><input type="text" name="da" value= "<?php echo $da; ?>" tabindex="9"/></td>
  </tr>
   <tr>
    <td>&nbsp;House Rent Allowance</td>
    <td><input type="text" name="hra" value="<?php echo $hra; ?>" tabindex="10"/></td>
  </tr>
  <tr>
    <td>&nbsp;Professional Tax</td>
    <td><input type="text" name="proftax" value="<?php echo $pt; ?>" tabindex="11"/></td>
  </tr>
  <tr>
    <td>&nbsp;Income Tax</td>
    <td><input type="text" name="itax" value="<?php echo  $tax_amt; ?>" tabindex="12"/></td>
  </tr>
   <tr>
    <td>&nbsp;Provident Fund</td>
    <td><p>
      <input type="text" name="pf" value="<?php echo $pf; ?>" tabindex="13"/>
	 </td>
	</tr>
	<tr>
    <td>&nbsp;Gross Salary</td>
    <td><input type="text" name="gs" value="<?php echo $gs; ?>" tabindex="14"/> 
    </p>
      <p>&nbsp; </p></td>
  </tr> 
  <tr>
   <td colspan="2" align="center">
	<input name="ok" type="submit" class="button" id="OK" tabindex="19" value="OK"/>
	<input type="submit" class="button" value="Generate Payslip" name="gp" onclick="window.open('payslip.php?id=<?php echo $row['emp_id'];?>','width=500,height=400')"></td>
  </tr>
</table>
<!-- <input type="hidden" name="insert" value="<?php echo $insert; ?>" />-->
</form>
<?php
                // echo out the contents of each row into a table
               /* echo "<tr>";
                echo '<td>' . $row['emp_id'] . '</td>';
				
                echo '<td>' . $row['emp_name'] . '</td>';
				
				 echo '<td>' . $row['emp_addr'] . '</td>';
				 
                echo '<td>' . $row['emp_phone'] . '</td>';
				
                echo '<td>' . $row['emp_email'] . '</td>';
				
                echo '<td>' . $row['emp_dept'] . '</td>';
				
                echo '<td>' . $row['emp_desg'] . '</td>';
				
                echo '<td>' . $row['emp_salary'] . '</td>';
				
                echo '<td>' . $row['emp_bdate'] . '</td>';
				
				 echo '<td>' . $row['emp_jdate'] . '</td>';
				 
                echo '<td>' . $row['emp_acno'] . '</td>';
				
                echo '<td>' . $row['emp_alternateemail'] . '</td>';
               
                echo "</tr>"; */
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

</body>
</html>