<?php
include('db/adminconn.php');

$uid = $_REQUEST['id'];
$show_payslip = "select * from tbl_payroll_master where emp_id = $uid"; 
$result = mysql_query ($show_payslip);
//$row_payslip = mysql_fetch_array($result);
$row = mysql_fetch_array($result);

//$usname = $_COOKIE['cadmid'];
$sql1= "SELECT emp_name,emp_salary,emp_phone,emp_email,emp_jdate,emp_dept,emp_desg,emp_acno FROM tbl_emp WHERE emp_id= $uid";
$res= mysql_query($sql1);
$row1 = mysql_fetch_array($res);
	//echo "<pre>";
	//print_r($row);


	
	?>
<?php 
	
	$bs = $row1['emp_salary'];
	$da = $row['emp_da'];
	$hra = $row['emp_hra'];
	$pf = $row['emp_pf'];
	$pt = $row['emp_pt'];
	$annual_sal = ($bs*12);
	$raw_tax = mysql_query("SELECT * FROM tbl_tax_master
            		WHERE min_limit <= $annual_sal and max_limit >= $annual_sal limit 0,1");
					
					
          			  $row_tax = mysql_fetch_array( $raw_tax );
					  $tax_amt = ($bs*$row_tax['tax_perc'])/100;
	
	$te = ($bs+$da+$hra);
	$td = ($pf+$pt+$tax_amt);
	
	$gsm = ($te-$td);
	$gsy = ($gsm*12);
	
	 
	
	
	?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {font-size: 18px}
.style3 {
	font-size: 20px;
	font-weight: bold;
}
.style4 {font-size: 24px}
.style5 {font-size: 14px}
-->
</style>

<p align="center">
<h1 align="center" style="font-size:48px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ITgyan &nbsp;&nbsp;&nbsp;<img src="image1.png" width="171" height="99" align="bottom" /></h1>
<blockquote>
  <p align="center" class="style5">3rd Floor,B Gold Coin Complex Near Jodhpur Char Rasta Satellite Ahmedabad - 380015</p>
  <p align="center" class="style5">Phone : 0091 83476 50006 Email : info.itgyan@gmail.com </p>
  <p align="center" class="style5">Website : www.itgyan.co.in </p>
</blockquote>
<p align="center">
    
	<h2 align="center" style="font-size:40px">Salary Slip</h2></p><br />
	<br />
	<table width="838" height="94" align="center">
      <tr>
        <td width="427" align="left"><span style="font-size: 25px"><strong style="font-size:30px">Name:</strong></span>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_name'];?></a></td>
        <td width="424" align="left"><strong style="font-size:25px">Department:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_dept'];?></a></td>
      </tr>
      <tr>
        <td width="427" align="left"><strong style="font-size:25px">Phone No.:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_phone'];?></a></td>
        <td width="424" align="left"><strong style="font-size:25px">Designation:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_desg'];?></a></td>
      </tr>
      <tr>
        <td width="427" align="left"><strong style="font-size:25px">E-mail:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_email'];?></a></td>
        <td width="424" align="left"><strong style="font-size:25px">Bank Accont No.:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_acno'];?></a></td>
      </tr>
      <tr>
        <td width="427" align="left"><strong style="font-size:25px">Join Date:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row1['emp_jdate'];?></a></td>
        <td width="424" align="left"><strong style="font-size:25px">Month & Year:</strong>&nbsp;&nbsp;<a style="font-size:22px"><?php echo $row['pr_date'];?></a></td>
      </tr>
	  <tr>
	  <td width="427" align="left"><strong style="font-size:25px">Date: &nbsp;<?php echo date("d-m-Y");?></strong></td>
	  </tr>
    </table>
	<p><br />
	    <br />
</p>
	<div align="center">
  <table width="692" height="361" border="2" cellpadding="0" cellspacing="0" bordercolor="#000000" background="Drag to a file to choose it." bgcolor="#CCCCCC">
        <tr>
          <td width="157" valign="top"><p><span class="style1">Earnings </span></p></td>
          <td width="154" valign="top"><p align="left" class="style1">Amount (INR)</p></td>
          <td width="160" valign="top"><p><span class="style1">Deductions </span></p></td>
          <td width="157" valign="top"><p align="right" class="style1">Amount (INR)</p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p class="style2">Basic Salary </p></td>
          <td width="154" valign="top"><p align="left"><a style="font-size:22px"><?php echo $row1['emp_salary'];?></a></p></td>
          <td width="160" valign="top"><p class="style2">Provident Fund</p></td>
          <td width="157" valign="top"><p align="right"><a style="font-size:22px"><?php echo $row['emp_pf'];?></a></p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p class="style2">DA</p></td>
          <td width="154" valign="top"><p align="left"><a style="font-size:22px"><?php echo $row['emp_da'];?></a></p></td>
          <td width="160" valign="top"><p class="style2">Profession Tax</p></td>
          <td width="157" valign="top"><p align="right"><a style="font-size:22px"><?php echo $row['emp_pt'];?></a></p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p class="style2">HRA</p></td>
          <td width="154" valign="top"><p align="left"><a style="font-size:22px"><?php echo $row['emp_hra'];?></a></p></td>
          <td width="160" valign="top"><p class="style2">Income Tax</p></td>
          <td width="157" valign="top"><p align="right"><a style="font-size:22px"><?php echo $tax_amt;?></a></p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p>&nbsp;</p></td>
          <td width="154" valign="top"><p align="right">&nbsp;</p></td>
          <td width="160" valign="top"><p>&nbsp;</p></td>
          <td width="157" valign="top"><p align="right">&nbsp;</p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p>&nbsp;</p></td>
          <td width="154" valign="top"><p align="right">&nbsp;</p></td>
          <td width="160" valign="top"><p>&nbsp;</p></td>
          <td width="157" valign="top"><p align="right">&nbsp;</p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p>&nbsp;</p></td>
          <td width="154" valign="top"><p align="right">&nbsp;</p></td>
          <td width="160" valign="top"><p>&nbsp;</p></td>
          <td width="157" valign="top"><p align="right">&nbsp;</p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p class="style3">Total Earnings </p></td>
          <td width="154" valign="top"><p align="left"><a style="font-size:22px"><?php echo $te;?></a></p></td>
          <td width="160" valign="top"><p class="style3">Total Deduction</p></td>
          <td width="157" valign="top"><p align="right"><a style="font-size:22px"><?php echo $td;?></a></p></td>
        </tr>
        <tr>
          <td width="157" valign="top"><p>&nbsp;</p></td>
          <td width="154" valign="top"><p align="right">&nbsp;</p></td>
          <td width="160" valign="top"><p>&nbsp;</p></td>
          <td width="157" valign="top"><p align="right">&nbsp;</p></td>
        </tr>
		<tr>
		<td width="157" valign="top"><p>&nbsp;</p></td>
		<td width="154" valign="top"><p>&nbsp;</p></td>
		<td width="160" valign="top"><p>&nbsp;</p></td>
		<td width="157" valign="top"><p>&nbsp;</p></td>
		</tr>
        <tr>
		<td width="157" valign="top"><p>&nbsp;</p></td>
		<td width="154" valign="top"><p>&nbsp;</p></td>
		<td width="160" valign="top"><p class="style3"><i>Gross Salary &nbsp;(Monthly) INR</i></p></td>
		<td width="157" valign="top" align="right"><p><a style="font-size:22px"><?php echo $gsm;?></a></p></td>
		<tr>
		<td width="157" valign="top"><p>&nbsp;</p></td>
		<td width="154" valign="top"><p>&nbsp;</p></td>
		<td width="160" valign="top"><p class="style3"><i>Gross Salary &nbsp;&nbsp;&nbsp;(Yearly) INR</i></p></td>
		<td width="157" valign="top" align="right"><p><a style="font-size:22px"><?php echo $gsy;?></a></p></td>
		</tr>
      </table>
</div>
	<p align="center" class="style4">&nbsp;</p>
	<p align="center" class="style4">Signature of the      Employee: _______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Director: ________________</p>
	<p align="center" class="style4">&nbsp;</p>
	<p>&nbsp;</p>
	