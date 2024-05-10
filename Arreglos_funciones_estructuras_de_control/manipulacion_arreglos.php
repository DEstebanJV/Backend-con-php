<h1>Manipulando arreglos</h1>
<p>Existen muchas funciones para manipular arreglos</p>
<p>para ello nos podemos guiar de la documentacion oficial</p>
<a href="https://www.php.net/manual/en/book.array.php">Manipulacion de arreglos</a>
<br> <br>


<?php 

$edades = [
    18,
    22,
    40,
];

/* Primera funcion Count() 
Cuenta la cantidad de elementos que hay en un arrelgo
*/

$contador_de_arreglo = count($edades);
echo "El arreglo edades contiene un total de: $contador_de_arreglo elementos ";

# array_push - inserta un nuevo dato al final del arreglo

$nuevo_valor = array_push($edades, 50);

# is_array - verifica si es un arreglo

var_dump(is_array($edades));

# explode - Separa cadenas a un arreglo

$lista_de_frutas = "Freza, cereza, manzana";
$lista_de_frutas_arreglo = explode("," , $lista_de_frutas );

var_dump($lista_de_frutas_arreglo);

# Implode - Convierte de un arreglo a un string

$lista_de_numeros = implode("," , $edades);

echo $lista_de_numeros;

#array_keys - entrega todas las claves de un arreglo

$keys = array_keys($lista_de_frutas_arreglo);

var_dump( $keys );



?> 