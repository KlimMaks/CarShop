<!DOCTYPE html>
<html lang="en">

<head>
    <title>Toyota Supra</title>
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
    <script src="load/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TKGWQG7');</script>
	<!-- End Google Tag Manager -->
</head>


    <?php
require('header_shop.php');
?>

    <div class="modal fade bg-white" id="supercontroller_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img style="width: 80%;" class="card-img img-fluid" src="img/auto/1.webp" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <div class="carousel-inner product-links-wap" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/1.webp" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/2.webp" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/3.webp" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/4.webp" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/5.webp" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/6.webp" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/7.webp" alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/8.webp" alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/auto/9.webp" alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Toyota Supra GR 2020</h1>
                            <p class="h3 py-2" style="color:green">65 000 $</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Стан: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>вживане авто</strong></p>
                                </li>
                            </ul>

                            <h6>Характеристики:</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Марка, модель, рік: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Toyota Supra 2020</strong></p>
                                </li>
                                </br>
                                <li class="list-inline-item">
                                    <h6>Двигун: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>3 л • Бензин</strong></p>
                                </li>
                                </br>
                                <li class="list-inline-item">
                                    <h6>Колір: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Червоний</strong></p>
                                </li>
                                </br>
                                <li class="list-inline-item">
                                    <h6>В розшуку: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Ні</strong></p>
                                </li>
                                </br>
                                <li class="list-inline-item">
                                    <h6>Коробка передач: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Автомат</strong></p>
                                </li>
                                </br>
                                <li class="list-inline-item">
                                    <h6>Привід: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Задній</strong></p>
                                </li>
                            </ul>
                            <p>Абсолютно цілий автомобіль Жодної фарбованої деталі кузова Автомобіль затягнуть в захисну плівку HeadUp display (проекція на лобове скло) Безпровідна зарядка Бездротовий CarPlay Автомобіль доопрацьований компанією Unlim Boost Stage 2</p>

                            <h6>Код:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>31314883</li>
                            </ul>
                            <ul class="list-unstyled pb-3">
                                <button class="btn btn-success" type="submit"><a href="buy.php" style="color: White; text-decoration: none;">Придбати</a></button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
require('footer.php');
?>