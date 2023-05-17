<!DOCTYPE html>
<html lang="en">

<head>
    <title>Про нас</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    <div class ="row">
    <div class ="col">
        <div class="container mt-4">
        <h1>Заповнення даних на продаж авто</h1>
        <form class="form" action ="" method = "post">
            <input type="text" class="form-control" name="1" id="1" placeholder="Назва авто"><br>
            <input type="text" class="form-control" name="2" id="2" placeholder="Цiна (в USD)"><br>
            <input type="text" class="form-control" name="3" id="3" placeholder="Стан"><br>
            <input type="text" class="form-control" name="4" id="4" placeholder="Модель"><br>
            <input type="text" class="form-control" name="5" id="5" placeholder="Двигун"><br>
            <input type="text" class="form-control" name="6" id="6" placeholder="Колiр"><br>
            <input type="text" class="form-control" name="7" id="7" placeholder="В розшуку??"><br>
            <input type="text" class="form-control" name="8" id="8" placeholder="Коробка передач"><br>
            <input type="text" class="form-control" name="9" id="9" placeholder="Привiд"><br>
            <input type="text" class="form-control" name="10" id="10" placeholder="Опис"><br>
            <button class="btn btn-success" id="liveToastBtn" type="button"><a href="sell.php" style="color: White; text-decoration: none;">Продати</a></button>
        </form>
        </div>
    </div>
    <div class ="col">
        <div class="container mt-4">
        <h1>Вибiр мiсця розташування</h1>
        <form class="form" action ="" method = "post">
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 1</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Вiльно">place 2</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 3</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 4</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 5</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 6</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Вiльно">place 7</button>
            <hr>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 8</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 9</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 10</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 11</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 12</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Вiльно">place 13</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 14</button>
            <hr>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 15</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 16</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 17</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 18</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Занято">place 19</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Вiльно">place 20</button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Вiльно">place 21</button>
            <hr>
            <input type="text" class="form-control" name="place" id="place" placeholder="Оберiть мiсце"><br>
            <input type="text" class="form-control" name="place" id="place" placeholder="Оберiть перiод (1-30 днiв)"><br>
            <button class="btn btn-success" type="submit"><a href="trans.php" style="color: White; text-decoration: none;">Забронювати</a></button>
        </form>
        </div>
    </div>
    <p></p>
    <p></p>
</div>


<?php
require('footer.php');
?>