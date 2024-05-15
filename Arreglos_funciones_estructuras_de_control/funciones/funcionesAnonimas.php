<h2>El operador de nave espacial</h2>

<?php

// Funcion usort Ordena un array segun sus valores usando una funcion de comparacion definida por el usuario

$preciosCafes = [1,2,34,5,6,3324,52,3423,5234,56,2];

// la funcion usort modifica directamente el arreglo original, Lo mutua
#uso de funcion anonima
usort($preciosCafes, function($a, $b){
    return $a <=> $b;
});
print_r($preciosCafes);