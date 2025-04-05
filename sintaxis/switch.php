<?php
/*
 Estructura de control SWITCH:
 Permite evaluar el valor de una variable y ejecutar un bloque de código
 según el caso que coincida. Cada "case" representa una posible opción.
 La instrucción "break" evita que se sigan ejecutando los siguientes casos
 una vez que se ha encontrado una coincidencia.
 Si ningún caso coincide, se ejecuta el bloque "default".
*/


$mont = 22;

switch ($mont) {
    case 1:
    case 2:
    case 3:
        echo "Es invierno";
        break;
    case 4:
    case 5:
    case 6:
        echo "Es primavera";
        break;
    case 7:
    case 8:
    case 9:
        echo "Es verano";
        break;
    case 10:
    case 11:
    case 12:
        echo "Es otoño";
        break;
    default:
        echo "Dato Invalido";
}
