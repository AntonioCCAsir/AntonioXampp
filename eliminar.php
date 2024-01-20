<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Café</title>
    <link rel="stylesheet" type="text/css" href="eliminar.css" >
</head>

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="TiendaCafe";
$cafe=$_POST['cafe'];

/* Crear conexion*/
$conn = mysqli_connect($servername, $username, $password,$dbname);

/* comprobar la conexion*/
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  /* sql para eliminar el grano dependiendo de nombreGrano*/
  $sql = "DELETE FROM granoscafe WHERE nombreGrano='$cafe'";
  
  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo " " . mysqli_error($conn);
  }
?>

<body>

<!-- Barra de navegación -->
<nav class="navbar">
    <a href="PagPrincipal.php" class="volver">Volver</a>
    <h1>Coffe Time</h1>
</nav>

<!-- Mensaje -->
<div class="mensaje">
    <p>¡El café ha sido eliminado!</p>
</div>

</body>
</html>