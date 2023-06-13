<?php
include_once "php/conexion_be.php";
$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
$id = mysqli_real_escape_string($con, $_REQUEST['id'] ?? '');
$queryProduct = "SELECT id, nombre, precio, talla, imagen, descripcion, genero FROM diseños WHERE id='$id'; ";
$resProducto = mysqli_query($con, $queryProduct);
$rowProducto = mysqli_fetch_assoc($resProducto);
?>

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

<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
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
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="bienvenida.php">
        <img src="img/logo.png" alt="Logo">
        <h4 class="d-inline-block align-text-top">EarShop</h4>
      </a>
      <button class="navbar-toggler toggler-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">

</div>

<div class="panel-body">


    <h1>Carrito de compras</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
            <td>
                <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu carta esta vacia.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="bienvenida.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    </div>
 <div class="panel-footer">BaulPHP</div>
 </div><!--Panek cierra-->
 
</div>
</body>
</html>