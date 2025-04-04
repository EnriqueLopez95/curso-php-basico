<?php

//Tipo de datos en PHP

// Entero
$edad = 32;

// Flotante
$altura = 1.4;

// Cadena de texto
$nombre = "Oscar";

// Booleano
$esProgramador = true;

// Null
$programador = null;

// Array indexado
$colores = array("rojo", "verde", "azul");

// Array asociativo
$persona = array("nombre" => "Oscar", "edad" => 32);

// Objeto
class Persona
{
    public $nombre;
    public $edad;
}

$persona1 = new Persona();
$persona1->nombre = "Oscar";
$persona1->edad = 32;

// Recurso (como una conexión a base de datos)
$archivo = fopen("archivo.txt", "r");

// Imprimir variables
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . "<br>";
echo "Es programador: " . ($esProgramador ? "Sí" : "No") . "<br>";
echo "Colores: " . implode(", ", $colores) . "<br>";
echo "Persona: " . $persona['nombre'] . ", " . $persona['edad'] . "<br>";
