<?php

if ($_POST) {
    // Recibe los datos enviados por el formulario
    $txtNombre = $_POST['txtNombre'];  // Asigna el valor del campo "txtNombre"
    $txtApellido = $_POST['txtApellido'];  // Asigna el valor del campo "txtApellido"

    // Concatenación de los valores de $txtNombre y $txtApellido para formar el saludo
    echo "Hola: " . $txtNombre . " " . $txtApellido;  // Imprime "Hola: Nombre Apellido"
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio05.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>

        Apellido
        <input type="text" name="txtApellido">
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>