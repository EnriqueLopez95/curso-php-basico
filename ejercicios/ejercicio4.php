<?php

/*
Ejercicio: Clasificador de edades en PHP
Enunciado:

Crea un script en PHP que pida una edad y clasifique a la persona según el siguiente criterio:

Si la edad es menor a 13, debe mostrar: "Eres un niño"
Si la edad está entre 13 y 17, debe mostrar: "Eres un adolescente"
Si la edad está entre 18 y 59, debe mostrar: "Eres un adulto"
Si la edad es 60 o más, debe mostrar: "Eres un adulto mayor"
Si la edad es negativa o no válida, debe mostrar: "Edad no válida"

✅ Requisitos:
Usa variables ($edad) para almacenar el valor.
Utiliza condicionales if, elseif y else.
Muestra el mensaje con echo.

*/

$edad = 18;

if ($edad >= 0 && $edad < 13) {
    echo "Eres un niño";
} elseif ($edad >= 13 && $edad <= 17) {
    echo "Eres un adolescente";
} elseif ($edad >= 18 && $edad <= 59) {
    echo "Eres un adulto";
} elseif ($edad >= 60) {
    echo "Eres un adulto mayor";
} else {
    echo "Edad no válida";
}
