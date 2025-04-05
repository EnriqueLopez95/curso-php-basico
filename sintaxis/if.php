<?php
/*

Estructura de control IF, ELSEIF y ELSE:
Permite ejecutar diferentes bloques de código según se cumpla o no una condición.
IF evalúa la primera condición. 
ELSEIF evalúa una nueva condición si la anterior no se cumplió.
ELSE se ejecuta si ninguna de las condiciones anteriores fue verdadera.

*/

$edad = 18;

// Evaluamos diferentes rangos de edad
if ($edad > 18) {
    echo "Eres mayor de edad y tienes más de 18 años.";
} elseif ($edad == 18) {
    echo "Tienes exactamente 18 años, ¡ya eres mayor de edad!";
} else {
    echo "Eres menor de edad.";
}
