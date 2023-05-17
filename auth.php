<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."k435h43k5h34k5hk");

$mysql = new mysqli('localhost', 'root', 'root', 'site_users');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();

if(count($user)==0)
{
	echo "Користувач не знайдений";
	exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql -> close();
header('Location: /');
?>