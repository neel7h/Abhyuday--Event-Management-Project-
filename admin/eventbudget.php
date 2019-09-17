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

          
          
          
      
          //$id=$_POST['id'];

          $event=$_POST['event'];
          $dept=$_POST['dept'];
          $amount=$_POST['amount'];

          
          ////$image=$_FILES["image"]["name"];
          ////echo "$image";
          
          $strSQL = "INSERT INTO winneramount ". "(event,Dept,amount) ". "VALUES('$event','$dept','$amount')";
          
          $result = $mysqli->query($strSQL);
          $id_inc=$mysqli->insert_id;
          
          if(!$result )
          {
              die('Could not enter data: ' . $mysqli->error);
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Prize amount</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
	<div class="validation-form">
 	<!---->
  	    
        <form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-5 form-group1">
             id
              <input id="txtid" type="text"  name="id" value="auto inc"  readonly="readonly" required="">
            </div>
			
            <div class="clearfix"> </div>
            </div>
         
			
		
			
			<div class="col-md-5 form-group2 group-mail">

              <label class="control-label">Event Name</label>
			                             <select required id='txtname' name='event'>

                                  <?php
  $sql2 = "SELECT  * FROM events";
                    if ($result2 = $mysqli->query($sql2)) {
                        if ($result2->num_rows > 0) {
							echo "<option value=''>select</option>";
                            while($row = $result2->fetch_array()) {

                                echo "<option value='".$row['id'] . "'>" . $row['name'] .$row['subname']. "</option>";

                            }
                            echo "</select>";
                            $result2->close();
                        } else {
                            echo "No records matching your query were found.";
                        }
                    }
                    // close connection
                    $mysqli->close();
                    ?>
					
            </div>
		
			
			  <div class="clearfix"> </div>
            <div class="col-md-5 form-group2 group-mail">
              <label class="control-label">DEPT</label>
				<select name="dept">
				<option value="MCA">MCA</option>
				<option value="BCA">BCA</option>
				</select>
				
				
				</select>
			  </div>
			
             <div class="clearfix"> </div>
            <div class="col-md-5 form-group1 group-mail">
              <label class="control-label">Amount</label>
              <input id="txtname" type="text" name="amount" required="">
            </div>
			
             <div class="clearfix"> </div>
             
             <div class="clearfix"> </div>
            
             <div class="clearfix"> </div>
            <div class="vali-form">
           
           
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
           
            
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          <br><br>
            <div class="col-md-12 form-group">
              <input id="addevent" type="submit" value="add Amount" name="add" class="btn btn-primary">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
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
				
<?php include 'menu.php'?>
