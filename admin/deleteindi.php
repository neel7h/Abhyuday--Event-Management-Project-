
<?php
include '../database.php';
echo ("alert('hello');");
 if(isset($_POST["id"]) && !empty($_POST["id"])){

$id = $_POST['id'];

//$id=0;$table=""
//$con = mysqli_connect("localhost","root","","abhyuday") or die("Some error occurred during connection " . mysqli_error($con));

$strSQL = "DELETE FROM student WHERE id='".$id."'";
if ($mysqli->query($strSQL) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}
 }
$mysqli->close;
?>