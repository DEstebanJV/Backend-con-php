<h1>Foreach</h1>
<p>La ventaja de este ciclo es que nos permite recorrer cualquier elemento que sea iterable sin tener que contar los elementos del mismo.
    El por si solo detecta cuantos elementos tiene dicho elemento
</p>


<?php 

$numeros = [1,2,34,5,5,6,6,7,78,8,];
$tiendaDeCafes = [
    "Americano" => 20,
    "late" => 30, 
    "mocca" => 15, 
];

/* Sintaxis basica */
foreach ($numeros as $numero) {
   echo "Este es el numero: $numero <br>";
}

/* Sintaxis con llave  */

foreach ($tiendaDeCafes as $nombres => $precios) {  
    echo "El cafe $nombres cuesta \$$precios <br>";
}


?>