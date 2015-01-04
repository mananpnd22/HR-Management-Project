<?php
if(!isset($_COOKIE['cusername']))
{
header("location:login.php");
}

include ('db/conn.php');


$usrname = $_COOKIE['cusername'];
$show_name1= "select emp_name from tbl_emp where emp_email = '$usname'"; 
$reslt = mysql_query ($show_name1);
$r1 = mysql_fetch_array($reslt);



 ?>


<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #2178DF;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {font-size: 20px; color: #2178DF; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 16px}
.style5 {font-size: 16px; color: #2178DF; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<div >
				<div class="items">
					<div class="item">
						<div class="header1">
							  <div class="top_left">		
		<h1>Welcome </h1>
        <div class="text" style="height: 300px;">
          <div style="height:5px">
            <p class="style1 style4">Welcome to ITGyan.</p>
            <p class="style1 style4">&nbsp;</p>
            <p class="style5">Hello  <?php echo  ucfirst($r1[0])?>   you can Check your Personal Details here like your Profile,your Add-ons,Deduction,etc.</p>
            <p class="style5">&nbsp;</p>
            <p class="style5">Also you can edit your Profile and Password. </p>
            <p class="style2">&nbsp;</p>
            <p class="style1">&nbsp;</p>
          </div>
           
		</div>       
    </div>
    <div class="top_right"></div>

						</div>                                    
					</div> <!-- item --><!-- item -->
					<!-- item -->
                    <!-- item -->
                </div>
				<!-- items -->
			</div>