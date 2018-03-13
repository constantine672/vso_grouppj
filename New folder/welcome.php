<link rel="stylesheet" href="form.css">
<?php session_start(); ?>
<div class="body content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        Welcome <span class="user"><?= $_SESSION['username'] ?></span>
        <?php
        $mysqli = new mysqli("localhost", "root", "Coreypowertaylor01020304", "accounts");
        //Select queries return a resultset
        $sql = "SELECT username,FROM users";
        $result = $mysqli->query($sql); //$result = mysqli_result object
        //var_dump($result);
        ?>
        <div id='registered'>
        <span>All registered users:</span>
        </div>
    </div>
</div>
