<?php
include 'conexion_be.php';

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO pqrs(nombre, tipo, mensaje) 
VALUES('$nombre','$tipo','$mensaje')";

echo '
<script>
    alert("guardado");
    window.location = "../bienvenida.php"
</script>

';
?>