<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Y registro</title>

</head>

<body>
<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" alt="Logo">
          <h4 class="d-inline-block align-text-top">EarShop</h4>
        </a>
        <button class="navbar-toggler toggler-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          </ul>
        </div>
      </div>
    </nav>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">

                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesíon para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesíon</button>

                </div>

                <div class="caja__trasera-register">

                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>

                </div>
            </div>

            <!--Formulario de login y registro -->

            <div class="contenedor__login-register">
                <!-- Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login" >
                    <h2>Iniciar sesíon</h2>
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>

                </form>
                <!-- register-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo"  name= "nombre_completo">
                    <input type="text" placeholder="Correo electronico"  name= "correo">
                    <input type="text" placeholder="Usuario"  name= "usuario">
                    <input type="password" placeholder="Contraseña"  name= "contrasena">
                    <button>Registrarse</button>
                </form>

            </div>


        </div>


    </main>
    <script src="js/login.js"></script>
</body>

</html>