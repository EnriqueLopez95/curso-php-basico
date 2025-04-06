<?php


/*
 Las funciones existentes o integradas en PHP (también llamadas "built-in functions")
 son funciones que ya vienen definidas por el lenguaje y están listas para ser usadas.
 Estas funciones nos permiten realizar tareas comunes como manipular cadenas de texto, 
 trabajar con números, manejar fechas, arreglos, etc., sin tener que programar todo desde cero.

 Algunas funciones muy comunes incluyen:
 - strtoupper(): Convierte una cadena a mayúsculas.
 - strlen(): Devuelve la longitud (cantidad de caracteres) de una cadena.
 - strtolower(): Convierte una cadena a minúsculas.
 - ucfirst(): Convierte la primera letra de una cadena en mayúscula.
 - strrev(): Invierte una cadena.
 - substr(): Extrae parte de una cadena.
 - number_format(): Da formato a números con decimales.
*/

$str = "Hola mi nombre es javier lopez";

// Convertimos toda la cadena a mayúsculas
$str = strtoupper($str);
echo $str . "<br/>"; // Imprime: HOLA MI NOMBRE ES JAVIER LOPEZ

$long = "Javier";

// Mostramos la cantidad de caracteres del string
echo "La longitud de '$long' es: " . strlen($long) . "<br/>"; // Imprime: 6

// Más ejemplos útiles:

$texto = "bienvenidos a PHP";

// Convierte a minúsculas
echo strtolower($texto) . "<br/>"; // bienvenidos a php

// Convierte la primera letra a mayúscula
echo ucfirst($texto) . "<br/>"; // Bienvenidos a PHP

// Invierte el texto
echo strrev($texto) . "<br/>"; // PHP a sodinevneib

// Extrae parte del texto
echo substr($texto, 0, 11) . "<br/>"; // bienvenidos

// Formatea un número con decimales
$precio = 1234.567;
echo number_format($precio, 2) . "<br/>"; // 1,234.57
