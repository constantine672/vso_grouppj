<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>Logout</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <link rel="stylesheet" href="includes/style.css">
    <script src="includes/bootstrap.min.js"></script> 
</head>

<body>
  <div class="wrapper">
    <div class="box">
      <div class="logout-box">
            <h1>Thanks for stopping by</h1>
            <p><?= 'You have been logged out!'; ?></p>
            
            <a href="index.php"><button class="btn btn-primary"/>Home</button></a>
      </div>
    </div>
    </div>
</body>
</html>
