<?php

/*

Crea un programa en PHP que reciba tres números almacenados en variables y determine cuál de los tres es el mayor. El resultado debe mostrarse en pantalla con echo.
*/



$numero1 = 5;
$numero2 = 16;
$numero3 = 12;

if ($numero1 == $numero2 && $numero1 == $numero3) {
    echo "Los tres números son iguales";
} elseif ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "El número mayor es $numero1";
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "El número mayor es $numero2";
} else {
    echo "El número mayor es $numero3";
}
