<?php
// Estructura de control IF, ELSEIF y ELSE

$edad = 18;

// Evaluamos diferentes rangos de edad
if ($edad > 18) {
    echo "Eres mayor de edad y tienes más de 18 años.";
} elseif ($edad == 18) {
    echo "Tienes exactamente 18 años, ¡ya eres mayor de edad!";
} else {
    echo "Eres menor de edad.";
}
