<h1>Creacion del JUEGO</h1>

<p>Desarrollar una aplicacion que muestra una lista de palabras que estan en desorden,
    el usuario debe ordenar las letras para encontrar la palabra correcta e ingresarla
    despues de enviar sus resultados el usuario podra ver si acerto o fallo y cual era la palabra correcta
</p>

<h1>Adivina la palabra</h1>
<?php
#FORM
$palabrasCorrectas = ["sol", "luna", "cielo","campo"];
$palabrasDesordenadas = [];

foreach ($palabrasCorrectas as $palabra) {
    $palabraDesordenada = str_shuffle($palabra); // Desordenar la palabra
    array_push($palabrasDesordenadas, $palabraDesordenada); // Agregar la palabra desordenada al arreglo
}

$form = "<form action='juegoOrdenamiento.php' method='post'>";
foreach ($palabrasDesordenadas as $index => $palabraDesordenada) {
    $form .= "<label>Palabra " . ($index + 1) . ": $palabraDesordenada</label> <br>";
    $form .= "<input type='text' name='palabra$index'><br>";
}
$form .= "<button type='submit'>Enviar</button>";
$form .= "</form>";
echo $form;

?>
<?php

function validadorPalabra($palabra, $palabraCorrecta) {
    return $palabra === $palabraCorrecta;
}

// Ejemplo de uso
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultados = [];
    for ($i = 0; $i < count($palabrasCorrectas); $i++) {
        if (isset($_POST["palabra$i"]) && !empty($_POST["palabra$i"])) {
            $inputPalabra = $_POST["palabra$i"];
            $esCorrecta = validadorPalabra($inputPalabra, $palabrasCorrectas[$i]);
            $resultados[] = $esCorrecta ? "Correcta" : "Incorrecta";
        } else {
            $resultados[] = "No ingresada";
        }
    }

    foreach ($resultados as $index => $resultado) {
        echo "Palabra " . ($index + 1) . ": " . $resultado . "<br>";
    }
}

?>

