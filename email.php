<?php
$pib = filter_var(trim($_POST['pib']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']),
FILTER_SANITIZE_STRING);

mail('recipient@example.com', 'Email Subject', 'This is the email message body');
$to      = 'demos7797@gmail.com'; 
$subject = 'Email Subject';
$message = 'This is the email message body';
$headers = implode("\r\n", [
    'From: John Conde <webmaster@example.com>',
    'Reply-To: webmaster@example.com',
    'X-Mailer: PHP/' . PHP_VERSION
]);
header('buy.php');
?>