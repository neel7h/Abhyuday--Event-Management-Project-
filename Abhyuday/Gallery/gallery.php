<?php
include '..\database.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width"/>
<title>Abhyuday 4.0</title>
<!-- CSS Files-->
<link rel="shortcut icon" href="../images/final.png" type="image/png"/>
<link rel="stylesheet" href="../stylesheets/style.css">
<link rel="stylesheet" href="../stylesheets/homepage.css">
<link rel="stylesheet" href="../stylesheets/skins/teal.css">
<link rel="stylesheet" href="../stylesheets/responsive.css">   
<link rel="stylesheet" href="../stylesheets/neelworkcss.css">   

		<!-- Start VisualLightBox.com HEAD section -->

		<link rel="stylesheet" href="gallery_files/vlb_files0/vlightbox0.css" type="text/css" />

		<link rel="stylesheet" href="gallery_files/vlb_files0/visuallightbox.css" type="text/css" media="screen" />
<script src="gallery_files/vlb_engine/jquery.min.js" type="text/javascript"></script>

		<script src="gallery_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>

		<!-- End VisualLightBox.com HEAD section -->

</head>
<body>
<!-- HIDDEN PANEL 
================================================== -->
<div id="panel">
	<div class="row">
		<div class="twelve columns">
			<img src="../images/info.png" class="pics" alt="info">
			<div class="infotext">
				Welcome to MSRIT .
			</div>
		</div>
	</div>
</div>
<p class="slide">
	<a href="#" class="btn-slide"></a>
</p>
<!-- HEADER
================================================== -->
<div class="row">	
		<div class="four columns">
			<div class="logo">
				<img src="../images/final.png " ></img>
				<a href="index.php"><img src="../images/front.png" style="position:absolute; margin-left:20px; margin-top:7%; width:250px; height:50px;"></h4></a>
			</div>
		</div>
		<div class="eight columns noleftmarg">		
			<nav id="nav-wrap">
				<ul class="nav-bar sf-menu">
				
					<li >
						<a href="../index.php">Home</a>
					</li>
					<li >
						<a href="#">About US</a>
					</li>
					
					<li>
						<a href="../events.php">Events</a>
					</li>
					
					<li>
						<a href="../schedule.php">Schedule</a>	
					</li>
					
					<li>
						<a href="../register.php">Register</a>
					<li>
						<a href="#">Downloads</a>	
					</li>
					
					<li class="current">
						<a href="../contact.php">Contact Us</a>
					</li>
					
				</ul>
			</nav>
		</div>	
</div>

<div class="clear">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p align="center">
				 GALLERY
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns ">
		
	<div class="winner">
	<div id="vlightbox0">
	<fieldset border="0">
	<legend style="color:black"></legend>
	<table >

	<tr>
		<td ><a class="vlightbox0" href="gallery_files/vlb_images0/dsc_0492.jpg" title="DSC_0494"><img src="gallery_files/vlb_thumbnails0/dsc_0492.jpg"  width="200px" height="500px" alt="DSC_0494"/></a></td>
		<td ><a class="vlightbox0" href="gallery_files/vlb_images0/dsc_0494.jpg" title="DSC_0492"><img src="gallery_files/vlb_thumbnails0/dsc_0492.jpg"  width="200px" height="500px" alt="DSC_0494"/></a></td>
	</tr>
	<tr>
		<td style="text-align:center">R V College of Engineering - MCA</td>
		<td style="text-align:center">Sheshadripuram First Grade College - BCA</td>
	</tr>
	</table>
	</fieldset>
	</div>
	</div>


 <br>

	<div id="vlightbox0">
	<?php

	 $query = $mysqli->query("SELECT * FROM gallery");

	    $rowCount = $query->num_rows;

	 if($rowCount > 0){
            while($row = $query->fetch_assoc()){
			echo '<a class="vlightbox0" href="../'.$row['source'].'" title="DSC_0007"><img src="../'.$row['sourcetmp'].'" width="200px" alt="DSC_0007" </a>';
			}
	 }
	
	?>


	</div>

	<script src="gallery_files/vlb_engine/vlbdata0.js" type="text/javascript"></script>

	<!-- End VisualLightBox.com BODY section -->

<!-- CATEGORIES-->
		
	
	
	
	</div>
</div>
<div class="hr">
</div>
<!-- FOOOTER 
================================================== -->
<div id="footer">
	<footer class="row">
	
	<div class="four columns">
		<h1>GET SOCIAL</h1>
		<div class="social facebook">
		<a href=" http://facebook.com/Abhyuday4.0/ "><div class="social facebook">
			
		</div></a>
		</div>
		
	</div>
	
	</footer>
</div>
<div class="copyright">
	<div class="row">
		<div class="six columns">
			 &copy;<span class="small"> Copyright 2017 Abhyuday 4.0</span>
		</div>
		<div class="six columns">
			<span class="small floatright"> Designed and Developed by Anil Reddy and Devika Malayada</span>
		</div>
	</div>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->

</body>
</html>