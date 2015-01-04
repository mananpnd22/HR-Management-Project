<?php
header("location:login.php");

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HR MANAGEMENT SYSTEM</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="main">
<!-- header begins -->
<?php include('include/header.php');?>
<!-- header ends -->
<div class="top">
	
	<?php  include('include/middleheader.php');?>
    
     <!-- scrollable -->	   
			  	
</div>

<div class="navi"></div> <!-- create automatically the point dor the navigation depending on the numbers of items -->	
<div style="clear: both"></div>

<div class="main_index">
<div class="content">
				<h2>Services Overview</h2>
				<div class="col1">
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img1.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Vivamus vel </strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing eitseo eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img2.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Nulla felis orci</strong></p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euugiat nulla pariatur.</p>
					</div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img3.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Mauris auctor </strong></p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem- que laudantium, totam rem aperiam.</p>
					</div>
				</div>
				<div class="col1 pad_left1">
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img4.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Phasellus hendrerit </strong></p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem- que laudantium, totam rem aperiam.</p>
					</div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img5.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Aliquam id ornare</strong></p>
						<p>Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
					</div>
					<div class="wrapper pad_bot1">
						<div class="left_my marg_right1"><a href="#"><img src="images/page2_img6.png" alt="" /></a></div>
						<p class="pad_bot1"><strong class="color1">Fusce quam lectus</strong></p>
						<p>Sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
				</div>
	</div>
</div>



<!-- footer begins -->
<div style="height:20px"></div>

 <?php include('include/topfooter.php');?>       
        
         <div class="clear"></div>
        
       <?php include('include/footer.php');?>

<!-- footer ends -->
</div>

</body>
</html>
