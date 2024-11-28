<!doctype html>
<html lang="ru">
<head>
    <?php
    $website_title = "PHP блог";
    include '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/head.php';
    ?>
    <!--<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/css/bootstrap.min.css">
    <link rel="stylesheet" href="/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/css/main.css"> -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <!--<link rel="icon" href="/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/img/php_icon.ico">
    <title>РНР блог</title>-->
</head>
<body>
<?php
include '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/header.php';
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-3">
<?php
$conn = new PDO("mysql:host=localhost;dbname=testing2", "admin", "ADMIN7753191");
$zapros = 'SELECT * FROM `articles` ORDER BY `date` DESC;
$query = $conn->query($zapros);
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo "<h2>$row->title</h2>
    <p>$row->intro</p>
    <p>$row->avtor</p>
    <button class='btn btn-warning mb-5'>Прочитать больше</button>";
    }
?>
        </div>
        <?php
        require '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/aside.php';
        ?>
    </div>
</main>

<?php
require '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/footer.php';
?>
</body>
</html>
