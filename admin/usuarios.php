<?php

session_start();

if (!isset($_SESSION['administrados'])) {
  echo '
          <script>
                alert("Por favor, inicia sesion para continuar");
              window.location = "loginAdmin.php";
            </script>
        ';
  session_destroy();
  die();
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EarShop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/489fef096a.js" crossorigin="anonymous"></script>

</head>



<body>
    <script>
        function eliminar(){
            var respuesta =confirm("Estas seguro de eliminar al usuario?");
            return respuesta
        }
    </script>

  <!--nav-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="indexAdmin.php">
        <img src="../img/logo.png" alt="Logo">
        <h4 class="d-inline-block align-text-top">EarShop</h4>
      </a>
      <button class="navbar-toggler toggler-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li>
            <a href="usuarios.php">Usuarios</a>
          </li>
          <li>
            <a href="subirAdmin.php">Subir Diseño</a>
          </li>
         
          <li>
            <a href="#">Pedidos</a>
          </li>
          
          <li>
            <a href="../php/cerrar_sesion.php">Cerrar sesion</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!--header-->
  <header class="container-fluid">
    <h1>Gestion de usuarios</h1>
    
  </header>
  <!--Contenido-->

  <?php 
    include "../php/conexion_be.php";
        include "../php/eliminar_usuario.php";

    ?>

    <div>
        <table class="table table-bordered border-primary" >
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">correo</th>
                    <th scope="col">nombre</th>
                    <th scope="col">usuario</th>

                   
                </tr>
            </thead>
            <tbody>


                    <?php
                        include "../php/conexion_be.php";
                    $sql=$conexion->query("select * from usuarios");
                    while($datos=$sql->fetch_object()){ ?>
                <tr>
                    <td><?= $datos->id ?></td>
                    <td><?= $datos->correo?></td>
                    <td><?= $datos->nombre_completo?></td>
                    <td><?= $datos->usuario?></td>

                    
                     <td>      
                    
                    <a onclick="return eliminar()" href="usuarios.php?id=<?= $datos->id ?>"><i class="fa-solid fa-trash"></i></i></a>

                    </td>
                </tr>
                     <?php }
                     ?>


               
               
            </tbody>
        </table>


    </div>










  <!--footer-->
  <footer class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-4 col-lg-4">
        <img src="../img/logo.png" alt="Logo">
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