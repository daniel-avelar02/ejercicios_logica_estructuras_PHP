<?php
// Función para sumar números pares de un array
function sumarPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 === 0) { // Verifica si el número es par
            $suma += $numero;
        }
    }
    return $suma;
}

// Prueba de la función
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultado = sumarPares($numeros);

// Mostrar el resultado
echo "Suma de números pares: $resultado" . PHP_EOL;
?>
