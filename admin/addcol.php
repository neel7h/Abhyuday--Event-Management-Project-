<?php include 'header.php' ?>
 <?php
  
         
          
      if(isset($_POST['add']))
      {
        //  $con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con));

          
          
          
          $name=$_POST['name'];
         
          //$emp_salary = $_POST['emp_salary'];
          
          $strSQL = "INSERT INTO college (name) VALUES(\"$name\")";
          
          $result = $mysqli->query($strSQL);
          
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Add College</li>
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
             <div class="clearfix"> </div>
          <br><br>
            <div class="col-md-12 form-group">
              <input id="addevent" type="submit" value="add college" name="add" class="btn btn-primary">
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
