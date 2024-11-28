<?php
$title = trim (filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$intro = trim  (filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
$text_intro = trim (filter_var($_POST['text_intro'], FILTER_SANITIZE_STRING));

$error = '';

if(strlen($title) <= 3)
    $error = 'Введите название статьи';
    //exit();
elseif (strlen($intro) <= 15)
     $error = 'Введите интро для статьи';
//exit();
elseif (strlen($text_intro) <= 20)
     $error = 'Введите текст статьи';
    //exit();

if($error != '') {
   echo $error;
    exit();
}


$conn = new PDO("mysql:host=localhost;dbname=testing2", "admin", "ADMIN7753191");
    $zapros = 'INSERT INTO articles(title, intro, text_intro, date, avtor) VALUES (?,?,?,?,?)';
    $query = $conn->prepare($zapros);
    $query->execute([$title, $intro, $text_intro, time(), $_COOKIE['log']]);


//INSERT INTO `users` (`id`, `login`, `email`, `name`, `surname`) VALUES (NULL, 'codi', 'test@update.ru', 'Andy', 'Panda');
echo 'Готово';

?>
