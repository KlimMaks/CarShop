<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Адмiн панель</title>
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

<div class="container">
  <h2>Панель адмiнiстрування</h2>
  <div class="alert alert-info">
    <strong>Якщо ви бачите це повiдомлення</strong> , ви знаходитесь в адмiнiстраторськiй панелi. Тут ви можете додавати, редагувати, видаляти оголошення, переглядати список зареєстрованих користувачiв. 
  </div>


<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Додавання</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Редагування</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Видалення</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Користувачi</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <h1>Заповнення даних на продаж авто</h1>
        <form class="form" action ="" method = "post">
            <input type="text" class="form-control" name="id" id="id" placeholder="ID авто"><br>
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
            <button class="btn btn-success" id="liveToastBtn" type="button">Додати</button>
        </form>
    </div>


      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <h1>Редагування даних оголошення авто</h1>
        <form class="form" action ="" method = "post">
            <input type="text" class="form-control" name="id" id="id" placeholder="ID авто"><br>
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
            <button class="btn btn-success" id="liveToastBtn" type="button">Редагувати</button>
        </form>
    </div>


      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <h1>Видалення оголошень</h1>
        <form class="form" action ="" method = "post">
            <input type="text" class="form-control" name="id" id="id" placeholder="ID авто"><br>
            <button class="btn btn-danger" id="liveToastBtn" type="button">Видалити</button>
        </form>
      </div>


      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
          <h5><b>ID &nbsp&nbsp&nbsp Логiн &nbsp&nbsp&nbsp Пароль &nbsp&nbsp&nbsp Iм'я</b></h5>
          <?php
            $mysql = new mysqli('localhost', 'root', 'root', 'site_users');
            $sql = $mysql->query("SELECT * FROM `users`");
            while ($result = mysqli_fetch_array($sql)) {
                echo "{$result['id']} &nbsp&nbsp&nbsp {$result['login']} &nbsp&nbsp&nbsp {$result['password']} &nbsp&nbsp&nbsp {$result['name']}<br>";
             }
            ?>

      </div>
    </div>
  </div>
</div>
</div>

<p></p>
<p></p>
<?php
require('footer.php');
?>