<?php
if($_COOKIE['log'] == '') {
    header('Location: /reg.php');
    exit();
}
?>
<!doctype html>
<html lang="ru">
<head>
    <?php
    $website_title = "Добавление статьи";
    include '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/head.php';
    ?>
</head>
<body>
<?php
include '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/header.php';
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h4>Добавление статьи</h4>
            <form action="" method="post">
                <label for="title">Заголовок статьи</label>
                <input type="text" name="title" id="title" class="form-control">

                <label for="intro">Интро статьи</label>
                <textarea name="intro" id="intro" class="form-control"></textarea>

                                <label for="text_intro">Текст статьи</label>
                <textarea name="text_intro" id="text_intro" class="form-control"></textarea>

                <div class="alert alert-danger mt-2" id="errorBlock"></div>

                <button type="submit" name="button" id="article_send" class="btn btn-success mt-3">Добавить</button>
            </form>
        </div>
        <?php
        require '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/aside.php';
        ?>
    </div>
</main>

<?php
require '/home/athlet/Рабочий стол/PHP/itProger/phpexample/MySQL/Project/blocks/footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- AJAXA script -->
<script>
$('#article_send').click(function()) {
   var title = $('#title').val();
      var intro = $('#intro').val();
         var text_intro = $('#text_intro').val();



$.ajax({
url: 'reg/add_article.php',
type: 'POST',
cache: false,
data: {'title': title, 'intro' : intro, 'text_intro': text_intro},
dataType: 'html',
success: function (data) {
    if(data == 'Готово') {
$('#article_send').text('Все готово');
$('#errorBlock').hide();
}
else {
$('#errorBlock').show();
$('errorBlock').text(data);


}
}
});

});
</script>

</body>
</html>


