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
 
 /* Sintaxis */

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

echo getPokemon(rand(0,3));
 
 ?>    