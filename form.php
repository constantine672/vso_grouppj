<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "Coreypowertaylor01020304", "accounts");

//формата работи с Post метод
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //двете пароли трябва да пасват една с друга
    if ($_POST['password'] == $_POST['confirmpass']) {
        
        //задаваме стойности на информацията която ще се обработва с базите данни
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']);                     
                $_SESSION['username'] = $username;

                //вмъкваме информация в базата с данни 
                $sql = " INSERT INTO users (username, email, password) "
                        . "VALUES ('.$username.', '.$email.', '.$password.')";
                
                // Ако връзката е успешна ще ни прехвърли към welcome.php!
                if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration succesful! Added $username to the database!";
                    header("location: welcome.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
    }
    else {
        $_SESSION['message'] = 'Паролите не съвпадат!';
    }
}


?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/indexs.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1><p>Календар</p>
    <p>Създай Акаунт</p>
</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpass" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
    <p><a href="login.php"> Вече имате акаунт?</a></p>
</div>
