<?php

/*Incluye el archivo "InicioBD.php" que contiene la lógica de conexión a la base de datos*/

include("InicioBD.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coffe Time</title>

<!-- Enlaza la hoja de estilos -->

    <link rel="stylesheet" type="text/css" href="estilos.css">

<!-- Script para abrir un formulario de Google en una nueva ventana al hacer clic en un botón -->

    <script>
        function abrirFormularioGoogle() {
            window.open("https://docs.google.com/forms/d/e/1FAIpQLSf1G9a2jJrLeUf3H4V5Pxge0sevzU5FdJab0SahpE65mKXwAw/viewform?embedded=true", "_blank");
        }
    </script>
    
</head>
<body class="body_reg">

<!-- Barra de navegación con un botón y el nombre de la pagina -->

<div class="navbar_reg">
    
    <button class="boton_volver" onclick="abrirFormularioGoogle()">Hacer formularioGoogle</button>
    <h2 class="nombre_tienda">Coffe Time</h2>

</div>

<!-- Contenido del formulario de inicio de sesion -->

<div class="contenido">
    <form action="confirmarReg.php" method="post">
        <table align="center">
            <tr><!-- Campos para el nombre y la contraseña -->
                <td><label for="nom">Nombre</label></td>
                <td><input type="text" id="nom" name="nom" required></td>
            </tr>
            <tr>
                <td><label for="pass">Contraseña</label></td>
                <td><input type="password" id="pass" name="pass" required></td>
            </tr>
            <tr><!-- Checkbox para confirmar que no soy un robot -->
                <td><label for="bot">No soy un robot</label><br></td>
                <td><input type="checkbox" id="bot" name="bot" class="botonRobot" required><br>
            </tr>
            <tr><!-- Botón para enviar el formulario en nuestro caso registrarse -->
                <td><input type="submit" value="Registrarse"></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>