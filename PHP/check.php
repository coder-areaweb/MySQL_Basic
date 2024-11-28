<?php
#Передача данных на сервер, а после переход на главную страницу
//header('Location: /MySQL/PHP/index.php');
//exit(); //or die()
if ($_POST ['name'] == "") {
    echo 'Введите имя' . '<br>';
} else {
    echo $_POST ['name'] . '<br>';
}
if ($_POST ['email'] == "") {
    echo 'Введите свою эл почту'. '<br>';
} else {
    echo $_POST ['email'] . '<br>';
}
?>