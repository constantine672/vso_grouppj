<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'Coreypowertaylor01020304';
$db = 'calendar';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);


$conn = mysqli_connect("localhost", "root", "Coreypowertaylor01020304", "calendar");;


 if (!$conn) {
 	die("Connection failed: " . mysqli_connect_error());
 } else {
 	echo "Connected successfully!"."<p></p>";
 }