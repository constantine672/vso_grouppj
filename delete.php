<?php 
include 'db.php';
session_start();
date_default_timezone_set('Europe/Sofia');

$today = date('Y-m-d');

$id = $_GET['id'];

echo $today;

$update_query = "UPDATE events SET date_deleted=$today WHERE id = $id";
                
$update_result= mysqli_query($conn, $update_query);

if ($update_result) {
             
    echo "Updated!";
	echo "<p><a href='index.php'>Read DB</a></p>";
	header("location: eventlist.php");
}else{
    echo "Not Updated - Try again later";
    echo "<p><a href='index.php'>Back to home ... </a></p>";
}
?>
*/
