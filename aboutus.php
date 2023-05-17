<!DOCTYPE html>
<html lang="en">

<head>
    <title>Про нас</title>
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

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Про нас</h1>
                    <p>
                        Ми авторинок, який пропонує перегляд та купівлю автомобілей. Ці автомобілі займають топові позиції в рейтинзі Top Gear
                    </p>
                </div>
                <div class="col-md-4">
                    <img width="400" height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStSJBChk578kg60HiqHSrd7e9OHRt3pUE2zA&usqp=CAU" alt="About Hero">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Функції</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-search"></i></div>
                    <h2 class="h5 mt-4 text-center"><a href="shop.php" style="color: Black; text-decoration: none;">Купівля</a></h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-gavel"></i></div>
                    <h2 class="h5 mt-4 text-center"><a href="about.php" style="color: Black; text-decoration: none;">Продаж</a></h2>
                </div>
            </div>
        </div>
    </section>

<?php
require('footer.php');
?>