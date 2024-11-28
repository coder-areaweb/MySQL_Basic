<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php
    $title = "PHP";
    ?>
</head>
<body>
<?php
print_r('<h1>Вывод информации и встраивание в html-code</h1>'. '<br>');
echo '<b>Привет</b> <br>'; //'Идеальны для вывода текста'
              // "Идеальны для текста и переменных"
echo 'Hello <br>';
echo '1 Part' . '2 Part<br><br>'//соединять/объединять строки при помощи "."
/*
echo '\''; //одинарый апостраф
echo "\""; //двойной апостраф
*/
?>
<!--?echo '<b>Слово</b> ' .'Делай раз' . 'Делай два<br><br>'?>-->
<!--вывод одной строки, переменной сокращенная форма-->
<?php
print_r('<h1>Переменные, константы, типы данных и операции с ними</h1>'. '<br>');
#Переменные
//перменная - это ячейка памяти (хранить данные и оперировать с ними)
$num = 2;
$num2 = 3;
$result = $num + $num2;
/*
$num +=4;//сокращенная форма сложения
$num ++4;//сокращенная форма прибавления
*/
echo 'Сумма:' ."$result <br><br>"; //вывод целочисленных чисесл
$float = 10.2;
$float2 = 10.9;
$summ = $float + $float2;
echo 'Сумма:' ."$summ <br><br>"; //вывод цифр с плавающей запятой
$word ="Сумма переменных:";
echo $word . $summ.'<br><br>'; //вывод строкового знаяения и суммы с плавающей запятой
//$bool = true;//false белвые переменные для проверки различных условий true =1 /false =0
/*$result = $num - $num2;
$result = $num * $num2;
echo $result .'<br><br>';
$result = $num / $num2;
echo $result .'<br><br>';
$result = $num % $num2; //остоток при делениее
echo $result .'<br><br>';
*/
#Константы
echo PHP_VERSION . ":Верисия PHP<br><br>"; //встроенная константа
define("PI", 3.14); //создаем константу название, после параметр
//defined("PI") . "<br>"// проверка, есть ли такая константа
echo  PI ."<br><br>";
?>
<?php
print_r('<h1>Условние операторы IF/ELSE/ELSE IF/SWITCH CASE</h1>'. '<br>');
$x =80;
$y = 12;
$bool = false;
if($x > $y && $bool == false){
    echo 'Переменая х больше у' . "<br><br>";
}
if ($x == 12) {
    echo 'Сработала первая проверка зн-я true';
} else {
    echo 'Сработала вторая проверка зн-я false'. "<br><br>";
    echo $x == 12 ? "True":"FALSE". "<br><br>"; //сокращенная запись вывода проверки
}
/*
if($x > $y && $bool) //эквивалент $bool ==true
if($x > $y && $bool == false)
if($x > $y && !$bool)//эквивалент $bool == false
*/

/*!= не равно
== равно
>/< больше меньше
>=/<= больше или равно/меньше или равно
ОПЕРАТОРЫ
&& - и
|| или
=== оператор эквивалентности
*/

$xux = 4;
switch ($xux) {
    case "56":
        echo '$xux = "56"';
        break;
    case 4:
        echo '$xux = 4';
        break;
    default: //так можно записывать без brake
    echo 'error';
}
?>
<?php
print_r('<h1>Массив данных и цикл Foreach</h1>'. '<br>');
//Массив и переменные схожи, но переменная хранит 1 зн-е, а массив множество
#Одномерный массив
$arr_1 = [5,1,3,7]; // 1 способ объявления массива
$arr_2 = array(3,5,7,9); //2 способ объявления массива
$arr_2[0] = 11;
echo $arr_2[0]. '<br>';
#Двумерный массив
$arr_3 = array(array(12,30,66),array(775,31,91));
$arr_3[1][2];
echo $arr_3[1][2]. '<br>';
#Ассоциативный массив
//индексы являются ключами
$arr_4 = array("short" => "Dict", "long" => "Dictonary");
$arr_4["short"];
echo $arr_4["short"]. '<br>';
#Цикл для перебора ассоциативного массива foreach
foreach ($arr_4 as $key => $value) {
    echo 'Ключ:' . $key  . 'значение:' . $value . '<br>';
}
?>
<?php
print_r('<h1>Циклы For/While/Do While</h1>'. '<br>');
//Спциальная конструкция, которая позволяет проделать код несколько раз
#For
for ($i =100; $i > 10; $i /=2 ){
        echo $i . '<br>';
echo '<br>';
        #While
    $z =0;
    while ($z < 10){
echo  $z . '<br><br>';
$z++;
    }
#Do While срабатывает только 1 раз
    $z =0;
    do {
        echo '1';
    } while ($z == 1);
}
/*
 Операторы:
break
continue пропускает 1 итерацию
 */
