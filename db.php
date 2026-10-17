<?php
$host = 'MySQL-8.0';
$user = 'root';
$password = '';
$dbname = 'students_db';

$conn = new mysqli($host,$user,$password,$dbname);

if($conn->connect_error) {
    die("Ошибка подключения к БД:". $conn->connect_error);
}
$conn->set_charset("utf8");
?>