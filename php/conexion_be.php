<?php

$host = 'db4free.net:3306';
$dbuser = 'sebasuchanuwu';
$dbpassword = 'sebasuchanuwu';
$dbname = 'login_register_d';

$conexion = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
if ($conexion) {
    mysqli_query($conexion, 'SET NAMES utf8mb3');
    echo "Connection - successful </br>";
} else {
    echo "Connection - failed </br>" . mysqli_connect_error();
}

//$conexion = mysqli_connect("localhost","root","","login_register_d");
//$conexion = mysqli_connect("85.10.205.173:3306","root","","login_register_d");

/*if($conexion){
    echo 'Conectado exitosamente a la base de datos';
}else{
    echo 'No se ha podido conectar a la base de datos';
}*/


?>