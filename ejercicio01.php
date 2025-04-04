<?php
//EN ESTE EJERCICIO PODREMOS ANALIZAR LAS FORMAS DE COMENTAR CÓDIGO

/*
EL COMENTARIO ANTERIOR ES DE UNA SOLA LINEA, Y ESTE COMENTARIO
MUESTRA COME SE COMENTA EN MÁS DE UNA LINEA, ADEMAS QUE VEMOS LAS 
PRINCIPALES FORMAS DE IMPRIMIR CON SUS DIFERENCIAS
*/

/*
Muestra el texto directamente en la pantalla.
No retorna ningún valor. Es rápido y muy usado.
*/
echo "Hola mundo";

/*
Similar a echo, también muestra texto en pantalla.
La diferencia es que retorna el valor 1.
Puede ser útil si se usa en expresiones (aunque no es muy común).
*/
print("Hola Mundo");

/*
Imprime el contenido de una variable de forma entendible.
Se usa mucho para ver arrays o información de depuración.
*/
print_r("Hola mundo"); // También funciona con strings.

/*
Muestra el tipo de dato y su valor.
Muy útil para depurar, especialmente con arrays, objetos, etc.
*/
var_dump("Hola mundo");
