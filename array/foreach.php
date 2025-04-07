<?php
/*
El bucle foreach en PHP se utiliza para recorrer estructuras de datos como arrays.

Existen dos formas comunes de usarlo:

1. Recorriendo solo los valores del array:
   foreach ($array as $valor) { ... }

2. Recorriendo tanto claves como valores:
   foreach ($array as $clave => $valor) { ... }

Este bucle es ideal cuando se desea iterar sobre todos los elementos de un array
sin preocuparse por los índices manualmente.

Es importante tener en cuenta que:
- foreach solo funciona con arrays y objetos.
- No modifica el array original a menos que se utilice una referencia (&).
- En arrays asociativos, se recomienda utilizar la forma clave => valor
  para acceder a la estructura completa de cada entrada.
*/


$names = ["Francisco", "Jose", "Mauricio"];

foreach ($names as $name) {
    echo $name . ";" . "<br/>";
}


$personas = [
    "Nombre" => "Javier",
    "Edad" => 30,
    "Correo" => "enrqlpz15@gmail.com"

];

foreach ($personas as $clave => $valor) {
    echo "$clave: $valor <br>";
}
