<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <link rel="stylesheet" href="includes/style.css">
    <script src="includes/bootstrap.min.js"></script>  
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
   if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <div class="wrapper">
        <div class="box">
          <div class="container">
              <h1>Welcome Back!</h1>
                  
              <form action="index.php" method="post" autocomplete="off">
                <div class="form-group">
                  <label>Email Address<span class="req">*</span></label>
                  <input class="form-control" type="email" required autocomplete="off" name="email"/>
                </div>

                <div class="form-group">
                  <label>Password<span class="req">*</span></label>
                  <input class="form-control" type="password" required autocomplete="off" name="password"/>
                </div>

                <div class="form-group">
                <button class="btn btn-primary" name="login" />Log In</button>
              </div>
              </form>
          </div>

          <div class="container">
            <h1>Sign Up for Free</h1>
                    
            <form action="index.php" method="post" autocomplete="off">
                <div class="form-group">
                  <label>First Name<span class="req">*</span></label>
                  <input class="form-control" type="text" required autocomplete="off" name='firstname' />
                </div>
                
                <div class="form-group">
                  <label>Last Name<span class="req">*</span></label>
                  <input class="form-control" type="text"required autocomplete="off" name='lastname' />
                </div>

                <div class="form-group">
                  <label>Email Address<span class="req">*</span></label>
                  <input class="form-control" type="email"required autocomplete="off" name='email' />
                </div>

                <div class="form-group">
                  <label> Set A Password<span class="req">*</span></label>
                  <input class="form-control" type="password"required autocomplete="off" name='password'/>
                </div>

                <button class="btn btn-primary" type="submit"  name="register" />Register</button>
            </form>
          </div>
        </div>
  </div>
 </body>
</html>
