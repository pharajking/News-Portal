<?php include("../../path.php") ?>
<?php include(ROOT_PATH ."/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Create Users</title>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Nunito+Sans:wght@700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Include stylesheet -->

    <link rel="stylesheet" href="../../assets/css/admin_style.css">
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>

    <div class="page-wrapper">
         <!--Admin Sidebar-->
         <?php include(ROOT_PATH . "/app/includes/adminSidebar.php") ?>
       
       <!--//Admin Sidebar-->
        <!--Page Contents-->
        <div class="page-content">
            <div class="admin-container">
              <form action="edit.php" method="post" class="admin-form sm-box">
                <h1 class="center form-title">Edit Users</h1>
                
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
               <!-- <div class="input-group avatar-input-group center">
                    <input type="file" name="avatar" id="avatar-input" class="hide avatar-input">
                    <button type="button" class="change-avatar-btn">
                        <span>change</span>
                    </button>
                    <label for="avatar-input">Profile Image (optional)</label>
                </div> -->

                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" id="username" class="input-control">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" id="email" class="input-control">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" id="password" class="input-control">
                </div>
                <div class="input-group">
                    <label for="password">Password Confirmation </label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" id="passwordConf" class="input-control">
                </div>
                <div class="input-group">
                 <label for="role">Role</label> 
                    <?php if (isset($admin) && $admin == 1): ?>

                    <input type="checkbox" name="admin">
                    Admin

                    <?php else: ?>
                   
                   <input type="checkbox" name="admin">
                      Admin
                  <?php endif; ?>   
                  <!--  <select name="role" id="role" class="input-control">
                        <option value=""></option>
                        <option value="Author">Author</option>
                        <option value="Admin">Admin</option>
                        <option value="Editor">Editor</option>
                    </select> -->
                </div>
                
               <!--
                <div class="input-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" class="input-control"></textarea>
                 
                </div>
                <div class="input-group">
                    <label for="twitter">Twitter (Optional)</label>
                    <input type="text" name="twitter" id="twitter" class="input-control">
                </div>

                <div class="input-group">
                    <label for="linkedin">LinkedIn (Optional)</label>
                    <input type="text" name="linkedin" id="linkedin" class="input-control">
                </div>

                <div class="input-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" class="input-control">
                </div>
                -->
                



                <div class="input-group">
                    <button type="submit" name="update-admin" class="btn primary-btn big-btn">Create User</button>
                </div>
              </form>
          </div>
        </div>
        <!--End Page Contents-->

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   

    
   
    <script src="../../assets/js/admin.js"></script>

   
</body>
</html>