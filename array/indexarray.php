<?php

/*

 Los arrays arrays indexados o numerico (arreglos) en PHP son estructuras que nos permiten almacenar 
 múltiples valores en una sola variable.

 Se utilizan cuando necesitamos agrupar datos relacionados, como listas de nombres, 
 números, productos, etc.

*/


// Creamos un array indexado con tres nombres
$names = ["Javier", "Juan", "Manuel"];

// Agregamos un nuevo elemento al final del array
$names[] = "Jose"; // Esto ocupa el índice 3

// Mostramos el cuarto elemento (índice 3)
echo $names[3]; // Imprime: Jose
