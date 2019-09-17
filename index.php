<?php
include 'database.php';

// close connection

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width"/>
<meta name="keywords" content="MSRIT fest,msrit fest,abhyuday,abhyuday 4.0,abhyuday 2016,msrit fest abhyuday,abhyuday technical fest,mca fest,ramaiah mca fest,ramaiah bca fest,www.msrit.edu,msrit.edu">
<title>Abhyuday 4.0</title>
<!-- CSS Files-->
<link rel="shortcut icon" href="images/final.png" type="image/png"/>
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/homepage.css">
<link rel="stylesheet" href="stylesheets/skins/teal.css">
<link rel="stylesheet" href="stylesheets/responsive.css">  
<link rel="stylesheet" href="stylesheets/neelworkcss.css">   

<style>
nav ul li a
{
color:white;	
}
p{
	color:white;
}

.alclock{
  width: 68%;
  margin-left: auto ;
  margin-right: auto ;
  overflow:hidden;
  min-width:325px;
 
}
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


</style>
</head>
<body>
<!-- HIDDEN PANEL 
================================================== -->
<?php
include 'head.php';
?>
<div class="clear">
</div>
<!-- SLIDER 
================================================== -->
<div id="ei-slider" class="ei-slider">
	<ul class="ei-slider-large">
	<?php
	
		$sql = "SELECT name,tag,img FROM frontimg" ;
		if ($result = $mysqli->query($sql)) 
		{
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_array()) 
				{
					$name=$row['name'];
					$tag=$row['tag'];
					echo"<li>";
					echo "<img src='".$row['img']."' alt='image01' class='responsiveslide'></img>";
					echo"<div class='ei-title'><h2>$name</h2> <h3>$tag</h3></div>";
				
					echo "</li>";
				}
			}
		}
		$mysqli->close();
	?>
	</ul>	
</div>
<div class="minipause">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				"ABHYUDAY 4.0" ON 22nd AND 23rd MARCH 2017
			</p>
		</div>
	</div>
</div>
<!-- ANIMATED COLUMNS 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<ul class="ca-menu">
&nbsp;&nbsp;
			<li>
			<a href="Gallery/gallery.php">
			<span class="ca-icon">F</span>
			<div class="ca-content">
				<h2 class="ca-main">Gallery</h2>
				<h3 class="ca-sub">Abhyuday 4.0 photos</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="events.php">
			<span class="ca-icon">H</span>
			<div class="ca-content">
				<h2 class="ca-main">Events</h2>
				<h3 class="ca-sub">Details of all Events</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="register.php">
			<span class="ca-icon">N</span>
			<div class="ca-content">
				<h2 class="ca-main">Registration</h2>
				<h3 class="ca-sub">Participants Registration</h3>
			</div>
			</a>
			</li>
			<li>
			<a href="downloads.php">
			<span class="ca-icon">K</span>
			<div class="ca-content">
				<h2 class="ca-main">Downloads</h2>
				<h3 class="ca-sub">Event Details and attachments </h3>
			</div>
			</a>
			</li>
		</ul>
	</div>
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns">
		<div class="centersectiontitle">
			<h4 style="color:black">Treaser</h4>
		</div>
       <div class="video-container">
       <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
        </div>
       <div class="centersectiontitle">
			<h4 style="color:Black;">Countdown</h4>
		</div>
	</div>
	<div class="alclock" style=" BACKROUND='BEIGE';margin: 0 auto;margin-left: auto ;
  margin-right: auto ;"  >
		
	<?php include('clock.html')?>
		<iframe id="clock1" src="clock.html" scrolling="no" style="overflow: hidden ;width:700px;"></iframe>
		
	</div>
	
	
	
</div>
<div class="hr">
</div>




<!-- FOOOTER 
================================================== -->

<?php
include 'foot.php';
?>

<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/jquery.easing.1.3.js"></script>
<script src="javascripts/elasticslideshow.js"></script>
 <script src="javascripts/jquery.carouFredSel-6.0.5-packed.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
 <script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script> 
</body>
</html>