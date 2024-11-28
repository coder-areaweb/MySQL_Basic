<?php
if($_POST['message'] != "") {
    $mess = $_POST['message'];
  $file = fopen('text/data.txt', 'a');
  fwrite($file, $mess);
  fclose($file);
   header('Location: /MySQL/PHP/index.php');
    die();
}

?>
