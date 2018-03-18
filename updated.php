<?php
include 'db.php';
session_start();

$title   = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];

$id = $_POST['id'];

$update_query = "UPDATE events
                SET title ='$title' , description='$description' , date='date'
                WHERE id = $id";
                
$update_result= mysqli_query($conn, $update_query);

if ($update_result) {
             
    echo "Updated! $title в базата данни!";
    echo "<p><a href='index.php'>Read DB</a></p>";
    header("location: eventlist.php");
}else{
    echo "Not Updated - Try again later";
    echo "<p><a href='index.php'>Back to home ... </a></p>";
}
?>