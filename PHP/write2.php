<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<!--Чтение информации информации -->
<form action="/MySQL/PHP/write.php" method="post">
    <textarea name="message" rows="8" cols="80"></textarea><br>
    <button type="submit" name="button">Отправить</button>
</form>
<?php
#Не удобный метод
/*$file = fopen('text/data.txt', 'r');
echo fread($file, 10);
fclose($file);
*/
echo  file_get_contents('text/data.txt') . '<br>';
//echo file_put_contents('text/data.txt' , ''Testing) . '<br>'; //записать инф-ю
echo file_exists('text/data.txt') . '<br><br>'; //проверка файла а есть ли такой
echo filesize('text/data.txt') . '<br>'; //size file
//rename() переимновать
//unlink() удаление файлов
?>

<?php
phpinfo();
?>


</body>
</html>

