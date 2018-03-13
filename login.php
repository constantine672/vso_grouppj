<?php
session_start();
$_SESSION['message'] = '';
$mysqli = mysqli("localhost", "root", "Coreypowertaylor01020304", "accounts");
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: welcome.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
    }
}
?>

<form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
<input type="text" placeholder="User Name" name="username" required />
<input type="email" placeholder="Email" name="email" required />
<input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
<input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
</form>