<?php
/*
  El ciclo `for` es una estructura de control que se utiliza para ejecutar un bloque de código un número determinado de veces.
  En este caso, el ciclo comienza con $i = 1, y continúa ejecutándose mientras $i sea menor que 10.
  En cada iteración, el valor de $i se incrementa en 1, gracias a la expresión $i++.

  La sintaxis de `for` es:
  for (inicialización; condición; incremento/decremento) {
      // Bloque de código que se ejecuta
  }

  En este caso:
  - Inicialización: $i = 1
  - Condición: $i < 10
  - Incremento: $i++
  
  Por lo tanto, este ciclo imprimirá los números del 1 al 9, determinando si son pares o impares.
*/
for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i -Par\n";
    } else {
        echo "$i -Impar\n";
    }
}
