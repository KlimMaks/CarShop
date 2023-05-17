<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 2 || mb_strlen($login) > 30)
{
	echo "Недопустима довжина логiна";
	exit();
}
else if(mb_strlen($name) < 2 || mb_strlen($name) > 30)
{
	echo "Недопустима довжина iм'я";
	exit();
}
else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 8)
{
	echo "Недопустима довжина паролю(вiд 2 до 8 символiв)";
	exit();
}

$pass = md5($pass."k435h43k5h34k5hk");

$mysql = new mysqli('localhost', 'root', 'root', 'site_users');
$mysql -> query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$pass', '$name')");
$mysql -> close();
header('Location: registration.php');
?>