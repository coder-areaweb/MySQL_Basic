# Основы MySQL
![Logo](https://github.com/coder-areaweb/MySQL_Basic/blob/main/MYSQL_CRUD_.png)

### Описание курса:

В данном курсе рассмотриваю:
 - основы языка СУБД MYSOL
 - изучаю как создавать и работать с таблицами БД
 - как осуществлять работу с выборкой данных
 - базовое понятие (CRUD) и работу с таблицой (изменять, удалять, добавлять данные в таблицы)
 - работу с запросами в связке с языком PHP и выводом данных из БД на страницы сайта
 - как установить и использовать phpmyadmin

По окончанию курса научился: 
 - инсталлировать и настраивать рабочее окружение разработчика
 - научился создавать и работать с таблицами как из консоли, так и через программу phpmyadmin
 - правильно анализировать ошибки в коде и пользоваться отладочной приложениями при их поиске (var_dump, print_r, xdebug)
 - администрировать БД через phpMyAdmin
 - создал bash-скрипт для автоматической инсталляции пакетов


### Используемые ресурсы и инструменты:
- [PhpStorm](https://www.jetbrains.com/ru-ru/phpstorm/)
- [XAMPP](https://www.apachefriends.org/ru/index.html)
- [Debian](https://www.debian.org/index.ru.html)
- [Apache](https://httpd.apache.org/)
- [MySQL](https://www.mysql.com/)
- [PHP](https://www.php.net/)
- [PEAR](https://pear.php.net/)
- [PECL](https://pecl.php.net/)
- [phpMyAdmin](https://php-myadmin.ru/learning/)
- [xdebug](https://xdebug.org/)


### Полезные ссылки:
#### Справочная информация
- [MySQL](https://www.mysql.com/)
- [Предопределённые константы PDO](https://www.php.net/manual/ru/pdo.constants.php)
- [Доступ к базе данных в PHP](https://lred.ru/webmasteru/3844-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF-%D0%BA-%D0%B1%D0%B0%D0%B7%D0%B5-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-php)
- [Почему стоит пользоваться PDO для работы с базой данных](https://habr.com/ru/articles/137664/)
- [Работа с MySQL через PDO](https://metanit.com/php/mysql/2.1.php)
- [CRUD](https://ru.hexlet.io/courses/http-api/lessons/crud/theory_unit)
- [Create, read, update and delete](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete)

### Список уроков:
#0 Подготовка к работе (инсталляция и настройка рабочего окружения)  
#1 Введение и основные понятия, БД MySQL  
#2 Установка локального сервера XAMPP + phpMyAdmin  
#2.1 Как подключить базу данных  MySQL + PDO  
#2.2 Как создать таблицу MySQL 
#3 Типы полей в MySQL  
#4 Пользователи и привилегии в phpMyAdmin  
#5 Основные операции с БД в phpMyAdmin (PHP в связке с MySQL по методологии CRUD)  
#6 Всё про Таблицы и операции с ними в phpMyAdmin  
#7 Всё про Записи в таблицах в phpMyAdmin  
#8 Индекс и первичный ключ в phpMyAdmin на MySQL  
#9 Экспорт и Импорт в phpMyAdmin на MySQL  
#10 Связи между таблицами в phpMyAdmin на MySQL  

## Authors

- [ITDoctor](https://www.youtube.com/playlist?list=PLuY6eeDuleINWpCD2IbtMm-R5ClBA70Dw)

---

## Инсталляция LAMP stack
# Apache
```bash
  apt install -y apache2 apache2-utils
```
#Additions settings complete
#Changing Apache’s Directory Index (Optional)
#Для проверки Redirect создаем .htaccess файл:

```bash
  RewriteEngine On

RewriteRule ^about/$ /about.php
```
# PHP файл:
```PHP
  <a href="about/"> about</a>
```
#Запускаем через браузер: 
Должно быть Ок

# Сам файл .htaccess файл:
```bash
  touch .htaccess 
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . index.php [L]
```
#Apache redirect to index.php
#Creating a Virtual Host for your Website

# MySQL MariaDB
```bash
  apt install -y mariadb-server mariadb-client
```
#Additions settings complete
#Secure MariaDB
#mysql_secure_installation
#Create New MariaDB User and and Grant privileges

# Manage SQL phpMyAdmin
```bash
  apt install -y phpmyadmin && mkdir /var/www/html/phpMyAdmin
```
# PHP basic extension 
```bash
  apt install -y php php-common php-cli php-curl php-dev php-gd php-mbstring php-intl php-imagick php-uploadprogress php-uuid php-bcmath php-php-gettext php-raphf``
```
# PHP pecl and pear repo:
```bash
 apt install -y php-pear php-http php-http-all-dev 
```
# Debug_PHP
```bash
 apt install -y php-xdebug  php-phpdbg
```
# Archive
```bash
 apt install -y php-bz2 php-zip
```
# Language 
```bash
 apt install -y php-json php-yaml php-xml  
```
# Modules NGINX and APACHE
#php-fpm/libapache2-mod-php 
```bash
 apt install -y libapache2-mod-php
```
#Common Gateway Interface
#CGI (old)
#mod_cgi (поставляется вместе с Apache)
#php-cgi

#FastCGI:NGINX
#php-fpm

# Apache
#mod_fcgid or mod_fastcgi (other varients mod_proxy_fcgi + php-fpm)
#libapache2-mod-fastcgi php-fpm
```bash
 apt install -y libapache2-mod-fcgid
```
#MOD_PHP for APACHE not use CGI&FastCGI
#mod_php 

# Если PHP работает как модуль Apache:
```bash
  cat /etc/php/x.x/apache2/php.ini
```
Найти строчки и раскоментировать:
 - extension=pdo.so
 - extension=pdo_mysql.so

# Если PHP работает в режиме FastCGI:
 - /etc/php/x.x/cgi/php.ini

# Настройки PHP в командной строке:
 - /etc/php/x.x/cli/php.ini
# где x.x — соответствующая версия обработчика php
# Проверить доступные драйвераdrivers создания рhp-файла:
```bash
print_r(PDO::getAvailableDrivers ());
```

