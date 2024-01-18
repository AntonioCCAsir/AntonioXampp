<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Coffe Time</title>
      <link rel="stylesheet" type="text/css" href="estilos.css">
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
<h1>Bienvenido a Coffe Time
    <a style="float:right" href="iniciar_sesion.html">Registrarse</a>
</h1>
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
    <img src="cafe4.jpg" alt="Producto 4">
    <p>Cafe de Kibira-Burundi</p>
  </div>
  <div class="producto">
    <img src="cafe5.jpg" alt="Producto 5">
    <p>Cafe mejicano-El Mariachi</p>
  </div>
</div>

</body>

</html>

/* https://anvaka.github.io/city-roads/?q=Cajamarca&areaId=3601896111 */