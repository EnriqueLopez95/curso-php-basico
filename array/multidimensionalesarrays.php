<?php

/*
 Este es un ejemplo de **array multidimensional** en PHP.

 Un array multidimensional es un array que contiene **otros arrays como elementos**.
 
 En este caso, `$usuarios` es una lista de personas, donde cada persona es un array
 asociativo con claves como "nombre" y "edad".

 Esto es útil cuando necesitas representar estructuras complejas como listas,
 tablas de datos, catálogos, etc.

 Ejemplo:
 - $usuarios[0] representa al primer usuario: ["nombre" => "Luis", "edad" => 25]
 - $usuarios[1]["nombre"] accede al nombre del segundo usuario → Laura
*/


$usuarios = [
    ["nombre" => "Luis", "edad" => 25],
    ["nombre" => "Laura", "edad" => 22],
    ["nombre" => "Carlos", "edad" => 28]
];

// Muestra el nombre del segundo usuario
echo $usuarios[1]["nombre"]; // Laura

// ¿Cómo agregar otro usuario?
$usuarios[] = ["nombre" => "Sofía", "edad" => 30];

// Ahora mostramos el nombre del nuevo usuario agregado
echo "<br>" . $usuarios[3]["nombre"]; // Sofía
