<?php
print_r('<h1>PDO connect MySQL DB и вывод данных</h1>'. '<br>');
#PDO from FETCH_ASSOC (array)
/*$user = 'root';
$password = '1234567890@@_';
$db =  'testing';
$host =  'localhost';

$dsn = 'mysql:host'.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);

$query = $pdo->query('SELECT * FROM `users`');
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo '<h1>'. $row['login'] . '</h1><p><b>Email:</b>' . $row['email'] . '></p>';
}

#PDO from FETCH_OBJ (object)
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<h1>' . $row->login . '</h1>
<p><b>Email:</b>' . $row->email . '</p>
<p><b>Имя:</b>' . $row->name. '</p>
<p><b>Фамилия:</b>' . $row->surname . '</p>';
}
*/

//Проверка подключения к  БД
/*try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost", "admin", "ADMIN7753191");
    echo "Database connection established";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
*/

//Проверка подключения к  БД
/*try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost", "admin", "ADMIN7753191");
    echo "Database connection established";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
*/
try {
    $conn = new PDO("mysql:host=localhost;dbname=testing", "admin", "ADMIN7753191");

    $sql = "SELECT * FROM `users` ORDER BY `id` DESC LIMIT 2";

    $result = $conn->query($sql);
    while ($row = $result->fetch())
    {
        echo '<h1>' . $row['login'] . '</h1>
<p><b>Email:</b>' . $row['email'] . '</p>
<p><b>Имя:</b>' . $row['name'] . '</p>
<p><b>Фамилия:</b>' . $row['surname'] . '</p>';

    }
}
    /*$name = 'Петр';
    $sql2 = 'SELECT `name`, `email`, `id` FROM `users` WHERE `name`= ?';
    $result2 = $conn->prepare($sql2);
    $result2->execute([$name]);
    $users = $sql2->fetchAll(PDO::FETCH_OBJ);
    foreach ($users as $user) {
    echo $user->name . '<br>';
    echo $user->email . '<br>';
    //var_dump($users);
    }
    */


catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
<?php
print_r('<h1>Добавление данных INSERT|UPDATE|DELETE</h1>'. '<br>');
/*$login = 'codi999';
$email = 'codi999@example.ru';
$name = 'Vlad';
$surname = 'Dudenko';
$zapros = 'INSERT INTO users(`login`, `email`, `name`, `surname`) VALUES (:login, :email, :name, :surname);';
$query = $pdo->prepare($zapros);
$query->execute([`login` => $login, `email` => $email, `name` => $name, `surname` => $surname]);
//INSERT INTO `users` (`id`, `login`, `email`, `name`, `surname`) VALUES (NULL, 'codi', 'test@update.ru', 'Andy', 'Panda');
*/
?>