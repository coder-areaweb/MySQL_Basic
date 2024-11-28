<div class="d-flex flex-column flex-md-row align-items-center mb-4 px-md-4 border-bottom bg-white p-3">
    <h5 class="my-0 mr-md-auto font-weight-normal">PHP блог</h5>
    <nav class="my-2 my-md-0 mr-md-3">
         <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/MySQL/Project/index.php">Главная</a>
     <?php
     if($_COOKIE['log'] == ''):
         echo '<a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/MySQL/Project/article.php">Добавить статью</a>';
     ?>
    </nav>
    <?php
    if($_COOKIE['log'] == ''):
        ?>
    <a class="btn btn-outline-primary mr-2" href="#">Войти</a>
    <a class="btn btn-outline-primary" href="/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/reg.php">Регистрация</a>
<?php
else:
    ?>
    <a class="btn btn-outline-primary" href="/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/auth.php">Кабинет пользователя</a>
    </div>
