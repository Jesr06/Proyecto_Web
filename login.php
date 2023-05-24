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
    <title>Login Y registro</title>

</head>

<body>

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
                    <button>entrar</button>

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