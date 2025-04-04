<?php
// 📚 Tipos de datos básicos en PHP

// Entero (integer)
$numeroEntero = 10;

// Decimal (float o double)
$numeroDecimal = 3.14;

// Cadena de texto (string)
$cadenaTexto = "Hola, soy Enrique";

// Booleano (true o false)
$esVerdadero = true;

// Nulo (null)
$nulo = null;

// Cambiamos el valor a tipo string
$numeroEntero = "10";

// 🔍 Mostrar tipo y valor de cada variable
echo "<h2>Tipos de datos en PHP</h2>";

echo "Valor: $numeroEntero | Tipo: " . gettype($numeroEntero) . "<br>";
echo "Valor: $numeroDecimal | Tipo: " . gettype($numeroDecimal) . "<br>";
echo "Valor: $cadenaTexto | Tipo: " . gettype($cadenaTexto) . "<br>";
echo "Valor: " . ($esVerdadero ? 'true' : 'false') . " | Tipo: " . gettype($esVerdadero) . "<br>";
echo "Valor: " . var_export($nulo, true) . " | Tipo: " . gettype($nulo) . "<br>";
