<?php
include_once "php/conexion_be.php";
$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
$id = mysqli_real_escape_string($con, $_REQUEST['id'] ?? '');
$queryProduct = "SELECT id, nombre, precio, talla, imagen, descripcion, genero FROM diseños WHERE id='$id'; ";
$resProducto = mysqli_query($con, $queryProduct);
$rowProducto = mysqli_fetch_assoc($resProducto);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EarShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--nav-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
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
                        <a href="mujer.php">Mujer</a>
                    </li>
                    <li>
                        <a href="hombre.php">Hombre</a>
                    </li>
                    <li>
                        <a href="#">Ofertas</a>
                    </li>
                    <li>
                        <a href="personalizacion.php">Personalizar</a>
                    </li>
                    <li>
                        <a href="usuario.php">Cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Contenido-->
    <div class="container">
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 cont_img">
                        <div>
                            <img src="images/<?php echo $rowProducto['imagen'] ?>" class="img-fluid"
                                alt="Product Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <h3 class="my-3">
                            <?php echo $rowProducto['nombre'] ?>
                        </h3>
                        <p>
                            <?php echo $rowProducto['descripcion'] ?>
                        </p>
                        <h4>
                            <?php echo $rowProducto['genero'] ?>
                        </h4>
                        <hr>
                        <h2 class="mt-3">Talla: <small>
                                <?php echo $rowProducto['talla'] ?>
                            </small></h2>
                        <div class="bg-gray py-2 mt-4">
                            <h2 class="mb-0">
                                Precio:
                            </h2>
                            <h4 class="mt-0">
                                <small>$
                                    <?php echo $rowProducto['precio'] ?>
                                </small>
                            </h4>
                        </div>
                        <div class="mt-4">
                            <div class="btn btn-warning btn-lg btn-flat">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Añadir al carrito
                            </div>
                            <div class="btn btn-success btn-lg btn-flat">
                                Comprar
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <footer class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                <img src="img/logo.png" alt="Logo" class="mx-auto">
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                <h4>Sobre nosotros</h4>
                <p>Somos una empresa que busca ofrecer a los clientes
                    la posibilidad de expresarse a través de la ropa que
                    usan, brindando camisas personalizadas de alta calidad
                    y con diseños únicos. Queremos que cada cliente sienta
                    que su camisa es única y refleje su estilo y personalidad.</p>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                <h4>Contáctate con nosotros</h4>
                <ul class="col-xs-12 col-md-12 col-lg-12 list-unstyled text-center">
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