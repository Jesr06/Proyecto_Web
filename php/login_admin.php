<?php 

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM administrados WHERE correo ='$correo'
    and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) >0){
        $_SESSION['administrados'] = $correo;
        header("location: ../admin/indexAdmin.php");
        exit;
    }else{
        echo '
            <script>
                alert("usuario no encontrado, verifique los datos introducidos");
                window.location = "../loginAdmin.php"
            </script>

        ';
        exit;
    }

?>