<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    
  <link rel="stylesheet" href="assets/css/admin_style.css">
  <link rel="stylesheet" href="assets/css/public.css">

</head>
<body>

    
    <!--Page Container-->
    <div class="default-page-container">
        <form action="Login.php" method="post" class="admin-form author-form small-form">
            <h1 class="center form-title">Sign In</h1>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            
            <div class="input-group">
                    <label for="username">Username or Email</label>    
                <input type="text" name="username" value="<?php echo $username ?>" id="username" class="input-control">
            </div>
           
            <div class="input-group">
                <div class="forgot-password-wrapper">
                    <label for="password">Password</label>
                    <small><a href="forgot_password.html">Forgot Password ?</a></small>
                </div>
                
                <input type="password" name="password" value="<?php echo $password ?>" id="password" class="input-control">
            </div>
            <div class="input-group">
                <label for="remember-me">
                    <input type="checkbox" name="remember-me" id="remember-me">
                    Remember Me
                </label>
            </div>
          
           
           
            



            <div class="input-group">
                <button type="submit" name="login-btn" class="btn long-btn primary-btn big-btn">Login</button>
            </div>
            <p class="center">
                <small>Don't have an account? You can <a href="<?php echo BASE_URL .'/register.php' ?>">sign Up</a></small>
            </p>
          </form>

    </div>
    <!--// Page Container-->
    
</body>
</html>