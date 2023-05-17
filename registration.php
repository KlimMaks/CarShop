<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Вхiд</title>
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

<?php
require('header_shop.php');
?>

<div class ="row">
	<div class ="col">
		<div class="container mt-4">
		<?php
		if($_COOKIE['user']== ''):
		?>
		<h1>Форма реєстрації</h1>
		<form class="form" action ="check.php" method = "post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введiть логiн"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Введiть iм'я"><br>
			<input type="text" class="form-control" name="pass" id="pass" placeholder="Введiть пароль"><br>
			<button class="btn btn-success" type="submit">Зареєструватись</button>
		</form>
		</div>
	</div>
	<div class ="col">
		<div class="container mt-4">
		<h1>Форма авторизації</h1>
		<form class="form" action ="auth.php" method = "post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введiть логiн"><br>
			<input type="text" class="form-control" name="pass" id="pass" placeholder="Введiть пароль"><br>
			<button class="btn btn-success" type="submit">Авторизуватись</button>
		</form>
		</div>
		<?php else: ?>
			<p>Привiт, <?=$_COOKIE['user']?></p>
			<a href="logout.php">Выход</a>
		<?php endif; ?>
	</div>
	<p></p>
	<p></p>
</div>

<?php
require('footer.php');
?>