<?php
include 'database.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width"/>
<title>Abhyuday 4.0</title>
<!-- CSS Files-->
<link rel="shortcut icon" href="images/final.png" type="image/png"/>
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/homepage.css">
<link rel="stylesheet" href="stylesheets/skins/teal.css">
<link rel="stylesheet" href="stylesheets/responsive.css"> 
<link rel="stylesheet" href="stylesheets/neelworkcss.css">   

  


</head>
<body>
<!-- HIDDEN PANEL 
================================================== -->
<?php
include 'head.php';
?>

<div class="clear">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p align="center">
				 EVENTS
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->



		
		
		
		
<div id="portofolio" class="row">
	<?php
	$sql = "SELECT * FROM events" ;
		if ($result = $mysqli->query($sql)){
		if ($result->num_rows > 0) {
while($row = $result->fetch_array()) {
$id=$row['id'];
$name=$row['name'];

$description=$row['subname'];
$category=$row['category'];
$image=$row['image'];

	
	?>

<div class="six columns category  ">
	<div style="margin-left:5%">	<h5><?php echo"$name";?></h5>
		<h5><?php echo"$description";?></h5>
		</div>
		
	
			<a  href="event/MCA/event<?php echo $id;?>.html"><img id="logo_event" style="width:200px; height:200px; border-radius:100px; " src="<?php echo "images/event_logo/$image";?>" alt=""/></a>
	
	
	</div>
	<?php	}
		}
}?>
	

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
<script src="javascripts/jquery.isotope.min.js"></script>
<script src="javascripts/jquery.prettyPhoto.js"></script>
<script src="javascripts/custom.js"></script>
</body>
</html>