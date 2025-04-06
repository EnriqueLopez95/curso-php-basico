<?php

/*
 Una función en PHP es un bloque de código reutilizable que realiza una tarea específica.
 Puede recibir datos de entrada llamados "parámetros" y puede devolver un resultado utilizando "return".
 Las funciones permiten organizar mejor el código, evitar repeticiones y hacerlo más fácil de mantener.
*/

// Declaramos la función llamada "calcularArea"
function calcularArea($ancho, $altura)
{
    $area = $ancho * $altura;
    return $area;
}

echo "El area del rectangulo es: " . calcularArea(5, 5) . "<br/>";

//Funcion que determina si un número es par o impar
function esPar($numero)
{
    if ($numero % 2 == 0) {
        return "El número $numero par ";
    } else {
        return "El número $numero es impar";
    }
}
echo esPar(100);
