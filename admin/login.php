<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include '../database.php';
session_start();
$loginerr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$myusername=$_POST['username']; 
	$mypassword=md5($_POST['password']); 
	
	
	
	//$myusername = mysql_real_escape_string($myusername);
	//$mypassword = mysql_real_escape_string($mypassword);
	
	$encpass=md5($mypassword);
	
	$sql="SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'";
	
	if($result = $mysqli->query($sql))
	{
	
		if($result->num_rows==1)
		{
			$_SESSION['authorised']="Registered";
			header("location:index.php");
		}
		else
		{
			$loginerr="Invalid Username/Password";
		}
	}
}
if(isset($_GET['logout']))
{
	if(isset($_SESSION['authorised']));
	{
		unset($_SESSION['authorised']);
		session_destroy();
		header("location:login.php");
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign In :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<div id="note" style="color:red;"> <?php echo $loginerr; ?></div>
							<?php 
														if(isset($_SESSION['authorised'])){ ?>
												<div class=""> Already Logged In &nbsp; &nbsp; &nbsp; &nbsp; <a style="color:black" href="index.php"> Go to Admin Panel  </a> &nbsp; &nbsp; &nbsp; &nbsp; <a style="color:black "href=?logout=yes>  Logout </a>   </div>
								<?php 
														} else { ?>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			
			<div class="login-w3">
					<input type="submit" class="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		</form>
			<?php } ?>
				<div class="back">
					<a href="../index.php">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2016 Pooled . All Rights Reserved | Design by </p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>