<?php

/*

Enunciado:
Crea un script en PHP que calcule el monto total a pagar en un restaurante incluyendo la propina.
El usuario debe ingresar el monto de la cuenta (por ejemplo: $50.00).
También debe ingresar el porcentaje de propina que desea dejar (por ejemplo: 10%).

El programa debe mostrar:
El monto de la propina.
El total a pagar (cuenta + propina).

Requisitos:
Usa variables para almacenar los datos.
Realiza los cálculos matemáticos necesarios.
Muestra los resultados usando echo.

*/


$montoCuenta = 100;
$porcentajePropina = 0.10;

$montoPropina = $montoCuenta * $porcentajePropina;
$totalPagar = $montoCuenta + $montoPropina;

echo "Propina: $" . number_format($montoPropina, 2) . PHP_EOL;
echo "Total a pagar: $" . number_format($totalPagar, 2);
