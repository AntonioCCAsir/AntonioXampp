<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Coffe Time</title>
      <link rel="stylesheet" type="text/css" href="estilos.css" >
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      </head>
      <?php
include("conexion.php");

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS TiendaCafe";
if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "" . mysqli_error($conn);
}
//uwu
mysqli_close($conn);
?>
<body>
  <div class="navbar_index">
<h1>Coffe Time </h1>
<div>
    <a href="iniciar_sesion.html" class="boton_reg">Registrarse</a>
    <!--añadir link cesta-->
    <div class="cesta">
      <i class="ri-shopping-basket-2-line"></i>
      Cesta
</div>
</div>
</div>
<div class="productos">
  <div class="producto">
    <img src="cafe1.jpg.jfif" alt="Producto 1">
    <p>Cafe colombiano-Chambakú</p>
  </div>
  <div class="producto">
    <img src="cafe2.jpg.jpg" alt="Producto 2">
    <p>Cafe etiope-Konga</p>
  </div>
  <div class="producto">
    <img src="cafe3.jpg" alt="Producto 3">
    <p>Cafe Peruano-Los Angeles</p>
  </div>
  <div class="producto">
    <img src="cafe5.jpg" alt="Producto 5">
    <p>Cafe mejicano-El Mariachi</p>
  </div>
  <div class="producto">
    <img src="cafe4.jpg" alt="Producto 4">
    <p>Cafe de Kibira-Burundi</p>
  </div>
  
</div>

</body>

</html>

<!-- https://anvaka.github.io/city-roads/?q=Cajamarca&areaId=3601896111 