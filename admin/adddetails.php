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
		            $id=$id_inc;

          $name1=$_POST['name'];
          $desc=$_POST['subname'];
          $min=$_POST['min'];
          $max=$_POST['max'];
          $category=$_POST['category'];
          
          
          //image variables
          

          
          $target_dir = "../images/event_logo/";
          //$uploadOk = 1;
          $target_file = $target_dir .  basename($_FILES["image"]["name"]);
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          $imagesave=basename($_FILES["image"]["name"]).".".$imageFileType;
          //image checking
          
          
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check == false) {
              die("image is not proper");
          }
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir.$imagesave)) {
              echo "The file ".basename( $_FILES["image"]["name"]). " has been uploaded.";
          }
          
          ////$image=$_FILES["image"]["name"];
          ////echo "$image";
          
          $strSQL = "INSERT INTO events ". "(name,subname,image,min,max,category) ". "VALUES(\"$name1\",'$desc','$imagesave','$min','$max','$category')";
          
          $result = $mysqli->query($strSQL);
          $id_inc=$mysqli->insert_id;
          
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
              <label class="control-label">Sub Name</label>
             <textarea id="txtdesc"  name="subname"  required="" ></textarea>
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
              <input id="min" type="text" name="min" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">maximum number of participents</label>
              <input id="max" type="text" name="max" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">image</label>
              <input id="fileimage" type="file" accept="image/*" name="image" required="">
            </div>
            
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          <br><br>
            <div class="col-md-12 form-group">
              <input id="addevent" type="submit" value="add event" name="add" class="btn btn-primary">
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
