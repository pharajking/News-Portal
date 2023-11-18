<header>
        <div class="nav-overlay"></div>
        <span role="button" class="menu-icon" >
            <ion-icon name="menu-outline"></ion-icon>
        </span>
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo-wrapper td-none">
            <div><span>B</span>LOG</div>
        </a>
        <nav>
            <?php if(isset($_SESSION['username'])): ?>
            <ul class="navmenu"> 
                <li class="navitem">
                    <a href="#">
                        <ion-icon name="person-circle-outline" class="navicon"></ion-icon>
                        <?php echo $_SESSION['username']; ?>
                        <ion-icon name="chevron-down-outline" class="navicon"></ion-icon></a>
                    <ul class="dropdown">
                
                        <li><a href="<?php echo BASE_URL . '/logout.php';?>">Logout</a></li>
                    </ul>
                </li>

            </ul>
            <?php endif; ?>
        </nav>
    </header>