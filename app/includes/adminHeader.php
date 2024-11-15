<header>
        <a class="logo" href="<?php echo BASE_URL . '/index.php';?>">
            <h1 class="logo-text"><span>Blog</span>Web</h1>
        </a>
        <i class="fas fa-bars menu-toggle"></i>
        <ul class="nav">
            <?php if(isset($_SESSION['username'])):?>
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <?php echo $_SESSION['username'];?>
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/logout.php';?>" class="logout">Logout</a></li>
                    </ul>
                </li>
            <?php endif;?>
            <!-- <li><a href="#">Sign up</a></li>
        <li><a href="#">Login</a></li> -->
        </ul>
</header>