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

		  
          $name=$_POST['name'];
          $amt_used_for=$_POST['amt_used_for'];
          $amount=$_POST['amount'];
         
          
          
          //image variables
   
          
          ////$image=$_FILES["image"]["name"];
          ////echo "$image";
          
          $strSQL = "INSERT INTO amountspent ". "(name,amt_used_for,amount) ". "VALUES('$name','$amt_used_for','$amount')";
          
          $result = $mysqli->query($strSQL);
          $id_inc=$mysqli->insert_id;
          
          if(!$result )
          {
              die('Could not enter data: ' . $mysql->error);
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Add Budget</li>
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
          
			<div class="col-md-5 form-group1 group-mail">
              <label class="control-label">Name</label>
              <input id="txtname" type="text" name="name" required="">
            </div>
				
			
             <div class="clearfix"> </div>
            <div class="col-md-5 form-group1 group-mail">
              <label class="control-label">Amount Used For</label>
             <textarea id="txtdesc"  name="amt_used_for"  required="" ></textarea>
            </div>
			
             <div class="clearfix"> </div>
              
             <div class="clearfix"> </div>
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-5 form-group1">
              <label class="control-label"> Amount used</label>
              <input id="min" type="text" name="amount" required="">
            </div>
			
           
			
          
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          <br><br>
            <div class="col-md-12 form-group">
              <input id="addevent" type="submit" value="Add Budget" name="add" class="btn btn-primary">
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
