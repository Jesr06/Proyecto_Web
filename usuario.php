<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
          <script>
                alert("Por favor, inicia sesion para continuar");
              window.location = "login.php";
            </script>
        ';
    session_destroy();
    die();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/usuario.css">
    <title>Usuario</title>
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="bienvenida.php">
                <img src="img/logo.png" alt="Logo">
                <h4 class="d-inline-block align-text-top">EarShop</h4>
            </a>
            <button class="navbar-toggler toggler-color" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li>
                        <a href="VerCarta.php">Carrito</a>
                    </li>
                    <li>
                        <a href="home_mujer.php">Mujer</a>
                    </li>
                    <li>
                        <a href="home_hombre.php">Hombre</a>
                    </li>
                    <li>
                        <a href="pqrs.php">PQRS</a>
                    </li>
                    <li>
                        <a href="personalizacion.php">Personalizar</a>
                    </li>
                    <li>
                        <a href="usuario.php">Cuenta</a>
                    </li>
                    <li>
                        <a href="php/cerrar_sesion.php">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--contenido-->
    <div class="container">
        <?php
        include "php/conexion_be.php";
        $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
        $id_sesion = $_SESSION['usuario'];
        $sql = "SELECT * FROM usuarios WHERE correo = ? ";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "s", $id_sesion);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <h1>Mi cuenta</h1>
            <div class="div">
                <h3>Usuario:
                    <small>
                        <?php echo $row["usuario"] ?>
                    </small>

                </h3>
                <h3>Nombre:
                    <small>
                        <?php echo $row["nombre_completo"] ?>
                    </small>
                </h3>
                <h3>Correo:
                    <small>
                        <?php echo $row["correo"] ?>
                    </small>
                </h3>
            </div>
            <?php
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);


        ?>


        <hr>
        </hr>
        <!-- <div>
            <h4>Historial de Compras:</h4>
        </div> -->
    </div>


    <!--footer-->
    <footer class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-4">
                <img src="img/logo.png" alt="Logo">
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                <h4>Sobre nosotros</h4>
                <p>Somos una empresa que busca ofrecer a los clientes
                    la posibilidad de expresarse a través de la ropa que
                    usan, brindando camisas personalizadas de alta calidad
                    y con diseños únicos. Queremos que cada cliente sienta
                    que su camisa es única y refleje su estilo y personalidad.</p>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                <h4>Contáctate con nosotros</h4>
                <ul class="col-xs-12 col-md-12 col-lg-12 list-unstyled">
                    <li>
                        <a href="#" class="text-reset"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-reset"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-reset"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-reset"><i class="fa-brands fa-tiktok"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <p>Todos los derechos reservados ©2023 <b>EarShop</b></p>
    </footer>

    <script src="https://kit.fontawesome.com/9e198b2f7c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>