<?php
include("path.php");

include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}


$posts = selectAll('posts', ['published' => 1]);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | AwaInspires</title>
      <!--Google Fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Nunito+Sans:wght@700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu&display=swap" rel="stylesheet">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="assets/css/admin_style.css">
   <link rel="stylesheet" href="assets/css/public.css">
</head>
<body>
     
<?php include(ROOT_PATH ."/app/includes/header.php"); ?>

     <!--Page Banner-->
     <section class="page-banner">
        <div class="banner-container">
            <div class="left-box">

                <div class="breadcrumbs" role="navigation">
                    <small>
                        <a href="index.html">Home</a>
                        <span>
                            <a href="#">Journaling</a>
                            <span>
                                The Bane and the Glory of Introversion
                            </span>
                        </span>
                        
                    </small>

                </div>
                <h1 class="banner-title"> The Bane and the Glory of Introversion</h1>
                <div class="post-details">
                    <div class="author-wrapper">
                        <img class="avatar" src="assets/images/avatar/ts-avatar.jpg" alt="">
                        <div class="name-wrapper">
                            <a href="#" class="link">Pharaj King</a>
                            <small class="gray-1">Dec 11 &middot; 9 min</small>
                        </div>
                    </div>
                    <div class="social-links">
                        <span>Share</span>
                        <a href="#" class="td-none" target="_blank">
                            <img src="assets/images/icons/facebook-icon-960x1024.jpg" alt="">
                        </a>

                        <a href="#" class="td-none" target="_blank">
                            <img src="assets/images/icons/linkedin.png" alt="">
                        </a>

                        <a href="#" class="td-none" target="_blank">
                            <img src="assets/images/icons/instagram_PNG10.png" alt="">
                        </a>
                    </div>
                </div>

            </div>

            <div class="right-box">
                <div class="bg-image featured-image-wrapper" style="background-image: url(assets/images/featured_images/love-3392348_1920.jpg);">

                </div>
            </div>

        </div>
    </section>

    <!--Page Container-->
    <div class="default-page-container page-container single-page">
        <!--Main Content-->
        <div class="main-content">
            <div class="primary-font">
                
              <?php echo $post['body']; ?> 
            </div>

            <!-- Author Bio-->
            <div class="author-bio">
                <div class="avatar-wrapper">
                    <img class="avatar" src="assets/images/avatar/ts-avatar.jpg" alt="" srcset="">
                </div>
                <div class="bio-wrapper">
                    <a href="#" class="link author-name">
                        <h3>Awa Melvine</h3>
                    </a>

                    <div class="primary-font">Content Creator</div>
                    <div class="social-links">
                        <a href="#" class="td-none" target="_blank">
                            <img src="assets/images/icons/facebook-icon-960x1024.jpg" alt="">
                        </a>

                        <a href="#" class="td-none" target="_blank">
                            <img src="assets/images/icons/linkedin.png" alt="">
                        </a>

                        <a href="#" class="td-none" target="_blank">
                            <img src="assets/images/icons/instagram_PNG10.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!--// Author Bio-->


            <!--Suggested Posts-->
            <section class="page-section carousel-container">
                <div class="carousel-header">
                    <h2>You might also like</h2>
                    
                </div>
                <button class="slider-arrow  next-arrow">
                    <ion-icon class="icon" name="arrow-forward-circle-outline"></ion-icon>
    
                </button>
                <button class="slider-arrow  prev-arrow">
                    <ion-icon class="icon" name="arrow-back-circle-outline"></ion-icon>
                </button>
              
               
                <div class="post-slider">
                    <?php foreach ($posts as $p): ?>
                    <article class="post-card">
                        <div class="image-wrapper bg-image">
                            <img src="<?php echo BASE_URL. '/assets/images/' . $p['image'] ?>" alt="">
                        </div>
                        <div class="post-info">
                            <div>
                                <h1 class="post-title">
                                <a href="#" class="td-none">
                                    <?php echo $p['title'] ?>
                                </a>
                               </h1>
                            </div>
                            <div class="author-info">
                                <div class="author">
                                    <img src="assets/images/avatar/ts-avatar.jpg" alt="" class="avatar">
                                    <a href="#" class="gray-1 link">Pharaj King</a>
                                </div>
                               
                            </div>
                        </div>
            
                    </article>
                    <?php endforeach; ?>
                </div>
            </section>
            <!--// Suggested Posts-->
        </div>
        <!-- // Main Content-->

        <!--Sidebar-->
        <div class="sidebar">

            <div class="sidebar-section topics-section">
                <h2 class="title">Topics</h2>
                <div class="topic-list">
                <?php foreach ($topics as $topic): ?>
                    <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id']?>"><?php echo $topic['name']; ?></a>
              
                    <?php endforeach; ?>
                   
                  
                </div>
            </div>
            <div class="sidebar-section">
                <img src="assets/images/featured_images/holland-iris-5220407_960_720.webp" class="tall-image" alt="">
            </div>

        </div>
        <!--// Sidebar-->
    
    </div>
    <!--// Page Container-->

    <!--Page Footer-->
    <?php include(ROOT_PATH ."/app/includes/footer.php"); ?>
    <!--// Page Footer-->

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Slick Carousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        //Toggle search input
        const mobileBreakpoint = 756;
        const searchIcon = document.querySelector('.search-icon');
        const headerSearchForm = document.querySelector('.header-search-form');
        const searchInput = document.querySelector('.search-input');
        const logoWrapper = document.querySelector('.logo-wrapper');

        function toggleSearchBar() {
            searchIcon.classList.toggle('hide');
            headerSearchForm.classList.toggle('hide');
            searchInput.focus();
            if (window.innerWidth <= mobileBreakpoint) {
                logoWrapper.classList.toggle('hide');
            }
        }
        searchIcon.addEventListener('click', toggleSearchBar);
        searchInput.addEventListener('blur', toggleSearchBar);

        //Navbar responsiveness
        const menIcon = document.querySelector('.menu-icon');
        const navOverlay = document.querySelector('.nav-overlay');
        const navMenu = document.querySelector('.navmenu');
        const dropdowns = document.querySelectorAll('.navitem .dropdown');

        menIcon.addEventListener('click', function() {
            navOverlay.classList.toggle('open'); 
            navMenu.classList.toggle('open');
        });

        navOverlay.addEventListener('click', function() {
            navOverlay.classList.remove('open');
            navMenu.classList.remove('open');
        });


        dropdowns.forEach(dropdown => {
            const navItem = dropdown.closest('.navitem');
            navItem.addEventListener('click', function() {
                navItem.classList.toggle('active');
            });
        });
        
        // Slick Carousel
        $('.post-slider').each(function(index, slider) {
            $(slider).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            infinite: false,
            autoplaySpeed: 2000,
            nextArrow: $(slider).siblings('.next-arrow'),
            prevArrow: $(slider).siblings('.prev-arrow'),
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    
                }
                },
                {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    
                }
                },
            ]


            });
            });
       
    </script>
</body>
</html>