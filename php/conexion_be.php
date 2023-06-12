<?php

$host = 'db4free.net:3306';
$dbuser = 'sebasuchanuwu';
$dbpassword = 'sebasuchanuwu';
$dbname = 'login_register_d';

$conexion = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
if ($conexion) {
    mysqli_query($conexion, 'SET NAMES utf8mb3');
} else {
    echo "Connection - failed </br>" . mysqli_connect_error();
}

?>