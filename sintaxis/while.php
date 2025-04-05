<?php

/*
  El ciclo "while" en PHP ejecuta un bloque de código de manera repetitiva
  mientras se cumpla una condición. En este caso:

  - Inicializamos la variable $i en 0.
  - El ciclo "while" se ejecutará mientras $i sea menor o igual a 10.
  - En cada iteración, se imprimirá el valor de $i seguido de un salto de línea.
  - Después de cada impresión, el valor de $i se incrementa en 1 mediante $i++.
  - El ciclo continuará ejecutándose hasta que la condición "$i <= 10" sea falsa.

  Al final del ciclo, el valor de $i será 11, momento en el que la condición del "while" fallará
  y el ciclo terminará.
*/


$i = 0;

while ($i <= 10) {
    echo "$i\n";
    $i++;
}
