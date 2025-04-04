<?php

//Diferencia entre variables y CONSTANTES

$edad = 35 . "<br/>";
echo $edad;  // Imprime el valor de $edad (35)

$edad = 40 . "<br/>";
echo $edad;  // Imprime el nuevo valor de $edad (40)

// Uso de constantes
define("PI", 3.13);
echo PI;  // Imprime el valor de la constante PI

// El siguiente código da error, ya que no se puede modificar una constante
// PI = 4;  // Esto generará un error
