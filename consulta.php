<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coffe Time</title>

    <!-- Enlace con la pagina de estilos-->

    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body class="body_estadisticas">

<!-- Barra de navegación -->

<div class="navbar_estadisticas">
    <a class="boton_volver_estadisticas" href="PagPrincipal.php">Volver</a>
    <h2 class="nombre_tienda_estadisticas">Coffe Time</h2>
</div>

<div class="contenido_estadisticas">

<?php

/* Datos de la base de datos */

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="TiendaCafe";

/* Establecer conexión con la DB */

$conn = mysqli_connect($servername, $username, $password, $dbname);

/*Verificar si la conexión fue exitosa*/

if (!$conn) {
  die(" " . mysqli_connect_error());
}

/* Consulta SQL para obtener la cantidad total de cafés en la tabla granosCafe*/

$consu="SELECT COUNT(nombreGrano) as totalcafe FROM granoscafe";
$resul=mysqli_query($conn, $consu);
/*Verificar si la consulta ha salido bien */
if($resul){

    $row=mysqli_fetch_assoc($resul);

    /*Extraer el valor de la columna 'totalcafe */

    $totalcafe=$row['totalcafe'];

    /* Mostrar el resultado en la página */

    echo "Hay " . $totalcafe . " cafes en la tabla";
}

/* Cerrar la conexión con la base de datos*/

mysqli_close($conn);
?>
</div>

</body>
</html>