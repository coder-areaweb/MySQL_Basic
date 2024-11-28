<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
//require 'page2.php'; //подгружает стр-цу, если не найдена останавливается код
include 'page2.php'; // делает тоже самое, только когда появляется ошибка код выполняется
echo 'Основная часть сайта';
//require_once команда к файлу единоразово
//include_once
?>
<?php
print_r('<h1>GET and POST передача данных</h1>'. '<br>');
#GET отправляет запрос видим его в адресной строке браузера
if ($_GET ['name'] == "") {
    echo 'Введите имя' . '<br>';
} else {
    echo $_GET ['name'] . '<br>';
}
if ($_GET ['email'] == "") {
    echo 'Введите свою эл почту'. '<br>';
} else {
    echo $_GET ['email'] . '<br>';
}

?>
<form action="" method="get">
    <label for="name">Имя</label>
    <input type="text" name="name"><br>
    <label for="email">Почта</label>
    <input type="email" name="email"><br>
    <button type="submit" name="button">Отправить</button>
</form>
</body>
</html>