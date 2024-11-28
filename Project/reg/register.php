<?php
$username = trim (filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim  (filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim (filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim (filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';

if(strlen($username) <= 3)
    $error = 'Введите имя';
    //exit();
elseif (strlen($email) <= 3)
     $error = 'Введите email';
//exit();
elseif (strlen($login) <= 3)
     $error = 'Введите логин';
    //exit();
elseif (strlen($pass) <= 3)
     $error = 'Введите пароль';
    //exit();

if($error != '') {
   echo $error;
    exit();
}

$hash = "4058AMYO08dfojgf@@@_ljjgll##hlHsLL~~``fglhs";
$pass = md5($pass . $hash );

$conn = new PDO("mysql:host=localhost;dbname=testing2", "admin", "ADMIN7753191");
    $zapros = 'INSERT INTO users(name, email, login, pass) VALUES (?,?,?,?)';
    $query = $conn->prepare($zapros);
    $query->execute([$username, $email, $login, $pass]);


//INSERT INTO `users` (`id`, `login`, `email`, `name`, `surname`) VALUES (NULL, 'codi', 'test@update.ru', 'Andy', 'Panda');
echo 'Готово';

?>
