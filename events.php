<?php
require 'db.php';



date_default_timezone_set('Europe/Sofia');

$today = date('Y-m-d');

$title = $mysqli->escape_string($_POST['title']);
$description = $mysqli->escape_string($_POST['description']);
$date = $mysqli->escape_string($_POST['date']);



$flag = 'nablijava';

$datetime1 = date_create($today);
$datetime2 = date_create($date);
$interval = date_diff($datetime1, $datetime2);


if ( $interval->format('%R%a') <= 7 && $interval->format('%R%a') > 0 ){
  $flag= 'predstoi';
} elseif($interval->format('%R%a') < 1 ){
echo $flag = 'izpulneno';  
}

$sql = "INSERT INTO events (title, description, date, flag) " 
  . "VALUES ('$title','$description','$date','$flag')";

  if ($mysqli->query($sql) === true){
    header("location: calendar.php");
  }
?>
