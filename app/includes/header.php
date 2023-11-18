<header>
        <div class="nav-overlay"></div>
        <span role="button" class="menu-icon" >
            <ion-icon name="menu-outline"></ion-icon>
        </span>
        <a href="#" class="logo-wrapper td-none">
            <div><span>B</span>LOG</div>
        </a>

        <nav>
            <div class="search-item">
                <span class="search-icon" role="button">
                    <ion-icon name="search-outline"></ion-icon>
                </span>

                <form action="index.php" method="post" class="header-search-form hide">
                    <input type="text" name="search-term" placeholder="Search this website...." class="input-control input-control-sm search-input">
                </form>
            </div>
           
            
            <ul class="navmenu">
                <li class="navitem"><a href="index.php">All Posts</a></li>
                <li class="navitem"><a href="topic_posts.php">Life Lessons</a></li>
                <li class="navitem"><a href="single_post.php">Journals</a></li>
                <li class="navitem">
                    <a href="#">Best Articles <ion-icon name="chevron-down-outline" class="navicon"></ion-icon></a>
                    <ul class="dropdown">
                        <li><a href="#">Best of 2022</a></li>
                        <li><a href="#">Best of 2021</a></li>
                        <li><a href="#">Best of 2020</a></li>
                        <li><a href="#">Best of 2019</a></li>
                    </ul>
                    
                </li>
            
                <?php if (isset($_SESSION['id'])): ?>
               
                
                <li class="navitem">
                    <a href="#">
                        <ion-icon name="person-circle-outline" class="navicon"></ion-icon>
                        <?php echo $_SESSION['username'] ?>
                        <ion-icon name="chevron-down-outline" class="navicon"></ion-icon></a>
                    <ul class="dropdown">
                        <?php if($_SESSION['admin']): ?>
                        <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a></li>
                    </ul>
                </li>
                <?php else: ?>
                <li class="navitem"><a href="<?php echo BASE_URL . '/register.php' ?>">Register</a></li>
                <li class="navitem"><a href="<?php echo BASE_URL . '/Login.php' ?>">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </header>
