<?php

//Operadores Aritmeticos
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //suma
    $suma = $valorA + $valorB;

    //resta
    $resta = $valorA - $valorB;

    //division
    $division = $valorA / $valorB;

    //multiplicacion
    $multiplicacion = $valorA * $valorB;

    echo "<br/>Suma: " . $suma;
    echo "<br/>Resta: " . $resta;
    echo "<br/>División: " . $division;
    echo "<br/>Multiplicación: " . $multiplicacion;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>

<body>
    <form action="ejercicio08.php" method="post">
        valor A:
        <input type="text" name="valorA">
        <br>
        valor B:
        <input type="text" name="valorB">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>