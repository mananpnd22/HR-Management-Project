<?php 
if(isset($_COOKIE['cadmusername']))
{
header("location:dashboard.php");
}



session_start();
include('db/adminconn.php');


if(isset($_POST['loginimg_x']) && isset($_POST['loginimg_y']))
{
	
	/*// Username [Email] validation 
	if(strlen($_POST['admusername']) <= 6 || strlen($_POST['admusername']) == 0)	
		$_SESSION['strmsg']= 'Please Enter Email-id more then 6 characters';
	else
	{
	 if (!preg_match("/^([a-zA-Z0-9])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/", $_POST['admusername']))
			$_SESSION['strmsg']= 'Please Enter valid Email-ID';
	
	}
	*/

	  $username = $_POST['admusername'];
	  $pass = $_POST['admpassword'];
	
	// select query to emp table 
	$sel_admin = "Select admin_id from tbl_admin where admin_email = '$username' and 	admin_password = '$pass'";
	$row = mysql_query($sel_admin);
	
	if(@mysql_num_rows($row) == 0) 
	{
	
				//session error here if employee was not there
		$_SESSION['error']= 'Employee Does not  exist plese try again..';
		
		
	}
	else
	{
		$result = mysql_fetch_array($row);
		// insert data into login table
		$admid = $result['admin_id'];
		
		//print_r($result);
		// cokie set here
		
		setcookie('cadmusername' , $username);
		setcookie('cadmid' , $admid);
	location:dashboard.php;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Profi Admin</title>
<link href="css/960.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/text.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript">
function ValidatePassword()
{
	
	var checkpass=document.admlogin.admpassword.value;
	if(checkpass.length <= 6 || checkpass.length == 0 )
	{
		alert('Enter password more than 6 characters!');
		document.admlogin.admpassword.focus();
		return (false);
		
	}
	else
	{
		var checkString = document.admlogin.admpassword.value;
		if (checkString != "") 
		{
    		if ( /[^A-Za-z\d]/.test(checkString))
			{
        		alert("Please enter only letter and numeric characters");
        		document.admlogin.admpassword.focus();
        		return (false);
    		}
		}
	}
	return (true);
	
   
	
}

function ValidateEmail(mail) 
{

 	var mailchk = document.admlogin.admusername.value;
   	if(mailchk == '')
	{
			alert("Please enter email address!");
			document.admlogin.admusername.focus();
			 return (false);
	}
	else
	{
		var iChars = "!`#$%^&*()+=-[]\\\';/{}|\":<>?~_";   
        var data = document.getElementById("admusername").value;
        for (var i = 0; i < data.length; i++)
        {      
        	if (iChars.indexOf(data.charAt(i)) != -1)
        	{    
        		alert ("Your E-mail has special characters. \nThese are not allowed.");
        		document.getElementById("admusername").value = "";
        		return false; 
        	} 
        }
	}
	return (true);
}
</script>

</head>

<body>

<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
   	  <h1>Administrator - Login</h1>
    	<div id="login">
    	  
          <p class="error"><?php 
		  			
					 if(@$_SESSION['error'] != '' )
					 { 
					 
					 echo $_SESSION['error'];
						$_SESSION['error'] = '';
		  				
					 
					 }
					 ?></p>      
    	  <form id="admlogin" name="admlogin" method="post" action="#" onsubmit="return ValidatePassword()">
    	    <p>
    	      <label><strong>Username</strong>
<input type="text" name="admusername" class="inputText" id="admusername" maxlength="25" />
    	      </label>
  	      </p>
    	    <p>
    	      <label><strong>Password</strong>
  <input type="password" name="admpassword" class="inputText" id="admpassword"  maxlength="20"/>
  	        </label>
    	    </p>
    	    <p>&nbsp; </p>
    	    
    	    <p>
    	      <!--<a class="black_button" href="dashboard.html"><span>Authentication</span></a>-->
    	      <span>
   	          <input name="loginimg" type="image" class="submit2"  id="loginimg" onclick="return ValidateEmail(document.admlogin.admusername)"  value="Login" src="button-Login-black.png"  />
    	      </span></p>
   	      </form>
		  <br clear="all" />
    	</div>
       
  </div>
</div>
<br clear="all" />
</body>
</html>
