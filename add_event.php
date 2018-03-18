<?php 
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Add Event</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <link rel="stylesheet" href="includes/style.css">
    <script src="includes/bootstrap.min.js"></script> 
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
   if (isset($_POST['events'])) {
     require 'events.php';
   }
}
 ?>
</head>
<body>
    <div class="wrapper">
    <h1>Add Event!</h1>
    <form action="events.php" method="post" autocomplete="off">
        <div class="form-group">
            <label>Title of the event<span class="req">*</span></label>
            <input class="form-control" type="text" required autocomplete="off" name='title'/>
        </div>

        <div class="form-group">
            <label>Description<span class="req">*</span></label>
            <input  class="form-control" type="text" required autocomplete="off" name='description' />
        </div>

        <div class="form-group">
            <label>Date<span class="req">*</span></label>
            <input  class="form-control" type="text" value="<?php echo $_GET['date'];?>" name='date' />
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="events" />Add!</button>
            <button class="btn btn-primary" type="submit" name="calendar" />calendar!</button>
        </div>
        
        
        </form>
    </div>
</body>
</html>