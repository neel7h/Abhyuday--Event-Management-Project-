<?php include 'header.php' ?>
 <?php
  
          ////$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con));
          
          //$strSQL = "SELECT MAX(id) FROM events";
          
          //$result = $mysqli->query($strSQL);
          //$row = $result->fetch_array();
          //$out=$row['MAX(id)'];
          //$out++;
          ////mysqli_close($con);
          
  
      if(isset($_POST['add']))
      {
          //$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con));

          
          
          
      
          $id=$_POST['id'];

          $name1=$_POST['name'];
          $desc=$_POST['subname'];
          $min=$_POST['min'];
          $max=$_POST['max'];
          $category=$_POST['category'];
          
          
          

          
          
          ////$image=$_FILES["image"]["name"];
          ////echo "$image";
          
          $strSQL[1] = "update events set name='$name1' where id='$id'";
          $strSQL[2] = "update events set subname='$desc' where id='$id'";
          $strSQL[3] = "update events set min='$min' where id='$id'";
          $strSQL[4] = "update events set max='$max' where id='$id'";
          $strSQL[5] = "update events set category='$category' where id='$id'";
          
		  for ($i=1;$i<=5;$i++)
		  {
          $result[$i] = $mysqli->query($strSQL[$i]);
          $id_inc=$mysqli->insert_id;
          }
          if(!$result )
          {
              die('Could not enter data: ' . mysqli_error());
          }
          
          echo "Entered data successfully\n";
          
         // mysqli_close($con);
      }
      else
      {
      ?>
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   

				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Add Event</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
	<div class="validation-form">
 	<!---->
  	 <?php 
$id=$_GET['abc'];

	$strSQL = "SELECT * FROM events where id='".$id."' ";

$result = $mysqli->query($strSQL);

$rowcount=$result->num_rows;
if ($result->num_rows > 0)

{
    
    while($row = $result->fetch_array())
    {	 ?>
        <form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-5 form-group1">
             id
              <input id="txtid" type="text"  name="id" value="<?php echo $row['id'] ?>"  readonly="readonly" required="">
            </div>
			
            <div class="clearfix"> </div>
            </div>
          
			<div class="col-md-5 form-group1 group-mail">
              <label class="control-label">Name</label>
              <input id="txtname" type="text" name="name"  value="<?php echo $row['name'] ?>" required="">
            </div>
		
			
			
             <div class="clearfix"> </div>
            <div class="col-md-5 form-group1 group-mail">
              <label class="control-label">Sub Name</label>
              <input id="subname" type="text" name="subname"  value="<?php echo $row['subname'] ?>" required="">
            </div>
			
             <div class="clearfix"> </div>
              <div class="col-md-5 form-group2 group-mail">
              <label class="control-label">Event For</label>
            <select id="category" name="category">
            	<option value="1">Both(MCA,BCA)</option>
            	<option value="2">MCA</option>
            	<option value="3">BCA</option>
            	
            </select>
            </div>
             <div class="clearfix"> </div>
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-5 form-group1">
              <label class="control-label"> minimum number of participents</label>
              <input id="min" type="text" value="<?php echo $row['min'] ?>"name="min" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">maximum number of participents</label>
              <input id="max" type="text" value="<?php echo $row['max'] ?>" name="max" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            
            
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          <br><br>
            <div class="col-md-12 form-group">
              <input id="addevent" type="submit" value="add event" name="add" class="btn btn-primary">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    <?php } ?>    
 	<!---->
 </div>
				
</div>
</div>
 <?php
      }
            ?>
<div class="inner-block">
<?php include 'footer.php'?>

</div>

</div>
</div>
		<?php } ?>		
<?php include 'menu.php'?>
