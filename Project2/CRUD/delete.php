<?php
$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=test", 'admin', 'ADMIN7753191');

$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();


header('Location: /index.php');
?>