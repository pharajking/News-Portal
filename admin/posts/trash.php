<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Posts Trash</title>
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
                <h1 class="center">Posts Trash</h1>
                <hr>

                <div class="table-actions">
                        <span></span>
                        <a href="index.php" class="btn primary-btn small-btn ">
                            <ion-icon name="settings-outline" class="icon"></ion-icon>
                            Manage Post
                        </a>
                </div>
                
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Topic</th>
                            <th>Views</th>
                         
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pharaj king</td>
                                <td>
                                    <a href="#" target="_blank">
                                        This is the first post
                                    </a>
                                    <div class="td-action-links">
                                        <a href="index.php" class="edit">Restore</a> 
                                        <span class="inline-divider">|</span>
                                        <a href="confirm_delete.php" class="trash">Delete</a>
                                        
                                    </div>
                                </td>
                                <td>Self-Help</td>
                                <td>1,000</td>
                               
                            </tr>
    
                            <tr>
                                <td>1</td>
                                <td>Pharaj king</td>
                                <td>
                                    <a href="#" target="_blank">
                                        This is the first post
                                    </a>
                                    <div class="td-action-links">
                                        <a href="index.php" class="edit">Restore</a> 
                                        <span class="inline-divider">|</span>
                                        <a href="confirm_delete.php" class="trash">Delete</a>
                                        
                                    </div>
                                </td>
                                <td>Self-Help</td>
                                <td>1,000</td>
                               
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

    <script>
        //Featured posts
        const changeFeaturedPostBtn = document.querySelector('.change-featured-post');
        const inputWrapper = document.querySelector('.input-wrapper');
        const titleWrapper = document.querySelector('.title-wrapper');


        changeFeaturedPostBtn.addEventListener('click', function() {
            inputWrapper.classList.toggle('hide');
            titleWrapper.classList.toggle('hide');
        });
    </script>
</body>
</html>