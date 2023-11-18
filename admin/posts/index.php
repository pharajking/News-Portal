<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Manage Posts</title>
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
                <h1 class="center">Posts</h1>
                <hr>
                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>

             <!--   <div class="message success">
                    <ion-icon name="checkmark-circle" class="message-icon"></ion-icon>
                    <span>This is a simple message</span>
                </div> -->

                <form action="post" class="featured-post-form">
                    <strong>Featured post:</strong>
                    <span class="title-wrapper">
                        <span>This is a sample post title</span>
                        <button type="button" class="change-featured-post">change</button>
                    </span>

                    <span class="input-wrapper hide">
                        <input 
                        type="text"
                         name="title" 
                         class="input-control input-control-sm"
                         placeholder="Enter post title..."
                         >

                         <button type="submit" class="btn btn-primary">Update</button>
                    </span>
                </form>

                <div class="table-actions">
                    <div class="table-filter-group">
                        <input 
                        type="text" 
                        name="search-term" 
                        id="search-post-input" 
                        placeholder="Search..">

                        <select name="filter-posts" id="filter-posts">
                            <option value="ALL">--Filter--</option>
                            <option value="ALL">All</option>
                            <option value="OLDEST">Oldest</option>
                            <option value="NEWEST">Newest</option>
                            <option value="POPULAR">Popular</option>
                            <option value="PUBLISHED">Published</option>
                            <option value="DRAFTS">Drafts</option>
                        </select>
                    </div>

                    <div class="table-buttons">
                        <a href="trash.php" class="btn warning-btn small-btn ">
                            <ion-icon name="trash-outline" class="icon"></ion-icon>
                            Trash
                        </a>

                        <a href="create.php" class="btn primary-btn small-btn ">
                            <ion-icon name="add-circle-outline" class="icon"></ion-icon>
                            Add Post
                            
                        </a>
                    </div>
                </div>
                
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Topic</th>
                            <th>Views</th>
                            <th>Publish</th>
                        </thead>
                        <tbody>

                        <?php foreach ($posts as $key => $post): ?>

                          
                            <tr>
                                <td><?php echo $key +1; ?></td>
                                <td>Pharaj king</td>
                                <td>
                                    <a href="#" target="_blank">
                                      <?php echo $post['title'] ?>
                                    </a>
                                    <div class="td-action-links">
                                        <a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="trash">Delete</a>
                                        <span class="inline-divider">|</span>
                                        <a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a>
                                        <span class="inline-divider">|</span>
                                        <a href="related_posts.php" class="edit">Related Posts</a>
                                    </div>
                                </td>
                                <td>Self Help</td>
                                <td>1,000</td>

                               <?php if ($post['published']): ?>
                                <td> <a href="edit.php?pushlished=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a> </td>
                              
                                <?php else: ?>
                                    <td> <a href="edit.php?pushlished=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a> </td>
                              
                                <?php endif; ?>
                               
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