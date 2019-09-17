<?php
/*
$servername = "182.50.133.89:3306";
$username = "abhyuday4";
$password = "udit8348";
$dbname = "abhyuday4_";
$mysqli = new mysqli($servername, $username, $password);

// Check connection
if ($mysqli === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}*/

$mysqli = new mysqli("localhost", "root", "", "abhyuday4_");
if ($mysqli === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
