<?php

/*
Ejercicio: Semáforo
Objetivo: Escribir un programa en PHP que reciba un color (rojo, amarillo o verde) y muestre el mensaje correspondiente a lo que debe hacer un conductor.

✅ Reglas:
Si el color es "rojo" → mostrar: "Alto. Debes detenerte."

Si el color es "amarillo" → mostrar: "Precaución. Reduce la velocidad."

Si el color es "verde" → mostrar: "Sigue. Puedes avanzar."

Si es otro color → mostrar: "Color no válido."

*/

$color = "Verde";

if ($color === "rojo") {
    echo "Alto. Debes detenerte.";
} elseif ($color === "amarillo") {
    echo "Precaución. Reduce la velocidad.";
} elseif ($color === "verde") {
    echo "Sigue. Puedes avanzar.";
} else {
    echo "Color no válido.";
}
