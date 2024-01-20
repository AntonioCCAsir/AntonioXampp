<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Ajusta la vista ej:movil -->
      <title>Coffe Time</title> <!-- Título de la página -->
      <link rel="stylesheet" type="text/css" href="estilos.css" ><!-- Enlaza la hoja de estilos externa -->
      </head>
      <?php
include("inicioBD.php"); /* Incluye el archivo "inicioBD.php" que contiene gran parte de la logica*/
?>
<body>
  <div class="navbar_index">
  <a href="consulta.php" class="boton_consulta">Consulta</a><!-- Enlace a la página "consulta.php" con un boton y una clase llamada "boton_consulta" -->
<h1>Coffe Time </h1> <!-- Encabezado página -->
<div>
<a href="modificarCafe.php" class="boton_reg">ModificarCafe</a><!-- Enlace a la página "modificarCafe.php" con un boton y una clase llamada "boton_reg" -->

</div>
</div>
<div class="productos">
  <div class="producto">
    <img src="cafe1.jpg.jfif" alt="Producto 1"> <!-- Imagen del producto 1 con una descripción alternativa alt -->
    <p>Cafe colombiano-Chambakú</p><!-- Nombre del producto 1 -->
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