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
    <title>Admin Manage Topics</title>
   <link rel="stylesheet" href="../../assets/css/admin_style.css">
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>

    <div class="page-wrapper">
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php") ?>
        <div class="page-content">
            <div class="admin-container">
                <div class="admin-table sm-box">
                <h1 class="center">Topics</h1>
                <hr>
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <div class="table-actions">
                        <span></span>
                        <a href="create.php" class="btn primary-btn small-btn ">
                            <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                            Add Post        
                        </a>
                </div>
                
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Topic</th>
                            <th># of Posts</th>
                           
                        </thead>
                        <tbody>

                            <?php foreach ($topics as $key => $topic): ?>
                                 <tr>
                                 <td><?php echo $key + 1; ?></td>
                                 <td><?php echo $topic['name']; ?>
                                     <div class="td-action-links">
                                         <a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a>
                                         <span class="inline-divider">|</span>
                                         <a href="index.php?del_id=<?php echo $topic['id']; ?>" class="trash">Delete</a>
                                         
                                     </div>
                                 </td>
                                 <td>19</td> 
                             </tr>
                            <?php endforeach; ?>
                          
                          
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