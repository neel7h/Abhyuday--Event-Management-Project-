<?php include 'header.php' ?>
<!-- //tables -->

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   

				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>College details</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w1l-table-info">
					  <h2></h2>
					    <table class="w1l-table-info" id="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>name</th>
							
							
						  </tr>
						</thead>
						<tbody>
						 <?php


$strSQL = "SELECT * FROM college";
$result = $mysqli->query($strSQL);

$rowcount=$result->num_rows;
if ($result->num_rows > 0)

{
    
    while($row = $result->fetch_array())
    {
    $id=$row['id'];
    $name=$row['name'];
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td width='70%'>$name</td>";
    echo "</tr>";
    }
}
    
//mysqli_close($con); 
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
