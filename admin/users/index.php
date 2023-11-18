<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Manage Users</title>
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
                <h1 class="center">Users</h1>
                <hr>

                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>
                <div class="table-actions">
                    <div class="table-filter-group">
                        <input 
                        type="text" 
                        name="search-term" 
                        id="search-user-input" 
                        placeholder="Search..">

                        <select name="filter-users" id="filter-users">
                            <option value="ALL">--Filter--</option>
                            <option value="ALL">All</option>
                            <option value="OLDEST">Oldest</option>
                            <option value="NEWEST">Newest</option>
                            <option value="VERIFIED">Verified</option>
                            <option value="UNVERIFIED">Unverified</option>
                            <option value="USER">User</option>
                            <option value="STAFF">Staff</option>
                            <option value="ADMIN">Admin</option>
                            <option value="Author">Author</option>
                            <option value="EDITOR">Editor</option>
                        </select>
                    </div>

                    <div class="table-buttons">

                        <a href="create.php" class="btn primary-btn small-btn ">
                            <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                            Add User
                            
                        </a>
                    </div>
                </div>
                
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                           
                        </thead>
                        <tbody>
                            <?php foreach ($admin_users as $key => $user): ?>
                                <tr>
                                <td><?php echo $key +1; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td>
                                    <?php echo $user['email']; ?>
                                    <div class="td-action-links">
                                        <a href="index.php?delete_id=<?php echo $user['id']; ?>" class="trash">Delete</a>
                                        <span class="inline-divider">|</span>

                                        <a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a>
                                        
                                    </div>
                                </td>
                            </tr>
                             <?php endforeach; ?>   
                          
                           
                        </tbody>
                        <tfoot>
                            <td colspan="6">
                                <div class="pagination-links">
                                    <a href="#" class="link active">1</a>
                                    <a href="#" class="link">2</a>
                                    <a href="#" class="link">3</a>
                                    <a href="#" class="link">4</a>
                                    <a href="#" class="link">5</a>
                                    <a href="#" class="link">6</a>
                                    <a href="#" class="link">7</a>
                                </div>
                            </td>
                        </tfoot>
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