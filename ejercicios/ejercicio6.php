<?php

/*

📝 Ejercicio: Calificación de examen
Objetivo: Escribir un programa en PHP que evalúe una nota del 0 al 10 y diga el resultado según la calificación.

✅ Reglas:
9 a 10 → "¡Excelente!"

7 a 8.9 → "¡Muy bien!"

6 a 6.9 → "Pasaste, pero puedes mejorar."

Menos de 6 → "Reprobado."
*/



$nota = 11;

if ($nota > 10 || $nota < 0) {
    echo "Error: la nota debe estar entre 0 y 10.";
} elseif ($nota >= 9 && $nota <= 10) {
    echo "¡Excelente!";
} elseif ($nota >= 7 && $nota < 9) {
    echo "¡Muy bien!";
} elseif ($nota >= 6 && $nota < 7) {
    echo "Pasaste, pero puedes mejorar.";
} else {
    echo "Reprobado.";
}
