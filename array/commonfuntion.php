<?php
/*
===========================================
= ARCHIVO: funciones_comunes.php          =
= DESCRIPCIÓN:                            =
= Este archivo contiene funciones comunes =
= de manipulación de arrays en PHP.       =
= Estas funciones permiten agregar,       =
= eliminar y modificar elementos en un    =
= array de manera sencilla.               =
=                                          =
= FUNCIONES INCLUIDAS:                    =
= - array_push()     → Agrega al final     =
= - array_pop()      → Elimina el último   =
= - array_shift()    → Elimina el primero  =
= - array_unshift()  → Agrega al inicio    =
= - count()          → Cuenta elementos    =
= - in_array()       → Verifica existencia =
===========================================
*/

// Agrega uno o más elementos al final del array
$frutas = ['manzana', 'banana'];
array_push($frutas, 'naranja', 'sandía');
// Resultado: ['manzana', 'banana', 'naranja', 'sandía']

// Elimina el último elemento del array
$ultimaFruta = array_pop($frutas);
// $ultimaFruta = 'sandía'
// $frutas ahora es: ['manzana', 'banana', 'naranja']

// Elimina el primer elemento del array
$primeraFruta = array_shift($frutas);
// $primeraFruta = 'manzana'
// $frutas ahora es: ['banana', 'naranja']

// Agrega uno o más elementos al inicio del array
array_unshift($frutas, 'pera', 'uva');
// Resultado: ['pera', 'uva', 'banana', 'naranja']

// Cuenta cuántos elementos hay en el array
$total = count($frutas);
// $total = 4

// Verifica si un valor existe en el array
$existe = in_array('uva', $frutas);
// $existe = true
