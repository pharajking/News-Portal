<?php
 include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';


if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . " '";
}
 else if(isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . " '";
    $posts = searchPosts(($_POST['search-term']));

} else {
    $posts = getPublishedPosts();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
     <!--Google Fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Nunito+Sans:wght@700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu&display=swap" rel="stylesheet">
     
    <!--Slick Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="assets/css/admin_style.css">
   <link rel="stylesheet" href="assets/css/public.css">
</head>
<body>
  
    <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <!--Page Container-->
    <div class="default-page-container">
        <article class="post-card flat-card featured-post">
            <div class="image-wrapper bg-image" style="background-image: url(assets/images/featured_images/love-3392348_1920.jpg);"></div>
            <div class="post-info">
                <div class="topic-wrapper">
                    <a href="#" class=" td-none topic-tag">Life Lessons</a>
                    <span class="gray-1">5 min</span>
                </div>

                <div>
                    <h3 class="post-title">
                    <a href="#" class="td-none">
                        One day will be happy and free
                    </a>
                   </h3>
                </div>

                <div class="post-review">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ex non doloremque et sed corrupti magnam dolore sunt error adipisci reiciendis blanditiis voluptas.</p>
                </div>

                <div class="author-info">
                    <div class="author">
                        <img src="assets/images/avatar/ts-avatar.jpg" alt="" class="avatar">
                        <a href="#" class="gray-1 link">Pharaj king</a>
                    </div>
                    <a href="#" class="link">
                        Read more
                        <ion-icon name="arrow-forward-outline" class="readmore-icon"></ion-icon>
                    </a>
                </div>
            </div>

        </article>

        <section class="page-section carousel-container">
            <div class="carousel-header">
                <h2><?php echo $postsTitle; ?></h2>
                <a href="#">Sell All</a>
            </div>
            <button class="slider-arrow  next-arrow">
                <ion-icon class="icon" name="arrow-forward-circle-outline"></ion-icon>

            </button>
            <button class="slider-arrow  prev-arrow">
                <ion-icon class="icon" name="arrow-back-circle-outline"></ion-icon>
            </button>
          
           
            <div class="post-slider">
                <?php foreach ($posts as $post): ?>
   
                <article class="post-card">
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="image-wrapper bg-image" style="width: 400px;">   
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="#" class=" td-none topic-tag">Life Lessons</a>
                            <span class="gray-1">5 min</span>
                        </div>
        
                        <div>
                            <h3 class="post-title">
                            <a href="single_post.php?id=<?php echo $post['id']; ?>" class="td-none">
                               <?php echo $post['title']; ?>
                            </a>
                           </h3>
                        </div>
        
                        <div class="post-review">
                            <p>
                            <?php echo substr($post['body'], 0, 100) . '...' ?>      
                            &nbsp; <i><ion-icon name="today-outline"></ion-icon><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i></p>
                            
                        </div>
                        
        
                        <div class="author-info">
                            <div class="author">
                                <img src="assets/images/avatar/ts-avatar.jpg" alt="" class="avatar">
                                <a href="#" class="gray-1 link"><?php echo $post['username']; ?></a>
                            </div>
                            <a href="single_post.php?id=<?php echo $post['id']; ?>" class="link">
                                Read more
                                <ion-icon name="arrow-forward-outline" class="readmore-icon"></ion-icon>
                            </a>
                        </div>
                    </div>
        
                </article>
                <?php endforeach; ?>
            </div>
       
        </section>

        
        <section class="page-section carousel-container">
            <div class="carousel-header">
                <h2>Best of 2022</h2>
                <a href="#" class="td-none">Sell All</a>
            </div>
            <button class="slider-arrow  next-arrow">
                <ion-icon class="icon" name="arrow-forward-circle-outline"></ion-icon>

            </button>
            <button class="slider-arrow  prev-arrow">
                <ion-icon class="icon" name="arrow-back-circle-outline"></ion-icon>
            </button>
            <div class="post-slider">
                <?php foreach ($posts as $post): ?>
   
                <article class="post-card">
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="image-wrapper bg-image" style="width: 400px;">   
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="#" class=" td-none topic-tag">Life Lessons</a>
                            <span class="gray-1">5 min</span>
                        </div>
        
                        <div>
                            <h3 class="post-title">
                            <a href="#" class="td-none">
                               <?php echo $post['title']; ?>
                            </a>
                           </h3>
                        </div>
        
                        <div class="post-review">
                            <p>
                             <?php echo substr($post['body'], 0, 100) . '...' ?>  
                            &nbsp; <i><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i></p>
                            
                        </div>
                        
        
                        <div class="author-info">
                            <div class="author">
                                <img src="assets/images/avatar/ts-avatar.jpg" alt="" class="avatar">
                                <a href="#" class="gray-1 link"><?php echo $post['username']; ?></a>
                            </div>
                            <a href="#" class="link">
                                Read more
                                <ion-icon name="arrow-forward-outline" class="readmore-icon"></ion-icon>
                            </a>
                        </div>
                    </div>
        
                </article>
                <?php endforeach; ?>
            </div>
           
            
      
        </section>

        <!--Topic Section-->
        <section class="page-section topics-container center">
            <h2>Explore articles in various topics</h2>
            <p>Our articles are organized into topics</p>
            <div class="topics-pills">
                
            <?php foreach ($topics as $topic): ?>
             <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'] ?></a>
              
             <?php endforeach; ?>
            </div>

        </section>
        <!--//Topic Section-->

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