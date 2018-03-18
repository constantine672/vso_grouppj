<?php 
include 'db.php';
session_start();

$id = $_GET['id'];


$q = "SELECT * FROM events WHERE id = $id";
$res = mysqli_query($conn, $q);


$row = mysqli_fetch_assoc($res);



echo "<p>Edit Event</p>";
echo "<form action='updated.php' method='post'>";


echo "<input type='text' name='title' value=" . $row['title'] . ">";

echo "<input type='text' name='description' value='".$row['description']."'>";
echo "<input type='text' name='date' value='".$row['date']."'>";
echo "<input type='hidden' name='id' value='".$row['id']."'>";

echo "<input type='submit' name='submit' value='update'>";
echo "</form>";



