<?php

/*

Crea un programa en PHP que determine si un número entero dado es par o impar. El número debe estar almacenado en una variable y el resultado debe mostrarse con echo.
*/

$number = 1;

if ($number % 2 == 0) {
    echo "$number es par\n";
} else {
    echo "$number es impar\n";
}

//Ejercicio para encontrar el area de un triángulo

$base = 12;
$altura = 6;

$area = ($base * $altura) / 2;

echo "El area del triangulo es: $area";
