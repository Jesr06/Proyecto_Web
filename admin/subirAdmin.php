<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EarShop/subirDiseño</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/subir.css">
</head>

<body>
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
            <a href="#">Usuarios</a>
          </li>
          <li>
            <a href="#">Subir Diseño</a>
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
  <!--Contenido-->
  <div class="container">
    <div class="title">Subir nuevo diseño</div>
    <div class="content">
      <form action="../php/conexion_diseno.php" method="POST" class="formulario__diseno" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nombre del diseño</span>
            <input type="text" required name="name">
          </div>
          <div class="input-box">
            <span class="details">Precio</span>
            <input type="number" required name="precio">
          </div>
          <div class="input-box">
            <span class="details">Talla de camisa</span>
            <input type="text" placeholder="14,16,S,M,L..." required name="talla">
          </div>
          <div class="input-box">
            <span class="details">Subir imágen</span>
            <input type="file" required name="image" class="form-control">
          </div>
          
          <div class="input-box">
            <span class="details">Descripción</span>
            <textarea name="descripcion" cols="70" rows="5" required></textarea>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="hombre">
          <input type="radio" name="gender" id="dot-2" value="mujer">
          <input type="radio" name="gender" id="dot-3" value="unisex">
          <input type="radio" name="gender" id="dot-4" value="nino">
          <input type="radio" name="gender" id="dot-5" value="nina">
          <span class="gender-title">Gendero</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Hombre</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Mujer</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Unisex</span>
            </label>
            <label for="dot-4">
              <span class="dot four"></span>
              <span class="gender">niño</span>
            </label>
            <label for="dot-5">
              <span class="dot five"></span>
              <span class="gender">niña</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Subir" name="guardar">
        </div>
      </form>
    </div>
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