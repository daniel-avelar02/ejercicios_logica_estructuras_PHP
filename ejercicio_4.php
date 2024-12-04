<?php
// Función para imprimir una pirámide de asteriscos
function imprimirPiramide($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        // Imprimir espacios
        echo str_repeat(" ", $filas - $i);
        // Imprimir asteriscos
        echo str_repeat("*", 2 * $i - 1);
        echo PHP_EOL;
    }
}

// Prueba de la función
$filas = 5;
imprimirPiramide($filas);
?>
