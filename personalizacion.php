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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EarShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/camisa.css">
    <script src="js/guardar.js"></script>
</head>

<body>
    <!--nav-->
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
                        <a href="#">Mujer</a>
                    </li>
                    <li>
                        <a href="#">Hombre</a>
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
                    <li>
                        <a href="php/cerrar_sesion.php">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--header-->

    <h2><strong>Personaliza tu camisa</strong></h2>

    <body>
        <div class="container">
            <div class="shirt-images">
                <img id="camisa_por_defecto" class="shirt-img" src="img/camiseta_Blanca.png" alt="Camisa por defecto">
                <img id="shirtImage-white" class="shirt-img" src="img/camiseta_Blanca.png">
                <img id="shirtImage-black" class="shirt-img" src="img/camiseta_Negra.png">
                <img id="shirtImage-blue" class="shirt-img" src="img/camiseta_Azul.png">
                <img id="shirtImage-yellow" class="shirt-img" src="img/camiseta_Amarilla.png">
                <img id="shirtImage-gray" class="shirt-img" src="img/camiseta_Gris.png">
                <img id="shirtImage-red" class="shirt-img" src="img/camiseta_Rojo.png">

                <script src="js/camisa.js"></script>
            </div>

            <div class="color-options">
                <h3>Talla:</h3>
                <select id="size-select" onchange="changeSize()">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
                <br>
                <br>
                <h3>Tipo de cuello:</h3>
                <select id="collar-select" onchange="changeCollar()">
                    <option value="Round">Redondo</option>
                    <option value="V-neck">V</option>
                    <option value="Button-down">Con botones</option>
                </select>
                <br>
                <br>
                <h3>Color:</h3>
                <select id="colorSelector" onchange="changeShirtColor()" class="align-right">
                    <option value="white">Blanco</option>
                    <option value="black">Negro</option>
                    <option value="blue">Azul</option>
                    <option value="yellow">Amarillo</option>
                    <option value="gray">Gris</option>
                    <option value="red">Rojo</option>
                </select>
                <br>
                <br>
                <div class="buttons-buy">
                    <button onclick="buy()">Comprar</button>
                    <button onclick="addToCart()">Añadir al carrito</button>
                </div>
                <br>
                <br>
                <div class="option">
                    <h4>Estampado:</h4>
                    <label for="imageUploader"></label>
                    <input type="file" id="imageUploader" accept="image/*" onchange="showPreview()">
                </div>
                <div class="preview">
                    <h3>Estampado de la camisa:</h3>
                    <img id="previewImage" src="" alt="">
                </div>
            </div>
            <br>
            <br>
        </div>
    </body>
    <header class="container-fluid">
        <h1>Personaliza a tu gusto</h1>


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