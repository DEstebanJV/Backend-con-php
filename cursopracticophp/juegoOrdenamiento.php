<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Ordenamiento</title>
    <style>
        .correcta {
            color: green;
        }
        .incorrecta {
            color: red;
        }
        .no-ingresada {
            color: orange;
        }
    </style>
</head>
<body>

<h1>Creación del JUEGO</h1>
<p>Desarrollar una aplicación que muestra una lista de palabras que están en desorden,
    el usuario debe ordenar las letras para encontrar la palabra correcta e ingresarla.
    Después de enviar sus resultados, el usuario podrá ver si acertó o falló y cuál era la palabra correcta.
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
            $resultados[] = [
                'resultado' => $esCorrecta ? "Correcta" : "Incorrecta",
                'clase' => $esCorrecta ? "correcta" : "incorrecta"
            ];
        } else {
            $resultados[] = [
                'resultado' => "No ingresada",
                'clase' => "no-ingresada"
            ];
        }
    }
    echo "<h2>Resultados:</h2>";
    foreach ($resultados as $index => $resultado) {
        echo "<p class='" . $resultado['clase'] . "'>Palabra " . ($index + 1) . ": " . $resultado['resultado'] . "</p>";
    }
}

?>