?>
<?php
$arr_5 = [5,23,9,23.2,8];
$count = count($arr_5);
for ($i = 0; $i < $count; $i++) {
    //echo 'Значение элемента' . $i . '-' . $arr_5[$i] . '<br>';
    echo 'Значение элемента' . ($i + 1). '-' . $arr_5[$i] . '<br><br>';
    /*$i =0;
        while ($i < $count) {
            echo 'Значение элемента' . ($i + 1). '-' . $arr_5[$i] . '<br><br>';
        }
     */
}
?>
<?php
print_r('<h1>Динамическое подключение файлов include/include_once and require/require_once </h1>'. '<br>');
include 'page2.php';
?>
<?php
print_r('<h1>Функции</h1>'. '<br>');
/*
 Функции лучше выносить в отдельный файл
Могут принимать параметры - некие данные
 */
/*function math($x, $y) {
    $result = $x + $y;
    printSome($result);
}
math (5, 7);
*/
function printSome($text, $numer) {
    echo 'Функция вызова'. '<br>' . $text . '<br>';
    echo ($numer * 2 ). '<br>';
}
$text = 'Hello';
printSome($text, 10);

function printSome2($text2 = "Alice", $number2 = 20) {
    echo 'Calling function'. '<br>' . $text2 . '<br>';
    echo ($number2 * 2.2 ). '<br>';
}
printSome2();
//global $name - дает возможность вызывать из функции
//static $name внутри функции
function printStatic($text, $num = 7) {
    static $num = 0;
    $num++;
    echo 'Значение переменной num'. '<br>' . $num . '<br>';
    echo 'Function called<br>' .$text . '<br>';
    echo ($num * 2 ). '<br>';
}
$text3 = 'Hello';
printSome($text3, 10);
?>
<?php
print_r('<h1>GET and POST передача данных</h1>'. '<br>');
#POST отправляет запрос не видимо от нас
//Всю проверку на заполнение перенес в файл check.php
?>
<form action="/MySQL/PHP/check.php" method="post">
    <label for="name">Имя</label>
    <input type="text" name="name"><br>
    <label for="email">Почта</label>
    <input type="email" name="email"><br>
    <button type="submit" name="button">Отправить</button>
</form>
<?php
print_r('<h1>Работа с файлами</h1>'. '<br>');
/*
 Для начала файл нужно:
Открыть fopen
Затем прописать операции mode a, r
Закрыть fclose
 */
?>
<!--Запись информации -->
<form action="/MySQL/PHP/write.php" method="post">
    <textarea name="message" rows="8" cols="80"></textarea><br>
    <button type="submit" name="button">Отправить</button>
</form>
<?php
//session_start(); //объявляем запуск сессии

setcookie("name", $_POST['name'], time() - 60); //удаляем куки
setcookie("email", $_POST['email'], time() - 60);

?>
<?php
print_r('<h1>Сессии и Куки</h1>'. '<br>');
//session_destroy(); //удаление сессии
/*if ($_SESSION['name'] != "" || $_SESSION['email'] != "") {
    echo 'Имя пользователя:' . $_SESSION['name'] . '<br>';
echo 'E-mail пользователя:' . $_SESSION['email'] . '<br>';
}
*/


if ($_COOKIE['name'] != "" || $_COOKIE['email'] != "") {
    echo 'COOKIE Имя пользователя:' . $_COOKIE['name'] . '<br>';
    echo 'COOKIE E-mail пользователя:' . $_COOKIE['email'] . '<br>';
}
?>
<form action="/MySQL/PHP/action.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    <label for="email">E-mail</label>
    <input type="email" name="email"><br>
    <button type="submit" name="button">Send</button>
</form>
<?php
print_r('<h1>Работа с датой, встроенные ф-ции, массивом</h1>'. '<br>');
date_default_timezone_set('Europe/Moscow'); //встроенная функция часового пояса
$data = date('Дата: d-m-Y');
$time = date('H:i:s');
echo $data . '|' . $time . '<br><br>';

$date_now = new DateTime(); //создаем объект класса
$date_now->modify('+1 hour');
echo $date_now->format('H:i:s') . '<br>';

