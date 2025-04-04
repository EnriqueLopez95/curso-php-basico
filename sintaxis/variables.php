<?php

// 💬 ¿Qué es una variable?
// Una variable es un contenedor donde podemos guardar datos para usarlos más adelante.
// En PHP, las variables comienzan con el signo de dólar ($).

// 📝 Declaración de variables
$nombre = "Enrique";            // Variable tipo string (texto)
$edad = 25;                     // Variable tipo entero (número sin decimales)
$altura = 1.75;                 // Variable tipo float (número con decimales)
$activo = true;                 // Variable tipo booleano (verdadero o falso)

// 🧠 PHP es un lenguaje de tipado dinámico, lo que significa que no necesitas especificar el tipo de dato.

// 🔍 Imprimir las variables
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . " metros<br>";
echo "¿Está activo?: " . ($activo ? "Sí" : "No") . "<br>";

// 🔁 Podemos cambiar el valor de una variable en cualquier momento
$nombre = "Carlos";
$edad = 30;

echo "<br>Después de modificar:<br>";
echo "Nuevo nombre: " . $nombre . "<br>";
echo "Nueva edad: " . $edad . "<br>";

// 🛠️ También podemos crear variables usando otras variables
$presentacion = "Hola, soy $nombre y tengo $edad años.";
echo "<br>" . $presentacion;

// 🔎 Para ver el tipo y valor de una variable usamos var_dump()
echo "<hr>";
echo "Usando var_dump():<br>";
var_dump($nombre);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($altura);
echo "<br>";
var_dump($activo);
