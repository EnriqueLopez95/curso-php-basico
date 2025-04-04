<?php
//Interacción Básica entre HTML y PHP usando POST

// Verifica si el formulario fue enviado
if ($_POST) {

    // Recibe la información del formulario HTML (Método POST)
    // 'txtNombre' es el nombre del campo del formulario
    $nombre = $_POST['txtNombre'];

    // Muestra un saludo con el nombre ingresado
    echo "Hola: " . $nombre;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>

<body>

    <!-- Formulario HTML que envía los datos al mismo archivo PHP usando el método POST -->
    <form action="ejercicio02.php" method="post">
        <!-- Campo de texto para ingresar el nombre -->
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Enviar">
    </form>

</body>

</html>