#Функции для массива
$arnold =[5,7,2,89.2,8];
echo count($arnold) . 'элементов в массиве'; //count elements array
print_r($arnold) . '<br><br>'; //вывести данные массива можно так, либо
                            //через цикл или указание индекса
echo '<br>';
sort($arnold); //отсортировать по увеличению
print_r($arnold) . '<br>';
echo '<br>';

rsort($arnold); //отсортировать по убыванию
print_r($arnold) . '<br><br><br><br>';
echo '<br>';

#Ассоциативного массива
$arni = ["a" => 12, "b" => 56, "c" => 87];
sort($arni); //отсортировать по значению элементов
print_r($arni) . '<br><br><br>';
echo '<br>';

$arni_2 = ["a" => 102, "b" => 506, "c" => 87];
rsort($arni_2); //отсортировать по убыванию элементов
print_r($arni_2) . '<br><br><br>';
echo '<br>';

$arni_3 = ["c" => 100, "q" => 775, "f" => 3191];
ksort($arni_3); //отсортировать по ключам
print_r($arni_3) . '<br><br><br>';
echo '<br>';

shuffle($arni); //перемешать массив
print_r($arni) . '<br><br><br>';
echo '<br>';
echo in_array(2,$arnold) . 'зн-я в массиве 1 - yes | 0 - no'. '<br>'; //поиск зн-я в массиве
echo '<br>';

unset($arnold[2]); //удалить зн-е из массива
echo in_array(2,$arnold) ?"Yes, true" : "No, false" . '<br>'; //сделать проверку
echo '<br>';

$merge_1 = [5,7,2,89.2,8];
$merge_2 = [15,77,22,889.2,88];
$merge = array_merge($merge_1,$merge_2); //объединяем массивы
print_r($merge) . '<br>';
echo '<br>';

$slice = array_slice($merge, 0,3); //удаляет диапазон значений
print_r($slice) . '<br>';
echo '<br>';
#Проверка переменных
$x = 775;
echo 'Цифра ли?' . is_numeric($x) . '<br>';
echo 'Тип переменной - ' . gettype($x) . '<br>';
/*
 * Целое ли число is_integer
Дробное число is_double
Строка или переменная is_string
Явл-ся ли переменная boolean is_bool
Явл-ся ли переменная array is_array
*/
#Проверка строк
$stroka = "Example string";
echo strlen($stroka) . '<br>'; //кол-во символов в строке
echo strpos($stroka, "Ex") === false ? '\'Ex\' find': '\'Ex\' not find' ; //поиск в строке
    echo '<br>';
echo substr($stroka ,3) . '<br>'; //удаление символов
echo strtolower($stroka) . '<br>' . strtoupper($stroka) . '<br>'; //нижний и верхний регистр
//mb_strtolower mb_strtoupper для кириллицы
echo trim("  simple text      ") . '<br>'; //обрезаюся пробемы до и после строки
#Математические функции
$some = -15;
echo abs($some) . '<br>';
/*
 * round округление числа
 * ceil всегда округляет число в большую сторону
 * floor всегда в меньшую сторону
 * mt_rand возвращает случайное число
 * min_max
 * sin_cos_tan 1/tan - катангенс
 */
#Global array $_SERVER для работы с сервером
echo $_SERVER['REQUEST_URI'] . '<br>';
echo $_SERVER['SERVER_ADDR'];
?>
<?php
print_r('<h1>ООП создание классов и объектов/методов/конструкторов/деструкторов</h1>'. '<br>');
/*
 * Все переменные в классе - поля
 * Все функции в классе - метод
 * Модификаторы доступа: позволяют добрать до переменной/метода
 * public видно вне класса
 * protected виден в классе, и класах наследования
 * private видны только в этом классе (значит вызвать не можем)
 * Контрукторы - позволяет присваивать зн-я сразу при создании
 * и дополнительно можно работать в инкапсуляции /По сути обычная функция
 * Деструкторы - противоположны конструкторам создается при уничтожении объектов
 * Объектов можно создавать множество
 * Класс -описание характеристик
 * Объект - создается на основе класса и характеристик
 * Константами можно рабоать в:
 * классе
 * вне класса
 * ООП на 4 китах:
 * Классы и Объекты
 * Наследования
 * Полиморфизм (позволяет переопределять классы и наследование)
 * Инкапсуляция (закрытие/открытие различных элементов в классе private/public/protected
 */
#Created CLASS
class User {
    const PASS = "password";
    public $name;
    private $surname = "None";
    private $email;
    private $login;
    private $pass;

