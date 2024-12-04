<?php
// Función para invertir un array
function invertirLista($array) {
    // Usamos la función array_reverse para invertir el array
    return array_reverse($array);
}

// Prueba de la función
$numeros = [1, 2, 3, 4, 5];
$resultado = invertirLista($numeros);

// Mostrar el resultado
echo "Array original: " . implode(", ", $numeros) . PHP_EOL;
echo "Array invertido: " . implode(", ", $resultado) . PHP_EOL;
?>
