<div id="header">
	
    <div id="buttons">
      <a href="index.php" class="but"  title="">Home</a><div class="but_razd"></div>
	  <a href="newsf.php" class="but" title="">News&nbsp;</a>
	 <a href="about_us.php"  class="but" title="">About us&nbsp;&nbsp;&nbsp;&nbsp;</a><div class="but_razd"></div>
      <a href="contact_us.php" class="but" title="">Contact us&nbsp;</a>
	  <?php
	  if(isset($_COOKIE['cusername']))
	  {
	  ?>
	   <a href="logout.php" class="but" title="">Logout</a>
	   <?php
	   }
	   else
	   {
	   ?>
	   <a href="login.php"  class="but" title="">Login</a><div class="but_razd"></div>
	   <?php
	   }
	   ?>
    </div>
	
	
	<!--<div id="logo">
    	<a href="#"> HELLO EMPLOYEE</a>
    </div>-->
   
</div>