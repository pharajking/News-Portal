<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts in Collection</title>
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
                <div class="admin-table twins-table lg-box">
                <!--All Posts-->
               <div class="sm-box">
                <h2> Posts on Collection</h2>
                <div class="table-actions">
                    
                        <input 
                        type="text" 
                        name="search-term" 
                        id="search-post-input" 
                        placeholder="Search..">
 

               
                </div>
                
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                
                                <td>
                                  This is the first post 
                                </td>
                                <td class="sm-column">
                                    <ion-icon name="checkmark-done-outline" class="hide checkmark-icon"></ion-icon>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                
                                <td>
                                  This is the second post 
                                </td>
                                <td class="sm-column">
                                    <ion-icon name="checkmark-done-outline" class="hide checkmark-icon"></ion-icon>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td colspan="6">
                                <div class="pagination-links">
                                    To find more posts, type in the search box above
                                </div>
                            </td>
                        </tfoot>
                    </table>
                </div>
               
               </div>
               <!--All Posts-->



               <!--Related Posts-->
               <div class="sm-box">
                <h2> Posts in Collection</h2>
                
                <p>Tip: Drag and drop to order items</p>
                <div class="responsive-table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <a href="#" target="_blank" class="link">
                                        Best of 2023
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th class="sm-column">SN</th>
                                <th>Title</th>
                            </tr>
                           
                            
                        </thead>
                        <tbody>
                            <tr class="selected">
                                <td class="sm-column">1</td>
                                
                                <td>
                                  This is the first post 
                                </td>
                                <td class="sm-column">
                                    <ion-icon name="close-outline" class="hide close-icon"></ion-icon>
                                </td>
                            </tr>
                            <tr>
                                <td class="sm-column">2</td>
                                
                                <td>
                                  This is the second post 
                                </td>
                                <td class="sm-column">
                                    <ion-icon name="close-outline" class="hide close-icon"></ion-icon>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td colspan="6">
                                <div class="pagination-links">
                                  <button type="button" class="btn primary-btn long-btn">Save Post in Collection</button>
                                </div>
                            </td>
                        </tfoot>
                    </table>
                </div>
              </div>
               <!--Related Posts-->

             
               
                </div> 
        </div>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../../assets/js/admin.js"></script>

</body>
</html>