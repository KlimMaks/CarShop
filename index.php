<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Street Motors - авторинок</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="touch-icon" href="load/img/game-console.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/caricon.png">
    <link rel="stylesheet" href="load/css/supercontroller.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="load/css/fontawesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="load/js/supercontroller.js"></script>
</head>

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
                    <a class="text-light" href="https://www.instagram.com/bztru" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
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
                           <a class="nav-link" href="registration.php">Вхiд</a>
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

    <div class="modal fade bg-white" id="supercontroller_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Пошук ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="supercontroller-carusel-roll" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#supercontroller-carusel-roll" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#supercontroller-carusel-roll" data-bs-slide-to="1"></li>
            <li data-bs-target="#supercontroller-carusel-roll" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="https://focus.ua/static/storage/thumbs/1088x/3/fd/1942359f-a36cf30c916cb7e5af20c7ed1de57fd3.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Street Motors</b></h1>
                                <h3 class="h2">Купуйте офіційно. Продавайте без обмежень</h3>
                                <p>
                                    Ми завжди чекаємо на вас. Отож, давайте покупайте!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="images/car1.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Ми завжди думаємо про вас!</h1>
                                <p>
                                    Ми же Street Motors!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="images/car2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Ми надаємо надійний вибір </h1>
                                <h3 class="h2"> Купуйте!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#supercontroller-carusel-roll" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#supercontroller-carusel-roll" role="button" data-bs-slide="next">
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#supercontroller-carusel-roll" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Переваги</h1>
                <p>
                    Наші переваги
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="img/1.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Пошук автомобілів</h5>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="img/2.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Немає часу на продаж авто</h2>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="img/3.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Пошук найкращого автомобіля</h2>
            </div>
        </div>
    </section>

    <footer class="bg-dark" id="supercontroller-footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Street Motors</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Київ, вул. Саксаганського, 35
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:+38015200630800">+3801526308</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="supercontroller@ukr.com">streetmotors@ukr.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Автомобілі</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Вживані авто</a></li>
                        <li><a class="text-decoration-none" href="#">Нові авто</a></li>
                        <li><a class="text-decoration-none" href="#">Електромобілі</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Інформація</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Головна</a></li>
                        <li><a class="text-decoration-none" href="shop.php">Купити</a></li>
                        <li><a class="text-decoration-none" href="about.php">Продаж</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Контакти</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Всі права захищені &copy; 2022 Street Motorss
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>