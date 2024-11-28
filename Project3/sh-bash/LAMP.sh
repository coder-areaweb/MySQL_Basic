#!/bin/bash
#LAMP stack

#Apache
apt install -y apache2 apache2-utils

#Additions settings complete
#Changing Apache’s Directory Index (Optional)
#Apache redirect to index.php
#Creating a Virtual Host for your Website

#MySQL MariaDB
apt install -y mariadb-server mariadb-client

#Additions settings complete
#Secure MariaDB
#mysql_secure_installation
#Create New MariaDB User and and Grant privileges

#Manage SQL
#phpMyAdmin
apt install -y phpmyadmin && mkdir /var/www/html/phpMyAdmin

#Language developed
#PHP basic extension 
apt install -y php php-common php-cli php-curl php-dev php-gd php-mbstring php-intl php-imagick php-uploadprogress php-uuid php-bcmath php-php-gettext php-raphf
#Phar
apt install -y php-random-compat php-readline php-phar-io-version php-phar-io-manifest
#PHP pecl and pear repo:
apt install -y php-pear php-http php-http-all-dev 
#Debug_PHP
apt install -y php-xdebug  php-phpdbg
#Archive
apt install -y php-bz2 php-zip
#Language 
apt install -y php-json php-yaml php-xml  
#Security
apt install -y php-gnupg php-tokenizer php-exif php-mcrypt libmcrypt-dev php-phpseclib
#Remoute & Auth
apt install -y php-ssh2 php-oauth

#Modules NGINX and APACHE
#php-fpm/libapache2-mod-php 

apt install -y libapache2-mod-php

#Common Gateway Interface
#CGI (old)
#mod_cgi (поставляется вместе с Apache)
#php-cgi

#FastCGI:NGINX
#php-fpm

#Apache
#mod_fcgid or mod_fastcgi (other varients mod_proxy_fcgi + php-fpm)
#libapache2-mod-fastcgi php-fpm
apt install -y libapache2-mod-fcgid

#MOD_PHP for APACHE not use CGI&FastCGI
#mod_php 

#SQL extension
apt install -y php-mysql
#Cache Query DB
apt install -y php-memcache php-memcached






