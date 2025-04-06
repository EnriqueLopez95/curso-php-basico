<?php

/*
 Este es un array asociativo.

 A diferencia de los arrays indexados (que usan números como claves),
 los arrays asociativos usan **nombres personalizados** como claves para
 identificar los valores.

 En este ejemplo, se almacena información de una persona:
 - "nombre" => "Maria"
 - "edad"   => 22
 - "carnet" => "wlsp01"
*/

$datos = [
    "nombre" => "Maria",
    "edad" => 22,
    "carnet" => "wlsp01"
];
//Agregar nuevo valor al array
$datos["correo"] = "maria@gmail.com";

//Imprimir un valor del array
echo $datos["correo"];
