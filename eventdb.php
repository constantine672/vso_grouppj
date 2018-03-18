<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'Coreypowertaylor01020304';
$db = 'events';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);