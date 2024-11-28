<?php
#SESSION

session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];

setcookie("name", $_POST['name'], time() + 60);
setcookie("email", $_POST['email'], time() + 60);
?>