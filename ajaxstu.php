<?php

include('database.php');
 if(isset($_POST["id"]) && !empty($_POST["id"])){
		$a=$_POST['id'];
if($a=='mca')
{
            $sql="SELECT * FROM events where rules='MCA'";
			$result = $mysqli->query($sql);

if ($result->num_rows > 0)

{
	echo "<option value=''>select a option</option>";
    while($row = $result->fetch_array()) {        
        echo "<option value='".$row['id'] . "'>" . $row['name'].$row['description'] . "</option>";
    }
    echo "</select>";
    
}
}
 if($a=='bca')
{
            $sql="SELECT * FROM events where tag='bca'";
			$result = $mysqli->query($sql);

if ($result->num_rows > 0)

{
	echo "<option value=''>select a option</option>";
    while($row = $result->fetch_array()) {        
        echo "<option value='".$row['id'] . "'>" . $row['name'].$row['description'] . "</option>";
    }
    echo "</select>";
    
}
	
}

 }
 
 ?>