<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Café</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Enlaza la hoja de estilos"estilos.css" -->
</head>

<body>

    <!-- Barra de navegación con el nombre y un boton para volver -->
    <nav class="barraNav">
        <div class="cafe">
            <div><h1>Coffe Time</h1></div>
            <a href="PagPrincipal.php" class="boton_volver">Volver</a>
        </div>
    </nav>

    <!-- Formulario de eliminación de café -->
    <div class="container">
        <form id="eliminarCafeForm" action="eliminar.php" method="POST"> <br>

        <!-- Selector para elegir café a eliminar -->

            <label for="cafeSelector">Selecciona un café a eliminar:</label>
            <select id="cafeSelector" name="cafe">

                 <!-- Opciones de café-->

                <option value="Cafe colombiano-Chambakú">Cafe colombiano-Chambakú</option>
                <option value="Cafe etiope-Konga">Cafe etiope-Konga</option>
                <option value="Cafe Peruano-Los Angeles">Cafe Peruano-Los Angeles</option>
                <option value="Cafe mejicano-El Mariachi">Cafe mejicano-El Mariachi</option>
                <option value="Cafe de Kibira-Burundi">Cafe de Kibira-Burundi</option>
            </select>

            <!-- Botón para enviar el formulario de eliminar cafe -->

            <input type="submit" value="eliminar"> </input>
        </form>
    </div>
</body>

</html>