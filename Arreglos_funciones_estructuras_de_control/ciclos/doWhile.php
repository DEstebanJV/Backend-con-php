<h1> Ciclo Do while</h1>
<p>Este ciclo es exactamente igual que el ciclo while, tambien
    recibe una condicion y puedes cambiar el valor de tu variable</p>
<p>La diferencia es que este ciclo se ejecuta almenos una vez sin 
    importar si la condicion es verdadera o falsa</p>

<?php 

$contador = 1;

do {
    Echo "Esto se ejecuta almenos una vez";
    echo "<br> Actualmente el contador tiene como valor: $contador";
    $contador ++;
} while ($contador < 0);

//Prueba por terminal

/* $numeroSecreto = 7;
$numeroIngresado;
do{
    $numeroIngresado = readline("Adivina un numero entre 10 y 0 ");
    if($numeroSecreto == $numeroIngresado){
        echo "felicidades has adivinado el numero";
    }else{
        echo "lo siento ese no es vuelve a intentar";
    }
    
} while ($numeroIngresado != $numeroSecreto); */


?> 