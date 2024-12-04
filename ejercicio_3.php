<?php
// Función para calcular la frecuencia de caracteres
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    // Iterar sobre cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

// Prueba de la función
$texto = "programacion";
$resultado = frecuenciaCaracteres($texto);

// Mostrar el resultado
echo "Frecuencia de caracteres en '$texto':" . PHP_EOL;
foreach ($resultado as $caracter => $frecuencia) {
    echo "  '$caracter' => $frecuencia" . PHP_EOL;
}
?>
