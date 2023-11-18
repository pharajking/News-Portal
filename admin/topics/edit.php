<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit Topics</title>
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
                <h1 class="center form-title">Edit Topics</h1>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
              
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" id="name" class="input-control">
                </div>
                <div class="input-group">
                    <label for="post-editor">Description</label>
                    <textarea name="description"  id="description" class="input-control"><?php echo $description; ?></textarea>
                 
                </div>

                <div class="input-group">
                    <button type="submit" name="update-topic" class="btn primary-btn big-btn">Update Topic</button>
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