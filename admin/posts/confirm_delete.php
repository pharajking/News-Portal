<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Confirm Delete</title>
   <link rel="stylesheet" href="../../assets/css/admin_style.css">
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>


    <div class="page-wrapper">
        <!--Admin Sidebar-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php") ?>
       
       <!--//Admin Sidebar-->
        <div class="page-content">
            <div class="admin-container">
                <div class="admin-table lg-box">
                <h1>Are you sure ?</h1>
                <hr>

                <div class="responsive-table" style="font-size: 18px">
                 <p>Are you sure you want to delete the post title <strong>This is a simple post title</strong></p>
                 <p style="color: red;">This action CANNOT to undone</p>
                 <div>
                    <a href="#" class="btn danger-btn">Permanently Delete</a>
                    <a href="trash.php" class="btn">Do Nothing</a>
                 </div>
                </div>
               
            </div>
        </div>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../../assets/js/admin.js"></script>

</body>
</html>