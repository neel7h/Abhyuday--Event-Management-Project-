
		<?php
 include 'header.php';
	
		?>					
<?php
//$count=0;
//$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con)); 
$tot = $mysqli->query("SELECT sum(Amount) as tot FROM amountspent");
$row=$tot->fetch_array(); 
Global $spent;  
$spent=$row['tot'];
$abc=$mysqli->query("SELECT * FROM finance_details where id=1");

$row=$abc->fetch_array();   
    global $coll;
    //$description=$row['description'];
	$coll=$row['Amount'];
  $spon=$mysqli->query("SELECT * FROM finance_details where id=2");

$row1=$spon->fetch_array();   
    global $spon;
    //$description=$row['description'];
	$spon=$row1['Amount'];
    
//mysqli_close($con); 

$prize = $mysqli->query("SELECT sum(amount) as tot1 FROM winneramount");
$rowprize=$prize->fetch_array(); 
Global $rowprize1;

$rowprize1=$rowprize['tot1'];





?>
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right">Finance details</i></li>
            </ol>
<!--four-grids here-->
		<div class="five-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>College Alloted Amount</h3>
								<h4> <?php echo $coll ?>  </h4>
								
							</div>
							
						</div>
					</div>
					
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Sponsor Alloted Amount</h3>
								<h4><?php echo $spon ?></h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Total Amount</h3>
								<h4><?php global $tot;
								$tot=$coll+$spon;
								echo $tot ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Amount left</h3>
								<h4><?php  $avail=$tot-$spent;
											$avail = $avail-$rowprize1;
									echo $avail?></h4>
								
							</div>
							
						</div>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="agile-grids">	
				<!-- tables -->
				<h1> BUDGET</h1>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2></h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>name</th>
							<th>Amount used for</th>
							<th>Amount</th>
							
						  </tr>
						</thead>
						<tbody>
						 <?php
//$count=0;
//$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con)); 





$strSQL = "SELECT * FROM amountspent";
$result = $mysqli->query($strSQL);

$rowcount=$result->num_rows;
if ($result->num_rows > 0)

{
    
    while($row = $result->fetch_array())
    {
    $id=$row['id'];
    $name=$row['Name'];
	$amt_used_for=$row['amt_used_for'];
    $amount=$row['amount'];
    //$description=$row['description'];
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td>$amt_used_for</td>";
    echo "<td>$amount</td>";
    echo "</tr>";
    }
}
    
//mysqli_close($con); */
?>
						</tbody>
					  </table>
					</div>
</div>
</div>


<div class="agile-grids">	
				<!-- tables -->
				<h1> Prize Amount</h1>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2></h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>Event name</th>
							<th>Dept</th>
							<th>Amount</th>
							
						  </tr>
						</thead>
						<tbody>
						 <?php
//$count=0;
//$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con)); 





$strSQL = "SELECT * FROM winneramount";
$result = $mysqli->query($strSQL);

$rowcount=$result->num_rows;
if ($result->num_rows > 0)

{
    
    while($row = $result->fetch_array())
    {
    $id=$row['id'];
    $event=$row['event'];
	$Dept=$row['Dept'];
    $amount=$row['amount'];
    //$description=$row['description'];
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$event</td>";
    echo "<td>$Dept</td>";
    echo "<td>$amount</td>";
    echo "</tr>";
    }
}
    
//mysqli_close($con); */
?>
						</tbody>
					  </table>
					</div>
</div>
</div>

<!--inner block start here-->
<div class="inner-block">
<?php include 'footer.php'?>

</div>
				<?php include 'menu.php'?>
