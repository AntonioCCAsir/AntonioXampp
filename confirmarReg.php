<!-- Esta pagina se creo por como estaba construido el php hacia falta una pagina intermedia que solo se visitase
una vez, ya que cuando borramos un cafe y volvemos a iniciar sesion los cafes no concuerdan y daba error,
asi que se creo esta pagina para solucionarlo -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coffe Time</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body class="body_reg">

<div class="navbar_reg">
    <button class="boton_volver" onclick="window.location.href='Index.PHP'">Volver</button>
    <h2 class="nombre_tienda">Coffe Time</h2>
</div>

<div class="contenido">

<?php

/* Configuración de la conexión a la base de datos */

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="TiendaCafe";

/*Establecer conexión con la base de datos*/

$conn = mysqli_connect($servername, $username, $password, $dbname);

/*Verificar la conexión */

if (!$conn) {
  die(" " . mysqli_connect_error());
}

/*Obtener datos del formulario utilizando las variables que apuntan al nombre y a la contraseña */

$nombre = $_POST['nom'];
$pass = $_POST['pass'];

$añadirUsu = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre' AND clave= '$pass'";
$result = mysqli_query($conn, $añadirUsu);

if (mysqli_num_rows($result) > 0) { 

  // salida de datos por cada linea- Por algun motivo no pilla el estilo

 echo"<a class= 'enlace-continuar' href= 'PagPrincipal.php'> Continuar a la pagina</a>"; 

/*Comprobar y añadir cafes a la tabla granosCafe si no existen */

 $comprobar1="SELECT * FROM granoscafe WHERE nombreGrano='Cafe colombiano-Chambakú'";
 $resultado1= mysqli_query($conn, $comprobar1);

 if (mysqli_num_rows($resultado1)==0)
 {
 $añadirCaf1 = "INSERT INTO granoscafe (nombreGrano, cantidad)
VALUES ('Cafe colombiano-Chambakú', '5')"; 


if (mysqli_query($conn, $añadirCaf1)) {
  /*Añadir cafe funciona */
  echo "";
} else {

  /*Error al añadir el cafe */

  echo"";
  
}
 }

 /* Repetir el mismo proceso para los demas cafés (comprobar, agregar si no existen)*/

 else{}

 $comprobar2="SELECT * FROM granoscafe WHERE nombreGrano='Cafe etiope-Konga'";
 $resultado2= mysqli_query($conn, $comprobar2);
if (mysqli_num_rows($resultado2)==0)
{
$añadirCaf2 = "INSERT INTO granoscafe (nombreGrano, cantidad)
VALUES ('Cafe etiope-Konga', '8')";

if (mysqli_query($conn, $añadirCaf2)) {
  echo "";
} else {
  echo"";
}
}
else{}

$comprobar3="SELECT * FROM granoscafe WHERE nombreGrano='Cafe Peruano-Los Angeles'";
$resultado3= mysqli_query($conn, $comprobar3);
if (mysqli_num_rows($resultado3)==0)
{
$añadirCaf3 = "INSERT INTO granoscafe (nombreGrano, cantidad)
VALUES ('Cafe Peruano-Los Angeles', '3')";

if (mysqli_query($conn, $añadirCaf3)) {
  echo "";
} else {
  echo"";
}
}

$comprobar4="SELECT * FROM granoscafe WHERE nombreGrano='Cafe mejicano-El Mariachi'";
 $resultado4= mysqli_query($conn, $comprobar4);
if (mysqli_num_rows($resultado4)==0)
{

$añadirCaf4 = "INSERT INTO granoscafe (nombreGrano, cantidad)
VALUES ('Cafe mejicano-El Mariachi', '10')";

if (mysqli_query($conn, $añadirCaf4)) {
  echo "";
} else {
}
}

$comprobar5="SELECT * FROM granoscafe WHERE nombreGrano='Cafe mejicano-El Mariachi'";
 $resultado5= mysqli_query($conn, $comprobar5);
if (mysqli_num_rows($resultado5)==0)
{

$añadirCaf5 = "INSERT INTO granoscafe (nombreGrano, cantidad)
VALUES ('Cafe de Kibira-Burundi', '6')";

if (mysqli_query($conn, $añadirCaf5)) {
  echo "";
} else {
}
}
} else {

/*Hemos introducido mal los datos */

  echo "Credenciales no validas";
}

/* Cerrar la conexión con la base de datos */

mysqli_close($conn);
?>
</div>

</body>
</html>
 