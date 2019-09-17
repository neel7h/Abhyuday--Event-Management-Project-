<?php include 'header.php' ?>

<?php

	Global $filenm;
	Global $filenm1;
	if(isset($_FILES['file'])){
		$errors= array();
		$filepath=pathinfo($_FILES["file"]["name"]);
		$extn=$filepath['extension'];

	$randfn=uniqid();

	$movepic=move_uploaded_file($_FILES["file"]["tmp_name"],"../images/". $randfn .".".$extn);
	if($movepic)
	{
		$filenm="images/". $randfn .".". $extn;
	}
	}
	if(isset($_FILES['file1'])){
		$errors1= array();
		$filepath1=pathinfo($_FILES["file1"]["name"]);
		$extn1=$filepath1['extension'];

	$randfn1=uniqid();

	$movepic=move_uploaded_file($_FILES["file1"]["tmp_name"],"../images/". $randfn1 .".".$extn1);
	if($movepic)
	{
		$filenm1="images/". $randfn1 .".". $extn1;
	}
	}
	if(isset($_POST['add']))
	  {		  
	$name=$_POST['name'];
	$query="insert into gallery (source,sourcetmp,name) values ('$filenm','$filenm1','$name');";
	if($mysqli->query($query))
{
  echo"inserted";
}
else
echo"nope".$mysqli->error;

	  }
	  
?>
  
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   

				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Add Images</li>
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

			<div class="col-md-6 form-group1">
              <label class="control-label">Icon Images(Convert image using photoshop (save as web image)</label>
              <input id="fileimage" type="file" name="file" required="">
            </div>
			
                         <div class="clearfix"> </div>
                         <div class="clearfix"> </div>
             <div class="clearfix"> </div>
			 <br>

			<div class="col-md-6 form-group1">
              <label class="control-label">Image</label>
              <input id="fileimage" type="file" name="file1" required="">
            </div>
            
		
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          <br><br>
            <div class="col-md-12 form-group">
              <input id="addevent" type="submit" value="Add Images" name="add" class="btn btn-primary">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
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
