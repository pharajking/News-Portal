<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Create Posts</title>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Nunito+Sans:wght@700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu&display=swap" rel="stylesheet">
    
    
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
              <form action="create.php" method="post" class="admin-form md-box" enctype="multipart/form-data">
                <h1 class="center form-title">Create Post</h1>
               <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <div class="input-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?php echo $title; ?>" id="title" class="input-control">
                </div>
                <div class="input-group">
                    <label for="post-editor">Body</label>
                        
                    <textarea name="body" id="body" class="input-control"><?php echo $body; ?></textarea>  
                  <!--  <div id="text-editor" name="body" class="text-editor">
                        
                    </div>  -->
                 
                </div>
                <div class="post-details">
                    <div class="select-topic-wrapper">
                        <div class="input-group">
                            <label for="topic">Topic</label>
                            <select name="topic_id" id="topic" class="input-control">
                                <option value=""></option>

                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                     <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                     <?php endif; ?>   

                                <?php endforeach; ?>     
                              
                               
                            </select>
                        </div>
                    </div>
                    <div class="image-wrapper">
                        <input type="file" name="image" id="image" class="image-input">
                        <button type="button" class="image-btn bg-image">
                            <span class="choose-image-label" >
                                <ion-icon name="image-outline" class="image-outline"></ion-icon>
                                <span>Choose Image</span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="input-group">
                    <?php if (empty($published)): ?>
                    <label for="published">
                        <input type="checkbox" name="published" id="published">
                        Publish
                    </label>
                    <?php else: ?>
                       
                     <label for="published">
                        <input type="checkbox" name="published" id="published">
                        Publish
                    </label>   
                    <?php endif; ?>
                </div>

                <div class="input-group">
                    <button type="submit" name="add-post" class="btn primary-btn big-btn">Create Post</button>
                </div>
              </form>
          </div>
        </div> 
        <!--End Page Contents-->

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   

    
    <!-- Include the Quill library -->
   
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="../../assets/js/post_quill_editor.js"></script>
    <script src="../../assets/js/admin.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
   
    
<!--
    <script>
        //Preview post image
        const imageBtn = document.querySelector('.image-btn');
        const imageInput = document.querySelector('.image-input');
        const chooseImageLabel = document.querySelector('.choose-image-label');

        imageBtn.addEventListener('click',function() {
            imageInput.click();
        })

        imageInput.addEventListener('change', function() {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageBtn.style.backgroundImage = `url(${e.target.result})`;
                    imageBtn.style.height = '150px';
                    imageBtn.style.border = 'none';
                    chooseImageLabel.classList.toggle('hide');
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    -->

   
</body>
</html>