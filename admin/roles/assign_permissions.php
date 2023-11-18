<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Permissions Admin</title>
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
                <h1 class="center">Assign Permissions</h1>
                <hr>

               <div class="selected-role">
                <h3>Author</h3>
                <div class="description">
                    The author is able to create,edit, Update and delete their posts
                </div>
                
               </div>


                <div class="table-actions">
                        <span></span>
                        <a href="#" class="btn primary-btn small-btn ">
                            <ion-icon name="settings-outline" class="icon"></ion-icon>
                            Manage Roles      
                        </a>
                </div>
                <form action="#" method="post" class="assign-permissions-form">
                <div class="responsive-table">
                    <table>
                        <thead>
                            <th class="sm-column">SN</th>
                            <th>Permissions</th>
                            <th class="sm-column">
                                <label for="select-all">
                                    All
                                    <input type="checkbox" name="select-all" id="select-all">
                                </label>
                            </th>
                           
                           
                        </thead>
                        <tbody>
                            <tr>
                                <td class="sm-column">1</td>
                                <td>Create Post
                                </td>
                                <td class="center">
                                    <input type="checkbox" name="permission" id="permission">
                                </td>
                              
                            </tr>
                            <tr>
                                <td class="sm-column">1</td>
                                <td>Update Post
                                </td>
                                <td class="center">
                                    <input type="checkbox" name="permission" id="permission">
                                </td>
                              
                            </tr>

                            <tr>
                                <td class="sm-column">1</td>
                                <td>Delete Post
                                </td>
                                <td class="center">
                                    <input type="checkbox" name="permission" id="permission">
                                </td>
                              
                            </tr>
                          
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn primary-btn long-btn">Save Permissions

                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                     
                    </table>
                </div>
            </form>
               
            </div>
        </div>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../../assets/js/admin.js"></script>

    <script>
        const selectAll =document.querySelector('#select-all');
        const assignPermissionsForm = document.querySelector('.assign-permissions-form');

        selectAll.addEventListener('change', function() {
            const checkboxList = assignPermissionsForm.querySelectorAll('td input[type=checkbox]');
            checkboxList.forEach(checkbox => checkbox.checked = selectAll.checked);
        })
    </script>

    
</body>
</html>