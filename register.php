<?php
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));

$sql = "INSERT INTO users (firstname, lastname, email, password) " 
  . "VALUES ('$first_name','$last_name','$email','$password')";

  if ($mysqli->query($sql) === true){
    $_SESSION['message'] = "Registration succesful! Added $username to the database!";
    header("location: welcome.php");
  }
?>