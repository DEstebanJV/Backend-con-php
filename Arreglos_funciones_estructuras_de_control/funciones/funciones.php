<h1>Aprende a reutilizar tu codigo</h1>
<p>Por medio de las funciones podemos darle una reutilizaciona nuestro codigo</p>
<b>¿Que es una funcion?</b>
<p>Podemos hacer la analogica: 
    Podemos verlas como un chef magico al cual tu le das los ingredientes y te devuelve un pastel ya hecho
</p>
<p>En resumen</p>
<p>una funcion nos sirve para separar todo un bloque de codigo ponerle
     un nombre y utilizarla cuantas veces queramos sin preocuptarnos por como trabaja por dentro</p>


 <?php 
 
# Nota Los valores enviado en los parentesis de la funcion, Son llamados parametros

 function  getPokemon(int $pokeElegido) : string {
    $pokemon = array("Pikachu", "Charmander", "Squirtle", "Bulbasaur");

    switch($pokeElegido){
        case 0:
            return $pokemon[0];
        break;    
        case 1:
            return $pokemon[1];
        break;   
        case 2:
            return $pokemon[2];
        break; 
        case 3:
            return $pokemon[3];
        break;
        default:
        return "No es un pokemon de la lista";
    }
 }  

 getPokemon(rand(0,3)); // para mostrar agrega el echo 
 
 ?>    


<h2>Profundizando en parametros</h2>

<?php 
// adicionando valores por defecto
function suma($a = 0, $b = 0){

    return "la suma de $a + $b es ". $a + $b . "<br>";

}

suma(7,89);

# valores por defecto
suma();

#pasando un solo valor

suma(9);

#juntar arreglos

$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];


$resultado = [...$arreglo1, ...$arreglo2];

# print_r($resultado);


#Aplicado a funciones 
$numeros = [1,2,3];

function sumaArreglos($a, $b){
    return "la suma de $a + $b es ". $a + $b . "<br>";
}

suma(...$numeros);

#forma inversa parametros de forma dinamica

function sumaInfinita(...$params){
  
    return "la suma de los numeros es ". array_sum($params) . "<br>";
}

echo sumaInfinita(1,2,1,1);
?>