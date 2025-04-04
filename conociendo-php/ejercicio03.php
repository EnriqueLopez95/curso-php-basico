<?php
// Verifica si hay datos enviados a través del método GET
if ($_GET) {
    // Obtiene el valor del parámetro 'nombre' desde la URL
    $nombre = $_GET['nombre'];

    // Muestra un saludo con el nombre obtenido
    echo "Hola " . $nombre;
}
