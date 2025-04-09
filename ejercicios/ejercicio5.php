<?php

/*
Ejercicio: Calculadora de sueldos
Objetivo: Escribir un programa en PHP que reciba el número de horas trabajadas en una semana y calcule el salario correspondiente.

✅ Reglas:
El pago por hora es de $10.

Si trabajó más de 40 horas, las horas extra se pagan al doble ($20).

Mostrar el total a pagar.

*/

$horas = 20;
$pagoHora = 10;
$totalPagar = 0;

if ($horas <= 40) {
    $totalPagar = $horas * $pagoHora;
} elseif ($horas > 40) {
    $horasNormales = 40;
    $horasExtras = $horas - 40;
    $totalPagar = ($horasNormales * $pagoHora) + ($horasExtras * ($pagoHora * 2));
} else {
    $totalPagar = 0;
}

echo "Total a pagar es:$ $totalPagar";
