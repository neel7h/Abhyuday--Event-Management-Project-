
<?php
include '../database.php';
echo ("alert('hello');");
 if(isset($_POST["id"]) && !empty($_POST["id"])){

$id = $_POST['id'];
$strSQL = "DELETE FROM teamreg WHERE id='".$id."'";
if ($mysqli->query($strSQL) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}
 }
$mysqli->close;
?>