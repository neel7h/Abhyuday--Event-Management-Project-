<?php include 'header.php' ?>
<!-- //tables -->
<script type="text/javascript">
	
$(document).ready(function(){
    $('#delete').on('click',function(){
        var data = $(this).val();
        var events = 'events';
		alert(data);
        if(data){
            $.ajax({
                type:'POST',
                url:'deleteq.php',
                data:'id='+data,
                success:function(html){
					window.location.reload();
                    $('#role').html(html);
                    $('#suject').html(html);
                    $('#teacher').html('<option value="">Select suject first</option>'); 
                }
            }); 
        }else{
            $('#role').html('<option value="">Select batch first</option>');
            $('#suject').html('<option value="">Select Sem first</option>');
            $('#name').html('<option value="">Select suject first</option>'); 
        }
    });
    $('#role').on('change',function(){
        var data = $(this).val();
        if(data){
            $.ajax({
                type:'POST',
                url:'ajaxstu.php',
                data:'id2='+data,
                success:function(html){
                    $('#name').html(html);
                }
            }); 
        }
    });   
	$('#name').on('change',function(){
        var data = $(this).val();
        if(data){
            $.ajax({
                type:'POST',
                url:'ajaxstu.php',
                data:'id3='+data,
                success:function(html){
                    $('#desig').html(html);
                }
            }); 
        }
    });   
});
</script>

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   

				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Results</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2></h2>
					    <table id="table">
						<thead>
						<tr>
							<th colspan="4"><center>Colleges</center></th>
							
						  </tr>
						  <tr>
							<th>ID</th>
							<th>Events</th>
							<th>First price</th>
							<th>Second price</th>
							
						  </tr>
						</thead>
						<tbody>
						 <?php
//$count=0;
//$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con)); 


$strSQL = "SELECT * FROM results";
$result = $mysqli->query($strSQL);

$rowcount=$result->num_rows;
if ($result->num_rows > 0)

{
    
    while($row = $result->fetch_array())
    {
    $id=$row['id'];
    $eventname=$row['eventname'];
	$firstprize=$row['firstprize'];
	$secondprize=$row['secondprize'];
    //$description=$row['description'];
    //$rules=$row['rules'];
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$eventname</td>";
    echo "<td>$firstprize</td>";
	echo "<td>$secondprize</td>";
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
