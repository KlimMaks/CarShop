<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="supercontroller_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="musicua@ukr.com">streetmotors@ukr.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+3800000000000">+3801526308</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                Street Motors
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#supercontroller_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="supercontroller_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Головна</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Купити</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Продаж</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">Про нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Вхід</a>
                        </li>
                       <?php
                            if($_COOKIE['user']== ''):
                        ?>
                        <?php elseif($_COOKIE['user']== 'admin'): ?>
                        <li class="nav-item">
                            <a class = "nav-link" href="admin.php">Адмiн панель</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class = "nav-link" href="registration.php">Привiт, <?=$_COOKIE['user']?></a>
                        </li>
                        <?php endif; ?> 
                    </ul>
                </div>
            </div>

        </div>
    </nav>