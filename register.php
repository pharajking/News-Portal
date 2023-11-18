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
        <form action="register.php" method="post" class="admin-form author-form">
            <h2 class="center form-title">Sign Up</h2>

         <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" id="username" class="input-control">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>"  id="email" class="input-control">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>"  id="password" class="input-control">
            </div>
            <div class="input-group">
                <label for="password">Password Confirmation </label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"  id="passwordConf" class="input-control">
            </div>
          
           
           
            



            <div class="input-group">
                <button type="submit" name="register-btn" class="btn long-btn primary-btn big-btn">Register</button>
            </div>
            <p class="center">
                <small>Already have an account? You can <a href="<?php echo BASE_URL .'/Login.php' ?>">Sign In</a></small>
            </p>
          </form>

    </div>
    <!--// Page Container-->
    
</body>
</html>