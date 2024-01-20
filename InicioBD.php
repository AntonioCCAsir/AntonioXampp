<?php
/* Configuración de la conexión a la base de datos */ 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="TiendaCafe";

/* Crear conexion */

$conn = mysqli_connect($servername, $username, $password);

/* Comprobar conexion */

if (!$conn) {
  die("" . mysqli_connect_error());
}
echo "";

/* Crear base de datos si no existe*/

$crearDB = "CREATE DATABASE IF NOT EXISTS TiendaCafe";
if (mysqli_query($conn, $crearDB)) {
  echo "";
} else {
  echo "" . mysqli_error($conn);
}
/* Cerrar conexion*/

mysqli_close($conn);

/*Conectar a la base de datos*/

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/* Crear tabla usuarios*/

$crearTBusu = "CREATE TABLE IF NOT EXISTS usuarios (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre_usuario VARCHAR(15),
  clave VARCHAR(15)
  )";

if (mysqli_query($conn, $crearTBusu)) {
  echo "";
} else {
  echo "" . mysqli_error($conn);
}
  
/* Crear tabla de granos de cafe */

$crearTBcaff = "CREATE TABLE IF NOT EXISTS granosCafe (
  nombreGrano VARCHAR(30) PRIMARY KEY,
  cantidad INT(3)
  )";

  if (mysqli_query($conn, $crearTBcaff)) {
    echo "";
  } else {
    echo " " . mysqli_error($conn);
  }

/*Añadir un usuario por defecto */

  $añadirUsu = "INSERT INTO usuarios (nombre_usuario, clave)
VALUES ('antonio', 'qwe_123')";

if (mysqli_query($conn, $añadirUsu)) {
    echo "";
  } else {
    echo " " . $añadirUsu . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>