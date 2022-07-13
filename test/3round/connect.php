<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'test');

$connect = mysqli_connect('localhost', 'root', '', 'test');

if (!$connect) {
    die('Error connect to DataBase');
}
