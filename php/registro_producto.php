<?php 


    include_once "php/conexion_be.php";
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    $id = mysqli_real_escape_string($con,$_REQUEST['id']??'');
    $queryProduct = "SELECT id, nombre, precio, talla, imagen, descripcion, genero FROM diseños WHERE id='$id'; ";
    $resProducto = mysqli_query($con,$queryProduct);
    $rowProducto = mysqli_fetch_assoc($resProducto);

    $nombre = $rowProducto['nombre'];
    $precio = $rowProducto['precio'];
    $talla = $rowProducto['talla'];
    $imagen = $rowProducto['imagen'];
    $descripcion = $rowProducto['descripcion'];

    $query = "INSERT INTO carrito(nombre, precio, talla, imagen, descripcion) VALUES
     ('$nombre','$precio','$talla','$imagen','$descripcion')";



?>