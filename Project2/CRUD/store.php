<?php

$pdo = new PDO("mysql:host=localhost;dbname=test", 'admin', 'ADMIN7753191');
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST); //true || false
header("Location:/index.php"); 
exit; //переадресация пользователя на главную страницу index.php
?>
