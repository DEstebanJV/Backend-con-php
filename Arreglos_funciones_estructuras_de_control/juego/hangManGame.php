<?php

#Para iniciar el juego incialo desde la terminal llamando el archivo php hangmangame.php

function clear()
{
    if (PHP_OS == "WINNT") {
        system("cls");
    } else {
        system("clear");
    }
}

$possibleWords = ["bebida", "Cara", "Perra", "Manzana", "pera"];

const MAXATTEMPS =  6;

echo "Juego del ahorcado \n";

#Inicializar juego

$choseenWord = $possibleWords[rand(0, 4)];
$choseenWord = strtolower($choseenWord);
$wordLength = strlen($choseenWord); // nos menciona cuanto mide la palabra
$discoverLetters = str_pad("", $wordLength, "_");
$failedAttemps = 0;

do {

    echo "palabra de $wordLength letras \n \n ";
    echo $discoverLetters;

    #Pedimos al usuario que escriba 

    $player_letter = readline("\n Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($choseenWord, $player_letter)) {
        $offset = 0;
        // verificamos todas las ocurrencias de esta letra para reemplazarla
        while (
            ($letterPosition = strpos($choseenWord, $player_letter, $offset)) !== FALSE
        ) {
            $discoverLetters[$letterPosition] = $player_letter;
            $offset = $letterPosition + 1;
        }
    } else {
        $failedAttemps++;
        echo "letra incorrecta <br> te quedan " . MAXATTEMPS - $failedAttemps . " Intentos";
        sleep(1);
        clear();
        
    }

    clear();

} while ($failedAttemps < MAXATTEMPS && $discoverLetters != $choseenWord);

if($discoverLetters == $choseenWord){
    echo "Ganaste \n";
}else{
    echo "Perdiste \n";
    echo "la palabra era $choseenWord";
}




?>