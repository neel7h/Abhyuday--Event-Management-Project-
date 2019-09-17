<?php include 'header.php' ?>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   

				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Contact us</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2></h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>ID</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>MOBILE</th>
							<th>QUERY</th>
							<th>TIME</th>
						  </tr>
						</thead>
						<tbody>
						  <?php



$sql="select * from contactus ";
if ($result = $mysqli->query($sql)) {
if ($result->num_rows > 0) {
while($row = $result->fetch_array())
{
	$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$query=$row['query'];
	$time=$row['time'];

	
	
		

	echo "	<tr><td> $id</td><td>$name</td><td>$email</td><td> $mobile</td><td>$query</td><td>$time</td></tr>";
		

}
}
}
?>
						</tbody>
					  </table>
					</div>
</div>
</div>

		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<?php include 'footer.php'?>

</div>
<!--inner block end here-->
<!--copy rights start here-->

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				
<?php include 'menu.php'?>
