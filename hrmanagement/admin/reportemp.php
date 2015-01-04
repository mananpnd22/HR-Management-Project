



<?php
// output headers so that the file is downloaded rather than displayed
header("Content-type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename=Employee Record.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Empid', 'Name', 'Address','Phone No','E-mail','Department','Designation','Basic Salary','Birth Date','Join Date','Ac No'));

// fetch the data
mysql_connect('localhost', 'root', '');
mysql_select_db('hr_mgt');
$rows = mysql_query('SELECT emp_id,emp_name,emp_addr,emp_phone,emp_email,emp_dept,emp_desg,emp_salary,emp_bdate,emp_jdate,emp_acno FROM tbl_emp ');

// loop over the rows, outputting them
while (@$row = mysql_fetch_assoc($rows)) fputcsv($output, $row);

?>




