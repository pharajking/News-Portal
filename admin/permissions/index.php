<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Manage Permissions</title>
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
                <div class="admin-table sm-box">
                <h1 class="center">Permissions</h1>
                <hr>

               


                <div class="table-actions">
                        <span></span>
                        <a href="create.php" class="btn primary-btn small-btn ">
                            <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                            Add Permissions     
                        </a>
                </div>
                
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Permissions</th>
                           
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Create post
                                    <div class="td-action-links">
                                        <a href="#" class="edit">Edit</a>
                                        <span class="inline-divider">|</span>
                                        <a href="#" class="trash">Delete</a>
                                        
                                    </div>
                                </td>
                               
                                 
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Publish post
                                    <div class="td-action-links">
                                        <a href="#" class="edit">Edit</a>
                                        <span class="inline-divider">|</span>
                                        <a href="#" class="trash">Delete</a>
                                        
                                    </div>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Delete post
                                    <div class="td-action-links">
                                        <a href="#" class="edit">Edit</a>
                                        <span class="inline-divider">|</span>
                                        <a href="#" class="trash">Delete</a>
                                        
                                    </div>
                                </td>
                                
                            </tr>

                           
    
                          
                        </tbody>
                     
                    </table>
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