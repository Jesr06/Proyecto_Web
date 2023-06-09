<?php

    include 'conexion_be.php';

    if(isset($_POST['guardar'])) {
        $nombre = $_POST['name'];
        $precio = $_POST['precio'];
        $talla = $_POST['talla'];
        $imagen = $_FILES['image']['name'];
        $descrip = $_POST['descripcion'];
        $genero = $_REQUEST['gender'];

        $query = "INSERT INTO diseños(nombre, precio, talla, imagen, descripcion, genero) 
            VALUES ('$nombre','$precio','$talla','$imagen','$descrip','$genero')";
        $ejecutar = mysqli_query($conexion,$query);

        if($ejecutar){
            echo '
                <script>
                    alert("diseño almacenado exitosamente");
                    window.location = "../admin/subirAdmin.php";           
                    </script>
            ';
        }else{
            echo '
                <script>
                    alert("Intenta el registro nuevamente, diseño no almacenado");
                    window.location = "../admin/subirAdmin.php";           
                    </script>
            ';
        }
        mysqli_close($conexion);
    }

?>