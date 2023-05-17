<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Форма придбання</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="touch-icon" href="load/img/game-console.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/caricon.png">
    <link rel="stylesheet" href="load/css/supercontroller.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="load/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="load/js/supercontroller.js"></script>
</head>
<?php
require('header_shop.php');
?>
<p></p>
<p></p>
<div class ="center">
<form action = "" method = "post">
      <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" name="pib" id="pib">ПIБ</label>
    <input type="name" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" name="email" id="email">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" name="tel" id="tel">Номер телефону</label>
    <input class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-success"><a href="shop.php" style="color: Black; text-decoration: none;">Вiдправити</a></button>
</form>
<p></p>
<p></p>
<div class="textsize">
<p>Менеджер обов'язково перевiрить вашу заявку та подзвонить Вам для пiдтвердження</p>
</div>
</div>
<?php
require('footer.php');
?>