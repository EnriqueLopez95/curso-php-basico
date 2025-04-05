<?php

/*
  El ciclo do...while en PHP es una estructura de control que ejecuta un bloque de código 
  al menos una vez, incluso si la condición es falsa desde el principio. 
  La diferencia con otros ciclos como for o while es que en el do...while, 
  **la condición se evalúa después de la ejecución del bloque de código**.
  Esto garantiza que el bloque de código se ejecute **al menos una vez** antes de comprobar si debe seguir ejecutándose.
*/

$i = 10;  // Inicializamos la variable $i con el valor 10

do {
    echo "$i\n";  // Imprime el valor actual de $i seguido de un salto de línea
    $i--;         // Decrementa el valor de $i en 1
} while ($i >= 1);  // El ciclo continuará mientras $i sea mayor o igual a 1
