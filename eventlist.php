<?php
include 'db.php';
session_start();
echo"<form action='eventlist.php' method='POST'>
<select name='field'>
<option value='id'>id</option>
<option value='title'>title</option>
<option value='date'>date</option>
</select>
    <select name='AZ'>
    <option value='ASC'>ASC</option>
    <option value='DESC'>DESC</option>
    </select>
    <button type='submit' />sort</button>";


$q = "SELECT * FROM events WHERE date_deleted IS NULL";

if (!empty($_POST)){
    $field=$_POST['field'];
    $order=$_POST['AZ'];
    $q = "SELECT * FROM events WHERE date_deleted IS NULL ORDER BY " . $field . " " . $order ;
} 
$result = mysqli_query($conn, $q);



$today = date('Y-m-d');
echo "<table border=1>";

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){ 
		echo "<tr>";
		echo "<td>" . $row['title'] . ' </td><td>'.$row['description'] . '</td><td>'.$row['date'] . '</td>';
		echo "<td><a href='update.php?id=" . $row['id'] . "'>Update</a></td>";
		echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
		echo "</tr>";
	}
}
echo "</table>";
?>