<!DOCTYPE html>
<html lang="en">

<head>
    <title>Оплата</title>
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
</head>

<?php
require('header_shop.php');
?>


<p></p>
<p></p>
<div class ="center">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Номер карти</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Мiсяць / Рiк</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">CVV</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<button class="btn btn-success" type="submit" style="margin-left: 40%">Сплатити</button>
			<p style="margin-left: 13%; color: grey; font-size: 4px;">Натискаючи цю кнопку, ви приймаєте умови сервісу</p>
</div>

<p></p>
<p></p>
<?php
require('footer.php');
?>