    function __construct($name, $surname, $login)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        echo self::PASS . '<br>';
        $this->showAll("Пользователь");

    }
    function showAll($text) {
        echo $text . $this->name . "," . $this->surname;
    }
    function getSurname()
    {
        return $this->surname;
    }
function __destruct ()
{
    print 'Destroyed' . __CLASS__ . '<br>';
}
}

#Created OBJECT
$admin = new User("John", "Marley", "admin"); //обращение к лассу
$admin->name = "John"; //обращение к полям
//echo '<br>';
//echo User::PASS; //вывод константы
//echo '<br>';
/*$str = $admin->getSurname(); //обратились к функции присвоив новую переменную
echo '<br>';
echo $str;
echo $admin->name;
echo '<br>';
*/
$moderator = new User("Alex", "Krieg", "moderator"); //обращение к лассу
//$moderator->name = "Alex"; //обращение к полям
//echo $moderator->name;
//$moderator->showAll("Пользователь:");
echo '<br>';
#Обращение к классу через метод
$editor = new User("Woolf", "Messing", "editor"); //обращение к лассу
$editor->name = "Woolf"; //обращение к полям
//$editor->showAll("Пользователь:");
echo '<br>';
#Обращение к классу через конструктор
$manager = new User("Adolf", "Rubel", "manager"); //обращение к лассу
//$manager->showAll("Пользователь:");
?>
<?php
print_r('<h1>ООП НАСЛЕДОВАНИЕ и свойство PROTECTED</h1>'. '<br>');
class Car {
    protected $speed;
    protected $wheels;
    protected $colors;
function __construct($speed, $colors)
{
    $this->speed = $speed;
}
    function showinfo()
    {
        echo "Скорость автомобиля:" . $this->speed . '<br>';
    }
}
class BMW extends Car
{
private $model;
function __construct($speed, $model, $colors)
{
    parent::__construct($speed,$colors);
    $this->model = $model;
}

    function showinfo() //function setModel() use полиморфизм
    {
        echo "Скорость автомобиля:" . $this->speed . '<br>';
        echo "Модель авто:" . $this->model . '<br>';
        echo "Цвет авто:" . $this->colors . '<br>';
    }
/*function setModel()
{
    //$this->model = $model;
    echo "Модель авто:" . $this->model . '<br>';
    echo "Цвет авто:" . $this->colors . '<br>';
}*/
}
echo '<br>';
$m3 = new BMW(320, "M3", "White");
//$m3->speed = 300;
//$m3->showSpeed();
$m3->showinfo(); //применили полиморфизм для улучшения
//$m3->setModel();
?>
<?php
print_r('<h1>ООП ПОЛИМОРФИЗМ И ИНКАПСУЛЯЦИЯ</h1>'. '<br>');
print_r('<h1>ООП ИНТРЕФЕЙСЫ - трейты - АБСТРАКТНЫЙ КЛАСС</h1>'. '<br>');
/*
 Интерфейсы - для мульти-наследования, а класс имеет главный класс и подклас
 Трейты позволяют мспользовать код повторно в них создаются методы, чтобы использовать в классах;
В РНР нет наследования множества классов, но выход есть трейты + интерфейсы
 Абстрактный класс - нельзя создать объкеты, в абстрактных классах создаются специальные методы
для использования в классах наследников
*/
interface Human {
public function talk();
public function walk();
}
interface Mutant
{
    public function fly();
}
class Person implements Human, Mutant
{
    function talk() {
        echo 'Speech man<br>';
    }
    function walk() {
        echo 'Walk man<br>';
    }
    function fly() {
        echo 'Fly man<br>';
    }
}
$bob = new Person();
$bob->talk();
$bob->walk();
$bob->fly();
?>
<?php
trait PrintSome
{
    public function talk()
    {
        echo 'Hello,world!' . '<br>';
    }

    public function sayBye()
    {
        echo 'Bye-Bye';
    }
}
class Test {
use PrintSome;
    }
$obj = new Test();
$obj->talk();
$obj->sayBye();
?>
<?php
//Абстрактные классы
abstract class  Car2
{
    protected $speed;
    protected $color;
//Создаем абстрактный метод
    abstract protected function showInfo();
}
//Создаем класс наследника
class BMW2 extends Car2 {
    function __construct($speed)
    {
        $this->speed = $speed;
    }
    public function showinfo()
    {
        echo "Скорость авто:" . $this->speed;
    }
}
$m3 = new BMW2(250);
$m3->showinfo();
?>

</body>
</html>

